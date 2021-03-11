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

/* event/index.html.twig */
class __TwigTemplate_c3c1258d54e739d787d98d0a78eb31a6643d258eaec2857181c45cd9d0e25668 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "event/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col l12 s12\">
                <b></b><h4>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["eventNumber"]) || array_key_exists("eventNumber", $context) ? $context["eventNumber"] : (function () { throw new RuntimeError('Variable "eventNumber" does not exist.', 6, $this->source); })()), "html", null, true);
        echo " Evenements</h4></b>
            </div>
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 9
            echo "                <div class=\"col l12 m10 s12\">
                    <div class=\"card small horizontal hoverable\">
                        <div class=\"card-image\">
                            <img class=\"responsive-img\" src=\"Assets/Images/";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "vignette", [], "any", false, false, false, 12), "html", null, true);
            echo "\">
                        </div>
                        <div class=\"card-stacked\">
                            <div class=\"card-content\" style=\"margin-top: -0.9rem\">
                                <p class=\"card-title\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "nom", [], "any", false, false, false, 16), "html", null, true);
            echo "</p>
                                <div class=\"valign-wrapper\" style=\"margin-bottom: 1rem; margin-top: 0.6rem\">
                                    <span class=\"valign-wrapper\"><i class=\"grey-text material-icons\">date_range</i>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "datedebut", [], "any", false, false, false, 18), "html", null, true);
            echo "</span>
                                    <span class=\"valign-wrapper\"style=\"margin-left: 12%\"><i class=\"grey-text material-icons\">date_range</i>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "nombreplaces", [], "any", false, false, false, 19), "html", null, true);
            echo "</span>
                                    <span class=\"valign-wrapper\"style=\"margin-left: 12%\"><i class=\"grey-text material-icons\">date_range</i>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "categorieid", [], "any", false, false, false, 20), "html", null, true);
            echo "</span>
                                    <span class=\"valign-wrapper\"style=\"margin-left: 12%\"><i class=\"grey-text material-icons\">date_range</i>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "sportid", [], "any", false, false, false, 21), "html", null, true);
            echo "</span>
                                </div>
                                <p>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 23), "html", null, true);
            echo "</p>
                            </div>
                            <div class=\"card-action\">
                                <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement", ["id" => twig_get_attribute($this->env, $this->source,             // line 28
$context["event"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            // line 29
            echo "\">Voir l'événement</a>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "event/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 35,  125 => 29,  123 => 28,  122 => 26,  116 => 23,  111 => 21,  107 => 20,  103 => 19,  99 => 18,  94 => 16,  87 => 12,  82 => 9,  78 => 8,  73 => 6,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col l12 s12\">
                <b></b><h4>{{ eventNumber }} Evenements</h4></b>
            </div>
            {% for event in events %}
                <div class=\"col l12 m10 s12\">
                    <div class=\"card small horizontal hoverable\">
                        <div class=\"card-image\">
                            <img class=\"responsive-img\" src=\"Assets/Images/{{ event.vignette }}\">
                        </div>
                        <div class=\"card-stacked\">
                            <div class=\"card-content\" style=\"margin-top: -0.9rem\">
                                <p class=\"card-title\">{{ event.nom }}</p>
                                <div class=\"valign-wrapper\" style=\"margin-bottom: 1rem; margin-top: 0.6rem\">
                                    <span class=\"valign-wrapper\"><i class=\"grey-text material-icons\">date_range</i>{{ event.datedebut }}</span>
                                    <span class=\"valign-wrapper\"style=\"margin-left: 12%\"><i class=\"grey-text material-icons\">date_range</i>{{ event.nombreplaces }}</span>
                                    <span class=\"valign-wrapper\"style=\"margin-left: 12%\"><i class=\"grey-text material-icons\">date_range</i>{{ event.categorieid }}</span>
                                    <span class=\"valign-wrapper\"style=\"margin-left: 12%\"><i class=\"grey-text material-icons\">date_range</i>{{ event.sportid }}</span>
                                </div>
                                <p>{{ event.description }}</p>
                            </div>
                            <div class=\"card-action\">
                                <a href=\"{{
                                    path('evenement',
                                    {'id': event.id})
                                }}\">Voir l'événement</a>
                            </div>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}", "event/index.html.twig", "C:\\Users\\antoi\\OneDrive\\Bureau\\New AS\\as_project\\templates\\event\\index.html.twig");
    }
}
