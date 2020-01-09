import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup } from '@angular/forms'

@Component({
  selector: 'app-supprimer-groupe',
  templateUrl: './supprimer-groupe.component.html',
})
export class SupprimerGroupeComponent implements OnInit {

  supprimerGroupe = new FormGroup({
    lettre: new FormControl('')
  });
  constructor() { }

  ngOnInit() {
  }

}
