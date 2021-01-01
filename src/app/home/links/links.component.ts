import { Component, OnInit } from '@angular/core';
import { email, urlGithub, urlLinkedin, urlPlay } from 'src/app/constants';

@Component({
  selector: 'app-links',
  templateUrl: './links.component.html',
  styleUrls: ['./links.component.css']
})
export class LinksComponent implements OnInit {

  public linkGithub = urlGithub;
  public linkLinkedin = urlLinkedin;
  public linkPlay = urlPlay;

  public email = email;

  constructor() { }

  ngOnInit() {
  }

}
