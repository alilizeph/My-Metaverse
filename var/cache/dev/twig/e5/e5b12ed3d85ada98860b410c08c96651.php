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

/* video_game/index.html.twig */
class __TwigTemplate_94fa3bcc98c665741a66bf96e879ea22 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "video_game/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "video_game/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "video_game/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
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

        yield "VideoGame index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <h1>VideoGame index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Advice</th>
                <th>ImgBox</th>
                <th>ImgTheme</th>
                <th>Grade</th>
                <th>ReleaseDate</th>
                <th>Disponibility</th>
                <th>AveragePrice</th>
                <th>Link</th>
                <th>AverageUsersGrade</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["video_games"]) || array_key_exists("video_games", $context) ? $context["video_games"] : (function () { throw new RuntimeError('Variable "video_games" does not exist.', 27, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["video_game"]) {
            // line 28
            yield "            <tr>
                <td>";
            // line 29
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["video_game"], "id", [], "any", false, false, false, 29), "html", null, true);
            yield "</td>
                <td>";
            // line 30
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["video_game"], "name", [], "any", false, false, false, 30), "html", null, true);
            yield "</td>
                <td>";
            // line 31
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["video_game"], "description", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
                <td>";
            // line 32
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["video_game"], "advice", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
                <td>";
            // line 33
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["video_game"], "imgBox", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
                <td>";
            // line 34
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["video_game"], "imgTheme", [], "any", false, false, false, 34), "html", null, true);
            yield "</td>
                <td>";
            // line 35
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["video_game"], "grade", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
                <td>";
            // line 36
            ((CoreExtension::getAttribute($this->env, $this->source, $context["video_game"], "releaseDate", [], "any", false, false, false, 36)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["video_game"], "releaseDate", [], "any", false, false, false, 36), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
            yield "</td>
                <td>";
            // line 37
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["video_game"], "disponibility", [], "any", false, false, false, 37)) ? ("Yes") : ("No"));
            yield "</td>
                <td>";
            // line 38
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["video_game"], "averagePrice", [], "any", false, false, false, 38), "html", null, true);
            yield "</td>
                <td>";
            // line 39
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["video_game"], "link", [], "any", false, false, false, 39), "html", null, true);
            yield "</td>
                <td>";
            // line 40
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["video_game"], "averageUsersGrade", [], "any", false, false, false, 40), "html", null, true);
            yield "</td>
                <td>
                    <a href=\"";
            // line 42
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_video_game_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["video_game"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            yield "\">show</a>
                    <a href=\"";
            // line 43
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_video_game_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["video_game"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            yield "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            yield "            <tr>
                <td colspan=\"13\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video_game'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        yield "        </tbody>
    </table>

    <a href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_video_game_new");
        yield "\">Create new</a>
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
        return "video_game/index.html.twig";
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
        return array (  197 => 54,  192 => 51,  183 => 47,  174 => 43,  170 => 42,  165 => 40,  161 => 39,  157 => 38,  153 => 37,  149 => 36,  145 => 35,  141 => 34,  137 => 33,  133 => 32,  129 => 31,  125 => 30,  121 => 29,  118 => 28,  113 => 27,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}VideoGame index{% endblock %}

{% block body %}
    <h1>VideoGame index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Advice</th>
                <th>ImgBox</th>
                <th>ImgTheme</th>
                <th>Grade</th>
                <th>ReleaseDate</th>
                <th>Disponibility</th>
                <th>AveragePrice</th>
                <th>Link</th>
                <th>AverageUsersGrade</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for video_game in video_games %}
            <tr>
                <td>{{ video_game.id }}</td>
                <td>{{ video_game.name }}</td>
                <td>{{ video_game.description }}</td>
                <td>{{ video_game.advice }}</td>
                <td>{{ video_game.imgBox }}</td>
                <td>{{ video_game.imgTheme }}</td>
                <td>{{ video_game.grade }}</td>
                <td>{{ video_game.releaseDate ? video_game.releaseDate|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ video_game.disponibility ? 'Yes' : 'No' }}</td>
                <td>{{ video_game.averagePrice }}</td>
                <td>{{ video_game.link }}</td>
                <td>{{ video_game.averageUsersGrade }}</td>
                <td>
                    <a href=\"{{ path('app_video_game_show', {'id': video_game.id}) }}\">show</a>
                    <a href=\"{{ path('app_video_game_edit', {'id': video_game.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"13\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_video_game_new') }}\">Create new</a>
{% endblock %}
", "video_game/index.html.twig", "C:\\Users\\robocop\\Desktop\\REVISIONS WEB\\FIRST PROJECTS\\MyMetaverseV2.0\\MyMetaverse\\templates\\video_game\\index.html.twig");
    }
}
