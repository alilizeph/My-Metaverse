import { Component, Input, OnInit } from '@angular/core';
import { Router } from '@angular/router';

import { VideoGame } from '../../../core/models/video-game.model';


@Component({
  selector: 'app-video-game-access',
  templateUrl: './video-game-access.component.html',
  styleUrls: ['./video-game-access.component.scss']
})
export class VideoGameAccessComponent implements OnInit {
  @Input() videoGame!: VideoGame;
  isAnimated: boolean = false;


  constructor(private router: Router) { }

  ngOnInit(): void {
    setTimeout(() => {
      this.isAnimated = true;
    }, 850);
  }

  accessToVideoGame():void {
    this.router.navigateByUrl(`videogames/${this.videoGame.id}`);
  }
}
