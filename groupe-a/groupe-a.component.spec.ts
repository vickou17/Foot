import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { GroupeAComponent } from './groupe-a.component';

describe('GroupeAComponent', () => {
  let component: GroupeAComponent;
  let fixture: ComponentFixture<GroupeAComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ GroupeAComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(GroupeAComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
