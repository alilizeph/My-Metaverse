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

/* default/contact-form.html.twig */
class __TwigTemplate_3f5badc3af6cd2430008738772517487 extends Template
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
        echo "

";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 6
        $this->displayBlock('contactform', $context, $blocks);
        
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
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/landing-page/contact-form.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_contactform($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contactform"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contactform"));

        // line 7
        echo "    <article class=\"contact-card hide\">
        <h2 class=\"hide-2\">Des suggestions ?</h2>
        <form class=\"contact-form\" action=\"mailto:buffardalex492@hotmail.fr\">
            <div class=\"contact-form-head\">
                <div class=\"form-group hide-2\">
                    <label for=\"mail\">Votre email*</label>
                    <input type=\"email\" name=\"email\" id=\"email\" required>
                </div>
                <div class=\"form-group hide-2\">
                    <label for=\"nom\">Votre Nom</label>
                    <input type=\"text\" name=\"nom\" id=\"nom\">
                </div>
                <div class=\"form-group hide-2\">
                    <label for=\"prenom\">Votre prénom</label>
                    <input type=\"text\" name=\"prenom\" id=\"prenom\">
                </div>
            </div>
            <div class=\"contact-form-content\">
                <div class=\"form-group hide-2\">
                    <label for=\"nom-jeu\">Nom du jeu*</label>
                    <input type=\"text\" name=\"nom-jeu\" id=\"nom-jeu\" required>
                </div>
                <div class=\"form-group hide-2\">
                    <label for=\"avis\">Votre avis/conseil*</label>
                    <textarea name=\"avis\" id=\"avis\" required></textarea>
                </div>
            </div>
            <div class=\"form-footer hide-3\">
                <button type=\"submit\">Envoyer</button>
                <p id=\"advertisement\">* : Veuillez remplir ces champs obligatoires</p>
            </div>
        </form>    
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
        return "default/contact-form.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  94 => 7,  84 => 6,  71 => 4,  61 => 3,  51 => 6,  49 => 3,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/landing-page/contact-form.css') }}\">
{% endblock %}
{% block contactform %}
    <article class=\"contact-card hide\">
        <h2 class=\"hide-2\">Des suggestions ?</h2>
        <form class=\"contact-form\" action=\"mailto:buffardalex492@hotmail.fr\">
            <div class=\"contact-form-head\">
                <div class=\"form-group hide-2\">
                    <label for=\"mail\">Votre email*</label>
                    <input type=\"email\" name=\"email\" id=\"email\" required>
                </div>
                <div class=\"form-group hide-2\">
                    <label for=\"nom\">Votre Nom</label>
                    <input type=\"text\" name=\"nom\" id=\"nom\">
                </div>
                <div class=\"form-group hide-2\">
                    <label for=\"prenom\">Votre prénom</label>
                    <input type=\"text\" name=\"prenom\" id=\"prenom\">
                </div>
            </div>
            <div class=\"contact-form-content\">
                <div class=\"form-group hide-2\">
                    <label for=\"nom-jeu\">Nom du jeu*</label>
                    <input type=\"text\" name=\"nom-jeu\" id=\"nom-jeu\" required>
                </div>
                <div class=\"form-group hide-2\">
                    <label for=\"avis\">Votre avis/conseil*</label>
                    <textarea name=\"avis\" id=\"avis\" required></textarea>
                </div>
            </div>
            <div class=\"form-footer hide-3\">
                <button type=\"submit\">Envoyer</button>
                <p id=\"advertisement\">* : Veuillez remplir ces champs obligatoires</p>
            </div>
        </form>    
    </article>
{% endblock %}
", "default/contact-form.html.twig", "C:\\Users\\robocop\\Desktop\\REVISIONS WEB\\FIRST PROJECTS\\MyMetaverseV2.0\\MyMetaverse\\templates\\default\\contact-form.html.twig");
    }
}
