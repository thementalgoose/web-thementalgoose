import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { HomeComponent } from './home/home.component';
import { AiwPrivacyPolicyComponent } from './am-i-wrong/aiw-privacy-policy/aiw-privacy-policy.component';
import { FileOpenerComponent } from './file-opener/file-opener.component';
import { TransmissionPrivacyPolicyComponent } from './transmission/dt-privacy-policy/transmission-privacy-policy.component';

const routes: Routes = [
  { path: '', component: HomeComponent },
  { path: 'am-i-wrong/privacy-policy', component: AiwPrivacyPolicyComponent },
  { path: 'am-i-wrong-privacy-policy', redirectTo: 'am-i-wrong/privacy-policy' },
  { path: 'driving-tutor/privacy-policy', component: TransmissionPrivacyPolicyComponent },
  { path: 'driving-tutor-privacy-policy', redirectTo: 'driving-tutor/privacy-policy' },
  { path: 'transmission/privacy-policy', component: TransmissionPrivacyPolicyComponent },
  { path: 'transmission-privacy-policy', redirectTo: 'transmission/privacy-policy' },
  { path: 'cv', component: FileOpenerComponent },
  { path: '**', redirectTo: '' }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
