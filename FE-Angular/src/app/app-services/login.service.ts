import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class LoginService {

  constructor(private http:HttpClient) {}
  private apiUrl = 'http://localhost:8000/api';
  postLogin(email: string, password: string){
    return this.http.post(`${this.apiUrl}/login`, {email, password});
  }
}
