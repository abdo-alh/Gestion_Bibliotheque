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

/* inscription/index.html.twig */
class __TwigTemplate_d7b7558f0504d95e83a7c20e1c5fca454ac1551cd5b58e73b48074f07fff499c extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "inscription/index.html.twig", 3);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription/index.html.twig"));

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

        echo "Register";
        
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
        <div style=\"background: url('img/template/register.jpg');background-size: cover;\"  class=\"login-page-background pages-background\">
            <h1>Join Us</h1>
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
                    <h2 class=\"main-color\">Register</h2>
                    <span class=\"first-line\"></span>
                </div>
                
                <!--START CUSTOMER-REGISTER -->
              <div class=\"customer-register\">
                    <div class=\"subheading another-content\">
                        <h3 class=\"post-capitalize\">Don't have an account yet? register now!</h3>
                        <input value=\"None\" id=\"diffcont\" name=\"check\" type=\"checkbox\" checked>
                        <label for=\"diffcont\" class=\"new-checkbox\"><span class=\"true\"></span></label>
                        <span></span>
                    </div>
                    <h4 class=\"have-account\">Join us and enjoy reading and buying books online.
                    </h4>
                    <div class=\"user-details another-form\">
                       ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), 'form_start');
        echo "


            


                            <div class=\"row\">
                                <div class=\"col-xs-12 col-sm-6 \">
                                    <div class=\"form-group\">
                                         <div class=\"error\"> ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "username", []), 'errors');
        echo " </div>
                                       ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "username", []), 'row', ["attr" => ["placeholder" => "Username", "class" => "form-control input-block"]]);
        echo "

                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-sm-6 \">
                                    <div class=\"form-group\">
                                        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "email", []), 'label');
        echo "
                                     <div class=\"error\">";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "email", []), 'errors');
        echo " </div>
                                     ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "email", []), 'widget', ["attr" => ["placeholder" => "Email", "class" => "form-control input-block"]]);
        echo "
                                        ";
        // line 77
        echo "                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-sm-6 \">
                                    <div class=\"form-group\">
                                         
                                         ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "password", []), 'row', ["attr" => ["placeholder" => "Password", "class" => "form-control input-block"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-sm-6 \">
                                    <div class=\"form-group\">
                                        ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "confirm_password", []), 'label');
        echo "
                                        <div class=\"error\"> ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "confirm_password", []), 'errors');
        echo " </div>
                                       ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "confirm_password", []), 'widget', ["attr" => ["placeholder" => "confirm_password", "class" => "form-control input-block"]]);
        echo "
                                    </div>
                                </div>
                                <div style=\"color: #3f444a\" class=\"col-xs-12 col-sm-6 \">
                                  ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "phone", []), 'label');
        echo "
                                        <div class=\"error\"> ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "phone", []), 'errors');
        echo " </div>
                                       ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "phone", []), 'widget', ["attr" => ["placeholder" => "Phone", "class" => "form-control input-block"]]);
        echo "
                                </div>
                                <div class=\"col-xs-12 col-sm-6 \">
                                    <div class=\"form-group\">
                                      ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "image", []), 'label');
        echo "
                                        <div class=\"error\"> ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "image", []), 'errors');
        echo " </div>
                                       ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "image", []), 'widget', ["attr" => ["placeholder" => "Image", "class" => "form-control input-block"]]);
        echo "
                                </div>
                                 <div class=\"col-xs-12 col-sm-6 \">
                                    <div class=\"form-group\"></div></div>
                          <div class=\"col-xs-12 col-sm-6 \">
                                    <div class=\"form-group\">
                                <button type=\"submit\" class=\"submit-btn\"class=\"submit-btn\">Submit</button>
                                  </div>
                                </div>
                            </div>
                      ";
        // line 111
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), 'form_end');
        echo "
                    </div>
                </div>
                <!--END CUSTOMER-REGISTER -->
            </div>    
        </div></div><br>
        <!--END LOGIN-PAGE-CONTENT SECTION -->


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 121
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 122
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "inscription/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 122,  304 => 121,  284 => 111,  271 => 101,  267 => 100,  263 => 99,  256 => 95,  252 => 94,  248 => 93,  241 => 89,  237 => 88,  233 => 87,  225 => 82,  218 => 77,  214 => 75,  210 => 74,  206 => 73,  197 => 67,  193 => 66,  181 => 57,  153 => 32,  149 => 31,  145 => 30,  141 => 29,  137 => 28,  133 => 27,  129 => 26,  125 => 25,  121 => 24,  117 => 23,  113 => 22,  109 => 21,  105 => 20,  101 => 19,  97 => 18,  85 => 8,  76 => 7,  58 => 5,  27 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("

        {% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

{% block body %}
   <!--START LOGIN-PAGE-BACKGROUND SECTION-->
        <div style=\"background: url('img/template/register.jpg');background-size: cover;\"  class=\"login-page-background pages-background\">
            <h1>Join Us</h1>
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
                    <h2 class=\"main-color\">Register</h2>
                    <span class=\"first-line\"></span>
                </div>
                
                <!--START CUSTOMER-REGISTER -->
              <div class=\"customer-register\">
                    <div class=\"subheading another-content\">
                        <h3 class=\"post-capitalize\">Don't have an account yet? register now!</h3>
                        <input value=\"None\" id=\"diffcont\" name=\"check\" type=\"checkbox\" checked>
                        <label for=\"diffcont\" class=\"new-checkbox\"><span class=\"true\"></span></label>
                        <span></span>
                    </div>
                    <h4 class=\"have-account\">Join us and enjoy reading and buying books online.
                    </h4>
                    <div class=\"user-details another-form\">
                       {{form_start(form)}}


            


                            <div class=\"row\">
                                <div class=\"col-xs-12 col-sm-6 \">
                                    <div class=\"form-group\">
                                         <div class=\"error\"> {{ form_errors(form.username) }} </div>
                                       {{form_row(form.username,{'attr':{'placeholder':'Username','class': 'form-control input-block'}})}}

                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-sm-6 \">
                                    <div class=\"form-group\">
                                        {{ form_label(form.email) }}
                                     <div class=\"error\">{{ form_errors(form.email) }} </div>
                                     {{ form_widget(form.email,{'attr':{'placeholder':'Email','class': 'form-control input-block'}}) }}
                                        {#{{form_row(form.email,{'attr':{'placeholder':'Email','class': 'form-control input-block'}})}}#}
                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-sm-6 \">
                                    <div class=\"form-group\">
                                         
                                         {{form_row(form.password,{'attr':{'placeholder':'Password','class': 'form-control input-block'}})}}
                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-sm-6 \">
                                    <div class=\"form-group\">
                                        {{ form_label(form.confirm_password) }}
                                        <div class=\"error\"> {{ form_errors(form.confirm_password) }} </div>
                                       {{ form_widget(form.confirm_password,{'attr':{'placeholder':'confirm_password','class': 'form-control input-block'}}) }}
                                    </div>
                                </div>
                                <div style=\"color: #3f444a\" class=\"col-xs-12 col-sm-6 \">
                                  {{ form_label(form.phone) }}
                                        <div class=\"error\"> {{ form_errors(form.phone) }} </div>
                                       {{ form_widget(form.phone,{'attr':{'placeholder':'Phone','class': 'form-control input-block'}}) }}
                                </div>
                                <div class=\"col-xs-12 col-sm-6 \">
                                    <div class=\"form-group\">
                                      {{ form_label(form.image) }}
                                        <div class=\"error\"> {{ form_errors(form.image) }} </div>
                                       {{ form_widget(form.image,{'attr':{'placeholder':'Image','class': 'form-control input-block'}}) }}
                                </div>
                                 <div class=\"col-xs-12 col-sm-6 \">
                                    <div class=\"form-group\"></div></div>
                          <div class=\"col-xs-12 col-sm-6 \">
                                    <div class=\"form-group\">
                                <button type=\"submit\" class=\"submit-btn\"class=\"submit-btn\">Submit</button>
                                  </div>
                                </div>
                            </div>
                      {{form_end(form)}}
                    </div>
                </div>
                <!--END CUSTOMER-REGISTER -->
            </div>    
        </div></div><br>
        <!--END LOGIN-PAGE-CONTENT SECTION -->


{% endblock %}
{% block javascripts %}

{% endblock %}", "inscription/index.html.twig", "C:\\xampp\\htdocs\\Gestion_De_Bibliotheque\\templates\\inscription\\index.html.twig");
    }
}
