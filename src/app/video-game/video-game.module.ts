import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule } from '@angular/router';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';


import { VideoGameCardComponent } from './components/video-game-card/video-game-card.component';
import { VideoGameAccessComponent } from './components/video-game-access/video-game-access.component';
import { VideoGameListComponent } from './components/video-game-list/video-game-list.component';
import { VideoGameRoutingModule } from './video-game-routing.module';
import { CommentsModule } from '../comments/comments.module';
import { VideoGameAddComponent } from './components/video-game-add/video-game-add.component';
import { CoreModule } from '../core/core.module';



@NgModule({
  declarations: [
    VideoGameCardComponent,
    VideoGameAccessComponent,
    VideoGameListComponent,
    VideoGameAddComponent
  ],
  imports: [
    CommonModule,
    RouterModule,
    FormsModule,
    ReactiveFormsModule,

    VideoGameRoutingModule,
    CommentsModule,
    CoreModule
  ],
  exports: [
    VideoGameCardComponent,
    VideoGameAccessComponent,
    VideoGameListComponent
  ]
})
export class VideoGameModule { }
