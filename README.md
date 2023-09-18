# <h1 style="text-align:center">My Metaverse V1.6</h1>

## An Angular Project

This is my first Angular project I named **__"My Metaverse"__**. It's a website based on the theme of __videogames reviews with my own advice and a little description, with a grade__.
The user will can create his account profile, give his own opinion about the videogame or my advice.

I will have a long work but this is my goal in three stages and the three of them will be independent of each other parts :
1. **Actually** : Creating an __Angular "My Metaverse"__ application
2. **just after** : Creating the same project but with the __backend Framework Symfony__
3. **to finish** : Creating an __API using Angular for the frontend and Symfony for the backend__

## Different versions of My Metaverse

| **__Version__**  | **__Description__** |
|:--------:|:---------|
|  __My Metaverse V1.1 to 1.2__ |  Creating principle components with the VideoGames and the homepage, <br>Update of the routing system, <br>Adding a model and a service for a VideoGames and a Users class |
| __My Metaverse V1.3__ | Creating the module system <br> Adding some properties in the VideoGames compoents like the possibility to add a new VideoGame for the admin |
| __My Metaverse V1.4__ | Adding a ProfileComponent that the user will can access, <br>Trying to add a Guards system to protect some routes but replaced by some functions to redirect automatically the time to find a solution,<br> Beginning of the responsive design work,<br> Setting up of the Lazy Loading system and Updating the routing system accordingly |
| __My Metaverse V1.5__ | Changing all properties into english names,<br> Adding a class named Comments with its model and service |
| **__My Metaverse V1.6__** | Completing this README.md file,<br> Trying to make functionnal the Guards<br> Completing the Profile's template<br>Preparing the possible database system for this project and learning how does it work. (so actually not really completed) |

## Actual class versions :

### **__VideoGame__** :
* __id__: number
* __name__: string
* __platform__: number __// each number is corresponding to a videogame platform (like Nintendo Switch or PlayStation 5)__
* __description__: string
* __advice__: string
* __genders__ : number  __// each number is corresponding to a videogame gender (like RPG, open-world ...)__
* __grade__ : number
* __releaseDate__: Date
* __averagePrice__: number
* __disponibility__:boolean
* __link__: string
* __comments__: Comments[]
* __nbLikes__* : number
* __averageUsersGrade__*: number

### **__Users__** :
* __id__ : number
* __surname__ : string
* __firstName__ : string
* __email__ : string;
* __pwd__ : string 
* __gender__ : string
* __birthday__ : Date
* __comments__* : Comments[]
* __nbComments__* : number
* __avatar__ : string
* __isAdmin__ : boolean
* __connected__ : boolean

### **__Comments__*** :
* __id__ : number
* __user__ : User
* __videoGame__ : VideoGame
* __title__ : string
* __content__ : string
* __grade__ : number
* __postDate__ : Date

**__\* : properties in progress__**

**Thank you for your attention**

#### By BUFFARD Alexandre
#### Email : buffardalex492@hotmail.fr
#### LinkedIn : [My LinkedIn profil](https://www.linkedin.com/in/alexandre-buffard-973997153/)
