import { Component } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-list-user',
  templateUrl: './list-user.component.html',
  styleUrls: ['./list-user.component.css']
})
export class ListUserComponent {
  users = [
    {
      id: 1,
      name: 'John Doe',
      email: 'john@example.com',
      gender: 'Male',
      avatar: 'https://via.placeholder.com/150',
      birthday: '1990-01-01',
      role: 'Admin',
    },
    {
      id: 2,
      name: 'Jane Smith',
      email: 'jane@example.com',
      gender: 'Female',
      avatar: 'https://via.placeholder.com/150',
      birthday: '1995-05-05',
      role: 'User',
    },
    // Add more users as needed
  ];

  constructor(private router: Router) { }

  editUser(event: Event, user: any) {
    console.log(user.id);
    this.router.navigate(['admin/edit-user/', user.id]);
  }
}
