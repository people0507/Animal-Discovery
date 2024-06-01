import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-edit-animal',
  templateUrl: './edit-animal.component.html',
  styleUrls: ['./edit-animal.component.css']
})
export class EditAnimalComponent implements OnInit {
  animalId: number | null = null;
  editedAnimal: any;
  animals = [
    {
      id: 1,
      animalName: 'Great White Shark',
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
      animalName: 'Great White Shark 2',
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
    }
  ];

  constructor(private route: ActivatedRoute) {}

  ngOnInit(): void {
    const id = this.route.snapshot.paramMap.get('id');
    if (id !== null) {
      this.animalId = +id;
      this.editAnimal(this.animalId);
    }
  }

  editAnimal(id: number): void {
    this.editedAnimal = this.animals.find(animal => animal.id === id);
  }

  updateAnimal(): void {
    const index = this.animals.findIndex(animal => animal.id === this.editedAnimal.id);
    if (index !== -1) {
      this.animals[index] = this.editedAnimal;
    }
    this.editedAnimal = null;
  }
}
