import { Component, NgModule } from '@angular/core';
import { Routes, RouterModule, ActivatedRouteSnapshot, RouterState, RouterStateSnapshot } from '@angular/router';
import { HomeComponent } from './home/home.component';
import { AiwPrivacyPolicyComponent } from './am-i-wrong/aiw-privacy-policy/aiw-privacy-policy.component';
import { FileOpenerComponent } from './file-opener/file-opener.component';
import { TransmissionPrivacyPolicyComponent } from './transmission/dt-privacy-policy/transmission-privacy-policy.component';
import { HourGlassPrivacyPolicyComponent } from './hour-glass/privacy-policy/privacy-policy.component';
import { FlashbackPrivacyPolicyComponent } from './flashback/privacy-policy/privacy-policy.component';
import { email, urlGithub, urlLinkedin, urlPlay } from './constants';

const routes: Routes = [
  { path: '', component: HomeComponent },
  { path: 'am-i-wrong/privacy-policy', component: AiwPrivacyPolicyComponent },
  { path: 'am-i-wrong-privacy-policy', redirectTo: 'am-i-wrong/privacy-policy' },
  { path: 'driving-tutor/privacy-policy', component: TransmissionPrivacyPolicyComponent },
  { path: 'driving-tutor-privacy-policy', redirectTo: 'driving-tutor/privacy-policy' },
  { path: 'transmission/privacy-policy', component: TransmissionPrivacyPolicyComponent },
  { path: 'transmission-privacy-policy', redirectTo: 'transmission/privacy-policy' },
  { path: 'hour-glass/privacy-policy', component: HourGlassPrivacyPolicyComponent },
  { path: 'hour-glass-privacy-policy', redirectTo: 'hour-glass/privacy-policy' },
  { path: 'flashback/privacy-policy', component: FlashbackPrivacyPolicyComponent },
  { path: 'flashback-privacy-policy', redirectTo: 'flashback/privacy-policy' },
  { path: 'cv', component: FileOpenerComponent },
  { 
    path: 'play', 
    component: Component,
    resolve: {
      url: 'externalUrl'
    },
    data: { 
      externalUrl: urlPlay
    }
  },  
  { 
    path: 'github', 
    component: Component,
    resolve: {
      url: 'externalUrl'
    },
    data: { 
      externalUrl: urlGithub
    }
  },
  { 
    path: 'linkedin', 
    component: Component,
    resolve: {
      url: 'externalUrl'
    },
    data: { 
      externalUrl: urlLinkedin
    }
  },
  { 
    path: 'email', 
    component: Component,
    resolve: {
      url: 'externalUrl'
    },
    data: { 
      externalUrl: 'mailto:' + email
    }
  },
  { path: '**', redirectTo: '' },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule],
  providers: [
    {
      provide: 'externalUrl',
      useValue: (route: ActivatedRouteSnapshot, state: RouterStateSnapshot) => { 
        window.location.href = (route.data as any).externalUrl;
      }
    }
  ]
})
export class AppRoutingModule { }
