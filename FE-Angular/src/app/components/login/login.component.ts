import { Component } from '@angular/core';
import { LoginService } from 'src/app/app-services/login.service';


@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent {
  constructor(private loginService:LoginService){}

  loginForm = {
    email:'',
    password:'',
  }
  login(): void{
    this.loginService.postLogin(this.loginForm.email,this.loginForm.password).subscribe((data) =>{
      if(data){
        console.log(data);
      }
    },error=>{
      console.log(error);
    });
  }
}
