import { LOCALE_ID, NgModule } from '@angular/core';
import { CommonModule, registerLocaleData } from '@angular/common';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import * as fr from '@angular/common/locales/fr';

import { CommentsFormComponent } from './components/comments-form/comments-form.component';
import { CommentsCardComponent } from './components/comments-card/comments-card.component';
import { CommentsUserComponent } from './components/comments-user/comments-user.component';
import { CommentsCardProfileComponent } from './components/comments-card-profile/comments-card-profile.component';


@NgModule({
  declarations: [
    CommentsFormComponent,
    CommentsCardComponent,
    CommentsUserComponent,
    CommentsCardProfileComponent
  ],
  imports: [
    CommonModule,
    FormsModule,
    ReactiveFormsModule
  ],
  providers: [
    { provide: LOCALE_ID, useValue: "fr-FR" }
  ],
  exports: [
    CommentsFormComponent,
    CommentsCardComponent,
    CommentsUserComponent,
    CommentsCardProfileComponent
  ],
})
export class CommentsModule {
  constructor() {
    registerLocaleData(fr.default);
  }
}
