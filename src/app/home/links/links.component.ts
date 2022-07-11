import { Component, Input, OnInit } from '@angular/core';
import { email, urlCV, urlGithub, urlLinkedin, urlPlay } from 'src/app/constants';
import { ProjectItem } from 'src/app/data/project-item';

@Component({
  selector: 'app-links',
  templateUrl: './links.component.html',
  styleUrls: ['./links.component.css']
})
export class LinksComponent implements OnInit {

  @Input()
  public model: ProjectItem;

  public linkGithub = urlGithub;
  public linkLinkedin = urlLinkedin;
  public linkPlay = urlPlay;

  public email = email;

  public linkCV = urlCV;

  constructor() { }

  ngOnInit() {
  }

}
