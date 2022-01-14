import { Component, OnInit } from '@angular/core';

import * as particlejs from 'particlesjs';
import { AngularFireAnalytics } from '@angular/fire/compat/analytics';
import { environment } from 'src/environments/environment';

declare function require(moduleName: string): any;
const { version: appVersion } = require('../../../package.json')

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {


  constructor(private fire: AngularFireAnalytics) {
    if (environment.production) { 
      fire.setAnalyticsCollectionEnabled(true);
      fire.logEvent("Startup");
    }
  }

  ngOnInit() {
  }

}
