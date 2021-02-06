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

/* user/profile.html.twig */
class __TwigTemplate_49c7103fbb3ce40de18882687cd885760f8f09c4cb3b28e1f9495b86250edfc8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/profile.html.twig", 1);
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

        echo "User";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 6
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"../../styles/css/table-style.css\">
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
    <div class=\"all\">
        <div class=\"background\" style=\"width: 100%; margin-top: 1%; background-color: #e0e0e0\">
            <h1 class=\"has-text-weight-bold is-size-2\" style=\"text-align: center;\">Informació Àrbitre</h1>
            <figure class=\"image is-128x128\" style=\"margin-left: auto; margin-right: auto; margin-top: 2%\">
                <img class=\"is-rounded\" src=\"https://pngimage.net/wp-content/uploads/2018/06/no-photo-avatar-png-6.png\">
            </figure>
            <div class=\"info\" style=\"text-align: center; padding-bottom: 70px\">
                <p class=\"heading is-size-5\" style=\"margin-top: 2%\">Nom: ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "nom", [], "any", false, false, false, 17), "html", null, true);
        echo "</p>
                <p class=\"heading is-size-5\" style=\"margin-top: 1%\">Email: ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "email", [], "any", false, false, false, 18), "html", null, true);
        echo "</p>
            </div>

        </div>
        <h2 class=\"has-text-weight-bold is-size-4\" style=\"margin-top: 3%; text-align: center\">Ha Organitzat <span class=\"has-text-primary\">";
        // line 22
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "torneigs", [], "any", false, false, false, 22)), "html", null, true);
        echo "</span> torneigos</h2>
        <table>
            <thead>
            <tr>
                <th>Num.</th>
                <th>Torneig</th>
                <th>Data</th>
            </tr>
            </thead>
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 31, $this->source); })()), "torneigs", [], "any", false, false, false, 31));
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
            // line 32
            echo "                <tbody>
                <tr>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("torneig_perfil", ["id" => twig_get_attribute($this->env, $this->source, $context["torneig"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\">";
            ((twig_get_attribute($this->env, $this->source, $context["torneig"], "nom", [], "any", false, false, false, 35)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["torneig"], "nom", [], "any", false, false, false, 35), "html", null, true))) : (print ("?")));
            echo "</a></td>
                    <td>";
            // line 36
            ((twig_get_attribute($this->env, $this->source, $context["torneig"], "data", [], "any", false, false, false, 36)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["torneig"], "data", [], "any", false, false, false, 36), "Y-m-d"), "html", null, true))) : (print ("?")));
            echo "</td>
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
            // line 40
            echo "                <p>No ha Organitzat en cap torneig :(</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['torneig'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </table>
    </div>

    <style>
        .all{
            padding :2%;
        }

        h1:first-letter
        {
            text-transform: uppercase;
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
            margin-left: auto;
            margin-right: auto;
            margin-top: 3%;
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
        return "user/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 42,  192 => 40,  175 => 36,  169 => 35,  165 => 34,  161 => 32,  143 => 31,  131 => 22,  124 => 18,  120 => 17,  110 => 9,  100 => 8,  89 => 6,  79 => 5,  60 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}User{% endblock %}
{% block style %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../../styles/css/table-style.css\">
{% endblock %}
{% block body %}

    <div class=\"all\">
        <div class=\"background\" style=\"width: 100%; margin-top: 1%; background-color: #e0e0e0\">
            <h1 class=\"has-text-weight-bold is-size-2\" style=\"text-align: center;\">Informació Àrbitre</h1>
            <figure class=\"image is-128x128\" style=\"margin-left: auto; margin-right: auto; margin-top: 2%\">
                <img class=\"is-rounded\" src=\"https://pngimage.net/wp-content/uploads/2018/06/no-photo-avatar-png-6.png\">
            </figure>
            <div class=\"info\" style=\"text-align: center; padding-bottom: 70px\">
                <p class=\"heading is-size-5\" style=\"margin-top: 2%\">Nom: {{ user.nom }}</p>
                <p class=\"heading is-size-5\" style=\"margin-top: 1%\">Email: {{ user.email}}</p>
            </div>

        </div>
        <h2 class=\"has-text-weight-bold is-size-4\" style=\"margin-top: 3%; text-align: center\">Ha Organitzat <span class=\"has-text-primary\">{{ user.torneigs|length }}</span> torneigos</h2>
        <table>
            <thead>
            <tr>
                <th>Num.</th>
                <th>Torneig</th>
                <th>Data</th>
            </tr>
            </thead>
            {% for torneig in user.torneigs %}
                <tbody>
                <tr>
                    <td>{{ loop.index }}</td>
                    <td><a href=\"{{ path('torneig_perfil',{ 'id':torneig.id }) }}\">{{ torneig.nom ? torneig.nom : '?'}}</a></td>
                    <td>{{ torneig.data ? torneig.data|date('Y-m-d') : '?' }}</td>
                </tr>
                </tbody>
            {% else %}
                <p>No ha Organitzat en cap torneig :(</p>
            {% endfor %}
        </table>
    </div>

    <style>
        .all{
            padding :2%;
        }

        h1:first-letter
        {
            text-transform: uppercase;
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
            margin-left: auto;
            margin-right: auto;
            margin-top: 3%;
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

{% endblock %}", "user/profile.html.twig", "/app/appclasse/templates/user/profile.html.twig");
    }
}
