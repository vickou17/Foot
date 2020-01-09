import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup } from '@angular/forms'

@Component({
  selector: 'app-supprimer-rencontre',
  templateUrl: './supprimer-rencontre.component.html',
})
export class SupprimerRencontreComponent implements OnInit {

  supprimerRencontre = new FormGroup({
    lettre: new FormControl(''),
    equipe1: new FormControl(''),
    equipe2: new FormControl('')
  });
  
  constructor() { }

  ngOnInit() {
  }

}
