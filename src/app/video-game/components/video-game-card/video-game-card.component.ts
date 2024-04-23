import { Component, Input, OnInit } from '@angular/core';
import { VideoGame } from '../../../core/models/video-game.model';
import { ActivatedRoute, Router } from '@angular/router';

import { VideoGamesService } from '../../../core/services/video-games.service';
import { CommentsService } from 'src/app/core/services/comments.service';
import { Comments } from 'src/app/core/models/comments.model';
import { UsersService } from 'src/app/core/services/user.service';
import { User } from 'src/app/core/models/user.model';
import { Observable } from 'rxjs';
import { MyMetaverseService } from 'src/app/core/services/my-metaverse.service';

@Component({
  selector: 'app-video-game-card',
  templateUrl: './video-game-card.component.html',
  styleUrls: ['./video-game-card.component.scss']
})
export class VideoGameCardComponent implements OnInit {
  @Input() videoGame!: VideoGame;
  comments: Comments[] = [];
  isAnimated: boolean = false;
  averageUsersGrade$!: Observable<number>;

  currentUser: User | null = null;
  onLike: boolean = false;

  constructor(private videoGamesService: VideoGamesService,
    private router: Router,
    private commentsService: CommentsService,
    private usersService: UsersService,
    private route: ActivatedRoute,
    private myMetaverseService: MyMetaverseService) {

    this.averageUsersGrade$ = this.myMetaverseService.getAverageUsersGradeAsObservable$();
  }

  ngOnInit(): void {
    setTimeout(() => {
      this.isAnimated = true;
    }, 850);

    this.currentUser = this.usersService.getCurrentUser();

    const videoGameId = +this.route.snapshot.params['id'];
    this.videoGame = this.videoGamesService.getVideoGameById(videoGameId);
    this.videoGamesService.changeCurrentVideoGame(this.videoGame);

    this.myMetaverseService.calculateAverageUsersGrade(this.videoGame.id);

    setInterval(() => {
      this.actualizeCommentsTable();
    }, 750);

  }

  isConnected(): boolean {
    return this.usersService.isUserConnected();
  }

  returnToVideoGameList(): void {
    this.router.navigateByUrl(`/videogames`);
  }


  actualizeCommentsTable() {
    this.comments = this.commentsService.getCommentByVideoGameId(this.videoGame.id);
  }

  onAddLikes() {
    let iconUp = document.getElementsByClassName('fa-thumbs-up')[0];
    let iconDown = document.getElementsByClassName('fa-thumbs-down')[0];
    //let nbs = document.getElementsByClassName('likes-nb')[0];

    if(this.currentUser) {
      this.videoGame.likes.likes++;
      this.videoGame.likes.users.push(this.currentUser);

      this.onLike = true;
      iconUp.classList.remove("fa-thumb-return");
      iconUp.classList.add("fa-thumb-remove");
      iconDown.classList.add("fa-thumb-return");
      iconDown.classList.remove("fa-thumb-remove");

    }
  }

  onRemoveLikes() {
    let iconUp = document.getElementsByClassName('fa-thumbs-up')[0];
    let iconDown = document.getElementsByClassName('fa-thumbs-down')[0];
    let nbs = document.getElementsByClassName('likes-nb')[0];

    if(this.currentUser) {
      nbs.classList.add('likes-nb-add');
      this.videoGame.likes.likes--;
      const index = this.videoGame.likes.users.findIndex((user) => {
        if(this.currentUser)
          user.id === this.currentUser.id;
      });
      this.videoGame.likes.users.splice(index, 1);

      this.onLike = false;
      iconDown.classList.remove("fa-thumb-return");
      iconDown.classList.add("fa-thumb-remove");
      iconUp.classList.add("fa-thumb-return");
      iconUp.classList.remove("fa-thumb-remove");
    }
  }
}
