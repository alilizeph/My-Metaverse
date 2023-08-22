import { NgModule, LOCALE_ID } from '@angular/core';
import { CommonModule, registerLocaleData } from '@angular/common';
import * as fr from '@angular/common/locales/fr';
import { RouterModule } from '@angular/router';

import { HeaderComponent } from './components/header/header.component';
import { FooterComponent } from './components/footer/footer.component';


@NgModule({
  declarations: [
    HeaderComponent,
    FooterComponent
  ],
  imports: [
    CommonModule,
    RouterModule
  ],
  providers: [
    { provide: LOCALE_ID, useValue: 'fr-FR' }
  ],
  exports: [
    HeaderComponent,
    FooterComponent
  ]
})
export class CoreModule {
  constructor() {
    registerLocaleData(fr.default);
  }
}
