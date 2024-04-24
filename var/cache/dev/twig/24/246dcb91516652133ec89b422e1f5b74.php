<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_be743ce8fa3c5ca345261d6152a61059 extends Template
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
        $context["current_page"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "attributes", [], "any", false, false, false, 1), "get", ["_route"], "method", false, false, false, 1);
        // line 2
        echo "
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/reset.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Poppins&display=swap\" rel=\"stylesheet\">
\t\t<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript/app.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

\t\t<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./css/animated-block.css"), "html", null, true);
        echo "\">
\t\t";
        // line 22
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "\t\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "
\t\t";
        // line 30
        $this->displayBlock('head', $context, $blocks);
        // line 31
        echo "
\t</head>
\t<body>
\t\t<header>
\t\t\t<img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/test.png"), "html", null, true);
        echo "\" alt=\"logo de My Metaverse\" id=\"logo\">

\t\t\t<input type=\"checkbox\" name=\"burger-menu\" id=\"menu-burger\">
\t\t\t<div id=\"menu-icon\">
\t\t\t\t<span></span>
\t\t\t</div>
\t\t\t<nav>
\t\t\t\t<ul>
\t\t\t\t\t<li ";
        // line 43
        if (((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 43, $this->source); })()) == "homepage")) {
            echo " class=\"active\" ";
        }
        echo ">
\t\t\t\t\t\t<a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li ";
        // line 46
        if ((((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 46, $this->source); })()) == "videogames_list") || ((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 46, $this->source); })()) == "videogame_card"))) {
            echo " class=\"active\" ";
        }
        echo ">
\t\t\t\t\t\t<a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videogames_list");
        echo "\">Mes critiques</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
        // line 49
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 50
            echo "\t\t\t\t\t\t<li ";
            if (((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 50, $this->source); })()) == "app_admin")) {
                echo " class=\"active\" ";
            }
            echo ">
\t\t\t\t\t\t\t<a href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
            echo "\">Espace administrateur</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 54
        echo "\t\t\t\t\t";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 55
            echo "\t\t\t\t\t\t<li ";
            if (((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 55, $this->source); })()) == "user_public_profile")) {
                echo " class=\"active\" ";
            }
            echo ">
\t\t\t\t\t\t\t<a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_private_profile", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56), "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\">Mon Profil</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 59
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        } else {
            // line 62
            echo "\t\t\t\t\t\t<li ";
            if (((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 62, $this->source); })()) == "app_registration")) {
                echo " class=\"active\" ";
            }
            echo ">
\t\t\t\t\t\t\t<a href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_registration");
            echo "\">S'inscrire</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li ";
            // line 65
            if (((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 65, $this->source); })()) == "app_login")) {
                echo " class=\"active\" ";
            }
            echo ">
\t\t\t\t\t\t\t<a href=\"";
            // line 66
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 69
        echo "\t\t\t\t</ul>
\t\t\t</nav>
\t\t</header>
\t\t";
        // line 72
        $this->displayBlock('body', $context, $blocks);
        // line 73
        echo "\t\t<footer>
\t\t\t<section>
\t\t\t\t<h4>Copyright © 2023-2024 BUFFARD Alexandre</h4>
\t\t\t\t<h5>Licence CC Creative Commons BY-NC</h5>
\t\t\t\t<h5>Contact:
\t\t\t\t\t<a href=\"mailto:buffardalex492@hotmail.fr\">buffardalex492@hotmail.fr</a>
\t\t\t\t</h5>
\t\t\t</section>
\t\t\t<img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/by-nc.png"), "html", null, true);
        echo "\" alt=\"Licence Creative Commons BY-NC\">
\t\t</footer>
\t</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        echo "\t\t\t";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        echo "\t\t\t";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "

\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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

    }

    // line 72
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  293 => 72,  275 => 30,  261 => 26,  251 => 25,  238 => 23,  228 => 22,  213 => 81,  203 => 73,  201 => 72,  196 => 69,  190 => 66,  184 => 65,  179 => 63,  172 => 62,  166 => 59,  160 => 56,  153 => 55,  150 => 54,  144 => 51,  137 => 50,  135 => 49,  130 => 47,  124 => 46,  119 => 44,  113 => 43,  102 => 35,  96 => 31,  94 => 30,  91 => 29,  88 => 25,  86 => 22,  82 => 21,  77 => 19,  70 => 15,  66 => 14,  62 => 13,  49 => 2,  47 => 1,);
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
\t\t\t<div id=\"menu-icon\">
\t\t\t\t<span></span>
\t\t\t</div>
\t\t\t<nav>
\t\t\t\t<ul>
\t\t\t\t\t<li {% if current_page == 'homepage' %} class=\"active\" {% endif %}>
\t\t\t\t\t\t<a href=\"{{ path('homepage') }}\">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li {% if current_page == 'videogames_list' or current_page == 'videogame_card' %} class=\"active\" {% endif %}>
\t\t\t\t\t\t<a href=\"{{ path('videogames_list')}}\">Mes critiques</a>
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
\t\t\t\t</ul>
\t\t\t</nav>
\t\t</header>
\t\t{% block body %}{% endblock %}
\t\t<footer>
\t\t\t<section>
\t\t\t\t<h4>Copyright © 2023-2024 BUFFARD Alexandre</h4>
\t\t\t\t<h5>Licence CC Creative Commons BY-NC</h5>
\t\t\t\t<h5>Contact:
\t\t\t\t\t<a href=\"mailto:buffardalex492@hotmail.fr\">buffardalex492@hotmail.fr</a>
\t\t\t\t</h5>
\t\t\t</section>
\t\t\t<img src=\"{{ asset('./img/by-nc.png') }}\" alt=\"Licence Creative Commons BY-NC\">
\t\t</footer>
\t</body>
</html>
", "base.html.twig", "C:\\Users\\robocop\\Desktop\\REVISIONS WEB\\FIRST PROJECTS\\MyMetaverseV2.0\\MyMetaverse\\templates\\base.html.twig");
    }
}
