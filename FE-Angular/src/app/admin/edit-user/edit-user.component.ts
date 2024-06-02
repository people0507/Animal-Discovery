import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { UserService } from 'src/app/app-services/user.service';

@Component({
  selector: 'app-edit-user',
  templateUrl: './edit-user.component.html',
  styleUrls: ['./edit-user.component.css']
})
export class EditUserComponent implements OnInit {
  // editedUser: any;
  selectedFile: File | null = null;
  userId:any;
  allRole:any;
  url:any;
  allGender:any = 
  [
    {
      id:1,
      genderName: 'Nam',
    },
    {
      id:2,
      genderName: 'Nữ',
    }
  ]

  users:any = {
      id: '',
      name: '',
      email: '',
      gender: '',
      avatar: '',
      birthday: '',
      role: '',
  }

  constructor(private route: ActivatedRoute,private userService:UserService) {}

  ngOnInit(): void {
    this.userService.getAllRole().subscribe(data => {
      this.allRole = data.role;
      console.log(this.allRole);
    });

    this.userId = this.route.snapshot.paramMap.get('id');
    if (this.userId  !== null) {
      this.userService.getUser(this.userId).subscribe(data => {
        this.users = data.user;
        this.url =data.url;
        console.log(this.users);
      });
      // this.editUser(this.userId);
    }
  }

  isRoleSelected(roleId: number): boolean {
    return this.users.role === roleId;
  }

  isSelectedGender(genderId: number): boolean {
    return this.users.gender === genderId;
  }

  getSrcImage(src:any){
    var srcImg = this.url+'/avatars/'+src;
    return srcImg;
  }

  // editUser(id: number): void {
  //   this.editedUser = this.users.find(user => user.id === id); // Sử dụng this.users thay vì users
  // }

  updateUser(): void {
    this.userService.updateUser( this.userId,this.users).subscribe(data => {
      console.log(data);
    });
  }

  onFileSelected(event: any): void {
    this.users.file= event.target.files[0] as File;
    console.log(this.users);
  }
}
