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

/* home_admin/index.html.twig */
class __TwigTemplate_3d8842c5bf12ac39330d60466815601211fcda863b4b65e7b9c0f28fcd917fce extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'titTab' => [$this, 'block_titTab'],
            'tab' => [$this, 'block_tab'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home_admin/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home_admin/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>AdminLTE 3 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"), "html", null, true);
        echo "\">
    <!-- iCheck -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/icheck-bootstrap/icheck-bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- JQVMap -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jqvmap/jqvmap.min.css"), "html", null, true);
        echo "\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("dist/css/adminlte.min.css"), "html", null, true);
        echo "\">
    <!-- overlayScrollbars -->
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/overlayScrollbars/css/OverlayScrollbars.min.css"), "html", null, true);
        echo "\">
    <!-- Daterange picker -->
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\">
    <!-- summernote -->
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/summernote/summernote-bs4.css"), "html", null, true);
        echo "\">
    <!-- Google Font: Source Sans Pro -->
    <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
</head>
<body class=\"hold-transition sidebar-mini layout-fixed\">
<div class=\"wrapper\">

    <!-- Navbar -->
    <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
        <!-- Left navbar links -->
        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\"><i class=\"fas fa-bars\"></i></a>
            </li>
            <li class=\"nav-item d-none d-sm-inline-block\">
                <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_admin");
        echo "\" class=\"nav-link\">Home</a>
            </li>
            <li class=\"nav-item d-none d-sm-inline-block\">
                <a href=\"#\" class=\"nav-link\">Contact</a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class=\"form-inline ml-3\">
            <div class=\"input-group input-group-sm\">
                <input class=\"form-control form-control-navbar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                <div class=\"input-group-append\">
                    <button class=\"btn btn-navbar\" type=\"submit\">
                        <i class=\"fas fa-search\"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Right navbar links -->
        <ul class=\"navbar-nav ml-auto\">
            <!-- Messages Dropdown Menu -->
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                    <i class=\"far fa-comments\"></i>
                    <span class=\"badge badge-danger navbar-badge\">3</span>
                </a>
                <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                    <a href=\"#\" class=\"dropdown-item\">
                        <!-- Message Start -->
                        <div class=\"media\">
                            <img src=\"dist/img/user1-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 mr-3 img-circle\">
                            <div class=\"media-body\">
                                <h3 class=\"dropdown-item-title\">
                                    Brad Diesel
                                    <span class=\"float-right text-sm text-danger\"><i class=\"fas fa-star\"></i></span>
                                </h3>
                                <p class=\"text-sm\">Call me whenever you can...</p>
                                <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <!-- Message Start -->
                        <div class=\"media\">
                            <img src=\"dist/img/user8-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
                            <div class=\"media-body\">
                                <h3 class=\"dropdown-item-title\">
                                    John Pierce
                                    <span class=\"float-right text-sm text-muted\"><i class=\"fas fa-star\"></i></span>
                                </h3>
                                <p class=\"text-sm\">I got your message bro</p>
                                <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <!-- Message Start -->
                        <div class=\"media\">
                            <img src=\"dist/img/user3-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
                            <div class=\"media-body\">
                                <h3 class=\"dropdown-item-title\">
                                    Nora Silvester
                                    <span class=\"float-right text-sm text-warning\"><i class=\"fas fa-star\"></i></span>
                                </h3>
                                <p class=\"text-sm\">The subject goes here</p>
                                <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Messages</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                    <i class=\"far fa-bell\"></i>
                    <span class=\"badge badge-warning navbar-badge\">15</span>
                </a>
                <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                    <span class=\"dropdown-item dropdown-header\">15 Notifications</span>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <i class=\"fas fa-envelope mr-2\"></i> 4 new messages
                        <span class=\"float-right text-muted text-sm\">3 mins</span>
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <i class=\"fas fa-users mr-2\"></i> 8 friend requests
                        <span class=\"float-right text-muted text-sm\">12 hours</span>
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <i class=\"fas fa-file mr-2\"></i> 3 new reports
                        <span class=\"float-right text-muted text-sm\">2 days</span>
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Notifications</a>
                </div>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-widget=\"control-sidebar\" data-slide=\"true\" href=\"#\" role=\"button\">
                    <i class=\"fas fa-th-large\"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
        <!-- Brand Logo -->
        <a href=\"";
        // line 159
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_admin");
        echo "\" class=\"brand-link\">
            <img src=\"dist/img/AdminLTELogo.png\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\"
                 style=\"opacity: .8\">
            <span class=\"brand-text font-weight-light\">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class=\"sidebar\">
            <!-- Sidebar user panel (optional) -->
            <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
                <div class=\"image\">
                    <img src=\"dist/img/user2-160x160.jpg\" class=\"img-circle elevation-2\" alt=\"User Image\">
                </div>
                <div class=\"info\">
                    <a href=\"#\" class=\"d-block\">Alexander Pierce</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class=\"mt-2\">
                <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class=\"nav-item has-treeview menu-open\">
                        <a href=\"#\" class=\"nav-link active\">
                            <i class=\"nav-icon fas fa-tachometer-alt\"></i>
                            <p>
                                Dashboard
                                <i class=\"right fas fa-angle-left\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">

                            <li class=\"nav-item\">

                                <a href=\"";
        // line 194
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AgestionHotel");
        echo "\" class=\"nav-link active\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Dashboard Hotel</p>
                                </a>

                            </li>

                            <li class=\"nav-item\">

                                <a href=\"";
        // line 203
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AgestionPromotion");
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Dashboard Promotion</p>
                                </a>

                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 210
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AgestionMaison");
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Dashboard Maison</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pages/widgets.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-th\"></i>
                            <p>
                                Widgets
                                <span class=\"right badge badge-danger\">New</span>
                            </p>
                        </a>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-copy\"></i>
                            <p>
                                Layout Options
                                <i class=\"fas fa-angle-left right\"></i>
                                <span class=\"badge badge-info right\">6</span>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pages/layout/top-nav.html"), "html", null, true);
        echo "\"class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Top Navigation</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pages/layout/top-nav-sidebar.html"), "html", null, true);
        echo "\"class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Top Navigation + Sidebar</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pages/layout/boxed.html"), "html", null, true);
        echo "\"class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Boxed</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pages/layout/fixed-sidebar.html"), "html", null, true);
        echo "\"class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Fixed Sidebar</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pages/layout/fixed-topnav.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Fixed Navbar</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pages/layout/fixed-footer.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Fixed Footer</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pages/layout/collapsed-sidebar.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Collapsed Sidebar</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-chart-pie\"></i>
                            <p>
                                Charts
                                <i class=\"right fas fa-angle-left\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pages/charts/chartjs.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>ChartJS</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pages/charts/flot.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Flot</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pages/charts/inline.html"), "html", null, true);
        echo "\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Inline</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-tree\"></i>
                            <p>
                                UI Elements
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"pages/UI/general.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>General</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/UI/icons.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Icons</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/UI/buttons.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Buttons</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/UI/sliders.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Sliders</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/UI/modals.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Modals & Alerts</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/UI/navbar.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Navbar & Tabs</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/UI/timeline.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Timeline</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/UI/ribbons.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Ribbons</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-edit\"></i>
                            <p>
                                Forms
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"pages/forms/general.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>General Elements</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/forms/advanced.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Advanced Elements</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/forms/editors.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Editors</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/forms/validation.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Validation</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-table\"></i>
                            <p>
                                Tables
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"pages/tables/simple.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Simple Tables</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/tables/data.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>DataTables</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/tables/jsgrid.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>jsGrid</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-header\">EXAMPLES</li>
                    <li class=\"nav-item\">
                        <a href=\"pages/calendar.html\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-calendar-alt\"></i>
                            <p>
                                Calendar
                                <span class=\"badge badge-info right\">2</span>
                            </p>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"pages/gallery.html\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-image\"></i>
                            <p>
                                Gallery
                            </p>
                        </a>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-envelope\"></i>
                            <p>
                                Mailbox
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"pages/mailbox/mailbox.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Inbox</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/mailbox/compose.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Compose</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/mailbox/read-mail.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Read</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-book\"></i>
                            <p>
                                Pages
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/invoice.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Invoice</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/profile.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Profile</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/e-commerce.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>E-commerce</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/projects.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Projects</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/project-add.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Project Add</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/project-edit.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Project Edit</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/project-detail.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Project Detail</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/contacts.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Contacts</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-plus-square\"></i>
                            <p>
                                Extras
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/login.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Login</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/register.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Register</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/forgot-password.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Forgot Password</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/recover-password.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Recover Password</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/lockscreen.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Lockscreen</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/legacy-user-menu.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Legacy User Menu</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/language-menu.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Language Menu</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/404.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Error 404</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/500.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Error 500</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/pace.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Pace</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/blank.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Blank Page</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"starter.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Starter Page</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-header\">MISCELLANEOUS</li>
                    <li class=\"nav-item\">
                        <a href=\"https://adminlte.io/docs/3.0\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-file\"></i>
                            <p>Documentation</p>
                        </a>
                    </li>
                    <li class=\"nav-header\">MULTI LEVEL EXAMPLE</li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"fas fa-circle nav-icon\"></i>
                            <p>Level 1</p>
                        </a>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-circle\"></i>
                            <p>
                                Level 1
                                <i class=\"right fas fa-angle-left\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Level 2</p>
                                </a>
                            </li>
                            <li class=\"nav-item has-treeview\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>
                                        Level 2
                                        <i class=\"right fas fa-angle-left\"></i>
                                    </p>
                                </a>
                                <ul class=\"nav nav-treeview\">
                                    <li class=\"nav-item\">
                                        <a href=\"#\" class=\"nav-link\">
                                            <i class=\"far fa-dot-circle nav-icon\"></i>
                                            <p>Level 3</p>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"#\" class=\"nav-link\">
                                            <i class=\"far fa-dot-circle nav-icon\"></i>
                                            <p>Level 3</p>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"#\" class=\"nav-link\">
                                            <i class=\"far fa-dot-circle nav-icon\"></i>
                                            <p>Level 3</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Level 2</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"fas fa-circle nav-icon\"></i>
                            <p>Level 1</p>
                        </a>
                    </li>
                    <li class=\"nav-header\">LABELS</li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-circle text-danger\"></i>
                            <p class=\"text\">Important</p>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-circle text-warning\"></i>
                            <p>Warning</p>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-circle text-info\"></i>
                            <p>Informational</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1 class=\"m-0 text-dark\">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                            <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                            <li class=\"breadcrumb-item active\">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->";
        // line 739
        $this->displayBlock('content', $context, $blocks);
        // line 1331
        echo "        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class=\"main-footer\">
        <strong>Copyright &copy; 2014-2019 <a href=\"http://adminlte.io\">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class=\"float-right d-none d-sm-inline-block\">
            <b>Version</b> 3.0.5
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class=\"control-sidebar control-sidebar-dark\">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src=\"plugins/jquery/jquery.min.js\"></script>
<!-- jQuery UI 1.11.4 -->
<script src=\"plugins/jquery-ui/jquery-ui.min.js\"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    \$.widget.bridge('uibutton', \$.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src=\"plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
<!-- ChartJS -->
<script src=\"plugins/chart.js/Chart.min.js\"></script>
<!-- Sparkline -->
<script src=\"plugins/sparklines/sparkline.js\"></script>
<!-- JQVMap -->
<script src=\"plugins/jqvmap/jquery.vmap.min.js\"></script>
<script src=\"plugins/jqvmap/maps/jquery.vmap.usa.js\"></script>
<!-- jQuery Knob Chart -->
<script src=\"plugins/jquery-knob/jquery.knob.min.js\"></script>
<!-- daterangepicker -->
<script src=\"plugins/moment/moment.min.js\"></script>
<script src=\"plugins/daterangepicker/daterangepicker.js\"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src=\"plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js\"></script>
<!-- Summernote -->
<script src=\"plugins/summernote/summernote-bs4.min.js\"></script>
<!-- overlayScrollbars -->
<script src=\"plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js\"></script>
<!-- AdminLTE App -->
<script src=\"dist/js/adminlte.js\"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src=\"dist/js/pages/dashboard.js\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"dist/js/demo.js\"></script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 739
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 740
        echo "        <section class=\"content\">
            <div class=\"container-fluid\">
                <!-- Small boxes (Stat box) -->
                <div class=\"row\">
                    <div class=\"col-lg-3 col-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-info\">
                            <div class=\"inner\">
                                <h3>150</h3>

                                <p>New Orders</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-bag\"></i>
                            </div>
                            <a href=\"#\" class=\"small-box-footer\">More info <i class=\"fas fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class=\"col-lg-3 col-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-success\">
                            <div class=\"inner\">
                                <h3>53<sup style=\"font-size: 20px\">%</sup></h3>

                                <p>Bounce Rate</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-stats-bars\"></i>
                            </div>
                            <a href=\"#\" class=\"small-box-footer\">More info <i class=\"fas fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class=\"col-lg-3 col-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-warning\">
                            <div class=\"inner\">
                                <h3>44</h3>

                                <p>User Registrations</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-person-add\"></i>
                            </div>
                            <a href=\"#\" class=\"small-box-footer\">More info <i class=\"fas fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class=\"col-lg-3 col-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-danger\">
                            <div class=\"inner\">
                                <h3>65</h3>

                                <p>Unique Visitors</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-pie-graph\"></i>
                            </div>
                            <a href=\"#\" class=\"small-box-footer\">More info <i class=\"fas fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
                <!-- Main row -->
                <div class=\"row\">
                    <!-- Left col -->
                    <section class=\"col-lg-7 connectedSortable\">
                        <!-- Custom tabs (Charts with tabs)-->
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">
                                    <i class=\"fas fa-chart-pie mr-1\"></i>
                                    ";
        // line 815
        $this->displayBlock('titTab', $context, $blocks);
        // line 816
        echo "                                </h3>
                                <div class=\"card-tools\">
                                    <ul class=\"nav nav-pills ml-auto\">
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link active\" href=\"#revenue-chart\" data-toggle=\"tab\">Area</a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"#sales-chart\" data-toggle=\"tab\">Donut</a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- /.card-header -->
                            ";
        // line 828
        $this->displayBlock('tab', $context, $blocks);
        // line 842
        echo "
                        </div>
                        <!-- /.card -->

                        <!-- DIRECT CHAT -->
                        <div class=\"card direct-chat direct-chat-primary\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">Direct Chat</h3>

                                <div class=\"card-tools\">
                                    <span data-toggle=\"tooltip\" title=\"3 New Messages\" class=\"badge badge-primary\">3</span>
                                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                                        <i class=\"fas fa-minus\"></i>
                                    </button>
                                    <button type=\"button\" class=\"btn btn-tool\" data-toggle=\"tooltip\" title=\"Contacts\"
                                            data-widget=\"chat-pane-toggle\">
                                        <i class=\"fas fa-comments\"></i>
                                    </button>
                                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\"><i class=\"fas fa-times\"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class=\"card-body\">
                                <!-- Conversations are loaded here -->
                                <div class=\"direct-chat-messages\">
                                    <!-- Message. Default to the left -->
                                    <div class=\"direct-chat-msg\">
                                        <div class=\"direct-chat-infos clearfix\">
                                            <span class=\"direct-chat-name float-left\">Alexander Pierce</span>
                                            <span class=\"direct-chat-timestamp float-right\">23 Jan 2:00 pm</span>
                                        </div>
                                        <!-- /.direct-chat-infos -->
                                        <img class=\"direct-chat-img\" src=\"dist/img/user1-128x128.jpg\" alt=\"message user image\">
                                        <!-- /.direct-chat-img -->
                                        <div class=\"direct-chat-text\">
                                            Is this template really for free? That's unbelievable!
                                        </div>
                                        <!-- /.direct-chat-text -->
                                    </div>
                                    <!-- /.direct-chat-msg -->

                                    <!-- Message to the right -->
                                    <div class=\"direct-chat-msg right\">
                                        <div class=\"direct-chat-infos clearfix\">
                                            <span class=\"direct-chat-name float-right\">Sarah Bullock</span>
                                            <span class=\"direct-chat-timestamp float-left\">23 Jan 2:05 pm</span>
                                        </div>
                                        <!-- /.direct-chat-infos -->
                                        <img class=\"direct-chat-img\" src=\"dist/img/user3-128x128.jpg\" alt=\"message user image\">
                                        <!-- /.direct-chat-img -->
                                        <div class=\"direct-chat-text\">
                                            You better believe it!
                                        </div>
                                        <!-- /.direct-chat-text -->
                                    </div>
                                    <!-- /.direct-chat-msg -->

                                    <!-- Message. Default to the left -->
                                    <div class=\"direct-chat-msg\">
                                        <div class=\"direct-chat-infos clearfix\">
                                            <span class=\"direct-chat-name float-left\">Alexander Pierce</span>
                                            <span class=\"direct-chat-timestamp float-right\">23 Jan 5:37 pm</span>
                                        </div>
                                        <!-- /.direct-chat-infos -->
                                        <img class=\"direct-chat-img\" src=\"dist/img/user1-128x128.jpg\" alt=\"message user image\">
                                        <!-- /.direct-chat-img -->
                                        <div class=\"direct-chat-text\">
                                            Working with AdminLTE on a great new app! Wanna join?
                                        </div>
                                        <!-- /.direct-chat-text -->
                                    </div>
                                    <!-- /.direct-chat-msg -->

                                    <!-- Message to the right -->
                                    <div class=\"direct-chat-msg right\">
                                        <div class=\"direct-chat-infos clearfix\">
                                            <span class=\"direct-chat-name float-right\">Sarah Bullock</span>
                                            <span class=\"direct-chat-timestamp float-left\">23 Jan 6:10 pm</span>
                                        </div>
                                        <!-- /.direct-chat-infos -->
                                        <img class=\"direct-chat-img\" src=\"dist/img/user3-128x128.jpg\" alt=\"message user image\">
                                        <!-- /.direct-chat-img -->
                                        <div class=\"direct-chat-text\">
                                            I would love to.
                                        </div>
                                        <!-- /.direct-chat-text -->
                                    </div>
                                    <!-- /.direct-chat-msg -->

                                </div>
                                <!--/.direct-chat-messages-->

                                <!-- Contacts are loaded here -->
                                <div class=\"direct-chat-contacts\">
                                    <ul class=\"contacts-list\">
                                        <li>
                                            <a href=\"#\">
                                                <img class=\"contacts-list-img\" src=\"dist/img/user1-128x128.jpg\">

                                                <div class=\"contacts-list-info\">
                          <span class=\"contacts-list-name\">
                            Count Dracula
                            <small class=\"contacts-list-date float-right\">2/28/2015</small>
                          </span>
                                                    <span class=\"contacts-list-msg\">How have you been? I was...</span>
                                                </div>
                                                <!-- /.contacts-list-info -->
                                            </a>
                                        </li>
                                        <!-- End Contact Item -->
                                        <li>
                                            <a href=\"#\">
                                                <img class=\"contacts-list-img\" src=\"dist/img/user7-128x128.jpg\">

                                                <div class=\"contacts-list-info\">
                          <span class=\"contacts-list-name\">
                            Sarah Doe
                            <small class=\"contacts-list-date float-right\">2/23/2015</small>
                          </span>
                                                    <span class=\"contacts-list-msg\">I will be waiting for...</span>
                                                </div>
                                                <!-- /.contacts-list-info -->
                                            </a>
                                        </li>
                                        <!-- End Contact Item -->
                                        <li>
                                            <a href=\"#\">
                                                <img class=\"contacts-list-img\" src=\"dist/img/user3-128x128.jpg\">

                                                <div class=\"contacts-list-info\">
                          <span class=\"contacts-list-name\">
                            Nadia Jolie
                            <small class=\"contacts-list-date float-right\">2/20/2015</small>
                          </span>
                                                    <span class=\"contacts-list-msg\">I'll call you back at...</span>
                                                </div>
                                                <!-- /.contacts-list-info -->
                                            </a>
                                        </li>
                                        <!-- End Contact Item -->
                                        <li>
                                            <a href=\"#\">
                                                <img class=\"contacts-list-img\" src=\"dist/img/user5-128x128.jpg\">

                                                <div class=\"contacts-list-info\">
                          <span class=\"contacts-list-name\">
                            Nora S. Vans
                            <small class=\"contacts-list-date float-right\">2/10/2015</small>
                          </span>
                                                    <span class=\"contacts-list-msg\">Where is your new...</span>
                                                </div>
                                                <!-- /.contacts-list-info -->
                                            </a>
                                        </li>
                                        <!-- End Contact Item -->
                                        <li>
                                            <a href=\"#\">
                                                <img class=\"contacts-list-img\" src=\"dist/img/user6-128x128.jpg\">

                                                <div class=\"contacts-list-info\">
                          <span class=\"contacts-list-name\">
                            John K.
                            <small class=\"contacts-list-date float-right\">1/27/2015</small>
                          </span>
                                                    <span class=\"contacts-list-msg\">Can I take a look at...</span>
                                                </div>
                                                <!-- /.contacts-list-info -->
                                            </a>
                                        </li>
                                        <!-- End Contact Item -->
                                        <li>
                                            <a href=\"#\">
                                                <img class=\"contacts-list-img\" src=\"dist/img/user8-128x128.jpg\">

                                                <div class=\"contacts-list-info\">
                          <span class=\"contacts-list-name\">
                            Kenneth M.
                            <small class=\"contacts-list-date float-right\">1/4/2015</small>
                          </span>
                                                    <span class=\"contacts-list-msg\">Never mind I found...</span>
                                                </div>
                                                <!-- /.contacts-list-info -->
                                            </a>
                                        </li>
                                        <!-- End Contact Item -->
                                    </ul>
                                    <!-- /.contacts-list -->
                                </div>
                                <!-- /.direct-chat-pane -->
                            </div>
                            <!-- /.card-body -->
                            <div class=\"card-footer\">
                                <form action=\"#\" method=\"post\">
                                    <div class=\"input-group\">
                                        <input type=\"text\" name=\"message\" placeholder=\"Type Message ...\" class=\"form-control\">
                                        <span class=\"input-group-append\">
                      <button type=\"button\" class=\"btn btn-primary\">Send</button>
                    </span>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-footer-->
                        </div>
                        <!--/.direct-chat -->

                        <!-- TO DO List -->
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">
                                    <i class=\"ion ion-clipboard mr-1\"></i>
                                    To Do List
                                </h3>

                                <div class=\"card-tools\">
                                    <ul class=\"pagination pagination-sm\">
                                        <li class=\"page-item\"><a href=\"#\" class=\"page-link\">&laquo;</a></li>
                                        <li class=\"page-item\"><a href=\"#\" class=\"page-link\">1</a></li>
                                        <li class=\"page-item\"><a href=\"#\" class=\"page-link\">2</a></li>
                                        <li class=\"page-item\"><a href=\"#\" class=\"page-link\">3</a></li>
                                        <li class=\"page-item\"><a href=\"#\" class=\"page-link\">&raquo;</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class=\"card-body\">
                                <ul class=\"todo-list\" data-widget=\"todo-list\">
                                    <li>
                                        <!-- drag handle -->
                                        <span class=\"handle\">
                      <i class=\"fas fa-ellipsis-v\"></i>
                      <i class=\"fas fa-ellipsis-v\"></i>
                    </span>
                                        <!-- checkbox -->
                                        <div  class=\"icheck-primary d-inline ml-2\">
                                            <input type=\"checkbox\" value=\"\" name=\"todo1\" id=\"todoCheck1\">
                                            <label for=\"todoCheck1\"></label>
                                        </div>
                                        <!-- todo text -->
                                        <span class=\"text\">Design a nice theme</span>
                                        <!-- Emphasis label -->
                                        <small class=\"badge badge-danger\"><i class=\"far fa-clock\"></i> 2 mins</small>
                                        <!-- General tools such as edit or delete-->
                                        <div class=\"tools\">
                                            <i class=\"fas fa-edit\"></i>
                                            <i class=\"fas fa-trash-o\"></i>
                                        </div>
                                    </li>
                                    <li>
                    <span class=\"handle\">
                      <i class=\"fas fa-ellipsis-v\"></i>
                      <i class=\"fas fa-ellipsis-v\"></i>
                    </span>
                                        <div  class=\"icheck-primary d-inline ml-2\">
                                            <input type=\"checkbox\" value=\"\" name=\"todo2\" id=\"todoCheck2\" checked>
                                            <label for=\"todoCheck2\"></label>
                                        </div>
                                        <span class=\"text\">Make the theme responsive</span>
                                        <small class=\"badge badge-info\"><i class=\"far fa-clock\"></i> 4 hours</small>
                                        <div class=\"tools\">
                                            <i class=\"fas fa-edit\"></i>
                                            <i class=\"fas fa-trash-o\"></i>
                                        </div>
                                    </li>
                                    <li>
                    <span class=\"handle\">
                      <i class=\"fas fa-ellipsis-v\"></i>
                      <i class=\"fas fa-ellipsis-v\"></i>
                    </span>
                                        <div  class=\"icheck-primary d-inline ml-2\">
                                            <input type=\"checkbox\" value=\"\" name=\"todo3\" id=\"todoCheck3\">
                                            <label for=\"todoCheck3\"></label>
                                        </div>
                                        <span class=\"text\">Let theme shine like a star</span>
                                        <small class=\"badge badge-warning\"><i class=\"far fa-clock\"></i> 1 day</small>
                                        <div class=\"tools\">
                                            <i class=\"fas fa-edit\"></i>
                                            <i class=\"fas fa-trash-o\"></i>
                                        </div>
                                    </li>
                                    <li>
                    <span class=\"handle\">
                      <i class=\"fas fa-ellipsis-v\"></i>
                      <i class=\"fas fa-ellipsis-v\"></i>
                    </span>
                                        <div  class=\"icheck-primary d-inline ml-2\">
                                            <input type=\"checkbox\" value=\"\" name=\"todo4\" id=\"todoCheck4\">
                                            <label for=\"todoCheck4\"></label>
                                        </div>
                                        <span class=\"text\">Let theme shine like a star</span>
                                        <small class=\"badge badge-success\"><i class=\"far fa-clock\"></i> 3 days</small>
                                        <div class=\"tools\">
                                            <i class=\"fas fa-edit\"></i>
                                            <i class=\"fas fa-trash-o\"></i>
                                        </div>
                                    </li>
                                    <li>
                    <span class=\"handle\">
                      <i class=\"fas fa-ellipsis-v\"></i>
                      <i class=\"fas fa-ellipsis-v\"></i>
                    </span>
                                        <div  class=\"icheck-primary d-inline ml-2\">
                                            <input type=\"checkbox\" value=\"\" name=\"todo5\" id=\"todoCheck5\">
                                            <label for=\"todoCheck5\"></label>
                                        </div>
                                        <span class=\"text\">Check your messages and notifications</span>
                                        <small class=\"badge badge-primary\"><i class=\"far fa-clock\"></i> 1 week</small>
                                        <div class=\"tools\">
                                            <i class=\"fas fa-edit\"></i>
                                            <i class=\"fas fa-trash-o\"></i>
                                        </div>
                                    </li>
                                    <li>
                    <span class=\"handle\">
                      <i class=\"fas fa-ellipsis-v\"></i>
                      <i class=\"fas fa-ellipsis-v\"></i>
                    </span>
                                        <div  class=\"icheck-primary d-inline ml-2\">
                                            <input type=\"checkbox\" value=\"\" name=\"todo6\" id=\"todoCheck6\">
                                            <label for=\"todoCheck6\"></label>
                                        </div>
                                        <span class=\"text\">Let theme shine like a star</span>
                                        <small class=\"badge badge-secondary\"><i class=\"far fa-clock\"></i> 1 month</small>
                                        <div class=\"tools\">
                                            <i class=\"fas fa-edit\"></i>
                                            <i class=\"fas fa-trash-o\"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.card-body -->
                            <div class=\"card-footer clearfix\">
                                <button type=\"button\" class=\"btn btn-info float-right\"><i class=\"fas fa-plus\"></i> Add item</button>
                            </div>
                        </div>
                        <!-- /.card -->
                    </section>
                    <!-- /.Left col -->
                    <!-- right col (We are only adding the ID to make the widgets sortable)-->
                    <section class=\"col-lg-5 connectedSortable\">

                        <!-- Map card -->
                        <div class=\"card bg-gradient-primary\">
                            <div class=\"card-header border-0\">
                                <h3 class=\"card-title\">
                                    <i class=\"fas fa-map-marker-alt mr-1\"></i>
                                    Visitors
                                </h3>
                                <!-- card tools -->
                                <div class=\"card-tools\">
                                    <button type=\"button\"
                                            class=\"btn btn-primary btn-sm daterange\"
                                            data-toggle=\"tooltip\"
                                            title=\"Date range\">
                                        <i class=\"far fa-calendar-alt\"></i>
                                    </button>
                                    <button type=\"button\"
                                            class=\"btn btn-primary btn-sm\"
                                            data-card-widget=\"collapse\"
                                            data-toggle=\"tooltip\"
                                            title=\"Collapse\">
                                        <i class=\"fas fa-minus\"></i>
                                    </button>
                                </div>
                                <!-- /.card-tools -->
                            </div>
                            <div class=\"card-body\">
                                <div id=\"world-map\" style=\"height: 250px; width: 100%;\"></div>
                            </div>
                            <!-- /.card-body-->
                            <div class=\"card-footer bg-transparent\">
                                <div class=\"row\">
                                    <div class=\"col-4 text-center\">
                                        <div id=\"sparkline-1\"></div>
                                        <div class=\"text-white\">Visitors</div>
                                    </div>
                                    <!-- ./col -->
                                    <div class=\"col-4 text-center\">
                                        <div id=\"sparkline-2\"></div>
                                        <div class=\"text-white\">Online</div>
                                    </div>
                                    <!-- ./col -->
                                    <div class=\"col-4 text-center\">
                                        <div id=\"sparkline-3\"></div>
                                        <div class=\"text-white\">Sales</div>
                                    </div>
                                    <!-- ./col -->
                                </div>
                                <!-- /.row -->
                            </div>
                        </div>
                        <!-- /.card -->

                        <!-- solid sales graph -->
                        <div class=\"card bg-gradient-info\">
                            <div class=\"card-header border-0\">
                                <h3 class=\"card-title\">
                                    <i class=\"fas fa-th mr-1\"></i>
                                    Sales Graph
                                </h3>

                                <div class=\"card-tools\">
                                    <button type=\"button\" class=\"btn bg-info btn-sm\" data-card-widget=\"collapse\">
                                        <i class=\"fas fa-minus\"></i>
                                    </button>
                                    <button type=\"button\" class=\"btn bg-info btn-sm\" data-card-widget=\"remove\">
                                        <i class=\"fas fa-times\"></i>
                                    </button>
                                </div>
                            </div>
                            <div class=\"card-body\">
                                <canvas class=\"chart\" id=\"line-chart\" style=\"min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;\"></canvas>
                            </div>
                            <!-- /.card-body -->
                            <div class=\"card-footer bg-transparent\">
                                <div class=\"row\">
                                    <div class=\"col-4 text-center\">
                                        <input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"20\" data-width=\"60\" data-height=\"60\"
                                               data-fgColor=\"#39CCCC\">

                                        <div class=\"text-white\">Mail-Orders</div>
                                    </div>
                                    <!-- ./col -->
                                    <div class=\"col-4 text-center\">
                                        <input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"50\" data-width=\"60\" data-height=\"60\"
                                               data-fgColor=\"#39CCCC\">

                                        <div class=\"text-white\">Online</div>
                                    </div>
                                    <!-- ./col -->
                                    <div class=\"col-4 text-center\">
                                        <input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"30\" data-width=\"60\" data-height=\"60\"
                                               data-fgColor=\"#39CCCC\">

                                        <div class=\"text-white\">In-Store</div>
                                    </div>
                                    <!-- ./col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->

                        <!-- Calendar -->
                        <div class=\"card bg-gradient-success\">
                            <div class=\"card-header border-0\">

                                <h3 class=\"card-title\">
                                    <i class=\"far fa-calendar-alt\"></i>
                                    Calendar
                                </h3>
                                <!-- tools card -->
                                <div class=\"card-tools\">
                                    <!-- button with a dropdown -->
                                    <div class=\"btn-group\">
                                        <button type=\"button\" class=\"btn btn-success btn-sm dropdown-toggle\" data-toggle=\"dropdown\" data-offset=\"-52\">
                                            <i class=\"fas fa-bars\"></i></button>
                                        <div class=\"dropdown-menu\" role=\"menu\">
                                            <a href=\"#\" class=\"dropdown-item\">Add new event</a>
                                            <a href=\"#\" class=\"dropdown-item\">Clear events</a>
                                            <div class=\"dropdown-divider\"></div>
                                            <a href=\"#\" class=\"dropdown-item\">View calendar</a>
                                        </div>
                                    </div>
                                    <button type=\"button\" class=\"btn btn-success btn-sm\" data-card-widget=\"collapse\">
                                        <i class=\"fas fa-minus\"></i>
                                    </button>
                                    <button type=\"button\" class=\"btn btn-success btn-sm\" data-card-widget=\"remove\">
                                        <i class=\"fas fa-times\"></i>
                                    </button>
                                </div>
                                <!-- /. tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class=\"card-body pt-0\">
                                <!--The calendar -->
                                <div id=\"calendar\" style=\"width: 100%\"></div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </section>
                    <!-- right col -->
                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 815
    public function block_titTab($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titTab"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titTab"));

        echo "Sales";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 828
    public function block_tab($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tab"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tab"));

        // line 829
        echo "                                <div class=\"card-body\">
                                    <div class=\"tab-content p-0\">
                                        <!-- Morris chart - Sales -->
                                        <div class=\"chart tab-pane active\" id=\"revenue-chart\"
                                             style=\"position: relative; height: 300px;\">
                                            <canvas id=\"revenue-chart-canvas\" height=\"300\" style=\"height: 300px;\"></canvas>
                                        </div>
                                        <div class=\"chart tab-pane\" id=\"sales-chart\" style=\"position: relative; height: 300px;\">
                                            <canvas id=\"sales-chart-canvas\" height=\"300\" style=\"height: 300px;\"></canvas>
                                        </div>
                                    </div>
                                </div><!-- /.card-body -->
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home_admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1557 => 829,  1547 => 828,  1528 => 815,  1030 => 842,  1028 => 828,  1014 => 816,  1012 => 815,  935 => 740,  925 => 739,  860 => 1331,  858 => 739,  418 => 302,  409 => 296,  400 => 290,  380 => 273,  371 => 267,  362 => 261,  353 => 255,  344 => 249,  335 => 243,  326 => 237,  304 => 218,  293 => 210,  283 => 203,  271 => 194,  233 => 159,  112 => 41,  94 => 26,  89 => 24,  84 => 22,  79 => 20,  74 => 18,  69 => 16,  64 => 14,  57 => 10,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>AdminLTE 3 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"{{ asset(\"plugins/fontawesome-free/css/all.min.css\") }}\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel=\"stylesheet\" href=\"{{ asset(\"plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css\") }}\">
    <!-- iCheck -->
    <link rel=\"stylesheet\" href=\"{{ asset(\"plugins/icheck-bootstrap/icheck-bootstrap.min.css\") }}\">
    <!-- JQVMap -->
    <link rel=\"stylesheet\" href=\"{{ asset(\"plugins/jqvmap/jqvmap.min.css\") }}\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"{{ asset(\"dist/css/adminlte.min.css\") }}\">
    <!-- overlayScrollbars -->
    <link rel=\"stylesheet\" href=\"{{ asset(\"plugins/overlayScrollbars/css/OverlayScrollbars.min.css\") }}\">
    <!-- Daterange picker -->
    <link rel=\"stylesheet\" href=\"{{ asset(\"plugins/daterangepicker/daterangepicker.css\") }}\">
    <!-- summernote -->
    <link rel=\"stylesheet\" href=\"{{ asset(\"plugins/summernote/summernote-bs4.css\") }}\">
    <!-- Google Font: Source Sans Pro -->
    <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
</head>
<body class=\"hold-transition sidebar-mini layout-fixed\">
<div class=\"wrapper\">

    <!-- Navbar -->
    <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
        <!-- Left navbar links -->
        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\"><i class=\"fas fa-bars\"></i></a>
            </li>
            <li class=\"nav-item d-none d-sm-inline-block\">
                <a href=\"{{ path('home_admin')}}\" class=\"nav-link\">Home</a>
            </li>
            <li class=\"nav-item d-none d-sm-inline-block\">
                <a href=\"#\" class=\"nav-link\">Contact</a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class=\"form-inline ml-3\">
            <div class=\"input-group input-group-sm\">
                <input class=\"form-control form-control-navbar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                <div class=\"input-group-append\">
                    <button class=\"btn btn-navbar\" type=\"submit\">
                        <i class=\"fas fa-search\"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Right navbar links -->
        <ul class=\"navbar-nav ml-auto\">
            <!-- Messages Dropdown Menu -->
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                    <i class=\"far fa-comments\"></i>
                    <span class=\"badge badge-danger navbar-badge\">3</span>
                </a>
                <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                    <a href=\"#\" class=\"dropdown-item\">
                        <!-- Message Start -->
                        <div class=\"media\">
                            <img src=\"dist/img/user1-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 mr-3 img-circle\">
                            <div class=\"media-body\">
                                <h3 class=\"dropdown-item-title\">
                                    Brad Diesel
                                    <span class=\"float-right text-sm text-danger\"><i class=\"fas fa-star\"></i></span>
                                </h3>
                                <p class=\"text-sm\">Call me whenever you can...</p>
                                <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <!-- Message Start -->
                        <div class=\"media\">
                            <img src=\"dist/img/user8-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
                            <div class=\"media-body\">
                                <h3 class=\"dropdown-item-title\">
                                    John Pierce
                                    <span class=\"float-right text-sm text-muted\"><i class=\"fas fa-star\"></i></span>
                                </h3>
                                <p class=\"text-sm\">I got your message bro</p>
                                <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <!-- Message Start -->
                        <div class=\"media\">
                            <img src=\"dist/img/user3-128x128.jpg\" alt=\"User Avatar\" class=\"img-size-50 img-circle mr-3\">
                            <div class=\"media-body\">
                                <h3 class=\"dropdown-item-title\">
                                    Nora Silvester
                                    <span class=\"float-right text-sm text-warning\"><i class=\"fas fa-star\"></i></span>
                                </h3>
                                <p class=\"text-sm\">The subject goes here</p>
                                <p class=\"text-sm text-muted\"><i class=\"far fa-clock mr-1\"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Messages</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
                    <i class=\"far fa-bell\"></i>
                    <span class=\"badge badge-warning navbar-badge\">15</span>
                </a>
                <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
                    <span class=\"dropdown-item dropdown-header\">15 Notifications</span>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <i class=\"fas fa-envelope mr-2\"></i> 4 new messages
                        <span class=\"float-right text-muted text-sm\">3 mins</span>
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <i class=\"fas fa-users mr-2\"></i> 8 friend requests
                        <span class=\"float-right text-muted text-sm\">12 hours</span>
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item\">
                        <i class=\"fas fa-file mr-2\"></i> 3 new reports
                        <span class=\"float-right text-muted text-sm\">2 days</span>
                    </a>
                    <div class=\"dropdown-divider\"></div>
                    <a href=\"#\" class=\"dropdown-item dropdown-footer\">See All Notifications</a>
                </div>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-widget=\"control-sidebar\" data-slide=\"true\" href=\"#\" role=\"button\">
                    <i class=\"fas fa-th-large\"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
        <!-- Brand Logo -->
        <a href=\"{{ path('home_admin')}}\" class=\"brand-link\">
            <img src=\"dist/img/AdminLTELogo.png\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\"
                 style=\"opacity: .8\">
            <span class=\"brand-text font-weight-light\">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class=\"sidebar\">
            <!-- Sidebar user panel (optional) -->
            <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
                <div class=\"image\">
                    <img src=\"dist/img/user2-160x160.jpg\" class=\"img-circle elevation-2\" alt=\"User Image\">
                </div>
                <div class=\"info\">
                    <a href=\"#\" class=\"d-block\">Alexander Pierce</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class=\"mt-2\">
                <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class=\"nav-item has-treeview menu-open\">
                        <a href=\"#\" class=\"nav-link active\">
                            <i class=\"nav-icon fas fa-tachometer-alt\"></i>
                            <p>
                                Dashboard
                                <i class=\"right fas fa-angle-left\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">

                            <li class=\"nav-item\">

                                <a href=\"{{ path('AgestionHotel')}}\" class=\"nav-link active\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Dashboard Hotel</p>
                                </a>

                            </li>

                            <li class=\"nav-item\">

                                <a href=\"{{ path('AgestionPromotion')}}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Dashboard Promotion</p>
                                </a>

                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ path('AgestionMaison')}}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Dashboard Maison</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"{{ asset(\"pages/widgets.html\") }}\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-th\"></i>
                            <p>
                                Widgets
                                <span class=\"right badge badge-danger\">New</span>
                            </p>
                        </a>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-copy\"></i>
                            <p>
                                Layout Options
                                <i class=\"fas fa-angle-left right\"></i>
                                <span class=\"badge badge-info right\">6</span>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"pages/layout/top-nav.html\" ) }}\"class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Top Navigation</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"pages/layout/top-nav-sidebar.html\" ) }}\"class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Top Navigation + Sidebar</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"pages/layout/boxed.html\" ) }}\"class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Boxed</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"pages/layout/fixed-sidebar.html\" ) }}\"class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Fixed Sidebar</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"pages/layout/fixed-topnav.html\") }}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Fixed Navbar</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"pages/layout/fixed-footer.html\") }}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Fixed Footer</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"pages/layout/collapsed-sidebar.html\") }}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Collapsed Sidebar</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-chart-pie\"></i>
                            <p>
                                Charts
                                <i class=\"right fas fa-angle-left\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"pages/charts/chartjs.html\") }}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>ChartJS</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"pages/charts/flot.html\") }}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Flot</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"{{ asset(\"pages/charts/inline.html\") }}\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Inline</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-tree\"></i>
                            <p>
                                UI Elements
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"pages/UI/general.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>General</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/UI/icons.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Icons</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/UI/buttons.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Buttons</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/UI/sliders.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Sliders</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/UI/modals.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Modals & Alerts</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/UI/navbar.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Navbar & Tabs</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/UI/timeline.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Timeline</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/UI/ribbons.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Ribbons</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-edit\"></i>
                            <p>
                                Forms
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"pages/forms/general.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>General Elements</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/forms/advanced.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Advanced Elements</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/forms/editors.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Editors</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/forms/validation.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Validation</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-table\"></i>
                            <p>
                                Tables
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"pages/tables/simple.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Simple Tables</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/tables/data.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>DataTables</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/tables/jsgrid.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>jsGrid</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-header\">EXAMPLES</li>
                    <li class=\"nav-item\">
                        <a href=\"pages/calendar.html\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-calendar-alt\"></i>
                            <p>
                                Calendar
                                <span class=\"badge badge-info right\">2</span>
                            </p>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"pages/gallery.html\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-image\"></i>
                            <p>
                                Gallery
                            </p>
                        </a>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-envelope\"></i>
                            <p>
                                Mailbox
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"pages/mailbox/mailbox.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Inbox</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/mailbox/compose.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Compose</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/mailbox/read-mail.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Read</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-book\"></i>
                            <p>
                                Pages
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/invoice.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Invoice</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/profile.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Profile</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/e-commerce.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>E-commerce</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/projects.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Projects</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/project-add.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Project Add</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/project-edit.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Project Edit</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/project-detail.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Project Detail</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/contacts.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Contacts</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-plus-square\"></i>
                            <p>
                                Extras
                                <i class=\"fas fa-angle-left right\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/login.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Login</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/register.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Register</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/forgot-password.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Forgot Password</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/recover-password.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Recover Password</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/lockscreen.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Lockscreen</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/legacy-user-menu.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Legacy User Menu</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/language-menu.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Language Menu</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/404.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Error 404</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/500.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Error 500</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/pace.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Pace</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"pages/examples/blank.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Blank Page</p>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"starter.html\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Starter Page</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-header\">MISCELLANEOUS</li>
                    <li class=\"nav-item\">
                        <a href=\"https://adminlte.io/docs/3.0\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-file\"></i>
                            <p>Documentation</p>
                        </a>
                    </li>
                    <li class=\"nav-header\">MULTI LEVEL EXAMPLE</li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"fas fa-circle nav-icon\"></i>
                            <p>Level 1</p>
                        </a>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-circle\"></i>
                            <p>
                                Level 1
                                <i class=\"right fas fa-angle-left\"></i>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Level 2</p>
                                </a>
                            </li>
                            <li class=\"nav-item has-treeview\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>
                                        Level 2
                                        <i class=\"right fas fa-angle-left\"></i>
                                    </p>
                                </a>
                                <ul class=\"nav nav-treeview\">
                                    <li class=\"nav-item\">
                                        <a href=\"#\" class=\"nav-link\">
                                            <i class=\"far fa-dot-circle nav-icon\"></i>
                                            <p>Level 3</p>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"#\" class=\"nav-link\">
                                            <i class=\"far fa-dot-circle nav-icon\"></i>
                                            <p>Level 3</p>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a href=\"#\" class=\"nav-link\">
                                            <i class=\"far fa-dot-circle nav-icon\"></i>
                                            <p>Level 3</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"#\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Level 2</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"fas fa-circle nav-icon\"></i>
                            <p>Level 1</p>
                        </a>
                    </li>
                    <li class=\"nav-header\">LABELS</li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-circle text-danger\"></i>
                            <p class=\"text\">Important</p>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-circle text-warning\"></i>
                            <p>Warning</p>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"nav-icon far fa-circle text-info\"></i>
                            <p>Informational</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <div class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1 class=\"m-0 text-dark\">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                            <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                            <li class=\"breadcrumb-item active\">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->{% block content %}
        <section class=\"content\">
            <div class=\"container-fluid\">
                <!-- Small boxes (Stat box) -->
                <div class=\"row\">
                    <div class=\"col-lg-3 col-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-info\">
                            <div class=\"inner\">
                                <h3>150</h3>

                                <p>New Orders</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-bag\"></i>
                            </div>
                            <a href=\"#\" class=\"small-box-footer\">More info <i class=\"fas fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class=\"col-lg-3 col-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-success\">
                            <div class=\"inner\">
                                <h3>53<sup style=\"font-size: 20px\">%</sup></h3>

                                <p>Bounce Rate</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-stats-bars\"></i>
                            </div>
                            <a href=\"#\" class=\"small-box-footer\">More info <i class=\"fas fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class=\"col-lg-3 col-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-warning\">
                            <div class=\"inner\">
                                <h3>44</h3>

                                <p>User Registrations</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-person-add\"></i>
                            </div>
                            <a href=\"#\" class=\"small-box-footer\">More info <i class=\"fas fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class=\"col-lg-3 col-6\">
                        <!-- small box -->
                        <div class=\"small-box bg-danger\">
                            <div class=\"inner\">
                                <h3>65</h3>

                                <p>Unique Visitors</p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"ion ion-pie-graph\"></i>
                            </div>
                            <a href=\"#\" class=\"small-box-footer\">More info <i class=\"fas fa-arrow-circle-right\"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
                <!-- Main row -->
                <div class=\"row\">
                    <!-- Left col -->
                    <section class=\"col-lg-7 connectedSortable\">
                        <!-- Custom tabs (Charts with tabs)-->
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">
                                    <i class=\"fas fa-chart-pie mr-1\"></i>
                                    {% block titTab %}Sales{% endblock %}
                                </h3>
                                <div class=\"card-tools\">
                                    <ul class=\"nav nav-pills ml-auto\">
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link active\" href=\"#revenue-chart\" data-toggle=\"tab\">Area</a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"#sales-chart\" data-toggle=\"tab\">Donut</a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- /.card-header -->
                            {% block tab %}
                                <div class=\"card-body\">
                                    <div class=\"tab-content p-0\">
                                        <!-- Morris chart - Sales -->
                                        <div class=\"chart tab-pane active\" id=\"revenue-chart\"
                                             style=\"position: relative; height: 300px;\">
                                            <canvas id=\"revenue-chart-canvas\" height=\"300\" style=\"height: 300px;\"></canvas>
                                        </div>
                                        <div class=\"chart tab-pane\" id=\"sales-chart\" style=\"position: relative; height: 300px;\">
                                            <canvas id=\"sales-chart-canvas\" height=\"300\" style=\"height: 300px;\"></canvas>
                                        </div>
                                    </div>
                                </div><!-- /.card-body -->
                            {% endblock %}

                        </div>
                        <!-- /.card -->

                        <!-- DIRECT CHAT -->
                        <div class=\"card direct-chat direct-chat-primary\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">Direct Chat</h3>

                                <div class=\"card-tools\">
                                    <span data-toggle=\"tooltip\" title=\"3 New Messages\" class=\"badge badge-primary\">3</span>
                                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\">
                                        <i class=\"fas fa-minus\"></i>
                                    </button>
                                    <button type=\"button\" class=\"btn btn-tool\" data-toggle=\"tooltip\" title=\"Contacts\"
                                            data-widget=\"chat-pane-toggle\">
                                        <i class=\"fas fa-comments\"></i>
                                    </button>
                                    <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"remove\"><i class=\"fas fa-times\"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class=\"card-body\">
                                <!-- Conversations are loaded here -->
                                <div class=\"direct-chat-messages\">
                                    <!-- Message. Default to the left -->
                                    <div class=\"direct-chat-msg\">
                                        <div class=\"direct-chat-infos clearfix\">
                                            <span class=\"direct-chat-name float-left\">Alexander Pierce</span>
                                            <span class=\"direct-chat-timestamp float-right\">23 Jan 2:00 pm</span>
                                        </div>
                                        <!-- /.direct-chat-infos -->
                                        <img class=\"direct-chat-img\" src=\"dist/img/user1-128x128.jpg\" alt=\"message user image\">
                                        <!-- /.direct-chat-img -->
                                        <div class=\"direct-chat-text\">
                                            Is this template really for free? That's unbelievable!
                                        </div>
                                        <!-- /.direct-chat-text -->
                                    </div>
                                    <!-- /.direct-chat-msg -->

                                    <!-- Message to the right -->
                                    <div class=\"direct-chat-msg right\">
                                        <div class=\"direct-chat-infos clearfix\">
                                            <span class=\"direct-chat-name float-right\">Sarah Bullock</span>
                                            <span class=\"direct-chat-timestamp float-left\">23 Jan 2:05 pm</span>
                                        </div>
                                        <!-- /.direct-chat-infos -->
                                        <img class=\"direct-chat-img\" src=\"dist/img/user3-128x128.jpg\" alt=\"message user image\">
                                        <!-- /.direct-chat-img -->
                                        <div class=\"direct-chat-text\">
                                            You better believe it!
                                        </div>
                                        <!-- /.direct-chat-text -->
                                    </div>
                                    <!-- /.direct-chat-msg -->

                                    <!-- Message. Default to the left -->
                                    <div class=\"direct-chat-msg\">
                                        <div class=\"direct-chat-infos clearfix\">
                                            <span class=\"direct-chat-name float-left\">Alexander Pierce</span>
                                            <span class=\"direct-chat-timestamp float-right\">23 Jan 5:37 pm</span>
                                        </div>
                                        <!-- /.direct-chat-infos -->
                                        <img class=\"direct-chat-img\" src=\"dist/img/user1-128x128.jpg\" alt=\"message user image\">
                                        <!-- /.direct-chat-img -->
                                        <div class=\"direct-chat-text\">
                                            Working with AdminLTE on a great new app! Wanna join?
                                        </div>
                                        <!-- /.direct-chat-text -->
                                    </div>
                                    <!-- /.direct-chat-msg -->

                                    <!-- Message to the right -->
                                    <div class=\"direct-chat-msg right\">
                                        <div class=\"direct-chat-infos clearfix\">
                                            <span class=\"direct-chat-name float-right\">Sarah Bullock</span>
                                            <span class=\"direct-chat-timestamp float-left\">23 Jan 6:10 pm</span>
                                        </div>
                                        <!-- /.direct-chat-infos -->
                                        <img class=\"direct-chat-img\" src=\"dist/img/user3-128x128.jpg\" alt=\"message user image\">
                                        <!-- /.direct-chat-img -->
                                        <div class=\"direct-chat-text\">
                                            I would love to.
                                        </div>
                                        <!-- /.direct-chat-text -->
                                    </div>
                                    <!-- /.direct-chat-msg -->

                                </div>
                                <!--/.direct-chat-messages-->

                                <!-- Contacts are loaded here -->
                                <div class=\"direct-chat-contacts\">
                                    <ul class=\"contacts-list\">
                                        <li>
                                            <a href=\"#\">
                                                <img class=\"contacts-list-img\" src=\"dist/img/user1-128x128.jpg\">

                                                <div class=\"contacts-list-info\">
                          <span class=\"contacts-list-name\">
                            Count Dracula
                            <small class=\"contacts-list-date float-right\">2/28/2015</small>
                          </span>
                                                    <span class=\"contacts-list-msg\">How have you been? I was...</span>
                                                </div>
                                                <!-- /.contacts-list-info -->
                                            </a>
                                        </li>
                                        <!-- End Contact Item -->
                                        <li>
                                            <a href=\"#\">
                                                <img class=\"contacts-list-img\" src=\"dist/img/user7-128x128.jpg\">

                                                <div class=\"contacts-list-info\">
                          <span class=\"contacts-list-name\">
                            Sarah Doe
                            <small class=\"contacts-list-date float-right\">2/23/2015</small>
                          </span>
                                                    <span class=\"contacts-list-msg\">I will be waiting for...</span>
                                                </div>
                                                <!-- /.contacts-list-info -->
                                            </a>
                                        </li>
                                        <!-- End Contact Item -->
                                        <li>
                                            <a href=\"#\">
                                                <img class=\"contacts-list-img\" src=\"dist/img/user3-128x128.jpg\">

                                                <div class=\"contacts-list-info\">
                          <span class=\"contacts-list-name\">
                            Nadia Jolie
                            <small class=\"contacts-list-date float-right\">2/20/2015</small>
                          </span>
                                                    <span class=\"contacts-list-msg\">I'll call you back at...</span>
                                                </div>
                                                <!-- /.contacts-list-info -->
                                            </a>
                                        </li>
                                        <!-- End Contact Item -->
                                        <li>
                                            <a href=\"#\">
                                                <img class=\"contacts-list-img\" src=\"dist/img/user5-128x128.jpg\">

                                                <div class=\"contacts-list-info\">
                          <span class=\"contacts-list-name\">
                            Nora S. Vans
                            <small class=\"contacts-list-date float-right\">2/10/2015</small>
                          </span>
                                                    <span class=\"contacts-list-msg\">Where is your new...</span>
                                                </div>
                                                <!-- /.contacts-list-info -->
                                            </a>
                                        </li>
                                        <!-- End Contact Item -->
                                        <li>
                                            <a href=\"#\">
                                                <img class=\"contacts-list-img\" src=\"dist/img/user6-128x128.jpg\">

                                                <div class=\"contacts-list-info\">
                          <span class=\"contacts-list-name\">
                            John K.
                            <small class=\"contacts-list-date float-right\">1/27/2015</small>
                          </span>
                                                    <span class=\"contacts-list-msg\">Can I take a look at...</span>
                                                </div>
                                                <!-- /.contacts-list-info -->
                                            </a>
                                        </li>
                                        <!-- End Contact Item -->
                                        <li>
                                            <a href=\"#\">
                                                <img class=\"contacts-list-img\" src=\"dist/img/user8-128x128.jpg\">

                                                <div class=\"contacts-list-info\">
                          <span class=\"contacts-list-name\">
                            Kenneth M.
                            <small class=\"contacts-list-date float-right\">1/4/2015</small>
                          </span>
                                                    <span class=\"contacts-list-msg\">Never mind I found...</span>
                                                </div>
                                                <!-- /.contacts-list-info -->
                                            </a>
                                        </li>
                                        <!-- End Contact Item -->
                                    </ul>
                                    <!-- /.contacts-list -->
                                </div>
                                <!-- /.direct-chat-pane -->
                            </div>
                            <!-- /.card-body -->
                            <div class=\"card-footer\">
                                <form action=\"#\" method=\"post\">
                                    <div class=\"input-group\">
                                        <input type=\"text\" name=\"message\" placeholder=\"Type Message ...\" class=\"form-control\">
                                        <span class=\"input-group-append\">
                      <button type=\"button\" class=\"btn btn-primary\">Send</button>
                    </span>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-footer-->
                        </div>
                        <!--/.direct-chat -->

                        <!-- TO DO List -->
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">
                                    <i class=\"ion ion-clipboard mr-1\"></i>
                                    To Do List
                                </h3>

                                <div class=\"card-tools\">
                                    <ul class=\"pagination pagination-sm\">
                                        <li class=\"page-item\"><a href=\"#\" class=\"page-link\">&laquo;</a></li>
                                        <li class=\"page-item\"><a href=\"#\" class=\"page-link\">1</a></li>
                                        <li class=\"page-item\"><a href=\"#\" class=\"page-link\">2</a></li>
                                        <li class=\"page-item\"><a href=\"#\" class=\"page-link\">3</a></li>
                                        <li class=\"page-item\"><a href=\"#\" class=\"page-link\">&raquo;</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class=\"card-body\">
                                <ul class=\"todo-list\" data-widget=\"todo-list\">
                                    <li>
                                        <!-- drag handle -->
                                        <span class=\"handle\">
                      <i class=\"fas fa-ellipsis-v\"></i>
                      <i class=\"fas fa-ellipsis-v\"></i>
                    </span>
                                        <!-- checkbox -->
                                        <div  class=\"icheck-primary d-inline ml-2\">
                                            <input type=\"checkbox\" value=\"\" name=\"todo1\" id=\"todoCheck1\">
                                            <label for=\"todoCheck1\"></label>
                                        </div>
                                        <!-- todo text -->
                                        <span class=\"text\">Design a nice theme</span>
                                        <!-- Emphasis label -->
                                        <small class=\"badge badge-danger\"><i class=\"far fa-clock\"></i> 2 mins</small>
                                        <!-- General tools such as edit or delete-->
                                        <div class=\"tools\">
                                            <i class=\"fas fa-edit\"></i>
                                            <i class=\"fas fa-trash-o\"></i>
                                        </div>
                                    </li>
                                    <li>
                    <span class=\"handle\">
                      <i class=\"fas fa-ellipsis-v\"></i>
                      <i class=\"fas fa-ellipsis-v\"></i>
                    </span>
                                        <div  class=\"icheck-primary d-inline ml-2\">
                                            <input type=\"checkbox\" value=\"\" name=\"todo2\" id=\"todoCheck2\" checked>
                                            <label for=\"todoCheck2\"></label>
                                        </div>
                                        <span class=\"text\">Make the theme responsive</span>
                                        <small class=\"badge badge-info\"><i class=\"far fa-clock\"></i> 4 hours</small>
                                        <div class=\"tools\">
                                            <i class=\"fas fa-edit\"></i>
                                            <i class=\"fas fa-trash-o\"></i>
                                        </div>
                                    </li>
                                    <li>
                    <span class=\"handle\">
                      <i class=\"fas fa-ellipsis-v\"></i>
                      <i class=\"fas fa-ellipsis-v\"></i>
                    </span>
                                        <div  class=\"icheck-primary d-inline ml-2\">
                                            <input type=\"checkbox\" value=\"\" name=\"todo3\" id=\"todoCheck3\">
                                            <label for=\"todoCheck3\"></label>
                                        </div>
                                        <span class=\"text\">Let theme shine like a star</span>
                                        <small class=\"badge badge-warning\"><i class=\"far fa-clock\"></i> 1 day</small>
                                        <div class=\"tools\">
                                            <i class=\"fas fa-edit\"></i>
                                            <i class=\"fas fa-trash-o\"></i>
                                        </div>
                                    </li>
                                    <li>
                    <span class=\"handle\">
                      <i class=\"fas fa-ellipsis-v\"></i>
                      <i class=\"fas fa-ellipsis-v\"></i>
                    </span>
                                        <div  class=\"icheck-primary d-inline ml-2\">
                                            <input type=\"checkbox\" value=\"\" name=\"todo4\" id=\"todoCheck4\">
                                            <label for=\"todoCheck4\"></label>
                                        </div>
                                        <span class=\"text\">Let theme shine like a star</span>
                                        <small class=\"badge badge-success\"><i class=\"far fa-clock\"></i> 3 days</small>
                                        <div class=\"tools\">
                                            <i class=\"fas fa-edit\"></i>
                                            <i class=\"fas fa-trash-o\"></i>
                                        </div>
                                    </li>
                                    <li>
                    <span class=\"handle\">
                      <i class=\"fas fa-ellipsis-v\"></i>
                      <i class=\"fas fa-ellipsis-v\"></i>
                    </span>
                                        <div  class=\"icheck-primary d-inline ml-2\">
                                            <input type=\"checkbox\" value=\"\" name=\"todo5\" id=\"todoCheck5\">
                                            <label for=\"todoCheck5\"></label>
                                        </div>
                                        <span class=\"text\">Check your messages and notifications</span>
                                        <small class=\"badge badge-primary\"><i class=\"far fa-clock\"></i> 1 week</small>
                                        <div class=\"tools\">
                                            <i class=\"fas fa-edit\"></i>
                                            <i class=\"fas fa-trash-o\"></i>
                                        </div>
                                    </li>
                                    <li>
                    <span class=\"handle\">
                      <i class=\"fas fa-ellipsis-v\"></i>
                      <i class=\"fas fa-ellipsis-v\"></i>
                    </span>
                                        <div  class=\"icheck-primary d-inline ml-2\">
                                            <input type=\"checkbox\" value=\"\" name=\"todo6\" id=\"todoCheck6\">
                                            <label for=\"todoCheck6\"></label>
                                        </div>
                                        <span class=\"text\">Let theme shine like a star</span>
                                        <small class=\"badge badge-secondary\"><i class=\"far fa-clock\"></i> 1 month</small>
                                        <div class=\"tools\">
                                            <i class=\"fas fa-edit\"></i>
                                            <i class=\"fas fa-trash-o\"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.card-body -->
                            <div class=\"card-footer clearfix\">
                                <button type=\"button\" class=\"btn btn-info float-right\"><i class=\"fas fa-plus\"></i> Add item</button>
                            </div>
                        </div>
                        <!-- /.card -->
                    </section>
                    <!-- /.Left col -->
                    <!-- right col (We are only adding the ID to make the widgets sortable)-->
                    <section class=\"col-lg-5 connectedSortable\">

                        <!-- Map card -->
                        <div class=\"card bg-gradient-primary\">
                            <div class=\"card-header border-0\">
                                <h3 class=\"card-title\">
                                    <i class=\"fas fa-map-marker-alt mr-1\"></i>
                                    Visitors
                                </h3>
                                <!-- card tools -->
                                <div class=\"card-tools\">
                                    <button type=\"button\"
                                            class=\"btn btn-primary btn-sm daterange\"
                                            data-toggle=\"tooltip\"
                                            title=\"Date range\">
                                        <i class=\"far fa-calendar-alt\"></i>
                                    </button>
                                    <button type=\"button\"
                                            class=\"btn btn-primary btn-sm\"
                                            data-card-widget=\"collapse\"
                                            data-toggle=\"tooltip\"
                                            title=\"Collapse\">
                                        <i class=\"fas fa-minus\"></i>
                                    </button>
                                </div>
                                <!-- /.card-tools -->
                            </div>
                            <div class=\"card-body\">
                                <div id=\"world-map\" style=\"height: 250px; width: 100%;\"></div>
                            </div>
                            <!-- /.card-body-->
                            <div class=\"card-footer bg-transparent\">
                                <div class=\"row\">
                                    <div class=\"col-4 text-center\">
                                        <div id=\"sparkline-1\"></div>
                                        <div class=\"text-white\">Visitors</div>
                                    </div>
                                    <!-- ./col -->
                                    <div class=\"col-4 text-center\">
                                        <div id=\"sparkline-2\"></div>
                                        <div class=\"text-white\">Online</div>
                                    </div>
                                    <!-- ./col -->
                                    <div class=\"col-4 text-center\">
                                        <div id=\"sparkline-3\"></div>
                                        <div class=\"text-white\">Sales</div>
                                    </div>
                                    <!-- ./col -->
                                </div>
                                <!-- /.row -->
                            </div>
                        </div>
                        <!-- /.card -->

                        <!-- solid sales graph -->
                        <div class=\"card bg-gradient-info\">
                            <div class=\"card-header border-0\">
                                <h3 class=\"card-title\">
                                    <i class=\"fas fa-th mr-1\"></i>
                                    Sales Graph
                                </h3>

                                <div class=\"card-tools\">
                                    <button type=\"button\" class=\"btn bg-info btn-sm\" data-card-widget=\"collapse\">
                                        <i class=\"fas fa-minus\"></i>
                                    </button>
                                    <button type=\"button\" class=\"btn bg-info btn-sm\" data-card-widget=\"remove\">
                                        <i class=\"fas fa-times\"></i>
                                    </button>
                                </div>
                            </div>
                            <div class=\"card-body\">
                                <canvas class=\"chart\" id=\"line-chart\" style=\"min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;\"></canvas>
                            </div>
                            <!-- /.card-body -->
                            <div class=\"card-footer bg-transparent\">
                                <div class=\"row\">
                                    <div class=\"col-4 text-center\">
                                        <input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"20\" data-width=\"60\" data-height=\"60\"
                                               data-fgColor=\"#39CCCC\">

                                        <div class=\"text-white\">Mail-Orders</div>
                                    </div>
                                    <!-- ./col -->
                                    <div class=\"col-4 text-center\">
                                        <input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"50\" data-width=\"60\" data-height=\"60\"
                                               data-fgColor=\"#39CCCC\">

                                        <div class=\"text-white\">Online</div>
                                    </div>
                                    <!-- ./col -->
                                    <div class=\"col-4 text-center\">
                                        <input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"30\" data-width=\"60\" data-height=\"60\"
                                               data-fgColor=\"#39CCCC\">

                                        <div class=\"text-white\">In-Store</div>
                                    </div>
                                    <!-- ./col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->

                        <!-- Calendar -->
                        <div class=\"card bg-gradient-success\">
                            <div class=\"card-header border-0\">

                                <h3 class=\"card-title\">
                                    <i class=\"far fa-calendar-alt\"></i>
                                    Calendar
                                </h3>
                                <!-- tools card -->
                                <div class=\"card-tools\">
                                    <!-- button with a dropdown -->
                                    <div class=\"btn-group\">
                                        <button type=\"button\" class=\"btn btn-success btn-sm dropdown-toggle\" data-toggle=\"dropdown\" data-offset=\"-52\">
                                            <i class=\"fas fa-bars\"></i></button>
                                        <div class=\"dropdown-menu\" role=\"menu\">
                                            <a href=\"#\" class=\"dropdown-item\">Add new event</a>
                                            <a href=\"#\" class=\"dropdown-item\">Clear events</a>
                                            <div class=\"dropdown-divider\"></div>
                                            <a href=\"#\" class=\"dropdown-item\">View calendar</a>
                                        </div>
                                    </div>
                                    <button type=\"button\" class=\"btn btn-success btn-sm\" data-card-widget=\"collapse\">
                                        <i class=\"fas fa-minus\"></i>
                                    </button>
                                    <button type=\"button\" class=\"btn btn-success btn-sm\" data-card-widget=\"remove\">
                                        <i class=\"fas fa-times\"></i>
                                    </button>
                                </div>
                                <!-- /. tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class=\"card-body pt-0\">
                                <!--The calendar -->
                                <div id=\"calendar\" style=\"width: 100%\"></div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </section>
                    <!-- right col -->
                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        {% endblock %}
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class=\"main-footer\">
        <strong>Copyright &copy; 2014-2019 <a href=\"http://adminlte.io\">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class=\"float-right d-none d-sm-inline-block\">
            <b>Version</b> 3.0.5
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class=\"control-sidebar control-sidebar-dark\">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src=\"plugins/jquery/jquery.min.js\"></script>
<!-- jQuery UI 1.11.4 -->
<script src=\"plugins/jquery-ui/jquery-ui.min.js\"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    \$.widget.bridge('uibutton', \$.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src=\"plugins/bootstrap/js/bootstrap.bundle.min.js\"></script>
<!-- ChartJS -->
<script src=\"plugins/chart.js/Chart.min.js\"></script>
<!-- Sparkline -->
<script src=\"plugins/sparklines/sparkline.js\"></script>
<!-- JQVMap -->
<script src=\"plugins/jqvmap/jquery.vmap.min.js\"></script>
<script src=\"plugins/jqvmap/maps/jquery.vmap.usa.js\"></script>
<!-- jQuery Knob Chart -->
<script src=\"plugins/jquery-knob/jquery.knob.min.js\"></script>
<!-- daterangepicker -->
<script src=\"plugins/moment/moment.min.js\"></script>
<script src=\"plugins/daterangepicker/daterangepicker.js\"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src=\"plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js\"></script>
<!-- Summernote -->
<script src=\"plugins/summernote/summernote-bs4.min.js\"></script>
<!-- overlayScrollbars -->
<script src=\"plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js\"></script>
<!-- AdminLTE App -->
<script src=\"dist/js/adminlte.js\"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src=\"dist/js/pages/dashboard.js\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"dist/js/demo.js\"></script>
</body>
</html>
", "home_admin/index.html.twig", "C:\\Users\\Asus\\Desktop\\reservi\\templates\\home_admin\\index.html.twig");
    }
}
