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

/* edit_my_profile.html.twig */
class __TwigTemplate_1e57fc9e050e1ac8458e5f96265e19ec08451d6efc21071cc8e87c1163b08c30 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 6
        $this->parent = $this->loadTemplate("base.html.twig", "edit_my_profile.html.twig", 6);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "edit_my_profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "edit_my_profile.html.twig"));

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

        echo "Edit my profile";
        
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
        echo "   <!--START CUSTOMER-EDIT-PROFILE-PAGE-BACKGROUND SECTION -->
        <div style=\"background:url('../../img/template/profile.jpg');background-size: cover;\" class=\"customer-edit-profile-page-background pages-background\">
            <h1>Edit Profile</h1>
        </div>
        <!--END CUSTOMER-EDIT-PROFILE-PAGE-BACKGROUND SECTION -->
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
        <!--START CUSTOMER-EDIT-PROFILE-PAGE-CONTENT SECTION -->
        <div class=\"customer-edit-profile-page-content wrapper\">
            <div class=\"container\">
                <div class=\"customer-edit-profile-page-content-head\">
                    <h2 class=\"main-color\">Edit Profile</h2>
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
        echo "\" class=\"post-capitalize\">my dashbord</a>
                                </li>
                                <li class=\"list-group-item\">
                                    <a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_my_profile");
        echo "\" class=\"post-capitalize  active\">edit profile</a>
                                </li>
                             
                            </ul>
                        </div>
                    </div>
                </div>
                <!--END MY-PROFILE PANEL -->
                <!--START EDIT-PROFILE -->    
                <div class=\"user-details edit-profile\">
              <!--      <form>
                        <div class=\"row\">
                            <div class=\"col-xs-12\">
                                <h4 class=\"have-account\">Make changes on your profile.</h4>
                            </div>
                            <div class=\"col-xs-12 col-sm-6\">
                                <div class=\"form-group \">
                                    <h5>First Name :</h5>
                                    <input type=\"text\" class=\"form-control input-block\" placeholder=\"First Name\">
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6\">
                                <div class=\"form-group \">
                                    <h5>Last Name :</h5>
                                    <input type=\"text\" class=\"form-control input-block\" placeholder=\"Last Name\">
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6\">
                                <div class=\"form-group \">
                                    <h5>Company Name :</h5>
                                    <input type=\"text\" class=\"form-control input-block\" placeholder=\"Company Name\">
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6\">
                                <div class=\"form-group\">
                                    <h5>Email :</h5>
                                    <input type=\"text\" class=\"form-control input-block\" placeholder=\"Email\">
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6\">
                                <div class=\"form-group\">
                                    <h5>Phone :</h5>
                                    <input type=\"text\" class=\"form-control input-block\" placeholder=\"Phone\">
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6\">
                                <div class=\"form-group\">
                                    <h5>Address :</h5>
                                    <input type=\"text\" class=\"form-control input-block\" placeholder=\"Street Address\">
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6\">
                                <div class=\"form-group\">
                                    <h5>Address Line 2 :</h5>
                                    <input type=\"text\" class=\"form-control input-block\" placeholder=\"Apartment, suite, unit etc. (optional)\">
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6\">
                                <div class=\"form-group\">
                                    <h5>Town / City :</h5>
                                    <input type=\"text\" class=\"form-control input-block\" placeholder=\"Town / City\">
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6\">
                                <div class=\"form-group\">
                                    <h5>Country :</h5>
                                    <select class=\"form-control input-block\">
                                        <option value=\"1\">Egypt</option>
                                        <option value=\"2\">Tunisia</option>
                                        <option value=\"3\">Lebanon</option>
                                        <option value=\"4\">Morocco</option>
                                        <option value=\"5\">United Emirates Arab</option>
                                        <option value=\"6\">Saudi Arabia</option>
                                        <option value=\"7\">Turkey</option>
                                        <option value=\"8\">Malaysia</option>
                                    </select>
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6\">
                                <div class=\"form-group\">
                                    <h5>Postcode / Zip :</h5>
                                    <input type=\"text\" class=\"form-control input-block\" placeholder=\"Postcode / Zip\">
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6\">
                                <div class=\"form-group\">
                                    <h5>Change Password :</h5>
                                    <input type=\"password\" class=\"form-control input-block\" placeholder=\"Password\">
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6\">
                                <div class=\"form-group\">
                                    <h5>Repeat Password :</h5>
                                    <input type=\"text\" class=\"form-control input-block\" placeholder=\"Password\">
                                </div>
                            </div>
                        </div>
                        <div class=\"edit-profile-buttons\">
                            <a href=\"customer-dashboard.html\" class=\"submit-btn\">Submit</a>
                            <a href=\"customer-dashboard.html\" class=\"cancel-btn\">Cancel</a>
                        </div>
                    </form>!-->

                     ";
        // line 166
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), 'form_start');
        echo "


            


                            <div class=\"row\">
                                <div class=\"col-xs-12 col-sm-6 \">
                                    <div class=\"form-group\">
                                         <div class=\"error\"> ";
        // line 175
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 175, $this->source); })()), "username", []), 'errors');
        echo " </div>
                                       ";
        // line 176
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "username", []), 'row', ["attr" => ["placeholder" => "Username", "class" => "form-control input-block"]]);
        echo "

                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-sm-6 \">
                                    <div class=\"form-group\">
                                        ";
        // line 182
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 182, $this->source); })()), "email", []), 'label');
        echo "
                                     <div class=\"error\">";
        // line 183
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 183, $this->source); })()), "email", []), 'errors');
        echo " </div>
                                     ";
        // line 184
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 184, $this->source); })()), "email", []), 'widget', ["attr" => ["placeholder" => "Email", "class" => "form-control input-block"]]);
        echo "
                                        ";
        // line 186
        echo "                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-sm-6 \">
                                    <div class=\"form-group\">
                                         
                                         ";
        // line 191
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), "password", []), 'row', ["attr" => ["placeholder" => "Password", "class" => "form-control input-block"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-sm-6 \">
                                    <div class=\"form-group\">
                                        ";
        // line 196
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), "confirm_password", []), 'label');
        echo "
                                        <div class=\"error\"> ";
        // line 197
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 197, $this->source); })()), "confirm_password", []), 'errors');
        echo " </div>
                                       ";
        // line 198
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), "confirm_password", []), 'widget', ["attr" => ["placeholder" => "confirm_password", "class" => "form-control input-block"]]);
        echo "
                                    </div>
                                </div>
                                <div style=\"color: #3f444a\" class=\"col-xs-12 col-sm-6 \">
                                  ";
        // line 202
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 202, $this->source); })()), "phone", []), 'label');
        echo "
                                        <div class=\"error\"> ";
        // line 203
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 203, $this->source); })()), "phone", []), 'errors');
        echo " </div>
                                       ";
        // line 204
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 204, $this->source); })()), "phone", []), 'widget', ["attr" => ["placeholder" => "Phone", "class" => "form-control input-block"]]);
        echo "
                                </div>
                                <div class=\"col-xs-12 col-sm-6 \">
                                    <div class=\"form-group\">
                                      ";
        // line 208
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 208, $this->source); })()), "image", []), 'label');
        echo "
                                        <div class=\"error\"> ";
        // line 209
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 209, $this->source); })()), "image", []), 'errors');
        echo " </div>
                                       ";
        // line 210
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 210, $this->source); })()), "image", []), 'widget', ["attr" => ["placeholder" => "Image", "class" => "form-control input-block"]]);
        echo "
                                </div>
                                 <div class=\"col-xs-12 col-sm-6 \">
                                    <div class=\"form-group\"></div></div>
                          <div class=\"col-xs-12 col-sm-6 \">
                                    <div class=\"edit-profile-buttons\">
                            
                           <button type=\"submit\" class=\"submit-btn\"class=\"submit-btn\">Submit</button>
                            <a href=\"/my_dashboard\" class=\"cancel-btn\">Cancel</a>
                            
                        </div>
                                </div>
                            </div>
                      ";
        // line 223
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 223, $this->source); })()), 'form_end');
        echo "
                </div>
            </div></div></div>
                <!--END EDIT-PROFILE --> 

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 229
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 230
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "edit_my_profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 230,  370 => 229,  354 => 223,  338 => 210,  334 => 209,  330 => 208,  323 => 204,  319 => 203,  315 => 202,  308 => 198,  304 => 197,  300 => 196,  292 => 191,  285 => 186,  281 => 184,  277 => 183,  273 => 182,  264 => 176,  260 => 175,  248 => 166,  142 => 63,  136 => 60,  85 => 11,  76 => 10,  58 => 8,  27 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("




  {% extends 'base.html.twig' %}

{% block title %}Edit my profile{% endblock %}

{% block body %}
   <!--START CUSTOMER-EDIT-PROFILE-PAGE-BACKGROUND SECTION -->
        <div style=\"background:url('../../img/template/profile.jpg');background-size: cover;\" class=\"customer-edit-profile-page-background pages-background\">
            <h1>Edit Profile</h1>
        </div>
        <!--END CUSTOMER-EDIT-PROFILE-PAGE-BACKGROUND SECTION -->
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
        <!--START CUSTOMER-EDIT-PROFILE-PAGE-CONTENT SECTION -->
        <div class=\"customer-edit-profile-page-content wrapper\">
            <div class=\"container\">
                <div class=\"customer-edit-profile-page-content-head\">
                    <h2 class=\"main-color\">Edit Profile</h2>
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
                                    <a href=\"{{path('my_dashboard')}}\" class=\"post-capitalize\">my dashbord</a>
                                </li>
                                <li class=\"list-group-item\">
                                    <a href=\"{{path('edit_my_profile')}}\" class=\"post-capitalize  active\">edit profile</a>
                                </li>
                             
                            </ul>
                        </div>
                    </div>
                </div>
                <!--END MY-PROFILE PANEL -->
                <!--START EDIT-PROFILE -->    
                <div class=\"user-details edit-profile\">
              <!--      <form>
                        <div class=\"row\">
                            <div class=\"col-xs-12\">
                                <h4 class=\"have-account\">Make changes on your profile.</h4>
                            </div>
                            <div class=\"col-xs-12 col-sm-6\">
                                <div class=\"form-group \">
                                    <h5>First Name :</h5>
                                    <input type=\"text\" class=\"form-control input-block\" placeholder=\"First Name\">
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6\">
                                <div class=\"form-group \">
                                    <h5>Last Name :</h5>
                                    <input type=\"text\" class=\"form-control input-block\" placeholder=\"Last Name\">
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6\">
                                <div class=\"form-group \">
                                    <h5>Company Name :</h5>
                                    <input type=\"text\" class=\"form-control input-block\" placeholder=\"Company Name\">
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6\">
                                <div class=\"form-group\">
                                    <h5>Email :</h5>
                                    <input type=\"text\" class=\"form-control input-block\" placeholder=\"Email\">
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6\">
                                <div class=\"form-group\">
                                    <h5>Phone :</h5>
                                    <input type=\"text\" class=\"form-control input-block\" placeholder=\"Phone\">
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6\">
                                <div class=\"form-group\">
                                    <h5>Address :</h5>
                                    <input type=\"text\" class=\"form-control input-block\" placeholder=\"Street Address\">
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6\">
                                <div class=\"form-group\">
                                    <h5>Address Line 2 :</h5>
                                    <input type=\"text\" class=\"form-control input-block\" placeholder=\"Apartment, suite, unit etc. (optional)\">
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6\">
                                <div class=\"form-group\">
                                    <h5>Town / City :</h5>
                                    <input type=\"text\" class=\"form-control input-block\" placeholder=\"Town / City\">
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6\">
                                <div class=\"form-group\">
                                    <h5>Country :</h5>
                                    <select class=\"form-control input-block\">
                                        <option value=\"1\">Egypt</option>
                                        <option value=\"2\">Tunisia</option>
                                        <option value=\"3\">Lebanon</option>
                                        <option value=\"4\">Morocco</option>
                                        <option value=\"5\">United Emirates Arab</option>
                                        <option value=\"6\">Saudi Arabia</option>
                                        <option value=\"7\">Turkey</option>
                                        <option value=\"8\">Malaysia</option>
                                    </select>
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6\">
                                <div class=\"form-group\">
                                    <h5>Postcode / Zip :</h5>
                                    <input type=\"text\" class=\"form-control input-block\" placeholder=\"Postcode / Zip\">
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6\">
                                <div class=\"form-group\">
                                    <h5>Change Password :</h5>
                                    <input type=\"password\" class=\"form-control input-block\" placeholder=\"Password\">
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-sm-6\">
                                <div class=\"form-group\">
                                    <h5>Repeat Password :</h5>
                                    <input type=\"text\" class=\"form-control input-block\" placeholder=\"Password\">
                                </div>
                            </div>
                        </div>
                        <div class=\"edit-profile-buttons\">
                            <a href=\"customer-dashboard.html\" class=\"submit-btn\">Submit</a>
                            <a href=\"customer-dashboard.html\" class=\"cancel-btn\">Cancel</a>
                        </div>
                    </form>!-->

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
                                    <div class=\"edit-profile-buttons\">
                            
                           <button type=\"submit\" class=\"submit-btn\"class=\"submit-btn\">Submit</button>
                            <a href=\"/my_dashboard\" class=\"cancel-btn\">Cancel</a>
                            
                        </div>
                                </div>
                            </div>
                      {{form_end(form)}}
                </div>
            </div></div></div>
                <!--END EDIT-PROFILE --> 

{% endblock %}
{% block javascripts %}

{% endblock %}", "edit_my_profile.html.twig", "C:\\xampp\\htdocs\\Gestion_De_Bibliotheque\\templates\\edit_my_profile.html.twig");
    }
}
