import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { UsersService } from '../../../core/services/user.service';

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
      pwd: [null, [Validators.required]]
    });
  }

  onLogin() {
    const { username, pwd } = this.connexionForm.value;
    const user = this.usersService.loginUser(username, pwd);

    if (user) {
      this.usersService.loginUser(username, pwd);
      this.router.navigateByUrl("/user/profile");
    } else {
      throw new Error("Erreur de connexion : Identifiant ou Mot de passe invalides");
    }
  }
}
