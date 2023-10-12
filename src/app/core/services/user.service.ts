import { Injectable } from '@angular/core';
import { Router } from '@angular/router';

import { User } from '../models/user.model';
import { Comments } from '../models/comments.model';
import { CommentsService } from './comments.service';
import { MyMetaverseService } from './my-metaverse.service';


@Injectable({
  providedIn: 'root'
})
export class UsersService {
  private currentUser: User | null = null;
  private userIsConnected: boolean = false;
  private userIsAdmin: boolean = false;


  constructor(private router: Router,
    private myMetaverseService: MyMetaverseService) { }

  getAllUsers(): User[] {
    return this.myMetaverseService.getAllUsers();
  }

  checkCurrentUser() {
    if (this.currentUser) {
      if (this.currentUser != this.myMetaverseService.getUserById(this.currentUser.id))
        this.currentUser = this.myMetaverseService.getUserById(this.currentUser.id);
    }
  }

  length(): number {
    return this.getAllUsers().length + 1;
  }

  getUserById(userId: number): User {
    return this.myMetaverseService.getUserById(userId);
  }

  getCurrentUser(): User | null {
    return this.currentUser;
  }

  getUserIsConnected(): boolean {
    if (this.currentUser)
      return this.currentUser.connected;
    else
      return false;
  }

  getUserIsAdmin(): boolean {
    if (this.currentUser)
      return this.currentUser.isAdmin;
    else
      return false;
  }

  getUserByUserName(username: string) {
    return this.myMetaverseService.getUserByUsername(username);
  }

  getUserByUserNameAndMdp(username: string, pwd: string) {
    return this.myMetaverseService.getUserByUsernameAndPwd(username, pwd);
  }

  isUserConnected() {
    var isConnected = false;

    this.myMetaverseService.getAllUsers().forEach(user => {
      if (user.connected) {
        isConnected = true;
      }
    });

    return isConnected;
  }

  isUserAdmin() {
    var isAdmin = false;

    this.myMetaverseService.getAllUsers().forEach(user => {
      if (user.isAdmin) {
        isAdmin = true;
      }
    });

    return isAdmin;
  }

  loginUser(username: string, pwd: string): User | null {
    const user = this.getUserByUserNameAndMdp(username, pwd);

    if (user) {
      this.currentUser = user;
      user.connected = true;
      this.userIsConnected = true;

      if (user.isAdmin)
        this.userIsAdmin = true;
      else
        this.userIsAdmin = false;
      return user;
    } else {
      this.userIsConnected = false;
      this.userIsAdmin = false;
      return null;
    }
  }

  logoutUser() {
    if (this.currentUser) {
      this.currentUser.connected = false;
      this.currentUser = null;
    }
  }

  deconnexion() {
    this.currentUser = null;
    this.userIsAdmin = false;
    this.router.navigateByUrl('/');
  }

  addUser(formValue: { surname: string, firstName: string, email: string, username: string, gender: "Homme" | "Femme" | "ielle" | "indéterminé", birthday: Date, avatar: string, pwd: string}) {
    const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    if (emailPattern.test(formValue.email)){
      const user: User = {
        ...formValue,
        id: this.length() + 1,
        likes: 0,
        nbComments: 0,
        isAdmin: false,
        connected: false,
        presentation: ""
      };

      //this.myMetaverseService.addUser(user);
    }
  }
}
