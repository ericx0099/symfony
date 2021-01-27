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
class __TwigTemplate_b4074ef67888d687de142f5318368306073206a57a66c99acea8b00128e1e619 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        $this->displayBlock('body', $context, $blocks);
        // line 78
        echo "<script type=\"application/javascript\">
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 75
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 76
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  237 => 76,  227 => 75,  119 => 78,  117 => 75,  44 => 1,);
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
{% block body %}

{% endblock %}
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
