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

/* default/videogame-carousel-card.html.twig */
class __TwigTemplate_632f7a1a6292f6fb269fffc35bebe0f7 extends Template
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
            'carousel' => [$this, 'block_carousel'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/videogame-carousel-card.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/videogame-carousel-card.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('head', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('carousel', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./css/landing-page/videogame-carousel.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./css/landing-page/homepage.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_carousel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        // line 8
        echo "  <div class=\"carrousel-card\">
    <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videogame_card", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9)]), "html", null, true);
        echo "\" style=\"color:rgb(230, 230, 235); text-decoration:none;\">
      <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 10, $this->source); })()), "imgTheme"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), "html", null, true);
        echo "\">
    
    <p>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), "html", null, true);
        echo "</p></a>
      ";
        // line 13
        if ((twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 13, $this->source); })()), "grade", [], "any", false, false, false, 13) >= 75)) {
            // line 14
            echo "        <h4 class=\"video-game-grade verygood\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 14, $this->source); })()), "grade", [], "any", false, false, false, 14), "html", null, true);
            echo "</h4>
      ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 15
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 15, $this->source); })()), "grade", [], "any", false, false, false, 15) <= 74) && (twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 15, $this->source); })()), "grade", [], "any", false, false, false, 15) >= 60))) {
            // line 16
            echo "        <h4 class=\"video-game-grade good\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 16, $this->source); })()), "grade", [], "any", false, false, false, 16), "html", null, true);
            echo "</h4>
      ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 17
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 17, $this->source); })()), "grade", [], "any", false, false, false, 17) <= 59) && (twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 17, $this->source); })()), "grade", [], "any", false, false, false, 17) >= 50))) {
            // line 18
            echo "        <h4 class=\"video-game-grade medium\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 18, $this->source); })()), "grade", [], "any", false, false, false, 18), "html", null, true);
            echo "</h4>
      ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 19
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 19, $this->source); })()), "grade", [], "any", false, false, false, 19) <= 49) && (twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 19, $this->source); })()), "grade", [], "any", false, false, false, 19) >= 35))) {
            // line 20
            echo "        <h4 class=\"video-game-grade notenough\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 20, $this->source); })()), "grade", [], "any", false, false, false, 20), "html", null, true);
            echo "</h4>
      ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 21
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 21, $this->source); })()), "grade", [], "any", false, false, false, 21) <= 34)) {
            // line 22
            echo "        <h4 class=\"video-game-grade bad\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 22, $this->source); })()), "grade", [], "any", false, false, false, 22), "html", null, true);
            echo "</h4>
      ";
        }
        // line 24
        echo "  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/videogame-carousel-card.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  154 => 24,  148 => 22,  146 => 21,  141 => 20,  139 => 19,  134 => 18,  132 => 17,  127 => 16,  125 => 15,  120 => 14,  118 => 13,  114 => 12,  107 => 10,  103 => 9,  100 => 8,  90 => 7,  78 => 4,  73 => 3,  63 => 2,  53 => 7,  50 => 6,  48 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('./css/landing-page/videogame-carousel.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('./css/landing-page/homepage.css') }}\">
{% endblock %}

{% block carousel %}
  <div class=\"carrousel-card\">
    <a href=\"{{ path('videogame_card', { 'id': videoGame.id }) }}\" style=\"color:rgb(230, 230, 235); text-decoration:none;\">
      <img src=\"{{ vich_uploader_asset(videoGame, 'imgTheme') }}\" alt=\"{{ videoGame.name }}\">
    
    <p>{{ videoGame.name }}</p></a>
      {% if videoGame.grade >= 75 %}
        <h4 class=\"video-game-grade verygood\">{{ videoGame.grade }}</h4>
      {% elseif videoGame.grade <= 74 and videoGame.grade >= 60 %}
        <h4 class=\"video-game-grade good\">{{ videoGame.grade }}</h4>
      {% elseif videoGame.grade <= 59 and videoGame.grade >= 50 %}
        <h4 class=\"video-game-grade medium\">{{ videoGame.grade }}</h4>
      {% elseif videoGame.grade <= 49 and videoGame.grade >= 35 %}
        <h4 class=\"video-game-grade notenough\">{{ videoGame.grade }}</h4>
      {% elseif videoGame.grade <= 34 %}
        <h4 class=\"video-game-grade bad\">{{ videoGame.grade }}</h4>
      {% endif %}
  </div>
{% endblock %}", "default/videogame-carousel-card.html.twig", "C:\\Users\\robocop\\Desktop\\REVISIONS WEB\\FIRST PROJECTS\\MyMetaverseV2.0\\MyMetaverse\\templates\\default\\videogame-carousel-card.html.twig");
    }
}
