import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { AdminComponent } from './admin.component';
import { ListAnimalComponent } from './list-animal/list-animal.component';
import { EditAnimalComponent } from './edit-animal/edit-animal.component';
import { CreateAnimalComponent } from './create-animal/create-animal.component';
import { ListUserComponent } from './list-user/list-user.component';
import { EditUserComponent } from './edit-user/edit-user.component';

const routes: Routes = [
  {
    path: '',
    component: AdminComponent,
    children: [

      {
        path: 'list-animal',
        component: ListAnimalComponent
      },
      {
        path: 'edit-animal/:id',
        component: EditAnimalComponent,
      },
      {
        path: 'add-animal',
        component: CreateAnimalComponent,
      },
      {
        path: 'list-user',
        component: ListUserComponent,
      },
      {
        path: 'edit-user/:id',
        component: EditUserComponent,
      },

    ]
  },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class AdminRoutingModule { }
