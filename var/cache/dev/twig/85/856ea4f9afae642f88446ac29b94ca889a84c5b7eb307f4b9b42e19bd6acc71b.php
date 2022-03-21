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

/* choix/index.html.twig */
class __TwigTemplate_6530b8e799f9f1bd57b27124663aa42eea5ee5279ba44a2f21627c1404ce8459 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "choix/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "choix/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "choix/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello ChoixController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
    <form action=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mesure");
        echo "\" method=\"post\">

    <div class=\"choix\">

        <input class=\"form-check-input\" type=\"radio\" name=\"choix\" value=\"particulier\">
        <label>Particulier</label></p>
        <input class=\"form-check-input\" type=\"radio\" name=\"choix\" value=\"entreprise\">
        <label>Entreprise</label></p>

        <select class=\"form-select\" name=\"client\"> aria-label=\"Default select example\" required>
            <option selected name=\"client\">Sélectioner votre comptre client</option>
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesClients"]) || array_key_exists("lesClients", $context) ? $context["lesClients"] : (function () { throw new RuntimeError('Variable "lesClients" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 19
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 19), "html", null, true);
            echo "\">
                    ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getNom", [], "method", false, false, false, 20), "html", null, true);
            echo "   ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getPrenom", [], "method", false, false, false, 20), "html", null, true);
            echo "
                </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </select>
        <br>

        <select name=\"type\" id=\"type\" required>
            <option value=\"\">--Choisir une option--</option>
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mesHaies"]) || array_key_exists("mesHaies", $context) ? $context["mesHaies"] : (function () { throw new RuntimeError('Variable "mesHaies" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 29
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 29), "html", null, true);
            echo "\">
                    ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getNom", [], "method", false, false, false, 30), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getPrix", [], "method", false, false, false, 30), "html", null, true);
            echo "€
                </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </select>
        <br/>
        <br/>
        <div class=\"input-group input-group-sm mb-3\">
            <span class=\"input-group-text\" id=\"inputGroup-sizing-default\">Longeur</span>
            <input type=\"text\" class=\"form-control\" name=\"Longeur\" placeholder=\"Entrez la longeur en mètre\">
        </div>
        <div class=\"input-group input-group-sm mb-3\">
            <span class=\"input-group-text\" id=\"inputGroup-sizing-default\">Hauteur</span>
            <input type=\"text\" class=\"form-control\" name=\"Hauteur\" placeholder=\"Entrez la hauteur en mètre\">

        </div>

        <button class=\"btn btn-primary btn-lg\" type=\"submit\" name=\"suite\">Suite</button>
    </div>
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "choix/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 33,  141 => 30,  136 => 29,  132 => 28,  125 => 23,  114 => 20,  109 => 19,  105 => 18,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ChoixController!{% endblock %}

{% block content %}

    <form action=\"{{ path('mesure') }}\" method=\"post\">

    <div class=\"choix\">

        <input class=\"form-check-input\" type=\"radio\" name=\"choix\" value=\"particulier\">
        <label>Particulier</label></p>
        <input class=\"form-check-input\" type=\"radio\" name=\"choix\" value=\"entreprise\">
        <label>Entreprise</label></p>

        <select class=\"form-select\" name=\"client\"> aria-label=\"Default select example\" required>
            <option selected name=\"client\">Sélectioner votre comptre client</option>
            {% for item in lesClients %}
                <option value=\"{{item.getId()}}\">
                    {{item.getNom()}}   {{item.getPrenom()}}
                </option>
            {% endfor %}
        </select>
        <br>

        <select name=\"type\" id=\"type\" required>
            <option value=\"\">--Choisir une option--</option>
            {% for item in mesHaies %}
                <option value=\"{{item.getId()}}\">
                    {{item.getNom()}} - {{item.getPrix()}}€
                </option>
            {% endfor %}
        </select>
        <br/>
        <br/>
        <div class=\"input-group input-group-sm mb-3\">
            <span class=\"input-group-text\" id=\"inputGroup-sizing-default\">Longeur</span>
            <input type=\"text\" class=\"form-control\" name=\"Longeur\" placeholder=\"Entrez la longeur en mètre\">
        </div>
        <div class=\"input-group input-group-sm mb-3\">
            <span class=\"input-group-text\" id=\"inputGroup-sizing-default\">Hauteur</span>
            <input type=\"text\" class=\"form-control\" name=\"Hauteur\" placeholder=\"Entrez la hauteur en mètre\">

        </div>

        <button class=\"btn btn-primary btn-lg\" type=\"submit\" name=\"suite\">Suite</button>
    </div>
    </form>
{% endblock %}
", "choix/index.html.twig", "D:\\Projet\\LePetitJardinier\\templates\\choix\\index.html.twig");
    }
}
