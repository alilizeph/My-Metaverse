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

/* ./videogames/videogame-list-card.html.twig */
class __TwigTemplate_207ec523f632f526cc03e6bb00c998ce extends Template
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
        yield from $this->unwrap()->yieldBlock('vglist', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    public function block_vglist($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vglist"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vglist"));

        // line 2
        yield "\t<article class=\"video-game-card hide\">
\t\t<section class=\"video-game-card-theme hide-2\">
\t\t\t<img src=\"";
        // line 4
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 4, $this->source); })()), "imgTheme"), "html", null, true);
        yield "\" alt=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), "html", null, true);
        yield "\">
\t\t</section>
\t\t<section class=\"video-game-card-head hide-2\">
\t\t\t<section class=\"video-game-pres hide-2\">
\t\t\t\t<h3 class=\" hide-2\">";
        // line 8
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 8, $this->source); })()), "titleReview", [], "any", false, false, false, 8), "html", null, true);
        yield "</h3>
\t\t\t\t<h4 class=\"name hide-2\">Jeu : ";
        // line 9
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), "html", null, true);
        yield "</h4>

\t\t\t\t";
        // line 11
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 11, $this->source); })()), "platform", [], "any", false, false, false, 11), "platformName", [], "any", false, false, false, 11) == 1)) {
            // line 12
            yield "\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t<span>Nintendo Switch</span>
\t\t\t\t\t</h4>
\t\t\t\t";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 15
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 15, $this->source); })()), "platform", [], "any", false, false, false, 15), "platformName", [], "any", false, false, false, 15) == 2)) {
            // line 16
            yield "\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t<span>PC Steam</span>
\t\t\t\t\t</h4>
\t\t\t\t";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 19
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 19, $this->source); })()), "platform", [], "any", false, false, false, 19), "platformName", [], "any", false, false, false, 19) == 3)) {
            // line 20
            yield "\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t<span>PlayStation 5</span>
\t\t\t\t\t</h4>
\t\t\t\t";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 23
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 23, $this->source); })()), "platform", [], "any", false, false, false, 23), "platformName", [], "any", false, false, false, 23) == 4)) {
            // line 24
            yield "\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t<span>GameBoy Advanced</span>
\t\t\t\t\t</h4>
\t\t\t\t";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 27
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 27, $this->source); })()), "platform", [], "any", false, false, false, 27), "platformName", [], "any", false, false, false, 27) == 5)) {
            // line 28
            yield "\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t<span>GameBoy / GameBoy Color</span>
\t\t\t\t\t</h4>
\t\t\t\t";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 31
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 31, $this->source); })()), "platform", [], "any", false, false, false, 31), "platformName", [], "any", false, false, false, 31) == 6)) {
            // line 32
            yield "\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t<span>PlayStation 4</span>
\t\t\t\t\t</h4>
\t\t\t\t";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 35
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 35, $this->source); })()), "platform", [], "any", false, false, false, 35), "platformName", [], "any", false, false, false, 35) == 7)) {
            // line 36
            yield "\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t<span>Nintendo DS</span>
\t\t\t\t\t</h4>
\t\t\t\t";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 39
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 39, $this->source); })()), "platform", [], "any", false, false, false, 39), "platformName", [], "any", false, false, false, 39) == 8)) {
            // line 40
            yield "\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t<span>Nintendo 3DS</span>
\t\t\t\t\t</h4>
\t\t\t\t";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 43
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 43, $this->source); })()), "platform", [], "any", false, false, false, 43), "platformName", [], "any", false, false, false, 43) == 9)) {
            // line 44
            yield "\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t<span>PlayStation 3</span>
\t\t\t\t\t</h4>
\t\t\t\t";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 47
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 47, $this->source); })()), "platform", [], "any", false, false, false, 47), "platformName", [], "any", false, false, false, 47) == 10)) {
            // line 48
            yield "\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t<span>PlayStation 2</span>
\t\t\t\t\t</h4>
\t\t\t\t";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 51
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 51, $this->source); })()), "platform", [], "any", false, false, false, 51), "platformName", [], "any", false, false, false, 51) == 11)) {
            // line 52
            yield "\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t<span>PlayStation</span>
\t\t\t\t\t</h4>
\t\t\t\t";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 55
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 55, $this->source); })()), "platform", [], "any", false, false, false, 55), "platformName", [], "any", false, false, false, 55) == 12)) {
            // line 56
            yield "\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t<span>XBox</span>
\t\t\t\t\t</h4>
\t\t\t\t";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 59
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 59, $this->source); })()), "platform", [], "any", false, false, false, 59), "platformName", [], "any", false, false, false, 59) == 13)) {
            // line 60
            yield "\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t<span>XBox 360</span>
\t\t\t\t\t</h4>
\t\t\t\t";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 63
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 63, $this->source); })()), "platform", [], "any", false, false, false, 63), "platformName", [], "any", false, false, false, 63) == 14)) {
            // line 64
            yield "\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t<span>XBox One</span>
\t\t\t\t\t</h4>
\t\t\t\t";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 67
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 67, $this->source); })()), "platform", [], "any", false, false, false, 67), "platformName", [], "any", false, false, false, 67) == 15)) {
            // line 68
            yield "\t\t\t\t\t<h4 class=\" hide-2\">Sur :
\t\t\t\t\t\t<span>XBox Series</span>
\t\t\t\t\t</h4>
\t\t\t\t";
        }
        // line 72
        yield "\t\t\t\t<p class=\"perso-grade hide-2\">Note personnelle :</p>
\t\t\t\t";
        // line 73
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 73, $this->source); })()), "grade", [], "any", false, false, false, 73) >= 75)) {
            // line 74
            yield "\t\t\t\t\t<h4 class=\"video-game-grade verygood hide-3\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 74, $this->source); })()), "grade", [], "any", false, false, false, 74), "html", null, true);
            yield "</h4>
\t\t\t\t";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 75
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 75, $this->source); })()), "grade", [], "any", false, false, false, 75) <= 74) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 75, $this->source); })()), "grade", [], "any", false, false, false, 75) >= 60))) {
            // line 76
            yield "\t\t\t\t\t<h4 class=\"video-game-grade good hide-3\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 76, $this->source); })()), "grade", [], "any", false, false, false, 76), "html", null, true);
            yield "</h4>
\t\t\t\t";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 77
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 77, $this->source); })()), "grade", [], "any", false, false, false, 77) <= 59) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 77, $this->source); })()), "grade", [], "any", false, false, false, 77) >= 50))) {
            // line 78
            yield "\t\t\t\t\t<h4 class=\"video-game-grade medium hide-3\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 78, $this->source); })()), "grade", [], "any", false, false, false, 78), "html", null, true);
            yield "</h4>
\t\t\t\t";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 79
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 79, $this->source); })()), "grade", [], "any", false, false, false, 79) <= 49) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 79, $this->source); })()), "grade", [], "any", false, false, false, 79) >= 35))) {
            // line 80
            yield "\t\t\t\t\t<h4 class=\"video-game-grade notenough hide-3\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 80, $this->source); })()), "grade", [], "any", false, false, false, 80), "html", null, true);
            yield "</h4>
\t\t\t\t";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 81
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 81, $this->source); })()), "grade", [], "any", false, false, false, 81) <= 34)) {
            // line 82
            yield "\t\t\t\t\t<h4 class=\"video-game-grade bad hide-3\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 82, $this->source); })()), "grade", [], "any", false, false, false, 82), "html", null, true);
            yield "</h4>
\t\t\t\t";
        }
        // line 84
        yield "\t\t\t\t<p class=\"hide-3\">
\t\t\t\t\t<span>Date de sortie</span>
\t\t\t\t\t: le
\t\t\t\t\t";
        // line 87
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 87, $this->source); })()), "releaseDate", [], "any", false, false, false, 87), "d F Y"), "html", null, true);
        yield "</p>
\t\t\t\t<p class=\" hide-3\">
\t\t\t\t\t<span>Prix moyen</span>
\t\t\t\t\t:
\t\t\t\t\t";
        // line 91
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 91, $this->source); })()), "averagePrice", [], "any", false, false, false, 91), "html", null, true);
        yield "
\t\t\t\t\t€</p>
\t\t\t\t<section class=\"video-game-genders-box hide-3\">
\t\t\t\t\t<ul class=\"video-game-genders-list\">
\t\t\t\t\t\t";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 95, $this->source); })()), "genders", [], "any", false, false, false, 95));
        foreach ($context['_seq'] as $context["_key"] => $context["gender"]) {
            // line 96
            yield "\t\t\t\t\t\t\t";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["gender"], "id", [], "any", false, false, false, 96) == 1)) {
                // line 97
                yield "\t\t\t\t\t\t\t\t<li class=\"video-game-gender rpg\">
\t\t\t\t\t\t\t\t\tRPG
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 100
$context["gender"], "id", [], "any", false, false, false, 100) == 2)) {
                // line 101
                yield "\t\t\t\t\t\t\t\t<li class=\"video-game-gender avent\">
\t\t\t\t\t\t\t\t\tAventure
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 104
$context["gender"], "id", [], "any", false, false, false, 104) == 3)) {
                // line 105
                yield "\t\t\t\t\t\t\t\t<li class=\"video-game-gender fant\">
\t\t\t\t\t\t\t\t\tFantastique
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 108
$context["gender"], "id", [], "any", false, false, false, 108) == 4)) {
                // line 109
                yield "\t\t\t\t\t\t\t\t<li class=\"video-game-gender crea\">
\t\t\t\t\t\t\t\t\tCréation
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 112
$context["gender"], "id", [], "any", false, false, false, 112) == 5)) {
                // line 113
                yield "\t\t\t\t\t\t\t\t<li class=\"video-game-gender ow\">
\t\t\t\t\t\t\t\t\tOpen-World
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 116
$context["gender"], "id", [], "any", false, false, false, 116) == 6)) {
                // line 117
                yield "\t\t\t\t\t\t\t\t<li class=\"video-game-gender gestion\">
\t\t\t\t\t\t\t\t\tGestion
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 120
$context["gender"], "id", [], "any", false, false, false, 120) == 7)) {
                // line 121
                yield "\t\t\t\t\t\t\t\t<li class=\"video-game-gender refl\">
\t\t\t\t\t\t\t\t\tRéflexion
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 124
$context["gender"], "id", [], "any", false, false, false, 124) == 8)) {
                // line 125
                yield "\t\t\t\t\t\t\t\t<li class=\"video-game-gender ecolo\">
\t\t\t\t\t\t\t\t\tÉcologie
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 128
$context["gender"], "id", [], "any", false, false, false, 128) == 9)) {
                // line 129
                yield "\t\t\t\t\t\t\t\t<li class=\"video-game-gender sante\">
\t\t\t\t\t\t\t\t\tSanté
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 132
$context["gender"], "id", [], "any", false, false, false, 132) == 10)) {
                // line 133
                yield "\t\t\t\t\t\t\t\t<li class=\"video-game-gender survie\">
\t\t\t\t\t\t\t\t\tSurvie
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 136
$context["gender"], "id", [], "any", false, false, false, 136) == 11)) {
                // line 137
                yield "\t\t\t\t\t\t\t\t<li class=\"video-game-gender tact\">
\t\t\t\t\t\t\t\t\tTactique
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 140
$context["gender"], "id", [], "any", false, false, false, 140) == 12)) {
                // line 141
                yield "\t\t\t\t\t\t\t\t<li class=\"video-game-gender strat\">
\t\t\t\t\t\t\t\t\tStratégie
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 144
$context["gender"], "id", [], "any", false, false, false, 144) == 13)) {
                // line 145
                yield "\t\t\t\t\t\t\t\t<li class=\"video-game-gender chill\">
\t\t\t\t\t\t\t\t\tChill
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 148
$context["gender"], "id", [], "any", false, false, false, 148) == 14)) {
                // line 149
                yield "\t\t\t\t\t\t\t\t<li class=\"video-game-gender postapo\">
\t\t\t\t\t\t\t\t\tPost-Apocalyptique
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            }
            // line 153
            yield "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gender'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        yield "\t\t\t\t\t</ul>
\t\t\t\t</section>
\t\t\t</section>
\t\t</section>
\t\t<section class=\"video-game-content hide-4\">
\t\t\t<a class=\"go-to-vg\" href=\"";
        // line 159
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videogame_card", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 159, $this->source); })()), "id", [], "any", false, false, false, 159)]), "html", null, true);
        yield "\">Accéder à l'Avis</a>
\t\t</section>
\t</article>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
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
        return array (  368 => 159,  361 => 154,  355 => 153,  349 => 149,  347 => 148,  342 => 145,  340 => 144,  335 => 141,  333 => 140,  328 => 137,  326 => 136,  321 => 133,  319 => 132,  314 => 129,  312 => 128,  307 => 125,  305 => 124,  300 => 121,  298 => 120,  293 => 117,  291 => 116,  286 => 113,  284 => 112,  279 => 109,  277 => 108,  272 => 105,  270 => 104,  265 => 101,  263 => 100,  258 => 97,  255 => 96,  251 => 95,  244 => 91,  237 => 87,  232 => 84,  226 => 82,  224 => 81,  219 => 80,  217 => 79,  212 => 78,  210 => 77,  205 => 76,  203 => 75,  198 => 74,  196 => 73,  193 => 72,  187 => 68,  185 => 67,  180 => 64,  178 => 63,  173 => 60,  171 => 59,  166 => 56,  164 => 55,  159 => 52,  157 => 51,  152 => 48,  150 => 47,  145 => 44,  143 => 43,  138 => 40,  136 => 39,  131 => 36,  129 => 35,  124 => 32,  122 => 31,  117 => 28,  115 => 27,  110 => 24,  108 => 23,  103 => 20,  101 => 19,  96 => 16,  94 => 15,  89 => 12,  87 => 11,  82 => 9,  78 => 8,  69 => 4,  65 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block vglist %}
\t<article class=\"video-game-card hide\">
\t\t<section class=\"video-game-card-theme hide-2\">
\t\t\t<img src=\"{{ vich_uploader_asset(videoGame, 'imgTheme') }}\" alt=\"{{ videoGame.name }}\">
\t\t</section>
\t\t<section class=\"video-game-card-head hide-2\">
\t\t\t<section class=\"video-game-pres hide-2\">
\t\t\t\t<h3 class=\" hide-2\">{{ videoGame.titleReview }}</h3>
\t\t\t\t<h4 class=\"name hide-2\">Jeu : {{ videoGame.name }}</h4>

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
\t\t\t\t<section class=\"video-game-genders-box hide-3\">
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
\t\t\t\t</section>
\t\t\t</section>
\t\t</section>
\t\t<section class=\"video-game-content hide-4\">
\t\t\t<a class=\"go-to-vg\" href=\"{{ path('videogame_card', { 'id': videoGame.id }) }}\">Accéder à l'Avis</a>
\t\t</section>
\t</article>
{% endblock %}
", "./videogames/videogame-list-card.html.twig", "C:\\Users\\robocop\\Desktop\\REVISIONS WEB\\FIRST PROJECTS\\MyMetaverseV2.0\\MyMetaverse\\templates\\videogames\\videogame-list-card.html.twig");
    }
}
