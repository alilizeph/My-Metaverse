import { Component, OnInit, Input } from '@angular/core';
import { VideoGamesService } from '../../../core/services/video-games.service';
import { VideoGame } from '../../../core/models/video-game.model';

@Component({
  selector: 'app-video-game-carrousel-card',
  templateUrl: './video-game-carrousel-card.component.html',
  styleUrls: ['./video-game-carrousel-card.component.scss']
})
export class VideoGameCarrouselCardComponent implements OnInit {

  @Input() videoGame!: VideoGame;

  constructor(private videoGamesService: VideoGamesService) { }

  ngOnInit(): void {

  }
}
