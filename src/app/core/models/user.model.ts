export class User {
  id!: number;
  nom!: string;
  prenom!: string;
  email!: string;
  username!: string;
  mdp!: string;   // non crypté pour l'instant car pas encore de backend
  anniversaire!: Date;
  nbLikes!: number;
  commentaires!: Comment[];
  nbCommentaires!: number;
  avatar!: string;
  isAdmin!: boolean;
  connected!: boolean;

  constructor(id: number, nom: string, prenom: string,
    email: string, username: string, anniversaire: Date, avatar: string, mdp: string) {
    this.id = id;
    this.nom = nom;
    this.prenom = prenom;
    this.email = email;
    this.username = username;
    this.mdp = mdp;
    this.anniversaire = anniversaire;
    this.commentaires = [];
    this.nbLikes = 0;
    this.nbCommentaires = 0;
    this.avatar = avatar;
    this.isAdmin = false;
    this.connected = false;
  }


}
