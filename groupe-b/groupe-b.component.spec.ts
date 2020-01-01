import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { GroupeBComponent } from './groupe-b.component';

describe('GroupeBComponent', () => {
  let component: GroupeBComponent;
  let fixture: ComponentFixture<GroupeBComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ GroupeBComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(GroupeBComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
