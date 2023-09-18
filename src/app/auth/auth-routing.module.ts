import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

import { ConnexionComponent } from './components/connexion/connexion.component';
import { InscriptionComponent } from './components/inscription/inscription.component';

const routes: Routes = [
  { path: 'login', component: ConnexionComponent },
  { path: 'signin', component: InscriptionComponent }
];

@NgModule({
  imports: [
    RouterModule.forChild(routes)
  ],
  exports: [
    RouterModule
  ]
})
export class AuthRoutingModule {}
