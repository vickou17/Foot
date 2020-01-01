import { BrowserModule } from '@angular/platform-browser';
import { platformBrowser } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { ReactiveFormsModule } from '@angular/forms';
import { Http, HttpModule, RequestOptions } from '@angular/http';
import { AuthHttp, AuthConfig } from 'angular2-jwt';
import { EquipesComponent } from './equipes/equipes.component';
import { HttpClientModule } from '@angular/common/http';

import { AppComponent } from './app.component';
//import { Routing } from './app.routing';
import { RouterModule } from '@angular/router';
import { routes} from './app.routes';
import { AuthGuard } from './_guard/index';

import { AuthenticationComponent } from './authentication/authentication.component';
import { AuthenticationService } from './authentication/authentication.service';
import { HomepageComponent } from './homepage/homepage.component';
import { PostComponent } from './post/post.component';
import { PostRepository } from './post/post-repository.service';
import { RencontresComponent } from './rencontres/rencontres.component';
import { NavbarComponent } from './navbar/navbar.component';
import { GroupesComponent } from './groupes/groupes.component';
import { ClassementComponent } from './classement/classement.component';
import { ListeEquipeComponent } from './liste-equipe/liste-equipe.component';
import { RechercheEquipeComponent } from './recherche-equipe/recherche-equipe.component';
import { GroupeAComponent } from './groupe-a/groupe-a.component';
import { GroupeBComponent } from './groupe-b/groupe-b.component';
import { GroupeCComponent } from './groupe-c/groupe-c.component';
import { GroupeDComponent } from './groupe-d/groupe-d.component';
import { GroupeEComponent } from './groupe-e/groupe-e.component';
import { GroupeFComponent } from './groupe-f/groupe-f.component';
import { RajouterEquipeComponent } from './rajouter-equipe/rajouter-equipe.component';
import { ListeGroupeComponent } from './liste-groupe/liste-groupe.component';
import { CreerGroupeComponent } from './creer-groupe/creer-groupe.component';
import { SupprimerGroupeComponent } from './supprimer-groupe/supprimer-groupe.component';
import { ListeRencontreComponent } from './liste-rencontre/liste-rencontre.component';
import { CreerRencontreComponent } from './creer-rencontre/creer-rencontre.component';
import { SupprimerRencontreComponent } from './supprimer-rencontre/supprimer-rencontre.component';
import { ClassementAComponent } from './classement-a/classement-a.component';
import { ClassementBComponent } from './classement-b/classement-b.component';
import { ClassementCComponent } from './classement-c/classement-c.component';
import { ClassementDComponent } from './classement-d/classement-d.component';
import { ClassementEComponent } from './classement-e/classement-e.component';
import { ClassementFComponent } from './classement-f/classement-f.component';

export function authHttpServiceFactory(http: Http, options: RequestOptions) {
    return new AuthHttp( new AuthConfig({}), http, options);
}




@NgModule({
     declarations: [
         AppComponent,
         AuthenticationComponent,
         HomepageComponent,
         PostComponent,
         EquipesComponent,
         RencontresComponent,
         NavbarComponent,
         GroupesComponent,
         ClassementComponent,
         ListeEquipeComponent,
         RechercheEquipeComponent,
         GroupeAComponent,
         GroupeBComponent,
         GroupeCComponent,
         GroupeDComponent,
         GroupeEComponent,
         GroupeFComponent,
         RajouterEquipeComponent,
         ListeGroupeComponent,
         CreerGroupeComponent,
         SupprimerGroupeComponent,
         ListeRencontreComponent,
         CreerRencontreComponent,
         SupprimerRencontreComponent,
         ClassementAComponent,
         ClassementBComponent,
         ClassementCComponent,
         ClassementDComponent,
         ClassementEComponent,
         ClassementFComponent
     ],
     imports: [
         BrowserModule,
         HttpClientModule,
         ReactiveFormsModule,
         HttpModule,
         //Routing,
         RouterModule.forRoot(routes)
     ],
     providers: [
     {
         provide: AuthHttp,
         useFactory: authHttpServiceFactory,
         deps: [ Http, RequestOptions ]
     },
         AuthGuard,
         AppComponent,
         AuthenticationService,
         PostRepository
     ],
     bootstrap: [AppComponent]
})
export class AppModule { }