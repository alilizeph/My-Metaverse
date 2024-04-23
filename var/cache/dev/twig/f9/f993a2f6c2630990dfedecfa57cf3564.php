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

/* comments/comment-videogame-card.html.twig */
class __TwigTemplate_6c1fbc0e31f12d8ad20ea1b9648ee3bd extends Template
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
            'comments' => [$this, 'block_comments'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comments/comment-videogame-card.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comments/comment-videogame-card.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('comments', $context, $blocks);
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./css/comments/comment-videogame.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_comments($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "comments"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "comments"));

        // line 6
        echo "    ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 6, $this->source); })()), "grade", [], "any", false, false, false, 6) >= 75) && (twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 6, $this->source); })()), "grade", [], "any", false, false, false, 6) <= 100))) {
            // line 7
            echo "        <article class=\"comment-card verygood-comment hide\">
    ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 8
(isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 8, $this->source); })()), "grade", [], "any", false, false, false, 8) >= 60) && (twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 8, $this->source); })()), "grade", [], "any", false, false, false, 8) <= 74))) {
            // line 9
            echo "        <article class=\"comment-card good-comment hide\">
    ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 10
(isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 10, $this->source); })()), "grade", [], "any", false, false, false, 10) >= 50) && (twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 10, $this->source); })()), "grade", [], "any", false, false, false, 10) <= 59))) {
            // line 11
            echo "        <article class=\"comment-card medium-comment hide\">
    ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 12
(isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 12, $this->source); })()), "grade", [], "any", false, false, false, 12) >= 35) && (twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 12, $this->source); })()), "grade", [], "any", false, false, false, 12) <= 49))) {
            // line 13
            echo "        <article class=\"comment-card notenough-comment hide\">
    ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 14
(isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 14, $this->source); })()), "grade", [], "any", false, false, false, 14) >= 0) && (twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 14, $this->source); })()), "grade", [], "any", false, false, false, 14) <= 34))) {
            // line 15
            echo "        <article class=\"comment-card bad-comment hide\">
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
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "avatarNewFileName", [], "any", false, false, false, 28) != null)) {
            // line 29
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset(twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "avatarFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "username", [], "any", false, false, false, 29), "html", null, true);
            echo "\" class=\"avatar hide-2\">
                ";
        }
        // line 31
        echo "                <h4>
                    ";
        // line 32
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "isRegistered", [], "any", false, false, false, 32)) {
            // line 33
            echo "                        <a class=\"user-profile-access\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_public_profile", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "username", [], "any", false, false, false, 33), "html", null, true);
            echo "</a>
                    ";
        } else {
            // line 35
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "username", [], "any", false, false, false, 35), "html", null, true);
            echo "
                    ";
        }
        // line 37
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "isAdmin", [], "any", false, false, false, 37)) {
            // line 38
            echo "                        <span class=\"user-isAdmin\" style=\"color: rgb(250, 20, 50)\">A</span>
                    ";
        }
        // line 40
        echo "                </h4>
                
                    
            </section>
            ";
        // line 44
        if (((twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 44, $this->source); })()), "grade", [], "any", false, false, false, 44) >= 75) && (twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 44, $this->source); })()), "grade", [], "any", false, false, false, 44) <= 100))) {
            // line 45
            echo "                <h4 class=\"comment-grade verygood hide-2\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 45, $this->source); })()), "grade", [], "any", false, false, false, 45), "html", null, true);
            echo "</h4>
            ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 46
(isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 46, $this->source); })()), "grade", [], "any", false, false, false, 46) >= 60) && (twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 46, $this->source); })()), "grade", [], "any", false, false, false, 46) <= 74))) {
            // line 47
            echo "                <h4 class=\"comment-grade good hide-2\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 47, $this->source); })()), "grade", [], "any", false, false, false, 47), "html", null, true);
            echo "</h4>
            ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 48
(isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 48, $this->source); })()), "grade", [], "any", false, false, false, 48) >= 50) && (twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 48, $this->source); })()), "grade", [], "any", false, false, false, 48) <= 59))) {
            // line 49
            echo "                <h4 class=\"comment-grade medium hide-2\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 49, $this->source); })()), "grade", [], "any", false, false, false, 49), "html", null, true);
            echo "</h4>
            ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 50
(isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 50, $this->source); })()), "grade", [], "any", false, false, false, 50) >= 35) && (twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 50, $this->source); })()), "grade", [], "any", false, false, false, 50) <= 49))) {
            // line 51
            echo "                <h4 class=\"comment-grade notenough hide-2\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 51, $this->source); })()), "grade", [], "any", false, false, false, 51), "html", null, true);
            echo "</h4>
            ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 52
(isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 52, $this->source); })()), "grade", [], "any", false, false, false, 52) >= 0) && (twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 52, $this->source); })()), "grade", [], "any", false, false, false, 52) <= 34))) {
            // line 53
            echo "                <h4 class=\"comment-grade bad hide-2\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 53, $this->source); })()), "grade", [], "any", false, false, false, 53), "html", null, true);
            echo "</h4>
            ";
        }
        // line 55
        echo "            <section class=\"comment-body hide-2\">
                <h5>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 56, $this->source); })()), "title", [], "any", false, false, false, 56), "html", null, true);
        echo "</h5>
                <p>";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 57, $this->source); })()), "content", [], "any", false, false, false, 57), "html", null, true);
        echo "</p>
            </section>
            ";
        // line 66
        echo "        </article>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "comments/comment-videogame-card.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  238 => 66,  233 => 57,  229 => 56,  226 => 55,  220 => 53,  218 => 52,  213 => 51,  211 => 50,  206 => 49,  204 => 48,  199 => 47,  197 => 46,  192 => 45,  190 => 44,  184 => 40,  180 => 38,  177 => 37,  171 => 35,  163 => 33,  161 => 32,  158 => 31,  150 => 29,  147 => 28,  143 => 26,  141 => 25,  138 => 24,  136 => 23,  133 => 22,  131 => 21,  128 => 20,  126 => 19,  123 => 18,  120 => 17,  116 => 15,  114 => 14,  111 => 13,  109 => 12,  106 => 11,  104 => 10,  101 => 9,  99 => 8,  96 => 7,  93 => 6,  83 => 5,  70 => 2,  60 => 1,  50 => 5,  47 => 4,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('./css/comments/comment-videogame.css') }}\">
{% endblock %}

{% block comments %}
    {% if (comment.grade >= 75 and  comment.grade <= 100) %}
        <article class=\"comment-card verygood-comment hide\">
    {% elseif (comment.grade >= 60 and  comment.grade <= 74) %}
        <article class=\"comment-card good-comment hide\">
    {% elseif (comment.grade >= 50 and  comment.grade <= 59) %}
        <article class=\"comment-card medium-comment hide\">
    {% elseif (comment.grade >= 35 and  comment.grade <= 49) %}
        <article class=\"comment-card notenough-comment hide\">
    {% elseif (comment.grade >= 0 and  comment.grade <= 34) %}
        <article class=\"comment-card bad-comment hide\">
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
                {% if comment.user.avatarNewFileName != null %}
                    <img src=\"{{ vich_uploader_asset(comment.user, 'avatarFile') }}\" alt=\"{{ comment.user.username }}\" class=\"avatar hide-2\">
                {% endif %}
                <h4>
                    {% if (comment.user.isRegistered) %}
                        <a class=\"user-profile-access\" href=\"{{ path('user_public_profile', {'id': comment.user.id }) }}\">{{ comment.user.username }}</a>
                    {% else %}
                        {{ comment.user.username }}
                    {% endif %}
                    {% if(comment.user.isAdmin) %}
                        <span class=\"user-isAdmin\" style=\"color: rgb(250, 20, 50)\">A</span>
                    {% endif %}
                </h4>
                
                    
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
            {# TO MODIFY COMMENT IF YOU ARE CONNECTED
            {% if(comment.user.id == pp.user.id and is_granted(\"IS_AUTHENCATED_FULLY\")) %}
                <section class=\"set-comment-box\">
                    <button>Modifier le commentaire</button>
                </section>
            {% endif %}
            #}
        </article>
    {#
            <section class=\"comment-head hide-2\">
                <h4>Posté par : 
                    {% if (comment.user.isRegistered) %}
                        <a class=\"user-profile-access\" href=\"{{ path('user_public_profile', {'id': comment.user.id }) }}\">{{ comment.user.username }}</a>
                    {% else %}
                        <span>{{ comment.user.username }}</span>
                    {% endif %}
                </h4>
                <div class=\"hidden-text\"><p>Accès au profil de {{ comment.user.username}} </p></div>
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
                        <img src=\"{{ asset(comment.user.avatar) }}\" alt=\"{{ comment.user.username }}\" class=\" hide-2\">
                    </section>
            {% endif %}

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

            <section class=\"comment-body hide-3\">
                <h5>{{ comment.title }}</h5>
                <p>{{ comment.content }}</p>
            </section> 
            {% if(comment.user.id == pp.user.id and is_granted(\"IS_AUTHENCATED_FULLY\")) %}
                <section class=\"set-comment-box\">
                    <button>Modifier le commentaire</button>
                </section>
            {% endif %}
            #}
{% endblock %}", "comments/comment-videogame-card.html.twig", "C:\\Users\\robocop\\Desktop\\REVISIONS WEB\\FIRST PROJECTS\\MyMetaverseV2.0\\MyMetaverse\\templates\\comments\\comment-videogame-card.html.twig");
    }
}
