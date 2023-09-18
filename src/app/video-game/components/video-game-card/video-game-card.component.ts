import { Component, Input, OnInit } from '@angular/core';
import { VideoGame } from '../../../core/models/video-game.model';
import { ActivatedRoute, Router } from '@angular/router';

import { VideoGamesService } from '../../../core/services/video-games.service';
import { CommentsService } from 'src/app/core/services/comments.service';
import { Comments } from 'src/app/core/models/comments.model';

@Component({
  selector: 'app-video-game-card',
  templateUrl: './video-game-card.component.html',
  styleUrls: ['./video-game-card.component.scss']
})
export class VideoGameCardComponent implements OnInit {
  @Input() videoGame!: VideoGame;
  comments: Comments[] = [];
  isAnimated: boolean = false;
  averageUsersGrade: number = 0;

  constructor(private videoGamesService: VideoGamesService,
    private router: Router,
    private commentsService: CommentsService,
    private route: ActivatedRoute) { }

  ngOnInit(): void {
    setTimeout(() => {
      this.isAnimated = true;
    }, 850);

    const videoGameId = +this.route.snapshot.params['id'];
    this.videoGame = this.videoGamesService.getVideoGameById(videoGameId);
    this.videoGamesService.changeCurrentVideoGame(this.videoGame);

    this.comments = this.commentsService.getCommentByVideoGameId(this.videoGame.id);
    this.averageUsersGrade = this.videoGamesService.calculateAverageUsersGrade(this.videoGame.id);
    this.videoGame.averageUsersGrade = this.videoGamesService.calculateAverageUsersGrade(this.videoGame.id);
  }

  returnToVideoGameList() {
    this.router.navigateByUrl(`/videogames`);
  }

}
