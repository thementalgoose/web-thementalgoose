import { Component, OnInit } from '@angular/core';
import { allProjects, ProjectModel } from 'src/app/resources/projects';

@Component({
  selector: 'app-projects',
  templateUrl: './projects.component.html',
  styleUrls: ['./projects.component.css']
})
export class ProjectsComponent implements OnInit {

  public projects: ProjectModel[] = allProjects();

  constructor() { }

  ngOnInit() {
  }

}
