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
class __TwigTemplate_21f0fee174a911995628393328c742da16cadb2def8fddacb6a1b9b225ccf4e4 extends \Twig\Template
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
        // line 37
        echo "    </head>
    <body>
    \t\t\t<!--START MENU SECTION-->
\t\t<div class=\"menu\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"menu-section\">
\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t    <a class=\"navbar-brand\" href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Reading</a>
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
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Home</a></li>
                            <li><a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories");
        echo "\">Categories</a></li>
                            <li><a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("books");
        echo "\">Our Books</a></li>
                           <li><a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("authors");
        echo "\">Authors</a></li>
                             <!-- <li><a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("store_pages");
        echo "\">Store's All Pages</a></li>-->
                             ";
        // line 69
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 70
            echo "                              <li><a href=\"/admin\">Gestion des Books</a></li>
                              ";
        } else {
            // line 72
            echo "                              ";
        }
        // line 73
        echo "                               ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 74
            echo "                              <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("my_dashboard");
            echo "\">My Dashboard</a></li>
                              ";
        } else {
            // line 76
            echo "                              ";
        }
        // line 77
        echo "                           ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [])) {
            // line 78
            echo "                            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\">Sign In</a></li>
                            ";
        } else {
            // line 80
            echo "                             <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">Logout</a></li>

                             ";
        }
        // line 83
        echo "                         
                        </ul>
\t\t\t\t\t</nav>
\t\t\t\t\t<!--END MENU TOGGLE ICON-->
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!--END MENU SECTION-->
        ";
        // line 91
        $this->displayBlock('body', $context, $blocks);
        // line 92
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
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Home</a>
\t\t\t        \t</div>
\t\t\t        \t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t        \t\t<a href=\"";
        // line 106
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\">About</a>
\t\t\t        \t</div>
\t\t\t        \t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t        \t\t<a href=\"";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        echo "\">Login</a>
\t\t\t        \t</div>
\t\t\t        \t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t       \t\t\t<a href=\"";
        // line 112
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories");
        echo "\">Categories</a>
\t\t\t        \t</div>
\t\t\t        \t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t        \t\t<a href=\"";
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("authors");
        echo "\">Authors</a>
\t\t\t        \t</div>
\t\t\t        \t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t        \t\t<a href=\"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
        echo "\">Register</a>
\t\t\t        \t</div>
\t\t\t        \t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t        \t\t<a href=\"";
        // line 121
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("books");
        echo "\">Books</a>
\t\t\t        \t</div>
\t\t\t        \t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t        \t\t<a href=\"";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contactus");
        echo "\">Contact Us</a>
\t\t\t        \t</div>
\t\t\t        \t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t        \t\t<a href=\"";
        // line 127
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("store_pages");
        echo "\">Store Pages</a>
\t\t\t        \t</div>
\t\t        \t</div>
\t\t\t        <div class=\"social-media\">
\t\t\t        \t<a class=\"facebook\" href=\"#\"><i class=\"fab fa-facebook-f  fa-2x\" aria-hidden=\"true\"></i></a>
\t\t\t        \t<a class=\"twitter\" href=\"#\"><i class=\"fab fa-twitter fa-2x\" aria-hidden=\"true\"></i></a>
\t\t\t        \t<a class=\"youtube\" href=\"#\"><i class=\"fab fa-youtube fa-2x\" aria-hidden=\"true\"></i></a>
\t\t\t        \t<a class=\"googleplus\" href=\"#\"><i class=\"fab fa-google-plus-g fa-2x\" aria-hidden=\"true\"></i></a>
\t\t\t        \t<a class=\"linkedin\" href=\"#\"><i class=\"fab fa-linkedin fa-2x\" aria-hidden=\"true\"></i></a>
\t\t\t        \t<a class=\"instagram\" href=\"#\"><i class=\"fab fa-instagram fa-2x\" aria-hidden=\"true\"></i></a>
\t\t\t        \t<a class=\"pinterest\" href=\"#\"><i class=\"fab fa-pinterest-p fa-2x\" aria-hidden=\"true\"></i></a> \t
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
\t\t\t\t        \tDesigned by: <span><a href=\"#\">DAWM_Theam</a></span>
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
        // line 167
        $this->displayBlock('javascripts', $context, $blocks);
        // line 170
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
\t\t<link rel='stylesheet' href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fontawesome/css/all.css"), "html", null, true);
        echo "\"/>
\t\t
       <!--  <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.1/css/all.css\" integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\" crossorigin=\"anonymous\">-->
 <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.nicescroll.min.js"), "html", null, true);
        echo "\"></script>
 \t<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
       <style type=\"text/css\"> 
\t    .form-group
    {
        color:#3f444a;
    }
    .error
    {
    \tcolor:red;
    }
    

    </style>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 91
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 167
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 168
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
        return array (  397 => 168,  388 => 167,  371 => 91,  347 => 23,  343 => 22,  339 => 21,  335 => 20,  329 => 17,  325 => 16,  317 => 11,  313 => 10,  309 => 9,  296 => 8,  278 => 7,  266 => 170,  264 => 167,  221 => 127,  215 => 124,  209 => 121,  203 => 118,  197 => 115,  191 => 112,  185 => 109,  179 => 106,  173 => 103,  160 => 92,  158 => 91,  148 => 83,  141 => 80,  135 => 78,  132 => 77,  129 => 76,  123 => 74,  120 => 73,  117 => 72,  113 => 70,  111 => 69,  107 => 68,  103 => 67,  99 => 66,  95 => 65,  91 => 64,  68 => 44,  59 => 37,  57 => 8,  53 => 7,  45 => 1,);
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
\t\t<link rel='stylesheet' href=\"{{ asset('assets/fontawesome/css/all.css')}}\"/>
\t\t
       <!--  <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.1/css/all.css\" integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\" crossorigin=\"anonymous\">-->
 <script src=\"{{ asset('assets/js/jquery-3.2.1.min.js')}}\"></script>
    <script src=\"{{ asset('assets/js/jquery.nicescroll.min.js')}}\"></script>
 \t<script src=\"{{ asset('assets/js/plugins.js')}}\"></script>
\t<script src=\"{{ asset('assets/js/bootstrap.min.js')}}\"></script>
       <style type=\"text/css\"> 
\t    .form-group
    {
        color:#3f444a;
    }
    .error
    {
    \tcolor:red;
    }
    

    </style>
        {% endblock %}
    </head>
    <body>
    \t\t\t<!--START MENU SECTION-->
\t\t<div class=\"menu\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"menu-section\">
\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t    <a class=\"navbar-brand\" href=\"{{ path('home')}}\">Reading</a>
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
                           <li><a href=\"{{ path('authors')}}\">Authors</a></li>
                             <!-- <li><a href=\"{{ path('store_pages')}}\">Store's All Pages</a></li>-->
                             {% if is_granted('ROLE_ADMIN') %}
                              <li><a href=\"/admin\">Gestion des Books</a></li>
                              {%else%}
                              {%endif%}
                               {% if is_granted('ROLE_USER') %}
                              <li><a href=\"{{path('my_dashboard')}}\">My Dashboard</a></li>
                              {%else%}
                              {%endif%}
                           {%if not app.user %}
                            <li><a href=\"{{ path('security_login')}}\">Sign In</a></li>
                            {%else%}
                             <li><a href=\"{{ path('logout')}}\">Logout</a></li>

                             {%endif%}
                         
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
\t\t\t        \t\t<a href=\"{{path('security_login')}}\">Login</a>
\t\t\t        \t</div>
\t\t\t        \t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t       \t\t\t<a href=\"{{ path('categories')}}\">Categories</a>
\t\t\t        \t</div>
\t\t\t        \t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t        \t\t<a href=\"{{path('authors')}}\">Authors</a>
\t\t\t        \t</div>
\t\t\t        \t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t        \t\t<a href=\"{{path('inscription')}}\">Register</a>
\t\t\t        \t</div>
\t\t\t        \t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t        \t\t<a href=\"{{path('books')}}\">Books</a>
\t\t\t        \t</div>
\t\t\t        \t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t        \t\t<a href=\"{{ path('contactus')}}\">Contact Us</a>
\t\t\t        \t</div>
\t\t\t        \t<div class=\"col-xs-12 col-sm-6 col-md-4\">
\t\t\t        \t\t<a href=\"{{path('store_pages')}}\">Store Pages</a>
\t\t\t        \t</div>
\t\t        \t</div>
\t\t\t        <div class=\"social-media\">
\t\t\t        \t<a class=\"facebook\" href=\"#\"><i class=\"fab fa-facebook-f  fa-2x\" aria-hidden=\"true\"></i></a>
\t\t\t        \t<a class=\"twitter\" href=\"#\"><i class=\"fab fa-twitter fa-2x\" aria-hidden=\"true\"></i></a>
\t\t\t        \t<a class=\"youtube\" href=\"#\"><i class=\"fab fa-youtube fa-2x\" aria-hidden=\"true\"></i></a>
\t\t\t        \t<a class=\"googleplus\" href=\"#\"><i class=\"fab fa-google-plus-g fa-2x\" aria-hidden=\"true\"></i></a>
\t\t\t        \t<a class=\"linkedin\" href=\"#\"><i class=\"fab fa-linkedin fa-2x\" aria-hidden=\"true\"></i></a>
\t\t\t        \t<a class=\"instagram\" href=\"#\"><i class=\"fab fa-instagram fa-2x\" aria-hidden=\"true\"></i></a>
\t\t\t        \t<a class=\"pinterest\" href=\"#\"><i class=\"fab fa-pinterest-p fa-2x\" aria-hidden=\"true\"></i></a> \t
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
\t\t\t\t        \tDesigned by: <span><a href=\"#\">DAWM_Theam</a></span>
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
", "base.html.twig", "C:\\xampp\\htdocs\\Gestion_De_Bibliotheque\\templates\\base.html.twig");
    }
}
