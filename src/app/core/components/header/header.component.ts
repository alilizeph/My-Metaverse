import { Component, Input, OnInit } from '@angular/core';
import { User } from '../../models/user.model';
import { UsersService } from '../../services/user.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.scss']
})
export class HeaderComponent implements OnInit {
  private user: User | null = null;

  constructor(private usersService: UsersService,
    private router: Router) {

  }

  ngOnInit(): void {
    this.user = this.usersService.getCurrentUser();
  }

  isUserConnected(): boolean {
    return this.usersService.getUserIsConnected();
  }

  isUserAdmin(): boolean {
    return this.usersService.isUserAdmin();
  }

  deconnexion() {
    this.usersService.logoutUser();
    this.router.navigateByUrl('/');
  }

  afficheUser() {
    console.log(this.user);
  }
}
