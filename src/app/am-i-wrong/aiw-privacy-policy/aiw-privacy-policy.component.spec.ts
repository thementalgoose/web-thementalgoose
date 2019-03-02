import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { AiwPrivacyPolicyComponent } from './aiw-privacy-policy.component';

describe('AiwPrivacyPolicyComponent', () => {
  let component: AiwPrivacyPolicyComponent;
  let fixture: ComponentFixture<AiwPrivacyPolicyComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AiwPrivacyPolicyComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AiwPrivacyPolicyComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
