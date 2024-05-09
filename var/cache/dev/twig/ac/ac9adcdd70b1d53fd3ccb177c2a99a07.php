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

/* @Security/Collector/security.html.twig */
class __TwigTemplate_cae8b61cfc7941d3192d36ece5ffbea7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Security/Collector/security.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Security/Collector/security.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@Security/Collector/security.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        // line 0
        yield "Security";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
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
        yield "    ";
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "

    <style>
        #collector-content .decision-log .voter_result td {
            border-top-width: 1px;
            border-bottom-width: 0;
            padding-bottom: 0;
        }

        #collector-content .decision-log .voter_details td {
            border-top-width: 0;
            border-bottom-width: 1px;
            padding-bottom: 0;
        }

        #collector-content .decision-log .voter_details table {
            border: 0;
            margin: 0;
            box-shadow: unset;
        }

        #collector-content .decision-log .voter_details table td {
            border: 0;
            padding: 0 0 8px 0;
        }

        #collector-content .authenticators .badge {
            color: var(--white);
            display: inline-block;
            text-align: center;
        }
        #collector-content .authenticators .badge.badge-resolved {
            background-color: var(--green-500);
        }
        #collector-content .authenticators .badge.badge-not_resolved {
            background-color: var(--yellow-500);
        }

        #collector-content .authenticators svg[data-icon-name=\"icon-tabler-check\"] {
            color: var(--green-500);
        }
        #collector-content .authenticators svg[data-icon-name=\"icon-tabler-x\"] {
            color: var(--red-500);
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 53
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 54
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 54, $this->source); })()), "firewall", [], "any", false, false, false, 54)) {
            // line 55
            yield "        ";
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 56
                yield "            ";
                yield Twig\Extension\CoreExtension::source($this->env, "@Security/Collector/icon.svg");
                yield "
            <span class=\"sf-toolbar-value\">";
                // line 57
                yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "user", [], "any", true, true, false, 57)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "user", [], "any", false, false, false, 57), "n/a")) : ("n/a")), "html", null, true);
                yield "</span>
        ";
            })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 59
            yield "
        ";
            // line 60
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 61
                yield "            ";
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 61, $this->source); })()), "impersonated", [], "any", false, false, false, 61)) {
                    // line 62
                    yield "                <div class=\"sf-toolbar-info-group\">
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Impersonator</b>
                        <span>";
                    // line 65
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 65, $this->source); })()), "impersonatorUser", [], "any", false, false, false, 65), "html", null, true);
                    yield "</span>
                    </div>
                </div>
            ";
                }
                // line 69
                yield "
            <div class=\"sf-toolbar-info-group\">
                ";
                // line 71
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 71, $this->source); })()), "enabled", [], "any", false, false, false, 71)) {
                    // line 72
                    yield "                    ";
                    if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 72, $this->source); })()), "token", [], "any", false, false, false, 72)) {
                        // line 73
                        yield "                        <div class=\"sf-toolbar-info-piece\">
                            <b>Logged in as</b>
                            <span>";
                        // line 75
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75), "html", null, true);
                        yield "</span>
                        </div>

                        <div class=\"sf-toolbar-info-piece\">
                            <b>Authenticated</b>
                            <span class=\"sf-toolbar-status sf-toolbar-status-";
                        // line 80
                        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 80, $this->source); })()), "authenticated", [], "any", false, false, false, 80)) ? ("green") : ("yellow"));
                        yield "\">";
                        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 80, $this->source); })()), "authenticated", [], "any", false, false, false, 80)) ? ("Yes") : ("No"));
                        yield "</span>
                        </div>

                        <div class=\"sf-toolbar-info-piece\">
                            <b>Roles</b>
                            <span>
                                ";
                        // line 86
                        $context["remainingRoles"] = Twig\Extension\CoreExtension::slice($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 86, $this->source); })()), "roles", [], "any", false, false, false, 86), 1);
                        // line 87
                        yield "                                ";
                        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::first($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 87, $this->source); })()), "roles", [], "any", false, false, false, 87)), "html", null, true);
                        yield "
                                ";
                        // line 88
                        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["remainingRoles"]) || array_key_exists("remainingRoles", $context) ? $context["remainingRoles"] : (function () { throw new RuntimeError('Variable "remainingRoles" does not exist.', 88, $this->source); })()))) {
                            // line 89
                            yield "                                    +
                                    <abbr title=\"";
                            // line 90
                            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::joinFilter((isset($context["remainingRoles"]) || array_key_exists("remainingRoles", $context) ? $context["remainingRoles"] : (function () { throw new RuntimeError('Variable "remainingRoles" does not exist.', 90, $this->source); })()), ", "), "html", null, true);
                            yield "\">
                                        ";
                            // line 91
                            yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lengthFilter($this->env, (isset($context["remainingRoles"]) || array_key_exists("remainingRoles", $context) ? $context["remainingRoles"] : (function () { throw new RuntimeError('Variable "remainingRoles" does not exist.', 91, $this->source); })())), "html", null, true);
                            yield " more
                                    </abbr>
                                ";
                        }
                        // line 94
                        yield "                            </span>
                        </div>

                        ";
                        // line 97
                        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 97, $this->source); })()), "supportsRoleHierarchy", [], "any", false, false, false, 97)) {
                            // line 98
                            yield "                            <div class=\"sf-toolbar-info-piece\">
                                <b>Inherited Roles</b>
                                <span>
                                    ";
                            // line 101
                            if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 101, $this->source); })()), "inheritedRoles", [], "any", false, false, false, 101))) {
                                // line 102
                                yield "                                        none
                                    ";
                            } else {
                                // line 104
                                yield "                                        ";
                                $context["remainingRoles"] = Twig\Extension\CoreExtension::slice($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 104, $this->source); })()), "inheritedRoles", [], "any", false, false, false, 104), 1);
                                // line 105
                                yield "                                        ";
                                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::first($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 105, $this->source); })()), "inheritedRoles", [], "any", false, false, false, 105)), "html", null, true);
                                yield "
                                        ";
                                // line 106
                                if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["remainingRoles"]) || array_key_exists("remainingRoles", $context) ? $context["remainingRoles"] : (function () { throw new RuntimeError('Variable "remainingRoles" does not exist.', 106, $this->source); })()))) {
                                    // line 107
                                    yield "                                            +
                                            <abbr title=\"";
                                    // line 108
                                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::joinFilter((isset($context["remainingRoles"]) || array_key_exists("remainingRoles", $context) ? $context["remainingRoles"] : (function () { throw new RuntimeError('Variable "remainingRoles" does not exist.', 108, $this->source); })()), ", "), "html", null, true);
                                    yield "\">
                                                ";
                                    // line 109
                                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::lengthFilter($this->env, (isset($context["remainingRoles"]) || array_key_exists("remainingRoles", $context) ? $context["remainingRoles"] : (function () { throw new RuntimeError('Variable "remainingRoles" does not exist.', 109, $this->source); })())), "html", null, true);
                                    yield " more
                                            </abbr>
                                        ";
                                }
                                // line 112
                                yield "                                    ";
                            }
                            // line 113
                            yield "                                </span>
                            </div>
                        ";
                        }
                        // line 116
                        yield "
                        <div class=\"sf-toolbar-info-piece\">
                            <b>Token class</b>
                            <span>";
                        // line 119
                        yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->abbrClass(Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 119, $this->source); })()), "tokenClass", [], "any", false, false, false, 119), "html", null, true));
                        yield "</span>
                        </div>
                    ";
                    } else {
                        // line 122
                        yield "                        <div class=\"sf-toolbar-info-piece\">
                            <b>Authenticated</b>
                            <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">No</span>
                        </div>
                    ";
                    }
                    // line 127
                    yield "
                    ";
                    // line 128
                    if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 128, $this->source); })()), "firewall", [], "any", false, false, false, 128)) {
                        // line 129
                        yield "                        <div class=\"sf-toolbar-info-piece\">
                            <b>Firewall name</b>
                            <span>";
                        // line 131
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 131, $this->source); })()), "firewall", [], "any", false, false, false, 131), "name", [], "any", false, false, false, 131), "html", null, true);
                        yield "</span>
                        </div>
                    ";
                    }
                    // line 134
                    yield "
                    ";
                    // line 135
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 135, $this->source); })()), "token", [], "any", false, false, false, 135) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 135, $this->source); })()), "logoutUrl", [], "any", false, false, false, 135))) {
                        // line 136
                        yield "                        <div class=\"sf-toolbar-info-piece\">
                            <b>Actions</b>
                            <span>
                                <a href=\"";
                        // line 139
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 139, $this->source); })()), "logoutUrl", [], "any", false, false, false, 139), "html", null, true);
                        yield "\">Logout</a>
                                ";
                        // line 140
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 140, $this->source); })()), "impersonated", [], "any", false, false, false, 140) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 140, $this->source); })()), "impersonationExitPath", [], "any", false, false, false, 140))) {
                            // line 141
                            yield "                                    | <a href=\"";
                            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 141, $this->source); })()), "impersonationExitPath", [], "any", false, false, false, 141), "html", null, true);
                            yield "\">Exit impersonation</a>
                                ";
                        }
                        // line 143
                        yield "                            </span>
                        </div>
                    ";
                    }
                    // line 146
                    yield "                ";
                } else {
                    // line 147
                    yield "                    <div class=\"sf-toolbar-info-piece\">
                        <span>The security is disabled.</span>
                    </div>
                ";
                }
                // line 151
                yield "            </div>
        ";
            })() ?? new \EmptyIterator())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 153
            yield "
        ";
            // line 154
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 154, $this->source); })())]);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 158
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 159
        yield "    <span class=\"label ";
        yield ((( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 159, $this->source); })()), "firewall", [], "any", false, false, false, 159) ||  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 159, $this->source); })()), "token", [], "any", false, false, false, 159))) ? ("disabled") : (""));
        yield "\">
        <span class=\"icon\">";
        // line 160
        yield Twig\Extension\CoreExtension::source($this->env, "@Security/Collector/icon.svg");
        yield "</span>
        <strong>Security</strong>
    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 165
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 166
        yield "    <h2>Security</h2>
    ";
        // line 167
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 167, $this->source); })()), "enabled", [], "any", false, false, false, 167)) {
            // line 168
            yield "        <div class=\"sf-tabs\">
            <div class=\"tab ";
            // line 169
            yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 169, $this->source); })()), "token", [], "any", false, false, false, 169))) ? ("disabled") : (""));
            yield "\">
                <h3 class=\"tab-title\">Token</h3>

                <div class=\"tab-content\">
                    ";
            // line 173
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 173, $this->source); })()), "token", [], "any", false, false, false, 173)) {
                // line 174
                yield "                        <div class=\"metrics\">
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 176
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 176, $this->source); })()), "user", [], "any", false, false, false, 176), "html", null, true);
                yield "</span>
                                <span class=\"label\">Username</span>
                            </div>

                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 181
                yield Twig\Extension\CoreExtension::source($this->env, (("@WebProfiler/Icon/" . ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 181, $this->source); })()), "authenticated", [], "any", false, false, false, 181)) ? ("yes") : ("no"))) . ".svg"));
                yield "</span>
                                <span class=\"label\">Authenticated</span>
                            </div>
                        </div>

                        <table>
                            <thead>
                                <tr>
                                    <th scope=\"col\" class=\"key\">Property</th>
                                    <th scope=\"col\">Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Roles</th>
                                    <td>
                                        ";
                // line 197
                yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 197, $this->source); })()), "roles", [], "any", false, false, false, 197))) ? ("none") : ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 197, $this->source); })()), "roles", [], "any", false, false, false, 197), 1)));
                yield "

                                        ";
                // line 199
                if (( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 199, $this->source); })()), "authenticated", [], "any", false, false, false, 199) && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 199, $this->source); })()), "roles", [], "any", false, false, false, 199)))) {
                    // line 200
                    yield "                                            <p class=\"help\">User is not authenticated probably because they have no roles.</p>
                                        ";
                }
                // line 202
                yield "                                    </td>
                                </tr>

                                ";
                // line 205
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 205, $this->source); })()), "supportsRoleHierarchy", [], "any", false, false, false, 205)) {
                    // line 206
                    yield "                                <tr>
                                    <th>Inherited Roles</th>
                                    <td>";
                    // line 208
                    yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 208, $this->source); })()), "inheritedRoles", [], "any", false, false, false, 208))) ? ("none") : ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 208, $this->source); })()), "inheritedRoles", [], "any", false, false, false, 208), 1)));
                    yield "</td>
                                </tr>
                                ";
                }
                // line 211
                yield "
                                ";
                // line 212
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 212, $this->source); })()), "token", [], "any", false, false, false, 212)) {
                    // line 213
                    yield "                                <tr>
                                    <th>Token</th>
                                    <td>";
                    // line 215
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 215, $this->source); })()), "token", [], "any", false, false, false, 215));
                    yield "</td>
                                </tr>
                                ";
                }
                // line 218
                yield "                            </tbody>
                        </table>
                    ";
            } elseif (CoreExtension::getAttribute($this->env, $this->source,             // line 220
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 220, $this->source); })()), "enabled", [], "any", false, false, false, 220)) {
                // line 221
                yield "                        <div class=\"empty\">
                            <p>There is no security token.</p>
                        </div>
                    ";
            }
            // line 225
            yield "                </div>
            </div>

            <div class=\"tab ";
            // line 228
            yield ((( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 228, $this->source); })()), "firewall", [], "any", false, false, false, 228) || Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 228, $this->source); })()), "firewall", [], "any", false, false, false, 228), "security_enabled", [], "any", false, false, false, 228)))) ? ("disabled") : (""));
            yield "\">
                <h3 class=\"tab-title\">Firewall</h3>
                <div class=\"tab-content\">
                    ";
            // line 231
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 231, $this->source); })()), "firewall", [], "any", false, false, false, 231)) {
                // line 232
                yield "                        <div class=\"metrics\">
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 234
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 234, $this->source); })()), "firewall", [], "any", false, false, false, 234), "name", [], "any", false, false, false, 234), "html", null, true);
                yield "</span>
                                <span class=\"label\">Name</span>
                            </div>
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 238
                yield Twig\Extension\CoreExtension::source($this->env, (("@WebProfiler/Icon/" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 238, $this->source); })()), "firewall", [], "any", false, false, false, 238), "security_enabled", [], "any", false, false, false, 238)) ? ("yes") : ("no"))) . ".svg"));
                yield "</span>
                                <span class=\"label\">Security enabled</span>
                            </div>
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 242
                yield Twig\Extension\CoreExtension::source($this->env, (("@WebProfiler/Icon/" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 242, $this->source); })()), "firewall", [], "any", false, false, false, 242), "stateless", [], "any", false, false, false, 242)) ? ("yes") : ("no"))) . ".svg"));
                yield "</span>
                                <span class=\"label\">Stateless</span>
                            </div>
                        </div>

                        ";
                // line 247
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 247, $this->source); })()), "firewall", [], "any", false, false, false, 247), "security_enabled", [], "any", false, false, false, 247)) {
                    // line 248
                    yield "                            <h4>Configuration</h4>
                            <table>
                                <thead>
                                    <tr>
                                        <th scope=\"col\" class=\"key\">Key</th>
                                        <th scope=\"col\">Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>provider</th>
                                        <td>";
                    // line 259
                    ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 259, $this->source); })()), "firewall", [], "any", false, false, false, 259), "provider", [], "any", false, false, false, 259)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 259, $this->source); })()), "firewall", [], "any", false, false, false, 259), "provider", [], "any", false, false, false, 259), "html", null, true)) : (yield "(none)"));
                    yield "</td>
                                    </tr>
                                    <tr>
                                        <th>context</th>
                                        <td>";
                    // line 263
                    ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 263, $this->source); })()), "firewall", [], "any", false, false, false, 263), "context", [], "any", false, false, false, 263)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 263, $this->source); })()), "firewall", [], "any", false, false, false, 263), "context", [], "any", false, false, false, 263), "html", null, true)) : (yield "(none)"));
                    yield "</td>
                                    </tr>
                                    <tr>
                                        <th>entry_point</th>
                                        <td>";
                    // line 267
                    ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 267, $this->source); })()), "firewall", [], "any", false, false, false, 267), "entry_point", [], "any", false, false, false, 267)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 267, $this->source); })()), "firewall", [], "any", false, false, false, 267), "entry_point", [], "any", false, false, false, 267), "html", null, true)) : (yield "(none)"));
                    yield "</td>
                                    </tr>
                                    <tr>
                                        <th>user_checker</th>
                                        <td>";
                    // line 271
                    ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 271, $this->source); })()), "firewall", [], "any", false, false, false, 271), "user_checker", [], "any", false, false, false, 271)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 271, $this->source); })()), "firewall", [], "any", false, false, false, 271), "user_checker", [], "any", false, false, false, 271), "html", null, true)) : (yield "(none)"));
                    yield "</td>
                                    </tr>
                                    <tr>
                                        <th>access_denied_handler</th>
                                        <td>";
                    // line 275
                    ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 275, $this->source); })()), "firewall", [], "any", false, false, false, 275), "access_denied_handler", [], "any", false, false, false, 275)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 275, $this->source); })()), "firewall", [], "any", false, false, false, 275), "access_denied_handler", [], "any", false, false, false, 275), "html", null, true)) : (yield "(none)"));
                    yield "</td>
                                    </tr>
                                    <tr>
                                        <th>access_denied_url</th>
                                        <td>";
                    // line 279
                    ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 279, $this->source); })()), "firewall", [], "any", false, false, false, 279), "access_denied_url", [], "any", false, false, false, 279)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 279, $this->source); })()), "firewall", [], "any", false, false, false, 279), "access_denied_url", [], "any", false, false, false, 279), "html", null, true)) : (yield "(none)"));
                    yield "</td>
                                    </tr>
                                    <tr>
                                        <th>authenticators</th>
                                        <td>";
                    // line 283
                    yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 283, $this->source); })()), "firewall", [], "any", false, false, false, 283), "authenticators", [], "any", false, false, false, 283))) ? ("(none)") : ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 283, $this->source); })()), "firewall", [], "any", false, false, false, 283), "authenticators", [], "any", false, false, false, 283), 1)));
                    yield "</td>
                                    </tr>
                                </tbody>
                            </table>
                        ";
                }
                // line 288
                yield "                    ";
            }
            // line 289
            yield "                </div>
            </div>

            <div class=\"tab ";
            // line 292
            yield ((Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", true, true, false, 292)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", false, false, false, 292), [])) : ([])))) ? ("disabled") : (""));
            yield "\">
                <h3 class=\"tab-title\">Listeners</h3>
                <div class=\"tab-content\">
                    ";
            // line 295
            if (Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", true, true, false, 295)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", false, false, false, 295), [])) : ([])))) {
                // line 296
                yield "                        <div class=\"empty\">
                            <p>No security listeners have been recorded. Check that debugging is enabled in the kernel.</p>
                        </div>
                    ";
            } else {
                // line 300
                yield "                        <table>
                            <thead>
                            <tr>
                                <th>Listener</th>
                                <th>Duration</th>
                                <th>Response</th>
                            </tr>
                            </thead>

                            ";
                // line 309
                $context["previous_event"] = Twig\Extension\CoreExtension::first($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 309, $this->source); })()), "listeners", [], "any", false, false, false, 309));
                // line 310
                yield "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 310, $this->source); })()), "listeners", [], "any", false, false, false, 310));
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
                    // line 311
                    yield "                                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 311) || ($context["listener"] != (isset($context["previous_event"]) || array_key_exists("previous_event", $context) ? $context["previous_event"] : (function () { throw new RuntimeError('Variable "previous_event" does not exist.', 311, $this->source); })())))) {
                        // line 312
                        yield "                                    ";
                        if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 312)) {
                            // line 313
                            yield "                                        </tbody>
                                    ";
                        }
                        // line 315
                        yield "                                    <tbody>
                                    ";
                        // line 316
                        $context["previous_event"] = $context["listener"];
                        // line 317
                        yield "                                ";
                    }
                    // line 318
                    yield "
                                <tr>
                                    <td class=\"font-normal\">";
                    // line 320
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["listener"], "stub", [], "any", false, false, false, 320));
                    yield "</td>
                                    <td class=\"no-wrap\">";
                    // line 321
                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, $context["listener"], "time", [], "any", false, false, false, 321) * 1000)), "html", null, true);
                    yield " ms</td>
                                    <td class=\"font-normal\">";
                    // line 322
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["listener"], "response", [], "any", false, false, false, 322)) ? ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["listener"], "response", [], "any", false, false, false, 322))) : ("(none)"));
                    yield "</td>
                                </tr>

                                ";
                    // line 325
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 325)) {
                        // line 326
                        yield "                                    </tbody>
                                ";
                    }
                    // line 328
                    yield "                            ";
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
                // line 329
                yield "                        </table>
                    ";
            }
            // line 331
            yield "                </div>
            </div>

            <div class=\"tab ";
            // line 334
            yield ((Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "authenticators", [], "any", true, true, false, 334)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "authenticators", [], "any", false, false, false, 334), [])) : ([])))) ? ("disabled") : (""));
            yield "\">
                <h3 class=\"tab-title\">Authenticators</h3>
                <div class=\"tab-content\">
                    ";
            // line 337
            if ( !Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "authenticators", [], "any", true, true, false, 337)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "authenticators", [], "any", false, false, false, 337), [])) : ([])))) {
                // line 338
                yield "                        <table class=\"authenticators\">
                            <thead>
                            <tr>
                                <th>Authenticator</th>
                                <th>Supports</th>
                                <th>Authenticated</th>
                                <th>Duration</th>
                                <th>Passport</th>
                                <th>Badges</th>
                            </tr>
                            </thead>

                            ";
                // line 350
                $context["previous_event"] = Twig\Extension\CoreExtension::first($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 350, $this->source); })()), "listeners", [], "any", false, false, false, 350));
                // line 351
                yield "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 351, $this->source); })()), "authenticators", [], "any", false, false, false, 351));
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
                foreach ($context['_seq'] as $context["_key"] => $context["authenticator"]) {
                    // line 352
                    yield "                                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 352) || ($context["authenticator"] != (isset($context["previous_event"]) || array_key_exists("previous_event", $context) ? $context["previous_event"] : (function () { throw new RuntimeError('Variable "previous_event" does not exist.', 352, $this->source); })())))) {
                        // line 353
                        yield "                                    ";
                        if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 353)) {
                            // line 354
                            yield "                                        </tbody>
                                    ";
                        }
                        // line 356
                        yield "
                                    <tbody>
                                    ";
                        // line 358
                        $context["previous_event"] = $context["authenticator"];
                        // line 359
                        yield "                                ";
                    }
                    // line 360
                    yield "
                                <tr>
                                    <td class=\"font-normal\">";
                    // line 362
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["authenticator"], "stub", [], "any", false, false, false, 362));
                    yield "</td>
                                    <td class=\"no-wrap\">";
                    // line 363
                    yield Twig\Extension\CoreExtension::source($this->env, (("@WebProfiler/Icon/" . ((CoreExtension::getAttribute($this->env, $this->source, $context["authenticator"], "supports", [], "any", false, false, false, 363)) ? ("yes") : ("no"))) . ".svg"));
                    yield "</td>
                                    <td class=\"no-wrap\">";
                    // line 364
                    yield (( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["authenticator"], "authenticated", [], "any", false, false, false, 364))) ? (Twig\Extension\CoreExtension::source($this->env, (("@WebProfiler/Icon/" . ((CoreExtension::getAttribute($this->env, $this->source, $context["authenticator"], "authenticated", [], "any", false, false, false, 364)) ? ("yes") : ("no"))) . ".svg"))) : (""));
                    yield "</td>
                                    <td class=\"no-wrap\">";
                    // line 365
                    yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::sprintf("%0.2f", (CoreExtension::getAttribute($this->env, $this->source, $context["authenticator"], "duration", [], "any", false, false, false, 365) * 1000)), "html", null, true);
                    yield " ms</td>
                                    <td class=\"font-normal\">";
                    // line 366
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["authenticator"], "passport", [], "any", false, false, false, 366)) ? ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["authenticator"], "passport", [], "any", false, false, false, 366))) : ("(none)"));
                    yield "</td>
                                    <td class=\"font-normal\">
                                        ";
                    // line 368
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((((CoreExtension::getAttribute($this->env, $this->source, $context["authenticator"], "badges", [], "any", true, true, false, 368) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["authenticator"], "badges", [], "any", false, false, false, 368)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["authenticator"], "badges", [], "any", false, false, false, 368)) : ([])));
                    $context['_iterated'] = false;
                    foreach ($context['_seq'] as $context["_key"] => $context["badge"]) {
                        // line 369
                        yield "                                            <span class=\"badge badge-";
                        yield ((CoreExtension::getAttribute($this->env, $this->source, $context["badge"], "resolved", [], "any", false, false, false, 369)) ? ("resolved") : ("not_resolved"));
                        yield "\">
                                            ";
                        // line 370
                        yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->abbrClass(Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["badge"], "stub", [], "any", false, false, false, 370), "html", null, true));
                        yield "
                                            </span>
                                        ";
                        $context['_iterated'] = true;
                    }
                    if (!$context['_iterated']) {
                        // line 373
                        yield "                                            (none)
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['badge'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 375
                    yield "                                    </td>
                                </tr>

                                ";
                    // line 378
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 378)) {
                        // line 379
                        yield "                                    </tbody>
                                ";
                    }
                    // line 381
                    yield "                            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['authenticator'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 382
                yield "                        </table>
                    ";
            } else {
                // line 384
                yield "                        <div class=\"empty\">
                            <p>No authenticators have been recorded. Check previous profiles on your authentication endpoint.</p>
                        </div>
                    ";
            }
            // line 388
            yield "                </div>
            </div>

            <div class=\"tab ";
            // line 391
            yield ((Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "accessDecisionLog", [], "any", true, true, false, 391)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "accessDecisionLog", [], "any", false, false, false, 391), [])) : ([])))) ? ("disabled") : (""));
            yield "\">
                <h3 class=\"tab-title\">Access Decision</h3>
                <div class=\"tab-content\">
                    ";
            // line 394
            if ( !Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "voters", [], "any", true, true, false, 394)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "voters", [], "any", false, false, false, 394), [])) : ([])))) {
                // line 395
                yield "                        <div class=\"metrics\">
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 397
                yield Twig\Extension\EscaperExtension::escape($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "voterStrategy", [], "any", true, true, false, 397)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "voterStrategy", [], "any", false, false, false, 397), "unknown")) : ("unknown")), "html", null, true);
                yield "</span>
                                <span class=\"label\">Strategy</span>
                            </div>
                        </div>

                        <table class=\"voters\">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Voter class</th>
                                </tr>
                            </thead>

                            <tbody>
                                ";
                // line 411
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 411, $this->source); })()), "voters", [], "any", false, false, false, 411));
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
                foreach ($context['_seq'] as $context["_key"] => $context["voter"]) {
                    // line 412
                    yield "                                    <tr>
                                        <td class=\"font-normal text-small text-muted nowrap\">";
                    // line 413
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 413), "html", null, true);
                    yield "</td>
                                        <td class=\"font-normal\">";
                    // line 414
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["voter"]);
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voter'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 417
                yield "                            </tbody>
                        </table>
                    ";
            }
            // line 420
            yield "                    ";
            if ( !Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "accessDecisionLog", [], "any", true, true, false, 420)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "accessDecisionLog", [], "any", false, false, false, 420), [])) : ([])))) {
                // line 421
                yield "                        <h2>Access decision log</h2>

                        <table class=\"decision-log\">
                            <col style=\"width: 30px\">
                            <col style=\"width: 120px\">
                            <col style=\"width: 25%\">
                            <col style=\"width: 60%\">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Result</th>
                                    <th>Attributes</th>
                                    <th>Object</th>
                                </tr>
                            </thead>

                            <tbody>
                                ";
                // line 439
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 439, $this->source); })()), "accessDecisionLog", [], "any", false, false, false, 439));
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
                foreach ($context['_seq'] as $context["_key"] => $context["decision"]) {
                    // line 440
                    yield "                                    <tr class=\"voter_result\">
                                        <td class=\"font-normal text-small text-muted nowrap\">";
                    // line 441
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 441), "html", null, true);
                    yield "</td>
                                        <td class=\"font-normal\">
                                            ";
                    // line 443
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["decision"], "result", [], "any", false, false, false, 443)) ? ("<span class=\"label status-success same-width\">GRANTED</span>") : ("<span class=\"label status-error same-width\">DENIED</span>"));
                    // line 446
                    yield "
                                        </td>
                                        <td>
                                            ";
                    // line 449
                    if ((Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["decision"], "attributes", [], "any", false, false, false, 449)) == 1)) {
                        // line 450
                        yield "                                                ";
                        $context["attribute"] = Twig\Extension\CoreExtension::first($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["decision"], "attributes", [], "any", false, false, false, 450));
                        // line 451
                        yield "                                                ";
                        if (CoreExtension::getAttribute($this->env, $this->source, ($context["attribute"] ?? null), "expression", [], "any", true, true, false, 451)) {
                            // line 452
                            yield "                                                    Expression: <pre><code>";
                            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new RuntimeError('Variable "attribute" does not exist.', 452, $this->source); })()), "expression", [], "any", false, false, false, 452), "html", null, true);
                            yield "</code></pre>
                                                ";
                        } elseif ((CoreExtension::getAttribute($this->env, $this->source,                         // line 453
(isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new RuntimeError('Variable "attribute" does not exist.', 453, $this->source); })()), "type", [], "any", false, false, false, 453) == "string")) {
                            // line 454
                            yield "                                                    ";
                            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new RuntimeError('Variable "attribute" does not exist.', 454, $this->source); })()), "html", null, true);
                            yield "
                                                ";
                        } else {
                            // line 456
                            yield "                                                     ";
                            yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, (isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new RuntimeError('Variable "attribute" does not exist.', 456, $this->source); })()));
                            yield "
                                                ";
                        }
                        // line 458
                        yield "                                            ";
                    } else {
                        // line 459
                        yield "                                                ";
                        yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["decision"], "attributes", [], "any", false, false, false, 459));
                        yield "
                                            ";
                    }
                    // line 461
                    yield "                                        </td>
                                        <td>";
                    // line 462
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["decision"], "seek", ["object"], "method", false, false, false, 462));
                    yield "</td>
                                    </tr>
                                    <tr class=\"voter_details\">
                                        <td></td>
                                        <td colspan=\"3\">
                                        ";
                    // line 467
                    if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["decision"], "voter_details", [], "any", false, false, false, 467))) {
                        // line 468
                        yield "                                            ";
                        $context["voter_details_id"] = ("voter-details-" . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 468));
                        // line 469
                        yield "                                            <div id=\"";
                        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["voter_details_id"]) || array_key_exists("voter_details_id", $context) ? $context["voter_details_id"] : (function () { throw new RuntimeError('Variable "voter_details_id" does not exist.', 469, $this->source); })()), "html", null, true);
                        yield "\" class=\"sf-toggle-content sf-toggle-hidden\">
                                                <table>
                                                   <tbody>
                                                    ";
                        // line 472
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["decision"], "voter_details", [], "any", false, false, false, 472));
                        foreach ($context['_seq'] as $context["_key"] => $context["voter_detail"]) {
                            // line 473
                            yield "                                                        <tr>
                                                            <td class=\"font-normal\">";
                            // line 474
                            yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["voter_detail"], "class", [], "array", false, false, false, 474));
                            yield "</td>
                                                            ";
                            // line 475
                            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 475, $this->source); })()), "voterStrategy", [], "any", false, false, false, 475) == "unanimous")) {
                                // line 476
                                yield "                                                            <td class=\"font-normal text-small\">attribute ";
                                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["voter_detail"], "attributes", [], "array", false, false, false, 476), 0, [], "array", false, false, false, 476), "html", null, true);
                                yield "</td>
                                                            ";
                            }
                            // line 478
                            yield "                                                            <td class=\"font-normal text-small\">
                                                                ";
                            // line 479
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["voter_detail"], "vote", [], "array", false, false, false, 479) == Twig\Extension\CoreExtension::constant("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface::ACCESS_GRANTED"))) {
                                // line 480
                                yield "                                                                    ACCESS GRANTED
                                                                ";
                            } elseif ((CoreExtension::getAttribute($this->env, $this->source,                             // line 481
$context["voter_detail"], "vote", [], "array", false, false, false, 481) == Twig\Extension\CoreExtension::constant("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface::ACCESS_ABSTAIN"))) {
                                // line 482
                                yield "                                                                    ACCESS ABSTAIN
                                                                ";
                            } elseif ((CoreExtension::getAttribute($this->env, $this->source,                             // line 483
$context["voter_detail"], "vote", [], "array", false, false, false, 483) == Twig\Extension\CoreExtension::constant("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface::ACCESS_DENIED"))) {
                                // line 484
                                yield "                                                                    ACCESS DENIED
                                                                ";
                            } else {
                                // line 486
                                yield "                                                                    unknown (";
                                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["voter_detail"], "vote", [], "array", false, false, false, 486), "html", null, true);
                                yield ")
                                                                ";
                            }
                            // line 488
                            yield "                                                            </td>
                                                        </tr>
                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voter_detail'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 491
                        yield "                                                    </tbody>
                                                </table>
                                            </div>
                                            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                        // line 494
                        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["voter_details_id"]) || array_key_exists("voter_details_id", $context) ? $context["voter_details_id"] : (function () { throw new RuntimeError('Variable "voter_details_id" does not exist.', 494, $this->source); })()), "html", null, true);
                        yield "\" data-toggle-alt-content=\"Hide voter details\">Show voter details</a>
                                        ";
                    }
                    // line 496
                    yield "                                        </td>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['decision'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 499
                yield "                            </tbody>
                        </table>
                    </div>
                ";
            }
            // line 503
            yield "            </div>
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
        return "@Security/Collector/security.html.twig";
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
        return array (  1180 => 503,  1174 => 499,  1158 => 496,  1153 => 494,  1148 => 491,  1140 => 488,  1134 => 486,  1130 => 484,  1128 => 483,  1125 => 482,  1123 => 481,  1120 => 480,  1118 => 479,  1115 => 478,  1109 => 476,  1107 => 475,  1103 => 474,  1100 => 473,  1096 => 472,  1089 => 469,  1086 => 468,  1084 => 467,  1076 => 462,  1073 => 461,  1067 => 459,  1064 => 458,  1058 => 456,  1052 => 454,  1050 => 453,  1045 => 452,  1042 => 451,  1039 => 450,  1037 => 449,  1032 => 446,  1030 => 443,  1025 => 441,  1022 => 440,  1005 => 439,  985 => 421,  982 => 420,  977 => 417,  960 => 414,  956 => 413,  953 => 412,  936 => 411,  919 => 397,  915 => 395,  913 => 394,  907 => 391,  902 => 388,  896 => 384,  892 => 382,  878 => 381,  874 => 379,  872 => 378,  867 => 375,  860 => 373,  852 => 370,  847 => 369,  842 => 368,  837 => 366,  833 => 365,  829 => 364,  825 => 363,  821 => 362,  817 => 360,  814 => 359,  812 => 358,  808 => 356,  804 => 354,  801 => 353,  798 => 352,  780 => 351,  778 => 350,  764 => 338,  762 => 337,  756 => 334,  751 => 331,  747 => 329,  733 => 328,  729 => 326,  727 => 325,  721 => 322,  717 => 321,  713 => 320,  709 => 318,  706 => 317,  704 => 316,  701 => 315,  697 => 313,  694 => 312,  691 => 311,  673 => 310,  671 => 309,  660 => 300,  654 => 296,  652 => 295,  646 => 292,  641 => 289,  638 => 288,  630 => 283,  623 => 279,  616 => 275,  609 => 271,  602 => 267,  595 => 263,  588 => 259,  575 => 248,  573 => 247,  565 => 242,  558 => 238,  551 => 234,  547 => 232,  545 => 231,  539 => 228,  534 => 225,  528 => 221,  526 => 220,  522 => 218,  516 => 215,  512 => 213,  510 => 212,  507 => 211,  501 => 208,  497 => 206,  495 => 205,  490 => 202,  486 => 200,  484 => 199,  479 => 197,  460 => 181,  452 => 176,  448 => 174,  446 => 173,  439 => 169,  436 => 168,  434 => 167,  431 => 166,  421 => 165,  406 => 160,  401 => 159,  391 => 158,  377 => 154,  374 => 153,  370 => 151,  364 => 147,  361 => 146,  356 => 143,  350 => 141,  348 => 140,  344 => 139,  339 => 136,  337 => 135,  334 => 134,  328 => 131,  324 => 129,  322 => 128,  319 => 127,  312 => 122,  306 => 119,  301 => 116,  296 => 113,  293 => 112,  287 => 109,  283 => 108,  280 => 107,  278 => 106,  273 => 105,  270 => 104,  266 => 102,  264 => 101,  259 => 98,  257 => 97,  252 => 94,  246 => 91,  242 => 90,  239 => 89,  237 => 88,  232 => 87,  230 => 86,  219 => 80,  211 => 75,  207 => 73,  204 => 72,  202 => 71,  198 => 69,  191 => 65,  186 => 62,  183 => 61,  181 => 60,  178 => 59,  173 => 57,  168 => 56,  165 => 55,  162 => 54,  152 => 53,  94 => 6,  84 => 5,  73 => 0,  63 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block page_title 'Security' %}

{% block head %}
    {{ parent() }}

    <style>
        #collector-content .decision-log .voter_result td {
            border-top-width: 1px;
            border-bottom-width: 0;
            padding-bottom: 0;
        }

        #collector-content .decision-log .voter_details td {
            border-top-width: 0;
            border-bottom-width: 1px;
            padding-bottom: 0;
        }

        #collector-content .decision-log .voter_details table {
            border: 0;
            margin: 0;
            box-shadow: unset;
        }

        #collector-content .decision-log .voter_details table td {
            border: 0;
            padding: 0 0 8px 0;
        }

        #collector-content .authenticators .badge {
            color: var(--white);
            display: inline-block;
            text-align: center;
        }
        #collector-content .authenticators .badge.badge-resolved {
            background-color: var(--green-500);
        }
        #collector-content .authenticators .badge.badge-not_resolved {
            background-color: var(--yellow-500);
        }

        #collector-content .authenticators svg[data-icon-name=\"icon-tabler-check\"] {
            color: var(--green-500);
        }
        #collector-content .authenticators svg[data-icon-name=\"icon-tabler-x\"] {
            color: var(--red-500);
        }
    </style>
{% endblock %}

{% block toolbar %}
    {% if collector.firewall %}
        {% set icon %}
            {{ source('@Security/Collector/icon.svg') }}
            <span class=\"sf-toolbar-value\">{{ collector.user|default('n/a') }}</span>
        {% endset %}

        {% set text %}
            {% if collector.impersonated %}
                <div class=\"sf-toolbar-info-group\">
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Impersonator</b>
                        <span>{{ collector.impersonatorUser }}</span>
                    </div>
                </div>
            {% endif %}

            <div class=\"sf-toolbar-info-group\">
                {% if collector.enabled %}
                    {% if collector.token %}
                        <div class=\"sf-toolbar-info-piece\">
                            <b>Logged in as</b>
                            <span>{{ collector.user }}</span>
                        </div>

                        <div class=\"sf-toolbar-info-piece\">
                            <b>Authenticated</b>
                            <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.authenticated ? 'green' : 'yellow' }}\">{{ collector.authenticated ? 'Yes' : 'No' }}</span>
                        </div>

                        <div class=\"sf-toolbar-info-piece\">
                            <b>Roles</b>
                            <span>
                                {% set remainingRoles = collector.roles|slice(1) %}
                                {{ collector.roles|first }}
                                {% if remainingRoles is not empty %}
                                    +
                                    <abbr title=\"{{ remainingRoles|join(', ') }}\">
                                        {{ remainingRoles|length }} more
                                    </abbr>
                                {% endif %}
                            </span>
                        </div>

                        {% if collector.supportsRoleHierarchy %}
                            <div class=\"sf-toolbar-info-piece\">
                                <b>Inherited Roles</b>
                                <span>
                                    {% if collector.inheritedRoles is empty %}
                                        none
                                    {% else %}
                                        {% set remainingRoles = collector.inheritedRoles|slice(1) %}
                                        {{ collector.inheritedRoles|first }}
                                        {% if remainingRoles is not empty %}
                                            +
                                            <abbr title=\"{{ remainingRoles|join(', ') }}\">
                                                {{ remainingRoles|length }} more
                                            </abbr>
                                        {% endif %}
                                    {% endif %}
                                </span>
                            </div>
                        {% endif %}

                        <div class=\"sf-toolbar-info-piece\">
                            <b>Token class</b>
                            <span>{{ collector.tokenClass|abbr_class }}</span>
                        </div>
                    {% else %}
                        <div class=\"sf-toolbar-info-piece\">
                            <b>Authenticated</b>
                            <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">No</span>
                        </div>
                    {% endif %}

                    {% if collector.firewall %}
                        <div class=\"sf-toolbar-info-piece\">
                            <b>Firewall name</b>
                            <span>{{ collector.firewall.name }}</span>
                        </div>
                    {% endif %}

                    {% if collector.token and collector.logoutUrl %}
                        <div class=\"sf-toolbar-info-piece\">
                            <b>Actions</b>
                            <span>
                                <a href=\"{{ collector.logoutUrl }}\">Logout</a>
                                {% if collector.impersonated and collector.impersonationExitPath %}
                                    | <a href=\"{{ collector.impersonationExitPath }}\">Exit impersonation</a>
                                {% endif %}
                            </span>
                        </div>
                    {% endif %}
                {% else %}
                    <div class=\"sf-toolbar-info-piece\">
                        <span>The security is disabled.</span>
                    </div>
                {% endif %}
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label {{ not collector.firewall or not collector.token ? 'disabled' }}\">
        <span class=\"icon\">{{ source('@Security/Collector/icon.svg') }}</span>
        <strong>Security</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Security</h2>
    {% if collector.enabled %}
        <div class=\"sf-tabs\">
            <div class=\"tab {{ collector.token is empty ? 'disabled' }}\">
                <h3 class=\"tab-title\">Token</h3>

                <div class=\"tab-content\">
                    {% if collector.token %}
                        <div class=\"metrics\">
                            <div class=\"metric\">
                                <span class=\"value\">{{ collector.user }}</span>
                                <span class=\"label\">Username</span>
                            </div>

                            <div class=\"metric\">
                                <span class=\"value\">{{ source('@WebProfiler/Icon/' ~ (collector.authenticated ? 'yes' : 'no') ~ '.svg') }}</span>
                                <span class=\"label\">Authenticated</span>
                            </div>
                        </div>

                        <table>
                            <thead>
                                <tr>
                                    <th scope=\"col\" class=\"key\">Property</th>
                                    <th scope=\"col\">Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Roles</th>
                                    <td>
                                        {{ collector.roles is empty ? 'none' : profiler_dump(collector.roles, maxDepth=1) }}

                                        {% if not collector.authenticated and collector.roles is empty %}
                                            <p class=\"help\">User is not authenticated probably because they have no roles.</p>
                                        {% endif %}
                                    </td>
                                </tr>

                                {% if collector.supportsRoleHierarchy %}
                                <tr>
                                    <th>Inherited Roles</th>
                                    <td>{{ collector.inheritedRoles is empty ? 'none' : profiler_dump(collector.inheritedRoles, maxDepth=1) }}</td>
                                </tr>
                                {% endif %}

                                {% if collector.token %}
                                <tr>
                                    <th>Token</th>
                                    <td>{{ profiler_dump(collector.token) }}</td>
                                </tr>
                                {% endif %}
                            </tbody>
                        </table>
                    {% elseif collector.enabled %}
                        <div class=\"empty\">
                            <p>There is no security token.</p>
                        </div>
                    {% endif %}
                </div>
            </div>

            <div class=\"tab {{ (not collector.firewall or collector.firewall.security_enabled is empty) ? 'disabled' }}\">
                <h3 class=\"tab-title\">Firewall</h3>
                <div class=\"tab-content\">
                    {% if collector.firewall %}
                        <div class=\"metrics\">
                            <div class=\"metric\">
                                <span class=\"value\">{{ collector.firewall.name }}</span>
                                <span class=\"label\">Name</span>
                            </div>
                            <div class=\"metric\">
                                <span class=\"value\">{{ source('@WebProfiler/Icon/' ~ (collector.firewall.security_enabled ? 'yes' : 'no') ~ '.svg') }}</span>
                                <span class=\"label\">Security enabled</span>
                            </div>
                            <div class=\"metric\">
                                <span class=\"value\">{{ source('@WebProfiler/Icon/' ~ (collector.firewall.stateless ? 'yes' : 'no') ~ '.svg') }}</span>
                                <span class=\"label\">Stateless</span>
                            </div>
                        </div>

                        {% if collector.firewall.security_enabled %}
                            <h4>Configuration</h4>
                            <table>
                                <thead>
                                    <tr>
                                        <th scope=\"col\" class=\"key\">Key</th>
                                        <th scope=\"col\">Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>provider</th>
                                        <td>{{ collector.firewall.provider ?: '(none)' }}</td>
                                    </tr>
                                    <tr>
                                        <th>context</th>
                                        <td>{{ collector.firewall.context ?: '(none)' }}</td>
                                    </tr>
                                    <tr>
                                        <th>entry_point</th>
                                        <td>{{ collector.firewall.entry_point ?: '(none)' }}</td>
                                    </tr>
                                    <tr>
                                        <th>user_checker</th>
                                        <td>{{ collector.firewall.user_checker ?: '(none)' }}</td>
                                    </tr>
                                    <tr>
                                        <th>access_denied_handler</th>
                                        <td>{{ collector.firewall.access_denied_handler ?: '(none)' }}</td>
                                    </tr>
                                    <tr>
                                        <th>access_denied_url</th>
                                        <td>{{ collector.firewall.access_denied_url ?: '(none)' }}</td>
                                    </tr>
                                    <tr>
                                        <th>authenticators</th>
                                        <td>{{ collector.firewall.authenticators is empty ? '(none)' : profiler_dump(collector.firewall.authenticators, maxDepth=1) }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        {% endif %}
                    {% endif %}
                </div>
            </div>

            <div class=\"tab {{ collector.listeners|default([]) is empty ? 'disabled' }}\">
                <h3 class=\"tab-title\">Listeners</h3>
                <div class=\"tab-content\">
                    {% if collector.listeners|default([]) is empty %}
                        <div class=\"empty\">
                            <p>No security listeners have been recorded. Check that debugging is enabled in the kernel.</p>
                        </div>
                    {% else %}
                        <table>
                            <thead>
                            <tr>
                                <th>Listener</th>
                                <th>Duration</th>
                                <th>Response</th>
                            </tr>
                            </thead>

                            {% set previous_event = (collector.listeners|first) %}
                            {% for listener in collector.listeners %}
                                {% if loop.first or listener != previous_event %}
                                    {% if not loop.first %}
                                        </tbody>
                                    {% endif %}
                                    <tbody>
                                    {% set previous_event = listener %}
                                {% endif %}

                                <tr>
                                    <td class=\"font-normal\">{{ profiler_dump(listener.stub) }}</td>
                                    <td class=\"no-wrap\">{{ '%0.2f'|format(listener.time * 1000) }} ms</td>
                                    <td class=\"font-normal\">{{ listener.response ? profiler_dump(listener.response) : '(none)' }}</td>
                                </tr>

                                {% if loop.last %}
                                    </tbody>
                                {% endif %}
                            {% endfor %}
                        </table>
                    {% endif %}
                </div>
            </div>

            <div class=\"tab {{ collector.authenticators|default([]) is empty ? 'disabled' }}\">
                <h3 class=\"tab-title\">Authenticators</h3>
                <div class=\"tab-content\">
                    {% if collector.authenticators|default([]) is not empty %}
                        <table class=\"authenticators\">
                            <thead>
                            <tr>
                                <th>Authenticator</th>
                                <th>Supports</th>
                                <th>Authenticated</th>
                                <th>Duration</th>
                                <th>Passport</th>
                                <th>Badges</th>
                            </tr>
                            </thead>

                            {% set previous_event = (collector.listeners|first) %}
                            {% for authenticator in collector.authenticators %}
                                {% if loop.first or authenticator != previous_event %}
                                    {% if not loop.first %}
                                        </tbody>
                                    {% endif %}

                                    <tbody>
                                    {% set previous_event = authenticator %}
                                {% endif %}

                                <tr>
                                    <td class=\"font-normal\">{{ profiler_dump(authenticator.stub) }}</td>
                                    <td class=\"no-wrap\">{{ source('@WebProfiler/Icon/' ~ (authenticator.supports ? 'yes' : 'no') ~ '.svg') }}</td>
                                    <td class=\"no-wrap\">{{ authenticator.authenticated is not null ? source('@WebProfiler/Icon/' ~ (authenticator.authenticated ? 'yes' : 'no') ~ '.svg') : '' }}</td>
                                    <td class=\"no-wrap\">{{ '%0.2f'|format(authenticator.duration * 1000) }} ms</td>
                                    <td class=\"font-normal\">{{ authenticator.passport ? profiler_dump(authenticator.passport) : '(none)' }}</td>
                                    <td class=\"font-normal\">
                                        {% for badge in authenticator.badges ?? [] %}
                                            <span class=\"badge badge-{{ badge.resolved ? 'resolved' : 'not_resolved' }}\">
                                            {{ badge.stub|abbr_class }}
                                            </span>
                                        {% else %}
                                            (none)
                                        {% endfor %}
                                    </td>
                                </tr>

                                {% if loop.last %}
                                    </tbody>
                                {% endif %}
                            {% endfor %}
                        </table>
                    {% else %}
                        <div class=\"empty\">
                            <p>No authenticators have been recorded. Check previous profiles on your authentication endpoint.</p>
                        </div>
                    {% endif %}
                </div>
            </div>

            <div class=\"tab {{ collector.accessDecisionLog|default([]) is empty ? 'disabled' }}\">
                <h3 class=\"tab-title\">Access Decision</h3>
                <div class=\"tab-content\">
                    {% if collector.voters|default([]) is not empty %}
                        <div class=\"metrics\">
                            <div class=\"metric\">
                                <span class=\"value\">{{ collector.voterStrategy|default('unknown') }}</span>
                                <span class=\"label\">Strategy</span>
                            </div>
                        </div>

                        <table class=\"voters\">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Voter class</th>
                                </tr>
                            </thead>

                            <tbody>
                                {% for voter in collector.voters %}
                                    <tr>
                                        <td class=\"font-normal text-small text-muted nowrap\">{{ loop.index }}</td>
                                        <td class=\"font-normal\">{{ profiler_dump(voter) }}</td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    {% endif %}
                    {% if collector.accessDecisionLog|default([]) is not empty %}
                        <h2>Access decision log</h2>

                        <table class=\"decision-log\">
                            <col style=\"width: 30px\">
                            <col style=\"width: 120px\">
                            <col style=\"width: 25%\">
                            <col style=\"width: 60%\">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Result</th>
                                    <th>Attributes</th>
                                    <th>Object</th>
                                </tr>
                            </thead>

                            <tbody>
                                {% for decision in collector.accessDecisionLog %}
                                    <tr class=\"voter_result\">
                                        <td class=\"font-normal text-small text-muted nowrap\">{{ loop.index }}</td>
                                        <td class=\"font-normal\">
                                            {{ decision.result
                                                ? '<span class=\"label status-success same-width\">GRANTED</span>'
                                                : '<span class=\"label status-error same-width\">DENIED</span>'
                                            }}
                                        </td>
                                        <td>
                                            {% if decision.attributes|length == 1 %}
                                                {% set attribute = decision.attributes|first %}
                                                {% if attribute.expression is defined %}
                                                    Expression: <pre><code>{{ attribute.expression }}</code></pre>
                                                {% elseif attribute.type == 'string' %}
                                                    {{ attribute }}
                                                {% else %}
                                                     {{ profiler_dump(attribute) }}
                                                {% endif %}
                                            {% else %}
                                                {{ profiler_dump(decision.attributes) }}
                                            {% endif %}
                                        </td>
                                        <td>{{ profiler_dump(decision.seek('object')) }}</td>
                                    </tr>
                                    <tr class=\"voter_details\">
                                        <td></td>
                                        <td colspan=\"3\">
                                        {% if decision.voter_details is not empty %}
                                            {% set voter_details_id = 'voter-details-' ~ loop.index %}
                                            <div id=\"{{ voter_details_id }}\" class=\"sf-toggle-content sf-toggle-hidden\">
                                                <table>
                                                   <tbody>
                                                    {% for voter_detail in decision.voter_details %}
                                                        <tr>
                                                            <td class=\"font-normal\">{{ profiler_dump(voter_detail['class']) }}</td>
                                                            {% if collector.voterStrategy == 'unanimous' %}
                                                            <td class=\"font-normal text-small\">attribute {{ voter_detail['attributes'][0] }}</td>
                                                            {% endif %}
                                                            <td class=\"font-normal text-small\">
                                                                {% if voter_detail['vote'] == constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\VoterInterface::ACCESS_GRANTED') %}
                                                                    ACCESS GRANTED
                                                                {% elseif voter_detail['vote'] == constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\VoterInterface::ACCESS_ABSTAIN') %}
                                                                    ACCESS ABSTAIN
                                                                {% elseif voter_detail['vote'] == constant('Symfony\\\\Component\\\\Security\\\\Core\\\\Authorization\\\\Voter\\\\VoterInterface::ACCESS_DENIED') %}
                                                                    ACCESS DENIED
                                                                {% else %}
                                                                    unknown ({{ voter_detail['vote'] }})
                                                                {% endif %}
                                                            </td>
                                                        </tr>
                                                    {% endfor %}
                                                    </tbody>
                                                </table>
                                            </div>
                                            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ voter_details_id }}\" data-toggle-alt-content=\"Hide voter details\">Show voter details</a>
                                        {% endif %}
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                {% endif %}
            </div>
        </div>
    {% endif %}
{% endblock %}
", "@Security/Collector/security.html.twig", "C:\\Users\\robocop\\Desktop\\REVISIONS WEB\\FIRST PROJECTS\\MyMetaverseV2.0\\MyMetaverse\\vendor\\symfony\\security-bundle\\Resources\\views\\Collector\\security.html.twig");
    }
}
