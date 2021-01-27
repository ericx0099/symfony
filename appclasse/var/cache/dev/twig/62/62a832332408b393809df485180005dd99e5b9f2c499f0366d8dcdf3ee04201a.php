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

/* torneig/addJug.html.twig */
class __TwigTemplate_1613e958576b89aaa2d54b9cda135fe674b5aff5373d3e841457992123d435e7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "torneig/addJug.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "torneig/addJug.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "torneig/addJug.html.twig", 1);
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

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Torneig index</h1>
<h2>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["bool"]) || array_key_exists("bool", $context) ? $context["bool"] : (function () { throw new RuntimeError('Variable "bool" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "</h2>
<table class=\"table\">
    <thead>
    <tr>
        <th>Nom Jugador</th>
        <th>Codi Fide</th>
        <th>Elo Fide</th>
        <th>Pais</th>
        <th> ";
        // line 15
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 15, $this->source); })()), "theParticipants", [], "any", false, false, false, 15)), "html", null, true);
        echo "</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jugadors"]) || array_key_exists("jugadors", $context) ? $context["jugadors"] : (function () { throw new RuntimeError('Variable "jugadors" does not exist.', 19, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["jugador"]) {
            // line 20
            echo "        <tr>
        <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jugador"], "nom", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
        <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jugador"], "codiFide", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
        <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jugador"], "elo", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
        <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jugador"], "pais", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
            ";
            // line 25
            $context["alreadyIn"] = false;
            // line 26
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["jugadorsInTournament"]) || array_key_exists("jugadorsInTournament", $context) ? $context["jugadorsInTournament"] : (function () { throw new RuntimeError('Variable "jugadorsInTournament" does not exist.', 26, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["theplay"]) {
                // line 27
                echo "            ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["theplay"], "nom", [], "any", false, false, false, 27), twig_get_attribute($this->env, $this->source, $context["jugador"], "nom", [], "any", false, false, false, 27)))) {
                    // line 28
                    echo "                ";
                    $context["alreadyIn"] = true;
                    // line 29
                    echo "            ";
                }
                // line 30
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theplay'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "            ";
            if ((0 === twig_compare((isset($context["alreadyIn"]) || array_key_exists("alreadyIn", $context) ? $context["alreadyIn"] : (function () { throw new RuntimeError('Variable "alreadyIn" does not exist.', 31, $this->source); })()), true))) {
                // line 32
                echo "                <td>
                    <form ";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("torneig_addJugadors", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33)]), "html", null, true);
                echo " method=\"post\">
                        <input type=\"hidden\" value=\"delete\" name=\"action\">
                        <input type=\"hidden\" value=\"";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jugador"], "id", [], "any", false, false, false, 35), "html", null, true);
                echo "\" name=\"idJug\">
                        <button>Borraa</button>
                    </form>
                </td>
                ";
            } else {
                // line 40
                echo "                    <td>
                        <form ";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("torneig_addJugadors", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41)]), "html", null, true);
                echo " method=\"post\">
                            <input type=\"hidden\" value=\"add\" name=\"action\">
                            <input type=\"hidden\" value=\"";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jugador"], "id", [], "any", false, false, false, 43), "html", null, true);
                echo "\" name=\"idJug\">
                            <button>Afegir</button>
                        </form>
                    </td>
            ";
            }
            // line 48
            echo "        </tr>

            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 51
            echo "
        <tr>
            <td colspan=\"6\">no records found</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jugador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "    </tbody>
</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "torneig/addJug.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 56,  197 => 51,  190 => 48,  182 => 43,  177 => 41,  174 => 40,  166 => 35,  161 => 33,  158 => 32,  155 => 31,  149 => 30,  146 => 29,  143 => 28,  140 => 27,  135 => 26,  133 => 25,  129 => 24,  125 => 23,  121 => 22,  117 => 21,  114 => 20,  109 => 19,  102 => 15,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Afegir Jugadors{% endblock %}

{% block body %}
<h1>Torneig index</h1>
<h2>{{ bool }}</h2>
<table class=\"table\">
    <thead>
    <tr>
        <th>Nom Jugador</th>
        <th>Codi Fide</th>
        <th>Elo Fide</th>
        <th>Pais</th>
        <th> {{ torneig.theParticipants|length }}</th>
    </tr>
    </thead>
    <tbody>
    {% for jugador in jugadors %}
        <tr>
        <td>{{ jugador.nom }}</td>
        <td>{{ jugador.codiFide }}</td>
        <td>{{ jugador.elo }}</td>
        <td>{{ jugador.pais }}</td>
            {% set alreadyIn = false %}
        {% for theplay in jugadorsInTournament %}
            {%if theplay.nom  == jugador.nom %}
                {% set alreadyIn = true %}
            {% endif %}
        {% endfor %}
            {% if alreadyIn == true %}
                <td>
                    <form {{ path('torneig_addJugadors',{'id': torneig.id}) }} method=\"post\">
                        <input type=\"hidden\" value=\"delete\" name=\"action\">
                        <input type=\"hidden\" value=\"{{ jugador.id }}\" name=\"idJug\">
                        <button>Borraa</button>
                    </form>
                </td>
                {% else  %}
                    <td>
                        <form {{ path('torneig_addJugadors',{'id': torneig.id}) }} method=\"post\">
                            <input type=\"hidden\" value=\"add\" name=\"action\">
                            <input type=\"hidden\" value=\"{{ jugador.id }}\" name=\"idJug\">
                            <button>Afegir</button>
                        </form>
                    </td>
            {% endif %}
        </tr>

            {% else %}

        <tr>
            <td colspan=\"6\">no records found</td>
        </tr>
    {% endfor %}
    </tbody>
</table>
{% endblock %}
", "torneig/addJug.html.twig", "/app/appclasse/templates/torneig/addJug.html.twig");
    }
}
