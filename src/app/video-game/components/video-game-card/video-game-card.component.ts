import { Component, Input, OnInit } from '@angular/core';
import { VideoGame } from '../../../core/models/video-game.model';
import { ActivatedRoute, Router } from '@angular/router';
import { VideoGamesService } from '../../../core/services/video-games.service';
import { AuthentificationService } from '../../../core/services/authentification.service';

@Component({
  selector: 'app-video-game-card',
  templateUrl: './video-game-card.component.html',
  styleUrls: ['./video-game-card.component.scss']
})
export class VideoGameCardComponent implements OnInit {
  @Input() videoGame!: VideoGame;
  isAnimated: boolean = false;

  constructor(private videoGamesService: VideoGamesService,
    private router: Router,
    private route: ActivatedRoute,
    private authentificationService: AuthentificationService) {

  }

  ngOnInit(): void {
    const videoGameId = +this.route.snapshot.params['id'];
    this.videoGame = this.videoGamesService.getVideoGameById(videoGameId);

    setTimeout(() => {
      this.isAnimated = true;
    }, 850);
  }

  returnToVideoGameList() {
    this.router.navigateByUrl(`/videoGames`);
  }
}
