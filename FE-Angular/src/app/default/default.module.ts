import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { DefaultRoutingModule } from './default-routing.module';
import { DefaultComponent } from './default.component';
import { ListAnimalComponent } from './list-animal/list-animal.component';
import { HomeComponent } from './home/home.component';


@NgModule({
  declarations: [
    DefaultComponent,
    ListAnimalComponent,
    HomeComponent
  ],
  imports: [
    CommonModule,
    DefaultRoutingModule
  ]
})
export class DefaultModule { }
