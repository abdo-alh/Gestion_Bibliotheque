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

/* Authors.html.twig */
class __TwigTemplate_1e698da2b95000a4012a121156fa5e12220fc5bc8faffc9b9e0e19fbf8e1f5a6 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Authors.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Authors.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Authors.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Authors";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<!--START AUTHORS-PAGE-BACKGROUND SECTION -->
\t\t<div style=\"background: url('img/template/auteur.jpg');background-size: cover;\" class=\"authors-page-background pages-background\">
\t\t\t<h1>Authors</h1>
\t\t</div>
\t\t<!--END AUTHORS-PAGE-BACKGROUND SECTION -->
\t\t<!-- Start Tool Box SECTION -->
        <div class=\"option-box\">
            <div class=\"color-option\">
                <h2>Color Selector</h2>
                <ul class=\"list-unstyled\">
                    <li data-value=\"assets/css/default_theme.css\"></li>
                    <li data-value=\"assets/css/emerald_theme.css\"></li>
                    <li data-value=\"assets/css/turquoise_theme.css\"></li>
                    <li data-value=\"assets/css/sunflower_theme.css\"></li>
                    <li data-value=\"assets/css/orange_theme.css\"></li>
                    <li data-value=\"assets/css/carrot_theme.css\"></li>
                    <li data-value=\"assets/css/alizarin_theme.css\"></li>
                    <li data-value=\"assets/css/concrete_theme.css\"></li>
                    <li data-value=\"assets/css/amethyst_theme.css\"></li>
                    <li data-value=\"assets/css/wetasphalt_theme.css\"></li>
                    <li data-value=\"assets/css/sienna_theme.css\"></li>
                    <li data-value=\"assets/css/hotpink_theme.css\"></li>
                    <li data-value=\"assets/css/darkgoldenrod_theme.css\"></li>
                    <li data-value=\"assets/css/lightskyblue_theme.css\"></li>
                    <li data-value=\"assets/css/black_theme.css\"></li>
                </ul>
            </div>
            <i class=\"fa fa-gear fa-2x gear-check\"></i>
        </div>
        <!-- End Tool Box SECTION -->

        <!--START AUTHORS-PAGE-CONTENT SECTION -->
\t\t<div class=\"authors-page-content wrapper\">
        \t<div class=\"container\">
\t\t        <div class=\"authors-page-content-head\">
\t\t          \t<h2 class=\"main-color\">Authors</h2>
\t\t          \t<span class=\"first-line\"></span>
\t\t        </div>
\t\t        <div class=\"all-authors\">
\t\t        \t<div class=\"row\">
\t\t        \t\t";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["auteurs"]) || array_key_exists("auteurs", $context) ? $context["auteurs"] : (function () { throw new RuntimeError('Variable "auteurs" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["auteur"]) {
            // line 48
            echo "\t\t        \t\t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t        \t\t<div class=\"author-info\">
\t\t\t        \t\t\t<a class=\"auth-img\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("author_profile", ["id" => twig_get_attribute($this->env, $this->source, $context["auteur"], "id", [])]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/auteurs/" . twig_get_attribute($this->env, $this->source, $context["auteur"], "image", []))), "html", null, true);
            echo "\" alt=\"Amber\"></a>
\t\t\t        \t\t\t<h3><a class=\"auth-name\" href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("author_profile", ["id" => twig_get_attribute($this->env, $this->source, $context["auteur"], "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auteur"], "name", []), "html", null, true);
            echo "</a></h3>
\t\t\t        \t\t</div>\t
\t\t\t        \t</div>\t
\t\t\t        \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['auteur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "\t
\t\t        \t</div>
\t\t        </div>
\t\t       
\t\t    </div>
\t\t</div>
\t\t<!--END AUTHORS-PAGE-CONTENT SECTION -->




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Authors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 67,  175 => 66,  154 => 54,  142 => 51,  136 => 50,  132 => 48,  128 => 47,  85 => 6,  76 => 5,  58 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Authors{% endblock %}

{% block body %}

<!--START AUTHORS-PAGE-BACKGROUND SECTION -->
\t\t<div style=\"background: url('img/template/auteur.jpg');background-size: cover;\" class=\"authors-page-background pages-background\">
\t\t\t<h1>Authors</h1>
\t\t</div>
\t\t<!--END AUTHORS-PAGE-BACKGROUND SECTION -->
\t\t<!-- Start Tool Box SECTION -->
        <div class=\"option-box\">
            <div class=\"color-option\">
                <h2>Color Selector</h2>
                <ul class=\"list-unstyled\">
                    <li data-value=\"assets/css/default_theme.css\"></li>
                    <li data-value=\"assets/css/emerald_theme.css\"></li>
                    <li data-value=\"assets/css/turquoise_theme.css\"></li>
                    <li data-value=\"assets/css/sunflower_theme.css\"></li>
                    <li data-value=\"assets/css/orange_theme.css\"></li>
                    <li data-value=\"assets/css/carrot_theme.css\"></li>
                    <li data-value=\"assets/css/alizarin_theme.css\"></li>
                    <li data-value=\"assets/css/concrete_theme.css\"></li>
                    <li data-value=\"assets/css/amethyst_theme.css\"></li>
                    <li data-value=\"assets/css/wetasphalt_theme.css\"></li>
                    <li data-value=\"assets/css/sienna_theme.css\"></li>
                    <li data-value=\"assets/css/hotpink_theme.css\"></li>
                    <li data-value=\"assets/css/darkgoldenrod_theme.css\"></li>
                    <li data-value=\"assets/css/lightskyblue_theme.css\"></li>
                    <li data-value=\"assets/css/black_theme.css\"></li>
                </ul>
            </div>
            <i class=\"fa fa-gear fa-2x gear-check\"></i>
        </div>
        <!-- End Tool Box SECTION -->

        <!--START AUTHORS-PAGE-CONTENT SECTION -->
\t\t<div class=\"authors-page-content wrapper\">
        \t<div class=\"container\">
\t\t        <div class=\"authors-page-content-head\">
\t\t          \t<h2 class=\"main-color\">Authors</h2>
\t\t          \t<span class=\"first-line\"></span>
\t\t        </div>
\t\t        <div class=\"all-authors\">
\t\t        \t<div class=\"row\">
\t\t        \t\t{%for auteur in auteurs%}
\t\t        \t\t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t        \t\t<div class=\"author-info\">
\t\t\t        \t\t\t<a class=\"auth-img\" href=\"{{ path('author_profile',{'id':auteur.id})}}\"><img src=\"{{ asset('img/auteurs/' ~ auteur.image)  }}\" alt=\"Amber\"></a>
\t\t\t        \t\t\t<h3><a class=\"auth-name\" href=\"{{ path('author_profile',{'id':auteur.id})}}\">{{auteur.name}}</a></h3>
\t\t\t        \t\t</div>\t
\t\t\t        \t</div>\t
\t\t\t        \t{%endfor%}\t
\t\t        \t</div>
\t\t        </div>
\t\t       
\t\t    </div>
\t\t</div>
\t\t<!--END AUTHORS-PAGE-CONTENT SECTION -->




{% endblock %}
{% block javascripts %}

{% endblock %}", "Authors.html.twig", "C:\\Users\\asus\\Desktop\\PFE\\Gestion De Bibliotheque\\templates\\authors.html.twig");
    }
}
