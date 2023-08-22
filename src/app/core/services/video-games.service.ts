import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

import { VideoGame } from '../models/video-game.model';

@Injectable({
  providedIn: 'root'
})
export class VideoGamesService {
  videoGames: VideoGame[] = [
    {
      id: 1,
      nom: "Pokémon: Légendes Arceus",
      console: 1,
      description: "Pokémon : Légendes Arceus est un opus de la saga Pokémon sorti en janvier 2022. Le héros se retrouve transporté dans le passé dans la région de Sinho, anciennement nommée Hisui. Le dieu des Pokémons Arceus vous donne pour mission de régler les différents problèmes qui s'abattent sur la région.",
      avis: "Ce jeu est un semi-openworld, l'histoire est intéressante et il est très intéressant de se retrouver dans la région de Sinho dans le passé. On peut y trouver de nombreux Pokémons, l'histoire est intéressante et remplir le Pokédex est, pour ma part, enfin amusant pour cataloguer les différentes espèces présentes dans la région de Hisui.",
      imgBoite: "/assets/images/boites/pkmn_arceus-box.png",
      imgTheme: "assets/images/themes/pkmn_arceus-theme.png",
      note: 71,
      genres: [1, 5, 3, 2, 11],
      dateSortie: new Date(2022, 1, 28),
      prixMoyen: 54.99,
      disponibilite: true,
      lien: "https://www.amazon.fr/L%C3%A9gendes-Pok%C3%A9mon-Arceus-Nintendo-Switch/dp/B096FZ5ZRQ/ref=sr_1_1?keywords=pok%C3%A9mon+legend+arceus&qid=1689945200&sprefix=pok%C3%A9mon+legen%2Caps%2C162&sr=8-1",
      commentaires: []
    },
    {
      id: 2,
      nom: "Pokémon: version Écarlate et Violet",
      console: 1,
      description: "Pokémon : Violet et Pokémon : Écarlate est un opus de la saga Pokémon sorti en novembre 2022. Dans ce nouvel opus, vous pourrez découvrir la région de Paldéa, région inspirée de l'Espagne. Vous pourrez l'explorer à pieds ou sur une monture : Koraidon (pour Écarlate) ou Miraidon (pour Violet), 2 pokémons que vous rencontrez lors de votre arrivée dans cette vaste région. Vous intégrerez l'académie Orange (pour Écarlate) ou l'académie Violette (pour Violet) qui vous proposera la grande chasse aux trésors, le but : découvrir quel est votre plus précieux trésor, est-ce remporter le titre de Maître de la Ligue Pokémon de Paldéa, est-ce de découvrir les Épices Secrètes sensées guérir les maux, ou est-ce de défaire la Team Star qui semblent poser des problèmes à l'académie et aux élèves.",
      avis: "Comme souvent depuis la 6ème génération, une nouvelle mécanique de jeu apparaît : la Téracristalisation ! Elle permet au Pokémon de changer temporairement de type pour adopter son Type Téracristal, ce qui peut donner un Pikachu de type Vol ! ",
      imgBoite: "assets/images/boites/pkmn_ecarlate-box.png",
      imgTheme: "assets/images/themes/pkmn_violet_ecarlate-theme.png",
      note: 58,
      genres: [1, 3, 2, 5, 11],
      dateSortie: new Date(2022, 11, 18),
      prixMoyen: 59.99,
      disponibilite: true,
      lien: "https://www.amazon.fr/Nintendo-Pok%C3%A9mon-%C3%89carlate/dp/B0B31VDKKV/ref=sr_1_1?keywords=pok%C3%A9mon+%C3%A9carlate+switch&qid=1689945103&sprefix=pok%C3%A9mon+%C3%A9ca%2Caps%2C87&sr=8-1",
      commentaires: []
    },
    {
      id: 3,
      nom: "Hogwarts Legacy",
      console: 3,
      description: "Hogwarts Legacy prend place au 19ème siècle environ dans la plus célèbre des écoles de magie : Poudlard de J.K. Rowling ! Vous incarnez un(e) jeune élève sur le point d'intégrer la 5ème année de l'école. Accompagné(e) du professeur Fig, vous allez découvrir des phénomènes liés à une magie ancienne que vous semblez pouvoir utiliser. A vous de découvrir le monde qui entoure l'école, de choisir entre Gryffondor, Serdaigle, Poufsouffle et Serpentard et partez à l'aventure avec d'autres élèves !",
      avis: "Ce jeu a été pour moi une excellente aventure ! Étant un grand fan de la saga Harry Potter et des Animaux Fantastiques, découvrir l'école de Poudlard au 19ème siècle a été un pur plaisir ! Ce jeu rend honneur à la saga, les personnages pouvant vous accompagner sont attachants, (Poppy <3 ), rien de plus agréable que de partir à la rescousse de créatures fantastiques qui sont mis à mal par les braconniers de Rockwood. L'apprentissage des sorts, comment les utiliser, lesquels vont avec les autres etc... L'histoire en elle-même est prenante, on découvre une magie ancienne qui semble puissante et dangereuse entre de mauvaises mains, et Ranrok semble la convoiter pour monter sa rébellion.",
      imgBoite: "assets/images/boites/Hogwarts_Legacy-box.png",
      imgTheme: "assets/images/themes/Hogwarts_Legacy-theme.png",
      note: 84,
      genres: [1, 5, 3, 2],
      dateSortie: new Date(2023, 2, 10),
      prixMoyen: 79.99,
      disponibilite: true,
      lien: "https://www.amazon.fr/HOGWARTS-LEGACY-LHERITAGE-DE-POUDLARD/dp/B09M96C12Z/ref=sr_1_1?keywords=hogwarts+legacy+ps5&qid=1689945252&sprefix=howart%2Caps%2C130&sr=8-1",
      commentaires: []
    }, {
      id: 4,
      nom: "Pokémon Rouge Feu/Vert Feuille",
      console: 4,
      description: "Pokémon Rouge Feu est un remake des opus originaux de Pokémon : Pokémon Rouge et Vert (Bleu en France) et il reprend donc l'histoire de ces jeux avec de meilleurs graphiques, des chaussures de sport, choisissez entre Bulbizarre, Salamèche et Carapuce et partez à l'exploration de Kanto en affrontant les champions d'arène et en complétant votre Pokédex pour atteindre l'objectif final : arriver à bout de la Ligue Pokémon de Peter, spécialiste des Pokémons de type Dragon. ",
      avis: "Ce jeu est pour moi empli de nostalgie, je ne suis donc pas très objectif, mais j'ai pris un plaisir sincère à chaque fois que je me suis refait ce jeu ! Il s'agit d'un remake, avec donc de meilleurs graphismes que les originaux, tout en y incorporant les mécaniques ajoutées entre les originaux et Pokémon Rubis et Saphir, comme la reproduction, les Pokémons chromatiques, les capacités spéciales (talents) etc... C'est un jeu sorti avant les jeux de la 3DS (qui s'étaient mis à faciliter le gameplay en aidant parfois trop le joueur) et donc rien que cela est un plaisir : un peu de difficulté dans un jeu Pokémon ! (juste ce qu'il faut)",
      imgBoite: "assets/images/boites/pkmn_rouge_feu-box.png",
      imgTheme: "assets/images/themes/pkmn_rouge_feu-theme.png",
      note: 68,
      genres: [1, 3, 2, 5, 11],
      dateSortie: new Date(2004, 1, 29),
      prixMoyen:39.99,
      disponibilite: false,
      lien: "",
      commentaires: []
    },
    {
      id: 5,
      nom: "Terra Nil",
      console: 2,
      description: "Terra Nil est un jeu sur le thème de l'environnement. Vous vous retrouvez sur une planète ravagée par la pollution, vous devez donc réabiliter cette terres stérile en écosystème dans la propérité et l'harmonie. A vous de trouver le moyen de ramener la vie sur cette planète !",
      avis: "Terra Nil est un jeu stratégique et de gestion sur le thème de l'environnement. Il s'agit d'un jeu visuellement très agréable, avec des musiques calmes et qui évoluent au fur et à mesure que vous restaurez votre environnement. Le jeu est au début un peu difficile le temps de comprendre les mécaniques de chaque élément de jeu, mais une fois que le jeu est compris, le jeu a un côté très détente. J'ai pris beaucoup de plaisir à le découvrir, à faire des restaurations, notamment car ce jeu se base sur des valeurs que tout le monde devrait suivre.",
      imgBoite: "assets/images/boites/terra_nil-boite.jpg",
      imgTheme: "assets/images/themes/terra_nil-theme.jpg",
      note: 78,
      genres: [6, 12, 8, 4, 7],
      dateSortie: new Date(),
      prixMoyen: 24.99,
      disponibilite: true,
      lien: "https://store.steampowered.com/app/1593030/Terra_Nil/",
      commentaires: []
    },
    {
      id: 6,
      nom: "Farthest Frontier",
      console: 2,
      description: "Farthest Frontier a pour but de créer une ville du Moyen-Âge, de protéger les habitants. Collectez des ressources et faites la évoluer pour passer de petit village à ville en ouvrant plus de commerces, en construisant plus de maisons tout en résistant aux éléments.",
      avis: "Farthest Frontier est un jeu de gestion sympathique aux nombreuses possibilités. On commence par choisir une zone où importer sa future ville et on s'y installe. Ensuite il faut créer des infrastructures pour les villageois. Puis on fait évoluer au gré des saisons le village.",
      imgBoite: "assets/images/boites/farthest_frontier-boite.jpg",
      imgTheme: "assets/images/themes/farthest_frontier-theme.jpg",
      note: 47,
      genres: [6, 12, 10, 4],
      dateSortie: new Date(2022, 8, 9),
      prixMoyen: 28.99,
      disponibilite: true,
      lien: "https://store.steampowered.com/app/1044720/Farthest_Frontier/",
      commentaires: []
    },
    {
      id: 7,
      nom: "Jurassic World Evolution",
      console: 2,
      description: "Jurassic World Évolution est un jeu qui se déroule après les évènements du film Jurassic World où les gérants tentent de faire renaître de nouveau Jurassic Park. C'est donc à vous que revient cette tâche de faire grandir votre parc sur les îles des 5 morts ! C'est donc à vous de vous de subvenir aux besoins des visiteurs et de vos dinosaures avec les infrastructures à votre disposition et l'aide des différents services du parc.",
      avis: "Jurassic World est un jeu de gestion exceptionnel ! Je ne compte plus les dizaines d'heures que j'ai passées à créer et recréer mon parc... Le jeu est bien équilibré et chaque île a ses spécificités : l'une est calme, une autre peut-être régulièrement prise dans une tempête tandis qu'une autre peut être endettée. A vous de trouver une solution aux problématiques et de faire des profits pour débloquer de nouvelles infrastructures.",
      imgBoite: "assets/images/boites/jurassic_world-boite.jpg",
      imgTheme: "assets/images/themes/jurassic_world-theme.jpg",
      note: 82,
      genres: [6, 12, 7, 4],
      dateSortie: new Date(2022, 8, 9),
      prixMoyen: 44.99,
      disponibilite: true,
      lien: "https://store.steampowered.com/app/648350/Jurassic_World_Evolution/",
      commentaires: []
    },
    {
      id: 8,
      nom: "Project Hospital",
      console: 2,
      description: "Project Hospital est un jeu de gestion dans le domaine de la santé. A vous de créer et de gérer votre propre hôpital, recrutez des médecins spécialistes et généralistes. Trouvez l'équilibre pour subvenir aux besoins de vos patients, mais aussi de vos salariés.",
      avis: "Project Hospital est un jeu aux graohismes assez moyens, voire pas terribles, il est très lent comme jeu de gestion et augmenter la vitesse c'est prendre le risque de faire dégénérer les choses. Pour prendre du plaisir pour jouer à ce jeu il faut être extrèmement patient ... Hormis pendant les promotions Steam, je trouve qu'il ne vaut pas son prix de vente de base.",
      note: 31,
      genres: [6, 9, 12, 4],
      imgBoite: "assets/images/boites/project_hospital-boite.jpg",
      imgTheme: "assets/images/themes/project_hospital-theme.jpg",
      dateSortie: new Date(30, 8, 2018),
      prixMoyen: 24.99,
      disponibilite: true,
      lien: "https://store.steampowered.com/app/868360/Project_Hospital/",
      commentaires: []
    },
    {
      id: 9,
      nom: "Terraformers",
      console: 2,
      description: "Terraformers est un jeu dont le but est de coloniser notre planète voisine : Mars. Choisissez la zone de votre première colonie, installez des habitations, des infrastructures et partez à l'exploration de la planète pour trouver des ressources et installer d'autres colonies.",
      avis: "Terraformers est un jeu de gestion stratégique très intéressant. On passe par différentes phases de colonisation pour finalement rendre notre nouvelle planète habitable. Là encore, c'est une question d'équilibre, il faut commercer avec la Terre pour recevoir des ressources nécessaires à la construction d'infrastructure par exemple ... A vous de faire le bon choix. Le jeu n'est pas difficile en soit, le faut juste prendre le temps de comprendre les mécaniques de jeux, j'y ai personnellement pris beaucoup de plaisir à rendre habitable cette belle planète rouge.",
      note: 64,
      genres: [6, 12, 7, 4],
      imgBoite: "assets/images/boites/terra_formers-boite.jpg",
      imgTheme: "assets/images/themes/terra_formers-theme.jpg",
      dateSortie: new Date(21, 4, 2022),
      prixMoyen: 19.99,
      disponibilite: true,
      lien: "https://store.steampowered.com/app/1244800/Terraformers/",
      commentaires: []
    },
    {
      id: 10,
      nom: "The Legend Of Zelda : Tears of the Kingdom",
      console: 1,
      description: "Quelques années après leur victoire face à Ganon, Link et Zelda explorent les souterrains du château d'Hyrule. Ces souterrains semblent envahis par des miasmes rendant malade toute personne s'y aventurant. C'est à ce moment qu'ils découvrirent tout d'abord des statues et des gravures Sonneau, une civilisation perdue, décrivant une guerre nommée la \"Guerre du Sceau\". S'enfonçant de plus en plus sous le château, ils se retrouvèrent fasse à une momie reprenant vie. Elle semble tout d'abord connaître leurs prénoms, blessa grièvement Link avec ses miasmes, projeta le château dans les airs ... Link et Zelda chutèrent, Zelda disparut tandis que Link fut rattrapé par un gant étrange. A son réveil, Link se retrouva sur une île dans les cieux.",
      avis: "Je n'ai pas de mot pour décrire comme ce jeu est extraordinaire ... Il avait la lourde tâche de succéder à The Legend of Zelda : Breath of the Wild et il a réussi avec brio ! Entre les mécaniques donnant une infinité de possibilités de gameplay, l'histoire qui est très prenante, l'Open World qui est tout bonnement gigantesque entre la surface, les îles célestes et les profondeurs, moi qui suis fan d'aventure, je suis plus que servi ! Je vais lui reconnaître un défaut : là où son prédécesseur était accessible à tous, Tears of the Kingdom est très difficile et a une difficulté croissante avec des ennemis de plus en plus puissants et résistants, la prudence est donc de mise pour ceux qui ne sont pas habitués au gameplay de Breath of the Wild ... Mais quel plaisir, j'ai déjà dépassé les 100h de jeu pour arriver à Ganondorf (qui a du répondant ! Ce qui a dû en décourager certains ... ) et je suis en train de le recommencer ... BREF, un pur plaisir pour ma part. Que de bonheurs m'attendent ... La prochaine chose à faire est de refaire BOTW puis aussitôt TOTK, à vous de jouer ! ;)",
      note: 98,
      genres: [1, 2, 5, 12, 3, 7, 4],
      imgBoite: "assets/images/boites/zelda_totk-boite.jpg",
      imgTheme: "assets/images/themes/zelda_totk-theme.jpg",
      dateSortie: new Date(1, 1, 2023),
      prixMoyen: 54.99,
      disponibilite: true,
      lien: "https://www.amazon.fr/Nintendo-Legend-Zelda-Kingdom-Switch/dp/B07SNRGQC4/ref=sr_1_1?keywords=tears+of+the+kingdom&qid=1691410380&sprefix=tears%2Caps%2C134&sr=8-1",
      commentaires: []
    },
    {
      id: 11,
      nom: "The Legend Of Zelda : Breath of the Wild",
      console: 1,
      description: "The Legend of Zelda : Breath of the Wild est difficile à placer dans la chronologie des jeux de la licence Zelda. Vous êtes Link et vous vous faites réveiller par une voix ... Vous êtes allongé dans une sorte de cuve qui vous a certainement soigné. Vous allez découvrir la Tablette Sheikah, un artéfact Sheikah très pratique. Vous sortez de l'endroit où vous vous trouviez et vous vous rendez rapidement compte que vous vous trouvez sur un Plateau isolé du monde ... Puis vous voyez un homme auquel vous vous adressez, il semble que vous ayez tout d'abord perdu la mémoire, impossible de vous rappeler de qui provenait cette voix qui vous obsède ... Vous comprenez juste que vous allez devoir affronter de grands dangers et notamment visiter des sanctuaires pour vous renforcer.",
      avis: "Ce jeu de la licence Zelda est juste génial. Le gameplay vous isolant du reste d'Hyrule au début pour apprendre, évidemment, à jouer Link, est une bonne idée. Les terres d'Hyrule sont vastes, les possibilités sont grandes, vous pouvez suivre l'histoire tranquillement, tout comme finir le Plateau du Prélude et affronter à vos risques et périls Ganon ... A vous de choisir, j'aime personnellement prendre monn temps, visiter le monde qui m'attend, ce que j'ai fait avec tant de plaisir !",
      note: 87,
      genres: [1, 2, 5, 12, 3, 7],
      imgBoite: "assets/images/boites/zelda_botw-boite.jpg",
      imgTheme: "assets/images/themes/zelda_botw-theme.jpeg",
      dateSortie: new Date(3, 3, 2017),
      prixMoyen: 54.99,
      disponibilite: true,
      lien: "https://www.amazon.fr/Legend-Zelda-Breath-Wild/dp/B01MUAFFPA/ref=sr_1_1?keywords=breath+of+the+wild&qid=1691411304&sprefix=breat%2Caps%2C88&sr=8-1",
      commentaires: []
    },
    {
      id: 12,
      nom: "Draqon Quest XI : Les Combattants de la Destinée",
      console: 1,
      description: "Dragon Quest XI se déroule dans le royaume d'Helréa. Vous incarnez un jeune homme au village de Caubaltin. Vous avez atteint la majorité et vous devez passer un rite spécifique au village, avec votre amie Gemma. Vous la passez sans grande difficulté malgré quelques monstres ... et arrivé tout en haut, un monstre puissant apparaît, il s'apprête à vous attaquer quand soudain votre main se met à s'illuminer : un éclair s'abat sur le monstre et il s'enfuit. Le rite fini, vous revenez au village et on vous explique que vous êtes en fait l'Éclairé ! Un héro légendaire qui se réincarne régulièrement pour vaincre le mal absolu ...",
      avis: "Dragon Quest XI est un jeu que j'ai découvert sur PC mais j'y ai plus joué sur Nintendo Switch. Hormis un léger défaut dans la version Switch, ce jeu est super, l'histoire contient de multiples bouleversements, et ce dès le début ! Mais sans cela, jamais vous n'auriez rencontré votre précieux 1er compagnon : Érik le voleur ! Vous rencontrez d'autres compagnons, chacun ayant sa particularité, son caractère ... Les mécaniques de jeu sont intéressantes, notamment pour l'arbre de compétences, à vous de bien choisir quelles compétences débloquer, quelle arme vous choisiriez entre l'épée à une main et l'épée longue pour votre héros. Le jeu a une longue durée de vie sans trop de rajout inutile (à part le défaut cité précédemment pour la version Switch ...) et à la fin du jeu, vous avez même la possibilité de vous marier, ce que je trouve amusant : choisirez vous Gemma, votre amie d'enfance qui semble avoir des sentiments pour vous ?",
      note: 73,
      genres: [1, 2, 3, 11],
      imgBoite: "assets/images/boites/dq11-boite.jpg",
      imgTheme: "assets/images/themes/dq11-theme.jpeg",
      dateSortie: new Date(23, 7, 2017),
      prixMoyen: 54.99,
      disponibilite: true,
      lien: "https://www.amazon.fr/Dragon-Quest-XI-Elusive-Definitive/dp/B07SJFWCSL/ref=sr_1_6?crid=HA6R71H41LCS&keywords=dragon+quest+switch&qid=1691759327&sprefix=%2Caps%2C130&sr=8-6",
      commentaires: []
    }
  ];
  selectedId: number = 0;
/**   A VOIR LORSQUE LE BACKEND SERA CRÉÉ
  private apiUrl = 'URL';

  constructor(private httpClient: HttpClient) {

  }
*/
  constructor(private http: HttpClient) { }

  getAllVideoGames(): VideoGame[] {
    return this.videoGames;
  }

  getVideoGameById(videoGameId: number): VideoGame {
    const videoGame = this.videoGames.find(videoGame => videoGame.id === videoGameId);

    if (!videoGame)
      throw new Error('This Video Game not found!');
    else
      return videoGame;
  }

  length(): number {
    return this.videoGames.length;
  }

  addVideoGame(formValue: {nom: string, console: number, description: string, avis: string, imgBoite: string, imgTheme: string, note: number, genres: number[], dateSortie: Date, prixMoyen: number, disponibilite: boolean, lien: string, commentaires: Comment[]}) {
    const videoGame: VideoGame = {
      ...formValue,
      id: this.length()
    };

    this.videoGames.push(videoGame);
  }

  getRandomVideoGame() {
    const random = Math.floor(Math.random() * this.length());
    return this.videoGames[random];
  }

  VideoGameGendersCorresponding(filter: number) {
    let videoGamesCorresponding = [];
    for (let videoGame of this.videoGames) {
      let isCorresponding = false;
      for (let gender of videoGame.genres) {
        if (gender == filter) {
          isCorresponding = true;
        }
      }
      if (isCorresponding)
        videoGamesCorresponding.push(videoGame);
    }

    return videoGamesCorresponding;
  }
}
