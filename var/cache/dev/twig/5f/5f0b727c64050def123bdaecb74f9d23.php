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
        echo "    <link rel=\"stylesheet\" href=\"";
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

        echo "Hello DefaultController! Homepage";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "<main>
  ";
        // line 12
        if (array_key_exists("errorAvatar", $context)) {
            // line 13
            echo "    <section>
      <p>";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["errorAvatar"]) || array_key_exists("errorAvatar", $context) ? $context["errorAvatar"] : (function () { throw new RuntimeError('Variable "errorAvatar" does not exist.', 14, $this->source); })()), "html", null, true);
            echo "</p>
    </section>
  ";
        }
        // line 17
        echo "    <article class=\"popup hide\" >
      <h2 class=\"hide-2\">Bienvenue sur My Metaverse</h2>
      ";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("AUTHENTICATED_FULLY"))) {
            // line 20
            echo "      <h3 class=\"hide-2\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "username", [], "any", false, false, false, 20), "html", null, true);
            echo "</h3>
      ";
        }
        // line 22
        echo "      <p class=\"hide-3\">
        My Metaverse est un site Web de notation de jeu vidéo selon mes critères personnels.
      </p>
      <p class=\"hide-3\">
        Il s'agit de mon tout 1er projet Symfony professionnel.
        <br>J'ai donc choisi un sujet qui me plait beaucoup et qui peut être très intéressant à exploiter : les Jeux
        Vidéos.
      </p>
      <p class=\"hide-3\">
        Merci pour l'attention que vous portez à ce projet qui me plaît.
      </p>
      <button id=\"access\" class=\"hide-4\">Accéder aux avis</button>
      <script>
        let btn = document.getElementById('access');
        btn.addEventListener('click', function() {
          window.location.href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videogames_list");
        echo "\";
        })
      </script>
    </article>
    ";
        // line 41
        if (array_key_exists("videoGames", $context)) {
            // line 42
            echo "      <article class=\"carousel hide\">
        <h2>exemples de jeux testés</h2>
        <div class=\"carousel-inner\">
            ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["videoGames"]) || array_key_exists("videoGames", $context) ? $context["videoGames"] : (function () { throw new RuntimeError('Variable "videoGames" does not exist.', 45, $this->source); })()));
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
                // line 46
                echo "              ";
                $this->loadTemplate("./default/videogame-carousel-card.html.twig", "default/index.html.twig", 46)->display(twig_array_merge($context, ["videoGame" => $context["videoGame"]]));
                // line 47
                echo "            ";
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
            // line 48
            echo "        </div>
      </article>
    ";
        }
        // line 51
        echo "    ";
        $this->loadTemplate("./default/contact-form.html.twig", "default/index.html.twig", 51)->display($context);
        // line 52
        echo "  </main>
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
        return array (  212 => 52,  209 => 51,  204 => 48,  190 => 47,  187 => 46,  170 => 45,  165 => 42,  163 => 41,  156 => 37,  139 => 22,  133 => 20,  131 => 19,  127 => 17,  121 => 14,  118 => 13,  116 => 12,  113 => 11,  103 => 10,  84 => 8,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('./css/landing-page/homepage.css') }}\">
    
{% endblock %}

{% block title %}Hello DefaultController! Homepage{% endblock %}

{% block body %}
<main>
  {% if errorAvatar is defined %}
    <section>
      <p>{{ errorAvatar }}</p>
    </section>
  {% endif %}
    <article class=\"popup hide\" >
      <h2 class=\"hide-2\">Bienvenue sur My Metaverse</h2>
      {% if(app.user and is_granted('AUTHENTICATED_FULLY')) %}
      <h3 class=\"hide-2\">{{ app.user.username }}</h3>
      {% endif %}
      <p class=\"hide-3\">
        My Metaverse est un site Web de notation de jeu vidéo selon mes critères personnels.
      </p>
      <p class=\"hide-3\">
        Il s'agit de mon tout 1er projet Symfony professionnel.
        <br>J'ai donc choisi un sujet qui me plait beaucoup et qui peut être très intéressant à exploiter : les Jeux
        Vidéos.
      </p>
      <p class=\"hide-3\">
        Merci pour l'attention que vous portez à ce projet qui me plaît.
      </p>
      <button id=\"access\" class=\"hide-4\">Accéder aux avis</button>
      <script>
        let btn = document.getElementById('access');
        btn.addEventListener('click', function() {
          window.location.href=\"{{ path('videogames_list') }}\";
        })
      </script>
    </article>
    {% if videoGames is defined %}
      <article class=\"carousel hide\">
        <h2>exemples de jeux testés</h2>
        <div class=\"carousel-inner\">
            {% for videoGame in videoGames %}
              {% include './default/videogame-carousel-card.html.twig' with {'videoGame' : videoGame } %}
            {% endfor %}
        </div>
      </article>
    {% endif %}
    {% include(\"./default/contact-form.html.twig\") %}
  </main>
{% endblock %}
", "default/index.html.twig", "C:\\Users\\robocop\\Desktop\\REVISIONS WEB\\FIRST PROJECTS\\MyMetaverseV2.0\\MyMetaverse\\templates\\default\\index.html.twig");
    }
}
