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

/* test/index.html.twig */
class __TwigTemplate_22f819aee4ece20065a5b15bfb0a44a2a1f823beb0964aeb88034d18d0d9f335 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "test/index.html.twig", 1);
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

        echo "Hello TestController!";
        
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
        echo "    <div class=\"mainPart\">
        <div class=\"mainInfo\">
            <img src=\"https://wallpaperaccess.com/full/446984.jpg\" alt=\"\">
            <div class=\"info\">
                <h2 class=\"is-family-secondary\">Organitza Torneigos Online!</h2>
                <p>Connecta amb gent <span class=\"has-text-primary\">#WeLoveChess</span></p>
                <button class=\"button is-primary\" style=\"margin-top: 3%; padding: 1.5%; font-weight: bold;letter-spacing: 1.2px\">
                <span class=\"icon\">
                  <i class=\"far fa-user\" style=\"font-weight: bold\"></i>
                </span>
                    <span>Registra't</span>
                </button>
            </div>
        </div>
    </div>
    <div class=\"secondPart is-flex is-justify-content-center\">
        <div class=\"container is-flex is-justify-content-space-around\" style=\"width: 85%; color: #393b44\">
            <div class=\"menu1\">
                <div>
                    <div class=\"infoTorneig\">
                        <p>Busca torneigos</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta ducimus error</p>
                    </div>
                    <div class=\"torneigButton\">
                        <button class=\"button is-primary\" style=\"font-weight: bold;letter-spacing: 1.2px\">
                            <span class=\"icon\">
                              <i class=\"far fa-user\" style=\"font-weight: bold\"></i>
                            </span>
                            <span>Torneigos</span>
                        </button>
                    </div>
                    <div class=\"imatgeTorneig\">

                    </div>
                </div>
            </div>
            <div class=\"menu2\">
                <div>
                    <div class=\"infoTorneig\">
                        <p>Busca torneigos</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta ducimus error</p>
                    </div>
                    <div class=\"torneigButton\">
                        <button class=\"button is-primary\" style=\"font-weight: bold;letter-spacing: 1.2px\">
                            <span class=\"icon\">
                              <i class=\"far fa-user\" style=\"font-weight: bold\"></i>
                            </span>
                            <span>Torneigos</span>
                        </button>
                    </div>
                    <div class=\"imatgeTorneig\">
                        <img src=\"trophy.png\" alt=\"\"  width=\"50px\" height=\"50px\">
                    </div>
                </div>
            </div>
            <div class=\"menu3\">
                <div>
                    <div class=\"infoTorneig\">
                        <p>Busca àrbitres</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta ducimus error</p>
                    </div>
                    <div class=\"torneigButton\">
                        <button class=\"button is-primary\" style=\"font-weight: bold;letter-spacing: 1.2px\">
                            <span class=\"icon\">
                              <i class=\"far fa-user\" style=\"font-weight: bold\"></i>
                            </span>
                            <span>Àrbitres</span>
                        </button>
                    </div>
                    <div class=\"imatgeTorneig\">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>

     .secondPart{
         padding-bottom: 5%;
     }

        .infoTorneig p:first-child
        {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .container > div
        {

            width: 30%;
            padding: 1%;
            background-color: #161b22;
            margin: 1%;
            border-radius: 2%;
        }
        .mainPart
        {
            margin:auto;
            width: 100%;
            text-align: center;
            overflow: hidden;
        }

        .secondPart
        {
            background-color: #030303;
        }

        .mainInfo
        {
            position: relative;
            overflow: hidden;
            background: transparent;
        }

        .mainInfo img
        {
            width: 100%;
        }

        .info
        {
            position: absolute;
            top: 10%;
            width: 100%;
            text-align: center;
        }

        h2
        {
            letter-spacing: 2px;
            color: black;
            text-align: center;
            font-size: 80px;
        }

        .info p
        {
            color: rgba(0,0,0,0.8);
            font-size: 30px;
            text-align: center;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "test/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello TestController!{% endblock %}

{% block body %}
    <div class=\"mainPart\">
        <div class=\"mainInfo\">
            <img src=\"https://wallpaperaccess.com/full/446984.jpg\" alt=\"\">
            <div class=\"info\">
                <h2 class=\"is-family-secondary\">Organitza Torneigos Online!</h2>
                <p>Connecta amb gent <span class=\"has-text-primary\">#WeLoveChess</span></p>
                <button class=\"button is-primary\" style=\"margin-top: 3%; padding: 1.5%; font-weight: bold;letter-spacing: 1.2px\">
                <span class=\"icon\">
                  <i class=\"far fa-user\" style=\"font-weight: bold\"></i>
                </span>
                    <span>Registra't</span>
                </button>
            </div>
        </div>
    </div>
    <div class=\"secondPart is-flex is-justify-content-center\">
        <div class=\"container is-flex is-justify-content-space-around\" style=\"width: 85%; color: #393b44\">
            <div class=\"menu1\">
                <div>
                    <div class=\"infoTorneig\">
                        <p>Busca torneigos</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta ducimus error</p>
                    </div>
                    <div class=\"torneigButton\">
                        <button class=\"button is-primary\" style=\"font-weight: bold;letter-spacing: 1.2px\">
                            <span class=\"icon\">
                              <i class=\"far fa-user\" style=\"font-weight: bold\"></i>
                            </span>
                            <span>Torneigos</span>
                        </button>
                    </div>
                    <div class=\"imatgeTorneig\">

                    </div>
                </div>
            </div>
            <div class=\"menu2\">
                <div>
                    <div class=\"infoTorneig\">
                        <p>Busca torneigos</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta ducimus error</p>
                    </div>
                    <div class=\"torneigButton\">
                        <button class=\"button is-primary\" style=\"font-weight: bold;letter-spacing: 1.2px\">
                            <span class=\"icon\">
                              <i class=\"far fa-user\" style=\"font-weight: bold\"></i>
                            </span>
                            <span>Torneigos</span>
                        </button>
                    </div>
                    <div class=\"imatgeTorneig\">
                        <img src=\"trophy.png\" alt=\"\"  width=\"50px\" height=\"50px\">
                    </div>
                </div>
            </div>
            <div class=\"menu3\">
                <div>
                    <div class=\"infoTorneig\">
                        <p>Busca àrbitres</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta ducimus error</p>
                    </div>
                    <div class=\"torneigButton\">
                        <button class=\"button is-primary\" style=\"font-weight: bold;letter-spacing: 1.2px\">
                            <span class=\"icon\">
                              <i class=\"far fa-user\" style=\"font-weight: bold\"></i>
                            </span>
                            <span>Àrbitres</span>
                        </button>
                    </div>
                    <div class=\"imatgeTorneig\">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>

     .secondPart{
         padding-bottom: 5%;
     }

        .infoTorneig p:first-child
        {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .container > div
        {

            width: 30%;
            padding: 1%;
            background-color: #161b22;
            margin: 1%;
            border-radius: 2%;
        }
        .mainPart
        {
            margin:auto;
            width: 100%;
            text-align: center;
            overflow: hidden;
        }

        .secondPart
        {
            background-color: #030303;
        }

        .mainInfo
        {
            position: relative;
            overflow: hidden;
            background: transparent;
        }

        .mainInfo img
        {
            width: 100%;
        }

        .info
        {
            position: absolute;
            top: 10%;
            width: 100%;
            text-align: center;
        }

        h2
        {
            letter-spacing: 2px;
            color: black;
            text-align: center;
            font-size: 80px;
        }

        .info p
        {
            color: rgba(0,0,0,0.8);
            font-size: 30px;
            text-align: center;
        }
    </style>
{% endblock %}
", "test/index.html.twig", "/app/appclasse/templates/test/index.html.twig");
    }
}
