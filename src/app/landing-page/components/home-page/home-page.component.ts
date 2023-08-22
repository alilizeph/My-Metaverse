import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { VideoGamesService } from '../../../core/services/video-games.service';
import { VideoGame } from '../../../core/models/video-game.model';
import { AuthentificationService } from '../../../core/services/authentification.service';
import { Observable } from 'rxjs';

@Component({
  selector: 'app-home-page',
  templateUrl: './home-page.component.html',
  styleUrls: ['./home-page.component.scss']
})
export class HomePageComponent implements OnInit {
  videoGames: VideoGame[] = [];

  randomIndices: number[] = [];
  isAnimated: boolean = false;

  constructor(private router: Router,
    private videoGamesService: VideoGamesService,
    private authentificationService: AuthentificationService) {

  }

  ngOnInit(): void {
    const allVideoGames = this.videoGamesService.getAllVideoGames();
    this.generateRandomVideoGame(4);
    this.videoGames = this.randomIndices.map(index => allVideoGames[index]);
    setTimeout(() => {
      this.isAnimated = true;
    }, 850);
  }

  navigateToAdvices() {
    this.router.navigateByUrl('/videoGames');
  }

  generateRandomVideoGame(count: number): void {
    while (this.randomIndices.length < count) {
      let randomIndex = Math.floor(Math.random() * this.videoGamesService.length());
      if (!this.randomIndices.includes(randomIndex))
        this.randomIndices.push(randomIndex);
    }
  }
}