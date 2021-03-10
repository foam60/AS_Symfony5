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
class __TwigTemplate_64c9f90fa9e5e24e7049c827c4fbe60081a5cb7569a469c51e28e39a10a6f64b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<form method=\"post\">
    ";
        // line 5
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 5, $this->source); })())) {
            // line 6
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 6, $this->source); })()), "messageKey", [], "any", false, false, false, 6), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 6, $this->source); })()), "messageData", [], "any", false, false, false, 6), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 8
        echo "
    <main>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"wrapper\">
                    <div class=\"col l5 s12\" style=\"margin-top: 4.5rem\">
                        <h4>Connectez-vous</h4>
                        <div class=\"input-field\">
                            <input id=\"inputEmail\" type=\"email\" class=\"form-control validate\" name=\"email\" required autofocus>
                            <label for=\"inputEmail\" class=\"active\">Email</label>
                            <input type=\"hidden\" name=\"_csrf_token\"
                                   value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                            >
                        </div>
                        <div class=\"input-field\">
                            <input id=\"inputPassword\" type=\"password\" class=\"form-control validate\" name=\"password\" required>
                            <label for=\"inputPassword\" class=\"active\">Mot de passe</label>
                        </div>
                        <button class=\"btn\" type=\"submit\">Continuer</button>
                    </div>
                    <div class=\"col l6 s12 right\" style=\"margin-top: 4.5rem;\">
                        <h4 style=\"margin-bottom: 1.5rem\">Pas encore de compte ?</h4>
                        <h5>Vous êtes étudiant et vous n'avez pas encore de compte sur la plateforme ?</h5>
                        <button class=\"btn black\" style=\"margin-top: 1.5rem\">Accéder au formulaire d'inscription</button>
                    </div>

                </div>
            </div>
        </div>
    </main>

</form>

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
        return array (  92 => 19,  79 => 8,  73 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<form method=\"post\">
    {% if error %}
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    <main>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"wrapper\">
                    <div class=\"col l5 s12\" style=\"margin-top: 4.5rem\">
                        <h4>Connectez-vous</h4>
                        <div class=\"input-field\">
                            <input id=\"inputEmail\" type=\"email\" class=\"form-control validate\" name=\"email\" required autofocus>
                            <label for=\"inputEmail\" class=\"active\">Email</label>
                            <input type=\"hidden\" name=\"_csrf_token\"
                                   value=\"{{ csrf_token('authenticate') }}\"
                            >
                        </div>
                        <div class=\"input-field\">
                            <input id=\"inputPassword\" type=\"password\" class=\"form-control validate\" name=\"password\" required>
                            <label for=\"inputPassword\" class=\"active\">Mot de passe</label>
                        </div>
                        <button class=\"btn\" type=\"submit\">Continuer</button>
                    </div>
                    <div class=\"col l6 s12 right\" style=\"margin-top: 4.5rem;\">
                        <h4 style=\"margin-bottom: 1.5rem\">Pas encore de compte ?</h4>
                        <h5>Vous êtes étudiant et vous n'avez pas encore de compte sur la plateforme ?</h5>
                        <button class=\"btn black\" style=\"margin-top: 1.5rem\">Accéder au formulaire d'inscription</button>
                    </div>

                </div>
            </div>
        </div>
    </main>

</form>

{% endblock %}

", "security/login.html.twig", "C:\\Users\\antoi\\OneDrive\\Bureau\\New AS\\as_project\\templates\\security\\login.html.twig");
    }
}
