import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { GroupeFComponent } from './groupe-f.component';

describe('GroupeFComponent', () => {
  let component: GroupeFComponent;
  let fixture: ComponentFixture<GroupeFComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ GroupeFComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(GroupeFComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
