import { Component, OnInit, Input } from '@angular/core';
import {Http, Response } from '@angular/http';
import 'rxjs/add/operator/map';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Observable } from 'rxjs/Observable';
import { ActivatedRoute, Router } from '@angular/router';
import { RestService } from '../rest.service';

@Component({
  selector: 'app-liste-equipe',
  templateUrl: './liste-equipe.component.html',
})
export class ListeEquipeComponent implements OnInit { 
    
    listes:any = [];
    
    constructor(public rest:RestService, private route: ActivatedRoute, private router: Router){ }
    
    ngOnInit() {
        this.getListes();
    }
    
    getListes(){
        this.listes = [];
        this.rest.getListeEquipe().subscribe((data: {}) => {
          console.log(data);
          this.listes = data;
        });
    }
    
    addListeEquipe() {
       this.router.navigate(['/liste-equipe/']);
    }

}
