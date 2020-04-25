import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { TransmissionPrivacyPolicyComponent } from './transmission-privacy-policy.component';

describe('TransmissionPrivacyPolicyComponent', () => {
  let component: TransmissionPrivacyPolicyComponent;
  let fixture: ComponentFixture<TransmissionPrivacyPolicyComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ TransmissionPrivacyPolicyComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(TransmissionPrivacyPolicyComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
