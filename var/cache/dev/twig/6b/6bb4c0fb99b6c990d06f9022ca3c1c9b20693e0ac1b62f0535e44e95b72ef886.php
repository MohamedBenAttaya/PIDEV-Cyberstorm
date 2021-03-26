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

/* hotel/show.html.twig */
class __TwigTemplate_de434bea1640581f7ea042f02cb6fa6ee9b3aa38ef2e60906d9f4524566d03d3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hotel/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "hotel/show.html.twig", 1);
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

        echo "Hotel";
        
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
        echo "    <!-- //stats -->
    <!--/-->
    <h1>Hotel</h1>
    <div class=\"best-rooms py-5\">
        <div class=\"container py-md-5\">
            <div class=\"ban-content-inf row\">
                <div class=\"maghny-gd-1 col-lg-6\">
                    <div class=\"maghny-grid\">
                        <figure class=\"effect-lily border-radius  m-0\">
                            <img class=\"img-fluid\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 15, $this->source); })()), "image", [], "any", false, false, false, 15), "html", null, true);
        echo "\" alt=\"\" />
                            <figcaption>
                                <div>
                                    <h4>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 18, $this->source); })()), "nom", [], "any", false, false, false, 18), "html", null, true);
        echo "</h4>
                                    <p>Prix ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 19, $this->source); })()), "prix", [], "any", false, false, false, 19), "html", null, true);
        echo "\$ </p>
                                </div>

                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class=\"maghny-gd-1 col-lg-6 mt-lg-0 mt-4\">
                    <div class=\"row\">
                        Description: ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 28, $this->source); })()), "description", [], "any", false, false, false, 28), "html", null, true);
        echo "
                    </div><div class=\"row\">
                        Nombre de chambres disponibles: ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 30, $this->source); })()), "NbChambre", [], "any", false, false, false, 30), "html", null, true);
        echo "
                    </div>
                    <div class=\"row\">
                        Adresse: ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 33, $this->source); })()), "adresse", [], "any", false, false, false, 33), "html", null, true);
        echo "
                    </div>
                    <table class=\"table\">
                        <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Type</th>
                            <th>Reduction</th>
                            <th>actions</th>
                        </tr>
                        </thead>
                        <tbody>
                    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 45, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 46
            echo "                        <tr>
                            <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "Nom", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                            <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "type", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                            <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "Reduction", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("promotion_show", ["id" => twig_get_attribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\">show</a>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 55
            echo "                        <tr>
                            <td colspan=\"6\">no records found</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                        </tbody>
                    </table>
                    <div class=\"row\">
                        <a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hotel_all");
        echo "\">Afficher les hotels</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //stats -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "hotel/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 62,  187 => 59,  178 => 55,  169 => 51,  164 => 49,  160 => 48,  156 => 47,  153 => 46,  148 => 45,  133 => 33,  127 => 30,  122 => 28,  110 => 19,  106 => 18,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hotel{% endblock %}

{% block content %}
    <!-- //stats -->
    <!--/-->
    <h1>Hotel</h1>
    <div class=\"best-rooms py-5\">
        <div class=\"container py-md-5\">
            <div class=\"ban-content-inf row\">
                <div class=\"maghny-gd-1 col-lg-6\">
                    <div class=\"maghny-grid\">
                        <figure class=\"effect-lily border-radius  m-0\">
                            <img class=\"img-fluid\" src=\"{{ asset(\"assets/images/\") }}{{hotel.image}}\" alt=\"\" />
                            <figcaption>
                                <div>
                                    <h4>{{hotel.nom}}</h4>
                                    <p>Prix {{ hotel.prix }}\$ </p>
                                </div>

                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class=\"maghny-gd-1 col-lg-6 mt-lg-0 mt-4\">
                    <div class=\"row\">
                        Description: {{ hotel.description }}
                    </div><div class=\"row\">
                        Nombre de chambres disponibles: {{ hotel.NbChambre }}
                    </div>
                    <div class=\"row\">
                        Adresse: {{ hotel.adresse }}
                    </div>
                    <table class=\"table\">
                        <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Type</th>
                            <th>Reduction</th>
                            <th>actions</th>
                        </tr>
                        </thead>
                        <tbody>
                    {% for promotion in promotions %}
                        <tr>
                            <td>{{ promotion.Nom }}</td>
                            <td>{{ promotion.type }}</td>
                            <td>{{ promotion.Reduction }}</td>
                            <td>
                                <a href=\"{{ path('promotion_show', {'id': promotion.id}) }}\">show</a>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"6\">no records found</td>
                        </tr>
                    {% endfor %}
                        </tbody>
                    </table>
                    <div class=\"row\">
                        <a href=\"{{ path('hotel_all')}}\">Afficher les hotels</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //stats -->
{% endblock %}
", "hotel/show.html.twig", "C:\\Users\\Asus\\Desktop\\reservi\\templates\\hotel\\show.html.twig");
    }
}
