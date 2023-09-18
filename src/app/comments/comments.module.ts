import { LOCALE_ID, NgModule } from '@angular/core';
import { CommonModule, registerLocaleData } from '@angular/common';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import * as fr from '@angular/common/locales/fr';

import { CommentsFormComponent } from './components/comments-form/comments-form.component';
import { CommentsCardComponent } from './components/comments-card/comments-card.component';


@NgModule({
  declarations: [
    CommentsFormComponent,
    CommentsCardComponent
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
    CommentsCardComponent
  ],
})
export class CommentsModule {
  constructor() {
    registerLocaleData(fr.default);
  }
}
