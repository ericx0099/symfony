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

/* torneig/go.html.twig */
class __TwigTemplate_9b02a237a3438bdf50ca5ed56a9ddd2678a523246dde3269e9757e4ab37df0ff extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "torneig/go.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "torneig/go.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "torneig/go.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 3, $this->source); })()), "nom", [], "any", false, false, false, 3), "html", null, true);
        
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

        // line 10
        echo "    <script>
        \$(document).ready( function () {
            \$('#tables').DataTable();
        })
    </script>
    <h1 class=\"has-text-centered is-size-3 m-5 has-text-weight-bold \">Nom Torneig: <span class=\"has-text-primary\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 15, $this->source); })()), "nom", [], "any", false, false, false, 15), "html", null, true);
        echo "</span></h1>
    <div class=\"is-flex is-justify-content-center\">
        <div class=\"is-flex is-justify-content-space-evenly \" style=\"width: 50%\" >

            <div class=\"level-item has-text-centered\">
                <div>
                    <p class=\"heading is-size-7\">Data</p>
                    <p class=\"title is-size-3-mobile\">";
        // line 22
        ((twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 22, $this->source); })()), "data", [], "any", false, false, false, 22)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 22, $this->source); })()), "data", [], "any", false, false, false, 22), "Y-m-d"), "html", null, true))) : (print ("?")));
        echo "</p>
                </div>
            </div>
            <div class=\"level-item has-text-centered\">
                <div>
                    <p class=\"heading is-size-7\">Rondes</p>
                    <p class=\"title is-size-3-mobile\">";
        // line 28
        ((twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 28, $this->source); })()), "numRondes", [], "any", false, false, false, 28)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 28, $this->source); })()), "numRondes", [], "any", false, false, false, 28), "html", null, true))) : (print ("?")));
        echo "</p>
                </div>
            </div>
            <div class=\"level-item has-text-centered\">
                <div>
                    <p class=\"heading is-size-7\">Numero Participants</p>
                    <p class=\"title is-size-3-mobile\">";
        // line 34
        ((twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 34, $this->source); })()), "theParticipants", [], "any", false, false, false, 34)) ? (print (twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 34, $this->source); })()), "theParticipants", [], "any", false, false, false, 34)), "html", null, true))) : (print ("?")));
        echo "</p>
                </div>
            </div>
            <div class=\"level-item has-text-centered\" id=\"getX\">
                <div>
                    <p class=\"heading is-size-7\">Arbitre:</p>
                    <p class=\"title is-size-3-mobile\">";
        // line 40
        ((twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 40, $this->source); })()), "propietari", [], "any", false, false, false, 40)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 40, $this->source); })()), "propietari", [], "any", false, false, false, 40), "nom", [], "any", false, false, false, 40), "html", null, true))) : (print ("?")));
        echo "</p>
                </div>
            </div>
        </div>
    </div>
    <p class=\"has-text-centered has-text-primary  is-size-2 m-5\">Rànquing inicial</p>

    <div class=\"is-flex is-justify-content-center\">

        <table class=\"table\">
            <thead>
            <tr>
                <th>T.</th>
                <th>Nom</th>
                <th>Fide</th>
                <th>Club/Ciutat</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 59, $this->source); })()), "theParticipants", [], "any", false, false, false, 59));
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
            // line 60
            echo "                <tr>
                    <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jugador_perfil", ["id" => twig_get_attribute($this->env, $this->source, $context["jugador"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jugador"], "nom", [], "any", false, false, false, 62), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jugador"], "elo", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                    <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jugador"], "equip", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jugador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "            </tbody>
        </table>
    </div>
    <script>
        let button = document.createElement(\"button\");

        button.className = \"button is-primary\";
        button.innerText = \"Rondes\";
        let x = document.getElementById(\"getX\").getBoundingClientRect();
        button.style.top = x.top+10+\"px\";
        button.style.left = x.left+\"px\";
        button.style.right = x.right+\"px\";
        document.body.appendChild(\"button\");

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "torneig/go.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 67,  211 => 64,  207 => 63,  201 => 62,  197 => 61,  194 => 60,  177 => 59,  155 => 40,  146 => 34,  137 => 28,  128 => 22,  118 => 15,  111 => 10,  101 => 8,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ torneig.nom }}{% endblock %}
{% block style %}
    <link rel=\"stylesheet\" href=\"//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css\">
    <script src=\"//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js\"></script>
{% endblock %}
{% block body
%}
    <script>
        \$(document).ready( function () {
            \$('#tables').DataTable();
        })
    </script>
    <h1 class=\"has-text-centered is-size-3 m-5 has-text-weight-bold \">Nom Torneig: <span class=\"has-text-primary\">{{ torneig.nom }}</span></h1>
    <div class=\"is-flex is-justify-content-center\">
        <div class=\"is-flex is-justify-content-space-evenly \" style=\"width: 50%\" >

            <div class=\"level-item has-text-centered\">
                <div>
                    <p class=\"heading is-size-7\">Data</p>
                    <p class=\"title is-size-3-mobile\">{{ torneig.data ? torneig.data|date('Y-m-d') : '?' }}</p>
                </div>
            </div>
            <div class=\"level-item has-text-centered\">
                <div>
                    <p class=\"heading is-size-7\">Rondes</p>
                    <p class=\"title is-size-3-mobile\">{{ torneig.numRondes ? torneig.numRondes : '?' }}</p>
                </div>
            </div>
            <div class=\"level-item has-text-centered\">
                <div>
                    <p class=\"heading is-size-7\">Numero Participants</p>
                    <p class=\"title is-size-3-mobile\">{{ torneig.theParticipants ? torneig.theParticipants|length : '?'}}</p>
                </div>
            </div>
            <div class=\"level-item has-text-centered\" id=\"getX\">
                <div>
                    <p class=\"heading is-size-7\">Arbitre:</p>
                    <p class=\"title is-size-3-mobile\">{{ torneig.propietari ? torneig.propietari.nom :'?' }}</p>
                </div>
            </div>
        </div>
    </div>
    <p class=\"has-text-centered has-text-primary  is-size-2 m-5\">Rànquing inicial</p>

    <div class=\"is-flex is-justify-content-center\">

        <table class=\"table\">
            <thead>
            <tr>
                <th>T.</th>
                <th>Nom</th>
                <th>Fide</th>
                <th>Club/Ciutat</th>
            </tr>
            </thead>
            <tbody>
            {% for jugador in torneig.theParticipants %}
                <tr>
                    <td>{{ loop.index }}</td>
                    <td><a href=\"{{ path(\"jugador_perfil\",{'id':jugador.id}) }}\">{{ jugador.nom }}</a></td>
                    <td>{{ jugador.elo }}</td>
                    <td>{{ jugador.equip }}</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
    <script>
        let button = document.createElement(\"button\");

        button.className = \"button is-primary\";
        button.innerText = \"Rondes\";
        let x = document.getElementById(\"getX\").getBoundingClientRect();
        button.style.top = x.top+10+\"px\";
        button.style.left = x.left+\"px\";
        button.style.right = x.right+\"px\";
        document.body.appendChild(\"button\");

    </script>
{% endblock %}", "torneig/go.html.twig", "/app/appclasse/templates/torneig/go.html.twig");
    }
}
