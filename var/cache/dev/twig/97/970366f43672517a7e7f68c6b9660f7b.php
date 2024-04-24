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

/* ./videogames/videogame-list-card.html.twig */
class __TwigTemplate_2c06d535dd99382d2306311501ec47bf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'vglist' => [$this, 'block_vglist'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./videogames/videogame-list-card.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "./videogames/videogame-list-card.html.twig"));

        // line 1
        $this->displayBlock('vglist', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_vglist($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vglist"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vglist"));

        // line 2
        echo "\t<article class=\"video-game-card hide\">
\t\t<section class=\"video-game-card-theme hide-2\">
\t\t\t<img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 4, $this->source); })()), "imgTheme"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), "html", null, true);
        echo "\">
\t\t</section>
\t\t<section class=\"video-game-card-head hide-2\">
\t\t\t<div class=\"video-game-pres hide-2\">
\t\t\t\t<h3 class=\" hide-2\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "</h3>

\t\t\t\t";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 10, $this->source); })()), "platform", [], "any", false, false, false, 10), "platformName", [], "any", false, false, false, 10) == 1)) {
            // line 11
            echo "\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t<span>Nintendo Switch</span>
\t\t\t\t\t</h4>
\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 14
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 14, $this->source); })()), "platform", [], "any", false, false, false, 14), "platformName", [], "any", false, false, false, 14) == 2)) {
            // line 15
            echo "\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t<span>PC Steam</span>
\t\t\t\t\t</h4>
\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 18
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 18, $this->source); })()), "platform", [], "any", false, false, false, 18), "platformName", [], "any", false, false, false, 18) == 3)) {
            // line 19
            echo "\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t<span>PlayStation 5</span>
\t\t\t\t\t</h4>
\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 22
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 22, $this->source); })()), "platform", [], "any", false, false, false, 22), "platformName", [], "any", false, false, false, 22) == 4)) {
            // line 23
            echo "\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t<span>GameBoy Advanced</span>
\t\t\t\t\t</h4>
\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 26
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 26, $this->source); })()), "platform", [], "any", false, false, false, 26), "platformName", [], "any", false, false, false, 26) == 5)) {
            // line 27
            echo "\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t<span>GameBoy / GameBoy Color</span>
\t\t\t\t\t</h4>
\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 30
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 30, $this->source); })()), "platform", [], "any", false, false, false, 30), "platformName", [], "any", false, false, false, 30) == 6)) {
            // line 31
            echo "\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t<span>PlayStation 4</span>
\t\t\t\t\t</h4>
\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 34
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 34, $this->source); })()), "platform", [], "any", false, false, false, 34), "platformName", [], "any", false, false, false, 34) == 7)) {
            // line 35
            echo "\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t<span>Nintendo DS</span>
\t\t\t\t\t</h4>
\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 38
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 38, $this->source); })()), "platform", [], "any", false, false, false, 38), "platformName", [], "any", false, false, false, 38) == 8)) {
            // line 39
            echo "\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t<span>Nintendo 3DS</span>
\t\t\t\t\t</h4>
\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 42
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 42, $this->source); })()), "platform", [], "any", false, false, false, 42), "platformName", [], "any", false, false, false, 42) == 9)) {
            // line 43
            echo "\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t<span>PlayStation 3</span>
\t\t\t\t\t</h4>
\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 46
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 46, $this->source); })()), "platform", [], "any", false, false, false, 46), "platformName", [], "any", false, false, false, 46) == 10)) {
            // line 47
            echo "\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t<span>PlayStation 2</span>
\t\t\t\t\t</h4>
\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 50
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 50, $this->source); })()), "platform", [], "any", false, false, false, 50), "platformName", [], "any", false, false, false, 50) == 11)) {
            // line 51
            echo "\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t<span>PlayStation</span>
\t\t\t\t\t</h4>
\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 54
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 54, $this->source); })()), "platform", [], "any", false, false, false, 54), "platformName", [], "any", false, false, false, 54) == 12)) {
            // line 55
            echo "\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t<span>XBox</span>
\t\t\t\t\t</h4>
\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 58
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 58, $this->source); })()), "platform", [], "any", false, false, false, 58), "platformName", [], "any", false, false, false, 58) == 13)) {
            // line 59
            echo "\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t<span>XBox 360</span>
\t\t\t\t\t</h4>
\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 62
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 62, $this->source); })()), "platform", [], "any", false, false, false, 62), "platformName", [], "any", false, false, false, 62) == 14)) {
            // line 63
            echo "\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t<span>XBox One</span>
\t\t\t\t\t</h4>
\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 66
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 66, $this->source); })()), "platform", [], "any", false, false, false, 66), "platformName", [], "any", false, false, false, 66) == 15)) {
            // line 67
            echo "\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t<span>XBox Series</span>
\t\t\t\t\t</h4>
\t\t\t\t";
        }
        // line 71
        echo "\t\t\t\t<p class=\"perso-grade hide-2\">Note personnelle :</p>
\t\t\t\t";
        // line 72
        if ((twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 72, $this->source); })()), "grade", [], "any", false, false, false, 72) >= 75)) {
            // line 73
            echo "\t\t\t\t\t<h4 class=\"video-game-grade verygood hide-3\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 73, $this->source); })()), "grade", [], "any", false, false, false, 73), "html", null, true);
            echo "</h4>
\t\t\t\t";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 74
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 74, $this->source); })()), "grade", [], "any", false, false, false, 74) <= 74) && (twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 74, $this->source); })()), "grade", [], "any", false, false, false, 74) >= 60))) {
            // line 75
            echo "\t\t\t\t\t<h4 class=\"video-game-grade good hide-3\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 75, $this->source); })()), "grade", [], "any", false, false, false, 75), "html", null, true);
            echo "</h4>
\t\t\t\t";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 76
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 76, $this->source); })()), "grade", [], "any", false, false, false, 76) <= 59) && (twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 76, $this->source); })()), "grade", [], "any", false, false, false, 76) >= 50))) {
            // line 77
            echo "\t\t\t\t\t<h4 class=\"video-game-grade medium hide-3\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 77, $this->source); })()), "grade", [], "any", false, false, false, 77), "html", null, true);
            echo "</h4>
\t\t\t\t";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 78
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 78, $this->source); })()), "grade", [], "any", false, false, false, 78) <= 49) && (twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 78, $this->source); })()), "grade", [], "any", false, false, false, 78) >= 35))) {
            // line 79
            echo "\t\t\t\t\t<h4 class=\"video-game-grade notenough hide-3\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 79, $this->source); })()), "grade", [], "any", false, false, false, 79), "html", null, true);
            echo "</h4>
\t\t\t\t";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 80
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 80, $this->source); })()), "grade", [], "any", false, false, false, 80) <= 34)) {
            // line 81
            echo "\t\t\t\t\t<h4 class=\"video-game-grade bad hide-3\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 81, $this->source); })()), "grade", [], "any", false, false, false, 81), "html", null, true);
            echo "</h4>
\t\t\t\t";
        }
        // line 83
        echo "\t\t\t\t<p class=\"hide-3\">
\t\t\t\t\t<span>Date de sortie</span>
\t\t\t\t\t: le
\t\t\t\t\t";
        // line 86
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 86, $this->source); })()), "releaseDate", [], "any", false, false, false, 86), "d F Y"), "html", null, true);
        echo "</p>
\t\t\t\t<p class=\" hide-3\">
\t\t\t\t\t<span>Prix moyen</span>
\t\t\t\t\t:
\t\t\t\t\t";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 90, $this->source); })()), "averagePrice", [], "any", false, false, false, 90), "html", null, true);
        echo "
\t\t\t\t\t€</p>
\t\t\t\t<div class=\"video-game-genders-box hide-3\">
\t\t\t\t\t<ul class=\"video-game-genders-list\">
\t\t\t\t\t\t";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 94, $this->source); })()), "genders", [], "any", false, false, false, 94));
        foreach ($context['_seq'] as $context["_key"] => $context["gender"]) {
            // line 95
            echo "\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["gender"], "id", [], "any", false, false, false, 95) == 1)) {
                // line 96
                echo "\t\t\t\t\t\t\t\t<li class=\"video-game-gender rpg\">
\t\t\t\t\t\t\t\t\tRPG
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 99
$context["gender"], "id", [], "any", false, false, false, 99) == 2)) {
                // line 100
                echo "\t\t\t\t\t\t\t\t<li class=\"video-game-gender avent\">
\t\t\t\t\t\t\t\t\tAventure
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 103
$context["gender"], "id", [], "any", false, false, false, 103) == 3)) {
                // line 104
                echo "\t\t\t\t\t\t\t\t<li class=\"video-game-gender fant\">
\t\t\t\t\t\t\t\t\tFantastique
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 107
$context["gender"], "id", [], "any", false, false, false, 107) == 4)) {
                // line 108
                echo "\t\t\t\t\t\t\t\t<li class=\"video-game-gender crea\">
\t\t\t\t\t\t\t\t\tCréation
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 111
$context["gender"], "id", [], "any", false, false, false, 111) == 5)) {
                // line 112
                echo "\t\t\t\t\t\t\t\t<li class=\"video-game-gender ow\">
\t\t\t\t\t\t\t\t\tOpen-World
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 115
$context["gender"], "id", [], "any", false, false, false, 115) == 6)) {
                // line 116
                echo "\t\t\t\t\t\t\t\t<li class=\"video-game-gender gestion\">
\t\t\t\t\t\t\t\t\tGestion
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 119
$context["gender"], "id", [], "any", false, false, false, 119) == 7)) {
                // line 120
                echo "\t\t\t\t\t\t\t\t<li class=\"video-game-gender refl\">
\t\t\t\t\t\t\t\t\tRéflexion
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 123
$context["gender"], "id", [], "any", false, false, false, 123) == 8)) {
                // line 124
                echo "\t\t\t\t\t\t\t\t<li class=\"video-game-gender ecolo\">
\t\t\t\t\t\t\t\t\tÉcologie
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 127
$context["gender"], "id", [], "any", false, false, false, 127) == 9)) {
                // line 128
                echo "\t\t\t\t\t\t\t\t<li class=\"video-game-gender sante\">
\t\t\t\t\t\t\t\t\tSanté
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 131
$context["gender"], "id", [], "any", false, false, false, 131) == 10)) {
                // line 132
                echo "\t\t\t\t\t\t\t\t<li class=\"video-game-gender survie\">
\t\t\t\t\t\t\t\t\tSurvie
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 135
$context["gender"], "id", [], "any", false, false, false, 135) == 11)) {
                // line 136
                echo "\t\t\t\t\t\t\t\t<li class=\"video-game-gender tact\">
\t\t\t\t\t\t\t\t\tTactique
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 139
$context["gender"], "id", [], "any", false, false, false, 139) == 12)) {
                // line 140
                echo "\t\t\t\t\t\t\t\t<li class=\"video-game-gender strat\">
\t\t\t\t\t\t\t\t\tStratégie
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 143
$context["gender"], "id", [], "any", false, false, false, 143) == 13)) {
                // line 144
                echo "\t\t\t\t\t\t\t\t<li class=\"video-game-gender chill\">
\t\t\t\t\t\t\t\t\tChill
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 147
$context["gender"], "id", [], "any", false, false, false, 147) == 14)) {
                // line 148
                echo "\t\t\t\t\t\t\t\t<li class=\"video-game-gender postapo\">
\t\t\t\t\t\t\t\t\tPost-Apocalyptique
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            }
            // line 152
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gender'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<section class=\"video-game-content hide-4\">
\t\t\t<a class=\"go-to-vg\" href=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videogame_card", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 158, $this->source); })()), "id", [], "any", false, false, false, 158)]), "html", null, true);
        echo "\">Accéder à l'Avis</a>
\t\t</section>
\t</article>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "./videogames/videogame-list-card.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  362 => 158,  355 => 153,  349 => 152,  343 => 148,  341 => 147,  336 => 144,  334 => 143,  329 => 140,  327 => 139,  322 => 136,  320 => 135,  315 => 132,  313 => 131,  308 => 128,  306 => 127,  301 => 124,  299 => 123,  294 => 120,  292 => 119,  287 => 116,  285 => 115,  280 => 112,  278 => 111,  273 => 108,  271 => 107,  266 => 104,  264 => 103,  259 => 100,  257 => 99,  252 => 96,  249 => 95,  245 => 94,  238 => 90,  231 => 86,  226 => 83,  220 => 81,  218 => 80,  213 => 79,  211 => 78,  206 => 77,  204 => 76,  199 => 75,  197 => 74,  192 => 73,  190 => 72,  187 => 71,  181 => 67,  179 => 66,  174 => 63,  172 => 62,  167 => 59,  165 => 58,  160 => 55,  158 => 54,  153 => 51,  151 => 50,  146 => 47,  144 => 46,  139 => 43,  137 => 42,  132 => 39,  130 => 38,  125 => 35,  123 => 34,  118 => 31,  116 => 30,  111 => 27,  109 => 26,  104 => 23,  102 => 22,  97 => 19,  95 => 18,  90 => 15,  88 => 14,  83 => 11,  81 => 10,  76 => 8,  67 => 4,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block vglist %}
\t<article class=\"video-game-card hide\">
\t\t<section class=\"video-game-card-theme hide-2\">
\t\t\t<img src=\"{{ vich_uploader_asset(videoGame, 'imgTheme') }}\" alt=\"{{ videoGame.name }}\">
\t\t</section>
\t\t<section class=\"video-game-card-head hide-2\">
\t\t\t<div class=\"video-game-pres hide-2\">
\t\t\t\t<h3 class=\" hide-2\">{{ videoGame.name }}</h3>

\t\t\t\t{% if videoGame.platform.platformName == 1 %}
\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t<span>Nintendo Switch</span>
\t\t\t\t\t</h4>
\t\t\t\t{% elseif videoGame.platform.platformName == 2 %}
\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t<span>PC Steam</span>
\t\t\t\t\t</h4>
\t\t\t\t{% elseif videoGame.platform.platformName == 3 %}
\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t<span>PlayStation 5</span>
\t\t\t\t\t</h4>
\t\t\t\t{% elseif videoGame.platform.platformName == 4 %}
\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t<span>GameBoy Advanced</span>
\t\t\t\t\t</h4>
\t\t\t\t{% elseif videoGame.platform.platformName == 5 %}
\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t<span>GameBoy / GameBoy Color</span>
\t\t\t\t\t</h4>
\t\t\t\t{% elseif videoGame.platform.platformName == 6 %}
\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t<span>PlayStation 4</span>
\t\t\t\t\t</h4>
\t\t\t\t{% elseif videoGame.platform.platformName == 7 %}
\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t<span>Nintendo DS</span>
\t\t\t\t\t</h4>
\t\t\t\t{% elseif videoGame.platform.platformName == 8 %}
\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t<span>Nintendo 3DS</span>
\t\t\t\t\t</h4>
\t\t\t\t{% elseif videoGame.platform.platformName == 9 %}
\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t<span>PlayStation 3</span>
\t\t\t\t\t</h4>
\t\t\t\t{% elseif videoGame.platform.platformName == 10 %}
\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t<span>PlayStation 2</span>
\t\t\t\t\t</h4>
\t\t\t\t{% elseif videoGame.platform.platformName == 11 %}
\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t<span>PlayStation</span>
\t\t\t\t\t</h4>
\t\t\t\t{% elseif videoGame.platform.platformName == 12 %}
\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t<span>XBox</span>
\t\t\t\t\t</h4>
\t\t\t\t{% elseif videoGame.platform.platformName == 13 %}
\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t<span>XBox 360</span>
\t\t\t\t\t</h4>
\t\t\t\t{% elseif videoGame.platform.platformName == 14 %}
\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t<span>XBox One</span>
\t\t\t\t\t</h4>
\t\t\t\t{% elseif videoGame.platform.platformName == 15 %}
\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t<span>XBox Series</span>
\t\t\t\t\t</h4>
\t\t\t\t{% endif %}
\t\t\t\t<p class=\"perso-grade hide-2\">Note personnelle :</p>
\t\t\t\t{% if videoGame.grade >= 75 %}
\t\t\t\t\t<h4 class=\"video-game-grade verygood hide-3\">{{ videoGame.grade }}</h4>
\t\t\t\t{% elseif videoGame.grade <= 74 and videoGame.grade >= 60 %}
\t\t\t\t\t<h4 class=\"video-game-grade good hide-3\">{{ videoGame.grade }}</h4>
\t\t\t\t{% elseif videoGame.grade <= 59 and videoGame.grade >= 50 %}
\t\t\t\t\t<h4 class=\"video-game-grade medium hide-3\">{{ videoGame.grade }}</h4>
\t\t\t\t{% elseif videoGame.grade <= 49 and videoGame.grade >= 35 %}
\t\t\t\t\t<h4 class=\"video-game-grade notenough hide-3\">{{ videoGame.grade }}</h4>
\t\t\t\t{% elseif videoGame.grade <= 34 %}
\t\t\t\t\t<h4 class=\"video-game-grade bad hide-3\">{{ videoGame.grade }}</h4>
\t\t\t\t{% endif %}
\t\t\t\t<p class=\"hide-3\">
\t\t\t\t\t<span>Date de sortie</span>
\t\t\t\t\t: le
\t\t\t\t\t{{ videoGame.releaseDate | date('d F Y') }}</p>
\t\t\t\t<p class=\" hide-3\">
\t\t\t\t\t<span>Prix moyen</span>
\t\t\t\t\t:
\t\t\t\t\t{{ videoGame.averagePrice }}
\t\t\t\t\t€</p>
\t\t\t\t<div class=\"video-game-genders-box hide-3\">
\t\t\t\t\t<ul class=\"video-game-genders-list\">
\t\t\t\t\t\t{% for gender in videoGame.genders %}
\t\t\t\t\t\t\t{% if gender.id == 1 %}
\t\t\t\t\t\t\t\t<li class=\"video-game-gender rpg\">
\t\t\t\t\t\t\t\t\tRPG
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% elseif gender.id == 2 %}
\t\t\t\t\t\t\t\t<li class=\"video-game-gender avent\">
\t\t\t\t\t\t\t\t\tAventure
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% elseif gender.id == 3 %}
\t\t\t\t\t\t\t\t<li class=\"video-game-gender fant\">
\t\t\t\t\t\t\t\t\tFantastique
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% elseif gender.id == 4 %}
\t\t\t\t\t\t\t\t<li class=\"video-game-gender crea\">
\t\t\t\t\t\t\t\t\tCréation
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% elseif gender.id == 5 %}
\t\t\t\t\t\t\t\t<li class=\"video-game-gender ow\">
\t\t\t\t\t\t\t\t\tOpen-World
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% elseif gender.id == 6 %}
\t\t\t\t\t\t\t\t<li class=\"video-game-gender gestion\">
\t\t\t\t\t\t\t\t\tGestion
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% elseif gender.id == 7 %}
\t\t\t\t\t\t\t\t<li class=\"video-game-gender refl\">
\t\t\t\t\t\t\t\t\tRéflexion
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% elseif gender.id == 8 %}
\t\t\t\t\t\t\t\t<li class=\"video-game-gender ecolo\">
\t\t\t\t\t\t\t\t\tÉcologie
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% elseif gender.id == 9 %}
\t\t\t\t\t\t\t\t<li class=\"video-game-gender sante\">
\t\t\t\t\t\t\t\t\tSanté
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% elseif gender.id == 10 %}
\t\t\t\t\t\t\t\t<li class=\"video-game-gender survie\">
\t\t\t\t\t\t\t\t\tSurvie
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% elseif gender.id == 11 %}
\t\t\t\t\t\t\t\t<li class=\"video-game-gender tact\">
\t\t\t\t\t\t\t\t\tTactique
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% elseif gender.id == 12 %}
\t\t\t\t\t\t\t\t<li class=\"video-game-gender strat\">
\t\t\t\t\t\t\t\t\tStratégie
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% elseif gender.id == 13 %}
\t\t\t\t\t\t\t\t<li class=\"video-game-gender chill\">
\t\t\t\t\t\t\t\t\tChill
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% elseif gender.id == 14 %}
\t\t\t\t\t\t\t\t<li class=\"video-game-gender postapo\">
\t\t\t\t\t\t\t\t\tPost-Apocalyptique
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<section class=\"video-game-content hide-4\">
\t\t\t<a class=\"go-to-vg\" href=\"{{ path('videogame_card', { 'id': videoGame.id }) }}\">Accéder à l'Avis</a>
\t\t</section>
\t</article>
{% endblock %}
", "./videogames/videogame-list-card.html.twig", "C:\\Users\\robocop\\Desktop\\REVISIONS WEB\\FIRST PROJECTS\\MyMetaverseV2.0\\MyMetaverse\\templates\\videogames\\videogame-list-card.html.twig");
    }
}
