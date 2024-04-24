<?php

namespace App\DataFixtures;


use App\Entity\Comments;
use App\Entity\Gender;
use App\Entity\Likes;
use App\Entity\Platform;
use App\Entity\User;
use App\Entity\VideoGame;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;



class MyMetaverseFixtures extends Fixture
{
    private $passwordEncoder;

    // private $avatarUploader;

    public function __construct(
        UserPasswordHasherInterface $passwordEncoder,
        //AvatarUploaderService $avatarUploader
    ) {
        $this->passwordEncoder = $passwordEncoder;
        // $this->avatarUploader = $avatarUploader;
    }

    public function load(ObjectManager $manager): void
    {
        /**
         * OBJECTS Platform
         */
        $p1 = new Platform("Nintendo Switch");
        $manager->persist($p1);
        $p2 = new Platform("PC Steam");
        $manager->persist($p2);
        $p3 = new Platform("Playstation 5");
        $manager->persist($p3);
        $p4 = new Platform("GameBoy Advanced");
        $manager->persist($p4);
        $p5 = new Platform("GameBoy / GameBoy Color");
        $manager->persist($p5);
        $p6 = new Platform("Playstation 4");
        $manager->persist($p6);
        $p7 = new Platform("Nintendo DS");
        $manager->persist($p7);
        $p8 = new Platform("Nintendo 3DS");
        $manager->persist($p8);
        $p9 = new Platform("PlayStation 3");
        $manager->persist($p9);
        $p10 = new Platform("PlayStation 2");
        $manager->persist($p10);
        $p11 = new Platform("PlayStation");
        $manager->persist($p11);
        $p12 = new Platform("XBox");
        $manager->persist($p12);
        $p13 = new Platform("XBox 360");
        $manager->persist($p13);
        $p14 = new Platform("XBox One");
        $manager->persist($p14);
        $p15 = new Platform("XBox Series");
        $manager->persist($p15);

        $manager->flush();

        /**
         * OBJECTS Users
         */

        $u1 = new User(
            "Buffard",
            "Alexandre",
            "ab@gmail.com",
            "alilizeph",
            "",
            "Homme",
            new DateTime('1997-03-21'),
            true,
            "Je me présente, je m'appelle Alexandre BUFFARD, j'ai 26 ans et je suis le développeur de cette Application Web Angular (pour l'instant) en autodidacte. \nJ'espère qu'elle vous plaît, que vous la trouvez accessible. N'hésitez pas à vous servir du formulaire à la page d'accueil. \nJe vous souhaite une bonne visite et une bonne journée !",
            true
        );

        $basePath = realpath(getcwd());
        $imgPath1 = $basePath . '/public/dl/avatar/eevee.png';
        $file1 = new UploadedFile($imgPath1, "eevee.png", 'image/png', null, true);
        $u1->setAvatarFile($file1);
        $u1->setAvatarFileSize($file1->getSize());
        $u1->updateAvatarNewFileName();

        $u1->setPassword($this->passwordEncoder->hashPassword($u1, "#MonMDPAdMiN486"));
        $manager->persist($u1);

        $u2 = new User(
            "Dupont",
            "Arthur",
            "arthur-dupont@hotmail.fr",
            "arthurdu92",
            "",
            "Homme",
            new DateTime("1999-07-14"),
            false,
            "Je suis Arthur, j'ai 24 ans et je suis jeune diplômé d'un lycée hôtelier et mon truc c'est les jeux de plateforme et les FPS. J'aime aussi bien les Open-Worlds mais avec parcimonie.",
            true //, $this->avatarUploader
        );
        $u2->setPassword($this->passwordEncoder->hashPassword($u2, "C'estMonMDP92"));

        $u3 = new User(
            "Kurosaki",
            "Ichigo",
            "ichi.kuro@gmail.com",
            "ichikuro",
            "",
            "Homme",
            new DateTime('2001-08-07'),
            false,
            "Je m'appelle Ichigo, je suis un lycéen comme les autres ... Si ce n'est que j'ai la capacité de voir les fantômes, les esprits ... appelez ça comme vous voulez.\nUn jour, alors que ma famille était en danger, j'ai fait la rencontre d'une Shinigami nommée Rukia Kuchiki, après de grandes difficultés, elle m'a proposé de me préter ses pouvoirs pour protéger ma famille, j'ai accepté et je suis devenu à mon tour.\nJe vous passe les détails de la suite de l'histoire, mais on pourrait faire une histoire de plusieurs tomes de mangas haha !",
            true
        );

        $imgPath2 = $basePath . '/public/dl/avatar/ichikuro_avatar.jpg';
        $file2 = new UploadedFile($imgPath2, "ichikuro_avatar.jpg", 'image/jpeg', null, true);
        $u3->setAvatarFile($file2);
        $u3->updateAvatarNewFileName();
        $u3->setAvatarFileSize($file2->getSize());

        $u3->setPassword($this->passwordEncoder->hashPassword($u3, "7{9M%3vsiZy-T9"), true);
        $manager->persist($u3);
        $u4 = new User(
            "La Cookie",
            "Lamia",
            "lamia.lacookie.etudiant@univ-lr.fr",
            "elDiableteDu17",
            "MmEUwp567f89Bd",
            "Femme",
            new DateTime("2000-08-09"),
            false,
            "Salut, je m'appelle Lamia, je suis une amie de Alexandre, alilizeph, avec qui j'ai passé une partie de mes études à L'Université de La Rochelle en licence informatique. Le développement Web c'est ma spécialité, actuellement, je suis en train de faire une licence professionnelle. \nQuand j'ai le temps, et j'en ai que trop peu à cause de la LP, je joue aux jeux vidéo et parfois, on essaye de se voir avec mon ami, mais c'est pas facile parce qu'il est actuellement dans sa campagne. (il fait pas d'effort aussi, l'Université encore moins !)",
            true //, $this->avatarUploader
        );
        $u4->setPassword($this->passwordEncoder->hashPassword($u4, "elDiableteDu17"));
        $manager->persist($u4);
        $u5 = new User(
            "Doe",
            "John",
            "john.doe@gmail.com",
            "johndoe",
            "",
            "Homme",
            new DateTime("1990-05-15"),
            false,
            "Salut, je suis John Doe. J'adore les nouvelles technologies et l'informatique en général. J'aime résoudre des énigmes complexes et apprendre de nouvelles compétences en ligne. N'hésitez pas à me contacter si vous avez des questions sur la programmation ou si vous voulez discuter de sujets technologiques passionnants.",
            true //, $this->avatarUploader
        );
        $u5->setPassword($this->passwordEncoder->hashPassword($u5, "/pwdN578=PaSec&"));
        $manager->persist($u5);
        $u6 = new User(
            "Smith",
            "Alice",
            "asmith@outlook.fr",
            "alsmith",
            "",
            "Femme",
            new DateTime("1985-08-21"),
            false,
            "Bonjour à tous, je suis Alice Smith. Je suis une passionnée de photographie et de voyage. J'adore capturer des moments spéciaux à travers mon objectif et partager mes aventures avec le monde. Si vous partagez ces intérêts ou si vous avez des conseils de voyage à partager, faites-moi signe !",
            true //, $this->avatarUploader
        );
        $u6->setPassword($this->passwordEncoder->hashPassword($u6, "pwdN6PaSec"));
        $manager->persist($u6);
        $u7 = new User(
            "Brown",
            "Robert",
            "brob@orange.fr",
            "brob",
            "",
            "Homme",
            new DateTime("1993-03-08"),
            false,
            "Salut, je m'appelle Robert Brown. Je suis un amateur de musique et de guitare. J'aime jouer de la guitare acoustique et je suis toujours à la recherche de nouveaux morceaux à apprendre. Si vous êtes un passionné de musique ou si vous cherchez quelqu'un avec qui jouer, n'hésitez pas à me contacter.",
            true //, $this->avatarUploader
        );
        $u7->setPassword($this->passwordEncoder->hashPassword($u7, '"pwdN7Pa_Se9c7'));
        $manager->persist($u7);
        $u8 = new User(
            "Johnson",
            "Emily",
            "emily.johnson@wanadoo.fr",
            "jemily",
            "",
            "Femme",
            new DateTime("1988-05-14"),
            false,
            "Coucou, je suis Emily Johnson. Je suis une fanatique de fitness et de bien-être. J'adore pratiquer le yoga et la méditation pour rester en forme mentalement et physiquement. Si vous partagez ces intérêts ou si vous avez des conseils pour vivre une vie saine, parlons-en !",
            true //, $this->avatarUploader
        );
        $u8->setPassword($this->passwordEncoder->hashPassword($u8, "pw@dN8-Pa42Se)c"));
        $manager->persist($u8);
        $u9 = new User(
            "Lee",
            "Michael",
            "lckael@gmail.com",
            "lkal",
            "",
            "Homme",
            new DateTime("1991-11-30"),
            false,
            "",
            true //, $this->avatarUploader
        );
        $u9->setPassword($this->passwordEncoder->hashPassword($u9, "pwdN9PaSec"));
        $manager->persist($u9);
        $u10 = new User(
            "Wang",
            "Lily",
            "lily.wang@univ-bdx.fr",
            "lilyWang",
            "",
            "Femme",
            new DateTime("1995-02-18"),
            false,
            "",
            true //, $this->avatarUploader
        );
        $u10->setPassword($this->passwordEncoder->hashPassword($u10, "p(wdN108P<aSec"));
        $manager->persist($u10);
        $u11 = new User(
            "Garcia",
            "Davis",
            "dave.garcia@gmail.com",
            "garvis",
            "",
            "Homme",
            new DateTime("1982-06-06"),
            false,
            "",
            true
            //, $this->avatarUploader
        );
        $u11->setPassword($this->passwordEncoder->hashPassword($u6, "pw&dN11Pa4Se~c"));
        $manager->persist($u11);
        $u12 = new User(
            "Kim",
            "Sophia",
            "ksophia@hotmail.com",
            "ksophia",
            "",
            "Ielle",
            new DateTime("1991-07-25"),
            false,
            "",
            "",
            true //, $this->avatarUploader
        );
        $u12->setPassword($this->passwordEncoder->hashPassword($u12, "p#w9dN12P^aSec"));
        $manager->persist($u12);

        $manager->flush();


        /**
         * OBJECTS Likes
         */
        $l1 = new Likes(0); //, array($u3, $u4, $u8));
        foreach (array($u3, $u4, $u8) as $u) {
            $l1->addUser($u);
        }
        $manager->persist($l1);
        $l2 = new Likes(0); //, array($u7, $u12));
        foreach (array($u7, $u12) as $u) {
            $l2->addUser($u);
        }
        $manager->persist($l2);
        $l3 = new Likes(0); //, array($u4, $u7, $u9, $u11, $u10, $u7));
        foreach (array($u4, $u7, $u9, $u11, $u10, $u7) as $u) {
            $l3->addUser($u);
        }
        $manager->persist($l3);
        $l4 = new Likes(0); //, array($u9, $u6));
        foreach (array($u9, $u6) as $u) {
            $l4->addUser($u);
        }
        $manager->persist($l4);
        $l5 = new Likes(0); //, array($u1));
        foreach (array($u1) as $u) {
            $l5->addUser($u);
        }
        $manager->persist($l5);
        $l6 = new Likes(0); //, array($u5, $u7));
        foreach (array($u5, $u7) as $u) {
            $l6->addUser($u);
        }
        $manager->persist($l6);
        $l7 = new Likes(0); //, array($u5, $u3, $u8, $u1));
        foreach (array($u5, $u3, $u8, $u1) as $u) {
            $l7->addUser($u);
        }
        $manager->persist($l7);
        $l8 = new Likes(0); //, array());
        $manager->persist($l8);
        $l9 = new Likes(0); //, array($u10, $u5));
        foreach (array($u10, $u5) as $u) {
            $l9->addUser($u);
        }
        $manager->persist($l9);
        $l10 = new Likes(0); //, array($u1, $u3, $u11, $u9));
        foreach (array($u1, $u3, $u11, $u9) as $u) {
            $l10->addUser($u);
        }
        $manager->persist($l10);
        $l11 = new Likes(0); //, array($u1, $u6, $u3, $u7));
        foreach (array($u1, $u6, $u3, $u7) as $u) {
            $l11->addUser($u);
        }
        $manager->persist($l11);
        $l12 = new Likes(0); //, array($u1, $u5, $u10));
        foreach (array($u1, $u5, $u10) as $u) {
            $l12->addUser($u);
        }
        $manager->persist($l12);

        $manager->flush();

        /**
         * OBJECTS Gender
         */
        $g1 = new Gender('RPG');
        $manager->persist($g1);
        $g2 = new Gender("Aventure");
        $manager->persist($g2);
        $g3 = new Gender("Fantastique");
        $manager->persist($g3);
        $g4 = new Gender("Création");
        $manager->persist($g4);
        $g5 = new Gender("Open World");
        $manager->persist($g5);
        $g6 = new Gender("Gestion");
        $manager->persist($g6);
        $g7 = new Gender("Réflexion");
        $manager->persist($g7);
        $g8 = new Gender("Écologie");
        $manager->persist($g8);
        $g9 = new Gender("Santé");
        $manager->persist($g9);
        $g10 = new Gender("Survie");
        $manager->persist($g10);
        $g11 = new Gender("Tactique");
        $manager->persist($g11);
        $g12 = new Gender("Stratégie");
        $manager->persist($g12);
        $g13 = new Gender("Chill");
        $manager->persist($g13);
        $g14 = new Gender("Post-Apocalyptique");
        $manager->persist($g14);

        $manager->flush();




        /**
         * OBJECTS VideoGame
         */
        $vg1 = new VideoGame(
            "Pokémon: Légendes Arceus",
            $p1,
            new DateTime("2022-01-28"),
            "Pokémon : Légendes Arceus est un opus de la saga Pokémon sorti en janvier 2022. Le héros se retrouve transporté dans le passé dans la région de Sinho, anciennement nommée Hisui. Le dieu des Pokémons Arceus vous donne pour mission de régler les différents problèmes qui s'abattent sur la région.",
            "Ce jeu est un semi-openworld, l'histoire est intéressante et il est très intéressant de se retrouver dans la région de Sinho dans le passé. On peut y trouver de nombreux Pokémons, l'histoire est intéressante et remplir le Pokédex est, pour ma part, enfin amusant pour cataloguer les différentes espèces présentes dans la région de Hisui.",
            71,
            54.99,
            true,
            "https://www.amazon.fr/L%C3%A9gendes-Pok%C3%A9mon-Arceus-Nintendo-Switch/dp/B096FZ5ZRQ/ref=sr_1_1?keywords=pok%C3%A9mon+legend+arceus&qid=1689945200&sprefix=pok%C3%A9mon+legen%2Caps%2C162&sr=8-1",
            $l1
        );
        $basePath = realpath(getcwd());

        $imgPathBox = $basePath . '/public/dl/box/pkmn_arceus-box.png';
        $imgBox = new UploadedFile($imgPathBox, 'pkmn_arceus-box.png', 'image/png', null, true);
        $vg1->setImgBox($imgBox);
        $vg1->setImgBoxSize($imgBox->getSize());
        $vg1->updateImgBoxFileName();

        $imgPathTheme = $basePath . "/public/dl/themes/pkmn_arceus-theme.png";
        $imgTheme = new UploadedFile($imgPathTheme, 'pkmn_arceus-theme.png', 'image/png', null, true);
        $vg1->setImgTheme($imgTheme);
        $vg1->setImgThemeSize($imgBox->getSize());
        $vg1->updateImgThemeNewFileName();

        foreach (array($g1, $g5, $g3, $g1, $g11) as $g)
            $vg1->addGender($g);
        $manager->persist($vg1);


        $vg2 = new VideoGame(
            "Pokémon: version Écarlate et Violet",
            $p1,
            new DateTime("2022-11-18"),
            "Pokémon : Violet et Pokémon : Écarlate est un opus de la saga Pokémon sorti en novembre 2022. Dans ce nouvel opus, vous pourrez découvrir la région de Paldéa, région inspirée de l'Espagne. Vous pourrez l'explorer à pieds ou sur une monture : Koraidon (pour Écarlate) ou Miraidon (pour Violet), 2 pokémons que vous rencontrez lors de votre arrivée dans cette vaste région. Vous intégrerez l'académie Orange (pour Écarlate) ou l'académie Violette (pour Violet) qui vous proposera la grande chasse aux trésors, le but : découvrir quel est votre plus précieux trésor, est-ce remporter le titre de Maître de la Ligue Pokémon de Paldéa, est-ce de découvrir les Épices Secrètes sensées guérir les maux, ou est-ce de défaire la Team Star qui semblent poser des problèmes à l'académie et aux élèves.",
            "Comme souvent depuis la 6ème génération, une nouvelle mécanique de jeu apparaît : la Téracristalisation ! Elle permet au Pokémon de changer temporairement de type pour adopter son Type Téracristal, ce qui peut donner un Pikachu de type Vol ! ",
            58,
            59.99,
            true,
            "https://www.amazon.fr/Nintendo-Pok%C3%A9mon-%C3%89carlate/dp/B0B31VDKKV/ref=sr_1_1?keywords=pok%C3%A9mon+%C3%A9carlate+switch&qid=1689945103&sprefix=pok%C3%A9mon+%C3%A9ca%2Caps%2C87&sr=8-1",
            $l2
        );

        $imgPathBox = $basePath . '/public/dl/box/pkmn_ecarlate-box.png';
        $imgBox = new UploadedFile($imgPathBox, 'pkmn_ecarlate-box.png', 'image/png', null, true);
        $vg2->setImgBox($imgBox);
        $vg2->setImgBoxSize($imgBox->getSize());
        $vg2->updateImgBoxFileName();

        $imgPathTheme = $basePath . "/public/dl/themes/pkmn_violet_ecarlate-theme.png";
        $imgTheme = new UploadedFile($imgPathTheme, 'pkmn_violet_ecarlate-theme.png', 'image/png', null, true);
        $vg2->setImgTheme($imgTheme);
        $vg2->setImgThemeSize($imgBox->getSize());
        $vg2->updateImgThemeNewFileName();

        foreach (array($g1, $g5, $g3, $g1, $g11) as $g)
            $vg2->addGender($g);
        $manager->persist($vg2);


        $vg3 = new VideoGame(
            "Hogwarts Legacy : L'Héritage de Poudlard",
            $p3,
            new DateTime("2023-02-10"),
            "Hogwarts Legacy prend place au 19ème siècle environ dans la plus célèbre des écoles de magie : Poudlard de J.K. Rowling ! Vous incarnez un(e) jeune élève sur le point d'intégrer la 5ème année de l'école. Accompagné(e) du professeur Fig, vous allez découvrir des phénomènes liés à une magie ancienne que vous semblez pouvoir utiliser. A vous de découvrir le monde qui entoure l'école, de choisir entre Gryffondor, Serdaigle, Poufsouffle et Serpentard et partez à l'aventure avec d'autres élèves !",
            "Ce jeu a été pour moi une excellente aventure ! Étant un grand fan de la saga Harry Potter et des Animaux Fantastiques, découvrir l'école de Poudlard au 19ème siècle a été un pur plaisir ! Ce jeu rend honneur à la saga, les personnages pouvant vous accompagner sont attachants, (Poppy <3 ), rien de plus agréable que de partir à la rescousse de créatures fantastiques qui sont mis à mal par les braconniers de Rockwood. L'apprentissage des sorts, comment les utiliser, lesquels vont avec les autres etc... L'histoire en elle-même est prenante, on découvre une magie ancienne qui semble puissante et dangereuse entre de mauvaises mains, et Ranrok semble la convoiter pour monter sa rébellion.",
            83,
            79.99,
            true,
            "https://www.amazon.fr/HOGWARTS-LEGACY-LHERITAGE-DE-POUDLARD/dp/B09M96C12Z/ref=sr_1_1?keywords=hogwarts+legacy+ps5&qid=1689945252&sprefix=howart%2Caps%2C130&sr=8-1",
            $l3
        );

        $imgPathBox = $basePath . '/public/dl/box/Hogwarts_Legacy-box.png';
        $imgBox = new UploadedFile($imgPathBox, 'Hogwarts_Legacy-box.png', 'image/png', null, true);
        $vg3->setImgBox($imgBox);
        $vg3->setImgBoxSize($imgBox->getSize());
        $vg3->updateImgBoxFileName();

        $imgPathTheme = $basePath . "/public/dl/themes/Hogwarts_Legacy-theme.png";
        $imgTheme = new UploadedFile($imgPathTheme, 'Hogwarts_Legacy-theme.png', 'image/png', null, true);
        $vg3->setImgTheme($imgTheme);
        $vg3->setImgThemeSize($imgBox->getSize());
        $vg3->updateImgThemeNewFileName();

        foreach (array($g1, $g5, $g3, $g3) as $g)
            $vg3->addGender($g);
        $manager->persist($vg3);


        $vg4 = new VideoGame(
            "Pokémon Rouge Feu/Vert Feuille",
            $p4,
            new DateTime("2004-01-29"),
            "Pokémon Rouge Feu est un remake des opus originaux de Pokémon : Pokémon Rouge et Vert (Bleu en France) et il reprend donc l'histoire de ces jeux avec de meilleurs graphiques, des chaussures de sport, choisissez entre Bulbizarre, Salamèche et Carapuce et partez à l'exploration de Kanto en affrontant les champions d'arène et en complétant votre Pokédex pour atteindre l'objectif final : arriver à bout de la Ligue Pokémon de Peter, spécialiste des Pokémons de type Dragon. ",
            "Ce jeu est pour moi empli de nostalgie, je ne suis donc pas très objectif, mais j'ai pris un plaisir sincère à chaque fois que je me suis refait ce jeu ! Il s'agit d'un remake, avec donc de meilleurs graphismes que les originaux, tout en y incorporant les mécaniques ajoutées entre les originaux et Pokémon Rubis et Saphir, comme la reproduction, les Pokémons chromatiques, les capacités spéciales (talents) etc... C'est un jeu sorti avant les jeux de la 3DS (qui s'étaient mis à faciliter le gameplay en aidant parfois trop le joueur) et donc rien que cela est un plaisir : un peu de difficulté dans un jeu Pokémon ! (juste ce qu'il faut)",
            68,
            39.99,
            false,
            "",
            $l4
        );

        $imgPathBox = $basePath . '/public/dl/box/pkmn_rouge_feu-box.png';
        $imgBox = new UploadedFile($imgPathBox, 'pkmn_rouge_feu-box.png', 'image/png', null, true);
        $vg4->setImgBox($imgBox);
        $vg4->setImgBoxSize($imgBox->getSize());
        $vg4->updateImgBoxFileName();

        $imgPathTheme = $basePath . "/public/dl/themes/pkmn_rouge_feu-theme.png";
        $imgTheme = new UploadedFile($imgPathTheme, 'pkmn_rouge_feu-theme.png', 'image/png', null, true);
        $vg4->setImgTheme($imgTheme);
        $vg4->setImgThemeSize($imgBox->getSize());
        $vg4->updateImgThemeNewFileName();

        foreach (array($g1, $g3, $g2, $g5, $g11) as $g)
            $vg4->addGender($g);
        $manager->persist($vg4);


        $vg5 = new VideoGame(
            "Terra Nil",
            $p2,
            new DateTime("2023-03-28"),
            "Terra Nil est un jeu sur le thème de l'environnement. Vous vous retrouvez sur une planète ravagée par la pollution, vous devez donc réabiliter cette terres stérile en écosystème dans la propérité et l'harmonie. A vous de trouver le moyen de ramener la vie sur cette planète !",
            "Terra Nil est un jeu stratégique et de gestion sur le thème de l'environnement. Il s'agit d'un jeu visuellement très agréable, avec des musiques calmes et qui évoluent au fur et à mesure que vous restaurez votre environnement. Le jeu est au début un peu difficile le temps de comprendre les mécaniques de chaque élément de jeu, mais une fois que le jeu est compris, le jeu a un côté très détente. J'ai pris beaucoup de plaisir à le découvrir, à faire des restaurations, notamment car ce jeu se base sur des valeurs que tout le monde devrait suivre.",
            78,
            24.99,
            true,
            "https://store.steampowered.com/app/1593030/Terra_Nil/",
            $l5
        );

        $imgPathBox = $basePath . '/public/dl/box/terra_nil-boite.jpg';
        $imgBox = new UploadedFile($imgPathBox, 'terra_nil-boite.jpg', 'image/jpeg', null, true);
        $vg5->setImgBox($imgBox);
        $vg5->setImgBoxSize($imgBox->getSize());
        $vg5->updateImgBoxFileName();

        $imgPathTheme = $basePath . "/public/dl/themes/terra_nil-theme.jpg";
        $imgTheme = new UploadedFile($imgPathTheme, 'terra_nil-theme.jpg', 'image/jpeg', null, true);
        $vg5->setImgTheme($imgTheme);
        $vg5->setImgThemeSize($imgBox->getSize());
        $vg5->updateImgThemeNewFileName();

        foreach (array($g6, $g12, $g8, $g4, $g7, $g13, $g14) as $g)
            $vg5->addGender($g);
        $manager->persist($vg5);


        $vg6 = new VideoGame(
            "Farthest Frontier",
            $p2,
            new DateTime("2018-06-12"),
            "Farthest Frontier est un jeu de gestion dans lequel il faut bâtir sa ville, la faire propérer, elle, tout comme faire propérer ses habitants. Il faudra relever les défis donnés par la nature, récolter des matériaux pour la création de bâtiments et faire vivre les villageois, tout en prenant en compte leurs besoins et exigeances. (certains bâtiments déplairont aux habitants trop proches de son rayon d'action par exemple)",
            "Farthest Frontier est un jeu en accès limité au moment où je rédige cette critique. Je l'ai découvert en regardant une vidéo Youtube de Joueur du Grenier, il m'avait convaincu suffisamment pour que je l'achète, appréciant les jeux de gestion. Résultat, comme on le voit à la note, je suis majoritairement déçu ... Je me suis rapidement ennuyé et parfois été mis bêtement en difficultés à cause de ma méconnaissance du jeu.",
            47,
            28.99,
            true,
            "https://store.steampowered.com/app/1044720/Farthest_Frontier/"
        );

        $imgPathBox = $basePath . '/public/dl/box/farthest_frontier-boite.jpg';
        $imgBox = new UploadedFile($imgPathBox, 'farthest_frontier-boite.jpg', 'image/jpeg', null, true);
        $vg6->setImgBox($imgBox);
        $vg6->setImgBoxSize($imgBox->getSize());
        $vg6->updateImgBoxFileName();

        $imgPathTheme = $basePath . "/public/dl/themes/farthest_frontier-theme.jpg";
        $imgTheme = new UploadedFile($imgPathTheme, 'farthest_frontier-theme.jpg', 'image/jpeg', null, true);
        $vg6->setImgTheme($imgTheme);
        $vg6->setImgThemeSize($imgBox->getSize());
        $vg6->updateImgThemeNewFileName();

        foreach (array($g6, $g12, $g10, $g4) as $g)
            $vg6->addGender($g);
        $manager->persist($vg6);


        $vg7 = new VideoGame(
            "Jurassic World Evolution",
            $p2,
            new DateTime("2022-08-09"),
            "Jurassic World Évolution est un jeu qui se déroule après les évènements du film Jurassic World où les gérants tentent de faire renaître de nouveau Jurassic Park. C'est donc à vous que revient cette tâche de faire grandir votre parc sur les îles des 5 morts ! C'est donc à vous de vous de subvenir aux besoins des visiteurs et de vos dinosaures avec les infrastructures à votre disposition et l'aide des différents services du parc.",
            "Jurassic World est un jeu de gestion exceptionnel ! Je ne compte plus les dizaines d'heures que j'ai passées à créer et recréer mon parc... Le jeu est bien équilibré et chaque île a ses spécificités : l'une est calme, une autre peut-être régulièrement prise dans une tempête tandis qu'une autre peut être endettée. A vous de trouver une solution aux problématiques et de faire des profits pour débloquer de nouvelles infrastructures.",
            82,
            44.99,
            true,
            "https://store.steampowered.com/app/648350/Jurassic_World_Evolution/"
        );

        $imgPathBox = $basePath . '/public/dl/box/jurassic_world-boite.jpg';
        $imgBox = new UploadedFile($imgPathBox, 'jurassic_world-boite.jpg', 'image/jpeg', null, true);
        $vg7->setImgBox($imgBox);
        $vg7->setImgBoxSize($imgBox->getSize());
        $vg7->updateImgBoxFileName();

        $imgPathTheme = $basePath . "/public/dl/themes/jurassic_world-theme.jpg";
        $imgTheme = new UploadedFile($imgPathTheme, 'jurassic_world-theme.jpg', 'image/jpeg', null, true);
        $vg7->setImgTheme($imgTheme);
        $vg7->setImgThemeSize($imgBox->getSize());
        $vg7->updateImgThemeNewFileName();

        foreach (array($g6, $g12, $g7, $g4) as $g)
            $vg7->addGender($g);
        $manager->persist($vg7);


        $vg8 = new VideoGame(
            "Project Hospital",
            $p2,
            new DateTime("2018-09-28"),
            "Project Hospital est un jeu de gestion dans le domaine de la santé. A vous de créer et de gérer votre propre hôpital, recrutez des médecins spécialistes et généralistes. Trouvez l'équilibre pour subvenir aux besoins de vos patients, mais aussi de vos salariés.",
            "Project Hospital est un jeu aux graohismes assez moyens, voire pas terribles, il est très lent comme jeu de gestion et augmenter la vitesse c'est prendre le risque de faire dégénérer les choses. Pour prendre du plaisir pour jouer à ce jeu il faut être extrèmement patient ... Hormis pendant les promotions Steam, je trouve qu'il ne vaut pas son prix de vente de base.",
            31,
            24.99,
            true,
            "https://store.steampowered.com/app/868360/Project_Hospital/"
        );

        $imgPathBox = $basePath . '/public/dl/box/project_hospital-boite.jpg';
        $imgBox = new UploadedFile($imgPathBox, 'project_hospital-boite.jpg', 'image/jpeg', null, true);
        $vg8->setImgBox($imgBox);
        $vg8->setImgBoxSize($imgBox->getSize());
        $vg8->updateImgBoxFileName();

        $imgPathTheme = $basePath . "/public/dl/themes/project_hospital-theme.jpg";
        $imgTheme = new UploadedFile($imgPathTheme, 'project_hospital-theme.jpg', 'image/jpeg', null, true);
        $vg8->setImgTheme($imgTheme);
        $vg8->setImgThemeSize($imgBox->getSize());
        $vg8->updateImgThemeNewFileName();

        foreach (array($g6, $g9, $g12, $g4) as $g)
            $vg8->addGender($g);
        $manager->persist($vg8);


        $vg9 = new VideoGame(
            "Terraformers",
            $p2,
            new DateTime("2022-04-21"),
            "Terraformers est un jeu dont le but est de coloniser notre planète voisine : Mars. Choisissez la zone de votre première colonie, installez des habitations, des infrastructures et partez à l'exploration de la planète pour trouver des ressources et installer d'autres colonies.",
            "Terraformers est un jeu de gestion stratégique très intéressant. On passe par différentes phases de colonisation pour finalement rendre notre nouvelle planète habitable. Là encore, c'est une question d'équilibre, il faut commercer avec la Terre pour recevoir des ressources nécessaires à la construction d'infrastructure par exemple ... A vous de faire le bon choix. Le jeu n'est pas difficile en soit, le faut juste prendre le temps de comprendre les mécaniques de jeux, j'y ai personnellement pris beaucoup de plaisir à rendre habitable cette belle planète rouge.",
            64,
            19.99,
            true,
            "https://store.steampowered.com/app/1244800/Terraformers/"
        );

        $imgPathBox = $basePath . '/public/dl/box/terra_formers-boite.jpg';
        $imgBox = new UploadedFile($imgPathBox, 'terra_formers-boite.jpg', 'image/jpeg', null, true);
        $vg9->setImgBox($imgBox);
        $vg9->setImgBoxSize($imgBox->getSize());
        $vg9->updateImgBoxFileName();

        $imgPathTheme = $basePath . "/public/dl/themes/terra_formers-theme.jpg";
        $imgTheme = new UploadedFile($imgPathTheme, 'terra_formers-theme.jpg', 'image/jpeg', null, true);
        $vg9->setImgTheme($imgTheme);
        $vg9->setImgThemeSize($imgTheme->getSize());
        $vg9->updateImgThemeNewFileName();

        foreach (array($g6, $g12, $g7, $g4, $g13) as $g)
            $vg9->addGender($g);
        $manager->persist($vg9);


        $vg10 = new VideoGame(
            "The Legend Of Zelda : Tears of the Kingdom",
            $p1,
            new DateTime("2023-05-12"),
            "Quelques années après leur victoire face à Ganon, Link et Zelda explorent les souterrains du château d'Hyrule. Ces souterrains semblent envahis par des miasmes rendant malade toute personne s'y aventurant. C'est à ce moment qu'ils découvrirent tout d'abord des statues et des gravures Sonneau, une civilisation perdue, décrivant une guerre nommée la \"Guerre du Sceau\". S'enfonçant de plus en plus sous le château, ils se retrouvèrent fasse à une momie reprenant vie. Elle semble tout d'abord connaître leurs prénoms, blessa grièvement Link avec ses miasmes, projeta le château dans les airs ... Link et Zelda chutèrent, Zelda disparut tandis que Link fut rattrapé par un gant étrange. A son réveil, Link se retrouva sur une île dans les cieux.",
            "Je n'ai pas de mot pour décrire comme ce jeu est extraordinaire ... Il avait la lourde tâche de succéder à The Legend of Zelda : Breath of the Wild et il a réussi avec brio ! Entre les mécaniques donnant une infinité de possibilités de gameplay, l'histoire qui est très prenante, l'Open World qui est tout bonnement gigantesque entre la surface, les îles célestes et les profondeurs, moi qui suis fan d'aventure, je suis plus que servi ! Je vais lui reconnaître un défaut : là où son prédécesseur était accessible à tous, Tears of the Kingdom est très difficile et a une difficulté croissante avec des ennemis de plus en plus puissants et résistants, la prudence est donc de mise pour ceux qui ne sont pas habitués au gameplay de Breath of the Wild ... Mais quel plaisir, j'ai déjà dépassé les 100h de jeu pour arriver à Ganondorf (qui a du répondant ! Ce qui a dû en décourager certains ... ) et je suis en train de le recommencer ... BREF, un pur plaisir pour ma part. Que de bonheurs m'attendent ... La prochaine chose à faire est de refaire BOTW puis aussitôt TOTK, à vous de jouer ! ;)",
            98,
            54.99,
            true,
            "https://www.amazon.fr/Nintendo-Legend-Zelda-Kingdom-Switch/dp/B07SNRGQC4/ref=sr_1_1?keywords=tears+of+the+kingdom&qid=1691410380&sprefix=tears%2Caps%2C134&sr=8-1"
        );

        $imgPathBox = $basePath . '/public/dl/box/zelda_totk-boite.jpg';
        $imgBox = new UploadedFile($imgPathBox, 'zelda_totk-boite.jpg', 'image/jpeg', null, true);
        $vg10->setImgBox($imgBox);
        $vg10->setImgBoxSize($imgBox->getSize());
        $vg10->updateImgBoxFileName();

        $imgPathTheme = $basePath . "/public/dl/themes/zelda_totk-theme.jpg";
        $imgTheme = new UploadedFile($imgPathTheme, 'zelda_totk-theme.jpg', 'image/jpeg', null, true);
        $vg10->setImgTheme($imgTheme);
        $vg10->setImgThemeSize($imgTheme->getSize());
        $vg10->updateImgThemeNewFileName();

        foreach (array($g1, $g2, $g5, $g12, $g3, $g7, $g4, $g14, $g13) as $g)
            $vg10->addGender($g);
        $manager->persist($vg10);


        $vg11 = new VideoGame(
            "The Legend Of Zelda : Breath of the Wild",
            $p1,
            new DateTime("2017-03-03"),
            "The Legend of Zelda : Breath of the Wild est difficile à placer dans la chronologie des jeux de la licence Zelda. Vous êtes Link et vous vous faites réveiller par une voix ... Vous êtes allongé dans une sorte de cuve qui vous a certainement soigné. Vous allez découvrir la Tablette Sheikah, un artéfact Sheikah très pratique. Vous sortez de l'endroit où vous vous trouviez et vous vous rendez rapidement compte que vous vous trouvez sur un Plateau isolé du monde ... Puis vous voyez un homme auquel vous vous adressez, il semble que vous ayez tout d'abord perdu la mémoire, impossible de vous rappeler de qui provenait cette voix qui vous obsède ... Vous comprenez juste que vous allez devoir affronter de grands dangers et notamment visiter des sanctuaires pour vous renforcer.",
            "Ce jeu de la licence Zelda est juste génial. Le gameplay vous isolant du reste d'Hyrule au début pour apprendre, évidemment, à jouer Link, est une bonne idée. Les terres d'Hyrule sont vastes, les possibilités sont grandes, vous pouvez suivre l'histoire tranquillement, tout comme finir le Plateau du Prélude et affronter à vos risques et périls Ganon ... A vous de choisir, j'aime personnellement prendre monn temps, visiter le monde qui m'attend, ce que j'ai fait avec tant de plaisir !",
            98,
            54.99,
            true,
            "https://www.amazon.fr/Legend-Zelda-Breath-Wild/dp/B01MUAFFPA/ref=sr_1_1?keywords=breath+of+the+wild&qid=1691411304&sprefix=breat%2Caps%2C88&sr=8-1"
        );

        $imgPathBox = $basePath . '/public/dl/box/zelda_botw-boite.jpg';
        $imgBox = new UploadedFile($imgPathBox, 'zelda_botw-boite.jpg', 'image/jpeg', null, true);
        $vg11->setImgBox($imgBox);
        $vg11->setImgBoxSize($imgBox->getSize());
        $vg11->updateImgBoxFileName();

        $imgPathTheme = $basePath . "/public/dl/themes/zelda_botw-theme.jpeg";
        $imgTheme = new UploadedFile($imgPathTheme, 'zelda_botw-theme.jpeg', 'image/jpeg', null, true);
        $vg11->setImgTheme($imgTheme);
        $vg11->setImgThemeSize($imgTheme->getSize());
        $vg11->updateImgThemeNewFileName();

        foreach (array($g1, $g2, $g5, $g12, $g3, $g7, $g13, $g14) as $g)
            $vg11->addGender($g);
        $manager->persist($vg11);


        $vg12 = new VideoGame(
            "Dragon Quest XI : Les Combattants de la Destinée",
            $p1,
            new DateTime("2017-07-23"),
            "Dragon Quest XI se déroule dans le royaume d'Helréa. Vous incarnez un jeune homme au village de Caubaltin. Vous avez atteint la majorité et vous devez passer un rite spécifique au village, avec votre amie Gemma. Vous la passez sans grande difficulté malgré quelques monstres ... et arrivé tout en haut, un monstre puissant apparaît, il s'apprête à vous attaquer quand soudain votre main se met à s'illuminer : un éclair s'abat sur le monstre et il s'enfuit. Le rite fini, vous revenez au village et on vous explique que vous êtes en fait l'Éclairé ! Un héro légendaire qui se réincarne régulièrement pour vaincre le mal absolu ...",
            "Dragon Quest XI est un jeu que j'ai découvert sur PC mais j'y ai plus joué sur Nintendo Switch. Hormis un léger défaut dans la version Switch, ce jeu est super, l'histoire contient de multiples bouleversements, et ce dès le début ! Mais sans cela, jamais vous n'auriez rencontré votre précieux 1er compagnon : Érik le voleur ! Vous rencontrez d'autres compagnons, chacun ayant sa particularité, son caractère ... Les mécaniques de jeu sont intéressantes, notamment pour l'arbre de compétences, à vous de bien choisir quelles compétences débloquer, quelle arme vous choisiriez entre l'épée à une main et l'épée longue pour votre héros. Le jeu a une longue durée de vie sans trop de rajout inutile (à part le défaut cité précédemment pour la version Switch ...) et à la fin du jeu, vous avez même la possibilité de vous marier, ce que je trouve amusant : choisirez vous Gemma, votre amie d'enfance qui semble avoir des sentiments pour vous ?",
            73,
            54.99,
            true,
            "https://www.amazon.fr/Dragon-Quest-XI-Elusive-Definitive/dp/B07SJFWCSL/ref=sr_1_6?crid=HA6R71H41LCS&keywords=dragon+quest+switch&qid=1691759327&sprefix=%2Caps%2C130&sr=8-6"
        );

        $imgPathBox = $basePath . '/public/dl/box/dq11-boite.jpg';
        $imgBox = new UploadedFile($imgPathBox, 'dq11-boite.jpg', 'image/jpeg', null, true);
        $vg12->setImgBox($imgBox);
        $vg12->setImgBoxSize($imgBox->getSize());
        $vg12->updateImgBoxFileName();

        $imgPathTheme = $basePath . "/public/dl/themes/dq11-theme.jpeg";
        $imgTheme = new UploadedFile($imgPathTheme, 'dq11-theme.jpeg', 'image/jpeg', null, true);
        $vg12->setImgTheme($imgTheme);
        $vg12->setImgThemeSize($imgTheme->getSize());
        $vg12->updateImgThemeNewFileName();

        foreach (array($g1, $g2, $g3, $g11) as $g)
            $vg12->addGender($g);
        $manager->persist($vg12);

        $manager->flush();


        /**
         * OBJECTS Comments
         */
        //  COMMENTS FOR Pokemon legendes arceus
        $c1 = new Comments(
            $u1,
            $vg1,
            "Un jeu sympathique",
            "Ce jeu Pokémon est vraiment sympathique, ce fut un plaisir d'explorer Sinho à sa création, malgré tout de même quelques bugs embêtants parfois il y a des idées intéressantes ... Juste, les formes régionales et nouvelles évolutions il faut se calmer les gars ... Mais un pur plaisir tout de même.",
            65,
            new DateTime("2022-07-03")
        );
        $manager->persist($c1);
        $c2 = new Comments(
            $u6,
            $vg1,
            'Super jeu !',
            "J'adore ce jeu, l'histoire est captivante et les graphismes sont superbes.",
            78,
            new DateTime("2023-01-15")
        );
        $manager->persist($c2);
        $c3 = new Comments(
            $u6,
            $vg1,
            "Pas mal du tout",
            "Pokémon : Légendes Arceus est une expérience unique dans la série Pokémon.",
            71,
            new DateTime("2023-02-05")
        );
        $manager->persist($c3);
        $u = new User("", "Jack", "", "", "", "Indéterminé", new DateTime(), false, "", "", false);
        do {
            $s = $u->getSurname() . strval($u->getId());
        } while ($manager->getRepository(User::class)->findBy(['username' => $s]));
        $u->setUsername($s);
        $u->setAvatarFile(null);
        $c4 = new Comments(
            $u,
            $vg1,
            "Pas mal du tout",
            "J'ai apprécié l'aventure, mais j'aurais aimé plus de Pokémon disponibles.",
            65,
            new DateTime("2022-02-20")
        );
        $manager->persist($c4);
        $c5 = new Comments(
            $u7,
            $vg1,
            "Un peu décevant",
            "Je m'attendais à plus de nouveautés, mais le jeu est solide.",
            55,
            new DateTime("2023-03-10")
        );
        $manager->persist($c5);
        $c6 = new Comments(
            $u8,
            $vg1,
            "À essayer",
            "Pokémon : Légendes Arceus offre une expérience Pokémon différente et vaut le coup d'œil.",
            80,
            new DateTime("2023-04-02")
        );
        $manager->persist($c6);
        // COMMENTS FOR Pokemon Violet & Ecarlate
        $c7 = new Comments(
            $u3,
            $vg2,
            "Décevant",
            "Je m'attendais à mieux de la part de Pokémon.",
            54,
            new DateTime("2023-04-02")
        );
        $manager->persist($c7);
        $c8 = new Comments(
            $u2,
            $vg2,
            "Mouais ...",
            "Ces jeux restent agréables pour les fans de Pokémon, mais trop de problèmes je trouve.",
            61,
            new DateTime("2022-12-05")
        );
        $manager->persist($c8);
        $c9 = new Comments(
            $u9,
            $vg2,
            "Graphismes vieillots",
            "Les graphismes n'ont pas été traités correctement, mais l'expérience Pokémon est là, en partie ...",
            57,
            new DateTime("2023-01-02")
        );
        $manager->persist($c9);
        //  COMMENTS FOR Hogwarts Legacy
        //$u = new User("", "Daphnée", "Indéterminé", "", "", "", new DateTime(), false, "", "", false, $this->avatarUploader);
        $u = new User("", "Daphnée", "", "", "", "Indéterminé", new DateTime(), false, "", false);
        $u->setAvatarFile(null);
        do {
            $s = $u->getSurname() . strval($u->getId());
        } while ($manager->getRepository(User::class)->findBy(['username' => $s]));
        $u->setUsername($s);
        $c10 = new Comments(
            $u,
            $vg3,
            "Fantastique !",
            "Ce jeu est un rêve devenu réalité pour les fans d'Harry Potter.",
            90,
            new DateTime("2023-10-18")
        );
        $manager->persist($c10);
        $c11 = new Comments(
            $u7,
            $vg3,
            "Bons souvenirs",
            "Retourner à Poudlard est toujours une expérience magique.",
            83,
            new DateTime("2023-10-02")
        );
        $manager->persist($c11);
        $c12 = new Comments(
            $u6,
            $vg3,
            "A explorer",
            "L'univers d'Harry Potter est magnifiquement recréé.",
            74,
            new DateTime("2023-01-12")
        );
        $manager->persist($c12);
        $c13 = new Comments(
            $u3,
            $vg3,
            "A explorer",
            "L'univers d'Harry Potter est magnifiquement recréé.",
            74,
            new DateTime("2023-12-01")
        );
        $manager->persist($c13);
        //  COMMENTS FOR Rouge Feu / Vert Feuille
        $c14 = new Comments(
            $u1,
            $vg4,
            "Nostalgie",
            "Ces remakes me rappellent mon enfance.",
            67,
            new DateTime("2021-12-10")
        );
        $manager->persist($c14);
        //$u = new User("", "Julie", "Indéterminé", "", "", "", new DateTime(), false, "", "", false, $this->avatarUploader);
        $u = new User("", "Julie", "", "", "", "Indéterminé", new DateTime(), false, "", false);
        do {
            $s = $u->getSurname() . strval($u->getId());
        } while ($manager->getRepository(User::class)->findBy(['username' => $s]));
        $u->setUsername($s);
        $u->setAvatarFile(null);

        $c15 = new Comments(
            $u,
            $vg4,
            "Classique",
            "Pokémon Rouge Feu/Vert Feuille reste un classique intemporel.",
            76,
            new DateTime("2022-01-06")
        );
        $manager->persist($c15);
        $c16 = new Comments(
            $u10,
            $vg4,
            "Un peu trop surestimé",
            "Ils ont fait un bon travail avec ces remakes, mais peut mieux faire, par exemple : pas beaucoup de contenu rajouté aux jeux par rapport aux originaux ...",
            74,
            new DateTime("2023-05-20")
        );
        $manager->persist($c16);
        //  COMMENTS FOR Terra Nil
        $c17 = new Comments(
            $u7,
            $vg5,
            "Unique !",
            "Terra Nil propose une expérience de gestion écologique unique.",
            83,
            new DateTime("2022-07-08")
        );
        $manager->persist($c17);
        $c18 = new Comments(
            $u5,
            $vg5,
            "Addictif",
            "Je ne peux pas m'arrêter de jouer à ce jeu.",
            87,
            new DateTime("2022-07-28")
        );
        $manager->persist($c18);
        // COMMENTS FOR Farthest Frontier
        $c19 = new Comments(
            $u8,
            $vg6,
            "Du potentiel",
            "Le jeu a du potentiel, mais il a encore besoin de travail.",
            61,
            new DateTime("2022-09-10")
        );
        $manager->persist($c19);
        $c20 = new Comments(
            $u12,
            $vg6,
            "Addictif",
            "Je ne peux pas m'arrêter de jouer à ce jeu.",
            59,
            new DateTime("2022-09-25")
        );
        $manager->persist($c20);
        // COMMENTS FOR Jurassic World Evolution
        //$u = new User("", "René", "Indéterminé", "", "", "", new DateTime(), false, "", "", false, $this->avatarUploader);
        $u = new User("", "René", "", "", "", "Indéterminé", new DateTime(), false, "", false);
        do {
            $s = $u->getSurname() . strval($u->getId());
        } while ($manager->getRepository(User::class)->findBy(['username' => $s]));
        $u->setUsername($s);
        $u->setAvatarFile(null);
        $c21 = new Comments(
            $u,
            $vg7,
            "Juste UN mot : DINOSAURES !",
            "Jurassic World Evolution réalise le rêve de créer un parc de dinosaures.",
            88,
            new DateTime("2022-07-15")
        );
        $manager->persist($c21);
        $c22 = new Comments(
            $u6,
            $vg7,
            "Bonne rejouabilité !",
            "Beaucoup de contenu pour les fans de dinosaures.",
            90,
            new DateTime("2023-08-01")
        );
        $manager->persist($c22);
        $c23 = new Comments(
            $u11,
            $vg7,
            "Génial !",
            "J'adore ce jeu, je construis des parcs depuis des heures et je commence juste ! (plus de 200h de jeux !!!)",
            93,
            new DateTime("2021-02-09")
        );
        $manager->persist($c23);
        //  COMMENTS FOR Project Hospital
        $c24 = new Comments(
            $u3,
            $vg8,
            "Décevant ...",
            "Ce jeu est sympathique aux premiers abords, mais c'est tout malheureusement, il est mou et limité que ce soit niveau gameplay ou graphismes ...",
            46,
            new DateTime("2019-02-05")
        );
        $manager->persist($c24);
        //  COMMENTS FOR Terraformers
        $c25 = new Comments(
            $u9,
            $vg9,
            "Exploration et aménagements",
            "J'adore explorer Mars avec Terraformers ! Il faut bien réfléchir à comment agencer nos différentes colonies et trouver les bonnes ressources pou espérer rendre Mars viable pour l'Homme !",
            78,
            new DateTime("2022-03-10")
        );
        $manager->persist($c25);
        $c26 = new Comments(
            $u3,
            $vg9,
            "Colonisation spatiale",
            "Excellent jeu rempli de bonnes idées, parfois un peu frustrant mais une fois pris en main, on passe un bon moment.",
            68,
            new DateTime("2022-03-14")
        );
        $manager->persist($c26);
        //  COMMENTS FOR Zelda TOTK 
        $c27 = new Comments(
            $u6,
            $vg10,
            "Exploration et aménagements",
            "J'adore explorer Mars avec Terraformers ! Il faut bien réfléchir à comment agencer nos différentes colonies et trouver les bonnes ressources pou espérer rendre Mars viable pour l'Homme !",
            95,
            new DateTime("2023-04-15")
        );
        $manager->persist($c27);
        //$u = new User("", "Charlie", "Indéterminé", "", "", "", new DateTime(), false, "", "", false, $this->avatarUploader);
        $u = new User("", "Charlie", "", "", "", "Indéterminé", new DateTime(), false, "", false);
        do {
            $s = $u->getSurname() . strval($u->getId());
        } while ($manager->getRepository(User::class)->findBy(['username' => $s]));
        $u->setUsername($s);
        $u->setAvatarFile(null);
        $c28 = new Comments(
            $u,
            $vg10,
            "Un jeu à couper le souffle !",
            "Les graphismes, l'histoire, les personnages, les combats, le gameplay ... tout est à couper le souffle !",
            98,
            new DateTime("2023-05-01")
        );
        $manager->persist($c28);
        //  COMMENTS FOR Zelda BOTW
        $c29 = new Comments(
            $u2,
            $vg11,
            "Un chef-d'œuvre",
            "Breath of the Wild est un chef-d'œuvre du jeu vidéo.",
            93,
            new DateTime("2019-04-10")
        );
        $manager->persist($c29);
        $c30 = new Comments(
            $u11,
            $vg11,
            "Un jeu à couper le souffle !",
            "Les graphismes, l'histoire, les personnages, les combats, le gameplay ... tout est à couper le souffle !",
            96,
            new DateTime("2020-04-25")
        );
        $manager->persist($c30);
        //  COMMENTS FOR DQ XI
        $c31 = new Comments(
            $u9,
            $vg12,
            "Jeu chouette",
            "Un jeu cool qui a sû s'adapter proprement sur toutes les plateformes (même sur Switch ça fonctionne bien !), de longues heures de jeux à mon actif et plusieurs essais car il existe beaucoup de possibilités de personnalisation pour chaque personnage (notamment le choix des armes et de la façon dont vous voulez les jouer)",
            68,
            new DateTime("2019-06-18")
        );
        $manager->persist($c31);



        $manager->flush();
    }
}
