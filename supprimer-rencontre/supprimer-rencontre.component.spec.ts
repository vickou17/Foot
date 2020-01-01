import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { SupprimerRencontreComponent } from './supprimer-rencontre.component';

describe('SupprimerRencontreComponent', () => {
  let component: SupprimerRencontreComponent;
  let fixture: ComponentFixture<SupprimerRencontreComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ SupprimerRencontreComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(SupprimerRencontreComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
