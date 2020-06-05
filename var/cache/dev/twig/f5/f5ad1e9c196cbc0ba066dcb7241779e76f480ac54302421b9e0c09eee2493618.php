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

/* book.html.twig */
class __TwigTemplate_9384ab935d630e0b98a94232cc79e1f24d38f1e26e451466193c1252468dae1e extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "book.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "book.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "book.html.twig"));

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
  <!--START BOOK-PAGE-BACKGROUND SECTION-->
    <div class=\"book-page-background pages-background\">
      <h1>Our Book</h1>
    </div>
    <!--END BOOK-PAGE-BACKGROUND SECTION-->
    <!-- Start Tool Box SECTION-->
        <div class=\"option-box\">
            <div class=\"color-option\">
                <h2>Color Selector</h2>
                <ul class=\"list-unstyled\">
                    <li data-value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/default_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/emerald_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/turquoise_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/sunflower_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/orange_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/carrot_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/alizarin_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/concrete_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/amethyst_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/wetasphalt_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/sienna_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/hotpink_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/darkgoldenrod_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/lightskyblue_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/black_theme.css"), "html", null, true);
        echo "\"></li>
                </ul>
            </div>
            <i class=\"fa fa-gear fa-2x gear-check\"></i>
        </div>
        <!-- End Tool Box SECTION -->
    <!--START BOOK-CONTENT SECTION-->
    <div class=\"book-content parts wrapper\">
      <div class=\"container\">
        <div class=\"book-content-head\">
          <h2 class=\"main-color\">Book Details</h2>
          <span class=\"first-line\"></span>
        </div>  
        <div class=\"row book-content-body\">
          <div class=\"col-md-4\">
            <div class=\"book-img\">
              <img src=\"images/image-500×600.jpg\" alt=\"SOME THINGS TAKE TIME\">
            </div>
          </div>
          <div class=\"col-md-8\">
            <div class=\"book-details\">
              <h3>SOME THINGS TAKE TIME</h3>
              <div class=\"book-tags book-tag-blacky\">Author: 
                <a href=\"author-profile.html\" class=\"book-tag book-tag-blacky\"> Ahmed Hamdy</a>.
              </div>
              <div class=\"book-tags book-tag-blacky\">Format: 
                <a href=\"#\" class=\"book-tag book-tag-blacky\">eBook</a>, <a href=\"#\" class=\"book-tag book-tag-blacky\">Softcover</a>.
              </div>
              <div class=\"book-tags book-tag-blacky\">Categories: 
                <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Adventures</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>.
              </div>
            
              
                
              <ul class=\"nav nav-tabs\">
                  <li class=\"active\"><a data-toggle=\"tab\" href=\"tryit.asp@filename=trybs_tabs_dynamic&stacked=h.html#home\">About this book</a></li>
              
                  <li><a data-toggle=\"tab\" href=\"tryit.asp@filename=trybs_tabs_dynamic&stacked=h.html#menu3\">Reviews</a></li>
              </ul>
              <div class=\"tab-content\">
                <!--START ABOUT THIS  BOOK-->
                  <div id=\"home\" class=\"tab-pane tab-pane-about-this-books fade in active\">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p><p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries. </p>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                      <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                      <a class=\"more\">read more<i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i></a>
                  </div>
                  <!--END ABOUT THIS  BOOK-->
                 
                  <!--START PERSON REVIEWS -->
                  <div id=\"menu3\" class=\"tab-pane tab-pane-reviews fade\">
                    <!--START PERSON REVIEW -->
                      <div class=\"person-comment\">
                    <div class=\"comment-pic\">
                      <a href=\"#\">
                        <img src=\"images/image-640x425.jpg\" alt=\"Ahmed Hamdy\">
                      </a>
                    </div>
                    <div class=\"comment-body\">
                      <h4 class=\"comment-writer\">
                        <a href=\"#\">Ahmed Hamdy</a>
                      </h4>
                      <div class=\"book-rating\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star\" aria-hidden=\"true\"></i></div>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                      <div class=\"comment-info\">
                        <a href=\"#\" class=\"comment-time post-capitalize\"> 20 Jan 2017, 3.00PM</a> <span>-</span> <a href=\"#\" class=\"reply-button post-capitalize\">Reply</a>
                      </div>
                    </div>
                  </div>
                  <!--END PERSON REVIEW -->
                  <!--START PERSON REVIEW -->
                  <div class=\"person-comment\">
                    <div class=\"comment-pic\">
                      <a href=\"#\">
                        <img src=\"images/image-640x425.jpg\" alt=\"Ahmed Hamdy\">
                      </a>
                    </div>
                    <div class=\"comment-body\">
                      <h4 class=\"comment-writer\">
                        <a href=\"#\">Ahmed Hamdy</a>
                      </h4>
                      <div class=\"book-rating\">
                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star-half-o\" aria-hidden=\"true\"></i>
                      </div>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                      <div class=\"comment-info\">
                        <a href=\"#\" class=\"comment-time post-capitalize\"> 20 Jan 2017, 3.00PM</a> <span>-</span> <a href=\"#\" class=\"reply-button post-capitalize\">Reply</a>
                      </div>
                    </div>
                  </div>
                  <!--END PERSON REVIEW -->
                  <!--START PERSON REVIEW -->
                  <div class=\"person-comment\">
                    <div class=\"comment-pic\">
                      <a href=\"#\">
                        <img src=\"images/image-640x425.jpg\" alt=\"Ahmed Hamdy\">
                      </a>
                    </div>
                    <div class=\"comment-body\">
                      <h4 class=\"comment-writer\">
                        <a href=\"#\">Ahmed Hamdy</a>
                      </h4>
                      <div class=\"book-rating\">
                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star-half-o\" aria-hidden=\"true\"></i><i class=\"fa fa-star-o\" aria-hidden=\"true\"></i>
                      </div>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                      <div class=\"comment-info\">
                        <a href=\"#\" class=\"comment-time post-capitalize\"> 20 Jan 2017, 3.00PM</a> <span>-</span> <a href=\"#\" class=\"reply-button post-capitalize\">Reply</a>
                      </div>
                    </div>
                  </div>
                  <!--END PERSON REVIEW -->
                  <!--START POST REVIEW -->
                  <div class=\"post-review\">
                    <div class=\"subheading\">
                      <h3 class=\"post-capitalize\">post a review</h3>
                      <span></span>
                    </div>
                    <div class=\"user-details\">
                      <form>
                                      <div class=\"form-group \">
                                        <h5>Username :</h5>
                                          <input type=\"text\" class=\"form-control input-block\" placeholder=\"Username\">
                                      </div>
                                      <div class=\"form-group\">
                                          <h5>Email :</h5>
                                          <input type=\"text\" class=\"form-control input-block\" placeholder=\"Email\">
                                      </div>
                                      <div class=\"form-group\">
                                          <h5>Phone :</h5>
                                          <input type=\"text\" class=\"form-control input-block\" placeholder=\"Phone\">
                                      </div>
                                      <div class=\"form-group\">
                                          <h5>Review :</h5>
                                          <textarea class=\"form-control \" placeholder=\"Your Review\"></textarea>
                                      </div>
                                      <div class=\"book-rating\">
                          <span class=\"rating-word\">Rating: </span><i class=\"fa fa-star-o\" aria-hidden=\"true\"></i><i class=\"fa fa-star-o\" aria-hidden=\"true\"></i><i class=\"fa fa-star-o\" aria-hidden=\"true\"></i><i class=\"fa fa-star-o\" aria-hidden=\"true\"></i><i class=\"fa fa-star-o\" aria-hidden=\"true\"></i>
                        </div> 
                                    <button class=\"btn btn-block btn-lg book-reviews-btn post-capitalize\" type=\"button\">submit a review</button>
                                </form>
                              </div>
                  </div>
                  <!--START POST REVIEW -->
                  </div>
                  <!--END PERSON REVIEWS -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 187
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 188
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "book.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 188,  320 => 187,  154 => 31,  150 => 30,  146 => 29,  142 => 28,  138 => 27,  134 => 26,  130 => 25,  126 => 24,  122 => 23,  118 => 22,  114 => 21,  110 => 20,  106 => 19,  102 => 18,  98 => 17,  85 => 6,  76 => 5,  58 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Home{% endblock %}

{% block body %}

  <!--START BOOK-PAGE-BACKGROUND SECTION-->
    <div class=\"book-page-background pages-background\">
      <h1>Our Book</h1>
    </div>
    <!--END BOOK-PAGE-BACKGROUND SECTION-->
    <!-- Start Tool Box SECTION-->
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
    <!--START BOOK-CONTENT SECTION-->
    <div class=\"book-content parts wrapper\">
      <div class=\"container\">
        <div class=\"book-content-head\">
          <h2 class=\"main-color\">Book Details</h2>
          <span class=\"first-line\"></span>
        </div>  
        <div class=\"row book-content-body\">
          <div class=\"col-md-4\">
            <div class=\"book-img\">
              <img src=\"images/image-500×600.jpg\" alt=\"SOME THINGS TAKE TIME\">
            </div>
          </div>
          <div class=\"col-md-8\">
            <div class=\"book-details\">
              <h3>SOME THINGS TAKE TIME</h3>
              <div class=\"book-tags book-tag-blacky\">Author: 
                <a href=\"author-profile.html\" class=\"book-tag book-tag-blacky\"> Ahmed Hamdy</a>.
              </div>
              <div class=\"book-tags book-tag-blacky\">Format: 
                <a href=\"#\" class=\"book-tag book-tag-blacky\">eBook</a>, <a href=\"#\" class=\"book-tag book-tag-blacky\">Softcover</a>.
              </div>
              <div class=\"book-tags book-tag-blacky\">Categories: 
                <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Adventures</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>.
              </div>
            
              
                
              <ul class=\"nav nav-tabs\">
                  <li class=\"active\"><a data-toggle=\"tab\" href=\"tryit.asp@filename=trybs_tabs_dynamic&stacked=h.html#home\">About this book</a></li>
              
                  <li><a data-toggle=\"tab\" href=\"tryit.asp@filename=trybs_tabs_dynamic&stacked=h.html#menu3\">Reviews</a></li>
              </ul>
              <div class=\"tab-content\">
                <!--START ABOUT THIS  BOOK-->
                  <div id=\"home\" class=\"tab-pane tab-pane-about-this-books fade in active\">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p><p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries. </p>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                      <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                      <a class=\"more\">read more<i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i></a>
                  </div>
                  <!--END ABOUT THIS  BOOK-->
                 
                  <!--START PERSON REVIEWS -->
                  <div id=\"menu3\" class=\"tab-pane tab-pane-reviews fade\">
                    <!--START PERSON REVIEW -->
                      <div class=\"person-comment\">
                    <div class=\"comment-pic\">
                      <a href=\"#\">
                        <img src=\"images/image-640x425.jpg\" alt=\"Ahmed Hamdy\">
                      </a>
                    </div>
                    <div class=\"comment-body\">
                      <h4 class=\"comment-writer\">
                        <a href=\"#\">Ahmed Hamdy</a>
                      </h4>
                      <div class=\"book-rating\"><i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star\" aria-hidden=\"true\"></i></div>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                      <div class=\"comment-info\">
                        <a href=\"#\" class=\"comment-time post-capitalize\"> 20 Jan 2017, 3.00PM</a> <span>-</span> <a href=\"#\" class=\"reply-button post-capitalize\">Reply</a>
                      </div>
                    </div>
                  </div>
                  <!--END PERSON REVIEW -->
                  <!--START PERSON REVIEW -->
                  <div class=\"person-comment\">
                    <div class=\"comment-pic\">
                      <a href=\"#\">
                        <img src=\"images/image-640x425.jpg\" alt=\"Ahmed Hamdy\">
                      </a>
                    </div>
                    <div class=\"comment-body\">
                      <h4 class=\"comment-writer\">
                        <a href=\"#\">Ahmed Hamdy</a>
                      </h4>
                      <div class=\"book-rating\">
                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star-half-o\" aria-hidden=\"true\"></i>
                      </div>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                      <div class=\"comment-info\">
                        <a href=\"#\" class=\"comment-time post-capitalize\"> 20 Jan 2017, 3.00PM</a> <span>-</span> <a href=\"#\" class=\"reply-button post-capitalize\">Reply</a>
                      </div>
                    </div>
                  </div>
                  <!--END PERSON REVIEW -->
                  <!--START PERSON REVIEW -->
                  <div class=\"person-comment\">
                    <div class=\"comment-pic\">
                      <a href=\"#\">
                        <img src=\"images/image-640x425.jpg\" alt=\"Ahmed Hamdy\">
                      </a>
                    </div>
                    <div class=\"comment-body\">
                      <h4 class=\"comment-writer\">
                        <a href=\"#\">Ahmed Hamdy</a>
                      </h4>
                      <div class=\"book-rating\">
                        <i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star\" aria-hidden=\"true\"></i><i class=\"fa fa-star-half-o\" aria-hidden=\"true\"></i><i class=\"fa fa-star-o\" aria-hidden=\"true\"></i>
                      </div>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                      <div class=\"comment-info\">
                        <a href=\"#\" class=\"comment-time post-capitalize\"> 20 Jan 2017, 3.00PM</a> <span>-</span> <a href=\"#\" class=\"reply-button post-capitalize\">Reply</a>
                      </div>
                    </div>
                  </div>
                  <!--END PERSON REVIEW -->
                  <!--START POST REVIEW -->
                  <div class=\"post-review\">
                    <div class=\"subheading\">
                      <h3 class=\"post-capitalize\">post a review</h3>
                      <span></span>
                    </div>
                    <div class=\"user-details\">
                      <form>
                                      <div class=\"form-group \">
                                        <h5>Username :</h5>
                                          <input type=\"text\" class=\"form-control input-block\" placeholder=\"Username\">
                                      </div>
                                      <div class=\"form-group\">
                                          <h5>Email :</h5>
                                          <input type=\"text\" class=\"form-control input-block\" placeholder=\"Email\">
                                      </div>
                                      <div class=\"form-group\">
                                          <h5>Phone :</h5>
                                          <input type=\"text\" class=\"form-control input-block\" placeholder=\"Phone\">
                                      </div>
                                      <div class=\"form-group\">
                                          <h5>Review :</h5>
                                          <textarea class=\"form-control \" placeholder=\"Your Review\"></textarea>
                                      </div>
                                      <div class=\"book-rating\">
                          <span class=\"rating-word\">Rating: </span><i class=\"fa fa-star-o\" aria-hidden=\"true\"></i><i class=\"fa fa-star-o\" aria-hidden=\"true\"></i><i class=\"fa fa-star-o\" aria-hidden=\"true\"></i><i class=\"fa fa-star-o\" aria-hidden=\"true\"></i><i class=\"fa fa-star-o\" aria-hidden=\"true\"></i>
                        </div> 
                                    <button class=\"btn btn-block btn-lg book-reviews-btn post-capitalize\" type=\"button\">submit a review</button>
                                </form>
                              </div>
                  </div>
                  <!--START POST REVIEW -->
                  </div>
                  <!--END PERSON REVIEWS -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   

{% endblock %}
{% block javascripts %}

{% endblock %}", "book.html.twig", "C:\\Users\\asus\\Desktop\\PFE\\Gestion De Bibliotheque\\templates\\book.html.twig");
    }
}
