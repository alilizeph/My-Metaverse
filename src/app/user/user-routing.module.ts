import { NgModule } from "@angular/core";
import { RouterModule, Routes } from "@angular/router";
import { ProfileComponent } from "./components/profile/profile.component";
import { AuthGuard } from "../core/guards/auth.guard";
import { ProfilePublicComponent } from "./components/profile-public/profile-public.component";


const routes: Routes = [
  {
    path: "profile",
    component: ProfileComponent,
    canActivate: [AuthGuard]
  },
  {
    path: "public/:id",
    component: ProfilePublicComponent
  }
];

@NgModule({
  imports: [ RouterModule.forChild(routes) ],
  exports: [RouterModule],
})
export class UsersRoutingModule { }
