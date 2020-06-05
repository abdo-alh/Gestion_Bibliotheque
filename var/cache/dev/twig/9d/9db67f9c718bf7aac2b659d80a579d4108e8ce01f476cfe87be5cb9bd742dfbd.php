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

/* author-profile.html.twig */
class __TwigTemplate_0843312cb1740cf1863ed63cde2dcc12ae1267cbaf5119a1054e7eb8cd1fd538 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "author-profile.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "author-profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "author-profile.html.twig"));

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

        echo "Author-profile";
        
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
   <!--START AUTHOR-PROFILE-PAGE-BACKGROUND SECTION -->
        <div style=\"background: url(../img/template/auteur.jpg);background-size:cover\" class=\"author-profile-page-background pages-background\">
            <h1>Author</h1>
        </div>
        <!--END AUTHOR-PROFILE-PAGE-BACKGROUND SECTION -->
        <!-- Start Tool Box SECTION -->
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
        <!--START AUTHOR-PROFILE-PAGE-CONTENT SECTION -->
        <div class=\"author-profile-page-content wrapper\">
            <div class=\"container\">
                <div class=\"author-profile-content-head\">
                    <h2 class=\"main-color\">Author's Profile</h2>
                    <span class=\"first-line\"></span>
                </div>
                <!--START AUTHOR-PROFILE-CONTENT-DETAILS -->
                <div class=\"author-profile-content-details\">
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-4 col-md-3\">
                            <div class=\"author-pic\">
                                <a href=\"#\">
                                    <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/auteurs/" . twig_get_attribute($this->env, $this->source, (isset($context["auteur"]) || array_key_exists("auteur", $context) ? $context["auteur"] : (function () { throw new RuntimeError('Variable "auteur" does not exist.', 50, $this->source); })()), "image", []))), "html", null, true);
        echo "\" alt=\"Author Image\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-xs-12 col-sm-8 col-md-9\">
                            <div class=\"author-profile-body\">
                                <h3 class=\"author-name\">
                                    <a href=\"#\">";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["auteur"]) || array_key_exists("auteur", $context) ? $context["auteur"] : (function () { throw new RuntimeError('Variable "auteur" does not exist.', 57, $this->source); })()), "name", []), "html", null, true);
        echo "</a>
                                </h3>
                                <div class=\"author-details\">
                                    <p>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["auteur"]) || array_key_exists("auteur", $context) ? $context["auteur"] : (function () { throw new RuntimeError('Variable "auteur" does not exist.', 60, $this->source); })()), "information", []), "html", null, true);
        echo "</p>
                                    <p>Phone:";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["auteur"]) || array_key_exists("auteur", $context) ? $context["auteur"] : (function () { throw new RuntimeError('Variable "auteur" does not exist.', 61, $this->source); })()), "phone", []), "html", null, true);
        echo "</p>
                                    <p>Fax: ### ### ####</p>
                                    <p>Email: <a href=\"#\">";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["auteur"]) || array_key_exists("auteur", $context) ? $context["auteur"] : (function () { throw new RuntimeError('Variable "auteur" does not exist.', 63, $this->source); })()), "email", []), "html", null, true);
        echo "</a></p>
                                    <p>Skype: <a href=\"#\">Reading</a></p>
                                    <p>My Books: <a href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("filter_pageaut", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["auteur"]) || array_key_exists("auteur", $context) ? $context["auteur"] : (function () { throw new RuntimeError('Variable "auteur" does not exist.', 65, $this->source); })()), "id", [])]), "html", null, true);
        echo "\"> Click here</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--AUTHOR-PROFILE-CONTENT-DETAILS -->
            </div>
        </div>
        <!--END AUTHOR-PROFILE-PAGE-CONTENT SECTION -->




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 80
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 81
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "author-profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 81,  186 => 80,  161 => 65,  156 => 63,  151 => 61,  147 => 60,  141 => 57,  131 => 50,  85 => 6,  76 => 5,  58 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Author-profile{% endblock %}

{% block body %}

   <!--START AUTHOR-PROFILE-PAGE-BACKGROUND SECTION -->
        <div style=\"background: url(../img/template/auteur.jpg);background-size:cover\" class=\"author-profile-page-background pages-background\">
            <h1>Author</h1>
        </div>
        <!--END AUTHOR-PROFILE-PAGE-BACKGROUND SECTION -->
        <!-- Start Tool Box SECTION -->
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
        <!--START AUTHOR-PROFILE-PAGE-CONTENT SECTION -->
        <div class=\"author-profile-page-content wrapper\">
            <div class=\"container\">
                <div class=\"author-profile-content-head\">
                    <h2 class=\"main-color\">Author's Profile</h2>
                    <span class=\"first-line\"></span>
                </div>
                <!--START AUTHOR-PROFILE-CONTENT-DETAILS -->
                <div class=\"author-profile-content-details\">
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-4 col-md-3\">
                            <div class=\"author-pic\">
                                <a href=\"#\">
                                    <img src=\"{{ asset('img/auteurs/' ~ auteur.image)  }}\" alt=\"Author Image\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-xs-12 col-sm-8 col-md-9\">
                            <div class=\"author-profile-body\">
                                <h3 class=\"author-name\">
                                    <a href=\"#\">{{auteur.name}}</a>
                                </h3>
                                <div class=\"author-details\">
                                    <p>{{auteur.information}}</p>
                                    <p>Phone:{{ auteur.phone}}</p>
                                    <p>Fax: ### ### ####</p>
                                    <p>Email: <a href=\"#\">{{auteur.email}}</a></p>
                                    <p>Skype: <a href=\"#\">Reading</a></p>
                                    <p>My Books: <a href=\"{{path('filter_pageaut',{'id':auteur.id})}}\"> Click here</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--AUTHOR-PROFILE-CONTENT-DETAILS -->
            </div>
        </div>
        <!--END AUTHOR-PROFILE-PAGE-CONTENT SECTION -->




{% endblock %}
{% block javascripts %}

{% endblock %}", "author-profile.html.twig", "C:\\xampp\\htdocs\\Gestion_De_Bibliotheque\\templates\\author-profile.html.twig");
    }
}
