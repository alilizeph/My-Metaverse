<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_25b5bf017ff68c5340fd508629a0a355 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        $context["current_page"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "attributes", [], "any", false, false, false, 1), "get", ["_route"], "method", false, false, false, 1);
        // line 2
        yield "
<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<title>My Metaverse</title>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<meta name=\"description\" content=\"My Metaverse est un site de critiques de jeux vidéo, basées sur mes critères, mes ressentis et expériences personnelles. Vous aurez la possibilité de vous-mêmes donner votre avis sur le jeu pour enrichir le contenu de ce site Web.\">
\t\t<meta name=\"keywords\" content=\"Projet Symfony, Premier projet, first project, Symfony project, Critiques, Jeux Vidéo, videogames, Critiques de Jeux, Critiques, avis, classements\">
\t\t<meta name=\"author\" content=\"BUFFARD Alexandre - alilizeph\">
\t\t<meta name=\"copyright\" content=\"BUFFARD Alexandre - alilizeph\">
\t\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 13
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        yield "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 14
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/reset.css"), "html", null, true);
        yield "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 15
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        yield "\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Poppins&display=swap\" rel=\"stylesheet\">
\t\t<script src=\"";
        // line 19
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript/app.js"), "html", null, true);
        yield "\" type=\"text/javascript\"></script>

\t\t<link rel=\"stylesheet\" href=\"";
        // line 21
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./css/animated-block.css"), "html", null, true);
        yield "\">
\t\t";
        // line 22
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 25
        yield "\t\t";
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 29
        yield "
\t\t";
        // line 30
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 31
        yield "
\t</head>
\t<body>
\t\t<header>
\t\t\t<img src=\"";
        // line 35
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/test.png"), "html", null, true);
        yield "\" alt=\"logo de My Metaverse\" id=\"logo\">

\t\t\t<input type=\"checkbox\" name=\"burger-menu\" id=\"menu-burger\">
\t\t\t<section id=\"menu-icon\">
\t\t\t\t<span></span>
\t\t\t</section>
\t\t\t<nav>
\t\t\t\t<ul>
\t\t\t\t\t<li ";
        // line 43
        if (((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 43, $this->source); })()) == "homepage")) {
            yield " class=\"active\" ";
        }
        yield ">
\t\t\t\t\t\t<a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        yield "\">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
        // line 46
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 47
            yield "\t\t\t\t\t\t<li ";
            if (((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 47, $this->source); })()) == "app_admin")) {
                yield " class=\"active\" ";
            }
            yield ">
\t\t\t\t\t\t\t<a href=\"";
            // line 48
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
            yield "\">Espace administrateur</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 51
        yield "\t\t\t\t\t";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 52
            yield "\t\t\t\t\t\t<li ";
            if (((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 52, $this->source); })()) == "user_public_profile")) {
                yield " class=\"active\" ";
            }
            yield ">
\t\t\t\t\t\t\t<a href=\"";
            // line 53
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_private_profile", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53), "id", [], "any", false, false, false, 53)]), "html", null, true);
            yield "\">Mon Profil</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 56
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Déconnexion</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        } else {
            // line 59
            yield "\t\t\t\t\t\t<li ";
            if (((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 59, $this->source); })()) == "app_registration")) {
                yield " class=\"active\" ";
            }
            yield ">
\t\t\t\t\t\t\t<a href=\"";
            // line 60
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_registration");
            yield "\">S'inscrire</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li ";
            // line 62
            if (((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 62, $this->source); })()) == "app_login")) {
                yield " class=\"active\" ";
            }
            yield ">
\t\t\t\t\t\t\t<a href=\"";
            // line 63
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Connexion</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 66
        yield "\t\t\t\t\t<li id=\"reviews-menu\" ";
        if (((((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 66, $this->source); })()) == "videogames_list") || ((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 66, $this->source); })()) == "videogame_card")) || ((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 66, $this->source); })()) == "videogame_list_gender"))) {
            yield " class=\"active\" ";
        }
        yield ">
\t\t\t\t\t\t<span id=\"resp-genders-menu\">
\t\t\t\t\t\t\t<a>Mes critiques</a>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<ul class=\"videogame-list-nav\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videogames_list");
        yield "\" class=\"video-game-gender all\">
\t\t\t\t\t\t\t\t\t<span>Tous les jeux</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videogames_list_gender", ["id" => 1]);
        yield "\" class=\"video-game-gender rpg\">
\t\t\t\t\t\t\t\t\t<span>RPG</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videogames_list_gender", ["id" => 2]);
        yield "\" class=\"video-game-gender avent\">
\t\t\t\t\t\t\t\t\t<span>Aventure</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videogames_list_gender", ["id" => 3]);
        yield "\" class=\"video-game-gender fant\">
\t\t\t\t\t\t\t\t\t<span>Fantastique</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 92
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videogames_list_gender", ["id" => 4]);
        yield "\" class=\"video-game-gender crea\">
\t\t\t\t\t\t\t\t\t<span>Création</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videogames_list_gender", ["id" => 5]);
        yield "\" class=\"video-game-gender ow\">
\t\t\t\t\t\t\t\t\t<span>Open World</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 102
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videogames_list_gender", ["id" => 6]);
        yield "\" class=\"video-game-gender gestion\">
\t\t\t\t\t\t\t\t\t<span>Gestion</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 107
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videogames_list_gender", ["id" => 7]);
        yield "\" class=\"video-game-gender refl\">
\t\t\t\t\t\t\t\t\t<span>Réflexion<span></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 111
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videogames_list_gender", ["id" => 8]);
        yield "\" class=\"video-game-gender ecolo\">
\t\t\t\t\t\t\t\t\t<span>Écologie</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 116
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videogames_list_gender", ["id" => 9]);
        yield "\" class=\"video-game-gender sante\">
\t\t\t\t\t\t\t\t\t<span>Santé</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 121
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videogames_list_gender", ["id" => 10]);
        yield "\" class=\"video-game-gender survie\">
\t\t\t\t\t\t\t\t\t<span>Survie</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 126
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videogames_list_gender", ["id" => 11]);
        yield "\" class=\"video-game-gender tact\">
\t\t\t\t\t\t\t\t\t<span>Tactique</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 131
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videogames_list_gender", ["id" => 12]);
        yield "\" class=\"video-game-gender strat\">
\t\t\t\t\t\t\t\t\t<span>Stratégie</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 136
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videogames_list_gender", ["id" => 13]);
        yield "\" class=\"video-game-gender chill\">
\t\t\t\t\t\t\t\t\t<span>Chill</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"li-postapo\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 141
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videogames_list_gender", ["id" => 14]);
        yield "\" class=\"video-game-gender postapo\">
\t\t\t\t\t\t\t\t\t<span>Post-Apocalyptique</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</li>
\t\t\t\t</header>
\t\t\t\t";
        // line 150
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 151
        yield "\t\t\t\t<footer>
\t\t\t\t\t<section>
\t\t\t\t\t\t<h4>Copyright © 2023-2024 BUFFARD Alexandre</h4>
\t\t\t\t\t\t<h5>Licence CC Creative Commons BY-NC</h5>
\t\t\t\t\t\t<h5>Contact:
\t\t\t\t\t\t\t<a href=\"mailto:buffardalex492@hotmail.fr\">buffardalex492@hotmail.fr</a>
\t\t\t\t\t\t</h5>
\t\t\t\t\t</section>
\t\t\t\t\t<img src=\"";
        // line 159
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/by-nc.png"), "html", null, true);
        yield "\" alt=\"Licence Creative Commons BY-NC\">
\t\t\t\t</footer>
\t\t\t</body>
\t\t</html>
\t</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 22
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        yield "\t\t\t";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        yield "
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 25
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        yield "\t\t\t";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        yield "

\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 30
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 150
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  419 => 150,  400 => 30,  385 => 26,  375 => 25,  361 => 23,  351 => 22,  333 => 159,  323 => 151,  321 => 150,  309 => 141,  301 => 136,  293 => 131,  285 => 126,  277 => 121,  269 => 116,  261 => 111,  254 => 107,  246 => 102,  238 => 97,  230 => 92,  222 => 87,  214 => 82,  206 => 77,  198 => 72,  186 => 66,  180 => 63,  174 => 62,  169 => 60,  162 => 59,  156 => 56,  150 => 53,  143 => 52,  140 => 51,  134 => 48,  127 => 47,  125 => 46,  120 => 44,  114 => 43,  103 => 35,  97 => 31,  95 => 30,  92 => 29,  89 => 25,  87 => 22,  83 => 21,  78 => 19,  71 => 15,  67 => 14,  63 => 13,  50 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set current_page = app.request.attributes.get('_route') %}

<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<title>My Metaverse</title>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<meta name=\"description\" content=\"My Metaverse est un site de critiques de jeux vidéo, basées sur mes critères, mes ressentis et expériences personnelles. Vous aurez la possibilité de vous-mêmes donner votre avis sur le jeu pour enrichir le contenu de ce site Web.\">
\t\t<meta name=\"keywords\" content=\"Projet Symfony, Premier projet, first project, Symfony project, Critiques, Jeux Vidéo, videogames, Critiques de Jeux, Critiques, avis, classements\">
\t\t<meta name=\"author\" content=\"BUFFARD Alexandre - alilizeph\">
\t\t<meta name=\"copyright\" content=\"BUFFARD Alexandre - alilizeph\">
\t\t<link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/reset.css') }}\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset(\"css/styles.css\") }}\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Poppins&display=swap\" rel=\"stylesheet\">
\t\t<script src=\"{{ asset('javascript/app.js') }}\" type=\"text/javascript\"></script>

\t\t<link rel=\"stylesheet\" href=\"{{ asset('./css/animated-block.css') }}\">
\t\t{% block stylesheets %}
\t\t\t{{ encore_entry_link_tags('app') }}
\t\t{% endblock %}
\t\t{% block javascripts %}
\t\t\t{{ encore_entry_script_tags('app') }}

\t\t{% endblock %}

\t\t{%block head %}{% endblock %}

\t</head>
\t<body>
\t\t<header>
\t\t\t<img src=\"{{ asset('img/test.png') }}\" alt=\"logo de My Metaverse\" id=\"logo\">

\t\t\t<input type=\"checkbox\" name=\"burger-menu\" id=\"menu-burger\">
\t\t\t<section id=\"menu-icon\">
\t\t\t\t<span></span>
\t\t\t</section>
\t\t\t<nav>
\t\t\t\t<ul>
\t\t\t\t\t<li {% if current_page == 'homepage' %} class=\"active\" {% endif %}>
\t\t\t\t\t\t<a href=\"{{ path('homepage') }}\">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t<li {% if current_page == 'app_admin' %} class=\"active\" {% endif %}>
\t\t\t\t\t\t\t<a href=\"{{ path('app_admin') }}\">Espace administrateur</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t\t\t\t<li {% if current_page == 'user_public_profile' %} class=\"active\" {% endif %}>
\t\t\t\t\t\t\t<a href=\"{{ path('user_private_profile', {'id': app.user.id }) }}\">Mon Profil</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{{ path('app_logout') }}\">Déconnexion</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<li {% if current_page == 'app_registration' %} class=\"active\" {% endif %}>
\t\t\t\t\t\t\t<a href=\"{{ path('app_registration') }}\">S'inscrire</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li {% if current_page == 'app_login' %} class=\"active\" {% endif %}>
\t\t\t\t\t\t\t<a href=\"{{ path('app_login') }}\">Connexion</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<li id=\"reviews-menu\" {% if current_page == 'videogames_list' or current_page == 'videogame_card' or current_page == 'videogame_list_gender' %} class=\"active\" {% endif %}>
\t\t\t\t\t\t<span id=\"resp-genders-menu\">
\t\t\t\t\t\t\t<a>Mes critiques</a>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<ul class=\"videogame-list-nav\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ path('videogames_list')}}\" class=\"video-game-gender all\">
\t\t\t\t\t\t\t\t\t<span>Tous les jeux</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ path('videogames_list_gender', { 'id' : 1 } ) }}\" class=\"video-game-gender rpg\">
\t\t\t\t\t\t\t\t\t<span>RPG</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ path('videogames_list_gender', { 'id' : 2 } ) }}\" class=\"video-game-gender avent\">
\t\t\t\t\t\t\t\t\t<span>Aventure</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ path('videogames_list_gender', { 'id' : 3 } ) }}\" class=\"video-game-gender fant\">
\t\t\t\t\t\t\t\t\t<span>Fantastique</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ path('videogames_list_gender', { 'id' : 4 } ) }}\" class=\"video-game-gender crea\">
\t\t\t\t\t\t\t\t\t<span>Création</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ path('videogames_list_gender', { 'id' : 5 } ) }}\" class=\"video-game-gender ow\">
\t\t\t\t\t\t\t\t\t<span>Open World</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ path('videogames_list_gender', { 'id' : 6 } ) }}\" class=\"video-game-gender gestion\">
\t\t\t\t\t\t\t\t\t<span>Gestion</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ path('videogames_list_gender', { 'id' : 7 } ) }}\" class=\"video-game-gender refl\">
\t\t\t\t\t\t\t\t\t<span>Réflexion<span></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ path('videogames_list_gender', { 'id': 8 } ) }}\" class=\"video-game-gender ecolo\">
\t\t\t\t\t\t\t\t\t<span>Écologie</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ path('videogames_list_gender', { 'id' : 9} ) }}\" class=\"video-game-gender sante\">
\t\t\t\t\t\t\t\t\t<span>Santé</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ path('videogames_list_gender', { 'id' : 10 } ) }}\" class=\"video-game-gender survie\">
\t\t\t\t\t\t\t\t\t<span>Survie</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ path('videogames_list_gender', { 'id' : 11 } ) }}\" class=\"video-game-gender tact\">
\t\t\t\t\t\t\t\t\t<span>Tactique</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ path('videogames_list_gender', { 'id' : 12 } ) }}\" class=\"video-game-gender strat\">
\t\t\t\t\t\t\t\t\t<span>Stratégie</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{ path('videogames_list_gender', { 'id' : 13 } ) }}\" class=\"video-game-gender chill\">
\t\t\t\t\t\t\t\t\t<span>Chill</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"li-postapo\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('videogames_list_gender', { 'id' : 14 } ) }}\" class=\"video-game-gender postapo\">
\t\t\t\t\t\t\t\t\t<span>Post-Apocalyptique</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</li>
\t\t\t\t</header>
\t\t\t\t{% block body %}{% endblock %}
\t\t\t\t<footer>
\t\t\t\t\t<section>
\t\t\t\t\t\t<h4>Copyright © 2023-2024 BUFFARD Alexandre</h4>
\t\t\t\t\t\t<h5>Licence CC Creative Commons BY-NC</h5>
\t\t\t\t\t\t<h5>Contact:
\t\t\t\t\t\t\t<a href=\"mailto:buffardalex492@hotmail.fr\">buffardalex492@hotmail.fr</a>
\t\t\t\t\t\t</h5>
\t\t\t\t\t</section>
\t\t\t\t\t<img src=\"{{ asset('./img/by-nc.png') }}\" alt=\"Licence Creative Commons BY-NC\">
\t\t\t\t</footer>
\t\t\t</body>
\t\t</html>
\t</body>
</html>
", "base.html.twig", "C:\\Users\\robocop\\Desktop\\REVISIONS WEB\\FIRST PROJECTS\\MyMetaverseV2.0\\MyMetaverse\\templates\\base.html.twig");
    }
}
