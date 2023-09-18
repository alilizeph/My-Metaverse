import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { Observable, map } from 'rxjs';
import { Comments } from 'src/app/core/models/comments.model';
import { User } from 'src/app/core/models/user.model';
import { CommentsService } from 'src/app/core/services/comments.service';
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

  constructor(private formBuilder: FormBuilder,
    private commentsService: CommentsService,
    private usersSeervice: UsersService,
    private videoGamesService: VideoGamesService) { }


  ngOnInit(): void {
    this.commentForm = this.formBuilder.group({
      name: [null],
      title: [null, [Validators.required]],
      comment: [null, [Validators.required]],
      grade: [null, [Validators.required]]
    });

    setTimeout(() => {
      this.isAnimated = true;
    }, 850);

    this.currentUser = this.usersSeervice.getCurrentUser();

    this.commentPreview$ = this.commentForm.valueChanges.pipe(
      map(formValue => ({
        ...formValue,
        id: this.commentsService.length() + 1,
        postDate: new Date(),
        videoGame: this.videoGamesService.currentVideoGame,
        user: this.usersSeervice.getCurrentUser()
      }))
    );

    this.tableOneToHundred = Array(100)
      .fill(0)
      .map((x, i) => i + 1);
    console.log(this.tableOneToHundred);
  }

  onSubmitMyComment() {

  }
}
