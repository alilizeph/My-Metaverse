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

<br><br>


**Thank you for your attention**

#### By BUFFARD Alexandre
#### Email : buffardalex492@hotmail.fr
#### LinkedIn : [My LinkedIn profile](https://www.linkedin.com/in/alexandre-buffard-973997153/)
