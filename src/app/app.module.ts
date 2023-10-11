import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { BrowserAnimationsModule } from "@angular/platform-browser/animations";
import { HttpClientModule } from '@angular/common/http';

import { CoreModule } from './core/core.module';
import { VideoGameModule } from './video-game/video-game.module';
import { UserModule } from './user/user.module';

import { LandingPageModule } from './landing-page/landing-page.module';
import { AuthModule } from './auth/auth.module';

@NgModule({
  declarations: [
    AppComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule,
    ReactiveFormsModule,
    HttpClientModule,
    BrowserAnimationsModule,

    CoreModule,
    VideoGameModule,
    UserModule,
    LandingPageModule,
    AuthModule
  ],
  exports: [ ],
  bootstrap: [AppComponent]
})
export class AppModule {
}
