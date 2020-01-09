import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { GroupeEComponent } from './groupe-e.component';

describe('GroupeEComponent', () => {
  let component: GroupeEComponent;
  let fixture: ComponentFixture<GroupeEComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ GroupeEComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(GroupeEComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
