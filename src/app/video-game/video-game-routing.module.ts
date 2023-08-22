import { NgModule } from "@angular/core";
import { RouterModule, Routes } from "@angular/router";
import { VideoGameCardComponent } from "./components/video-game-card/video-game-card.component";
import { VideoGameListComponent } from "./components/video-game-list/video-game-list.component";
import { VideoGameAddComponent } from "./components/video-game-add/video-game-add.component";

const routes: Routes = [
  { path: ':id', component: VideoGameCardComponent },
  { path: '', component: VideoGameListComponent },
  { path: 'new', component: VideoGameAddComponent }
];

@NgModule({
  imports: [ RouterModule.forChild(routes) ],
  exports: [RouterModule]
})
export class VideoGameRoutingModule {

}
