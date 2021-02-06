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

/* user/new.html.twig */
class __TwigTemplate_1a4b3fd7ca3eb69d78ea421b2ca345a20ffcc63c1f9a568cac3d88ae98dba646 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/new.html.twig", 1);
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

        echo "New User";
        
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
        echo "    <section class=\"container s \">
        <div class=\"columns is-multiline\">
            <div class=\"column is-8 is-offset-2 register\">
                <div class=\"columns\">
                    <div class=\"column left valtext\">
                        <h1 class=\"title is-1\">Registrat com a Arbitre!</h1>
                        <h2 class=\"subtitle colored is-4\">Crea els millors torneigos</h2>
                        <p>'De pocas partidas he aprendido tanto como de la mayoría de mis derrotas. (J. R. Capablanca, ex campeón del mundo)'</p>
                    </div>
                    <div class=\"column right has-text-centered\">
                        <h1 class=\"title is-4\">Registrat ara!</h1>
                        <p class=\"description\">Lorem ipsum dolor, sit amet consectetur adipisicing elit</p>

                        ";
        // line 19
        echo twig_include($this->env, $context, "user/_form.html.twig");
        echo "
                        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 21
            echo "                            <div class=\"notification is-danger\">
                                <button class=\"delete\"></button>
                                ";
            // line 23
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 27
            echo "                            <div class=\"notification is-success\">
                                <button class=\"delete\"></button>
                                ";
            // line 29
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "

                    </div>
                </div>
            </div>

        </div>
    </section>


    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 32,  133 => 29,  129 => 27,  124 => 26,  115 => 23,  111 => 21,  107 => 20,  103 => 19,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New User{% endblock %}

{% block body %}
    <section class=\"container s \">
        <div class=\"columns is-multiline\">
            <div class=\"column is-8 is-offset-2 register\">
                <div class=\"columns\">
                    <div class=\"column left valtext\">
                        <h1 class=\"title is-1\">Registrat com a Arbitre!</h1>
                        <h2 class=\"subtitle colored is-4\">Crea els millors torneigos</h2>
                        <p>'De pocas partidas he aprendido tanto como de la mayoría de mis derrotas. (J. R. Capablanca, ex campeón del mundo)'</p>
                    </div>
                    <div class=\"column right has-text-centered\">
                        <h1 class=\"title is-4\">Registrat ara!</h1>
                        <p class=\"description\">Lorem ipsum dolor, sit amet consectetur adipisicing elit</p>

                        {{ include('user/_form.html.twig') }}
                        {% for message in app.flashes('error')%}
                            <div class=\"notification is-danger\">
                                <button class=\"delete\"></button>
                                {{  message  }}
                            </div>
                        {% endfor %}
                        {% for message in app.flashes('success')%}
                            <div class=\"notification is-success\">
                                <button class=\"delete\"></button>
                                {{  message  }}
                            </div>
                        {% endfor %}


                    </div>
                </div>
            </div>

        </div>
    </section>


    {#<a href=\"{{ path('user_index') }}\">back to list</a>#}
{% endblock %}
", "user/new.html.twig", "/app/appclasse/templates/user/new.html.twig");
    }
}
