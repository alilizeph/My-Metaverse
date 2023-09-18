import { Injectable } from "@angular/core";
import { Router } from "@angular/router";
import { UsersService } from "./user.service";
import { VideoGamesService } from "./video-games.service";
import { Comments } from "../models/comments.model";
import { User } from "../models/user.model";
import { MyMetaverseService } from "./my-metaverse.service";


@Injectable({
  providedIn: 'root'
})
export class CommentsService {

  constructor(private myMetaverseService: MyMetaverseService,
    private usersService: UsersService,
    private videoGamesService: VideoGamesService) { }

  length(): number {
    return this.myMetaverseService.getAllComments().length;
  }

  getAllComments(): Comments[] {
    return this.myMetaverseService.getAllComments();
  }

  addCommentToService() {

  }

  getCommentsById(selectedComment: Comments): number | null {
    if (this.getAllComments().find(comment => comment === selectedComment)) {
      return selectedComment.id;
    } else {
      return null;
    }
  }

  getGradeById(selectedId: number): number {
    if(this.myMetaverseService.getCommentById(selectedId))
      return this.myMetaverseService.getCommentById(selectedId).grade;
    else
      throw new Error ("Commentaire n°"+selectedId+" introuvable !")
  }

  getGradeByUser(selectedUser: User): number {
    let comment = this.myMetaverseService.getAllComments().find(comment => comment.user === selectedUser);
    if (comment)
      return comment.grade;
    else
      throw new Error("Utilisateur et commentaire introuvable");
  }
/**
  getGradeByComment(selectedComment: Comments) {
    let comment = this.comments.find(com => com === selectedComment);
    if (comment)
      return comment.grade;
    else
      throw new Error('Commentaire introuvable !');
  }
 */

  getCommentByVideoGameId(videoGameId: number): Comments[] {
    return this.getAllComments().filter(comment => comment.videoGame.id === videoGameId);
  }

  getCommentByUserId(userId: number): Comments[] {
    return this.getAllComments().filter(comment => comment.user.id === userId);
  }

  onAddNewComment(formValue: { titre: string, commentaire: string, note: number}) {
    let currentUser = null;
    let currentVG = null;
    if (this.usersService.getCurrentUser())
      currentUser = this.usersService.getCurrentUser();

    if (this.videoGamesService.getCurrentVideoGame())
      currentVG = this.videoGamesService.getCurrentVideoGame();

    if (currentUser && currentVG) {
      const comment: Comments = {
        id: this.myMetaverseService.getAllComments().length + 1,
        user: currentUser,
        videoGame: currentVG,
        title: formValue.titre,
        content: formValue.commentaire,
        grade: formValue.note,
        postDate: new Date()
      };

      this.myMetaverseService.addComment(comment);
    } else {
      throw new Error("Un problème est survenu avec l'utilisateur courant ou le jeu vidéo courant")
    }
  }
}
