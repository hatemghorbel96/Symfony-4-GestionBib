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

/* base.html.twig */
class __TwigTemplate_6f2b97cf83bff993af8fdaae12177930eb9ff74caa6167136bac1d72b4f46c5c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'titre' => [$this, 'block_titre'],
            'mainBody' => [$this, 'block_mainBody'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
        <meta content=\"\" name=\"description\" />
        <meta content=\"webthemez\" name=\"author\" />

        <!-- Bootstrap Styles-->
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <!-- FontAwesome Styles-->
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <!-- Custom Styles-->
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/custom-styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <!-- Google Fonts-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    </head>
    ";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "    <body>

    <div id=\"wrapper\">
        <!-- barre horizontal top-->
      ";
        // line 26
        $this->loadTemplate("top.html.twig", "base.html.twig", 26)->display($context);
        // line 27
        echo "        <!--/. NAV TOP  -->
      ";
        // line 28
        $this->loadTemplate("menu.html.twig", "base.html.twig", 28)->display($context);
        // line 29
        echo "        <!-- /. NAV SIDE  -->
        <div id=\"page-wrapper\">
            <div class=\"header\">
                <h1 class=\"page-header\">
                    ";
        // line 33
        $this->displayBlock('titre', $context, $blocks);
        // line 36
        echo "
                </h1>
                <ol class=\"breadcrumb\">
                    <li><a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">Accueil</a></li>
                    <li><a href=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["lien"]) || array_key_exists("lien", $context) ? $context["lien"] : (function () { throw new RuntimeError('Variable "lien" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["titre"]) || array_key_exists("titre", $context) ? $context["titre"] : (function () { throw new RuntimeError('Variable "titre" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "</a></li>
                    <li class=\"active\">";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["soustitre"]) || array_key_exists("soustitre", $context) ? $context["soustitre"] : (function () { throw new RuntimeError('Variable "soustitre" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "</li>
                </ol>

            </div>


            <div id=\"page-inner\">

                <div class=\"row\">
                    ";
        // line 50
        $this->displayBlock('mainBody', $context, $blocks);
        // line 68
        echo "           ";
        $this->loadTemplate("piedpage.html.twig", "base.html.twig", 68)->display($context);
        // line 69
        echo "
                    ";
        // line 70
        $this->displayBlock('javascripts', $context, $blocks);
        // line 81
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Gestion de bibliothèque";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_titre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        // line 34
        echo "                    ";
        echo twig_escape_filter($this->env, (isset($context["titre"]) || array_key_exists("titre", $context) ? $context["titre"] : (function () { throw new RuntimeError('Variable "titre" does not exist.', 34, $this->source); })()), "html", null, true);
        echo " <small>";
        echo twig_escape_filter($this->env, (isset($context["soustitre"]) || array_key_exists("soustitre", $context) ? $context["soustitre"] : (function () { throw new RuntimeError('Variable "soustitre" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "</small>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 50
    public function block_mainBody($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainBody"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainBody"));

        // line 51
        echo "                    <div class=\"col-md-12\">
                        <!-- Advanced Tables -->
                        <div class=\"panel panel-default\">

                            <div class=\"panel-body\">
                                <div class=\"table-responsive\">
                                    <table class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
                                    </table></div>

            ";
        // line 60
        $this->displayBlock('body', $context, $blocks);
        // line 61
        echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>

                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 60
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 71
        echo "
        <!-- JS Scripts-->
        <!-- jQuery Js -->
        <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
        <!-- Bootstrap Js -->
        <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Metis Menu Js -->
        <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.metisMenu.js"), "html", null, true);
        echo "\"></script>
        <!-- Custom Js -->
        <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom-scripts.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 80,  299 => 78,  294 => 76,  289 => 74,  284 => 71,  274 => 70,  256 => 60,  240 => 61,  238 => 60,  227 => 51,  217 => 50,  202 => 34,  192 => 33,  174 => 21,  155 => 5,  143 => 81,  141 => 70,  138 => 69,  135 => 68,  133 => 50,  121 => 41,  115 => 40,  111 => 39,  106 => 36,  104 => 33,  98 => 29,  96 => 28,  93 => 27,  91 => 26,  85 => 22,  83 => 21,  75 => 16,  70 => 14,  65 => 12,  55 => 5,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Gestion de bibliothèque{% endblock %}</title>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
        <meta content=\"\" name=\"description\" />
        <meta content=\"webthemez\" name=\"author\" />

        <!-- Bootstrap Styles-->
        <link href=\"{{ asset('css/bootstrap.css') }}\" rel=\"stylesheet\" />
        <!-- FontAwesome Styles-->
        <link href=\"{{asset('css/font-awesome.css')}}\" rel=\"stylesheet\" />
        <!-- Custom Styles-->
        <link href=\"{{asset('css/custom-styles.css')}}\" rel=\"stylesheet\" />
        <!-- Google Fonts-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    </head>
    {% block stylesheets %}{% endblock %}
    <body>

    <div id=\"wrapper\">
        <!-- barre horizontal top-->
      {% include('top.html.twig') %}
        <!--/. NAV TOP  -->
      {% include('menu.html.twig') %}
        <!-- /. NAV SIDE  -->
        <div id=\"page-wrapper\">
            <div class=\"header\">
                <h1 class=\"page-header\">
                    {% block titre %}
                    {{titre}} <small>{{soustitre}}</small>
                    {% endblock %}

                </h1>
                <ol class=\"breadcrumb\">
                    <li><a href=\"{{path('accueil')}}\">Accueil</a></li>
                    <li><a href=\"{{lien}}\">{{ titre }}</a></li>
                    <li class=\"active\">{{ soustitre }}</li>
                </ol>

            </div>


            <div id=\"page-inner\">

                <div class=\"row\">
                    {% block mainBody %}
                    <div class=\"col-md-12\">
                        <!-- Advanced Tables -->
                        <div class=\"panel panel-default\">

                            <div class=\"panel-body\">
                                <div class=\"table-responsive\">
                                    <table class=\"table table-striped table-bordered table-hover\" id=\"dataTables-example\">
                                    </table></div>

            {% block body %}{% endblock %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                    {% endblock %}
           {% include('piedpage.html.twig') %}

                    {% block javascripts %}

        <!-- JS Scripts-->
        <!-- jQuery Js -->
        <script src=\"{{  asset('js/jquery-1.10.2.js')}}\"></script>
        <!-- Bootstrap Js -->
        <script src=\"{{asset('js/bootstrap.min.js')}}\"></script>
        <!-- Metis Menu Js -->
        <script src=\"{{asset('js/jquery.metisMenu.js')}}\"></script>
        <!-- Custom Js -->
        <script src=\"{{asset('js/custom-scripts.js')}}\"></script>
        {% endblock %}</body>
</html>
", "base.html.twig", "E:\\symfony_projects\\tp2template\\templates\\base.html.twig");
    }
}
