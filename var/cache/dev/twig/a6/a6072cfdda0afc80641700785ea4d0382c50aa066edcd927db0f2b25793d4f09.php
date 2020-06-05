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

/* books.html.twig */
class __TwigTemplate_7cf0117b84291e22de68165b1337429e80d945271513919280079fe952f62f9c extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "books.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "books.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "books.html.twig"));

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
  <!--START BOOKSPAGE-BACKGROUND SECTION-->
    <div class=\"bookspage-background pages-background\">
      <h1>Our Books</h1>
    </div>
    <!--END BOOKSPAGE-BACKGROUND SECTION-->
    <!-- Start Tool Box SECTION -->
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
        <!-- End Tool Box Section -->
    <!--START BOOKSPAGE-CONTENT Section -->
    <div class=\"bookspage-content wrapper\">
      <div class=\"container\">
        <div class=\"bookspage-body\">
          <div class=\"bookspage-content-head\">
            <h2 class=\"main-color\">Our Books</h2>
            <span class=\"first-line\"></span>
          </div>
          <div class=\"parts books-list\">
            <div class=\"row\">
              <!--START BOOK PART -->
              <div class=\"book-part col-xs-12 col-sm-6 col-md-3\">
                <div class=\"book-cart\">
                    <img src=\"images/image-200x250.jpg\" alt=\"Design & Web design\">
                    <div class=\"icons\">
                      <a><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-star\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-share-alt\" aria-hidden=\"true\"></i></a>
                    </div>
                    <div class=\"divy\">
                              <div class=\"book-desc\">
                                  <a href=\"book.html\" class=\"head head-blacky\">Design & Web design</a>
                                  <span class=\"line-blacky\"></span>
                                <div class=\"book-tags book-tag-blacky\">Author: 
                                  <a href=\"author-profile.html\" class=\"book-tag book-tag-blacky\"> Ahmed Hamdy</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Format: 
                                  <a href=\"book.html\" class=\"book-tag book-tag-blacky\">eBook</a>, <a href=\"book.html\" class=\"book-tag book-tag-blacky\">Softcover</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Categories: 
                                  <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Adventures</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>.
                                </div>
                              </div>
                              <span class=\"line-blacky\"></span>
                    <a href=\"book.html\" class=\"book-price main-color\">Price:
                      <span class=\"price-number-after\">10\$</span>
                    </a>
                            </div>
                </div>
              </div>
              <!--END BOOK PART -->
              <!--START BOOK PART -->
              <div class=\"book-part col-xs-12 col-sm-6 col-md-3\">
                <div class=\"book-cart\">
                    <img src=\"images/image-200x250.jpg\" alt=\"Nature Package\">
                    <div class=\"icons\">
                      <a><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-star\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-share-alt\" aria-hidden=\"true\"></i></a>
                    </div>
                    <div class=\"divy\">
                              <div class=\"book-desc\">
                                <a href=\"book.html\" class=\"head head-blacky\">Nature Package</a>
                                <span class=\"line-blacky\"></span>
                                <div class=\"book-tags book-tag-blacky\">Author: 
                                  <a href=\"author-profile.html\" class=\"book-tag book-tag-blacky\"> Ahmed Hamdy</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Format: 
                                  <a href=\"book.html\" class=\"book-tag book-tag-blacky\">eBook</a>, <a href=\"book.html\" class=\"book-tag book-tag-blacky\">Softcover</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Categories: 
                                  <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Adventures</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>.
                                </div>
                              </div>
                              <span class=\"line-blacky\"></span>
                    <a href=\"book.html\" class=\"book-price main-color\">Price:
                      <span class=\"price-number-after\">10\$</span>
                    </a>
                            </div>
                </div>
              </div>
              <!--END BOOK PART -->
              <!--START BOOK PART -->
              <div class=\"book-part col-xs-12 col-sm-6 col-md-3\">
                <div class=\"book-cart\">
                    <img src=\"images/image-200x250.jpg\" alt=\"Design & Web design\">
                    <div class=\"icons\">
                      <a><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-star\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-share-alt\" aria-hidden=\"true\"></i></a>
                    </div>
                    <div class=\"divy\">
                              <div class=\"book-desc\">
                                <a href=\"book.html\" class=\"head head-blacky\">Design & Web design</a>
                                <span class=\"line-blacky\"></span>
                                <div class=\"book-tags book-tag-blacky\">Author: 
                                  <a href=\"author-profile.html\" class=\"book-tag book-tag-blacky\"> Ahmed Hamdy</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Format: 
                                  <a href=\"book.html\" class=\"book-tag book-tag-blacky\">eBook</a>, <a href=\"book.html\" class=\"book-tag book-tag-blacky\">Softcover</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Categories: 
                                  <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Adventures</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>.
                                </div>
                              </div>
                              <span class=\"line-blacky\"></span>
                    <a href=\"book.html\" class=\"book-price main-color\">Price:
                      <span class=\"price-number-after\">10\$</span>
                    </a>
                            </div>
                </div>
              </div>
              <!--END BOOK PART -->
              <!--START BOOK PART -->
              <div class=\"book-part col-xs-12 col-sm-6 col-md-3\">
                <div class=\"book-cart\">
                  <img src=\"images/image-200x250.jpg\" alt=\"Dictionary\">
                  <div class=\"icons\">
                    <a><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-star\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-share-alt\" aria-hidden=\"true\"></i></a>
                  </div>  
                  <div class=\"divy\">
                              <div class=\"book-desc\">
                                <a href=\"book.html\" class=\"head head-blacky\">English Dictionary</a>
                                <span class=\"line-blacky\"></span>
                                <div class=\"book-tags book-tag-blacky\">Author: 
                                  <a href=\"author-profile.html\" class=\"book-tag book-tag-blacky\"> Ahmed Hamdy</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Format: 
                                  <a href=\"book.html\" class=\"book-tag book-tag-blacky\">eBook</a>, <a href=\"book.html\" class=\"book-tag book-tag-blacky\">Softcover</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Categories: 
                                  <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Adventures</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>.
                                </div>
                              </div>
                              <span class=\"line-blacky\"></span>
                    <a href=\"book.html\" class=\"book-price main-color\">Price:
                      <span class=\"price-number-after\">10\$</span>
                    </a>
                            </div>
                </div>
              </div>
              <!--END BOOK PART -->
              <!--START BOOK PART -->
              <div class=\"book-part col-xs-12 col-sm-6 col-md-3\">
                <div class=\"book-cart\">
                    <img src=\"images/image-200x250.jpg\" alt=\"Design & Web design\">
                    <div class=\"icons\">
                      <a><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-star\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-share-alt\" aria-hidden=\"true\"></i></a>
                    </div>
                    <div class=\"divy\">
                              <div class=\"book-desc\">
                                  <a href=\"book.html\" class=\"head head-blacky\">Design & Web design</a>
                                  <span class=\"line-blacky\"></span>
                                <div class=\"book-tags book-tag-blacky\">Author: 
                                  <a href=\"author-profile.html\" class=\"book-tag book-tag-blacky\"> Ahmed Hamdy</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Format: 
                                  <a href=\"book.html\" class=\"book-tag book-tag-blacky\">eBook</a>, <a href=\"book.html\" class=\"book-tag book-tag-blacky\">Softcover</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Categories: 
                                  <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Adventures</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>.
                                </div>
                              </div>
                              <span class=\"line-blacky\"></span>
                    <a href=\"book.html\" class=\"book-price main-color\">Price:
                      <span class=\"price-number-after\">10\$</span>
                    </a>
                            </div>
                </div>
              </div>
              <!--END BOOK PART -->
              <!--START BOOK PART -->
              <div class=\"book-part col-xs-12 col-sm-6 col-md-3\">
                <div class=\"book-cart\">
                    <img src=\"images/image-200x250.jpg\" alt=\"Nature Package\">
                    <div class=\"icons\">
                      <a><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-star\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-share-alt\" aria-hidden=\"true\"></i></a>
                    </div>
                    <div class=\"divy\">
                              <div class=\"book-desc\">
                                <a href=\"book.html\" class=\"head head-blacky\">Nature Package</a>
                                <span class=\"line-blacky\"></span>
                                <div class=\"book-tags book-tag-blacky\">Author: 
                                  <a href=\"author-profile.html\" class=\"book-tag book-tag-blacky\"> Ahmed Hamdy</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Format: 
                                  <a href=\"book.html\" class=\"book-tag book-tag-blacky\">eBook</a>, <a href=\"book.html\" class=\"book-tag book-tag-blacky\">Softcover</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Categories: 
                                  <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Adventures</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>.
                                </div>
                              </div>
                              <span class=\"line-blacky\"></span>
                    <a href=\"book.html\" class=\"book-price main-color\">Price:
                      <span class=\"price-number-after\">10\$</span>
                    </a>
                            </div>
                </div>
              </div>
              <!--END BOOK PART -->
              <!--START BOOK PART -->
              <div class=\"book-part col-xs-12 col-sm-6 col-md-3\">
                <div class=\"book-cart\">
                    <img src=\"images/image-200x250.jpg\" alt=\"Design & Web design\">
                    <div class=\"icons\">
                      <a><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-star\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-share-alt\" aria-hidden=\"true\"></i></a>
                    </div>
                    <div class=\"divy\">
                              <div class=\"book-desc\">
                                <a href=\"book.html\" class=\"head head-blacky\">Design & Web design</a>
                                <span class=\"line-blacky\"></span>
                                <div class=\"book-tags book-tag-blacky\">Author: 
                                  <a href=\"author-profile.html\" class=\"book-tag book-tag-blacky\"> Ahmed Hamdy</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Format: 
                                  <a href=\"book.html\" class=\"book-tag book-tag-blacky\">eBook</a>, <a href=\"book.html\" class=\"book-tag book-tag-blacky\">Softcover</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Categories: 
                                  <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Adventures</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>.
                                </div>
                              </div>
                              <span class=\"line-blacky\"></span>
                    <a href=\"book.html\" class=\"book-price main-color\">Price:
                      <span class=\"price-number-after\">10\$</span>
                    </a>
                            </div>
                </div>
              </div>
              <!--END BOOK PART -->
              <!--START BOOK PART -->
              <div class=\"book-part col-xs-12 col-sm-6 col-md-3\">
                <div class=\"book-cart\">
                  <img src=\"images/image-200x250.jpg\" alt=\"Dictionary\">
                  <div class=\"icons\">
                    <a><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-star\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-share-alt\" aria-hidden=\"true\"></i></a>
                  </div>  
                  <div class=\"divy\">
                              <div class=\"book-desc\">
                                <a href=\"book.html\" class=\"head head-blacky\">English Dictionary</a>
                                <span class=\"line-blacky\"></span>
                                <div class=\"book-tags book-tag-blacky\">Author: 
                                  <a href=\"author-profile.html\" class=\"book-tag book-tag-blacky\"> Ahmed Hamdy</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Format: 
                                  <a href=\"book.html\" class=\"book-tag book-tag-blacky\">eBook</a>, <a href=\"book.html\" class=\"book-tag book-tag-blacky\">Softcover</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Categories: 
                                  <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Adventures</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>.
                                </div>
                              </div>
                              <span class=\"line-blacky\"></span>
                    <a href=\"book.html\" class=\"book-price main-color\">Price:
                      <span class=\"price-number-after\">10\$</span>
                    </a>
                            </div>
                </div>
              </div>
              <!--END BOOK PART -->
              <!--START BOOK PART -->
              <div class=\"book-part col-xs-12 col-sm-6 col-md-3\">
                <div class=\"book-cart\">
                    <img src=\"images/image-200x250.jpg\" alt=\"Design & Web design\">
                    <div class=\"icons\">
                      <a><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-star\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-share-alt\" aria-hidden=\"true\"></i></a>
                    </div>
                    <div class=\"divy\">
                              <div class=\"book-desc\">
                                  <a href=\"book.html\" class=\"head head-blacky\">Design & Web design</a>
                                  <span class=\"line-blacky\"></span>
                                <div class=\"book-tags book-tag-blacky\">Author: 
                                  <a href=\"author-profile.html\" class=\"book-tag book-tag-blacky\"> Ahmed Hamdy</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Format: 
                                  <a href=\"book.html\" class=\"book-tag book-tag-blacky\">eBook</a>, <a href=\"book.html\" class=\"book-tag book-tag-blacky\">Softcover</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Categories: 
                                  <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Adventures</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>.
                                </div>
                              </div>
                              <span class=\"line-blacky\"></span>
                    <a href=\"book.html\" class=\"book-price main-color\">Price:
                      <span class=\"price-number-after\">10\$</span>
                    </a>
                            </div>
                </div>
              </div>
              <!--END BOOK PART -->
              <!--START BOOK PART -->
              <div class=\"book-part col-xs-12 col-sm-6 col-md-3\">
                <div class=\"book-cart\">
                    <img src=\"images/image-200x250.jpg\" alt=\"Nature Package\">
                    <div class=\"icons\">
                      <a><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-star\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-share-alt\" aria-hidden=\"true\"></i></a>
                    </div>
                    <div class=\"divy\">
                              <div class=\"book-desc\">
                                <a href=\"book.html\" class=\"head head-blacky\">Nature Package</a>
                                <span class=\"line-blacky\"></span>
                                <div class=\"book-tags book-tag-blacky\">Author: 
                                  <a href=\"author-profile.html\" class=\"book-tag book-tag-blacky\"> Ahmed Hamdy</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Format: 
                                  <a href=\"book.html\" class=\"book-tag book-tag-blacky\">eBook</a>, <a href=\"book.html\" class=\"book-tag book-tag-blacky\">Softcover</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Categories: 
                                  <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Adventures</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>.
                                </div>
                              </div>
                              <span class=\"line-blacky\"></span>
                    <a href=\"book.html\" class=\"book-price main-color\">Price:
                      <span class=\"price-number-after\">10\$</span>
                    </a>
                            </div>
                </div>
              </div>
              <!--END BOOK PART -->
              <!--START BOOK PART -->
              <div class=\"book-part col-xs-12 col-sm-6 col-md-3\">
                <div class=\"book-cart\">
                    <img src=\"images/image-200x250.jpg\" alt=\"Design & Web design\">
                    <div class=\"icons\">
                      <a><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-star\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-share-alt\" aria-hidden=\"true\"></i></a>
                    </div>
                    <div class=\"divy\">
                              <div class=\"book-desc\">
                                <a href=\"book.html\" class=\"head head-blacky\">Design & Web design</a>
                                <span class=\"line-blacky\"></span>
                                <div class=\"book-tags book-tag-blacky\">Author: 
                                  <a href=\"author-profile.html\" class=\"book-tag book-tag-blacky\"> Ahmed Hamdy</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Format: 
                                  <a href=\"book.html\" class=\"book-tag book-tag-blacky\">eBook</a>, <a href=\"book.html\" class=\"book-tag book-tag-blacky\">Softcover</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Categories: 
                                  <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Adventures</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>.
                                </div>
                              </div>
                              <span class=\"line-blacky\"></span>
                    <a href=\"book.html\" class=\"book-price main-color\">Price:
                      <span class=\"price-number-after\">10\$</span>
                    </a>
                            </div>
                </div>
              </div>
              <!--END BOOK PART -->
              <!--START BOOK PART -->
              <div class=\"book-part col-xs-12 col-sm-6 col-md-3\">
                <div class=\"book-cart\">
                  <img src=\"images/image-200x250.jpg\" alt=\"Dictionary\">
                  <div class=\"icons\">
                    <a><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-star\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-share-alt\" aria-hidden=\"true\"></i></a>
                  </div>  
                  <div class=\"divy\">
                              <div class=\"book-desc\">
                                <a href=\"book.html\" class=\"head head-blacky\">English Dictionary</a>
                                <span class=\"line-blacky\"></span>
                                <div class=\"book-tags book-tag-blacky\">Author: 
                                  <a href=\"author-profile.html\" class=\"book-tag book-tag-blacky\"> Ahmed Hamdy</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Format: 
                                  <a href=\"book.html\" class=\"book-tag book-tag-blacky\">eBook</a>, <a href=\"book.html\" class=\"book-tag book-tag-blacky\">Softcover</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Categories: 
                                  <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Adventures</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>.
                                </div>
                              </div>
                              <span class=\"line-blacky\"></span>
                    <a href=\"book.html\" class=\"book-price main-color\">Price:
                      <span class=\"price-number-after\">10\$</span>
                    </a>
                            </div>
                </div>
              </div>
              <!--END BOOK PART -->
            </div>
          </div>
          <!--START PAGE-NUMBER -->
          <ul class=\"page-number\">
                <li><a href=\"\"><i class=\"fa fa-angle-double-left\" aria-hidden=\"true\"></i></a></li>
                <li><a href=\"\"><i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i></a></li>
                <li><a href=\"\">1</a></li>
                <li><a href=\"\" class=\"active\">2</a></li>
                <li><a href=\"\">3</a></li>
                <li><a href=\"\">4</a></li>
                <li><a href=\"\">5</a></li>
                <li><a href=\"\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>
                <li><a href=\"\"><i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i></a></li>
              </ul>
              <!--END PAGE-NUMBER -->
        </div>
      </div>
    </div>
    <!--END BOOKSPAGE-CONTENT Section -->
   

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 417
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 418
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "books.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  559 => 418,  550 => 417,  154 => 31,  150 => 30,  146 => 29,  142 => 28,  138 => 27,  134 => 26,  130 => 25,  126 => 24,  122 => 23,  118 => 22,  114 => 21,  110 => 20,  106 => 19,  102 => 18,  98 => 17,  85 => 6,  76 => 5,  58 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Home{% endblock %}

{% block body %}

  <!--START BOOKSPAGE-BACKGROUND SECTION-->
    <div class=\"bookspage-background pages-background\">
      <h1>Our Books</h1>
    </div>
    <!--END BOOKSPAGE-BACKGROUND SECTION-->
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
        <!-- End Tool Box Section -->
    <!--START BOOKSPAGE-CONTENT Section -->
    <div class=\"bookspage-content wrapper\">
      <div class=\"container\">
        <div class=\"bookspage-body\">
          <div class=\"bookspage-content-head\">
            <h2 class=\"main-color\">Our Books</h2>
            <span class=\"first-line\"></span>
          </div>
          <div class=\"parts books-list\">
            <div class=\"row\">
              <!--START BOOK PART -->
              <div class=\"book-part col-xs-12 col-sm-6 col-md-3\">
                <div class=\"book-cart\">
                    <img src=\"images/image-200x250.jpg\" alt=\"Design & Web design\">
                    <div class=\"icons\">
                      <a><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-star\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-share-alt\" aria-hidden=\"true\"></i></a>
                    </div>
                    <div class=\"divy\">
                              <div class=\"book-desc\">
                                  <a href=\"book.html\" class=\"head head-blacky\">Design & Web design</a>
                                  <span class=\"line-blacky\"></span>
                                <div class=\"book-tags book-tag-blacky\">Author: 
                                  <a href=\"author-profile.html\" class=\"book-tag book-tag-blacky\"> Ahmed Hamdy</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Format: 
                                  <a href=\"book.html\" class=\"book-tag book-tag-blacky\">eBook</a>, <a href=\"book.html\" class=\"book-tag book-tag-blacky\">Softcover</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Categories: 
                                  <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Adventures</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>.
                                </div>
                              </div>
                              <span class=\"line-blacky\"></span>
                    <a href=\"book.html\" class=\"book-price main-color\">Price:
                      <span class=\"price-number-after\">10\$</span>
                    </a>
                            </div>
                </div>
              </div>
              <!--END BOOK PART -->
              <!--START BOOK PART -->
              <div class=\"book-part col-xs-12 col-sm-6 col-md-3\">
                <div class=\"book-cart\">
                    <img src=\"images/image-200x250.jpg\" alt=\"Nature Package\">
                    <div class=\"icons\">
                      <a><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-star\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-share-alt\" aria-hidden=\"true\"></i></a>
                    </div>
                    <div class=\"divy\">
                              <div class=\"book-desc\">
                                <a href=\"book.html\" class=\"head head-blacky\">Nature Package</a>
                                <span class=\"line-blacky\"></span>
                                <div class=\"book-tags book-tag-blacky\">Author: 
                                  <a href=\"author-profile.html\" class=\"book-tag book-tag-blacky\"> Ahmed Hamdy</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Format: 
                                  <a href=\"book.html\" class=\"book-tag book-tag-blacky\">eBook</a>, <a href=\"book.html\" class=\"book-tag book-tag-blacky\">Softcover</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Categories: 
                                  <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Adventures</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>.
                                </div>
                              </div>
                              <span class=\"line-blacky\"></span>
                    <a href=\"book.html\" class=\"book-price main-color\">Price:
                      <span class=\"price-number-after\">10\$</span>
                    </a>
                            </div>
                </div>
              </div>
              <!--END BOOK PART -->
              <!--START BOOK PART -->
              <div class=\"book-part col-xs-12 col-sm-6 col-md-3\">
                <div class=\"book-cart\">
                    <img src=\"images/image-200x250.jpg\" alt=\"Design & Web design\">
                    <div class=\"icons\">
                      <a><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-star\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-share-alt\" aria-hidden=\"true\"></i></a>
                    </div>
                    <div class=\"divy\">
                              <div class=\"book-desc\">
                                <a href=\"book.html\" class=\"head head-blacky\">Design & Web design</a>
                                <span class=\"line-blacky\"></span>
                                <div class=\"book-tags book-tag-blacky\">Author: 
                                  <a href=\"author-profile.html\" class=\"book-tag book-tag-blacky\"> Ahmed Hamdy</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Format: 
                                  <a href=\"book.html\" class=\"book-tag book-tag-blacky\">eBook</a>, <a href=\"book.html\" class=\"book-tag book-tag-blacky\">Softcover</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Categories: 
                                  <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Adventures</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>.
                                </div>
                              </div>
                              <span class=\"line-blacky\"></span>
                    <a href=\"book.html\" class=\"book-price main-color\">Price:
                      <span class=\"price-number-after\">10\$</span>
                    </a>
                            </div>
                </div>
              </div>
              <!--END BOOK PART -->
              <!--START BOOK PART -->
              <div class=\"book-part col-xs-12 col-sm-6 col-md-3\">
                <div class=\"book-cart\">
                  <img src=\"images/image-200x250.jpg\" alt=\"Dictionary\">
                  <div class=\"icons\">
                    <a><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-star\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-share-alt\" aria-hidden=\"true\"></i></a>
                  </div>  
                  <div class=\"divy\">
                              <div class=\"book-desc\">
                                <a href=\"book.html\" class=\"head head-blacky\">English Dictionary</a>
                                <span class=\"line-blacky\"></span>
                                <div class=\"book-tags book-tag-blacky\">Author: 
                                  <a href=\"author-profile.html\" class=\"book-tag book-tag-blacky\"> Ahmed Hamdy</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Format: 
                                  <a href=\"book.html\" class=\"book-tag book-tag-blacky\">eBook</a>, <a href=\"book.html\" class=\"book-tag book-tag-blacky\">Softcover</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Categories: 
                                  <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Adventures</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>.
                                </div>
                              </div>
                              <span class=\"line-blacky\"></span>
                    <a href=\"book.html\" class=\"book-price main-color\">Price:
                      <span class=\"price-number-after\">10\$</span>
                    </a>
                            </div>
                </div>
              </div>
              <!--END BOOK PART -->
              <!--START BOOK PART -->
              <div class=\"book-part col-xs-12 col-sm-6 col-md-3\">
                <div class=\"book-cart\">
                    <img src=\"images/image-200x250.jpg\" alt=\"Design & Web design\">
                    <div class=\"icons\">
                      <a><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-star\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-share-alt\" aria-hidden=\"true\"></i></a>
                    </div>
                    <div class=\"divy\">
                              <div class=\"book-desc\">
                                  <a href=\"book.html\" class=\"head head-blacky\">Design & Web design</a>
                                  <span class=\"line-blacky\"></span>
                                <div class=\"book-tags book-tag-blacky\">Author: 
                                  <a href=\"author-profile.html\" class=\"book-tag book-tag-blacky\"> Ahmed Hamdy</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Format: 
                                  <a href=\"book.html\" class=\"book-tag book-tag-blacky\">eBook</a>, <a href=\"book.html\" class=\"book-tag book-tag-blacky\">Softcover</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Categories: 
                                  <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Adventures</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>.
                                </div>
                              </div>
                              <span class=\"line-blacky\"></span>
                    <a href=\"book.html\" class=\"book-price main-color\">Price:
                      <span class=\"price-number-after\">10\$</span>
                    </a>
                            </div>
                </div>
              </div>
              <!--END BOOK PART -->
              <!--START BOOK PART -->
              <div class=\"book-part col-xs-12 col-sm-6 col-md-3\">
                <div class=\"book-cart\">
                    <img src=\"images/image-200x250.jpg\" alt=\"Nature Package\">
                    <div class=\"icons\">
                      <a><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-star\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-share-alt\" aria-hidden=\"true\"></i></a>
                    </div>
                    <div class=\"divy\">
                              <div class=\"book-desc\">
                                <a href=\"book.html\" class=\"head head-blacky\">Nature Package</a>
                                <span class=\"line-blacky\"></span>
                                <div class=\"book-tags book-tag-blacky\">Author: 
                                  <a href=\"author-profile.html\" class=\"book-tag book-tag-blacky\"> Ahmed Hamdy</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Format: 
                                  <a href=\"book.html\" class=\"book-tag book-tag-blacky\">eBook</a>, <a href=\"book.html\" class=\"book-tag book-tag-blacky\">Softcover</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Categories: 
                                  <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Adventures</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>.
                                </div>
                              </div>
                              <span class=\"line-blacky\"></span>
                    <a href=\"book.html\" class=\"book-price main-color\">Price:
                      <span class=\"price-number-after\">10\$</span>
                    </a>
                            </div>
                </div>
              </div>
              <!--END BOOK PART -->
              <!--START BOOK PART -->
              <div class=\"book-part col-xs-12 col-sm-6 col-md-3\">
                <div class=\"book-cart\">
                    <img src=\"images/image-200x250.jpg\" alt=\"Design & Web design\">
                    <div class=\"icons\">
                      <a><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-star\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-share-alt\" aria-hidden=\"true\"></i></a>
                    </div>
                    <div class=\"divy\">
                              <div class=\"book-desc\">
                                <a href=\"book.html\" class=\"head head-blacky\">Design & Web design</a>
                                <span class=\"line-blacky\"></span>
                                <div class=\"book-tags book-tag-blacky\">Author: 
                                  <a href=\"author-profile.html\" class=\"book-tag book-tag-blacky\"> Ahmed Hamdy</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Format: 
                                  <a href=\"book.html\" class=\"book-tag book-tag-blacky\">eBook</a>, <a href=\"book.html\" class=\"book-tag book-tag-blacky\">Softcover</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Categories: 
                                  <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Adventures</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>.
                                </div>
                              </div>
                              <span class=\"line-blacky\"></span>
                    <a href=\"book.html\" class=\"book-price main-color\">Price:
                      <span class=\"price-number-after\">10\$</span>
                    </a>
                            </div>
                </div>
              </div>
              <!--END BOOK PART -->
              <!--START BOOK PART -->
              <div class=\"book-part col-xs-12 col-sm-6 col-md-3\">
                <div class=\"book-cart\">
                  <img src=\"images/image-200x250.jpg\" alt=\"Dictionary\">
                  <div class=\"icons\">
                    <a><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-star\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-share-alt\" aria-hidden=\"true\"></i></a>
                  </div>  
                  <div class=\"divy\">
                              <div class=\"book-desc\">
                                <a href=\"book.html\" class=\"head head-blacky\">English Dictionary</a>
                                <span class=\"line-blacky\"></span>
                                <div class=\"book-tags book-tag-blacky\">Author: 
                                  <a href=\"author-profile.html\" class=\"book-tag book-tag-blacky\"> Ahmed Hamdy</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Format: 
                                  <a href=\"book.html\" class=\"book-tag book-tag-blacky\">eBook</a>, <a href=\"book.html\" class=\"book-tag book-tag-blacky\">Softcover</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Categories: 
                                  <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Adventures</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>.
                                </div>
                              </div>
                              <span class=\"line-blacky\"></span>
                    <a href=\"book.html\" class=\"book-price main-color\">Price:
                      <span class=\"price-number-after\">10\$</span>
                    </a>
                            </div>
                </div>
              </div>
              <!--END BOOK PART -->
              <!--START BOOK PART -->
              <div class=\"book-part col-xs-12 col-sm-6 col-md-3\">
                <div class=\"book-cart\">
                    <img src=\"images/image-200x250.jpg\" alt=\"Design & Web design\">
                    <div class=\"icons\">
                      <a><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-star\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-share-alt\" aria-hidden=\"true\"></i></a>
                    </div>
                    <div class=\"divy\">
                              <div class=\"book-desc\">
                                  <a href=\"book.html\" class=\"head head-blacky\">Design & Web design</a>
                                  <span class=\"line-blacky\"></span>
                                <div class=\"book-tags book-tag-blacky\">Author: 
                                  <a href=\"author-profile.html\" class=\"book-tag book-tag-blacky\"> Ahmed Hamdy</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Format: 
                                  <a href=\"book.html\" class=\"book-tag book-tag-blacky\">eBook</a>, <a href=\"book.html\" class=\"book-tag book-tag-blacky\">Softcover</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Categories: 
                                  <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Adventures</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>.
                                </div>
                              </div>
                              <span class=\"line-blacky\"></span>
                    <a href=\"book.html\" class=\"book-price main-color\">Price:
                      <span class=\"price-number-after\">10\$</span>
                    </a>
                            </div>
                </div>
              </div>
              <!--END BOOK PART -->
              <!--START BOOK PART -->
              <div class=\"book-part col-xs-12 col-sm-6 col-md-3\">
                <div class=\"book-cart\">
                    <img src=\"images/image-200x250.jpg\" alt=\"Nature Package\">
                    <div class=\"icons\">
                      <a><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-star\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-share-alt\" aria-hidden=\"true\"></i></a>
                    </div>
                    <div class=\"divy\">
                              <div class=\"book-desc\">
                                <a href=\"book.html\" class=\"head head-blacky\">Nature Package</a>
                                <span class=\"line-blacky\"></span>
                                <div class=\"book-tags book-tag-blacky\">Author: 
                                  <a href=\"author-profile.html\" class=\"book-tag book-tag-blacky\"> Ahmed Hamdy</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Format: 
                                  <a href=\"book.html\" class=\"book-tag book-tag-blacky\">eBook</a>, <a href=\"book.html\" class=\"book-tag book-tag-blacky\">Softcover</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Categories: 
                                  <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Adventures</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>.
                                </div>
                              </div>
                              <span class=\"line-blacky\"></span>
                    <a href=\"book.html\" class=\"book-price main-color\">Price:
                      <span class=\"price-number-after\">10\$</span>
                    </a>
                            </div>
                </div>
              </div>
              <!--END BOOK PART -->
              <!--START BOOK PART -->
              <div class=\"book-part col-xs-12 col-sm-6 col-md-3\">
                <div class=\"book-cart\">
                    <img src=\"images/image-200x250.jpg\" alt=\"Design & Web design\">
                    <div class=\"icons\">
                      <a><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-star\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-share-alt\" aria-hidden=\"true\"></i></a>
                    </div>
                    <div class=\"divy\">
                              <div class=\"book-desc\">
                                <a href=\"book.html\" class=\"head head-blacky\">Design & Web design</a>
                                <span class=\"line-blacky\"></span>
                                <div class=\"book-tags book-tag-blacky\">Author: 
                                  <a href=\"author-profile.html\" class=\"book-tag book-tag-blacky\"> Ahmed Hamdy</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Format: 
                                  <a href=\"book.html\" class=\"book-tag book-tag-blacky\">eBook</a>, <a href=\"book.html\" class=\"book-tag book-tag-blacky\">Softcover</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Categories: 
                                  <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Adventures</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>.
                                </div>
                              </div>
                              <span class=\"line-blacky\"></span>
                    <a href=\"book.html\" class=\"book-price main-color\">Price:
                      <span class=\"price-number-after\">10\$</span>
                    </a>
                            </div>
                </div>
              </div>
              <!--END BOOK PART -->
              <!--START BOOK PART -->
              <div class=\"book-part col-xs-12 col-sm-6 col-md-3\">
                <div class=\"book-cart\">
                  <img src=\"images/image-200x250.jpg\" alt=\"Dictionary\">
                  <div class=\"icons\">
                    <a><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-star\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-share-alt\" aria-hidden=\"true\"></i></a>
                  </div>  
                  <div class=\"divy\">
                              <div class=\"book-desc\">
                                <a href=\"book.html\" class=\"head head-blacky\">English Dictionary</a>
                                <span class=\"line-blacky\"></span>
                                <div class=\"book-tags book-tag-blacky\">Author: 
                                  <a href=\"author-profile.html\" class=\"book-tag book-tag-blacky\"> Ahmed Hamdy</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Format: 
                                  <a href=\"book.html\" class=\"book-tag book-tag-blacky\">eBook</a>, <a href=\"book.html\" class=\"book-tag book-tag-blacky\">Softcover</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Categories: 
                                  <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Adventures</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>, <a href=\"books.html\" class=\"book-tag book-tag-blacky\">Action</a>.
                                </div>
                              </div>
                              <span class=\"line-blacky\"></span>
                    <a href=\"book.html\" class=\"book-price main-color\">Price:
                      <span class=\"price-number-after\">10\$</span>
                    </a>
                            </div>
                </div>
              </div>
              <!--END BOOK PART -->
            </div>
          </div>
          <!--START PAGE-NUMBER -->
          <ul class=\"page-number\">
                <li><a href=\"\"><i class=\"fa fa-angle-double-left\" aria-hidden=\"true\"></i></a></li>
                <li><a href=\"\"><i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i></a></li>
                <li><a href=\"\">1</a></li>
                <li><a href=\"\" class=\"active\">2</a></li>
                <li><a href=\"\">3</a></li>
                <li><a href=\"\">4</a></li>
                <li><a href=\"\">5</a></li>
                <li><a href=\"\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a></li>
                <li><a href=\"\"><i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i></a></li>
              </ul>
              <!--END PAGE-NUMBER -->
        </div>
      </div>
    </div>
    <!--END BOOKSPAGE-CONTENT Section -->
   

{% endblock %}
{% block javascripts %}

{% endblock %}", "books.html.twig", "C:\\Users\\asus\\Desktop\\PFE\\Gestion De Bibliotheque\\templates\\books.html.twig");
    }
}
