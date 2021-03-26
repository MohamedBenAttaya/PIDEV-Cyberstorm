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

/* hotel/tri.html.twig */
class __TwigTemplate_a63b1c007c4df91da75611938bac67a196efe534e71e547a1aca894b1c443a03 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/tri.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/tri.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "hotel/tri.html.twig", 1);
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

        echo "hotel index";
        
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hotel_all");
        echo "\">
                    <label>Entrer nom de l'hotel</label>
                    <label>
                        <input type=\"text\" name=\"data\" class=\"form-control\">
                    </label><input type=\"submit\" class=\"btn btn-style btn-primary\" value=\"Recherche\">
                </form>
                  <form method=\"post\" action=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tri");
        echo "\">
                <div class=\"form-row\">
                    <div class=\"col\">
                        <label>valeurs min du prix
                            <input type=\"number\" class=\"form-control\" placeholder=\"0\" name=\"min\">
                        </label>
                    </div>
                    <div class=\"col\">
                        <label>valeurs max du prix
                            <input type=\"number\" class=\"form-control\" placeholder=\"1000\" name=\"max\">
                        </label>
                    </div>
                </div>
                <label>Prix
                    <select class=\"form-control\" name=\"type\">
                        <option>Croissant</option>
                        <option>Décroissant</option>
                    </select>
                </label>
                <input type=\"submit\" class=\"btn btn-style btn-primary\" value=\"Trier par prix\">
                </form>
                <div class=\"row\">
                    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hotels"]) || array_key_exists("hotels", $context) ? $context["hotels"] : (function () { throw new RuntimeError('Variable "hotels" does not exist.', 42, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 43
            echo "                        <div class=\"col-lg-4 col-md-4 col-6\">
                            <div class=\"column\">
                                <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hotel_show", ["id" => twig_get_attribute($this->env, $this->source, $context["hotel"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "image", [], "any", false, false, false, 45), "html", null, true);
            echo "\" alt=\"\" class=\"img-fluid\"></a>
                                <div class=\"info\">
                                    <h4><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hotel_show", ["id" => twig_get_attribute($this->env, $this->source, $context["hotel"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "Nom", [], "any", false, false, false, 47), "html", null, true);
            echo "   ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "NbEtoile", [], "any", false, false, false, 47), "html", null, true);
            echo " Etoiles</a></h4>
                                    <p>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "adresse", [], "any", false, false, false, 48), "html", null, true);
            echo " </p>
                                    <div class=\"dst-btm\">
                                        <h6 class=\"\">Prix</h6>
                                        <span>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "prix", [], "any", false, false, false, 51), "html", null, true);
            echo " Dt</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 57
            echo "                        no records found
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                </div>
                <div class=\"navigation\">
                    ";
        // line 61
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["hotels"]) || array_key_exists("hotels", $context) ? $context["hotels"] : (function () { throw new RuntimeError('Variable "hotels" does not exist.', 61, $this->source); })()));
        echo "
                </div>
            </div>
        </div></section>
    <!--  //Work gallery section -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "hotel/tri.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 61,  181 => 59,  174 => 57,  163 => 51,  157 => 48,  149 => 47,  141 => 45,  137 => 43,  132 => 42,  107 => 20,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}hotel index{% endblock %}

{% block content %}
    <!--  Work gallery section -->
    <section class=\"grids-1 py-5\">
        <div class=\"grids py-lg-5 py-md-4\">
            <div class=\"container\">
                <div style=\"margin: 8px auto; display: block; text-align:center;\">

                </div>
                <h3 class=\"hny-title mb-5\">Les hotels disponibles</h3>
                <form method=\"post\" action=\"{{ path('hotel_all') }}\">
                    <label>Entrer nom de l'hotel</label>
                    <label>
                        <input type=\"text\" name=\"data\" class=\"form-control\">
                    </label><input type=\"submit\" class=\"btn btn-style btn-primary\" value=\"Recherche\">
                </form>
                  <form method=\"post\" action=\"{{ path('tri') }}\">
                <div class=\"form-row\">
                    <div class=\"col\">
                        <label>valeurs min du prix
                            <input type=\"number\" class=\"form-control\" placeholder=\"0\" name=\"min\">
                        </label>
                    </div>
                    <div class=\"col\">
                        <label>valeurs max du prix
                            <input type=\"number\" class=\"form-control\" placeholder=\"1000\" name=\"max\">
                        </label>
                    </div>
                </div>
                <label>Prix
                    <select class=\"form-control\" name=\"type\">
                        <option>Croissant</option>
                        <option>Décroissant</option>
                    </select>
                </label>
                <input type=\"submit\" class=\"btn btn-style btn-primary\" value=\"Trier par prix\">
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
                                        <h6 class=\"\">Prix</h6>
                                        <span>{{ hotel.prix }} Dt</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% else %}
                        no records found
                    {% endfor %}
                </div>
                <div class=\"navigation\">
                    {{ knp_pagination_render(hotels) }}
                </div>
            </div>
        </div></section>
    <!--  //Work gallery section -->
{% endblock %}

", "hotel/tri.html.twig", "C:\\Users\\Asus\\Desktop\\reservi\\templates\\hotel\\tri.html.twig");
    }
}
