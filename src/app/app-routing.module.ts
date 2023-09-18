import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { VideoGameAddComponent } from './video-game/components/video-game-add/video-game-add.component';
import { AdminGuard } from './core/guards/admin.guard';
import { AuthGuard } from './core/guards/auth.guard';


const routes: Routes = [
  {
    path: "",
    loadChildren: () => import("./landing-page/landing-page-routing.module").then(m => m.LandingPageRoutingModule)
  },
  {
    path: "videogames",
    loadChildren: () => import('./video-game/video-game-routing.module').then(m => m.VideoGameRoutingModule)
  },
  {
    path: "new",
    component: VideoGameAddComponent,
    canActivate: [AdminGuard]
  },
  {
    path: "user",
    loadChildren: () => import('./user/user-routing.module').then(m => m.UsersRoutingModule)
  },
  {
    path: "auth",
    loadChildren: () => import("./auth/auth-routing.module").then(m => m.AuthRoutingModule)
  }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
