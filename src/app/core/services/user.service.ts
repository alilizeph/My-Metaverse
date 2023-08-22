import { Injectable } from '@angular/core';
import { Router } from '@angular/router';
// import { end } from '@popperjs/core';
import { User } from '../models/user.model';

@Injectable({
  providedIn: 'root'
})
export class UsersService {
  users: User[] = [
    {
      id: 1,
      nom: "Buffard",
      prenom: "Alexandre",
      email: "ab@gmail.com",
      username: "alilizeph",
      mdp: "#MonMDPAdMiN",
      anniversaire: new Date(1997, 3, 21),
      nbLikes: 0,
      commentaires: [],
      nbCommentaires: 0,
      avatar: "assets/images/users/avatar/eevee.png",
      isAdmin: true,
      connected: false
    }
  ];

  private isAuthentified: boolean = false;
  private isAdmin: boolean = false;
  private currentUser!: User;


  constructor(private router: Router) { }

  getAllUsers(): User[] {
    return this.users;
  }

  length(): number {
    return this.users[this.users.length - 1].id + 1;
  }

  getUserById(userId: number): User {
    const user = this.users.find(user => user.id === userId);

    if (!user)
      throw new Error('This User not found !');
    else
      return user;
  }

  setConnexion(username: string): void {
    const user = this.users.find(user => user.username === username);
    if (user) {
      this.currentUser = user;
      this.isAuthentified = true;

      if (user.isAdmin)
        this.isAdmin = true;
      else
        this.isAdmin = false;
    } else {
      this.isAdmin = false;
      this.isAuthentified = false;
      throw new Error('Utilisateur introuvable');
    }
  }

  getCurrentUser(): User {
    return this.currentUser;
  }

  getUserByUserName(username: string) {
    return this.users.find(user => user.username === username);
  }

  getUserByUserNameAndMdp(username: string, mdp: string) {
    return this.users.find(user => user.username === username && user.mdp === mdp);
  }

  isUserConnected() {
    var isConnected = false;

    this.users.forEach(user => {
      if (user.connected) {
        isConnected = true;
      }
    });

    return isConnected;
  }

  isUserAdmin() {
    var isAdmin = false;

    this.users.forEach(user => {
      if (user.isAdmin) {
        isAdmin = true;
      }
    });

    return isAdmin;
  }

  addUser(formValue: { nom: string, prenom: string, email: string, username: string, anniversaire: Date, avatar: string, mdp: string}) {
    const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    if (emailPattern.test(formValue.email)){
      const user: User = {
        ...formValue,
        id: this.length(),
        commentaires: [],
        nbLikes: 0,
        nbCommentaires: 0,
        isAdmin: false,
        connected: false
      };

      this.users.push(user);
    }
  }

  connexion(formValue: { username: string, mdp: string }) {
      var user = this.users.find(user => user.username === formValue.username && user.mdp === formValue.mdp);
      if (user) {
        this.setConnexion(user.username);
      } else {
        throw new Error('This Video Game not found!');
      }
  }

  deconnexion() {
    this.setConnexion(this.currentUser.username);
    this.router.navigateByUrl('/');
  }
}
