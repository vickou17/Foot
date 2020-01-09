import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders, HttpErrorResponse } from '@angular/common/http';
import { Observable, of } from 'rxjs';
import { map, catchError, tap } from 'rxjs/operators';


const endpoint = 'http://localhost:8000/api/lucky/';
const httpOptions = {
  headers: new HttpHeaders({
    'Content-Type':  'application/json'
  })
}

@Injectable({
  providedIn: 'root'
})
export class RestService {

  constructor(private http: HttpClient) { }
  
  private extractData(res: Response) {
      let body = res;
      return body || { };
  }
  
    getListeEquipe(): Observable<any> {
      return this.http.get(endpoint + 'liste_equipe').pipe(
        map(this.extractData));
    }
    
    addListeEquipe (liste): Observable<any> {
      console.log(liste);
      return this.http.post<any>(endpoint + 'liste_equipe', JSON.stringify(liste), httpOptions).pipe(
        tap((liste) => console.log(`added liste w/ id=${liste.id}`)),
        catchError(this.handleError<any>('addListeEquipe'))
      );
    }
    
    updateListeEquipe (id, liste): Observable<any> {
      return this.http.put(endpoint + 'liste_equipe/' + id, JSON.stringify(liste), httpOptions).pipe(
        tap(_ => console.log(`updated liste id=${id}`)),
        catchError(this.handleError<any>('updatelisteEquipe'))
      );
    }
    
    deleteListeEquipe (id): Observable<any> {
      return this.http.delete<any>(endpoint + 'liste_equipe/' + id, httpOptions).pipe(
        tap(_ => console.log(`deleted liste id=${id}`)),
        catchError(this.handleError<any>('deleteListeEquipe'))
      );
    }
    
    private handleError<T> (operation = 'operation', result?: T) {
      return (error: any): Observable<T> => {
        return of(result as T);
      };
    }
  
}
