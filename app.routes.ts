import { Routes } from '@angular/router';
import { EquipesComponent } from './equipes/equipes.component';
import { HomepageComponent } from './homepage/homepage.component';
import { RencontresComponent } from './rencontres/rencontres.component';
import { GroupesComponent } from './groupes/groupes.component';
import { ClassementComponent } from './classement/classement.component';
import { ListeEquipeComponent } from './liste-equipe/liste-equipe.component';
import { RechercheEquipeComponent } from './recherche-equipe/recherche-equipe.component';
import { RajouterEquipeComponent } from './rajouter-equipe/rajouter-equipe.component';
import { ListeGroupeComponent } from './liste-groupe/liste-groupe.component';
import { CreerGroupeComponent } from './creer-groupe/creer-groupe.component';
import { SupprimerGroupeComponent } from './supprimer-groupe/supprimer-groupe.component';
import { ListeRencontreComponent } from './liste-rencontre/liste-rencontre.component';
import { CreerRencontreComponent } from './creer-rencontre/creer-rencontre.component';
import { SupprimerRencontreComponent } from './supprimer-rencontre/supprimer-rencontre.component';
import { GroupeAComponent } from './groupe-a/groupe-a.component';
import { GroupeBComponent } from './groupe-b/groupe-b.component';
import { GroupeCComponent } from './groupe-c/groupe-c.component';
import { GroupeDComponent } from './groupe-d/groupe-d.component';
import { GroupeEComponent } from './groupe-e/groupe-e.component';
import { GroupeFComponent } from './groupe-f/groupe-f.component';
import { ClassementAComponent } from './classement-a/classement-a.component';
import { ClassementBComponent } from './classement-b/classement-b.component';
import { ClassementCComponent } from './classement-c/classement-c.component';
import { ClassementDComponent } from './classement-d/classement-d.component';
import { ClassementEComponent } from './classement-e/classement-e.component';
import { ClassementFComponent } from './classement-f/classement-f.component';


export const routes: Routes = [
{ path: '', component: HomepageComponent },
{ path: 'equipes', component: EquipesComponent },
{ path: 'rencontres', component: RencontresComponent },
{ path: 'groupes', component: GroupesComponent },
{ path: 'classement', component: ClassementComponent },
{ path: 'liste-equipe', component: ListeEquipeComponent },
{ path: 'recherche-equipe', component: RechercheEquipeComponent },
{ path: 'groupe-a', component: GroupeAComponent },
{ path: 'groupe-b', component: GroupeBComponent },
{ path: 'groupe-c', component: GroupeCComponent },
{ path: 'groupe-d', component: GroupeDComponent },
{ path: 'groupe-e', component: GroupeEComponent },
{ path: 'groupe-f', component: GroupeFComponent },
{ path: 'classement-a', component: ClassementAComponent },
{ path: 'classement-b', component: ClassementBComponent },
{ path: 'classement-c', component: ClassementCComponent },
{ path: 'classement-d', component: ClassementDComponent },
{ path: 'classement-e', component: ClassementEComponent },
{ path: 'classement-f', component: ClassementFComponent },
{ path: 'rajouter-equipe', component: RajouterEquipeComponent },
{ path: 'liste-groupe', component: ListeGroupeComponent },
{ path: 'creer-groupe', component: CreerGroupeComponent },
{ path: 'supprimer-groupe', component: SupprimerGroupeComponent },
{ path: 'liste-rencontre', component: ListeRencontreComponent },
{ path: 'creer-rencontre', component: CreerRencontreComponent },
{ path: 'supprimer-rencontre', component: SupprimerRencontreComponent },
];