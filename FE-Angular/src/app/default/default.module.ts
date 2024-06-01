import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { DefaultRoutingModule } from './default-routing.module';
import { DefaultComponent } from './default.component';
import { ListAnimalComponent } from './list-animal/list-animal.component';


@NgModule({
  declarations: [
    DefaultComponent,
    ListAnimalComponent
  ],
  imports: [
    CommonModule,
    DefaultRoutingModule
  ]
})
export class DefaultModule { }
