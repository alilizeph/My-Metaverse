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

/* default/contact-form.html.twig */
class __TwigTemplate_ea69b15460b166366796c6f9e9057a98 extends Template
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
            'contactform' => [$this, 'block_contactform'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/contact-form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/contact-form.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 4
        yield from $this->unwrap()->yieldBlock('contactform', $context, $blocks);
        
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
        yield "\t<link rel=\"stylesheet\" href=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/landing-page/contact-form.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 4
    public function block_contactform($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contactform"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contactform"));

        // line 5
        yield "\t<article class=\"contact-card hide\">
\t\t<h2 class=\"hide-2\">Des suggestions de jeux à tester ?</h2>
\t\t<form class=\"contact-form\" action=\"mailto:buffardalex492@hotmail.fr\">
\t\t\t<section class=\"contact-form-head\">
\t\t\t\t<section class=\"form-group hide-2\">
\t\t\t\t\t<label for=\"mail\">Votre email*</label>
\t\t\t\t\t<input type=\"email\" name=\"email\" id=\"email\" required>
\t\t\t\t</section>
\t\t\t\t<section class=\"form-group hide-2\">
\t\t\t\t\t<label for=\"nom\">Votre Nom</label>
\t\t\t\t\t<input type=\"text\" name=\"nom\" id=\"nom\">
\t\t\t\t</section>
\t\t\t\t<section class=\"form-group hide-2\">
\t\t\t\t\t<label for=\"prenom\">Votre prénom</label>
\t\t\t\t\t<input type=\"text\" name=\"prenom\" id=\"prenom\">
\t\t\t\t</section>
\t\t\t</section>
\t\t\t<section class=\"contact-form-content\">
\t\t\t\t<section class=\"form-group hide-2\">
\t\t\t\t\t<label for=\"nom-jeu\">Nom du jeu*</label>
\t\t\t\t\t<input type=\"text\" name=\"nom-jeu\" id=\"nom-jeu\" required>
\t\t\t\t</section>
\t\t\t\t<section class=\"form-group hide-2\">
\t\t\t\t\t<label for=\"avis\">Votre avis/conseil*</label>
\t\t\t\t\t<textarea name=\"avis\" id=\"avis\" required></textarea>
\t\t\t\t</section>
\t\t\t</section>
\t\t\t<section class=\"form-footer hide-3\">
\t\t\t\t<button type=\"submit\">Envoyer</button>
\t\t\t\t<p id=\"advertisement\">* : Veuillez remplir ces champs obligatoires</p>
\t\t\t</section>
\t\t</form>
\t</article>
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
        return "default/contact-form.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  93 => 5,  83 => 4,  69 => 2,  59 => 1,  48 => 4,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block head %}
\t<link rel=\"stylesheet\" href=\"{{ asset('css/landing-page/contact-form.css') }}\">
{% endblock %}
{% block contactform %}
\t<article class=\"contact-card hide\">
\t\t<h2 class=\"hide-2\">Des suggestions de jeux à tester ?</h2>
\t\t<form class=\"contact-form\" action=\"mailto:buffardalex492@hotmail.fr\">
\t\t\t<section class=\"contact-form-head\">
\t\t\t\t<section class=\"form-group hide-2\">
\t\t\t\t\t<label for=\"mail\">Votre email*</label>
\t\t\t\t\t<input type=\"email\" name=\"email\" id=\"email\" required>
\t\t\t\t</section>
\t\t\t\t<section class=\"form-group hide-2\">
\t\t\t\t\t<label for=\"nom\">Votre Nom</label>
\t\t\t\t\t<input type=\"text\" name=\"nom\" id=\"nom\">
\t\t\t\t</section>
\t\t\t\t<section class=\"form-group hide-2\">
\t\t\t\t\t<label for=\"prenom\">Votre prénom</label>
\t\t\t\t\t<input type=\"text\" name=\"prenom\" id=\"prenom\">
\t\t\t\t</section>
\t\t\t</section>
\t\t\t<section class=\"contact-form-content\">
\t\t\t\t<section class=\"form-group hide-2\">
\t\t\t\t\t<label for=\"nom-jeu\">Nom du jeu*</label>
\t\t\t\t\t<input type=\"text\" name=\"nom-jeu\" id=\"nom-jeu\" required>
\t\t\t\t</section>
\t\t\t\t<section class=\"form-group hide-2\">
\t\t\t\t\t<label for=\"avis\">Votre avis/conseil*</label>
\t\t\t\t\t<textarea name=\"avis\" id=\"avis\" required></textarea>
\t\t\t\t</section>
\t\t\t</section>
\t\t\t<section class=\"form-footer hide-3\">
\t\t\t\t<button type=\"submit\">Envoyer</button>
\t\t\t\t<p id=\"advertisement\">* : Veuillez remplir ces champs obligatoires</p>
\t\t\t</section>
\t\t</form>
\t</article>
{% endblock %}
", "default/contact-form.html.twig", "C:\\Users\\robocop\\Desktop\\REVISIONS WEB\\FIRST PROJECTS\\MyMetaverseV2.0\\MyMetaverse\\templates\\default\\contact-form.html.twig");
    }
}
