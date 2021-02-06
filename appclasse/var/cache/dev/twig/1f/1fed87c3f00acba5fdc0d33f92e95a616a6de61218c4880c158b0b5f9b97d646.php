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

/* torneig/rounds.html.twig */
class __TwigTemplate_15d0ff5cd41fa80d8c16b40173dcf923146f13cde06303430963be72e0afaa59 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "torneig/rounds.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "torneig/rounds.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "torneig/rounds.html.twig", 1);
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

        // line 9
        echo "    <h1 class=\"has-text-centered is-size-3 m-5\">Nom Torneig: <span class=\"has-text-primary\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 9, $this->source); })()), "nom", [], "any", false, false, false, 9), "html", null, true);
        echo "</span></h1>
    <div class=\"is-flex is-justify-content-space-evenly \" >
        <div class=\"level-item has-text-centered\">
            <div>
                <p class=\"heading\">Data</p>
                <p class=\"title\">";
        // line 14
        ((twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 14, $this->source); })()), "data", [], "any", false, false, false, 14)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 14, $this->source); })()), "data", [], "any", false, false, false, 14), "Y-m-d"), "html", null, true))) : (print ("?")));
        echo "</p>
            </div>
        </div>
        <div class=\"level-item has-text-centered\">
            <div>
                <p class=\"heading\">Rondes</p>
                <p class=\"title\">";
        // line 20
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 20, $this->source); })()), "rondes", [], "any", false, false, false, 20)), "html", null, true);
        echo "</p>
            </div>
        </div>
        <div class=\"level-item has-text-centered\">
            <div>
                <p class=\"heading\">Numero Participants</p>
                <p class=\"title\">";
        // line 26
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 26, $this->source); })()), "theParticipants", [], "any", false, false, false, 26)), "html", null, true);
        echo "</p>
            </div>
        </div>
        <div class=\"level-item has-text-centered\">
            <div>
                <p class=\"heading\">Arbitre:</p>
                <p class=\"title\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 32, $this->source); })()), "propietari", [], "any", false, false, false, 32), "nom", [], "any", false, false, false, 32), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>
    <div>
        <p>Numero de RONDA: ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ronda"]) || array_key_exists("ronda", $context) ? $context["ronda"] : (function () { throw new RuntimeError('Variable "ronda" does not exist.', 37, $this->source); })()), "numRondes", [], "any", false, false, false, 37), "html", null, true);
        echo "</p>
    </div>
    <table>
        <thead>
        <tr>
            <th>T.</th>
            <th>Jug. Blanques</th>
            <th>Puntuacio</th>
            <th>Jug. Negres</th>
        </tr>
        </thead>
        <tbody>

        ";
        // line 52
        echo "
                    ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ronda"]) || array_key_exists("ronda", $context) ? $context["ronda"] : (function () { throw new RuntimeError('Variable "ronda" does not exist.', 53, $this->source); })()), "partides", [], "any", false, false, false, 53));
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
        foreach ($context['_seq'] as $context["_key"] => $context["taula"]) {
            // line 54
            echo "                        <tr>
                            <td>
                                ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 56), "html", null, true);
            echo "
                            </td>

                            <td>
                                ";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["taula"], "jugadorB", [], "any", false, false, false, 60), "nom", [], "any", false, false, false, 60), "html", null, true);
            echo "
                            </td>

                            <td>
                                0-0
                            </td>
                            <td>
                                ";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["taula"], "jugadorN", [], "any", false, false, false, 67), "nom", [], "any", false, false, false, 67), "html", null, true);
            echo "
                            </td>
                        </tr>
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
            // line 71
            echo "                        <tr>
                            <td>No Partides</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                    ";
        $context["break"] = true;
        // line 76
        echo "
          ";
        // line 78
        echo "        </tbody>

    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "torneig/rounds.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 78,  242 => 76,  239 => 75,  230 => 71,  213 => 67,  203 => 60,  196 => 56,  192 => 54,  174 => 53,  171 => 52,  155 => 37,  147 => 32,  138 => 26,  129 => 20,  120 => 14,  111 => 9,  101 => 8,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ torneig.nom }}{% endblock %}
{% block style %}
    <link rel=\"stylesheet\" href=\"//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css\">
    <script src=\"//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js\"></script>
{% endblock %}
{% block body %}
    <h1 class=\"has-text-centered is-size-3 m-5\">Nom Torneig: <span class=\"has-text-primary\">{{ torneig.nom }}</span></h1>
    <div class=\"is-flex is-justify-content-space-evenly \" >
        <div class=\"level-item has-text-centered\">
            <div>
                <p class=\"heading\">Data</p>
                <p class=\"title\">{{  torneig.data ? torneig.data|date('Y-m-d') : '?'}}</p>
            </div>
        </div>
        <div class=\"level-item has-text-centered\">
            <div>
                <p class=\"heading\">Rondes</p>
                <p class=\"title\">{{ torneig.rondes|length }}</p>
            </div>
        </div>
        <div class=\"level-item has-text-centered\">
            <div>
                <p class=\"heading\">Numero Participants</p>
                <p class=\"title\">{{ torneig.theParticipants|length }}</p>
            </div>
        </div>
        <div class=\"level-item has-text-centered\">
            <div>
                <p class=\"heading\">Arbitre:</p>
                <p class=\"title\">{{ torneig.propietari.nom }}</p>
            </div>
        </div>
    </div>
    <div>
        <p>Numero de RONDA: {{ ronda.numRondes }}</p>
    </div>
    <table>
        <thead>
        <tr>
            <th>T.</th>
            <th>Jug. Blanques</th>
            <th>Puntuacio</th>
            <th>Jug. Negres</th>
        </tr>
        </thead>
        <tbody>

        {#    {% set break = false %}
            {% for ronda in rondes if not break %}#}

                    {% for taula in ronda.partides %}
                        <tr>
                            <td>
                                {{ loop.index }}
                            </td>

                            <td>
                                {{ taula.jugadorB.nom }}
                            </td>

                            <td>
                                0-0
                            </td>
                            <td>
                                {{ taula.jugadorN.nom }}
                            </td>
                        </tr>
                        {% else %}
                        <tr>
                            <td>No Partides</td>
                        </tr>
                    {% endfor %}
                    {% set break = true %}

          {#  {% endfor %}#}
        </tbody>

    </table>
{% endblock %}", "torneig/rounds.html.twig", "/app/appclasse/templates/torneig/rounds.html.twig");
    }
}
