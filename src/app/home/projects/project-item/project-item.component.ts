import { Component, Input, OnInit } from '@angular/core';
import { ProjectItem } from 'src/app/project-item';

@Component({
  selector: 'app-project-item',
  templateUrl: './project-item.component.html',
  styleUrls: ['./project-item.component.css']
})
export class ProjectItemComponent implements OnInit {

  @Input()
  public model: ProjectItem;

  constructor() { }

  ngOnInit() {
  }

}
