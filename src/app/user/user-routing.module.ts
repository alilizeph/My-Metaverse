import { NgModule } from "@angular/core";
import { RouterModule, Routes } from "@angular/router";
import { AuthGuard } from "../core/guards/auth.guard";
import { ProfilePublicComponent } from "./components/profile-public/profile-public.component";
import { ProfilePrivateComponent } from "./components/profile-private/profile-private.component";


const routes: Routes = [
  {
    path: "profile",
    component: ProfilePrivateComponent,
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
