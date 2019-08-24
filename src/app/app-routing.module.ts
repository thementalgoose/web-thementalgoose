import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { HomeComponent } from './home/home.component';
import { AiwPrivacyPolicyComponent } from './am-i-wrong/aiw-privacy-policy/aiw-privacy-policy.component';
import { DtPrivacyPolicyComponent } from './driving-tutor/dt-privacy-policy/dt-privacy-policy.component';
import { FileOpenerComponent } from './file-opener/file-opener.component';

const routes: Routes = [
  { path: '', component: HomeComponent },
  { path: 'am-i-wrong/privacy-policy', component: AiwPrivacyPolicyComponent },
  { path: 'am-i-wrong-privacy-policy', redirectTo: 'am-i-wrong/privacy-policy' },
  { path: 'driving-tutor/privacy-policy', component: DtPrivacyPolicyComponent },
  { path: 'driving-tutor-privacy-policy', redirectTo: 'driving-tutor/privacy-policy' },
  { path: 'cv', component: FileOpenerComponent },
  { path: '**', redirectTo: '' }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
