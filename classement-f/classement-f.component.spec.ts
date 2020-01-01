import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ClassementFComponent } from './classement-f.component';

describe('ClassementFComponent', () => {
  let component: ClassementFComponent;
  let fixture: ComponentFixture<ClassementFComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ClassementFComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ClassementFComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
