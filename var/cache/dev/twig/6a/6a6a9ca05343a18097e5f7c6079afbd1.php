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

/* videogames/videogame-card.html.twig */
class __TwigTemplate_ca1172a83f1f753cedf84b067f411be6 extends Template
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
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
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
        yield "\t<link rel=\"stylesheet\" href=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./css/videogames/video-game-card.css"), "html", null, true);
        yield "\">
\t<link rel=\"stylesheet\" gref=\"";
        // line 5
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./css/users/login.css"), "html", null, true);
        yield "\">
\t<link rel=\"stylesheet\" gref=\"";
        // line 6
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./css/styles.css"), "html", null, true);
        yield "\">
\t<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200\"/>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
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
        yield "\t<main>
\t\t<article class=\"video-game-card hide\">
\t\t\t<section class=\"video-game-card-theme hide-2\">
\t\t\t\t<img src=\"";
        // line 14
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 14, $this->source); })()), "imgTheme"), "html", null, true);
        yield "\" alt=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), "html", null, true);
        yield "\" class=\"hide-2\">
\t\t\t</section>
\t\t\t<section class=\"video-game-card-head hide-2\">
\t\t\t\t<section class=\"video-game-pres hide-2\">
\t\t\t\t\t<h3 class=\" hide-2\">";
        // line 18
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 18, $this->source); })()), "titleReview", [], "any", false, false, false, 18), "html", null, true);
        yield "</h3>
\t\t\t\t\t<h4 class=\"name hide-2\">Jeu : ";
        // line 19
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
        yield "</h4>
\t\t\t\t\t<h4 class=\"platform hide-2\">Sur : ";
        // line 20
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 20, $this->source); })()), "platform", [], "any", false, false, false, 20), "platformName", [], "any", false, false, false, 20), "html", null, true);
        yield "</h4>
\t\t\t\t\t<p class=\"hide-3\">
\t\t\t\t\t\t<span>Date de sortie</span>
\t\t\t\t\t\t: le
\t\t\t\t\t\t";
        // line 24
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 24, $this->source); })()), "releaseDate", [], "any", false, false, false, 24), "d F Y"), "html", null, true);
        yield "
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\" hide-3\">
\t\t\t\t\t\t<span>Prix moyen</span>
\t\t\t\t\t\t:
\t\t\t\t\t\t";
        // line 29
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 29, $this->source); })()), "averagePrice", [], "any", false, false, false, 29), "html", null, true);
        yield "
\t\t\t\t\t\t€
\t\t\t\t\t</p>
\t\t\t\t\t<section class=\"video-game-box-zone\">
\t\t\t\t\t\t<img class=\"video-game-box\" src=\"";
        // line 33
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 33, $this->source); })()), "imgBox"), "html", null, true);
        yield "\" alt=\"boîte de ";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 33, $this->source); })()), "name", [], "any", false, false, false, 33), "html", null, true);
        yield "\">
\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"video-game-genders-box hide-3\">
\t\t\t\t\t\t<ul class=\"video-game-genders-list\">
\t\t\t\t\t\t\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 37, $this->source); })()), "genders", [], "any", false, false, false, 37));
        foreach ($context['_seq'] as $context["_key"] => $context["gender"]) {
            // line 38
            yield "\t\t\t\t\t\t\t\t";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["gender"], "id", [], "any", false, false, false, 38) == 1)) {
                // line 39
                yield "\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender rpg\">
\t\t\t\t\t\t\t\t\t\tRPG
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 42
$context["gender"], "id", [], "any", false, false, false, 42) == 2)) {
                // line 43
                yield "\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender avent\">
\t\t\t\t\t\t\t\t\t\tAventure
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 46
$context["gender"], "id", [], "any", false, false, false, 46) == 3)) {
                // line 47
                yield "\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender fant\">
\t\t\t\t\t\t\t\t\t\tFantastique
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 50
$context["gender"], "id", [], "any", false, false, false, 50) == 4)) {
                // line 51
                yield "\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender crea\">
\t\t\t\t\t\t\t\t\t\tCréation
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 54
$context["gender"], "id", [], "any", false, false, false, 54) == 5)) {
                // line 55
                yield "\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender ow\">
\t\t\t\t\t\t\t\t\t\tOpen-World
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 58
$context["gender"], "id", [], "any", false, false, false, 58) == 6)) {
                // line 59
                yield "\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender gestion\">
\t\t\t\t\t\t\t\t\t\tGestion
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 62
$context["gender"], "id", [], "any", false, false, false, 62) == 7)) {
                // line 63
                yield "\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender refl\">
\t\t\t\t\t\t\t\t\t\tRéflexion
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 66
$context["gender"], "id", [], "any", false, false, false, 66) == 8)) {
                // line 67
                yield "\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender ecolo\">
\t\t\t\t\t\t\t\t\t\tÉcologie
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 70
$context["gender"], "id", [], "any", false, false, false, 70) == 9)) {
                // line 71
                yield "\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender sante\">
\t\t\t\t\t\t\t\t\t\tSanté
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 74
$context["gender"], "id", [], "any", false, false, false, 74) == 10)) {
                // line 75
                yield "\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender survie\">
\t\t\t\t\t\t\t\t\t\tSurvie
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 78
$context["gender"], "id", [], "any", false, false, false, 78) == 11)) {
                // line 79
                yield "\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender tact\">
\t\t\t\t\t\t\t\t\t\tTactique
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 82
$context["gender"], "id", [], "any", false, false, false, 82) == 12)) {
                // line 83
                yield "\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender strat\">
\t\t\t\t\t\t\t\t\t\tStratégie
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 86
$context["gender"], "id", [], "any", false, false, false, 86) == 13)) {
                // line 87
                yield "\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender chill\">
\t\t\t\t\t\t\t\t\t\tChill
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 90
$context["gender"], "id", [], "any", false, false, false, 90) == 14)) {
                // line 91
                yield "\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender postapo\">
\t\t\t\t\t\t\t\t\t\tPost-Apocalyptique
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            // line 95
            yield "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gender'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        yield "\t\t\t\t\t\t</ul>
\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"video-game-grades-box hide-3\">
\t\t\t\t\t\t<ul class=\"video-games-grades-list\">
\t\t\t\t\t\t\t<li class=\"video-game-grades-elmt\">
\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t<p class=\"graphics\">Graphismes</p>
\t\t\t\t\t\t\t\t\t";
        // line 103
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 103, $this->source); })()), "graphicsGrade", [], "any", false, false, false, 103) >= 75)) {
            // line 104
            yield "\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade verygood hide-3\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 104, $this->source); })()), "graphicsGrade", [], "any", false, false, false, 104), "html", null, true);
            yield "</h4>
\t\t\t\t\t\t\t\t\t";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 105
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 105, $this->source); })()), "graphicsGrade", [], "any", false, false, false, 105) <= 74) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 105, $this->source); })()), "graphicsGrade", [], "any", false, false, false, 105) >= 60))) {
            // line 106
            yield "\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade good hide-3\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 106, $this->source); })()), "graphicsGrade", [], "any", false, false, false, 106), "html", null, true);
            yield "</h4>
\t\t\t\t\t\t\t\t\t";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 107
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 107, $this->source); })()), "graphicsGrade", [], "any", false, false, false, 107) <= 59) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 107, $this->source); })()), "graphicsGrade", [], "any", false, false, false, 107) >= 50))) {
            // line 108
            yield "\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade medium hide-3\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 108, $this->source); })()), "graphicsGrade", [], "any", false, false, false, 108), "html", null, true);
            yield "</h4>
\t\t\t\t\t\t\t\t\t";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 109
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 109, $this->source); })()), "graphicsGrade", [], "any", false, false, false, 109) <= 49) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 109, $this->source); })()), "graphicsGrade", [], "any", false, false, false, 109) >= 35))) {
            // line 110
            yield "\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade notenough hide-3\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 110, $this->source); })()), "graphicsGrade", [], "any", false, false, false, 110), "html", null, true);
            yield "</h4>
\t\t\t\t\t\t\t\t\t";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 111
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 111, $this->source); })()), "graphicsGrade", [], "any", false, false, false, 111) <= 34)) {
            // line 112
            yield "\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade bad hide-3\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 112, $this->source); })()), "graphicsGrade", [], "any", false, false, false, 112), "html", null, true);
            yield "</h4>
\t\t\t\t\t\t\t\t\t";
        }
        // line 114
        yield "\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"video-game-grades-elmt\">
\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t<p class=\"gameplay\">Gameplay</p>
\t\t\t\t\t\t\t\t\t";
        // line 119
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 119, $this->source); })()), "gameplayGrade", [], "any", false, false, false, 119) >= 75)) {
            // line 120
            yield "\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade verygood hide-3\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 120, $this->source); })()), "gameplayGrade", [], "any", false, false, false, 120), "html", null, true);
            yield "</h4>
\t\t\t\t\t\t\t\t\t";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 121
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 121, $this->source); })()), "gameplayrade", [], "any", false, false, false, 121) <= 74) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 121, $this->source); })()), "gameplayrade", [], "any", false, false, false, 121) >= 60))) {
            // line 122
            yield "\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade good hide-3\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 122, $this->source); })()), "gameplayGrade", [], "any", false, false, false, 122), "html", null, true);
            yield "</h4>
\t\t\t\t\t\t\t\t\t";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 123
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 123, $this->source); })()), "gameplayrade", [], "any", false, false, false, 123) <= 59) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 123, $this->source); })()), "gameplayrade", [], "any", false, false, false, 123) >= 50))) {
            // line 124
            yield "\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade medium hide-3\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 124, $this->source); })()), "gameplayGrade", [], "any", false, false, false, 124), "html", null, true);
            yield "</h4>
\t\t\t\t\t\t\t\t\t";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 125
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 125, $this->source); })()), "gameplayGrade", [], "any", false, false, false, 125) <= 49) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 125, $this->source); })()), "gameplayGrade", [], "any", false, false, false, 125) >= 35))) {
            // line 126
            yield "\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade notenough hide-3\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 126, $this->source); })()), "gameplayGrade", [], "any", false, false, false, 126), "html", null, true);
            yield "</h4>
\t\t\t\t\t\t\t\t\t";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 127
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 127, $this->source); })()), "gameplayGrade", [], "any", false, false, false, 127) <= 34)) {
            // line 128
            yield "\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade bad hide-3\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 128, $this->source); })()), "gameplayGrade", [], "any", false, false, false, 128), "html", null, true);
            yield "</h4>
\t\t\t\t\t\t\t\t\t";
        }
        // line 130
        yield "\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"video-game-grades-elmt\">
\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t<p class=\"storyline\">Scénario</pc>
\t\t\t\t\t\t\t\t\t";
        // line 135
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 135, $this->source); })()), "storylineGrade", [], "any", false, false, false, 135) >= 75)) {
            // line 136
            yield "\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade verygood hide-3\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 136, $this->source); })()), "storylineGrade", [], "any", false, false, false, 136), "html", null, true);
            yield "</h4>
\t\t\t\t\t\t\t\t\t";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 137
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 137, $this->source); })()), "storylineGrade", [], "any", false, false, false, 137) <= 74) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 137, $this->source); })()), "storylineGrade", [], "any", false, false, false, 137) >= 60))) {
            // line 138
            yield "\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade good hide-3\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 138, $this->source); })()), "storylineGrade", [], "any", false, false, false, 138), "html", null, true);
            yield "</h4>
\t\t\t\t\t\t\t\t\t";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 139
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 139, $this->source); })()), "storylineGrade", [], "any", false, false, false, 139) <= 59) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 139, $this->source); })()), "storylineGrade", [], "any", false, false, false, 139) >= 50))) {
            // line 140
            yield "\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade medium hide-3\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 140, $this->source); })()), "storylineGrade", [], "any", false, false, false, 140), "html", null, true);
            yield "</h4>
\t\t\t\t\t\t\t\t\t";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 141
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 141, $this->source); })()), "storylineGrade", [], "any", false, false, false, 141) <= 49) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 141, $this->source); })()), "storylineGrade", [], "any", false, false, false, 141) >= 35))) {
            // line 142
            yield "\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade notenough hide-3\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 142, $this->source); })()), "storylineGrade", [], "any", false, false, false, 142), "html", null, true);
            yield "</h4>
\t\t\t\t\t\t\t\t\t";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 143
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 143, $this->source); })()), "storylineGrade", [], "any", false, false, false, 143) <= 34)) {
            // line 144
            yield "\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade bad hide-3\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 144, $this->source); })()), "storylineGrade", [], "any", false, false, false, 144), "html", null, true);
            yield "</h4>
\t\t\t\t\t\t\t\t\t";
        }
        // line 146
        yield "\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"video-game-grades-elmt\">
\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t<p class=\"execution\">Réalisation</p>
\t\t\t\t\t\t\t\t\t";
        // line 151
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 151, $this->source); })()), "executionGrade", [], "any", false, false, false, 151) >= 75)) {
            // line 152
            yield "\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade verygood hide-3\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 152, $this->source); })()), "executionGrade", [], "any", false, false, false, 152), "html", null, true);
            yield "</h4>
\t\t\t\t\t\t\t\t\t";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 153
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 153, $this->source); })()), "executionGrade", [], "any", false, false, false, 153) <= 74) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 153, $this->source); })()), "executionGrade", [], "any", false, false, false, 153) >= 60))) {
            // line 154
            yield "\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade good hide-3\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 154, $this->source); })()), "executionGrade", [], "any", false, false, false, 154), "html", null, true);
            yield "</h4>
\t\t\t\t\t\t\t\t\t";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 155
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 155, $this->source); })()), "executionGrade", [], "any", false, false, false, 155) <= 59) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 155, $this->source); })()), "executionGrade", [], "any", false, false, false, 155) >= 50))) {
            // line 156
            yield "\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade medium hide-3\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 156, $this->source); })()), "executionGrade", [], "any", false, false, false, 156), "html", null, true);
            yield "</h4>
\t\t\t\t\t\t\t\t\t";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 157
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 157, $this->source); })()), "executionGrade", [], "any", false, false, false, 157) <= 49) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 157, $this->source); })()), "executionGrade", [], "any", false, false, false, 157) >= 35))) {
            // line 158
            yield "\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade notenough hide-3\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 158, $this->source); })()), "executionGrade", [], "any", false, false, false, 158), "html", null, true);
            yield "</h4>
\t\t\t\t\t\t\t\t\t";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 159
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 159, $this->source); })()), "executionGrade", [], "any", false, false, false, 159) <= 34)) {
            // line 160
            yield "\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade bad hide-3\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 160, $this->source); })()), "executionGrade", [], "any", false, false, false, 160), "html", null, true);
            yield "</h4>
\t\t\t\t\t\t\t\t\t";
        }
        // line 162
        yield "\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"video-game-grades-elmt average\">
\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t<p class=\"perso-grade\">Note globale</p>
\t\t\t\t\t\t\t\t\t";
        // line 167
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 167, $this->source); })()), "grade", [], "any", false, false, false, 167) >= 75)) {
            // line 168
            yield "\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade verygood hide-3\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 168, $this->source); })()), "grade", [], "any", false, false, false, 168), "html", null, true);
            yield "</h4>
\t\t\t\t\t\t\t\t\t";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 169
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 169, $this->source); })()), "grade", [], "any", false, false, false, 169) <= 74) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 169, $this->source); })()), "grade", [], "any", false, false, false, 169) >= 60))) {
            // line 170
            yield "\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade good hide-3\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 170, $this->source); })()), "grade", [], "any", false, false, false, 170), "html", null, true);
            yield "</h4>
\t\t\t\t\t\t\t\t\t";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 171
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 171, $this->source); })()), "grade", [], "any", false, false, false, 171) <= 59) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 171, $this->source); })()), "grade", [], "any", false, false, false, 171) >= 50))) {
            // line 172
            yield "\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade medium hide-3\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 172, $this->source); })()), "grade", [], "any", false, false, false, 172), "html", null, true);
            yield "</h4>
\t\t\t\t\t\t\t\t\t";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 173
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 173, $this->source); })()), "grade", [], "any", false, false, false, 173) <= 49) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 173, $this->source); })()), "grade", [], "any", false, false, false, 173) >= 35))) {
            // line 174
            yield "\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade notenough hide-3\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 174, $this->source); })()), "grade", [], "any", false, false, false, 174), "html", null, true);
            yield "</h4>
\t\t\t\t\t\t\t\t\t";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 175
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 175, $this->source); })()), "grade", [], "any", false, false, false, 175) <= 34)) {
            // line 176
            yield "\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade bad hide-3\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 176, $this->source); })()), "grade", [], "any", false, false, false, 176), "html", null, true);
            yield "</h4>
\t\t\t\t\t\t\t\t\t";
        }
        // line 178
        yield "\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        // line 180
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 180, $this->source); })()), "averageUsersGrade", [], "any", false, false, false, 180) != 0)) {
            // line 181
            yield "\t\t\t\t\t\t\t<li class=\"video-game-grades-elmt\">
\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t<p class=\"users-grade\">Note utilisateurs</p>
\t\t\t\t\t\t\t\t\t";
            // line 184
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 184, $this->source); })()), "averageUsersGrade", [], "any", false, false, false, 184) >= 75)) {
                // line 185
                yield "\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-users-grade verygood hide-3\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 185, $this->source); })()), "averageUsersGrade", [], "any", false, false, false, 185), "html", null, true);
                yield "</h4>
\t\t\t\t\t\t\t\t\t";
            } elseif (((CoreExtension::getAttribute($this->env, $this->source,             // line 186
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 186, $this->source); })()), "averageUsersGrade", [], "any", false, false, false, 186) <= 74) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 186, $this->source); })()), "averageUsersGrade", [], "any", false, false, false, 186) >= 60))) {
                // line 187
                yield "\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-users-grade good hide-3\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 187, $this->source); })()), "averageUsersGrade", [], "any", false, false, false, 187), "html", null, true);
                yield "</h4>
\t\t\t\t\t\t\t\t\t";
            } elseif (((CoreExtension::getAttribute($this->env, $this->source,             // line 188
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 188, $this->source); })()), "averageUsersGrade", [], "any", false, false, false, 188) <= 59) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 188, $this->source); })()), "averageUsersGrade", [], "any", false, false, false, 188) >= 50))) {
                // line 189
                yield "\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-users-grade medium hide-3\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 189, $this->source); })()), "averageUsersGrade", [], "any", false, false, false, 189), "html", null, true);
                yield "</h4>
\t\t\t\t\t\t\t\t\t";
            } elseif (((CoreExtension::getAttribute($this->env, $this->source,             // line 190
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 190, $this->source); })()), "averageUsersGrade", [], "any", false, false, false, 190) <= 49) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 190, $this->source); })()), "averageUsersGrade", [], "any", false, false, false, 190) >= 35))) {
                // line 191
                yield "\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-users-grade notenough hide-3\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 191, $this->source); })()), "averageUsersGrade", [], "any", false, false, false, 191), "html", null, true);
                yield "</h4>
\t\t\t\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 192
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 192, $this->source); })()), "averageUsersGrade", [], "any", false, false, false, 192) <= 34)) {
                // line 193
                yield "\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-users-grade bad hide-3\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 193, $this->source); })()), "averageUsersGrade", [], "any", false, false, false, 193), "html", null, true);
                yield "</h4>
\t\t\t\t\t\t\t\t\t";
            }
            // line 195
            yield "\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        // line 198
        yield "\t\t\t\t\t\t</ul>
\t\t\t\t\t</section>
\t\t\t\t</section>
\t\t\t</section>
\t\t\t";
        // line 211
        yield "\t\t\t<section class=\"video-game-content hide-3\">
\t\t\t\t<section class=\"video-game-description hide-4\">
\t\t\t\t\t<h4>Description du jeu :</h4>
\t\t\t\t\t<p>
\t\t\t\t\t\t";
        // line 215
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 215, $this->source); })()), "description", [], "any", false, false, false, 215), "html", null, true);
        yield "
\t\t\t\t\t</p>
\t\t\t\t</section>
\t\t\t\t<section class=\"video-game-advice hide-4\">
\t\t\t\t\t<h4>Avis et Critiques sur le jeu :</h4>
\t\t\t\t\t<p>
\t\t\t\t\t\t";
        // line 221
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 221, $this->source); })()), "advice", [], "any", false, false, false, 221), "html", null, true);
        yield "
\t\t\t\t\t</p>
\t\t\t\t</section>
\t\t\t\t<button id=\"return-to-list\" class=\"hide-4\">Retour à la liste</button>
\t\t\t</section>

\t\t\t<script>
\t\t\t\tlet btn = document.getElementById(\"return-to-list\");
btn.addEventListener('click', function () {
window.location.href =\"";
        // line 230
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videogames_list");
        yield "\";
});
\t\t\t</script>
\t\t</article>
\t\t<section class=\"comment-form\">
\t\t\t";
        // line 235
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 236
            yield "\t\t\t\t";
            yield from             $this->loadTemplate("comments/form-comments.html.twig", "videogames/videogame-card.html.twig", 236)->unwrap()->yield(CoreExtension::arrayMerge($context, ["user" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 236, $this->source); })()), "user", [], "any", false, false, false, 236), "vg" => (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 236, $this->source); })()), "form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 236, $this->source); })())]));
            // line 237
            yield "\t\t\t";
        } else {
            // line 238
            yield "\t\t\t\t";
            yield from             $this->loadTemplate("comments/form-comments-guest.html.twig", "videogames/videogame-card.html.twig", 238)->unwrap()->yield(CoreExtension::arrayMerge($context, ["vg" => (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 238, $this->source); })()), "guestForm" => (isset($context["guestForm"]) || array_key_exists("guestForm", $context) ? $context["guestForm"] : (function () { throw new RuntimeError('Variable "guestForm" does not exist.', 238, $this->source); })())]));
            // line 239
            yield "\t\t\t";
        }
        // line 240
        yield "\t\t</section>
\t\t<section class=\"comments-list\">
\t\t\t";
        // line 242
        yield from $this->unwrap()->yieldBlock('comments', $context, $blocks);
        // line 247
        yield "\t\t</section>
\t</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 242
    public function block_comments($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "comments"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "comments"));

        // line 243
        yield "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 243, $this->source); })()));
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
            // line 244
            yield "\t\t\t\t\t";
            yield from             $this->loadTemplate("/comments/comment-videogame-card.html.twig", "videogames/videogame-card.html.twig", 244)->unwrap()->yield(CoreExtension::arrayMerge($context, ["comment" => $context["comment"]]));
            // line 245
            yield "\t\t\t\t";
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
        // line 246
        yield "\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
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
        return array (  655 => 246,  641 => 245,  638 => 244,  620 => 243,  610 => 242,  597 => 247,  595 => 242,  591 => 240,  588 => 239,  585 => 238,  582 => 237,  579 => 236,  577 => 235,  569 => 230,  557 => 221,  548 => 215,  542 => 211,  536 => 198,  531 => 195,  525 => 193,  523 => 192,  518 => 191,  516 => 190,  511 => 189,  509 => 188,  504 => 187,  502 => 186,  497 => 185,  495 => 184,  490 => 181,  488 => 180,  484 => 178,  478 => 176,  476 => 175,  471 => 174,  469 => 173,  464 => 172,  462 => 171,  457 => 170,  455 => 169,  450 => 168,  448 => 167,  441 => 162,  435 => 160,  433 => 159,  428 => 158,  426 => 157,  421 => 156,  419 => 155,  414 => 154,  412 => 153,  407 => 152,  405 => 151,  398 => 146,  392 => 144,  390 => 143,  385 => 142,  383 => 141,  378 => 140,  376 => 139,  371 => 138,  369 => 137,  364 => 136,  362 => 135,  355 => 130,  349 => 128,  347 => 127,  342 => 126,  340 => 125,  335 => 124,  333 => 123,  328 => 122,  326 => 121,  321 => 120,  319 => 119,  312 => 114,  306 => 112,  304 => 111,  299 => 110,  297 => 109,  292 => 108,  290 => 107,  285 => 106,  283 => 105,  278 => 104,  276 => 103,  267 => 96,  261 => 95,  255 => 91,  253 => 90,  248 => 87,  246 => 86,  241 => 83,  239 => 82,  234 => 79,  232 => 78,  227 => 75,  225 => 74,  220 => 71,  218 => 70,  213 => 67,  211 => 66,  206 => 63,  204 => 62,  199 => 59,  197 => 58,  192 => 55,  190 => 54,  185 => 51,  183 => 50,  178 => 47,  176 => 46,  171 => 43,  169 => 42,  164 => 39,  161 => 38,  157 => 37,  148 => 33,  141 => 29,  133 => 24,  126 => 20,  122 => 19,  118 => 18,  109 => 14,  104 => 11,  94 => 10,  80 => 6,  76 => 5,  71 => 4,  61 => 3,  38 => 1,);
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
\t\t\t\t<section class=\"video-game-pres hide-2\">
\t\t\t\t\t<h3 class=\" hide-2\">{{ videoGame.titleReview }}</h3>
\t\t\t\t\t<h4 class=\"name hide-2\">Jeu : {{ videoGame.name }}</h4>
\t\t\t\t\t<h4 class=\"platform hide-2\">Sur : {{ videoGame.platform.platformName }}</h4>
\t\t\t\t\t<p class=\"hide-3\">
\t\t\t\t\t\t<span>Date de sortie</span>
\t\t\t\t\t\t: le
\t\t\t\t\t\t{{ videoGame.releaseDate | date('d F Y') }}
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\" hide-3\">
\t\t\t\t\t\t<span>Prix moyen</span>
\t\t\t\t\t\t:
\t\t\t\t\t\t{{ videoGame.averagePrice }}
\t\t\t\t\t\t€
\t\t\t\t\t</p>
\t\t\t\t\t<section class=\"video-game-box-zone\">
\t\t\t\t\t\t<img class=\"video-game-box\" src=\"{{ vich_uploader_asset(videoGame, 'imgBox') }}\" alt=\"boîte de {{ videoGame.name }}\">
\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"video-game-genders-box hide-3\">
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
\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"video-game-grades-box hide-3\">
\t\t\t\t\t\t<ul class=\"video-games-grades-list\">
\t\t\t\t\t\t\t<li class=\"video-game-grades-elmt\">
\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t<p class=\"graphics\">Graphismes</p>
\t\t\t\t\t\t\t\t\t{% if videoGame.graphicsGrade >= 75 %}
\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade verygood hide-3\">{{ videoGame.graphicsGrade }}</h4>
\t\t\t\t\t\t\t\t\t{% elseif videoGame.graphicsGrade <= 74 and videoGame.graphicsGrade >= 60 %}
\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade good hide-3\">{{ videoGame.graphicsGrade }}</h4>
\t\t\t\t\t\t\t\t\t{% elseif videoGame.graphicsGrade <= 59 and videoGame.graphicsGrade >= 50 %}
\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade medium hide-3\">{{ videoGame.graphicsGrade }}</h4>
\t\t\t\t\t\t\t\t\t{% elseif videoGame.graphicsGrade <= 49 and videoGame.graphicsGrade >= 35 %}
\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade notenough hide-3\">{{ videoGame.graphicsGrade }}</h4>
\t\t\t\t\t\t\t\t\t{% elseif videoGame.graphicsGrade <= 34 %}
\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade bad hide-3\">{{ videoGame.graphicsGrade }}</h4>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"video-game-grades-elmt\">
\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t<p class=\"gameplay\">Gameplay</p>
\t\t\t\t\t\t\t\t\t{% if videoGame.gameplayGrade >= 75 %}
\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade verygood hide-3\">{{ videoGame.gameplayGrade }}</h4>
\t\t\t\t\t\t\t\t\t{% elseif videoGame.gameplayrade <= 74 and videoGame.gameplayrade >= 60 %}
\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade good hide-3\">{{ videoGame.gameplayGrade }}</h4>
\t\t\t\t\t\t\t\t\t{% elseif videoGame.gameplayrade <= 59 and videoGame.gameplayrade >= 50 %}
\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade medium hide-3\">{{ videoGame.gameplayGrade }}</h4>
\t\t\t\t\t\t\t\t\t{% elseif videoGame.gameplayGrade <= 49 and videoGame.gameplayGrade >= 35 %}
\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade notenough hide-3\">{{ videoGame.gameplayGrade }}</h4>
\t\t\t\t\t\t\t\t\t{% elseif videoGame.gameplayGrade <= 34 %}
\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade bad hide-3\">{{ videoGame.gameplayGrade }}</h4>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"video-game-grades-elmt\">
\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t<p class=\"storyline\">Scénario</pc>
\t\t\t\t\t\t\t\t\t{% if videoGame.storylineGrade >= 75 %}
\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade verygood hide-3\">{{ videoGame.storylineGrade }}</h4>
\t\t\t\t\t\t\t\t\t{% elseif videoGame.storylineGrade <= 74 and videoGame.storylineGrade >= 60 %}
\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade good hide-3\">{{ videoGame.storylineGrade }}</h4>
\t\t\t\t\t\t\t\t\t{% elseif videoGame.storylineGrade <= 59 and videoGame.storylineGrade >= 50 %}
\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade medium hide-3\">{{ videoGame.storylineGrade }}</h4>
\t\t\t\t\t\t\t\t\t{% elseif videoGame.storylineGrade <= 49 and videoGame.storylineGrade >= 35 %}
\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade notenough hide-3\">{{ videoGame.storylineGrade }}</h4>
\t\t\t\t\t\t\t\t\t{% elseif videoGame.storylineGrade <= 34 %}
\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade bad hide-3\">{{ videoGame.storylineGrade }}</h4>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"video-game-grades-elmt\">
\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t<p class=\"execution\">Réalisation</p>
\t\t\t\t\t\t\t\t\t{% if videoGame.executionGrade >= 75 %}
\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade verygood hide-3\">{{ videoGame.executionGrade }}</h4>
\t\t\t\t\t\t\t\t\t{% elseif videoGame.executionGrade <= 74 and videoGame.executionGrade >= 60 %}
\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade good hide-3\">{{ videoGame.executionGrade }}</h4>
\t\t\t\t\t\t\t\t\t{% elseif videoGame.executionGrade <= 59 and videoGame.executionGrade >= 50 %}
\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade medium hide-3\">{{ videoGame.executionGrade }}</h4>
\t\t\t\t\t\t\t\t\t{% elseif videoGame.executionGrade <= 49 and videoGame.executionGrade >= 35 %}
\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade notenough hide-3\">{{ videoGame.executionGrade }}</h4>
\t\t\t\t\t\t\t\t\t{% elseif videoGame.executionGrade <= 34 %}
\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade bad hide-3\">{{ videoGame.executionGrade }}</h4>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"video-game-grades-elmt average\">
\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t<p class=\"perso-grade\">Note globale</p>
\t\t\t\t\t\t\t\t\t{% if videoGame.grade >= 75 %}
\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade verygood hide-3\">{{ videoGame.grade }}</h4>
\t\t\t\t\t\t\t\t\t{% elseif videoGame.grade <= 74 and videoGame.grade >= 60 %}
\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade good hide-3\">{{ videoGame.grade }}</h4>
\t\t\t\t\t\t\t\t\t{% elseif videoGame.grade <= 59 and videoGame.grade >= 50 %}
\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade medium hide-3\">{{ videoGame.grade }}</h4>
\t\t\t\t\t\t\t\t\t{% elseif videoGame.grade <= 49 and videoGame.grade >= 35 %}
\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade notenough hide-3\">{{ videoGame.grade }}</h4>
\t\t\t\t\t\t\t\t\t{% elseif videoGame.grade <= 34 %}
\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-grade bad hide-3\">{{ videoGame.grade }}</h4>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% if videoGame.averageUsersGrade != 0 %}
\t\t\t\t\t\t\t<li class=\"video-game-grades-elmt\">
\t\t\t\t\t\t\t\t<section>
\t\t\t\t\t\t\t\t\t<p class=\"users-grade\">Note utilisateurs</p>
\t\t\t\t\t\t\t\t\t{% if videoGame.averageUsersGrade >= 75 %}
\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-users-grade verygood hide-3\">{{ videoGame.averageUsersGrade }}</h4>
\t\t\t\t\t\t\t\t\t{% elseif videoGame.averageUsersGrade <= 74 and videoGame.averageUsersGrade >= 60 %}
\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-users-grade good hide-3\">{{ videoGame.averageUsersGrade }}</h4>
\t\t\t\t\t\t\t\t\t{% elseif videoGame.averageUsersGrade <= 59 and videoGame.averageUsersGrade >= 50 %}
\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-users-grade medium hide-3\">{{ videoGame.averageUsersGrade }}</h4>
\t\t\t\t\t\t\t\t\t{% elseif videoGame.averageUsersGrade <= 49 and videoGame.averageUsersGrade >= 35 %}
\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-users-grade notenough hide-3\">{{ videoGame.averageUsersGrade }}</h4>
\t\t\t\t\t\t\t\t\t{% elseif videoGame.averageUsersGrade <= 34 %}
\t\t\t\t\t\t\t\t\t\t<h4 class=\"video-game-users-grade bad hide-3\">{{ videoGame.averageUsersGrade }}</h4>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t</section>
\t\t\t\t</section>
\t\t\t</section>
\t\t\t{#
\t\t\t\t<section class=\"video-game-likes\">
\t\t\t\t\t<input type=\"checkbox\" id=\"thumb-rotate\">
\t\t\t\t\t<span class=\"material-symbols-outlined thumb\">
\t\t\t\t\t\tthumb_up
\t\t\t\t\t</span>
\t\t\t\t\t<h4>{{ videoGame.likes.nblikes }}</h4>
\t\t\t\t</section>
\t\t\t#}
\t\t\t<section class=\"video-game-content hide-3\">
\t\t\t\t<section class=\"video-game-description hide-4\">
\t\t\t\t\t<h4>Description du jeu :</h4>
\t\t\t\t\t<p>
\t\t\t\t\t\t{{ videoGame.description }}
\t\t\t\t\t</p>
\t\t\t\t</section>
\t\t\t\t<section class=\"video-game-advice hide-4\">
\t\t\t\t\t<h4>Avis et Critiques sur le jeu :</h4>
\t\t\t\t\t<p>
\t\t\t\t\t\t{{ videoGame.advice}}
\t\t\t\t\t</p>
\t\t\t\t</section>
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
