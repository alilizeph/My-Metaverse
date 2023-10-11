export class User {
  id!: number;
  surname!: string;
  firstName!: string;
  email!: string;
  username!: string;
  pwd!: string;   // non crypté pour l'instant car pas encore de backend
  gender!: string;
  birthday!: Date;
  likes!: number; // a voir pour améliorer
  nbComments!: number;
  avatar!: string;
  presentation!: string;
  isAdmin!: boolean;
  connected!: boolean;

  constructor(id: number, surname: string, fsName: string, gender: "Homme" | "Femme" | "Ielle" | "Indéterminé",
    email: string, username: string, birthdayDate: Date, avatar: string, pwd: string, presentation: string) {
    this.id = id;
    this.surname = surname;
    this.firstName = fsName;
    this.email = email;
    this.username = username;
    this.pwd = pwd;
    this.birthday = birthdayDate;
    this.likes = 0;
    this.nbComments = 0;
    this.avatar = avatar;
    this.isAdmin = false;
    this.connected = false;
    this.gender = gender;
    this.presentation = presentation;
  }
}
