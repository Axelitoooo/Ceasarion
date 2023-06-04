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

/* personnalite/index.html.twig */
class __TwigTemplate_3bcef6b9f8b981268c53168828e552d9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body_id' => [$this, 'block_body_id'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'main' => [$this, 'block_main'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "personnalite/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "personnalite/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "personnalite/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Personnalités";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        echo "personnalites_index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        .pagination {
            margin-top: 20px;
            text-align: center;
        }

        .pagination a,
        .pagination span {
            display: inline-block;
            padding: 5px 10px;
            margin: 0 5px;
            font-size: 22px;
            color: #333;
            text-decoration: none;
        }

        .pagination a:hover {
            background-color: #eee;
        }

        .pagination .current-page {
            font-weight: bold;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 35
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 36
        echo "    <div class=\"personnalite-list\">
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagerfanta"]) || array_key_exists("pagerfanta", $context) ? $context["pagerfanta"] : (function () { throw new RuntimeError('Variable "pagerfanta" does not exist.', 37, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["personnalite"]) {
            // line 38
            echo "            <div class=\"personnalite-item\">
                <h2>
                    <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personnalite_show", ["id" => twig_get_attribute($this->env, $this->source, $context["personnalite"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">
                        ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personnalite"], "name", [], "any", false, false, false, 41), "html", null, true);
            echo "
                    </a>
                </h2>
                <p>";
            // line 44
            echo twig_escape_filter($this->env, (twig_slice($this->env, twig_striptags(twig_get_attribute($this->env, $this->source, $context["personnalite"], "description", [], "any", false, false, false, 44)), 0, 150) . (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personnalite"], "description", [], "any", false, false, false, 44)) > 150)) ? ("...") : (""))), "html", null, true);
            echo "</p>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            echo "            <p>Aucune personnalité trouvée.</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personnalite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "    </div>

    ";
        // line 51
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagerfanta"]) || array_key_exists("pagerfanta", $context) ? $context["pagerfanta"] : (function () { throw new RuntimeError('Variable "pagerfanta" does not exist.', 51, $this->source); })()), "hasPreviousPage", [], "any", false, false, false, 51) || twig_get_attribute($this->env, $this->source, (isset($context["pagerfanta"]) || array_key_exists("pagerfanta", $context) ? $context["pagerfanta"] : (function () { throw new RuntimeError('Variable "pagerfanta" does not exist.', 51, $this->source); })()), "hasNextPage", [], "any", false, false, false, 51))) {
            // line 52
            echo "        <div class=\"pagination\">
            ";
            // line 53
            if (twig_get_attribute($this->env, $this->source, (isset($context["pagerfanta"]) || array_key_exists("pagerfanta", $context) ? $context["pagerfanta"] : (function () { throw new RuntimeError('Variable "pagerfanta" does not exist.', 53, $this->source); })()), "hasPreviousPage", [], "any", false, false, false, 53)) {
                // line 54
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personnalites_index", ["page" => twig_get_attribute($this->env, $this->source, (isset($context["pagerfanta"]) || array_key_exists("pagerfanta", $context) ? $context["pagerfanta"] : (function () { throw new RuntimeError('Variable "pagerfanta" does not exist.', 54, $this->source); })()), "previousPage", [], "any", false, false, false, 54)]), "html", null, true);
                echo "\">Précédent</a>
            ";
            }
            // line 56
            echo "
            ";
            // line 57
            $context["currentPage"] = twig_get_attribute($this->env, $this->source, (isset($context["pagerfanta"]) || array_key_exists("pagerfanta", $context) ? $context["pagerfanta"] : (function () { throw new RuntimeError('Variable "pagerfanta" does not exist.', 57, $this->source); })()), "getCurrentPage", [], "method", false, false, false, 57);
            // line 58
            echo "            ";
            $context["totalPages"] = twig_get_attribute($this->env, $this->source, (isset($context["pagerfanta"]) || array_key_exists("pagerfanta", $context) ? $context["pagerfanta"] : (function () { throw new RuntimeError('Variable "pagerfanta" does not exist.', 58, $this->source); })()), "getNbPages", [], "method", false, false, false, 58);
            // line 59
            echo "            ";
            $context["pageRange"] = 3;
            // line 60
            echo "
            ";
            // line 61
            $context["startPage"] = ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 61, $this->source); })()) - (isset($context["pageRange"]) || array_key_exists("pageRange", $context) ? $context["pageRange"] : (function () { throw new RuntimeError('Variable "pageRange" does not exist.', 61, $this->source); })()));
            // line 62
            echo "            ";
            if (((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 62, $this->source); })()) < 1)) {
                // line 63
                echo "                ";
                $context["startPage"] = 1;
                // line 64
                echo "            ";
            }
            // line 65
            echo "
            ";
            // line 66
            $context["endPage"] = ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 66, $this->source); })()) + (isset($context["pageRange"]) || array_key_exists("pageRange", $context) ? $context["pageRange"] : (function () { throw new RuntimeError('Variable "pageRange" does not exist.', 66, $this->source); })()));
            // line 67
            echo "            ";
            if (((isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 67, $this->source); })()) > (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 67, $this->source); })()))) {
                // line 68
                echo "                ";
                $context["endPage"] = (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 68, $this->source); })());
                // line 69
                echo "            ";
            }
            // line 70
            echo "
            ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 71, $this->source); })()), (isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 71, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 72
                echo "                ";
                if (($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 72, $this->source); })()))) {
                    // line 73
                    echo "                    <span class=\"current-page\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</span>
                ";
                } else {
                    // line 75
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personnalites_index", ["page" => $context["page"]]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                ";
                }
                // line 77
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "
            ";
            // line 79
            if (twig_get_attribute($this->env, $this->source, (isset($context["pagerfanta"]) || array_key_exists("pagerfanta", $context) ? $context["pagerfanta"] : (function () { throw new RuntimeError('Variable "pagerfanta" does not exist.', 79, $this->source); })()), "hasNextPage", [], "any", false, false, false, 79)) {
                // line 80
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("personnalites_index", ["page" => twig_get_attribute($this->env, $this->source, (isset($context["pagerfanta"]) || array_key_exists("pagerfanta", $context) ? $context["pagerfanta"] : (function () { throw new RuntimeError('Variable "pagerfanta" does not exist.', 80, $this->source); })()), "nextPage", [], "any", false, false, false, 80)]), "html", null, true);
                echo "\">Suivant</a>
            ";
            }
            // line 82
            echo "        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "personnalite/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 82,  284 => 80,  282 => 79,  279 => 78,  273 => 77,  265 => 75,  259 => 73,  256 => 72,  252 => 71,  249 => 70,  246 => 69,  243 => 68,  240 => 67,  238 => 66,  235 => 65,  232 => 64,  229 => 63,  226 => 62,  224 => 61,  221 => 60,  218 => 59,  215 => 58,  213 => 57,  210 => 56,  204 => 54,  202 => 53,  199 => 52,  197 => 51,  193 => 49,  186 => 47,  178 => 44,  172 => 41,  168 => 40,  164 => 38,  159 => 37,  156 => 36,  146 => 35,  109 => 8,  99 => 7,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Personnalités{% endblock %}

{% block body_id 'personnalites_index' %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .pagination {
            margin-top: 20px;
            text-align: center;
        }

        .pagination a,
        .pagination span {
            display: inline-block;
            padding: 5px 10px;
            margin: 0 5px;
            font-size: 22px;
            color: #333;
            text-decoration: none;
        }

        .pagination a:hover {
            background-color: #eee;
        }

        .pagination .current-page {
            font-weight: bold;
        }
    </style>
{% endblock %}

{% block main %}
    <div class=\"personnalite-list\">
        {% for personnalite in pagerfanta %}
            <div class=\"personnalite-item\">
                <h2>
                    <a href=\"{{ path('personnalite_show', { 'id': personnalite.id }) }}\">
                        {{ personnalite.name }}
                    </a>
                </h2>
                <p>{{ personnalite.description|striptags|slice(0, 150) ~ (personnalite.description|length > 150 ? '...' : '') }}</p>
            </div>
        {% else %}
            <p>Aucune personnalité trouvée.</p>
        {% endfor %}
    </div>

    {% if pagerfanta.hasPreviousPage or pagerfanta.hasNextPage %}
        <div class=\"pagination\">
            {% if pagerfanta.hasPreviousPage %}
                <a href=\"{{ path('personnalites_index', { 'page': pagerfanta.previousPage }) }}\">Précédent</a>
            {% endif %}

            {% set currentPage = pagerfanta.getCurrentPage() %}
            {% set totalPages = pagerfanta.getNbPages() %}
            {% set pageRange = 3 %}

            {% set startPage = currentPage - pageRange %}
            {% if startPage < 1 %}
                {% set startPage = 1 %}
            {% endif %}

            {% set endPage = currentPage + pageRange %}
            {% if endPage > totalPages %}
                {% set endPage = totalPages %}
            {% endif %}

            {% for page in range(startPage, endPage) %}
                {% if page == currentPage %}
                    <span class=\"current-page\">{{ page }}</span>
                {% else %}
                    <a href=\"{{ path('personnalites_index', { 'page': page }) }}\">{{ page }}</a>
                {% endif %}
            {% endfor %}

            {% if pagerfanta.hasNextPage %}
                <a href=\"{{ path('personnalites_index', { 'page': pagerfanta.nextPage }) }}\">Suivant</a>
            {% endif %}
        </div>
    {% endif %}
{% endblock %}
", "personnalite/index.html.twig", "/Applications/MAMP/htdocs/Projet_TMA/templates/personnalite/index.html.twig");
    }
}
