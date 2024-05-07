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

/* comments/form-comments-guest.html.twig */
class __TwigTemplate_12b8cfaaddf13b5853bca69f1a822537 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comments/form-comments-guest.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comments/form-comments-guest.html.twig"));

        // line 1
        yield "<h3>Donnez votre avis</h3>
<form class=\"hide-2\" method=\"post\">
\t";
        // line 3
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["guestForm"]) || array_key_exists("guestForm", $context) ? $context["guestForm"] : (function () { throw new RuntimeError('Variable "guestForm" does not exist.', 3, $this->source); })()), 'form_start');
        yield "
        <div class=\"form-group hide-2\">
            ";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["guestForm"]) || array_key_exists("guestForm", $context) ? $context["guestForm"] : (function () { throw new RuntimeError('Variable "guestForm" does not exist.', 5, $this->source); })()), "user_username", [], "any", false, false, false, 5), 'label');
        yield "
            ";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["guestForm"]) || array_key_exists("guestForm", $context) ? $context["guestForm"] : (function () { throw new RuntimeError('Variable "guestForm" does not exist.', 6, $this->source); })()), "user_username", [], "any", false, false, false, 6), 'widget');
        yield "
        </div>
        <div class=\"form-group hide-2\">
            ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["guestForm"]) || array_key_exists("guestForm", $context) ? $context["guestForm"] : (function () { throw new RuntimeError('Variable "guestForm" does not exist.', 9, $this->source); })()), "title", [], "any", false, false, false, 9), 'label');
        yield "
            ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["guestForm"]) || array_key_exists("guestForm", $context) ? $context["guestForm"] : (function () { throw new RuntimeError('Variable "guestForm" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), 'widget');
        yield "
        </div>
        <div class=\"form-group hide-2\">
            ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["guestForm"]) || array_key_exists("guestForm", $context) ? $context["guestForm"] : (function () { throw new RuntimeError('Variable "guestForm" does not exist.', 13, $this->source); })()), "content", [], "any", false, false, false, 13), 'label');
        yield "
            ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["guestForm"]) || array_key_exists("guestForm", $context) ? $context["guestForm"] : (function () { throw new RuntimeError('Variable "guestForm" does not exist.', 14, $this->source); })()), "content", [], "any", false, false, false, 14), 'widget');
        yield "
        </div>
        <div class=\"form-group hide-2\">
            ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["guestForm"]) || array_key_exists("guestForm", $context) ? $context["guestForm"] : (function () { throw new RuntimeError('Variable "guestForm" does not exist.', 17, $this->source); })()), "grade", [], "any", false, false, false, 17), 'label');
        yield "
            ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["guestForm"]) || array_key_exists("guestForm", $context) ? $context["guestForm"] : (function () { throw new RuntimeError('Variable "guestForm" does not exist.', 18, $this->source); })()), "grade", [], "any", false, false, false, 18), 'widget');
        yield "
        </div>
        <button type=\"submit\" class=\"btn hide-3\">";
        // line 20
        yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::defaultFilter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 20, $this->source); })()), "Envoyer")) : ("Envoyer")), "html", null, true);
        yield "</button>
\t";
        // line 21
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["guestForm"]) || array_key_exists("guestForm", $context) ? $context["guestForm"] : (function () { throw new RuntimeError('Variable "guestForm" does not exist.', 21, $this->source); })()), 'form_end');
        yield "
</form>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "comments/form-comments-guest.html.twig";
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
        return array (  96 => 21,  92 => 20,  87 => 18,  83 => 17,  77 => 14,  73 => 13,  67 => 10,  63 => 9,  57 => 6,  53 => 5,  48 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3>Donnez votre avis</h3>
<form class=\"hide-2\" method=\"post\">
\t{{ form_start(guestForm) }}
        <div class=\"form-group hide-2\">
            {{ form_label(guestForm.user_username) }}
            {{ form_widget(guestForm.user_username) }}
        </div>
        <div class=\"form-group hide-2\">
            {{ form_label(guestForm.title) }}
            {{ form_widget(guestForm.title) }}
        </div>
        <div class=\"form-group hide-2\">
            {{ form_label(guestForm.content) }}
            {{ form_widget(guestForm.content) }}
        </div>
        <div class=\"form-group hide-2\">
            {{ form_label(guestForm.grade) }}
            {{ form_widget(guestForm.grade) }}
        </div>
        <button type=\"submit\" class=\"btn hide-3\">{{ button_label|default(\"Envoyer\") }}</button>
\t{{ form_end(guestForm) }}
</form>
", "comments/form-comments-guest.html.twig", "C:\\Users\\robocop\\Desktop\\REVISIONS WEB\\FIRST PROJECTS\\MyMetaverseV2.0\\MyMetaverse\\templates\\comments\\form-comments-guest.html.twig");
    }
}
