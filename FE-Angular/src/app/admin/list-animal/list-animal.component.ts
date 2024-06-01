import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
declare var bootstrap: any; // Declare bootstrap variable

@Component({
  selector: 'app-list-animal',
  templateUrl: './list-animal.component.html',
  styleUrls: ['./list-animal.component.css']
})
export class ListAnimalComponent implements OnInit {
  animals = [
    {
      id: 1,
      name: 'Great White Shark',
      scientificName: 'Carcharodon carcharias',
      description: 'The great white shark is a large species of shark found in coastal waters.',
      imageSrc: 'https://news4sanantonio.com/resources/media2/16x9/full/1015/center/80/cab905ba-dbcd-43ab-99c7-3fbdf1eadd8b-large16x9_GettyImages515714114.jpg',
      category: 'Fish',
      length: '5 meters',
      height: '1.5 meters',
      weight: '1100 kg',
      size: 'Large',
      lifespan: '70 years',
      sound: 'Shark sound',
      video: 'shark_video.mp4',
      conservationStatus: 'Vulnerable',
      activity: 'Diurnal',
      diet: 'Carnivore'
    },
    {
      id: 2,
      name: 'Great White Shark 2',
      scientificName: 'Carcharodon carcharias',
      description: 'The great white shark is a large species of shark found in coastal waters.',
      imageSrc: 'https://news4sanantonio.com/resources/media2/16x9/full/1015/center/80/cab905ba-dbcd-43ab-99c7-3fbdf1eadd8b-large16x9_GettyImages515714114.jpg',
      category: 'Fish',
      length: '5 meters',
      height: '1.5 meters',
      weight: '1100 kg',
      size: 'Large',
      lifespan: '70 years',
      sound: 'Shark sound',
      video: 'shark_video.mp4',
      conservationStatus: 'Vulnerable',
      activity: 'Diurnal',
      diet: 'Carnivore'
    },
    // Add more animals as needed
  ];

  selectedAnimal: any;
  animalToDelete: any;

  constructor(private router: Router) { }

  ngOnInit(): void { }

  confirmDelete(event: Event, animal: any) {
    event.stopPropagation();
    this.animalToDelete = animal;
    const modal = new bootstrap.Modal(document.getElementById('deleteConfirmationModal'));
    modal.show();
  }

  deleteAnimal() {
    this.animals = this.animals.filter(animal => animal !== this.animalToDelete);
    const modal = bootstrap.Modal.getInstance(document.getElementById('deleteConfirmationModal'));
    modal.hide();
  }

  closeModal() {
    const modal = bootstrap.Modal.getInstance(document.getElementById('animalModal'));
    modal.hide();
  }

  closeDeleteModal() {
    const modal = bootstrap.Modal.getInstance(document.getElementById('deleteConfirmationModal'));
    modal.hide();
  }

  viewAnimal(event: Event, animal: any) {
    this.selectedAnimal = animal;
    const modal = new bootstrap.Modal(document.getElementById('animalModal'));
    modal.show();
  }

  editAnimal(event: Event, animal: any) {
    this.router.navigate(['admin/edit-animal/', animal.id]);
  }
}
