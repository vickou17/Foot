import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ListeGroupeComponent } from './liste-groupe.component';

describe('ListeGroupeComponent', () => {
  let component: ListeGroupeComponent;
  let fixture: ComponentFixture<ListeGroupeComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ListeGroupeComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ListeGroupeComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
