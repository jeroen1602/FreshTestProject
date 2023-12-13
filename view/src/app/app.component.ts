import { Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterOutlet } from '@angular/router';

@Component({
  selector: 'app-root',
  standalone: true,
  imports: [CommonModule, RouterOutlet],
  templateUrl: './app.component.html',
  styleUrl: './app.component.scss',
})
export class AppComponent {

  protected apiWorks?: boolean;

  protected testApi(): void {

    fetch('http://localhost:3000/').then(e => {
      return e.json();
    }).then(e => {
      this.apiWorks = e.ok;
    });

  }
}
