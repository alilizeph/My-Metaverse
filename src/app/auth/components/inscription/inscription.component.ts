import { Component, OnInit } from '@angular/core';
import { FormGroup, FormBuilder, Validators } from '@angular/forms';
import { Observable, map } from 'rxjs';
import { User } from '../../../core/models/user.model';
import { UsersService } from '../../../core/services/user.service';
import { Router } from '@angular/router';
import { AuthentificationService } from '../../../core/services/authentification.service';

@Component({
  selector: 'app-inscription',
  templateUrl: './inscription.component.html',
  styleUrls: ['./inscription.component.scss']
})
export class InscriptionComponent implements OnInit {
  userForm!: FormGroup;

  constructor(private formBuilder: FormBuilder,
    private usersService: UsersService,
    private router: Router,
    private authentificationService: AuthentificationService) {

  }

  ngOnInit(): void {
    this.userForm = this.formBuilder.group({
      email: [null, [Validators.required]],
      mdp: [null, [Validators.required]],
      nom: [null, [Validators.required]],
      prenom: [null, [Validators.required]],
      usernaem: [null, [Validators.required]],
      dateNaissance: [null, [Validators.required]]
    });
  }

  onSubmitForm() {
    this.usersService.addUser(this.userForm.value);
    this.router.navigateByUrl("/");
  }
}
