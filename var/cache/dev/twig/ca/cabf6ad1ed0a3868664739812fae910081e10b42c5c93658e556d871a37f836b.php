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

/* menu.html.twig */
class __TwigTemplate_bd0d14b7c755b4958f8f0d34bf33261a83ac316118ebc65a579e49d9b9763f9f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu.html.twig"));

        // line 1
        echo "<nav class=\"navbar-default navbar-side\" role=\"navigation\">
    <div class=\"sidebar-collapse\">
        <ul class=\"nav\" id=\"main-menu\">
            ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4)) {
            // line 5
            echo "                <li>
                    <a href=\"";
            // line 6
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livre_index");
            echo "\"><i class=\"fa fa-book\"></i>Boutique du livre</a>

                </li>
            <li>
                <a href=\"";
            // line 10
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("auteur_index");
            echo "\"><i class=\"fa fa-user\"></i> Auteurs</a>

            </li>

            <li>
                <a href=\"";
            // line 15
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editeur_index");
            echo "\"><i class=\"fa fa-pencil\"></i> Editeurs</a>

            </li>

            <li>
                <a href=\"";
            // line 20
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_index");
            echo "\"><i class=\"fa fa-folder\"></i> Catégories</a>

            </li>

            ";
            // line 24
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EDITOR")) {
                // line 25
                echo "                <li>
  <a href=\"";
                // line 26
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("emprunteur_index");
                echo "\"><i class=\"fa fa-hand-o-right\"></i> Empranteurs</a>

                </li> ";
            }
            // line 29
            echo "               ";
            // line 33
            echo "                <li>
                    <a href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("emprunteur_new");
            echo "\"><i class=\"fa fa-print\"></i> Empranter</a>

                </li>
            ";
        }
        // line 38
        echo "
            ";
        // line 39
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 40
            echo "            <li>
                <a href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_utilisateurs");
            echo "\" ><i class=\"fa fa-users\"></i>Administration</a> </li>
            ";
        }
        // line 43
        echo "        </ul>

    </div>

</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 43,  114 => 41,  111 => 40,  109 => 39,  106 => 38,  99 => 34,  96 => 33,  94 => 29,  88 => 26,  85 => 25,  83 => 24,  76 => 20,  68 => 15,  60 => 10,  53 => 6,  50 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar-default navbar-side\" role=\"navigation\">
    <div class=\"sidebar-collapse\">
        <ul class=\"nav\" id=\"main-menu\">
            {% if app.user %}
                <li>
                    <a href=\"{{ path('livre_index') }}\"><i class=\"fa fa-book\"></i>Boutique du livre</a>

                </li>
            <li>
                <a href=\"{{ path('auteur_index') }}\"><i class=\"fa fa-user\"></i> Auteurs</a>

            </li>

            <li>
                <a href=\"{{ path('editeur_index') }}\"><i class=\"fa fa-pencil\"></i> Editeurs</a>

            </li>

            <li>
                <a href=\"{{ path('categorie_index') }}\"><i class=\"fa fa-folder\"></i> Catégories</a>

            </li>

            {% if is_granted('ROLE_EDITOR') %}
                <li>
  <a href=\"{{ path('emprunteur_index') }}\"><i class=\"fa fa-hand-o-right\"></i> Empranteurs</a>

                </li> {% endif %}
               {#  <li>
                    <a href=\"{{ path('emprunteur_index2', {'id': emprunteur.id}) }}\"><i class=\"fa fa-print\"></i> list</a>

                </li>#}
                <li>
                    <a href=\"{{ path('emprunteur_new') }}\"><i class=\"fa fa-print\"></i> Empranter</a>

                </li>
            {% endif %}

            {% if is_granted('ROLE_ADMIN') %}
            <li>
                <a href=\"{{ path('admin_utilisateurs')}}\" ><i class=\"fa fa-users\"></i>Administration</a> </li>
            {% endif %}
        </ul>

    </div>

</nav>", "menu.html.twig", "E:\\symfony_projects\\tp2template\\templates\\menu.html.twig");
    }
}
