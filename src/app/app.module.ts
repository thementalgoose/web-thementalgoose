import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HomeComponent } from './home/home.component';
import { AiwPrivacyPolicyComponent } from './am-i-wrong/aiw-privacy-policy/aiw-privacy-policy.component';
import { FileOpenerComponent } from './file-opener/file-opener.component';
import { TransmissionPrivacyPolicyComponent } from './transmission/dt-privacy-policy/transmission-privacy-policy.component';
import { HourGlassPrivacyPolicyComponent } from './hour-glass/privacy-policy/privacy-policy.component';
import { FlashbackPrivacyPolicyComponent } from './flashback/privacy-policy/privacy-policy.component';
import { LinksComponent } from './home/links/links.component';

@NgModule({
  declarations: [
    AppComponent,
    HomeComponent,
    AiwPrivacyPolicyComponent,
    TransmissionPrivacyPolicyComponent,
    HourGlassPrivacyPolicyComponent,
    FlashbackPrivacyPolicyComponent,
    FileOpenerComponent,
    LinksComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
