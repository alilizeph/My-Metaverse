import { CUSTOM_ELEMENTS_SCHEMA, NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';

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

    CoreModule,
    VideoGameModule,
    UserModule,
    LandingPageModule,
    AuthModule,
    UserModule
  ],
  exports: [ ],
  bootstrap: [AppComponent]
})
export class AppModule {
}
