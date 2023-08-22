export class VideoGame {
  id!: number;
  nom!: string;
  console!: number;
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
  avis!: string;
  imgBoite!: string;
  imgTheme!: string;
  note!: number;
  genres!: number[];
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
  dateSortie!: Date;
  prixMoyen!: number;
  disponibilite!: boolean;
  lien!: string;
  commentaires!: Comment[];

  constructor(id: number, nom: string, console: number,
    description: string, avis: string,
    imgBoite: string, imgTheme: string,
    sortie: Date, disponibilite: boolean,
    lien: string, genres: number[]) {
    this.id = id;
    this.nom = nom;
    this.console = console;
    this.description = description;
    this.avis = avis;
    this.imgBoite = imgBoite;
    this.imgTheme = imgTheme;
    this.dateSortie = sortie;
    this.genres = genres;
    this.disponibilite = disponibilite;
    this.lien = lien;
    this.commentaires = [];
    //this.genres.sort((a, b) => a.localeCompare(b));
  }

}
