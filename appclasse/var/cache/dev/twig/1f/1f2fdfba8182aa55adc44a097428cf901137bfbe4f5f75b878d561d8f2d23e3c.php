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

/* torneig/index.html.twig */
class __TwigTemplate_2115a71f5a59567ca6ff96703d0d8ee38f4ce896b386dd19f96d140307454e05 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "torneig/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "torneig/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "torneig/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Torneig index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 11
        echo "

    <h1 class=\"has-text-centered is-size-3 m-5 has-text-weight-bold \">Torneig index</h1>

    <table >
        <thead>
            <tr>
                <th>Id</th>
                <th>Rondes</th>
                <th>Data</th>
                <th>TheParticipants</th>
                <th>Nom</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["torneigs"]) || array_key_exists("torneigs", $context) ? $context["torneigs"] : (function () { throw new RuntimeError('Variable "torneigs" does not exist.', 27, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["torneig"]) {
            // line 28
            echo "            <tr>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["torneig"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            ((twig_get_attribute($this->env, $this->source, $context["torneig"], "rondes", [], "any", false, false, false, 30)) ? (print (twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["torneig"], "rondes", [], "any", false, false, false, 30)), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 31
            ((twig_get_attribute($this->env, $this->source, $context["torneig"], "data", [], "any", false, false, false, 31)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["torneig"], "data", [], "any", false, false, false, 31), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["torneig"], "theParticipants", [], "any", false, false, false, 32)), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["torneig"], "nom", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("torneig_show", ["id" => twig_get_attribute($this->env, $this->source, $context["torneig"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("torneig_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["torneig"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\">edit</a>
                    <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("torneig_addJugadors", ["id" => twig_get_attribute($this->env, $this->source, $context["torneig"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\">Afegir Jugador</a>
                    <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("torneig_gestiorondes", ["id" => twig_get_attribute($this->env, $this->source, $context["torneig"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\">Gestionar Rondes</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['torneig'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </tbody>
    </table>
    <style>
        .container{
            height: 100%;
        }
        .shadow {
            border: 2px solid #00d1b2;
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
    <a href=\"";
        // line 171
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("torneig_new");
        echo "\">Create new</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "torneig/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 171,  168 => 46,  159 => 42,  150 => 38,  146 => 37,  142 => 36,  138 => 35,  133 => 33,  129 => 32,  125 => 31,  121 => 30,  117 => 29,  114 => 28,  109 => 27,  91 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Torneig index{% endblock %}

{% block body %}

{#        <script>\$(document).ready( function () {
                \$('#table').DataTable();
            })
        </script>#}


    <h1 class=\"has-text-centered is-size-3 m-5 has-text-weight-bold \">Torneig index</h1>

    <table >
        <thead>
            <tr>
                <th>Id</th>
                <th>Rondes</th>
                <th>Data</th>
                <th>TheParticipants</th>
                <th>Nom</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for torneig in torneigs %}
            <tr>
                <td>{{ torneig.id }}</td>
                <td>{{ torneig.rondes ? torneig.rondes|length }}</td>
                <td>{{ torneig.data ? torneig.data|date('Y-m-d') : '' }}</td>
                <td>{{ torneig.theParticipants|length}}</td>
                <td>{{ torneig.nom }}</td>
                <td>
                    <a href=\"{{ path('torneig_show', {'id': torneig.id}) }}\">show</a>
                    <a href=\"{{ path('torneig_edit', {'id': torneig.id}) }}\">edit</a>
                    <a href=\"{{ path('torneig_addJugadors', {'id': torneig.id}) }}\">Afegir Jugador</a>
                    <a href=\"{{ path('torneig_gestiorondes', {'id': torneig.id}) }}\">Gestionar Rondes</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <style>
        .container{
            height: 100%;
        }
        .shadow {
            border: 2px solid #00d1b2;
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
    <a href=\"{{ path('torneig_new') }}\">Create new</a>
{% endblock %}
", "torneig/index.html.twig", "/app/appclasse/templates/torneig/index.html.twig");
    }
}
