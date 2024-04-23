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

/* user/public-profile.html.twig */
class __TwigTemplate_2909fa3383c31f375099f3ae7e15a0e3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/public-profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/public-profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/public-profile.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "User";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./css/profiles/public-profile.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <main>
        ";
        // line 11
        if ((array_key_exists("nbRandomComments", $context) && ((isset($context["nbRandomComments"]) || array_key_exists("nbRandomComments", $context) ? $context["nbRandomComments"] : (function () { throw new RuntimeError('Variable "nbRandomComments" does not exist.', 11, $this->source); })()) == 2))) {
            // line 12
            echo "        <article class=\"profile-public profile-public-with-comments hide\">
        ";
        } elseif ((        // line 13
array_key_exists("nbRandomComments", $context) && ((isset($context["nbRandomComments"]) || array_key_exists("nbRandomComments", $context) ? $context["nbRandomComments"] : (function () { throw new RuntimeError('Variable "nbRandomComments" does not exist.', 13, $this->source); })()) == 1))) {
            // line 14
            echo "        <article class=\"profile-public profile-public-with-comment hide\">
        ";
        } else {
            // line 16
            echo "        <article class=\"profile-public hide\">
        ";
        }
        // line 18
        echo "            <section class=\"profile-public-head hide-2\">
                <div class=\"profile-public-avatar hide-2\">
                    ";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 20, $this->source); })()), "avatarNewFileName", [], "any", false, false, false, 20) != null)) {
            // line 21
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "avatarFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "username", [], "any", false, false, false, 21), "html", null, true);
            echo "\" class=\"avatar hide-2\">
                    ";
        }
        // line 23
        echo "                </div>
                <div class=\"profile-public-info hide-2\">
                    <h3>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "username", [], "any", false, false, false, 25), "html", null, true);
        echo "</h3>
                    <h4>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "surname", [], "any", false, false, false, 26), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "firstName", [], "any", false, false, false, 26), "html", null, true);
        echo "</h4>
                    <h5>
                        Email: <a href=\"mailto:";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "email", [], "any", false, false, false, 28), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "email", [], "any", false, false, false, 28), "html", null, true);
        echo "</a>
                        ";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29) > 1)) {
            // line 30
            echo "                        <span class=\"hidden-text\">* ces adresses mail sont fictives</span>
                        ";
        }
        // line 32
        echo "                    </h5>
                </div> 
            </section>
            <section class=\"profile-public-presentation-bloc hide-3\">
                <div class=\"profile-public-presentation hide-3\">
                    <h4>Présentation</h4>
                    <h6><span>Genre : </soan> ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 38, $this->source); })()), "gender", [], "any", false, false, false, 38), "html", null, true);
        echo "</h6>
                    <p>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 39, $this->source); })()), "presentation", [], "any", false, false, false, 39), "html", null, true);
        echo "</p>
                </div>
                <div class=\"profile-public-stats hide-3\">
                    <h4 class=\" hide-3\">Statistiques</h4>
                    <div class=\"profile-public-stats-zone hide-3\">
                        <div class=\"profile-public-stats-group hide-3\">
                            <h5>Nb commentaires</h5>
                            <h6>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 46, $this->source); })()), "nbComments", [], "any", false, false, false, 46), "html", null, true);
        echo "</h6>
                        </div>
                        <div class=\"profile-public-stats-group hide-3\">
                            <h5>Nb Likes</h5>
                            <h6>";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["nbLikes"]) || array_key_exists("nbLikes", $context) ? $context["nbLikes"] : (function () { throw new RuntimeError('Variable "nbLikes" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "</h6>
                        </div>
                        ";
        // line 52
        if (array_key_exists("averageComments", $context)) {
            // line 53
            echo "                        <div class=\"profile-public-stats-group hide-3\">
                            <h5>Note moyenne</h5>
                            <h6>";
            // line 55
            echo twig_escape_filter($this->env, (isset($context["averageComments"]) || array_key_exists("averageComments", $context) ? $context["averageComments"] : (function () { throw new RuntimeError('Variable "averageComments" does not exist.', 55, $this->source); })()), "html", null, true);
            echo "</h6>
                        </div>
                        ";
        }
        // line 58
        echo "                    </div>
                </div>
            </section>
            ";
        // line 61
        if (array_key_exists("randomComments", $context)) {
            // line 62
            echo "                <section class=\"profile-public-randomcom hide-3\">
                    <h3 class=\"hide-3 comments\">Commentaires aléatoires</h3>
                    <div class=\"profile-public-randomcom-list hide-4\">                    
                        ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["randomComments"]) || array_key_exists("randomComments", $context) ? $context["randomComments"] : (function () { throw new RuntimeError('Variable "randomComments" does not exist.', 65, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 66
                echo "                            ";
                $this->loadTemplate("/comments/comment-profile-public.html.twig", "user/public-profile.html.twig", 66)->display(twig_array_merge($context, ["comment" => $context["comment"]]));
                // line 67
                echo "                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "                    </div>
                </section>
            ";
        }
        // line 71
        echo "        </article>
    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "user/public-profile.html.twig";
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
        return array (  268 => 71,  263 => 68,  249 => 67,  246 => 66,  229 => 65,  224 => 62,  222 => 61,  217 => 58,  211 => 55,  207 => 53,  205 => 52,  200 => 50,  193 => 46,  183 => 39,  179 => 38,  171 => 32,  167 => 30,  165 => 29,  159 => 28,  152 => 26,  148 => 25,  144 => 23,  136 => 21,  134 => 20,  130 => 18,  126 => 16,  122 => 14,  120 => 13,  117 => 12,  115 => 11,  112 => 10,  102 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}User{% endblock %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('./css/profiles/public-profile.css') }}\">
{% endblock %}

{% block body %}
    <main>
        {% if(nbRandomComments is defined and nbRandomComments == 2) %}
        <article class=\"profile-public profile-public-with-comments hide\">
        {% elseif(nbRandomComments is defined and nbRandomComments == 1) %}
        <article class=\"profile-public profile-public-with-comment hide\">
        {% else %}
        <article class=\"profile-public hide\">
        {% endif %}
            <section class=\"profile-public-head hide-2\">
                <div class=\"profile-public-avatar hide-2\">
                    {% if user.avatarNewFileName != null %}
                        <img src=\"{{ vich_uploader_asset(user, 'avatarFile') }}\" alt=\"{{ user.username }}\" class=\"avatar hide-2\">
                    {% endif %}
                </div>
                <div class=\"profile-public-info hide-2\">
                    <h3>{{ user.username }}</h3>
                    <h4>{{ user.surname }} {{ user.firstName }}</h4>
                    <h5>
                        Email: <a href=\"mailto:{{ user.email }}\">{{ user.email }}</a>
                        {% if(user.id > 1) %}
                        <span class=\"hidden-text\">* ces adresses mail sont fictives</span>
                        {% endif %}
                    </h5>
                </div> 
            </section>
            <section class=\"profile-public-presentation-bloc hide-3\">
                <div class=\"profile-public-presentation hide-3\">
                    <h4>Présentation</h4>
                    <h6><span>Genre : </soan> {{ user.gender }}</h6>
                    <p>{{ user.presentation }}</p>
                </div>
                <div class=\"profile-public-stats hide-3\">
                    <h4 class=\" hide-3\">Statistiques</h4>
                    <div class=\"profile-public-stats-zone hide-3\">
                        <div class=\"profile-public-stats-group hide-3\">
                            <h5>Nb commentaires</h5>
                            <h6>{{ user.nbComments }}</h6>
                        </div>
                        <div class=\"profile-public-stats-group hide-3\">
                            <h5>Nb Likes</h5>
                            <h6>{{ nbLikes }}</h6>
                        </div>
                        {% if averageComments is defined %}
                        <div class=\"profile-public-stats-group hide-3\">
                            <h5>Note moyenne</h5>
                            <h6>{{ averageComments }}</h6>
                        </div>
                        {% endif %}
                    </div>
                </div>
            </section>
            {% if(randomComments is defined)  %}
                <section class=\"profile-public-randomcom hide-3\">
                    <h3 class=\"hide-3 comments\">Commentaires aléatoires</h3>
                    <div class=\"profile-public-randomcom-list hide-4\">                    
                        {% for comment in randomComments %}
                            {% include '/comments/comment-profile-public.html.twig' with { 'comment' : comment } %}
                        {% endfor %}
                    </div>
                </section>
            {% endif %}
        </article>
    </main>
{% endblock %}
", "user/public-profile.html.twig", "C:\\Users\\robocop\\Desktop\\REVISIONS WEB\\FIRST PROJECTS\\MyMetaverseV2.0\\MyMetaverse\\templates\\user\\public-profile.html.twig");
    }
}
