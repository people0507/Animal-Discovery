import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { AdminRoutingModule } from './admin-routing.module';
import { AdminComponent } from './admin.component';
import { ListAnimalComponent } from './list-animal/list-animal.component';
import { HeaderComponent } from './header/header.component';
import { FooterComponent } from './footer/footer.component';
import { SidebarComponent } from './sidebar/sidebar.component';
import { AsidebarComponent } from './asidebar/asidebar.component';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { EditAnimalComponent } from './edit-animal/edit-animal.component';
import { CreateAnimalComponent } from './create-animal/create-animal.component';
import { ListUserComponent } from './list-user/list-user.component';
import { EditUserComponent } from './edit-user/edit-user.component';
import { HttpClientModule } from '@angular/common/http';
import { NgxDropzoneModule } from 'ngx-dropzone';


@NgModule({
  declarations: [
    AdminComponent,
    ListAnimalComponent,
    HeaderComponent,
    FooterComponent,
    SidebarComponent,
    AsidebarComponent,
    EditAnimalComponent,
    CreateAnimalComponent,
    ListUserComponent,
    EditUserComponent,
  ],
  imports: [
    CommonModule,
    AdminRoutingModule,
    FormsModule,
    HttpClientModule,
    NgxDropzoneModule,
    ReactiveFormsModule
  ]
})
export class AdminModule { }
