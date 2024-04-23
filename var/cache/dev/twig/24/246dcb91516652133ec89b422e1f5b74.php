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
  <head>
    <meta charset=\"utf-8\">
    <title>My Metaverse</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"My Metaverse est un site de critiques de jeux vidéo, basées sur mes critères, mes ressentis et expériences personnelles. Vous aurez la possibilité de vous-mêmes donner votre avis sur le jeu pour enrichir le contenu de ce site Web.\">
    <meta name=\"keywords\" content=\"Projet Symfony, Premier projet, first project, Symfony project, Critiques, Jeux Vidéo, videogames, Critiques de Jeux, Critiques, avis, classements\">
    <meta name=\"author\" content=\"BUFFARD Alexandre - alilizeph\">
    <meta name=\"copyright\" content=\"BUFFARD Alexandre - alilizeph\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/reset.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\"> 
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Poppins&display=swap\" rel=\"stylesheet\">
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("javascript/app.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./css/animated-block.css"), "html", null, true);
        echo "\">
    ";
        // line 22
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "
    ";
        // line 30
        $this->displayBlock('head', $context, $blocks);
        // line 32
        echo "
  </head>
  <body>
    <header>
      <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/test.png"), "html", null, true);
        echo "\" alt=\"logo de My Metaverse\" id=\"logo\">
      
      <input type=\"checkbox\" name=\"burger-menu\" id=\"menu-burger\">
      <div id=\"menu-icon\">
        <span></span>
      </div>
      <nav>
        <ul>
          <li ";
        // line 44
        if (((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 44, $this->source); })()) == "homepage")) {
            echo " class=\"active\"";
        }
        echo ">
            <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\" >Accueil</a>
          </li>
          <li ";
        // line 47
        if ((((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 47, $this->source); })()) == "videogames_list") || ((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 47, $this->source); })()) == "videogame_card"))) {
            echo " class=\"active\"";
        }
        echo ">
            <a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videogames_list");
        echo "\">Mes critiques</a>
          </li>
          ";
        // line 50
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 51
            echo "          <li ";
            if (((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 51, $this->source); })()) == "app_admin")) {
                echo " class=\"active\"";
            }
            echo ">
            <a href=\"";
            // line 52
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
            echo "\">Espace administrateur</a>
          </li>
          ";
        }
        // line 55
        echo "          ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 56
            echo "          <li ";
            if (((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 56, $this->source); })()) == "user_public_profile")) {
                echo " class=\"active\"";
            }
            echo ">
            <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_private_profile", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57), "id", [], "any", false, false, false, 57)]), "html", null, true);
            echo "\">Mon Profil</a>
          </li>
          <li>
            <a href=\"";
            // line 60
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
          </li>
          ";
        } else {
            // line 63
            echo "          <li ";
            if (((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 63, $this->source); })()) == "app_registration")) {
                echo " class=\"active\"";
            }
            echo ">
            <a href=\"";
            // line 64
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_registration");
            echo "\">S'inscrire</a>
          </li>
          <li ";
            // line 66
            if (((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 66, $this->source); })()) == "app_login")) {
                echo " class=\"active\"";
            }
            echo ">
            <a href=\"";
            // line 67
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
          </li>
          ";
        }
        // line 70
        echo "        </ul>
      </nav>
    </header>
      ";
        // line 73
        $this->displayBlock('body', $context, $blocks);
        // line 74
        echo "      <footer>
        <section>
          <h4>Copyright © 2023-2024 BUFFARD Alexandre</h4>
          <h5>Licence CC Creative Commons BY-NC</h5>
          <h5>Contact: <a href=\"mailto:buffardalex492@hotmail.fr\">buffardalex492@hotmail.fr</a></h5>
        </section>
        <img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/by-nc.png"), "html", null, true);
        echo "\" alt=\"Licence Creative Commons BY-NC\">
      </footer>
  </body>
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
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
    ";
        
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
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
        
    ";
        
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

        // line 31
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 73
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
        return array (  293 => 73,  283 => 31,  273 => 30,  259 => 26,  249 => 25,  236 => 23,  226 => 22,  211 => 80,  203 => 74,  201 => 73,  196 => 70,  190 => 67,  184 => 66,  179 => 64,  172 => 63,  166 => 60,  160 => 57,  153 => 56,  150 => 55,  144 => 52,  137 => 51,  135 => 50,  130 => 48,  124 => 47,  119 => 45,  113 => 44,  102 => 36,  96 => 32,  94 => 30,  91 => 29,  88 => 25,  86 => 22,  82 => 21,  77 => 19,  70 => 15,  66 => 14,  62 => 13,  49 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set current_page = app.request.attributes.get('_route') %}

<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <title>My Metaverse</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"My Metaverse est un site de critiques de jeux vidéo, basées sur mes critères, mes ressentis et expériences personnelles. Vous aurez la possibilité de vous-mêmes donner votre avis sur le jeu pour enrichir le contenu de ce site Web.\">
    <meta name=\"keywords\" content=\"Projet Symfony, Premier projet, first project, Symfony project, Critiques, Jeux Vidéo, videogames, Critiques de Jeux, Critiques, avis, classements\">
    <meta name=\"author\" content=\"BUFFARD Alexandre - alilizeph\">
    <meta name=\"copyright\" content=\"BUFFARD Alexandre - alilizeph\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/reset.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset(\"css/styles.css\") }}\">
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\"> 
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Poppins&display=swap\" rel=\"stylesheet\">
    <script src=\"{{ asset('javascript/app.js') }}\" type=\"text/javascript\"></script>
    
    <link rel=\"stylesheet\" href=\"{{ asset('./css/animated-block.css') }}\">
    {% block stylesheets %}
        {{ encore_entry_link_tags('app') }}
    {% endblock %}
    {% block javascripts %}
        {{ encore_entry_script_tags('app') }}
        
    {% endblock %}

    {%block head %}
    {% endblock %}

  </head>
  <body>
    <header>
      <img src=\"{{ asset('img/test.png') }}\" alt=\"logo de My Metaverse\" id=\"logo\">
      
      <input type=\"checkbox\" name=\"burger-menu\" id=\"menu-burger\">
      <div id=\"menu-icon\">
        <span></span>
      </div>
      <nav>
        <ul>
          <li {% if current_page == 'homepage' %} class=\"active\"{% endif %}>
            <a href=\"{{ path('homepage') }}\" >Accueil</a>
          </li>
          <li {% if current_page == 'videogames_list' or current_page == 'videogame_card' %} class=\"active\"{% endif %}>
            <a href=\"{{ path('videogames_list')}}\">Mes critiques</a>
          </li>
          {% if is_granted('ROLE_ADMIN') %}
          <li {% if current_page == 'app_admin' %} class=\"active\"{% endif %}>
            <a href=\"{{ path('app_admin') }}\">Espace administrateur</a>
          </li>
          {% endif %}
          {% if is_granted('IS_AUTHENTICATED_FULLY') %}
          <li {% if current_page == 'user_public_profile' %} class=\"active\"{% endif %}>
            <a href=\"{{ path('user_private_profile', {'id': app.user.id }) }}\">Mon Profil</a>
          </li>
          <li>
            <a href=\"{{ path('app_logout') }}\">Déconnexion</a>
          </li>
          {% else %}
          <li {% if current_page == 'app_registration' %} class=\"active\"{% endif %}>
            <a href=\"{{ path('app_registration') }}\">S'inscrire</a>
          </li>
          <li {% if current_page == 'app_login' %} class=\"active\"{% endif %}>
            <a href=\"{{ path('app_login') }}\">Connexion</a>
          </li>
          {% endif %}
        </ul>
      </nav>
    </header>
      {% block body %}{% endblock %}
      <footer>
        <section>
          <h4>Copyright © 2023-2024 BUFFARD Alexandre</h4>
          <h5>Licence CC Creative Commons BY-NC</h5>
          <h5>Contact: <a href=\"mailto:buffardalex492@hotmail.fr\">buffardalex492@hotmail.fr</a></h5>
        </section>
        <img src=\"{{ asset('./img/by-nc.png') }}\" alt=\"Licence Creative Commons BY-NC\">
      </footer>
  </body>
</html>
", "base.html.twig", "C:\\Users\\robocop\\Desktop\\REVISIONS WEB\\FIRST PROJECTS\\MyMetaverseV2.0\\MyMetaverse\\templates\\base.html.twig");
    }
}
