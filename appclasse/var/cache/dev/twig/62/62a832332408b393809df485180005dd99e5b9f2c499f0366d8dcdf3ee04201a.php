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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "

    <script>
        \$(document).ready( function () {
            \$('#tables').DataTable();
        })
    </script>

    <h1 class=\"is-size-4 has-text-centered mt-5\">Afageix i Elimina usuaris del torneig <span class=\"is-size-3 is-family-code has-text-primary has-text-weight-bold\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 17, $this->source); })()), "nom", [], "any", false, false, false, 17), "html", null, true);
        echo "</span></h1>
   <div>
       ";
        // line 19
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 19, $this->source); })()), "nom", [], "any", false, false, false, 19)) {
            // line 20
            echo "           <a class=\"button is-success is-light\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("torneig_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\">Continuar</a>
           <form method=\"post\" action=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("torneig_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
               <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
               <input type=\"hidden\" name=\"_token\" value=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23))), "html", null, true);
            echo "\">
               <button class=\"button is-danger is-light\">Cancelar</button>
           </form>
       ";
        }
        // line 27
        echo "   </div>

    <div class=\"is-flex is-justify-content-center mt-5\">

    <div style=\"width: 50%\">
        <table class=\"table \" id=\"tables\" >
            <thead>
            <tr>
                <th>Nom Jugador</th>
                <th>Codi Fide</th>
                <th>Elo Fide</th>
                <th>Pais</th>
                <th> ";
        // line 39
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 39, $this->source); })()), "theParticipants", [], "any", false, false, false, 39)), "html", null, true);
        echo "</th>
            </tr>
            </thead>

            <tbody>
            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jugadors"]) || array_key_exists("jugadors", $context) ? $context["jugadors"] : (function () { throw new RuntimeError('Variable "jugadors" does not exist.', 44, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["jugador"]) {
            // line 45
            echo "
                <tr>
                    <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jugador"], "nom", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                    <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jugador"], "codiFide", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                    <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jugador"], "elo", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                    <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jugador"], "pais", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                    ";
            // line 51
            $context["alreadyIn"] = false;
            // line 52
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["jugadorsInTournament"]) || array_key_exists("jugadorsInTournament", $context) ? $context["jugadorsInTournament"] : (function () { throw new RuntimeError('Variable "jugadorsInTournament" does not exist.', 52, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["theplay"]) {
                // line 53
                echo "                        ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["theplay"], "nom", [], "any", false, false, false, 53), twig_get_attribute($this->env, $this->source, $context["jugador"], "nom", [], "any", false, false, false, 53)))) {
                    // line 54
                    echo "                            ";
                    $context["alreadyIn"] = true;
                    // line 55
                    echo "                        ";
                }
                // line 56
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theplay'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                    ";
            if ((0 === twig_compare((isset($context["alreadyIn"]) || array_key_exists("alreadyIn", $context) ? $context["alreadyIn"] : (function () { throw new RuntimeError('Variable "alreadyIn" does not exist.', 57, $this->source); })()), true))) {
                // line 58
                echo "                        <td>
                            <form ";
                // line 59
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("torneig_addJugadors", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59)]), "html", null, true);
                echo " method=\"post\">
                                <input type=\"hidden\" value=\"delete\" name=\"action\">
                                <input type=\"hidden\" value=\"";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jugador"], "id", [], "any", false, false, false, 61), "html", null, true);
                echo "\" name=\"idJug\">
                                <button id=\"idBut\"class=\"button is-danger is-small\" onclick=\"changeButtonState(this)\">Elimina</button>
                            </form>
                        </td>
                    ";
            } else {
                // line 66
                echo "                        <td>
                            <form ";
                // line 67
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("torneig_addJugadors", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 67, $this->source); })()), "id", [], "any", false, false, false, 67)]), "html", null, true);
                echo " method=\"post\">
                                <input type=\"hidden\" value=\"add\" name=\"action\">
                                <input type=\"hidden\" value=\"";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jugador"], "id", [], "any", false, false, false, 69), "html", null, true);
                echo "\" name=\"idJug\">
                                <button id=\"idBut\"class=\"button is-success is-small\" onclick=\"changeButtonState(this)\">Afageix</button>
                            </form>
                        </td>
                    ";
            }
            // line 74
            echo "                </tr>

            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 77
            echo "
                <tr>
                    <td colspan=\"6\">no records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jugador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "            </tbody>


        </table>
    </div>

</div>



    <script>
        function changeButtonState(button){
            button.addClass('is-loading').reload;

            \$('#idBut').load(self)

        }

    </script>
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
        return array (  266 => 82,  256 => 77,  249 => 74,  241 => 69,  236 => 67,  233 => 66,  225 => 61,  220 => 59,  217 => 58,  214 => 57,  208 => 56,  205 => 55,  202 => 54,  199 => 53,  194 => 52,  192 => 51,  188 => 50,  184 => 49,  180 => 48,  176 => 47,  172 => 45,  167 => 44,  159 => 39,  145 => 27,  138 => 23,  133 => 21,  128 => 20,  126 => 19,  121 => 17,  111 => 9,  101 => 8,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Afegir Jugadors{% endblock %}
{% block style %}
    <link rel=\"stylesheet\" href=\"//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css\">
    <script src=\"//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js\"></script>
{% endblock %}
{% block body %}


    <script>
        \$(document).ready( function () {
            \$('#tables').DataTable();
        })
    </script>

    <h1 class=\"is-size-4 has-text-centered mt-5\">Afageix i Elimina usuaris del torneig <span class=\"is-size-3 is-family-code has-text-primary has-text-weight-bold\">{{ torneig.nom }}</span></h1>
   <div>
       {% if not torneig.nom %}
           <a class=\"button is-success is-light\" href=\"{{ path('torneig_edit', {'id': torneig.id}) }}\">Continuar</a>
           <form method=\"post\" action=\"{{ path('torneig_delete', {'id': torneig.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
               <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
               <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ torneig.id) }}\">
               <button class=\"button is-danger is-light\">Cancelar</button>
           </form>
       {% endif %}
   </div>

    <div class=\"is-flex is-justify-content-center mt-5\">

    <div style=\"width: 50%\">
        <table class=\"table \" id=\"tables\" >
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
                                <button id=\"idBut\"class=\"button is-danger is-small\" onclick=\"changeButtonState(this)\">Elimina</button>
                            </form>
                        </td>
                    {% else  %}
                        <td>
                            <form {{ path('torneig_addJugadors',{'id': torneig.id}) }} method=\"post\">
                                <input type=\"hidden\" value=\"add\" name=\"action\">
                                <input type=\"hidden\" value=\"{{ jugador.id }}\" name=\"idJug\">
                                <button id=\"idBut\"class=\"button is-success is-small\" onclick=\"changeButtonState(this)\">Afageix</button>
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
    </div>

</div>



    <script>
        function changeButtonState(button){
            button.addClass('is-loading').reload;

            \$('#idBut').load(self)

        }

    </script>
{% endblock %}

", "torneig/addJug.html.twig", "/app/appclasse/templates/torneig/addJug.html.twig");
    }
}
