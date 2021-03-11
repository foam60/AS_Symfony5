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
class __TwigTemplate_94cc010eaa8465df33225433addad489c37b32b567fb7285f86fdb02379302f0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">

        ";
        // line 6
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "
        ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "        <!--Import Google Icon Font-->
        <link href=\"http://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <!-- Compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
        <!--CSS -->
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Assets/acceuil.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    </head>
    <header>
        <nav>
            <div class=\"nav-wrapper\">
                <a href=\"#\" class=\"brand-logo\">Logo</a>
                <ul id=\"nav\" class=\"right\">
                    <li><a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil</a></li>
                    <li><a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event");
        echo "\">Evenement</a></li>
                    ";
        // line 33
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 34
            echo "                        <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
            echo "\">Mon Compte</a></li>
                    ";
        }
        // line 36
        echo "                    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 37
            echo "                        <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\">Admin</a></li>
                    ";
        }
        // line 39
        echo "                    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 40
            echo "                        <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a></li>
                    ";
        }
        // line 42
        echo "                </ul>
            </div>
        </nav>
    </header>
    <body>
        ";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "    </body>

    <footer class=\"page-footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col l4 m4 s12\">
                    <h5 class=\"white-text text-bold\">Association Sportive Saint-Vincent</h5>
                    <span class=\"grey-text text-lighten-4\">30 Rue de Meaux, 60300 Senlis</span>
                    <h5 class=\"white-text\" style=\"margin-top: 1.5rem\">Association Saint-Vincent</h5>
                    <span class=\"grey-text text-lighten-5\">https://www.lycee-stvincent.fr/</span>
                </div>
                <div class=\"col l4 m3 s12\">
                    <h5 class=\"white-text\">Nous Contacter</h5>
                    <ul>
                        <li class=\"grey-text text-lighten-4\">Tél : 03 66 66 66 66</li>
                        <li class=\"grey-text text-lighten-4\">Fax : 03 44 66 66 66</li>
                        <li class=\"grey-text text-lighten-4\">Email : contacts@lyceestvincent.fr</li>
                        <li class=\"grey-text text-lighten-4\">Web : https://www.asso-sport.lyceestvincent.fr/</li>
                    </ul>
                </div>
                <div class=\"col l2 m3 s12\">
                    <h5 class=\"white-text\">Accès rapide</h5>
                    <ul>
                        <li class=\"grey-text text-lighten-4\">> Acceuil</li>
                        <li class=\"grey-text text-lighten-4\">> Actualités</li>
                        <li class=\"grey-text text-lighten-4\">> Evénements</li>
                        <li class=\"grey-text text-lighten-4\">> Contact</li>
                    </ul>
                </div>
                <div class=\"col l2 m2 s12\">
                    <h5 class=\"white-text\">Suivez-nous</h5>
                    <img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Assets/Images/facebook.png"), "html", null, true);
        echo "\" alt=\"facebool_svg\" height=\"35px\" width=\"35px\">
                    <img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Assets/Images/twitter.png"), "html", null, true);
        echo "\" alt=\"twitter_svg\" height=\"35px\" width=\"35px\" style=\"margin-left: 0.5rem\">
                </div>
            </div>
        </div>
    </footer>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "            <!--Import jQuery before materialize.js-->
            <script src=\"https://code.jquery.com/jquery-3.6.0.js\" integrity=\"sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=\" crossorigin=\"anonymous\"></script>
            <!-- Compiled and minified JavaScript -->
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/javascript.util/0.12.12/javascript.util.min.js\" integrity=\"sha512-oHBLR38hkpOtf4dW75gdfO7VhEKg2fsitvHZYHZjObc4BPKou2PGenyxA5ZJ8CCqWytBx5wpiSqwVEBy84b7tw==\" crossorigin=\"anonymous\"></script>
            ";
        // line 12
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "
            ";
        // line 17
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 47
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 48
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
        return array (  234 => 48,  224 => 47,  214 => 17,  211 => 15,  201 => 14,  191 => 12,  185 => 7,  175 => 6,  158 => 82,  154 => 81,  121 => 50,  119 => 47,  112 => 42,  106 => 40,  103 => 39,  97 => 37,  94 => 36,  88 => 34,  86 => 33,  82 => 32,  78 => 31,  68 => 24,  60 => 18,  58 => 14,  55 => 13,  53 => 6,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">

        {% block javascripts %}
            <!--Import jQuery before materialize.js-->
            <script src=\"https://code.jquery.com/jquery-3.6.0.js\" integrity=\"sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=\" crossorigin=\"anonymous\"></script>
            <!-- Compiled and minified JavaScript -->
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/javascript.util/0.12.12/javascript.util.min.js\" integrity=\"sha512-oHBLR38hkpOtf4dW75gdfO7VhEKg2fsitvHZYHZjObc4BPKou2PGenyxA5ZJ8CCqWytBx5wpiSqwVEBy84b7tw==\" crossorigin=\"anonymous\"></script>
            {#{{ encore_entry_script_tags('app') }}#}
        {% endblock %}

        {% block stylesheets %}

            {#{{ encore_entry_link_tags('app') }}#}
        {% endblock %}
        <!--Import Google Icon Font-->
        <link href=\"http://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <!-- Compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
        <!--CSS -->
        <link href=\"{{ asset(\"Assets/acceuil.css\") }}\" rel=\"stylesheet\">
    </head>
    <header>
        <nav>
            <div class=\"nav-wrapper\">
                <a href=\"#\" class=\"brand-logo\">Logo</a>
                <ul id=\"nav\" class=\"right\">
                    <li><a href=\"{{ path(\"home\") }}\">Accueil</a></li>
                    <li><a href=\"{{ path(\"event\") }}\">Evenement</a></li>
                    {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
                        <li><a href=\"{{ path(\"account\") }}\">Mon Compte</a></li>
                    {%endif%}
                    {% if is_granted('ROLE_ADMIN') %}
                        <li><a href=\"{{ path(\"admin\") }}\">Admin</a></li>
                    {%endif%}
                    {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
                        <li><a href=\"{{ path(\"app_logout\") }}\">Déconnexion</a></li>
                    {%endif%}
                </ul>
            </div>
        </nav>
    </header>
    <body>
        {% block body %}

        {% endblock %}
    </body>

    <footer class=\"page-footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col l4 m4 s12\">
                    <h5 class=\"white-text text-bold\">Association Sportive Saint-Vincent</h5>
                    <span class=\"grey-text text-lighten-4\">30 Rue de Meaux, 60300 Senlis</span>
                    <h5 class=\"white-text\" style=\"margin-top: 1.5rem\">Association Saint-Vincent</h5>
                    <span class=\"grey-text text-lighten-5\">https://www.lycee-stvincent.fr/</span>
                </div>
                <div class=\"col l4 m3 s12\">
                    <h5 class=\"white-text\">Nous Contacter</h5>
                    <ul>
                        <li class=\"grey-text text-lighten-4\">Tél : 03 66 66 66 66</li>
                        <li class=\"grey-text text-lighten-4\">Fax : 03 44 66 66 66</li>
                        <li class=\"grey-text text-lighten-4\">Email : contacts@lyceestvincent.fr</li>
                        <li class=\"grey-text text-lighten-4\">Web : https://www.asso-sport.lyceestvincent.fr/</li>
                    </ul>
                </div>
                <div class=\"col l2 m3 s12\">
                    <h5 class=\"white-text\">Accès rapide</h5>
                    <ul>
                        <li class=\"grey-text text-lighten-4\">> Acceuil</li>
                        <li class=\"grey-text text-lighten-4\">> Actualités</li>
                        <li class=\"grey-text text-lighten-4\">> Evénements</li>
                        <li class=\"grey-text text-lighten-4\">> Contact</li>
                    </ul>
                </div>
                <div class=\"col l2 m2 s12\">
                    <h5 class=\"white-text\">Suivez-nous</h5>
                    <img src=\"{{ asset('Assets/Images/facebook.png') }}\" alt=\"facebool_svg\" height=\"35px\" width=\"35px\">
                    <img src=\"{{ asset('Assets/Images/twitter.png') }}\" alt=\"twitter_svg\" height=\"35px\" width=\"35px\" style=\"margin-left: 0.5rem\">
                </div>
            </div>
        </div>
    </footer>
</html>
", "base.html.twig", "C:\\Users\\antoi\\OneDrive\\Bureau\\New AS\\as_project\\templates\\base.html.twig");
    }
}
