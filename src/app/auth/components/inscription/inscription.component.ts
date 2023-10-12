import { MyMetaverseService } from 'src/app/core/services/my-metaverse.service';
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
    private myMetaverseService: MyMetaverseService,
    private router: Router) {

  }

  ngOnInit(): void {
    this.userForm = this.formBuilder.group({
      email: [null, [Validators.required]],
      pwd: [null, [Validators.required]],
      firstName: [null, [Validators.required]],
      surname: [null, [Validators.required]],
      username: [null, [Validators.required]],
      birthday: [null, [Validators.required]],
      gender: [null]
    });
  }

  onSubmitForm() {
    this.myMetaverseService.addUser(this.userForm.value);
    this.router.navigateByUrl("/");
  }
}
