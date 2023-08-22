import { Component, Input } from '@angular/core';
import { NavigationEnd, Router } from '@angular/router';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})
export class AppComponent {
  title = 'my metaverse';
  showScrollOutTopButton = false;


  constructor(private router: Router) {
    this.router.events.subscribe((event) => {
      if (event instanceof NavigationEnd)
        this.scrollToTop();
    })
  }

  scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'auto' });
  }
}
