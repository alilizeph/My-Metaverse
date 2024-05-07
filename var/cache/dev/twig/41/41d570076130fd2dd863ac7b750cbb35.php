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

/* @WebProfiler/Profiler/_command_summary.html.twig */
class __TwigTemplate_d49301693552d99f901ba440cc3d7d1b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/_command_summary.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/_command_summary.html.twig"));

        // line 1
        $context["status_code"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "statuscode", [], "any", true, true, false, 1)) ? (Twig\Extension\CoreExtension::defaultFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "statuscode", [], "any", false, false, false, 1), 0)) : (0));
        // line 2
        $context["interrupted"] = ((((isset($context["command_collector"]) || array_key_exists("command_collector", $context) ? $context["command_collector"] : (function () { throw new RuntimeError('Variable "command_collector" does not exist.', 2, $this->source); })()) === false)) ? (null) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["command_collector"]) || array_key_exists("command_collector", $context) ? $context["command_collector"] : (function () { throw new RuntimeError('Variable "command_collector" does not exist.', 2, $this->source); })()), "interruptedBySignal", [], "any", false, false, false, 2)));
        // line 3
        $context["css_class"] = (((((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 3, $this->source); })()) == 113) ||  !(null === (isset($context["interrupted"]) || array_key_exists("interrupted", $context) ? $context["interrupted"] : (function () { throw new RuntimeError('Variable "interrupted" does not exist.', 3, $this->source); })())))) ? ("status-warning") : (((((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 3, $this->source); })()) > 0)) ? ("status-error") : ("status-success"))));
        // line 4
        yield "
<div class=\"terminal status ";
        // line 5
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["css_class"]) || array_key_exists("css_class", $context) ? $context["css_class"] : (function () { throw new RuntimeError('Variable "css_class" does not exist.', 5, $this->source); })()), "html", null, true);
        yield "\">
    <div class=\"container\">
        <h2>
            <span class=\"status-request-method\">
                ";
        // line 9
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::upperFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 9, $this->source); })()), "method", [], "any", false, false, false, 9)), "html", null, true);
        yield "
            </span>

            <span class=\"status-command\">
                ";
        // line 13
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 13, $this->source); })()), "url", [], "any", false, false, false, 13), "html", null, true);
        yield "
            </span>
        </h2>

        <dl class=\"metadata\">
            ";
        // line 18
        if ((isset($context["interrupted"]) || array_key_exists("interrupted", $context) ? $context["interrupted"] : (function () { throw new RuntimeError('Variable "interrupted" does not exist.', 18, $this->source); })())) {
            // line 19
            yield "                <span class=\"status-response-status-code\">Interrupted</span>
                <dt>Signal</dt>
                <dd class=\"status-response-status-text\">";
            // line 21
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["interrupted"]) || array_key_exists("interrupted", $context) ? $context["interrupted"] : (function () { throw new RuntimeError('Variable "interrupted" does not exist.', 21, $this->source); })()), "html", null, true);
            yield "</dd>

                <dt>Exit code</dt>
                <dd class=\"status-response-status-text\">";
            // line 24
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 24, $this->source); })()), "html", null, true);
            yield "</dd>
            ";
        } elseif ((        // line 25
(isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 25, $this->source); })()) == 0)) {
            // line 26
            yield "                <span class=\"status-response-status-code\">Success</span>
            ";
        } elseif ((        // line 27
(isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 27, $this->source); })()) > 0)) {
            // line 28
            yield "                <span class=\"status-response-status-code\">Error</span>
                <dt>Exit code</dt>
                <dd class=\"status-response-status-text\"><span class=\"status-response-status-code\">";
            // line 30
            yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 30, $this->source); })()), "html", null, true);
            yield "</span></dd>
            ";
        }
        // line 32
        yield "
            ";
        // line 33
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 33, $this->source); })()), "requestserver", [], "any", false, false, false, 33), "has", ["SYMFONY_CLI_BINARY_NAME"], "method", false, false, false, 33)) {
            // line 34
            yield "                <dt>Symfony CLI</dt>
                <dd>v";
            // line 35
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 35, $this->source); })()), "requestserver", [], "any", false, false, false, 35), "get", ["SYMFONY_CLI_VERSION"], "method", false, false, false, 35), "html", null, true);
            yield "</dd>
            ";
        }
        // line 37
        yield "
            <dt>Application</dt>
            <dd>
                <a href=\"";
        // line 40
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_search_results", ["token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 40, $this->source); })()), "limit" => 10, "ip" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 40, $this->source); })()), "ip", [], "any", false, false, false, 40), "type" => "command"]), "html", null, true);
        yield "\">";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 40, $this->source); })()), "ip", [], "any", false, false, false, 40), "html", null, true);
        yield "</a>
            </dd>

            <dt>Profiled on</dt>
            <dd><time data-convert-to-user-timezone data-render-as-datetime datetime=\"";
        // line 44
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 44, $this->source); })()), "time", [], "any", false, false, false, 44), "c"), "html", null, true);
        yield "\">";
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 44, $this->source); })()), "time", [], "any", false, false, false, 44), "r"), "html", null, true);
        yield "</time></dd>

            <dt>Token</dt>
            <dd>";
        // line 47
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 47, $this->source); })()), "token", [], "any", false, false, false, 47), "html", null, true);
        yield "</dd>
        </dl>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/_command_summary.html.twig";
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
        return array (  142 => 47,  134 => 44,  125 => 40,  120 => 37,  115 => 35,  112 => 34,  110 => 33,  107 => 32,  102 => 30,  98 => 28,  96 => 27,  93 => 26,  91 => 25,  87 => 24,  81 => 21,  77 => 19,  75 => 18,  67 => 13,  60 => 9,  53 => 5,  50 => 4,  48 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set status_code = profile.statuscode|default(0) %}
{% set interrupted = command_collector is same as false ? null : command_collector.interruptedBySignal %}
{% set css_class = status_code == 113 or interrupted is not null ? 'status-warning' : status_code > 0 ? 'status-error' : 'status-success' %}

<div class=\"terminal status {{ css_class }}\">
    <div class=\"container\">
        <h2>
            <span class=\"status-request-method\">
                {{ profile.method|upper }}
            </span>

            <span class=\"status-command\">
                {{ profile.url }}
            </span>
        </h2>

        <dl class=\"metadata\">
            {% if interrupted %}
                <span class=\"status-response-status-code\">Interrupted</span>
                <dt>Signal</dt>
                <dd class=\"status-response-status-text\">{{ interrupted }}</dd>

                <dt>Exit code</dt>
                <dd class=\"status-response-status-text\">{{ status_code }}</dd>
            {% elseif status_code == 0 %}
                <span class=\"status-response-status-code\">Success</span>
            {% elseif status_code > 0 %}
                <span class=\"status-response-status-code\">Error</span>
                <dt>Exit code</dt>
                <dd class=\"status-response-status-text\"><span class=\"status-response-status-code\">{{ status_code }}</span></dd>
            {% endif %}

            {% if request_collector.requestserver.has('SYMFONY_CLI_BINARY_NAME') %}
                <dt>Symfony CLI</dt>
                <dd>v{{ request_collector.requestserver.get('SYMFONY_CLI_VERSION') }}</dd>
            {% endif %}

            <dt>Application</dt>
            <dd>
                <a href=\"{{ path('_profiler_search_results', { token: token, limit: 10, ip: profile.ip, type: 'command' }) }}\">{{ profile.ip }}</a>
            </dd>

            <dt>Profiled on</dt>
            <dd><time data-convert-to-user-timezone data-render-as-datetime datetime=\"{{ profile.time|date('c') }}\">{{ profile.time|date('r') }}</time></dd>

            <dt>Token</dt>
            <dd>{{ profile.token }}</dd>
        </dl>
    </div>
</div>
", "@WebProfiler/Profiler/_command_summary.html.twig", "C:\\Users\\robocop\\Desktop\\REVISIONS WEB\\FIRST PROJECTS\\MyMetaverseV2.0\\MyMetaverse\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\_command_summary.html.twig");
    }
}
