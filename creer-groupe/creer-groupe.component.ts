import { FormControl, FormGroup } from '@angular/forms'
import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-creer-groupe',
  templateUrl: './creer-groupe.component.html',
  styleUrls: ['./creer-groupe.component.css']
})
export class CreerGroupeComponent implements OnInit {

  creerGroupe = new FormGroup({
    lettre: new FormControl(''),
    equipe1: new FormControl(''),
    equipe2: new FormControl(''),
    equipe3: new FormControl(''),
    equipe4: new FormControl('')
  });
  constructor() { }

  ngOnInit() {
  }

}
