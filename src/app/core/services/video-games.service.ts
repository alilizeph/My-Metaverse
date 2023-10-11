import { Injectable } from '@angular/core';

import { VideoGame } from '../models/video-game.model';
import { MyMetaverseService } from './my-metaverse.service';

@Injectable({
  providedIn: 'root'
})
export class VideoGamesService {

  selectedId: number = 0;
  currentVideoGame: VideoGame | null = null;

  constructor(private myMetaverseService: MyMetaverseService) {}

  getAllVideoGames(): VideoGame[] {
    return this.myMetaverseService.getAllVideoGames();
  }

  getVideoGameById(videoGameId: number): VideoGame {
    return this.myMetaverseService.getVideoGameById(videoGameId);
  }

  getCurrentVideoGame(): VideoGame | null {
    if (this.currentVideoGame)
      return this.currentVideoGame;
    else
      return null;
  }

  setCurrentVideoGame(videoGame: VideoGame): void {
    if (videoGame)
      this.currentVideoGame = videoGame;
    else
      this.currentVideoGame = null;
  }

  length(): number {
    return this.myMetaverseService.getAllVideoGames().length;
  }

  addVideoGame(formValue: {name: string, platform: number, description: string, advice: string, imgBox: string, imgTheme: string, grade: number, genders: number[], releaseDate: Date, averagePrice: number, disponibility: boolean, link: string}) {
    const videoGame: VideoGame = {
      ...formValue,
      id: this.length() + 1,
      nbLikes: 0,
      averageUsersGrade: 0
    };

    this.myMetaverseService.addVideoGame(videoGame);
  }

  getRandomVideoGame() {
    return this.myMetaverseService.getRandomVideoGame();
  }

  VideoGameGendersCorresponding(filter: number) {
    let videoGamesCorresponding = [];
    for (let videoGame of this.getAllVideoGames()) {
      let isCorresponding = false;
      for (let gender of videoGame.genders) {
        if (gender == filter) {
          isCorresponding = true;
        }
      }
      if (isCorresponding)
        videoGamesCorresponding.push(videoGame);
    }

    return videoGamesCorresponding;
  }

  changeCurrentVideoGame(videoGame: VideoGame) {
    if (videoGame)
      this.currentVideoGame = videoGame;
  }

  calculateAverageUsersGrade(seletectedId: number): void {
    this.myMetaverseService.calculateAverageUsersGrade(seletectedId);
  }
}
