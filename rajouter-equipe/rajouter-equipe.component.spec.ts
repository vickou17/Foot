import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { RajouterEquipeComponent } from './rajouter-equipe.component';

describe('RajouterEquipeComponent', () => {
  let component: RajouterEquipeComponent;
  let fixture: ComponentFixture<RajouterEquipeComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ RajouterEquipeComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(RajouterEquipeComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
