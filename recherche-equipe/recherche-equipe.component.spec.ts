import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { RechercheEquipeComponent } from './recherche-equipe.component';

describe('RechercheEquipeComponent', () => {
  let component: RechercheEquipeComponent;
  let fixture: ComponentFixture<RechercheEquipeComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ RechercheEquipeComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(RechercheEquipeComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
