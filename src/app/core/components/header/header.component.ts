import { Component, Input } from '@angular/core';
import { User } from '../../models/user.model';
import { UsersService } from '../../services/user.service';
import { Router } from '@angular/router';
import { AuthentificationService } from '../../services/authentification.service';

@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.scss']
})
export class HeaderComponent {
  @Input() user!: User;

  constructor(private usersService: UsersService,
    private router: Router,
    private authentificationService: AuthentificationService) {

  }

  isUserConnected(): boolean {
    return this.usersService.isUserConnected();
  }

  isUserAdmin(): boolean {
    return this.usersService.isUserAdmin();
  }

  deconnexion() {
    if (this.isUserConnected()) {

    }
    this.router.navigateByUrl('/');
  }
}
