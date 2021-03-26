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

/* hotel/allhotel.html.twig */
class __TwigTemplate_362c160484539620effe9126cae59277c679cb4ed8c403d22e7125709d3c389b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/allhotel.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/allhotel.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "hotel/allhotel.html.twig", 1);
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

        echo "Hotel index";
        
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
        echo "    <!--  Work gallery section -->
    <section class=\"grids-1 py-5\">
        <div class=\"grids py-lg-5 py-md-4\">
            <div class=\"container\">
                <div style=\"margin: 8px auto; display: block; text-align:center;\">

                </div>
                <h3 class=\"hny-title mb-5\">Les hotels disponibles</h3>
                <form method=\"post\" action=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("RechercheH");
        echo "\">
                <label>Entrer nom de l'hotel</label>
                    <label>
                        <input type=\"text\" name=\"data\" class=\"form-control\">
                    </label><input type=\"submit\" class=\"btn btn-style btn-primary\" value=\"Recherche\">
                </form>
                <div class=\"row\">
                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hotels"]) || array_key_exists("hotels", $context) ? $context["hotels"] : (function () { throw new RuntimeError('Variable "hotels" does not exist.', 21, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 22
            echo "                    <div class=\"col-lg-4 col-md-4 col-6\">
                        <div class=\"column\">
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hotel_show", ["id" => twig_get_attribute($this->env, $this->source, $context["hotel"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "image", [], "any", false, false, false, 24), "html", null, true);
            echo "\" alt=\"\" class=\"img-fluid\"></a>
                            <div class=\"info\">
                                <h4><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hotel_show", ["id" => twig_get_attribute($this->env, $this->source, $context["hotel"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "Nom", [], "any", false, false, false, 26), "html", null, true);
            echo "   ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "NbEtoile", [], "any", false, false, false, 26), "html", null, true);
            echo " Etoiles</a></h4>
                                <p>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "adresse", [], "any", false, false, false, 27), "html", null, true);
            echo " </p>
                                <div class=\"dst-btm\">
                                    <h6 class=\"\">Prix </h6>
                                    <span>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "prix", [], "any", false, false, false, 30), "html", null, true);
            echo "</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            echo "                            no records found
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                </div>
            </div>
        </div></section>
    <!--  //Work gallery section -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "hotel/allhotel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 38,  150 => 36,  139 => 30,  133 => 27,  125 => 26,  117 => 24,  113 => 22,  108 => 21,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hotel index{% endblock %}

{% block content %}
    <!--  Work gallery section -->
    <section class=\"grids-1 py-5\">
        <div class=\"grids py-lg-5 py-md-4\">
            <div class=\"container\">
                <div style=\"margin: 8px auto; display: block; text-align:center;\">

                </div>
                <h3 class=\"hny-title mb-5\">Les hotels disponibles</h3>
                <form method=\"post\" action=\"{{ path('RechercheH') }}\">
                <label>Entrer nom de l'hotel</label>
                    <label>
                        <input type=\"text\" name=\"data\" class=\"form-control\">
                    </label><input type=\"submit\" class=\"btn btn-style btn-primary\" value=\"Recherche\">
                </form>
                <div class=\"row\">
                    {% for hotel in hotels %}
                    <div class=\"col-lg-4 col-md-4 col-6\">
                        <div class=\"column\">
                            <a href=\"{{ path('hotel_show', {'id': hotel.id}) }}\"><img src=\"{{ asset(\"assets/images/\") }}{{hotel.image}}\" alt=\"\" class=\"img-fluid\"></a>
                            <div class=\"info\">
                                <h4><a href=\"{{ path('hotel_show', {'id': hotel.id}) }}\">{{ hotel.Nom }}   {{ hotel.NbEtoile }} Etoiles</a></h4>
                                <p>{{ hotel.adresse }} </p>
                                <div class=\"dst-btm\">
                                    <h6 class=\"\">Prix </h6>
                                    <span>{{ hotel.prix }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    {% else %}
                            no records found
                    {% endfor %}
                </div>
            </div>
        </div></section>
    <!--  //Work gallery section -->
{% endblock %}
", "hotel/allhotel.html.twig", "C:\\Users\\Asus\\Desktop\\reservi\\templates\\hotel\\allhotel.html.twig");
    }
}
