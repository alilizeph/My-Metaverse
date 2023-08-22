import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { User } from '../../../core/models/user.model';
import { UsersService } from '../../../core/services/user.service';
import { AuthentificationService } from '../../../core/services/authentification.service';

@Component({
  selector: 'app-connexion',
  templateUrl: './connexion.component.html',
  styleUrls: ['./connexion.component.scss']
})
export class ConnexionComponent implements OnInit {
  connexionForm!: FormGroup;

  constructor(private formBuilder: FormBuilder,
    private usersService: UsersService,
    private router: Router) {

  }

  ngOnInit(): void {
    this.connexionForm = this.formBuilder.group({
      username: [null, [Validators.required]],
      mdp: [null, [Validators.required]]
    });
  }

  onConnexonSuccess(user: User) {
    this.usersService.setConnexion(user.username);
  }

  onSubmitForm() {
    this.usersService.connexion(this.connexionForm.value);

    const user = this.usersService.getUserByUserNameAndMdp(this.connexionForm.value[0], this.connexionForm.value[1]);

    if (user) {
      this.onConnexonSuccess(user);
      this.router.navigateByUrl('user/profile');
    } else {
      throw new Error('Erreur de connexion : identifiants invalides');
      this.router.navigateByUrl('/');
    }
  }
}
