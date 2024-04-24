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

/* default/index.html.twig */
class __TwigTemplate_7add27bd896d8be9b37c3d4ca85e416f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
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
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./css/landing-page/homepage.css"), "html", null, true);
        echo "\">

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello DefaultController! Homepage
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "\t<main>
\t\t";
        // line 13
        if (array_key_exists("errorAvatar", $context)) {
            // line 14
            echo "\t\t\t<section>
\t\t\t\t<p>";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["errorAvatar"]) || array_key_exists("errorAvatar", $context) ? $context["errorAvatar"] : (function () { throw new RuntimeError('Variable "errorAvatar" does not exist.', 15, $this->source); })()), "html", null, true);
            echo "</p>
\t\t\t</section>
\t\t";
        }
        // line 18
        echo "\t\t<article class=\"popup hide\">
\t\t\t<h2 class=\"hide-2\">Bienvenue sur My Metaverse</h2>
\t\t\t";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("AUTHENTICATED_FULLY"))) {
            // line 21
            echo "\t\t\t\t<h3 class=\"hide-2\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "username", [], "any", false, false, false, 21), "html", null, true);
            echo "</h3>
\t\t\t";
        }
        // line 23
        echo "\t\t\t<p class=\"hide-3\">
\t\t\t\tMy Metaverse est un site Web de notation de jeu vidéo selon mes critères personnels.
\t\t\t</p>
\t\t\t<p class=\"hide-3\">
\t\t\t\tIl s'agit de mon tout 1er projet Symfony professionnel.
\t\t\t\t<br>J'ai donc choisi un sujet qui me plait beaucoup et qui peut être très intéressant à exploiter : les Jeux
\t\t\t\t        Vidéos.
\t\t\t</p>
\t\t\t<p class=\"hide-3\">
\t\t\t\tMerci pour l'attention que vous portez à ce projet qui me plaît.
\t\t\t</p>
\t\t\t<button id=\"access\" class=\"hide-4\">Accéder aux avis</button>
\t\t\t<script>
\t\t\t\tlet btn = document.getElementById('access');
          btn.addEventListener('click', function () {
          window.location.href =\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videogames_list");
        echo "\";
        });
\t\t\t</script>
\t\t</article>
\t\t";
        // line 42
        if (array_key_exists("videoGames", $context)) {
            // line 43
            echo "\t\t\t<article class=\"carousel hide\">
\t\t\t\t<h2>exemples de jeux testés</h2>
\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["videoGames"]) || array_key_exists("videoGames", $context) ? $context["videoGames"] : (function () { throw new RuntimeError('Variable "videoGames" does not exist.', 46, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["videoGame"]) {
                // line 47
                echo "\t\t\t\t\t\t";
                $this->loadTemplate("./default/videogame-carousel-card.html.twig", "default/index.html.twig", 47)->display(twig_array_merge($context, ["videoGame" => $context["videoGame"]]));
                // line 48
                echo "\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['videoGame'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "\t\t\t\t</div>
\t\t\t</article>
\t\t";
        }
        // line 52
        echo "\t\t";
        $this->loadTemplate("./default/contact-form.html.twig", "default/index.html.twig", 52)->display($context);
        // line 53
        echo "\t</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/index.html.twig";
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
        return array (  213 => 53,  210 => 52,  205 => 49,  191 => 48,  188 => 47,  171 => 46,  166 => 43,  164 => 42,  157 => 38,  140 => 23,  134 => 21,  132 => 20,  128 => 18,  122 => 15,  119 => 14,  117 => 13,  114 => 12,  104 => 11,  84 => 8,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block head %}
\t<link rel=\"stylesheet\" href=\"{{ asset('./css/landing-page/homepage.css') }}\">

{% endblock %}

{% block title %}Hello DefaultController! Homepage
{% endblock %}

{% block body %}
\t<main>
\t\t{% if errorAvatar is defined %}
\t\t\t<section>
\t\t\t\t<p>{{ errorAvatar }}</p>
\t\t\t</section>
\t\t{% endif %}
\t\t<article class=\"popup hide\">
\t\t\t<h2 class=\"hide-2\">Bienvenue sur My Metaverse</h2>
\t\t\t{% if(app.user and is_granted('AUTHENTICATED_FULLY')) %}
\t\t\t\t<h3 class=\"hide-2\">{{ app.user.username }}</h3>
\t\t\t{% endif %}
\t\t\t<p class=\"hide-3\">
\t\t\t\tMy Metaverse est un site Web de notation de jeu vidéo selon mes critères personnels.
\t\t\t</p>
\t\t\t<p class=\"hide-3\">
\t\t\t\tIl s'agit de mon tout 1er projet Symfony professionnel.
\t\t\t\t<br>J'ai donc choisi un sujet qui me plait beaucoup et qui peut être très intéressant à exploiter : les Jeux
\t\t\t\t        Vidéos.
\t\t\t</p>
\t\t\t<p class=\"hide-3\">
\t\t\t\tMerci pour l'attention que vous portez à ce projet qui me plaît.
\t\t\t</p>
\t\t\t<button id=\"access\" class=\"hide-4\">Accéder aux avis</button>
\t\t\t<script>
\t\t\t\tlet btn = document.getElementById('access');
          btn.addEventListener('click', function () {
          window.location.href =\"{{ path('videogames_list') }}\";
        });
\t\t\t</script>
\t\t</article>
\t\t{% if videoGames is defined %}
\t\t\t<article class=\"carousel hide\">
\t\t\t\t<h2>exemples de jeux testés</h2>
\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t{% for videoGame in videoGames %}
\t\t\t\t\t\t{% include './default/videogame-carousel-card.html.twig' with {'videoGame' : videoGame } %}
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</article>
\t\t{% endif %}
\t\t{% include(\"./default/contact-form.html.twig\") %}
\t</main>
{% endblock %}
", "default/index.html.twig", "C:\\Users\\robocop\\Desktop\\REVISIONS WEB\\FIRST PROJECTS\\MyMetaverseV2.0\\MyMetaverse\\templates\\default\\index.html.twig");
    }
}
