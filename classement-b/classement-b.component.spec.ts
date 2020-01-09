import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ClassementBComponent } from './classement-b.component';

describe('ClassementBComponent', () => {
  let component: ClassementBComponent;
  let fixture: ComponentFixture<ClassementBComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ClassementBComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ClassementBComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
