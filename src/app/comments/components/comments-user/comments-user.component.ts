import { Component } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { Observable, map } from 'rxjs';
import { Comments } from 'src/app/core/models/comments.model';
import { User } from 'src/app/core/models/user.model';
import { VideoGame } from 'src/app/core/models/video-game.model';
import { CommentsService } from 'src/app/core/services/comments.service';
import { MyMetaverseService } from 'src/app/core/services/my-metaverse.service';
import { UsersService } from 'src/app/core/services/user.service';
import { VideoGamesService } from 'src/app/core/services/video-games.service';

@Component({
  selector: 'app-comments-user',
  templateUrl: './comments-user.component.html',
  styleUrls: ['./comments-user.component.scss']
})
export class CommentsUserComponent {
  commentForm!: FormGroup;
  commentPreview$!: Observable<Comments>;
  tableOneToHundred!: number[];
  isAnimated: boolean = false;
  currentUser: User | null = null;
  currentVG: VideoGame | null = null;

  tmp_user: User | null = null;

  isSentComment: boolean = false;

  constructor(private formBuilder: FormBuilder,
    private commentsService: CommentsService,
    private usersSeervice: UsersService,
    private videoGamesService: VideoGamesService,
    private myMetaverseService: MyMetaverseService,
    private router: Router) { }


  ngOnInit(): void {
    this.commentForm = this.formBuilder.group({
      title: [null, [Validators.required]],
      content: [null, [Validators.required]],
      grade: [null, [Validators.required]]
    });

    setTimeout(() => {
      this.isAnimated = true;
    }, 850);

    if (this.videoGamesService.getCurrentVideoGame())
      this.currentVG = this.videoGamesService.getCurrentVideoGame();

    if (this.usersSeervice.isUserConnected())
      this.currentUser = this.usersSeervice.getCurrentUser();

    this.commentPreview$ = this.commentForm.valueChanges.pipe(
      map(formValue => ({
        ...formValue,
        id: this.commentsService.length() + 1,
        postDate: new Date(),
        videoGame: this.currentVG,
        user: this.currentUser
      }))
    );

    this.tableOneToHundred = Array(100)
      .fill(0)
      .map((x, i) => i + 1);
    //console.log(this.tableOneToHundred);
  }

  onSubmitMyComment() {
    if (this.currentUser && this.currentVG) {
      let new_com = new Comments(this.myMetaverseService.getAllComments().length + 1, this.currentUser, this.currentVG, this.commentForm.value["title"], this.commentForm.value["content"], this.commentForm.value["grade"], new Date());
      this.myMetaverseService.addCommentUser(new_com);

      setTimeout(() => {
        this.isSentComment = true;
      }, 850);

      let title = document.getElementById("title") as HTMLInputElement;
      let content = document.getElementById("content") as HTMLInputElement;
      let grade = document.getElementById("grade") as HTMLInputElement;

      title.value = "";
      content.value = "";
      grade.value = "";
      this.router.navigateByUrl(`/videogames/${this.currentVG.id}`);
    } else {
      throw new Error("Erreur de connexion et/ou avec le jeu vidéo courrant");
    }

  }
}
