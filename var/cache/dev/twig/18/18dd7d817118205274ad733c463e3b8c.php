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

/* admin/admin-edit-videogame.html.twig */
class __TwigTemplate_2839e1c9675e2cce934c110dfd611905 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin-edit-videogame.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin-edit-videogame.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/admin-edit-videogame.html.twig", 1);
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
        yield "    <link rel=\"stylesheet\" href=\"";
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
        yield "    <main>
        <main>
\t\t<article class='admin-form-card'>
\t\t\t<h3>Ajouter une nouvelle critique
\t\t\t</h3>
\t\t\t<section class=\"admin-form\">
\t\t\t\t";
        // line 13
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start');
        yield "
\t\t\t\t<section class=\"form-head\">
\t\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t\t";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), 'label');
        yield "
\t\t\t\t\t\t";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), 'widget');
        yield "
\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t\t";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "description", [], "any", false, false, false, 20), 'label');
        yield "
\t\t\t\t\t\t";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "description", [], "any", false, false, false, 21), 'widget', ["attr" => ["style" => "width: 50%; height:100px; margin-left: 5%;"]]);
        yield "
\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t\t";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "advice", [], "any", false, false, false, 24), 'label');
        yield "
\t\t\t\t\t\t";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "advice", [], "any", false, false, false, 25), 'widget', ["attr" => ["style" => "width: 50%; height:100px; margin-left: 5%;"]]);
        yield "
\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t\t";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "graphicsGrade", [], "any", false, false, false, 28), 'label');
        yield "
\t\t\t\t\t\t";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "graphicsGrade", [], "any", false, false, false, 29), 'widget', ["attr" => ["style" => "width: auto; margin-left: 5%;"]]);
        yield "
\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t\t";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "gameplayGrade", [], "any", false, false, false, 32), 'label');
        yield "
\t\t\t\t\t\t";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "gameplayGrade", [], "any", false, false, false, 33), 'widget', ["attr" => ["style" => "width: auto; margin-left: 5%;"]]);
        yield "
\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t\t";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "storylineGrade", [], "any", false, false, false, 36), 'label');
        yield "
\t\t\t\t\t\t";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "storylineGrade", [], "any", false, false, false, 37), 'widget', ["attr" => ["style" => "width: auto; margin-left: 5%;"]]);
        yield "
\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t\t";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "executionGrade", [], "any", false, false, false, 40), 'label');
        yield "
\t\t\t\t\t\t";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "executionGrade", [], "any", false, false, false, 41), 'widget', ["attr" => ["style" => "width: auto; margin-left: 5%;"]]);
        yield "
\t\t\t\t\t</section>
\t\t\t\t</section>
\t\t\t\t<section class=\"form-content\">
\t\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t\t";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "imgBox", [], "any", false, false, false, 46), 'label');
        yield "
\t\t\t\t\t\t";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "imgBox", [], "any", false, false, false, 47), 'widget');
        yield "
\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t\t";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "imgTheme", [], "any", false, false, false, 50), 'label');
        yield "
\t\t\t\t\t\t";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "imgTheme", [], "any", false, false, false, 51), 'widget');
        yield "
\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t\t";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "releaseDate", [], "any", false, false, false, 54), 'label');
        yield "
\t\t\t\t\t\t";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "releaseDate", [], "any", false, false, false, 55), 'widget', ["attr" => ["style" => "width: auto;"]]);
        yield "
\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t\t";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "disponibility", [], "any", false, false, false, 58), 'label');
        yield "
\t\t\t\t\t\t";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "disponibility", [], "any", false, false, false, 59), 'widget', ["attr" => ["style" => "width: auto; height: 20px; width: 20px; margin-top: 7px;"]]);
        yield "
\t\t\t\t\t</section>
\t\t\t\t\t";
        // line 61
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "disponibility", [], "any", false, false, false, 61)) {
            // line 62
            yield "\t\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t\t";
            // line 63
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "link", [], "any", false, false, false, 63), 'label');
            yield "
\t\t\t\t\t\t";
            // line 64
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "link", [], "any", false, false, false, 64), 'widget');
            yield "
\t\t\t\t\t</section>
\t\t\t\t\t";
        }
        // line 67
        yield "\t\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t\t";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "averagePrice", [], "any", false, false, false, 68), 'label');
        yield "
\t\t\t\t\t\t";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "averagePrice", [], "any", false, false, false, 69), 'widget');
        yield "
\t\t\t\t\t</section>
\t\t\t\t</section>
\t\t\t\t<section class=\"form-footer\">
\t\t\t\t\t<section class=\"form-group platform\">
\t\t\t\t\t\t";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "platform", [], "any", false, false, false, 74), 'label');
        yield "
\t\t\t\t\t\t";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "platform", [], "any", false, false, false, 75), 'widget');
        yield "
\t\t\t\t\t</section>
\t\t\t\t\t<section class=\"form-group\">
\t\t\t\t\t\t";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "genders", [], "any", false, false, false, 78), 'label', ["attr" => ["class" => "genders-label"], "label" => "Genres :"]);
        yield "
\t\t\t\t\t\t<section class=\"genders-checkbox-list\">
\t\t\t\t\t\t\t";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "genders", [], "any", false, false, false, 80));
        foreach ($context['_seq'] as $context["_key"] => $context["gender"]) {
            // line 81
            yield "\t\t\t\t\t\t\t\t<section class=\"gender-checkbox\">
\t\t\t\t\t\t\t\t\t";
            // line 82
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["gender"], 'widget', ["attr" => ["class" => "gender-checkbox-input"]]);
            yield "
\t\t\t\t\t\t\t\t\t";
            // line 83
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["gender"], 'label', ["label_attr" => ["class" => "gender-checkbox-label"]]);
            yield "
\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gender'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        yield "\t\t\t\t\t\t</section>
\t\t\t\t\t</section>
\t\t\t\t</section>
\t\t\t\t<button type=\"submit\">Envoyer</button>
\t\t\t\t";
        // line 90
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), 'form_end');
        yield "
\t\t\t\t<section>
\t\t\t</article>
\t\t</main>
    </main>
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
        return "admin/admin-edit-videogame.html.twig";
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
        return array (  290 => 90,  284 => 86,  275 => 83,  271 => 82,  268 => 81,  264 => 80,  259 => 78,  253 => 75,  249 => 74,  241 => 69,  237 => 68,  234 => 67,  228 => 64,  224 => 63,  221 => 62,  219 => 61,  214 => 59,  210 => 58,  204 => 55,  200 => 54,  194 => 51,  190 => 50,  184 => 47,  180 => 46,  172 => 41,  168 => 40,  162 => 37,  158 => 36,  152 => 33,  148 => 32,  142 => 29,  138 => 28,  132 => 25,  128 => 24,  122 => 21,  118 => 20,  112 => 17,  108 => 16,  102 => 13,  94 => 7,  84 => 6,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('./css/admin/admin-forms.css') }}\">
{% endblock %}

{% block body %}
    <main>
        <main>
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
    </main>
{% endblock %}
", "admin/admin-edit-videogame.html.twig", "C:\\Users\\robocop\\Desktop\\REVISIONS WEB\\FIRST PROJECTS\\MyMetaverseV2.0\\MyMetaverse\\templates\\admin\\admin-edit-videogame.html.twig");
    }
}
