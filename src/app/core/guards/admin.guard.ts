import { Injectable } from "@angular/core";
import { ActivatedRouteSnapshot, Router, RouterStateSnapshot, UrlTree } from "@angular/router";
import { CanActivate } from "@angular/router";
import { Observable } from "rxjs";
import { UsersService } from "src/app/core/services/user.service";

@Injectable({
  providedIn: 'root',
})
export class AdminGuard implements CanActivate{
  constructor(private userService: UsersService,
    private router: Router) { }

  canActivate(route: ActivatedRouteSnapshot, state: RouterStateSnapshot): boolean | UrlTree | Observable<boolean | UrlTree> | Promise<boolean | UrlTree> {
    if (this.userService.isUserConnected() && this.userService.isUserAdmin()) {
      return this.userService.isUserAdmin() && this.userService.isUserConnected();
    } else {
      alert(new Error("Vous n'avez pas les droits pour accéder à cette page !\n Retour à la page d'accueil."));
      setTimeout(() => {
        this.router.navigateByUrl("/");
      }, 450);


      return false;
    }
  }
}
