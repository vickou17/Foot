import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import {Http, Response } from '@angular/http';
import 'rxjs/add/operator/map';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { environment } from './../environments/environment';
import { ListeEquipeService } from './liste-equipe/liste-equipe.service';
import { FormControl, FormGroup } from '@angular/forms'
import { Observable } from 'rxjs/Observable';
import { ListeEquipeComponent } from './liste-equipe/liste-equipe.component';


import { AuthenticationService } from './authentication/authentication.service';

@Component({
  selector: 'app-root',
  template: `
<router-outlet></router-outlet>`
})
export class AppComponent implements OnInit{ 
    
    constructor(private http: HttpClient) { }
    
    ngOnInit(): void {
    }

}

