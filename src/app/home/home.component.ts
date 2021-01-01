import { Component, OnInit } from '@angular/core';

import * as particlejs from 'particlesjs';
import { allExperience, ExperienceModel } from '../resources/experience';
import { SkillModel, allSkills } from '../resources/skills';
import { allProjects, ProjectModel } from '../resources/projects';
import { AngularFireAnalytics } from '@angular/fire/analytics';
import { environment } from 'src/environments/environment';

declare function require(moduleName: string): any;
const { version: appVersion } = require('../../../package.json')

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {

  public experience: ExperienceModel[] = allExperience();
  public skills: SkillModel[] = allSkills();
  public projects: ProjectModel[] = allProjects();

  public version = appVersion

  constructor(private fire: AngularFireAnalytics) {
    if (environment.production) { 
      fire.setAnalyticsCollectionEnabled(true);
      fire.logEvent("Startup");
    }
  }

  ngOnInit() {
    console.log(this.version);
  }

}
