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

/* admin/admin.html.twig */
class __TwigTemplate_48187db82dcdb180a10085f12a7e2bd43a37f6858a25073f8b4bf06a49fb41d0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/admin.html.twig", 1);
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
        <div class=\"wrapper\">
            <h4>Ajouter un événement</h4>
            <h6 style=\"margin-top: 1.9rem; margin-bottom: 1.9rem\">Informations générales</h6>
            <div class=\"col l6 m6 s12 left\">
                <div class=\"col s12\">
                    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "nom", [], "any", false, false, false, 10), 'label');
        echo "
                    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "nom", [], "any", false, false, false, 11), 'errors');
        echo "
                    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "nom", [], "any", false, false, false, 12), 'widget');
        echo "
                </div>
                <div class=\"col s12\">
                    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "nombre_places", [], "any", false, false, false, 15), 'label');
        echo "
                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "nombre_places", [], "any", false, false, false, 16), 'errors');
        echo "
                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "nombre_places", [], "any", false, false, false, 17), 'widget');
        echo "
                </div>
                <div class=\"col l6 s12\">
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "date_debut", [], "any", false, false, false, 20), 'label');
        echo "
                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "date_debut", [], "any", false, false, false, 21), 'errors');
        echo "
                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "date_debut", [], "any", false, false, false, 22), 'widget');
        echo "
                </div>
                <div class=\"col l6 s12\">
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "date_fin", [], "any", false, false, false, 25), 'label');
        echo "
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "date_fin", [], "any", false, false, false, 26), 'errors');
        echo "
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "date_fin", [], "any", false, false, false, 27), 'widget');
        echo "
                </div>
                <div class=\"col s12\" style=\"margin-top: 1rem\">
                    <label>Categorie</label>
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "categorie_id", [], "any", false, false, false, 31), 'errors');
        echo "
                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "categorie_id", [], "any", false, false, false, 32), 'widget');
        echo "
                </div>
                <div class=\"col s12\" style=\"margin-top: 1rem\">
                    <label>Sport(s)</label>
                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "sport_id", [], "any", false, false, false, 36), 'errors');
        echo "
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "sport_id", [], "any", false, false, false, 37), 'widget');
        echo "
                </div>
                <div class=\"col s12\" style=\"margin-top: 1rem; margin-bottom: 1.3rem\">
                    <label>Type</label>
                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "type_id", [], "any", false, false, false, 41), 'errors');
        echo "
                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "type_id", [], "any", false, false, false, 42), 'widget');
        echo "
                </div>
                <div class=\"col s12\" style=\"margin-top: 1rem\">
                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "vignette", [], "any", false, false, false, 45), 'label');
        echo "
                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "vignette", [], "any", false, false, false, 46), 'errors');
        echo "
                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "vignette", [], "any", false, false, false, 47), 'widget');
        echo "
                </div>
                <div class=\"col s12\" style=\"margin-top: 2.5rem;margin-left: 0.19rem\">
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "image", [], "any", false, false, false, 50), 'label');
        echo "
                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "image", [], "any", false, false, false, 51), 'errors');
        echo "
                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "image", [], "any", false, false, false, 52), 'widget');
        echo "
                </div>
                <div class=\"col s12\" style=\"margin-top: 3rem\">
                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "save", [], "any", false, false, false, 55), 'widget', ["label" => "Ajouter"]);
        echo "
                </div>
            </div>
            <div class=\"col l6 m6 s12 right\">
                <div class=\"col s12\">
                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "description", [], "any", false, false, false, 60), 'label');
        echo "
                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "description", [], "any", false, false, false, 61), 'errors');
        echo "
                    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "description", [], "any", false, false, false, 62), 'widget');
        echo "
                </div>
                <div class=\"col s12\" style=\"margin-top: 2.5rem\">
                    <h5>Documents associés</h5>
                    <div class=\"col s12 card-panel\" style=\"margin-top: 0.3rem\">
                        <div class=\"col s12\">
                            <label>Nom</label>
                            ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "nom_fichier", [], "any", false, false, false, 69), 'errors');
        echo "
                            ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "nom_fichier", [], "any", false, false, false, 70), 'widget');
        echo "
                        </div>
                        <div class=\"col s12\">
                            <label>Description</label>
                            ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "description_fichier", [], "any", false, false, false, 74), 'errors');
        echo "
                            ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "description_fichier", [], "any", false, false, false, 75), 'widget');
        echo "
                        </div>
                        <div class=\"col s12\">
                            <label>Categorie</label>
                            ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "categorie_fichier", [], "any", false, false, false, 79), 'errors');
        echo "
                            ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "categorie_fichier", [], "any", false, false, false, 80), 'widget');
        echo "
                        </div>
                        <div class=\"col s12\" style=\"margin-top: 1rem; margin-bottom: 1.7rem\">
                            <label>Document</label>
                            ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "fichier", [], "any", false, false, false, 84), 'errors');
        echo "
                            ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "fichier", [], "any", false, false, false, 85), 'widget');
        echo "
                        </div>
                        <div class=\"col s12\" style=\"margin-bottom: 1.5rem\">
                            <button class=\"btn waves-effect waves-light\" type=\"submit\" name=\"action\">Ajouter un document
                                <i class=\"material-icons right\">send</i>
                            </button>
                        </div>
                    </div>
                </div>
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
        return "admin/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 85,  253 => 84,  246 => 80,  242 => 79,  235 => 75,  231 => 74,  224 => 70,  220 => 69,  210 => 62,  206 => 61,  202 => 60,  194 => 55,  188 => 52,  184 => 51,  180 => 50,  174 => 47,  170 => 46,  166 => 45,  160 => 42,  156 => 41,  149 => 37,  145 => 36,  138 => 32,  134 => 31,  127 => 27,  123 => 26,  119 => 25,  113 => 22,  109 => 21,  105 => 20,  99 => 17,  95 => 16,  91 => 15,  85 => 12,  81 => 11,  77 => 10,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
<div class=\"container\">
    <div class=\"row\">
        <div class=\"wrapper\">
            <h4>Ajouter un événement</h4>
            <h6 style=\"margin-top: 1.9rem; margin-bottom: 1.9rem\">Informations générales</h6>
            <div class=\"col l6 m6 s12 left\">
                <div class=\"col s12\">
                    {{ form_label(form.nom) }}
                    {{ form_errors(form.nom) }}
                    {{ form_widget(form.nom) }}
                </div>
                <div class=\"col s12\">
                    {{ form_label(form.nombre_places) }}
                    {{ form_errors(form.nombre_places) }}
                    {{ form_widget(form.nombre_places) }}
                </div>
                <div class=\"col l6 s12\">
                    {{ form_label(form.date_debut) }}
                    {{ form_errors(form.date_debut) }}
                    {{ form_widget(form.date_debut) }}
                </div>
                <div class=\"col l6 s12\">
                    {{ form_label(form.date_fin) }}
                    {{ form_errors(form.date_fin) }}
                    {{ form_widget(form.date_fin) }}
                </div>
                <div class=\"col s12\" style=\"margin-top: 1rem\">
                    <label>Categorie</label>
                    {{ form_errors(form.categorie_id) }}
                    {{ form_widget(form.categorie_id) }}
                </div>
                <div class=\"col s12\" style=\"margin-top: 1rem\">
                    <label>Sport(s)</label>
                    {{ form_errors(form.sport_id) }}
                    {{ form_widget(form.sport_id) }}
                </div>
                <div class=\"col s12\" style=\"margin-top: 1rem; margin-bottom: 1.3rem\">
                    <label>Type</label>
                    {{ form_errors(form.type_id) }}
                    {{ form_widget(form.type_id) }}
                </div>
                <div class=\"col s12\" style=\"margin-top: 1rem\">
                    {{ form_label(form.vignette) }}
                    {{ form_errors(form.vignette) }}
                    {{ form_widget(form.vignette) }}
                </div>
                <div class=\"col s12\" style=\"margin-top: 2.5rem;margin-left: 0.19rem\">
                    {{ form_label(form.image) }}
                    {{ form_errors(form.image) }}
                    {{ form_widget(form.image) }}
                </div>
                <div class=\"col s12\" style=\"margin-top: 3rem\">
                    {{ form_widget(form.save, { 'label': 'Ajouter' }) }}
                </div>
            </div>
            <div class=\"col l6 m6 s12 right\">
                <div class=\"col s12\">
                    {{ form_label(form.description) }}
                    {{ form_errors(form.description) }}
                    {{ form_widget(form.description) }}
                </div>
                <div class=\"col s12\" style=\"margin-top: 2.5rem\">
                    <h5>Documents associés</h5>
                    <div class=\"col s12 card-panel\" style=\"margin-top: 0.3rem\">
                        <div class=\"col s12\">
                            <label>Nom</label>
                            {{ form_errors(form.nom_fichier) }}
                            {{ form_widget(form.nom_fichier) }}
                        </div>
                        <div class=\"col s12\">
                            <label>Description</label>
                            {{ form_errors(form.description_fichier) }}
                            {{ form_widget(form.description_fichier) }}
                        </div>
                        <div class=\"col s12\">
                            <label>Categorie</label>
                            {{ form_errors(form.categorie_fichier) }}
                            {{ form_widget(form.categorie_fichier) }}
                        </div>
                        <div class=\"col s12\" style=\"margin-top: 1rem; margin-bottom: 1.7rem\">
                            <label>Document</label>
                            {{ form_errors(form.fichier) }}
                            {{ form_widget(form.fichier) }}
                        </div>
                        <div class=\"col s12\" style=\"margin-bottom: 1.5rem\">
                            <button class=\"btn waves-effect waves-light\" type=\"submit\" name=\"action\">Ajouter un document
                                <i class=\"material-icons right\">send</i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
{% endblock %}", "admin/admin.html.twig", "C:\\Users\\antoi\\OneDrive\\Bureau\\New AS\\as_project\\templates\\admin\\admin.html.twig");
    }
}
