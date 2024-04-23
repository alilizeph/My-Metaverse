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

/* comments/comment-profile-public.html.twig */
class __TwigTemplate_3233b6faf74b685b6e08f4e94e992371 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comments/comment-profile-public.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comments/comment-profile-public.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 2
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./css/comments/comment-public-profile.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 6, $this->source); })()), "grade", [], "any", false, false, false, 6) >= 75) && (twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 6, $this->source); })()), "grade", [], "any", false, false, false, 6) <= 100))) {
            // line 7
            echo "        <article class=\"profile-public-randomcom-elmt comment-card verygood-comment hide\">
    ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 8
(isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 8, $this->source); })()), "grade", [], "any", false, false, false, 8) >= 60) && (twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 8, $this->source); })()), "grade", [], "any", false, false, false, 8) <= 74))) {
            // line 9
            echo "        <article class=\"profile-public-randomcom-elmt comment-card good-comment hide\">
    ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 10
(isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 10, $this->source); })()), "grade", [], "any", false, false, false, 10) >= 50) && (twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 10, $this->source); })()), "grade", [], "any", false, false, false, 10) <= 59))) {
            // line 11
            echo "        <article class=\"profile-public-randomcom-elmt comment-card medium-comment hide\">
    ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 12
(isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 12, $this->source); })()), "grade", [], "any", false, false, false, 12) >= 35) && (twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 12, $this->source); })()), "grade", [], "any", false, false, false, 12) <= 49))) {
            // line 13
            echo "        <article class=\"profile-public-randomcom-elmt comment-card notenough-comment hide\">
    ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 14
(isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 14, $this->source); })()), "grade", [], "any", false, false, false, 14) >= 0) && (twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 14, $this->source); })()), "grade", [], "any", false, false, false, 14) <= 34))) {
            // line 15
            echo "        <article class=\"profile-public-randomcom-elmt comment-card bad-comment hide\">
    ";
        }
        // line 17
        echo "            ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 17, $this->source); })()), "grade", [], "any", false, false, false, 17) >= 75) && (twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 17, $this->source); })()), "grade", [], "any", false, false, false, 17) <= 100))) {
            // line 18
            echo "                <section class=\"comment-head hide-2 verygood-comment-head\">
            ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 19
(isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 19, $this->source); })()), "grade", [], "any", false, false, false, 19) >= 60) && (twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 19, $this->source); })()), "grade", [], "any", false, false, false, 19) <= 74))) {
            // line 20
            echo "                <section class=\"comment-head hide-2 good-comment-head\">
            ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 21
(isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 21, $this->source); })()), "grade", [], "any", false, false, false, 21) >= 50) && (twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 21, $this->source); })()), "grade", [], "any", false, false, false, 21) <= 59))) {
            // line 22
            echo "                <section class=\"comment-head hide-2 medium-comment-head\">
            ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 23
(isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 23, $this->source); })()), "grade", [], "any", false, false, false, 23) >= 35) && (twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 23, $this->source); })()), "grade", [], "any", false, false, false, 23) <= 49))) {
            // line 24
            echo "                <section class=\"comment-head hide-2 notenough-comment-head\">
            ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 25
(isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 25, $this->source); })()), "grade", [], "any", false, false, false, 25) >= 0) && (twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 25, $this->source); })()), "grade", [], "any", false, false, false, 25) <= 34))) {
            // line 26
            echo "                <section class=\"comment-head hide-2 bad-comment-head\">
            ";
        }
        // line 28
        echo "                <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset(twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 28, $this->source); })()), "videoGame", [], "any", false, false, false, 28), "imgTheme"), "html", null, true);
        echo "\" alt=\"\" class=\"video-game-theme\">
            </section>
            ";
        // line 30
        if (((twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 30, $this->source); })()), "grade", [], "any", false, false, false, 30) >= 75) && (twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 30, $this->source); })()), "grade", [], "any", false, false, false, 30) <= 100))) {
            // line 31
            echo "                <h4 class=\"comment-grade verygood hide-2\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 31, $this->source); })()), "grade", [], "any", false, false, false, 31), "html", null, true);
            echo "</h4>
            ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 32
(isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 32, $this->source); })()), "grade", [], "any", false, false, false, 32) >= 60) && (twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 32, $this->source); })()), "grade", [], "any", false, false, false, 32) <= 74))) {
            // line 33
            echo "                <h4 class=\"comment-grade good hide-2\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 33, $this->source); })()), "grade", [], "any", false, false, false, 33), "html", null, true);
            echo "</h4>
            ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 34
(isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 34, $this->source); })()), "grade", [], "any", false, false, false, 34) >= 50) && (twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 34, $this->source); })()), "grade", [], "any", false, false, false, 34) <= 59))) {
            // line 35
            echo "                <h4 class=\"comment-grade medium hide-2\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 35, $this->source); })()), "grade", [], "any", false, false, false, 35), "html", null, true);
            echo "</h4>
            ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 36
(isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 36, $this->source); })()), "grade", [], "any", false, false, false, 36) >= 35) && (twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 36, $this->source); })()), "grade", [], "any", false, false, false, 36) <= 49))) {
            // line 37
            echo "                <h4 class=\"comment-grade notenough hide-2\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 37, $this->source); })()), "grade", [], "any", false, false, false, 37), "html", null, true);
            echo "</h4>
            ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 38
(isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 38, $this->source); })()), "grade", [], "any", false, false, false, 38) >= 0) && (twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 38, $this->source); })()), "grade", [], "any", false, false, false, 38) <= 34))) {
            // line 39
            echo "                <h4 class=\"comment-grade bad hide-2\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 39, $this->source); })()), "grade", [], "any", false, false, false, 39), "html", null, true);
            echo "</h4>
            ";
        }
        // line 41
        echo "            <section class=\"comment-body hide-2\">
                <h5>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 42, $this->source); })()), "title", [], "any", false, false, false, 42), "html", null, true);
        echo "</h5>
                <p>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 43, $this->source); })()), "content", [], "any", false, false, false, 43), "html", null, true);
        echo "</p>
            </section>
        </article>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "comments/comment-profile-public.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  196 => 43,  192 => 42,  189 => 41,  183 => 39,  181 => 38,  176 => 37,  174 => 36,  169 => 35,  167 => 34,  162 => 33,  160 => 32,  155 => 31,  153 => 30,  147 => 28,  143 => 26,  141 => 25,  138 => 24,  136 => 23,  133 => 22,  131 => 21,  128 => 20,  126 => 19,  123 => 18,  120 => 17,  116 => 15,  114 => 14,  111 => 13,  109 => 12,  106 => 11,  104 => 10,  101 => 9,  99 => 8,  96 => 7,  93 => 6,  83 => 5,  70 => 2,  60 => 1,  50 => 5,  47 => 4,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('./css/comments/comment-public-profile.css') }}\">
{% endblock %}

{% block body %}
    {% if (comment.grade >= 75 and  comment.grade <= 100) %}
        <article class=\"profile-public-randomcom-elmt comment-card verygood-comment hide\">
    {% elseif (comment.grade >= 60 and  comment.grade <= 74) %}
        <article class=\"profile-public-randomcom-elmt comment-card good-comment hide\">
    {% elseif (comment.grade >= 50 and  comment.grade <= 59) %}
        <article class=\"profile-public-randomcom-elmt comment-card medium-comment hide\">
    {% elseif (comment.grade >= 35 and  comment.grade <= 49) %}
        <article class=\"profile-public-randomcom-elmt comment-card notenough-comment hide\">
    {% elseif (comment.grade >= 0 and  comment.grade <= 34) %}
        <article class=\"profile-public-randomcom-elmt comment-card bad-comment hide\">
    {% endif %}
            {% if (comment.grade >= 75 and  comment.grade <= 100) %}
                <section class=\"comment-head hide-2 verygood-comment-head\">
            {% elseif (comment.grade >= 60 and  comment.grade <= 74) %}
                <section class=\"comment-head hide-2 good-comment-head\">
            {% elseif (comment.grade >= 50 and  comment.grade <= 59) %}
                <section class=\"comment-head hide-2 medium-comment-head\">
            {% elseif (comment.grade >= 35 and  comment.grade <= 49) %}
                <section class=\"comment-head hide-2 notenough-comment-head\">
            {% elseif (comment.grade >= 0 and  comment.grade <= 34) %}
                <section class=\"comment-head hide-2 bad-comment-head\">
            {% endif %}
                <img src=\"{{ vich_uploader_asset(comment.videoGame, 'imgTheme') }}\" alt=\"\" class=\"video-game-theme\">
            </section>
            {% if (comment.grade >= 75 and  comment.grade <= 100) %}
                <h4 class=\"comment-grade verygood hide-2\">{{ comment.grade }}</h4>
            {% elseif (comment.grade >= 60 and  comment.grade <= 74) %}
                <h4 class=\"comment-grade good hide-2\">{{ comment.grade }}</h4>
            {% elseif (comment.grade >= 50 and  comment.grade <= 59) %}
                <h4 class=\"comment-grade medium hide-2\">{{ comment.grade }}</h4>
            {% elseif (comment.grade >= 35 and  comment.grade <= 49) %}
                <h4 class=\"comment-grade notenough hide-2\">{{ comment.grade }}</h4>
            {% elseif (comment.grade >= 0 and  comment.grade <= 34) %}
                <h4 class=\"comment-grade bad hide-2\">{{ comment.grade }}</h4>
            {% endif %}
            <section class=\"comment-body hide-2\">
                <h5>{{ comment.title }}</h5>
                <p>{{ comment.content }}</p>
            </section>
        </article>
    {#
    {% if (comment.grade >= 75 and comment.grade <= 100) %}
        <article class=\"profile-public-randomcom-elmt comment-card verygood-comment hide\">
    {% elseif (comment.grade >= 60 and  comment.grade <= 74) %}
        <article class=\"profile-public-randomcom-elmt comment-card good-comment hide\">
    {% elseif (comment.grade >= 50 and  comment.grade <= 59) %}
        <article class=\"profile-public-randomcom-elmt comment-card medium-comment hide\">
    {% elseif (comment.grade >= 35 and  comment.grade <= 49) %}
        <article class=\"profile-public-randomcom-elmt comment-card notenough-comment hide\">
    {% elseif (comment.grade >= 0 and  comment.grade <= 34) %}
        <article class=\"profile-public-randomcom-elmt comment-card bad-comment hide\">
    {% endif %}
            <section class=\"comment-head hide-2\">
                <h4>Posté par : 
                    {% if (comment.user.isRegistered) %}
                        {{ comment.user.username }}
                    {% else %}
                        <span>{{ comment.user.username }}</span>
                    {% endif %}
                </h4>
                <div class=\"hidden-text\"><p>Accès au profil de {{ comment.user.username }} </p></div>
                {% if(comment.user.isAdmin) %}
                    <span class=\"user-isAdmin\" style=\"color: rgb(250, 20, 50)\">A</span>
                {% else %}
                    <span style=\"display:none\">A</span>
                {% endif %}
                <h5>Le {{ comment.postDate| date(\"d M Y\", \"Europe/Paris\") }}</h5>
            </section>

            {% if(comment.user.avatar != \"\" and comment.user.avatar != null) %}
                {%if(comment.grade >= 75 and  comment.grade <= 100) %}
                    <section class=\"comment-avatar comment-avatar-verygood hide-2\">
                {% elseif (comment.grade >= 60 and  comment.grade <= 74) %}
                    <section class=\"comment-avatar comment-avatar-good hide-2\">
                {% elseif (comment.grade >= 50 and  comment.grade <= 59) %}
                    <section class=\"comment-avatar comment-avatar-medium hide-2\">
                {% elseif (comment.grade >= 35 and  comment.grade <= 49) %}
                    <section class=\"comment-avatar comment-avatar-notenough hide-2\">
                {% elseif (comment.grade >= 0 and  comment.grade <= 34) %}
                    <section class=\"comment-avatar comment-avatar-bad hide-2\">
                {% endif %}
                        <img src=\"{{ asset(comment.user.avatar) }}\" alt=\"{{ comment.user.username }}\">
                    </section>
            {% endif %}

            {% if (comment.grade >= 75 and  comment.grade <= 100) %}
                <h4 class=\"comment-grade verygood hide-2\"><span>{{ comment.grade }}</span></h4>
            {% elseif (comment.grade >= 60 and  comment.grade <= 74) %}
                <h4 class=\"comment-grade good hide-2\"><span>{{ comment.grade }}</span></h4>
            {% elseif (comment.grade >= 50 and  comment.grade <= 59) %}
                <h4 class=\"comment-grade medium hide-2\"><span>{{ comment.grade }}</span></h4>
            {% elseif (comment.grade >= 35 and  comment.grade <= 49) %}
                <h4 class=\"comment-grade notenough hide-2\"><span>{{ comment.grade }}</span></h4>
            {% elseif (comment.grade >= 0 and  comment.grade <= 34) %}
                <h4 class=\"comment-grade bad\"><span>{{ comment.grade }}</span></h4>
            {% endif %}

            <section class=\"comment-body hide-3\">
                <h5>{{ comment.title }}</h5>
                <p>{{ comment.content }}</p>
                
            </section>
        </article> #}
{% endblock %}", "comments/comment-profile-public.html.twig", "C:\\Users\\robocop\\Desktop\\REVISIONS WEB\\FIRST PROJECTS\\MyMetaverseV2.0\\MyMetaverse\\templates\\comments\\comment-profile-public.html.twig");
    }
}
