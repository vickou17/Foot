import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ListeRencontreComponent } from './liste-rencontre.component';

describe('ListeRencontreComponent', () => {
  let component: ListeRencontreComponent;
  let fixture: ComponentFixture<ListeRencontreComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ListeRencontreComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ListeRencontreComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
