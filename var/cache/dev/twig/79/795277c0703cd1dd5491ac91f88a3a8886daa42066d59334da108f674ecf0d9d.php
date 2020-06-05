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

/* my-dashboard.html.twig */
class __TwigTemplate_fbb7052fc5d66bf57be00d142bb800bd539802a1d6b794f104444995cde1cbfb extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 6
        $this->parent = $this->loadTemplate("base.html.twig", "my-dashboard.html.twig", 6);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "my-dashboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "my-dashboard.html.twig"));

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

        echo "My dashboad";
        
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
        echo "      <!--START CUSTOMER-DASHBOARD-PAGE-BACKGROUND SECTION -->
        <div  style=\"background: url(../img/template/dashboard.jpg)\" class=\"customer-dashboard-page-background pages-background\">
            <h1>Dashboard</h1>
        </div>
        <!--END CUSTOMER-DASHBOARD-PAGE-BACKGROUND SECTION -->
        <!-- Start Tool Box Section -->
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
        <!-- End Tool Box Section -->
        <!--START CUSTOMER-DASHBOARD-PAGE-CONTENT SECTION -->
        <div class=\"customer-dashboard-page-content wrapper\">
            <div class=\"container\">
                <div class=\"customer-dashboard-page-content-head\">
                    <h2 class=\"main-color\">My Dashboard</h2>
                    <span class=\"first-line\"></span>
                </div>
                <!--START MY-PROFILE PANEL -->
                <div class=\"panel-group my-profile\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title post-capitalize\">
                                <a class=\"\" data-toggle=\"collapse\" href=\"#collapse1\"
                                aria-expanded=\"true\">my profile</a>
                            </h3>
                        </div>
                        <div id=\"collapse1\" class=\"panel-collapse collapse in my-profile-items\">
                            <ul class=\"list-group\">
                                <li class=\"list-group-item\">
                                    <a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("my_dashboard");
        echo "\" class=\"post-capitalize active\">my dashbord</a>
                                </li>
                                <li class=\"list-group-item\">
                                    <a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_my_profile");
        echo "\" class=\"post-capitalize\">edit profile</a>
                                </li>
                
                            </ul>
                        </div>
                    </div>
                </div>
                <!--END MY-PROFILE PANEL -->
                <!--START CUSTOMER-DASHBOARD -->
                <div class=\"customer-dashboard\">
                    ";
        // line 73
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "user", [])) {
            // line 74
            echo "
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-4 col-md-3\">
                            <div class=\"customer-pic\">
                                <a href=\"#\">
                                    <img src=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/users/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "user", []), "image", []))), "html", null, true);
            echo "\" alt=\"Hannah Paul\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-xs-12 col-sm-8 col-md-9\">
                            <div class=\"profile-body\">
                                                                <h4 class=\"customer-name\">
                                    <a href=\"#\">";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "user", []), "username", []), "html", null, true);
            echo "</a>
                                </h4>
                                <div class=\"customer-details\">
                                    <p>Email: <a href=\"#\">";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "user", []), "email", []), "html", null, true);
            echo "</a></p>
                                    <p>Phone: ";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "user", []), "phone", []), "html", null, true);
            echo "</p>
                                    
                                </div>
                                <div class=\"profile-options\">
                                    <a href=\"";
            // line 94
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_my_profile");
            echo "\" class=\"edit-button post-capitalize\">Edit</a> <span>-</span> <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\" class=\"sign-out-button post-capitalize\">Sign Out</a>
                                </div>
                               
                            </div>
                        </div>
                    </div> ";
        }
        // line 100
        echo "                </div>
            </div></div>
                <!--END CUSTOMER-DASHBOARD -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 105
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 106
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "my-dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 106,  216 => 105,  202 => 100,  191 => 94,  184 => 90,  180 => 89,  174 => 86,  164 => 79,  157 => 74,  155 => 73,  142 => 63,  136 => 60,  85 => 11,  76 => 10,  58 => 8,  27 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("




        {% extends 'base.html.twig' %}

{% block title %}My dashboad{% endblock %}

{% block body %}
      <!--START CUSTOMER-DASHBOARD-PAGE-BACKGROUND SECTION -->
        <div  style=\"background: url(../img/template/dashboard.jpg)\" class=\"customer-dashboard-page-background pages-background\">
            <h1>Dashboard</h1>
        </div>
        <!--END CUSTOMER-DASHBOARD-PAGE-BACKGROUND SECTION -->
        <!-- Start Tool Box Section -->
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
        <!-- End Tool Box Section -->
        <!--START CUSTOMER-DASHBOARD-PAGE-CONTENT SECTION -->
        <div class=\"customer-dashboard-page-content wrapper\">
            <div class=\"container\">
                <div class=\"customer-dashboard-page-content-head\">
                    <h2 class=\"main-color\">My Dashboard</h2>
                    <span class=\"first-line\"></span>
                </div>
                <!--START MY-PROFILE PANEL -->
                <div class=\"panel-group my-profile\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title post-capitalize\">
                                <a class=\"\" data-toggle=\"collapse\" href=\"#collapse1\"
                                aria-expanded=\"true\">my profile</a>
                            </h3>
                        </div>
                        <div id=\"collapse1\" class=\"panel-collapse collapse in my-profile-items\">
                            <ul class=\"list-group\">
                                <li class=\"list-group-item\">
                                    <a href=\"{{path('my_dashboard')}}\" class=\"post-capitalize active\">my dashbord</a>
                                </li>
                                <li class=\"list-group-item\">
                                    <a href=\"{{path('edit_my_profile')}}\" class=\"post-capitalize\">edit profile</a>
                                </li>
                
                            </ul>
                        </div>
                    </div>
                </div>
                <!--END MY-PROFILE PANEL -->
                <!--START CUSTOMER-DASHBOARD -->
                <div class=\"customer-dashboard\">
                    {%if app.user %}

                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-4 col-md-3\">
                            <div class=\"customer-pic\">
                                <a href=\"#\">
                                    <img src=\"{{ asset('img/users/' ~ app.user.image)  }}\" alt=\"Hannah Paul\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-xs-12 col-sm-8 col-md-9\">
                            <div class=\"profile-body\">
                                                                <h4 class=\"customer-name\">
                                    <a href=\"#\">{{app.user.username}}</a>
                                </h4>
                                <div class=\"customer-details\">
                                    <p>Email: <a href=\"#\">{{app.user.email}}</a></p>
                                    <p>Phone: {{app.user.phone}}</p>
                                    
                                </div>
                                <div class=\"profile-options\">
                                    <a href=\"{{path('edit_my_profile')}}\" class=\"edit-button post-capitalize\">Edit</a> <span>-</span> <a href=\"{{path('logout')}}\" class=\"sign-out-button post-capitalize\">Sign Out</a>
                                </div>
                               
                            </div>
                        </div>
                    </div> {%endif%}
                </div>
            </div></div>
                <!--END CUSTOMER-DASHBOARD -->

{% endblock %}
{% block javascripts %}

{% endblock %}", "my-dashboard.html.twig", "C:\\xampp\\htdocs\\Gestion_De_Bibliotheque\\templates\\my-dashboard.html.twig");
    }
}
