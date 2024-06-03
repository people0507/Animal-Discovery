import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { UserService } from 'src/app/app-services/user.service';
import { FormControl, FormGroup, Validators } from "@angular/forms";

@Component({
  selector: 'app-edit-user',
  templateUrl: './edit-user.component.html',
  styleUrls: ['./edit-user.component.css']
})
export class EditUserComponent implements OnInit {
  // editedUser: any;
  form!: FormGroup;
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

  user:any = {
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
        this.user = data.user;
        this.url =data.url;
        this.form.patchValue(this.user);
        console.log(this.user);
      });
    }
    this.form = new FormGroup({
      name: new FormControl({ value: this.user.name, disabled: true }),
      email: new FormControl({ value: this.user.email, disabled: true }),
      gender: new FormControl(this.user.gender),
      avatar: new FormControl(null),
      birthdate: new FormControl(this.user.birthdate),
      role: new FormControl(this.user.role_id)
    });
  }

  isRoleSelected(roleId: number) {
    return this.user.role_id === roleId;
  }

  isSelectedGender(genderId: number) {
    return this.user.gender == genderId;
  }

  // getSrcImage(src:any){
  //   var srcImg = this.url+'/avatars/'+src;
  //   return srcImg;
  // }


  updateUser(): void {
    console.log(this.user);
    const formData: FormData = new FormData();

    formData.append('name', this.form.get('name')?.value);
    formData.append('email', this.form.get('email')?.value);
    formData.append('gender', this.form.get('gender')?.value);
    if (this.selectedFile) {
      formData.append('avatar', this.selectedFile, this.selectedFile.name);
    }
    formData.append('birthdate', this.form.get('birthdate')?.value);
    formData.append('role', this.form.get('role')?.value);

    formData.forEach((value, key) => {
      console.log(key, value);
    });

    this.userService.updateUser(this.user.id, formData).subscribe(data => {
      console.log('User updated:', data);
    });
  }

  onFileSelected(event: any): void {
    const file = event.target.files[0] as File;
    if (file) {
      this.selectedFile = file;
      const reader = new FileReader();
      reader.readAsDataURL(file);
      reader.onload = () => {
        this.user.avatar = reader.result;
      };
    }
  }

getSrcImage(avatar: string): string {
    return avatar ? avatar : 'default-avatar-url'; // Thay 'default-avatar-url' bằng URL của ảnh mặc định nếu có
}
}
