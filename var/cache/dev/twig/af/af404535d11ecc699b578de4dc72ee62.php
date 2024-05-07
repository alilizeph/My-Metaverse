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

/* user/private-profile.html.twig */
class __TwigTemplate_0562e31df78806de45e30120f4e328cb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/private-profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/private-profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/private-profile.html.twig", 1);
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
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./css/profiles/private-profile.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        yield "\t<main>
\t\t<article class=\"profile hide\">
\t\t\t<section class=\"profile-head hide-2\">
\t\t\t\t<section class=\"profile-head-avatar hide-2\">
\t\t\t\t\t";
        // line 12
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 12, $this->source); })()), "avatarNewFileName", [], "any", false, false, false, 12) != null)) {
            // line 13
            yield "\t\t\t\t\t\t<img src=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "avatarFile"), "html", null, true);
            yield "\" alt=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "username", [], "any", false, false, false, 13), "html", null, true);
            yield "\" class=\"avatar hide-2\">
\t\t\t\t\t";
        }
        // line 15
        yield "\t\t\t\t</section>
\t\t\t\t<section class=\"profile-head-group hide-2\">
\t\t\t\t\t<h3 *ngIf=\"user\">";
        // line 17
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "username", [], "any", false, false, false, 17), "html", null, true);
        yield "</h3>
\t\t\t\t\t<h4 *ngIf=\"user\">";
        // line 18
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "firstName", [], "any", false, false, false, 18), "html", null, true);
        yield "
\t\t\t\t\t\t";
        // line 19
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 19, $this->source); })()), "surname", [], "any", false, false, false, 19), "html", null, true);
        yield "</h4>
\t\t\t\t</section>
\t\t\t</section>
\t\t\t<section class=\"profile-presentation hide-2\">
\t\t\t\t<h5 class=\" hide-3\">Présentation
\t\t\t\t</h5>
\t\t\t\t";
        // line 25
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "presentation", [], "any", false, false, false, 25) != null) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "presentation", [], "any", false, false, false, 25) != ""))) {
            // line 26
            yield "\t\t\t\t\t<p class=\"profile-presentation-content hide-3\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "presentation", [], "any", false, false, false, 26), "html", null, true);
            yield "</p>
\t\t\t\t";
        }
        // line 28
        yield "\t\t\t</section>
\t\t\t<section>
\t\t\t\t<a href=\"";
        // line 30
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30)]), "html", null, true);
        yield "\">
\t\t\t\t\t<button>Mettre à jour mes informations</button>
\t\t\t\t</a>
\t\t\t</section>
\t\t</article>
\t</main>
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
        return "user/private-profile.html.twig";
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
        return array (  143 => 30,  139 => 28,  133 => 26,  131 => 25,  122 => 19,  118 => 18,  114 => 17,  110 => 15,  102 => 13,  100 => 12,  94 => 8,  84 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{%block head %}
\t<link rel=\"stylesheet\" href=\"{{ asset('./css/profiles/private-profile.css') }}\">
{% endblock %}

{% block body %}
\t<main>
\t\t<article class=\"profile hide\">
\t\t\t<section class=\"profile-head hide-2\">
\t\t\t\t<section class=\"profile-head-avatar hide-2\">
\t\t\t\t\t{% if user.avatarNewFileName != null %}
\t\t\t\t\t\t<img src=\"{{ vich_uploader_asset(user, 'avatarFile') }}\" alt=\"{{ user.username }}\" class=\"avatar hide-2\">
\t\t\t\t\t{% endif %}
\t\t\t\t</section>
\t\t\t\t<section class=\"profile-head-group hide-2\">
\t\t\t\t\t<h3 *ngIf=\"user\">{{  user.username }}</h3>
\t\t\t\t\t<h4 *ngIf=\"user\">{{ user.firstName }}
\t\t\t\t\t\t{{ user.surname }}</h4>
\t\t\t\t</section>
\t\t\t</section>
\t\t\t<section class=\"profile-presentation hide-2\">
\t\t\t\t<h5 class=\" hide-3\">Présentation
\t\t\t\t</h5>
\t\t\t\t{% if app.user.presentation != null and app.user.presentation != \"\" %}
\t\t\t\t\t<p class=\"profile-presentation-content hide-3\">{{ user.presentation }}</p>
\t\t\t\t{% endif %}
\t\t\t</section>
\t\t\t<section>
\t\t\t\t<a href=\"{{ path('update_user', { 'id' : user.id } ) }}\">
\t\t\t\t\t<button>Mettre à jour mes informations</button>
\t\t\t\t</a>
\t\t\t</section>
\t\t</article>
\t</main>
{% endblock %}
", "user/private-profile.html.twig", "C:\\Users\\robocop\\Desktop\\REVISIONS WEB\\FIRST PROJECTS\\MyMetaverseV2.0\\MyMetaverse\\templates\\user\\private-profile.html.twig");
    }
}
