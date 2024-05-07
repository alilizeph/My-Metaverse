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

/* @WebProfiler/Collector/workflow.html.twig */
class __TwigTemplate_a0916406ba41b54b11050fe54bd75e29 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/workflow.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/workflow.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/workflow.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        dialog {
            border: none;
            border-radius: 6px;
            box-shadow: var(--settings-modal-shadow);
            max-width: 94%;
            width: 1200px;
        }

        dialog::backdrop {
            background: linear-gradient(
                45deg,
                rgb(18, 18, 20, 0.4),
                rgb(17, 17, 20, 0.8)
            );
        }

        dialog[open] {
            animation: scale 0.3s ease normal;
        }

        dialog[open]::backdrop {
            animation: backdrop 0.3s ease normal;
        }

        dialog.hide {
            animation-direction: reverse;
        }

        dialog h2 {
            margin-top: 0.2em
        }

        dialog i.cancel {
            cursor: pointer;
            padding: 0 5px;
            float: right;
        }

        dialog table {
            border: 1px solid #ccc;
            border-collapse: collapse;
            margin: 0 0 1em 0;
            margin-bottom: 1em;
            padding: 0;
            table-layout: fixed;
        }

        dialog table tr {
            background-color: #f8f8f8;
            border: 1px solid #ddd;
            padding: .35em;
        }

        dialog table th,
        dialog table td {
            padding: .625em;
            text-align: center;
        }

        dialog table th {
            font-size: .85em;
            letter-spacing: .1em;
            text-transform: uppercase;
        }

        dialog menu {
            padding: 0;
            margin: 0;
            display: flex;
            align-items: center;
            flex-direction: row;
            vertical-align: middle;
            justify-content: center;
        }

        dialog menu small {
            margin-right: auto;
        }
        dialog menu small i {
            margin-right: 3px;
        }

        @keyframes scale {
            from { transform: scale(0); }
            to { transform: scale(1); }
        }

        @keyframes backdrop {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 100
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 101
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 101, $this->source); })()), "callsCount", [], "any", false, false, false, 101) > 0)) {
            // line 102
            yield "        ";
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 103
                yield "            ";
                yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/workflow.svg");
                yield "
            <span class=\"sf-toolbar-value\">";
                // line 104
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 104, $this->source); })()), "callsCount", [], "any", false, false, false, 104), "html", null, true);
                yield "</span>
        ";
            })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 106
            yield "        ";
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 107
                yield "            <div class=\"sf-toolbar-info-piece\">
                <b>Workflow Calls</b>
                <span>";
                // line 109
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 109, $this->source); })()), "callsCount", [], "any", false, false, false, 109), "html", null, true);
                yield "</span>
            </div>
        ";
            })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 112
            yield "
        ";
            // line 113
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 113, $this->source); })())]);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 117
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 118
        yield "    <span class=\"label ";
        yield (((Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 118, $this->source); })()), "workflows", [], "any", false, false, false, 118)) == 0)) ? ("disabled") : (""));
        yield "\">
        <span class=\"icon\">
            ";
        // line 120
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/workflow.svg");
        yield "
        </span>
        <strong>Workflow</strong>
    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 126
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 127
        yield "    <h2>Workflow</h2>

    ";
        // line 129
        if ((Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 129, $this->source); })()), "workflows", [], "any", false, false, false, 129)) == 0)) {
            // line 130
            yield "        <div class=\"empty empty-panel\">
            <p>There are no workflows configured.</p>
        </div>
    ";
        } else {
            // line 134
            yield "        <script type=\"module\">
            import mermaid from 'https://cdn.jsdelivr.net/npm/mermaid@10/dist/mermaid.esm.min.mjs';
            mermaid.initialize({
                flowchart: { useMaxWidth: false },
                securityLevel: 'loose',
            });

            ";
            // line 141
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 141, $this->source); })()), "workflows", [], "any", false, false, false, 141));
            foreach ($context['_seq'] as $context["name"] => $context["data"]) {
                // line 142
                yield "                window.showNodeDetails";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 142, $this->source); })()), "hash", [$context["name"]], "method", false, false, false, 142), "html", null, true);
                yield " = function (node) {
                    const map = ";
                // line 143
                yield json_encode(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "listeners", [], "any", false, false, false, 143));
                yield ";
                    showNodeDetails(node, map);
                };
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            yield "
            const showNodeDetails = function (node, map) {
                const dialog = document.getElementById('detailsDialog');

                dialog.querySelector('tbody').innerHTML = '';
                for (const [eventName, listeners] of Object.entries(map[node])) {
                    listeners.forEach(listener => {
                        const row = document.createElement('tr');

                        const eventNameCode = document.createElement('code');
                        eventNameCode.textContent = eventName;

                        const eventNameCell = document.createElement('td');
                        eventNameCell.appendChild(eventNameCode);
                        row.appendChild(eventNameCell);

                        const listenerDetailsCell = document.createElement('td');
                        row.appendChild(listenerDetailsCell);

                        let listenerDetails;
                        const listenerDetailsCode = document.createElement('code');
                        listenerDetailsCode.textContent = listener.title;
                        if (listener.file) {
                            const link = document.createElement('a');
                            link.href = listener.file;
                            link.appendChild(listenerDetailsCode);
                            listenerDetails = link;
                        } else {
                            listenerDetails = listenerDetailsCode;
                        }
                        listenerDetailsCell.appendChild(listenerDetails);

                        if (typeof listener.guardExpressions === 'object') {
                            listenerDetailsCell.appendChild(document.createElement('br'));

                            const guardExpressionsWrapper = document.createElement('span');
                            guardExpressionsWrapper.appendChild(document.createTextNode('guard expressions: '));

                            listener.guardExpressions.forEach((expression, index) => {
                                if (index > 0) {
                                    guardExpressionsWrapper.appendChild(document.createTextNode(', '));
                                }

                                const expressionCode = document.createElement('code');
                                expressionCode.textContent = expression;
                                guardExpressionsWrapper.appendChild(expressionCode);
                            });

                            listenerDetailsCell.appendChild(guardExpressionsWrapper);
                        }

                        dialog.querySelector('tbody').appendChild(row);
                    });
                };

                if (dialog.dataset.processed) {
                    dialog.showModal();
                    return;
                }

                dialog.addEventListener('click', (e) => {
                    const rect = dialog.getBoundingClientRect();

                    const inDialog =
                        rect.top <= e.clientY &&
                        e.clientY <= rect.top + rect.height &&
                        rect.left <= e.clientX &&
                        e.clientX <= rect.left + rect.width;

                    !inDialog && dialog.close();
                });

                dialog.querySelectorAll('.cancel').forEach(elt => {
                    elt.addEventListener('click', () => dialog.close());
                });

                dialog.showModal();

                dialog.dataset.processed = true;
            };
            // We do not load all mermaid diagrams at once, but only when the tab is opened
            // This is because mermaid diagrams are in a tab, and cannot be renderer with a
            // \"good size\" if they are not visible
            document.addEventListener('DOMContentLoaded', () => {
                document.querySelectorAll('.tab').forEach((el) => {
                    const observer = new MutationObserver(() => {
                        if (!el.classList.contains('block')) {
                            return;
                        }
                        const mEl = el.querySelector('.sf-mermaid');
                        if (mEl.dataset.processed) {
                            return;
                        }
                        mermaid.run({
                            nodes: [mEl],
                        });
                    });
                    observer.observe(el, { attributeFilter: ['class'] });
                });
            });
        </script>

        <div class=\"sf-tabs js-tabs\">
            ";
            // line 250
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 250, $this->source); })()), "workflows", [], "any", false, false, false, 250));
            foreach ($context['_seq'] as $context["name"] => $context["data"]) {
                // line 251
                yield "                <div class=\"tab\">
                    <h2 class=\"tab-title\">";
                // line 252
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["name"], "html", null, true);
                if (Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["data"], "calls", [], "any", false, false, false, 252))) {
                    yield " (";
                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["data"], "calls", [], "any", false, false, false, 252)), "html", null, true);
                    yield ")";
                }
                yield "</h2>

                    <div class=\"tab-content\">
                        <h3>Definition</h3>
                        <pre class=\"sf-mermaid\">
                            ";
                // line 257
                yield CoreExtension::getAttribute($this->env, $this->source, $context["data"], "dump", [], "any", false, false, false, 257);
                yield "
                            ";
                // line 258
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "listeners", [], "any", false, false, false, 258));
                foreach ($context['_seq'] as $context["nodeId"] => $context["events"]) {
                    // line 259
                    yield "                                click ";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["nodeId"], "html", null, true);
                    yield " showNodeDetails";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 259, $this->source); })()), "hash", [$context["name"]], "method", false, false, false, 259), "html", null, true);
                    yield "
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['nodeId'], $context['events'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 261
                yield "                        </pre>

                        <h3>Calls</h3>
                        <table>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Call</th>
                                    <th>Args</th>
                                    <th>Return</th>
                                    <th>Exception</th>
                                    <th>Duration</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
                // line 276
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "calls", [], "any", false, false, false, 276));
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
                foreach ($context['_seq'] as $context["_key"] => $context["call"]) {
                    // line 277
                    yield "                                    <tr>
                                        <td class=\"font-normal text-small text-muted nowrap\">";
                    // line 278
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 278), "html", null, true);
                    yield "</td>
                                        <td>
                                            <code>";
                    // line 280
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["call"], "method", [], "any", false, false, false, 280), "html", null, true);
                    yield "()</code>
                                            ";
                    // line 281
                    if ((((CoreExtension::getAttribute($this->env, $this->source, $context["call"], "previousMarking", [], "any", true, true, false, 281) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["call"], "previousMarking", [], "any", false, false, false, 281)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["call"], "previousMarking", [], "any", false, false, false, 281)) : (null))) {
                        // line 282
                        yield "                                                <hr />
                                                Previous marking:
                                                ";
                        // line 284
                        yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["call"], "previousMarking", [], "any", false, false, false, 284));
                        yield "
                                            ";
                    }
                    // line 286
                    yield "                                        </td>
                                        <td>
                                            ";
                    // line 288
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["call"], "args", [], "any", false, false, false, 288));
                    yield "
                                        </td>
                                        <td>
                                            ";
                    // line 291
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["call"], "return", [], "any", true, true, false, 291)) {
                        // line 292
                        yield "                                                ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["call"], "return", [], "any", false, false, false, 292) === true)) {
                            // line 293
                            yield "                                                    <code>true</code>
                                                ";
                        } elseif ((CoreExtension::getAttribute($this->env, $this->source,                         // line 294
$context["call"], "return", [], "any", false, false, false, 294) === false)) {
                            // line 295
                            yield "                                                    <code>false</code>
                                                ";
                        } else {
                            // line 297
                            yield "                                                    ";
                            yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["call"], "return", [], "any", false, false, false, 297));
                            yield "
                                                ";
                        }
                        // line 299
                        yield "                                            ";
                    }
                    // line 300
                    yield "                                        </td>
                                        <td>
                                            ";
                    // line 302
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["call"], "exception", [], "any", true, true, false, 302)) {
                        // line 303
                        yield "                                                ";
                        yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["call"], "exception", [], "any", false, false, false, 303));
                        yield "
                                            ";
                    }
                    // line 305
                    yield "                                        </td>
                                        <td>
                                            ";
                    // line 307
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["call"], "duration", [], "any", false, false, false, 307), "html", null, true);
                    yield "ms
                                        </td>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['call'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 311
                yield "                            </tbody>
                        </table>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 316
            yield "        </div>
    ";
        }
        // line 318
        yield "
    <dialog id=\"detailsDialog\">
        <h2>
            Event listeners
            <i class=\"cancel\">×</i>
        </h2>

        <table>
            <thead>
                <tr>
                    <th>event</th>
                    <th>listener</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
        <menu>
            <small><i>⌨</i> <kbd>esc</kbd></small>
            <button class=\"btn btn-sm cancel\">Close</button>
        </menu>
    </dialog>
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
        return "@WebProfiler/Collector/workflow.html.twig";
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
        return array (  599 => 318,  595 => 316,  585 => 311,  567 => 307,  563 => 305,  557 => 303,  555 => 302,  551 => 300,  548 => 299,  542 => 297,  538 => 295,  536 => 294,  533 => 293,  530 => 292,  528 => 291,  522 => 288,  518 => 286,  513 => 284,  509 => 282,  507 => 281,  503 => 280,  498 => 278,  495 => 277,  478 => 276,  461 => 261,  450 => 259,  446 => 258,  442 => 257,  429 => 252,  426 => 251,  422 => 250,  317 => 147,  307 => 143,  302 => 142,  298 => 141,  289 => 134,  283 => 130,  281 => 129,  277 => 127,  267 => 126,  251 => 120,  245 => 118,  235 => 117,  221 => 113,  218 => 112,  212 => 109,  208 => 107,  205 => 106,  200 => 104,  195 => 103,  192 => 102,  189 => 101,  179 => 100,  72 => 4,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        dialog {
            border: none;
            border-radius: 6px;
            box-shadow: var(--settings-modal-shadow);
            max-width: 94%;
            width: 1200px;
        }

        dialog::backdrop {
            background: linear-gradient(
                45deg,
                rgb(18, 18, 20, 0.4),
                rgb(17, 17, 20, 0.8)
            );
        }

        dialog[open] {
            animation: scale 0.3s ease normal;
        }

        dialog[open]::backdrop {
            animation: backdrop 0.3s ease normal;
        }

        dialog.hide {
            animation-direction: reverse;
        }

        dialog h2 {
            margin-top: 0.2em
        }

        dialog i.cancel {
            cursor: pointer;
            padding: 0 5px;
            float: right;
        }

        dialog table {
            border: 1px solid #ccc;
            border-collapse: collapse;
            margin: 0 0 1em 0;
            margin-bottom: 1em;
            padding: 0;
            table-layout: fixed;
        }

        dialog table tr {
            background-color: #f8f8f8;
            border: 1px solid #ddd;
            padding: .35em;
        }

        dialog table th,
        dialog table td {
            padding: .625em;
            text-align: center;
        }

        dialog table th {
            font-size: .85em;
            letter-spacing: .1em;
            text-transform: uppercase;
        }

        dialog menu {
            padding: 0;
            margin: 0;
            display: flex;
            align-items: center;
            flex-direction: row;
            vertical-align: middle;
            justify-content: center;
        }

        dialog menu small {
            margin-right: auto;
        }
        dialog menu small i {
            margin-right: 3px;
        }

        @keyframes scale {
            from { transform: scale(0); }
            to { transform: scale(1); }
        }

        @keyframes backdrop {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
{% endblock %}

{% block toolbar %}
    {% if collector.callsCount > 0 %}
        {% set icon %}
            {{ source('@WebProfiler/Icon/workflow.svg') }}
            <span class=\"sf-toolbar-value\">{{ collector.callsCount }}</span>
        {% endset %}
        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Workflow Calls</b>
                <span>{{ collector.callsCount }}</span>
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.workflows|length == 0 ? 'disabled' }}\">
        <span class=\"icon\">
            {{ source('@WebProfiler/Icon/workflow.svg') }}
        </span>
        <strong>Workflow</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Workflow</h2>

    {% if collector.workflows|length == 0 %}
        <div class=\"empty empty-panel\">
            <p>There are no workflows configured.</p>
        </div>
    {% else %}
        <script type=\"module\">
            import mermaid from 'https://cdn.jsdelivr.net/npm/mermaid@10/dist/mermaid.esm.min.mjs';
            mermaid.initialize({
                flowchart: { useMaxWidth: false },
                securityLevel: 'loose',
            });

            {% for name, data in collector.workflows %}
                window.showNodeDetails{{ collector.hash(name) }} = function (node) {
                    const map = {{ data.listeners|json_encode|raw }};
                    showNodeDetails(node, map);
                };
            {% endfor %}

            const showNodeDetails = function (node, map) {
                const dialog = document.getElementById('detailsDialog');

                dialog.querySelector('tbody').innerHTML = '';
                for (const [eventName, listeners] of Object.entries(map[node])) {
                    listeners.forEach(listener => {
                        const row = document.createElement('tr');

                        const eventNameCode = document.createElement('code');
                        eventNameCode.textContent = eventName;

                        const eventNameCell = document.createElement('td');
                        eventNameCell.appendChild(eventNameCode);
                        row.appendChild(eventNameCell);

                        const listenerDetailsCell = document.createElement('td');
                        row.appendChild(listenerDetailsCell);

                        let listenerDetails;
                        const listenerDetailsCode = document.createElement('code');
                        listenerDetailsCode.textContent = listener.title;
                        if (listener.file) {
                            const link = document.createElement('a');
                            link.href = listener.file;
                            link.appendChild(listenerDetailsCode);
                            listenerDetails = link;
                        } else {
                            listenerDetails = listenerDetailsCode;
                        }
                        listenerDetailsCell.appendChild(listenerDetails);

                        if (typeof listener.guardExpressions === 'object') {
                            listenerDetailsCell.appendChild(document.createElement('br'));

                            const guardExpressionsWrapper = document.createElement('span');
                            guardExpressionsWrapper.appendChild(document.createTextNode('guard expressions: '));

                            listener.guardExpressions.forEach((expression, index) => {
                                if (index > 0) {
                                    guardExpressionsWrapper.appendChild(document.createTextNode(', '));
                                }

                                const expressionCode = document.createElement('code');
                                expressionCode.textContent = expression;
                                guardExpressionsWrapper.appendChild(expressionCode);
                            });

                            listenerDetailsCell.appendChild(guardExpressionsWrapper);
                        }

                        dialog.querySelector('tbody').appendChild(row);
                    });
                };

                if (dialog.dataset.processed) {
                    dialog.showModal();
                    return;
                }

                dialog.addEventListener('click', (e) => {
                    const rect = dialog.getBoundingClientRect();

                    const inDialog =
                        rect.top <= e.clientY &&
                        e.clientY <= rect.top + rect.height &&
                        rect.left <= e.clientX &&
                        e.clientX <= rect.left + rect.width;

                    !inDialog && dialog.close();
                });

                dialog.querySelectorAll('.cancel').forEach(elt => {
                    elt.addEventListener('click', () => dialog.close());
                });

                dialog.showModal();

                dialog.dataset.processed = true;
            };
            // We do not load all mermaid diagrams at once, but only when the tab is opened
            // This is because mermaid diagrams are in a tab, and cannot be renderer with a
            // \"good size\" if they are not visible
            document.addEventListener('DOMContentLoaded', () => {
                document.querySelectorAll('.tab').forEach((el) => {
                    const observer = new MutationObserver(() => {
                        if (!el.classList.contains('block')) {
                            return;
                        }
                        const mEl = el.querySelector('.sf-mermaid');
                        if (mEl.dataset.processed) {
                            return;
                        }
                        mermaid.run({
                            nodes: [mEl],
                        });
                    });
                    observer.observe(el, { attributeFilter: ['class'] });
                });
            });
        </script>

        <div class=\"sf-tabs js-tabs\">
            {% for name, data in collector.workflows %}
                <div class=\"tab\">
                    <h2 class=\"tab-title\">{{ name }}{% if data.calls|length %} ({{ data.calls|length }}){% endif %}</h2>

                    <div class=\"tab-content\">
                        <h3>Definition</h3>
                        <pre class=\"sf-mermaid\">
                            {{ data.dump|raw }}
                            {% for nodeId, events in data.listeners %}
                                click {{ nodeId }} showNodeDetails{{ collector.hash(name) }}
                            {% endfor %}
                        </pre>

                        <h3>Calls</h3>
                        <table>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Call</th>
                                    <th>Args</th>
                                    <th>Return</th>
                                    <th>Exception</th>
                                    <th>Duration</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for call in data.calls %}
                                    <tr>
                                        <td class=\"font-normal text-small text-muted nowrap\">{{ loop.index }}</td>
                                        <td>
                                            <code>{{ call.method }}()</code>
                                            {% if call.previousMarking ?? null %}
                                                <hr />
                                                Previous marking:
                                                {{ profiler_dump(call.previousMarking) }}
                                            {% endif %}
                                        </td>
                                        <td>
                                            {{ profiler_dump(call.args) }}
                                        </td>
                                        <td>
                                            {% if call.return is defined %}
                                                {% if call.return is same as true %}
                                                    <code>true</code>
                                                {% elseif call.return is same as false %}
                                                    <code>false</code>
                                                {% else %}
                                                    {{ profiler_dump(call.return) }}
                                                {% endif %}
                                            {% endif %}
                                        </td>
                                        <td>
                                            {% if call.exception is defined %}
                                                {{ profiler_dump(call.exception) }}
                                            {% endif %}
                                        </td>
                                        <td>
                                            {{ call.duration }}ms
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            {% endfor %}
        </div>
    {% endif %}

    <dialog id=\"detailsDialog\">
        <h2>
            Event listeners
            <i class=\"cancel\">×</i>
        </h2>

        <table>
            <thead>
                <tr>
                    <th>event</th>
                    <th>listener</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
        <menu>
            <small><i>⌨</i> <kbd>esc</kbd></small>
            <button class=\"btn btn-sm cancel\">Close</button>
        </menu>
    </dialog>
{% endblock %}
", "@WebProfiler/Collector/workflow.html.twig", "C:\\Users\\robocop\\Desktop\\REVISIONS WEB\\FIRST PROJECTS\\MyMetaverseV2.0\\MyMetaverse\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\workflow.html.twig");
    }
}
