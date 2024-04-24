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

/* user/public-profile.html.twig */
class __TwigTemplate_2909fa3383c31f375099f3ae7e15a0e3 extends Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
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

        echo "User
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./css/profiles/public-profile.css"), "html", null, true);
        echo "\">
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
\t\t";
        // line 12
        if ((array_key_exists("nbRandomComments", $context) && ((isset($context["nbRandomComments"]) || array_key_exists("nbRandomComments", $context) ? $context["nbRandomComments"] : (function () { throw new RuntimeError('Variable "nbRandomComments" does not exist.', 12, $this->source); })()) == 2))) {
            // line 13
            echo "\t\t\t<article class=\"profile-public profile-public-with-comments hide\">
\t\t\t";
        } elseif ((        // line 14
array_key_exists("nbRandomComments", $context) && ((isset($context["nbRandomComments"]) || array_key_exists("nbRandomComments", $context) ? $context["nbRandomComments"] : (function () { throw new RuntimeError('Variable "nbRandomComments" does not exist.', 14, $this->source); })()) == 1))) {
            // line 15
            echo "\t\t\t\t<article class=\"profile-public profile-public-with-comment hide\">
\t\t\t\t";
        } else {
            // line 17
            echo "\t\t\t\t\t<article class=\"profile-public hide\">
\t\t\t\t\t";
        }
        // line 19
        echo "\t\t\t\t\t<section class=\"profile-public-head hide-2\">
\t\t\t\t\t\t<div class=\"profile-public-avatar hide-2\">
\t\t\t\t\t\t\t";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "avatarNewFileName", [], "any", false, false, false, 21) != null)) {
            // line 22
            echo "\t\t\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "avatarFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "username", [], "any", false, false, false, 22), "html", null, true);
            echo "\" class=\"avatar hide-2\">
\t\t\t\t\t\t\t";
        }
        // line 24
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"profile-public-info hide-2\">
\t\t\t\t\t\t\t<h3>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "username", [], "any", false, false, false, 26), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t\t<h4>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 27, $this->source); })()), "surname", [], "any", false, false, false, 27), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "firstName", [], "any", false, false, false, 28), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\tEmail:
\t\t\t\t\t\t\t\t<a href=\"mailto:";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, false, 31), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, false, 31), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t";
        // line 32
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32) > 1)) {
            // line 33
            echo "\t\t\t\t\t\t\t\t\t<span class=\"hidden-text\">* ces adresses mail sont fictives</span>
\t\t\t\t\t\t\t\t";
        }
        // line 35
        echo "\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"profile-public-presentation-bloc hide-3\">
\t\t\t\t\t\t<div class=\"profile-public-presentation hide-3\">
\t\t\t\t\t\t\t<h4>Présentation</h4>
\t\t\t\t\t\t\t<h6>
\t\t\t\t\t\t\t\t<span>Genre :
\t\t\t\t\t\t\t\t</soan>
\t\t\t\t\t\t\t\t";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 44, $this->source); })()), "gender", [], "any", false, false, false, 44), "html", null, true);
        echo "</h6>
\t\t\t\t\t\t\t<p>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 45, $this->source); })()), "presentation", [], "any", false, false, false, 45), "html", null, true);
        echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"profile-public-stats hide-3\">
\t\t\t\t\t\t\t<h4 class=\" hide-3\">Statistiques</h4>
\t\t\t\t\t\t\t<div class=\"profile-public-stats-zone hide-3\">
\t\t\t\t\t\t\t\t<div class=\"profile-public-stats-group hide-3\">
\t\t\t\t\t\t\t\t\t<h5>Nb commentaires</h5>
\t\t\t\t\t\t\t\t\t<h6>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "nbComments", [], "any", false, false, false, 52), "html", null, true);
        echo "</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"profile-public-stats-group hide-3\">
\t\t\t\t\t\t\t\t\t<h5>Nb Likes</h5>
\t\t\t\t\t\t\t\t\t<h6>";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["nbLikes"]) || array_key_exists("nbLikes", $context) ? $context["nbLikes"] : (function () { throw new RuntimeError('Variable "nbLikes" does not exist.', 56, $this->source); })()), "html", null, true);
        echo "</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 58
        if (array_key_exists("averageComments", $context)) {
            // line 59
            echo "\t\t\t\t\t\t\t\t\t<div class=\"profile-public-stats-group hide-3\">
\t\t\t\t\t\t\t\t\t\t<h5>Note moyenne</h5>
\t\t\t\t\t\t\t\t\t\t<h6>";
            // line 61
            echo twig_escape_filter($this->env, (isset($context["averageComments"]) || array_key_exists("averageComments", $context) ? $context["averageComments"] : (function () { throw new RuntimeError('Variable "averageComments" does not exist.', 61, $this->source); })()), "html", null, true);
            echo "</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 64
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t";
        // line 67
        if (array_key_exists("randomComments", $context)) {
            // line 68
            echo "\t\t\t\t\t\t<section class=\"profile-public-randomcom hide-3\">
\t\t\t\t\t\t\t<h3 class=\"hide-3 comments\">Commentaires aléatoires</h3>
\t\t\t\t\t\t\t<div class=\"profile-public-randomcom-list hide-4\">
\t\t\t\t\t\t\t\t";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["randomComments"]) || array_key_exists("randomComments", $context) ? $context["randomComments"] : (function () { throw new RuntimeError('Variable "randomComments" does not exist.', 71, $this->source); })()));
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
                // line 72
                echo "\t\t\t\t\t\t\t\t\t";
                $this->loadTemplate("/comments/comment-profile-public.html.twig", "user/public-profile.html.twig", 72)->display(twig_array_merge($context, ["comment" => $context["comment"]]));
                // line 73
                echo "\t\t\t\t\t\t\t\t";
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
            // line 74
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</section>
\t\t\t\t\t";
        }
        // line 77
        echo "\t\t\t\t</article>
\t\t\t</main>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  275 => 77,  270 => 74,  256 => 73,  253 => 72,  236 => 71,  231 => 68,  229 => 67,  224 => 64,  218 => 61,  214 => 59,  212 => 58,  207 => 56,  200 => 52,  190 => 45,  186 => 44,  175 => 35,  171 => 33,  169 => 32,  163 => 31,  157 => 28,  153 => 27,  149 => 26,  145 => 24,  137 => 22,  135 => 21,  131 => 19,  127 => 17,  123 => 15,  121 => 14,  118 => 13,  116 => 12,  113 => 11,  103 => 10,  90 => 7,  80 => 6,  60 => 3,  37 => 1,);
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
\t\t\t\t\t\t<div class=\"profile-public-avatar hide-2\">
\t\t\t\t\t\t\t{% if user.avatarNewFileName != null %}
\t\t\t\t\t\t\t\t<img src=\"{{ vich_uploader_asset(user, 'avatarFile') }}\" alt=\"{{ user.username }}\" class=\"avatar hide-2\">
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"profile-public-info hide-2\">
\t\t\t\t\t\t\t<h3>{{ user.username }}</h3>
\t\t\t\t\t\t\t<h4>{{ user.surname }}
\t\t\t\t\t\t\t\t{{ user.firstName }}</h4>
\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\tEmail:
\t\t\t\t\t\t\t\t<a href=\"mailto:{{ user.email }}\">{{ user.email }}</a>
\t\t\t\t\t\t\t\t{% if(user.id > 1) %}
\t\t\t\t\t\t\t\t\t<span class=\"hidden-text\">* ces adresses mail sont fictives</span>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"profile-public-presentation-bloc hide-3\">
\t\t\t\t\t\t<div class=\"profile-public-presentation hide-3\">
\t\t\t\t\t\t\t<h4>Présentation</h4>
\t\t\t\t\t\t\t<h6>
\t\t\t\t\t\t\t\t<span>Genre :
\t\t\t\t\t\t\t\t</soan>
\t\t\t\t\t\t\t\t{{ user.gender }}</h6>
\t\t\t\t\t\t\t<p>{{ user.presentation }}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"profile-public-stats hide-3\">
\t\t\t\t\t\t\t<h4 class=\" hide-3\">Statistiques</h4>
\t\t\t\t\t\t\t<div class=\"profile-public-stats-zone hide-3\">
\t\t\t\t\t\t\t\t<div class=\"profile-public-stats-group hide-3\">
\t\t\t\t\t\t\t\t\t<h5>Nb commentaires</h5>
\t\t\t\t\t\t\t\t\t<h6>{{ user.nbComments }}</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"profile-public-stats-group hide-3\">
\t\t\t\t\t\t\t\t\t<h5>Nb Likes</h5>
\t\t\t\t\t\t\t\t\t<h6>{{ nbLikes }}</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% if averageComments is defined %}
\t\t\t\t\t\t\t\t\t<div class=\"profile-public-stats-group hide-3\">
\t\t\t\t\t\t\t\t\t\t<h5>Note moyenne</h5>
\t\t\t\t\t\t\t\t\t\t<h6>{{ averageComments }}</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t\t{% if(randomComments is defined)  %}
\t\t\t\t\t\t<section class=\"profile-public-randomcom hide-3\">
\t\t\t\t\t\t\t<h3 class=\"hide-3 comments\">Commentaires aléatoires</h3>
\t\t\t\t\t\t\t<div class=\"profile-public-randomcom-list hide-4\">
\t\t\t\t\t\t\t\t{% for comment in randomComments %}
\t\t\t\t\t\t\t\t\t{% include '/comments/comment-profile-public.html.twig' with { 'comment' : comment } %}
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</section>
\t\t\t\t\t{% endif %}
\t\t\t\t</article>
\t\t\t</main>
\t\t{% endblock %}
", "user/public-profile.html.twig", "C:\\Users\\robocop\\Desktop\\REVISIONS WEB\\FIRST PROJECTS\\MyMetaverseV2.0\\MyMetaverse\\templates\\user\\public-profile.html.twig");
    }
}
