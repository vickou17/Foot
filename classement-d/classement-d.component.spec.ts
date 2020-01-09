import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ClassementDComponent } from './classement-d.component';

describe('ClassementDComponent', () => {
  let component: ClassementDComponent;
  let fixture: ComponentFixture<ClassementDComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ClassementDComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ClassementDComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
