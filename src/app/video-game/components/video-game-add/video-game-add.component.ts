import { Component, OnInit,  } from '@angular/core';
import { FormGroup, FormBuilder, Validators } from '@angular/forms';
import { VideoGame } from '../../../core/models/video-game.model';
import { Observable, map } from 'rxjs';
import { VideoGamesService } from '../../../core/services/video-games.service';
import { Router } from '@angular/router';
import { UsersService } from 'src/app/core/services/user.service';
import { User } from 'src/app/core/models/user.model';

@Component({
  selector: 'app-video-game-add',
  templateUrl: './video-game-add.component.html',
  styleUrls: ['./video-game-add.component.scss']
})
export class VideoGameAddComponent implements OnInit {
  videoGameForm!: FormGroup;
  videoGamePreview$!: Observable<VideoGame>;
  availableGenders = [
    { id: 1, gender: "RPG" },
    { id: 2, gender: "Aventure" },
    { id: 3, gender: "Fantastique" },
    { id: 4, gender: "Création" },
    { id: 5, gender: "Open World" },
    { id: 6, gender: "Gestion" },
    { id: 7, gender: "Réflexion" },
    { id: 8, gender: "Écologie" },
    { id: 9, gender: "Santé" },
    { id: 10, gender: "Survie" },
    { id: 11, gender: "Tactique" },
    { id: 12, gender: "Stratégie "}
  ]

  private admin: User | null = null;

  constructor(private formBuilder: FormBuilder,
    private VideoGamesService: VideoGamesService,
    private router: Router,
    private usersService: UsersService) {
    this.videoGameForm = this.formBuilder.group({
      name: [null, [Validators.required]],
      platform: [null, [Validators.required]],
      description: [null, [Validators.required]],
      advice: [null, [Validators.required]],
      imgBox: [null, [Validators.required]],
      imgTheme: [null, [Validators.required]],
      grade: [null, [Validators.required]],
      releaseDate: [null, [Validators.required]],
      averagePrice: [null, [Validators.required]],
      disponibility: [null, [Validators.required]]
    });
  }

  ngOnInit(): void {
    if (!this.usersService.isUserConnected() && this.usersService.isUserAdmin())
      this.router.navigateByUrl('/');
    else
      this.admin = this.usersService.getCurrentUser();

    this.videoGamePreview$ = this.videoGameForm.valueChanges.pipe(
      map(formValue => ({
        ...formValue,
        id: this.VideoGamesService.length() + 1
      }))
    );
  }

  onSubmitForm() {
    this.VideoGamesService.addVideoGame(this.videoGameForm.value);
    this.router.navigateByUrl("/videogames");
  }
}
