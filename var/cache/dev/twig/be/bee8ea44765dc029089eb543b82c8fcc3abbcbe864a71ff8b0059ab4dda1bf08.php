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

/* categories.html.twig */
class __TwigTemplate_4c6ef44e094e9370a3dc3df1db26425c120486944d478bd254d11782e07bf7b6 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "categories.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categories.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categories.html.twig"));

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

        echo "Home";
        
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

  <!--START CATEGORIES-PAGE-BACKGROUND SECTION -->
    <div class=\"categories-page-background pages-background\">
      <h1>Categories</h1>
    </div>
    <!--END CATEGORIES-PAGE-BACKGROUND SECTION -->
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
    <!--START CATEGORIES-PAGE-CONTENT SECTION -->
    <div class=\"categories-page-content parts wrapper\">
      <div class=\"container\">
        <div class=\"categories-page-content-head\">
          <h2 class=\"main-color\">Our Categories</h2>
          <span class=\"first-line\"></span>
        </div>
        <div class=\"row\">
          <!--START CATEGORY PART -->
          <div class=\"category-part col-xs-12 col-sm-6 col-md-3\">
            <div class=\"category-cart\">
                <img src=\"images/image-640x425.jpg\" alt=\"Animals & Pets\">
              <div class=\"category-divy\">
                          <span class=\"line-blacky\"></span>
                          <div class=\"category-desc\">
                              <a href=\"books.html\" class=\"category-head head-blacky\">Animals & Pets</a>
                          </div>
                      </div>
            </div>
          </div>
          <!--END CATEGORY PART -->
          <!--START CATEGORY PART -->
          <div class=\"category-part col-xs-12 col-sm-6 col-md-3\">
            <div class=\"category-cart\">
              <img src=\"images/image-640x425.jpg\" alt=\"Biography & Memoir\">
              <div class=\"category-divy\">
                          <span class=\"line-blacky\"></span>
                          <div class=\"category-desc\">
                              <a href=\"books.html\" class=\"category-head head-blacky\">Biography & Memoir</a>
                          </div>
                      </div>
            </div>
          </div>
          <!--END CATEGORY PART -->
          <!--START CATEGORY PART -->
          <div class=\"category-part col-xs-12 col-sm-6 col-md-3\">
            <div class=\"category-cart\">
              <img src=\"images/image-640x425.jpg\" alt=\"Business\"> 
              <div class=\"category-divy\">
                          <span class=\"line-blacky\"></span>
                          <div class=\"category-desc\">
                              <a href=\"books.html\" class=\"category-head head-blacky\">Business</a>
                          </div>
                      </div>
            </div>
          </div>
          <!--END CATEGORY PART -->
          <!--START CATEGORY PART -->
          <div class=\"category-part col-xs-12 col-sm-6 col-md-3\">
            <div class=\"category-cart\">
              <img src=\"images/image-640x425.jpg\" alt=\"Cooking, Food & Drink\">
              <div class=\"category-divy\">
                          <span class=\"line-blacky\"></span>
                          <div class=\"category-desc\">
                              <a href=\"books.html\" class=\"category-head head-blacky\">Cooking, Food  & Drink</a>
                          </div>
                      </div>
            </div>
          </div>
          <!--END CATEGORY PART -->
          <!--START CATEGORY PART -->
          <div class=\"category-part col-xs-12 col-sm-6 col-md-3\">
            <div class=\"category-cart\">
                <img src=\"images/image-640x425.jpg\" alt=\"Farm & Agriculture\">
                <div class=\"category-divy\">
                          <span class=\"line-blacky\"></span>
                          <div class=\"category-desc\">
                              <a href=\"books.html\" class=\"category-head head-blacky\">Farm & Agriculture</a>
                          </div>
                        </div>
            </div>
          </div>
          <!--END CATEGORY PART -->
          <!--START CATEGORY PART -->
          <div class=\"category-part col-xs-12 col-sm-6 col-md-3\">
            <div class=\"category-cart\">
              <img src=\"images/image-640x425.jpg\" alt=\"Fiction\">
              <div class=\"category-divy\">
                          <span class=\"line-blacky\"></span>
                          <div class=\"category-desc\">
                              <a href=\"books.html\" class=\"category-head head-blacky\">Fiction</a>
                          </div>
                      </div>
            </div>
          </div>
          <!--END CATEGORY PART -->
          <!--START CATEGORY PART -->
          <div class=\"category-part col-xs-12 col-sm-6 col-md-3\">
            <div class=\"category-cart\">
              <img src=\"images/image-640x425.jpg\" alt=\"Games\">
              <div class=\"category-divy\">
                          <span class=\"line-blacky\"></span>
                          <div class=\"category-desc\">
                              <a href=\"books.html\" class=\"category-head head-blacky\">Games</a>
                          </div>
                      </div>
            </div>
          </div>
          <!--END CATEGORY PART -->
          <!--START CATEGORY PART -->
          <div class=\"category-part col-xs-12 col-sm-6 col-md-3\">
            <div class=\"category-cart\">
              <img src=\"images/image-640x425.jpg\" alt=\"Gardening\">
              <div class=\"category-divy\">
                          <span class=\"line-blacky\"></span>
                          <div class=\"category-desc\">
                              <a href=\"books.html\" class=\"category-head head-blacky\">Gardening</a>
                          </div>
                      </div>
            </div>
          </div>
          <!--END CATEGORY PART -->
          <!--START CATEGORY PART -->
          <div class=\"category-part col-xs-12 col-sm-6 col-md-3\">
            <div class=\"category-cart\">
              <img src=\"images/image-640x425.jpg\" alt=\"Health\">
              <div class=\"category-divy\">
                          <span class=\"line-blacky\"></span>
                          <div class=\"category-desc\">
                              <a href=\"books.html\" class=\"category-head head-blacky\">Health</a>
                          </div>
                      </div>
            </div>
          </div>
          <!--END CATEGORY PART -->
          <!--START CATEGORY PART -->
          <div class=\"category-part col-xs-12 col-sm-6 col-md-3\">
            <div class=\"category-cart\">
              <img src=\"images/image-640x425.jpg\" alt=\"History\">
                <div class=\"category-divy\">
                          <span class=\"line-blacky\"></span>
                          <div class=\"category-desc\">
                              <a href=\"books.html\" class=\"category-head head-blacky\">History</a>
                          </div>
                      </div>
            </div>
          </div>
          <!--END CATEGORY PART -->
          <!--START CATEGORY PART -->
          <div class=\"category-part col-xs-12 col-sm-6 col-md-3\">
            <div class=\"category-cart\">
              <img src=\"images/image-640x425.jpg\" alt=\"Home & Design\"> 
              <div class=\"category-divy\">
                          <span class=\"line-blacky\"></span>
                          <div class=\"category-desc\">
                              <a href=\"books.html\" class=\"category-head head-blacky\">Home & Design</a>
                          </div>
                      </div>
            </div>
          </div>
          <!--END CATEGORY PART -->
          <!--START CATEGORY PART -->
          <div class=\"category-part col-xs-12 col-sm-6 col-md-3\">
            <div class=\"category-cart\">
              <img src=\"images/image-640x425.jpg\" alt=\"Comics\">  
              <div class=\"category-divy\">
                          <span class=\"line-blacky\"></span>
                          <div class=\"category-desc\">
                              <a href=\"books.html\" class=\"category-head head-blacky\">Comics</a>
                          </div>
                      </div>
            </div>
          </div>
          <!--END CATEGORY PART -->
          <!--START CATEGORY PART -->
          <div class=\"category-part col-xs-12 col-sm-6 col-md-3\">
            <div class=\"category-cart\">
              <img src=\"images/image-640x425.jpg\" alt=\"Kids\">
              <div class=\"category-divy\">
                          <span class=\"line-blacky\"></span>
                          <div class=\"category-desc\">
                              <a href=\"books.html\" class=\"category-head head-blacky\">Kids</a>
                          </div>
                      </div>
            </div>
          </div>
          <!--END CATEGORY PART -->
          <!--START CATEGORY PART -->
          <div class=\"category-part col-xs-12 col-sm-6 col-md-3\">
            <div class=\"category-cart\">
              <img src=\"images/image-640x425.jpg\" alt=\"Makers & Crafters\"> 
              <div class=\"category-divy\">
                          <span class=\"line-blacky\"></span>
                          <div class=\"category-desc\">
                              <a href=\"books.html\" class=\"category-head head-blacky\">Makers & Crafters</a>
                          </div>
                      </div>
            </div>
          </div>
          <!--END CATEGORY PART -->
          <!--START CATEGORY PART -->
          <div class=\"category-part col-xs-12 col-sm-6 col-md-3\">
            <div class=\"category-cart\">
              <img src=\"images/image-640x425.jpg\" alt=\"Parenting & Family\"> 
              <div class=\"category-divy\">
                          <span class=\"line-blacky\"></span>
                          <div class=\"category-desc\">
                              <a href=\"books.html\" class=\"category-head head-blacky\">Parenting & Family</a> 
                          </div>
                      </div>
            </div>
          </div>
          <!--END CATEGORY PART -->
          <!--START CATEGORY PART -->
          <div class=\"category-part col-xs-12 col-sm-6 col-md-3\">
            <div class=\"category-cart\">
              <img src=\"images/image-640x425.jpg\" alt=\"Poetry\"> 
              <div class=\"category-divy\">
                          <span class=\"line-blacky\"></span>
                          <div class=\"category-desc\">
                              <a href=\"books.html\" class=\"category-head head-blacky\">Poetry</a>
                          </div>
                      </div>
            </div>
          </div>
          <!--END CATEGORY PART -->
          <!--START CATEGORY PART -->
          <div class=\"category-part col-xs-12 col-sm-6 col-md-3\">
            <div class=\"category-cart\">
              <img src=\"images/image-640x425.jpg\" alt=\"Science & Nature\">
              <div class=\"category-divy\">
                          <span class=\"line-blacky\"></span>
                          <div class=\"category-desc\">
                              <a href=\"books.html\" class=\"category-head head-blacky\">Science & Nature</a>
                          </div>
                      </div>
            </div>
          </div>
          <!--END CATEGORY PART -->
          <!--START CATEGORY PART -->
          <div class=\"category-part col-xs-12 col-sm-6 col-md-3\">
            <div class=\"category-cart\">
              <img src=\"images/image-640x425.jpg\" alt=\"Relationships\"> 
              <div class=\"category-divy\">
                          <span class=\"line-blacky\"></span>
                          <div class=\"category-desc\">
                              <a href=\"books.html\" class=\"category-head head-blacky\">Relationships</a>
                          </div>
                      </div>
            </div>
          </div>
          <!--END CATEGORY PART -->
          <!--START CATEGORY PART -->
          <div class=\"category-part col-xs-12 col-sm-6 col-md-3\">
            <div class=\"category-cart\">
              <img src=\"images/image-640x425.jpg\" alt=\"Sport\">
              <div class=\"category-divy\">
                          <span class=\"line-blacky\"></span>
                          <div class=\"category-desc\">
                              <a href=\"books.html\" class=\"category-head head-blacky\">Sport</a>
                          </div>
                      </div>
            </div>
          </div>
          <!--END CATEGORY PART -->
          <!--START CATEGORY PART -->
          <div class=\"category-part col-xs-12 col-sm-6 col-md-3\">
            <div class=\"category-cart\">
              <img src=\"images/image-640x425.jpg\" alt=\"Cars\">
              <div class=\"category-divy\">
                          <span class=\"line-blacky\"></span>
                          <div class=\"category-desc\">
                              <a href=\"books.html\" class=\"category-head head-blacky\">Cars</a>
                          </div>
                      </div>
            </div>
          </div>
          <!--END CATEGORY PART -->
        </div>
      </div>
    </div>
    <!--END CATEGORIES-PAGE-CONTENT SECTION --> 
   

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 313
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 314
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  455 => 314,  446 => 313,  155 => 32,  151 => 31,  147 => 30,  143 => 29,  139 => 28,  135 => 27,  131 => 26,  127 => 25,  123 => 24,  119 => 23,  115 => 22,  111 => 21,  107 => 20,  103 => 19,  99 => 18,  85 => 6,  76 => 5,  58 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Home{% endblock %}

{% block body %}


  <!--START CATEGORIES-PAGE-BACKGROUND SECTION -->
    <div class=\"categories-page-background pages-background\">
      <h1>Categories</h1>
    </div>
    <!--END CATEGORIES-PAGE-BACKGROUND SECTION -->
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
    <!--START CATEGORIES-PAGE-CONTENT SECTION -->
    <div class=\"categories-page-content parts wrapper\">
      <div class=\"container\">
        <div class=\"categories-page-content-head\">
          <h2 class=\"main-color\">Our Categories</h2>
          <span class=\"first-line\"></span>
        </div>
        <div class=\"row\">
          <!--START CATEGORY PART -->
          <div class=\"category-part col-xs-12 col-sm-6 col-md-3\">
            <div class=\"category-cart\">
                <img src=\"images/image-640x425.jpg\" alt=\"Animals & Pets\">
              <div class=\"category-divy\">
                          <span class=\"line-blacky\"></span>
                          <div class=\"category-desc\">
                              <a href=\"books.html\" class=\"category-head head-blacky\">Animals & Pets</a>
                          </div>
                      </div>
            </div>
          </div>
          <!--END CATEGORY PART -->
          <!--START CATEGORY PART -->
          <div class=\"category-part col-xs-12 col-sm-6 col-md-3\">
            <div class=\"category-cart\">
              <img src=\"images/image-640x425.jpg\" alt=\"Biography & Memoir\">
              <div class=\"category-divy\">
                          <span class=\"line-blacky\"></span>
                          <div class=\"category-desc\">
                              <a href=\"books.html\" class=\"category-head head-blacky\">Biography & Memoir</a>
                          </div>
                      </div>
            </div>
          </div>
          <!--END CATEGORY PART -->
          <!--START CATEGORY PART -->
          <div class=\"category-part col-xs-12 col-sm-6 col-md-3\">
            <div class=\"category-cart\">
              <img src=\"images/image-640x425.jpg\" alt=\"Business\"> 
              <div class=\"category-divy\">
                          <span class=\"line-blacky\"></span>
                          <div class=\"category-desc\">
                              <a href=\"books.html\" class=\"category-head head-blacky\">Business</a>
                          </div>
                      </div>
            </div>
          </div>
          <!--END CATEGORY PART -->
          <!--START CATEGORY PART -->
          <div class=\"category-part col-xs-12 col-sm-6 col-md-3\">
            <div class=\"category-cart\">
              <img src=\"images/image-640x425.jpg\" alt=\"Cooking, Food & Drink\">
              <div class=\"category-divy\">
                          <span class=\"line-blacky\"></span>
                          <div class=\"category-desc\">
                              <a href=\"books.html\" class=\"category-head head-blacky\">Cooking, Food  & Drink</a>
                          </div>
                      </div>
            </div>
          </div>
          <!--END CATEGORY PART -->
          <!--START CATEGORY PART -->
          <div class=\"category-part col-xs-12 col-sm-6 col-md-3\">
            <div class=\"category-cart\">
                <img src=\"images/image-640x425.jpg\" alt=\"Farm & Agriculture\">
                <div class=\"category-divy\">
                          <span class=\"line-blacky\"></span>
                          <div class=\"category-desc\">
                              <a href=\"books.html\" class=\"category-head head-blacky\">Farm & Agriculture</a>
                          </div>
                        </div>
            </div>
          </div>
          <!--END CATEGORY PART -->
          <!--START CATEGORY PART -->
          <div class=\"category-part col-xs-12 col-sm-6 col-md-3\">
            <div class=\"category-cart\">
              <img src=\"images/image-640x425.jpg\" alt=\"Fiction\">
              <div class=\"category-divy\">
                          <span class=\"line-blacky\"></span>
                          <div class=\"category-desc\">
                              <a href=\"books.html\" class=\"category-head head-blacky\">Fiction</a>
                          </div>
                      </div>
            </div>
          </div>
          <!--END CATEGORY PART -->
          <!--START CATEGORY PART -->
          <div class=\"category-part col-xs-12 col-sm-6 col-md-3\">
            <div class=\"category-cart\">
              <img src=\"images/image-640x425.jpg\" alt=\"Games\">
              <div class=\"category-divy\">
                          <span class=\"line-blacky\"></span>
                          <div class=\"category-desc\">
                              <a href=\"books.html\" class=\"category-head head-blacky\">Games</a>
                          </div>
                      </div>
            </div>
          </div>
          <!--END CATEGORY PART -->
          <!--START CATEGORY PART -->
          <div class=\"category-part col-xs-12 col-sm-6 col-md-3\">
            <div class=\"category-cart\">
              <img src=\"images/image-640x425.jpg\" alt=\"Gardening\">
              <div class=\"category-divy\">
                          <span class=\"line-blacky\"></span>
                          <div class=\"category-desc\">
                              <a href=\"books.html\" class=\"category-head head-blacky\">Gardening</a>
                          </div>
                      </div>
            </div>
          </div>
          <!--END CATEGORY PART -->
          <!--START CATEGORY PART -->
          <div class=\"category-part col-xs-12 col-sm-6 col-md-3\">
            <div class=\"category-cart\">
              <img src=\"images/image-640x425.jpg\" alt=\"Health\">
              <div class=\"category-divy\">
                          <span class=\"line-blacky\"></span>
                          <div class=\"category-desc\">
                              <a href=\"books.html\" class=\"category-head head-blacky\">Health</a>
                          </div>
                      </div>
            </div>
          </div>
          <!--END CATEGORY PART -->
          <!--START CATEGORY PART -->
          <div class=\"category-part col-xs-12 col-sm-6 col-md-3\">
            <div class=\"category-cart\">
              <img src=\"images/image-640x425.jpg\" alt=\"History\">
                <div class=\"category-divy\">
                          <span class=\"line-blacky\"></span>
                          <div class=\"category-desc\">
                              <a href=\"books.html\" class=\"category-head head-blacky\">History</a>
                          </div>
                      </div>
            </div>
          </div>
          <!--END CATEGORY PART -->
          <!--START CATEGORY PART -->
          <div class=\"category-part col-xs-12 col-sm-6 col-md-3\">
            <div class=\"category-cart\">
              <img src=\"images/image-640x425.jpg\" alt=\"Home & Design\"> 
              <div class=\"category-divy\">
                          <span class=\"line-blacky\"></span>
                          <div class=\"category-desc\">
                              <a href=\"books.html\" class=\"category-head head-blacky\">Home & Design</a>
                          </div>
                      </div>
            </div>
          </div>
          <!--END CATEGORY PART -->
          <!--START CATEGORY PART -->
          <div class=\"category-part col-xs-12 col-sm-6 col-md-3\">
            <div class=\"category-cart\">
              <img src=\"images/image-640x425.jpg\" alt=\"Comics\">  
              <div class=\"category-divy\">
                          <span class=\"line-blacky\"></span>
                          <div class=\"category-desc\">
                              <a href=\"books.html\" class=\"category-head head-blacky\">Comics</a>
                          </div>
                      </div>
            </div>
          </div>
          <!--END CATEGORY PART -->
          <!--START CATEGORY PART -->
          <div class=\"category-part col-xs-12 col-sm-6 col-md-3\">
            <div class=\"category-cart\">
              <img src=\"images/image-640x425.jpg\" alt=\"Kids\">
              <div class=\"category-divy\">
                          <span class=\"line-blacky\"></span>
                          <div class=\"category-desc\">
                              <a href=\"books.html\" class=\"category-head head-blacky\">Kids</a>
                          </div>
                      </div>
            </div>
          </div>
          <!--END CATEGORY PART -->
          <!--START CATEGORY PART -->
          <div class=\"category-part col-xs-12 col-sm-6 col-md-3\">
            <div class=\"category-cart\">
              <img src=\"images/image-640x425.jpg\" alt=\"Makers & Crafters\"> 
              <div class=\"category-divy\">
                          <span class=\"line-blacky\"></span>
                          <div class=\"category-desc\">
                              <a href=\"books.html\" class=\"category-head head-blacky\">Makers & Crafters</a>
                          </div>
                      </div>
            </div>
          </div>
          <!--END CATEGORY PART -->
          <!--START CATEGORY PART -->
          <div class=\"category-part col-xs-12 col-sm-6 col-md-3\">
            <div class=\"category-cart\">
              <img src=\"images/image-640x425.jpg\" alt=\"Parenting & Family\"> 
              <div class=\"category-divy\">
                          <span class=\"line-blacky\"></span>
                          <div class=\"category-desc\">
                              <a href=\"books.html\" class=\"category-head head-blacky\">Parenting & Family</a> 
                          </div>
                      </div>
            </div>
          </div>
          <!--END CATEGORY PART -->
          <!--START CATEGORY PART -->
          <div class=\"category-part col-xs-12 col-sm-6 col-md-3\">
            <div class=\"category-cart\">
              <img src=\"images/image-640x425.jpg\" alt=\"Poetry\"> 
              <div class=\"category-divy\">
                          <span class=\"line-blacky\"></span>
                          <div class=\"category-desc\">
                              <a href=\"books.html\" class=\"category-head head-blacky\">Poetry</a>
                          </div>
                      </div>
            </div>
          </div>
          <!--END CATEGORY PART -->
          <!--START CATEGORY PART -->
          <div class=\"category-part col-xs-12 col-sm-6 col-md-3\">
            <div class=\"category-cart\">
              <img src=\"images/image-640x425.jpg\" alt=\"Science & Nature\">
              <div class=\"category-divy\">
                          <span class=\"line-blacky\"></span>
                          <div class=\"category-desc\">
                              <a href=\"books.html\" class=\"category-head head-blacky\">Science & Nature</a>
                          </div>
                      </div>
            </div>
          </div>
          <!--END CATEGORY PART -->
          <!--START CATEGORY PART -->
          <div class=\"category-part col-xs-12 col-sm-6 col-md-3\">
            <div class=\"category-cart\">
              <img src=\"images/image-640x425.jpg\" alt=\"Relationships\"> 
              <div class=\"category-divy\">
                          <span class=\"line-blacky\"></span>
                          <div class=\"category-desc\">
                              <a href=\"books.html\" class=\"category-head head-blacky\">Relationships</a>
                          </div>
                      </div>
            </div>
          </div>
          <!--END CATEGORY PART -->
          <!--START CATEGORY PART -->
          <div class=\"category-part col-xs-12 col-sm-6 col-md-3\">
            <div class=\"category-cart\">
              <img src=\"images/image-640x425.jpg\" alt=\"Sport\">
              <div class=\"category-divy\">
                          <span class=\"line-blacky\"></span>
                          <div class=\"category-desc\">
                              <a href=\"books.html\" class=\"category-head head-blacky\">Sport</a>
                          </div>
                      </div>
            </div>
          </div>
          <!--END CATEGORY PART -->
          <!--START CATEGORY PART -->
          <div class=\"category-part col-xs-12 col-sm-6 col-md-3\">
            <div class=\"category-cart\">
              <img src=\"images/image-640x425.jpg\" alt=\"Cars\">
              <div class=\"category-divy\">
                          <span class=\"line-blacky\"></span>
                          <div class=\"category-desc\">
                              <a href=\"books.html\" class=\"category-head head-blacky\">Cars</a>
                          </div>
                      </div>
            </div>
          </div>
          <!--END CATEGORY PART -->
        </div>
      </div>
    </div>
    <!--END CATEGORIES-PAGE-CONTENT SECTION --> 
   

{% endblock %}
{% block javascripts %}

{% endblock %}", "categories.html.twig", "C:\\Users\\asus\\Desktop\\PFE\\Gestion De Bibliotheque\\templates\\categories.html.twig");
    }
}
