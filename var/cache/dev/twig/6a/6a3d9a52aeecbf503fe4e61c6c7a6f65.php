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

/* personnalite/show.html.twig */
class __TwigTemplate_0690b85cec3957a9ca067849ec840dd7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "personnalite/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "personnalite/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "personnalite/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"description-container\">
            <h1>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personnalite"]) || array_key_exists("personnalite", $context) ? $context["personnalite"] : (function () { throw new RuntimeError('Variable "personnalite" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>
            <div class=\"description\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personnalite"]) || array_key_exists("personnalite", $context) ? $context["personnalite"] : (function () { throw new RuntimeError('Variable "personnalite" does not exist.', 7, $this->source); })()), "description", [], "any", false, false, false, 7), "html", null, true);
        echo "</div>
        </div>
        <div class=\"image-container\">
            <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personnalite"]) || array_key_exists("personnalite", $context) ? $context["personnalite"] : (function () { throw new RuntimeError('Variable "personnalite" does not exist.', 10, $this->source); })()), "imageURL", [], "any", false, false, false, 10), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personnalite"]) || array_key_exists("personnalite", $context) ? $context["personnalite"] : (function () { throw new RuntimeError('Variable "personnalite" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), "html", null, true);
        echo "\">
        </div>
        <div class=\"info-container\">
            <div class=\"info\">
                <h3>Date de naissance</h3>
                <p>";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personnalite"]) || array_key_exists("personnalite", $context) ? $context["personnalite"] : (function () { throw new RuntimeError('Variable "personnalite" does not exist.', 15, $this->source); })()), "dateNaissance", [], "any", false, false, false, 15), "d/m/Y"), "html", null, true);
        echo "</p>
            </div>
            <div class=\"info\">
                <h3>Date de mort</h3>
                <p>";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personnalite"]) || array_key_exists("personnalite", $context) ? $context["personnalite"] : (function () { throw new RuntimeError('Variable "personnalite" does not exist.', 19, $this->source); })()), "dateMort", [], "any", false, false, false, 19), "d/m/Y"), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 25
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 26
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        .container {
            display: flex;
            align-items: flex-start;
            justify-content: center;
        }

        .description-container {
            flex: 1;
            background-color: #f0f0f0;
            padding: 20px;
        }

        .description {
            margin-top: 20px;
        }

        .image-container {
            margin-left: 40px;
        }

        .info-container {
            margin-left: 40px;
            display: flex;
            flex-direction: column;
        }

        .info {
            margin-bottom: 20px;
        }

        img {
            max-width: 300px;
            max-height: 300px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "personnalite/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 26,  115 => 25,  100 => 19,  93 => 15,  83 => 10,  77 => 7,  73 => 6,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
        <div class=\"description-container\">
            <h1>{{ personnalite.name }}</h1>
            <div class=\"description\">{{ personnalite.description }}</div>
        </div>
        <div class=\"image-container\">
            <img src=\"{{ personnalite.imageURL }}\" alt=\"{{ personnalite.name }}\">
        </div>
        <div class=\"info-container\">
            <div class=\"info\">
                <h3>Date de naissance</h3>
                <p>{{ personnalite.dateNaissance|date('d/m/Y') }}</p>
            </div>
            <div class=\"info\">
                <h3>Date de mort</h3>
                <p>{{ personnalite.dateMort|date('d/m/Y') }}</p>
            </div>
        </div>
    </div>
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .container {
            display: flex;
            align-items: flex-start;
            justify-content: center;
        }

        .description-container {
            flex: 1;
            background-color: #f0f0f0;
            padding: 20px;
        }

        .description {
            margin-top: 20px;
        }

        .image-container {
            margin-left: 40px;
        }

        .info-container {
            margin-left: 40px;
            display: flex;
            flex-direction: column;
        }

        .info {
            margin-bottom: 20px;
        }

        img {
            max-width: 300px;
            max-height: 300px;
        }
    </style>
{% endblock %}
", "personnalite/show.html.twig", "/Applications/MAMP/htdocs/Projet_TMA/templates/personnalite/show.html.twig");
    }
}
