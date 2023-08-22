import { Component, Input, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { User } from 'src/app/core/models/user.model';
import { UsersService } from 'src/app/core/services/user.service';

@Component({
  selector: 'app-profil',
  templateUrl: './profil.component.html',
  styleUrls: ['./profil.component.scss']
})
export class ProfilComponent implements OnInit {
  @Input() user!: User;

  constructor(private usersService: UsersService,
    private router: Router) {
    this.user = this.usersService.getCurrentUser();
  }

  ngOnInit(): void {

  }
}
