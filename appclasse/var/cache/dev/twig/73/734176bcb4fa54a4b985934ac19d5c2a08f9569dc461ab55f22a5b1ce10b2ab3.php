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

/* torneig/profile.html.twig */
class __TwigTemplate_4878195e17cdbe5b1a5b1f164a05fd2cc9a41c96eafc4512234a8d3d88cb46f9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "torneig/profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "torneig/profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "torneig/profile.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Info Torneig";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
        <h1 class=\"heading is-size-2 has-text-centered m-5\">Informació Del Torneig:  <span class=\"has-text-secondary has-text-weight-bold\">";
        // line 8
        ((twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 8, $this->source); })()), "nom", [], "any", false, false, false, 8)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 8, $this->source); })()), "nom", [], "any", false, false, false, 8), "html", null, true))) : (print ("?")));
        echo "</span></h1>
        <div class=\"is-flex is-justify-content-center p-3\" style=\"background-color: #e6e6e6; margin-left: 1.5%; margin-right: 1.5% \">
            <div class=\"is-flex is-justify-content-space-evenly \" style=\"width: 50%\" >
                <div class=\"level-item has-text-centered\">
                    <div>
                        <p class=\"heading is-size-5\">Data</p>
                        <p class=\"title is-size-3-mobile\">";
        // line 14
        ((twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 14, $this->source); })()), "data", [], "any", false, false, false, 14)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 14, $this->source); })()), "data", [], "any", false, false, false, 14), "Y-m-d"), "html", null, true))) : (print ("?")));
        echo "</p>
                    </div>
                </div>
                <div class=\"level-item has-text-centered\">
                    <div>
                        <p class=\"heading is-size-5\">Rondes</p>
                        <p class=\"title is-size-3-mobile\">";
        // line 20
        ((twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 20, $this->source); })()), "numRondes", [], "any", false, false, false, 20)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 20, $this->source); })()), "numRondes", [], "any", false, false, false, 20), "html", null, true))) : (print ("?")));
        echo "</p>
                    </div>
                </div>
                <div class=\"level-item has-text-centered\">
                    <div>
                        <p class=\"heading is-size-5\">Numero Participants</p>
                        <p class=\"title is-size-3-mobile\">";
        // line 26
        ((twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 26, $this->source); })()), "theParticipants", [], "any", false, false, false, 26)) ? (print (twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 26, $this->source); })()), "theParticipants", [], "any", false, false, false, 26)), "html", null, true))) : (print ("?")));
        echo "</p>
                    </div>
                </div>
                <div class=\"level-item has-text-centered\" id=\"getX\">
                    <div>
                        <p class=\"heading is-size-5\">Arbitre</p>
                        <p class=\"title is-size-3-mobile\"><a class=\"refTorn\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("arbitre_perfil", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 32, $this->source); })()), "propietari", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32)]), "html", null, true);
        echo "\">";
        ((twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 32, $this->source); })()), "propietari", [], "any", false, false, false, 32)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 32, $this->source); })()), "propietari", [], "any", false, false, false, 32), "nom", [], "any", false, false, false, 32), "html", null, true))) : (print ("?")));
        echo "</a></p>
                    </div>
                </div>
            </div>
        </div>
    <div class=\"is-flex is-justify-content-center\">
         <div>
             <p class=\"has-text-weight-bold is-size-4 has-text-centered\">Rondes:</p>
             <div class=\"is-flex is-justify-content-space-around\">
                 ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 41, $this->source); })()), "rondes", [], "any", false, false, false, 41));
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
        foreach ($context['_seq'] as $context["_key"] => $context["ronda"]) {
            // line 42
            echo "                     <p><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ronda_profile", ["id" => twig_get_attribute($this->env, $this->source, $context["ronda"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\">Ronda ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 42), "html", null, true);
            echo "</a></p>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ronda'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "             </div>
         </div>
    </div>

        <div class=\"is-flex is-justify-content-center m-5 shadow\" >
            <table >
                <thead>
                    <tr>
                        <th>Ordre</th>
                        <th>Nom Jugador</th>
                        <th>Fide/Elo</th>
                        <th>Club/Ciutat</th>
                        <th>Punts Finals</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 60, $this->source); })()), "theparticipants", [], "any", false, false, false, 60));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["jugador"]) {
            // line 61
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 61) % 2 == 1)) {
                // line 62
                echo "                            <tr>
                                <td>";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 63), "html", null, true);
                echo "</td>
                                <td><a class=\"jugadorsTorn\" href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jugador_perfil", ["id" => twig_get_attribute($this->env, $this->source, $context["jugador"], "id", [], "any", false, false, false, 64)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jugador"], "nom", [], "any", false, false, false, 64), "html", null, true);
                echo "</a></td>
                                <td>";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jugador"], "elo", [], "any", false, false, false, 65), "html", null, true);
                echo "</td>
                                <td>";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jugador"], "equip", [], "any", false, false, false, 66), "html", null, true);
                echo "</td>
                                <td>\"punts finals\"</td>
                            </tr>
                            ";
            } else {
                // line 70
                echo "                                <tr style=\"background: #e6e6e6\">
                                    <td>";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 71), "html", null, true);
                echo "</td>
                                    <td><a class=\"jugadorsTorn\" href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jugador_perfil", ["id" => twig_get_attribute($this->env, $this->source, $context["jugador"], "id", [], "any", false, false, false, 72)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jugador"], "nom", [], "any", false, false, false, 72), "html", null, true);
                echo "</a></td>
                                    <td>";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jugador"], "elo", [], "any", false, false, false, 73), "html", null, true);
                echo "</td>
                                    <td>";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jugador"], "equip", [], "any", false, false, false, 74), "html", null, true);
                echo "</td>
                                    <td>\"punts finals\"</td>
                                </tr>
                        ";
            }
            // line 78
            echo "                        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 79
            echo "                            <tr>
                                <td>Algo ha anat malament..</td>
                            </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jugador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                </tbody>
            </table>
        </div>
    <style>

        .shadow {
            border: 4px solid #00d1b2;
            border-top: none;
            border-bottom: none;
        }

        .jugadorsTorn
        {
            text-decoration: none;
            color: rgb(0, 209, 178);
            font-weight: bold;
        }

        .jugadorsTorn:hover
        {
            color: rgb(0, 209, 178);
            text-decoration: underline;
        }

        .refTorn
        {
            text-decoration: none;
            color: rgb(0, 209, 178);
        }

        .refTorn:hover
        {
            text-decoration: underline;
            color: rgb(0, 209, 178);
        }

        p:first-letter
        {
            text-transform: uppercase;
        }

        table {
            color:#666;
            font-size:25px;
            text-shadow: 1px 1px 0px #fff;
            margin:20px;
            border:#ccc 1px solid;
            -moz-border-radius:3px;
            -webkit-border-radius:3px;
            border-radius:5px;
            -moz-box-shadow: 0 1px 2px #d1d1d1;
            -webkit-box-shadow: 0 1px 2px #d1d1d1;
            box-shadow: 0 0 10px rgba(110,110,110, 0.5);
            text-transform: uppercase;
        }
        table a{
            color:#00d1b2;
        }
        table a:link {
            color:#00d1b2;
            font-weight: bold;
            text-decoration: none;
        }
        table a:active,
        table a:hover {
            color:#00d1b2;
            text-decoration:underline;
        }

        table th {
            color: white;
            padding:21px 25px 22px 25px;
            border-bottom:1px solid #e0e0e0;
            letter-spacing: 1.5px;
            background: #00d1b2;
            font-weight: normal;
        }
        table th:first-child {
            text-align: left;
            padding-left:20px;
        }
        table tr:first-child th:first-child {
            -moz-border-radius-topleft:3px;
            -webkit-border-top-left-radius:3px;
            border-top-left-radius:3px;
        }
        table tr:first-child th:last-child {
            -moz-border-radius-topright:3px;
            -webkit-border-top-right-radius:3px;
            border-top-right-radius:3px;
        }
        table tr {
            text-align: center;
            padding-left:20px;
        }
        table td:first-child {
            text-align: left;
            padding-left:20px;
            border-left: 0;
        }
        table td {
            padding:18px;
            border-top: 1px solid #ffffff;
            border-bottom:1px solid #e0e0e0;
            border-left: 1px solid #e0e0e0;

       /*     background: #fafafa;
            background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
            background: -moz-linear-gradient(top,  #fbfbfb,  #fafafa);*/
        }
        table tr:last-child td {
            border-bottom:0;
        }
        table tr:last-child td:first-child {
            -moz-border-radius-bottomleft:3px;
            -webkit-border-bottom-left-radius:3px;
            border-bottom-left-radius:3px;
        }
        table tr:last-child td:last-child {
            -moz-border-radius-bottomright:3px;
            -webkit-border-bottom-right-radius:3px;
            border-bottom-right-radius:3px;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "torneig/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 83,  277 => 79,  264 => 78,  257 => 74,  253 => 73,  247 => 72,  243 => 71,  240 => 70,  233 => 66,  229 => 65,  223 => 64,  219 => 63,  216 => 62,  213 => 61,  195 => 60,  177 => 44,  158 => 42,  141 => 41,  127 => 32,  118 => 26,  109 => 20,  100 => 14,  91 => 8,  88 => 7,  78 => 6,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}Info Torneig{% endblock %}

{% block body %}

        <h1 class=\"heading is-size-2 has-text-centered m-5\">Informació Del Torneig:  <span class=\"has-text-secondary has-text-weight-bold\">{{ torneig.nom ? torneig.nom : '?' }}</span></h1>
        <div class=\"is-flex is-justify-content-center p-3\" style=\"background-color: #e6e6e6; margin-left: 1.5%; margin-right: 1.5% \">
            <div class=\"is-flex is-justify-content-space-evenly \" style=\"width: 50%\" >
                <div class=\"level-item has-text-centered\">
                    <div>
                        <p class=\"heading is-size-5\">Data</p>
                        <p class=\"title is-size-3-mobile\">{{ torneig.data ? torneig.data|date('Y-m-d') : '?' }}</p>
                    </div>
                </div>
                <div class=\"level-item has-text-centered\">
                    <div>
                        <p class=\"heading is-size-5\">Rondes</p>
                        <p class=\"title is-size-3-mobile\">{{ torneig.numRondes ? torneig.numRondes : '?' }}</p>
                    </div>
                </div>
                <div class=\"level-item has-text-centered\">
                    <div>
                        <p class=\"heading is-size-5\">Numero Participants</p>
                        <p class=\"title is-size-3-mobile\">{{ torneig.theParticipants ? torneig.theParticipants|length : '?'}}</p>
                    </div>
                </div>
                <div class=\"level-item has-text-centered\" id=\"getX\">
                    <div>
                        <p class=\"heading is-size-5\">Arbitre</p>
                        <p class=\"title is-size-3-mobile\"><a class=\"refTorn\" href=\"{{ path(\"arbitre_perfil\",{'id':torneig.propietari.id}) }}\">{{ torneig.propietari ? torneig.propietari.nom :'?' }}</a></p>
                    </div>
                </div>
            </div>
        </div>
    <div class=\"is-flex is-justify-content-center\">
         <div>
             <p class=\"has-text-weight-bold is-size-4 has-text-centered\">Rondes:</p>
             <div class=\"is-flex is-justify-content-space-around\">
                 {% for ronda in torneig.rondes %}
                     <p><a href=\"{{ path(\"ronda_profile\",{'id':ronda.id}) }}\">Ronda {{ loop.index }}</a></p>
                 {% endfor %}
             </div>
         </div>
    </div>

        <div class=\"is-flex is-justify-content-center m-5 shadow\" >
            <table >
                <thead>
                    <tr>
                        <th>Ordre</th>
                        <th>Nom Jugador</th>
                        <th>Fide/Elo</th>
                        <th>Club/Ciutat</th>
                        <th>Punts Finals</th>
                    </tr>
                </thead>
                <tbody>
                    {% for jugador in torneig.theparticipants %}
                        {% if loop.index is odd %}
                            <tr>
                                <td>{{ loop.index }}</td>
                                <td><a class=\"jugadorsTorn\" href=\"{{ path(\"jugador_perfil\",{'id':jugador.id}) }}\">{{ jugador.nom }}</a></td>
                                <td>{{ jugador.elo }}</td>
                                <td>{{ jugador.equip }}</td>
                                <td>\"punts finals\"</td>
                            </tr>
                            {% else %}
                                <tr style=\"background: #e6e6e6\">
                                    <td>{{ loop.index }}</td>
                                    <td><a class=\"jugadorsTorn\" href=\"{{ path(\"jugador_perfil\",{'id':jugador.id}) }}\">{{ jugador.nom }}</a></td>
                                    <td>{{ jugador.elo }}</td>
                                    <td>{{ jugador.equip }}</td>
                                    <td>\"punts finals\"</td>
                                </tr>
                        {% endif %}
                        {% else %}
                            <tr>
                                <td>Algo ha anat malament..</td>
                            </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    <style>

        .shadow {
            border: 4px solid #00d1b2;
            border-top: none;
            border-bottom: none;
        }

        .jugadorsTorn
        {
            text-decoration: none;
            color: rgb(0, 209, 178);
            font-weight: bold;
        }

        .jugadorsTorn:hover
        {
            color: rgb(0, 209, 178);
            text-decoration: underline;
        }

        .refTorn
        {
            text-decoration: none;
            color: rgb(0, 209, 178);
        }

        .refTorn:hover
        {
            text-decoration: underline;
            color: rgb(0, 209, 178);
        }

        p:first-letter
        {
            text-transform: uppercase;
        }

        table {
            color:#666;
            font-size:25px;
            text-shadow: 1px 1px 0px #fff;
            margin:20px;
            border:#ccc 1px solid;
            -moz-border-radius:3px;
            -webkit-border-radius:3px;
            border-radius:5px;
            -moz-box-shadow: 0 1px 2px #d1d1d1;
            -webkit-box-shadow: 0 1px 2px #d1d1d1;
            box-shadow: 0 0 10px rgba(110,110,110, 0.5);
            text-transform: uppercase;
        }
        table a{
            color:#00d1b2;
        }
        table a:link {
            color:#00d1b2;
            font-weight: bold;
            text-decoration: none;
        }
        table a:active,
        table a:hover {
            color:#00d1b2;
            text-decoration:underline;
        }

        table th {
            color: white;
            padding:21px 25px 22px 25px;
            border-bottom:1px solid #e0e0e0;
            letter-spacing: 1.5px;
            background: #00d1b2;
            font-weight: normal;
        }
        table th:first-child {
            text-align: left;
            padding-left:20px;
        }
        table tr:first-child th:first-child {
            -moz-border-radius-topleft:3px;
            -webkit-border-top-left-radius:3px;
            border-top-left-radius:3px;
        }
        table tr:first-child th:last-child {
            -moz-border-radius-topright:3px;
            -webkit-border-top-right-radius:3px;
            border-top-right-radius:3px;
        }
        table tr {
            text-align: center;
            padding-left:20px;
        }
        table td:first-child {
            text-align: left;
            padding-left:20px;
            border-left: 0;
        }
        table td {
            padding:18px;
            border-top: 1px solid #ffffff;
            border-bottom:1px solid #e0e0e0;
            border-left: 1px solid #e0e0e0;

       /*     background: #fafafa;
            background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
            background: -moz-linear-gradient(top,  #fbfbfb,  #fafafa);*/
        }
        table tr:last-child td {
            border-bottom:0;
        }
        table tr:last-child td:first-child {
            -moz-border-radius-bottomleft:3px;
            -webkit-border-bottom-left-radius:3px;
            border-bottom-left-radius:3px;
        }
        table tr:last-child td:last-child {
            -moz-border-radius-bottomright:3px;
            -webkit-border-bottom-right-radius:3px;
            border-bottom-right-radius:3px;
        }
    </style>
{% endblock %}", "torneig/profile.html.twig", "/app/appclasse/templates/torneig/profile.html.twig");
    }
}
