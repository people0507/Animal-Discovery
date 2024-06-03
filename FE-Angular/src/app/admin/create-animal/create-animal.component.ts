import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-create-animal',
  templateUrl: './create-animal.component.html',
  styleUrls: ['./create-animal.component.css']
})
export class CreateAnimalComponent {
  files: File[] = [];

	// onSelect(event) {
	// 	console.log(event);
	// 	this.files.push(...event.addedFiles);
	// }

	// onRemove(event) {
	// 	console.log(event);
	// 	this.files.splice(this.files.indexOf(event), 1);
	// }
}
