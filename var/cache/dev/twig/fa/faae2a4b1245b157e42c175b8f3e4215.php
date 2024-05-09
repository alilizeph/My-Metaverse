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

/* comments/comment-videogame-card.html.twig */
class __TwigTemplate_673fbf2b09b4bc9b1ea4b6a28db43de1 extends Template
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
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 4
        yield "
";
        // line 5
        yield from $this->unwrap()->yieldBlock('comments', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
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
        yield "    <link rel=\"stylesheet\" href=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./css/comments/comment-videogame.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
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
        yield "    ";
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 6, $this->source); })()), "grade", [], "any", false, false, false, 6) >= 75) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 6, $this->source); })()), "grade", [], "any", false, false, false, 6) <= 100))) {
            // line 7
            yield "        <article class=\"comment-card verygood-comment hide\">
    ";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 8
(isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 8, $this->source); })()), "grade", [], "any", false, false, false, 8) >= 60) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 8, $this->source); })()), "grade", [], "any", false, false, false, 8) <= 74))) {
            // line 9
            yield "        <article class=\"comment-card good-comment hide\">
    ";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 10
(isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 10, $this->source); })()), "grade", [], "any", false, false, false, 10) >= 50) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 10, $this->source); })()), "grade", [], "any", false, false, false, 10) <= 59))) {
            // line 11
            yield "        <article class=\"comment-card medium-comment hide\">
    ";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 12
(isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 12, $this->source); })()), "grade", [], "any", false, false, false, 12) >= 35) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 12, $this->source); })()), "grade", [], "any", false, false, false, 12) <= 49))) {
            // line 13
            yield "        <article class=\"comment-card notenough-comment hide\">
    ";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 14
(isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 14, $this->source); })()), "grade", [], "any", false, false, false, 14) >= 0) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 14, $this->source); })()), "grade", [], "any", false, false, false, 14) <= 34))) {
            // line 15
            yield "        <article class=\"comment-card bad-comment hide\">
    ";
        }
        // line 17
        yield "            ";
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 17, $this->source); })()), "grade", [], "any", false, false, false, 17) >= 75) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 17, $this->source); })()), "grade", [], "any", false, false, false, 17) <= 100))) {
            // line 18
            yield "                <section class=\"comment-head hide-2 verygood-comment-head\">
            ";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 19
(isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 19, $this->source); })()), "grade", [], "any", false, false, false, 19) >= 60) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 19, $this->source); })()), "grade", [], "any", false, false, false, 19) <= 74))) {
            // line 20
            yield "                <section class=\"comment-head hide-2 good-comment-head\">
            ";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 21
(isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 21, $this->source); })()), "grade", [], "any", false, false, false, 21) >= 50) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 21, $this->source); })()), "grade", [], "any", false, false, false, 21) <= 59))) {
            // line 22
            yield "                <section class=\"comment-head hide-2 medium-comment-head\">
            ";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 23
(isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 23, $this->source); })()), "grade", [], "any", false, false, false, 23) >= 35) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 23, $this->source); })()), "grade", [], "any", false, false, false, 23) <= 49))) {
            // line 24
            yield "                <section class=\"comment-head hide-2 notenough-comment-head\">
            ";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 25
(isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 25, $this->source); })()), "grade", [], "any", false, false, false, 25) >= 0) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 25, $this->source); })()), "grade", [], "any", false, false, false, 25) <= 34))) {
            // line 26
            yield "                <section class=\"comment-head hide-2 bad-comment-head\">
            ";
        }
        // line 28
        yield "                ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "avatarNewFileName", [], "any", false, false, false, 28) != null)) {
            // line 29
            yield "                    <img src=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset(CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "avatarFile"), "html", null, true);
            yield "\" alt=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "username", [], "any", false, false, false, 29), "html", null, true);
            yield "\" class=\"avatar hide-2\">
                ";
        }
        // line 31
        yield "                <h4>
                    ";
        // line 32
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "isRegistered", [], "any", false, false, false, 32)) {
            // line 33
            yield "                        <a class=\"user-profile-access\" href=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_public_profile", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33)]), "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "username", [], "any", false, false, false, 33), "html", null, true);
            yield "</a>
                    ";
        } else {
            // line 35
            yield "                        ";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35), "username", [], "any", false, false, false, 35), "html", null, true);
            yield "
                    ";
        }
        // line 37
        yield "                    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "isAdmin", [], "any", false, false, false, 37)) {
            // line 38
            yield "                        <span class=\"user-isAdmin\" style=\"color: rgb(250, 20, 50)\">A</span>
                    ";
        }
        // line 40
        yield "                </h4>
                
                    
            </section>
            ";
        // line 44
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 44, $this->source); })()), "grade", [], "any", false, false, false, 44) >= 75) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 44, $this->source); })()), "grade", [], "any", false, false, false, 44) <= 100))) {
            // line 45
            yield "                <h4 class=\"comment-grade verygood hide-2\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 45, $this->source); })()), "grade", [], "any", false, false, false, 45), "html", null, true);
            yield "</h4>
            ";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 46
(isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 46, $this->source); })()), "grade", [], "any", false, false, false, 46) >= 60) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 46, $this->source); })()), "grade", [], "any", false, false, false, 46) <= 74))) {
            // line 47
            yield "                <h4 class=\"comment-grade good hide-2\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 47, $this->source); })()), "grade", [], "any", false, false, false, 47), "html", null, true);
            yield "</h4>
            ";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 48
(isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 48, $this->source); })()), "grade", [], "any", false, false, false, 48) >= 50) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 48, $this->source); })()), "grade", [], "any", false, false, false, 48) <= 59))) {
            // line 49
            yield "                <h4 class=\"comment-grade medium hide-2\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 49, $this->source); })()), "grade", [], "any", false, false, false, 49), "html", null, true);
            yield "</h4>
            ";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 50
(isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 50, $this->source); })()), "grade", [], "any", false, false, false, 50) >= 35) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 50, $this->source); })()), "grade", [], "any", false, false, false, 50) <= 49))) {
            // line 51
            yield "                <h4 class=\"comment-grade notenough hide-2\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 51, $this->source); })()), "grade", [], "any", false, false, false, 51), "html", null, true);
            yield "</h4>
            ";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 52
(isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 52, $this->source); })()), "grade", [], "any", false, false, false, 52) >= 0) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 52, $this->source); })()), "grade", [], "any", false, false, false, 52) <= 34))) {
            // line 53
            yield "                <h4 class=\"comment-grade bad hide-2\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 53, $this->source); })()), "grade", [], "any", false, false, false, 53), "html", null, true);
            yield "</h4>
            ";
        }
        // line 55
        yield "            <section class=\"comment-body hide-2\">
                <h5>";
        // line 56
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 56, $this->source); })()), "title", [], "any", false, false, false, 56), "html", null, true);
        yield "</h5>
                <p>";
        // line 57
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 57, $this->source); })()), "content", [], "any", false, false, false, 57), "html", null, true);
        yield "</p>
            </section>
            ";
        // line 66
        yield "        </article>
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
        return "comments/comment-videogame-card.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  241 => 66,  236 => 57,  232 => 56,  229 => 55,  223 => 53,  221 => 52,  216 => 51,  214 => 50,  209 => 49,  207 => 48,  202 => 47,  200 => 46,  195 => 45,  193 => 44,  187 => 40,  183 => 38,  180 => 37,  174 => 35,  166 => 33,  164 => 32,  161 => 31,  153 => 29,  150 => 28,  146 => 26,  144 => 25,  141 => 24,  139 => 23,  136 => 22,  134 => 21,  131 => 20,  129 => 19,  126 => 18,  123 => 17,  119 => 15,  117 => 14,  114 => 13,  112 => 12,  109 => 11,  107 => 10,  104 => 9,  102 => 8,  99 => 7,  96 => 6,  86 => 5,  72 => 2,  62 => 1,  51 => 5,  48 => 4,  46 => 1,);
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
