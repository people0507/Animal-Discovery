import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
@Injectable({
  providedIn: 'root'
})
export class UserService {
  private apiUrl = 'http://localhost:8000/api';
  constructor(private http: HttpClient) {

   }

   getUserList(){
    return this.http.get<any>(`${this.apiUrl}/admin/list_user`);
   }

   getUser(param:any){
    return this.http.get<any>(`${this.apiUrl}/admin/get_user/`+param);
   }

   getAllRole(){
    return this.http.get<any>(`${this.apiUrl}/admin/all_role`);
   }

   updateUser(id:any,param:any){
    return this.http.post<any>(`${this.apiUrl}/admin/update_user/`+id,param);
   }
}
