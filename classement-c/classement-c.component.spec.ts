import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ClassementCComponent } from './classement-c.component';

describe('ClassementCComponent', () => {
  let component: ClassementCComponent;
  let fixture: ComponentFixture<ClassementCComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ClassementCComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ClassementCComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
