import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { ConnexionComponent } from './components/connexion/connexion.component';
import { InscriptionComponent } from './components/inscription/inscription.component';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { AuthRoutingModule } from './auth-routing.module';


@NgModule({
  declarations: [
    ConnexionComponent,
    InscriptionComponent
  ],
  imports: [
    CommonModule,
    FormsModule,
    ReactiveFormsModule,
    AuthRoutingModule
  ]
})
export class AuthModule { }
