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

/* admin/admin-add-videogame.html.twig */
class __TwigTemplate_c5b013002ddae121e93694145d2e1e9b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin-add-videogame.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin-add-videogame.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/admin-add-videogame.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
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
        yield "\t<link rel=\"stylesheet\" href=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./css/admin/admin-forms.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "\t<main>
\t\t<article class='admin-form-card'>
\t\t\t<h3>Ajouter une nouvelle critique
\t\t\t</h3>
\t\t\t<section class=\"admin-form\">
\t\t\t\t";
        // line 12
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
        yield "
\t\t\t\t<section class=\"form-head\">
\t\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t\t";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), 'label');
        yield "
\t\t\t\t\t\t";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), 'widget');
        yield "
\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t\t";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "description", [], "any", false, false, false, 19), 'label');
        yield "
\t\t\t\t\t\t";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "description", [], "any", false, false, false, 20), 'widget', ["attr" => ["style" => "width: 50%; height:100px; margin-left: 5%;"]]);
        yield "
\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t\t";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "advice", [], "any", false, false, false, 23), 'label');
        yield "
\t\t\t\t\t\t";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "advice", [], "any", false, false, false, 24), 'widget', ["attr" => ["style" => "width: 50%; height:100px; margin-left: 5%;"]]);
        yield "
\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t\t";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "graphicsGrade", [], "any", false, false, false, 27), 'label');
        yield "
\t\t\t\t\t\t";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "graphicsGrade", [], "any", false, false, false, 28), 'widget', ["attr" => ["style" => "width: auto; margin-left: 5%;"]]);
        yield "
\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t\t";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "gameplayGrade", [], "any", false, false, false, 31), 'label');
        yield "
\t\t\t\t\t\t";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "gameplayGrade", [], "any", false, false, false, 32), 'widget', ["attr" => ["style" => "width: auto; margin-left: 5%;"]]);
        yield "
\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t\t";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "storylineGrade", [], "any", false, false, false, 35), 'label');
        yield "
\t\t\t\t\t\t";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "storylineGrade", [], "any", false, false, false, 36), 'widget', ["attr" => ["style" => "width: auto; margin-left: 5%;"]]);
        yield "
\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t\t";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "executionGrade", [], "any", false, false, false, 39), 'label');
        yield "
\t\t\t\t\t\t";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "executionGrade", [], "any", false, false, false, 40), 'widget', ["attr" => ["style" => "width: auto; margin-left: 5%;"]]);
        yield "
\t\t\t\t\t</section>
\t\t\t\t</section>
\t\t\t\t<section class=\"form-content\">
\t\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t\t";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "imgBox", [], "any", false, false, false, 45), 'label');
        yield "
\t\t\t\t\t\t";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "imgBox", [], "any", false, false, false, 46), 'widget');
        yield "
\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t\t";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "imgTheme", [], "any", false, false, false, 49), 'label');
        yield "
\t\t\t\t\t\t";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "imgTheme", [], "any", false, false, false, 50), 'widget');
        yield "
\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t\t";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "releaseDate", [], "any", false, false, false, 53), 'label');
        yield "
\t\t\t\t\t\t";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "releaseDate", [], "any", false, false, false, 54), 'widget', ["attr" => ["style" => "width: auto;"]]);
        yield "
\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t\t";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "disponibility", [], "any", false, false, false, 57), 'label');
        yield "
\t\t\t\t\t\t";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "disponibility", [], "any", false, false, false, 58), 'widget', ["attr" => ["style" => "width: auto; height: 20px; width: 20px; margin-top: 7px;"]]);
        yield "
\t\t\t\t\t</section>
\t\t\t\t\t";
        // line 60
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "disponibility", [], "any", false, false, false, 60)) {
            // line 61
            yield "\t\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t\t";
            // line 62
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "link", [], "any", false, false, false, 62), 'label');
            yield "
\t\t\t\t\t\t";
            // line 63
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "link", [], "any", false, false, false, 63), 'widget');
            yield "
\t\t\t\t\t</section>
\t\t\t\t\t";
        }
        // line 66
        yield "\t\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t\t";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "averagePrice", [], "any", false, false, false, 67), 'label');
        yield "
\t\t\t\t\t\t";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "averagePrice", [], "any", false, false, false, 68), 'widget');
        yield "
\t\t\t\t\t</section>
\t\t\t\t</section>
\t\t\t\t<section class=\"form-footer\">
\t\t\t\t\t<section class=\"form-group platform\">
\t\t\t\t\t\t";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "platform", [], "any", false, false, false, 73), 'label');
        yield "
\t\t\t\t\t\t";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "platform", [], "any", false, false, false, 74), 'widget');
        yield "
\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t\t";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "genders", [], "any", false, false, false, 77), 'label', ["attr" => ["class" => "genders-label"], "label" => "Genres :"]);
        yield "
\t\t\t\t\t\t<section class=\"genders-checkbox-list\">
\t\t\t\t\t\t\t";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "genders", [], "any", false, false, false, 79));
        foreach ($context['_seq'] as $context["_key"] => $context["gender"]) {
            // line 80
            yield "\t\t\t\t\t\t\t\t<section class=\"gender-checkbox\">
\t\t\t\t\t\t\t\t\t";
            // line 81
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["gender"], 'widget', ["attr" => ["class" => "gender-checkbox-input"]]);
            yield "
\t\t\t\t\t\t\t\t\t";
            // line 82
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["gender"], 'label', ["label_attr" => ["class" => "gender-checkbox-label"]]);
            yield "
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gender'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        yield "\t\t\t\t\t\t</section>
\t\t\t\t\t</section>
\t\t\t\t</section>
\t\t\t\t<button type=\"submit\">Envoyer</button>
\t\t\t\t";
        // line 89
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), 'form_end');
        yield "
\t\t\t\t<section>
\t\t\t</article>
\t\t</main>
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
        return "admin/admin-add-videogame.html.twig";
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
        return array (  289 => 89,  283 => 85,  274 => 82,  270 => 81,  267 => 80,  263 => 79,  258 => 77,  252 => 74,  248 => 73,  240 => 68,  236 => 67,  233 => 66,  227 => 63,  223 => 62,  220 => 61,  218 => 60,  213 => 58,  209 => 57,  203 => 54,  199 => 53,  193 => 50,  189 => 49,  183 => 46,  179 => 45,  171 => 40,  167 => 39,  161 => 36,  157 => 35,  151 => 32,  147 => 31,  141 => 28,  137 => 27,  131 => 24,  127 => 23,  121 => 20,  117 => 19,  111 => 16,  107 => 15,  101 => 12,  94 => 7,  84 => 6,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block head %}
\t<link rel=\"stylesheet\" href=\"{{ asset('./css/admin/admin-forms.css') }}\">
{% endblock %}

{% block body %}
\t<main>
\t\t<article class='admin-form-card'>
\t\t\t<h3>Ajouter une nouvelle critique
\t\t\t</h3>
\t\t\t<section class=\"admin-form\">
\t\t\t\t{{ form_start(form) }}
\t\t\t\t<section class=\"form-head\">
\t\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t\t{{ form_label(form.name) }}
\t\t\t\t\t\t{{ form_widget(form.name) }}
\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t\t{{ form_label(form.description) }}
\t\t\t\t\t\t{{ form_widget(form.description, {'attr': {'style': 'width: 50%; height:100px; margin-left: 5%;'}}) }}
\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t\t{{ form_label(form.advice) }}
\t\t\t\t\t\t{{ form_widget(form.advice, {'attr': {'style': 'width: 50%; height:100px; margin-left: 5%;'}}) }}
\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t\t{{ form_label(form.graphicsGrade) }}
\t\t\t\t\t\t{{ form_widget(form.graphicsGrade, {'attr': {'style': 'width: auto; margin-left: 5%;'}}) }}
\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t\t{{ form_label(form.gameplayGrade) }}
\t\t\t\t\t\t{{ form_widget(form.gameplayGrade, {'attr': {'style': 'width: auto; margin-left: 5%;'}}) }}
\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t\t{{ form_label(form.storylineGrade) }}
\t\t\t\t\t\t{{ form_widget(form.storylineGrade, {'attr': {'style': 'width: auto; margin-left: 5%;'}}) }}
\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t\t{{ form_label(form.executionGrade) }}
\t\t\t\t\t\t{{ form_widget(form.executionGrade, {'attr': {'style': 'width: auto; margin-left: 5%;'}}) }}
\t\t\t\t\t</section>
\t\t\t\t</section>
\t\t\t\t<section class=\"form-content\">
\t\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t\t{{ form_label(form.imgBox) }}
\t\t\t\t\t\t{{ form_widget(form.imgBox) }}
\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t\t{{ form_label(form.imgTheme) }}
\t\t\t\t\t\t{{ form_widget(form.imgTheme) }}
\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t\t{{ form_label(form.releaseDate) }}
\t\t\t\t\t\t{{ form_widget(form.releaseDate, {'attr': {'style': 'width: auto;'}}) }}
\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t\t{{ form_label(form.disponibility) }}
\t\t\t\t\t\t{{ form_widget(form.disponibility, {'attr': {'style': 'width: auto; height: 20px; width: 20px; margin-top: 7px;'}}) }}
\t\t\t\t\t</section>
\t\t\t\t\t{% if form.disponibility %}
\t\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t\t{{ form_label(form.link) }}
\t\t\t\t\t\t{{ form_widget(form.link) }}
\t\t\t\t\t</section>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t\t{{ form_label(form.averagePrice) }}
\t\t\t\t\t\t{{ form_widget(form.averagePrice) }}
\t\t\t\t\t</section>
\t\t\t\t</section>
\t\t\t\t<section class=\"form-footer\">
\t\t\t\t\t<section class=\"form-group platform\">
\t\t\t\t\t\t{{ form_label(form.platform) }}
\t\t\t\t\t\t{{ form_widget(form.platform) }}
\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t\t{{ form_label(form.genders, 'Genres :', {'attr': {'class': 'genders-label'}}) }}
\t\t\t\t\t\t<section class=\"genders-checkbox-list\">
\t\t\t\t\t\t\t{% for gender in form.genders %}
\t\t\t\t\t\t\t\t<section class=\"gender-checkbox\">
\t\t\t\t\t\t\t\t\t{{ form_widget(gender, {'attr': {'class': 'gender-checkbox-input'}}) }}
\t\t\t\t\t\t\t\t\t{{ form_label(gender, null, {'label_attr': {'class': 'gender-checkbox-label' }}) }}
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</section>
\t\t\t\t\t</section>
\t\t\t\t</section>
\t\t\t\t<button type=\"submit\">Envoyer</button>
\t\t\t\t{{ form_end(form)}}
\t\t\t\t<section>
\t\t\t</article>
\t\t</main>
{% endblock %}
", "admin/admin-add-videogame.html.twig", "C:\\Users\\robocop\\Desktop\\REVISIONS WEB\\FIRST PROJECTS\\MyMetaverseV2.0\\MyMetaverse\\templates\\admin\\admin-add-videogame.html.twig");
    }
}
