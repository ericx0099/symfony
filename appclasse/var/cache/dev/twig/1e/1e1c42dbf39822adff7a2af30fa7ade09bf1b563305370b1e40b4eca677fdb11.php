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

/* security/login.html.twig */
class __TwigTemplate_b57dd24c5031b09b1eb066bd99e227c6e3c588f082e130997724ba8326065cfe extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        echo "Log in!";
        
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
    <section class=\"container s \">
        <div class=\"columns is-multiline\">
            <div class=\"column is-8 is-offset-2 register\">
                <div class=\"columns\">

                    <div class=\"column right has-text-centered\">
                        <h1 class=\"title is-4\">Registrat ara!</h1>
                        <p class=\"description\">Lorem ipsum dolor, sit amet consectetur adipisicing elit</p>

                        <form method=\"post\" class=\"box\">
                            ";
        // line 17
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 17, $this->source); })())) {
            // line 18
            echo "                                ... ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 18, $this->source); })()), "messageKey", [], "any", false, false, false, 18), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 18, $this->source); })()), "messageData", [], "any", false, false, false, 18), "security"), "html", null, true);
            echo " ...
                            ";
        }
        // line 20
        echo "
                            ";
        // line 21
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21)) {
            // line 22
            echo "                                <div class=\"mb-3\">
                                    You are logged in as ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "username", [], "any", false, false, false, 23), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                                </div>
                            ";
        }
        // line 26
        echo "                            <h2>";
        echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "</h2>
                            <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
                            <label for=\"inputEmail\">Email</label>
                            <input type=\"email\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus>
                            <label for=\"inputPassword\">Password</label>
                            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>

                            <input type=\"hidden\" name=\"_csrf_token\"
                                   value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                            >

                            ";
        // line 47
        echo "
                            <button class=\"btn btn-lg btn-primary\" type=\"submit\">
                                Sign in
                            </button>
                        </form>


                    </div>
                    <div class=\"column left valtext\">
                        <h1 class=\"title is-1\">LOGIN</h1>
                        <h2 class=\"subtitle colored is-4\">La millor pagina per al control de Torneigos!</h2>
                        <p>'De pocas partidas he aprendido tanto como de la mayoría de mis derrotas. (J. R. Capablanca, ex campeón del mundo)'</p>
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
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 47,  140 => 34,  132 => 29,  125 => 26,  117 => 23,  114 => 22,  112 => 21,  109 => 20,  103 => 18,  101 => 17,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log in!{% endblock %}

{% block body %}

    <section class=\"container s \">
        <div class=\"columns is-multiline\">
            <div class=\"column is-8 is-offset-2 register\">
                <div class=\"columns\">

                    <div class=\"column right has-text-centered\">
                        <h1 class=\"title is-4\">Registrat ara!</h1>
                        <p class=\"description\">Lorem ipsum dolor, sit amet consectetur adipisicing elit</p>

                        <form method=\"post\" class=\"box\">
                            {% if error %}
                                ... {{ error.messageKey|trans(error.messageData, 'security') }} ...
                            {% endif %}

                            {% if app.user %}
                                <div class=\"mb-3\">
                                    You are logged in as {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
                                </div>
                            {% endif %}
                            <h2>{{ error }}</h2>
                            <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
                            <label for=\"inputEmail\">Email</label>
                            <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus>
                            <label for=\"inputPassword\">Password</label>
                            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>

                            <input type=\"hidden\" name=\"_csrf_token\"
                                   value=\"{{ csrf_token('authenticate') }}\"
                            >

                            {#
                            Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
                            See https://symfony.com/doc/current/security/remember_me.html

                            <div class=\"checkbox mb-3\">
                                <label>
                                    <input type=\"checkbox\" name=\"_remember_me\"> Remember me
                                </label>
                            </div>
                            #}

                            <button class=\"btn btn-lg btn-primary\" type=\"submit\">
                                Sign in
                            </button>
                        </form>


                    </div>
                    <div class=\"column left valtext\">
                        <h1 class=\"title is-1\">LOGIN</h1>
                        <h2 class=\"subtitle colored is-4\">La millor pagina per al control de Torneigos!</h2>
                        <p>'De pocas partidas he aprendido tanto como de la mayoría de mis derrotas. (J. R. Capablanca, ex campeón del mundo)'</p>
                    </div>
                </div>
            </div>

        </div>
    </section>


{% endblock %}
", "security/login.html.twig", "/app/appclasse/templates/security/login.html.twig");
    }
}
