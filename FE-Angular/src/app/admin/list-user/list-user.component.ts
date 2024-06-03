import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { UserService } from 'src/app/app-services/user.service';

@Component({
  selector: 'app-list-user',
  templateUrl: './list-user.component.html',
  styleUrls: ['./list-user.component.css']
})
export class ListUserComponent {
  url:any;
  users:any={
      id: '',
      name: '',
      email: '',
      gender: '',
      avatar: '',
      birthday: '',
      role: '',
  };

  constructor(private router: Router,private userService:UserService) { }

  ngOnInit(): void {
    this.userService.getUserList().subscribe(data => {
      this.users = data.user;
      this.url =data.url;
      console.log(data);
    });
  }
  editUser(event: Event, user: any) {
    console.log(user.id);
    this.router.navigate(['admin/edit-user/', user.id]);
  }

  getSrcImage(src:any){
    var srcImg = this.url+'/avatars/'+src;
    console.log(srcImg);
    return srcImg;
  }
}
