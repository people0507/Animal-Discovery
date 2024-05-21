import { Component } from '@angular/core';
import { LoginService } from 'src/app/app-services/login.service';

@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.css']
})
export class RegisterComponent {
  constructor(private loginService:LoginService){}

  registerForm = {
    name:'',
    email:'',
    password:'',
    repeatPassword:'',
  }
  register(): void{
    this.loginService.postRegister(this.registerForm.name,this.registerForm.email,this.registerForm.password,this.registerForm.repeatPassword).subscribe((data) =>{
      if(data){
        console.log(data);
      }
    },error=>{
      console.log(error);
    });
  }
}
