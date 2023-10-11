import { User } from "./user.model";

export class VideoGame {
  id!: number;
  name!: string;
  platform!: number;
  /**
   * Possible values :
   * 1 = Nintendo Switch,
   * 2 = PC Steam,
   * 3 = PlayStation 5,
   * 4 = GameBoy Advanced,
   * 5 = GameBoy / GameBoy Color
   * 6 = PlayStation 4
   * 7 = Nintendo DS
   * 8 = Nintendo 3DS
   * 9 = PlayStation 3
   * 10 = PlayStation 2
   * 11 = PlayStation
   * 12 = XBox
   * 13 = XBox 360
   * 14 = XBox One
   * 15 = XBox Series
   */
  description!: string;
  advice!: string;
  imgBox!: string;
  imgTheme!: string;
  grade!: number;
  genders!: number[];
  /**
  * Possible values :
  * 1 = RPG
  * 2 = Aventure
  * 3 = Fantastique
  * 4 = Création
  * 5 = Open World
  * 6 = Gestion
  * 7 = Réflexion
  * 8 = Ecologie
  * 9 = Santé
  * 10 = Survie
  * 11 = Tactique
  * 12 = Stratégie
  */
  releaseDate!: Date;
  averagePrice!: number;
  disponibility!: boolean;
  link!: string;
  likes!: { likes: number, users: User[] };
  averageUsersGrade!: number;


  constructor(id: number, name: string, platform: number,
    description: string, advice: string, grade: number,
    imgBoite: string, imgTheme: string, price: number,
    release: Date, disponibilite: boolean, lien: string,
    genders: number[], averageUsersGrade: number) {
    this.id = id;
    this.name = name;
    this.platform = platform;
    this.description = description;
    this.advice = advice;
    this.imgBox = imgBoite;
    this.grade = grade;
    this.averagePrice = price;
    this.imgTheme = imgTheme;
    this.releaseDate = release;
    this.genders = genders;
    this.disponibility = disponibilite;
    this.link = lien;
    this.likes = { likes: 0, users: []};
    this.averageUsersGrade = averageUsersGrade;
  }

}
