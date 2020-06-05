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

/* store Pages.html.twig */
class __TwigTemplate_feb070fb7a1f53ca751931bd3f1542fdbb105eaa28a89d0a82388dfd5ff33821 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 6
        $this->parent = $this->loadTemplate("base.html.twig", "store Pages.html.twig", 6);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "store Pages.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "store Pages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Store Pages";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "     <!--START STORE-PAGES-PAGE-BACKGROUND SECTION-->
        <div style=\"background:url('../img/template/mypages.jpg');background-size: cover\" class=\"store-pages-page-background pages-background\">
            <h1>Store Pages</h1>
        </div>
        <!--END STORE-PAGES-PAGE-BACKGROUND SECTION-->
    <!-- Start Tool Box SECTION -->
        <div class=\"option-box\">
            <div class=\"color-option\">
                <h2>Color Selector</h2>
                <ul class=\"list-unstyled\">
                                   <li data-value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/default_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/emerald_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/turquoise_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/sunflower_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/orange_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/carrot_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/alizarin_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/concrete_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/amethyst_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/wetasphalt_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/sienna_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/hotpink_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/darkgoldenrod_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/lightskyblue_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/black_theme.css"), "html", null, true);
        echo "\"></li>
                </ul>
            </div>
            <i class=\"fa fa-gear fa-2x gear-check\"></i>
        </div>
        <!-- End Tool Box SECTION -->
        <!--START STORE-PAGES-PAGE-CONTENT SECTION -->
        <div class=\"store-pages-page-content wrapper\">
            <div class=\"container\">
                <div class=\"store-pages-page-content-head\">
                    <h2 class=\"main-color\">Store's All Pages</h2>
                    <span class=\"first-line\"></span>
                </div>
                <!-- Start Site Map Panel -->
                <div id=\"accordion\" class=\"panel-group\" role=\"tablist\" aria-multiselectable=\"true\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading heading-four\">
                            <h3 class=\"panel-title\">
                                <a class=\"\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse-one\" aria-expanded=\"true\"><i class=\"fa fa-address-card-o\" aria-hidden=\"true\"></i>  Site Map</a>
                            </h3>
                        </div>
                        <div id=\"collapse-one\" class=\"panel-collapse collapse in\" aria-labelledby=\"heading-four\">
                            <div class=\"panel-body store-pages-sections\">
                                <h4>Main Pages :</h4>
                                <ul class=\"careers-title\">
                                    <li><a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Home</a></li>
                                    <li><a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\">About</a></li>
                                    <li><a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contactus");
        echo "\">Contact</a></li>
                                </ul>
                                <h4>Authors & Books :</h4>
                                <ul class=\"careers-title\">
                                    <li><a>Author Profile</a></li>
                                    <li><a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("authors");
        echo "\">All Authors</a></li>
                                 
                                    <li><a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories");
        echo "\">Categories</a></li>
                                    <li><a>Your Book</a></li>
                                    <li><a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("books");
        echo "\">Our Books</a></li>
                                </ul>
                              
                                <h4>Customer :</h4>
                                <ul class=\"careers-title\">
                                    <li><a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        echo "\">Login</a></li>
                                    <li><a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
        echo "\">Register</a></li>
                                </ul>
                                
                                <h4>Store All Pages :</h4>
                                <ul class=\"careers-title\">
                                    <li><a href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("store_pages");
        echo "\">Store Pages</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Site Map Panel -->
            </div>
        </div>        
        <!--END STORE-PAGES-PAGE-CONTENT SECTION -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 94
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 95
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "store Pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 95,  249 => 94,  227 => 82,  219 => 77,  215 => 76,  207 => 71,  202 => 69,  197 => 67,  189 => 62,  185 => 61,  181 => 60,  153 => 35,  149 => 34,  145 => 33,  141 => 32,  137 => 31,  133 => 30,  129 => 29,  125 => 28,  121 => 27,  117 => 26,  113 => 25,  109 => 24,  105 => 23,  101 => 22,  97 => 21,  85 => 11,  76 => 10,  58 => 8,  27 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("




        {% extends 'base.html.twig' %}

{% block title %}Store Pages{% endblock %}

{% block body %}
     <!--START STORE-PAGES-PAGE-BACKGROUND SECTION-->
        <div style=\"background:url('../img/template/mypages.jpg');background-size: cover\" class=\"store-pages-page-background pages-background\">
            <h1>Store Pages</h1>
        </div>
        <!--END STORE-PAGES-PAGE-BACKGROUND SECTION-->
    <!-- Start Tool Box SECTION -->
        <div class=\"option-box\">
            <div class=\"color-option\">
                <h2>Color Selector</h2>
                <ul class=\"list-unstyled\">
                                   <li data-value=\"{{ asset('assets/css/default_theme.css')}}\"></li>
                    <li data-value=\"{{ asset('assets/css/emerald_theme.css')}}\"></li>
                    <li data-value=\"{{ asset('assets/css/turquoise_theme.css')}}\"></li>
                    <li data-value=\"{{ asset('assets/css/sunflower_theme.css')}}\"></li>
                    <li data-value=\"{{ asset('assets/css/orange_theme.css')}}\"></li>
                    <li data-value=\"{{ asset('assets/css/carrot_theme.css')}}\"></li>
                    <li data-value=\"{{ asset('assets/css/alizarin_theme.css')}}\"></li>
                    <li data-value=\"{{ asset('assets/css/concrete_theme.css')}}\"></li>
                    <li data-value=\"{{ asset('assets/css/amethyst_theme.css')}}\"></li>
                    <li data-value=\"{{ asset('assets/css/wetasphalt_theme.css')}}\"></li>
                    <li data-value=\"{{ asset('assets/css/sienna_theme.css')}}\"></li>
                    <li data-value=\"{{ asset('assets/css/hotpink_theme.css')}}\"></li>
                    <li data-value=\"{{ asset('assets/css/darkgoldenrod_theme.css')}}\"></li>
                    <li data-value=\"{{ asset('assets/css/lightskyblue_theme.css')}}\"></li>
                    <li data-value=\"{{ asset('assets/css/black_theme.css')}}\"></li>
                </ul>
            </div>
            <i class=\"fa fa-gear fa-2x gear-check\"></i>
        </div>
        <!-- End Tool Box SECTION -->
        <!--START STORE-PAGES-PAGE-CONTENT SECTION -->
        <div class=\"store-pages-page-content wrapper\">
            <div class=\"container\">
                <div class=\"store-pages-page-content-head\">
                    <h2 class=\"main-color\">Store's All Pages</h2>
                    <span class=\"first-line\"></span>
                </div>
                <!-- Start Site Map Panel -->
                <div id=\"accordion\" class=\"panel-group\" role=\"tablist\" aria-multiselectable=\"true\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading heading-four\">
                            <h3 class=\"panel-title\">
                                <a class=\"\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse-one\" aria-expanded=\"true\"><i class=\"fa fa-address-card-o\" aria-hidden=\"true\"></i>  Site Map</a>
                            </h3>
                        </div>
                        <div id=\"collapse-one\" class=\"panel-collapse collapse in\" aria-labelledby=\"heading-four\">
                            <div class=\"panel-body store-pages-sections\">
                                <h4>Main Pages :</h4>
                                <ul class=\"careers-title\">
                                    <li><a href=\"{{path('home')}}\">Home</a></li>
                                    <li><a href=\"{{path('about')}}\">About</a></li>
                                    <li><a href=\"{{path('contactus')}}\">Contact</a></li>
                                </ul>
                                <h4>Authors & Books :</h4>
                                <ul class=\"careers-title\">
                                    <li><a>Author Profile</a></li>
                                    <li><a href=\"{{path('authors')}}\">All Authors</a></li>
                                 
                                    <li><a href=\"{{path('categories')}}\">Categories</a></li>
                                    <li><a>Your Book</a></li>
                                    <li><a href=\"{{path('books')}}\">Our Books</a></li>
                                </ul>
                              
                                <h4>Customer :</h4>
                                <ul class=\"careers-title\">
                                    <li><a href=\"{{path('security_login')}}\">Login</a></li>
                                    <li><a href=\"{{path('inscription')}}\">Register</a></li>
                                </ul>
                                
                                <h4>Store All Pages :</h4>
                                <ul class=\"careers-title\">
                                    <li><a href=\"{{path('store_pages')}}\">Store Pages</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Site Map Panel -->
            </div>
        </div>        
        <!--END STORE-PAGES-PAGE-CONTENT SECTION -->

{% endblock %}
{% block javascripts %}

{% endblock %}", "store Pages.html.twig", "C:\\xampp\\htdocs\\Gestion_De_Bibliotheque\\templates\\Store Pages.html.twig");
    }
}
