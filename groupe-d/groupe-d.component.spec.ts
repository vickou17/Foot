import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { GroupeDComponent } from './groupe-d.component';

describe('GroupeDComponent', () => {
  let component: GroupeDComponent;
  let fixture: ComponentFixture<GroupeDComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ GroupeDComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(GroupeDComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
