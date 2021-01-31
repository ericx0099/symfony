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

/* torneig/edit.html.twig */
class __TwigTemplate_3543808ea99c4e2c265d2070a6696a0b4e2b8ff9a609668b3cdfbc5e0fc3ee55 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "torneig/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "torneig/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "torneig/edit.html.twig", 1);
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

        echo "Edit Torneig";
        
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
        echo "    <style>
        .slider {
            margin-top: 20px;
            -webkit-appearance: none;
            width: 100%;
            height: 25px;
            background: #d3d3d3;
            outline: none;
            opacity: 0.7;
            -webkit-transition: .2s;
            transition: opacity .2s;
        }

        .slider:hover {
            opacity: 1;
        }

        .slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 25px;
            height: 25px;
            background: #4CAF50;
            cursor: pointer;
        }

        .slider::-moz-range-thumb {
            width: 25px;
            height: 25px;
            background: #4CAF50;
            cursor: pointer;
        }
    </style>
    <link rel=\"stylesheet\" href=\"../../styles/css/new.torneig.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 41
        echo "    <section class=\"container s \">
        <div class=\"columns is-multiline\">
            <div class=\"column is-8 is-offset-2 register\">
                ";
        // line 44
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 44, $this->source); })()), "nom", [], "any", false, false, false, 44)) {
            // line 45
            echo "                    <div class=\"is-flex is-justify-content-space-between\" style=\"width: 100%\">
                        <form method=\"post\" action=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("torneig_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48))), "html", null, true);
            echo "\">
                            <button class=\"button is-danger is-outlined\">Cancelar</button>
                        </form>
                       ";
            // line 52
            echo "                    </div>
                ";
        }
        // line 54
        echo "                <div class=\"columns\">
                    <div class=\"column right has-text-centered\">

                        <h1>Edit Torneig</h1>

                        ";
        // line 59
        echo twig_include($this->env, $context, "torneig/_form.html.twig", ["button_label" => "Update"]);
        echo "

                        ";
        // line 61
        if (twig_get_attribute($this->env, $this->source, (isset($context["torneig"]) || array_key_exists("torneig", $context) ? $context["torneig"] : (function () { throw new RuntimeError('Variable "torneig" does not exist.', 61, $this->source); })()), "nom", [], "any", false, false, false, 61)) {
            // line 62
            echo "                            <button class=\"button is-block is-primary is-fullwidth is-medium mt-5\">";
            echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 62, $this->source); })()), "Save")) : ("Save")), "html", null, true);
            echo "</button>
                            <a href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("torneig_index");
            echo "\">back to list</a>
                            ";
            // line 64
            echo twig_include($this->env, $context, "torneig/_delete_form.html.twig");
            echo "
                        ";
        }
        // line 66
        echo "
                    </div>



                </div>
            </div>
        </div>
    </section>
    <script>
        var slider = document.getElementById(\"torneig_type2_NumRondes\");
        var output = document.getElementById(\"demo\");
        output.innerHTML = slider.value;
        slider.oninput = function() {
            output.innerHTML = slider.value;
        }
        let label = document.getElementsByClassName(\"required\").item().valueOf(\"EL numero de rondes és:\");
        let span = document.createElement(\"span\");
        span.id=\"demo\";
        label.appendChild(span);
    </script>
    <script src=\"../../styles/js/inputSlide.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "torneig/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 66,  191 => 64,  187 => 63,  182 => 62,  180 => 61,  175 => 59,  168 => 54,  164 => 52,  158 => 48,  153 => 46,  150 => 45,  148 => 44,  143 => 41,  133 => 40,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit Torneig{% endblock %}
{% block style %}
    <style>
        .slider {
            margin-top: 20px;
            -webkit-appearance: none;
            width: 100%;
            height: 25px;
            background: #d3d3d3;
            outline: none;
            opacity: 0.7;
            -webkit-transition: .2s;
            transition: opacity .2s;
        }

        .slider:hover {
            opacity: 1;
        }

        .slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 25px;
            height: 25px;
            background: #4CAF50;
            cursor: pointer;
        }

        .slider::-moz-range-thumb {
            width: 25px;
            height: 25px;
            background: #4CAF50;
            cursor: pointer;
        }
    </style>
    <link rel=\"stylesheet\" href=\"../../styles/css/new.torneig.css\">
{%  endblock %}
{% block body %}
    <section class=\"container s \">
        <div class=\"columns is-multiline\">
            <div class=\"column is-8 is-offset-2 register\">
                {% if not torneig.nom %}
                    <div class=\"is-flex is-justify-content-space-between\" style=\"width: 100%\">
                        <form method=\"post\" action=\"{{ path('torneig_delete', {'id': torneig.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ torneig.id) }}\">
                            <button class=\"button is-danger is-outlined\">Cancelar</button>
                        </form>
                       {# <a class=\"button is-success is-outlined\" href=\"{{ path('torneig_index', {'id': torneig.id}) }}\">Continuar</a>#}
                    </div>
                {% endif %}
                <div class=\"columns\">
                    <div class=\"column right has-text-centered\">

                        <h1>Edit Torneig</h1>

                        {{ include('torneig/_form.html.twig', {'button_label': 'Update'}) }}

                        {% if torneig.nom %}
                            <button class=\"button is-block is-primary is-fullwidth is-medium mt-5\">{{ button_label|default('Save') }}</button>
                            <a href=\"{{ path('torneig_index') }}\">back to list</a>
                            {{ include('torneig/_delete_form.html.twig') }}
                        {% endif %}

                    </div>



                </div>
            </div>
        </div>
    </section>
    <script>
        var slider = document.getElementById(\"torneig_type2_NumRondes\");
        var output = document.getElementById(\"demo\");
        output.innerHTML = slider.value;
        slider.oninput = function() {
            output.innerHTML = slider.value;
        }
        let label = document.getElementsByClassName(\"required\").item().valueOf(\"EL numero de rondes és:\");
        let span = document.createElement(\"span\");
        span.id=\"demo\";
        label.appendChild(span);
    </script>
    <script src=\"../../styles/js/inputSlide.js\"></script>
{% endblock %}

", "torneig/edit.html.twig", "/app/appclasse/templates/torneig/edit.html.twig");
    }
}
