import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';

import { HomePageComponent } from './components/home-page/home-page.component';

import { VideoGameModule } from '../video-game/video-game.module';



@NgModule({
  declarations: [
    HomePageComponent
  ],
  imports: [
    CommonModule,
    FormsModule,
    ReactiveFormsModule,
    VideoGameModule
  ],
  exports: [
    HomePageComponent
  ]
})
export class LandingPageModule { }
