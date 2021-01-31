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
class __TwigTemplate_d6eeeaa5bee8fcd28bd190003574490f2d8f70d67486bc603448366fab023858 extends Template
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
        <h1 class=\"has-text-weight-bold is-size-2 has-text-centered m-5\">Informació del torneig:  <span class=\"has-text-primary\">";
        // line 8
        ((twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 8, $this->source); })()), "nom", [], "any", false, false, false, 8)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 8, $this->source); })()), "nom", [], "any", false, false, false, 8), "html", null, true))) : (print ("?")));
        echo "</span></h1>
        <div class=\"is-flex is-justify-content-center\">
            <div class=\"is-flex is-justify-content-space-evenly \" style=\"width: 50%\" >

                <div class=\"level-item has-text-centered\">
                    <div>
                        <p class=\"heading is-size-7\">Data</p>
                        <p class=\"title is-size-3-mobile\">";
        // line 15
        ((twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 15, $this->source); })()), "data", [], "any", false, false, false, 15)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 15, $this->source); })()), "data", [], "any", false, false, false, 15), "Y-m-d"), "html", null, true))) : (print ("?")));
        echo "</p>
                    </div>
                </div>
                <div class=\"level-item has-text-centered\">
                    <div>
                        <p class=\"heading is-size-7\">Rondes</p>
                        <p class=\"title is-size-3-mobile\">";
        // line 21
        ((twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 21, $this->source); })()), "numRondes", [], "any", false, false, false, 21)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 21, $this->source); })()), "numRondes", [], "any", false, false, false, 21), "html", null, true))) : (print ("?")));
        echo "</p>
                    </div>
                </div>
                <div class=\"level-item has-text-centered\">
                    <div>
                        <p class=\"heading is-size-7\">Numero Participants</p>
                        <p class=\"title is-size-3-mobile\">";
        // line 27
        ((twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 27, $this->source); })()), "theParticipants", [], "any", false, false, false, 27)) ? (print (twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 27, $this->source); })()), "theParticipants", [], "any", false, false, false, 27)), "html", null, true))) : (print ("?")));
        echo "</p>
                    </div>
                </div>
                <div class=\"level-item has-text-centered\" id=\"getX\">
                    <div>
                        <p class=\"heading is-size-7\">Arbitre:</p>
                        <p class=\"title is-size-3-mobile\"><a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("arbitre_perfil", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 33, $this->source); })()), "propietari", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33)]), "html", null, true);
        echo "\">";
        ((twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 33, $this->source); })()), "propietari", [], "any", false, false, false, 33)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 33, $this->source); })()), "propietari", [], "any", false, false, false, 33), "nom", [], "any", false, false, false, 33), "html", null, true))) : (print ("?")));
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
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 42, $this->source); })()), "rondes", [], "any", false, false, false, 42));
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
            // line 43
            echo "                     <p><a href=\"\">Ronda ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 43), "html", null, true);
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
        // line 45
        echo "             </div>
         </div>
    </div>

        <div class=\"is-flex is-justify-content-center m-5\">
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>Ordre</th>
                        <th>Nom Jugador</th>
                        <th>Fide / elo</th>
                        <th>Club/Ciutat</th>
                        <th>Punts Finals</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 61, $this->source); })()), "theparticipants", [], "any", false, false, false, 61));
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
            // line 62
            echo "                        <tr>
                            <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                            <td><a href=\"";
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
            // line 70
            echo "                            <tr>
                                <td>Algo ha anat malament..</td>
                            </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jugador'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                </tbody>
            </table>
        </div>

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
        return array (  255 => 74,  246 => 70,  229 => 66,  225 => 65,  219 => 64,  215 => 63,  212 => 62,  194 => 61,  176 => 45,  159 => 43,  142 => 42,  128 => 33,  119 => 27,  110 => 21,  101 => 15,  91 => 8,  88 => 7,  78 => 6,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}Info Torneig{% endblock %}

{% block body %}

        <h1 class=\"has-text-weight-bold is-size-2 has-text-centered m-5\">Informació del torneig:  <span class=\"has-text-primary\">{{ torneig.nom ? torneig.nom : '?' }}</span></h1>
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
                        <p class=\"title is-size-3-mobile\"><a href=\"{{ path(\"arbitre_perfil\",{'id':torneig.propietari.id}) }}\">{{ torneig.propietari ? torneig.propietari.nom :'?' }}</a></p>
                    </div>
                </div>
            </div>
        </div>
    <div class=\"is-flex is-justify-content-center\">
         <div>
             <p class=\"has-text-weight-bold is-size-4 has-text-centered\">Rondes:</p>
             <div class=\"is-flex is-justify-content-space-around\">
                 {% for ronda in torneig.rondes %}
                     <p><a href=\"\">Ronda {{ loop.index }}</a></p>
                 {% endfor %}
             </div>
         </div>
    </div>

        <div class=\"is-flex is-justify-content-center m-5\">
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>Ordre</th>
                        <th>Nom Jugador</th>
                        <th>Fide / elo</th>
                        <th>Club/Ciutat</th>
                        <th>Punts Finals</th>
                    </tr>
                </thead>
                <tbody>
                    {% for jugador in torneig.theparticipants %}
                        <tr>
                            <td>{{ loop.index }}</td>
                            <td><a href=\"{{ path(\"jugador_perfil\",{'id':jugador.id}) }}\">{{ jugador.nom }}</a></td>
                            <td>{{ jugador.elo }}</td>
                            <td>{{ jugador.equip }}</td>
                            <td>\"punts finals\"</td>
                        </tr>
                        {% else %}
                            <tr>
                                <td>Algo ha anat malament..</td>
                            </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>

{% endblock %}", "torneig/profile.html.twig", "/app/appclasse/templates/torneig/profile.html.twig");
    }
}
