import { Injectable } from "@angular/core";
import { ActivatedRouteSnapshot, Router, RouterStateSnapshot, UrlTree } from "@angular/router";
import { CanActivate } from "@angular/router";
import { Observable } from "rxjs";
import { UsersService } from "src/app/core/services/user.service";

@Injectable({
  providedIn: 'root',
})
export class AuthGuard implements CanActivate{
  constructor(private userService: UsersService,
    private router: Router) { }

  canActivate(route: ActivatedRouteSnapshot, state: RouterStateSnapshot): boolean | UrlTree | Observable<boolean | UrlTree> | Promise<boolean | UrlTree> {

    if (this.userService.isUserConnected()) {
      return this.userService.isUserConnected();
    } else {
      console.log(new Error("Veuillez être connecté si vous voulez accéder à cette page."));
      this.router.navigateByUrl("auth/login");
      return false;
    }
  }
}