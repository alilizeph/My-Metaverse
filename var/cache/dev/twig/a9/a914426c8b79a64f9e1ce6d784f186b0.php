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

/* @WebProfiler/Collector/events.html.twig */
class __TwigTemplate_893f9072c256e6b8b278f0dfc2e574ea extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/events.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/events.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/events.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        yield "<span class=\"label\">
    <span class=\"icon\">";
        // line 5
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/event.svg");
        yield "</span>
    <strong>Events</strong>
</span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 10
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 11
        yield "    <h2>Dispatched Events</h2>

    <div class=\"sf-tabs\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 14, $this->source); })()), "data", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["dispatcherName"] => $context["dispatcherData"]) {
            // line 15
            yield "            <div class=\"tab\">
                <h3 class=\"tab-title\">";
            // line 16
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["dispatcherName"], "html", null, true);
            yield "</h3>
                <div class=\"tab-content\">
                    ";
            // line 18
            if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["dispatcherData"], "called_listeners", [], "array", false, false, false, 18))) {
                // line 19
                yield "                        <div class=\"empty empty-panel\">
                            <p>No events have been recorded. Check that debugging is enabled in the kernel.</p>
                        </div>
                    ";
            } else {
                // line 23
                yield "                        <div class=\"sf-tabs\">
                            <div class=\"tab\">
                                <h3 class=\"tab-title\">Called Listeners <span class=\"badge\">";
                // line 25
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["dispatcherData"], "called_listeners", [], "array", false, false, false, 25)), "html", null, true);
                yield "</span></h3>

                                <div class=\"tab-content\">
                                    ";
                // line 28
                yield CoreExtension::callMacro($macros["_self"], "macro_render_table", [CoreExtension::getAttribute($this->env, $this->source, $context["dispatcherData"], "called_listeners", [], "array", false, false, false, 28)], 28, $context, $this->getSourceContext());
                yield "
                                </div>
                            </div>

                            <div class=\"tab\">
                                <h3 class=\"tab-title\">Not Called Listeners <span class=\"badge\">";
                // line 33
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["dispatcherData"], "not_called_listeners", [], "array", false, false, false, 33)), "html", null, true);
                yield "</span></h3>
                                <div class=\"tab-content\">
                                    ";
                // line 35
                if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["dispatcherData"], "not_called_listeners", [], "array", false, false, false, 35))) {
                    // line 36
                    yield "                                        <div class=\"empty\">
                                            <p>
                                                <strong>There are no uncalled listeners</strong>.
                                            </p>
                                            <p>
                                                All listeners were called or an error occurred
                                                when trying to collect uncalled listeners (in which case check the
                                                logs to get more information).
                                            </p>
                                        </div>
                                    ";
                } else {
                    // line 47
                    yield "                                        ";
                    yield CoreExtension::callMacro($macros["_self"], "macro_render_table", [CoreExtension::getAttribute($this->env, $this->source, $context["dispatcherData"], "not_called_listeners", [], "array", false, false, false, 47)], 47, $context, $this->getSourceContext());
                    yield "
                                    ";
                }
                // line 49
                yield "                                </div>
                            </div>

                            <div class=\"tab\">
                                <h3 class=\"tab-title\">Orphaned Events <span class=\"badge\">";
                // line 53
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["dispatcherData"], "orphaned_events", [], "array", false, false, false, 53)), "html", null, true);
                yield "</span></h3>
                                <div class=\"tab-content\">
                                    ";
                // line 55
                if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["dispatcherData"], "orphaned_events", [], "array", false, false, false, 55))) {
                    // line 56
                    yield "                                        <div class=\"empty\">
                                            <p>
                                                <strong>There are no orphaned events</strong>.
                                            </p>
                                            <p>
                                                All dispatched events were handled or an error occurred
                                                when trying to collect orphaned events (in which case check the
                                                logs to get more information).
                                            </p>
                                        </div>
                                    ";
                } else {
                    // line 67
                    yield "                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Event</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                ";
                    // line 74
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["dispatcherData"], "orphaned_events", [], "array", false, false, false, 74));
                    foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                        // line 75
                        yield "                                                    <tr>
                                                        <td class=\"font-normal\">";
                        // line 76
                        yield Twig\Extension\EscaperExtension::escape($this->env, $context["event"], "html", null, true);
                        yield "</td>
                                                    </tr>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 79
                    yield "                                            </tbody>
                                        </table>
                                    ";
                }
                // line 82
                yield "                                </div>
                            </div>
                        </div>
                    ";
            }
            // line 86
            yield "                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['dispatcherName'], $context['dispatcherData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 92
    public function macro_render_table($__listeners__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "listeners" => $__listeners__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_table"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_table"));

            // line 93
            yield "    <table>
        <thead>
            <tr>
                <th class=\"text-right\">Priority</th>
                <th>Listener</th>
            </tr>
        </thead>

        ";
            // line 101
            $context["previous_event"] = CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env, (isset($context["listeners"]) || array_key_exists("listeners", $context) ? $context["listeners"] : (function () { throw new RuntimeError('Variable "listeners" does not exist.', 101, $this->source); })())), "event", [], "any", false, false, false, 101);
            // line 102
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["listeners"]) || array_key_exists("listeners", $context) ? $context["listeners"] : (function () { throw new RuntimeError('Variable "listeners" does not exist.', 102, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                // line 103
                yield "            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 103) || (CoreExtension::getAttribute($this->env, $this->source, $context["listener"], "event", [], "any", false, false, false, 103) != (isset($context["previous_event"]) || array_key_exists("previous_event", $context) ? $context["previous_event"] : (function () { throw new RuntimeError('Variable "previous_event" does not exist.', 103, $this->source); })())))) {
                    // line 104
                    yield "                ";
                    if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 104)) {
                        // line 105
                        yield "                    </tbody>
                ";
                    }
                    // line 107
                    yield "
                <tbody>
                    <tr>
                        <th colspan=\"2\" class=\"colored font-normal\">";
                    // line 110
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["listener"], "event", [], "any", false, false, false, 110), "html", null, true);
                    yield "</th>
                    </tr>

                ";
                    // line 113
                    $context["previous_event"] = CoreExtension::getAttribute($this->env, $this->source, $context["listener"], "event", [], "any", false, false, false, 113);
                    // line 114
                    yield "            ";
                }
                // line 115
                yield "
            <tr>
                <td class=\"text-right nowrap\">";
                // line 117
                yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, $context["listener"], "priority", [], "any", true, true, false, 117)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, $context["listener"], "priority", [], "any", false, false, false, 117), "-")) : ("-")), "html", null, true);
                yield "</td>
                <td class=\"font-normal\">";
                // line 118
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["listener"], "stub", [], "any", false, false, false, 118));
                yield "</td>
            </tr>

            ";
                // line 121
                if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 121)) {
                    // line 122
                    yield "                </tbody>
            ";
                }
                // line 124
                yield "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            yield "    </table>
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
        return "@WebProfiler/Collector/events.html.twig";
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
        return array (  358 => 125,  344 => 124,  340 => 122,  338 => 121,  332 => 118,  328 => 117,  324 => 115,  321 => 114,  319 => 113,  313 => 110,  308 => 107,  304 => 105,  301 => 104,  298 => 103,  280 => 102,  278 => 101,  268 => 93,  250 => 92,  238 => 89,  230 => 86,  224 => 82,  219 => 79,  210 => 76,  207 => 75,  203 => 74,  194 => 67,  181 => 56,  179 => 55,  174 => 53,  168 => 49,  162 => 47,  149 => 36,  147 => 35,  142 => 33,  134 => 28,  128 => 25,  124 => 23,  118 => 19,  116 => 18,  111 => 16,  108 => 15,  104 => 14,  99 => 11,  89 => 10,  74 => 5,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ source('@WebProfiler/Icon/event.svg') }}</span>
    <strong>Events</strong>
</span>
{% endblock %}

{% block panel %}
    <h2>Dispatched Events</h2>

    <div class=\"sf-tabs\">
        {% for dispatcherName, dispatcherData in collector.data %}
            <div class=\"tab\">
                <h3 class=\"tab-title\">{{ dispatcherName }}</h3>
                <div class=\"tab-content\">
                    {% if dispatcherData['called_listeners'] is empty %}
                        <div class=\"empty empty-panel\">
                            <p>No events have been recorded. Check that debugging is enabled in the kernel.</p>
                        </div>
                    {% else %}
                        <div class=\"sf-tabs\">
                            <div class=\"tab\">
                                <h3 class=\"tab-title\">Called Listeners <span class=\"badge\">{{ dispatcherData['called_listeners']|length }}</span></h3>

                                <div class=\"tab-content\">
                                    {{ _self.render_table(dispatcherData['called_listeners']) }}
                                </div>
                            </div>

                            <div class=\"tab\">
                                <h3 class=\"tab-title\">Not Called Listeners <span class=\"badge\">{{ dispatcherData['not_called_listeners']|length }}</span></h3>
                                <div class=\"tab-content\">
                                    {% if dispatcherData['not_called_listeners'] is empty %}
                                        <div class=\"empty\">
                                            <p>
                                                <strong>There are no uncalled listeners</strong>.
                                            </p>
                                            <p>
                                                All listeners were called or an error occurred
                                                when trying to collect uncalled listeners (in which case check the
                                                logs to get more information).
                                            </p>
                                        </div>
                                    {% else %}
                                        {{ _self.render_table(dispatcherData['not_called_listeners']) }}
                                    {% endif %}
                                </div>
                            </div>

                            <div class=\"tab\">
                                <h3 class=\"tab-title\">Orphaned Events <span class=\"badge\">{{ dispatcherData['orphaned_events']|length }}</span></h3>
                                <div class=\"tab-content\">
                                    {% if dispatcherData['orphaned_events'] is empty %}
                                        <div class=\"empty\">
                                            <p>
                                                <strong>There are no orphaned events</strong>.
                                            </p>
                                            <p>
                                                All dispatched events were handled or an error occurred
                                                when trying to collect orphaned events (in which case check the
                                                logs to get more information).
                                            </p>
                                        </div>
                                    {% else %}
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Event</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {% for event in dispatcherData['orphaned_events'] %}
                                                    <tr>
                                                        <td class=\"font-normal\">{{ event }}</td>
                                                    </tr>
                                                {% endfor %}
                                            </tbody>
                                        </table>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    {% endif %}
                </div>
            </div>
        {% endfor %}
    </div>
{% endblock %}

{% macro render_table(listeners) %}
    <table>
        <thead>
            <tr>
                <th class=\"text-right\">Priority</th>
                <th>Listener</th>
            </tr>
        </thead>

        {% set previous_event = (listeners|first).event %}
        {% for listener in listeners %}
            {% if loop.first or listener.event != previous_event %}
                {% if not loop.first %}
                    </tbody>
                {% endif %}

                <tbody>
                    <tr>
                        <th colspan=\"2\" class=\"colored font-normal\">{{ listener.event }}</th>
                    </tr>

                {% set previous_event = listener.event %}
            {% endif %}

            <tr>
                <td class=\"text-right nowrap\">{{ listener.priority|default('-') }}</td>
                <td class=\"font-normal\">{{ profiler_dump(listener.stub) }}</td>
            </tr>

            {% if loop.last %}
                </tbody>
            {% endif %}
        {% endfor %}
    </table>
{% endmacro %}
", "@WebProfiler/Collector/events.html.twig", "C:\\Users\\robocop\\Desktop\\REVISIONS WEB\\FIRST PROJECTS\\MyMetaverseV2.0\\MyMetaverse\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\events.html.twig");
    }
}
