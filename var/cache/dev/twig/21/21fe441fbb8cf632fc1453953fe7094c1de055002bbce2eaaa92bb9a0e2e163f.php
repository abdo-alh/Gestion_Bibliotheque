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
class __TwigTemplate_e2d49f540e3b4a6f25be453a8d7df33acebdbb7ff40a0d859511e6d498903a3f extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "    </head>
    <body>
    \t\t\t<!--START MENU SECTION-->
\t\t<div class=\"menu\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"menu-section\">
\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t    <a class=\"navbar-brand\" href=\"index.html\">Reading</a>
\t\t\t\t\t</div>
\t\t\t\t\t<!--START SEARCH BAR -->
\t\t\t\t\t<div class=\"search-bar\">
\t\t\t\t\t  \t<input type=\"text\" placeholder=\"Search\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"right:50px; \" class=\"search\">
\t\t\t\t\t\t<div class=\"search-open\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></div>
\t\t\t\t\t\t<div class=\"search-exit\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></div>\t 
\t\t\t\t\t</div>
\t\t\t\t\t<!--END SEARCH BAR -->
\t\t
\t\t\t\t    <!--START MENU TOGGLE ICON-->
\t\t\t\t    <div class=\"menu-toggle\">
\t\t\t\t\t    <div class=\"one\"></div>
\t\t\t\t\t    <div class=\"two\"></div>
\t\t\t\t\t    <div class=\"three\"></div>
\t\t\t\t  \t</div>
\t\t\t\t    <nav>
\t\t\t\t\t\t<ul class=\"hidden\">
                            <li><a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Home</a></li>
                            <li><a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories");
        echo "\">Categories</a></li>
                            <li><a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("books");
        echo "\">Our Books</a></li>
                           
                            <li><a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("customer_account");
        echo "\">Sign In</a></li>
                            <li><a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("store_pages");
        echo "\">Store's All Pages</a></li>
                        </ul>
\t\t\t\t\t</nav>
\t\t\t\t\t<!--END MENU TOGGLE ICON-->
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!--END MENU SECTION-->
        ";
        // line 62
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "
           <!--START FOOTER SECTION -->
        <div class=\"footer wrapper\">
        \t<div class=\"container\">
        \t\t<div class=\"footer-parts\">
        \t\t\t<div class=\"section-head\">
\t\t\t\t\t\t<h2 class=\"second-color\">Site Map</h2>
\t\t\t\t\t\t<span class=\"second-line\"></span>
\t\t\t\t\t</div>
\t\t        \t<div class=\"row site-map\">
\t\t\t        \t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t        \t\t<a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Home</a>
\t\t\t        \t</div>
\t\t\t        \t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t        \t\t<a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\">About</a>
\t\t\t        \t</div>
\t\t\t        \t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t        \t\t<a href=\"#\">Careers</a>
\t\t\t        \t</div>
\t\t\t        \t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t       \t\t\t<a href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories");
        echo "\">Categories</a>
\t\t\t        \t</div>
\t\t\t        \t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t        \t\t<a href=\"#\">Authors</a>
\t\t\t        \t</div>
\t\t\t        \t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t        \t\t<a href=\"\"blog-grid-page.html\"\">Community & Newsletters</a>
\t\t\t        \t</div>
\t\t\t        \t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t        \t\t<a href=\"\"ordering.html\"\">Ordering</a>
\t\t\t        \t</div>
\t\t\t        \t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t        \t\t<a href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact Us</a>
\t\t\t        \t</div>
\t\t\t        \t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t        \t\t<a href=\"#\">FAQ</a>
\t\t\t        \t</div>
\t\t        \t</div>
\t\t\t        <div class=\"social-media\">
\t\t\t        \t<a class=\"facebook\" href=\"#\"><i class=\"fa fa-facebook  fa-2x\" aria-hidden=\"true\"></i></a>
\t\t\t        \t<a class=\"twitter\" href=\"#\"><i class=\"fa fa-twitter fa-2x\" aria-hidden=\"true\"></i></a>
\t\t\t        \t<a class=\"youtube\" href=\"#\"><i class=\"fa fa-youtube fa-2x\" aria-hidden=\"true\"></i></a>
\t\t\t        \t<a class=\"googleplus\" href=\"#\"><i class=\"fa fa-google-plus fa-2x\" aria-hidden=\"true\"></i></a>
\t\t\t        \t<a class=\"linkedin\" href=\"#\"><i class=\"fa fa-linkedin fa-2x\" aria-hidden=\"true\"></i></a>
\t\t\t        \t<a class=\"instagram\" href=\"#\"><i class=\"fa fa-instagram fa-2x\" aria-hidden=\"true\"></i></a>
\t\t\t        \t<a class=\"pinterest\" href=\"#\"><i class=\"fa fa-pinterest-p fa-2x\" aria-hidden=\"true\"></i></a> \t
\t\t\t\t\t</div>
        \t\t</div>
        \t</div>
        </div>
        <!--END FOOTER SECTION -->
        <!--START FINAL SECTION -->
        <div class=\"final\">
        \t<div class=\"container\">
        \t\t<div class=\"row\">
        \t\t\t<div class=\"col-xs-12 col-sm-6\">
\t\t\t        \t<div class=\"copyright final-left\">
\t\t\t        \t\tCopyright &copy; 2018 <span>Reading</span>.Inc
\t\t\t        \t</div>
\t\t        \t</div>
\t\t        \t<div class=\"col-xs-12 col-sm-6\">
\t\t\t\t        <div class=\"copyright final-right\">
\t\t\t\t        \tDesigned by: <span><a href=\"#\">Ahmed Hamdy.</a></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!--END FINAL SECTION -->

<!-- Start Scroll To Top -->
        <div id=\"scroll-top\">
            <i class=\"fa fa-chevron-up fa-2x\"></i>
        </div>
        <!-- End Scroll To Top -->
        ";
        // line 138
        $this->displayBlock('javascripts', $context, $blocks);
        // line 141
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "<link rel='stylesheet' href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.css"), "html", null, true);
        echo "\">
        <link rel='stylesheet' href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/normalize.css"), "html", null, true);
        echo "\"/>
        <link rel='stylesheet' href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\"/>
        <link rel='stylesheet' href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/default_theme.css"), "html", null, true);
        echo "\"/>
        <!-- Fonts Library -->
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,800'>
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Libre+Franklin:100,200,300,500&subset=latin,latin-ext'>
        <!-- Font Awesome Iconc Library -->
        <link rel='stylesheet' href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo "\"/>
 <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.nicescroll.min.js"), "html", null, true);
        echo "\"></script>
 \t<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 62
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 138
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 139
        echo "         
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
        return array (  322 => 139,  313 => 138,  296 => 62,  284 => 20,  280 => 19,  276 => 18,  272 => 17,  268 => 16,  260 => 11,  256 => 10,  252 => 9,  239 => 8,  221 => 7,  209 => 141,  207 => 138,  161 => 95,  146 => 83,  137 => 77,  131 => 74,  118 => 63,  116 => 62,  105 => 54,  101 => 53,  96 => 51,  92 => 50,  88 => 49,  59 => 22,  57 => 8,  53 => 7,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>{% block title %}!{% endblock %}</title>
        {% block stylesheets %}<link rel='stylesheet' href=\"{{ asset('assets/css/bootstrap.css')}}\">
        <link rel='stylesheet' href=\"{{ asset('assets/css/normalize.css')}}\"/>
        <link rel='stylesheet' href=\"{{ asset('assets/css/style.css')}}\"/>
        <link rel='stylesheet' href=\"{{ asset('assets/css/default_theme.css')}}\"/>
        <!-- Fonts Library -->
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,800'>
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Libre+Franklin:100,200,300,500&subset=latin,latin-ext'>
        <!-- Font Awesome Iconc Library -->
        <link rel='stylesheet' href=\"{{ asset('assets/css/font-awesome.min.css')}}\"/>
 <script src=\"{{ asset('assets/js/jquery-3.2.1.min.js')}}\"></script>
    <script src=\"{{ asset('assets/js/jquery.nicescroll.min.js')}}\"></script>
 \t<script src=\"{{ asset('assets/js/plugins.js')}}\"></script>
\t<script src=\"{{ asset('assets/js/bootstrap.min.js')}}\"></script>
        {% endblock %}
    </head>
    <body>
    \t\t\t<!--START MENU SECTION-->
\t\t<div class=\"menu\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"menu-section\">
\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t    <a class=\"navbar-brand\" href=\"index.html\">Reading</a>
\t\t\t\t\t</div>
\t\t\t\t\t<!--START SEARCH BAR -->
\t\t\t\t\t<div class=\"search-bar\">
\t\t\t\t\t  \t<input type=\"text\" placeholder=\"Search\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"right:50px; \" class=\"search\">
\t\t\t\t\t\t<div class=\"search-open\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></div>
\t\t\t\t\t\t<div class=\"search-exit\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></div>\t 
\t\t\t\t\t</div>
\t\t\t\t\t<!--END SEARCH BAR -->
\t\t
\t\t\t\t    <!--START MENU TOGGLE ICON-->
\t\t\t\t    <div class=\"menu-toggle\">
\t\t\t\t\t    <div class=\"one\"></div>
\t\t\t\t\t    <div class=\"two\"></div>
\t\t\t\t\t    <div class=\"three\"></div>
\t\t\t\t  \t</div>
\t\t\t\t    <nav>
\t\t\t\t\t\t<ul class=\"hidden\">
                            <li><a href=\"{{ path('home')}}\">Home</a></li>
                            <li><a href=\"{{ path('categories')}}\">Categories</a></li>
                            <li><a href=\"{{ path('books')}}\">Our Books</a></li>
                           
                            <li><a href=\"{{ path('customer_account')}}\">Sign In</a></li>
                            <li><a href=\"{{ path('store_pages')}}\">Store's All Pages</a></li>
                        </ul>
\t\t\t\t\t</nav>
\t\t\t\t\t<!--END MENU TOGGLE ICON-->
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!--END MENU SECTION-->
        {% block body %}{% endblock %}

           <!--START FOOTER SECTION -->
        <div class=\"footer wrapper\">
        \t<div class=\"container\">
        \t\t<div class=\"footer-parts\">
        \t\t\t<div class=\"section-head\">
\t\t\t\t\t\t<h2 class=\"second-color\">Site Map</h2>
\t\t\t\t\t\t<span class=\"second-line\"></span>
\t\t\t\t\t</div>
\t\t        \t<div class=\"row site-map\">
\t\t\t        \t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t        \t\t<a href=\"{{ path('home')}}\">Home</a>
\t\t\t        \t</div>
\t\t\t        \t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t        \t\t<a href=\"{{ path('about')}}\">About</a>
\t\t\t        \t</div>
\t\t\t        \t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t        \t\t<a href=\"#\">Careers</a>
\t\t\t        \t</div>
\t\t\t        \t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t       \t\t\t<a href=\"{{ path('categories')}}\">Categories</a>
\t\t\t        \t</div>
\t\t\t        \t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t        \t\t<a href=\"#\">Authors</a>
\t\t\t        \t</div>
\t\t\t        \t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t        \t\t<a href=\"\"blog-grid-page.html\"\">Community & Newsletters</a>
\t\t\t        \t</div>
\t\t\t        \t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t        \t\t<a href=\"\"ordering.html\"\">Ordering</a>
\t\t\t        \t</div>
\t\t\t        \t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t        \t\t<a href=\"{{ path('contact')}}\">Contact Us</a>
\t\t\t        \t</div>
\t\t\t        \t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t        \t\t<a href=\"#\">FAQ</a>
\t\t\t        \t</div>
\t\t        \t</div>
\t\t\t        <div class=\"social-media\">
\t\t\t        \t<a class=\"facebook\" href=\"#\"><i class=\"fa fa-facebook  fa-2x\" aria-hidden=\"true\"></i></a>
\t\t\t        \t<a class=\"twitter\" href=\"#\"><i class=\"fa fa-twitter fa-2x\" aria-hidden=\"true\"></i></a>
\t\t\t        \t<a class=\"youtube\" href=\"#\"><i class=\"fa fa-youtube fa-2x\" aria-hidden=\"true\"></i></a>
\t\t\t        \t<a class=\"googleplus\" href=\"#\"><i class=\"fa fa-google-plus fa-2x\" aria-hidden=\"true\"></i></a>
\t\t\t        \t<a class=\"linkedin\" href=\"#\"><i class=\"fa fa-linkedin fa-2x\" aria-hidden=\"true\"></i></a>
\t\t\t        \t<a class=\"instagram\" href=\"#\"><i class=\"fa fa-instagram fa-2x\" aria-hidden=\"true\"></i></a>
\t\t\t        \t<a class=\"pinterest\" href=\"#\"><i class=\"fa fa-pinterest-p fa-2x\" aria-hidden=\"true\"></i></a> \t
\t\t\t\t\t</div>
        \t\t</div>
        \t</div>
        </div>
        <!--END FOOTER SECTION -->
        <!--START FINAL SECTION -->
        <div class=\"final\">
        \t<div class=\"container\">
        \t\t<div class=\"row\">
        \t\t\t<div class=\"col-xs-12 col-sm-6\">
\t\t\t        \t<div class=\"copyright final-left\">
\t\t\t        \t\tCopyright &copy; 2018 <span>Reading</span>.Inc
\t\t\t        \t</div>
\t\t        \t</div>
\t\t        \t<div class=\"col-xs-12 col-sm-6\">
\t\t\t\t        <div class=\"copyright final-right\">
\t\t\t\t        \tDesigned by: <span><a href=\"#\">Ahmed Hamdy.</a></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!--END FINAL SECTION -->

<!-- Start Scroll To Top -->
        <div id=\"scroll-top\">
            <i class=\"fa fa-chevron-up fa-2x\"></i>
        </div>
        <!-- End Scroll To Top -->
        {% block javascripts %}
         
        {% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Users\\asus\\Desktop\\PFE\\Gestion De Bibliotheaque\\templates\\base.html.twig");
    }
}
