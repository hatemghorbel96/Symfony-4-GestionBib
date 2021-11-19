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

/* empty.html */
class __TwigTemplate_1f2355e0651cb70c2fbf9b64b5313515a7a3c90296f1b4ec430df2a2d06e609f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "empty.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "empty.html"));

        // line 1
        echo "﻿<!DOCTYPE html>
<!-- 
Template Name: BRILLIANT Bootstrap Admin Template
Version: 4.5.6
Author: WebThemez
Website: http://www.webthemez.com/ 
-->
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
\t<meta content=\"\" name=\"description\" />
    <meta content=\"webthemez\" name=\"author\" />
    <title>Gestion de bibliothèque</title>
\t<!-- Bootstrap Styles-->
    <link href=\"assets/css/bootstrap.css\" rel=\"stylesheet\" />
     <!-- FontAwesome Styles-->
    <link href=\"assets/css/font-awesome.css\" rel=\"stylesheet\" />
        <!-- Custom Styles-->
    <link href=\"assets/css/custom-styles.css\" rel=\"stylesheet\" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id=\"wrapper\">
        <nav class=\"navbar navbar-default top-navbar\" role=\"navigation\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".sidebar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\"><strong><i class=\"icon fa fa-plane\"></i> BRILLIANT</strong></a>
\t\t\t\t<div id=\"sideNav\" href=\"\">
\t\t<i class=\"fa fa-bars icon\"></i> 
\t\t</div>
            </div>

            <ul class=\"nav navbar-top-links navbar-right\">
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" aria-expanded=\"false\">
                        <i class=\"fa fa-envelope fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu dropdown-messages\">
                        <li>
                            <a href=\"#\">
                                <div>
                                    <strong>John Doe</strong>
                                    <span class=\"pull-right text-muted\">
                                        <em>Today</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class=\"pull-right text-muted\">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since an kwilnw...</div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class=\"pull-right text-muted\">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since the...</div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a class=\"text-center\" href=\"#\">
                                <strong>Read All Messages</strong>
                                <i class=\"fa fa-angle-right\"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" aria-expanded=\"false\">
                        <i class=\"fa fa-tasks fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu dropdown-tasks\">
                        <li>
                            <a href=\"#\">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class=\"pull-right text-muted\">60% Complete</span>
                                    </p>
                                    <div class=\"progress progress-striped active\">
                                        <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                                            <span class=\"sr-only\">60% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class=\"pull-right text-muted\">28% Complete</span>
                                    </p>
                                    <div class=\"progress progress-striped active\">
                                        <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"28\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 28%\">
                                            <span class=\"sr-only\">28% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class=\"pull-right text-muted\">60% Complete</span>
                                    </p>
                                    <div class=\"progress progress-striped active\">
                                        <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                                            <span class=\"sr-only\">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class=\"pull-right text-muted\">85% Complete</span>
                                    </p>
                                    <div class=\"progress progress-striped active\">
                                        <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"85\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 85%\">
                                            <span class=\"sr-only\">85% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a class=\"text-center\" href=\"#\">
                                <strong>See All Tasks</strong>
                                <i class=\"fa fa-angle-right\"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" aria-expanded=\"false\">
                        <i class=\"fa fa-bell fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu dropdown-alerts\">
                        <li>
                            <a href=\"#\">
                                <div>
                                    <i class=\"fa fa-comment fa-fw\"></i> New Comment
                                    <span class=\"pull-right text-muted small\">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <div>
                                    <i class=\"fa fa-twitter fa-fw\"></i> 3 New Followers
                                    <span class=\"pull-right text-muted small\">12 min</span>
                                </div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <div>
                                    <i class=\"fa fa-envelope fa-fw\"></i> Message Sent
                                    <span class=\"pull-right text-muted small\">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <div>
                                    <i class=\"fa fa-tasks fa-fw\"></i> New Task
                                    <span class=\"pull-right text-muted small\">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <div>
                                    <i class=\"fa fa-upload fa-fw\"></i> Server Rebooted
                                    <span class=\"pull-right text-muted small\">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a class=\"text-center\" href=\"#\">
                                <strong>See All Alerts</strong>
                                <i class=\"fa fa-angle-right\"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" aria-expanded=\"false\">
                        <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu dropdown-user\">
                        <li><a href=\"#\"><i class=\"fa fa-user fa-fw\"></i> User Profile</a>
                        </li>
                        <li><a href=\"#\"><i class=\"fa fa-gear fa-fw\"></i> Settings</a>
                        </li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\"><i class=\"fa fa-sign-out fa-fw\"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class=\"navbar-default navbar-side\" role=\"navigation\">
            <div class=\"sidebar-collapse\">
                <ul class=\"nav\" id=\"main-menu\">

                    <li>
                        <a href=\"index.html\"><i class=\"fa fa-dashboard\"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href=\"ui-elements.html\"><i class=\"fa fa-desktop\"></i> UI Elements</a>
                    </li>
\t\t\t\t\t 
\t\t\t\t\t <li>
                        <a href=\"#\"><i class=\"fa fa-sitemap\"></i> Charts<span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level\">
                            <li>
                                <a href=\"chart.html\">Charts JS</a>
                            </li>
                            <li>
                                <a href=\"morris-chart.html\">Morris Chart</a>
                            </li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>\t
                    <li>
                        <a href=\"tab-panel.html\"><i class=\"fa fa-qrcode\"></i> Tabs & Panels</a>
                    </li>
                    
                    <li>
                        <a href=\"table.html\"><i class=\"fa fa-table\"></i> Responsive Tables</a>
                    </li>
                    <li>
                        <a href=\"form.html\"><i class=\"fa fa-edit\"></i> Forms </a>
                    </li>


                    <li>
                        <a href=\"#\"><i class=\"fa fa-sitemap\"></i> Multi-Level Dropdown<span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level\">
                            <li>
                                <a href=\"#\">Second Level Link</a>
                            </li>
                            <li>
                                <a href=\"#\">Second Level Link</a>
                            </li>
                            <li>
                                <a href=\"#\">Second Level Link<span class=\"fa arrow\"></span></a>
                                <ul class=\"nav nav-third-level\">
                                    <li>
                                        <a href=\"#\">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Third Level Link</a>
                                    </li>

                                </ul>

                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class=\"active-menu\" href=\"empty.html\"><i class=\"fa fa-fw fa-file\"></i> Empty Page</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id=\"page-wrapper\">
\t\t  <div class=\"header\"> 
                        <h1 class=\"page-header\">
                            Empty Page <small>Create new page.</small>
                        </h1>
\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t  <li><a href=\"#\">Home</a></li>
\t\t\t\t\t  <li><a href=\"#\">Empty</a></li>
\t\t\t\t\t  <li class=\"active\">Data</li>
\t\t\t\t\t</ol> 
\t\t\t\t\t\t\t\t\t
\t\t</div>
            <div id=\"page-inner\"> 
\t\t\t\t <footer><p>All right reserved. Template by: <a href=\"http://webthemez.com\">WebThemez.com</a></p></footer>
\t\t\t\t</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src=\"assets/js/jquery-1.10.2.js\"></script>
      <!-- Bootstrap Js -->
    <script src=\"assets/js/bootstrap.min.js\"></script>
    <!-- Metis Menu Js -->
    <script src=\"assets/js/jquery.metisMenu.js\"></script>
      <!-- Custom Js -->
    <script src=\"assets/js/custom-scripts.js\"></script>
    
   
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "empty.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("﻿<!DOCTYPE html>
<!-- 
Template Name: BRILLIANT Bootstrap Admin Template
Version: 4.5.6
Author: WebThemez
Website: http://www.webthemez.com/ 
-->
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
\t<meta content=\"\" name=\"description\" />
    <meta content=\"webthemez\" name=\"author\" />
    <title>Gestion de bibliothèque</title>
\t<!-- Bootstrap Styles-->
    <link href=\"assets/css/bootstrap.css\" rel=\"stylesheet\" />
     <!-- FontAwesome Styles-->
    <link href=\"assets/css/font-awesome.css\" rel=\"stylesheet\" />
        <!-- Custom Styles-->
    <link href=\"assets/css/custom-styles.css\" rel=\"stylesheet\" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id=\"wrapper\">
        <nav class=\"navbar navbar-default top-navbar\" role=\"navigation\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".sidebar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\"><strong><i class=\"icon fa fa-plane\"></i> BRILLIANT</strong></a>
\t\t\t\t<div id=\"sideNav\" href=\"\">
\t\t<i class=\"fa fa-bars icon\"></i> 
\t\t</div>
            </div>

            <ul class=\"nav navbar-top-links navbar-right\">
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" aria-expanded=\"false\">
                        <i class=\"fa fa-envelope fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu dropdown-messages\">
                        <li>
                            <a href=\"#\">
                                <div>
                                    <strong>John Doe</strong>
                                    <span class=\"pull-right text-muted\">
                                        <em>Today</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class=\"pull-right text-muted\">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since an kwilnw...</div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class=\"pull-right text-muted\">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since the...</div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a class=\"text-center\" href=\"#\">
                                <strong>Read All Messages</strong>
                                <i class=\"fa fa-angle-right\"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" aria-expanded=\"false\">
                        <i class=\"fa fa-tasks fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu dropdown-tasks\">
                        <li>
                            <a href=\"#\">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class=\"pull-right text-muted\">60% Complete</span>
                                    </p>
                                    <div class=\"progress progress-striped active\">
                                        <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                                            <span class=\"sr-only\">60% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class=\"pull-right text-muted\">28% Complete</span>
                                    </p>
                                    <div class=\"progress progress-striped active\">
                                        <div class=\"progress-bar progress-bar-info\" role=\"progressbar\" aria-valuenow=\"28\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 28%\">
                                            <span class=\"sr-only\">28% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class=\"pull-right text-muted\">60% Complete</span>
                                    </p>
                                    <div class=\"progress progress-striped active\">
                                        <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                                            <span class=\"sr-only\">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class=\"pull-right text-muted\">85% Complete</span>
                                    </p>
                                    <div class=\"progress progress-striped active\">
                                        <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"85\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 85%\">
                                            <span class=\"sr-only\">85% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a class=\"text-center\" href=\"#\">
                                <strong>See All Tasks</strong>
                                <i class=\"fa fa-angle-right\"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" aria-expanded=\"false\">
                        <i class=\"fa fa-bell fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu dropdown-alerts\">
                        <li>
                            <a href=\"#\">
                                <div>
                                    <i class=\"fa fa-comment fa-fw\"></i> New Comment
                                    <span class=\"pull-right text-muted small\">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <div>
                                    <i class=\"fa fa-twitter fa-fw\"></i> 3 New Followers
                                    <span class=\"pull-right text-muted small\">12 min</span>
                                </div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <div>
                                    <i class=\"fa fa-envelope fa-fw\"></i> Message Sent
                                    <span class=\"pull-right text-muted small\">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <div>
                                    <i class=\"fa fa-tasks fa-fw\"></i> New Task
                                    <span class=\"pull-right text-muted small\">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a href=\"#\">
                                <div>
                                    <i class=\"fa fa-upload fa-fw\"></i> Server Rebooted
                                    <span class=\"pull-right text-muted small\">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class=\"divider\"></li>
                        <li>
                            <a class=\"text-center\" href=\"#\">
                                <strong>See All Alerts</strong>
                                <i class=\"fa fa-angle-right\"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" aria-expanded=\"false\">
                        <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu dropdown-user\">
                        <li><a href=\"#\"><i class=\"fa fa-user fa-fw\"></i> User Profile</a>
                        </li>
                        <li><a href=\"#\"><i class=\"fa fa-gear fa-fw\"></i> Settings</a>
                        </li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\"><i class=\"fa fa-sign-out fa-fw\"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class=\"navbar-default navbar-side\" role=\"navigation\">
            <div class=\"sidebar-collapse\">
                <ul class=\"nav\" id=\"main-menu\">

                    <li>
                        <a href=\"index.html\"><i class=\"fa fa-dashboard\"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href=\"ui-elements.html\"><i class=\"fa fa-desktop\"></i> UI Elements</a>
                    </li>
\t\t\t\t\t 
\t\t\t\t\t <li>
                        <a href=\"#\"><i class=\"fa fa-sitemap\"></i> Charts<span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level\">
                            <li>
                                <a href=\"chart.html\">Charts JS</a>
                            </li>
                            <li>
                                <a href=\"morris-chart.html\">Morris Chart</a>
                            </li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>\t
                    <li>
                        <a href=\"tab-panel.html\"><i class=\"fa fa-qrcode\"></i> Tabs & Panels</a>
                    </li>
                    
                    <li>
                        <a href=\"table.html\"><i class=\"fa fa-table\"></i> Responsive Tables</a>
                    </li>
                    <li>
                        <a href=\"form.html\"><i class=\"fa fa-edit\"></i> Forms </a>
                    </li>


                    <li>
                        <a href=\"#\"><i class=\"fa fa-sitemap\"></i> Multi-Level Dropdown<span class=\"fa arrow\"></span></a>
                        <ul class=\"nav nav-second-level\">
                            <li>
                                <a href=\"#\">Second Level Link</a>
                            </li>
                            <li>
                                <a href=\"#\">Second Level Link</a>
                            </li>
                            <li>
                                <a href=\"#\">Second Level Link<span class=\"fa arrow\"></span></a>
                                <ul class=\"nav nav-third-level\">
                                    <li>
                                        <a href=\"#\">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Third Level Link</a>
                                    </li>

                                </ul>

                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class=\"active-menu\" href=\"empty.html\"><i class=\"fa fa-fw fa-file\"></i> Empty Page</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id=\"page-wrapper\">
\t\t  <div class=\"header\"> 
                        <h1 class=\"page-header\">
                            Empty Page <small>Create new page.</small>
                        </h1>
\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t  <li><a href=\"#\">Home</a></li>
\t\t\t\t\t  <li><a href=\"#\">Empty</a></li>
\t\t\t\t\t  <li class=\"active\">Data</li>
\t\t\t\t\t</ol> 
\t\t\t\t\t\t\t\t\t
\t\t</div>
            <div id=\"page-inner\"> 
\t\t\t\t <footer><p>All right reserved. Template by: <a href=\"http://webthemez.com\">WebThemez.com</a></p></footer>
\t\t\t\t</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src=\"assets/js/jquery-1.10.2.js\"></script>
      <!-- Bootstrap Js -->
    <script src=\"assets/js/bootstrap.min.js\"></script>
    <!-- Metis Menu Js -->
    <script src=\"assets/js/jquery.metisMenu.js\"></script>
      <!-- Custom Js -->
    <script src=\"assets/js/custom-scripts.js\"></script>
    
   
</body>
</html>
", "empty.html", "E:\\symfony_projects\\tp2template\\templates\\empty.html");
    }
}
