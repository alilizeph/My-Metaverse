import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule } from '@angular/router';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';


import { VideoGameCardComponent } from './components/video-game-card/video-game-card.component';
import { VideoGameAccessComponent } from './components/video-game-access/video-game-access.component';
import { VideoGameAddComponent } from './components/video-game-add/video-game-add.component';
import { VideoGameListComponent } from './components/video-game-list/video-game-list.component';
import { VideoGameCarrouselCardComponent } from './components/video-game-carrousel-card/video-game-carrousel-card.component';
import { VideoGameRoutingModule } from './video-game-routing.module';



@NgModule({
  declarations: [
    VideoGameCardComponent,
    VideoGameAccessComponent,
    VideoGameAddComponent,
    VideoGameListComponent,
    VideoGameCarrouselCardComponent
  ],
  imports: [
    CommonModule,
    RouterModule,
    FormsModule,
    ReactiveFormsModule,

    VideoGameRoutingModule
  ],
  exports: [
    VideoGameCardComponent,
    VideoGameAccessComponent,
    VideoGameAddComponent,
    VideoGameListComponent,
    VideoGameCarrouselCardComponent,
  ]
})
export class VideoGameModule { }
