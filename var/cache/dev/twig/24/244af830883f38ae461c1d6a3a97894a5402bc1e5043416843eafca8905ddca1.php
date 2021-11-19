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

/* auteur/show.html.twig */
class __TwigTemplate_eef53aff406cf59ec89758c2fbf62745c80f6d7690263431bf572d7cb4a1d5b3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auteur/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auteur/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "auteur/show.html.twig", 1);
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

        echo "Auteur";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"container\">
    <div class=\"row\">

        <div class=\"col col-xs-12 col-lg-3 col-md-4 col-sm-6\">
            <b>prénom</b>
        </div>
        <div class=\"col col-xs-12 col-lg-3 col-md-4 col-sm-6\">
            ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["auteur"]) || array_key_exists("auteur", $context) ? $context["auteur"] : (function () { throw new RuntimeError('Variable "auteur" does not exist.', 14, $this->source); })()), "prenom", [], "any", false, false, false, 14), "html", null, true);
        echo "
        </div>
    </div>


    <div class=\"row\">

        <div class=\"col col-xs-12 col-lg-3 col-md-4 col-sm-6\">
            <b>Nom</b>
        </div>
        <div class=\"col col-xs-12 col-lg-3 col-md-4 col-sm-6\">
            ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["auteur"]) || array_key_exists("auteur", $context) ? $context["auteur"] : (function () { throw new RuntimeError('Variable "auteur" does not exist.', 25, $this->source); })()), "nom", [], "any", false, false, false, 25), "html", null, true);
        echo "
        </div>
    </div>


    <div class=\"row\">

        <div class=\"col col-xs-12 col-lg-3 col-md-4 col-sm-6\">
            <b>Biographie</b>
        </div>
        <div class=\"col col-xs-12 col-lg-3 col-md-4 col-sm-6\">
            ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["auteur"]) || array_key_exists("auteur", $context) ? $context["auteur"] : (function () { throw new RuntimeError('Variable "auteur" does not exist.', 36, $this->source); })()), "bigraphie", [], "any", false, false, false, 36), "html", null, true);
        echo "
        </div>
    </div>


    </div>
  <hr>

    <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("auteur_index");
        echo "\"><span class=\"btn btn-primary\"><i class=\"fa fa-backward\"></i>&nbsp;Retour</span></a>

    ";
        // line 46
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EDITOR")) {
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("auteur_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["auteur"]) || array_key_exists("auteur", $context) ? $context["auteur"] : (function () { throw new RuntimeError('Variable "auteur" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\"><span class=\"btn btn-success\"><i class=\"fa fa-pencil\"></i>&nbsp;Editer</span> </a>
<hr>
    ";
            // line 48
            echo twig_include($this->env, $context, "auteur/_delete_form.html.twig");
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "auteur/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 48,  142 => 46,  137 => 44,  126 => 36,  112 => 25,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Auteur{% endblock %}

{% block body %}

<div class=\"container\">
    <div class=\"row\">

        <div class=\"col col-xs-12 col-lg-3 col-md-4 col-sm-6\">
            <b>prénom</b>
        </div>
        <div class=\"col col-xs-12 col-lg-3 col-md-4 col-sm-6\">
            {{ auteur.prenom }}
        </div>
    </div>


    <div class=\"row\">

        <div class=\"col col-xs-12 col-lg-3 col-md-4 col-sm-6\">
            <b>Nom</b>
        </div>
        <div class=\"col col-xs-12 col-lg-3 col-md-4 col-sm-6\">
            {{ auteur.nom }}
        </div>
    </div>


    <div class=\"row\">

        <div class=\"col col-xs-12 col-lg-3 col-md-4 col-sm-6\">
            <b>Biographie</b>
        </div>
        <div class=\"col col-xs-12 col-lg-3 col-md-4 col-sm-6\">
            {{ auteur.bigraphie }}
        </div>
    </div>


    </div>
  <hr>

    <a href=\"{{ path('auteur_index') }}\"><span class=\"btn btn-primary\"><i class=\"fa fa-backward\"></i>&nbsp;Retour</span></a>

    {% if is_granted('ROLE_EDITOR') %} <a href=\"{{ path('auteur_edit', {'id': auteur.id}) }}\"><span class=\"btn btn-success\"><i class=\"fa fa-pencil\"></i>&nbsp;Editer</span> </a>
<hr>
    {{ include('auteur/_delete_form.html.twig') }}{% endif %}
{% endblock %}
", "auteur/show.html.twig", "E:\\symfony_projects\\tp2template\\templates\\auteur\\show.html.twig");
    }
}
