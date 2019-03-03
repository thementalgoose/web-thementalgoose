import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HomeComponent } from './home/home.component';
import { AiwPrivacyPolicyComponent } from './am-i-wrong/aiw-privacy-policy/aiw-privacy-policy.component';
import { DtPrivacyPolicyComponent } from './driving-tutor/dt-privacy-policy/dt-privacy-policy.component';

@NgModule({
  declarations: [
    AppComponent,
    HomeComponent,
    AiwPrivacyPolicyComponent,
    DtPrivacyPolicyComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
