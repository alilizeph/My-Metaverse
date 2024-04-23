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

/* videogames/videogame-card.html.twig */
class __TwigTemplate_f737c1eb080a36c8bd5a33474cc4d4a9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
            'comments' => [$this, 'block_comments'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "videogames/videogame-card.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "videogames/videogame-card.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "videogames/videogame-card.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./css/videogames/video-game-card.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" gref=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./css/users/login.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" gref=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./css/styles.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200\" />
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <main>
        <article class=\"video-game-card hide\"> 
            <section class=\"video-game-card-theme hide-2\">
                <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 14, $this->source); })()), "imgTheme"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), "html", null, true);
        echo "\" class=\"hide-2\">
            </section>
            <section class=\"video-game-card-head hide-2\">
                <div class=\"video-game-pres hide-2\">
                    <h3 class=\" hide-2\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), "html", null, true);
        echo "</h3>
                    ";
        // line 19
        if (((isset($context["platformName"]) || array_key_exists("platformName", $context) ? $context["platformName"] : (function () { throw new RuntimeError('Variable "platformName" does not exist.', 19, $this->source); })()) == 1)) {
            // line 20
            echo "                    <h4 class=\" hide-2\">Sur : <span>Nintendo Switch</span></h4>
                    ";
        } elseif ((        // line 21
(isset($context["platformName"]) || array_key_exists("platformName", $context) ? $context["platformName"] : (function () { throw new RuntimeError('Variable "platformName" does not exist.', 21, $this->source); })()) == 2)) {
            // line 22
            echo "                    <h4 class=\" hide-2\">Sur : <span>PC Steam</span></h4>
                    ";
        } elseif ((        // line 23
(isset($context["platformName"]) || array_key_exists("platformName", $context) ? $context["platformName"] : (function () { throw new RuntimeError('Variable "platformName" does not exist.', 23, $this->source); })()) == 3)) {
            // line 24
            echo "                    <h4 class=\" hide-2\">Sur : <span>PlayStation 5</span></h4>
                    ";
        } elseif ((        // line 25
(isset($context["platformName"]) || array_key_exists("platformName", $context) ? $context["platformName"] : (function () { throw new RuntimeError('Variable "platformName" does not exist.', 25, $this->source); })()) == 4)) {
            // line 26
            echo "                    <h4 class=\" hide-2\">Sur : <span>GameBoy Advanced</span></h4>
                    ";
        } elseif ((        // line 27
(isset($context["platformName"]) || array_key_exists("platformName", $context) ? $context["platformName"] : (function () { throw new RuntimeError('Variable "platformName" does not exist.', 27, $this->source); })()) == 5)) {
            // line 28
            echo "                    <h4 class=\" hide-2\">Sur : <span>GameBoy / GameBoy Color</span></h4>
                    ";
        } elseif ((        // line 29
(isset($context["platformName"]) || array_key_exists("platformName", $context) ? $context["platformName"] : (function () { throw new RuntimeError('Variable "platformName" does not exist.', 29, $this->source); })()) == 6)) {
            // line 30
            echo "                    <h4 class=\" hide-2\">Sur : <span>PlayStation 4</span></h4>
                    ";
        } elseif ((        // line 31
(isset($context["platformName"]) || array_key_exists("platformName", $context) ? $context["platformName"] : (function () { throw new RuntimeError('Variable "platformName" does not exist.', 31, $this->source); })()) == 7)) {
            // line 32
            echo "                    <h4 class=\" hide-2\">Sur : <span>Nintendo DS</span></h4>
                    ";
        } elseif ((        // line 33
(isset($context["platformName"]) || array_key_exists("platformName", $context) ? $context["platformName"] : (function () { throw new RuntimeError('Variable "platformName" does not exist.', 33, $this->source); })()) == 8)) {
            // line 34
            echo "                    <h4 class=\" hide-2\">Sur : <span>Nintendo 3DS</span></h4>
                    ";
        } elseif ((        // line 35
(isset($context["platformName"]) || array_key_exists("platformName", $context) ? $context["platformName"] : (function () { throw new RuntimeError('Variable "platformName" does not exist.', 35, $this->source); })()) == 9)) {
            // line 36
            echo "                    <h4 class=\" hide-2\">Sur : <span>PlayStation 3</span></h4>
                    ";
        } elseif ((        // line 37
(isset($context["platformName"]) || array_key_exists("platformName", $context) ? $context["platformName"] : (function () { throw new RuntimeError('Variable "platformName" does not exist.', 37, $this->source); })()) == 10)) {
            // line 38
            echo "                    <h4 class=\" hide-2\">Sur : <span>PlayStation 2</span></h4>
                    ";
        } elseif ((        // line 39
(isset($context["platformName"]) || array_key_exists("platformName", $context) ? $context["platformName"] : (function () { throw new RuntimeError('Variable "platformName" does not exist.', 39, $this->source); })()) == 11)) {
            // line 40
            echo "                    <h4 class=\" hide-2\">Sur : <span>PlayStation</span></h4>
                    ";
        } elseif ((        // line 41
(isset($context["platformName"]) || array_key_exists("platformName", $context) ? $context["platformName"] : (function () { throw new RuntimeError('Variable "platformName" does not exist.', 41, $this->source); })()) == 12)) {
            // line 42
            echo "                    <h4 class=\" hide-2\">Sur : <span>XBox</span></h4>
                    ";
        } elseif ((        // line 43
(isset($context["platformName"]) || array_key_exists("platformName", $context) ? $context["platformName"] : (function () { throw new RuntimeError('Variable "platformName" does not exist.', 43, $this->source); })()) == 13)) {
            // line 44
            echo "                    <h4 class=\" hide-2\">Sur : <span>XBox 360</span></h4>
                    ";
        } elseif ((        // line 45
(isset($context["platformName"]) || array_key_exists("platformName", $context) ? $context["platformName"] : (function () { throw new RuntimeError('Variable "platformName" does not exist.', 45, $this->source); })()) == 14)) {
            // line 46
            echo "                    <h4 class=\" hide-2\">Sur : <span>XBox One</span></h4>
                    ";
        } elseif ((        // line 47
(isset($context["platformName"]) || array_key_exists("platformName", $context) ? $context["platformName"] : (function () { throw new RuntimeError('Variable "platformName" does not exist.', 47, $this->source); })()) == 15)) {
            // line 48
            echo "                    <h4 class=\" hide-2\">Sur : <span>XBox Series</span></h4>
                    ";
        }
        // line 50
        echo "                    <p class=\"perso-grade hide-2\">Note personnelle :</p>
                    ";
        // line 51
        if ((twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 51, $this->source); })()), "grade", [], "any", false, false, false, 51) >= 75)) {
            // line 52
            echo "                    <h4 class=\"video-game-grade verygood hide-3\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 52, $this->source); })()), "grade", [], "any", false, false, false, 52), "html", null, true);
            echo "</h4>
                    ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 53
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 53, $this->source); })()), "grade", [], "any", false, false, false, 53) <= 74) && (twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 53, $this->source); })()), "grade", [], "any", false, false, false, 53) >= 60))) {
            // line 54
            echo "                    <h4 class=\"video-game-grade good hide-3\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 54, $this->source); })()), "grade", [], "any", false, false, false, 54), "html", null, true);
            echo "</h4>
                    ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 55
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 55, $this->source); })()), "grade", [], "any", false, false, false, 55) <= 59) && (twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 55, $this->source); })()), "grade", [], "any", false, false, false, 55) >= 50))) {
            // line 56
            echo "                    <h4 class=\"video-game-grade medium hide-3\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 56, $this->source); })()), "grade", [], "any", false, false, false, 56), "html", null, true);
            echo "</h4>
                    ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 57
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 57, $this->source); })()), "grade", [], "any", false, false, false, 57) <= 49) && (twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 57, $this->source); })()), "grade", [], "any", false, false, false, 57) >= 35))) {
            // line 58
            echo "                    <h4 class=\"video-game-grade notenough hide-3\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 58, $this->source); })()), "grade", [], "any", false, false, false, 58), "html", null, true);
            echo "</h4>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 59
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 59, $this->source); })()), "grade", [], "any", false, false, false, 59) <= 34)) {
            // line 60
            echo "                    <h4 class=\"video-game-grade bad hide-3\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 60, $this->source); })()), "grade", [], "any", false, false, false, 60), "html", null, true);
            echo "</h4>
                    ";
        }
        // line 62
        echo "
                    <p class=\"users-grade hide-2\">Note utilisateur :</p>
                    <h4 class=\"video-game-users-grade hide-3\">";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 64, $this->source); })()), "averageUsersGrade", [], "any", false, false, false, 64), "html", null, true);
        echo "</h4>
                    ";
        // line 65
        if ((twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 65, $this->source); })()), "averageUsersGrade", [], "any", false, false, false, 65) >= 75)) {
            // line 66
            echo "                    <h4 class=\"video-game-users-grade verygood hide-3\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 66, $this->source); })()), "averageUsersGrade", [], "any", false, false, false, 66), "html", null, true);
            echo "</h4>
                    ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 67
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 67, $this->source); })()), "averageUsersGrade", [], "any", false, false, false, 67) <= 74) && (twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 67, $this->source); })()), "averageUsersGrade", [], "any", false, false, false, 67) >= 60))) {
            // line 68
            echo "                    <h4 class=\"video-game-users-grade good hide-3\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 68, $this->source); })()), "averageUsersGrade", [], "any", false, false, false, 68), "html", null, true);
            echo "</h4>
                    ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 69
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 69, $this->source); })()), "averageUsersGrade", [], "any", false, false, false, 69) <= 59) && (twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 69, $this->source); })()), "averageUsersGrade", [], "any", false, false, false, 69) >= 50))) {
            // line 70
            echo "                    <h4 class=\"video-game-users-grade medium hide-3\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 70, $this->source); })()), "averageUsersGrade", [], "any", false, false, false, 70), "html", null, true);
            echo "</h4>
                    ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 71
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 71, $this->source); })()), "averageUsersGrade", [], "any", false, false, false, 71) <= 49) && (twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 71, $this->source); })()), "averageUsersGrade", [], "any", false, false, false, 71) >= 35))) {
            // line 72
            echo "                    <h4 class=\"video-game-users-grade notenough hide-3\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 72, $this->source); })()), "averageUsersGrade", [], "any", false, false, false, 72), "html", null, true);
            echo "</h4>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 73
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 73, $this->source); })()), "averageUsersGrade", [], "any", false, false, false, 73) <= 34)) {
            // line 74
            echo "                    <h4 class=\"video-game-users-grade bad hide-3\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 74, $this->source); })()), "averageUsersGrade", [], "any", false, false, false, 74), "html", null, true);
            echo "</h4>
                    ";
        }
        // line 76
        echo "                    <p class=\" hide-3\"><span>Date de sortie</span> : le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 76, $this->source); })()), "releaseDate", [], "any", false, false, false, 76), "d F Y"), "html", null, true);
        echo "</p>
                    <p class=\" hide-3\"><span>Prix moyen</span> : ";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 77, $this->source); })()), "averagePrice", [], "any", false, false, false, 77), "html", null, true);
        echo " €</p>
                    <div class=\"video-game-genders-box hide-3\">
                        <ul class=\"video-game-genders-list\">
                            ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 80, $this->source); })()), "genders", [], "any", false, false, false, 80));
        foreach ($context['_seq'] as $context["_key"] => $context["gender"]) {
            // line 81
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["gender"], "id", [], "any", false, false, false, 81) == 1)) {
                // line 82
                echo "                                <li class=\"video-game-gender rpg\">
                                    RPG
                                </li>
                                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 85
$context["gender"], "id", [], "any", false, false, false, 85) == 2)) {
                // line 86
                echo "                                <li class=\"video-game-gender avent\">
                                    Aventure
                                </li>
                                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 89
$context["gender"], "id", [], "any", false, false, false, 89) == 3)) {
                // line 90
                echo "                                <li class=\"video-game-gender fant\">
                                    Fantastique
                                </li>
                                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 93
$context["gender"], "id", [], "any", false, false, false, 93) == 4)) {
                // line 94
                echo "                                <li class=\"video-game-gender crea\">
                                    Création
                                </li>
                                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 97
$context["gender"], "id", [], "any", false, false, false, 97) == 5)) {
                // line 98
                echo "                                <li class=\"video-game-gender ow\">
                                    Open-World
                                </li>
                                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 101
$context["gender"], "id", [], "any", false, false, false, 101) == 6)) {
                // line 102
                echo "                                <li class=\"video-game-gender gestion\">
                                    Gestion
                                </li>
                                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 105
$context["gender"], "id", [], "any", false, false, false, 105) == 7)) {
                // line 106
                echo "                                <li class=\"video-game-gender refl\">
                                    Réflexion
                                </li>
                                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 109
$context["gender"], "id", [], "any", false, false, false, 109) == 8)) {
                // line 110
                echo "                                <li class=\"video-game-gender ecolo\">
                                    Écologie
                                </li>
                                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 113
$context["gender"], "id", [], "any", false, false, false, 113) == 9)) {
                // line 114
                echo "                                <li class=\"video-game-gender sante\">
                                    Santé
                                </li>
                                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 117
$context["gender"], "id", [], "any", false, false, false, 117) == 10)) {
                // line 118
                echo "                                <li class=\"video-game-gender survie\">
                                    Survie
                                </li>
                                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 121
$context["gender"], "id", [], "any", false, false, false, 121) == 11)) {
                // line 122
                echo "                                <li class=\"video-game-gender tact\">
                                    Tactique
                                </li>
                                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 125
$context["gender"], "id", [], "any", false, false, false, 125) == 12)) {
                // line 126
                echo "                                <li class=\"video-game-gender strat\">
                                    Stratégie
                                </li>
                                ";
            }
            // line 130
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gender'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "                        </ul>
                    </div>
                    <div class=\"video-game-box-zone\">
                        <img class=\"video-game-box\" src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 134, $this->source); })()), "imgBox"), "html", null, true);
        echo "\" alt=\"boîte de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 134, $this->source); })()), "name", [], "any", false, false, false, 134), "html", null, true);
        echo "\">
                    </div>
                </div>
            </section>
            ";
        // line 146
        echo "            
            <section class=\"video-game-content hide-3\">
                <div class=\"video-game-description hide-4\">
                    <h4>Description du jeu : </h4>
                    <p>
                        ";
        // line 151
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 151, $this->source); })()), "description", [], "any", false, false, false, 151), "html", null, true);
        echo "
                    </p>
                </div>
                <div class=\"video-game-advice hide-4\">
                    <h4>Avis et Critiques sur le jeu :</h4>
                    <p>
                        ";
        // line 157
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 157, $this->source); })()), "advice", [], "any", false, false, false, 157), "html", null, true);
        echo "
                    </p>
                </div>
                <button id=\"return-to-list\" class=\"hide-4\">Retour à la liste</button>
            </section>
            
            <script>
                let btn = document.getElementById(\"return-to-list\");
                btn.addEventListener('click', function() {
                    window.location.href=\"";
        // line 166
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videogames_list");
        echo "\";
                })
            </script>
        </article>
        <section class=\"comment-form\">
        ";
        // line 171
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 172
            echo "            ";
            $this->loadTemplate("comments/form-comments.html.twig", "videogames/videogame-card.html.twig", 172)->display(twig_array_merge($context, ["user" => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 172, $this->source); })()), "user", [], "any", false, false, false, 172), "vg" => (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 172, $this->source); })()), "form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 172, $this->source); })())]));
            // line 173
            echo "        ";
        } else {
            // line 174
            echo "            ";
            $this->loadTemplate("comments/form-comments-guest.html.twig", "videogames/videogame-card.html.twig", 174)->display(twig_array_merge($context, ["vg" => (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 174, $this->source); })()), "guestForm" => (isset($context["guestForm"]) || array_key_exists("guestForm", $context) ? $context["guestForm"] : (function () { throw new RuntimeError('Variable "guestForm" does not exist.', 174, $this->source); })())]));
            // line 175
            echo "        ";
        }
        // line 176
        echo "        </section>
        <section class=\"comments-list\">
            ";
        // line 178
        $this->displayBlock('comments', $context, $blocks);
        // line 183
        echo "        </section>
    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 178
    public function block_comments($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "comments"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "comments"));

        // line 179
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 179, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 180
            echo "                ";
            $this->loadTemplate("/comments/comment-videogame-card.html.twig", "videogames/videogame-card.html.twig", 180)->display(twig_array_merge($context, ["comment" => $context["comment"]]));
            // line 181
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "videogames/videogame-card.html.twig";
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
        return array (  513 => 182,  499 => 181,  496 => 180,  478 => 179,  468 => 178,  456 => 183,  454 => 178,  450 => 176,  447 => 175,  444 => 174,  441 => 173,  438 => 172,  436 => 171,  428 => 166,  416 => 157,  407 => 151,  400 => 146,  391 => 134,  386 => 131,  380 => 130,  374 => 126,  372 => 125,  367 => 122,  365 => 121,  360 => 118,  358 => 117,  353 => 114,  351 => 113,  346 => 110,  344 => 109,  339 => 106,  337 => 105,  332 => 102,  330 => 101,  325 => 98,  323 => 97,  318 => 94,  316 => 93,  311 => 90,  309 => 89,  304 => 86,  302 => 85,  297 => 82,  294 => 81,  290 => 80,  284 => 77,  279 => 76,  273 => 74,  271 => 73,  266 => 72,  264 => 71,  259 => 70,  257 => 69,  252 => 68,  250 => 67,  245 => 66,  243 => 65,  239 => 64,  235 => 62,  229 => 60,  227 => 59,  222 => 58,  220 => 57,  215 => 56,  213 => 55,  208 => 54,  206 => 53,  201 => 52,  199 => 51,  196 => 50,  192 => 48,  190 => 47,  187 => 46,  185 => 45,  182 => 44,  180 => 43,  177 => 42,  175 => 41,  172 => 40,  170 => 39,  167 => 38,  165 => 37,  162 => 36,  160 => 35,  157 => 34,  155 => 33,  152 => 32,  150 => 31,  147 => 30,  145 => 29,  142 => 28,  140 => 27,  137 => 26,  135 => 25,  132 => 24,  130 => 23,  127 => 22,  125 => 21,  122 => 20,  120 => 19,  116 => 18,  107 => 14,  102 => 11,  92 => 10,  79 => 6,  75 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('./css/videogames/video-game-card.css') }}\">
    <link rel=\"stylesheet\" gref=\"{{ asset('./css/users/login.css') }}\">
    <link rel=\"stylesheet\" gref=\"{{ asset('./css/styles.css') }}\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200\" />
{% endblock %}

{% block body %}
    <main>
        <article class=\"video-game-card hide\"> 
            <section class=\"video-game-card-theme hide-2\">
                <img src=\"{{ vich_uploader_asset(videoGame, 'imgTheme') }}\" alt=\"{{ videoGame.name }}\" class=\"hide-2\">
            </section>
            <section class=\"video-game-card-head hide-2\">
                <div class=\"video-game-pres hide-2\">
                    <h3 class=\" hide-2\">{{ videoGame.name }}</h3>
                    {% if platformName == 1 %}
                    <h4 class=\" hide-2\">Sur : <span>Nintendo Switch</span></h4>
                    {% elseif platformName == 2 %}
                    <h4 class=\" hide-2\">Sur : <span>PC Steam</span></h4>
                    {% elseif platformName == 3 %}
                    <h4 class=\" hide-2\">Sur : <span>PlayStation 5</span></h4>
                    {% elseif platformName == 4 %}
                    <h4 class=\" hide-2\">Sur : <span>GameBoy Advanced</span></h4>
                    {% elseif platformName == 5 %}
                    <h4 class=\" hide-2\">Sur : <span>GameBoy / GameBoy Color</span></h4>
                    {% elseif platformName == 6 %}
                    <h4 class=\" hide-2\">Sur : <span>PlayStation 4</span></h4>
                    {% elseif platformName == 7 %}
                    <h4 class=\" hide-2\">Sur : <span>Nintendo DS</span></h4>
                    {% elseif platformName == 8 %}
                    <h4 class=\" hide-2\">Sur : <span>Nintendo 3DS</span></h4>
                    {% elseif platformName == 9 %}
                    <h4 class=\" hide-2\">Sur : <span>PlayStation 3</span></h4>
                    {% elseif platformName == 10 %}
                    <h4 class=\" hide-2\">Sur : <span>PlayStation 2</span></h4>
                    {% elseif platformName == 11 %}
                    <h4 class=\" hide-2\">Sur : <span>PlayStation</span></h4>
                    {% elseif platformName == 12 %}
                    <h4 class=\" hide-2\">Sur : <span>XBox</span></h4>
                    {% elseif platformName == 13 %}
                    <h4 class=\" hide-2\">Sur : <span>XBox 360</span></h4>
                    {% elseif platformName == 14 %}
                    <h4 class=\" hide-2\">Sur : <span>XBox One</span></h4>
                    {% elseif platformName == 15 %}
                    <h4 class=\" hide-2\">Sur : <span>XBox Series</span></h4>
                    {% endif %}
                    <p class=\"perso-grade hide-2\">Note personnelle :</p>
                    {% if videoGame.grade >= 75 %}
                    <h4 class=\"video-game-grade verygood hide-3\">{{ videoGame.grade }}</h4>
                    {% elseif videoGame.grade <= 74 and videoGame.grade >= 60 %}
                    <h4 class=\"video-game-grade good hide-3\">{{ videoGame.grade }}</h4>
                    {% elseif videoGame.grade <= 59 and videoGame.grade >= 50 %}
                    <h4 class=\"video-game-grade medium hide-3\">{{ videoGame.grade }}</h4>
                    {% elseif videoGame.grade <= 49 and videoGame.grade >= 35 %}
                    <h4 class=\"video-game-grade notenough hide-3\">{{ videoGame.grade }}</h4>
                    {% elseif videoGame.grade <= 34 %}
                    <h4 class=\"video-game-grade bad hide-3\">{{ videoGame.grade }}</h4>
                    {% endif %}

                    <p class=\"users-grade hide-2\">Note utilisateur :</p>
                    <h4 class=\"video-game-users-grade hide-3\">{{ videoGame.averageUsersGrade }}</h4>
                    {% if videoGame.averageUsersGrade >= 75 %}
                    <h4 class=\"video-game-users-grade verygood hide-3\">{{ videoGame.averageUsersGrade }}</h4>
                    {% elseif videoGame.averageUsersGrade <= 74 and videoGame.averageUsersGrade >= 60 %}
                    <h4 class=\"video-game-users-grade good hide-3\">{{ videoGame.averageUsersGrade }}</h4>
                    {% elseif videoGame.averageUsersGrade <= 59 and videoGame.averageUsersGrade >= 50 %}
                    <h4 class=\"video-game-users-grade medium hide-3\">{{ videoGame.averageUsersGrade }}</h4>
                    {% elseif videoGame.averageUsersGrade <= 49 and videoGame.averageUsersGrade >= 35 %}
                    <h4 class=\"video-game-users-grade notenough hide-3\">{{ videoGame.averageUsersGrade }}</h4>
                    {% elseif videoGame.averageUsersGrade <= 34 %}
                    <h4 class=\"video-game-users-grade bad hide-3\">{{ videoGame.averageUsersGrade }}</h4>
                    {% endif %}
                    <p class=\" hide-3\"><span>Date de sortie</span> : le {{ videoGame.releaseDate | date('d F Y') }}</p>
                    <p class=\" hide-3\"><span>Prix moyen</span> : {{ videoGame.averagePrice }} €</p>
                    <div class=\"video-game-genders-box hide-3\">
                        <ul class=\"video-game-genders-list\">
                            {% for gender in videoGame.genders %}
                                {% if gender.id == 1 %}
                                <li class=\"video-game-gender rpg\">
                                    RPG
                                </li>
                                {% elseif gender.id == 2 %}
                                <li class=\"video-game-gender avent\">
                                    Aventure
                                </li>
                                {% elseif gender.id == 3 %}
                                <li class=\"video-game-gender fant\">
                                    Fantastique
                                </li>
                                {% elseif gender.id == 4 %}
                                <li class=\"video-game-gender crea\">
                                    Création
                                </li>
                                {% elseif gender.id == 5 %}
                                <li class=\"video-game-gender ow\">
                                    Open-World
                                </li>
                                {% elseif gender.id == 6 %}
                                <li class=\"video-game-gender gestion\">
                                    Gestion
                                </li>
                                {% elseif gender.id == 7 %}
                                <li class=\"video-game-gender refl\">
                                    Réflexion
                                </li>
                                {% elseif gender.id == 8 %}
                                <li class=\"video-game-gender ecolo\">
                                    Écologie
                                </li>
                                {% elseif gender.id == 9 %}
                                <li class=\"video-game-gender sante\">
                                    Santé
                                </li>
                                {% elseif gender.id == 10 %}
                                <li class=\"video-game-gender survie\">
                                    Survie
                                </li>
                                {% elseif gender.id == 11 %}
                                <li class=\"video-game-gender tact\">
                                    Tactique
                                </li>
                                {% elseif gender.id == 12 %}
                                <li class=\"video-game-gender strat\">
                                    Stratégie
                                </li>
                                {% endif %}
                            {% endfor %}
                        </ul>
                    </div>
                    <div class=\"video-game-box-zone\">
                        <img class=\"video-game-box\" src=\"{{ vich_uploader_asset(videoGame, 'imgBox') }}\" alt=\"boîte de {{ videoGame.name }}\">
                    </div>
                </div>
            </section>
            {#
            <section class=\"video-game-likes\">
                <input type=\"checkbox\" id=\"thumb-rotate\">
                <span class=\"material-symbols-outlined thumb\">
                    thumb_up
                </span>
                <h4>{{ videoGame.likes.nblikes }}</h4>
            </section>
            #}            
            <section class=\"video-game-content hide-3\">
                <div class=\"video-game-description hide-4\">
                    <h4>Description du jeu : </h4>
                    <p>
                        {{ videoGame.description }}
                    </p>
                </div>
                <div class=\"video-game-advice hide-4\">
                    <h4>Avis et Critiques sur le jeu :</h4>
                    <p>
                        {{ videoGame.advice}}
                    </p>
                </div>
                <button id=\"return-to-list\" class=\"hide-4\">Retour à la liste</button>
            </section>
            
            <script>
                let btn = document.getElementById(\"return-to-list\");
                btn.addEventListener('click', function() {
                    window.location.href=\"{{ path('videogames_list') }}\";
                })
            </script>
        </article>
        <section class=\"comment-form\">
        {% if (is_granted(\"IS_AUTHENTICATED_FULLY\")) %}
            {% include 'comments/form-comments.html.twig' with {'user': app.user, 'vg': videoGame, 'form': form} %}
        {% else %}
            {% include 'comments/form-comments-guest.html.twig' with { 'vg': videoGame, 'guestForm': guestForm } %}
        {% endif %}
        </section>
        <section class=\"comments-list\">
            {% block comments %}
            {% for comment in comments %}
                {% include '/comments/comment-videogame-card.html.twig' with { 'comment' : comment } %}
            {% endfor %}
            {% endblock %}
        </section>
    </main>
{% endblock %}
", "videogames/videogame-card.html.twig", "C:\\Users\\robocop\\Desktop\\REVISIONS WEB\\FIRST PROJECTS\\MyMetaverseV2.0\\MyMetaverse\\templates\\videogames\\videogame-card.html.twig");
    }
}
