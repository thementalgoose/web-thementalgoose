import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { HourGlassPrivacyPolicyComponent } from '../privacy-policy/privacy-policy.component';

describe('HourGlassPrivacyPolicyComponent', () => {
  let component: HourGlassPrivacyPolicyComponent;
  let fixture: ComponentFixture<HourGlassPrivacyPolicyComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ HourGlassPrivacyPolicyComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(HourGlassPrivacyPolicyComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
