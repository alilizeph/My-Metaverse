# <h1 style="text-align:center">My Metaverse Project</h1>

## My First Great Project with frontend and backend

This is my first Angular project I named **__"My Metaverse"__**. It's a website based on the theme of __videogames reviews with my own advice and a little description, with a grade__.
The user will can create his account profile, give his own opinion about the videogame or my advice.

I will have a long work but this is my goal in three stages and the three of them will be independent of each other parts :
1. **Actually** : Creating an __Angular "My Metaverse"__ application
2. **Since Today** : Creating the same project but with the __backend Framework Symfony__
3. **to finish** : Creating an __API using Angular for the frontend and Symfony for the backend__

## My Metaverse's frontend : Angular 

| **__Version__**  | **__Description__** |
|:--------:|:---------|
|  __My Metaverse V1.1 to 1.2__ | - Creating __principle components__ with the __VideoGames__ and the __homepage__, <br><br> - Update of the __routing system__, <br><br> - Adding a __model and a service__ for a __VideoGame__ and a Users class |
| __My Metaverse V1.3__ | - Creating the __module system__ <br><br> - Adding some properties in the __VideoGames compoents__ like the possibility to add a __new VideoGame for the admin__ |
| __My Metaverse V1.4__ | - Adding a __ProfileComponent__ that the user will can access, <br><br> - Trying to add a __Guards system__ to protect some routes but replaced by some functions to redirect automatically the time to find a solution,<br><br> - Beginning of the __responsive design work__,<br><br>- Setting up of the Lazy Loading system and Updating the routing system accordingly |
| __My Metaverse V1.5__ | - Changing all properties into english names,<br><br>- Adding a class named __Comments__ with its model and service |
| **__My Metaverse V1.6__** | - Completing this __README.md__ file,<br><br>- Trying to make functionnal the __Guards__<br><br> - Completing the __Profile's template__<br><br> - Preparing the possible database system for this project and learning how does it work. (so actually not really completed) |
| **__My Metavere V1.7__** | - Adding several objects in each tables of MyMetaverseService<br><br>- Working on few functions, in particular for the property __'averageUsersGrade'__ of VideoGame model (that partially works) and __'nbComments'__ of __Users model__ (that works) <br><br>- Starting and finishing of the __Comments__ system (A component to look at a __Comments__ : __CommentsCardComponent__, Another one to add a __Comments__ if you are connected : __CommentsUserComponent__ and a last one if you aren't connected : __CommentsFormComponent__)<br><br>- Centralization of storage in the __Comments class__ : if I want to access to the Comments from a __particular User__ or most generally the __comments of a VideoGame__, I go through few __Comments functions__<br><br>- Adding a new __ProfilePublic Component__ in the Users Module. The __user__ can access it when he clicks on the __'username'__ in a __Comments component__. Unlike the private profile, you can access to few statistics on this public profile (like __'nbComments'__ or an __'averageUsersCommentsGrade'__) and finally I created a new component __CommentsCardProfile__ which it looks like the __CommentsCard__ Component, so a profile visitor can see 1 or 2 random comments from the __User__<br><br>- I wait a bit to work on the database system and begin the Symfony version of My Metaverse <br><br> - Perhaps beginning of the __Symfony version__ of __My Metaverse__, trying to add a likes system for the VideoGames in the __Angular version__ |

<br><br>

### Actual class versions :

#### **__VideoGame__** :
* __id__: number
* __name__: string
* __platform__: number __// each number is corresponding to a videogame platform (like Nintendo Switch or PlayStation 5)__
* __description__: string
* __advice__: string
* __genders__ : number[]  __// each number is corresponding to a videogame gender (like RPG, open-world ...)__
* __grade__ : number
* __releaseDate__: Date
* __averagePrice__: number
* __disponibility__:boolean
* __link__: string
* __likes__* : { likes: number, users: User[] } __//Before v1.7: nbLikes* : number__
* __averageUsersGrade__ : number __// few problems to calculate this property if a user creates or modifies a comment, but it works when there isn't any new entries in the VideoGames table of MyMetaverseService. I think it could be fixed when I'll work with a database.__

#### **__Users__** :
* __id__ : number
* __surname__ : string
* __firstName__ : string
* __email__ : string
* __username__ : string
* __pwd__ : string 
* __gender__ : string
* __birthday__ : Date
* __nbComments__ : number
* __avatar__ : string
* __isAdmin__ : boolean
* __connected__ : boolean

#### **__Comments__*** :
* __id__ : number
* __user__ : User
* __videoGame__ : VideoGame
* __title__ : string
* __content__ : string
* __grade__ : number
* __postDate__ : Date

**__\* : properties in progress__**
<br><br>

## My Metaverse's backend : Symfony

<<<<<<< Updated upstream
=======
This is my **Symfony project part** I named **__"My Metaverse"__**. It's a website based on the theme of __videogames reviews with my own advice and a little description, with a grade__.
The user will can create his account profile, give his own opinion about the videogame or my advice.

I will have a long work but this is my goal in three stages and the three of them will be independent of each other parts :
1. **Actually off** : Creating an __Angular "My Metaverse"__ application
2. **Since November 2023** : Creating the same project but with the __backend Framework Symfony__
3. **to finish** : Creating an __API using Angular for the frontend and Symfony for the backend__

## My Metaverse's frontend : Angular 

| **__Version__**  | **__Description__** |
|:--------:|:---------|
| **__My Metaverse Symfony V1.*__**| - Creating each pages from Angular Project : <br> o homepage, o videogame reviews, o registration and login, o comments system, o public and private user's profile, <br> o admin space (in progress : I will had the possibility to add videogame, to make changes on videogame, to delete videogame ) <br> o an editing private page for the user <br><br> - Design updated compared to Angular version <br><br> - VichUploader installed to upload videogames Themes and Box images and User's Avatar |
|**__My Metaverse Symfony V2.0__** | - Adding few new elements compared with latest version and Angular version :<br> o in the menu : **moving 'MES CRITERES'** to the right board and **adding the Genders** in a submenu of 'MES CRITIQUES'<br> o upgrading the VideoGame's grade system by adding **4 criterias** : **graphics** __$graphicsGrade__, **gameplay** __$gameplayGrade__, **Storyline** __$storylineGrade__, **Execution** __$executionGrade__, and a last one already exists : $grade became an average grade<br> o Adding a property __$privateFieldsDisponibility__ possibility to the **User** to choose if he wants to post up his personal data on the public profile (__$firstName__, __$surname__ ... By default, the value is false, so his personal data will be not available) <br> |

>>>>>>> Stashed changes
<br><br>


<<<<<<< Updated upstream
**Thank you for your attention**

#### By BUFFARD Alexandre
#### Email : buffardalex492@hotmail.fr
#### LinkedIn : [My LinkedIn profile](https://www.linkedin.com/in/alexandre-buffard-973997153/)
=======
#### **__App\Entity\VideoGame__** :
* __$id__: ?int
* __$name__: ?string
* __$platform__: App\Entity\Platform ( ORM\ManyToOne(inversedBy:videoGames) )
* __$description__: ?string
* __$advice__: string
* __$imgThemeFile__ : ?Symfony\Component\HttpFoundation\File\File
* __$imgThemeNewFileName__ : ?string
* __$imgThemeFileSize__ : ?int
* __$imgBoxFile__ : ?Symfony\Component\HttpFoundation\File\File
* __$imgBoxNewFileName__ : ?string
* __$imgBoxFileSize__ : ?int
* __$genders__ : Doctrine\Common\Collections\Collection ( ORM\ManyToMany(App\Entity\Gender) )
* __$graphicsGrade__ : ?int (min: 0, max: 100)
* __$gameplayGrade__ : ?int (min: 0, max: 100)
* __$storylineGrade__ : ?int (min: 0, max: 100)
* __$executionGrade__ : ?int (min: 0, max: 100)
* __$grade__ : ?int (min: 0, max: 100)
* __$releaseDate__: ?DateTime
* __$averagePrice__: ?float
* __$disponibility__: ?bool
* __$link__: ?string
* __$likes__ : App\Entity\Likes ( ORM\OneToOne(App\Entity\Likes) )
* __$averageUsersGrade__ : ?int
* __$comments__ : Doctrine\Common\Collections\Collection ( ORM\ManyToMany(App\Entity\Comments) )

#### **__App\Entity\Gender__** :
* __$id__ : ?int
* __$genderName__ : ?string
* __$videoGames__ : Doctrine\Common\Collections\Collection ( ORM\ManyToMany(App\Entity\VideoGame) )

#### **__App\Entity\Platform__** :
* __$id__ : ?int
* __$paltformName__ : ?string
* __$videoGames__ : Doctrine\Common\Collections\Collection ( ORM\OneToMany(App\Entity\VideoGame) )

#### **__App\Entity\Likes__** :
* __$id__ : ?int
* __$nbLikes__ : ?int
* __$users__ : Doctrine\Common\Collections\Collection ( ORM\ManyToMany(App\Entity\User) )


#### **__App\Entity\Users__** :
* __$id__ : ?int
* __$surname__ : ?string
* __$firstName__ : ?string
* __$privateFieldsDisponibility__ : ?bool
* __$email__ : ?string
* __$username__ : ?string
* __$password__ : ?string 
* __$gender__ : ?string
* __$birthday__ : ?DateTime
* __$nbComments__ : ?int
* __$nbLikes__ : ?int
* __$avatar__ : ?string
* __$isAdmin__ : ?bool
* __$connected__ : ?bool
* __$avatarFile__ : ?Symfony\Component\HttpFoundation\File\File
* __$avatarNewFileName__ : ?string
* __$avatarFileSize__ : ?int
* __$likes__ : ?Doctrine\Common\Collections\Collection ( ORM\OneToMany(App\Entity\Likes) )
* __$comments__ : ?Doctrine\Common\Collections\Collection ( ORM\OneToMany(App\Entity\Comments) )

#### **__App\Entity\Comments__** :
* __$id__ : ?int
* __$user__ : ?App\Entity\User
* __$videoGame__ : ?App\Entity\VideoGame
* __$title__ : ?string
* __$content__ : ?string
* __$grade__ : ?int
* __$postDate__ : ?DateTime
>>>>>>> Stashed changes
