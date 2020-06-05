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
class __TwigTemplate_d61fe3d2da4a365af60bc8e2f3469ce790c1dde56b4026a20cb1db40b3a22f22 extends \Twig\Template
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
          <div class=\"book-cart-btn\">
            <a class=\"btn btn-lg new-releases-view-all-btn\" href=\"books.html\">view all <i class=\"fa fa-angle-right\"></i></a>
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
                                  <a href=\"#\" class=\"book-tag book-tag-blacky\">eBook</a>, <a href=\"#\" class=\"book-tag book-tag-blacky\">Softcover</a>.
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
                      <a><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-star\" aria-hidden=\"true\"></i></a>
                      <a><i class=\"fa fa-share-alt\" aria-hidden=\"true\"></i></a>
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
                    <a><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i></a>
                    <a><i class=\"fa fa-star\" aria-hidden=\"true\"></i></a>
                    <a><i class=\"fa fa-share-alt\" aria-hidden=\"true\"></i></a>
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
          <div class=\"book-cart-btn\">
            <a class=\"btn btn-lg comingsoon-view-all-btn\" href=\"books.html\">view all <i class=\"fa fa-angle-right\"></i></a>
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
            <h2 class=\"main-color\">Our News</h2>
            <span class=\"first-line\"></span>
          </div>
          <div class=\"accordian\">
              <ul>
              <li>
                <div class=\"image_title\">
                  <h3>Turkey</h3>
                  <i>\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.\"</i>
                  <a href=\"blog-post-page.html\" class=\"ournews-accordian-btn\">Find out more </a>
                </div>
                <img src=\"images/image-640x425.jpg\" alt=\"Istanbul Mescid\"/>
              </li>
              <li>
                <div class=\"image_title\">
                  <h3>Turkey</h3>
                  <i>\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.\"</i>
                  <a href=\"blog-post-page.html\" class=\"ournews-accordian-btn\">Find out more </a>
                </div>
                <img src=\"images/image-640x425.jpg\" alt=\"Ayasofya Mescid\"/>
              </li>
              <li>
                <div class=\"image_title\">
                  <h3>Egypt</h3>
                  <i>\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.\"</i>
                  <a href=\"blog-post-page.html\" class=\"ournews-accordian-btn\">Find out more </a>
                </div>
                <img src=\"images/image-640x425.jpg\" alt=\"Temple wall\"/>
              </li>
              <li>
                <div class=\"image_title\">
                  <h3>Egypt</h3>
                  <i>\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.\"</i>
                  <a href=\"blog-post-page.html\" class=\"ournews-accordian-btn\">Find out more </a>
                </div>
                <img src=\"images/image-640x425.jpg\" alt=\"Karnak Temple\"/>
              </li>
              <li>
                <div class=\"image_title\">
                  <h3>Egypt</h3>
                  <i>\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.\"</i>
                  <a href=\"blog-post-page.html\" class=\"ournews-accordian-btn\">Find out more </a>
                </div>
                <img src=\"images/image-640x425.jpg\" alt=\"Pyramids\"/>
              </li>
            </ul>
          </div>
          <div class=\"book-cart-btn\">
            <a class=\"btn btn-lg ournews-view-all-btn\" href=\"blog-post-page.html\">view all <i class=\"fa fa-angle-right\"></i></a>
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
                <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"><img src=\"images/image-640x425.jpg\" alt=\"Author\"></li>
                <li data-target=\"#myCarousel\" data-slide-to=\"1\"><img src=\"images/image-640x425.jpg\" alt=\"Author\"></li>
                <li data-target=\"#myCarousel\" data-slide-to=\"2\"><img src=\"images/image-640x425.jpg\" alt=\"Author\"></li>
                <li data-target=\"#myCarousel\" data-slide-to=\"3\"><img src=\"images/image-640x425.jpg\" alt=\"Author\"></li>
              </ol>
              <!-- Wrapper for slides -->
              <div class=\"carousel-inner\" role=\"listbox\">
                <div class=\"item author active\">
                    <a href=\"#\">Steve Jobs</a>
                    <i>\" The data-pause attribute pauses the carousel from going through the slides when the mouse pointer enters the carousel.In this example, we have set pause to \"hover\" (default), which will stop the slide when your mouse pointer enters the carousel. \"
                    </i>
                </div>
                <div class=\"item author\">
                    <a href=\"#\">Leah Culver</a>
                    <i>\" The data-pause attribute pauses the carousel from going through the slides when the mouse pointer enters the carousel.In this example, we have set pause to \"hover\" (default), which will stop the slide when your mouse pointer enters the carousel. \"
                    </i>
                </div>
                <div class=\"item author\">
                    <a href=\"#\">Marissa Mayer</a>
                    <i>\" The data-pause attribute pauses the carousel from going through the slides when the mouse pointer enters the carousel.In this example, we have set pause to \"hover\" (default), which will stop the slide when your mouse pointer enters the carousel. \"
                    </i>
                </div>
                <div class=\"item author\">
                    <a href=\"#\">Chris Coyier</a>
                    <i>\" The data-pause attribute pauses the carousel from going through the slides when the mouse pointer enters the carousel.In this example, we have set pause to \"hover\" (default), which will stop the slide when your mouse pointer enters the carousel. \"
                    </i>
                </div>
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
            <a class=\"btn btn-lg home-page-authors-btn\" href=\"books.html\">view all <i class=\"fa fa-angle-right\"></i></a>
          </div>
        </div>
      </div>
    </div>
    <!--END HOME-PAGE-SECTION-EIGHT SECTION -->
    <!--START HOME-PAGE-OUR-CLIENTS SECTION -->
    <div class=\"home-page-our-clients wrapper\">
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
        </div>
        <!--END HOME-PAGE-OUR-CLIENTS SECTION -->
        <!--START HOME-PAGE-YOUR-MESSAGE SECTION -->
        <div class=\"home-page-your-message wrapper\">
          <div class=\"container\">
            <div class=\"your-message-parts\">
              <div class=\"home-page-your-message-head\">
            <h2>Get In Touch</h2>
            <span class=\"second-line\"></span>
          </div>
          <form>
                        <div class=\"col-md-6 col-xs-12\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control input-lg\" placeholder=\"Username\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control input-lg\" placeholder=\"Email\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control input-lg\" placeholder=\"Phone\">
                            </div>
                        </div>
                        <div class=\"col-md-6 col-xs-12\">
                            <div class=\"form-group\">
                                <textarea class=\"form-control\" placeholder=\"Your Message\"></textarea>
                            </div>
                            <button class=\"btn btn-lg btn-block e-btn\" type=\"button\">Contact Us</button>
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

    // line 501
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 502
        echo "
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
        return array (  643 => 502,  634 => 501,  164 => 41,  160 => 40,  156 => 39,  152 => 38,  148 => 37,  144 => 36,  140 => 35,  136 => 34,  132 => 33,  128 => 32,  124 => 31,  120 => 30,  116 => 29,  112 => 28,  108 => 27,  85 => 6,  76 => 5,  58 => 3,  27 => 1,);
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
          <div class=\"book-cart-btn\">
            <a class=\"btn btn-lg new-releases-view-all-btn\" href=\"books.html\">view all <i class=\"fa fa-angle-right\"></i></a>
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
                                  <a href=\"#\" class=\"book-tag book-tag-blacky\">eBook</a>, <a href=\"#\" class=\"book-tag book-tag-blacky\">Softcover</a>.
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
                      <a><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i></a><a><i class=\"fa fa-star\" aria-hidden=\"true\"></i></a>
                      <a><i class=\"fa fa-share-alt\" aria-hidden=\"true\"></i></a>
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
                    <a><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i></a>
                    <a><i class=\"fa fa-star\" aria-hidden=\"true\"></i></a>
                    <a><i class=\"fa fa-share-alt\" aria-hidden=\"true\"></i></a>
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
          <div class=\"book-cart-btn\">
            <a class=\"btn btn-lg comingsoon-view-all-btn\" href=\"books.html\">view all <i class=\"fa fa-angle-right\"></i></a>
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
            <h2 class=\"main-color\">Our News</h2>
            <span class=\"first-line\"></span>
          </div>
          <div class=\"accordian\">
              <ul>
              <li>
                <div class=\"image_title\">
                  <h3>Turkey</h3>
                  <i>\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.\"</i>
                  <a href=\"blog-post-page.html\" class=\"ournews-accordian-btn\">Find out more </a>
                </div>
                <img src=\"images/image-640x425.jpg\" alt=\"Istanbul Mescid\"/>
              </li>
              <li>
                <div class=\"image_title\">
                  <h3>Turkey</h3>
                  <i>\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.\"</i>
                  <a href=\"blog-post-page.html\" class=\"ournews-accordian-btn\">Find out more </a>
                </div>
                <img src=\"images/image-640x425.jpg\" alt=\"Ayasofya Mescid\"/>
              </li>
              <li>
                <div class=\"image_title\">
                  <h3>Egypt</h3>
                  <i>\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.\"</i>
                  <a href=\"blog-post-page.html\" class=\"ournews-accordian-btn\">Find out more </a>
                </div>
                <img src=\"images/image-640x425.jpg\" alt=\"Temple wall\"/>
              </li>
              <li>
                <div class=\"image_title\">
                  <h3>Egypt</h3>
                  <i>\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.\"</i>
                  <a href=\"blog-post-page.html\" class=\"ournews-accordian-btn\">Find out more </a>
                </div>
                <img src=\"images/image-640x425.jpg\" alt=\"Karnak Temple\"/>
              </li>
              <li>
                <div class=\"image_title\">
                  <h3>Egypt</h3>
                  <i>\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.\"</i>
                  <a href=\"blog-post-page.html\" class=\"ournews-accordian-btn\">Find out more </a>
                </div>
                <img src=\"images/image-640x425.jpg\" alt=\"Pyramids\"/>
              </li>
            </ul>
          </div>
          <div class=\"book-cart-btn\">
            <a class=\"btn btn-lg ournews-view-all-btn\" href=\"blog-post-page.html\">view all <i class=\"fa fa-angle-right\"></i></a>
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
                <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"><img src=\"images/image-640x425.jpg\" alt=\"Author\"></li>
                <li data-target=\"#myCarousel\" data-slide-to=\"1\"><img src=\"images/image-640x425.jpg\" alt=\"Author\"></li>
                <li data-target=\"#myCarousel\" data-slide-to=\"2\"><img src=\"images/image-640x425.jpg\" alt=\"Author\"></li>
                <li data-target=\"#myCarousel\" data-slide-to=\"3\"><img src=\"images/image-640x425.jpg\" alt=\"Author\"></li>
              </ol>
              <!-- Wrapper for slides -->
              <div class=\"carousel-inner\" role=\"listbox\">
                <div class=\"item author active\">
                    <a href=\"#\">Steve Jobs</a>
                    <i>\" The data-pause attribute pauses the carousel from going through the slides when the mouse pointer enters the carousel.In this example, we have set pause to \"hover\" (default), which will stop the slide when your mouse pointer enters the carousel. \"
                    </i>
                </div>
                <div class=\"item author\">
                    <a href=\"#\">Leah Culver</a>
                    <i>\" The data-pause attribute pauses the carousel from going through the slides when the mouse pointer enters the carousel.In this example, we have set pause to \"hover\" (default), which will stop the slide when your mouse pointer enters the carousel. \"
                    </i>
                </div>
                <div class=\"item author\">
                    <a href=\"#\">Marissa Mayer</a>
                    <i>\" The data-pause attribute pauses the carousel from going through the slides when the mouse pointer enters the carousel.In this example, we have set pause to \"hover\" (default), which will stop the slide when your mouse pointer enters the carousel. \"
                    </i>
                </div>
                <div class=\"item author\">
                    <a href=\"#\">Chris Coyier</a>
                    <i>\" The data-pause attribute pauses the carousel from going through the slides when the mouse pointer enters the carousel.In this example, we have set pause to \"hover\" (default), which will stop the slide when your mouse pointer enters the carousel. \"
                    </i>
                </div>
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
            <a class=\"btn btn-lg home-page-authors-btn\" href=\"books.html\">view all <i class=\"fa fa-angle-right\"></i></a>
          </div>
        </div>
      </div>
    </div>
    <!--END HOME-PAGE-SECTION-EIGHT SECTION -->
    <!--START HOME-PAGE-OUR-CLIENTS SECTION -->
    <div class=\"home-page-our-clients wrapper\">
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
        </div>
        <!--END HOME-PAGE-OUR-CLIENTS SECTION -->
        <!--START HOME-PAGE-YOUR-MESSAGE SECTION -->
        <div class=\"home-page-your-message wrapper\">
          <div class=\"container\">
            <div class=\"your-message-parts\">
              <div class=\"home-page-your-message-head\">
            <h2>Get In Touch</h2>
            <span class=\"second-line\"></span>
          </div>
          <form>
                        <div class=\"col-md-6 col-xs-12\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control input-lg\" placeholder=\"Username\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control input-lg\" placeholder=\"Email\">
                            </div>
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control input-lg\" placeholder=\"Phone\">
                            </div>
                        </div>
                        <div class=\"col-md-6 col-xs-12\">
                            <div class=\"form-group\">
                                <textarea class=\"form-control\" placeholder=\"Your Message\"></textarea>
                            </div>
                            <button class=\"btn btn-lg btn-block e-btn\" type=\"button\">Contact Us</button>
                        </div>
                    </form>
            </div>
          </div>
        </div>
        <!--END HOME-PAGE-YOUR-MESSAGE SECTION -->
  
      

{% endblock %}
{% block javascripts %}

{% endblock %}", "index.html.twig", "C:\\Users\\asus\\Desktop\\PFE\\Gestion De Bibliotheque\\templates\\index.html.twig");
    }
}
