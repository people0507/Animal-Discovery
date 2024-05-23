import { HttpClient, HttpResponse } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs/internal/Observable';

@Injectable({
  providedIn: 'root'
})
export class LoginService {

  constructor(private http:HttpClient) {}
  private apiUrl = 'http://localhost:8000/api';
  postLogin(email: string, password: string): Observable<HttpResponse<any>> {
    return this.http.post(`${this.apiUrl}/login`, {email, password}, { observe: 'response' });
  }

  postRegister(name:string,email:string,password: string,repeatPassword:string) : Observable<HttpResponse<any>> {
    return this.http.post(`${this.apiUrl}/register`, {name,email, password,repeatPassword}, { observe: 'response' });
  }
}
