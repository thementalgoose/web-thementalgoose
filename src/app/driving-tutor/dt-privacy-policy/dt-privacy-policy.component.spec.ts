import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { DtPrivacyPolicyComponent } from './dt-privacy-policy.component';

describe('DtPrivacyPolicyComponent', () => {
  let component: DtPrivacyPolicyComponent;
  let fixture: ComponentFixture<DtPrivacyPolicyComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ DtPrivacyPolicyComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(DtPrivacyPolicyComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
