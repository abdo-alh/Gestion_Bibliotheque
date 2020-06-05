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
class __TwigTemplate_1e2a4fb6f0fbb4d30aabbbc7cc7d42d580bff4d4165d808fde580e32fafb11dc extends \Twig\Template
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

        echo "Books";
        
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
     ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), 'form_start');
        echo "
     <div class=\"col-xs-12 col-sm-8 \"> ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "categorie", []), 'row', ["label" => false, "attr" => ["class" => "form-control input-block"]]);
        echo "</div>
    <div class=\"col-xs-12 col-sm-4 \"> <button   class=\"btn btn-primary\">Filter</button></div>
";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'form_end');
        echo "<br><br><br><br>
            <div class=\"row\">
             ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 52
            echo "              <!--START BOOK PART -->
              
              <div class=\"book-part col-xs-12 col-sm-6 col-md-3\">
                <div class=\"book-cart\">
                 <a href=\"";
            // line 56
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
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "name", []), "html", null, true);
            echo "</a></center>
                                <span class=\"line-blacky\"></span>
                                <div class=\"book-tags book-tag-blacky\">Author: 
                                  <a href=\"#\" class=\"book-tag book-tag-blacky\">";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["book"], "auteur", []), "name", []), "html", null, true);
            echo "</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Format: 
                                  <a href=\"#\" class=\"book-tag book-tag-blacky\">PDF</a>.
                                </div>
                                <div class=\"book-tags book-tag-blacky\">Categories: 
                                  <a href=\"#\" class=\"book-tag book-tag-blacky\">";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["book"], "categorie", []), "name", []), "html", null, true);
            echo "</a>
                                </div><br>
                              </div>
                              <span class=\"line-blacky\"></span>
                         <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_like", ["id" => twig_get_attribute($this->env, $this->source, $context["book"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-link js-like book-price\">
                            ";
            // line 76
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", []) && twig_get_attribute($this->env, $this->source, $context["book"], "isLikeByUser", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [])], "method"))) {
                // line 77
                echo "                                <i class=\"fas fa-thumbs-up\"></i>
                            ";
            } else {
                // line 79
                echo "                                <i class=\"far fa-thumbs-up\"></i>
                            ";
            }
            // line 81
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
        // line 90
        echo "  
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

    // line 113
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 114
        echo "<script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
 <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/like.js"), "html", null, true);
        echo "\"></script>
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
        return array (  304 => 115,  301 => 114,  292 => 113,  260 => 90,  243 => 81,  239 => 79,  235 => 77,  233 => 76,  229 => 75,  222 => 71,  213 => 65,  207 => 62,  196 => 56,  190 => 52,  186 => 51,  181 => 49,  176 => 47,  172 => 46,  154 => 31,  150 => 30,  146 => 29,  142 => 28,  138 => 27,  134 => 26,  130 => 25,  126 => 24,  122 => 23,  118 => 22,  114 => 21,  110 => 20,  106 => 19,  102 => 18,  98 => 17,  85 => 6,  76 => 5,  58 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Books{% endblock %}

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
     {{ form_start(form) }}
     <div class=\"col-xs-12 col-sm-8 \"> {{form_row(form.categorie,{'label':false,'attr':{'class': 'form-control input-block'}})}}</div>
    <div class=\"col-xs-12 col-sm-4 \"> <button   class=\"btn btn-primary\">Filter</button></div>
{{ form_end(form) }}<br><br><br><br>
            <div class=\"row\">
             {%for book in books %}
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
<script src=\"https://unpkg.com/axios/dist/axios.min.js\"></script>
 <script src=\"{{ asset('js/like.js') }}\"></script>
{% endblock %}", "books.html.twig", "C:\\xampp\\htdocs\\Gestion_De_Bibliotheque\\templates\\books.html.twig");
    }
}
