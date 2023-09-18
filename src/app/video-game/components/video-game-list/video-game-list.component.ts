import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup } from '@angular/forms';
import { VideoGame } from '../../../core/models/video-game.model';
import { VideoGamesService } from '../../../core/services/video-games.service';
import { Observable, filter } from 'rxjs';


@Component({
  selector: 'app-video-game-list',
  templateUrl: './video-game-list.component.html',
  styleUrls: ['./video-game-list.component.scss']
})
export class VideoGameListComponent implements OnInit {
  videoGameList: VideoGame[] = [];

  selectedPlatformId: number = 0;
  genderSelected: number = 0;

  filterByConsoleActivated: boolean = false;
  filterByGenderActivated: boolean = false;

  constructor(private videoGamesService: VideoGamesService) { }

  ngOnInit(): void {

    this.resetFilters();
  }

  openFilters() {
    let closeBtn = document.getElementsByClassName("open-filter");
    let filters = document.getElementsByClassName("filter");
  }

  closeFilters() {
    let openBtn = document.getElementsByClassName("close-filter");
    let filters = document.getElementsByClassName("filter");
  }

  resetFilters() {
    this.videoGameList = this.videoGamesService.getAllVideoGames();
    this.filterByConsoleActivated = false;
    this.filterByGenderActivated = false;
  }

      // FEW BASICS FILTERS
  filterByName() {
    return this.videoGameList.sort((a, b) => a.name.localeCompare(b.name));
  }

  filterByPriceDescending() {
    return this.videoGameList.sort((a, b) => { return a.averagePrice - b.averagePrice; });
  }

  filterByPriceAscending() {
    return this.videoGameList.sort((a, b) => { return b.averagePrice - a.averagePrice; });
  }

  filterByGradeDescending() {
    return this.videoGameList.sort((a, b) => { return a.grade - b.grade; });
  }

  filterByGradeAscending() {
    return this.videoGameList.sort((a, b) => { return b.grade - a.grade; });
  }

  get videoGamesFilteredByPlatformId(): VideoGame[] {
    this.genderSelected = 0;
    this.filterByGenderActivated = false;

    if (this.selectedPlatformId === 0) {
      this.filterByConsoleActivated = false;
      return this.videoGameList;
    } else {
      this.filterByConsoleActivated = true;
      return this.videoGameList.filter(videoGame => videoGame.platform == this.selectedPlatformId);
    }
  }

  get videoGamesFilteredByGenders(): VideoGame[] {
    this.selectedPlatformId = 0;
    this.filterByConsoleActivated = false;

    if (this.genderSelected === 0) {
      this.filterByGenderActivated= false;
      return this.videoGameList;
    } else {
      this.filterByGenderActivated = true;

      return this.videoGamesService.VideoGameGendersCorresponding(this.genderSelected);
    }
  }
}
