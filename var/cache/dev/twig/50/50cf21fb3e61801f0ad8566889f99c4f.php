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

/* @WebProfiler/Collector/serializer.html.twig */
class __TwigTemplate_5a644c194b5850f3e2503cb69c8e0f6d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/serializer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/serializer.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/serializer.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
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
        yield "    ";
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "

    <style>
        #collector-content .sf-serializer {
            margin-bottom: 2em;
        }

        #collector-content .sf-serializer .trace {
            border: var(--border);
            background: var(--page-background);
            padding: 10px;
            margin: 0.5em 0;
            overflow: auto;
        }
        #collector-content .sf-serializer .trace {
            font-size: 12px;
        }
        #collector-content .sf-serializer .trace li {
            margin-bottom: 0;
            padding: 0;
        }
        #collector-content .sf-serializer .trace li.selected {
            background: var(--highlight-selected-line);
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 31
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 32
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 32, $this->source); })()), "handledCount", [], "any", false, false, false, 32) > 0)) {
            // line 33
            yield "        ";
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 34
                yield "            ";
                yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/serializer.svg");
                yield "
            <span class=\"sf-toolbar-value\">
                ";
                // line 36
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 36, $this->source); })()), "handledCount", [], "any", false, false, false, 36), "html", null, true);
                yield "
            </span>
        ";
            })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 39
            yield "
        ";
            // line 40
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 41
                yield "            <div class=\"sf-toolbar-info-piece\">
                <b>Total calls</b>
                <span class=\"sf-toolbar-status\">";
                // line 43
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 43, $this->source); })()), "handledCount", [], "any", false, false, false, 43), "html", null, true);
                yield "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Total time</b>
                <span>
                    ";
                // line 48
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 48, $this->source); })()), "totalTime", [], "any", false, false, false, 48) * 1000)), "html", null, true);
                yield " <span class=\"unit\">ms</span>
                </span>
            </div>

            <div class=\"detailed-metrics\">
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Serialize</b>
                        <span class=\"sf-toolbar-status\">";
                // line 56
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 56, $this->source); })()), "data", [], "any", false, false, false, 56), "serialize", [], "any", false, false, false, 56)), "html", null, true);
                yield "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Deserialize</b>
                        <span class=\"sf-toolbar-status\">";
                // line 60
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 60, $this->source); })()), "data", [], "any", false, false, false, 60), "deserialize", [], "any", false, false, false, 60)), "html", null, true);
                yield "</span>
                    </div>
                </div>
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Encode</b>
                        <span class=\"sf-toolbar-status\">";
                // line 66
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 66, $this->source); })()), "data", [], "any", false, false, false, 66), "encode", [], "any", false, false, false, 66)), "html", null, true);
                yield "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Decode</b>
                        <span class=\"sf-toolbar-status\">";
                // line 70
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 70, $this->source); })()), "data", [], "any", false, false, false, 70), "decode", [], "any", false, false, false, 70)), "html", null, true);
                yield "</span>
                    </div>
                </div>
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Normalize</b>
                        <span class=\"sf-toolbar-status\">";
                // line 76
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 76, $this->source); })()), "data", [], "any", false, false, false, 76), "normalize", [], "any", false, false, false, 76)), "html", null, true);
                yield "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Denormalize</b>
                        <span class=\"sf-toolbar-status\">";
                // line 80
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 80, $this->source); })()), "data", [], "any", false, false, false, 80), "denormalize", [], "any", false, false, false, 80)), "html", null, true);
                yield "</span>
                    </div>
                </div>
            </div>
        ";
            })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 85
            yield "
        ";
            // line 86
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 86, $this->source); })())]);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 90
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 91
        yield "    <span class=\"label ";
        yield (( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 91, $this->source); })()), "handledCount", [], "any", false, false, false, 91)) ? ("disabled") : (""));
        yield "\">
        <span class=\"icon\">";
        // line 92
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/serializer.svg");
        yield "</span>
        <strong>Serializer</strong>
    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 97
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 98
        yield "    <h2>Serializer</h2>
    <div class=\"sf-serializer sf-reset\">
        ";
        // line 100
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 100, $this->source); })()), "handledCount", [], "any", false, false, false, 100)) {
            // line 101
            yield "            <div class=\"empty empty-panel\">
                <p>Nothing was handled by the serializer.</p>
            </div>
        ";
        } else {
            // line 105
            yield "            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 107
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 107, $this->source); })()), "handledCount", [], "any", false, false, false, 107), "html", null, true);
            yield "</span>
                    <span class=\"label\">Handled</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">";
            // line 112
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 112, $this->source); })()), "totalTime", [], "any", false, false, false, 112) * 1000)), "html", null, true);
            yield " <span class=\"unit\">ms</span></span>
                    <span class=\"label\">Total time</span>
                </div>
            </div>

            <div class=\"sf-tabs\">
                ";
            // line 118
            yield CoreExtension::callMacro($macros["_self"], "macro_render_serialize_tab", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 118, $this->source); })()), "data", [], "any", false, false, false, 118), true], 118, $context, $this->getSourceContext());
            yield "
                ";
            // line 119
            yield CoreExtension::callMacro($macros["_self"], "macro_render_serialize_tab", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 119, $this->source); })()), "data", [], "any", false, false, false, 119), false], 119, $context, $this->getSourceContext());
            yield "

                ";
            // line 121
            yield CoreExtension::callMacro($macros["_self"], "macro_render_normalize_tab", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 121, $this->source); })()), "data", [], "any", false, false, false, 121), true], 121, $context, $this->getSourceContext());
            yield "
                ";
            // line 122
            yield CoreExtension::callMacro($macros["_self"], "macro_render_normalize_tab", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 122, $this->source); })()), "data", [], "any", false, false, false, 122), false], 122, $context, $this->getSourceContext());
            yield "

                ";
            // line 124
            yield CoreExtension::callMacro($macros["_self"], "macro_render_encode_tab", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 124, $this->source); })()), "data", [], "any", false, false, false, 124), true], 124, $context, $this->getSourceContext());
            yield "
                ";
            // line 125
            yield CoreExtension::callMacro($macros["_self"], "macro_render_encode_tab", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 125, $this->source); })()), "data", [], "any", false, false, false, 125), false], 125, $context, $this->getSourceContext());
            yield "
            </div>
        ";
        }
        // line 128
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 131
    public function macro_render_serialize_tab($__collectorData__ = null, $__serialize__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "collectorData" => $__collectorData__,
            "serialize" => $__serialize__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_serialize_tab"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_serialize_tab"));

            // line 132
            yield "    ";
            $context["data"] = (((isset($context["serialize"]) || array_key_exists("serialize", $context) ? $context["serialize"] : (function () { throw new RuntimeError('Variable "serialize" does not exist.', 132, $this->source); })())) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collectorData"]) || array_key_exists("collectorData", $context) ? $context["collectorData"] : (function () { throw new RuntimeError('Variable "collectorData" does not exist.', 132, $this->source); })()), "serialize", [], "any", false, false, false, 132)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collectorData"]) || array_key_exists("collectorData", $context) ? $context["collectorData"] : (function () { throw new RuntimeError('Variable "collectorData" does not exist.', 132, $this->source); })()), "deserialize", [], "any", false, false, false, 132)));
            // line 133
            yield "    ";
            $context["cellPrefix"] = (((isset($context["serialize"]) || array_key_exists("serialize", $context) ? $context["serialize"] : (function () { throw new RuntimeError('Variable "serialize" does not exist.', 133, $this->source); })())) ? ("serialize") : ("deserialize"));
            // line 134
            yield "
    <div class=\"tab ";
            // line 135
            yield (( !(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 135, $this->source); })())) ? ("disabled") : (""));
            yield "\">
        <h3 class=\"tab-title\">";
            // line 136
            yield (((isset($context["serialize"]) || array_key_exists("serialize", $context) ? $context["serialize"] : (function () { throw new RuntimeError('Variable "serialize" does not exist.', 136, $this->source); })())) ? ("serialize") : ("deserialize"));
            yield " <span class=\"badge\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lengthFilter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 136, $this->source); })())), "html", null, true);
            yield "</h3>
        <div class=\"tab-content\">
            ";
            // line 138
            if ( !Twig\Extension\CoreExtension::lengthFilter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 138, $this->source); })()))) {
                // line 139
                yield "                <div class=\"empty\">
                    <p>Nothing was ";
                // line 140
                yield (((isset($context["serialize"]) || array_key_exists("serialize", $context) ? $context["serialize"] : (function () { throw new RuntimeError('Variable "serialize" does not exist.', 140, $this->source); })())) ? ("serialized") : ("deserialized"));
                yield ".</p>
                </div>
            ";
            } else {
                // line 143
                yield "                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Normalizer</th>
                            <th>Encoder</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
                // line 155
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 155, $this->source); })()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 156
                    yield "                            <tr>
                                <td>";
                    // line 157
                    yield CoreExtension::callMacro($macros["_self"], "macro_render_data_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 157), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 157, $this->source); })())], 157, $context, $this->getSourceContext());
                    yield "</td>
                                <td>";
                    // line 158
                    yield CoreExtension::callMacro($macros["_self"], "macro_render_context_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 158), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 158, $this->source); })())], 158, $context, $this->getSourceContext());
                    yield "</td>
                                <td>";
                    // line 159
                    yield CoreExtension::callMacro($macros["_self"], "macro_render_normalizer_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 159), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 159, $this->source); })())], 159, $context, $this->getSourceContext());
                    yield "</td>
                                <td>";
                    // line 160
                    yield CoreExtension::callMacro($macros["_self"], "macro_render_encoder_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 160), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 160, $this->source); })())], 160, $context, $this->getSourceContext());
                    yield "</td>
                                <td>";
                    // line 161
                    yield CoreExtension::callMacro($macros["_self"], "macro_render_time_cell", [$context["item"]], 161, $context, $this->getSourceContext());
                    yield "</td>
                                <td>";
                    // line 162
                    yield CoreExtension::callMacro($macros["_self"], "macro_render_caller_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 162), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 162, $this->source); })())], 162, $context, $this->getSourceContext());
                    yield "</td>
                            </tr>
                        ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 165
                yield "                    </tbody>
                </table>
            ";
            }
            // line 168
            yield "        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 172
    public function macro_render_caller_cell($__item__ = null, $__index__ = null, $__method__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "index" => $__index__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_caller_cell"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_caller_cell"));

            // line 173
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "caller", [], "any", true, true, false, 173)) {
                // line 174
                yield "        <span class=\"metadata\">
            ";
                // line 175
                $context["caller"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 175, $this->source); })()), "caller", [], "any", false, false, false, 175);
                // line 176
                yield "            ";
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 176, $this->source); })()), "line", [], "any", false, false, false, 176)) {
                    // line 177
                    yield "                ";
                    $context["link"] = $this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 177, $this->source); })()), "file", [], "any", false, false, false, 177), CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 177, $this->source); })()), "line", [], "any", false, false, false, 177));
                    // line 178
                    yield "                ";
                    if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 178, $this->source); })())) {
                        // line 179
                        yield "                    <a href=\"";
                        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 179, $this->source); })()), "html", null, true);
                        yield "\" title=\"";
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 179, $this->source); })()), "file", [], "any", false, false, false, 179), "html", null, true);
                        yield "\">";
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 179, $this->source); })()), "name", [], "any", false, false, false, 179), "html", null, true);
                        yield "</a>
                ";
                    } else {
                        // line 181
                        yield "                    <abbr title=\"";
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 181, $this->source); })()), "file", [], "any", false, false, false, 181), "html", null, true);
                        yield "\">";
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 181, $this->source); })()), "name", [], "any", false, false, false, 181), "html", null, true);
                        yield "</abbr>
                ";
                    }
                    // line 183
                    yield "            ";
                } else {
                    // line 184
                    yield "                ";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 184, $this->source); })()), "name", [], "any", false, false, false, 184), "html", null, true);
                    yield "
            ";
                }
                // line 186
                yield "            line <a class=\"text-small sf-toggle\" data-toggle-selector=\"#sf-trace-";
                yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 186, $this->source); })()), "html", null, true);
                yield "-";
                yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 186, $this->source); })()), "html", null, true);
                yield "\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 186, $this->source); })()), "line", [], "any", false, false, false, 186), "html", null, true);
                yield "</a>
        </span>

        <div class=\"sf-serializer-compact hidden\" id=\"sf-trace-";
                // line 189
                yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 189, $this->source); })()), "html", null, true);
                yield "-";
                yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 189, $this->source); })()), "html", null, true);
                yield "\">
            <div class=\"trace\">
                ";
                // line 191
                yield Twig\Extension\CoreExtension::replaceFilter($this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->fileExcerpt(CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 191, $this->source); })()), "file", [], "any", false, false, false, 191), CoreExtension::getAttribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 191, $this->source); })()), "line", [], "any", false, false, false, 191)), ["#DD0000" => "var(--highlight-string)", "#007700" => "var(--highlight-keyword)", "#0000BB" => "var(--highlight-default)", "#FF8000" => "var(--highlight-comment)"]);
                // line 196
                yield "
            </div>
        </div>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 202
    public function macro_render_normalize_tab($__collectorData__ = null, $__normalize__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "collectorData" => $__collectorData__,
            "normalize" => $__normalize__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_normalize_tab"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_normalize_tab"));

            // line 203
            yield "    ";
            $context["data"] = (((isset($context["normalize"]) || array_key_exists("normalize", $context) ? $context["normalize"] : (function () { throw new RuntimeError('Variable "normalize" does not exist.', 203, $this->source); })())) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collectorData"]) || array_key_exists("collectorData", $context) ? $context["collectorData"] : (function () { throw new RuntimeError('Variable "collectorData" does not exist.', 203, $this->source); })()), "normalize", [], "any", false, false, false, 203)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collectorData"]) || array_key_exists("collectorData", $context) ? $context["collectorData"] : (function () { throw new RuntimeError('Variable "collectorData" does not exist.', 203, $this->source); })()), "denormalize", [], "any", false, false, false, 203)));
            // line 204
            yield "    ";
            $context["cellPrefix"] = (((isset($context["normalize"]) || array_key_exists("normalize", $context) ? $context["normalize"] : (function () { throw new RuntimeError('Variable "normalize" does not exist.', 204, $this->source); })())) ? ("normalize") : ("denormalize"));
            // line 205
            yield "
    <div class=\"tab ";
            // line 206
            yield (( !(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 206, $this->source); })())) ? ("disabled") : (""));
            yield "\">
        <h3 class=\"tab-title\">";
            // line 207
            yield (((isset($context["normalize"]) || array_key_exists("normalize", $context) ? $context["normalize"] : (function () { throw new RuntimeError('Variable "normalize" does not exist.', 207, $this->source); })())) ? ("normalize") : ("denormalize"));
            yield " <span class=\"badge\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lengthFilter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 207, $this->source); })())), "html", null, true);
            yield "</h3>
        <div class=\"tab-content\">
            ";
            // line 209
            if ( !Twig\Extension\CoreExtension::lengthFilter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 209, $this->source); })()))) {
                // line 210
                yield "                <div class=\"empty\">
                    <p>Nothing was ";
                // line 211
                yield (((isset($context["normalize"]) || array_key_exists("normalize", $context) ? $context["normalize"] : (function () { throw new RuntimeError('Variable "normalize" does not exist.', 211, $this->source); })())) ? ("normalized") : ("denormalized"));
                yield ".</p>
                </div>
            ";
            } else {
                // line 214
                yield "                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Normalizer</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
                // line 225
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 225, $this->source); })()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 226
                    yield "                            <tr>
                                <td>";
                    // line 227
                    yield CoreExtension::callMacro($macros["_self"], "macro_render_data_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 227), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 227, $this->source); })())], 227, $context, $this->getSourceContext());
                    yield "</td>
                                <td>";
                    // line 228
                    yield CoreExtension::callMacro($macros["_self"], "macro_render_context_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 228), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 228, $this->source); })())], 228, $context, $this->getSourceContext());
                    yield "</td>
                                <td>";
                    // line 229
                    yield CoreExtension::callMacro($macros["_self"], "macro_render_normalizer_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 229), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 229, $this->source); })())], 229, $context, $this->getSourceContext());
                    yield "</td>
                                <td>";
                    // line 230
                    yield CoreExtension::callMacro($macros["_self"], "macro_render_time_cell", [$context["item"]], 230, $context, $this->getSourceContext());
                    yield "</td>
                                <td>";
                    // line 231
                    yield CoreExtension::callMacro($macros["_self"], "macro_render_caller_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 231), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 231, $this->source); })())], 231, $context, $this->getSourceContext());
                    yield "</td>
                            </tr>
                        ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 234
                yield "                    </tbody>
                </table>
            ";
            }
            // line 237
            yield "        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 241
    public function macro_render_encode_tab($__collectorData__ = null, $__encode__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "collectorData" => $__collectorData__,
            "encode" => $__encode__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_encode_tab"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_encode_tab"));

            // line 242
            yield "    ";
            $context["data"] = (((isset($context["encode"]) || array_key_exists("encode", $context) ? $context["encode"] : (function () { throw new RuntimeError('Variable "encode" does not exist.', 242, $this->source); })())) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collectorData"]) || array_key_exists("collectorData", $context) ? $context["collectorData"] : (function () { throw new RuntimeError('Variable "collectorData" does not exist.', 242, $this->source); })()), "encode", [], "any", false, false, false, 242)) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collectorData"]) || array_key_exists("collectorData", $context) ? $context["collectorData"] : (function () { throw new RuntimeError('Variable "collectorData" does not exist.', 242, $this->source); })()), "decode", [], "any", false, false, false, 242)));
            // line 243
            yield "    ";
            $context["cellPrefix"] = (((isset($context["encode"]) || array_key_exists("encode", $context) ? $context["encode"] : (function () { throw new RuntimeError('Variable "encode" does not exist.', 243, $this->source); })())) ? ("encode") : ("decode"));
            // line 244
            yield "
    <div class=\"tab ";
            // line 245
            yield (( !(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 245, $this->source); })())) ? ("disabled") : (""));
            yield "\">
        <h3 class=\"tab-title\">";
            // line 246
            yield (((isset($context["encode"]) || array_key_exists("encode", $context) ? $context["encode"] : (function () { throw new RuntimeError('Variable "encode" does not exist.', 246, $this->source); })())) ? ("encode") : ("decode"));
            yield " <span class=\"badge\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lengthFilter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 246, $this->source); })())), "html", null, true);
            yield "</h3>
        <div class=\"tab-content\">
            ";
            // line 248
            if ( !Twig\Extension\CoreExtension::lengthFilter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 248, $this->source); })()))) {
                // line 249
                yield "                <div class=\"empty\">
                    <p>Nothing was ";
                // line 250
                yield (((isset($context["encode"]) || array_key_exists("encode", $context) ? $context["encode"] : (function () { throw new RuntimeError('Variable "encode" does not exist.', 250, $this->source); })())) ? ("encoded") : ("decoded"));
                yield ".</p>
                </div>
            ";
            } else {
                // line 253
                yield "                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Encoder</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
                // line 264
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 264, $this->source); })()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 265
                    yield "                            <tr>
                                <td>";
                    // line 266
                    yield CoreExtension::callMacro($macros["_self"], "macro_render_data_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 266), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 266, $this->source); })())], 266, $context, $this->getSourceContext());
                    yield "</td>
                                <td>";
                    // line 267
                    yield CoreExtension::callMacro($macros["_self"], "macro_render_context_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 267), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 267, $this->source); })())], 267, $context, $this->getSourceContext());
                    yield "</td>
                                <td>";
                    // line 268
                    yield CoreExtension::callMacro($macros["_self"], "macro_render_encoder_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 268), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 268, $this->source); })())], 268, $context, $this->getSourceContext());
                    yield "</td>
                                <td>";
                    // line 269
                    yield CoreExtension::callMacro($macros["_self"], "macro_render_time_cell", [$context["item"]], 269, $context, $this->getSourceContext());
                    yield "</td>
                                <td>";
                    // line 270
                    yield CoreExtension::callMacro($macros["_self"], "macro_render_caller_cell", [$context["item"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 270), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 270, $this->source); })())], 270, $context, $this->getSourceContext());
                    yield "</td>
                            </tr>
                        ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 273
                yield "                    </tbody>
                </table>
            ";
            }
            // line 276
            yield "        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 280
    public function macro_render_data_cell($__item__ = null, $__index__ = null, $__method__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "index" => $__index__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_data_cell"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_data_cell"));

            // line 281
            yield "    ";
            $context["data_id"] = ((("data-" . (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 281, $this->source); })())) . "-") . (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 281, $this->source); })()));
            // line 282
            yield "
    <span class=\"nowrap\">";
            // line 283
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 283, $this->source); })()), "dataType", [], "any", false, false, false, 283), "html", null, true);
            yield "</span>

    <div>
        <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
            // line 286
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["data_id"]) || array_key_exists("data_id", $context) ? $context["data_id"] : (function () { throw new RuntimeError('Variable "data_id" does not exist.', 286, $this->source); })()), "html", null, true);
            yield "\" data-toggle-alt-content=\"Hide contents\">Show contents</a>
        <div id=\"";
            // line 287
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["data_id"]) || array_key_exists("data_id", $context) ? $context["data_id"] : (function () { throw new RuntimeError('Variable "data_id" does not exist.', 287, $this->source); })()), "html", null, true);
            yield "\" class=\"context sf-toggle-content sf-toggle-hidden\">
            ";
            // line 288
            yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 288, $this->source); })()), "data", [], "any", false, false, false, 288));
            yield "
        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 293
    public function macro_render_context_cell($__item__ = null, $__index__ = null, $__method__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "index" => $__index__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_context_cell"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_context_cell"));

            // line 294
            yield "    ";
            $context["context_id"] = ((("context-" . (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 294, $this->source); })())) . "-") . (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 294, $this->source); })()));
            // line 295
            yield "
    ";
            // line 296
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 296, $this->source); })()), "type", [], "any", false, false, false, 296)) {
                // line 297
                yield "        <span class=\"nowrap\">Type: ";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 297, $this->source); })()), "type", [], "any", false, false, false, 297), "html", null, true);
                yield "</span>
        <div class=\"nowrap\">Format: ";
                // line 298
                ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 298, $this->source); })()), "format", [], "any", false, false, false, 298)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 298, $this->source); })()), "format", [], "any", false, false, false, 298), "html", null, true)) : (yield "none"));
                yield "</div>
    ";
            } else {
                // line 300
                yield "        <span class=\"nowrap\">Format: ";
                ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 300, $this->source); })()), "format", [], "any", false, false, false, 300)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 300, $this->source); })()), "format", [], "any", false, false, false, 300), "html", null, true)) : (yield "none"));
                yield "</span>
    ";
            }
            // line 302
            yield "
    <div>
        <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
            // line 304
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["context_id"]) || array_key_exists("context_id", $context) ? $context["context_id"] : (function () { throw new RuntimeError('Variable "context_id" does not exist.', 304, $this->source); })()), "html", null, true);
            yield "\" data-toggle-alt-content=\"Hide context\">Show context</a>
        <div id=\"";
            // line 305
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["context_id"]) || array_key_exists("context_id", $context) ? $context["context_id"] : (function () { throw new RuntimeError('Variable "context_id" does not exist.', 305, $this->source); })()), "html", null, true);
            yield "\" class=\"context sf-toggle-content sf-toggle-hidden\">
            ";
            // line 306
            yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 306, $this->source); })()), "context", [], "any", false, false, false, 306));
            yield "
        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 311
    public function macro_render_normalizer_cell($__item__ = null, $__index__ = null, $__method__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "index" => $__index__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_normalizer_cell"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_normalizer_cell"));

            // line 312
            yield "    ";
            $context["nested_normalizers_id"] = ((("nested-normalizers-" . (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 312, $this->source); })())) . "-") . (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 312, $this->source); })()));
            // line 313
            yield "
    ";
            // line 314
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "normalizer", [], "any", true, true, false, 314)) {
                // line 315
                yield "        <span class=\"nowrap\"><a href=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 315, $this->source); })()), "normalizer", [], "any", false, false, false, 315), "file", [], "any", false, false, false, 315), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 315, $this->source); })()), "normalizer", [], "any", false, false, false, 315), "line", [], "any", false, false, false, 315)), "html", null, true);
                yield "\" title=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 315, $this->source); })()), "normalizer", [], "any", false, false, false, 315), "file", [], "any", false, false, false, 315), "html", null, true);
                yield "\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 315, $this->source); })()), "normalizer", [], "any", false, false, false, 315), "class", [], "any", false, false, false, 315), "html", null, true);
                yield "</a> (";
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 315, $this->source); })()), "normalizer", [], "any", false, false, false, 315), "time", [], "any", false, false, false, 315) * 1000)), "html", null, true);
                yield " ms)</span>
    ";
            }
            // line 317
            yield "
    ";
            // line 318
            if ((Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 318, $this->source); })()), "normalization", [], "any", false, false, false, 318)) > 1)) {
                // line 319
                yield "        <div>
            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                // line 320
                yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["nested_normalizers_id"]) || array_key_exists("nested_normalizers_id", $context) ? $context["nested_normalizers_id"] : (function () { throw new RuntimeError('Variable "nested_normalizers_id" does not exist.', 320, $this->source); })()), "html", null, true);
                yield "\" data-toggle-alt-content=\"Hide nested normalizers\">Show nested normalizers</a>
            <div id=\"";
                // line 321
                yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["nested_normalizers_id"]) || array_key_exists("nested_normalizers_id", $context) ? $context["nested_normalizers_id"] : (function () { throw new RuntimeError('Variable "nested_normalizers_id" does not exist.', 321, $this->source); })()), "html", null, true);
                yield "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                <ul class=\"text-small\" style=\"line-height:80%;margin-top:10px\">
                    ";
                // line 323
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 323, $this->source); })()), "normalization", [], "any", false, false, false, 323));
                foreach ($context['_seq'] as $context["_key"] => $context["normalizer"]) {
                    // line 324
                    yield "                        <li><span class=\"nowrap\">x";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["normalizer"], "calls", [], "any", false, false, false, 324), "html", null, true);
                    yield " <a href=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, $context["normalizer"], "file", [], "any", false, false, false, 324), CoreExtension::getAttribute($this->env, $this->source, $context["normalizer"], "line", [], "any", false, false, false, 324)), "html", null, true);
                    yield "\" title=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["normalizer"], "file", [], "any", false, false, false, 324), "html", null, true);
                    yield "\">";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["normalizer"], "class", [], "any", false, false, false, 324), "html", null, true);
                    yield "</a> (";
                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, $context["normalizer"], "time", [], "any", false, false, false, 324) * 1000)), "html", null, true);
                    yield " ms)</span></li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['normalizer'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 326
                yield "                </ul>
            </div>
        </div>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 332
    public function macro_render_encoder_cell($__item__ = null, $__index__ = null, $__method__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "index" => $__index__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_encoder_cell"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_encoder_cell"));

            // line 333
            yield "    ";
            $context["nested_encoders_id"] = ((("nested-encoders-" . (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 333, $this->source); })())) . "-") . (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 333, $this->source); })()));
            // line 334
            yield "
    ";
            // line 335
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "encoder", [], "any", true, true, false, 335)) {
                // line 336
                yield "        <span class=\"nowrap\"><a href=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 336, $this->source); })()), "encoder", [], "any", false, false, false, 336), "file", [], "any", false, false, false, 336), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 336, $this->source); })()), "encoder", [], "any", false, false, false, 336), "line", [], "any", false, false, false, 336)), "html", null, true);
                yield "\" title=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 336, $this->source); })()), "encoder", [], "any", false, false, false, 336), "file", [], "any", false, false, false, 336), "html", null, true);
                yield "\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 336, $this->source); })()), "encoder", [], "any", false, false, false, 336), "class", [], "any", false, false, false, 336), "html", null, true);
                yield "</a> (";
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 336, $this->source); })()), "encoder", [], "any", false, false, false, 336), "time", [], "any", false, false, false, 336) * 1000)), "html", null, true);
                yield " ms)</span>
    ";
            }
            // line 338
            yield "
    ";
            // line 339
            if ((Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 339, $this->source); })()), "encoding", [], "any", false, false, false, 339)) > 1)) {
                // line 340
                yield "        <div>
            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                // line 341
                yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["nested_encoders_id"]) || array_key_exists("nested_encoders_id", $context) ? $context["nested_encoders_id"] : (function () { throw new RuntimeError('Variable "nested_encoders_id" does not exist.', 341, $this->source); })()), "html", null, true);
                yield "\" data-toggle-alt-content=\"Hide nested encoders\">Show nested encoders</a>
            <div id=\"";
                // line 342
                yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["nested_encoders_id"]) || array_key_exists("nested_encoders_id", $context) ? $context["nested_encoders_id"] : (function () { throw new RuntimeError('Variable "nested_encoders_id" does not exist.', 342, $this->source); })()), "html", null, true);
                yield "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                <ul class=\"text-small\" style=\"line-height:80%;margin-top:10px\">
                    ";
                // line 344
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 344, $this->source); })()), "encoding", [], "any", false, false, false, 344));
                foreach ($context['_seq'] as $context["_key"] => $context["encoder"]) {
                    // line 345
                    yield "                        <li><span class=\"nowrap\">x";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["encoder"], "calls", [], "any", false, false, false, 345), "html", null, true);
                    yield " <a href=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, $context["encoder"], "file", [], "any", false, false, false, 345), CoreExtension::getAttribute($this->env, $this->source, $context["encoder"], "line", [], "any", false, false, false, 345)), "html", null, true);
                    yield "\" title=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["encoder"], "file", [], "any", false, false, false, 345), "html", null, true);
                    yield "\">";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["encoder"], "class", [], "any", false, false, false, 345), "html", null, true);
                    yield "</a> (";
                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, $context["encoder"], "time", [], "any", false, false, false, 345) * 1000)), "html", null, true);
                    yield " ms)</span></li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['encoder'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 347
                yield "                </ul>
            </div>
        </div>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 353
    public function macro_render_time_cell($__item__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_time_cell"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_time_cell"));

            // line 354
            yield "    <span class=\"nowrap\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::sprintf("%.2f", (CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 354, $this->source); })()), "time", [], "any", false, false, false, 354) * 1000)), "html", null, true);
            yield " ms</span>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/Collector/serializer.html.twig";
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
        return array (  1180 => 354,  1162 => 353,  1147 => 347,  1130 => 345,  1126 => 344,  1121 => 342,  1117 => 341,  1114 => 340,  1112 => 339,  1109 => 338,  1097 => 336,  1095 => 335,  1092 => 334,  1089 => 333,  1069 => 332,  1054 => 326,  1037 => 324,  1033 => 323,  1028 => 321,  1024 => 320,  1021 => 319,  1019 => 318,  1016 => 317,  1004 => 315,  1002 => 314,  999 => 313,  996 => 312,  976 => 311,  961 => 306,  957 => 305,  953 => 304,  949 => 302,  943 => 300,  938 => 298,  933 => 297,  931 => 296,  928 => 295,  925 => 294,  905 => 293,  890 => 288,  886 => 287,  882 => 286,  876 => 283,  873 => 282,  870 => 281,  850 => 280,  837 => 276,  832 => 273,  815 => 270,  811 => 269,  807 => 268,  803 => 267,  799 => 266,  796 => 265,  779 => 264,  766 => 253,  760 => 250,  757 => 249,  755 => 248,  748 => 246,  744 => 245,  741 => 244,  738 => 243,  735 => 242,  716 => 241,  703 => 237,  698 => 234,  681 => 231,  677 => 230,  673 => 229,  669 => 228,  665 => 227,  662 => 226,  645 => 225,  632 => 214,  626 => 211,  623 => 210,  621 => 209,  614 => 207,  610 => 206,  607 => 205,  604 => 204,  601 => 203,  582 => 202,  567 => 196,  565 => 191,  558 => 189,  547 => 186,  541 => 184,  538 => 183,  530 => 181,  520 => 179,  517 => 178,  514 => 177,  511 => 176,  509 => 175,  506 => 174,  503 => 173,  483 => 172,  470 => 168,  465 => 165,  448 => 162,  444 => 161,  440 => 160,  436 => 159,  432 => 158,  428 => 157,  425 => 156,  408 => 155,  394 => 143,  388 => 140,  385 => 139,  383 => 138,  376 => 136,  372 => 135,  369 => 134,  366 => 133,  363 => 132,  344 => 131,  332 => 128,  326 => 125,  322 => 124,  317 => 122,  313 => 121,  308 => 119,  304 => 118,  295 => 112,  287 => 107,  283 => 105,  277 => 101,  275 => 100,  271 => 98,  261 => 97,  246 => 92,  241 => 91,  231 => 90,  217 => 86,  214 => 85,  206 => 80,  199 => 76,  190 => 70,  183 => 66,  174 => 60,  167 => 56,  156 => 48,  148 => 43,  144 => 41,  142 => 40,  139 => 39,  133 => 36,  127 => 34,  124 => 33,  121 => 32,  111 => 31,  73 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {{ parent() }}

    <style>
        #collector-content .sf-serializer {
            margin-bottom: 2em;
        }

        #collector-content .sf-serializer .trace {
            border: var(--border);
            background: var(--page-background);
            padding: 10px;
            margin: 0.5em 0;
            overflow: auto;
        }
        #collector-content .sf-serializer .trace {
            font-size: 12px;
        }
        #collector-content .sf-serializer .trace li {
            margin-bottom: 0;
            padding: 0;
        }
        #collector-content .sf-serializer .trace li.selected {
            background: var(--highlight-selected-line);
        }
    </style>
{% endblock %}

{% block toolbar %}
    {% if collector.handledCount > 0 %}
        {% set icon %}
            {{ source('@WebProfiler/Icon/serializer.svg') }}
            <span class=\"sf-toolbar-value\">
                {{ collector.handledCount }}
            </span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Total calls</b>
                <span class=\"sf-toolbar-status\">{{ collector.handledCount }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Total time</b>
                <span>
                    {{ '%.2f'|format(collector.totalTime * 1000) }} <span class=\"unit\">ms</span>
                </span>
            </div>

            <div class=\"detailed-metrics\">
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Serialize</b>
                        <span class=\"sf-toolbar-status\">{{ collector.data.serialize|length }}</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Deserialize</b>
                        <span class=\"sf-toolbar-status\">{{ collector.data.deserialize|length }}</span>
                    </div>
                </div>
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Encode</b>
                        <span class=\"sf-toolbar-status\">{{ collector.data.encode|length }}</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Decode</b>
                        <span class=\"sf-toolbar-status\">{{ collector.data.decode|length }}</span>
                    </div>
                </div>
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Normalize</b>
                        <span class=\"sf-toolbar-status\">{{ collector.data.normalize|length }}</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Denormalize</b>
                        <span class=\"sf-toolbar-status\">{{ collector.data.denormalize|length }}</span>
                    </div>
                </div>
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label {{ not collector.handledCount ? 'disabled' }}\">
        <span class=\"icon\">{{ source('@WebProfiler/Icon/serializer.svg') }}</span>
        <strong>Serializer</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Serializer</h2>
    <div class=\"sf-serializer sf-reset\">
        {% if not collector.handledCount %}
            <div class=\"empty empty-panel\">
                <p>Nothing was handled by the serializer.</p>
            </div>
        {% else %}
            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.handledCount }}</span>
                    <span class=\"label\">Handled</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">{{ '%.2f'|format(collector.totalTime * 1000) }} <span class=\"unit\">ms</span></span>
                    <span class=\"label\">Total time</span>
                </div>
            </div>

            <div class=\"sf-tabs\">
                {{ _self.render_serialize_tab(collector.data, true) }}
                {{ _self.render_serialize_tab(collector.data, false) }}

                {{ _self.render_normalize_tab(collector.data, true) }}
                {{ _self.render_normalize_tab(collector.data, false) }}

                {{ _self.render_encode_tab(collector.data, true) }}
                {{ _self.render_encode_tab(collector.data, false) }}
            </div>
        {% endif %}
    </div>
{% endblock %}

{% macro render_serialize_tab(collectorData, serialize) %}
    {% set data = serialize ? collectorData.serialize : collectorData.deserialize %}
    {% set cellPrefix = serialize ? 'serialize' : 'deserialize' %}

    <div class=\"tab {{ not data ? 'disabled' }}\">
        <h3 class=\"tab-title\">{{ serialize ? 'serialize' : 'deserialize' }} <span class=\"badge\">{{ data|length }}</h3>
        <div class=\"tab-content\">
            {% if not data|length %}
                <div class=\"empty\">
                    <p>Nothing was {{ serialize ? 'serialized' : 'deserialized' }}.</p>
                </div>
            {% else %}
                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Normalizer</th>
                            <th>Encoder</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for item in data %}
                            <tr>
                                <td>{{ _self.render_data_cell(item, loop.index, cellPrefix) }}</td>
                                <td>{{ _self.render_context_cell(item, loop.index, cellPrefix) }}</td>
                                <td>{{ _self.render_normalizer_cell(item, loop.index, cellPrefix) }}</td>
                                <td>{{ _self.render_encoder_cell(item, loop.index, cellPrefix) }}</td>
                                <td>{{ _self.render_time_cell(item) }}</td>
                                <td>{{ _self.render_caller_cell(item, loop.index, cellPrefix) }}</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            {% endif %}
        </div>
    </div>
{% endmacro %}

{% macro render_caller_cell(item, index, method) %}
    {% if item.caller is defined %}
        <span class=\"metadata\">
            {% set caller = item.caller %}
            {% if caller.line %}
                {% set link = caller.file|file_link(caller.line) %}
                {% if link %}
                    <a href=\"{{ link }}\" title=\"{{ caller.file }}\">{{ caller.name }}</a>
                {% else %}
                    <abbr title=\"{{ caller.file }}\">{{ caller.name }}</abbr>
                {% endif %}
            {% else %}
                {{ caller.name }}
            {% endif %}
            line <a class=\"text-small sf-toggle\" data-toggle-selector=\"#sf-trace-{{ method }}-{{ index }}\">{{ caller.line }}</a>
        </span>

        <div class=\"sf-serializer-compact hidden\" id=\"sf-trace-{{ method }}-{{ index }}\">
            <div class=\"trace\">
                {{ caller.file|file_excerpt(caller.line)|replace({
                    '#DD0000': 'var(--highlight-string)',
                    '#007700': 'var(--highlight-keyword)',
                    '#0000BB': 'var(--highlight-default)',
                    '#FF8000': 'var(--highlight-comment)'
                })|raw }}
            </div>
        </div>
    {% endif %}
{% endmacro %}

{% macro render_normalize_tab(collectorData, normalize) %}
    {% set data = normalize ? collectorData.normalize : collectorData.denormalize %}
    {% set cellPrefix = normalize ? 'normalize' : 'denormalize' %}

    <div class=\"tab {{ not data ? 'disabled' }}\">
        <h3 class=\"tab-title\">{{ normalize ? 'normalize' : 'denormalize' }} <span class=\"badge\">{{ data|length }}</h3>
        <div class=\"tab-content\">
            {% if not data|length %}
                <div class=\"empty\">
                    <p>Nothing was {{ normalize ? 'normalized' : 'denormalized' }}.</p>
                </div>
            {% else %}
                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Normalizer</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for item in data %}
                            <tr>
                                <td>{{ _self.render_data_cell(item, loop.index, cellPrefix) }}</td>
                                <td>{{ _self.render_context_cell(item, loop.index, cellPrefix) }}</td>
                                <td>{{ _self.render_normalizer_cell(item, loop.index, cellPrefix) }}</td>
                                <td>{{ _self.render_time_cell(item) }}</td>
                                <td>{{ _self.render_caller_cell(item, loop.index, cellPrefix) }}</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            {% endif %}
        </div>
    </div>
{% endmacro %}

{% macro render_encode_tab(collectorData, encode) %}
    {% set data = encode ? collectorData.encode : collectorData.decode %}
    {% set cellPrefix = encode ? 'encode' : 'decode' %}

    <div class=\"tab {{ not data ? 'disabled' }}\">
        <h3 class=\"tab-title\">{{ encode ? 'encode' : 'decode' }} <span class=\"badge\">{{ data|length }}</h3>
        <div class=\"tab-content\">
            {% if not data|length %}
                <div class=\"empty\">
                    <p>Nothing was {{ encode ? 'encoded' : 'decoded' }}.</p>
                </div>
            {% else %}
                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Encoder</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for item in data %}
                            <tr>
                                <td>{{ _self.render_data_cell(item, loop.index, cellPrefix) }}</td>
                                <td>{{ _self.render_context_cell(item, loop.index, cellPrefix) }}</td>
                                <td>{{ _self.render_encoder_cell(item, loop.index, cellPrefix) }}</td>
                                <td>{{ _self.render_time_cell(item) }}</td>
                                <td>{{ _self.render_caller_cell(item, loop.index, cellPrefix) }}</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            {% endif %}
        </div>
    </div>
{% endmacro %}

{% macro render_data_cell(item, index, method) %}
    {% set data_id = 'data-' ~ method ~ '-' ~ index %}

    <span class=\"nowrap\">{{ item.dataType }}</span>

    <div>
        <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ data_id }}\" data-toggle-alt-content=\"Hide contents\">Show contents</a>
        <div id=\"{{ data_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
            {{ profiler_dump(item.data) }}
        </div>
    </div>
{% endmacro %}

{% macro render_context_cell(item, index, method) %}
    {% set context_id = 'context-' ~ method ~ '-' ~ index %}

    {% if item.type %}
        <span class=\"nowrap\">Type: {{ item.type }}</span>
        <div class=\"nowrap\">Format: {{ item.format ? item.format : 'none' }}</div>
    {% else %}
        <span class=\"nowrap\">Format: {{ item.format ? item.format : 'none' }}</span>
    {% endif %}

    <div>
        <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ context_id }}\" data-toggle-alt-content=\"Hide context\">Show context</a>
        <div id=\"{{ context_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
            {{ profiler_dump(item.context) }}
        </div>
    </div>
{% endmacro %}

{% macro render_normalizer_cell(item, index, method) %}
    {% set nested_normalizers_id = 'nested-normalizers-' ~ method ~ '-' ~ index %}

    {% if item.normalizer is defined %}
        <span class=\"nowrap\"><a href=\"{{ item.normalizer.file|file_link(item.normalizer.line) }}\" title=\"{{ item.normalizer.file }}\">{{ item.normalizer.class }}</a> ({{ '%.2f'|format(item.normalizer.time * 1000) }} ms)</span>
    {% endif %}

    {% if item.normalization|length > 1 %}
        <div>
            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ nested_normalizers_id }}\" data-toggle-alt-content=\"Hide nested normalizers\">Show nested normalizers</a>
            <div id=\"{{ nested_normalizers_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
                <ul class=\"text-small\" style=\"line-height:80%;margin-top:10px\">
                    {% for normalizer in item.normalization %}
                        <li><span class=\"nowrap\">x{{ normalizer.calls }} <a href=\"{{ normalizer.file|file_link(normalizer.line) }}\" title=\"{{ normalizer.file }}\">{{ normalizer.class }}</a> ({{ '%.2f'|format(normalizer.time * 1000) }} ms)</span></li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    {% endif %}
{% endmacro %}

{% macro render_encoder_cell(item, index, method) %}
    {% set nested_encoders_id = 'nested-encoders-' ~ method ~ '-' ~ index %}

    {% if item.encoder is defined %}
        <span class=\"nowrap\"><a href=\"{{ item.encoder.file|file_link(item.encoder.line) }}\" title=\"{{ item.encoder.file }}\">{{ item.encoder.class }}</a> ({{ '%.2f'|format(item.encoder.time * 1000) }} ms)</span>
    {% endif %}

    {% if item.encoding|length > 1 %}
        <div>
            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ nested_encoders_id }}\" data-toggle-alt-content=\"Hide nested encoders\">Show nested encoders</a>
            <div id=\"{{ nested_encoders_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
                <ul class=\"text-small\" style=\"line-height:80%;margin-top:10px\">
                    {% for encoder in item.encoding %}
                        <li><span class=\"nowrap\">x{{ encoder.calls }} <a href=\"{{ encoder.file|file_link(encoder.line) }}\" title=\"{{ encoder.file }}\">{{ encoder.class }}</a> ({{ '%.2f'|format(encoder.time * 1000) }} ms)</span></li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    {% endif %}
{% endmacro %}

{% macro render_time_cell(item) %}
    <span class=\"nowrap\">{{ '%.2f'|format(item.time * 1000) }} ms</span>
{% endmacro %}
", "@WebProfiler/Collector/serializer.html.twig", "C:\\Users\\robocop\\Desktop\\REVISIONS WEB\\FIRST PROJECTS\\MyMetaverseV2.0\\MyMetaverse\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\serializer.html.twig");
    }
}
