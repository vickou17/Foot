import { TestBed } from '@angular/core/testing';

import { ListeEquipeService } from './liste-equipe.service';

describe('ListeEquipeService', () => {
  beforeEach(() => TestBed.configureTestingModule({}));

  it('should be created', () => {
    const service: ListeEquipeService = TestBed.get(ListeEquipeService);
    expect(service).toBeTruthy();
  });
});
