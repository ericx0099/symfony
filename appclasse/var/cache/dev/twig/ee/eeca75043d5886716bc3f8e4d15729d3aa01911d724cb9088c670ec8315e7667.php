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

/* user/torneigos.html.twig */
class __TwigTemplate_958e3412c5fdb8364d9f57e7d8dedd9f3d9d1c7563d915ef80dc1e6b7afe440e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/torneigos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/torneigos.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/torneigos.html.twig", 1);
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

    <style>
        h1{
            background: -webkit-linear-gradient(blue, #00d1b2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "
     ";
        // line 18
        $context["navInfo"] = 0;
        // line 19
        echo "    <script>
        \$(document).ready( function () {
            \$('#tables').DataTable();
        })
    </script>


    <h1 class=\"has-text-weight-bold is-size-2 has-text-centered\">Els meus torneigos</h1>
    <div class=\"is-flex is-justify-content-center mt-5\">

        <div style=\"width: 50%\">
            <table class=\"table\" id=\"tables\">
                <thead>
                <tr>
                    <th>Nom</th>
                    <th>Num. Rondes</th>
                    <th>Data</th>
                    <th>Num. Participants</th>
                    <th>Id</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>

                </tr>
                </thead>
                <tbody>
                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 46, $this->source); })()), "torneigs", [], "any", false, false, false, 46));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["torneig"]) {
            // line 47
            echo "                    <tr>
                        <td><a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("torneig_perfil", ["id" => twig_get_attribute($this->env, $this->source, $context["torneig"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["torneig"], "nom", [], "any", false, false, false, 48), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 49
            ((twig_get_attribute($this->env, $this->source, $context["torneig"], "rondes", [], "any", false, false, false, 49)) ? (print (twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["torneig"], "rondes", [], "any", false, false, false, 49)), "html", null, true))) : (print ("")));
            echo "</td>
                        <td>";
            // line 50
            ((twig_get_attribute($this->env, $this->source, $context["torneig"], "data", [], "any", false, false, false, 50)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["torneig"], "data", [], "any", false, false, false, 50), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                        <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["torneig"], "theParticipants", [], "any", false, false, false, 51)), "html", null, true);
            echo "</td>
                        <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["torneig"], "id", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>

                        <td>
                            <a class=\"button is-warning  is-small\" href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("torneig_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["torneig"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\">edit</a>
                        </td>
                        <td>
                            <a class=\"button is-primary is-small\" href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("torneig_addJugadors", ["id" => twig_get_attribute($this->env, $this->source, $context["torneig"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\">Jugadors</a>
                        </td>
                        <td>
                            <a class=\"button is-info  is-small\" href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("torneig_gestiorondes", ["id" => twig_get_attribute($this->env, $this->source, $context["torneig"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\">Rondes</a>
                        </td>
                        <td>
                            <a class=\"button is-success  is-small\" href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("torneig_start", ["id" => twig_get_attribute($this->env, $this->source, $context["torneig"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\">Go!</a>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 68
            echo "                    <tr>
                        <td colspan=\"6\">No tens torneigos</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['torneig'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                </tbody>
            </table>
        </div>

    </div>


    <p  class=\"has-text-weight-bold is-size-4 has-text-centered m-5\"><a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("torneig_blank");
        echo "\">Create nou torneig</a></p>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/torneigos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 79,  221 => 72,  212 => 68,  203 => 64,  197 => 61,  191 => 58,  185 => 55,  179 => 52,  175 => 51,  171 => 50,  167 => 49,  161 => 48,  158 => 47,  153 => 46,  124 => 19,  122 => 18,  119 => 17,  109 => 16,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Afegir Jugadors{% endblock %}
{% block style %}
    <link rel=\"stylesheet\" href=\"//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css\">
    <script src=\"//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js\"></script>

    <style>
        h1{
            background: -webkit-linear-gradient(blue, #00d1b2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
{% endblock %}
{% block body %}

     {% set navInfo = 0 %}
    <script>
        \$(document).ready( function () {
            \$('#tables').DataTable();
        })
    </script>


    <h1 class=\"has-text-weight-bold is-size-2 has-text-centered\">Els meus torneigos</h1>
    <div class=\"is-flex is-justify-content-center mt-5\">

        <div style=\"width: 50%\">
            <table class=\"table\" id=\"tables\">
                <thead>
                <tr>
                    <th>Nom</th>
                    <th>Num. Rondes</th>
                    <th>Data</th>
                    <th>Num. Participants</th>
                    <th>Id</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>

                </tr>
                </thead>
                <tbody>
                {% for torneig in user.torneigs %}
                    <tr>
                        <td><a href=\"{{ path(\"torneig_perfil\",{'id':torneig.id}) }}\">{{ torneig.nom }}</a></td>
                        <td>{{ torneig.rondes ? torneig.rondes|length }}</td>
                        <td>{{ torneig.data ? torneig.data|date('Y-m-d') : '' }}</td>
                        <td>{{ torneig.theParticipants|length}}</td>
                        <td>{{ torneig.id }}</td>

                        <td>
                            <a class=\"button is-warning  is-small\" href=\"{{ path('torneig_edit', {'id': torneig.id}) }}\">edit</a>
                        </td>
                        <td>
                            <a class=\"button is-primary is-small\" href=\"{{ path('torneig_addJugadors', {'id': torneig.id}) }}\">Jugadors</a>
                        </td>
                        <td>
                            <a class=\"button is-info  is-small\" href=\"{{ path('torneig_gestiorondes', {'id': torneig.id}) }}\">Rondes</a>
                        </td>
                        <td>
                            <a class=\"button is-success  is-small\" href=\"{{ path('torneig_start', {'id': torneig.id}) }}\">Go!</a>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"6\">No tens torneigos</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>

    </div>


    <p  class=\"has-text-weight-bold is-size-4 has-text-centered m-5\"><a href=\"{{ path('torneig_blank') }}\">Create nou torneig</a></p>
{% endblock %}
", "user/torneigos.html.twig", "/app/appclasse/templates/user/torneigos.html.twig");
    }
}
