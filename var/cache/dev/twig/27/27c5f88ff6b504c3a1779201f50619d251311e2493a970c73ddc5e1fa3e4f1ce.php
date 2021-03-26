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

/* maison/show.html.twig */
class __TwigTemplate_6652e98db44cd75866663894d387ad3ef19e7ad1c46b68b4729849b11a8f520b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maison/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maison/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "maison/show.html.twig", 1);
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

        echo "maison";
        
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
    <h1>maison</h1>
    <div class=\"best-rooms py-5\">
        <div class=\"container py-md-5\">
            <div class=\"ban-content-inf row\">
                <div class=\"maghny-gd-1 col-lg-6\">
                    <div class=\"maghny-grid\">
                        <figure class=\"effect-lily border-radius  m-0\">
                            <img class=\"img-fluid\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 15, $this->source); })()), "image", [], "any", false, false, false, 15), "html", null, true);
        echo "\" alt=\"\" />
                            <figcaption>
                                <div>
                                    <h4>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 18, $this->source); })()), "nom", [], "any", false, false, false, 18), "html", null, true);
        echo "</h4>
                                    <p>Prix ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 19, $this->source); })()), "prix", [], "any", false, false, false, 19), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 28, $this->source); })()), "description", [], "any", false, false, false, 28), "html", null, true);
        echo "
                    </div><div class=\"row\">
                        Disponibilité: ";
        // line 30
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 30, $this->source); })()), "disponibilite", [], "any", false, false, false, 30), 1))) {
            echo " Disponible ";
        } else {
            echo " Indisponible ";
        }
        // line 31
        echo "                    </div>
                    <div class=\"row\">
                        Adresse: ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["maison"]) || array_key_exists("maison", $context) ? $context["maison"] : (function () { throw new RuntimeError('Variable "maison" does not exist.', 33, $this->source); })()), "adresse", [], "any", false, false, false, 33), "html", null, true);
        echo "
                    </div>
                    <div class=\"row\">
                        <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("maison_all");
        echo "\">Afficher les maisons</a>
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
        return "maison/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 36,  137 => 33,  133 => 31,  127 => 30,  122 => 28,  110 => 19,  106 => 18,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}maison{% endblock %}

{% block content %}
    <!-- //stats -->
    <!--/-->
    <h1>maison</h1>
    <div class=\"best-rooms py-5\">
        <div class=\"container py-md-5\">
            <div class=\"ban-content-inf row\">
                <div class=\"maghny-gd-1 col-lg-6\">
                    <div class=\"maghny-grid\">
                        <figure class=\"effect-lily border-radius  m-0\">
                            <img class=\"img-fluid\" src=\"{{ asset(\"assets/images/\") }}{{maison.image}}\" alt=\"\" />
                            <figcaption>
                                <div>
                                    <h4>{{maison.nom}}</h4>
                                    <p>Prix {{ maison.prix }}\$ </p>
                                </div>

                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class=\"maghny-gd-1 col-lg-6 mt-lg-0 mt-4\">
                    <div class=\"row\">
                        Description: {{ maison.description }}
                    </div><div class=\"row\">
                        Disponibilité: {% if maison.disponibilite == 1 %} Disponible {% else %} Indisponible {% endif %}
                    </div>
                    <div class=\"row\">
                        Adresse: {{ maison.adresse }}
                    </div>
                    <div class=\"row\">
                        <a href=\"{{ path('maison_all')}}\">Afficher les maisons</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //stats -->
{% endblock %}
", "maison/show.html.twig", "C:\\Users\\Asus\\Desktop\\reservi\\templates\\maison\\show.html.twig");
    }
}
