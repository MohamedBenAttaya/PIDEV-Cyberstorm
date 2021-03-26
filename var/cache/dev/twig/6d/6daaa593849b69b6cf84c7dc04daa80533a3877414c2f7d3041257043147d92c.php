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
class __TwigTemplate_143f7bf0387c6ca1929eb569a00d85cbf62512a3cd9c8295239d87f29970388b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
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
        echo "<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang=\"zxx\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>Traversal Travel Category Bootstrap Responsive Template | Home :: W3layouts</title>
    <!-- google fonts -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("//fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("//fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,400&display=swap"), "html", null, true);
        echo "\"
          rel=\"stylesheet\">
    <!-- google fonts -->
    <!-- Template CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style-starter.css"), "html", null, true);
        echo "\">
    <!-- Template CSS -->
</head>

<body>
<!--header-->
";
        // line 25
        $this->displayBlock('header', $context, $blocks);
        // line 93
        echo "<!-- //header -->
<!--banner-slider-->
<!-- main-slider -->
";
        // line 96
        $this->displayBlock('content', $context, $blocks);
        // line 552
        echo "<!-- //testimonials -->

<!--/w3l-footer-29-main-->
";
        // line 555
        $this->displayBlock('footer', $context, $blocks);
        // line 668
        echo "<!-- Template JavaScript -->
<script src=\"";
        // line 669
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 670
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/theme-change.js"), "html", null, true);
        echo "\"></script>
<!--/slider-js-->
<script src=\"";
        // line 672
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 673
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/modernizr-2.6.2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 674
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.zoomslider.min.js"), "html", null, true);
        echo "\"></script>
<!--//slider-js-->
<script src=\"";
        // line 676
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl.carousel.js"), "html", null, true);
        echo "\"></script>
<!-- script for tesimonials carousel slider -->
<script>
    \$(document).ready(function () {
        \$(\"#owl-demo1\").owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                736: {
                    items: 1,
                    nav: false
                },
                1000: {
                    items: 1,
                    nav: false,
                    loop: true
                }
            }
        })
    })
</script>
<!-- //script for tesimonials carousel slider -->
<!-- stats number counter-->
<script src=";
        // line 705
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.waypoints.min.js"), "html", null, true);
        echo "></script>
<script src=";
        // line 706
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.countup.js"), "html", null, true);
        echo "></script>
<script>
    \$('.counter').countUp();
</script>
<!-- //stats number counter -->

<!--/MENU-JS-->
<script>
    \$(window).on(\"scroll\", function () {
        var scroll = \$(window).scrollTop();

        if (scroll >= 80) {
            \$(\"#site-header\").addClass(\"nav-fixed\");
        } else {
            \$(\"#site-header\").removeClass(\"nav-fixed\");
        }
    });

    //Main navigation Active Class Add Remove
    \$(\".navbar-toggler\").on(\"click\", function () {
        \$(\"header\").toggleClass(\"active\");
    });
    \$(document).on(\"ready\", function () {
        if (\$(window).width() > 991) {
            \$(\"header\").removeClass(\"active\");
        }
        \$(window).on(\"resize\", function () {
            if (\$(window).width() > 991) {
                \$(\"header\").removeClass(\"active\");
            }
        });
    });
</script>
<!--//MENU-JS-->

<script src=";
        // line 741
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "></script>

</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 25
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 26
        echo "<header id=\"site-header\" class=\"fixed-top\">
    <div class=\"container\">
        <nav class=\"navbar navbar-expand-lg stroke\">
            <h1><a class=\"navbar-brand mr-lg-5\" href=\"/\">
                    Reservi
                </a></h1>
            <!-- if logo is image enable this
          <a class=\"navbar-brand\" href=\"#index.html\">
              <img src=\"image-path\" alt=\"Your logo\" title=\"Your logo\" style=\"height:35px;\" />
          </a> -->
            <button class=\"navbar-toggler  collapsed bg-gradient\" type=\"button\" data-toggle=\"collapse\"
                    data-target=\"#navbarTogglerDemo02\" aria-controls=\"navbarTogglerDemo02\" aria-expanded=\"false\"
                    aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon fa icon-expand fa-bars\"></span>
                <span class=\"navbar-toggler-icon fa icon-close fa-times\"></span>
                </span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo02\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" >Home <span class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("about.html"), "html", null, true);
        echo ">About</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("services.html"), "html", null, true);
        echo ">Destinations</a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact.html"), "html", null, true);
        echo ">Contact</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hotel_all");
        echo "\">Hotel</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("maison_all");
        echo "\">Maison</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil");
        echo "\">Profil</a>
                    </li>

                </ul>
            </div>
            <div class=\"d-lg-block d-none\">
                <a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact.html"), "html", null, true);
        echo "\" class=\"btn btn-style btn-secondary\">Get In Touch</a>
            </div>
            <!-- toggle switch for light and dark theme -->
            <div class=\"mobile-position\">
                <nav class=\"navigation\">
                    <div class=\"theme-switch-wrapper\">
                        <label class=\"theme-switch\" for=\"checkbox\">
                            <input type=\"checkbox\" id=\"checkbox\">
                            <div class=\"mode-container\">
                                <i class=\"gg-sun\"></i>
                                <i class=\"gg-moon\"></i>
                            </div>
                        </label>
                    </div>
                </nav>
            </div>
            <!-- //toggle switch for light and dark theme -->
        </nav>
    </div>
</header>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 96
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 97
        echo "<section class=\"w3l-main-slider\" id=\"home\">
    <div class=\"banner-content\">
        <div id=\"demo-1\"
             data-zs-src='[\"assets/images/banner1.jpg\", \"assets/images/banner2.jpg\",\"assets/images/banner3.jpg\", \"assets/images/banner4.jpg\"]'
             data-zs-overlay=\"dots\">
            <div class=\"demo-inner-content\">
                <div class=\"container\">
                    <div class=\"banner-infhny\">
                        <h3>You don't need to go far to find what matters.</h3>
                        <h6 class=\"mb-3\">Discover your next adventure</h6>
                        <div class=\"flex-wrap search-wthree-field mt-md-5 mt-4\">
                            <form action=\"#\" method=\"post\" class=\"booking-form\">
                                <div class=\"row book-form\">
                                    <div class=\"form-input col-md-4 mt-md-0 mt-3\">

                                        <select name=\"selectpicker\" class=\"selectpicker\">
                                            <option value=\"\">Destinaion</option>
                                            <option value=\"africa\">Africa</option>
                                            <option value=\"america\">America</option>
                                            <option value=\"asia\">Asia</option>
                                            <option value=\"eastern-europe\">Eastern Europe</option>
                                            <option value=\"europe\">Europe</option>
                                            <option value=\"south-america\">South America</option>
                                        </select>

                                    </div>
                                    <div class=\"form-input col-md-4 mt-md-0 mt-3\">

                                        <input type=\"date\" name=\"\" placeholder=\"Date\" required=\"\">
                                    </div>
                                    <div class=\"bottom-btn col-md-4 mt-md-0 mt-3\">
                                        <button class=\"btn btn-style btn-secondary\"><span class=\"fa fa-search mr-3\"
                                                                                          aria-hidden=\"true\"></span> Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /main-slider -->
<!-- //banner-slider-->

<!--/grids-->
<section class=\"w3l-grids-3 py-5\">
    <div class=\"container py-md-5\">
        <div class=\"title-content text-left mb-lg-5 mb-4\">
            <h6 class=\"sub-title\">Visit</h6>
            <h3 class=\"hny-title\">Popular Destinations</h3>
        </div>
        <div class=\"row bottom-ab-grids\">
            <!--/row-grids-->
            <div class=\"col-lg-6 subject-card mt-lg-0 mt-4\">
                <div class=\"subject-card-header p-4\">
                    <a href=\"#\" class=\"card_title p-lg-4d-block\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-sm-5 subject-img\">
                                <img src=\"assets/images/g1.jpg\" class=\"img-fluid\" alt=\"\">
                            </div>
                            <div class=\"col-sm-7 subject-content mt-sm-0 mt-4\">
                                <h4>Paris</h4>
                                <p>3Days, 4 Nights</p>
                                <div class=\"dst-btm\">
                                    <h6 class=\"\"> Start From </h6>
                                    <span>\$1650</span>
                                </div>
                                <p class=\"sub-para\">Per person on twin sharing</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class=\"col-lg-6 subject-card mt-lg-0 mt-4\">
                <div class=\"subject-card-header p-4\">
                    <a href=\"#\" class=\"card_title p-lg-4d-block\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-sm-5 subject-img\">
                                <img src=\"assets/images/g2.jpg\" class=\"img-fluid\" alt=\"\">
                            </div>
                            <div class=\"col-sm-7 subject-content mt-sm-0 mt-4\">
                                <h4>Bankok</h4>
                                <p>3Days, 4 Nights</p>
                                <div class=\"dst-btm\">
                                    <h6 class=\"\"> Start From </h6>
                                    <span>\$1850</span>
                                </div>
                                <p class=\"sub-para\">Per person on twin sharing</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!--//row-grids-->
            <!--/row-grids-->
            <div class=\"col-lg-6 subject-card mt-4\">
                <div class=\"subject-card-header p-4\">
                    <a href=\"#\" class=\"card_title p-lg-4d-block\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-sm-5 subject-img\">
                                <img src=\"assets/images/g3.jpg\" class=\"img-fluid\" alt=\"\">
                            </div>
                            <div class=\"col-sm-7 subject-content mt-sm-0 mt-4\">
                                <h4>Maldives</h4>
                                <p>3Days, 4 Nights</p>
                                <div class=\"dst-btm\">
                                    <h6 class=\"\"> Start From </h6>
                                    <span>\$1350</span>
                                </div>
                                <p class=\"sub-para\">Per person on twin sharing</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class=\"col-lg-6 subject-card mt-4\">
                <div class=\"subject-card-header p-4\">
                    <a href=\"#\" class=\"card_title p-lg-4d-block\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-sm-5 subject-img\">
                                <img src=\"assets/images/g4.jpg\" class=\"img-fluid\" alt=\"\">
                            </div>
                            <div class=\"col-sm-7 subject-content mt-sm-0 mt-4\">
                                <h4>Greece</h4>
                                <p>3Days, 4 Nights</p>
                                <div class=\"dst-btm\">
                                    <h6 class=\"\"> Start From </h6>
                                    <span>\$1650</span>
                                </div>
                                <p class=\"sub-para\">Per person on twin sharing</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!--//row-grids-->
            <!--/row-grids-->
            <div class=\"col-lg-6 subject-card mt-4\">
                <div class=\"subject-card-header p-4\">
                    <a href=\"#\" class=\"card_title p-lg-4d-block\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-sm-5 subject-img\">
                                <img src=\"assets/images/g5.jpg\" class=\"img-fluid\" alt=\"\">
                            </div>
                            <div class=\"col-sm-7 subject-content mt-sm-0 mt-4\">
                                <h4>London</h4>
                                <p>3Days, 4 Nights</p>
                                <div class=\"dst-btm\">
                                    <h6 class=\"\"> Start From </h6>
                                    <span>\$1750</span>
                                </div>
                                <p class=\"sub-para\">Per person on twin sharing</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class=\"col-lg-6 subject-card mt-4\">
                <div class=\"subject-card-header p-4\">
                    <a href=\"#\" class=\"card_title p-lg-4d-block\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-sm-5 subject-img\">
                                <img src=\"assets/images/g6.jpg\" class=\"img-fluid\" alt=\"\">
                            </div>
                            <div class=\"col-sm-7 subject-content mt-sm-0 mt-4\">
                                <h4>Julian Alps</h4>
                                <p>3Days, 4 Nights</p>
                                <div class=\"dst-btm\">
                                    <h6 class=\"\"> Start From </h6>
                                    <span>\$1950</span>
                                </div>
                                <p class=\"sub-para\">Per person on twin sharing</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!--//row-grids-->
            <!--/row-grids-->
            <div class=\"col-lg-6 subject-card mt-4\">
                <div class=\"subject-card-header p-4\">
                    <a href=\"#\" class=\"card_title p-lg-4d-block\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-sm-5 subject-img\">
                                <img src=\"assets/images/g7.jpg\" class=\"img-fluid\" alt=\"\">
                            </div>
                            <div class=\"col-sm-7 subject-content mt-sm-0 mt-4\">
                                <h4>Thailand</h4>
                                <p>3Days, 4 Nights</p>
                                <div class=\"dst-btm\">
                                    <h6 class=\"\"> Start From </h6>
                                    <span>\$1750</span>
                                </div>
                                <p class=\"sub-para\">Per person on twin sharing</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class=\"col-lg-6 subject-card mt-4\">
                <div class=\"subject-card-header p-4\">
                    <a href=\"#\" class=\"card_title p-lg-4d-block\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-sm-5 subject-img\">
                                <img src=\"assets/images/g8.jpg\" class=\"img-fluid\" alt=\"\">
                            </div>
                            <div class=\"col-sm-7 subject-content mt-sm-0 mt-4\">
                                <h4>Singapore</h4>
                                <p>3Days, 4 Nights</p>
                                <div class=\"dst-btm\">
                                    <h6 class=\"\"> Start From </h6>
                                    <span>\$1950</span>
                                </div>
                                <p class=\"sub-para\">Per person on twin sharing</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!--//row-grids-->
        </div>
    </div>
</section>
<!--//grids-->
<!-- stats -->
<section class=\"w3l-stats py-5\" id=\"stats\">
    <div class=\"gallery-inner container py-lg-0 py-3\">
        <div class=\"row stats-con pb-lg-3\">
            <div class=\"col-lg-3 col-6 stats_info counter_grid\">
                <p class=\"counter\">730</p>
                <h4>Branches</h4>
            </div>
            <div class=\"col-lg-3 col-6 stats_info counter_grid1\">
                <p class=\"counter\">1680</p>
                <h4>Travel Guides</h4>
            </div>
            <div class=\"col-lg-3 col-6 stats_info counter_grid mt-lg-0 mt-5\">
                <p class=\"counter\">812</p>
                <h4>Happy Customers</h4>
            </div>
            <div class=\"col-lg-3 col-6 stats_info counter_grid2 mt-lg-0 mt-5\">
                <p class=\"counter\">990</p>
                <h4>Awards</h4>
            </div>
        </div>
    </div>
</section>
<!-- //stats -->
<!--/-->
<div class=\"best-rooms py-5\">
    <div class=\"container py-md-5\">
        <div class=\"ban-content-inf row\">
            <div class=\"maghny-gd-1 col-lg-6\">
                <div class=\"maghny-grid\">
                    <figure class=\"effect-lily border-radius  m-0\">
                        <img class=\"img-fluid\" src=\"assets/images/g10.jpg\" alt=\"\" />
                        <figcaption>
                            <div>
                                <h4>3Days, 4 Nights</h4>
                                <p>From 1720\$ </p>
                            </div>

                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class=\"maghny-gd-1 col-lg-6 mt-lg-0 mt-4\">
                <div class=\"row\">
                    <div class=\"maghny-gd-1 col-6\">
                        <div class=\"maghny-grid\">
                            <figure class=\"effect-lily border-radius\">
                                <img class=\"img-fluid\" src=\"assets/images/g9.jpg\" alt=\"\" />
                                <figcaption>
                                    <div>
                                        <h4>3Days, 4 Nights</h4>
                                        <p>From 1220\$ </p>
                                    </div>

                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class=\"maghny-gd-1 col-6\">
                        <div class=\"maghny-grid\">
                            <figure class=\"effect-lily border-radius\">
                                <img class=\"img-fluid\" src=\"assets/images/g8.jpg\" alt=\"\" />
                                <figcaption>
                                    <div>
                                        <h4>3Days, 4 Nights</h4>
                                        <p>From 1620\$ </p>
                                    </div>

                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class=\"maghny-gd-1 col-6 mt-4\">
                        <div class=\"maghny-grid\">
                            <figure class=\"effect-lily border-radius\">
                                <img class=\"img-fluid\" src=\"assets/images/g7.jpg\" alt=\"\" />
                                <figcaption>
                                    <div>
                                        <h4>3Days, 4 Nights</h4>
                                        <p>From 1820\$ </p>
                                    </div>

                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class=\"maghny-gd-1 col-6 mt-4\">
                        <div class=\"maghny-grid\">
                            <figure class=\"effect-lily border-radius\">
                                <img class=\"img-fluid\" src=\"assets/images/g6.jpg\" alt=\"\" />
                                <figcaption>
                                    <div>
                                        <h4>3Days, 4 Nights</h4>
                                        <p>From 1520\$ </p>
                                    </div>

                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //stats -->
<!--/w3l-bottom-->
<section class=\"w3l-bottom py-5\">
    <div class=\"container py-md-4 py-3 text-center\">
        <div class=\"row my-lg-4 mt-4\">
            <div class=\"col-lg-9 col-md-10 ml-auto\">
                <div class=\"bottom-info ml-auto\">
                    <div class=\"header-section text-left\">
                        <h3 class=\"hny-title two\">Traveling makes a man wiser, but less happy.</h3>
                        <p class=\"mt-3 pr-lg-5\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae laudantium
                            voluptate rem ullam dolore nisi voluptatibus esse quasi. Integer sit amet .Lorem ipsum dolor sit
                            amet adipisicing elit.</p>
                        <a href=\"about.html\" class=\"btn btn-style btn-secondary mt-5\">Read More</a>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<!--//w3l-bottom-->
<!-- testimonials -->
<section class=\"w3l-clients\" id=\"clients\">
    <!-- /grids -->
    <div class=\"cusrtomer-layout py-5\">
        <div class=\"container py-lg-4 py-md-3 pb-lg-0\">
            <div class=\"heading text-center mx-auto\">
                <h6 class=\"sub-title text-center\">Here’s what they have to say</h6>
                <h3 class=\"hny-title mb-md-5 mb-4\">our clients do the talking</h3>
            </div>
            <!-- /grids -->
            <div class=\"testimonial-width\">
                <div id=\"owl-demo1\" class=\"owl-two owl-carousel owl-theme\">
                    <div class=\"item\">
                        <div class=\"testimonial-content\">
                            <div class=\"testimonial\">
                                <blockquote>
                                    <span class=\"fa fa-quote-left\" aria-hidden=\"true\"></span>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae laudantium
                                    voluptate rem ullam dolore nisi voluptatibus esse quasi. Integer sit amet .Lorem ipsum dolor sit
                                    amet adipisicing elit. Laborum dolor facere ipsum adipisicingelit.
                                </blockquote>
                                <div class=\"testi-des\">
                                    <div class=\"test-img\"><img src=\"assets/images/c1.jpg\" class=\"img-fluid\" alt=\"client-img\">
                                    </div>
                                    <div class=\"peopl align-self\">
                                        <h3>Rohit Paul</h3>
                                        <p class=\"indentity\">Example City</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"testimonial-content\">
                            <div class=\"testimonial\">
                                <blockquote>
                                    <span class=\"fa fa-quote-left\" aria-hidden=\"true\"></span>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae laudantium
                                    voluptate rem ullam dolore nisi voluptatibus esse quasi. Integer sit amet .Lorem ipsum dolor sit
                                    amet adipisicing elit. Laborum dolor facere ipsum adipisicingelit.
                                </blockquote>
                                <div class=\"testi-des\">
                                    <div class=\"test-img\"><img src=\"assets/images/c2.jpg\" class=\"img-fluid\" alt=\"client-img\">
                                    </div>
                                    <div class=\"peopl align-self\">
                                        <h3>Shveta</h3>
                                        <p class=\"indentity\">Example City</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"testimonial-content\">
                            <div class=\"testimonial\">
                                <blockquote>
                                    <span class=\"fa fa-quote-left\" aria-hidden=\"true\"></span>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae laudantium
                                    voluptate rem ullam dolore nisi voluptatibus esse quasi. Integer sit amet .Lorem ipsum dolor sit
                                    amet adipisicing elit. Laborum dolor facere ipsum adipisicingelit.
                                </blockquote>
                                <div class=\"testi-des\">
                                    <div class=\"test-img\"><img src=\"assets/images/c3.jpg\" class=\"img-fluid\" alt=\"client-img\">
                                    </div>
                                    <div class=\"peopl align-self\">
                                        <h3>Roy Linderson</h3>
                                        <p class=\"indentity\">Example City</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"testimonial-content\">
                            <div class=\"testimonial\">
                                <blockquote>
                                    <span class=\"fa fa-quote-left\" aria-hidden=\"true\"></span>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae laudantium
                                    voluptate rem ullam dolore nisi voluptatibus esse quasi. Integer sit amet .Lorem ipsum dolor sit
                                    amet adipisicing elit. Laborum dolor facere ipsum adipisicingelit.
                                </blockquote>
                                <div class=\"testi-des\">
                                    <div class=\"test-img\"><img src=\"assets/images/c4.jpg\" class=\"img-fluid\" alt=\"client-img\">
                                    </div>
                                    <div class=\"peopl align-self\">
                                        <h3>Mike Thyson</h3>
                                        <p class=\"indentity\">Example City</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- /grids -->
    </div>
    <!-- //grids -->
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 555
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 556
        echo "<footer>
    <!-- footer -->
    <section class=\"w3l-footer\">
        <div class=\"w3l-footer-16-main py-5\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6 column\">
                        <div class=\"row\">
                            <div class=\"col-md-4 column\">
                                <h3>Company</h3>
                                <ul class=\"footer-gd-16\">
                                    <li><a href=\"index.html\">Home</a></li>
                                    <li><a href=\"about.html\">About Us</a></li>
                                    <li><a href=\"services.html\">Services</a></li>
                                    <li><a href=\"blog.html\">Blog</a></li>
                                    <li><a href=\"contact.html\">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class=\"col-md-4 column mt-md-0 mt-4\">
                                <h3>Useful Links</h3>
                                <ul class=\"footer-gd-16\">
                                    <li><a href=\"#url\">Destinations</a></li>
                                    <li><a href=\"#url\">Our Branches</a></li>
                                    <li><a href=\"#url\">Latest Media</a></li>
                                    <li><a href=\"about.html\">About Company</a></li>
                                    <li><a href=\"#url\">Our Packages</a></li>
                                </ul>
                            </div>
                            <div class=\"col-md-4 column mt-md-0 mt-4\">
                                <h3>Our Services</h3>
                                <ul class=\"footer-gd-16\">
                                    <li><a href=\"#url\">Privacy Policy</a></li>
                                    <li><a href=\"#url\">Our Terms</a></li>
                                    <li><a href=\"services.html\">Services</a></li>
                                    <li><a href=\"landing-single.html\">Landing Page</a></li>
                                    <li><a href=\"#url\">Our Guides</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-12 column pl-lg-5 column4 mt-lg-0 mt-5\">
                        <h3>Newsletter </h3>
                        <div class=\"end-column\">
                            <h4>Get latest updates and offers.</h4>
                            <form action=\"#\" class=\"subscribe\" method=\"post\">
                                <input type=\"email\" name=\"email\" placeholder=\"Email Address\" required=\"\">
                                <button type=\"submit\">Go</button>
                            </form>
                            <p>Sign up for our latest news & articles. We won’t give you spam mails.</p>
                        </div>
                    </div>
                </div>
                <div class=\"d-flex below-section justify-content-between align-items-center pt-4 mt-5\">
                    <div class=\"columns text-lg-left text-center\">
                        <p>&copy; 2020 Traversal. All rights reserved.Design by <a href=\"https://w3layouts.com/\" target=\"_blank\">
                                W3Layouts</a>
                        </p>
                    </div>
                    <div class=\"columns-2 mt-lg-0 mt-3\">
                        <ul class=\"social\">
                            <li><a href=\"#facebook\"><span class=\"fa fa-facebook\" aria-hidden=\"true\"></span></a>
                            </li>
                            <li><a href=\"#linkedin\"><span class=\"fa fa-linkedin\" aria-hidden=\"true\"></span></a>
                            </li>
                            <li><a href=\"#twitter\"><span class=\"fa fa-twitter\" aria-hidden=\"true\"></span></a>
                            </li>
                            <li><a href=\"#google\"><span class=\"fa fa-google-plus\" aria-hidden=\"true\"></span></a>
                            </li>
                            <li><a href=\"#github\"><span class=\"fa fa-github\" aria-hidden=\"true\"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- move top -->
        <button onclick=\"topFunction()\" id=\"movetop\" title=\"Go to top\">
            <span class=\"fa fa-angle-up\"></span>
        </button>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function () {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById(\"movetop\").style.display = \"block\";
                } else {
                    document.getElementById(\"movetop\").style.display = \"none\";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <!-- //move top -->
        <script>
            \$(function () {
                \$('.navbar-toggler').click(function () {
                    \$('body').toggleClass('noscroll');
                })
            });
        </script>
    </section>
    <!-- //footer -->
</footer>
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
        return array (  805 => 556,  795 => 555,  331 => 97,  321 => 96,  290 => 72,  281 => 66,  275 => 63,  269 => 60,  263 => 57,  256 => 53,  250 => 50,  244 => 47,  221 => 26,  211 => 25,  196 => 741,  158 => 706,  154 => 705,  122 => 676,  117 => 674,  113 => 673,  109 => 672,  104 => 670,  100 => 669,  97 => 668,  95 => 555,  90 => 552,  88 => 96,  83 => 93,  81 => 25,  72 => 19,  65 => 15,  61 => 14,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang=\"zxx\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>Traversal Travel Category Bootstrap Responsive Template | Home :: W3layouts</title>
    <!-- google fonts -->
    <link href=\"{{ asset(\"//fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap\") }}\" rel=\"stylesheet\">
    <link href=\"{{ asset(\"//fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,400&display=swap\") }}\"
          rel=\"stylesheet\">
    <!-- google fonts -->
    <!-- Template CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset(\"assets/css/style-starter.css\") }}\">
    <!-- Template CSS -->
</head>

<body>
<!--header-->
{% block header %}
<header id=\"site-header\" class=\"fixed-top\">
    <div class=\"container\">
        <nav class=\"navbar navbar-expand-lg stroke\">
            <h1><a class=\"navbar-brand mr-lg-5\" href=\"/\">
                    Reservi
                </a></h1>
            <!-- if logo is image enable this
          <a class=\"navbar-brand\" href=\"#index.html\">
              <img src=\"image-path\" alt=\"Your logo\" title=\"Your logo\" style=\"height:35px;\" />
          </a> -->
            <button class=\"navbar-toggler  collapsed bg-gradient\" type=\"button\" data-toggle=\"collapse\"
                    data-target=\"#navbarTogglerDemo02\" aria-controls=\"navbarTogglerDemo02\" aria-expanded=\"false\"
                    aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon fa icon-expand fa-bars\"></span>
                <span class=\"navbar-toggler-icon fa icon-close fa-times\"></span>
                </span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarTogglerDemo02\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"{{ path('home') }}\" >Home <span class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href={{ asset(\"about.html\") }}>About</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href={{ asset(\"services.html\") }}>Destinations</a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href={{ asset(\"contact.html\") }}>Contact</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('hotel_all') }}\">Hotel</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('maison_all') }}\">Maison</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('profil') }}\">Profil</a>
                    </li>

                </ul>
            </div>
            <div class=\"d-lg-block d-none\">
                <a href=\"{{ asset(\"contact.html\") }}\" class=\"btn btn-style btn-secondary\">Get In Touch</a>
            </div>
            <!-- toggle switch for light and dark theme -->
            <div class=\"mobile-position\">
                <nav class=\"navigation\">
                    <div class=\"theme-switch-wrapper\">
                        <label class=\"theme-switch\" for=\"checkbox\">
                            <input type=\"checkbox\" id=\"checkbox\">
                            <div class=\"mode-container\">
                                <i class=\"gg-sun\"></i>
                                <i class=\"gg-moon\"></i>
                            </div>
                        </label>
                    </div>
                </nav>
            </div>
            <!-- //toggle switch for light and dark theme -->
        </nav>
    </div>
</header>
{% endblock %}
<!-- //header -->
<!--banner-slider-->
<!-- main-slider -->
{% block content %}
<section class=\"w3l-main-slider\" id=\"home\">
    <div class=\"banner-content\">
        <div id=\"demo-1\"
             data-zs-src='[\"assets/images/banner1.jpg\", \"assets/images/banner2.jpg\",\"assets/images/banner3.jpg\", \"assets/images/banner4.jpg\"]'
             data-zs-overlay=\"dots\">
            <div class=\"demo-inner-content\">
                <div class=\"container\">
                    <div class=\"banner-infhny\">
                        <h3>You don't need to go far to find what matters.</h3>
                        <h6 class=\"mb-3\">Discover your next adventure</h6>
                        <div class=\"flex-wrap search-wthree-field mt-md-5 mt-4\">
                            <form action=\"#\" method=\"post\" class=\"booking-form\">
                                <div class=\"row book-form\">
                                    <div class=\"form-input col-md-4 mt-md-0 mt-3\">

                                        <select name=\"selectpicker\" class=\"selectpicker\">
                                            <option value=\"\">Destinaion</option>
                                            <option value=\"africa\">Africa</option>
                                            <option value=\"america\">America</option>
                                            <option value=\"asia\">Asia</option>
                                            <option value=\"eastern-europe\">Eastern Europe</option>
                                            <option value=\"europe\">Europe</option>
                                            <option value=\"south-america\">South America</option>
                                        </select>

                                    </div>
                                    <div class=\"form-input col-md-4 mt-md-0 mt-3\">

                                        <input type=\"date\" name=\"\" placeholder=\"Date\" required=\"\">
                                    </div>
                                    <div class=\"bottom-btn col-md-4 mt-md-0 mt-3\">
                                        <button class=\"btn btn-style btn-secondary\"><span class=\"fa fa-search mr-3\"
                                                                                          aria-hidden=\"true\"></span> Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /main-slider -->
<!-- //banner-slider-->

<!--/grids-->
<section class=\"w3l-grids-3 py-5\">
    <div class=\"container py-md-5\">
        <div class=\"title-content text-left mb-lg-5 mb-4\">
            <h6 class=\"sub-title\">Visit</h6>
            <h3 class=\"hny-title\">Popular Destinations</h3>
        </div>
        <div class=\"row bottom-ab-grids\">
            <!--/row-grids-->
            <div class=\"col-lg-6 subject-card mt-lg-0 mt-4\">
                <div class=\"subject-card-header p-4\">
                    <a href=\"#\" class=\"card_title p-lg-4d-block\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-sm-5 subject-img\">
                                <img src=\"assets/images/g1.jpg\" class=\"img-fluid\" alt=\"\">
                            </div>
                            <div class=\"col-sm-7 subject-content mt-sm-0 mt-4\">
                                <h4>Paris</h4>
                                <p>3Days, 4 Nights</p>
                                <div class=\"dst-btm\">
                                    <h6 class=\"\"> Start From </h6>
                                    <span>\$1650</span>
                                </div>
                                <p class=\"sub-para\">Per person on twin sharing</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class=\"col-lg-6 subject-card mt-lg-0 mt-4\">
                <div class=\"subject-card-header p-4\">
                    <a href=\"#\" class=\"card_title p-lg-4d-block\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-sm-5 subject-img\">
                                <img src=\"assets/images/g2.jpg\" class=\"img-fluid\" alt=\"\">
                            </div>
                            <div class=\"col-sm-7 subject-content mt-sm-0 mt-4\">
                                <h4>Bankok</h4>
                                <p>3Days, 4 Nights</p>
                                <div class=\"dst-btm\">
                                    <h6 class=\"\"> Start From </h6>
                                    <span>\$1850</span>
                                </div>
                                <p class=\"sub-para\">Per person on twin sharing</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!--//row-grids-->
            <!--/row-grids-->
            <div class=\"col-lg-6 subject-card mt-4\">
                <div class=\"subject-card-header p-4\">
                    <a href=\"#\" class=\"card_title p-lg-4d-block\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-sm-5 subject-img\">
                                <img src=\"assets/images/g3.jpg\" class=\"img-fluid\" alt=\"\">
                            </div>
                            <div class=\"col-sm-7 subject-content mt-sm-0 mt-4\">
                                <h4>Maldives</h4>
                                <p>3Days, 4 Nights</p>
                                <div class=\"dst-btm\">
                                    <h6 class=\"\"> Start From </h6>
                                    <span>\$1350</span>
                                </div>
                                <p class=\"sub-para\">Per person on twin sharing</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class=\"col-lg-6 subject-card mt-4\">
                <div class=\"subject-card-header p-4\">
                    <a href=\"#\" class=\"card_title p-lg-4d-block\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-sm-5 subject-img\">
                                <img src=\"assets/images/g4.jpg\" class=\"img-fluid\" alt=\"\">
                            </div>
                            <div class=\"col-sm-7 subject-content mt-sm-0 mt-4\">
                                <h4>Greece</h4>
                                <p>3Days, 4 Nights</p>
                                <div class=\"dst-btm\">
                                    <h6 class=\"\"> Start From </h6>
                                    <span>\$1650</span>
                                </div>
                                <p class=\"sub-para\">Per person on twin sharing</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!--//row-grids-->
            <!--/row-grids-->
            <div class=\"col-lg-6 subject-card mt-4\">
                <div class=\"subject-card-header p-4\">
                    <a href=\"#\" class=\"card_title p-lg-4d-block\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-sm-5 subject-img\">
                                <img src=\"assets/images/g5.jpg\" class=\"img-fluid\" alt=\"\">
                            </div>
                            <div class=\"col-sm-7 subject-content mt-sm-0 mt-4\">
                                <h4>London</h4>
                                <p>3Days, 4 Nights</p>
                                <div class=\"dst-btm\">
                                    <h6 class=\"\"> Start From </h6>
                                    <span>\$1750</span>
                                </div>
                                <p class=\"sub-para\">Per person on twin sharing</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class=\"col-lg-6 subject-card mt-4\">
                <div class=\"subject-card-header p-4\">
                    <a href=\"#\" class=\"card_title p-lg-4d-block\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-sm-5 subject-img\">
                                <img src=\"assets/images/g6.jpg\" class=\"img-fluid\" alt=\"\">
                            </div>
                            <div class=\"col-sm-7 subject-content mt-sm-0 mt-4\">
                                <h4>Julian Alps</h4>
                                <p>3Days, 4 Nights</p>
                                <div class=\"dst-btm\">
                                    <h6 class=\"\"> Start From </h6>
                                    <span>\$1950</span>
                                </div>
                                <p class=\"sub-para\">Per person on twin sharing</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!--//row-grids-->
            <!--/row-grids-->
            <div class=\"col-lg-6 subject-card mt-4\">
                <div class=\"subject-card-header p-4\">
                    <a href=\"#\" class=\"card_title p-lg-4d-block\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-sm-5 subject-img\">
                                <img src=\"assets/images/g7.jpg\" class=\"img-fluid\" alt=\"\">
                            </div>
                            <div class=\"col-sm-7 subject-content mt-sm-0 mt-4\">
                                <h4>Thailand</h4>
                                <p>3Days, 4 Nights</p>
                                <div class=\"dst-btm\">
                                    <h6 class=\"\"> Start From </h6>
                                    <span>\$1750</span>
                                </div>
                                <p class=\"sub-para\">Per person on twin sharing</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class=\"col-lg-6 subject-card mt-4\">
                <div class=\"subject-card-header p-4\">
                    <a href=\"#\" class=\"card_title p-lg-4d-block\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-sm-5 subject-img\">
                                <img src=\"assets/images/g8.jpg\" class=\"img-fluid\" alt=\"\">
                            </div>
                            <div class=\"col-sm-7 subject-content mt-sm-0 mt-4\">
                                <h4>Singapore</h4>
                                <p>3Days, 4 Nights</p>
                                <div class=\"dst-btm\">
                                    <h6 class=\"\"> Start From </h6>
                                    <span>\$1950</span>
                                </div>
                                <p class=\"sub-para\">Per person on twin sharing</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!--//row-grids-->
        </div>
    </div>
</section>
<!--//grids-->
<!-- stats -->
<section class=\"w3l-stats py-5\" id=\"stats\">
    <div class=\"gallery-inner container py-lg-0 py-3\">
        <div class=\"row stats-con pb-lg-3\">
            <div class=\"col-lg-3 col-6 stats_info counter_grid\">
                <p class=\"counter\">730</p>
                <h4>Branches</h4>
            </div>
            <div class=\"col-lg-3 col-6 stats_info counter_grid1\">
                <p class=\"counter\">1680</p>
                <h4>Travel Guides</h4>
            </div>
            <div class=\"col-lg-3 col-6 stats_info counter_grid mt-lg-0 mt-5\">
                <p class=\"counter\">812</p>
                <h4>Happy Customers</h4>
            </div>
            <div class=\"col-lg-3 col-6 stats_info counter_grid2 mt-lg-0 mt-5\">
                <p class=\"counter\">990</p>
                <h4>Awards</h4>
            </div>
        </div>
    </div>
</section>
<!-- //stats -->
<!--/-->
<div class=\"best-rooms py-5\">
    <div class=\"container py-md-5\">
        <div class=\"ban-content-inf row\">
            <div class=\"maghny-gd-1 col-lg-6\">
                <div class=\"maghny-grid\">
                    <figure class=\"effect-lily border-radius  m-0\">
                        <img class=\"img-fluid\" src=\"assets/images/g10.jpg\" alt=\"\" />
                        <figcaption>
                            <div>
                                <h4>3Days, 4 Nights</h4>
                                <p>From 1720\$ </p>
                            </div>

                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class=\"maghny-gd-1 col-lg-6 mt-lg-0 mt-4\">
                <div class=\"row\">
                    <div class=\"maghny-gd-1 col-6\">
                        <div class=\"maghny-grid\">
                            <figure class=\"effect-lily border-radius\">
                                <img class=\"img-fluid\" src=\"assets/images/g9.jpg\" alt=\"\" />
                                <figcaption>
                                    <div>
                                        <h4>3Days, 4 Nights</h4>
                                        <p>From 1220\$ </p>
                                    </div>

                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class=\"maghny-gd-1 col-6\">
                        <div class=\"maghny-grid\">
                            <figure class=\"effect-lily border-radius\">
                                <img class=\"img-fluid\" src=\"assets/images/g8.jpg\" alt=\"\" />
                                <figcaption>
                                    <div>
                                        <h4>3Days, 4 Nights</h4>
                                        <p>From 1620\$ </p>
                                    </div>

                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class=\"maghny-gd-1 col-6 mt-4\">
                        <div class=\"maghny-grid\">
                            <figure class=\"effect-lily border-radius\">
                                <img class=\"img-fluid\" src=\"assets/images/g7.jpg\" alt=\"\" />
                                <figcaption>
                                    <div>
                                        <h4>3Days, 4 Nights</h4>
                                        <p>From 1820\$ </p>
                                    </div>

                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class=\"maghny-gd-1 col-6 mt-4\">
                        <div class=\"maghny-grid\">
                            <figure class=\"effect-lily border-radius\">
                                <img class=\"img-fluid\" src=\"assets/images/g6.jpg\" alt=\"\" />
                                <figcaption>
                                    <div>
                                        <h4>3Days, 4 Nights</h4>
                                        <p>From 1520\$ </p>
                                    </div>

                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //stats -->
<!--/w3l-bottom-->
<section class=\"w3l-bottom py-5\">
    <div class=\"container py-md-4 py-3 text-center\">
        <div class=\"row my-lg-4 mt-4\">
            <div class=\"col-lg-9 col-md-10 ml-auto\">
                <div class=\"bottom-info ml-auto\">
                    <div class=\"header-section text-left\">
                        <h3 class=\"hny-title two\">Traveling makes a man wiser, but less happy.</h3>
                        <p class=\"mt-3 pr-lg-5\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae laudantium
                            voluptate rem ullam dolore nisi voluptatibus esse quasi. Integer sit amet .Lorem ipsum dolor sit
                            amet adipisicing elit.</p>
                        <a href=\"about.html\" class=\"btn btn-style btn-secondary mt-5\">Read More</a>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<!--//w3l-bottom-->
<!-- testimonials -->
<section class=\"w3l-clients\" id=\"clients\">
    <!-- /grids -->
    <div class=\"cusrtomer-layout py-5\">
        <div class=\"container py-lg-4 py-md-3 pb-lg-0\">
            <div class=\"heading text-center mx-auto\">
                <h6 class=\"sub-title text-center\">Here’s what they have to say</h6>
                <h3 class=\"hny-title mb-md-5 mb-4\">our clients do the talking</h3>
            </div>
            <!-- /grids -->
            <div class=\"testimonial-width\">
                <div id=\"owl-demo1\" class=\"owl-two owl-carousel owl-theme\">
                    <div class=\"item\">
                        <div class=\"testimonial-content\">
                            <div class=\"testimonial\">
                                <blockquote>
                                    <span class=\"fa fa-quote-left\" aria-hidden=\"true\"></span>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae laudantium
                                    voluptate rem ullam dolore nisi voluptatibus esse quasi. Integer sit amet .Lorem ipsum dolor sit
                                    amet adipisicing elit. Laborum dolor facere ipsum adipisicingelit.
                                </blockquote>
                                <div class=\"testi-des\">
                                    <div class=\"test-img\"><img src=\"assets/images/c1.jpg\" class=\"img-fluid\" alt=\"client-img\">
                                    </div>
                                    <div class=\"peopl align-self\">
                                        <h3>Rohit Paul</h3>
                                        <p class=\"indentity\">Example City</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"testimonial-content\">
                            <div class=\"testimonial\">
                                <blockquote>
                                    <span class=\"fa fa-quote-left\" aria-hidden=\"true\"></span>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae laudantium
                                    voluptate rem ullam dolore nisi voluptatibus esse quasi. Integer sit amet .Lorem ipsum dolor sit
                                    amet adipisicing elit. Laborum dolor facere ipsum adipisicingelit.
                                </blockquote>
                                <div class=\"testi-des\">
                                    <div class=\"test-img\"><img src=\"assets/images/c2.jpg\" class=\"img-fluid\" alt=\"client-img\">
                                    </div>
                                    <div class=\"peopl align-self\">
                                        <h3>Shveta</h3>
                                        <p class=\"indentity\">Example City</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"testimonial-content\">
                            <div class=\"testimonial\">
                                <blockquote>
                                    <span class=\"fa fa-quote-left\" aria-hidden=\"true\"></span>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae laudantium
                                    voluptate rem ullam dolore nisi voluptatibus esse quasi. Integer sit amet .Lorem ipsum dolor sit
                                    amet adipisicing elit. Laborum dolor facere ipsum adipisicingelit.
                                </blockquote>
                                <div class=\"testi-des\">
                                    <div class=\"test-img\"><img src=\"assets/images/c3.jpg\" class=\"img-fluid\" alt=\"client-img\">
                                    </div>
                                    <div class=\"peopl align-self\">
                                        <h3>Roy Linderson</h3>
                                        <p class=\"indentity\">Example City</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"testimonial-content\">
                            <div class=\"testimonial\">
                                <blockquote>
                                    <span class=\"fa fa-quote-left\" aria-hidden=\"true\"></span>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae laudantium
                                    voluptate rem ullam dolore nisi voluptatibus esse quasi. Integer sit amet .Lorem ipsum dolor sit
                                    amet adipisicing elit. Laborum dolor facere ipsum adipisicingelit.
                                </blockquote>
                                <div class=\"testi-des\">
                                    <div class=\"test-img\"><img src=\"assets/images/c4.jpg\" class=\"img-fluid\" alt=\"client-img\">
                                    </div>
                                    <div class=\"peopl align-self\">
                                        <h3>Mike Thyson</h3>
                                        <p class=\"indentity\">Example City</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- /grids -->
    </div>
    <!-- //grids -->
</section>
{% endblock %}
<!-- //testimonials -->

<!--/w3l-footer-29-main-->
{% block footer %}
<footer>
    <!-- footer -->
    <section class=\"w3l-footer\">
        <div class=\"w3l-footer-16-main py-5\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6 column\">
                        <div class=\"row\">
                            <div class=\"col-md-4 column\">
                                <h3>Company</h3>
                                <ul class=\"footer-gd-16\">
                                    <li><a href=\"index.html\">Home</a></li>
                                    <li><a href=\"about.html\">About Us</a></li>
                                    <li><a href=\"services.html\">Services</a></li>
                                    <li><a href=\"blog.html\">Blog</a></li>
                                    <li><a href=\"contact.html\">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class=\"col-md-4 column mt-md-0 mt-4\">
                                <h3>Useful Links</h3>
                                <ul class=\"footer-gd-16\">
                                    <li><a href=\"#url\">Destinations</a></li>
                                    <li><a href=\"#url\">Our Branches</a></li>
                                    <li><a href=\"#url\">Latest Media</a></li>
                                    <li><a href=\"about.html\">About Company</a></li>
                                    <li><a href=\"#url\">Our Packages</a></li>
                                </ul>
                            </div>
                            <div class=\"col-md-4 column mt-md-0 mt-4\">
                                <h3>Our Services</h3>
                                <ul class=\"footer-gd-16\">
                                    <li><a href=\"#url\">Privacy Policy</a></li>
                                    <li><a href=\"#url\">Our Terms</a></li>
                                    <li><a href=\"services.html\">Services</a></li>
                                    <li><a href=\"landing-single.html\">Landing Page</a></li>
                                    <li><a href=\"#url\">Our Guides</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-12 column pl-lg-5 column4 mt-lg-0 mt-5\">
                        <h3>Newsletter </h3>
                        <div class=\"end-column\">
                            <h4>Get latest updates and offers.</h4>
                            <form action=\"#\" class=\"subscribe\" method=\"post\">
                                <input type=\"email\" name=\"email\" placeholder=\"Email Address\" required=\"\">
                                <button type=\"submit\">Go</button>
                            </form>
                            <p>Sign up for our latest news & articles. We won’t give you spam mails.</p>
                        </div>
                    </div>
                </div>
                <div class=\"d-flex below-section justify-content-between align-items-center pt-4 mt-5\">
                    <div class=\"columns text-lg-left text-center\">
                        <p>&copy; 2020 Traversal. All rights reserved.Design by <a href=\"https://w3layouts.com/\" target=\"_blank\">
                                W3Layouts</a>
                        </p>
                    </div>
                    <div class=\"columns-2 mt-lg-0 mt-3\">
                        <ul class=\"social\">
                            <li><a href=\"#facebook\"><span class=\"fa fa-facebook\" aria-hidden=\"true\"></span></a>
                            </li>
                            <li><a href=\"#linkedin\"><span class=\"fa fa-linkedin\" aria-hidden=\"true\"></span></a>
                            </li>
                            <li><a href=\"#twitter\"><span class=\"fa fa-twitter\" aria-hidden=\"true\"></span></a>
                            </li>
                            <li><a href=\"#google\"><span class=\"fa fa-google-plus\" aria-hidden=\"true\"></span></a>
                            </li>
                            <li><a href=\"#github\"><span class=\"fa fa-github\" aria-hidden=\"true\"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- move top -->
        <button onclick=\"topFunction()\" id=\"movetop\" title=\"Go to top\">
            <span class=\"fa fa-angle-up\"></span>
        </button>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function () {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById(\"movetop\").style.display = \"block\";
                } else {
                    document.getElementById(\"movetop\").style.display = \"none\";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <!-- //move top -->
        <script>
            \$(function () {
                \$('.navbar-toggler').click(function () {
                    \$('body').toggleClass('noscroll');
                })
            });
        </script>
    </section>
    <!-- //footer -->
</footer>
{% endblock %}
<!-- Template JavaScript -->
<script src=\"{{ asset(\"assets/js/jquery-3.3.1.min.js\")}}\"></script>
<script src=\"{{ asset(\"assets/js/theme-change.js\")}}\"></script>
<!--/slider-js-->
<script src=\"{{ asset(\"assets/js/jquery.min.js\")}}\"></script>
<script src=\"{{ asset(\"assets/js/modernizr-2.6.2.min.js\")}}\"></script>
<script src=\"{{ asset(\"assets/js/jquery.zoomslider.min.js\")}}\"></script>
<!--//slider-js-->
<script src=\"{{ asset(\"assets/js/owl.carousel.js\")}}\"></script>
<!-- script for tesimonials carousel slider -->
<script>
    \$(document).ready(function () {
        \$(\"#owl-demo1\").owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                736: {
                    items: 1,
                    nav: false
                },
                1000: {
                    items: 1,
                    nav: false,
                    loop: true
                }
            }
        })
    })
</script>
<!-- //script for tesimonials carousel slider -->
<!-- stats number counter-->
<script src={{ asset(\"assets/js/jquery.waypoints.min.js\")}}></script>
<script src={{ asset(\"assets/js/jquery.countup.js\")}}></script>
<script>
    \$('.counter').countUp();
</script>
<!-- //stats number counter -->

<!--/MENU-JS-->
<script>
    \$(window).on(\"scroll\", function () {
        var scroll = \$(window).scrollTop();

        if (scroll >= 80) {
            \$(\"#site-header\").addClass(\"nav-fixed\");
        } else {
            \$(\"#site-header\").removeClass(\"nav-fixed\");
        }
    });

    //Main navigation Active Class Add Remove
    \$(\".navbar-toggler\").on(\"click\", function () {
        \$(\"header\").toggleClass(\"active\");
    });
    \$(document).on(\"ready\", function () {
        if (\$(window).width() > 991) {
            \$(\"header\").removeClass(\"active\");
        }
        \$(window).on(\"resize\", function () {
            if (\$(window).width() > 991) {
                \$(\"header\").removeClass(\"active\");
            }
        });
    });
</script>
<!--//MENU-JS-->

<script src={{ asset(\"assets/js/bootstrap.min.js\")}}></script>

</body>

</html>", "base.html.twig", "C:\\Users\\Asus\\Desktop\\reservi\\templates\\base.html.twig");
    }
}
