import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';

import { HomePageComponent } from './components/home-page/home-page.component';

import { LandingPageRoutingModule } from './landing-page-routing.module';
import { VideoGameCarrouselCardComponent } from './components/video-game-carrousel-card/video-game-carrousel-card.component';



@NgModule({
  declarations: [
    HomePageComponent,
    VideoGameCarrouselCardComponent,
  ],
  imports: [
    CommonModule,
    FormsModule,
    ReactiveFormsModule,
    LandingPageRoutingModule,
  ],
  exports: [
    HomePageComponent,
    VideoGameCarrouselCardComponent,
  ]
})
export class LandingPageModule { }
