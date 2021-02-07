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

/* ronda/profile.html.twig */
class __TwigTemplate_0cf07e3516cd54ca492cd0d2130c4b697141443b4406a17b2bbb73542d55aebd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ronda/profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ronda/profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ronda/profile.html.twig", 1);
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
<h1 class=\"has-text-centered is-size-1\">Ronda Numero <span class=\"has-text-primary\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ronda"]) || array_key_exists("ronda", $context) ? $context["ronda"] : (function () { throw new RuntimeError('Variable "ronda" does not exist.', 8, $this->source); })()), "numRondes", [], "any", false, false, false, 8), "html", null, true);
        echo "</span> del torneig <span class=\"has-text-primary\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 8, $this->source); })()), "nom", [], "any", false, false, false, 8), "html", null, true);
        echo "</span></h1>

    <div class=\"is-flex is-justify-content-center p-3\" style=\"background-color: #e6e6e6; margin-left: 1.5%; margin-right: 1.5% \">
        <div class=\"is-flex is-justify-content-space-evenly \" style=\"width: 50%\" >
            <div class=\"level-item has-text-centered\">
                <div>
                    <p class=\"heading is-size-5\">Data</p>
                    <p class=\"title is-size-3-mobile\">";
        // line 15
        ((twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 15, $this->source); })()), "data", [], "any", false, false, false, 15)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 15, $this->source); })()), "data", [], "any", false, false, false, 15), "Y-m-d"), "html", null, true))) : (print ("?")));
        echo "</p>
                </div>
            </div>
            <div class=\"level-item has-text-centered\">
                <div>
                    <p class=\"heading is-size-5\">Rondes</p>
                    <p class=\"title is-size-3-mobile\">";
        // line 21
        ((twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 21, $this->source); })()), "numRondes", [], "any", false, false, false, 21)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 21, $this->source); })()), "numRondes", [], "any", false, false, false, 21), "html", null, true))) : (print ("?")));
        echo "</p>
                </div>
            </div>
            <div class=\"level-item has-text-centered\">
                <div>
                    <p class=\"heading is-size-5\">Numero Participants</p>
                    <p class=\"title is-size-3-mobile\">";
        // line 27
        ((twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 27, $this->source); })()), "theParticipants", [], "any", false, false, false, 27)) ? (print (twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 27, $this->source); })()), "theParticipants", [], "any", false, false, false, 27)), "html", null, true))) : (print ("?")));
        echo "</p>
                </div>
            </div>
            <div class=\"level-item has-text-centered\" id=\"getX\">
                <div>
                    <p class=\"heading is-size-5\">Arbitre</p>
                    <p class=\"title is-size-3-mobile\"><a class=\"refTorn\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("arbitre_perfil", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 33, $this->source); })()), "propietari", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33)]), "html", null, true);
        echo "\">";
        ((twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 33, $this->source); })()), "propietari", [], "any", false, false, false, 33)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 33, $this->source); })()), "propietari", [], "any", false, false, false, 33), "nom", [], "any", false, false, false, 33), "html", null, true))) : (print ("?")));
        echo "</a></p>
                </div>
            </div>
            <div class=\"level-item has-text-centered\" id=\"getX\">
                <div>
                    <p class=\"heading is-size-5\">Tornar al torneig</p>
                    <p class=\"title is-size-3-mobile\"><a class=\"refTorn button is-link is-outlined\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("torneig_perfil", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39)]), "html", null, true);
        echo "\">Torna</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"is-flex is-justify-content-center\">
    <table class=\"table\">
        <thead>
        <tr>
            ";
        // line 49
        echo "            <th>Jugador Blanques</th>
            <th>Punt Blanques</th>
            <th></th>
            <th>Punt Negres</th>
            <th>Jugador Negres</th>
            ";
        // line 55
        echo "        </tr>
        </thead>
        <tbody>
        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ronda"]) || array_key_exists("ronda", $context) ? $context["ronda"] : (function () { throw new RuntimeError('Variable "ronda" does not exist.', 58, $this->source); })()), "partides", [], "any", false, false, false, 58));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["taula"]) {
            // line 59
            echo "            <tr>
                <td><a class=\"jugadorsTorn\" href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jugador_perfil", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["taula"], "jugadorB", [], "any", false, false, false, 60), "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["taula"], "jugadorB", [], "any", false, false, false, 60), "nom", [], "any", false, false, false, 60), "html", null, true);
            echo "</a></td>
                <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taula"], "puntB", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                <td> - </td>
                <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taula"], "puntN", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                <td><a class=\"jugadorsTorn\" href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jugador_perfil", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["taula"], "jugadorN", [], "any", false, false, false, 64), "id", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["taula"], "jugadorN", [], "any", false, false, false, 64), "nom", [], "any", false, false, false, 64), "html", null, true);
            echo "</a></td>
           </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 67
            echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "        </tbody>
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
        return "ronda/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 71,  198 => 67,  188 => 64,  184 => 63,  179 => 61,  173 => 60,  170 => 59,  165 => 58,  160 => 55,  153 => 49,  141 => 39,  130 => 33,  121 => 27,  112 => 21,  103 => 15,  91 => 8,  88 => 7,  78 => 6,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}Info Torneig{% endblock %}

{% block body %}

<h1 class=\"has-text-centered is-size-1\">Ronda Numero <span class=\"has-text-primary\">{{ ronda.numRondes }}</span> del torneig <span class=\"has-text-primary\">{{ torneig.nom }}</span></h1>

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
            <div class=\"level-item has-text-centered\" id=\"getX\">
                <div>
                    <p class=\"heading is-size-5\">Tornar al torneig</p>
                    <p class=\"title is-size-3-mobile\"><a class=\"refTorn button is-link is-outlined\" href=\"{{ path(\"torneig_perfil\",{'id' : torneig.id}) }}\">Torna</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"is-flex is-justify-content-center\">
    <table class=\"table\">
        <thead>
        <tr>
            {#<th>Elo</th>#}
            <th>Jugador Blanques</th>
            <th>Punt Blanques</th>
            <th></th>
            <th>Punt Negres</th>
            <th>Jugador Negres</th>
            {#<th>Elo</th>#}
        </tr>
        </thead>
        <tbody>
        {% for taula in ronda.partides %}
            <tr>
                <td><a class=\"jugadorsTorn\" href=\"{{ path(\"jugador_perfil\",{'id':taula.jugadorB.id}) }}\">{{ taula.jugadorB.nom }}</a></td>
                <td>{{ taula.puntB }}</td>
                <td> - </td>
                <td>{{ taula.puntN}}</td>
                <td><a class=\"jugadorsTorn\" href=\"{{ path(\"jugador_perfil\",{'id':taula.jugadorN.id}) }}\">{{ taula.jugadorN.nom }}</a></td>
           </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
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
{% endblock %}
", "ronda/profile.html.twig", "/app/appclasse/templates/ronda/profile.html.twig");
    }
}
