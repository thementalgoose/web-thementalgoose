import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { FlashbackPrivacyPolicyComponent } from '../privacy-policy/privacy-policy.component';

describe('FlashbackPrivacyPolicyComponent', () => {
  let component: FlashbackPrivacyPolicyComponent;
  let fixture: ComponentFixture<FlashbackPrivacyPolicyComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ FlashbackPrivacyPolicyComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(FlashbackPrivacyPolicyComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
