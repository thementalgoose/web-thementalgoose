import { Component, OnInit } from '@angular/core';
declare function require(moduleName: string): any;
const { version: appVersion } = require('../../../../package.json')

@Component({
  selector: 'app-footer',
  templateUrl: './footer.component.html',
  styleUrls: ['./footer.component.css']
})
export class FooterComponent implements OnInit {

  public version = appVersion;
  public year = new Date().getFullYear();

  constructor() { }

  ngOnInit() {
  }

}
