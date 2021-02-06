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

/* jugador/all.html.twig */
class __TwigTemplate_e6d25ed9a04237dcfd8e7fe631b354e4828b4f7ee2538df12d45e7f6c3b7841e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'style' => [$this, 'block_style'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jugador/all.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jugador/all.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "jugador/all.html.twig", 1);
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

        echo "Afegir Jugadors";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css\">
    <script src=\"//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../../styles/css/table-style.css\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
    <div class=\"container\" >
        <div class=\"titleBack\" style=\"width: 100%; background-color: #e6e6e6; margin-left: 1.5%; margin-right: 1.5%\">
            <h1  class=\"has-text-weight-bold is-size-2 has-text-centered mt-5\">Tots els Jugadors</h1>
        </div>
        <div class=\"is-flex is-justify-content-center mt-5\" style=\"  border-radius: 1%;\">

            <table id=\"table\">
                <thead>
                <tr class=\"\">
                    <th>Num</th>
                    <th>Nom</th>
                    <th>ELO</th>
                    <th>Pais</th>
                    <th>Equip</th>
                    <th>Data Naixament</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jugadors"]) || array_key_exists("jugadors", $context) ? $context["jugadors"] : (function () { throw new RuntimeError('Variable "jugadors" does not exist.', 30, $this->source); })()));
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
            // line 31
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 31) % 2 == 1)) {
                // line 32
                echo "                        <tr>
                            <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 33), "html", null, true);
                echo "</td>
                            <td><a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jugador_perfil", ["id" => twig_get_attribute($this->env, $this->source, $context["jugador"], "id", [], "any", false, false, false, 34)]), "html", null, true);
                echo "\">";
                ((twig_get_attribute($this->env, $this->source, $context["jugador"], "nom", [], "any", false, false, false, 34)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jugador"], "nom", [], "any", false, false, false, 34), "html", null, true))) : (print ("?")));
                echo "</a></td>
                            <td>";
                // line 35
                ((twig_get_attribute($this->env, $this->source, $context["jugador"], "elo", [], "any", false, false, false, 35)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jugador"], "elo", [], "any", false, false, false, 35), "html", null, true))) : (print ("?")));
                echo "</td>
                            <td>";
                // line 36
                ((twig_get_attribute($this->env, $this->source, $context["jugador"], "pais", [], "any", false, false, false, 36)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jugador"], "pais", [], "any", false, false, false, 36), "html", null, true))) : (print ("?")));
                echo "</td>
                            <td>";
                // line 37
                ((twig_get_attribute($this->env, $this->source, $context["jugador"], "equip", [], "any", false, false, false, 37)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jugador"], "pais", [], "any", false, false, false, 37), "html", null, true))) : (print ("?")));
                echo "</td>
                            <td>";
                // line 38
                ((twig_get_attribute($this->env, $this->source, $context["jugador"], "dataNaixament", [], "any", false, false, false, 38)) ? (((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jugador"], "dataNaixament", [], "any", false, false, false, 38), "Y-m-d")) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jugador"], "dataNaixament", [], "any", false, false, false, 38), "Y-m-d"), "html", null, true))) : (print ("?")))) : (print ("")));
                echo "</td>
                        </tr>
                    ";
            } else {
                // line 41
                echo "                        <tr>
                            <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 42), "html", null, true);
                echo "</td>
                            <td><a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jugador_perfil", ["id" => twig_get_attribute($this->env, $this->source, $context["jugador"], "id", [], "any", false, false, false, 43)]), "html", null, true);
                echo "\">";
                ((twig_get_attribute($this->env, $this->source, $context["jugador"], "nom", [], "any", false, false, false, 43)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jugador"], "nom", [], "any", false, false, false, 43), "html", null, true))) : (print ("?")));
                echo "</a></td>
                            <td>";
                // line 44
                ((twig_get_attribute($this->env, $this->source, $context["jugador"], "elo", [], "any", false, false, false, 44)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jugador"], "elo", [], "any", false, false, false, 44), "html", null, true))) : (print ("?")));
                echo "</td>
                            <td>";
                // line 45
                ((twig_get_attribute($this->env, $this->source, $context["jugador"], "pais", [], "any", false, false, false, 45)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jugador"], "pais", [], "any", false, false, false, 45), "html", null, true))) : (print ("?")));
                echo "</td>
                            <td>";
                // line 46
                ((twig_get_attribute($this->env, $this->source, $context["jugador"], "equip", [], "any", false, false, false, 46)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jugador"], "pais", [], "any", false, false, false, 46), "html", null, true))) : (print ("?")));
                echo "</td>
                            <td>";
                // line 47
                ((twig_get_attribute($this->env, $this->source, $context["jugador"], "dataNaixament", [], "any", false, false, false, 47)) ? (((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jugador"], "dataNaixament", [], "any", false, false, false, 47), "Y-m-d")) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jugador"], "dataNaixament", [], "any", false, false, false, 47), "Y-m-d"), "html", null, true))) : (print ("?")))) : (print ("")));
                echo "</td>
                        </tr>

                    ";
            }
            // line 51
            echo "
                ";
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
            // line 53
            echo "                    <tr>
                        <td>Encara no hi han torneigos :(</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jugador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                </tbody>
            </table>

        </div>
    </div>

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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jugador/all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 57,  232 => 53,  218 => 51,  211 => 47,  207 => 46,  203 => 45,  199 => 44,  193 => 43,  189 => 42,  186 => 41,  180 => 38,  176 => 37,  172 => 36,  168 => 35,  162 => 34,  158 => 33,  155 => 32,  152 => 31,  134 => 30,  113 => 11,  103 => 10,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Afegir Jugadors{% endblock %}
{% block style %}
    <link rel=\"stylesheet\" href=\"//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css\">
    <script src=\"//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../../styles/css/table-style.css\">

{% endblock %}
{% block body %}

    <div class=\"container\" >
        <div class=\"titleBack\" style=\"width: 100%; background-color: #e6e6e6; margin-left: 1.5%; margin-right: 1.5%\">
            <h1  class=\"has-text-weight-bold is-size-2 has-text-centered mt-5\">Tots els Jugadors</h1>
        </div>
        <div class=\"is-flex is-justify-content-center mt-5\" style=\"  border-radius: 1%;\">

            <table id=\"table\">
                <thead>
                <tr class=\"\">
                    <th>Num</th>
                    <th>Nom</th>
                    <th>ELO</th>
                    <th>Pais</th>
                    <th>Equip</th>
                    <th>Data Naixament</th>
                </tr>
                </thead>
                <tbody>
                {% for jugador in jugadors %}
                    {% if loop.index is odd %}
                        <tr>
                            <td>{{ loop.index }}</td>
                            <td><a href=\"{{ path(\"jugador_perfil\",{'id':jugador.id}) }}\">{{ jugador.nom ? jugador.nom : \"?\" }}</a></td>
                            <td>{{ jugador.elo ? jugador.elo : \"?\" }}</td>
                            <td>{{ jugador.pais ? jugador.pais : \"?\" }}</td>
                            <td>{{ jugador.equip ? jugador.pais : \"?\" }}</td>
                            <td>{{ jugador.dataNaixament ? jugador.dataNaixament|date('Y-m-d') ? : \"?\" }}</td>
                        </tr>
                    {% else %}
                        <tr>
                            <td>{{ loop.index }}</td>
                            <td><a href=\"{{ path(\"jugador_perfil\",{'id':jugador.id}) }}\">{{ jugador.nom ? jugador.nom : \"?\" }}</a></td>
                            <td>{{ jugador.elo ? jugador.elo : \"?\" }}</td>
                            <td>{{ jugador.pais ? jugador.pais : \"?\" }}</td>
                            <td>{{ jugador.equip ? jugador.pais : \"?\" }}</td>
                            <td>{{ jugador.dataNaixament ? jugador.dataNaixament|date('Y-m-d') ? : \"?\" }}</td>
                        </tr>

                    {% endif %}

                {% else %}
                    <tr>
                        <td>Encara no hi han torneigos :(</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>

        </div>
    </div>

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
{% endblock %}
", "jugador/all.html.twig", "/app/appclasse/templates/jugador/all.html.twig");
    }
}
