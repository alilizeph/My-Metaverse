import { Component, OnInit } from '@angular/core';
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
  selector: 'app-comments-form',
  templateUrl: './comments-form.component.html',
  styleUrls: ['./comments-form.component.scss']
})
export class CommentsFormComponent implements OnInit {
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
    private videoGamesService: VideoGamesService,
    private myMetaverseService: MyMetaverseService,
    private router: Router) { }


  ngOnInit(): void {
    this.commentForm = this.formBuilder.group({
      name: [null, [Validators.required]],
      title: [null, [Validators.required]],
      content: [null, [Validators.required]],
      grade: [null, [Validators.required]]
    });

    setTimeout(() => {
      this.isAnimated = true;
    }, 850);

    if (this.videoGamesService.getCurrentVideoGame())
      this.currentVG = this.videoGamesService.getCurrentVideoGame();

    this.tmp_user = new User(999, "", "", "Indéterminé", "", this.commentForm.value["name"], new Date(), "", "", "");

    this.commentPreview$ = this.commentForm.valueChanges.pipe(
      map(formValue => ({
        ...formValue,
        id: this.commentsService.length() + 1,
        postDate: new Date(),
        videoGame: this.currentVG,
        user: this.tmp_user
      }))
    );

    this.tableOneToHundred = Array(100)
      .fill(0)
      .map((x, i) => i + 1);
    //console.log(this.tableOneToHundred);
  }

  onSubmitMyComment() {

    if (this.videoGamesService.getCurrentVideoGame())
      this.currentVG = this.videoGamesService.getCurrentVideoGame();

    if (this.currentVG && this.tmp_user) {
      if (this.commentForm.valid) {
        let new_com = new Comments(this.myMetaverseService.getAllComments().length + 1, this.tmp_user, this.currentVG, this.commentForm.value["title"], this.commentForm.value["content"], this.commentForm.value["grade"], new Date());
        this.myMetaverseService.addCommentUnknown(new_com);
        console.log(this.myMetaverseService.getAllComments());
        this.isSentComment = true;

        let name = document.getElementById("name") as HTMLInputElement;
        let title = document.getElementById("title") as HTMLInputElement;
        let content = document.getElementById("content") as HTMLInputElement;
        let grade = document.getElementById("grade") as HTMLInputElement;

        name.value = "";
        title.value = "";
        content.value = "";
        grade.value = "";
      } else {
        this.isSentComment = false;

        alert("Erreur avec votre commentaire ! Veuillez remplir tous les champs obligatories.");

        let name = document.getElementById("name") as HTMLInputElement;
        let title = document.getElementById("title") as HTMLInputElement;
        let content = document.getElementById("content") as HTMLInputElement;
        let grade = document.getElementById("grade") as HTMLInputElement;

        name.value = "";
        title.value = "";
        content.value = "";
        grade.value = "";
      }
      this.router.navigateByUrl(`/videogames/${this.currentVG.id}`);
    } else {
      throw new Error("Erreur avec le jeu vidéo courrant");
    }

  }
}
