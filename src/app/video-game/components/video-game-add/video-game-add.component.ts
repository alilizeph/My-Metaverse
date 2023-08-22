import { Component, OnInit,  } from '@angular/core';
import { FormGroup, FormBuilder, Validators } from '@angular/forms';
import { VideoGame } from '../../../core/models/video-game.model';
import { Observable, map } from 'rxjs';
import { VideoGamesService } from '../../../core/services/video-games.service';
import { Router } from '@angular/router';
import { AuthentificationService } from '../../../core/services/authentification.service';

@Component({
  selector: 'app-video-game-add',
  templateUrl: './video-game-add.component.html',
  styleUrls: ['./video-game-add.component.scss']
})
export class VideoGameAddComponent implements OnInit {
  videoGameForm!: FormGroup;
  videoGamePreview$!: Observable<VideoGame>;

  constructor(private formBuilder: FormBuilder,
    private VideoGamesService: VideoGamesService,
    private router: Router,
    private authentificationService: AuthentificationService) {
    this.videoGameForm = this.formBuilder.group({
      nom: [null, [Validators.required]],
      console: [null, [Validators.required]],
      description: [null, [Validators.required]],
      avis: [null, [Validators.required]],
      imgBoite: [null, [Validators.required]],
      imgTheme: [null, [Validators.required]],
      note: [null, [Validators.required]],
      dateSortie: [null, [Validators.required]],
      prixMoyen: [null, [Validators.required]],
      disponibilite: [null, [Validators.required]]
    });
  }

  ngOnInit(): void {
    this.videoGamePreview$ = this.videoGameForm.valueChanges;

    this.videoGamePreview$.pipe(
      map(formValue => ({
        ...formValue,
        id: this.VideoGamesService.length()
      }))
    );
  }

  onSubmitForm() {
    this.VideoGamesService.addVideoGame(this.videoGameForm.value);
    this.router.navigateByUrl("/videoGames");
  }
}
