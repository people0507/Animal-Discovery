import { HttpResponse } from '@angular/common/http';
import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { LoginService } from 'src/app/app-services/login.service';

@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.css']
})
export class RegisterComponent {
  constructor(private loginService:LoginService,private router: Router){}

  registerForm = {
    name:'',
    email:'',
    password:'',
    repeatPassword:'',
  }
  register(): void{
    this.loginService.postRegister(this.registerForm.name,this.registerForm.email,this.registerForm.password,this.registerForm.repeatPassword).subscribe((response: HttpResponse<any>) =>{
      if(response.status === 200){
        this.router.navigate(['/'])
      }
    },error=>{
      this.router.navigate(['/register'])
    });
  }
}
