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
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "
        ";
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "    </head>
    <header>
        <nav>
            <div class=\"nav-wrapper\">
                <a href=\"#\" class=\"brand-logo\">Logo</a>
                <ul id=\"nav\" class=\"right\">
                    <li><a href=\"home\">Accueil</a></li>
                    <li><a href=\"event\">Evenement</a></li>
                    ";
        // line 32
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 33
            echo "                        <li><a href=\"account\">Mon Compte</a></li>
                    ";
        }
        // line 35
        echo "                    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 36
            echo "                        <li><a href=\"admin\">Admin</a></li>
                    ";
        }
        // line 38
        echo "                    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 39
            echo "                        <li><a href=\"logout\">Déconnexion</a></li>
                    ";
        }
        // line 41
        echo "                </ul>
            </div>
        </nav>
    </header>
    <body>
        ";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 49
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
                    <img src=\"Assets/Images/twitter.png\" alt=\"twitter_svg\" height=\"35px\" width=\"35px\">
                    <img src=\"Assets/Images/facebook.png\" alt=\"twitter_svg\" height=\"35px\" width=\"35px\" style=\"margin-left: 0.5rem\">
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
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <!--Import Google Icon Font-->
            <link href=\"http://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
            <!-- Compiled and minified CSS -->
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
            <!--CSS -->
            <link href=\"Assets/acceuil.css\" rel=\"stylesheet\">
            ";
        // line 15
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "            <!--Import jQuery before materialize.js-->
            <script src=\"https://code.jquery.com/jquery-3.6.0.js\" integrity=\"sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=\" crossorigin=\"anonymous\"></script>
            <!-- Compiled and minified JavaScript -->
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/javascript.util/0.12.12/javascript.util.min.js\" integrity=\"sha512-oHBLR38hkpOtf4dW75gdfO7VhEKg2fsitvHZYHZjObc4BPKou2PGenyxA5ZJ8CCqWytBx5wpiSqwVEBy84b7tw==\" crossorigin=\"anonymous\"></script>
            ";
        // line 23
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 47
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
        return array (  212 => 47,  202 => 46,  192 => 23,  186 => 18,  176 => 17,  166 => 15,  157 => 7,  147 => 6,  99 => 49,  97 => 46,  90 => 41,  86 => 39,  83 => 38,  79 => 36,  76 => 35,  72 => 33,  70 => 32,  60 => 24,  58 => 17,  55 => 16,  53 => 6,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">

        {% block stylesheets %}
            <!--Import Google Icon Font-->
            <link href=\"http://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
            <!-- Compiled and minified CSS -->
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
            <!--CSS -->
            <link href=\"Assets/acceuil.css\" rel=\"stylesheet\">
            {#{{ encore_entry_link_tags('app') }}#}
        {% endblock %}

        {% block javascripts %}
            <!--Import jQuery before materialize.js-->
            <script src=\"https://code.jquery.com/jquery-3.6.0.js\" integrity=\"sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=\" crossorigin=\"anonymous\"></script>
            <!-- Compiled and minified JavaScript -->
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/javascript.util/0.12.12/javascript.util.min.js\" integrity=\"sha512-oHBLR38hkpOtf4dW75gdfO7VhEKg2fsitvHZYHZjObc4BPKou2PGenyxA5ZJ8CCqWytBx5wpiSqwVEBy84b7tw==\" crossorigin=\"anonymous\"></script>
            {#{{ encore_entry_script_tags('app') }}#}
        {% endblock %}
    </head>
    <header>
        <nav>
            <div class=\"nav-wrapper\">
                <a href=\"#\" class=\"brand-logo\">Logo</a>
                <ul id=\"nav\" class=\"right\">
                    <li><a href=\"home\">Accueil</a></li>
                    <li><a href=\"event\">Evenement</a></li>
                    {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
                        <li><a href=\"account\">Mon Compte</a></li>
                    {%endif%}
                    {% if is_granted('ROLE_ADMIN') %}
                        <li><a href=\"admin\">Admin</a></li>
                    {%endif%}
                    {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
                        <li><a href=\"logout\">Déconnexion</a></li>
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
                    <img src=\"Assets/Images/twitter.png\" alt=\"twitter_svg\" height=\"35px\" width=\"35px\">
                    <img src=\"Assets/Images/facebook.png\" alt=\"twitter_svg\" height=\"35px\" width=\"35px\" style=\"margin-left: 0.5rem\">
                </div>
            </div>
        </div>
    </footer>
</html>
", "base.html.twig", "C:\\Users\\antoi\\OneDrive\\Bureau\\New AS\\as_project\\templates\\base.html.twig");
    }
}
