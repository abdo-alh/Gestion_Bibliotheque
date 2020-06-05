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
class __TwigTemplate_02bbf5a43c516affb0b20d2f222dbd3a701bf896205b1904576f2347efbcc62d extends \Twig\Template
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

        echo "Home";
        
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
        <div class=\"store-pages-page-background pages-background\">
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
                                    <li><a href=\"index.html\">Home</a></li>
                                    <li><a href=\"about.html\">About</a></li>
                                    <li><a href=\"contact.html\">Contact</a></li>
                                    <li><a href=\"careers.html\">Careers</a></li>
                                    <li><a href=\"faq.html\">FAQ</a></li>
                                    <li><a href=\"ordering.html\">Ordering</a></li>
                                </ul>
                                <h4>Authors & Books :</h4>
                                <ul class=\"careers-title\">
                                    <li><a href=\"author-profile.html\">Author Profile</a></li>
                                    <li><a href=\"authors.html\">All Authors</a></li>
                                    <li><a href=\"featured-authors.html\">Featured Authors</a></li>
                                    <li><a href=\"categories.html\">Categories</a></li>
                                    <li><a href=\"book.html\">Your Book</a></li>
                                    <li><a href=\"books.html\">Our Books</a></li>
                                </ul>
                                <h4>product Cart :</h4>
                                <ul class=\"careers-title\">
                                    <li><a href=\"cart.html\">Cart</a></li>
                                    <li><a href=\"cart-empty.html\">Cart Empty</a></li>
                                    <li><a href=\"checkout.html\">Checkout</a></li>
                                    <li><a href=\"checkout-complete.html\">Checkout Complete</a></li>
                                    <li><a href=\"product-wishlist.html\">Product Wishlist</a></li>
                                    <li><a href=\"order-history.html\">Order History</a></li>
                                </ul>
                                <h4>Customer :</h4>
                                <ul class=\"careers-title\">
                                    <li><a href=\"customer-account.html\">Customer Account</a></li>
                                    <li><a href=\"customer-addresses.html\">Customer Addresses</a></li>
                                    <li><a href=\"customer-dashboard.html\">Customer Dashboard</a></li>
                                    <li><a href=\"customer-edit-file.html\">Customer Edit File</a></li>
                                </ul>
                                <h4>Blog :</h4>
                                <ul class=\"careers-title\">
                                    <li><a href=\"blog-grid-page.html\">Blog Grid Page</a></li>
                                    <li><a href=\"blog-list-page.html\">Blog List Page</a></li>
                                    <li><a href=\"blog-post-page.html\">Blog Post Page</a></li>
                                </ul>
                                <h4>Store All Pages :</h4>
                                <ul class=\"careers-title\">
                                    <li><a href=\"store-pages.html\">Store Pages</a></li>
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

    // line 112
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 113
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
        return array (  249 => 113,  240 => 112,  153 => 35,  149 => 34,  145 => 33,  141 => 32,  137 => 31,  133 => 30,  129 => 29,  125 => 28,  121 => 27,  117 => 26,  113 => 25,  109 => 24,  105 => 23,  101 => 22,  97 => 21,  85 => 11,  76 => 10,  58 => 8,  27 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("




        {% extends 'base.html.twig' %}

{% block title %}Home{% endblock %}

{% block body %}
     <!--START STORE-PAGES-PAGE-BACKGROUND SECTION-->
        <div class=\"store-pages-page-background pages-background\">
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
                                    <li><a href=\"index.html\">Home</a></li>
                                    <li><a href=\"about.html\">About</a></li>
                                    <li><a href=\"contact.html\">Contact</a></li>
                                    <li><a href=\"careers.html\">Careers</a></li>
                                    <li><a href=\"faq.html\">FAQ</a></li>
                                    <li><a href=\"ordering.html\">Ordering</a></li>
                                </ul>
                                <h4>Authors & Books :</h4>
                                <ul class=\"careers-title\">
                                    <li><a href=\"author-profile.html\">Author Profile</a></li>
                                    <li><a href=\"authors.html\">All Authors</a></li>
                                    <li><a href=\"featured-authors.html\">Featured Authors</a></li>
                                    <li><a href=\"categories.html\">Categories</a></li>
                                    <li><a href=\"book.html\">Your Book</a></li>
                                    <li><a href=\"books.html\">Our Books</a></li>
                                </ul>
                                <h4>product Cart :</h4>
                                <ul class=\"careers-title\">
                                    <li><a href=\"cart.html\">Cart</a></li>
                                    <li><a href=\"cart-empty.html\">Cart Empty</a></li>
                                    <li><a href=\"checkout.html\">Checkout</a></li>
                                    <li><a href=\"checkout-complete.html\">Checkout Complete</a></li>
                                    <li><a href=\"product-wishlist.html\">Product Wishlist</a></li>
                                    <li><a href=\"order-history.html\">Order History</a></li>
                                </ul>
                                <h4>Customer :</h4>
                                <ul class=\"careers-title\">
                                    <li><a href=\"customer-account.html\">Customer Account</a></li>
                                    <li><a href=\"customer-addresses.html\">Customer Addresses</a></li>
                                    <li><a href=\"customer-dashboard.html\">Customer Dashboard</a></li>
                                    <li><a href=\"customer-edit-file.html\">Customer Edit File</a></li>
                                </ul>
                                <h4>Blog :</h4>
                                <ul class=\"careers-title\">
                                    <li><a href=\"blog-grid-page.html\">Blog Grid Page</a></li>
                                    <li><a href=\"blog-list-page.html\">Blog List Page</a></li>
                                    <li><a href=\"blog-post-page.html\">Blog Post Page</a></li>
                                </ul>
                                <h4>Store All Pages :</h4>
                                <ul class=\"careers-title\">
                                    <li><a href=\"store-pages.html\">Store Pages</a></li>
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

{% endblock %}", "store Pages.html.twig", "C:\\Users\\asus\\Desktop\\PFE\\Gestion De Bibliotheaque\\templates\\Store Pages.html.twig");
    }
}
