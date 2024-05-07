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

/* security/_form-registration.html.twig */
class __TwigTemplate_e4d101ce9c2309ad68003f09ef2d327c extends Template
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        yield "
    <section class=\"form-group hide-2\">
        ";
        // line 3
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "surname", [], "any", false, false, false, 3), 'label');
        yield "
        ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "surname", [], "any", false, false, false, 4), 'widget');
        yield "
    </section>
    <section class=\"form-group hide-2\">
        ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "firstName", [], "any", false, false, false, 7), 'label');
        yield "
        ";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "firstName", [], "any", false, false, false, 8), 'widget');
        yield "
    </section>
    <section class=\"form-group hide-2\">
        ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "email", [], "any", false, false, false, 11), 'label');
        yield "
        ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "email", [], "any", false, false, false, 12), 'widget');
        yield "
    </section>
    <section class=\"form-group hide-2\">
        ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "username", [], "any", false, false, false, 15), 'label');
        yield "
        ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "username", [], "any", false, false, false, 16), 'widget');
        yield "
    </section>
    ";
        // line 18
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "flashes", ["error"], "method", false, false, false, 18)) {
            // line 19
            yield "        <p class=\"warning\">Cette adresse email ou ce nom utilisateur existent déjà</p>
    ";
        }
        // line 21
        yield "    <section class=\"form-group hide-2\">
        ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "password", [], "any", false, false, false, 22), 'label');
        yield "
        ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "password", [], "any", false, false, false, 23), 'widget');
        yield "
    </section>
    <section class=\"form-group hide-2\">
        ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "gender", [], "any", false, false, false, 26), 'label');
        yield "
        ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "gender", [], "any", false, false, false, 27), 'widget');
        yield "
    </section>
    <section class=\"form-group hide-2\">
        ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "birthday", [], "any", false, false, false, 30), 'label');
        yield "
        ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "birthday", [], "any", false, false, false, 31), 'widget');
        yield "
    </section>
    ";
        // line 33
        if (array_key_exists("isMinimumAgeMet", $context)) {
            // line 34
            yield "        ";
            if ( !(isset($context["isMinimumAgeMet"]) || array_key_exists("isMinimumAgeMet", $context) ? $context["isMinimumAgeMet"] : (function () { throw new RuntimeError('Variable "isMinimumAgeMet" does not exist.', 34, $this->source); })())) {
                // line 35
                yield "            <p class=\"warning\">** L'âge requis pour s'inscrire à
                <span class=\"warning-2\">My Metaverse</span>
                est de
                <span class=\"warning-2\">12 ans</span>.</p>
        ";
            }
            // line 40
            yield "    ";
        }
        // line 41
        yield "    <section class=\"form-group hide-2\">
        ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "avatarFile", [], "any", false, false, false, 42), 'label');
        yield "
        ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "avatarFile", [], "any", false, false, false, 43), 'widget');
        yield "
    </section>
    ";
        // line 45
        if (array_key_exists("isAvatarValid", $context)) {
            // line 46
            yield "        ";
            if ( !(isset($context["isAvatarValid"]) || array_key_exists("isAvatarValid", $context) ? $context["isAvatarValid"] : (function () { throw new RuntimeError('Variable "isAvatarValid" does not exist.', 46, $this->source); })())) {
                // line 47
                yield "            <p class=\"warning\">** Votre fichier doit être de type .png, .jpg ou .jpeg</p>
        ";
            }
            // line 49
            yield "    ";
        } else {
            // line 50
            yield "        <p class=\"info\">** Votre fichier doit être de type
            <span class=\"warning-2\">.png</span>
            <span class=\"warning-2\">.jpg</span>
            ou
            <span class=\"warning-2\">.jpeg</span>
        </p>
    ";
        }
        // line 57
        yield "    <section class=\"form-group hide-2\">
        ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "presentation", [], "any", false, false, false, 58), 'label');
        yield "
        ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "presentation", [], "any", false, false, false, 59), 'widget');
        yield "
    </section>
    <section class=\"form-group hide-2 private-fields-dispo\">
        ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "privateFieldsDisponibility", [], "any", false, false, false, 62), 'label');
        yield "
        ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "privateFieldsDisponibility", [], "any", false, false, false, 63), 'widget');
        yield "
    </section>
    <button type=\"submit\" class=\"btn hide-3\">";
        // line 65
        yield Twig\Extension\EscaperExtension::escape($this->env, ((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::defaultFilter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 65, $this->source); })()), "Inscription")) : ("Inscription")), "html", null, true);
        yield "</button>
";
        // line 66
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), 'form_end');
        yield "
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
        return array (  200 => 66,  196 => 65,  191 => 63,  187 => 62,  181 => 59,  177 => 58,  174 => 57,  165 => 50,  162 => 49,  158 => 47,  155 => 46,  153 => 45,  148 => 43,  144 => 42,  141 => 41,  138 => 40,  131 => 35,  128 => 34,  126 => 33,  121 => 31,  117 => 30,  111 => 27,  107 => 26,  101 => 23,  97 => 22,  94 => 21,  90 => 19,  88 => 18,  83 => 16,  79 => 15,  73 => 12,  69 => 11,  63 => 8,  59 => 7,  53 => 4,  49 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
    <section class=\"form-group hide-2\">
        {{ form_label(form.surname) }}
        {{ form_widget(form.surname) }}
    </section>
    <section class=\"form-group hide-2\">
        {{ form_label(form.firstName) }}
        {{ form_widget(form.firstName) }}
    </section>
    <section class=\"form-group hide-2\">
        {{ form_label(form.email) }}
        {{ form_widget(form.email) }}
    </section>
    <section class=\"form-group hide-2\">
        {{ form_label(form.username) }}
        {{ form_widget(form.username) }}
    </section>
    {% if app.flashes('error') %}
        <p class=\"warning\">Cette adresse email ou ce nom utilisateur existent déjà</p>
    {% endif %}
    <section class=\"form-group hide-2\">
        {{ form_label(form.password) }}
        {{ form_widget(form.password) }}
    </section>
    <section class=\"form-group hide-2\">
        {{ form_label(form.gender) }}
        {{ form_widget(form.gender) }}
    </section>
    <section class=\"form-group hide-2\">
        {{ form_label(form.birthday) }}
        {{ form_widget(form.birthday) }}
    </section>
    {% if isMinimumAgeMet is defined %}
        {% if not isMinimumAgeMet %}
            <p class=\"warning\">** L'âge requis pour s'inscrire à
                <span class=\"warning-2\">My Metaverse</span>
                est de
                <span class=\"warning-2\">12 ans</span>.</p>
        {% endif %}
    {% endif %}
    <section class=\"form-group hide-2\">
        {{ form_label(form.avatarFile) }}
        {{ form_widget(form.avatarFile) }}
    </section>
    {% if isAvatarValid is defined %}
        {% if not isAvatarValid %}
            <p class=\"warning\">** Votre fichier doit être de type .png, .jpg ou .jpeg</p>
        {% endif %}
    {% else %}
        <p class=\"info\">** Votre fichier doit être de type
            <span class=\"warning-2\">.png</span>
            <span class=\"warning-2\">.jpg</span>
            ou
            <span class=\"warning-2\">.jpeg</span>
        </p>
    {% endif %}
    <section class=\"form-group hide-2\">
        {{ form_label(form.presentation) }}
        {{ form_widget(form.presentation) }}
    </section>
    <section class=\"form-group hide-2 private-fields-dispo\">
        {{ form_label(form.privateFieldsDisponibility) }}
        {{ form_widget(form.privateFieldsDisponibility) }}
    </section>
    <button type=\"submit\" class=\"btn hide-3\">{{ button_label|default(\"Inscription\") }}</button>
{{ form_end(form) }}
", "security/_form-registration.html.twig", "C:\\Users\\robocop\\Desktop\\REVISIONS WEB\\FIRST PROJECTS\\MyMetaverseV2.0\\MyMetaverse\\templates\\security\\_form-registration.html.twig");
    }
}
