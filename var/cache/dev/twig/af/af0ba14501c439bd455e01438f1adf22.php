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

/* @WebProfiler/Collector/twig.html.twig */
class __TwigTemplate_7dfe8712660fe942652813e4fe153b7c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/twig.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/twig.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/twig.html.twig", 1);
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
        #twig-dump pre {
            font-size: var(--font-size-monospace);
            line-height: 1.7;
            background-color: var(--page-background);
            border: var(--border);
            border-radius: 6px;
            padding: 15px;
            box-shadow: 0 0 1px rgba(128, 128, 128, .2);
        }
        #twig-dump span {
            border-radius: 2px;
            padding: 1px 2px;
        }
        #twig-dump .status-error { background: transparent; color: var(--color-error); }
        #twig-dump .status-warning { background: rgba(240, 181, 24, 0.3); }
        #twig-dump .status-success { background: rgba(100, 189, 99, 0.2); }
        #twig-dump .status-info { background: var(--info-background); }
        .theme-dark #twig-dump .status-warning { color: var(--yellow-200); }
        .theme-dark #twig-dump .status-success { color: var(--green-200); }

        #twig-table tbody td {
            position: relative;
        }
        #twig-table tbody td div {
            margin: 0;
        }
        #twig-table .template-file-path {
            color: var(--color-muted);
            display: block;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 40
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 41
        yield "    ";
        $context["time"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 41, $this->source); })()), "templatecount", [], "any", false, false, false, 41)) ? (Twig\Extension\CoreExtension::sprintf("%0.0f", CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 41, $this->source); })()), "time", [], "any", false, false, false, 41))) : ("n/a"));
        // line 42
        yield "    ";
        $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 43
            yield "        ";
            yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/twig.svg");
            yield "
        <span class=\"sf-toolbar-value\">";
            // line 44
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["time"]) || array_key_exists("time", $context) ? $context["time"] : (function () { throw new RuntimeError('Variable "time" does not exist.', 44, $this->source); })()), "html", null, true);
            yield "</span>
        <span class=\"sf-toolbar-label\">ms</span>
    ";
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 47
        yield "
    ";
        // line 48
        $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 49
            yield "        ";
            $context["template"] = Twig\Extension\CoreExtension::first($this->env, Twig\Extension\CoreExtension::getArrayKeysFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 49, $this->source); })()), "templates", [], "any", false, false, false, 49)));
            // line 50
            yield "        ";
            $context["file"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "templatePaths", [], "any", false, true, false, 50), (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 50, $this->source); })()), [], "array", true, true, false, 50)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "templatePaths", [], "any", false, true, false, 50), (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 50, $this->source); })()), [], "array", false, false, false, 50), false)) : (false));
            // line 51
            yield "        ";
            $context["link"] = (((isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 51, $this->source); })())) ? ($this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->getFileLink((isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 51, $this->source); })()), 1)) : (false));
            // line 52
            yield "        <div class=\"sf-toolbar-info-piece\">
            <b>Entry View</b>
            <span>
                 ";
            // line 55
            if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 55, $this->source); })())) {
                // line 56
                yield "                     <a href=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 56, $this->source); })()), "html", null, true);
                yield "\" title=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 56, $this->source); })()), "html", null, true);
                yield "\">
                         ";
                // line 57
                yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 57, $this->source); })()), "html", null, true);
                yield "
                     </a>
                 ";
            } else {
                // line 60
                yield "                     ";
                yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 60, $this->source); })()), "html", null, true);
                yield "
                 ";
            }
            // line 62
            yield "            </span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Render Time</b>
            <span>";
            // line 66
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["time"]) || array_key_exists("time", $context) ? $context["time"] : (function () { throw new RuntimeError('Variable "time" does not exist.', 66, $this->source); })()), "html", null, true);
            yield " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Template Calls</b>
            <span class=\"sf-toolbar-status\">";
            // line 70
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 70, $this->source); })()), "templatecount", [], "any", false, false, false, 70), "html", null, true);
            yield "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Block Calls</b>
            <span class=\"sf-toolbar-status\">";
            // line 74
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 74, $this->source); })()), "blockcount", [], "any", false, false, false, 74), "html", null, true);
            yield "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Macro Calls</b>
            <span class=\"sf-toolbar-status\">";
            // line 78
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 78, $this->source); })()), "macrocount", [], "any", false, false, false, 78), "html", null, true);
            yield "</span>
        </div>
    ";
        })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 81
        yield "
    ";
        // line 82
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 82, $this->source); })())]);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 85
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 86
        yield "    <span class=\"label ";
        yield (((0 == CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 86, $this->source); })()), "templateCount", [], "any", false, false, false, 86))) ? ("disabled") : (""));
        yield "\">
        <span class=\"icon\">";
        // line 87
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/twig.svg");
        yield "</span>
        <strong>Twig</strong>
    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 92
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 93
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 93, $this->source); })()), "templatecount", [], "any", false, false, false, 93) == 0)) {
            // line 94
            yield "        <h2>Twig</h2>

        <div class=\"empty empty-panel\">
            <p>No Twig templates were rendered.</p>
        </div>
    ";
        } else {
            // line 100
            yield "        <h2>Twig Metrics</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 104
            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::sprintf("%0.0f", CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 104, $this->source); })()), "time", [], "any", false, false, false, 104)), "html", null, true);
            yield " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Render time</span>
            </div>

            <div class=\"metric-divider\"></div>

            <div class=\"metric-group\">
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 112
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 112, $this->source); })()), "templatecount", [], "any", false, false, false, 112), "html", null, true);
            yield "</span>
                    <span class=\"label\">Template calls</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">";
            // line 117
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 117, $this->source); })()), "blockcount", [], "any", false, false, false, 117), "html", null, true);
            yield "</span>
                    <span class=\"label\">Block calls</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">";
            // line 122
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 122, $this->source); })()), "macrocount", [], "any", false, false, false, 122), "html", null, true);
            yield "</span>
                    <span class=\"label\">Macro calls</span>
                </div>
            </div>
        </div>

        <p class=\"help\">
            Render time includes sub-requests rendering time (if any).
        </p>

        <h2>Rendered Templates</h2>

        <table id=\"twig-table\">
            <thead>
            <tr>
                <th scope=\"col\">Template Name &amp; Path</th>
                <th class=\"num-col\" scope=\"col\">Render Count</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 142
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 142, $this->source); })()), "templates", [], "any", false, false, false, 142));
            foreach ($context['_seq'] as $context["template"] => $context["count"]) {
                // line 143
                yield "                <tr>
                    ";
                // line 144
                $context["file"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "templatePaths", [], "any", false, true, false, 144), $context["template"], [], "array", true, true, false, 144)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "templatePaths", [], "any", false, true, false, 144), $context["template"], [], "array", false, false, false, 144), false)) : (false));
                // line 145
                yield "                    ";
                $context["link"] = (((isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 145, $this->source); })())) ? ($this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->getFileLink((isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 145, $this->source); })()), 1)) : (false));
                // line 146
                yield "                    <td class=\"font-normal\">
                        ";
                // line 147
                if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 147, $this->source); })())) {
                    // line 148
                    yield "                            <a href=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 148, $this->source); })()), "html", null, true);
                    yield "\" title=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 148, $this->source); })()), "html", null, true);
                    yield "\" class=\"stretched-link\">
                                ";
                    // line 149
                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["template"], "html", null, true);
                    yield "
                                <span class=\"template-file-path\">";
                    // line 150
                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::defaultFilter($this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->getFileRelative((isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 150, $this->source); })())), (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 150, $this->source); })())), "html", null, true);
                    yield "</span>
                            </a>
                        ";
                } else {
                    // line 153
                    yield "                            ";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["template"], "html", null, true);
                    yield "
                        ";
                }
                // line 155
                yield "                    </td>
                    <td class=\"font-normal num-col\">";
                // line 156
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["count"], "html", null, true);
                yield "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['template'], $context['count'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            yield "            </tbody>
        </table>

        <h2>Rendering Call Graph</h2>

        <div id=\"twig-dump\">
            ";
            // line 165
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 165, $this->source); })()), "htmlcallgraph", [], "any", false, false, false, 165), "html", null, true);
            yield "
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/Collector/twig.html.twig";
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
        return array (  402 => 165,  394 => 159,  385 => 156,  382 => 155,  376 => 153,  370 => 150,  366 => 149,  359 => 148,  357 => 147,  354 => 146,  351 => 145,  349 => 144,  346 => 143,  342 => 142,  319 => 122,  311 => 117,  303 => 112,  292 => 104,  286 => 100,  278 => 94,  275 => 93,  265 => 92,  250 => 87,  245 => 86,  235 => 85,  222 => 82,  219 => 81,  213 => 78,  206 => 74,  199 => 70,  192 => 66,  186 => 62,  180 => 60,  174 => 57,  167 => 56,  165 => 55,  160 => 52,  157 => 51,  154 => 50,  151 => 49,  149 => 48,  146 => 47,  140 => 44,  135 => 43,  132 => 42,  129 => 41,  119 => 40,  72 => 4,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {{ parent() }}

    <style>
        #twig-dump pre {
            font-size: var(--font-size-monospace);
            line-height: 1.7;
            background-color: var(--page-background);
            border: var(--border);
            border-radius: 6px;
            padding: 15px;
            box-shadow: 0 0 1px rgba(128, 128, 128, .2);
        }
        #twig-dump span {
            border-radius: 2px;
            padding: 1px 2px;
        }
        #twig-dump .status-error { background: transparent; color: var(--color-error); }
        #twig-dump .status-warning { background: rgba(240, 181, 24, 0.3); }
        #twig-dump .status-success { background: rgba(100, 189, 99, 0.2); }
        #twig-dump .status-info { background: var(--info-background); }
        .theme-dark #twig-dump .status-warning { color: var(--yellow-200); }
        .theme-dark #twig-dump .status-success { color: var(--green-200); }

        #twig-table tbody td {
            position: relative;
        }
        #twig-table tbody td div {
            margin: 0;
        }
        #twig-table .template-file-path {
            color: var(--color-muted);
            display: block;
        }
    </style>
{% endblock %}

{% block toolbar %}
    {% set time = collector.templatecount ? '%0.0f'|format(collector.time) : 'n/a' %}
    {% set icon %}
        {{ source('@WebProfiler/Icon/twig.svg') }}
        <span class=\"sf-toolbar-value\">{{ time }}</span>
        <span class=\"sf-toolbar-label\">ms</span>
    {% endset %}

    {% set text %}
        {% set template = collector.templates|keys|first %}
        {% set file = collector.templatePaths[template]|default(false) %}
        {% set link = file ? file|file_link(1) : false %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Entry View</b>
            <span>
                 {% if link %}
                     <a href=\"{{ link }}\" title=\"{{ file }}\">
                         {{ template }}
                     </a>
                 {% else %}
                     {{ template }}
                 {% endif %}
            </span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Render Time</b>
            <span>{{ time }} ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Template Calls</b>
            <span class=\"sf-toolbar-status\">{{ collector.templatecount }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Block Calls</b>
            <span class=\"sf-toolbar-status\">{{ collector.blockcount }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Macro Calls</b>
            <span class=\"sf-toolbar-status\">{{ collector.macrocount }}</span>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url }) }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ 0 == collector.templateCount ? 'disabled' }}\">
        <span class=\"icon\">{{ source('@WebProfiler/Icon/twig.svg') }}</span>
        <strong>Twig</strong>
    </span>
{% endblock %}

{% block panel %}
    {% if collector.templatecount == 0 %}
        <h2>Twig</h2>

        <div class=\"empty empty-panel\">
            <p>No Twig templates were rendered.</p>
        </div>
    {% else %}
        <h2>Twig Metrics</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ '%0.0f'|format(collector.time) }} <span class=\"unit\">ms</span></span>
                <span class=\"label\">Render time</span>
            </div>

            <div class=\"metric-divider\"></div>

            <div class=\"metric-group\">
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.templatecount }}</span>
                    <span class=\"label\">Template calls</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">{{ collector.blockcount }}</span>
                    <span class=\"label\">Block calls</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">{{ collector.macrocount }}</span>
                    <span class=\"label\">Macro calls</span>
                </div>
            </div>
        </div>

        <p class=\"help\">
            Render time includes sub-requests rendering time (if any).
        </p>

        <h2>Rendered Templates</h2>

        <table id=\"twig-table\">
            <thead>
            <tr>
                <th scope=\"col\">Template Name &amp; Path</th>
                <th class=\"num-col\" scope=\"col\">Render Count</th>
            </tr>
            </thead>
            <tbody>
            {% for template, count in collector.templates %}
                <tr>
                    {% set file = collector.templatePaths[template]|default(false) %}
                    {% set link = file ? file|file_link(1) : false %}
                    <td class=\"font-normal\">
                        {% if link %}
                            <a href=\"{{ link }}\" title=\"{{ file }}\" class=\"stretched-link\">
                                {{ template }}
                                <span class=\"template-file-path\">{{ file|file_relative|default(file) }}</span>
                            </a>
                        {% else %}
                            {{ template }}
                        {% endif %}
                    </td>
                    <td class=\"font-normal num-col\">{{ count }}</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

        <h2>Rendering Call Graph</h2>

        <div id=\"twig-dump\">
            {{ collector.htmlcallgraph }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/twig.html.twig", "C:\\Users\\robocop\\Desktop\\REVISIONS WEB\\FIRST PROJECTS\\MyMetaverseV2.0\\MyMetaverse\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\twig.html.twig");
    }
}
