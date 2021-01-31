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

/* jugador/profile.html.twig */
class __TwigTemplate_7a91f6718893b4a646808c129c9c1b5fd72ba91fa4b2f29f5c778df3dd7c7e99 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jugador/profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jugador/profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "jugador/profile.html.twig", 1);
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

        echo "Jugador";
        
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
        echo "    <div class=\"all\">
        <h1 class=\"has-text-weight-bold is-size-2\">Perfil de <span class=\"has-text-primary\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["jugador"]) || array_key_exists("jugador", $context) ? $context["jugador"] : (function () { throw new RuntimeError('Variable "jugador" does not exist.', 7, $this->source); })()), "nom", [], "any", false, false, false, 7), "html", null, true);
        echo "</span></h1>

        <div>
            <table class=\"table\">
                <tbody>
                    <tr>
                        <th>Elo(Fide)</th>
                        <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["jugador"]) || array_key_exists("jugador", $context) ? $context["jugador"] : (function () { throw new RuntimeError('Variable "jugador" does not exist.', 14, $this->source); })()), "elo", [], "any", false, false, false, 14), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Nom</th>
                        <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["jugador"]) || array_key_exists("jugador", $context) ? $context["jugador"] : (function () { throw new RuntimeError('Variable "jugador" does not exist.', 18, $this->source); })()), "nom", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Pais</th>
                        <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["jugador"]) || array_key_exists("jugador", $context) ? $context["jugador"] : (function () { throw new RuntimeError('Variable "jugador" does not exist.', 22, $this->source); })()), "pais", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Equip</th>
                        <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["jugador"]) || array_key_exists("jugador", $context) ? $context["jugador"] : (function () { throw new RuntimeError('Variable "jugador" does not exist.', 26, $this->source); })()), "equip", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>DataNaixament</th>
                        <td>";
        // line 30
        ((twig_get_attribute($this->env, $this->source, (isset($context["jugador"]) || array_key_exists("jugador", $context) ? $context["jugador"] : (function () { throw new RuntimeError('Variable "jugador" does not exist.', 30, $this->source); })()), "dataNaixament", [], "any", false, false, false, 30)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["jugador"]) || array_key_exists("jugador", $context) ? $context["jugador"] : (function () { throw new RuntimeError('Variable "jugador" does not exist.', 30, $this->source); })()), "dataNaixament", [], "any", false, false, false, 30), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
                    </tr>
                    <tr>
                        <th>CodiFide</th>
                        <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["jugador"]) || array_key_exists("jugador", $context) ? $context["jugador"] : (function () { throw new RuntimeError('Variable "jugador" does not exist.', 34, $this->source); })()), "codiFide", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
                    </tr>
                </tbody>
            </table>

            <div>

              <p class=\"has-text-weight-bold is-size-4\">Ha participat en:</p>
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th>Num.</th>
                        <th>Torneig</th>
                        <th>Data</th>
                        <th>Punts Finals</th>
                    </tr>
                    </thead>
                    ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["torneigosParticipat"]) || array_key_exists("torneigosParticipat", $context) ? $context["torneigosParticipat"] : (function () { throw new RuntimeError('Variable "torneigosParticipat" does not exist.', 51, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["torneig"]) {
            // line 52
            echo "                        <tbody>
                        <tr>
                            <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                            <td><a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("torneig_perfil", ["id" => twig_get_attribute($this->env, $this->source, $context["torneig"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\">";
            ((twig_get_attribute($this->env, $this->source, $context["torneig"], "nom", [], "any", false, false, false, 55)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["torneig"], "nom", [], "any", false, false, false, 55), "html", null, true))) : (print ("?")));
            echo "</a></td>
                            <td>";
            // line 56
            ((twig_get_attribute($this->env, $this->source, $context["torneig"], "data", [], "any", false, false, false, 56)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["torneig"], "data", [], "any", false, false, false, 56), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                            <td>\"puntsfinals\"</td>
                        </tr>
                        </tbody>
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
            // line 61
            echo "                            <p>No ha participat en cap torneig :(</p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['torneig'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                </table>
            </div>
        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jugador/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 63,  206 => 61,  188 => 56,  182 => 55,  178 => 54,  174 => 52,  156 => 51,  136 => 34,  129 => 30,  122 => 26,  115 => 22,  108 => 18,  101 => 14,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Jugador{% endblock %}

{% block body %}
    <div class=\"all\">
        <h1 class=\"has-text-weight-bold is-size-2\">Perfil de <span class=\"has-text-primary\">{{ jugador.nom }}</span></h1>

        <div>
            <table class=\"table\">
                <tbody>
                    <tr>
                        <th>Elo(Fide)</th>
                        <td>{{ jugador.elo }}</td>
                    </tr>
                    <tr>
                        <th>Nom</th>
                        <td>{{ jugador.nom }}</td>
                    </tr>
                    <tr>
                        <th>Pais</th>
                        <td>{{ jugador.pais }}</td>
                    </tr>
                    <tr>
                        <th>Equip</th>
                        <td>{{ jugador.equip }}</td>
                    </tr>
                    <tr>
                        <th>DataNaixament</th>
                        <td>{{ jugador.dataNaixament ? jugador.dataNaixament|date('Y-m-d') : '' }}</td>
                    </tr>
                    <tr>
                        <th>CodiFide</th>
                        <td>{{ jugador.codiFide }}</td>
                    </tr>
                </tbody>
            </table>

            <div>

              <p class=\"has-text-weight-bold is-size-4\">Ha participat en:</p>
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th>Num.</th>
                        <th>Torneig</th>
                        <th>Data</th>
                        <th>Punts Finals</th>
                    </tr>
                    </thead>
                    {% for torneig in torneigosParticipat %}
                        <tbody>
                        <tr>
                            <td>{{ loop.index }}</td>
                            <td><a href=\"{{ path('torneig_perfil',{'id':torneig.id}) }}\">{{ torneig.nom ? torneig.nom : '?'}}</a></td>
                            <td>{{ torneig.data ? torneig.data|date('Y-m-d') : '' }}</td>
                            <td>\"puntsfinals\"</td>
                        </tr>
                        </tbody>
                        {% else %}
                            <p>No ha participat en cap torneig :(</p>
                    {% endfor %}
                </table>
            </div>
        </div>
    </div>


{% endblock %}
", "jugador/profile.html.twig", "/app/appclasse/templates/jugador/profile.html.twig");
    }
}
