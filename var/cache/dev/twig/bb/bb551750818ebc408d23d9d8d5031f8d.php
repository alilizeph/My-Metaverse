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

/* videogames/videogame-list.html.twig */
class __TwigTemplate_b6270f306c75c2dc6965bce4712b0e8a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
            'vglist' => [$this, 'block_vglist'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "videogames/videogame-list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "videogames/videogame-list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "videogames/videogame-list.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Liste des jeux vidéo
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 6
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 7
        yield "\t<link rel=\"stylesheet\" href=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./css/videogames/video-game-card-list.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        yield "\t<main>
\t";
        // line 70
        yield "
\t\t<section id=\"video-game-list\">
\t\t\t";
        // line 72
        if (array_key_exists("gender_name", $context)) {
            // line 73
            yield "\t\t\t\t<h2 class=\"title\">
\t\t\t\t\tListe des critiques des jeux 
\t\t\t\t\t";
            // line 75
            if (((isset($context["gender_name"]) || array_key_exists("gender_name", $context) ? $context["gender_name"] : (function () { throw new RuntimeError('Variable "gender_name" does not exist.', 75, $this->source); })()) == "RPG")) {
                // line 76
                yield "\t\t\t\t\t<span class=\"videogame-gender rpg\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["gender_name"]) || array_key_exists("gender_name", $context) ? $context["gender_name"] : (function () { throw new RuntimeError('Variable "gender_name" does not exist.', 76, $this->source); })()), "html", null, true);
                yield "</span>
\t\t\t\t\t";
            } elseif ((            // line 77
(isset($context["gender_name"]) || array_key_exists("gender_name", $context) ? $context["gender_name"] : (function () { throw new RuntimeError('Variable "gender_name" does not exist.', 77, $this->source); })()) == "Aventure")) {
                // line 78
                yield "\t\t\t\t\t\t<span class=\"videogame-gender avent\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["gender_name"]) || array_key_exists("gender_name", $context) ? $context["gender_name"] : (function () { throw new RuntimeError('Variable "gender_name" does not exist.', 78, $this->source); })()), "html", null, true);
                yield "</span>
\t\t\t\t\t";
            } elseif ((            // line 79
(isset($context["gender_name"]) || array_key_exists("gender_name", $context) ? $context["gender_name"] : (function () { throw new RuntimeError('Variable "gender_name" does not exist.', 79, $this->source); })()) == "Fantastique")) {
                // line 80
                yield "\t\t\t\t\t\t<span class=\"videogame-gender fant\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["gender_name"]) || array_key_exists("gender_name", $context) ? $context["gender_name"] : (function () { throw new RuntimeError('Variable "gender_name" does not exist.', 80, $this->source); })()), "html", null, true);
                yield "</span>
\t\t\t\t\t";
            } elseif ((            // line 81
(isset($context["gender_name"]) || array_key_exists("gender_name", $context) ? $context["gender_name"] : (function () { throw new RuntimeError('Variable "gender_name" does not exist.', 81, $this->source); })()) == "Création")) {
                // line 82
                yield "\t\t\t\t\t\t<span class=\"videogame-gender crea\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["gender_name"]) || array_key_exists("gender_name", $context) ? $context["gender_name"] : (function () { throw new RuntimeError('Variable "gender_name" does not exist.', 82, $this->source); })()), "html", null, true);
                yield "</span>
\t\t\t\t\t";
            } elseif ((            // line 83
(isset($context["gender_name"]) || array_key_exists("gender_name", $context) ? $context["gender_name"] : (function () { throw new RuntimeError('Variable "gender_name" does not exist.', 83, $this->source); })()) == "Open World")) {
                // line 84
                yield "\t\t\t\t\t\t<span class=\"videogame-gender ow\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["gender_name"]) || array_key_exists("gender_name", $context) ? $context["gender_name"] : (function () { throw new RuntimeError('Variable "gender_name" does not exist.', 84, $this->source); })()), "html", null, true);
                yield "</span>
\t\t\t\t\t";
            } elseif ((            // line 85
(isset($context["gender_name"]) || array_key_exists("gender_name", $context) ? $context["gender_name"] : (function () { throw new RuntimeError('Variable "gender_name" does not exist.', 85, $this->source); })()) == "Gestion")) {
                // line 86
                yield "\t\t\t\t\t\t<span class=\"videogame-gender gestion\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["gender_name"]) || array_key_exists("gender_name", $context) ? $context["gender_name"] : (function () { throw new RuntimeError('Variable "gender_name" does not exist.', 86, $this->source); })()), "html", null, true);
                yield "</span>
\t\t\t\t\t";
            } elseif ((            // line 87
(isset($context["gender_name"]) || array_key_exists("gender_name", $context) ? $context["gender_name"] : (function () { throw new RuntimeError('Variable "gender_name" does not exist.', 87, $this->source); })()) == "Réflexion")) {
                // line 88
                yield "\t\t\t\t\t\t<span class=\"videogame-gender refl\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["gender_name"]) || array_key_exists("gender_name", $context) ? $context["gender_name"] : (function () { throw new RuntimeError('Variable "gender_name" does not exist.', 88, $this->source); })()), "html", null, true);
                yield "</span>
\t\t\t\t\t";
            } elseif ((            // line 89
(isset($context["gender_name"]) || array_key_exists("gender_name", $context) ? $context["gender_name"] : (function () { throw new RuntimeError('Variable "gender_name" does not exist.', 89, $this->source); })()) == "Santé")) {
                // line 90
                yield "\t\t\t\t\t\t<span class=\"videogame-gender sante\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["gender_name"]) || array_key_exists("gender_name", $context) ? $context["gender_name"] : (function () { throw new RuntimeError('Variable "gender_name" does not exist.', 90, $this->source); })()), "html", null, true);
                yield "</span>
\t\t\t\t\t";
            } elseif ((            // line 91
(isset($context["gender_name"]) || array_key_exists("gender_name", $context) ? $context["gender_name"] : (function () { throw new RuntimeError('Variable "gender_name" does not exist.', 91, $this->source); })()) == "Survie")) {
                // line 92
                yield "\t\t\t\t\t\t<span class=\"videogame-gender survie\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["gender_name"]) || array_key_exists("gender_name", $context) ? $context["gender_name"] : (function () { throw new RuntimeError('Variable "gender_name" does not exist.', 92, $this->source); })()), "html", null, true);
                yield "</span>
\t\t\t\t\t";
            } elseif ((            // line 93
(isset($context["gender_name"]) || array_key_exists("gender_name", $context) ? $context["gender_name"] : (function () { throw new RuntimeError('Variable "gender_name" does not exist.', 93, $this->source); })()) == "Tactique")) {
                // line 94
                yield "\t\t\t\t\t\t<span class=\"videogame-gender tact\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["gender_name"]) || array_key_exists("gender_name", $context) ? $context["gender_name"] : (function () { throw new RuntimeError('Variable "gender_name" does not exist.', 94, $this->source); })()), "html", null, true);
                yield "</span>
\t\t\t\t\t";
            } elseif ((            // line 95
(isset($context["gender_name"]) || array_key_exists("gender_name", $context) ? $context["gender_name"] : (function () { throw new RuntimeError('Variable "gender_name" does not exist.', 95, $this->source); })()) == "Stratégie")) {
                // line 96
                yield "\t\t\t\t\t\t<span class=\"videogame-gender strat\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["gender_name"]) || array_key_exists("gender_name", $context) ? $context["gender_name"] : (function () { throw new RuntimeError('Variable "gender_name" does not exist.', 96, $this->source); })()), "html", null, true);
                yield "</span>
\t\t\t\t\t";
            } elseif ((            // line 97
(isset($context["gender_name"]) || array_key_exists("gender_name", $context) ? $context["gender_name"] : (function () { throw new RuntimeError('Variable "gender_name" does not exist.', 97, $this->source); })()) == "Chill")) {
                // line 98
                yield "\t\t\t\t\t\t<span class=\"videogame-gender chill\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["gender_name"]) || array_key_exists("gender_name", $context) ? $context["gender_name"] : (function () { throw new RuntimeError('Variable "gender_name" does not exist.', 98, $this->source); })()), "html", null, true);
                yield "</span>
\t\t\t\t\t";
            } elseif ((            // line 99
(isset($context["gender_name"]) || array_key_exists("gender_name", $context) ? $context["gender_name"] : (function () { throw new RuntimeError('Variable "gender_name" does not exist.', 99, $this->source); })()) == "Écologie")) {
                // line 100
                yield "\t\t\t\t\t\t<span class=\"videogame-gender ecolo\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["gender_name"]) || array_key_exists("gender_name", $context) ? $context["gender_name"] : (function () { throw new RuntimeError('Variable "gender_name" does not exist.', 100, $this->source); })()), "html", null, true);
                yield "</span>
\t\t\t\t\t";
            } else {
                // line 102
                yield "\t\t\t\t\t<span class=\"videogame-gender postapo\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["gender_name"]) || array_key_exists("gender_name", $context) ? $context["gender_name"] : (function () { throw new RuntimeError('Variable "gender_name" does not exist.', 102, $this->source); })()), "html", null, true);
                yield "</span>
\t\t\t\t\t";
            }
            // line 104
            yield "\t\t\t\t</h2>
\t\t\t\t<h5 class=\"link\"><a href=\"";
            // line 105
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videogames_list");
            yield "\">Voir tous les jeux vidéo maintenant</a><h5>
\t\t\t";
        } else {
            // line 107
            yield "\t\t\t\t<h2 class=\"title\">Liste de toutes les critiques<h2>
\t\t\t";
        }
        // line 109
        yield "\t\t\t";
        yield from $this->unwrap()->yieldBlock('vglist', $context, $blocks);
        // line 112
        yield "\t\t</section>
\t</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 109
    public function block_vglist($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vglist"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vglist"));

        // line 110
        yield "\t\t\t\t";
        yield from         $this->loadTemplate("videogames/videogame-list-partial.html.twig", "videogames/videogame-list.html.twig", 110)->unwrap()->yield(CoreExtension::arrayMerge($context, ["videoGames" => (isset($context["videoGames"]) || array_key_exists("videoGames", $context) ? $context["videoGames"] : (function () { throw new RuntimeError('Variable "videoGames" does not exist.', 110, $this->source); })())]));
        // line 111
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
        return "videogames/videogame-list.html.twig";
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
        return array (  269 => 111,  266 => 110,  256 => 109,  243 => 112,  240 => 109,  236 => 107,  231 => 105,  228 => 104,  222 => 102,  216 => 100,  214 => 99,  209 => 98,  207 => 97,  202 => 96,  200 => 95,  195 => 94,  193 => 93,  188 => 92,  186 => 91,  181 => 90,  179 => 89,  174 => 88,  172 => 87,  167 => 86,  165 => 85,  160 => 84,  158 => 83,  153 => 82,  151 => 81,  146 => 80,  144 => 79,  139 => 78,  137 => 77,  132 => 76,  130 => 75,  126 => 73,  124 => 72,  120 => 70,  117 => 10,  107 => 9,  93 => 7,  83 => 6,  62 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}Liste des jeux vidéo
{% endblock %}
{% block  head %}
\t<link rel=\"stylesheet\" href=\"{{ asset('./css/videogames/video-game-card-list.css') }}\">
{% endblock %}
{% block body %}
\t<main>
\t{#\t
\t\tSOME FILTERS MAYBE I'LL RETURN ON IT SOON BUT I HAVE ALREADY DO FILTER WITH GENDERS AND I THINK IT'S ENOUGH
\t\t<nav class=\"sort\">
\t\t\t<h5>Trier la liste</h5>
\t\t\t<section class=\"sort-group\">
\t\t\t\t<input type=\"checkbox\" name=\"alpha\" id=\"alpha\">
\t\t\t\t<label for=\"alpha\">Par ordre alphabétique</label>
\t\t\t</section>
\t\t\t<section class=\"sort-group\">
\t\t\t\t<input type=\"checkbox\" name=\"grade\" id=\"grade\">
\t\t\t\t<label for=\"grade\">Par ordre des notes</label>
\t\t\t</section>
\t\t\t<section class=\"sort-group\">
\t\t\t\t<input type=\"checkbox\" name=\"price\" id=\"price\">
\t\t\t\t<label for=\"price\">Par ordre de prix</label>
\t\t\t</section>
\t\t\t<section class=\"sort-group\">
\t\t\t\t<input type=\"checkbox\" name=\"random\" id=\"random\">
\t\t\t\t<label for=\"random\">Par aléatoire</label>
\t\t\t</section>
\t\t</nav>
\t\t<script type=\"text/javascript\">
\t\t\t\t\tlet alphaSort = {{ alpha ? 'false' : 'true' }};
\t\t\t\t\tdocument.getElementById('alpha').addEventListener('change', () => {
\t\t\t\t\t\tif(!alphaSort)
\t\t\t\t\t\t\talphaSort = true;
\t\t\t\t\t\telse
\t\t\t\t\t\t\talphaSort = false;

\t\t\t\t\t\tfetch('/videogames', {
\t\t\t\t\t\t\tmethod: 'POST',
\t\t\t\t\t\t\tbody: JSON.stringify({ alpha: alphaSort }),
\t\t\t\t\t\t\theaders: {
\t\t\t\t\t\t\t\t'Content-Type': 'application/json'
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})
\t\t\t\t\t\t.then(response => {
\t\t\t\t\t\t\tif (response.ok) {
\t\t\t\t\t\t\t\treturn response.text();
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tconsole.error('Erreur lors de la mise à jour de la variable.');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})
\t\t\t\t\t\t.then(data => {
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tdocument.querySelector('#video-game-list').innerHTML = data;
\t\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t</script>
\t\t<section id=\"video-game-list\">
\t\t\t{% block vglist %}
\t\t\t\t{% if alpha %}
\t\t\t\t\t{% include 'videogames/videogame-list-partial.html.twig' with { 'videoGames': alphaSortedVideoGames } %}
\t\t\t\t{% else %}
\t\t\t\t\t{% include 'videogames/videogame-list-partial.html.twig' with { 'videoGames': videoGames } %}
\t\t\t\t{% endif %}
\t\t\t{% endblock %}
\t\t</section>
\t#}

\t\t<section id=\"video-game-list\">
\t\t\t{% if gender_name is defined %}
\t\t\t\t<h2 class=\"title\">
\t\t\t\t\tListe des critiques des jeux 
\t\t\t\t\t{% if gender_name == 'RPG' %}
\t\t\t\t\t<span class=\"videogame-gender rpg\">{{ gender_name }}</span>
\t\t\t\t\t{% elseif gender_name == 'Aventure' %}
\t\t\t\t\t\t<span class=\"videogame-gender avent\">{{ gender_name }}</span>
\t\t\t\t\t{% elseif gender_name == 'Fantastique' %}
\t\t\t\t\t\t<span class=\"videogame-gender fant\">{{ gender_name }}</span>
\t\t\t\t\t{% elseif gender_name == 'Création' %}
\t\t\t\t\t\t<span class=\"videogame-gender crea\">{{ gender_name }}</span>
\t\t\t\t\t{% elseif gender_name == 'Open World' %}
\t\t\t\t\t\t<span class=\"videogame-gender ow\">{{ gender_name }}</span>
\t\t\t\t\t{% elseif gender_name == 'Gestion' %}
\t\t\t\t\t\t<span class=\"videogame-gender gestion\">{{ gender_name }}</span>
\t\t\t\t\t{% elseif gender_name == 'Réflexion' %}
\t\t\t\t\t\t<span class=\"videogame-gender refl\">{{ gender_name }}</span>
\t\t\t\t\t{% elseif gender_name == 'Santé' %}
\t\t\t\t\t\t<span class=\"videogame-gender sante\">{{ gender_name }}</span>
\t\t\t\t\t{% elseif gender_name == 'Survie' %}
\t\t\t\t\t\t<span class=\"videogame-gender survie\">{{ gender_name }}</span>
\t\t\t\t\t{% elseif gender_name == 'Tactique' %}
\t\t\t\t\t\t<span class=\"videogame-gender tact\">{{ gender_name }}</span>
\t\t\t\t\t{% elseif gender_name == 'Stratégie' %}
\t\t\t\t\t\t<span class=\"videogame-gender strat\">{{ gender_name }}</span>
\t\t\t\t\t{% elseif gender_name == 'Chill' %}
\t\t\t\t\t\t<span class=\"videogame-gender chill\">{{ gender_name }}</span>
\t\t\t\t\t{% elseif gender_name == 'Écologie' %}
\t\t\t\t\t\t<span class=\"videogame-gender ecolo\">{{ gender_name }}</span>
\t\t\t\t\t{% else %}
\t\t\t\t\t<span class=\"videogame-gender postapo\">{{ gender_name }}</span>
\t\t\t\t\t{% endif %}
\t\t\t\t</h2>
\t\t\t\t<h5 class=\"link\"><a href=\"{{ path('videogames_list')}}\">Voir tous les jeux vidéo maintenant</a><h5>
\t\t\t{% else %}
\t\t\t\t<h2 class=\"title\">Liste de toutes les critiques<h2>
\t\t\t{% endif %}
\t\t\t{% block vglist %}
\t\t\t\t{% include 'videogames/videogame-list-partial.html.twig' with { 'videoGames': videoGames } %}
\t\t\t{% endblock %}
\t\t</section>
\t</main>
{% endblock %}
", "videogames/videogame-list.html.twig", "C:\\Users\\robocop\\Desktop\\REVISIONS WEB\\FIRST PROJECTS\\MyMetaverseV2.0\\MyMetaverse\\templates\\videogames\\videogame-list.html.twig");
    }
}
