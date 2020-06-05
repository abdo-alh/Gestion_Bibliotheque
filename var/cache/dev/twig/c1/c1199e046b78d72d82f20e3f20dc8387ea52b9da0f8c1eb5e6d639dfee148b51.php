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

/* about.html.twig */
class __TwigTemplate_64f56fa60e08de8e9b392c9c10163408726ec35bb75c61cae9e7fb3cac3b8885 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 6
        $this->parent = $this->loadTemplate("base.html.twig", "about.html.twig", 6);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about.html.twig"));

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

        echo "About";
        
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
        echo "    <!--START ABOUT-PAGE-BACKGROUND SECTION -->
        <div style=\"background: url('img/template/about.png');background-size: cover;\" class=\"about-page-background pages-background\">
            <h1>About Us</h1>
        </div>
        <!--END ABOUT-PAGE-BACKGROUND SECTION-->
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
        <!--START ABOUT-SECTION SECTION-->      
        <div class=\"about-section-content wrapper\">
            <div class=\"container\">
                <div class=\"about-us\">
                    <div class=\"about-us-head\">
                        <h2 class=\"main-color\">Who are we</h2>
                        <span class=\"first-line\"></span>
                    </div>
                                        <p>Reading is a site created in 2019 following the great effort of young students in computer development (<b>Mohamed Bouynar</b> and <b>Mohamed Boutzi</b> & <b>Sahnae daif</b>) to help people and all interested, books are accessible to all .</p>
                </div>
            </div>
        </div>
        <!--END ABOUT-SECTION SECTION-->
        <!--START ABOUTUS-CONTENT SECTION-->
        <div class=\"aboutus-content wrapper\">
            <div class=\"container\">
                <div class=\"aboutus-info part-one\">
                    <img src=\"images/image-1280x853.jpg\" alt=\"Our Managers\">
                    <div class=\"aboutus-desc\">
                        <h3>Our Managers</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s </p>
                        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.but also the leap into electronic typesetting </p>
                    </div>
                </div>
                <div class=\"aboutus-info part-two\">
                    <img src=\"images/image-1280x853.jpg\" alt=\"Our Company\">
                    <div class=\"aboutus-desc\">
                        <h3>Our Company</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s </p>
                        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.but also the leap into electronic typesetting </p>
                    </div>
                </div>
                <div class=\"aboutus-info part-three\">
                    <img src=\"images/image-1280x853.jpg\" alt=\"Our Plan\">
                    <div class=\"aboutus-desc\">
                        <h3>Our Plan</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s </p>
                        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.but also the leap into electronic typesetting </p>
                    </div>
                </div>
                <div class=\"aboutus-info part-four\">
                    <img src=\"images/image-1280x853.jpg\" alt=\"Our Team\">
                    <div class=\"aboutus-desc\">
                        <h3>Our Team</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s </p>
                        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.but also the leap into electronic typesetting </p>
                    </div>
                </div>
            </div>
        </div>
        <!--END ABOUTUS-CONTENT SECTION-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 93
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 94
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 94,  176 => 93,  85 => 11,  76 => 10,  58 => 8,  27 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("




        {% extends 'base.html.twig' %}

{% block title %}About{% endblock %}

{% block body %}
    <!--START ABOUT-PAGE-BACKGROUND SECTION -->
        <div style=\"background: url('img/template/about.png');background-size: cover;\" class=\"about-page-background pages-background\">
            <h1>About Us</h1>
        </div>
        <!--END ABOUT-PAGE-BACKGROUND SECTION-->
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
        <!--START ABOUT-SECTION SECTION-->      
        <div class=\"about-section-content wrapper\">
            <div class=\"container\">
                <div class=\"about-us\">
                    <div class=\"about-us-head\">
                        <h2 class=\"main-color\">Who are we</h2>
                        <span class=\"first-line\"></span>
                    </div>
                                        <p>Reading is a site created in 2019 following the great effort of young students in computer development (<b>Mohamed Bouynar</b> and <b>Mohamed Boutzi</b> & <b>Sahnae daif</b>) to help people and all interested, books are accessible to all .</p>
                </div>
            </div>
        </div>
        <!--END ABOUT-SECTION SECTION-->
        <!--START ABOUTUS-CONTENT SECTION-->
        <div class=\"aboutus-content wrapper\">
            <div class=\"container\">
                <div class=\"aboutus-info part-one\">
                    <img src=\"images/image-1280x853.jpg\" alt=\"Our Managers\">
                    <div class=\"aboutus-desc\">
                        <h3>Our Managers</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s </p>
                        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.but also the leap into electronic typesetting </p>
                    </div>
                </div>
                <div class=\"aboutus-info part-two\">
                    <img src=\"images/image-1280x853.jpg\" alt=\"Our Company\">
                    <div class=\"aboutus-desc\">
                        <h3>Our Company</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s </p>
                        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.but also the leap into electronic typesetting </p>
                    </div>
                </div>
                <div class=\"aboutus-info part-three\">
                    <img src=\"images/image-1280x853.jpg\" alt=\"Our Plan\">
                    <div class=\"aboutus-desc\">
                        <h3>Our Plan</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s </p>
                        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.but also the leap into electronic typesetting </p>
                    </div>
                </div>
                <div class=\"aboutus-info part-four\">
                    <img src=\"images/image-1280x853.jpg\" alt=\"Our Team\">
                    <div class=\"aboutus-desc\">
                        <h3>Our Team</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s </p>
                        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.but also the leap into electronic typesetting </p>
                    </div>
                </div>
            </div>
        </div>
        <!--END ABOUTUS-CONTENT SECTION-->
{% endblock %}
{% block javascripts %}



{% endblock %}", "about.html.twig", "C:\\xampp\\htdocs\\Gestion_De_Bibliotheque\\templates\\about.html.twig");
    }
}
