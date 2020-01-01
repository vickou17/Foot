import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { GroupeCComponent } from './groupe-c.component';

describe('GroupeCComponent', () => {
  let component: GroupeCComponent;
  let fixture: ComponentFixture<GroupeCComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ GroupeCComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(GroupeCComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
