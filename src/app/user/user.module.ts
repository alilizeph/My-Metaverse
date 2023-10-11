import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule } from '@angular/router';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';

import { UsersRoutingModule } from './user-routing.module';
import { AuthGuard } from '../core/guards/auth.guard';
import { ProfilePublicComponent } from './components/profile-public/profile-public.component';
import { CoreModule } from '../core/core.module';
import { ProfilePrivateComponent } from './components/profile-private/profile-private.component';
import { CommentsModule } from '../comments/comments.module';

@NgModule({
  declarations: [
    ProfilePublicComponent,
    ProfilePrivateComponent
  ],
  imports: [
    CommonModule,
    RouterModule,
    FormsModule,
    ReactiveFormsModule,
    UsersRoutingModule,
    CoreModule,
    CommentsModule
  ],
  exports: [
    ProfilePrivateComponent,
    ProfilePublicComponent
  ],
  providers: [
    AuthGuard
  ]
})
export class UserModule { }
