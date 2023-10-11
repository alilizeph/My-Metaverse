import { Injectable } from '@angular/core';
import { User } from '../models/user.model';
import { VideoGame } from '../models/video-game.model';
import { Comments } from '../models/comments.model';
import { BehaviorSubject, Observable, concatMap, of } from 'rxjs';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class MyMetaverseService {
  private jsonUrl = "./../../../../db.json";

  private users: User[] = [
    {
      id: 1,
      surname: "Buffard",
      firstName: "Alexandre",
      email: "ab@gmail.com",
      username: "alilizeph",
      pwd: "#MonMDPAdMiN",
      gender: "Homme",
      birthday: new Date(1997, 3, 21),
      likes: 0,
      nbComments: 1,
      avatar: "assets/images/users/avatar/eevee.png",
      isAdmin: true,
      connected: false,
      presentation: "Je me présente, je m'appelle Alexandre BUFFARD, j'ai 26 ans et je suis le développeur de cette Application Web Angular (pour l'instant) en autodidacte. \nJ'espère qu'elle vous plaît, que vous la trouvez accessible. N'hésitez pas à vous servir du formulaire à la page d'accueil. \nJe vous souhaite une bonne visite et une bonne journée !"
    },
    {
      id: 2,
      surname: "Dupont",
      firstName: "Arthur",
      email: "arthur-dupont@hotmail.fr",
      pwd: "C'estMonMDP92",
      username: "arthurdu92",
      gender:"Homme",
      birthday: new Date(1999, 7, 14),
      likes: 0,
      nbComments: 0,
      avatar: "",
      isAdmin: false,
      connected: false,
      presentation: `Je suis Arthur, j'ai 24 ans et je suis jeune diplômé d'un lycée hôtelier et mon truc c'est les jeux de plateforme et les FPS. J'aime aussi bien les Open-Worlds mais avec parcimonie.`
    },
    {
      id: 3,
      surname: "Kurosaki",
      firstName: "Ichigo",
      email: "ichi.kuro@gmail.com",
      username: "ichikuro",
      pwd: "7{9M%3vsiZy-T9",
      gender: "Homme",
      birthday: new Date(2001, 8, 7),
      likes: 0,
      nbComments: 0,
      avatar: "assets/images/users/avatar/ichikuro_avatar.jpg",
      isAdmin: false,
      connected: false,
      presentation: "Je m'appelle Ichigo, je suis un lycéen comme les autres ... Si ce n'est que j'ai la capacité de voir les fantômes, les esprits ... appelez ça comme vous voulez.\nUn jour, alors que ma famille était en danger, j'ai fait la rencontre d'une Shinigami nommée Rukia Kuchiki, après de grandes difficultés, elle m'a proposé de me préter ses pouvoirs pour protéger ma famille, j'ai accepté et je suis devenu à mon tour.\nJe vous passe les détails de la suite de l'histoire, mais on pourrait faire une histoire de plusieurs tomes de mangas haha !"
    },
    {
      id: 4,
      surname: "La Cookie",
      firstName: "Lamia",
      email: "lamia.lacookie.etudiant@univ-lr.fr",
      username: "elDiableteDu17",
      pwd: "MmEUwp567f89Bd",
      gender: "Femme",
      birthday: new Date(2000, 8, 9),
      likes: 0,
      nbComments: 0,
      avatar: "",
      isAdmin: false,
      connected: false,
      presentation: "Salut, je m'appelle Lamia, je suis une amie de Alexandre, alilizeph, avec qui j'ai passé une partie de mes études à L'Université de La Rochelle en licence informatique. Le développement Web c'est ma spécialité, actuellement, je suis en train de faire une licence professionnelle. \nQuand j'ai le temps, et j'en ai que trop peu à cause de la LP, je joue aux jeux vidéo et parfois, on essaye de se voir avec mon ami, mais c'est pas facile parce qu'il est actuellement dans sa campagne. (il fait pas d'effort aussi, l'Université encore moins !)"
    },
    {
      id: 5,
      surname: "Doe",
      firstName: "John",
      email: "john.doe@gmail.com",
      username: "johndoe",
      birthday: new Date(1990, 5, 15),
      pwd: "pwdN5PaSec",
      gender: "Homme",
      likes: 0,
      nbComments: 0,
      avatar: "",
      isAdmin: false,
      connected: false,
      presentation: "Salut, je suis John Doe. J'adore les nouvelles technologies et l'informatique en général. J'aime résoudre des énigmes complexes et apprendre de nouvelles compétences en ligne. N'hésitez pas à me contacter si vous avez des questions sur la programmation ou si vous voulez discuter de sujets technologiques passionnants."
    },
    {
      id: 6,
      surname: "Smith",
      firstName: "Alice",
      email: "asmith@outlook.fr",
      username: "alsmith",
      birthday: new Date(1985, 8, 21),
      pwd: "pwdN6PaSec",
      gender: "Femme",
      likes: 0,
      nbComments: 0,
      avatar: "",
      isAdmin: false,
      connected: false,
      presentation: "Bonjour à tous, je suis Alice Smith. Je suis une passionnée de photographie et de voyage. J'adore capturer des moments spéciaux à travers mon objectif et partager mes aventures avec le monde. Si vous partagez ces intérêts ou si vous avez des conseils de voyage à partager, faites-moi signe !"
    },
    {
      id: 7,
      surname: "Brown",
      firstName: "Robert",
      email: "brob@orange.fr",
      username: "brob",
      birthday: new Date(1993, 3, 8),
      pwd: "pwdN7PaSec",
      gender: "Homme",
      likes: 0,
      nbComments: 0,
      avatar: "",
      isAdmin: false,
      connected: false,
      presentation: "Salut, je m'appelle Robert Brown. Je suis un amateur de musique et de guitare. J'aime jouer de la guitare acoustique et je suis toujours à la recherche de nouveaux morceaux à apprendre. Si vous êtes un passionné de musique ou si vous cherchez quelqu'un avec qui jouer, n'hésitez pas à me contacter."
    },
    {
      id: 8,
      surname: "Johnson",
      firstName: "Emily",
      email: "emily.johnson@wanadoo.fr",
      username: "jemily",
      birthday: new Date(1988, 3, 8),
      pwd: "pwdN8PaSec",
      gender: "Femme",
      likes: 0,
      nbComments: 0,
      avatar: "",
      isAdmin: false,
      connected: false,
      presentation: "Coucou, je suis Emily Johnson. Je suis une fanatique de fitness et de bien-être. J'adore pratiquer le yoga et la méditation pour rester en forme mentalement et physiquement. Si vous partagez ces intérêts ou si vous avez des conseils pour vivre une vie saine, parlons-en !"
    },
    {
      id: 9,
      surname: "Lee",
      firstName: "Michael",
      email: "lckael@gmail.com",
      username: "lKaL",
      birthday: new Date(1991, 11, 30),
      pwd: "pwdN9PaSec",
      gender: "Homme",
      likes: 0,
      nbComments: 0,
      avatar: "",
      isAdmin: false,
      connected: false,
      presentation: ""
    },
    {
      id: 10,
      surname: "Wang",
      firstName: "Lily",
      email: "lily.wang@univ-bdx.fr",
      username: "lilyWang",
      birthday: new Date(1995, 2, 18),
      pwd: "pwdN10PaSec",
      gender: "Femme",
      likes: 0,
      nbComments: 0,
      avatar: "",
      isAdmin: false,
      connected: false,
      presentation: ""
    },
    {
      id: 11,
      surname: "Garcia",
      firstName: "Davis",
      email: "dave.garcia@gmail.com",
      username: "garvis",
      birthday: new Date(1982, 6, 6),
      pwd: "pwdN11PaSec",
      gender: "Homme",
      likes: 0,
      nbComments: 0,
      avatar: "",
      isAdmin: false,
      connected: false,
      presentation: ""
    },
    {
      id: 12,
      surname: "Kim",
      firstName: "Sophia",
      email: "ksophia@hotmail.com",
      username: "ksophia",
      birthday: new Date(1991, 7, 25),
      pwd: "pwdN12PaSec",
      gender: "Ielle",
      likes: 0,
      nbComments: 0,
      avatar: "",
      isAdmin: false,
      connected: false,
      presentation: ""
    },
    {
      id: 13,
      surname: "Lopez",
      firstName: "Daniel",
      email: "lop.dan@gmail.com",
      username: "yodan",
      birthday: new Date(1984, 1, 10),
      pwd: "pwdN13PaSec",
      gender: "Homme",
      likes: 0,
      nbComments: 0,
      avatar: "",
      isAdmin: false,
      connected: false,
      presentation: ""
    },
    {
      id: 14,
      surname: "Chen",
      firstName: "Olivia",
      email: "olivia.chen@gmail.com",
      username: "profChen",
      birthday: new Date(1998, 4, 3),
      pwd: "pwdN14PaSec",
      gender: "Femme",
      likes: 0,
      nbComments: 0,
      avatar: "",
      isAdmin: false,
      connected: false,
      presentation: ""
    }
  ];

  private userPresentationSubject  = new BehaviorSubject<string>("");


  private videoGames: VideoGame[] = [
    {
      id: 1,
      name: "Pokémon: Légendes Arceus",
      platform: 1,
      description: "Pokémon : Légendes Arceus est un opus de la saga Pokémon sorti en janvier 2022. Le héros se retrouve transporté dans le passé dans la région de Sinho, anciennement nommée Hisui. Le dieu des Pokémons Arceus vous donne pour mission de régler les différents problèmes qui s'abattent sur la région.",
      advice: "Ce jeu est un semi-openworld, l'histoire est intéressante et il est très intéressant de se retrouver dans la région de Sinho dans le passé. On peut y trouver de nombreux Pokémons, l'histoire est intéressante et remplir le Pokédex est, pour ma part, enfin amusant pour cataloguer les différentes espèces présentes dans la région de Hisui.",
      imgBox: "/assets/images/boites/pkmn_arceus-box.png",
      imgTheme: "assets/images/themes/pkmn_arceus-theme.png",
      grade: 71,
      genders: [1, 5, 3, 2, 11],
      releaseDate: new Date(2022, 1, 28),
      averagePrice: 54.99,
      disponibility: true,
      link: "https://www.amazon.fr/L%C3%A9gendes-Pok%C3%A9mon-Arceus-Nintendo-Switch/dp/B096FZ5ZRQ/ref=sr_1_1?keywords=pok%C3%A9mon+legend+arceus&qid=1689945200&sprefix=pok%C3%A9mon+legen%2Caps%2C162&sr=8-1",
      likes: { likes: 4, users: [this.getUserById(3), this.getUserById(4), this.getUserById(8)]},
      averageUsersGrade: 0
    },
    {
      id: 2,
      name: "Pokémon: version Écarlate et Violet",
      platform: 1,
      description: "Pokémon : Violet et Pokémon : Écarlate est un opus de la saga Pokémon sorti en novembre 2022. Dans ce nouvel opus, vous pourrez découvrir la région de Paldéa, région inspirée de l'Espagne. Vous pourrez l'explorer à pieds ou sur une monture : Koraidon (pour Écarlate) ou Miraidon (pour Violet), 2 pokémons que vous rencontrez lors de votre arrivée dans cette vaste région. Vous intégrerez l'académie Orange (pour Écarlate) ou l'académie Violette (pour Violet) qui vous proposera la grande chasse aux trésors, le but : découvrir quel est votre plus précieux trésor, est-ce remporter le titre de Maître de la Ligue Pokémon de Paldéa, est-ce de découvrir les Épices Secrètes sensées guérir les maux, ou est-ce de défaire la Team Star qui semblent poser des problèmes à l'académie et aux élèves.",
      advice: "Comme souvent depuis la 6ème génération, une nouvelle mécanique de jeu apparaît : la Téracristalisation ! Elle permet au Pokémon de changer temporairement de type pour adopter son Type Téracristal, ce qui peut donner un Pikachu de type Vol ! ",
      imgBox: "assets/images/boites/pkmn_ecarlate-box.png",
      imgTheme: "assets/images/themes/pkmn_violet_ecarlate-theme.png",
      grade: 58,
      genders: [1, 3, 2, 5, 11],
      releaseDate: new Date(2022, 11, 18),
      averagePrice: 59.99,
      disponibility: true,
      link: "https://www.amazon.fr/Nintendo-Pok%C3%A9mon-%C3%89carlate/dp/B0B31VDKKV/ref=sr_1_1?keywords=pok%C3%A9mon+%C3%A9carlate+switch&qid=1689945103&sprefix=pok%C3%A9mon+%C3%A9ca%2Caps%2C87&sr=8-1",
      likes: { likes: 2, users: [this.getUserById(7), this.getUserById(12)]},
      averageUsersGrade: 0
    },
    {
      id: 3,
      name: "Hogwarts Legacy : L'Héritage de Poudlard",
      platform: 3,
      description: "Hogwarts Legacy prend place au 19ème siècle environ dans la plus célèbre des écoles de magie : Poudlard de J.K. Rowling ! Vous incarnez un(e) jeune élève sur le point d'intégrer la 5ème année de l'école. Accompagné(e) du professeur Fig, vous allez découvrir des phénomènes liés à une magie ancienne que vous semblez pouvoir utiliser. A vous de découvrir le monde qui entoure l'école, de choisir entre Gryffondor, Serdaigle, Poufsouffle et Serpentard et partez à l'aventure avec d'autres élèves !",
      advice: "Ce jeu a été pour moi une excellente aventure ! Étant un grand fan de la saga Harry Potter et des Animaux Fantastiques, découvrir l'école de Poudlard au 19ème siècle a été un pur plaisir ! Ce jeu rend honneur à la saga, les personnages pouvant vous accompagner sont attachants, (Poppy <3 ), rien de plus agréable que de partir à la rescousse de créatures fantastiques qui sont mis à mal par les braconniers de Rockwood. L'apprentissage des sorts, comment les utiliser, lesquels vont avec les autres etc... L'histoire en elle-même est prenante, on découvre une magie ancienne qui semble puissante et dangereuse entre de mauvaises mains, et Ranrok semble la convoiter pour monter sa rébellion.",
      imgBox: "assets/images/boites/Hogwarts_Legacy-box.png",
      imgTheme: "assets/images/themes/Hogwarts_Legacy-theme.png",
      grade: 84,
      genders: [1, 5, 3, 2],
      releaseDate: new Date(2023, 2, 10),
      averagePrice: 79.99,
      disponibility: true,
      link: "https://www.amazon.fr/HOGWARTS-LEGACY-LHERITAGE-DE-POUDLARD/dp/B09M96C12Z/ref=sr_1_1?keywords=hogwarts+legacy+ps5&qid=1689945252&sprefix=howart%2Caps%2C130&sr=8-1",
      likes: { likes: 6, users: [this.getUserById(4), this.getUserById(7), this.getUserById(9), this.getUserById(11), this.getUserById(13), this.getUserById(5)]},
      averageUsersGrade: 0
    }, {
      id: 4,
      name: "Pokémon Rouge Feu/Vert Feuille",
      platform: 4,
      description: "Pokémon Rouge Feu est un remake des opus originaux de Pokémon : Pokémon Rouge et Vert (Bleu en France) et il reprend donc l'histoire de ces jeux avec de meilleurs graphiques, des chaussures de sport, choisissez entre Bulbizarre, Salamèche et Carapuce et partez à l'exploration de Kanto en affrontant les champions d'arène et en complétant votre Pokédex pour atteindre l'objectif final : arriver à bout de la Ligue Pokémon de Peter, spécialiste des Pokémons de type Dragon. ",
      advice: "Ce jeu est pour moi empli de nostalgie, je ne suis donc pas très objectif, mais j'ai pris un plaisir sincère à chaque fois que je me suis refait ce jeu ! Il s'agit d'un remake, avec donc de meilleurs graphismes que les originaux, tout en y incorporant les mécaniques ajoutées entre les originaux et Pokémon Rubis et Saphir, comme la reproduction, les Pokémons chromatiques, les capacités spéciales (talents) etc... C'est un jeu sorti avant les jeux de la 3DS (qui s'étaient mis à faciliter le gameplay en aidant parfois trop le joueur) et donc rien que cela est un plaisir : un peu de difficulté dans un jeu Pokémon ! (juste ce qu'il faut)",
      imgBox: "assets/images/boites/pkmn_rouge_feu-box.png",
      imgTheme: "assets/images/themes/pkmn_rouge_feu-theme.png",
      grade: 68,
      genders: [1, 3, 2, 5, 11],
      releaseDate: new Date(2004, 1, 29),
      averagePrice:39.99,
      disponibility: false,
      link: "",
      likes: { likes: 2, users: [this.getUserById(9), this.getUserById(10)]},
      averageUsersGrade: 0
    },
    {
      id: 5,
      name: "Terra Nil",
      platform: 2,
      description: "Terra Nil est un jeu sur le thème de l'environnement. Vous vous retrouvez sur une planète ravagée par la pollution, vous devez donc réabiliter cette terres stérile en écosystème dans la propérité et l'harmonie. A vous de trouver le moyen de ramener la vie sur cette planète !",
      advice: "Terra Nil est un jeu stratégique et de gestion sur le thème de l'environnement. Il s'agit d'un jeu visuellement très agréable, avec des musiques calmes et qui évoluent au fur et à mesure que vous restaurez votre environnement. Le jeu est au début un peu difficile le temps de comprendre les mécaniques de chaque élément de jeu, mais une fois que le jeu est compris, le jeu a un côté très détente. J'ai pris beaucoup de plaisir à le découvrir, à faire des restaurations, notamment car ce jeu se base sur des valeurs que tout le monde devrait suivre.",
      imgBox: "assets/images/boites/terra_nil-boite.jpg",
      imgTheme: "assets/images/themes/terra_nil-theme.jpg",
      grade: 78,
      genders: [6, 12, 8, 4, 7],
      releaseDate: new Date(2023, 3, 28),
      averagePrice: 24.99,
      disponibility: true,
      link: "https://store.steampowered.com/app/1593030/Terra_Nil/",
      likes: { likes: 1, users: [this.getUserById(1) ]},
      averageUsersGrade: 0
    },
    {
      id: 6,
      name: "Farthest Frontier",
      platform: 2,
      description: "Farthest Frontier a pour but de créer une ville du Moyen-Âge, de protéger les habitants. Collectez des ressources et faites la évoluer pour passer de petit village à ville en ouvrant plus de commerces, en construisant plus de maisons tout en résistant aux éléments.",
      advice: "Farthest Frontier est un jeu de gestion sympathique aux nombreuses possibilités. On commence par choisir une zone où importer sa future ville et on s'y installe. Ensuite il faut créer des infrastructures pour les villageois. Puis on fait évoluer au gré des saisons le village.",
      imgBox: "assets/images/boites/farthest_frontier-boite.jpg",
      imgTheme: "assets/images/themes/farthest_frontier-theme.jpg",
      grade: 47,
      genders: [6, 12, 10, 4],
      releaseDate: new Date(2018, 6, 12),
      averagePrice: 28.99,
      disponibility: true,
      link: "https://store.steampowered.com/app/1044720/Farthest_Frontier/",
      likes: { likes: 2, users: [this.getUserById(5), this.getUserById(9)]},
      averageUsersGrade: 0
    },
    {
      id: 7,
      name: "Jurassic World Evolution",
      platform: 2,
      description: "Jurassic World Évolution est un jeu qui se déroule après les évènements du film Jurassic World où les gérants tentent de faire renaître de nouveau Jurassic Park. C'est donc à vous que revient cette tâche de faire grandir votre parc sur les îles des 5 morts ! C'est donc à vous de vous de subvenir aux besoins des visiteurs et de vos dinosaures avec les infrastructures à votre disposition et l'aide des différents services du parc.",
      advice: "Jurassic World est un jeu de gestion exceptionnel ! Je ne compte plus les dizaines d'heures que j'ai passées à créer et recréer mon parc... Le jeu est bien équilibré et chaque île a ses spécificités : l'une est calme, une autre peut-être régulièrement prise dans une tempête tandis qu'une autre peut être endettée. A vous de trouver une solution aux problématiques et de faire des profits pour débloquer de nouvelles infrastructures.",
      imgBox: "assets/images/boites/jurassic_world-boite.jpg",
      imgTheme: "assets/images/themes/jurassic_world-theme.jpg",
      grade: 82,
      genders: [6, 12, 7, 4],
      releaseDate: new Date(2022, 8, 9),
      averagePrice: 44.99,
      disponibility: true,
      link: "https://store.steampowered.com/app/648350/Jurassic_World_Evolution/",
      likes: { likes: 4, users: [this.getUserById(5), this.getUserById(3), this.getUserById(8), this.getUserById(1)]},
      averageUsersGrade: 0,
    },
    {
      id: 8,
      name: "Project Hospital",
      platform: 2,
      description: "Project Hospital est un jeu de gestion dans le domaine de la santé. A vous de créer et de gérer votre propre hôpital, recrutez des médecins spécialistes et généralistes. Trouvez l'équilibre pour subvenir aux besoins de vos patients, mais aussi de vos salariés.",
      advice: "Project Hospital est un jeu aux graohismes assez moyens, voire pas terribles, il est très lent comme jeu de gestion et augmenter la vitesse c'est prendre le risque de faire dégénérer les choses. Pour prendre du plaisir pour jouer à ce jeu il faut être extrèmement patient ... Hormis pendant les promotions Steam, je trouve qu'il ne vaut pas son prix de vente de base.",
      grade: 31,
      genders: [6, 9, 12, 4],
      imgBox: "assets/images/boites/project_hospital-boite.jpg",
      imgTheme: "assets/images/themes/project_hospital-theme.jpg",
      releaseDate: new Date(30, 8, 2018),
      averagePrice: 24.99,
      disponibility: true,
      link: "https://store.steampowered.com/app/868360/Project_Hospital/",
      likes: { likes: 0, users: []},
      averageUsersGrade: 0
    },
    {
      id: 9,
      name: "Terraformers",
      platform: 2,
      description: "Terraformers est un jeu dont le but est de coloniser notre planète voisine : Mars. Choisissez la zone de votre première colonie, installez des habitations, des infrastructures et partez à l'exploration de la planète pour trouver des ressources et installer d'autres colonies.",
      advice: "Terraformers est un jeu de gestion stratégique très intéressant. On passe par différentes phases de colonisation pour finalement rendre notre nouvelle planète habitable. Là encore, c'est une question d'équilibre, il faut commercer avec la Terre pour recevoir des ressources nécessaires à la construction d'infrastructure par exemple ... A vous de faire le bon choix. Le jeu n'est pas difficile en soit, le faut juste prendre le temps de comprendre les mécaniques de jeux, j'y ai personnellement pris beaucoup de plaisir à rendre habitable cette belle planète rouge.",
      grade: 64,
      genders: [6, 12, 7, 4],
      imgBox: "assets/images/boites/terra_formers-boite.jpg",
      imgTheme: "assets/images/themes/terra_formers-theme.jpg",
      releaseDate: new Date(21, 4, 2022),
      averagePrice: 19.99,
      disponibility: true,
      link: "https://store.steampowered.com/app/1244800/Terraformers/",
      likes: { likes: 2, users: [this.getUserById(10), this.getUserById(5)]},
      averageUsersGrade: 0
    },
    {
      id: 10,
      name: "The Legend Of Zelda : Tears of the Kingdom",
      platform: 1,
      description: "Quelques années après leur victoire face à Ganon, Link et Zelda explorent les souterrains du château d'Hyrule. Ces souterrains semblent envahis par des miasmes rendant malade toute personne s'y aventurant. C'est à ce moment qu'ils découvrirent tout d'abord des statues et des gravures Sonneau, une civilisation perdue, décrivant une guerre nommée la \"Guerre du Sceau\". S'enfonçant de plus en plus sous le château, ils se retrouvèrent fasse à une momie reprenant vie. Elle semble tout d'abord connaître leurs prénoms, blessa grièvement Link avec ses miasmes, projeta le château dans les airs ... Link et Zelda chutèrent, Zelda disparut tandis que Link fut rattrapé par un gant étrange. A son réveil, Link se retrouva sur une île dans les cieux.",
      advice: "Je n'ai pas de mot pour décrire comme ce jeu est extraordinaire ... Il avait la lourde tâche de succéder à The Legend of Zelda : Breath of the Wild et il a réussi avec brio ! Entre les mécaniques donnant une infinité de possibilités de gameplay, l'histoire qui est très prenante, l'Open World qui est tout bonnement gigantesque entre la surface, les îles célestes et les profondeurs, moi qui suis fan d'aventure, je suis plus que servi ! Je vais lui reconnaître un défaut : là où son prédécesseur était accessible à tous, Tears of the Kingdom est très difficile et a une difficulté croissante avec des ennemis de plus en plus puissants et résistants, la prudence est donc de mise pour ceux qui ne sont pas habitués au gameplay de Breath of the Wild ... Mais quel plaisir, j'ai déjà dépassé les 100h de jeu pour arriver à Ganondorf (qui a du répondant ! Ce qui a dû en décourager certains ... ) et je suis en train de le recommencer ... BREF, un pur plaisir pour ma part. Que de bonheurs m'attendent ... La prochaine chose à faire est de refaire BOTW puis aussitôt TOTK, à vous de jouer ! ;)",
      grade: 98,
      genders: [1, 2, 5, 12, 3, 7, 4],
      imgBox: "assets/images/boites/zelda_totk-boite.jpg",
      imgTheme: "assets/images/themes/zelda_totk-theme.jpg",
      releaseDate: new Date(5, 12, 2023),
      averagePrice: 54.99,
      disponibility: true,
      link: "https://www.amazon.fr/Nintendo-Legend-Zelda-Kingdom-Switch/dp/B07SNRGQC4/ref=sr_1_1?keywords=tears+of+the+kingdom&qid=1691410380&sprefix=tears%2Caps%2C134&sr=8-1",
      likes: { likes: 4, users: [this.getUserById(1), this.getUserById(3), this.getUserById(13), this.getUserById(9)]},
      averageUsersGrade: 0
    },
    {
      id: 11,
      name: "The Legend Of Zelda : Breath of the Wild",
      platform: 1,
      description: "The Legend of Zelda : Breath of the Wild est difficile à placer dans la chronologie des jeux de la licence Zelda. Vous êtes Link et vous vous faites réveiller par une voix ... Vous êtes allongé dans une sorte de cuve qui vous a certainement soigné. Vous allez découvrir la Tablette Sheikah, un artéfact Sheikah très pratique. Vous sortez de l'endroit où vous vous trouviez et vous vous rendez rapidement compte que vous vous trouvez sur un Plateau isolé du monde ... Puis vous voyez un homme auquel vous vous adressez, il semble que vous ayez tout d'abord perdu la mémoire, impossible de vous rappeler de qui provenait cette voix qui vous obsède ... Vous comprenez juste que vous allez devoir affronter de grands dangers et notamment visiter des sanctuaires pour vous renforcer.",
      advice: "Ce jeu de la licence Zelda est juste génial. Le gameplay vous isolant du reste d'Hyrule au début pour apprendre, évidemment, à jouer Link, est une bonne idée. Les terres d'Hyrule sont vastes, les possibilités sont grandes, vous pouvez suivre l'histoire tranquillement, tout comme finir le Plateau du Prélude et affronter à vos risques et périls Ganon ... A vous de choisir, j'aime personnellement prendre monn temps, visiter le monde qui m'attend, ce que j'ai fait avec tant de plaisir !",
      grade: 87,
      genders: [1, 2, 5, 12, 3, 7],
      imgBox: "assets/images/boites/zelda_botw-boite.jpg",
      imgTheme: "assets/images/themes/zelda_botw-theme.jpeg",
      releaseDate: new Date(3, 3, 2017),
      averagePrice: 54.99,
      disponibility: true,
      link: "https://www.amazon.fr/Legend-Zelda-Breath-Wild/dp/B01MUAFFPA/ref=sr_1_1?keywords=breath+of+the+wild&qid=1691411304&sprefix=breat%2Caps%2C88&sr=8-1",
      likes:  { likes: 4, users: [this.getUserById(1), this.getUserById(6), this.getUserById(3), this.getUserById(7)]},
      averageUsersGrade: 0
    },
    {
      id: 12,
      name: "Draqon Quest XI : Les Combattants de la Destinée",
      platform: 1,
      description: "Dragon Quest XI se déroule dans le royaume d'Helréa. Vous incarnez un jeune homme au village de Caubaltin. Vous avez atteint la majorité et vous devez passer un rite spécifique au village, avec votre amie Gemma. Vous la passez sans grande difficulté malgré quelques monstres ... et arrivé tout en haut, un monstre puissant apparaît, il s'apprête à vous attaquer quand soudain votre main se met à s'illuminer : un éclair s'abat sur le monstre et il s'enfuit. Le rite fini, vous revenez au village et on vous explique que vous êtes en fait l'Éclairé ! Un héro légendaire qui se réincarne régulièrement pour vaincre le mal absolu ...",
      advice: "Dragon Quest XI est un jeu que j'ai découvert sur PC mais j'y ai plus joué sur Nintendo Switch. Hormis un léger défaut dans la version Switch, ce jeu est super, l'histoire contient de multiples bouleversements, et ce dès le début ! Mais sans cela, jamais vous n'auriez rencontré votre précieux 1er compagnon : Érik le voleur ! Vous rencontrez d'autres compagnons, chacun ayant sa particularité, son caractère ... Les mécaniques de jeu sont intéressantes, notamment pour l'arbre de compétences, à vous de bien choisir quelles compétences débloquer, quelle arme vous choisiriez entre l'épée à une main et l'épée longue pour votre héros. Le jeu a une longue durée de vie sans trop de rajout inutile (à part le défaut cité précédemment pour la version Switch ...) et à la fin du jeu, vous avez même la possibilité de vous marier, ce que je trouve amusant : choisirez vous Gemma, votre amie d'enfance qui semble avoir des sentiments pour vous ?",
      grade: 73,
      genders: [1, 2, 3, 11],
      imgBox: "assets/images/boites/dq11-boite.jpg",
      imgTheme: "assets/images/themes/dq11-theme.jpeg",
      releaseDate: new Date(23, 7, 2017),
      averagePrice: 54.99,
      disponibility: true,
      link: "https://www.amazon.fr/Dragon-Quest-XI-Elusive-Definitive/dp/B07SJFWCSL/ref=sr_1_6?crid=HA6R71H41LCS&keywords=dragon+quest+switch&qid=1691759327&sprefix=%2Caps%2C130&sr=8-6",
      likes:  { likes: 3, users: [this.getUserById(1), this.getUserById(5), this.getUserById(10)]},
      averageUsersGrade: 0
    }
  ];

  private averageUsersGradeSubject = new BehaviorSubject<number>(0);
  //sumUsersGrade: number = 0;
  //roundedAverageUsersGrade: number = 0;

  private comments: Comments[] = [
      /** COMMENTS FOR Pokémon : Légende Arceus */
    {
      id: 1,
      user: this.getUserById(3),
      videoGame: this.getVideoGameById(1),
      title: "Un jeu sympathique",
      content: "Ce jeu Pokémon est vraiment sympathique, ce fut un plaisir d'explorer Sinho à sa création, malgré tout de même quelques bugs embêtants parfois il y a des idées intéressantes ... Juste, les formes régionales et nouvelles évolutions il faut se calmer les gars ... Mais un pur plaisir tout de même.",
      grade: 65,
      postDate: new Date(2022, 7, 3, 17, 52)
    },
    {
      id: 2,
      videoGame: this.getVideoGameById(1),
      user: this.getUserById(6),
      title: 'Super jeu !',
      content: "J'adore ce jeu, l'histoire est captivante et les graphismes sont superbes.",
      grade: 78,
      postDate: new Date(2023, 1, 15)
    },
    {
      id: 3,
      user: this.getUserById(2),
      videoGame: this.getVideoGameById(1),
      title: "Pas mal du tout",
      content: "Pokémon : Légendes Arceus est une expérience unique dans la série Pokémon.",
      grade: 71,
      postDate: new Date(2023, 2, 5)
    },
    {
      id: 4,
      user: new User(999, "", "", "Indéterminé", "", "Jack", new Date(), "", "", ""),
      videoGame: this.getVideoGameById(1),
      title: "Bonne aventure",
      content: "J'ai apprécié l'aventure, mais j'aurais aimé plus de Pokémon disponibles.",
      grade: 65,
      postDate: new Date(2023, 2, 20)
    },
    {
      id: 5,
      user: this.getUserById(7),
      videoGame: this.getVideoGameById(1),
      title: "Un peu décevant",
      content: "Je m'attendais à plus de nouveautés, mais le jeu est solide.",
      grade: 55,
      postDate: new Date(2023, 3, 10)
    },
    {
      id: 6,
      user: this.getUserById(8),
      videoGame: this.getVideoGameById(1),
      title: "À essayer",
      content: "Pokémon : Légendes Arceus offre une expérience Pokémon différente et vaut le coup d'œil.",
      grade: 80,
      postDate: new Date(2023, 4, 2)
    },
    /** COMMENTS FOR Pokémon : Ecarlate et Violet */
    {
      id: 7,
      user: this.getUserById(2),
      videoGame: this.getVideoGameById(2),
      title: "Décevant",
      content: "Je m'attendais à mieux de la part de Pokémon.",
      grade: 54,
      postDate: new Date(2022, 12, 5)
    },
    {
      id: 8,
      user: this.getUserById(5),
      videoGame: this.getVideoGameById(2),
      title: "Mouais ...",
      content: "Ces jeux restent agréables pour les fans de Pokémon, mais trop de problèmes je trouve.",
      grade: 61,
      postDate: new Date(2022, 12, 15)
    },
    {
      id: 9,
      user: this.getUserById(9),
      videoGame: this.getVideoGameById(2),
      title: "Graphismes vieillots",
      content: "Les graphismes n'ont pas été traités correctement, mais l'expérience Pokémon est là, en partie ...",
      grade: 57,
      postDate: new Date(2023, 1, 2)
    },
    /** COMMENTS FOR Hogwarts Legacy */
    {
      id: 10,
      user: new User(999, "", "", "Indéterminé", "", "René", new Date(), "", "", ""),
      videoGame: this.getVideoGameById(3),
      title: "Fantastique !",
      content: "Ce jeu est un rêve devenu réalité pour les fans d'Harry Potter.",
      grade: 90,
      postDate: new Date(2022, 10, 18)
    },
    {
      id: 11,
      user: this.getUserById(7),
      videoGame: this.getVideoGameById(3),
      title: "Bons souvenirs",
      content: "Retourner à Poudlard est toujours une expérience magique.",
      grade: 83,
      postDate: new Date(2022, 11, 2)
    },
    {
      id: 12,
      user: this.getUserById(6),
      videoGame: this.getVideoGameById(3),
      title: "A explorer",
      content: "L'univers d'Harry Potter est magnifiquement recréé.",
      grade: 86,
      postDate: new Date(2022, 11, 25)
    },
    {
      id: 13,
      user: this.getUserById(2),
      videoGame: this.getVideoGameById(3),
      title: "Un peu décevant",
      content: "Je m'attendais à plus de profondeur dans le gameplay.",
      grade: 67,
      postDate: new Date(2023, 1, 12)
    },
    /** COMMENTS FOR Pokémon rouge feu / vert feuille */
    {
      id: 14,
      user: this.getUserById(1),
      videoGame: this.getVideoGameById(4),
      title: "Nostalgie",
      content: "Ces remakes me rappellent mon enfance.",
      grade: 74,
      postDate: new Date(2021, 12, 10)
    },
    {
      id: 15,
      user: new User(999, "", "", "Indéterminé", "", "René", new Date(), "", "", ""),
      videoGame: this.getVideoGameById(4),
      title: "Classique",
      content: "Pokémon Rouge Feu/Vert Feuille reste un classique intemporel.",
      grade: 76,
      postDate: new Date(2022, 1, 6)
    },
    {
      id: 16,
      user: this.getUserById(10),
      videoGame: this.getVideoGameById(4),
      title: "Un peu trop surestimé",
      content: "Ils ont fait un bon travail avec ces remakes, mais peut mieux faire, par exemple : pas beaucoup de contenu rajouté aux jeux par rapport aux originaux ...",
      grade: 62,
      postDate: new Date(2022, 5, 20)
    },
    /** COMMENTS FOR Terra Nil */
    {
      id: 17,
      user: this.getUserById(7),
      videoGame: this.getVideoGameById(5),
      title: "Unique !",
      content: "Terra Nil propose une expérience de gestion écologique unique.",
      grade: 83,
      postDate: new Date(2021, 7, 8)
    },
    {
      id: 18,
      user: this.getUserById(5),
      videoGame: this.getVideoGameById(5),
      title: "Addictif",
      content: "Je ne peux pas m'arrêter de jouer à ce jeu.",
      grade: 87,
      postDate: new Date(2022, 7, 28)
    },
    /** COMMENTS FOR Farthest Frontier */
    {
      id: 19,
      user: this.getUserById(8),
      videoGame: this.getVideoGameById(6),
      title: "Du potentiel",
      content: "Le jeu a du potentiel, mais il a encore besoin de travail.",
      grade: 61,
      postDate: new Date(2022, 9, 10)
    },
    {
      id: 20,
      user: this.getUserById(12),
      videoGame: this.getVideoGameById(6),
      title: "Affaire à suivre ...",
      content: "Je vais suivre l'évolution de ce jeu.",
      grade: 59,
      postDate: new Date(2022, 9, 25)
    },
    /** COMMENTS FOR Jurassic World Evolution */
    {
      id: 21,
      user: new User(999, "", "", "Indéterminé", "", "René", new Date(), "", "", ""),
      videoGame: this.getVideoGameById(7),
      title: "Juste UN mot : DINOSAURES !",
      content: "Jurassic World Evolution réalise le rêve de créer un parc de dinosaures.",
      grade: 88,
      postDate: new Date(2019, 7, 15)
    },
    {
      id: 22,
      user: this.getUserById(6),
      videoGame: this.getVideoGameById(7),
      title: "Bonne rejouabilité !",
      content: "Beaucoup de contenu pour les fans de dinosaures.",
      grade: 90,
      postDate: new Date(2020, 8, 1)
    },
    {
      id: 23,
      user: this.getUserById(11),
      videoGame: this.getVideoGameById(7),
      title: "Génial !",
      content: "J'adore ce jeu, je construis des parcs depuis des heures et je commence juste ! (plus de 200h de jeux !!!)",
      grade: 93,
      postDate: new Date(2021, 2, 9)
    },
    /** COMMENTS FOR Project Hospital */
    {
      id: 24,
      user: this.getUserById(2),
      videoGame: this.getVideoGameById(8),
      title: "Décevant ...",
      content: "Ce jeu est sympathique aux premiers abords, mais c'est tout malheureusement, il est mou et limité que ce soit niveau gameplay ou graphismes ...",
      grade: 46,
      postDate: new Date(2019, 2, 5)
    },
    /** COMMENTS FOR Terra Nil */
    {
      id: 25,
      user: this.getUserById(9),
      videoGame: this.getVideoGameById(9),
      title: "Exploration et aménagements",
      content: "J'adore explorer Mars avec Terraformers ! Il faut bien réfléchir à comment agencer nos différentes colonies et trouver les bonnes ressources pou espérer rendre Mars viable pour l'Homme !",
      grade: 78,
      postDate: new Date(2022, 3, 10)
    },
    {
      id: 26,
      user: this.getUserById(3),
      videoGame: this.getVideoGameById(9),
      title: "Colonisation spatiale",
      content: "Excellent jeu rempli de bonnes idées, parfois un peu frustrant mais une fois pris en main, on passe un bon moment.",
      grade: 68,
      postDate: new Date(2022, 3, 14)
    },
    /** COMMENTS FOR Zelda TOTK */
    {
      id: 27,
      user: this.getUserById(6),
      videoGame: this.getVideoGameById(10),
      title: "Une infinité de possibilités !",
      content: "Un autre chef-d'œuvre de la série Zelda !",
      grade: 95,
      postDate: new Date(2023, 4, 15)
    },
    {
      id: 28,
      user: new User(999, "", "", "Indéterminé", "", "René", new Date(), "", "", ""),
      videoGame: this.getVideoGameById(10),
      title: "Un jeu à couper le souffle !",
      content: "Les graphismes, l'histoire, les personnages, les combats, le gameplay ... tout est à couper le souffle !",
      grade: 98,
      postDate: new Date(2023, 5, 1)
    },
    /** COMMENTS FOR Zelda BOTW */
    {
      id: 29,
      user: this.getUserById(2),
      videoGame: this.getVideoGameById(11),
      title: "Un chef-d'œuvre",
      content: "Breath of the Wild est un chef-d'œuvre du jeu vidéo.",
      grade: 93,
      postDate: new Date(2019, 4, 10)
    },
    {
      id: 30,
      user: this.getUserById(11),
      videoGame: this.getVideoGameById(11),
      title: "Immersion totale",
      content: "L'immersion dans cet univers est incroyable.",
      grade: 96,
      postDate: new Date(2020, 4, 25)
    },
    /** COMMENTS FOR DQ XI */
    {
      id: 31,
      user: this.getUserById(9),
      videoGame: this.getVideoGameById(12),
      title: "Jeu chouette",
      content: "Un jeu cool qui a sû s'adapter proprement sur toutes les plateformes (même sur Switch ça fonctionne bien !), de longues heures de jeux à mon actif et plusieurs essais car il existe beaucoup de possibilités de personnalisation pour chaque personnage (notamment le choix des armes et de la façon dont vous voulez les jouer)",
      grade: 68,
      postDate: new Date(2019, 6, 18)
    }
  ];

  private commentsTitleSubject  = new BehaviorSubject<string>("");
  private commentsContentSubject  = new BehaviorSubject<string>("");
  private commentsGradeSubject  = new BehaviorSubject<number>(0);


  constructor(private http: HttpClient) {
    //this.fetchAllJsonData();
  }

  //  _____________________ ALL GETTERS AND SETTERS _____________________

    //    GETTERS AND SETTERS FOR USERS
  getAllUsers(): User[] {
    return this.users;
  }


  getUserPresentationAsObservable$(): Observable<string> {
    return this.userPresentationSubject.asObservable();
  }

  getUserById(userId: number): User {
    let user = this.users.find(user => user.id === userId);
    if (user)
      return user;
    else
      throw new Error("Utilisateur n°" + userId + " introuvable");
  }

  getUserByUsername(username: string): User {
    let user = this.users.find(user => user.username === username);
    if (user)
      return user;
    else
      throw new Error("username incorrecte ou introuvable");
  }

  getUserByUsernameAndPwd(username: string, pwd: string): User {
    let user = this.users.find(user => user.username === username && user.pwd === pwd);
    if (user)
      return user;
    else
      throw new Error("username et mot de passe incorrectes ou introuvables")
  }

  setUser(user: User): void {
    let userIndex = this.users.findIndex(u => u.id === user.id);
    if (userIndex !== -1)
      this.users[userIndex] = user;
  }

  isUserExists(user: User): boolean {
    let userIndex = this.users.findIndex(u => u.id === user.id);

    if (userIndex !== -1)
      return true;
    else
      return false;
  }

  addUser(user: User): void {
    this.users.push(user);
  }

  setUsersPresentation(usersId: number, presentation: string): void {
    let userIndex = this.users.findIndex(u => u.id === usersId);
    if (userIndex !== -1) {
      this.users[userIndex].presentation = presentation;
      this.userPresentationSubject.next(presentation);
    }
  }

    //    GETTERS AND SETTERS FOR VIDEOGAMES
  getAllVideoGames(): VideoGame[] {
    return this.videoGames;
  }

  getAverageUsersGradeAsObservable$(): Observable<number> {
    return this.averageUsersGradeSubject.asObservable();
  }

  setAverageUsersGrade(newValue: number): void {
    this.averageUsersGradeSubject.next(newValue);
  }

  getVideoGameById(videoGameId: number): VideoGame {
    let videoGame = this.videoGames.find(videoGame => videoGame.id === videoGameId);
    if (videoGame)
      return videoGame;
    else
      throw new Error("Jeu Vidéo n°" + videoGameId + " introuvable");
  }

  getRandomVideoGame(): VideoGame {
    const random = Math.floor(Math.random() * this.videoGames.length);
    return this.videoGames[random];
  }

  setAverageUsersGradeVideoGame(selectedId: number, newValue: number): void {
    this.getVideoGameById(selectedId).averageUsersGrade = newValue;
  }

  updateAverageUsersGrade(selectedId: number, gradeDifference: number): void {
    const videoGame = this.getVideoGameById(selectedId);
    videoGame.averageUsersGrade -= gradeDifference;

    videoGame.averageUsersGrade += gradeDifference;

    videoGame.averageUsersGrade = Math.min(Math.max(videoGame.averageUsersGrade, 0), 100);

    this.averageUsersGradeSubject.next(videoGame.averageUsersGrade);
  }

  calculateUsersGrade(comments: Comments[], selectedId: number): number {
    const sumUserGrade = comments.reduce((sum, user) => sum + user.grade, 0);
    return Math.round(sumUserGrade / comments.length);
  }

  calculateAverageUsersGrade(selectedId: number): void {
    const vgComments = this.getCommentsByVideoGame(selectedId);

    const selectedGameComments = vgComments.filter(comment => comment.videoGame.id === selectedId);

    if (selectedGameComments.length === 0) {
      this.averageUsersGradeSubject.next(0);
    } else {
      const averageUsersGrade = this.calculateUsersGrade(vgComments, selectedId);

      this.averageUsersGradeSubject.next(averageUsersGrade);
      this.getVideoGameById(selectedId).averageUsersGrade = averageUsersGrade;

      console.log(this.averageUsersGradeSubject.value);
      console.log(this.getVideoGameById(selectedId).averageUsersGrade);
    }
  }

  /** VERSION 2 AVEC OBSERVABLE - MARCHE PAS
   *
  calculateAverageUsersGrade(selectedId: number): void {
    const vgComments = this.getCommentsByVideoGame(selectedId);
    const commentsObs$ = of(vgComments);

    setTimeout(() => {
      commentsObs$.pipe(
        concatMap(comments => {
          const selectedGameComments = comments.filter(comment => comment.videoGame);

          if (selectedGameComments.length === 0)
            return of(0);

          const averageUsersGrade = this.calculateUsersGrade(comments, selectedId);
          return of(averageUsersGrade);
        })
      ).subscribe(averageUsersGrade => {
        this.getVideoGameById(selectedId).averageUsersGrade = averageUsersGrade;
        this.averageUsersGradeSubject.next(averageUsersGrade);
      });

      console.log(this.getVideoGameById(selectedId).averageUsersGrade);
      console.log(this.averageUsersGradeSubject.value);
    }, 450);
  } */
/** VERSION 1 "A LA MAIN"
  calculateAverageUsersGrade(selectedId: number): void {
    let sumUsersGrade = 0;
    let roundedAverageUsersGrade = 0;

    let comments = this.getCommentsByVideoGame(selectedId);

    if (comments.length > 0) {
      sumUsersGrade = comments.reduce((sum, user) => sum + user.grade, 0);
      roundedAverageUsersGrade = Math.round(sumUsersGrade / comments.length);
    }

    const videoGame = this.getVideoGameById(selectedId);
    videoGame.averageUsersGrade = roundedAverageUsersGrade;
    this.averageUsersGradeSubject.next(roundedAverageUsersGrade);
    console.log("somme = "+ sumUsersGrade);
    console.log("moyenne = " + roundedAverageUsersGrade);
    console.log("affichage = " + this.averageUsersGradeSubject.value);
  } */

  setVideoGame(videoGame: VideoGame): void {
    let videoGameIndex = this.videoGames.findIndex(vg => vg.id === videoGame.id);
    if (videoGameIndex !== -1)
      this.videoGames[videoGameIndex] = videoGame;
  }

  addVideoGamesLikes(videoGameId: number, usersId: number) {
    const videoGame = this.getVideoGameById(videoGameId);
    const user = this.getUserById(usersId);

    if(videoGame && user) {
      videoGame.likes.likes++;
      videoGame.likes.users.push(user);
      videoGame.likes.users.filter((user, index) => videoGame.likes.users.indexOf(user) === index);
    } else {
      alert('Un problème est survenu avec le jeu vidéo courant ou l\'utilisateur courant.');
      throw new Error('Un problème est survenu avec le jeu vidéo courant ou l\'utilisateur courant.');
    }
  }

  addVideoGame(videoGame: VideoGame): void {
    this.videoGames.push(videoGame);
  }

    //    GETTERS AND SETTERS FOR COMMENTS
  getAllComments(): Comments[] {
    return this.comments;
  }

  getCommentById(commentId: number): Comments {
    let comment = this.comments.find(comment => comment.id === commentId);
    if (comment)
      return comment;
    else
      throw new Error("Commentaire n°" + commentId + " introuvable");
  }

  getCommentByUser(userId: number): Comments[] {
    let user = this.getUserById(userId);
    let coms: Comments[] = [];

    this.comments.forEach(comment => {
      if (comment.user === user)
        coms.push(comment);
    });

    if (coms && user)
      return coms;
    else
      throw new Error("Commentaire de l'utilisateur n°" + userId + " introuvable");
  }

  getCommentsByVideoGame(videoGameId: number): Comments[] {
    let videoGame = this.getVideoGameById(videoGameId);
    let coms: Comments[] = [];

    this.comments.forEach(comment => {
      if (comment.videoGame === videoGame)
        coms.push(comment);
    });

    if (coms && videoGame)
      return coms;
    else
      throw new Error("Commentaire du jeu vidéo n°" + videoGameId + " introuvable");
  }

  getCommentsGradeByUser(user: User): number {
    let comment = this.comments.find(comment => comment.user === user);
    if (comment)
      return comment.grade;
    else
      throw new Error("Utilisateur" + user.username + " introuvable");
  }


  setComments(comment: Comments): void {
    let commentsIndex = this.comments.findIndex(c => c.id === comment.id);
    if (commentsIndex !== -1)
      this.comments[commentsIndex] = comment;
  }

  getCommentsTitleAsObservable$(): Observable<string> {
    return this.commentsTitleSubject.asObservable();
  }

  getCommentsContentAsObservable$(): Observable<string> {
    return this.commentsContentSubject.asObservable();
  }

  getCommentsGradeAsObservable$(): Observable<number> {
    return this.commentsGradeSubject.asObservable();
  }

  setCommentsAllContents(commentsId: number, title: string, content: string, grade: number): void {
    let commentsIndex = this.comments.findIndex(c => c.id === commentsId);

    if (commentsIndex !== -1) {
      this.comments[commentsIndex].title = title;
      this.commentsTitleSubject.next(title);

      this.comments[commentsIndex].content = content;
      this.commentsContentSubject.next(content);

      this.comments[commentsIndex].grade = grade;
      this.commentsGradeSubject.next(grade);

      //this.resetAverageUsersGrade();
      //this.calculateAverageUsersGrade(this.comments[commentsIndex].videoGame.id);
    }
  }


  addComment(comment: Comments): void {
    const newGrade = comment.grade;
    const oldGrade = this.averageUsersGradeSubject.value;
    const gradeDifference = newGrade - oldGrade;

    this.comments.push(comment);

    this.updateAverageUsersGrade(comment.videoGame.id, gradeDifference);
    //this.calculateAverageUsersGrade(comment.videoGame.id);
    console.log(this.averageUsersGradeSubject.value);
    console.log(this.getVideoGameById(comment.videoGame.id).averageUsersGrade);
    //
  }

  addCommentUser(comment: Comments): void {
    this.addComment(comment);
    this.users[comment.user.id + 1].nbComments++;
  }

  addCommentUnknown(comment: Comments): void {
    this.addComment(comment);
  }

  getTwoRandomUsersComments(usersId: number): Comments {
    const usersComments = this.getCommentByUser(usersId);
    const random = Math.floor(Math.random() * usersComments.length);
    return usersComments[random];
  }

  //  _____________________ ALL HttpClient REQUESTS _____________________

/**
  fetchAllJsonData() {
      this.http.get<any>(this.jsonUrl).subscribe(data => {
        this.videoGames = data.videogames;
        this.users = data.users;
        this.comments = data.comments;
      });
  }


    //    HttpClient REQUESTS FOR VIDEOGAMES
  fetchAllVideoGamesFromJSon() {
    this.http.get<VideoGame[]>(this.jsonUrl).subscribe(videoGamesData => {
      this.videoGames = videoGamesData;
    });
  }

  addVideoGameToJson(newVideoGame: VideoGame): void {
    this.videoGames.push(newVideoGame);
    this.updateVideoGamesJson();
  }

  private updateVideoGamesJson(): void {
    this.http.get<VideoGame[]>(this.jsonUrl).subscribe(videoGamesData => {
      this.http.put(
        this.jsonUrl, videoGamesData, {
        headers: { "Content-Type": 'application/json' }
      }).subscribe(() => {
        console.log("Fichier JSON successfull updated !");
      });
    });
  }

  updateVideoGame(updatedVideoGame: VideoGame):void {
    const id = this.videoGames.findIndex(vg => vg.id === updatedVideoGame.id);
    if (id !== -1) {
      this.videoGames[id] = updatedVideoGame;
      this.updateVideoGamesJson();
    }
  }

  deleteVideoGame(deletedVideoGame: VideoGame): void {
    const id = this.videoGames.findIndex(vg => vg.id = deletedVideoGame.id);
    if (id !== -1) {
      this.videoGames.splice(id, 1);
      this.updateVideoGamesJson();
    }
  }



    //    HttpClient REQUESTS FOR USERS
  fetchAllUsersFromJson() {
    this.http.get<User[]>(this.jsonUrl).subscribe(usersData => {
      this.users = usersData;
    });
  }

  addUserToJson(newUser: User): void {
    this.users.push(newUser);
    this.updateUsersJson();
  }

  private updateUsersJson(): void {
    this.http.get<User[]>(this.jsonUrl).subscribe(usersData => {
      this.http.put(
        this.jsonUrl, usersData, {
        headers: { "Content-Type": 'application/json' }
      }).subscribe(() => {
        console.log("Fichier JSON successfull updated !");
      });
    });
  }

  updateUser(updatedUser: User):void {
    const id = this.users.findIndex(u => u.id === updatedUser.id);
    if (id !== -1) {
      this.users[id] = updatedUser;
      this.updateUsersJson();
    }
  }

  deleteUser(deletedUser: User): void {
    const id = this.users.findIndex(u => u.id = deletedUser.id);
    if (id !== -1) {
      this.users.splice(id, 1);
      this.updateUsersJson();
    }
  }


    //    HttpClient REQUESTS FOR COMMENTS
  fetchAllCommentsFromJson() {
    this.http.get<Comments[]>(this.jsonUrl).subscribe(commentsData => {
      this.comments = commentsData;
    });
  }

  addCommentsToJson(newComments: Comments): void {
    this.comments.push(newComments);
    this.updateCommentsJson();
  }

  private updateCommentsJson(): void {
    this.http.get<Comments[]>(this.jsonUrl).subscribe(commentsData => {
      this.http.put(
        this.jsonUrl, commentsData, {
        headers: { "Content-Type": 'application/json' }
      }).subscribe(() => {
        console.log("Fichier JSON successfull updated !");
      });
    });
  }

  updateComment(updatedComments: Comments):void {
    const id = this.comments.findIndex(c => c.id === updatedComments.id);
    if (id !== -1) {
      this.comments[id] = updatedComments;
      this.updateUsersJson();
    }
  }

  deleteComments(deletedComments: Comments): void {
    const id = this.comments.findIndex(c => c.id = deletedComments.id);
    if (id !== -1) {
      this.users.splice(id, 1);
      this.updateUsersJson();
    }
  }
 */

}
