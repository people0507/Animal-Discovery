import { Component } from '@angular/core';
import { ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-edit-user',
  templateUrl: './edit-user.component.html',
  styleUrls: ['./edit-user.component.css']
})
export class EditUserComponent {
  editedUser: any;
  users = [
    {
      id: 1,
      name: 'John Doe',
      email: 'john@example.com',
      gender: 'Male',
      avatar: 'https://via.placeholder.com/150',
      birthday: '1990-01-01',
      role: 'Admin',
      description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut sapien sed metus tristique rhoncus.'
    },
    {
      id: 2,
      name: 'Jane Smith',
      email: 'jane@example.com',
      gender: 'Female',
      avatar: 'https://via.placeholder.com/150',
      birthday: '1995-05-05',
      role: 'User',
      description: 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque.'
    },
    // Add more users as needed
  ];

  constructor(private route: ActivatedRoute) {}

  ngOnInit(): void {
    const id = this.route.snapshot.paramMap.get('id');
    if (id !== null) {
      const userId = +id; // Đổi tên biến thành userId
      this.editUser(userId);
    }
  }

  editUser(id: number): void {
    this.editedUser = this.users.find(user => user.id === id); // Sử dụng this.users thay vì users
  }

  saveUser(): void {
    const index = this.users.findIndex(user => user.id === this.editedUser.id);
    if (index !== -1) {
      this.users[index] = { ...this.editedUser };
    }
    this.editedUser = null;
  }
}
