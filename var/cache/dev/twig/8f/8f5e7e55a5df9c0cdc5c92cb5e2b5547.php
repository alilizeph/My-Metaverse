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

/* video_game/show.html.twig */
class __TwigTemplate_207f8f016aa4bcbc4e2a061fffc578e6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "video_game/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "video_game/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "video_game/show.html.twig", 1);
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

        yield "VideoGame";
        
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
        yield "    <h1>VideoGame</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 16
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 20
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 20, $this->source); })()), "description", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Advice</th>
                <td>";
        // line 24
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 24, $this->source); })()), "advice", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>ImgBox</th>
                <td>";
        // line 28
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 28, $this->source); })()), "imgBox", [], "any", false, false, false, 28), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>ImgTheme</th>
                <td>";
        // line 32
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 32, $this->source); })()), "imgTheme", [], "any", false, false, false, 32), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Grade</th>
                <td>";
        // line 36
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 36, $this->source); })()), "grade", [], "any", false, false, false, 36), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>ReleaseDate</th>
                <td>";
        // line 40
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 40, $this->source); })()), "releaseDate", [], "any", false, false, false, 40)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 40, $this->source); })()), "releaseDate", [], "any", false, false, false, 40), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
        yield "</td>
            </tr>
            <tr>
                <th>Disponibility</th>
                <td>";
        // line 44
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 44, $this->source); })()), "disponibility", [], "any", false, false, false, 44)) ? ("Yes") : ("No"));
        yield "</td>
            </tr>
            <tr>
                <th>AveragePrice</th>
                <td>";
        // line 48
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 48, $this->source); })()), "averagePrice", [], "any", false, false, false, 48), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Link</th>
                <td>";
        // line 52
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 52, $this->source); })()), "link", [], "any", false, false, false, 52), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>AverageUsersGrade</th>
                <td>";
        // line 56
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 56, $this->source); })()), "averageUsersGrade", [], "any", false, false, false, 56), "html", null, true);
        yield "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_video_game_index");
        yield "\">back to list</a>

    <a href=\"";
        // line 63
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_video_game_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["video_game"]) || array_key_exists("video_game", $context) ? $context["video_game"] : (function () { throw new RuntimeError('Variable "video_game" does not exist.', 63, $this->source); })()), "id", [], "any", false, false, false, 63)]), "html", null, true);
        yield "\">edit</a>

    ";
        // line 65
        yield Twig\Extension\CoreExtension::include($this->env, $context, "video_game/_delete_form.html.twig");
        yield "
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
        return "video_game/show.html.twig";
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
        return array (  193 => 65,  188 => 63,  183 => 61,  175 => 56,  168 => 52,  161 => 48,  154 => 44,  147 => 40,  140 => 36,  133 => 32,  126 => 28,  119 => 24,  112 => 20,  105 => 16,  98 => 12,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}VideoGame{% endblock %}

{% block body %}
    <h1>VideoGame</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ video_game.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ video_game.name }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ video_game.description }}</td>
            </tr>
            <tr>
                <th>Advice</th>
                <td>{{ video_game.advice }}</td>
            </tr>
            <tr>
                <th>ImgBox</th>
                <td>{{ video_game.imgBox }}</td>
            </tr>
            <tr>
                <th>ImgTheme</th>
                <td>{{ video_game.imgTheme }}</td>
            </tr>
            <tr>
                <th>Grade</th>
                <td>{{ video_game.grade }}</td>
            </tr>
            <tr>
                <th>ReleaseDate</th>
                <td>{{ video_game.releaseDate ? video_game.releaseDate|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Disponibility</th>
                <td>{{ video_game.disponibility ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>AveragePrice</th>
                <td>{{ video_game.averagePrice }}</td>
            </tr>
            <tr>
                <th>Link</th>
                <td>{{ video_game.link }}</td>
            </tr>
            <tr>
                <th>AverageUsersGrade</th>
                <td>{{ video_game.averageUsersGrade }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_video_game_index') }}\">back to list</a>

    <a href=\"{{ path('app_video_game_edit', {'id': video_game.id}) }}\">edit</a>

    {{ include('video_game/_delete_form.html.twig') }}
{% endblock %}
", "video_game/show.html.twig", "C:\\Users\\robocop\\Desktop\\REVISIONS WEB\\FIRST PROJECTS\\MyMetaverseV2.0\\MyMetaverse\\templates\\video_game\\show.html.twig");
    }
}
