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

/* base.html.twig */
class __TwigTemplate_f041de86fbc459a988a2f7497329fad113d7d05c11c94f33ef3a1a6eed09cbd4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Arbitre Registre</title>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"../styles/css/regArbit-style.css\">


</head>
<body>
<nav class=\"navbar \" role=\"navigation\" aria-label=\"main navigation\">
    <div class=\"navbar-brand\">
        <a class=\"navbar-item\" href=\"https://bulma.io\">
            <img src=\"https://res.cloudinary.com/teepublic/image/private/s--98tHC0MX--/t_Preview/b_rgb:ffffff,c_lpad,f_jpg,h_630,q_90,w_1200/v1543702206/production/designs/3681922_0.jpg\" width=\"112\" height=\"58\">
        </a>

        <a role=\"button\" class=\"navbar-burger\" aria-label=\"menu\" aria-expanded=\"false\" data-target=\"navbarBasicExample\">
            <span aria-hidden=\"true\"></span>
            <span aria-hidden=\"true\"></span>
            <span aria-hidden=\"true\"></span>
        </a>
    </div>

    <div id=\"navbarBasicExample\" class=\"navbar-menu\">
        <div class=\"navbar-start\">
            <a class=\"navbar-item\">
                Home
            </a>

            <a class=\"navbar-item\">
                Documentation
            </a>

            <div class=\"navbar-item has-dropdown is-hoverable\">
                <a class=\"navbar-link\">
                    More
                </a>

                <div class=\"navbar-dropdown\">
                    <a class=\"navbar-item\">
                        About
                    </a>
                    <a class=\"navbar-item\">
                        Jobs
                    </a>
                    <a class=\"navbar-item\">
                        Contact
                    </a>
                    <hr class=\"navbar-divider\">
                    <a class=\"navbar-item\">
                        Report an issue
                    </a>
                </div>
            </div>
        </div>

        <div class=\"navbar-end\">
            <div class=\"navbar-item\">
                <div class=\"buttons\">
                    <a class=\"button is-primary\">
                        <strong>Sign up</strong>
                    </a>
                    <a class=\"button is-light\">
                        Log in
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>";
        // line 75
        echo "<section class=\"container s \">
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
        // line 87
        $this->displayBlock('body', $context, $blocks);
        // line 105
        echo "
                   ";
        // line 156
        echo "
                </div>
            </div>
        </div>

    </div>
</section>
<script type=\"application/javascript\">
    document.addEventListener('DOMContentLoaded', () => {
        (document.querySelectorAll('.notification .delete') || []).forEach((\$delete) => {
            var \$notification = \$delete.parentNode;

            \$delete.addEventListener('click', () => {
                \$notification.parentNode.removeChild(\$notification);
            });
        });
    });
</script>
</body>
<style>
    :root {
        --brandColor: hsl(166, 67%, 51%);
        --background: rgb(247, 247, 247);
        --textDark: hsla(0, 0%, 0%, 0.66);
        --textLight: hsla(0, 0%, 0%, 0.33);
    }

    body {
        background: var(--background);
        height: 100vh;
        color: var(--textDark);
    }

    .field:not(:last-child) {
        margin-bottom: 1rem;
    }

    .register {
        margin-top: 10rem;
        background: white;
        border-radius: 10px;
    }

    .left,
    .right {
        padding: 4.5rem;
    }

    .left {
        border-right: 5px solid var(--background);
    }

    .left .title {
        font-weight: 800;
        letter-spacing: -2px;
    }

    .left .colored {
        color: var(--brandColor);
        font-weight: 500;
        margin-top: 1rem !important;
        letter-spacing: -1px;
    }

    .left p {
        color: var(--textLight);
        font-size: 1.15rem;
    }

    .right .title {
        font-weight: 800;
        letter-spacing: -1px;
    }

    .right .description {
        margin-top: 1rem;
        margin-bottom: 1rem !important;
        color: var(--textLight);
        font-size: 1.15rem;
    }

    .right small {
        color: var(--textLight);
    }

    input {
        font-size: 1rem;
    }

    input:focus {
        border-color: var(--brandColor) !important;
        box-shadow: 0 0 0 1px var(--brandColor) !important;
    }

    .fab,
    .fas {
        color: var(--textLight);
        margin-right: 1rem;
    }
    .valtext{
        vertical-align: center;
    }

</style>
</body>
</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 87
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 88
        echo "
                        ";
        // line 89
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["post_form"]) || array_key_exists("post_form", $context) ? $context["post_form"] : (function () { throw new RuntimeError('Variable "post_form" does not exist.', 89, $this->source); })()), 'form_start', ["attr" => ["class" => "box"]]);
        echo "
                            ";
        // line 90
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["post_form"]) || array_key_exists("post_form", $context) ? $context["post_form"] : (function () { throw new RuntimeError('Variable "post_form" does not exist.', 90, $this->source); })()), 'form');
        echo "
                        ";
        // line 91
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["post_form"]) || array_key_exists("post_form", $context) ? $context["post_form"] : (function () { throw new RuntimeError('Variable "post_form" does not exist.', 91, $this->source); })()), 'form_end');
        echo "
                        ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 92));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 93
            echo "                            <div class=\"notification is-danger\">
                                <button class=\"delete\"></button>
                                ";
            // line 95
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 98));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 99
            echo "                            <div class=\"notification is-success\">
                                <button class=\"delete\"></button>
                                ";
            // line 101
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  302 => 104,  293 => 101,  289 => 99,  284 => 98,  275 => 95,  271 => 93,  267 => 92,  263 => 91,  259 => 90,  255 => 89,  252 => 88,  245 => 87,  133 => 156,  130 => 105,  128 => 87,  114 => 75,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Arbitre Registre</title>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"../styles/css/regArbit-style.css\">


</head>
<body>
<nav class=\"navbar \" role=\"navigation\" aria-label=\"main navigation\">
    <div class=\"navbar-brand\">
        <a class=\"navbar-item\" href=\"https://bulma.io\">
            <img src=\"https://res.cloudinary.com/teepublic/image/private/s--98tHC0MX--/t_Preview/b_rgb:ffffff,c_lpad,f_jpg,h_630,q_90,w_1200/v1543702206/production/designs/3681922_0.jpg\" width=\"112\" height=\"58\">
        </a>

        <a role=\"button\" class=\"navbar-burger\" aria-label=\"menu\" aria-expanded=\"false\" data-target=\"navbarBasicExample\">
            <span aria-hidden=\"true\"></span>
            <span aria-hidden=\"true\"></span>
            <span aria-hidden=\"true\"></span>
        </a>
    </div>

    <div id=\"navbarBasicExample\" class=\"navbar-menu\">
        <div class=\"navbar-start\">
            <a class=\"navbar-item\">
                Home
            </a>

            <a class=\"navbar-item\">
                Documentation
            </a>

            <div class=\"navbar-item has-dropdown is-hoverable\">
                <a class=\"navbar-link\">
                    More
                </a>

                <div class=\"navbar-dropdown\">
                    <a class=\"navbar-item\">
                        About
                    </a>
                    <a class=\"navbar-item\">
                        Jobs
                    </a>
                    <a class=\"navbar-item\">
                        Contact
                    </a>
                    <hr class=\"navbar-divider\">
                    <a class=\"navbar-item\">
                        Report an issue
                    </a>
                </div>
            </div>
        </div>

        <div class=\"navbar-end\">
            <div class=\"navbar-item\">
                <div class=\"buttons\">
                    <a class=\"button is-primary\">
                        <strong>Sign up</strong>
                    </a>
                    <a class=\"button is-light\">
                        Log in
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>

{#------------------------#}
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
                    {% block body %}

                        {{ form_start(post_form,{'attr':{'class':'box'}}) }}
                            {{ form(post_form) }}
                        {{ form_end(post_form) }}
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
                    {% endblock %}

                   {# {#<form action=\"\" class=\"box \">
                        <div class=\"field \">
                            <label for=\"\" class=\"label\">Nom i Cognoms</label>
                            <div class=\"control has-icons-left\">
                                <input type=\"email\" placeholder=\"Brandy Vaughan\" class=\"input\" required>
                                <span class=\"icon is-small is-left\">
                                   <i class=\"far fa-user\"></i>
                                </span>
                            </div>
                        </div>
                        <div class=\"field \">
                            <label for=\"\" class=\"label\">Email</label>
                            <div class=\"control has-icons-left\">
                                <input type=\"email\" placeholder=\"e.g. bobsmith@gmail.com\" class=\"input\" required>
                                <span class=\"icon is-smustom_post_formall is-left\">
                                     <i class=\"fa fa-envelope\"></i>
                                </span>
                            </div>
                        </div>
                        <div class=\"field\">
                            <label for=\"\" class=\"label\">Password</label>
                            <div class=\"control has-icons-left\">
                                <input type=\"password\" placeholder=\"*******\" class=\"input\" required>
                                <span class=\"icon is-small is-left\">
                                    <i class=\"fa fa-lock\"></i>
                                </span>
                            </div>
                        </div>
                        <div class=\"field\">
                            <label for=\"\" class=\"label\">Confirm Password</label>
                            <div class=\"control has-icons-left\">
                                <input type=\"password\" placeholder=\"*******\" class=\"input\" required>
                                <span class=\"icon is-small is-left\">
                                    <i class=\"fa fa-lock\"></i>
                                </span>
                            </div>
                        </div>
                        <div class=\"field\">
                            <label for=\"\" class=\"label\">Dni</label>
                            <div class=\"control has-icons-left\">
                                <input type=\"password\" placeholder=\"4832453E\" class=\"input\" required>
                                <span class=\"icon is-small is-left\">
                                  <i class=\"far fa-id-card\"></i>
                                </span>
                            </div>
                        </div>
                        <button class=\"button is-block is-primary is-fullwidth is-medium\">Registre</button>
                        <br />
                        <small><em>Lorem ipsum dolor sit amet consectetur.</em></small>
                    </form>#}

                </div>
            </div>
        </div>

    </div>
</section>
<script type=\"application/javascript\">
    document.addEventListener('DOMContentLoaded', () => {
        (document.querySelectorAll('.notification .delete') || []).forEach((\$delete) => {
            var \$notification = \$delete.parentNode;

            \$delete.addEventListener('click', () => {
                \$notification.parentNode.removeChild(\$notification);
            });
        });
    });
</script>
</body>
<style>
    :root {
        --brandColor: hsl(166, 67%, 51%);
        --background: rgb(247, 247, 247);
        --textDark: hsla(0, 0%, 0%, 0.66);
        --textLight: hsla(0, 0%, 0%, 0.33);
    }

    body {
        background: var(--background);
        height: 100vh;
        color: var(--textDark);
    }

    .field:not(:last-child) {
        margin-bottom: 1rem;
    }

    .register {
        margin-top: 10rem;
        background: white;
        border-radius: 10px;
    }

    .left,
    .right {
        padding: 4.5rem;
    }

    .left {
        border-right: 5px solid var(--background);
    }

    .left .title {
        font-weight: 800;
        letter-spacing: -2px;
    }

    .left .colored {
        color: var(--brandColor);
        font-weight: 500;
        margin-top: 1rem !important;
        letter-spacing: -1px;
    }

    .left p {
        color: var(--textLight);
        font-size: 1.15rem;
    }

    .right .title {
        font-weight: 800;
        letter-spacing: -1px;
    }

    .right .description {
        margin-top: 1rem;
        margin-bottom: 1rem !important;
        color: var(--textLight);
        font-size: 1.15rem;
    }

    .right small {
        color: var(--textLight);
    }

    input {
        font-size: 1rem;
    }

    input:focus {
        border-color: var(--brandColor) !important;
        box-shadow: 0 0 0 1px var(--brandColor) !important;
    }

    .fab,
    .fas {
        color: var(--textLight);
        margin-right: 1rem;
    }
    .valtext{
        vertical-align: center;
    }

</style>
</body>
</html>", "base.html.twig", "/app/appclasse/templates/base.html.twig");
    }
}
