import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { DefaultModule } from './default/default.module';

const routes: Routes = [
  // Cấu hình lazy loading
  {
    path: '',
    loadChildren: () => import('./default/default.module').then(m => m.DefaultModule),
  },
  {
    path: 'admin',
    loadChildren: () => import('./admin/admin.module').then(m => m.AdminModule)
  },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
