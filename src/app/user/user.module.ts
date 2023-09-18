import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule } from '@angular/router';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';

import { UsersRoutingModule } from './user-routing.module';
import { AuthGuard } from '../core/guards/auth.guard';
import { ProfilePublicComponent } from './components/profile-public/profile-public.component';
import { ProfileComponent } from './components/profile/profile.component';
import { CoreModule } from '../core/core.module';

@NgModule({
  declarations: [
    ProfileComponent,
    ProfilePublicComponent
  ],
  imports: [
    CommonModule,
    RouterModule,
    FormsModule,
    ReactiveFormsModule,
    UsersRoutingModule,
    CoreModule
  ],
  exports: [
    ProfileComponent,
    ProfilePublicComponent
  ],
  providers: [
    AuthGuard
  ]
})
export class UserModule { }
