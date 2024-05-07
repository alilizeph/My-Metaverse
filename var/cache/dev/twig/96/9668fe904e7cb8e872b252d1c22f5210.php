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

/* user/update-user.html.twig */
class __TwigTemplate_6f396f010e94a1cf123660bf40527421 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/update-user.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/update-user.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/update-user.html.twig", 1);
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
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./css/users/edit-user-form.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "\t<main>
\t\t<article class=\"registration-card\">
\t\t\t<h3>Changement d'informations</h3>
\t\t\t<h5>";
        // line 10
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 10, $this->source); })()), "username", [], "any", false, false, false, 10), "html", null, true);
        yield "</h5>
\t\t\t<h5>";
        // line 11
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 11, $this->source); })()), "email", [], "any", false, false, false, 11), "html", null, true);
        yield "</h5>
\t\t\t";
        // line 12
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
        yield "
\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "surname", [], "any", false, false, false, 14), 'label');
        yield "
\t\t\t\t\t";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "surname", [], "any", false, false, false, 15), 'widget');
        yield "
\t\t\t\t</section>
\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "firstName", [], "any", false, false, false, 18), 'label');
        yield "
\t\t\t\t\t";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "firstName", [], "any", false, false, false, 19), 'widget');
        yield "
\t\t\t\t</section>
\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "birthday", [], "any", false, false, false, 22), 'label');
        yield "
\t\t\t\t\t";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "birthday", [], "any", false, false, false, 23), 'widget');
        yield "
\t\t\t\t</section>
\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "gender", [], "any", false, false, false, 26), 'label');
        yield "
\t\t\t\t\t";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "gender", [], "any", false, false, false, 27), 'widget');
        yield "
\t\t\t\t</section>
\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "presentation", [], "any", false, false, false, 30), 'label');
        yield "
\t\t\t\t\t";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "presentation", [], "any", false, false, false, 31), 'widget');
        yield "
\t\t\t\t</section>
\t\t\t\t<p id=\"last-presentation\"><span>Précédente présentation : </span><br>
\t\t\t\t\t";
        // line 34
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["presentation"]) || array_key_exists("presentation", $context) ? $context["presentation"] : (function () { throw new RuntimeError('Variable "presentation" does not exist.', 34, $this->source); })()), "html", null, true);
        yield "</p>
\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "avatarFile", [], "any", false, false, false, 36), 'label');
        yield "
\t\t\t\t\t";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "avatarFile", [], "any", false, false, false, 37), 'widget');
        yield "
\t\t\t\t</section>
\t\t\t\t<section class=\"form-group hide-2 private-fields-dispo\">
\t\t\t\t\t";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "privateFieldsDisponibility", [], "any", false, false, false, 40), 'label');
        yield "
\t\t\t\t\t";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "privateFieldsDisponibility", [], "any", false, false, false, 41), 'widget');
        yield "
\t\t\t\t</section>
\t\t\t";
        // line 43
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'form_end');
        yield "
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
        return "user/update-user.html.twig";
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
        return array (  186 => 43,  181 => 41,  177 => 40,  171 => 37,  167 => 36,  162 => 34,  156 => 31,  152 => 30,  146 => 27,  142 => 26,  136 => 23,  132 => 22,  126 => 19,  122 => 18,  116 => 15,  112 => 14,  107 => 12,  103 => 11,  99 => 10,  94 => 7,  84 => 6,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block head %}
\t<link rel=\"stylesheet\" href=\"{{ asset('./css/users/edit-user-form.css') }}\">
{% endblock %}
{% block body %}
\t<main>
\t\t<article class=\"registration-card\">
\t\t\t<h3>Changement d'informations</h3>
\t\t\t<h5>{{ user.username }}</h5>
\t\t\t<h5>{{ user.email }}</h5>
\t\t\t{{ form_start(form) }}
\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t{{ form_label(form.surname) }}
\t\t\t\t\t{{ form_widget(form.surname) }}
\t\t\t\t</section>
\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t{{ form_label(form.firstName) }}
\t\t\t\t\t{{ form_widget(form.firstName) }}
\t\t\t\t</section>
\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t{{ form_label(form.birthday) }}
\t\t\t\t\t{{ form_widget(form.birthday) }}
\t\t\t\t</section>
\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t{{ form_label(form.gender) }}
\t\t\t\t\t{{ form_widget(form.gender) }}
\t\t\t\t</section>
\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t{{ form_label(form.presentation) }}
\t\t\t\t\t{{ form_widget(form.presentation) }}
\t\t\t\t</section>
\t\t\t\t<p id=\"last-presentation\"><span>Précédente présentation : </span><br>
\t\t\t\t\t{{ presentation }}</p>
\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t{{ form_label(form.avatarFile) }}
\t\t\t\t\t{{ form_widget(form.avatarFile) }}
\t\t\t\t</section>
\t\t\t\t<section class=\"form-group hide-2 private-fields-dispo\">
\t\t\t\t\t{{ form_label(form.privateFieldsDisponibility) }}
\t\t\t\t\t{{ form_widget(form.privateFieldsDisponibility) }}
\t\t\t\t</section>
\t\t\t{{ form_end(form) }}
\t\t</article>
\t</main>
{% endblock %}
", "user/update-user.html.twig", "C:\\Users\\robocop\\Desktop\\REVISIONS WEB\\FIRST PROJECTS\\MyMetaverseV2.0\\MyMetaverse\\templates\\user\\update-user.html.twig");
    }
}
