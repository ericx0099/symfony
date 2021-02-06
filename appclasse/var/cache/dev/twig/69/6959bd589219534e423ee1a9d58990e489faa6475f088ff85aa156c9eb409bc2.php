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
class __TwigTemplate_ab808f6f431abcdd36a7cab48ff6cc630a14c5e2b49d969b6d24194e07842145 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'style' => [$this, 'block_style'],
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
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"../styles/css/regArbit-style.css\">
    <link rel=\"stylesheet\" href=\"//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css\">
    <script src=\"//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    ";
        // line 13
        $this->displayBlock('style', $context, $blocks);
        // line 16
        echo "</head>
<body>

<nav class=\"navbar is-primary\" role=\"navigation\" aria-label=\"main navigation\">
    <div class=\"navbar-brand\">
        <a class=\"navbar-item\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inici");
        echo "\">
            <img src=\"https://www.shareicon.net/data/128x128/2015/10/31/664739_knight_512x512.png\">
        </a>

        <a role=\"button\" class=\"navbar-burger\" aria-label=\"menu\" aria-expanded=\"false\" data-target=\"navbarBasicExample\">
            <span aria-hidden=\"true\"></span>
            <span aria-hidden=\"true\"></span>
            <span aria-hidden=\"true\"></span>
        </a>
    </div>

    <div id=\"navbarBasicExample\" class=\"navbar-menu\">
        <div class=\"navbar-start\">
            <a class=\"navbar-item\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inici");
        echo "\">
                Home
            </a>
            ";
        // line 37
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 38
            echo "                <a class=\"navbar-item is-selected\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_torneigos");
            echo "\">
                    Mis Torneos
                </a>
            ";
        } else {
            // line 42
            echo "                <a class=\"navbar-item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("torneig_all_public");
            echo "\">
                    Torneigos
                </a>
            ";
        }
        // line 46
        echo "

            <div class=\"navbar-item has-dropdown is-hoverable\">
                <a class=\"navbar-link\">
                    Més..
                </a>

                <div class=\"navbar-dropdown\">
                    <a class=\"navbar-item\" href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("torneig_all_public");
        echo "\">
                        Torneigos
                    </a>
                    <a class=\"navbar-item\" href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("arbitres");
        echo "\">
                        Arbitres
                    </a>
                    <a class=\"navbar-item\" href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jugadors");
        echo "\">
                        Jugadors
                    </a>
                </div>
            </div>
        </div>

        ";
        // line 67
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 68
            echo "            <div class=\"navbar-end\">
                <div class=\"navbar-item\">
                    <div class=\"buttons\">
                        <a class=\"button is-primary\" style=\"border: 1px solid white\" href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "user", [], "any", false, false, false, 71), "id", [], "any", false, false, false, 71)]), "html", null, true);
            echo "\">
                            <strong><i class=\"fas fa-user\" ></i> Perfil</strong>
                        </a>
                        <a class=\"button is-danger\" href=\"";
            // line 74
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" >
                            <strong><i class=\"fas fa-sign-out-alt\"></i> Logout</strong>
                        </a>
                    </div>
                </div>
            </div>
        ";
        } else {
            // line 81
            echo "
            <div class=\"navbar-end\">
                <div class=\"navbar-item\">
                    <div class=\"buttons\">
                        <a class=\"button is-primary\" style=\"border: 1px solid white\" href=\"";
            // line 85
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_new");
            echo "\">
                            <strong>Sign up</strong>
                        </a>
                        <a class=\"button is-light\" href=\"";
            // line 88
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">
                            Log in
                        </a>
                    </div>
                </div>
            </div>
        ";
        }
        // line 95
        echo "    </div>
</nav>";
        // line 99
        $this->displayBlock('body', $context, $blocks);
        // line 102
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
<footer>
    <div class=\"footerContent\">
        <div class=\"faBox\">
            <a href=\"#\" class=\"fab fa-twitter\"></a>
            <a href=\"#\" class=\"fab fa-linkedin\"></a>
            <a href=\"#\" class=\"fab fa-instagram\"></a>
            <a href=\"#\" class=\"fab fa-facebook\"></a>
        </div>
        <p>&copy; Torneig</p>
    </div>
</footer>
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

    footer
    {
        margin-top: 60em;
        position: fixed;
        bottom: 0;
        width: 100%;
        background: transparent;
        min-height: 6vh;
    }

    footer p
    {
        color: black;
        bottom: 0;
        margin-top: 5px;
        text-align: center;
    }

    .faBox
    {
        font-size: 40px;
        width: 100%;
        justify-content: space-around;
        text-align: center;
        display: flex;

    }

    .fab,
    .fas {
        color: var(--textLight);
        margin-right: 1rem;
    }
    .valtext{
        vertical-align: center;
    }

    .fab
    {
        color: #00d1b2;
        text-decoration: none;
    }

    .fab:hover
    {
        transform: scale(1.5);
        transition: all ease 500ms;
        cursor: pointer;
    }

</style>
<script>
    document.addEventListener('DOMContentLoaded', () => {

        // Get all \"navbar-burger\" elements
        const \$navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

        // Check if there are any navbar burgers
        if (\$navbarBurgers.length > 0) {

            // Add a click event on each of them
            \$navbarBurgers.forEach( el => {
                el.addEventListener('click', () => {

                    // Get the target from the \"data-target\" attribute
                    const target = el.dataset.target;
                    const \$target = document.getElementById(target);

                    // Toggle the \"is-active\" class on both the \"navbar-burger\" and the \"navbar-menu\"
                    el.classList.toggle('is-active');
                    \$target.classList.toggle('is-active');

                });
            });
        }

    });
</script>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 14
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 99
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 100
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  407 => 100,  397 => 99,  386 => 14,  376 => 13,  190 => 102,  188 => 99,  185 => 95,  175 => 88,  169 => 85,  163 => 81,  153 => 74,  147 => 71,  142 => 68,  140 => 67,  130 => 60,  124 => 57,  118 => 54,  108 => 46,  100 => 42,  92 => 38,  90 => 37,  84 => 34,  68 => 21,  61 => 16,  59 => 13,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Arbitre Registre</title>
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css\">
    <link rel=\"stylesheet\" href=\"../styles/css/regArbit-style.css\">
    <link rel=\"stylesheet\" href=\"//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css\">
    <script src=\"//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    {% block style %}

    {% endblock %}
</head>
<body>

<nav class=\"navbar is-primary\" role=\"navigation\" aria-label=\"main navigation\">
    <div class=\"navbar-brand\">
        <a class=\"navbar-item\" href=\"{{path(\"inici\")}}\">
            <img src=\"https://www.shareicon.net/data/128x128/2015/10/31/664739_knight_512x512.png\">
        </a>

        <a role=\"button\" class=\"navbar-burger\" aria-label=\"menu\" aria-expanded=\"false\" data-target=\"navbarBasicExample\">
            <span aria-hidden=\"true\"></span>
            <span aria-hidden=\"true\"></span>
            <span aria-hidden=\"true\"></span>
        </a>
    </div>

    <div id=\"navbarBasicExample\" class=\"navbar-menu\">
        <div class=\"navbar-start\">
            <a class=\"navbar-item\" href=\"{{ path(\"inici\") }}\">
                Home
            </a>
            {% if is_granted(\"ROLE_USER\") %}
                <a class=\"navbar-item is-selected\" href=\"{{ path(\"user_torneigos\") }}\">
                    Mis Torneos
                </a>
            {% else %}
                <a class=\"navbar-item\" href=\"{{ path(\"torneig_all_public\") }}\">
                    Torneigos
                </a>
            {% endif %}


            <div class=\"navbar-item has-dropdown is-hoverable\">
                <a class=\"navbar-link\">
                    Més..
                </a>

                <div class=\"navbar-dropdown\">
                    <a class=\"navbar-item\" href=\"{{ path(\"torneig_all_public\") }}\">
                        Torneigos
                    </a>
                    <a class=\"navbar-item\" href=\"{{ path(\"arbitres\") }}\">
                        Arbitres
                    </a>
                    <a class=\"navbar-item\" href=\"{{ path(\"jugadors\") }}\">
                        Jugadors
                    </a>
                </div>
            </div>
        </div>

        {% if is_granted(\"ROLE_USER\") %}
            <div class=\"navbar-end\">
                <div class=\"navbar-item\">
                    <div class=\"buttons\">
                        <a class=\"button is-primary\" style=\"border: 1px solid white\" href=\"{{ path('user_edit',{'id': app.user.id})}}\">
                            <strong><i class=\"fas fa-user\" ></i> Perfil</strong>
                        </a>
                        <a class=\"button is-danger\" href=\"{{ path('app_logout') }}\" >
                            <strong><i class=\"fas fa-sign-out-alt\"></i> Logout</strong>
                        </a>
                    </div>
                </div>
            </div>
        {% else %}

            <div class=\"navbar-end\">
                <div class=\"navbar-item\">
                    <div class=\"buttons\">
                        <a class=\"button is-primary\" style=\"border: 1px solid white\" href=\"{{path('user_new')  }}\">
                            <strong>Sign up</strong>
                        </a>
                        <a class=\"button is-light\" href=\"{{path('app_login')  }}\">
                            Log in
                        </a>
                    </div>
                </div>
            </div>
        {% endif %}
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
<footer>
    <div class=\"footerContent\">
        <div class=\"faBox\">
            <a href=\"#\" class=\"fab fa-twitter\"></a>
            <a href=\"#\" class=\"fab fa-linkedin\"></a>
            <a href=\"#\" class=\"fab fa-instagram\"></a>
            <a href=\"#\" class=\"fab fa-facebook\"></a>
        </div>
        <p>&copy; Torneig</p>
    </div>
</footer>
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

    footer
    {
        margin-top: 60em;
        position: fixed;
        bottom: 0;
        width: 100%;
        background: transparent;
        min-height: 6vh;
    }

    footer p
    {
        color: black;
        bottom: 0;
        margin-top: 5px;
        text-align: center;
    }

    .faBox
    {
        font-size: 40px;
        width: 100%;
        justify-content: space-around;
        text-align: center;
        display: flex;

    }

    .fab,
    .fas {
        color: var(--textLight);
        margin-right: 1rem;
    }
    .valtext{
        vertical-align: center;
    }

    .fab
    {
        color: #00d1b2;
        text-decoration: none;
    }

    .fab:hover
    {
        transform: scale(1.5);
        transition: all ease 500ms;
        cursor: pointer;
    }

</style>
<script>
    document.addEventListener('DOMContentLoaded', () => {

        // Get all \"navbar-burger\" elements
        const \$navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

        // Check if there are any navbar burgers
        if (\$navbarBurgers.length > 0) {

            // Add a click event on each of them
            \$navbarBurgers.forEach( el => {
                el.addEventListener('click', () => {

                    // Get the target from the \"data-target\" attribute
                    const target = el.dataset.target;
                    const \$target = document.getElementById(target);

                    // Toggle the \"is-active\" class on both the \"navbar-burger\" and the \"navbar-menu\"
                    el.classList.toggle('is-active');
                    \$target.classList.toggle('is-active');

                });
            });
        }

    });
</script>
</html>", "base.html.twig", "/app/appclasse/templates/base.html.twig");
    }
}
