import { Component, Input, OnInit } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { VideoGame } from '../../../core/models/video-game.model';
import { VideoGamesService } from '../../../core/services/video-games.service';

@Component({
  selector: 'app-video-game-access',
  templateUrl: './video-game-access.component.html',
  styleUrls: ['./video-game-access.component.scss']
})
export class VideoGameAccessComponent implements OnInit {
  @Input() videoGame!: VideoGame;
  isAnimated: boolean = false;


  constructor(private videoGamesService: VideoGamesService,
    private router: Router,
    private route: ActivatedRoute) {

  }

  ngOnInit(): void {
    setTimeout(() => {
      this.isAnimated = true;
    }, 850);
  }

  accessToVideoGame():void {
    this.router.navigateByUrl(`videoGames/${this.videoGame.id}`);
  }
}
