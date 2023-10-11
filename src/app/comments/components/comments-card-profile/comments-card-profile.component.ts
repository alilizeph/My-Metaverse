import { Component, Input, OnInit } from '@angular/core';
import { FormBuilder, FormControl, FormGroup, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { Comments } from 'src/app/core/models/comments.model';
import { User } from 'src/app/core/models/user.model';
import { VideoGame } from 'src/app/core/models/video-game.model';
import { CommentsService } from 'src/app/core/services/comments.service';
import { MyMetaverseService } from 'src/app/core/services/my-metaverse.service';
import { UsersService } from 'src/app/core/services/user.service';
import { VideoGamesService } from 'src/app/core/services/video-games.service';

@Component({
  selector: 'app-comments-card-profile',
  templateUrl: './comments-card-profile.component.html',
  styleUrls: ['./comments-card-profile.component.scss']
})
export class CommentsCardProfileComponent implements OnInit {
  @Input() comment!: Comments;
  isAnimated: boolean = false;

  setComForm!: FormGroup;
  currentUser: User | null = null;
  currentVG: VideoGame | null = null;
  isSentChange: boolean = false;
  tableOneToHundred!: number[];
  isOpenedForm: boolean = false;

  isUserExists: boolean = false;

  constructor(private commentsService: CommentsService,
    private formBuilder: FormBuilder,
    private videoGamesService: VideoGamesService,
    private usersService: UsersService,
    private myMetaverseService: MyMetaverseService,
    private router: Router) { }

  ngOnInit(): void {
    setTimeout(() => {
      this.isAnimated = true;
    }, 850);

    this.isUserExists = this.myMetaverseService.isUserExists(this.comment.user);

    this.setComForm = this.formBuilder.group({
      title: [this.comment.title, [Validators.required]],
      content: [this.comment.content, [Validators.required]],
      grade: [this.comment.grade, [Validators.required]]
    });


    if (this.usersService.getCurrentUser())
      this.currentUser = this.usersService.getCurrentUser();

    if (this.videoGamesService.getCurrentVideoGame())
      this.currentVG = this.videoGamesService.getCurrentVideoGame();

    this.tableOneToHundred = Array(100).fill(0).map((x, i) => i + 1);

  }

  accessToPublicProfile(usersId: number): void {
    this.router.navigateByUrl(`user/public/${usersId}`);
  }

  openSetCommentForm(): void {
    let commentbox = document.getElementsByClassName("comment-card")[0];
    this.isOpenedForm = true;

    commentbox.classList.remove("form-disappeared");
    commentbox.classList.add("form-appeared");
  }

  closeSetCommentForm(): void {
    let commentbox = document.getElementsByClassName("comment-card")[0];
    this.isOpenedForm = false;
    commentbox.classList.remove("form-appeared");
    commentbox.classList.add("form-disappeared");
  }

  onSubmitSetComment(): void {
    if (this.currentUser && this.currentVG) {
      let new_com = new Comments(this.myMetaverseService.getAllVideoGames().length + 1, this.currentUser, this.currentVG, this.setComForm.get("title")?.value, this.setComForm.get("content")?.value, this.setComForm.get("grade")?.value, new Date());
      let new_comId = new_com.id;

      const gradeDifference = new_com.grade - this.comment.grade;

      if (new_comId && this.currentUser) {
        this.myMetaverseService.setCommentsAllContents(new_comId, this.setComForm.get("title")?.value, this.setComForm.get("content")?.value, this.setComForm.get("grade")?.value);
        this.isOpenedForm = false;
        this.isSentChange = true;

        this.myMetaverseService.getCommentsTitleAsObservable$().subscribe(title => {
          this.comment.title = title;
        });

        this.myMetaverseService.getCommentsContentAsObservable$().subscribe(content => {
          this.comment.content = content;
        });

        this.myMetaverseService.getCommentsGradeAsObservable$().subscribe(grade => {
          this.comment.grade = grade;
        });

        this.myMetaverseService.updateAverageUsersGrade(this.currentVG.id, gradeDifference);

      }

      this.router.navigateByUrl(`/videogames/${this.currentVG.id}`);
    } else {
      throw new Error("Un problème est survenu à l'envoi de votre modification de commentaire");
    }
  }
}
