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

/* security/_form-registration.html.twig */
class __TwigTemplate_980849f8725b7b4822448075a6aa70a7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/_form-registration.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/_form-registration.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
    <div class=\"form-group hide-2\">
        ";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "surname", [], "any", false, false, false, 3), 'label');
        echo "
        ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "surname", [], "any", false, false, false, 4), 'widget');
        echo "
    </div>
    <div class=\"form-group hide-2\">
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "firstName", [], "any", false, false, false, 7), 'label');
        echo "
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "firstName", [], "any", false, false, false, 8), 'widget');
        echo "
    </div>
    <div class=\"form-group hide-2\">
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "email", [], "any", false, false, false, 11), 'label');
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "email", [], "any", false, false, false, 12), 'widget');
        echo "
    </div>
    <div class=\"form-group hide-2\">
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "username", [], "any", false, false, false, 15), 'label');
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "username", [], "any", false, false, false, 16), 'widget');
        echo "
    </div>
     ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "flashes", ["error"], "method", false, false, false, 18)) {
            // line 19
            echo "        <p class=\"warning\">Cette adresse email ou ce nom utilisateur existent déjà</p>
    ";
        }
        // line 21
        echo "    <div class=\"form-group hide-2\">
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "password", [], "any", false, false, false, 22), 'label');
        echo "
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "password", [], "any", false, false, false, 23), 'widget');
        echo "
    </div>
    <div class=\"form-group hide-2\">
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "gender", [], "any", false, false, false, 26), 'label');
        echo "
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "gender", [], "any", false, false, false, 27), 'widget');
        echo "
    </div>
    <div class=\"form-group hide-2\">
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "birthday", [], "any", false, false, false, 30), 'label');
        echo "
        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "birthday", [], "any", false, false, false, 31), 'widget');
        echo "
        
    </div>
    ";
        // line 34
        if (array_key_exists("isMinimumAgeMet", $context)) {
            // line 35
            echo "        ";
            if ( !(isset($context["isMinimumAgeMet"]) || array_key_exists("isMinimumAgeMet", $context) ? $context["isMinimumAgeMet"] : (function () { throw new RuntimeError('Variable "isMinimumAgeMet" does not exist.', 35, $this->source); })())) {
                // line 36
                echo "            <p class=\"warning\">** L'âge requis pour s'inscrire à <span class=\"warning-2\">My Metaverse</span> est de <span class=\"warning-2\">12 ans</span>.</p>
        ";
            }
            // line 38
            echo "    ";
        }
        // line 39
        echo "    <div class=\"form-group hide-2\">
        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "avatarFile", [], "any", false, false, false, 40), 'label');
        echo "
        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "avatarFile", [], "any", false, false, false, 41), 'widget');
        echo "
    </div>
    ";
        // line 43
        if (array_key_exists("isAvatarValid", $context)) {
            // line 44
            echo "        ";
            if ( !(isset($context["isAvatarValid"]) || array_key_exists("isAvatarValid", $context) ? $context["isAvatarValid"] : (function () { throw new RuntimeError('Variable "isAvatarValid" does not exist.', 44, $this->source); })())) {
                // line 45
                echo "            <p class=\"warning\">** Votre fichier doit être de type .png, .jpg ou .jpeg</p>
        ";
            }
            // line 47
            echo "    ";
        } else {
            // line 48
            echo "        <p class=\"info\">** Votre fichier doit être de type <span class=\"warning-2\">.png</span> <span class=\"warning-2\">.jpg</span> ou <span class=\"warning-2\">.jpeg</span> </p>
    ";
        }
        // line 50
        echo "    <div class=\"form-group hide-2\">
        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "presentation", [], "any", false, false, false, 51), 'label');
        echo "
        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "presentation", [], "any", false, false, false, 52), 'widget');
        echo "
    </div>
    
    <button type=\"submit\" class=\"btn hide-3\">";
        // line 55
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 55, $this->source); })()), "Inscription")) : ("Inscription")), "html", null, true);
        echo "</button>
";
        // line 56
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "security/_form-registration.html.twig";
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
        return array (  183 => 56,  179 => 55,  173 => 52,  169 => 51,  166 => 50,  162 => 48,  159 => 47,  155 => 45,  152 => 44,  150 => 43,  145 => 41,  141 => 40,  138 => 39,  135 => 38,  131 => 36,  128 => 35,  126 => 34,  120 => 31,  116 => 30,  110 => 27,  106 => 26,  100 => 23,  96 => 22,  93 => 21,  89 => 19,  87 => 18,  82 => 16,  78 => 15,  72 => 12,  68 => 11,  62 => 8,  58 => 7,  52 => 4,  48 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
    <div class=\"form-group hide-2\">
        {{ form_label(form.surname) }}
        {{ form_widget(form.surname) }}
    </div>
    <div class=\"form-group hide-2\">
        {{ form_label(form.firstName) }}
        {{ form_widget(form.firstName) }}
    </div>
    <div class=\"form-group hide-2\">
        {{ form_label(form.email) }}
        {{ form_widget(form.email) }}
    </div>
    <div class=\"form-group hide-2\">
        {{ form_label(form.username) }}
        {{ form_widget(form.username) }}
    </div>
     {% if app.flashes('error') %}
        <p class=\"warning\">Cette adresse email ou ce nom utilisateur existent déjà</p>
    {% endif %}
    <div class=\"form-group hide-2\">
        {{ form_label(form.password) }}
        {{ form_widget(form.password) }}
    </div>
    <div class=\"form-group hide-2\">
        {{ form_label(form.gender) }}
        {{ form_widget(form.gender) }}
    </div>
    <div class=\"form-group hide-2\">
        {{ form_label(form.birthday) }}
        {{ form_widget(form.birthday) }}
        
    </div>
    {% if isMinimumAgeMet is defined %}
        {% if not isMinimumAgeMet %}
            <p class=\"warning\">** L'âge requis pour s'inscrire à <span class=\"warning-2\">My Metaverse</span> est de <span class=\"warning-2\">12 ans</span>.</p>
        {% endif %}
    {% endif %}
    <div class=\"form-group hide-2\">
        {{ form_label(form.avatarFile) }}
        {{ form_widget(form.avatarFile) }}
    </div>
    {% if isAvatarValid is defined %}
        {% if not isAvatarValid %}
            <p class=\"warning\">** Votre fichier doit être de type .png, .jpg ou .jpeg</p>
        {% endif %}
    {% else %}
        <p class=\"info\">** Votre fichier doit être de type <span class=\"warning-2\">.png</span> <span class=\"warning-2\">.jpg</span> ou <span class=\"warning-2\">.jpeg</span> </p>
    {% endif %}
    <div class=\"form-group hide-2\">
        {{ form_label(form.presentation) }}
        {{ form_widget(form.presentation) }}
    </div>
    
    <button type=\"submit\" class=\"btn hide-3\">{{ button_label|default(\"Inscription\") }}</button>
{{ form_end(form) }}
", "security/_form-registration.html.twig", "C:\\Users\\robocop\\Desktop\\REVISIONS WEB\\FIRST PROJECTS\\MyMetaverseV2.0\\MyMetaverse\\templates\\security\\_form-registration.html.twig");
    }
}
