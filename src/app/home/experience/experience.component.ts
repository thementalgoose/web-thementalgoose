import { Component, OnInit } from '@angular/core';
import { allExperience, ExperienceModel } from 'src/app/resources/experience';

@Component({
  selector: 'app-experience',
  templateUrl: './experience.component.html',
  styleUrls: ['./experience.component.css']
})
export class ExperienceComponent implements OnInit {

  public experience: ExperienceModel[] = allExperience();

  constructor() { }

  ngOnInit() {
  }

}
