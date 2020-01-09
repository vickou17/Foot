import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CreerRencontreComponent } from './creer-rencontre.component';

describe('CreerRencontreComponent', () => {
  let component: CreerRencontreComponent;
  let fixture: ComponentFixture<CreerRencontreComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CreerRencontreComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CreerRencontreComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
