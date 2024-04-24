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

/* comments/form-comments-guest.html.twig */
class __TwigTemplate_20e8afd470ea46cbb7f798dccd8f24a9 extends Template
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
        echo "<h3>Donnez votre avis</h3>
<form class=\"hide-2\" method=\"post\">
\t";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["guestForm"]) || array_key_exists("guestForm", $context) ? $context["guestForm"] : (function () { throw new RuntimeError('Variable "guestForm" does not exist.', 3, $this->source); })()), 'form_start');
        echo "
        <div class=\"form-group hide-2\">
            ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["guestForm"]) || array_key_exists("guestForm", $context) ? $context["guestForm"] : (function () { throw new RuntimeError('Variable "guestForm" does not exist.', 5, $this->source); })()), "user_username", [], "any", false, false, false, 5), 'label');
        echo "
            ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["guestForm"]) || array_key_exists("guestForm", $context) ? $context["guestForm"] : (function () { throw new RuntimeError('Variable "guestForm" does not exist.', 6, $this->source); })()), "user_username", [], "any", false, false, false, 6), 'widget');
        echo "
        </div>
        <div class=\"form-group hide-2\">
            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["guestForm"]) || array_key_exists("guestForm", $context) ? $context["guestForm"] : (function () { throw new RuntimeError('Variable "guestForm" does not exist.', 9, $this->source); })()), "title", [], "any", false, false, false, 9), 'label');
        echo "
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["guestForm"]) || array_key_exists("guestForm", $context) ? $context["guestForm"] : (function () { throw new RuntimeError('Variable "guestForm" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), 'widget');
        echo "
        </div>
        <div class=\"form-group hide-2\">
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["guestForm"]) || array_key_exists("guestForm", $context) ? $context["guestForm"] : (function () { throw new RuntimeError('Variable "guestForm" does not exist.', 13, $this->source); })()), "content", [], "any", false, false, false, 13), 'label');
        echo "
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["guestForm"]) || array_key_exists("guestForm", $context) ? $context["guestForm"] : (function () { throw new RuntimeError('Variable "guestForm" does not exist.', 14, $this->source); })()), "content", [], "any", false, false, false, 14), 'widget');
        echo "
        </div>
        <div class=\"form-group hide-2\">
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["guestForm"]) || array_key_exists("guestForm", $context) ? $context["guestForm"] : (function () { throw new RuntimeError('Variable "guestForm" does not exist.', 17, $this->source); })()), "grade", [], "any", false, false, false, 17), 'label');
        echo "
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["guestForm"]) || array_key_exists("guestForm", $context) ? $context["guestForm"] : (function () { throw new RuntimeError('Variable "guestForm" does not exist.', 18, $this->source); })()), "grade", [], "any", false, false, false, 18), 'widget');
        echo "
        </div>
        <button type=\"submit\" class=\"btn hide-3\">";
        // line 20
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 20, $this->source); })()), "Envoyer")) : ("Envoyer")), "html", null, true);
        echo "</button>
\t";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["guestForm"]) || array_key_exists("guestForm", $context) ? $context["guestForm"] : (function () { throw new RuntimeError('Variable "guestForm" does not exist.', 21, $this->source); })()), 'form_end');
        echo "
</form>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  95 => 21,  91 => 20,  86 => 18,  82 => 17,  76 => 14,  72 => 13,  66 => 10,  62 => 9,  56 => 6,  52 => 5,  47 => 3,  43 => 1,);
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
