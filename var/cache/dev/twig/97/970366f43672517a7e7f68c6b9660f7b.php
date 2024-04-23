<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* videogames/videogame-list-card.html.twig */
class __TwigTemplate_2c06d535dd99382d2306311501ec47bf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'vglist' => [$this, 'block_vglist'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "videogames/videogame-list-card.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "videogames/videogame-list-card.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('vglist', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_vglist($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vglist"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vglist"));

        // line 3
        echo "        <article class=\"video-game-card hide\"> 
            <section class=\"video-game-card-theme hide-2\">
                <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 5, $this->source); })()), "imgTheme"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "html", null, true);
        echo "\">
            </section>
            <section class=\"video-game-card-head hide-2\">
                <div class=\"video-game-pres hide-2\">
                    <h3 class=\" hide-2\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), "html", null, true);
        echo "</h3>
                    
                    ";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 11, $this->source); })()), "platform", [], "any", false, false, false, 11), "platformName", [], "any", false, false, false, 11) == 1)) {
            // line 12
            echo "                    <h4 class=\" hide-2\">Sur : <span>Nintendo Switch</span></h4>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 13
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 13, $this->source); })()), "platform", [], "any", false, false, false, 13), "platformName", [], "any", false, false, false, 13) == 2)) {
            // line 14
            echo "                    <h4 class=\" hide-2\">Sur : <span>PC Steam</span></h4>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 15
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 15, $this->source); })()), "platform", [], "any", false, false, false, 15), "platformName", [], "any", false, false, false, 15) == 3)) {
            // line 16
            echo "                    <h4 class=\" hide-2\">Sur : <span>PlayStation 5</span></h4>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 17
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 17, $this->source); })()), "platform", [], "any", false, false, false, 17), "platformName", [], "any", false, false, false, 17) == 4)) {
            // line 18
            echo "                    <h4 class=\" hide-2\">Sur : <span>GameBoy Advanced</span></h4>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 19
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 19, $this->source); })()), "platform", [], "any", false, false, false, 19), "platformName", [], "any", false, false, false, 19) == 5)) {
            // line 20
            echo "                    <h4 class=\" hide-2\">Sur : <span>GameBoy / GameBoy Color</span></h4>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 21
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 21, $this->source); })()), "platform", [], "any", false, false, false, 21), "platformName", [], "any", false, false, false, 21) == 6)) {
            // line 22
            echo "                    <h4 class=\" hide-2\">Sur : <span>PlayStation 4</span></h4>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 23
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 23, $this->source); })()), "platform", [], "any", false, false, false, 23), "platformName", [], "any", false, false, false, 23) == 7)) {
            // line 24
            echo "                    <h4 class=\" hide-2\">Sur : <span>Nintendo DS</span></h4>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 25
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 25, $this->source); })()), "platform", [], "any", false, false, false, 25), "platformName", [], "any", false, false, false, 25) == 8)) {
            // line 26
            echo "                    <h4 class=\" hide-2\">Sur : <span>Nintendo 3DS</span></h4>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 27
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 27, $this->source); })()), "platform", [], "any", false, false, false, 27), "platformName", [], "any", false, false, false, 27) == 9)) {
            // line 28
            echo "                    <h4 class=\" hide-2\">Sur : <span>PlayStation 3</span></h4>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 29
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 29, $this->source); })()), "platform", [], "any", false, false, false, 29), "platformName", [], "any", false, false, false, 29) == 10)) {
            // line 30
            echo "                    <h4 class=\" hide-2\">Sur : <span>PlayStation 2</span></h4>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 31
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 31, $this->source); })()), "platform", [], "any", false, false, false, 31), "platformName", [], "any", false, false, false, 31) == 11)) {
            // line 32
            echo "                    <h4 class=\" hide-2\">Sur : <span>PlayStation</span></h4>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 33
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 33, $this->source); })()), "platform", [], "any", false, false, false, 33), "platformName", [], "any", false, false, false, 33) == 12)) {
            // line 34
            echo "                    <h4 class=\" hide-2\">Sur : <span>XBox</span></h4>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 35
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 35, $this->source); })()), "platform", [], "any", false, false, false, 35), "platformName", [], "any", false, false, false, 35) == 13)) {
            // line 36
            echo "                    <h4 class=\" hide-2\">Sur : <span>XBox 360</span></h4>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 37
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 37, $this->source); })()), "platform", [], "any", false, false, false, 37), "platformName", [], "any", false, false, false, 37) == 14)) {
            // line 38
            echo "                    <h4 class=\" hide-2\">Sur : <span>XBox One</span></h4>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 39
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 39, $this->source); })()), "platform", [], "any", false, false, false, 39), "platformName", [], "any", false, false, false, 39) == 15)) {
            // line 40
            echo "                    <h4 class=\" hide-2\">Sur : <span>XBox Series</span></h4>
                    ";
        }
        // line 42
        echo "                    <p class=\"perso-grade hide-2\">Note personnelle :</p>
                    ";
        // line 43
        if ((twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 43, $this->source); })()), "grade", [], "any", false, false, false, 43) >= 75)) {
            // line 44
            echo "                    <h4 class=\"video-game-grade verygood hide-3\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 44, $this->source); })()), "grade", [], "any", false, false, false, 44), "html", null, true);
            echo "</h4>
                    ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 45
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 45, $this->source); })()), "grade", [], "any", false, false, false, 45) <= 74) && (twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 45, $this->source); })()), "grade", [], "any", false, false, false, 45) >= 60))) {
            // line 46
            echo "                    <h4 class=\"video-game-grade good hide-3\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 46, $this->source); })()), "grade", [], "any", false, false, false, 46), "html", null, true);
            echo "</h4>
                    ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 47
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 47, $this->source); })()), "grade", [], "any", false, false, false, 47) <= 59) && (twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 47, $this->source); })()), "grade", [], "any", false, false, false, 47) >= 50))) {
            // line 48
            echo "                    <h4 class=\"video-game-grade medium hide-3\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 48, $this->source); })()), "grade", [], "any", false, false, false, 48), "html", null, true);
            echo "</h4>
                    ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 49
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 49, $this->source); })()), "grade", [], "any", false, false, false, 49) <= 49) && (twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 49, $this->source); })()), "grade", [], "any", false, false, false, 49) >= 35))) {
            // line 50
            echo "                    <h4 class=\"video-game-grade notenough hide-3\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 50, $this->source); })()), "grade", [], "any", false, false, false, 50), "html", null, true);
            echo "</h4>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 51
(isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 51, $this->source); })()), "grade", [], "any", false, false, false, 51) <= 34)) {
            // line 52
            echo "                    <h4 class=\"video-game-grade bad hide-3\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 52, $this->source); })()), "grade", [], "any", false, false, false, 52), "html", null, true);
            echo "</h4>
                    ";
        }
        // line 54
        echo "                    <p class=\"hide-3\"><span>Date de sortie</span> : le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 54, $this->source); })()), "releaseDate", [], "any", false, false, false, 54), "d F Y"), "html", null, true);
        echo "</p>
                    <p class=\" hide-3\"><span>Prix moyen</span> : ";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 55, $this->source); })()), "averagePrice", [], "any", false, false, false, 55), "html", null, true);
        echo " €</p>
                    <div class=\"video-game-genders-box hide-3\">
                        <ul class=\"video-game-genders-list\">
                            ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 58, $this->source); })()), "genders", [], "any", false, false, false, 58));
        foreach ($context['_seq'] as $context["_key"] => $context["gender"]) {
            // line 59
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["gender"], "id", [], "any", false, false, false, 59) == 1)) {
                // line 60
                echo "                                <li class=\"video-game-gender rpg\">
                                    RPG
                                </li>
                                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 63
$context["gender"], "id", [], "any", false, false, false, 63) == 2)) {
                // line 64
                echo "                                <li class=\"video-game-gender avent\">
                                    Aventure
                                </li>
                                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 67
$context["gender"], "id", [], "any", false, false, false, 67) == 3)) {
                // line 68
                echo "                                <li class=\"video-game-gender fant\">
                                    Fantastique
                                </li>
                                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 71
$context["gender"], "id", [], "any", false, false, false, 71) == 4)) {
                // line 72
                echo "                                <li class=\"video-game-gender crea\">
                                    Création
                                </li>
                                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 75
$context["gender"], "id", [], "any", false, false, false, 75) == 5)) {
                // line 76
                echo "                                <li class=\"video-game-gender ow\">
                                    Open-World
                                </li>
                                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 79
$context["gender"], "id", [], "any", false, false, false, 79) == 6)) {
                // line 80
                echo "                                <li class=\"video-game-gender gestion\">
                                    Gestion
                                </li>
                                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 83
$context["gender"], "id", [], "any", false, false, false, 83) == 7)) {
                // line 84
                echo "                                <li class=\"video-game-gender refl\">
                                    Réflexion
                                </li>
                                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 87
$context["gender"], "id", [], "any", false, false, false, 87) == 8)) {
                // line 88
                echo "                                <li class=\"video-game-gender ecolo\">
                                    Écologie
                                </li>
                                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 91
$context["gender"], "id", [], "any", false, false, false, 91) == 9)) {
                // line 92
                echo "                                <li class=\"video-game-gender sante\">
                                    Santé
                                </li>
                                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 95
$context["gender"], "id", [], "any", false, false, false, 95) == 10)) {
                // line 96
                echo "                                <li class=\"video-game-gender survie\">
                                    Survie
                                </li>
                                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 99
$context["gender"], "id", [], "any", false, false, false, 99) == 11)) {
                // line 100
                echo "                                <li class=\"video-game-gender tact\">
                                    Tactique
                                </li>
                                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 103
$context["gender"], "id", [], "any", false, false, false, 103) == 12)) {
                // line 104
                echo "                                <li class=\"video-game-gender strat\">
                                    Stratégie
                                </li>
                                ";
            }
            // line 108
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gender'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "                        </ul>
                    </div>
                </div>
            </section>
            <section class=\"video-game-content hide-4\">
                <a class=\"go-to-vg\" href=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("videogame_card", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["videoGame"]) || array_key_exists("videoGame", $context) ? $context["videoGame"] : (function () { throw new RuntimeError('Variable "videoGame" does not exist.', 114, $this->source); })()), "id", [], "any", false, false, false, 114)]), "html", null, true);
        echo "\">Accéder à l'Avis</a>
            </section>
        </article>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "videogames/videogame-list-card.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  313 => 114,  306 => 109,  300 => 108,  294 => 104,  292 => 103,  287 => 100,  285 => 99,  280 => 96,  278 => 95,  273 => 92,  271 => 91,  266 => 88,  264 => 87,  259 => 84,  257 => 83,  252 => 80,  250 => 79,  245 => 76,  243 => 75,  238 => 72,  236 => 71,  231 => 68,  229 => 67,  224 => 64,  222 => 63,  217 => 60,  214 => 59,  210 => 58,  204 => 55,  199 => 54,  193 => 52,  191 => 51,  186 => 50,  184 => 49,  179 => 48,  177 => 47,  172 => 46,  170 => 45,  165 => 44,  163 => 43,  160 => 42,  156 => 40,  154 => 39,  151 => 38,  149 => 37,  146 => 36,  144 => 35,  141 => 34,  139 => 33,  136 => 32,  134 => 31,  131 => 30,  129 => 29,  126 => 28,  124 => 27,  121 => 26,  119 => 25,  116 => 24,  114 => 23,  111 => 22,  109 => 21,  106 => 20,  104 => 19,  101 => 18,  99 => 17,  96 => 16,  94 => 15,  91 => 14,  89 => 13,  86 => 12,  84 => 11,  79 => 9,  70 => 5,  66 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block vglist %}
        <article class=\"video-game-card hide\"> 
            <section class=\"video-game-card-theme hide-2\">
                <img src=\"{{ vich_uploader_asset(videoGame, 'imgTheme') }}\" alt=\"{{ videoGame.name }}\">
            </section>
            <section class=\"video-game-card-head hide-2\">
                <div class=\"video-game-pres hide-2\">
                    <h3 class=\" hide-2\">{{ videoGame.name }}</h3>
                    
                    {% if videoGame.platform.platformName == 1 %}
                    <h4 class=\" hide-2\">Sur : <span>Nintendo Switch</span></h4>
                    {% elseif videoGame.platform.platformName == 2 %}
                    <h4 class=\" hide-2\">Sur : <span>PC Steam</span></h4>
                    {% elseif videoGame.platform.platformName == 3 %}
                    <h4 class=\" hide-2\">Sur : <span>PlayStation 5</span></h4>
                    {% elseif videoGame.platform.platformName == 4 %}
                    <h4 class=\" hide-2\">Sur : <span>GameBoy Advanced</span></h4>
                    {% elseif videoGame.platform.platformName == 5 %}
                    <h4 class=\" hide-2\">Sur : <span>GameBoy / GameBoy Color</span></h4>
                    {% elseif videoGame.platform.platformName == 6 %}
                    <h4 class=\" hide-2\">Sur : <span>PlayStation 4</span></h4>
                    {% elseif videoGame.platform.platformName == 7 %}
                    <h4 class=\" hide-2\">Sur : <span>Nintendo DS</span></h4>
                    {% elseif videoGame.platform.platformName == 8 %}
                    <h4 class=\" hide-2\">Sur : <span>Nintendo 3DS</span></h4>
                    {% elseif videoGame.platform.platformName == 9 %}
                    <h4 class=\" hide-2\">Sur : <span>PlayStation 3</span></h4>
                    {% elseif videoGame.platform.platformName == 10 %}
                    <h4 class=\" hide-2\">Sur : <span>PlayStation 2</span></h4>
                    {% elseif videoGame.platform.platformName == 11 %}
                    <h4 class=\" hide-2\">Sur : <span>PlayStation</span></h4>
                    {% elseif videoGame.platform.platformName == 12 %}
                    <h4 class=\" hide-2\">Sur : <span>XBox</span></h4>
                    {% elseif videoGame.platform.platformName == 13 %}
                    <h4 class=\" hide-2\">Sur : <span>XBox 360</span></h4>
                    {% elseif videoGame.platform.platformName == 14 %}
                    <h4 class=\" hide-2\">Sur : <span>XBox One</span></h4>
                    {% elseif videoGame.platform.platformName == 15 %}
                    <h4 class=\" hide-2\">Sur : <span>XBox Series</span></h4>
                    {% endif %}
                    <p class=\"perso-grade hide-2\">Note personnelle :</p>
                    {% if videoGame.grade >= 75 %}
                    <h4 class=\"video-game-grade verygood hide-3\">{{ videoGame.grade }}</h4>
                    {% elseif videoGame.grade <= 74 and videoGame.grade >= 60 %}
                    <h4 class=\"video-game-grade good hide-3\">{{ videoGame.grade }}</h4>
                    {% elseif videoGame.grade <= 59 and videoGame.grade >= 50 %}
                    <h4 class=\"video-game-grade medium hide-3\">{{ videoGame.grade }}</h4>
                    {% elseif videoGame.grade <= 49 and videoGame.grade >= 35 %}
                    <h4 class=\"video-game-grade notenough hide-3\">{{ videoGame.grade }}</h4>
                    {% elseif videoGame.grade <= 34 %}
                    <h4 class=\"video-game-grade bad hide-3\">{{ videoGame.grade }}</h4>
                    {% endif %}
                    <p class=\"hide-3\"><span>Date de sortie</span> : le {{ videoGame.releaseDate | date('d F Y') }}</p>
                    <p class=\" hide-3\"><span>Prix moyen</span> : {{ videoGame.averagePrice }} €</p>
                    <div class=\"video-game-genders-box hide-3\">
                        <ul class=\"video-game-genders-list\">
                            {% for gender in videoGame.genders %}
                                {% if gender.id == 1 %}
                                <li class=\"video-game-gender rpg\">
                                    RPG
                                </li>
                                {% elseif gender.id == 2 %}
                                <li class=\"video-game-gender avent\">
                                    Aventure
                                </li>
                                {% elseif gender.id == 3 %}
                                <li class=\"video-game-gender fant\">
                                    Fantastique
                                </li>
                                {% elseif gender.id == 4 %}
                                <li class=\"video-game-gender crea\">
                                    Création
                                </li>
                                {% elseif gender.id == 5 %}
                                <li class=\"video-game-gender ow\">
                                    Open-World
                                </li>
                                {% elseif gender.id == 6 %}
                                <li class=\"video-game-gender gestion\">
                                    Gestion
                                </li>
                                {% elseif gender.id == 7 %}
                                <li class=\"video-game-gender refl\">
                                    Réflexion
                                </li>
                                {% elseif gender.id == 8 %}
                                <li class=\"video-game-gender ecolo\">
                                    Écologie
                                </li>
                                {% elseif gender.id == 9 %}
                                <li class=\"video-game-gender sante\">
                                    Santé
                                </li>
                                {% elseif gender.id == 10 %}
                                <li class=\"video-game-gender survie\">
                                    Survie
                                </li>
                                {% elseif gender.id == 11 %}
                                <li class=\"video-game-gender tact\">
                                    Tactique
                                </li>
                                {% elseif gender.id == 12 %}
                                <li class=\"video-game-gender strat\">
                                    Stratégie
                                </li>
                                {% endif %}
                            {% endfor %}
                        </ul>
                    </div>
                </div>
            </section>
            <section class=\"video-game-content hide-4\">
                <a class=\"go-to-vg\" href=\"{{ path('videogame_card', { 'id': videoGame.id }) }}\">Accéder à l'Avis</a>
            </section>
        </article>
{% endblock %}
", "videogames/videogame-list-card.html.twig", "C:\\Users\\robocop\\Desktop\\REVISIONS WEB\\FIRST PROJECTS\\MyMetaverseV2.0\\MyMetaverse\\templates\\videogames\\videogame-list-card.html.twig");
    }
}
