import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { HomeComponent } from './home/home.component';
import { AiwPrivacyPolicyComponent } from './am-i-wrong/aiw-privacy-policy/aiw-privacy-policy.component';

const routes: Routes = [
  { path: '', component: HomeComponent },
  { path: 'am-i-wrong/privacy-policy', component: AiwPrivacyPolicyComponent },
  { path: 'am-i-wrong-privacy-policy', redirectTo: 'am-i-wrong/privacy-policy' },
  { path: '**', redirectTo: '' }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
