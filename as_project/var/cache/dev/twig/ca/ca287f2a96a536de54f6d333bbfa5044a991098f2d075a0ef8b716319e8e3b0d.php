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

/* event/evenement.html.twig */
class __TwigTemplate_fcd014868c301ed8cbc726885a83f39801af585a257e931d4387b654748a0c4a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/evenement.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/evenement.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "event/evenement.html.twig", 1);
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
        echo "<div class=\"container\">
    <div class=\"row\">
        <h4>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 5, $this->source); })()), "nom", [], "any", false, false, false, 5), "html", null, true);
        echo "</h4>
        <div class=\"valign-wrapper\" style=\"margin-bottom: 1rem; margin-top: 0.6rem\">
            <span class=\"valign-wrapper\"><i class=\"grey-text material-icons\" style=\"margin-right: 0.4rem\">date_range</i>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 7, $this->source); })()), "datedebut", [], "any", false, false, false, 7), "html", null, true);
        echo " au ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 7, $this->source); })()), "datefin", [], "any", false, false, false, 7), "html", null, true);
        echo "</span>
            <span class=\"valign-wrapper\"style=\"margin-left: 9%\"><i class=\"grey-text material-icons\" style=\"margin-right: 0.4rem\">person</i>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 8, $this->source); })()), "nombreplaces", [], "any", false, false, false, 8), "html", null, true);
        echo " places disponibles</span>
        </div>
        <div class=\"valign-wrapper\">
            <p style=\"font-weight: bold\">Sport : </p>
            <p style=\"margin-left: 0.3rem\"> ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 12, $this->source); })()), "sportid", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>
        </div>
        <div class=\"valign-wrapper\" style=\"margin-bottom: -1.65rem; margin-top: -1.65rem\">
            <p style=\"font-weight: bold\">Type : </p>
            <p style=\"margin-left: 0.3rem\"> ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 16, $this->source); })()), "typeid", [], "any", false, false, false, 16), "html", null, true);
        echo "</p>
        </div>
        <div class=\"valign-wrapper\">
            <p style=\"font-weight: bold\">Catégorie : </p>
            <p style=\"margin-left: 0.3rem\"> ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 20, $this->source); })()), "categorieid", [], "any", false, false, false, 20), "html", null, true);
        echo "</p>
        </div>
        <img class=\"responsive-img\" src=\"../Assets/Images/";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 22, $this->source); })()), "image", [], "any", false, false, false, 22), "html", null, true);
        echo "\">
        <div class=\"col l10 s12\">
            <h5 style=\"font-weight: bold\">Boostrap Heading</h5>
            <p>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 25, $this->source); })()), "description", [], "any", false, false, false, 25), "html", null, true);
        echo "</p>
            <h5 style=\"font-weight: bold\">Inscription</h5>
            <p>Quoi ! j’aimerais, se disait-elle, j’aurais de l’amour ! Moi, femme mariée, je serais amoureuse ! mais, se disait-elle, je n’ai jamais éprouvé pour mon mari cette sombre folie, qui fait que je ne puis détacher ma pensée de Julien. Au fond ce n’est qu’un enfant plein de respect pour moi ! Cette folie sera passagère. Qu’importe à mon mari les sentiments que je puis avoir pour ce jeune homme ! M. de Rênal serait ennuyé des conversations que j’ai avec Julien, sur des choses d’imagination. Lui, il pense à ses affaires. Je ne lui enlève rien pour le donner à Julien.
            </p>
        </div>
        <div class=\"col l12 s12\">
            <h5 style=\"font-weight: bold;margin-top: 4.5rem\">Documents à télécharger</h5>
            <table class=\"responsive-table highlight centered bordered\">
                <thead>
                <tr>
                    <th data-field=\"id\">Nom du document</th>
                    <th data-field=\"date\">Date ajout</th>
                    <th data-field=\"categorie\">Catégorie</th>
                    <th data-field=\"taille\">Taille</th>
                    <th data-field=\"action\">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 44, $this->source); })()), "nomfichier", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
                    <td>12/10/2018</td>
                    <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 46, $this->source); })()), "categoriefichier", [], "any", false, false, false, 46), "html", null, true);
        echo "</td>
                    <td>500Ko</td>
                    <td><a class=\"waves-effect waves-light btn-small\"><i class=\"material-icons left\">file_download</i>Télécharger</a></td>
                </tr>
                <tr>
                    <td>";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 51, $this->source); })()), "nomfichier", [], "any", false, false, false, 51), "html", null, true);
        echo "</td>
                    <td>12/10/2019</td>
                    <td>";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 53, $this->source); })()), "categoriefichier", [], "any", false, false, false, 53), "html", null, true);
        echo "</td>
                    <td>200Ko</td>
                    <td><a class=\"waves-effect waves-light btn-small\"><i class=\"material-icons left\">file_download</i>Télécharger</a></td>
                </tr>
                <tr>
                    <td>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 58, $this->source); })()), "nomfichier", [], "any", false, false, false, 58), "html", null, true);
        echo "</td>
                    <td>12/10/2012</td>
                    <td>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 60, $this->source); })()), "categoriefichier", [], "any", false, false, false, 60), "html", null, true);
        echo "</td>
                    <td>800Ko</td>
                    <td><a class=\"waves-effect waves-light btn-small\"><i class=\"material-icons left\">file_download</i>Télécharger</a></td>
                </tr>
                </tbody>
            </table>
            <div class=\"col s12\" style=\"margin-top: 3rem\">
                <button class=\"waves-light btn\"><i class=\"material-icons left\">person</i>Inscription</button>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "event/evenement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 60,  163 => 58,  155 => 53,  150 => 51,  142 => 46,  137 => 44,  115 => 25,  109 => 22,  104 => 20,  97 => 16,  90 => 12,  83 => 8,  77 => 7,  72 => 5,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
<div class=\"container\">
    <div class=\"row\">
        <h4>{{ event.nom }}</h4>
        <div class=\"valign-wrapper\" style=\"margin-bottom: 1rem; margin-top: 0.6rem\">
            <span class=\"valign-wrapper\"><i class=\"grey-text material-icons\" style=\"margin-right: 0.4rem\">date_range</i>{{ event.datedebut }} au {{ event.datefin }}</span>
            <span class=\"valign-wrapper\"style=\"margin-left: 9%\"><i class=\"grey-text material-icons\" style=\"margin-right: 0.4rem\">person</i>{{ event.nombreplaces }} places disponibles</span>
        </div>
        <div class=\"valign-wrapper\">
            <p style=\"font-weight: bold\">Sport : </p>
            <p style=\"margin-left: 0.3rem\"> {{ event.sportid }}</p>
        </div>
        <div class=\"valign-wrapper\" style=\"margin-bottom: -1.65rem; margin-top: -1.65rem\">
            <p style=\"font-weight: bold\">Type : </p>
            <p style=\"margin-left: 0.3rem\"> {{ event.typeid }}</p>
        </div>
        <div class=\"valign-wrapper\">
            <p style=\"font-weight: bold\">Catégorie : </p>
            <p style=\"margin-left: 0.3rem\"> {{ event.categorieid }}</p>
        </div>
        <img class=\"responsive-img\" src=\"../Assets/Images/{{ event.image }}\">
        <div class=\"col l10 s12\">
            <h5 style=\"font-weight: bold\">Boostrap Heading</h5>
            <p>{{ event.description }}</p>
            <h5 style=\"font-weight: bold\">Inscription</h5>
            <p>Quoi ! j’aimerais, se disait-elle, j’aurais de l’amour ! Moi, femme mariée, je serais amoureuse ! mais, se disait-elle, je n’ai jamais éprouvé pour mon mari cette sombre folie, qui fait que je ne puis détacher ma pensée de Julien. Au fond ce n’est qu’un enfant plein de respect pour moi ! Cette folie sera passagère. Qu’importe à mon mari les sentiments que je puis avoir pour ce jeune homme ! M. de Rênal serait ennuyé des conversations que j’ai avec Julien, sur des choses d’imagination. Lui, il pense à ses affaires. Je ne lui enlève rien pour le donner à Julien.
            </p>
        </div>
        <div class=\"col l12 s12\">
            <h5 style=\"font-weight: bold;margin-top: 4.5rem\">Documents à télécharger</h5>
            <table class=\"responsive-table highlight centered bordered\">
                <thead>
                <tr>
                    <th data-field=\"id\">Nom du document</th>
                    <th data-field=\"date\">Date ajout</th>
                    <th data-field=\"categorie\">Catégorie</th>
                    <th data-field=\"taille\">Taille</th>
                    <th data-field=\"action\">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{ event.nomfichier }}</td>
                    <td>12/10/2018</td>
                    <td>{{ event.categoriefichier }}</td>
                    <td>500Ko</td>
                    <td><a class=\"waves-effect waves-light btn-small\"><i class=\"material-icons left\">file_download</i>Télécharger</a></td>
                </tr>
                <tr>
                    <td>{{ event.nomfichier }}</td>
                    <td>12/10/2019</td>
                    <td>{{ event.categoriefichier }}</td>
                    <td>200Ko</td>
                    <td><a class=\"waves-effect waves-light btn-small\"><i class=\"material-icons left\">file_download</i>Télécharger</a></td>
                </tr>
                <tr>
                    <td>{{ event.nomfichier }}</td>
                    <td>12/10/2012</td>
                    <td>{{ event.categoriefichier }}</td>
                    <td>800Ko</td>
                    <td><a class=\"waves-effect waves-light btn-small\"><i class=\"material-icons left\">file_download</i>Télécharger</a></td>
                </tr>
                </tbody>
            </table>
            <div class=\"col s12\" style=\"margin-top: 3rem\">
                <button class=\"waves-light btn\"><i class=\"material-icons left\">person</i>Inscription</button>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "event/evenement.html.twig", "C:\\Users\\antoi\\OneDrive\\Bureau\\New AS\\as_project\\templates\\event\\evenement.html.twig");
    }
}
