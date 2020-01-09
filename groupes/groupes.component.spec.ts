import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { GroupesComponent } from './groupes.component';

describe('GroupesComponent', () => {
  let component: GroupesComponent;
  let fixture: ComponentFixture<GroupesComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ GroupesComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(GroupesComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
