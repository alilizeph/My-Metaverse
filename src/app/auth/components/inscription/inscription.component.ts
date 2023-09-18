import { Component, OnInit } from '@angular/core';
import { FormGroup, FormBuilder, Validators } from '@angular/forms';
import { Observable, map } from 'rxjs';
import { UsersService } from '../../../core/services/user.service';
import { Router } from '@angular/router';


@Component({
  selector: 'app-inscription',
  templateUrl: './inscription.component.html',
  styleUrls: ['./inscription.component.scss']
})
export class InscriptionComponent implements OnInit {
  userForm!: FormGroup;

  constructor(private formBuilder: FormBuilder,
    private usersService: UsersService,
    private router: Router) {

  }

  ngOnInit(): void {
    this.userForm = this.formBuilder.group({
      email: [null, [Validators.required]],
      mdp: [null, [Validators.required]],
      nom: [null, [Validators.required]],
      prenom: [null, [Validators.required]],
      username: [null, [Validators.required]],
      naissance: [null, [Validators.required]]
    });
  }

  onSubmitForm() {
    this.usersService.addUser(this.userForm.value);
    this.router.navigateByUrl("/");
  }
}
