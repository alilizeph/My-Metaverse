import { Component, Input, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { Comments } from 'src/app/core/models/comments.model';
import { User } from 'src/app/core/models/user.model';
import { CommentsService } from 'src/app/core/services/comments.service';
import { MyMetaverseService } from 'src/app/core/services/my-metaverse.service';
import { UsersService } from 'src/app/core/services/user.service';

@Component({
  selector: 'app-profil',
  templateUrl: './profile.component.html',
  styleUrls: ['./profile.component.scss']
})
export class ProfileComponent implements OnInit {
  user!: User;
  presentationForm!: FormGroup;
  usersPresentation: string = "";
  presentationFormActivate: boolean = false;


  constructor(private usersService: UsersService,
    private commentsService: CommentsService,
    private myMetaverseService: MyMetaverseService,
    private router: Router,
    private formBuilder: FormBuilder) {
  }

  ngOnInit(): void {
    if (!this.usersService.isUserConnected())
      this.router.navigateByUrl('auth/login');

    this.updateUser();

    this.myMetaverseService.userPresentation$.subscribe(presentation => {
      this.usersPresentation = presentation;
    })

    this.presentationForm = this.formBuilder.group(
      {
        presentation: [null, [Validators.required]]
      }
    );
  }

  updateUser() {
    this.usersService.checkCurrentUser();
    let currentUser = this.usersService.getCurrentUser();
    if (currentUser)
      this.user = currentUser;
  }

  getUsersId(): number | null {
    if (this.user)
      return this.user.id;
    else
      return null;
  }

  getUsersSurname(): string | null{
    if (this.user)
      return this.user.surname;
    else
      return null;
  }

  getUsersfirstName(): string | null {
    if (this.user)
      return this.user.firstName;
    else
      return null;
  }

  getUsersAnniversaire(): Date | null {
    if (this.user)
      return this.user.birthday;
    else
      return null;
  }

  getUsersUserName(): string | null {
    if (this.user)
      return this.user.username;
    else
      return null;
  }

  getUsersEmail(): string | null {
    if (this.user)
      return this.user.email;
    else
      return null;
  }

  getUsersMDP(): string | null {
    if (this.user)
      return this.user.pwd;
    else
      return null;
  }

  getUsersNbLikes(): number | null {
    if (this.user)
      return this.user.likes;
    else
      return null;
  }

  getUsersComments(): Comments[] | null {
    if (this.user) {
      return this.commentsService.getCommentByUserId(this.user.id);
    } else {
      return null;
    }
  }

  getUsersNbComments(): number | null {
    if (this.user)
      return this.commentsService.getCommentByUserId(this.user.id).length;
    else
      return null;
  }

  getUsersAvatar(): string | null {
    if (this.user)
      return this.user.avatar;
    else
      return null;
  }

  getUsersPresentation(): string | null {
    if (this.user)
      return this.user.presentation;
    else
      return null;
  }

  getAverageGradeComments(): number | null {
    if (this.user) {
      let average = 0;
      const comments = this.getUsersComments();

      if (comments) {
        comments.forEach(comment => {
          average += comment.grade;
        });

        return Math.round(average / comments.length);
      } else {
        throw new Error("Un problème est apparu avec les commentaires de l'utilisateur courant");
      }
    } else {
      return null;
    }
  }

  userHasPresentation(): boolean {
    if (this.user) {
      if (this.user.presentation != "" || this.user.presentation)
        return true;
      else
        return false;
    } else {
      return false;
    }
  }

  setUsersPresentationActivate(): void {
    this.presentationFormActivate = true;
  }

  closePresentationForm(): void {
    this.presentationFormActivate = false;
  }

  onSubmitNewPresentation(): void {
    const presentation = this.presentationForm.get("presentation")?.value;

    if (presentation && presentation.trim() != "") {
      let userId = this.getUsersId();
      if (userId && this.user) {
        this.myMetaverseService.setUsersPresentation(userId, presentation);
        console.log(presentation);
        console.log(this.user.presentation);
        console.log(this.usersService.getCurrentUser()?.presentation);

        this.presentationFormActivate = false;
      }
    }
  }
}
