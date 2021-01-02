import { Component, OnInit } from '@angular/core';
import { allSkills, SkillModel } from 'src/app/resources/skills';

@Component({
  selector: 'app-about',
  templateUrl: './about.component.html',
  styleUrls: ['./about.component.css']
})
export class AboutComponent implements OnInit {

  public skills: SkillModel[] = allSkills();

  constructor() { }

  ngOnInit() {
  }

}
