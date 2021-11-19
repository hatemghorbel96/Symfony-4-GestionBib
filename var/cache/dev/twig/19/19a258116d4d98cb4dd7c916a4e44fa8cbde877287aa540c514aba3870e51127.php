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

/* accueil/index.html.twig */
class __TwigTemplate_13415672f2a23602ee311abaa2dcc5af41b889c8d7cb32de2a76cf27c3ff0870 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'mainBody' => [$this, 'block_mainBody'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/index.html.twig", 1);
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

        echo " Gest.Bibliotheque";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_mainBody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainBody"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainBody"));

        // line 6
        echo "


    <div class=\"col-md-3 col-sm-12 col-xs-12\">
        <div class=\"board\">
            <div class=\"panel panel-primary\">
                <div class=\"number\">
                    <h3>
                          <h3>";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["nbAuteurs"]) || array_key_exists("nbAuteurs", $context) ? $context["nbAuteurs"] : (function () { throw new RuntimeError('Variable "nbAuteurs" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "</h3>
                        <small>Auteurs</small>
                    </h3>
                </div>
                <div class=\"icon\">
                    <i class=\"fa fa-users fa-5x red\"></i>
                </div>

            </div>
        </div>
    </div>

    <div class=\"col-md-3 col-sm-12 col-xs-12\">
        <div class=\"board\">
            <div class=\"panel panel-primary\">
                <div class=\"number\">
                    <h3>
                        <h3>";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["nbLivres"]) || array_key_exists("nbLivres", $context) ? $context["nbLivres"] : (function () { throw new RuntimeError('Variable "nbLivres" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "</h3>
                        <small>Livres</small>
                    </h3>
                </div>
                <div class=\"icon\">
                    <i class=\"fa fa-book fa-5x blue\"></i>
                </div>

            </div>
        </div>
    </div>

    <div class=\"col-md-3 col-sm-12 col-xs-12\">
        <div class=\"board\">
            <div class=\"panel panel-primary\">
                <div class=\"number\">
                    <h3>
                        <h3>";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["nbEditeurs"]) || array_key_exists("nbEditeurs", $context) ? $context["nbEditeurs"] : (function () { throw new RuntimeError('Variable "nbEditeurs" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "</h3>
                        <small>Editeur</small>
                    </h3>
                </div>
                <div class=\"icon\">
                    <i class=\"fa fa-pencil fa-5x green\"></i>
                </div>

            </div>
        </div>
    </div>

    <div class=\"col-md-3 col-sm-12 col-xs-12\">
        <div class=\"board\">
            <div class=\"panel panel-primary\">
                <div class=\"number\">
                    <h3>
                        <h3>";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["nbCategories"]) || array_key_exists("nbCategories", $context) ? $context["nbCategories"] : (function () { throw new RuntimeError('Variable "nbCategories" does not exist.', 65, $this->source); })()), "html", null, true);
        echo "</h3>
                        <small>Catégories</small>
                    </h3>
                </div>
                <div class=\"icon\">
                    <i class=\"fa fa-folder fa-5x yellow\"></i>
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
        return "accueil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 65,  138 => 48,  118 => 31,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Gest.Bibliotheque{% endblock %}

{% block mainBody %}



    <div class=\"col-md-3 col-sm-12 col-xs-12\">
        <div class=\"board\">
            <div class=\"panel panel-primary\">
                <div class=\"number\">
                    <h3>
                          <h3>{{nbAuteurs}}</h3>
                        <small>Auteurs</small>
                    </h3>
                </div>
                <div class=\"icon\">
                    <i class=\"fa fa-users fa-5x red\"></i>
                </div>

            </div>
        </div>
    </div>

    <div class=\"col-md-3 col-sm-12 col-xs-12\">
        <div class=\"board\">
            <div class=\"panel panel-primary\">
                <div class=\"number\">
                    <h3>
                        <h3>{{nbLivres}}</h3>
                        <small>Livres</small>
                    </h3>
                </div>
                <div class=\"icon\">
                    <i class=\"fa fa-book fa-5x blue\"></i>
                </div>

            </div>
        </div>
    </div>

    <div class=\"col-md-3 col-sm-12 col-xs-12\">
        <div class=\"board\">
            <div class=\"panel panel-primary\">
                <div class=\"number\">
                    <h3>
                        <h3>{{nbEditeurs}}</h3>
                        <small>Editeur</small>
                    </h3>
                </div>
                <div class=\"icon\">
                    <i class=\"fa fa-pencil fa-5x green\"></i>
                </div>

            </div>
        </div>
    </div>

    <div class=\"col-md-3 col-sm-12 col-xs-12\">
        <div class=\"board\">
            <div class=\"panel panel-primary\">
                <div class=\"number\">
                    <h3>
                        <h3>{{nbCategories}}</h3>
                        <small>Catégories</small>
                    </h3>
                </div>
                <div class=\"icon\">
                    <i class=\"fa fa-folder fa-5x yellow\"></i>
                </div>

            </div>
        </div>
    </div>


{% endblock %}

", "accueil/index.html.twig", "E:\\symfony_projects\\tp2template\\templates\\accueil\\index.html.twig");
    }
}
