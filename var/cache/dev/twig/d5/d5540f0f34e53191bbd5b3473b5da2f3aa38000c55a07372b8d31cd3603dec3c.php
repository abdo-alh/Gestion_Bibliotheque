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

/* login.html.twig */
class __TwigTemplate_38954ac5642655fe677afae846cabe09afe314ab6facb8e5fab64e133f6f7062 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "   <div class=\"customer-register\">
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
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
        echo "
                            <div class=\"row\">
                                <div class=\"col-xs-12 col-sm-6 \">
                                    <div class=\"form-group\">
                                        <h5>Username :</h5>
                                       ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "username", []), 'row', ["label" => false, "attr" => ["placeholder" => "Username", "class" => "form-control input-block"]]);
        echo "

                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-sm-6 \">
                                    <div class=\"form-group\">
                                        <h5>Email :</h5>
                                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "email", []), 'row', ["label" => false, "attr" => ["placeholder" => "Email", "class" => "form-control input-block"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-sm-6 \">
                                    <div class=\"form-group\">
                                        <h5>Password :</h5>
                                         ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "password", []), 'row', ["label" => false, "attr" => ["placeholder" => "Password", "class" => "form-control input-block"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-sm-6 \">
                                    <div class=\"form-group\">
                                        <h5>Confirm password :</h5>
                                        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "confirm_password", []), 'row', ["label" => false, "attr" => ["placeholder" => "confirm_password", "class" => "form-control input-block"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-sm-6 \">
                                    <div class=\"form-group\">
                                        <h5>Phone :</h5>
                                        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "phone", []), 'row', ["label" => false, "attr" => ["placeholder" => "Phone", "class" => "form-control input-block"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-sm-6 \">
                                    <div class=\"form-group\">
                                        <h5>Image :</h5>
                                        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "image", []), 'row', ["label" => false, "attr" => ["placeholder" => "Image", "class" => "form-control input-block"]]);
        echo "
                                    </div>
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
        // line 59
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), 'form_end');
        echo "
                    </div>
                </div>
                <!--END CUSTOMER-REGISTER -->
            </div>    
        </div>

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  140 => 59,  126 => 48,  117 => 42,  108 => 36,  99 => 30,  90 => 24,  80 => 17,  72 => 12,  60 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
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
                                        <h5>Username :</h5>
                                       {{form_row(form.username,{'label':false,'attr':{'placeholder':'Username','class': 'form-control input-block'}})}}

                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-sm-6 \">
                                    <div class=\"form-group\">
                                        <h5>Email :</h5>
                                        {{form_row(form.email,{'label':false,'attr':{'placeholder':'Email','class': 'form-control input-block'}})}}
                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-sm-6 \">
                                    <div class=\"form-group\">
                                        <h5>Password :</h5>
                                         {{form_row(form.password,{'label':false,'attr':{'placeholder':'Password','class': 'form-control input-block'}})}}
                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-sm-6 \">
                                    <div class=\"form-group\">
                                        <h5>Confirm password :</h5>
                                        {{form_row(form.confirm_password,{'label':false,'attr':{'placeholder':'confirm_password','class': 'form-control input-block'}})}}
                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-sm-6 \">
                                    <div class=\"form-group\">
                                        <h5>Phone :</h5>
                                        {{form_row(form.phone,{'label':false,'attr':{'placeholder':'Phone','class': 'form-control input-block'}})}}
                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-sm-6 \">
                                    <div class=\"form-group\">
                                        <h5>Image :</h5>
                                        {{form_row(form.image,{'label':false,'attr':{'placeholder':'Image','class': 'form-control input-block'}})}}
                                    </div>
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
        </div>

        {% endblock %}", "login.html.twig", "C:\\Users\\asus\\Desktop\\PFE\\Gestion De Bibliotheque\\templates\\login.html.twig");
    }
}
