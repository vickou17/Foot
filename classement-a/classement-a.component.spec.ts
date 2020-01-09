import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ClassementAComponent } from './classement-a.component';

describe('ClassementAComponent', () => {
  let component: ClassementAComponent;
  let fixture: ComponentFixture<ClassementAComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ClassementAComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ClassementAComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
