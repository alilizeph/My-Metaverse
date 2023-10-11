import { Component, Input, OnInit } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { Comments } from 'src/app/core/models/comments.model';
import { User } from 'src/app/core/models/user.model';
import { CommentsService } from 'src/app/core/services/comments.service';
import { MyMetaverseService } from 'src/app/core/services/my-metaverse.service';
import { UsersService } from 'src/app/core/services/user.service';
import { VideoGamesService } from 'src/app/core/services/video-games.service';

@Component({
  selector: 'app-profile-public',
  templateUrl: './profile-public.component.html',
  styleUrls: ['./profile-public.component.scss']
})
export class ProfilePublicComponent implements OnInit {
  @Input() user!: User;
  randomIndices: number[] = [];
  usersComments: Comments[] = [];
  randomComments: Comments[] = [];

  averageCommentsGrade: number = 0;


  constructor(private router: Router,
    private route : ActivatedRoute,
    private myMetaverseService: MyMetaverseService,
    private commentsService: CommentsService,
    private usersService: UsersService,
    private videoGamesService: VideoGamesService)
  { }

  ngOnInit():void {
    const usersId = +this.route.snapshot.params["id"];
    this.user = this.myMetaverseService.getUserById(usersId);
    this.usersComments = this.myMetaverseService.getCommentByUser(usersId);

    switch (this.usersComments.length) {
      case 0: {
        break;
      }
      case 1: {
        this.randomComments.push(this.usersComments[0]);
        break;
      }
      default: {
        this.generateRandomComments();
        this.randomComments = this.randomIndices.map(indice => this.usersComments[indice]);
        break;
      }
    }

    this.calculateNbComments();
    this.calculateAverageCommentsGrade();
  }


  generateRandomComments(): void {
    while (this.randomIndices.length < 2) {
      let randomIndex = Math.floor(Math.random() * this.myMetaverseService.getCommentByUser(this.user.id).length);
      if (!this.randomIndices.includes(randomIndex))
        this.randomIndices.push(randomIndex);
    }
  }

  calculateAge(): number {
    const today = new Date();
    let age = today.getFullYear() - this.user.birthday.getFullYear();
    const month = today.getMonth() - this.user.birthday.getMonth();
    if (month < 0 || (month === 0 && today.getDate() < this.user.birthday.getDate()))
      age = age - 1;

    return age;
  }

  calculateNbComments(): void {
    const comments = this.myMetaverseService.getCommentByUser(this.user.id);
    const nbComments = comments.length;
    this.user.nbComments = nbComments;
  }

  calculateAverageCommentsGrade(): void {
    const length = this.usersComments.length;

    if(length === 0) {
      this.averageCommentsGrade = 0;
    } else {
      const sumUserGrade = this.usersComments.reduce((sum, user) => sum + user.grade, 0);
      this.averageCommentsGrade = Math.round(sumUserGrade / length);
    }
  }

  goToVideoGame(videoGamesId: number): void {
    this.router.navigateByUrl(`videogames/${videoGamesId}`);
  }

  calculateNbLikes():void {
    const videogames = this.myMetaverseService.getAllVideoGames();

    videogames.map((videogame, i) => {
      videogame.likes.users.map(user => {
        if(user.id === this.user.id)
          this.user.likes++;
      })
    });
  }
}
