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

/* user/index.html.twig */
class __TwigTemplate_7ac386ce16cfa26bf6623458f07a1386be4464519e7d4afd55c997a163ecd1f7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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

        echo "User index";
        
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
    <h1 class=\"has-text-weight-bold is-size-2 has-text-centered mt-5\">Administrar Arbitres</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Roles</th>

                <th>Nom</th>
                <th>Dni</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 21, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 22
            echo "            <tr>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            ((twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 25)) ? (print (twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 25)), "html", null, true))) : (print ("")));
            echo "</td>

                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "dni", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
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
        // line 164
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_new");
        echo "\">Create new</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 164,  157 => 39,  148 => 35,  139 => 31,  135 => 30,  130 => 28,  126 => 27,  121 => 25,  117 => 24,  113 => 23,  110 => 22,  105 => 21,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}User index{% endblock %}

{% block body %}

    <h1 class=\"has-text-weight-bold is-size-2 has-text-centered mt-5\">Administrar Arbitres</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Roles</th>

                <th>Nom</th>
                <th>Dni</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                <td>{{ user.id }}</td>
                <td>{{ user.email }}</td>
                <td>{{ user.roles ? user.roles|json_encode : '' }}</td>

                <td>{{ user.nom }}</td>
                <td>{{ user.dni }}</td>
                <td>
                    <a href=\"{{ path('user_show', {'id': user.id}) }}\">show</a>
                    <a href=\"{{ path('user_edit', {'id': user.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
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
    <a href=\"{{ path('user_new') }}\">Create new</a>
{% endblock %}
", "user/index.html.twig", "/app/appclasse/templates/user/index.html.twig");
    }
}
