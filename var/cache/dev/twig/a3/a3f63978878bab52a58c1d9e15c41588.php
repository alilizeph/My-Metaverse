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
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./css/videogames/video-game-card.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" gref=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./css/users/login.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" gref=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./css/styles.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200\"/>
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
        echo "\t<main>
\t\t<article class=\"video-game-card hide\">
\t\t\t<section class=\"video-game-card-theme hide-2\">
\t\t\t\t<img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 14, $this->source); })()), "imgTheme"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), "html", null, true);
        echo "\" class=\"hide-2\">
\t\t\t</section>
\t\t\t<section class=\"video-game-card-head hide-2\">
\t\t\t\t<div class=\"video-game-pres hide-2\">
\t\t\t\t\t<h3 class=\" hide-2\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), "html", null, true);
        echo "</h3>
\t\t\t\t\t";
        // line 19
        if (((isset($context["platformName"]) || array_key_exists("platformName", $context) ? $context["platformName"] : (function () { throw new RuntimeError('Variable "platformName" does not exist.', 19, $this->source); })()) == 1)) {
            // line 20
            echo "\t\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t\t<span>Nintendo Switch</span>
\t\t\t\t\t\t</h4>
\t\t\t\t\t";
        } elseif ((        // line 23
(isset($context["platformName"]) || array_key_exists("platformName", $context) ? $context["platformName"] : (function () { throw new RuntimeError('Variable "platformName" does not exist.', 23, $this->source); })()) == 2)) {
            // line 24
            echo "\t\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t\t<span>PC Steam</span>
\t\t\t\t\t\t</h4>
\t\t\t\t\t";
        } elseif ((        // line 27
(isset($context["platformName"]) || array_key_exists("platformName", $context) ? $context["platformName"] : (function () { throw new RuntimeError('Variable "platformName" does not exist.', 27, $this->source); })()) == 3)) {
            // line 28
            echo "\t\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t\t<span>PlayStation 5</span>
\t\t\t\t\t\t</h4>
\t\t\t\t\t";
        } elseif ((        // line 31
(isset($context["platformName"]) || array_key_exists("platformName", $context) ? $context["platformName"] : (function () { throw new RuntimeError('Variable "platformName" does not exist.', 31, $this->source); })()) == 4)) {
            // line 32
            echo "\t\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t\t<span>GameBoy Advanced</span>
\t\t\t\t\t\t</h4>
\t\t\t\t\t";
        } elseif ((        // line 35
(isset($context["platformName"]) || array_key_exists("platformName", $context) ? $context["platformName"] : (function () { throw new RuntimeError('Variable "platformName" does not exist.', 35, $this->source); })()) == 5)) {
            // line 36
            echo "\t\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t\t<span>GameBoy / GameBoy Color</span>
\t\t\t\t\t\t</h4>
\t\t\t\t\t";
        } elseif ((        // line 39
(isset($context["platformName"]) || array_key_exists("platformName", $context) ? $context["platformName"] : (function () { throw new RuntimeError('Variable "platformName" does not exist.', 39, $this->source); })()) == 6)) {
            // line 40
            echo "\t\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t\t<span>PlayStation 4</span>
\t\t\t\t\t\t</h4>
\t\t\t\t\t";
        } elseif ((        // line 43
(isset($context["platformName"]) || array_key_exists("platformName", $context) ? $context["platformName"] : (function () { throw new RuntimeError('Variable "platformName" does not exist.', 43, $this->source); })()) == 7)) {
            // line 44
            echo "\t\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t\t<span>Nintendo DS</span>
\t\t\t\t\t\t</h4>
\t\t\t\t\t";
        } elseif ((        // line 47
(isset($context["platformName"]) || array_key_exists("platformName", $context) ? $context["platformName"] : (function () { throw new RuntimeError('Variable "platformName" does not exist.', 47, $this->source); })()) == 8)) {
            // line 48
            echo "\t\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t\t<span>Nintendo 3DS</span>
\t\t\t\t\t\t</h4>
\t\t\t\t\t";
        } elseif ((        // line 51
(isset($context["platformName"]) || array_key_exists("platformName", $context) ? $context["platformName"] : (function () { throw new RuntimeError('Variable "platformName" does not exist.', 51, $this->source); })()) == 9)) {
            // line 52
            echo "\t\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t\t<span>PlayStation 3</span>
\t\t\t\t\t\t</h4>
\t\t\t\t\t";
        } elseif ((        // line 55
(isset($context["platformName"]) || array_key_exists("platformName", $context) ? $context["platformName"] : (function () { throw new RuntimeError('Variable "platformName" does not exist.', 55, $this->source); })()) == 10)) {
            // line 56
            echo "\t\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t\t<span>PlayStation 2</span>
\t\t\t\t\t\t</h4>
\t\t\t\t\t";
        } elseif ((        // line 59
(isset($context["platformName"]) || array_key_exists("platformName", $context) ? $context["platformName"] : (function () { throw new RuntimeError('Variable "platformName" does not exist.', 59, $this->source); })()) == 11)) {
            // line 60
            echo "\t\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t\t<span>PlayStation</span>
\t\t\t\t\t\t</h4>
\t\t\t\t\t";
        } elseif ((        // line 63
(isset($context["platformName"]) || array_key_exists("platformName", $context) ? $context["platformName"] : (function () { throw new RuntimeError('Variable "platformName" does not exist.', 63, $this->source); })()) == 12)) {
            // line 64
            echo "\t\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t\t<span>XBox</span>
\t\t\t\t\t\t</h4>
\t\t\t\t\t";
        } elseif ((        // line 67
(isset($context["platformName"]) || array_key_exists("platformName", $context) ? $context["platformName"] : (function () { throw new RuntimeError('Variable "platformName" does not exist.', 67, $this->source); })()) == 13)) {
            // line 68
            echo "\t\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t\t<span>XBox 360</span>
\t\t\t\t\t\t</h4>
\t\t\t\t\t";
        } elseif ((        // line 71
(isset($context["platformName"]) || array_key_exists("platformName", $context) ? $context["platformName"] : (function () { throw new RuntimeError('Variable "platformName" does not exist.', 71, $this->source); })()) == 14)) {
            // line 72
            echo "\t\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t\t<span>XBox One</span>
\t\t\t\t\t\t</h4>
\t\t\t\t\t";
        } elseif ((        // line 75
(isset($context["platformName"]) || array_key_exists("platformName", $context) ? $context["platformName"] : (function () { throw new RuntimeError('Variable "platformName" does not exist.', 75, $this->source); })()) == 15)) {
            // line 76
            echo "\t\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t\t<span>XBox Series</span>
\t\t\t\t\t\t</h4>
\t\t\t\t\t";
        }
        // line 80
        echo "\t\t\t\t\t<p class=\"perso-grade hide-2\">Note personnelle :</p>
\t\t\t\t\t";
        // line 81
        if ((twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 81, $this->source); })()), "grade", [], "any", false, false, false, 81) >= 75)) {
            // line 82
            echo "\t\t\t\t\t\t<h4 class=\"video-game-grade verygood hide-3\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 82, $this->source); })()), "grade", [], "any", false, false, false, 82), "html", null, true);
            echo "</h4>
\t\t\t\t\t";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 83
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 83, $this->source); })()), "grade", [], "any", false, false, false, 83) <= 74) && (twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 83, $this->source); })()), "grade", [], "any", false, false, false, 83) >= 60))) {
            // line 84
            echo "\t\t\t\t\t\t<h4 class=\"video-game-grade good hide-3\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 84, $this->source); })()), "grade", [], "any", false, false, false, 84), "html", null, true);
            echo "</h4>
\t\t\t\t\t";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 85
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 85, $this->source); })()), "grade", [], "any", false, false, false, 85) <= 59) && (twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 85, $this->source); })()), "grade", [], "any", false, false, false, 85) >= 50))) {
            // line 86
            echo "\t\t\t\t\t\t<h4 class=\"video-game-grade medium hide-3\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 86, $this->source); })()), "grade", [], "any", false, false, false, 86), "html", null, true);
            echo "</h4>
\t\t\t\t\t";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 87
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 87, $this->source); })()), "grade", [], "any", false, false, false, 87) <= 49) && (twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 87, $this->source); })()), "grade", [], "any", false, false, false, 87) >= 35))) {
            // line 88
            echo "\t\t\t\t\t\t<h4 class=\"video-game-grade notenough hide-3\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 88, $this->source); })()), "grade", [], "any", false, false, false, 88), "html", null, true);
            echo "</h4>
\t\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 89
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 89, $this->source); })()), "grade", [], "any", false, false, false, 89) <= 34)) {
            // line 90
            echo "\t\t\t\t\t\t<h4 class=\"video-game-grade bad hide-3\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 90, $this->source); })()), "grade", [], "any", false, false, false, 90), "html", null, true);
            echo "</h4>
\t\t\t\t\t";
        }
        // line 92
        echo "\t\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 92, $this->source); })()), "averageUsersGrade", [], "any", false, false, false, 92) != 0)) {
            // line 93
            echo "\t\t\t\t\t\t<p class=\"users-grade hide-2\">Note utilisateur :</p>
\t\t\t\t\t\t<h4 class=\"video-game-users-grade hide-3\">";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 94, $this->source); })()), "averageUsersGrade", [], "any", false, false, false, 94), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t";
            // line 95
            if ((twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 95, $this->source); })()), "averageUsersGrade", [], "any", false, false, false, 95) >= 75)) {
                // line 96
                echo "\t\t\t\t\t\t\t<h4 class=\"video-game-users-grade verygood hide-3\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 96, $this->source); })()), "averageUsersGrade", [], "any", false, false, false, 96), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t";
            } elseif (((twig_get_attribute($this->env, $this->source,             // line 97
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 97, $this->source); })()), "averageUsersGrade", [], "any", false, false, false, 97) <= 74) && (twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 97, $this->source); })()), "averageUsersGrade", [], "any", false, false, false, 97) >= 60))) {
                // line 98
                echo "\t\t\t\t\t\t\t<h4 class=\"video-game-users-grade good hide-3\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 98, $this->source); })()), "averageUsersGrade", [], "any", false, false, false, 98), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t";
            } elseif (((twig_get_attribute($this->env, $this->source,             // line 99
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 99, $this->source); })()), "averageUsersGrade", [], "any", false, false, false, 99) <= 59) && (twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 99, $this->source); })()), "averageUsersGrade", [], "any", false, false, false, 99) >= 50))) {
                // line 100
                echo "\t\t\t\t\t\t\t<h4 class=\"video-game-users-grade medium hide-3\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 100, $this->source); })()), "averageUsersGrade", [], "any", false, false, false, 100), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t";
            } elseif (((twig_get_attribute($this->env, $this->source,             // line 101
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 101, $this->source); })()), "averageUsersGrade", [], "any", false, false, false, 101) <= 49) && (twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 101, $this->source); })()), "averageUsersGrade", [], "any", false, false, false, 101) >= 35))) {
                // line 102
                echo "\t\t\t\t\t\t\t<h4 class=\"video-game-users-grade notenough hide-3\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 102, $this->source); })()), "averageUsersGrade", [], "any", false, false, false, 102), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 103
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 103, $this->source); })()), "averageUsersGrade", [], "any", false, false, false, 103) <= 34)) {
                // line 104
                echo "\t\t\t\t\t\t\t<h4 class=\"video-game-users-grade bad hide-3\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 104, $this->source); })()), "averageUsersGrade", [], "any", false, false, false, 104), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t";
            }
            // line 106
            echo "\t\t\t\t\t";
        }
        // line 107
        echo "\t\t\t\t\t<p class=\" hide-3\">
\t\t\t\t\t\t<span>Date de sortie</span>
\t\t\t\t\t\t: le
\t\t\t\t\t\t";
        // line 110
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 110, $this->source); })()), "releaseDate", [], "any", false, false, false, 110), "d F Y"), "html", null, true);
        echo "</p>
\t\t\t\t\t<p class=\" hide-3\">
\t\t\t\t\t\t<span>Prix moyen</span>
\t\t\t\t\t\t:
\t\t\t\t\t\t";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 114, $this->source); })()), "averagePrice", [], "any", false, false, false, 114), "html", null, true);
        echo "
\t\t\t\t\t\t€</p>
\t\t\t\t\t<div class=\"video-game-genders-box hide-3\">
\t\t\t\t\t\t<ul class=\"video-game-genders-list\">
\t\t\t\t\t\t\t";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 118, $this->source); })()), "genders", [], "any", false, false, false, 118));
        foreach ($context['_seq'] as $context["_key"] => $context["gender"]) {
            // line 119
            echo "\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["gender"], "id", [], "any", false, false, false, 119) == 1)) {
                // line 120
                echo "\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender rpg\">
\t\t\t\t\t\t\t\t\t\tRPG
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 123
$context["gender"], "id", [], "any", false, false, false, 123) == 2)) {
                // line 124
                echo "\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender avent\">
\t\t\t\t\t\t\t\t\t\tAventure
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 127
$context["gender"], "id", [], "any", false, false, false, 127) == 3)) {
                // line 128
                echo "\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender fant\">
\t\t\t\t\t\t\t\t\t\tFantastique
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 131
$context["gender"], "id", [], "any", false, false, false, 131) == 4)) {
                // line 132
                echo "\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender crea\">
\t\t\t\t\t\t\t\t\t\tCréation
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 135
$context["gender"], "id", [], "any", false, false, false, 135) == 5)) {
                // line 136
                echo "\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender ow\">
\t\t\t\t\t\t\t\t\t\tOpen-World
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 139
$context["gender"], "id", [], "any", false, false, false, 139) == 6)) {
                // line 140
                echo "\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender gestion\">
\t\t\t\t\t\t\t\t\t\tGestion
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 143
$context["gender"], "id", [], "any", false, false, false, 143) == 7)) {
                // line 144
                echo "\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender refl\">
\t\t\t\t\t\t\t\t\t\tRéflexion
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 147
$context["gender"], "id", [], "any", false, false, false, 147) == 8)) {
                // line 148
                echo "\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender ecolo\">
\t\t\t\t\t\t\t\t\t\tÉcologie
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 151
$context["gender"], "id", [], "any", false, false, false, 151) == 9)) {
                // line 152
                echo "\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender sante\">
\t\t\t\t\t\t\t\t\t\tSanté
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 155
$context["gender"], "id", [], "any", false, false, false, 155) == 10)) {
                // line 156
                echo "\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender survie\">
\t\t\t\t\t\t\t\t\t\tSurvie
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 159
$context["gender"], "id", [], "any", false, false, false, 159) == 11)) {
                // line 160
                echo "\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender tact\">
\t\t\t\t\t\t\t\t\t\tTactique
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 163
$context["gender"], "id", [], "any", false, false, false, 163) == 12)) {
                // line 164
                echo "\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender strat\">
\t\t\t\t\t\t\t\t\t\tStratégie
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 167
$context["gender"], "id", [], "any", false, false, false, 167) == 13)) {
                // line 168
                echo "\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender chill\">
\t\t\t\t\t\t\t\t\t\tChill
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 171
$context["gender"], "id", [], "any", false, false, false, 171) == 14)) {
                // line 172
                echo "\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender postapo\">
\t\t\t\t\t\t\t\t\t\tPost-Apocalyptique
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            // line 176
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gender'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"video-game-box-zone\">
\t\t\t\t\t\t<img class=\"video-game-box\" src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 180, $this->source); })()), "imgBox"), "html", null, true);
        echo "\" alt=\"boîte de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 180, $this->source); })()), "name", [], "any", false, false, false, 180), "html", null, true);
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t";
        // line 193
        echo "\t\t\t<section class=\"video-game-content hide-3\">
\t\t\t\t<div class=\"video-game-description hide-4\">
\t\t\t\t\t<h4>Description du jeu :</h4>
\t\t\t\t\t<p>
\t\t\t\t\t\t";
        // line 197
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 197, $this->source); })()), "description", [], "any", false, false, false, 197), "html", null, true);
        echo "
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"video-game-advice hide-4\">
\t\t\t\t\t<h4>Avis et Critiques sur le jeu :</h4>
\t\t\t\t\t<p>
\t\t\t\t\t\t";
        // line 203
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 203, $this->source); })()), "advice", [], "any", false, false, false, 203), "html", null, true);
        echo "
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<button id=\"return-to-list\" class=\"hide-4\">Retour à la liste</button>
\t\t\t</section>

\t\t\t<script>
\t\t\t\tlet btn = document.getElementById(\"return-to-list\");
btn.addEventListener('click', function () {
window.location.href =\"";
        // line 212
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videogames_list");
        echo "\";
});
\t\t\t</script>
\t\t</article>
\t\t<section class=\"comment-form\">
\t\t\t";
        // line 217
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 218
            echo "\t\t\t\t";
            $this->loadTemplate("comments/form-comments.html.twig", "videogames/videogame-card.html.twig", 218)->display(twig_array_merge($context, ["user" => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 218, $this->source); })()), "user", [], "any", false, false, false, 218), "vg" => (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 218, $this->source); })()), "form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 218, $this->source); })())]));
            // line 219
            echo "\t\t\t";
        } else {
            // line 220
            echo "\t\t\t\t";
            $this->loadTemplate("comments/form-comments-guest.html.twig", "videogames/videogame-card.html.twig", 220)->display(twig_array_merge($context, ["vg" => (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 220, $this->source); })()), "guestForm" => (isset($context["guestForm"]) || array_key_exists("guestForm", $context) ? $context["guestForm"] : (function () { throw new RuntimeError('Variable "guestForm" does not exist.', 220, $this->source); })())]));
            // line 221
            echo "\t\t\t";
        }
        // line 222
        echo "\t\t</section>
\t\t<section class=\"comments-list\">
\t\t\t";
        // line 224
        $this->displayBlock('comments', $context, $blocks);
        // line 229
        echo "\t\t</section>
\t</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 224
    public function block_comments($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "comments"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "comments"));

        // line 225
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 225, $this->source); })()));
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
            // line 226
            echo "\t\t\t\t\t";
            $this->loadTemplate("/comments/comment-videogame-card.html.twig", "videogames/videogame-card.html.twig", 226)->display(twig_array_merge($context, ["comment" => $context["comment"]]));
            // line 227
            echo "\t\t\t\t";
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
        // line 228
        echo "\t\t\t";
        
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
        return array (  569 => 228,  555 => 227,  552 => 226,  534 => 225,  524 => 224,  512 => 229,  510 => 224,  506 => 222,  503 => 221,  500 => 220,  497 => 219,  494 => 218,  492 => 217,  484 => 212,  472 => 203,  463 => 197,  457 => 193,  448 => 180,  443 => 177,  437 => 176,  431 => 172,  429 => 171,  424 => 168,  422 => 167,  417 => 164,  415 => 163,  410 => 160,  408 => 159,  403 => 156,  401 => 155,  396 => 152,  394 => 151,  389 => 148,  387 => 147,  382 => 144,  380 => 143,  375 => 140,  373 => 139,  368 => 136,  366 => 135,  361 => 132,  359 => 131,  354 => 128,  352 => 127,  347 => 124,  345 => 123,  340 => 120,  337 => 119,  333 => 118,  326 => 114,  319 => 110,  314 => 107,  311 => 106,  305 => 104,  303 => 103,  298 => 102,  296 => 101,  291 => 100,  289 => 99,  284 => 98,  282 => 97,  277 => 96,  275 => 95,  271 => 94,  268 => 93,  265 => 92,  259 => 90,  257 => 89,  252 => 88,  250 => 87,  245 => 86,  243 => 85,  238 => 84,  236 => 83,  231 => 82,  229 => 81,  226 => 80,  220 => 76,  218 => 75,  213 => 72,  211 => 71,  206 => 68,  204 => 67,  199 => 64,  197 => 63,  192 => 60,  190 => 59,  185 => 56,  183 => 55,  178 => 52,  176 => 51,  171 => 48,  169 => 47,  164 => 44,  162 => 43,  157 => 40,  155 => 39,  150 => 36,  148 => 35,  143 => 32,  141 => 31,  136 => 28,  134 => 27,  129 => 24,  127 => 23,  122 => 20,  120 => 19,  116 => 18,  107 => 14,  102 => 11,  92 => 10,  79 => 6,  75 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block head %}
\t<link rel=\"stylesheet\" href=\"{{ asset('./css/videogames/video-game-card.css') }}\">
\t<link rel=\"stylesheet\" gref=\"{{ asset('./css/users/login.css') }}\">
\t<link rel=\"stylesheet\" gref=\"{{ asset('./css/styles.css') }}\">
\t<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200\"/>
{% endblock %}

{% block body %}
\t<main>
\t\t<article class=\"video-game-card hide\">
\t\t\t<section class=\"video-game-card-theme hide-2\">
\t\t\t\t<img src=\"{{ vich_uploader_asset(videoGame, 'imgTheme') }}\" alt=\"{{ videoGame.name }}\" class=\"hide-2\">
\t\t\t</section>
\t\t\t<section class=\"video-game-card-head hide-2\">
\t\t\t\t<div class=\"video-game-pres hide-2\">
\t\t\t\t\t<h3 class=\" hide-2\">{{ videoGame.name }}</h3>
\t\t\t\t\t{% if platformName == 1 %}
\t\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t\t<span>Nintendo Switch</span>
\t\t\t\t\t\t</h4>
\t\t\t\t\t{% elseif platformName == 2 %}
\t\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t\t<span>PC Steam</span>
\t\t\t\t\t\t</h4>
\t\t\t\t\t{% elseif platformName == 3 %}
\t\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t\t<span>PlayStation 5</span>
\t\t\t\t\t\t</h4>
\t\t\t\t\t{% elseif platformName == 4 %}
\t\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t\t<span>GameBoy Advanced</span>
\t\t\t\t\t\t</h4>
\t\t\t\t\t{% elseif platformName == 5 %}
\t\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t\t<span>GameBoy / GameBoy Color</span>
\t\t\t\t\t\t</h4>
\t\t\t\t\t{% elseif platformName == 6 %}
\t\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t\t<span>PlayStation 4</span>
\t\t\t\t\t\t</h4>
\t\t\t\t\t{% elseif platformName == 7 %}
\t\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t\t<span>Nintendo DS</span>
\t\t\t\t\t\t</h4>
\t\t\t\t\t{% elseif platformName == 8 %}
\t\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t\t<span>Nintendo 3DS</span>
\t\t\t\t\t\t</h4>
\t\t\t\t\t{% elseif platformName == 9 %}
\t\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t\t<span>PlayStation 3</span>
\t\t\t\t\t\t</h4>
\t\t\t\t\t{% elseif platformName == 10 %}
\t\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t\t<span>PlayStation 2</span>
\t\t\t\t\t\t</h4>
\t\t\t\t\t{% elseif platformName == 11 %}
\t\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t\t<span>PlayStation</span>
\t\t\t\t\t\t</h4>
\t\t\t\t\t{% elseif platformName == 12 %}
\t\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t\t<span>XBox</span>
\t\t\t\t\t\t</h4>
\t\t\t\t\t{% elseif platformName == 13 %}
\t\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t\t<span>XBox 360</span>
\t\t\t\t\t\t</h4>
\t\t\t\t\t{% elseif platformName == 14 %}
\t\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t\t<span>XBox One</span>
\t\t\t\t\t\t</h4>
\t\t\t\t\t{% elseif platformName == 15 %}
\t\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t\t<span>XBox Series</span>
\t\t\t\t\t\t</h4>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<p class=\"perso-grade hide-2\">Note personnelle :</p>
\t\t\t\t\t{% if videoGame.grade >= 75 %}
\t\t\t\t\t\t<h4 class=\"video-game-grade verygood hide-3\">{{ videoGame.grade }}</h4>
\t\t\t\t\t{% elseif videoGame.grade <= 74 and videoGame.grade >= 60 %}
\t\t\t\t\t\t<h4 class=\"video-game-grade good hide-3\">{{ videoGame.grade }}</h4>
\t\t\t\t\t{% elseif videoGame.grade <= 59 and videoGame.grade >= 50 %}
\t\t\t\t\t\t<h4 class=\"video-game-grade medium hide-3\">{{ videoGame.grade }}</h4>
\t\t\t\t\t{% elseif videoGame.grade <= 49 and videoGame.grade >= 35 %}
\t\t\t\t\t\t<h4 class=\"video-game-grade notenough hide-3\">{{ videoGame.grade }}</h4>
\t\t\t\t\t{% elseif videoGame.grade <= 34 %}
\t\t\t\t\t\t<h4 class=\"video-game-grade bad hide-3\">{{ videoGame.grade }}</h4>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if videoGame.averageUsersGrade != 0 %}
\t\t\t\t\t\t<p class=\"users-grade hide-2\">Note utilisateur :</p>
\t\t\t\t\t\t<h4 class=\"video-game-users-grade hide-3\">{{ videoGame.averageUsersGrade }}</h4>
\t\t\t\t\t\t{% if videoGame.averageUsersGrade >= 75 %}
\t\t\t\t\t\t\t<h4 class=\"video-game-users-grade verygood hide-3\">{{ videoGame.averageUsersGrade }}</h4>
\t\t\t\t\t\t{% elseif videoGame.averageUsersGrade <= 74 and videoGame.averageUsersGrade >= 60 %}
\t\t\t\t\t\t\t<h4 class=\"video-game-users-grade good hide-3\">{{ videoGame.averageUsersGrade }}</h4>
\t\t\t\t\t\t{% elseif videoGame.averageUsersGrade <= 59 and videoGame.averageUsersGrade >= 50 %}
\t\t\t\t\t\t\t<h4 class=\"video-game-users-grade medium hide-3\">{{ videoGame.averageUsersGrade }}</h4>
\t\t\t\t\t\t{% elseif videoGame.averageUsersGrade <= 49 and videoGame.averageUsersGrade >= 35 %}
\t\t\t\t\t\t\t<h4 class=\"video-game-users-grade notenough hide-3\">{{ videoGame.averageUsersGrade }}</h4>
\t\t\t\t\t\t{% elseif videoGame.averageUsersGrade <= 34 %}
\t\t\t\t\t\t\t<h4 class=\"video-game-users-grade bad hide-3\">{{ videoGame.averageUsersGrade }}</h4>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endif %}
\t\t\t\t\t<p class=\" hide-3\">
\t\t\t\t\t\t<span>Date de sortie</span>
\t\t\t\t\t\t: le
\t\t\t\t\t\t{{ videoGame.releaseDate | date('d F Y') }}</p>
\t\t\t\t\t<p class=\" hide-3\">
\t\t\t\t\t\t<span>Prix moyen</span>
\t\t\t\t\t\t:
\t\t\t\t\t\t{{ videoGame.averagePrice }}
\t\t\t\t\t\t€</p>
\t\t\t\t\t<div class=\"video-game-genders-box hide-3\">
\t\t\t\t\t\t<ul class=\"video-game-genders-list\">
\t\t\t\t\t\t\t{% for gender in videoGame.genders %}
\t\t\t\t\t\t\t\t{% if gender.id == 1 %}
\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender rpg\">
\t\t\t\t\t\t\t\t\t\tRPG
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% elseif gender.id == 2 %}
\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender avent\">
\t\t\t\t\t\t\t\t\t\tAventure
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% elseif gender.id == 3 %}
\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender fant\">
\t\t\t\t\t\t\t\t\t\tFantastique
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% elseif gender.id == 4 %}
\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender crea\">
\t\t\t\t\t\t\t\t\t\tCréation
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% elseif gender.id == 5 %}
\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender ow\">
\t\t\t\t\t\t\t\t\t\tOpen-World
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% elseif gender.id == 6 %}
\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender gestion\">
\t\t\t\t\t\t\t\t\t\tGestion
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% elseif gender.id == 7 %}
\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender refl\">
\t\t\t\t\t\t\t\t\t\tRéflexion
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% elseif gender.id == 8 %}
\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender ecolo\">
\t\t\t\t\t\t\t\t\t\tÉcologie
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% elseif gender.id == 9 %}
\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender sante\">
\t\t\t\t\t\t\t\t\t\tSanté
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% elseif gender.id == 10 %}
\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender survie\">
\t\t\t\t\t\t\t\t\t\tSurvie
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% elseif gender.id == 11 %}
\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender tact\">
\t\t\t\t\t\t\t\t\t\tTactique
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% elseif gender.id == 12 %}
\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender strat\">
\t\t\t\t\t\t\t\t\t\tStratégie
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% elseif gender.id == 13 %}
\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender chill\">
\t\t\t\t\t\t\t\t\t\tChill
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% elseif gender.id == 14 %}
\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender postapo\">
\t\t\t\t\t\t\t\t\t\tPost-Apocalyptique
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"video-game-box-zone\">
\t\t\t\t\t\t<img class=\"video-game-box\" src=\"{{ vich_uploader_asset(videoGame, 'imgBox') }}\" alt=\"boîte de {{ videoGame.name }}\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t{#
\t\t\t\t\t\t\t\t\t\t            <section class=\"video-game-likes\">
\t\t\t\t\t\t\t\t\t\t                <input type=\"checkbox\" id=\"thumb-rotate\">
\t\t\t\t\t\t\t\t\t\t                <span class=\"material-symbols-outlined thumb\">
\t\t\t\t\t\t\t\t\t\t                    thumb_up
\t\t\t\t\t\t\t\t\t\t                </span>
\t\t\t\t\t\t\t\t\t\t                <h4>{{ videoGame.likes.nblikes }}</h4>
\t\t\t\t\t\t\t\t\t\t            </section>
\t\t\t\t\t\t\t\t\t\t            #}
\t\t\t<section class=\"video-game-content hide-3\">
\t\t\t\t<div class=\"video-game-description hide-4\">
\t\t\t\t\t<h4>Description du jeu :</h4>
\t\t\t\t\t<p>
\t\t\t\t\t\t{{ videoGame.description }}
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"video-game-advice hide-4\">
\t\t\t\t\t<h4>Avis et Critiques sur le jeu :</h4>
\t\t\t\t\t<p>
\t\t\t\t\t\t{{ videoGame.advice}}
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<button id=\"return-to-list\" class=\"hide-4\">Retour à la liste</button>
\t\t\t</section>

\t\t\t<script>
\t\t\t\tlet btn = document.getElementById(\"return-to-list\");
btn.addEventListener('click', function () {
window.location.href =\"{{ path('videogames_list') }}\";
});
\t\t\t</script>
\t\t</article>
\t\t<section class=\"comment-form\">
\t\t\t{% if (is_granted(\"IS_AUTHENTICATED_FULLY\")) %}
\t\t\t\t{% include 'comments/form-comments.html.twig' with {'user': app.user, 'vg': videoGame, 'form': form} %}
\t\t\t{% else %}
\t\t\t\t{% include 'comments/form-comments-guest.html.twig' with { 'vg': videoGame, 'guestForm': guestForm } %}
\t\t\t{% endif %}
\t\t</section>
\t\t<section class=\"comments-list\">
\t\t\t{% block comments %}
\t\t\t\t{% for comment in comments %}
\t\t\t\t\t{% include '/comments/comment-videogame-card.html.twig' with { 'comment' : comment } %}
\t\t\t\t{% endfor %}
\t\t\t{% endblock %}
\t\t</section>
\t</main>
{% endblock %}
", "videogames/videogame-card.html.twig", "C:\\Users\\robocop\\Desktop\\REVISIONS WEB\\FIRST PROJECTS\\MyMetaverseV2.0\\MyMetaverse\\templates\\videogames\\videogame-card.html.twig");
    }
}
