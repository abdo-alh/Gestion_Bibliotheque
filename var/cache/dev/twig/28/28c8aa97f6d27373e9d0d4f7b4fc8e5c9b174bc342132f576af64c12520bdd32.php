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
class __TwigTemplate_5cd84561b68044064224ca8d4a393754c31af03de397670dfbfb88305f788ef8 extends \Twig\Template
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

        echo "Book-detail";
        
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
          <h2 class=\"main-color\">Book Details</h2><br>
          <span class=\"first-line\"></span>
        </div>  
        <div class=\"row book-content-body\">
          <div class=\"col-md-4\">
            <div class=\"book-img\">
              <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/books/" . twig_get_attribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 47, $this->source); })()), "image", []))), "html", null, true);
        echo "\" alt=\"SOME THINGS TAKE TIME\">
            </div>
          </div>
          <div class=\"col-md-8\">
            <div class=\"book-details\">
            <h6 style=\"color: gray;font-size: 30px;position: relative;left: 9px\">";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 52, $this->source); })()), "name", []), "html", null, true);
        echo "</h6>
              <div class=\"book-tags book-tag-blacky\">Author: 
                <a href=\"author-profile.html\" class=\"book-tag book-tag-blacky\">";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 54, $this->source); })()), "auteur", []), "name", []), "html", null, true);
        echo "</a>.
              </div>
              <div class=\"book-tags book-tag-blacky\">Format: PDF
              </div>
              <div class=\"book-tags book-tag-blacky\">Categories: ";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 58, $this->source); })()), "categorie", []), "name", []), "html", null, true);
        echo "
              </div><br>
                <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_like", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 60, $this->source); })()), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-link js-like book-price\">
                            ";
        // line 61
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", []) && twig_get_attribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 61, $this->source); })()), "isLikeByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [])], "method"))) {
            // line 62
            echo "                                <i class=\"fas fa-thumbs-up\"></i>
                            ";
        } else {
            // line 64
            echo "                                <i class=\"far fa-thumbs-up\"></i>
                            ";
        }
        // line 66
        echo "                            <span class=\"js-likes\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 66, $this->source); })()), "likes", [])), "html", null, true);
        echo "</span>
                            <span class=\"js-label\">J'aime</span>
                        </a>
            
              
                
              <ul class=\"nav nav-tabs\">
                  <li class=\"active\"><a data-toggle=\"tab\" href=\"tryit.asp@filename=trybs_tabs_dynamic&stacked=h.html#home\">About this book</a></li>
                  <li><a data-toggle=\"tab\" href=\"tryit.asp@filename=trybs_tabs_dynamic&stacked=h.html#menu3\">Reviews</a></li>
                  <li><a data-toggle=\"tab\" href=\"tryit.asp@filename=trybs_tabs_dynamic&stacked=h.html#menu1\">Show & Downoald</a></li>
              </ul>
              <div class=\"tab-content\">
                <!--START ABOUT THIS  BOOK-->
                  <div id=\"home\" class=\"tab-pane tab-pane-about-this-books fade in active\">
                      <p>";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 80, $this->source); })()), "description", []), "html", null, true);
        echo "</p>
                      <a class=\"more\">read more<i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i></a>
                  </div>
                  <!--END ABOUT THIS  BOOK-->
                     <!--START SOFTCOVER DETAILS-->
                  <div id=\"menu1\" class=\"tab-pane tab-pane-softcover-details fade\">
                    <div class=\"row\">
                      ";
        // line 87
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "user", [])) {
            // line 88
            echo "                      <dl style=\"position:relative;top: 10px;\" class=\"col-md-6\">
                        <dt>Show & downoald the book: <b style=\"color:red\">";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 89, $this->source); })()), "name", []), "html", null, true);
            echo "</b> from Here:</dt>
                        
                      </dl>
                      <dl class=\"col-md-4\">
                        <dt>  <div class=\"softcover-details-btn\">
                    <a href=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("pdf/" . twig_get_attribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 94, $this->source); })()), "pdf", []))), "html", null, true);
            echo "\" target=\"_blank\" class=\"btn btn-lg softcover-book-btn\" href=\"cart.html\">Show & Downoald <i class=\"fa fa-angle-right\"></i></a>
                  </div></dt>
                      </dl>

                      ";
        } else {
            // line 99
            echo "                      <dl style=\"position:relative;top: 10px;\" class=\"col-md-6\">
                        <dt>You can't downoald this book please <a href=\"";
            // line 100
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription");
            echo "\" target=\"_blank\">Register Here</a></dt>
                        
                      </dl>
                      <dl class=\"col-md-4\">
                        <dt>  <div class=\"softcover-details-btn\">
                    <a href=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("pdf/" . twig_get_attribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 105, $this->source); })()), "pdf", []))), "html", null, true);
            echo "\" target=\"_blank\"  ><button disabled=\"\" class=\"btn btn-lg softcover-book-btn\" > Show & Downoald </button></a>
                  </div></dt>
                      </dl>
                      <script type=\"text/javascript\">
                        
                      </script>
                      ";
        }
        // line 112
        echo "                      <dl class=\"col-md-2\"></dl>
                    </div>
                  
                  </div>
                  <!--END SOFTCOVER DETAILS-->
                  <!--START PERSON REVIEWS -->
                  <div id=\"menu3\" class=\"tab-pane tab-pane-reviews fade\">
                  
                 
                  
                    ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 122, $this->source); })()), "commentaires", []));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 123
            echo "                  <!--START PERSON REVIEW -->
                  <div class=\"person-comment\">
                   
                    <div class=\"comment-pic\">
                      <a>
                        <img src=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/users/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commentaire"], "user", []), "image", []))), "html", null, true);
            echo "\">
                      </a>
                    </div>
                    <div class=\"comment-body\">
                      <h4 class=\"comment-writer\">
                        <a>";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commentaire"], "user", []), "username", []), "html", null, true);
            echo "</a>
                      </h4>
                  
                      <pr style=\"color:gray\">";
            // line 136
            echo twig_get_attribute($this->env, $this->source, $context["commentaire"], "description", []);
            echo "</pr>
                      <div class=\"comment-info\">
                        <a class=\"comment-time post-capitalize\"> ";
            // line 138
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "createdAt", []), "d/m/y a H:i"), "html", null, true);
            echo "</a>
                      </div>
                    </div>
                
                  </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "                  <!--END PERSON REVIEW -->
                  <!--START POST REVIEW -->
                  <div class=\"post-review\">
                    <div class=\"subheading\">
                      <h3 class=\"post-capitalize\">post a review</h3>
                      <span></span>
                    </div>
                    ";
        // line 151
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 151, $this->source); })()), "user", [])) {
            // line 152
            echo "                    <div class=\"user-details\">
                      <form action=\"";
            // line 153
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 153, $this->source); })()), "id", [])]), "html", null, true);
            echo "\" method=\"post\">
                                      <div class=\"form-group\">
                                          <h5>Review :</h5>
                                          <textarea class=\"form-control \" name=\"description\" placeholder=\"Your Review\"></textarea>
                                      </div>
                             
                                    <button class=\"btn btn-block btn-lg book-reviews-btn post-capitalize\" type=\"submit\">submit a review</button>
                                </form>
                              </div>
                          ";
        } else {
            // line 163
            echo "                          <h2 style=\"color:gray\">please sign in to comment</h2>
                          ";
        }
        // line 165
        echo "                  </div>


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

    // line 181
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 182
        echo "<script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
 <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/like.js"), "html", null, true);
        echo "\"></script>
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
        return array (  403 => 183,  400 => 182,  391 => 181,  367 => 165,  363 => 163,  350 => 153,  347 => 152,  345 => 151,  336 => 144,  324 => 138,  319 => 136,  313 => 133,  305 => 128,  298 => 123,  294 => 122,  282 => 112,  272 => 105,  264 => 100,  261 => 99,  253 => 94,  245 => 89,  242 => 88,  240 => 87,  230 => 80,  212 => 66,  208 => 64,  204 => 62,  202 => 61,  198 => 60,  193 => 58,  186 => 54,  181 => 52,  173 => 47,  154 => 31,  150 => 30,  146 => 29,  142 => 28,  138 => 27,  134 => 26,  130 => 25,  126 => 24,  122 => 23,  118 => 22,  114 => 21,  110 => 20,  106 => 19,  102 => 18,  98 => 17,  85 => 6,  76 => 5,  58 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Book-detail{% endblock %}

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
          <h2 class=\"main-color\">Book Details</h2><br>
          <span class=\"first-line\"></span>
        </div>  
        <div class=\"row book-content-body\">
          <div class=\"col-md-4\">
            <div class=\"book-img\">
              <img src=\"{{ asset('img/books/' ~ book.image)  }}\" alt=\"SOME THINGS TAKE TIME\">
            </div>
          </div>
          <div class=\"col-md-8\">
            <div class=\"book-details\">
            <h6 style=\"color: gray;font-size: 30px;position: relative;left: 9px\">{{book.name}}</h6>
              <div class=\"book-tags book-tag-blacky\">Author: 
                <a href=\"author-profile.html\" class=\"book-tag book-tag-blacky\">{{book.auteur.name}}</a>.
              </div>
              <div class=\"book-tags book-tag-blacky\">Format: PDF
              </div>
              <div class=\"book-tags book-tag-blacky\">Categories: {{book.categorie.name}}
              </div><br>
                <a href=\"{{ path('book_like', {'id':book.id})}}\" class=\"btn btn-link js-like book-price\">
                            {% if app.user and book.isLikeByUser(app.user) %}
                                <i class=\"fas fa-thumbs-up\"></i>
                            {% else %}
                                <i class=\"far fa-thumbs-up\"></i>
                            {% endif %}
                            <span class=\"js-likes\">{{ book.likes | length }}</span>
                            <span class=\"js-label\">J'aime</span>
                        </a>
            
              
                
              <ul class=\"nav nav-tabs\">
                  <li class=\"active\"><a data-toggle=\"tab\" href=\"tryit.asp@filename=trybs_tabs_dynamic&stacked=h.html#home\">About this book</a></li>
                  <li><a data-toggle=\"tab\" href=\"tryit.asp@filename=trybs_tabs_dynamic&stacked=h.html#menu3\">Reviews</a></li>
                  <li><a data-toggle=\"tab\" href=\"tryit.asp@filename=trybs_tabs_dynamic&stacked=h.html#menu1\">Show & Downoald</a></li>
              </ul>
              <div class=\"tab-content\">
                <!--START ABOUT THIS  BOOK-->
                  <div id=\"home\" class=\"tab-pane tab-pane-about-this-books fade in active\">
                      <p>{{book.description}}</p>
                      <a class=\"more\">read more<i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i></a>
                  </div>
                  <!--END ABOUT THIS  BOOK-->
                     <!--START SOFTCOVER DETAILS-->
                  <div id=\"menu1\" class=\"tab-pane tab-pane-softcover-details fade\">
                    <div class=\"row\">
                      {%if app.user%}
                      <dl style=\"position:relative;top: 10px;\" class=\"col-md-6\">
                        <dt>Show & downoald the book: <b style=\"color:red\">{{book.name}}</b> from Here:</dt>
                        
                      </dl>
                      <dl class=\"col-md-4\">
                        <dt>  <div class=\"softcover-details-btn\">
                    <a href=\"{{ asset('pdf/' ~ book.pdf)  }}\" target=\"_blank\" class=\"btn btn-lg softcover-book-btn\" href=\"cart.html\">Show & Downoald <i class=\"fa fa-angle-right\"></i></a>
                  </div></dt>
                      </dl>

                      {%else%}
                      <dl style=\"position:relative;top: 10px;\" class=\"col-md-6\">
                        <dt>You can't downoald this book please <a href=\"{{path('inscription')}}\" target=\"_blank\">Register Here</a></dt>
                        
                      </dl>
                      <dl class=\"col-md-4\">
                        <dt>  <div class=\"softcover-details-btn\">
                    <a href=\"{{ asset('pdf/' ~ book.pdf)  }}\" target=\"_blank\"  ><button disabled=\"\" class=\"btn btn-lg softcover-book-btn\" > Show & Downoald </button></a>
                  </div></dt>
                      </dl>
                      <script type=\"text/javascript\">
                        
                      </script>
                      {%endif%}
                      <dl class=\"col-md-2\"></dl>
                    </div>
                  
                  </div>
                  <!--END SOFTCOVER DETAILS-->
                  <!--START PERSON REVIEWS -->
                  <div id=\"menu3\" class=\"tab-pane tab-pane-reviews fade\">
                  
                 
                  
                    {% for commentaire in book.commentaires %}
                  <!--START PERSON REVIEW -->
                  <div class=\"person-comment\">
                   
                    <div class=\"comment-pic\">
                      <a>
                        <img src=\"{{ asset('img/users/' ~ commentaire.user.image)  }}\">
                      </a>
                    </div>
                    <div class=\"comment-body\">
                      <h4 class=\"comment-writer\">
                        <a>{{commentaire.user.username}}</a>
                      </h4>
                  
                      <pr style=\"color:gray\">{{commentaire.description |raw}}</pr>
                      <div class=\"comment-info\">
                        <a class=\"comment-time post-capitalize\"> {{commentaire.createdAt | date('d/m/y a H:i')}}</a>
                      </div>
                    </div>
                
                  </div>
                      {% endfor %}
                  <!--END PERSON REVIEW -->
                  <!--START POST REVIEW -->
                  <div class=\"post-review\">
                    <div class=\"subheading\">
                      <h3 class=\"post-capitalize\">post a review</h3>
                      <span></span>
                    </div>
                    {%if app.user%}
                    <div class=\"user-details\">
                      <form action=\"{{path('comment', {'id':book.id})}}\" method=\"post\">
                                      <div class=\"form-group\">
                                          <h5>Review :</h5>
                                          <textarea class=\"form-control \" name=\"description\" placeholder=\"Your Review\"></textarea>
                                      </div>
                             
                                    <button class=\"btn btn-block btn-lg book-reviews-btn post-capitalize\" type=\"submit\">submit a review</button>
                                </form>
                              </div>
                          {%else%}
                          <h2 style=\"color:gray\">please sign in to comment</h2>
                          {%endif%}
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
<script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
 <script src=\"{{ asset('js/like.js') }}\"></script>
{% endblock %}", "book.html.twig", "C:\\xampp\\htdocs\\Gestion_De_Bibliotheque\\templates\\book.html.twig");
    }
}
