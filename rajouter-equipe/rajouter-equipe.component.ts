import { Component, OnInit } from '@angular/core';
import {NgForm} from '@angular/forms';
import { FormControl, FormGroup } from '@angular/forms'

@Component({
  selector: 'app-rajouter-equipe',
  templateUrl: './rajouter-equipe.component.html',
})
export class RajouterEquipeComponent implements OnInit {
    creerEquipe = new FormGroup({
    lettre: new FormControl(''),
    equipe: new FormControl('')
  });
  constructor() { }

  ngOnInit() {
  }
  }
