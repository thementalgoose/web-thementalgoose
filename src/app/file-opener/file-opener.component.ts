import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-file-opener',
  templateUrl: './file-opener.component.html',
  styleUrls: ['./file-opener.component.css']
})
export class FileOpenerComponent implements OnInit {

  constructor() {
    window.open("assets/JordanFisher.pdf", '_self');
  }

  ngOnInit() {
  }

}
