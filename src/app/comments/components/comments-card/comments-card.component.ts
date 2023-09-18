import { Component, Input, OnInit } from '@angular/core';
import { Comments } from 'src/app/core/models/comments.model';
import { CommentsService } from 'src/app/core/services/comments.service';

@Component({
  selector: 'app-comments-card',
  templateUrl: './comments-card.component.html',
  styleUrls: ['./comments-card.component.scss']
})
export class CommentsCardComponent implements OnInit {
  @Input() comment!: Comments;
  isAnimated: boolean = false;

  constructor(private commentsService: CommentsService) { }

  ngOnInit(): void {
    setTimeout(() => {
      this.isAnimated = true;
    }, 850);

  }
}
