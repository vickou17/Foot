import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ClassementEComponent } from './classement-e.component';

describe('ClassementEComponent', () => {
  let component: ClassementEComponent;
  let fixture: ComponentFixture<ClassementEComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ClassementEComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ClassementEComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
