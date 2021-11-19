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

/* livre/index.html.twig */
class __TwigTemplate_c2b673c5a9d37d325cb756a9960c37e478d633bb3c9af9ab27e5168306760ad9 extends Template
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
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livre/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livre/index.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "livre/index.html.twig", 1);
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

        // line 4
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"bg-light p-3\">
        <h1><i class=\"fa fa-book\"> Les livres</i></h1>
    </div>
    ";
        // line 12
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EDITOR")) {
            // line 13
            echo "        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livre_new");
            echo "\"><span class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i> &nbsp; Nouveau</span></a>
    ";
        }
        // line 15
        echo "
    <div class=\"row\">
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["livres"]) || array_key_exists("livres", $context) ? $context["livres"] : (function () { throw new RuntimeError('Variable "livres" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["livre"]) {
            // line 18
            echo "            <div class=\"col-4 mt-4\">
                <div class=\"border border-dark rounded p-2 clearfix\">
                    <h2>
                        ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "titre", [], "any", false, false, false, 21), "html", null, true);
            echo "
                        -
                        ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "prix", [], "any", false, false, false, 23), "html", null, true);
            echo "
                        DT
                    </h2>
                    <img src = \"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["livre"], "image", [], "any", false, false, false, 26))), "html", null, true);
            echo "\" style = \"width: 200px;height: 200px\" alt=\"\">
                    <hr>
                    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, $context["livre"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\" class=\"btn btn-success float-right\">
                        <i class=\"fas fa-shopping-cart mr-1\"></i>
                        Ajouter
                    </a>
                    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livre_show", ["id" => twig_get_attribute($this->env, $this->source, $context["livre"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\"><span class=\"btn btn-default\"><i class=\"fa fa-eye\"></i></span></a>
                    ";
            // line 33
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EDITOR")) {
                // line 34
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livre_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["livre"], "id", [], "any", false, false, false, 34)]), "html", null, true);
                echo "\"><span class=\"btn btn-default\"><i class=\"fa fa-edit\"></i></span></a>
                        <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livre_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["livre"], "id", [], "any", false, false, false, 35)]), "html", null, true);
                echo "\"><span class=\"btn btn-default\"><i class=\"fa fa-minus\"></i></span></a>
                    ";
            }
            // line 37
            echo "                </div>

            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['livre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "livre/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 42,  156 => 37,  151 => 35,  146 => 34,  144 => 33,  140 => 32,  133 => 28,  128 => 26,  122 => 23,  117 => 21,  112 => 18,  108 => 17,  104 => 15,  98 => 13,  96 => 12,  91 => 9,  81 => 8,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block title %}


{% endblock %}

{% block body %}
    <div class=\"bg-light p-3\">
        <h1><i class=\"fa fa-book\"> Les livres</i></h1>
    </div>
    {% if is_granted('ROLE_EDITOR') %}
        <a href=\"{{ path('livre_new') }}\"><span class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i> &nbsp; Nouveau</span></a>
    {% endif %}

    <div class=\"row\">
        {% for livre  in livres  %}
            <div class=\"col-4 mt-4\">
                <div class=\"border border-dark rounded p-2 clearfix\">
                    <h2>
                        {{ livre.titre  }}
                        -
                        {{ livre.prix }}
                        DT
                    </h2>
                    <img src = \"{{ asset('uploads/' ~ livre.image) }}\" style = \"width: 200px;height: 200px\" alt=\"\">
                    <hr>
                    <a href=\"{{ path('cart_add',{'id': livre.id})}}\" class=\"btn btn-success float-right\">
                        <i class=\"fas fa-shopping-cart mr-1\"></i>
                        Ajouter
                    </a>
                    <a href=\"{{ path('livre_show', {'id': livre.id}) }}\"><span class=\"btn btn-default\"><i class=\"fa fa-eye\"></i></span></a>
                    {% if is_granted('ROLE_EDITOR') %}
                        <a href=\"{{ path('livre_edit', {'id': livre.id}) }}\"><span class=\"btn btn-default\"><i class=\"fa fa-edit\"></i></span></a>
                        <a href=\"{{ path('livre_delete', {'id': livre.id}) }}\"><span class=\"btn btn-default\"><i class=\"fa fa-minus\"></i></span></a>
                    {% endif %}
                </div>

            </div>

        {% endfor %}

    </div>
{% endblock %}", "livre/index.html.twig", "C:\\workspace\\tp2template\\templates\\livre\\index.html.twig");
    }
}
