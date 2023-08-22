import { Injectable } from "@angular/core";

@Injectable
  ({
  providedIn: 'root'
  })
export class AuthentificationService {
  private isAuthentified: boolean = false;
  private currentUser: string = '';
  private isUserAdmin: boolean = false;

  login(username: string, password: string): void {
    this.isAuthentified = true;
    this.currentUser == username;
  }

  logout(): void {
    this.isAuthentified = false;
    this.currentUser = '';
  }

  getIsAuthentified(): boolean {
    return this.isAuthentified;
  }

  getCurrentUser(): string {
    return this.currentUser;
  }

  getIsUserAdmin(): boolean {
    return this.isUserAdmin;
  }
}
