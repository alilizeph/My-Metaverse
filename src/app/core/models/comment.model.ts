import { User } from "./user.model";
import { VideoGame } from "./video-game.model";

export class Comment {
  id!: number;
  user!: User;
  videoGame!: VideoGame;
  title!: string;
  content!: string;

  constructor(id: number, user: User, videoGame: VideoGame,
    title: string, content: string) {
    this.id = id;
    this.user = user;
    this.videoGame = videoGame;
    this.title = title;
    this.content = content;
  }


}
