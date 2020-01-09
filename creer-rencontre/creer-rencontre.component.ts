import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup } from '@angular/forms'

@Component({
  selector: 'app-creer-rencontre',
  templateUrl: './creer-rencontre.component.html',
})
export class CreerRencontreComponent implements OnInit {

  creerRencontre = new FormGroup({
    lettre: new FormControl(''),
    equipe1: new FormControl(''),
    equipe2: new FormControl(''),
    resultat1: new FormControl(''),
    resultat2: new FormControl('')
  });
  
  constructor() { }

  ngOnInit() {
  }

}
