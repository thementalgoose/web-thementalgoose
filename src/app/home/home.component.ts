import { Component, OnInit } from '@angular/core';

import * as particlejs from 'particlesjs';
import { allExperience, ExperienceModel } from '../resources/experience';
import { SkillModel, allSkills } from '../resources/skills';
import { allProjects, ProjectModel } from '../resources/projects';
import { AngularFireAnalytics } from '@angular/fire/analytics';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {

  public experience: ExperienceModel[] = allExperience();
  public skills: SkillModel[] = allSkills();
  public projects: ProjectModel[] = allProjects();

  constructor(private fire: AngularFireAnalytics) {
    fire.setAnalyticsCollectionEnabled(true);
    fire.logEvent("Startup");
  }

  ngOnInit() {
    
  }

}
