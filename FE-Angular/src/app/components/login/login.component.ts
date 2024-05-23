import { HttpResponse } from '@angular/common/http';
import { Component } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { LoginService } from 'src/app/app-services/login.service';


@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent {
  constructor(private loginService:LoginService,private router: Router){}

  loginForm = {
    email:'',
    password:'',
  }
  login(): void{
    this.loginService.postLogin(this.loginForm.email,this.loginForm.password).subscribe((response: HttpResponse<any>)=>{
      if(response.status === 200){
        if(response.body.role.id == 1){
          localStorage.setItem('accessToken', response.body.token);
          this.router.navigate(['/dashboard']);
        }else{
          this.router.navigate(['/']);
        }
      }else{
        this.router.navigate(['/login']);
      }
    },error=>{
      this.router.navigate(['/login']);
    });
  }
}
