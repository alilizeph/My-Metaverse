import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

const routes: Routes = [
  {
    path: "",
    loadChildren: () => import("./landing-page/landing-page-routing.module").then(m => m.LandingPageRoutingModule)
  },
  {
    path: "videogames",
    loadChildren: () => import('./video-game/video-game-routing.module').then(m => m.VideoGameRoutingModule)
  }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
