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

/* user/public-profile.html.twig */
class __TwigTemplate_3fd98e21cfee9afb8e317c6673bb94cd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/public-profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/public-profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/public-profile.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "User
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
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./css/profiles/public-profile.css"), "html", null, true);
        yield "\">
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
\t\t";
        // line 12
        if ((array_key_exists("nbRandomComments", $context) && ((isset($context["nbRandomComments"]) || array_key_exists("nbRandomComments", $context) ? $context["nbRandomComments"] : (function () { throw new RuntimeError('Variable "nbRandomComments" does not exist.', 12, $this->source); })()) == 2))) {
            // line 13
            yield "\t\t\t<article class=\"profile-public profile-public-with-comments hide\">
\t\t\t";
        } elseif ((        // line 14
array_key_exists("nbRandomComments", $context) && ((isset($context["nbRandomComments"]) || array_key_exists("nbRandomComments", $context) ? $context["nbRandomComments"] : (function () { throw new RuntimeError('Variable "nbRandomComments" does not exist.', 14, $this->source); })()) == 1))) {
            // line 15
            yield "\t\t\t\t<article class=\"profile-public profile-public-with-comment hide\">
\t\t\t\t";
        } else {
            // line 17
            yield "\t\t\t\t\t<article class=\"profile-public hide\">
\t\t\t\t\t";
        }
        // line 19
        yield "\t\t\t\t\t<section class=\"profile-public-head hide-2\">
\t\t\t\t\t\t<section class=\"profile-public-avatar hide-2\">
\t\t\t\t\t\t\t";
        // line 21
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "avatarNewFileName", [], "any", false, false, false, 21) != null)) {
            // line 22
            yield "\t\t\t\t\t\t\t\t<img src=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "avatarFile"), "html", null, true);
            yield "\" alt=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "username", [], "any", false, false, false, 22), "html", null, true);
            yield "\" class=\"avatar hide-2\">
\t\t\t\t\t\t\t";
        }
        // line 24
        yield "\t\t\t\t\t\t</section>
\t\t\t\t\t\t<section class=\"profile-public-info hide-2\">
\t\t\t\t\t\t\t";
        // line 26
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "privateFieldsDisponibility", [], "any", false, false, false, 26)) {
            // line 27
            yield "\t\t\t\t\t\t\t<h3>";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 27, $this->source); })()), "username", [], "any", false, false, false, 27), "html", null, true);
            yield "</h3>
\t\t\t\t\t\t\t<h4>";
            // line 28
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "surname", [], "any", false, false, false, 28), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t";
            // line 29
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "firstName", [], "any", false, false, false, 29), "html", null, true);
            yield "
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t";
        }
        // line 32
        yield "\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\tEmail:
\t\t\t\t\t\t\t\t<a href=\"mailto:";
        // line 34
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), "html", null, true);
        yield "\">";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), "html", null, true);
        yield "</a>
\t\t\t\t\t\t\t\t";
        // line 35
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35) > 1)) {
            // line 36
            yield "\t\t\t\t\t\t\t\t\t<span class=\"hidden-text\">* ces adresses mail sont fictives</span>
\t\t\t\t\t\t\t\t";
        }
        // line 38
        yield "\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t</section>
\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"profile-public-presentation-bloc hide-3\">
\t\t\t\t\t\t<div class=\"profile-public-presentation hide-3\">
\t\t\t\t\t\t\t<h4 class=\" hide-3\">Présentation</h4>
\t\t\t\t\t\t\t<h6>
\t\t\t\t\t\t\t\t<span>Genre :
\t\t\t\t\t\t\t\t</soan>
\t\t\t\t\t\t\t\t";
        // line 47
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 47, $this->source); })()), "gender", [], "any", false, false, false, 47), "html", null, true);
        yield "</h6>
\t\t\t\t\t\t\t<p>";
        // line 48
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 48, $this->source); })()), "presentation", [], "any", false, false, false, 48), "html", null, true);
        yield "</p>
\t\t\t\t\t\t</section>
\t\t\t\t\t\t<section class=\"profile-public-SG\">
\t\t\t\t\t\t\t<section class=\"profile-public-stats hide-3\">
\t\t\t\t\t\t\t\t<h4 class=\" hide-3\">Statistiques</h4>
\t\t\t\t\t\t\t\t<section class=\"profile-public-stats-zone hide-3\">
\t\t\t\t\t\t\t\t\t<section class=\"profile-public-stats-group hide-3\">
\t\t\t\t\t\t\t\t\t\t<h5>Nb commentaires</h5>
\t\t\t\t\t\t\t\t\t\t<h6>";
        // line 56
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 56, $this->source); })()), "nbComments", [], "any", false, false, false, 56), "html", null, true);
        yield "</h6>
\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t<section class=\"profile-public-stats-group hide-3\">
\t\t\t\t\t\t\t\t\t\t<h5>Nb Likes</h5>
\t\t\t\t\t\t\t\t\t\t<h6>";
        // line 60
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["nbLikes"]) || array_key_exists("nbLikes", $context) ? $context["nbLikes"] : (function () { throw new RuntimeError('Variable "nbLikes" does not exist.', 60, $this->source); })()), "html", null, true);
        yield "</h6>
\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t";
        // line 62
        if (array_key_exists("averageComments", $context)) {
            // line 63
            yield "\t\t\t\t\t\t\t\t\t\t<section class=\"profile-public-stats-group hide-3\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Note moyenne</h5>
\t\t\t\t\t\t\t\t\t\t\t<h6>";
            // line 65
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["averageComments"]) || array_key_exists("averageComments", $context) ? $context["averageComments"] : (function () { throw new RuntimeError('Variable "averageComments" does not exist.', 65, $this->source); })()), "html", null, true);
            yield "</h6>
\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t";
        }
        // line 68
        yield "\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t";
        // line 70
        if (array_key_exists("genders", $context)) {
            // line 71
            yield "\t\t\t\t\t\t\t<section class=\"profile-public-genders hide-3\">
\t\t\t\t\t\t\t\t<h4 class=\" hide-3\">Genres de Jeux Vidéo appréciés :</h4>
\t\t\t\t\t\t\t\t<section class=\"profile-public-genders-bloc\">
\t\t\t\t\t\t\t\t\t<ul class=\"profile-public-genders\">
\t\t\t\t\t\t\t\t\t\t";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["genders"]) || array_key_exists("genders", $context) ? $context["genders"] : (function () { throw new RuntimeError('Variable "genders" does not exist.', 75, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["gender"]) {
                // line 76
                yield "\t\t\t\t\t\t\t\t\t\t\t";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["gender"], "id", [], "any", false, false, false, 76) == 1)) {
                    // line 77
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender rpg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>";
                    // line 78
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["gender"], "genderName", [], "any", false, false, false, 78), "html", null, true);
                    yield "</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 80
$context["gender"], "id", [], "any", false, false, false, 80) == 2)) {
                    // line 81
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender avent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>";
                    // line 82
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["gender"], "genderName", [], "any", false, false, false, 82), "html", null, true);
                    yield "</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 84
$context["gender"], "id", [], "any", false, false, false, 84) == 3)) {
                    // line 85
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender fant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>";
                    // line 86
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["gender"], "genderName", [], "any", false, false, false, 86), "html", null, true);
                    yield "</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 88
$context["gender"], "id", [], "any", false, false, false, 88) == 4)) {
                    // line 89
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender crea\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>";
                    // line 90
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["gender"], "genderName", [], "any", false, false, false, 90), "html", null, true);
                    yield "</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 92
$context["gender"], "id", [], "any", false, false, false, 92) == 5)) {
                    // line 93
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender ow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>";
                    // line 94
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["gender"], "genderName", [], "any", false, false, false, 94), "html", null, true);
                    yield "</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 96
$context["gender"], "id", [], "any", false, false, false, 96) == 6)) {
                    // line 97
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender gestion\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>";
                    // line 98
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["gender"], "genderName", [], "any", false, false, false, 98), "html", null, true);
                    yield "</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 100
$context["gender"], "id", [], "any", false, false, false, 100) == 7)) {
                    // line 101
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender refl\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>";
                    // line 102
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["gender"], "genderName", [], "any", false, false, false, 102), "html", null, true);
                    yield "</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 104
$context["gender"], "id", [], "any", false, false, false, 104) == 8)) {
                    // line 105
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender sante\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>";
                    // line 106
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["gender"], "genderName", [], "any", false, false, false, 106), "html", null, true);
                    yield "</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 108
$context["gender"], "id", [], "any", false, false, false, 108) == 9)) {
                    // line 109
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender survie\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>";
                    // line 110
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["gender"], "genderName", [], "any", false, false, false, 110), "html", null, true);
                    yield "</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 112
$context["gender"], "id", [], "any", false, false, false, 112) == 10)) {
                    // line 113
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender tact\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>";
                    // line 114
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["gender"], "genderName", [], "any", false, false, false, 114), "html", null, true);
                    yield "</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 116
$context["gender"], "id", [], "any", false, false, false, 116) == 12)) {
                    // line 117
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender strat\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>";
                    // line 118
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["gender"], "genderName", [], "any", false, false, false, 118), "html", null, true);
                    yield "</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 120
$context["gender"], "id", [], "any", false, false, false, 120) == 13)) {
                    // line 121
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender chill\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>";
                    // line 122
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["gender"], "genderName", [], "any", false, false, false, 122), "html", null, true);
                    yield "</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 124
$context["gender"], "id", [], "any", false, false, false, 124) == 14)) {
                    // line 125
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender postapo\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>";
                    // line 126
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["gender"], "genderName", [], "any", false, false, false, 126), "html", null, true);
                    yield "</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 129
                yield "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gender'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            yield "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</section>
\t\t\t\t\t\t";
        }
        // line 135
        yield "\t\t\t\t\t</section>
\t\t\t\t\t";
        // line 136
        if (array_key_exists("randomComments", $context)) {
            // line 137
            yield "\t\t\t\t\t\t<section class=\"profile-public-randomcom hide-3\">
\t\t\t\t\t\t\t<h3 class=\"hide-3 comments\">Commentaires aléatoires</h3>
\t\t\t\t\t\t\t<section class=\"profile-public-randomcom-list hide-4\">
\t\t\t\t\t\t\t\t";
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["randomComments"]) || array_key_exists("randomComments", $context) ? $context["randomComments"] : (function () { throw new RuntimeError('Variable "randomComments" does not exist.', 140, $this->source); })()));
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
                // line 141
                yield "\t\t\t\t\t\t\t\t\t";
                yield from                 $this->loadTemplate("/comments/comment-profile-public.html.twig", "user/public-profile.html.twig", 141)->unwrap()->yield(CoreExtension::arrayMerge($context, ["comment" => $context["comment"]]));
                // line 142
                yield "\t\t\t\t\t\t\t\t";
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
            // line 143
            yield "\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</section>
\t\t\t\t\t";
        }
        // line 146
        yield "\t\t\t\t</article>
\t\t\t</main>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "user/public-profile.html.twig";
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
        return array (  445 => 146,  440 => 143,  426 => 142,  423 => 141,  406 => 140,  401 => 137,  399 => 136,  396 => 135,  389 => 130,  383 => 129,  377 => 126,  374 => 125,  372 => 124,  367 => 122,  364 => 121,  362 => 120,  357 => 118,  354 => 117,  352 => 116,  347 => 114,  344 => 113,  342 => 112,  337 => 110,  334 => 109,  332 => 108,  327 => 106,  324 => 105,  322 => 104,  317 => 102,  314 => 101,  312 => 100,  307 => 98,  304 => 97,  302 => 96,  297 => 94,  294 => 93,  292 => 92,  287 => 90,  284 => 89,  282 => 88,  277 => 86,  274 => 85,  272 => 84,  267 => 82,  264 => 81,  262 => 80,  257 => 78,  254 => 77,  251 => 76,  247 => 75,  241 => 71,  239 => 70,  235 => 68,  229 => 65,  225 => 63,  223 => 62,  218 => 60,  211 => 56,  200 => 48,  196 => 47,  185 => 38,  181 => 36,  179 => 35,  173 => 34,  169 => 32,  163 => 29,  159 => 28,  154 => 27,  152 => 26,  148 => 24,  140 => 22,  138 => 21,  134 => 19,  130 => 17,  126 => 15,  124 => 14,  121 => 13,  119 => 12,  116 => 11,  106 => 10,  92 => 7,  82 => 6,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}User
{% endblock %}

{% block head %}
\t<link rel=\"stylesheet\" href=\"{{ asset('./css/profiles/public-profile.css') }}\">
{% endblock %}

{% block body %}
\t<main>
\t\t{% if(nbRandomComments is defined and nbRandomComments == 2) %}
\t\t\t<article class=\"profile-public profile-public-with-comments hide\">
\t\t\t{% elseif(nbRandomComments is defined and nbRandomComments == 1) %}
\t\t\t\t<article class=\"profile-public profile-public-with-comment hide\">
\t\t\t\t{% else %}
\t\t\t\t\t<article class=\"profile-public hide\">
\t\t\t\t\t{% endif %}
\t\t\t\t\t<section class=\"profile-public-head hide-2\">
\t\t\t\t\t\t<section class=\"profile-public-avatar hide-2\">
\t\t\t\t\t\t\t{% if user.avatarNewFileName != null %}
\t\t\t\t\t\t\t\t<img src=\"{{ vich_uploader_asset(user, 'avatarFile') }}\" alt=\"{{ user.username }}\" class=\"avatar hide-2\">
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</section>
\t\t\t\t\t\t<section class=\"profile-public-info hide-2\">
\t\t\t\t\t\t\t{% if user.privateFieldsDisponibility %}
\t\t\t\t\t\t\t<h3>{{ user.username }}</h3>
\t\t\t\t\t\t\t<h4>{{ user.surname }}
\t\t\t\t\t\t\t\t{{ user.firstName }}
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\tEmail:
\t\t\t\t\t\t\t\t<a href=\"mailto:{{ user.email }}\">{{ user.email }}</a>
\t\t\t\t\t\t\t\t{% if(user.id > 1) %}
\t\t\t\t\t\t\t\t\t<span class=\"hidden-text\">* ces adresses mail sont fictives</span>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t</section>
\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"profile-public-presentation-bloc hide-3\">
\t\t\t\t\t\t<div class=\"profile-public-presentation hide-3\">
\t\t\t\t\t\t\t<h4 class=\" hide-3\">Présentation</h4>
\t\t\t\t\t\t\t<h6>
\t\t\t\t\t\t\t\t<span>Genre :
\t\t\t\t\t\t\t\t</soan>
\t\t\t\t\t\t\t\t{{ user.gender }}</h6>
\t\t\t\t\t\t\t<p>{{ user.presentation }}</p>
\t\t\t\t\t\t</section>
\t\t\t\t\t\t<section class=\"profile-public-SG\">
\t\t\t\t\t\t\t<section class=\"profile-public-stats hide-3\">
\t\t\t\t\t\t\t\t<h4 class=\" hide-3\">Statistiques</h4>
\t\t\t\t\t\t\t\t<section class=\"profile-public-stats-zone hide-3\">
\t\t\t\t\t\t\t\t\t<section class=\"profile-public-stats-group hide-3\">
\t\t\t\t\t\t\t\t\t\t<h5>Nb commentaires</h5>
\t\t\t\t\t\t\t\t\t\t<h6>{{ user.nbComments }}</h6>
\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t<section class=\"profile-public-stats-group hide-3\">
\t\t\t\t\t\t\t\t\t\t<h5>Nb Likes</h5>
\t\t\t\t\t\t\t\t\t\t<h6>{{ nbLikes }}</h6>
\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t{% if averageComments is defined %}
\t\t\t\t\t\t\t\t\t\t<section class=\"profile-public-stats-group hide-3\">
\t\t\t\t\t\t\t\t\t\t\t<h5>Note moyenne</h5>
\t\t\t\t\t\t\t\t\t\t\t<h6>{{ averageComments }}</h6>
\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t{% if genders is defined %}
\t\t\t\t\t\t\t<section class=\"profile-public-genders hide-3\">
\t\t\t\t\t\t\t\t<h4 class=\" hide-3\">Genres de Jeux Vidéo appréciés :</h4>
\t\t\t\t\t\t\t\t<section class=\"profile-public-genders-bloc\">
\t\t\t\t\t\t\t\t\t<ul class=\"profile-public-genders\">
\t\t\t\t\t\t\t\t\t\t{% for gender in genders %}
\t\t\t\t\t\t\t\t\t\t\t{% if gender.id == 1 %}
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender rpg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>{{ gender.genderName }}</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t{% elseif gender.id == 2 %}
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender avent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>{{ gender.genderName }}</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t{% elseif gender.id == 3 %}
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender fant\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>{{ gender.genderName }}</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t{% elseif gender.id == 4 %}
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender crea\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>{{ gender.genderName }}</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t{% elseif gender.id == 5 %}
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender ow\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>{{ gender.genderName }}</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t{% elseif gender.id == 6 %}
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender gestion\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>{{ gender.genderName }}</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t{% elseif gender.id == 7 %}
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender refl\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>{{ gender.genderName }}</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t{% elseif gender.id == 8 %}
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender sante\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>{{ gender.genderName }}</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t{% elseif gender.id == 9 %}
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender survie\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>{{ gender.genderName }}</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t{% elseif gender.id == 10 %}
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender tact\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>{{ gender.genderName }}</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t{% elseif gender.id == 12 %}
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender strat\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>{{ gender.genderName }}</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t{% elseif gender.id == 13 %}
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender chill\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>{{ gender.genderName }}</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t{% elseif gender.id == 14 %}
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"video-game-gender postapo\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>{{ gender.genderName }}</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</section>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</section>
\t\t\t\t\t{% if(randomComments is defined)  %}
\t\t\t\t\t\t<section class=\"profile-public-randomcom hide-3\">
\t\t\t\t\t\t\t<h3 class=\"hide-3 comments\">Commentaires aléatoires</h3>
\t\t\t\t\t\t\t<section class=\"profile-public-randomcom-list hide-4\">
\t\t\t\t\t\t\t\t{% for comment in randomComments %}
\t\t\t\t\t\t\t\t\t{% include '/comments/comment-profile-public.html.twig' with { 'comment' : comment } %}
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</section>
\t\t\t\t\t{% endif %}
\t\t\t\t</article>
\t\t\t</main>
\t\t{% endblock %}
", "user/public-profile.html.twig", "C:\\Users\\robocop\\Desktop\\REVISIONS WEB\\FIRST PROJECTS\\MyMetaverseV2.0\\MyMetaverse\\templates\\user\\public-profile.html.twig");
    }
}
