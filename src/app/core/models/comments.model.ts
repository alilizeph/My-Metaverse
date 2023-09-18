import { User } from "./user.model";
import { VideoGame } from "./video-game.model";

export class Comments {
  id!: number;
  user!: User;
  videoGame!: VideoGame;
  title!: string;
  content!: string;
  grade!: number;
  postDate!: Date;

  constructor(id: number, user: User, videoGame: VideoGame,
    title: string, content: string, grade: number, date: Date) {
    this.id = id;
    this.user = user;
    this.videoGame = videoGame;
    this.title = title;
    this.content = content;
    this.postDate = date;
    this.grade = grade;
  }

}
