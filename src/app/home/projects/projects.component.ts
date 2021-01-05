import { Component, OnInit } from '@angular/core';
import { allProjects } from 'src/app/data/project-all';

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

  getIcon(linkType: 'google' | 'web' | 'github' | 'youtube'| 'person') { 
    switch (linkType) { 
        case 'google': return 'fab fa-google-play';
        case 'web': return 'fab fa-internet-explorer';
        case 'github': return 'fab fa-github';
        case 'youtube': return 'fab fa-youtube';
        case 'person': return 'far fa-user-circle'
    }
  }
}
