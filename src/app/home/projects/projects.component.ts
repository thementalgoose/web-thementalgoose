import { Component, OnInit } from '@angular/core';
import { allProjects } from 'src/app/project-item';

@Component({
  selector: 'app-projects',
  templateUrl: './projects.component.html',
  styleUrls: ['./projects.component.css']
})
export class ProjectsComponent implements OnInit {

  public allProjects = allProjects;

  constructor() { }

  ngOnInit() {
  }

}
