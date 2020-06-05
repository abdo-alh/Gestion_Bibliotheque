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

/* customer-account.html.twig */
class __TwigTemplate_3207dd00e6a3ac2ba1d5d8457a2ed51d407e3519b75ef0a82cd4e27999992c33 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "customer-account.html.twig", 3);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "customer-account.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "customer-account.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Login";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "   <!--START LOGIN-PAGE-BACKGROUND SECTION-->
        <div style=\"background: url('img/template/login.jpg');background-size: cover;\" class=\"login-page-background pages-background\">
            <h1>Sign in</h1>
        </div>
        <!--END LOGIN-PAGE-BACKGROUND SECTION-->
        <!-- Start Tool Box SECTION -->
        <div class=\"option-box\">
            <div class=\"color-option\">
                <h2>Color Selector</h2>
                <ul class=\"list-unstyled\">
                                 <li data-value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/default_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/emerald_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/turquoise_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/sunflower_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/orange_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/carrot_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/alizarin_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/concrete_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/amethyst_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/wetasphalt_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/sienna_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/hotpink_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/darkgoldenrod_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/lightskyblue_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/black_theme.css"), "html", null, true);
        echo "\"></li>
                </ul>
            </div>
            <i class=\"fa fa-gear fa-2x gear-check\"></i>
        </div>
        <!-- End Tool Box SECTION -->
        <!-- START LOGIN-PAGE-CONTENT SECTION -->
        <div class=\"login-page-content wrapper\">
            <div class=\"container\">
                <div class=\"login-page-content-head\">
                    <h2 class=\"main-color\">Login</h2>
                    <span class=\"first-line\"></span>
                </div>
                <!--START SIGN-IN -->
                <form action=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        echo "\" method=\"post\">


                <div class=\"customer-signin\">
                    <div class=\"subheading\">
                        <h3 class=\"post-capitalize\">sign in</h3>
                        <span></span>
                    </div>
                        
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <h4 class=\"have-account\">Sign in if you already have an account.</h4>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"user-details\">
                            
                                <div class=\"form-group\">
                                    <h5>Email :</h5>
                                    <input type=\"text\" class=\"form-control input-block\" name=\"_username\" placeholder=\"Email\">
                                </div>
                                <div class=\"form-group\">
                                    <h5>Password :</h5>
                                    <input type=\"password\" name=\"_password\" class=\"form-control input-block\" placeholder=\"Password\">
                                </div>
                                <div class=\"remember-me\">
                                    <input type=\"checkbox\" value=\"None\" id=\"remember-order\"/>
                                    <label for=\"remember-order\" class=\"remember-checkbox\"><span class=\"true\"></span><span class=\"remember-text\">Remember me</span></label>
                                </div>
                                <div class=\"signin-button\">
                                    
                                    <button type=\"submit\" class=\"btn btn-primary\"> Sign In</button>
                                </div>   
                        
                            </div> 
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"socialmedia-signin\">
                                <a href=\"#\" class=\"btn btn-lg s-twitter-btn\"><i class=\"fab fa-twitter\" aria-hidden=\"true\"></i>Sign in with twitter</a>
                                <a href=\"#\" class=\"btn btn-lg s-facebook-btn\"><i class=\"fab fa-facebook-f\" aria-hidden=\"true\"></i>Sign in with facebook</a>
                                <a href=\"#\" class=\"btn btn-lg s-google-btn\"><i class=\"fab fa-google-plus\" aria-hidden=\"true\"></i>Sign in with google</a>  
                            </div>
                        </div>
                    </div>
                </div>
            </form>
                <!--END SIGN-IN -->
          
              <div class=\"customer-register\">
                    <div class=\"subheading another-content\">
                        <h3 class=\"post-capitalize\">Don't have an account yet? register now!</h3><a href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
        echo "\"> Click Here</a>
                        
                    </div>
                </div>
           
            </div>    
        </div>
        <!--END LOGIN-PAGE-CONTENT SECTION -->


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 106
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 107
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "customer-account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 107,  243 => 106,  222 => 95,  170 => 46,  153 => 32,  149 => 31,  145 => 30,  141 => 29,  137 => 28,  133 => 27,  129 => 26,  125 => 25,  121 => 24,  117 => 23,  113 => 22,  109 => 21,  105 => 20,  101 => 19,  97 => 18,  85 => 8,  76 => 7,  58 => 5,  27 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("

        {% extends 'base.html.twig' %}

{% block title %}Login{% endblock %}

{% block body %}
   <!--START LOGIN-PAGE-BACKGROUND SECTION-->
        <div style=\"background: url('img/template/login.jpg');background-size: cover;\" class=\"login-page-background pages-background\">
            <h1>Sign in</h1>
        </div>
        <!--END LOGIN-PAGE-BACKGROUND SECTION-->
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
        <!-- START LOGIN-PAGE-CONTENT SECTION -->
        <div class=\"login-page-content wrapper\">
            <div class=\"container\">
                <div class=\"login-page-content-head\">
                    <h2 class=\"main-color\">Login</h2>
                    <span class=\"first-line\"></span>
                </div>
                <!--START SIGN-IN -->
                <form action=\"{{path('security_login')}}\" method=\"post\">


                <div class=\"customer-signin\">
                    <div class=\"subheading\">
                        <h3 class=\"post-capitalize\">sign in</h3>
                        <span></span>
                    </div>
                        
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            <h4 class=\"have-account\">Sign in if you already have an account.</h4>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"user-details\">
                            
                                <div class=\"form-group\">
                                    <h5>Email :</h5>
                                    <input type=\"text\" class=\"form-control input-block\" name=\"_username\" placeholder=\"Email\">
                                </div>
                                <div class=\"form-group\">
                                    <h5>Password :</h5>
                                    <input type=\"password\" name=\"_password\" class=\"form-control input-block\" placeholder=\"Password\">
                                </div>
                                <div class=\"remember-me\">
                                    <input type=\"checkbox\" value=\"None\" id=\"remember-order\"/>
                                    <label for=\"remember-order\" class=\"remember-checkbox\"><span class=\"true\"></span><span class=\"remember-text\">Remember me</span></label>
                                </div>
                                <div class=\"signin-button\">
                                    
                                    <button type=\"submit\" class=\"btn btn-primary\"> Sign In</button>
                                </div>   
                        
                            </div> 
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"socialmedia-signin\">
                                <a href=\"#\" class=\"btn btn-lg s-twitter-btn\"><i class=\"fab fa-twitter\" aria-hidden=\"true\"></i>Sign in with twitter</a>
                                <a href=\"#\" class=\"btn btn-lg s-facebook-btn\"><i class=\"fab fa-facebook-f\" aria-hidden=\"true\"></i>Sign in with facebook</a>
                                <a href=\"#\" class=\"btn btn-lg s-google-btn\"><i class=\"fab fa-google-plus\" aria-hidden=\"true\"></i>Sign in with google</a>  
                            </div>
                        </div>
                    </div>
                </div>
            </form>
                <!--END SIGN-IN -->
          
              <div class=\"customer-register\">
                    <div class=\"subheading another-content\">
                        <h3 class=\"post-capitalize\">Don't have an account yet? register now!</h3><a href=\"{{path('inscription')}}\"> Click Here</a>
                        
                    </div>
                </div>
           
            </div>    
        </div>
        <!--END LOGIN-PAGE-CONTENT SECTION -->


{% endblock %}
{% block javascripts %}

{% endblock %}", "customer-account.html.twig", "C:\\xampp\\htdocs\\Gestion_De_Bibliotheque\\templates\\customer-account.html.twig");
    }
}
