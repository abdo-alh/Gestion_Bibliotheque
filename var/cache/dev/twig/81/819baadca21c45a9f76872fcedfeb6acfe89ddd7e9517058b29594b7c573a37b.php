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

/* index.html.twig */
class __TwigTemplate_6a59df5c6712b0aaa03e047958056f1b8af733750019d2c81ef669c3dbc57f4e extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

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

  <!--START HOME-BACKGROUND SECTION -->
    <div class=\"home-background\">
      <div class=container>
        <div class=\"home-background-head-text\">
          <h1>Reading World</h1>
          <p>Lorem Ipsum is simply dummy text of the printing</p>
          <button class=\"btn btn-lg first-btn\" type=\"button\">Let's Start Reading </button>
          <div class=\"arrow-down\">
            <i class=\"fa fa-angle-down\"></i>
          </div>  
        </div>
      </div>
    </div>
    <!--END BA-GROUND BACKGROUND SECTION -->
    <!-- Start Tool Box SECTION -->
        <div class=\"option-box\">
            <div class=\"color-option\">
                <h2>Color Selector</h2>
                <ul class=\"list-unstyled\">
                    <li data-value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/default_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/emerald_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/turquoise_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/sunflower_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/orange_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/carrot_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/alizarin_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/concrete_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/amethyst_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/wetasphalt_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/sienna_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/hotpink_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/darkgoldenrod_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/lightskyblue_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/black_theme.css"), "html", null, true);
        echo "\"></li>
                </ul>
            </div>
            <i class=\"fa fa-gear fa-2x gear-check\"></i>
        </div>
        <!-- End Tool Box SECTION -->
    <!--START HOME-PAGE-SECTION-THREE SECTION -->
    <div class=\"home-page-section-three wrapper\">
      <div class=\"container\">
        <div class=\"new-releases\">
          <div class=\"home-page-section-three-head\">
            <h2 class=\"main-color\">New Releases</h2>
            <span class=\"first-line\"></span>
          </div>
          <div class=\"parts\">
            <div class=\"row\">
            
            
               ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 59, $this->source); })()), 0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 60
            echo "              <!--START BOOK PART -->
              <div class=\"book-part col-xs-12 col-sm-6 col-md-3\">
                <div class=\"book-cart\">
                 <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book", ["id" => twig_get_attribute($this->env, $this->source, $context["book"], "id", [])]), "html", null, true);
            echo "\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/books/" . twig_get_attribute($this->env, $this->source, $context["book"], "image", []))), "html", null, true);
            echo "\" alt=\"Dictionary\"></a>
                  <!--<div class=\"icons\">
                    <a><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-star\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-share-alt\" aria-hidden=\"true\"></i></a>
                  </div>  -->
                  <div class=\"divy\">
                              <div class=\"book-desc\">
                                <center><a  class=\"head head-blacky\">";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "name", []), "html", null, true);
            echo "</a></center>
                                <span class=\"line-blacky\"></span>
                                <div class=\"book-tags book-tag-blacky\">Author: 
                                  <a href=\"#\" class=\"book-tag book-tag-blacky\">";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["book"], "auteur", []), "name", []), "html", null, true);
            echo "</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Format: 
                                  <a href=\"#\" class=\"book-tag book-tag-blacky\">PDF</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Categories: 
                                  <a href=\"#\" class=\"book-tag book-tag-blacky\">";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["book"], "categorie", []), "name", []), "html", null, true);
            echo "</a>
                                </div><br>
                              </div>
                              <span class=\"line-blacky\"></span>
                    
                       <a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_like", ["id" => twig_get_attribute($this->env, $this->source, $context["book"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-link js-like book-price\">
                            ";
            // line 84
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "user", []) && twig_get_attribute($this->env, $this->source, $context["book"], "isLikeByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "user", [])], "method"))) {
                // line 85
                echo "                                <i class=\"fas fa-thumbs-up\"></i>
                            ";
            } else {
                // line 87
                echo "                                <i class=\"far fa-thumbs-up\"></i>
                            ";
            }
            // line 89
            echo "                            <span class=\"js-likes\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "likes", [])), "html", null, true);
            echo "</span>
                            <span class=\"js-label\">J'aime</span>
                        </a>

                    
                            </div>
                </div>
              </div>
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "  
            </div>
          </div>
          <div class=\"book-cart-btn\">
            <a class=\"btn btn-lg new-releases-view-all-btn\" href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("books");
        echo "\">view all <i class=\"fa fa-angle-right\"></i></a>
          </div>
        </div>
        
      </div>
    </div>
    <!--END HOME-PAGE-SECTION-THREE SECTION -->

    
    <!--START HOME-PAGE-SECTION-SIX SECTION -->
    <div class=\"home-page-section-six wrapper\">
      <div class=\"container\">
        <div class=\"comingsoon\">
          <div class=\"home-page-section-six-head\">
            <h2>Coming Soon</h2>
            <span class=\"second-line\"></span>
          </div>
          <div class=\"parts\">
             
            <div class=\"row\">
              <!--START BOOK PART -->
               ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 122, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 123
            echo "               ";
            if ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "createdAt", []), "Y") == "2020")) {
                // line 124
                echo "              <div class=\"book-part col-xs-12 col-sm-6 col-md-3\">
                <div class=\"book-cart\">
                    <img src=\"";
                // line 126
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/books/" . twig_get_attribute($this->env, $this->source, $context["book"], "image", []))), "html", null, true);
                echo "\" alt=\"Design & Web design\">
                  
                    <div class=\"divy\">
                              <div class=\"book-desc\">
                                <center>  <a href=\"book.html\" class=\"head head-blacky\">";
                // line 130
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "name", []), "html", null, true);
                echo "</a></center>
                                  <span class=\"line-blacky\"></span>
                                <div class=\"book-tags book-tag-blacky\">Author: 
                                  <a href=\"#\" class=\"book-tag book-tag-blacky\">";
                // line 133
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["book"], "auteur", []), "name", []), "html", null, true);
                echo "</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Format: PDF
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Categories: 
                                  <a href=\"#\" class=\"book-tag book-tag-blacky\">";
                // line 138
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "categorie", []), "html", null, true);
                echo "</a>
                                </div>
                              </div><br>
                              <span class=\"line-blacky\"></span>
                       <a href=\"";
                // line 142
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_like", ["id" => twig_get_attribute($this->env, $this->source, $context["book"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-link js-like book-price\">
                            ";
                // line 143
                if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 143, $this->source); })()), "user", []) && twig_get_attribute($this->env, $this->source, $context["book"], "isLikeByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 143, $this->source); })()), "user", [])], "method"))) {
                    // line 144
                    echo "                                <i  class=\"fas fa-thumbs-up\"></i>
                            ";
                } else {
                    // line 146
                    echo "                                <i class=\"far fa-thumbs-up\"></i>
                            ";
                }
                // line 148
                echo "                            <span class=\"js-likes\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "likes", [])), "html", null, true);
                echo "</span>
                            <span class=\"js-label\">J'aime</span>
                        </a>
                            </div>
                </div>
              </div>
              ";
            }
            // line 155
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "              <!--END BOOK PART -->
             
            </div>
        
          </div>
          <div class=\"book-cart-btn\">
          <!--  <a class=\"btn btn-lg comingsoon-view-all-btn\" href=\"books.html\">view all <i class=\"fa fa-angle-right\"></i></a>-->
          </div>
        </div>
      </div>
    </div>
    <!--END HOME-PAGE-SECTION-SIX SECTION -->
    <!--START HOME-PAGE-SECTION-SEVEN SECTION -->
    <div class=\"home-page-section-seven wrapper\">
      <div class=\"container\"> 
        <div class=\"ournews\">
          <div class=\"home-page-section-seven-head\">
            <h2 class=\"main-color\">Book Fair</h2>
            <span class=\"first-line\"></span>
          </div>
          <div class=\"accordian\">
              <ul>
              <li>
                <div class=\"image_title\">
                  <h3>London</h3>
                  <i>\"The London Book Fair is the global marketplace for rights negotiation and the sale and distribution of content across print, audio, TV, film and digital channels.\"</i>
                  <!--<a href=\"blog-post-page.html\" class=\"ournews-accordian-btn\">Find out more </a>-->
                </div>
                <img src=\"/img/template/london.jpg\" alt=\"Istanbul Mescid\"/>
              </li>
              <li>
                <div class=\"image_title\">
                  <h3>abu dhabi</h3>
                  <i>\"The Abu Dhabi International Book Fair is the most professionally organised, most ambitious and fastest growing book fair in the Middle East and North.\"</i>
                 <!-- <a href=\"blog-post-page.html\" class=\"ournews-accordian-btn\">Find out more </a>-->
                </div>
                <img src=\"/img/template/aboudahbi.jpg\" alt=\"Ayasofya Mescid\"/>
              </li>
              <li>
                <div class=\"image_title\">
                  <h3>Casablanca</h3>
                  <i>\"Head of Government, Saad Dine El Otmani, inaugurated on Thursday the 25th edition of Casablanca International Book Fair (SIEL), in the presence of several leading figures from the spheres of politics, culture and diplomacy.\"</i>
                  <!--<a href=\"blog-post-page.html\" class=\"ournews-accordian-btn\">Find out more </a>-->
                </div>
                <img src=\"/img/template/Casablanca.jpg\" alt=\"Temple wall\"/>
              </li>
              <li>
                <div class=\"image_title\">
                  <h3>Paris</h3>
                  <i>\"Publishing professionals, book lovers and the general public will all be at the Paris Book Fair 16–19 March 2018, Porte de Versailles.\"</i>
                 <!-- <a href=\"blog-post-page.html\" class=\"ournews-accordian-btn\">Find out more </a>-->
                </div>
                <img src=\"/img/template/paris.jpg\" alt=\"Karnak Temple\"/>
              </li>
              <li>
                <div class=\"image_title\">
                  <h3>Barcelona</h3>
                  <i>\"IBER International Book Fair, Barcelona, Spain. 2019-10-09 - 2019-10-11. LIBER International Book Fair, Barcelona, Spain Location: Madrid, Spain.\"</i>
                 <!-- <a href=\"blog-post-page.html\" class=\"ournews-accordian-btn\">Find out more </a>-->
                </div>
                <img src=\"img/template/Barcelona.jpg\" alt=\"Pyramids\"/>
              </li>
            </ul>
          </div>
          <div class=\"book-cart-btn\">
          <!--  <a class=\"btn btn-lg ournews-view-all-btn\" href=\"blog-post-page.html\">view all <i class=\"fa fa-angle-right\"></i></a>-->
          </div>
        </div>
      </div>
    </div>
    <!--END HOME-PAGE-SECTION-SEVEN SECTION -->
    <!--START HOME-PAGE-SECTION-EIGHT SECTION -->
    <div class=\"home-page-section-eight wrapper\">
      <div class=\"container\">
        <div class=\"home-page-authors\">
            <div class=\"home-page-section-eight-head\">
            <h2>Featured Authors</h2>
            <span class=\"second-line\"></span>
          </div>
          <div id=\"myCarousel\" class=\"carousel slide\">
              <!-- Indicators -->
              <ol class=\"carousel-indicators\">
              <!--  <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"><img src=\"images/image-640x425.jpg\" alt=\"Author\"></li>-->
                  ";
        // line 239
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["auteurs"]) || array_key_exists("auteurs", $context) ? $context["auteurs"] : (function () { throw new RuntimeError('Variable "auteurs" does not exist.', 239, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["auteur"]) {
            // line 240
            echo "            <li data-target=\"#myCarousel\" data-slide-to=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", []), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", []) == 0)) {
                echo " class=\"active\" ";
            }
            echo "><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/auteurs/" . twig_get_attribute($this->env, $this->source, $context["auteur"], "image", []))), "html", null, true);
            echo "\" alt=\"Author\"></li>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['auteur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 242
        echo "              </ol>
              <!-- Wrapper for slides -->
              <div class=\"carousel-inner\" role=\"listbox\">
                   ";
        // line 245
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["auteurs"]) || array_key_exists("auteurs", $context) ? $context["auteurs"] : (function () { throw new RuntimeError('Variable "auteurs" does not exist.', 245, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["auteur"]) {
            // line 246
            echo "              <div ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", []) == 0)) {
                echo " class=\"item active author\" ";
            } else {
                echo " class=\"item author\" ";
            }
            echo "> 
                    <a href=\"#\">";
            // line 247
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auteur"], "name", []), "html", null, true);
            echo "</a>
                    <i>\" ";
            // line 248
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["auteur"], "information", []), "html", null, true);
            echo " \"
                    </i>
                </div>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['auteur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 252
        echo "              </div>
              <!-- Left and right controls -->
              <a class=\"left carousel-control\" role=\"button\" data-slide=\"prev\">
                <i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>
                <span class=\"sr-only\">Previous</span>
              </a>
              <a class=\"right carousel-control\" role=\"button\" data-slide=\"next\">
                 <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
                 <span class=\"sr-only\">Next</span>
              </a>
          </div>
          <div class=\"book-cart-btn\">
            <a class=\"btn btn-lg home-page-authors-btn\" href=\"";
        // line 264
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("authors");
        echo "\">view all <i class=\"fa fa-angle-right\"></i></a>
          </div>
        </div>
      </div>
    </div>
    <!--END HOME-PAGE-SECTION-EIGHT SECTION -->


    <!--START HOME-PAGE-OUR-CLIENTS SECTION -->
   <!-- <div class=\"home-page-our-clients wrapper\">
            <div class=\"container\">
                <div class=\"row\">
                    <ul class=\"list-unstyled\">
                        <li class=\"col-md-2 col-xs-6\">
                            <img class=\"img-responsive center-block\" src=\"http://via.placeholder.com/126x28\" width=\"126\" height=\"28\" alt=\"BBC\"/>
                        </li>
                        <li class=\"col-md-2 col-xs-6\">
                            <img class=\"img-responsive center-block\" src=\"http://via.placeholder.com/126x28\" width=\"126\" height=\"28\" alt=\"CNN\"/>
                        </li>
                        <li class=\"col-md-2 col-xs-6\">
                            <img class=\"img-responsive center-block\" src=\"http://via.placeholder.com/126x28\" width=\"126\" height=\"28\" alt=\"Forbes\"/>
                        </li>
                        <li class=\"col-md-2 col-xs-6\">
                            <img class=\"img-responsive center-block\" src=\"http://via.placeholder.com/126x28\" width=\"126\" height=\"28\" alt=\"Wired\"/>
                        </li>
                        <li class=\"col-md-2 col-xs-6\">
                            <img class=\"img-responsive center-block\" src=\"http://via.placeholder.com/126x28\" width=\"126\" height=\"28\" alt=\"WSJ\"/>
                        </li>
                        <li class=\"col-md-2 col-xs-6\">
                            <img class=\"img-responsive center-block\" src=\"http://via.placeholder.com/126x28\" width=\"126\" height=\"28\" alt=\"Tech Radar\"/>
                        </li>
                    </ul>
                </div>
            </div>
        </div>--><br><br>
        <!--END HOME-PAGE-OUR-CLIENTS SECTION -->
        <!--START HOME-PAGE-YOUR-MESSAGE SECTION -->
        <div class=\"home-page-your-message wrapper\">
          <div class=\"container\">
            <div class=\"your-message-parts\">
              <div class=\"home-page-your-message-head\">
            <h2>Get In Touch</h2>
            <span class=\"second-line\"></span>
          </div>
          <form action=\"";
        // line 308
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" method=\"post\">
                        <div class=\"col-md-6 col-xs-12\">
                            <div class=\"form-group\">
                                <input type=\"text\" name=\"username\" class=\"form-control input-lg\" placeholder=\"Username\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" name=\"email\" class=\"form-control input-lg\" placeholder=\"Email\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" name=\"phone\" class=\"form-control input-lg\" placeholder=\"Phone\">
                            </div>
                        </div>
                        <div class=\"col-md-6 col-xs-12\">
                            <div class=\"form-group\">
                                <textarea class=\"form-control\" name=\"message\" placeholder=\"Your Message\"></textarea>
                            </div>
                            <button class=\"btn btn-lg btn-block e-btn\" type=\"submit\">Contact Us</button>
                        </div>
                    </form>
            </div>
          </div>
        </div>
        <!--END HOME-PAGE-YOUR-MESSAGE SECTION -->
  
      

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 335
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 336
        echo "<script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
 <script src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/like.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  646 => 337,  643 => 336,  634 => 335,  597 => 308,  550 => 264,  536 => 252,  518 => 248,  514 => 247,  505 => 246,  488 => 245,  483 => 242,  460 => 240,  443 => 239,  358 => 156,  352 => 155,  341 => 148,  337 => 146,  333 => 144,  331 => 143,  327 => 142,  320 => 138,  312 => 133,  306 => 130,  299 => 126,  295 => 124,  292 => 123,  288 => 122,  264 => 101,  258 => 97,  242 => 89,  238 => 87,  234 => 85,  232 => 84,  228 => 83,  220 => 78,  211 => 72,  205 => 69,  194 => 63,  189 => 60,  185 => 59,  164 => 41,  160 => 40,  156 => 39,  152 => 38,  148 => 37,  144 => 36,  140 => 35,  136 => 34,  132 => 33,  128 => 32,  124 => 31,  120 => 30,  116 => 29,  112 => 28,  108 => 27,  85 => 6,  76 => 5,  58 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Home{% endblock %}

{% block body %}


  <!--START HOME-BACKGROUND SECTION -->
    <div class=\"home-background\">
      <div class=container>
        <div class=\"home-background-head-text\">
          <h1>Reading World</h1>
          <p>Lorem Ipsum is simply dummy text of the printing</p>
          <button class=\"btn btn-lg first-btn\" type=\"button\">Let's Start Reading </button>
          <div class=\"arrow-down\">
            <i class=\"fa fa-angle-down\"></i>
          </div>  
        </div>
      </div>
    </div>
    <!--END BA-GROUND BACKGROUND SECTION -->
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
    <!--START HOME-PAGE-SECTION-THREE SECTION -->
    <div class=\"home-page-section-three wrapper\">
      <div class=\"container\">
        <div class=\"new-releases\">
          <div class=\"home-page-section-three-head\">
            <h2 class=\"main-color\">New Releases</h2>
            <span class=\"first-line\"></span>
          </div>
          <div class=\"parts\">
            <div class=\"row\">
            
            
               {%for book in books|slice(0,4) %}
              <!--START BOOK PART -->
              <div class=\"book-part col-xs-12 col-sm-6 col-md-3\">
                <div class=\"book-cart\">
                 <a href=\"{{ path('book',{'id':book.id})}}\"> <img src=\"{{ asset('img/books/' ~ book.image)  }}\" alt=\"Dictionary\"></a>
                  <!--<div class=\"icons\">
                    <a><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-star\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-share-alt\" aria-hidden=\"true\"></i></a>
                  </div>  -->
                  <div class=\"divy\">
                              <div class=\"book-desc\">
                                <center><a  class=\"head head-blacky\">{{book.name}}</a></center>
                                <span class=\"line-blacky\"></span>
                                <div class=\"book-tags book-tag-blacky\">Author: 
                                  <a href=\"#\" class=\"book-tag book-tag-blacky\">{{book.auteur.name}}</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Format: 
                                  <a href=\"#\" class=\"book-tag book-tag-blacky\">PDF</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Categories: 
                                  <a href=\"#\" class=\"book-tag book-tag-blacky\">{{book.categorie.name}}</a>
                                </div><br>
                              </div>
                              <span class=\"line-blacky\"></span>
                    
                       <a href=\"{{ path('book_like', {'id':book.id})}}\" class=\"btn btn-link js-like book-price\">
                            {% if app.user and book.isLikeByUser(app.user) %}
                                <i class=\"fas fa-thumbs-up\"></i>
                            {% else %}
                                <i class=\"far fa-thumbs-up\"></i>
                            {% endif %}
                            <span class=\"js-likes\">{{ book.likes | length }}</span>
                            <span class=\"js-label\">J'aime</span>
                        </a>

                    
                            </div>
                </div>
              </div>
                   {%endfor%}  
            </div>
          </div>
          <div class=\"book-cart-btn\">
            <a class=\"btn btn-lg new-releases-view-all-btn\" href=\"{{path('books')}}\">view all <i class=\"fa fa-angle-right\"></i></a>
          </div>
        </div>
        
      </div>
    </div>
    <!--END HOME-PAGE-SECTION-THREE SECTION -->

    
    <!--START HOME-PAGE-SECTION-SIX SECTION -->
    <div class=\"home-page-section-six wrapper\">
      <div class=\"container\">
        <div class=\"comingsoon\">
          <div class=\"home-page-section-six-head\">
            <h2>Coming Soon</h2>
            <span class=\"second-line\"></span>
          </div>
          <div class=\"parts\">
             
            <div class=\"row\">
              <!--START BOOK PART -->
               {%for book in books %}
               {%if book.createdAt|date('Y')=='2020'%}
              <div class=\"book-part col-xs-12 col-sm-6 col-md-3\">
                <div class=\"book-cart\">
                    <img src=\"{{ asset('img/books/' ~ book.image)  }}\" alt=\"Design & Web design\">
                  
                    <div class=\"divy\">
                              <div class=\"book-desc\">
                                <center>  <a href=\"book.html\" class=\"head head-blacky\">{{book.name}}</a></center>
                                  <span class=\"line-blacky\"></span>
                                <div class=\"book-tags book-tag-blacky\">Author: 
                                  <a href=\"#\" class=\"book-tag book-tag-blacky\">{{book.auteur.name}}</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Format: PDF
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Categories: 
                                  <a href=\"#\" class=\"book-tag book-tag-blacky\">{{book.categorie}}</a>
                                </div>
                              </div><br>
                              <span class=\"line-blacky\"></span>
                       <a href=\"{{ path('book_like', {'id':book.id})}}\" class=\"btn btn-link js-like book-price\">
                            {% if app.user and book.isLikeByUser(app.user) %}
                                <i  class=\"fas fa-thumbs-up\"></i>
                            {% else %}
                                <i class=\"far fa-thumbs-up\"></i>
                            {% endif %}
                            <span class=\"js-likes\">{{ book.likes | length }}</span>
                            <span class=\"js-label\">J'aime</span>
                        </a>
                            </div>
                </div>
              </div>
              {%endif%}
                  {%endfor%}
              <!--END BOOK PART -->
             
            </div>
        
          </div>
          <div class=\"book-cart-btn\">
          <!--  <a class=\"btn btn-lg comingsoon-view-all-btn\" href=\"books.html\">view all <i class=\"fa fa-angle-right\"></i></a>-->
          </div>
        </div>
      </div>
    </div>
    <!--END HOME-PAGE-SECTION-SIX SECTION -->
    <!--START HOME-PAGE-SECTION-SEVEN SECTION -->
    <div class=\"home-page-section-seven wrapper\">
      <div class=\"container\"> 
        <div class=\"ournews\">
          <div class=\"home-page-section-seven-head\">
            <h2 class=\"main-color\">Book Fair</h2>
            <span class=\"first-line\"></span>
          </div>
          <div class=\"accordian\">
              <ul>
              <li>
                <div class=\"image_title\">
                  <h3>London</h3>
                  <i>\"The London Book Fair is the global marketplace for rights negotiation and the sale and distribution of content across print, audio, TV, film and digital channels.\"</i>
                  <!--<a href=\"blog-post-page.html\" class=\"ournews-accordian-btn\">Find out more </a>-->
                </div>
                <img src=\"/img/template/london.jpg\" alt=\"Istanbul Mescid\"/>
              </li>
              <li>
                <div class=\"image_title\">
                  <h3>abu dhabi</h3>
                  <i>\"The Abu Dhabi International Book Fair is the most professionally organised, most ambitious and fastest growing book fair in the Middle East and North.\"</i>
                 <!-- <a href=\"blog-post-page.html\" class=\"ournews-accordian-btn\">Find out more </a>-->
                </div>
                <img src=\"/img/template/aboudahbi.jpg\" alt=\"Ayasofya Mescid\"/>
              </li>
              <li>
                <div class=\"image_title\">
                  <h3>Casablanca</h3>
                  <i>\"Head of Government, Saad Dine El Otmani, inaugurated on Thursday the 25th edition of Casablanca International Book Fair (SIEL), in the presence of several leading figures from the spheres of politics, culture and diplomacy.\"</i>
                  <!--<a href=\"blog-post-page.html\" class=\"ournews-accordian-btn\">Find out more </a>-->
                </div>
                <img src=\"/img/template/Casablanca.jpg\" alt=\"Temple wall\"/>
              </li>
              <li>
                <div class=\"image_title\">
                  <h3>Paris</h3>
                  <i>\"Publishing professionals, book lovers and the general public will all be at the Paris Book Fair 16–19 March 2018, Porte de Versailles.\"</i>
                 <!-- <a href=\"blog-post-page.html\" class=\"ournews-accordian-btn\">Find out more </a>-->
                </div>
                <img src=\"/img/template/paris.jpg\" alt=\"Karnak Temple\"/>
              </li>
              <li>
                <div class=\"image_title\">
                  <h3>Barcelona</h3>
                  <i>\"IBER International Book Fair, Barcelona, Spain. 2019-10-09 - 2019-10-11. LIBER International Book Fair, Barcelona, Spain Location: Madrid, Spain.\"</i>
                 <!-- <a href=\"blog-post-page.html\" class=\"ournews-accordian-btn\">Find out more </a>-->
                </div>
                <img src=\"img/template/Barcelona.jpg\" alt=\"Pyramids\"/>
              </li>
            </ul>
          </div>
          <div class=\"book-cart-btn\">
          <!--  <a class=\"btn btn-lg ournews-view-all-btn\" href=\"blog-post-page.html\">view all <i class=\"fa fa-angle-right\"></i></a>-->
          </div>
        </div>
      </div>
    </div>
    <!--END HOME-PAGE-SECTION-SEVEN SECTION -->
    <!--START HOME-PAGE-SECTION-EIGHT SECTION -->
    <div class=\"home-page-section-eight wrapper\">
      <div class=\"container\">
        <div class=\"home-page-authors\">
            <div class=\"home-page-section-eight-head\">
            <h2>Featured Authors</h2>
            <span class=\"second-line\"></span>
          </div>
          <div id=\"myCarousel\" class=\"carousel slide\">
              <!-- Indicators -->
              <ol class=\"carousel-indicators\">
              <!--  <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"><img src=\"images/image-640x425.jpg\" alt=\"Author\"></li>-->
                  {% for auteur in auteurs %}
            <li data-target=\"#myCarousel\" data-slide-to=\"{{ loop.index0 }}\" {% if loop.index0 == 0 %} class=\"active\" {% endif %}><img src=\"{{ asset('img/auteurs/' ~ auteur.image)  }}\" alt=\"Author\"></li>
            {% endfor %}
              </ol>
              <!-- Wrapper for slides -->
              <div class=\"carousel-inner\" role=\"listbox\">
                   {% for auteur in auteurs %}
              <div {% if loop.index0 == 0 %} class=\"item active author\" {% else %} class=\"item author\" {% endif %}> 
                    <a href=\"#\">{{auteur.name}}</a>
                    <i>\" {{auteur.information}} \"
                    </i>
                </div>
                {% endfor %}
              </div>
              <!-- Left and right controls -->
              <a class=\"left carousel-control\" role=\"button\" data-slide=\"prev\">
                <i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>
                <span class=\"sr-only\">Previous</span>
              </a>
              <a class=\"right carousel-control\" role=\"button\" data-slide=\"next\">
                 <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
                 <span class=\"sr-only\">Next</span>
              </a>
          </div>
          <div class=\"book-cart-btn\">
            <a class=\"btn btn-lg home-page-authors-btn\" href=\"{{path('authors')}}\">view all <i class=\"fa fa-angle-right\"></i></a>
          </div>
        </div>
      </div>
    </div>
    <!--END HOME-PAGE-SECTION-EIGHT SECTION -->


    <!--START HOME-PAGE-OUR-CLIENTS SECTION -->
   <!-- <div class=\"home-page-our-clients wrapper\">
            <div class=\"container\">
                <div class=\"row\">
                    <ul class=\"list-unstyled\">
                        <li class=\"col-md-2 col-xs-6\">
                            <img class=\"img-responsive center-block\" src=\"http://via.placeholder.com/126x28\" width=\"126\" height=\"28\" alt=\"BBC\"/>
                        </li>
                        <li class=\"col-md-2 col-xs-6\">
                            <img class=\"img-responsive center-block\" src=\"http://via.placeholder.com/126x28\" width=\"126\" height=\"28\" alt=\"CNN\"/>
                        </li>
                        <li class=\"col-md-2 col-xs-6\">
                            <img class=\"img-responsive center-block\" src=\"http://via.placeholder.com/126x28\" width=\"126\" height=\"28\" alt=\"Forbes\"/>
                        </li>
                        <li class=\"col-md-2 col-xs-6\">
                            <img class=\"img-responsive center-block\" src=\"http://via.placeholder.com/126x28\" width=\"126\" height=\"28\" alt=\"Wired\"/>
                        </li>
                        <li class=\"col-md-2 col-xs-6\">
                            <img class=\"img-responsive center-block\" src=\"http://via.placeholder.com/126x28\" width=\"126\" height=\"28\" alt=\"WSJ\"/>
                        </li>
                        <li class=\"col-md-2 col-xs-6\">
                            <img class=\"img-responsive center-block\" src=\"http://via.placeholder.com/126x28\" width=\"126\" height=\"28\" alt=\"Tech Radar\"/>
                        </li>
                    </ul>
                </div>
            </div>
        </div>--><br><br>
        <!--END HOME-PAGE-OUR-CLIENTS SECTION -->
        <!--START HOME-PAGE-YOUR-MESSAGE SECTION -->
        <div class=\"home-page-your-message wrapper\">
          <div class=\"container\">
            <div class=\"your-message-parts\">
              <div class=\"home-page-your-message-head\">
            <h2>Get In Touch</h2>
            <span class=\"second-line\"></span>
          </div>
          <form action=\"{{path('contact')}}\" method=\"post\">
                        <div class=\"col-md-6 col-xs-12\">
                            <div class=\"form-group\">
                                <input type=\"text\" name=\"username\" class=\"form-control input-lg\" placeholder=\"Username\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" name=\"email\" class=\"form-control input-lg\" placeholder=\"Email\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" name=\"phone\" class=\"form-control input-lg\" placeholder=\"Phone\">
                            </div>
                        </div>
                        <div class=\"col-md-6 col-xs-12\">
                            <div class=\"form-group\">
                                <textarea class=\"form-control\" name=\"message\" placeholder=\"Your Message\"></textarea>
                            </div>
                            <button class=\"btn btn-lg btn-block e-btn\" type=\"submit\">Contact Us</button>
                        </div>
                    </form>
            </div>
          </div>
        </div>
        <!--END HOME-PAGE-YOUR-MESSAGE SECTION -->
  
      

{% endblock %}
{% block javascripts %}
<script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
 <script src=\"{{ asset('js/like.js') }}\"></script>
{% endblock %}", "index.html.twig", "C:\\xampp\\htdocs\\Gestion_De_Bibliotheque\\templates\\index.html.twig");
    }
}
