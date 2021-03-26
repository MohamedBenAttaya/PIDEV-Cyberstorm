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

/* home_admin/mypdf.html.twig */
class __TwigTemplate_024f26f1c7997803973fa4e75a9db94de6f9a5343c3794fcb81d686aae032271 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home_admin/mypdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home_admin/mypdf.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Title of the document</title>
</head>

<body>
<br><br>
<table border=\"1\" class=\"table\">
    <thead>
    <tr>
        <th>Nom</th>
        <th>Adresse</th>
        <th>Prix</th>
        <th>Description</th>
        <th>NbEtoile</th>
        <th>NbChambre</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hotels"]) || array_key_exists("hotels", $context) ? $context["hotels"] : (function () { throw new RuntimeError('Variable "hotels" does not exist.', 21, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 22
            echo "        <tr>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "Nom", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
            <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "adresse", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "prix", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "Description", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
            <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "NbEtoile", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
            <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "NbChambre", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
        </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 31
            echo "        <tr>
            <td colspan=\"8\">no records found</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    </tbody>
</table>


</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home_admin/mypdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 35,  101 => 31,  93 => 28,  89 => 27,  85 => 26,  81 => 25,  77 => 24,  73 => 23,  70 => 22,  65 => 21,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Title of the document</title>
</head>

<body>
<br><br>
<table border=\"1\" class=\"table\">
    <thead>
    <tr>
        <th>Nom</th>
        <th>Adresse</th>
        <th>Prix</th>
        <th>Description</th>
        <th>NbEtoile</th>
        <th>NbChambre</th>
    </tr>
    </thead>
    <tbody>
    {% for hotel in hotels %}
        <tr>
            <td>{{ hotel.Nom }}</td>
            <td>{{ hotel.adresse }}</td>
            <td>{{ hotel.prix }}</td>
            <td>{{ hotel.Description }}</td>
            <td>{{ hotel.NbEtoile }}</td>
            <td>{{ hotel.NbChambre }}</td>
        </tr>
    {% else %}
        <tr>
            <td colspan=\"8\">no records found</td>
        </tr>
    {% endfor %}
    </tbody>
</table>


</body>

</html>", "home_admin/mypdf.html.twig", "C:\\Users\\Asus\\Desktop\\reservi\\templates\\home_admin\\mypdf.html.twig");
    }
}
