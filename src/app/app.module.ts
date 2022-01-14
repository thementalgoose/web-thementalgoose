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
import { AngularFireModule } from '@angular/fire/compat';
import { AngularFireAnalyticsModule } from '@angular/fire/compat/analytics';
import { environment } from 'src/environments/environment';
import { ProjectsComponent } from './home/projects/projects.component';
import { FooterComponent } from './home/footer/footer.component';
import { ContactComponent } from './home/contact/contact.component';

@NgModule({
  declarations: [
    AppComponent,
    HomeComponent,
    AiwPrivacyPolicyComponent,
    TransmissionPrivacyPolicyComponent,
    HourGlassPrivacyPolicyComponent,
    FlashbackPrivacyPolicyComponent,
    FileOpenerComponent,
    LinksComponent,
    ProjectsComponent,
    FooterComponent,
    ContactComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    AngularFireModule.initializeApp(environment.firebase),
    AngularFireAnalyticsModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { 

}
