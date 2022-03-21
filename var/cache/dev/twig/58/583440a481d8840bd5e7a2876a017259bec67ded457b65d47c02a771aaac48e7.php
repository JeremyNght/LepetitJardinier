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

/* mesure/index.html.twig */
class __TwigTemplate_e2cd1d86cfdf93c6153df0b0ace22886e0caa744efceab59f7405a0a3dbe73d8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mesure/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mesure/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mesure/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
<div class=\"mesure\">
    <h1>Félicitations Devis ajouté !!!</h1>

    <div class=\"example-wrapper\">
        <h4>Vous êtes un(e) ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["choix"]) || array_key_exists("choix", $context) ? $context["choix"] : (function () { throw new RuntimeError('Variable "choix" does not exist.', 9, $this->source); })()), "html", null, true);
        echo " (vous bénéficiez d'une remise de ";
        echo twig_escape_filter($this->env, (isset($context["remise"]) || array_key_exists("remise", $context) ? $context["remise"] : (function () { throw new RuntimeError('Variable "remise" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "%)</h4>
        <h4>Rappel - mesures de la haie (";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 10, $this->source); })()), "html", null, true);
        echo ") : Longueur de ";
        echo twig_escape_filter($this->env, (isset($context["longueur"]) || array_key_exists("longueur", $context) ? $context["longueur"] : (function () { throw new RuntimeError('Variable "longueur" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "m, Hauteur de ";
        echo twig_escape_filter($this->env, (isset($context["hauteur"]) || array_key_exists("hauteur", $context) ? $context["hauteur"] : (function () { throw new RuntimeError('Variable "hauteur" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "m</h4>
        <h4>Vous avez obtenu une remise de ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["montantremise"]) || array_key_exists("montantremise", $context) ? $context["montantremise"] : (function () { throw new RuntimeError('Variable "montantremise" does not exist.', 11, $this->source); })()), "html", null, true);
        echo " €</h4>
        <h4>Le montant de votre devis est de ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["montant"]) || array_key_exists("montant", $context) ? $context["montant"] : (function () { throw new RuntimeError('Variable "montant" does not exist.', 12, $this->source); })()), "html", null, true);
        echo " €</h4>
        <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">Revenir à l'accueil</a>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "mesure/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 13,  93 => 12,  89 => 11,  81 => 10,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}

<div class=\"mesure\">
    <h1>Félicitations Devis ajouté !!!</h1>

    <div class=\"example-wrapper\">
        <h4>Vous êtes un(e) {{ choix }} (vous bénéficiez d'une remise de {{ remise }}%)</h4>
        <h4>Rappel - mesures de la haie ({{ type }}) : Longueur de {{ longueur }}m, Hauteur de {{ hauteur }}m</h4>
        <h4>Vous avez obtenu une remise de {{ montantremise}} €</h4>
        <h4>Le montant de votre devis est de {{ montant}} €</h4>
        <a href=\"{{ path('accueil') }}\">Revenir à l'accueil</a>
    </div>
</div>
{% endblock %}", "mesure/index.html.twig", "D:\\Projet\\LePetitJardinier\\templates\\mesure\\index.html.twig");
    }
}
