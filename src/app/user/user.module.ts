import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule } from '@angular/router';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';

import { ProfilComponent } from './components/profil/profil.component';
import { UsersRoutingModule } from './user-routing.module';


@NgModule({
  declarations: [
    ProfilComponent
  ],
  imports: [
    CommonModule,
    RouterModule,
    FormsModule,
    ReactiveFormsModule,
    UsersRoutingModule
  ],
  exports: [

  ]
})
export class UserModule { }
