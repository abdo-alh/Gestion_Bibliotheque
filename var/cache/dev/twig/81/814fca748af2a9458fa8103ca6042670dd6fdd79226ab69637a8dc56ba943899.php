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

/* contact.html.twig */
class __TwigTemplate_9e3708eb42f7635ce32cb82703836a63fa882aeff52133fbf456f221deb5e3c1 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 6
        $this->parent = $this->loadTemplate("base.html.twig", "contact.html.twig", 6);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact.html.twig"));

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

        echo "Home";
        
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
        echo "    <!--START CONTACT-PAGE-BACKGROUND SECTION -->
        <div class=\"contact-page-background pages-background\">
            <h1>Contact Us</h1>
        </div>
        <!--END CONTACT-PAGE-BACKGROUND SECTION -->

        <!-- Start Tool Box SECTION -->
        <div class=\"option-box\">
            <div class=\"color-option\">
                <h2>Color Selector</h2>
                <ul class=\"list-unstyled\">
                               <li data-value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/default_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/emerald_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/turquoise_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/sunflower_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/orange_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/carrot_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/alizarin_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/concrete_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/amethyst_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/wetasphalt_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/sienna_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/hotpink_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/darkgoldenrod_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/lightskyblue_theme.css"), "html", null, true);
        echo "\"></li>
                    <li data-value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/black_theme.css"), "html", null, true);
        echo "\"></li>
                </ul>
            </div>
            <i class=\"fa fa-gear fa-2x gear-check\"></i>
        </div>
        <!-- End Tool Box SECTION -->
        <!--START CONTACT-PAGE-CONTENT SECTION -->
        <div class=\"contact-page-content wrapper\">
            <div class=\"container\">
                <div class=\"company-informations\">
                    <div class=\"company-informations-head\">
                        <h2 class=\"main-color\">Who are we</h2>
                        <span class=\"first-line\"></span>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>  
        </div>
        <!--END CONTACT-PAGE-CONTENT SECTION -->
        <!--START GOOGLEMAP SECTION -->       
        <div id=\"googleMap\"></div> 
        <!--END GOOGLEMAP SECTION -->
        <!--START CONTACT-INFO SECTION -->
        <div class=\"contact-info wrapper\">
            <div class=\"container\">
                <div class=\"contact-info-head\">
                    <h2 class=\"main-color\">Contact Information</h2>
                    <span class=\"first-line\"></span>
                </div>
                <div class=\"info-desc\">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                    <div class=\"info\">
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-6 col-md-3 contact-details\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>Address: Cairo, Egypt.</div>
                            <div class=\"col-xs-12 col-sm-6 col-md-3 contact-details\"><i class=\"fa fa-phone\" aria-hidden=\"true\"></i>Phone: +20 2 12345678</div>
                            <div class=\"col-xs-12 col-sm-6 col-md-3 contact-details\"><i class=\"fa fa-fax\" aria-hidden=\"true\"></i>Fax: +20 2 12345678</div>  
                            <div class=\"col-xs-12 col-sm-6 col-md-3 contact-details\"><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>Email: <a href=\"#\">mail@mail.com</a>
                            </div>
                        </div>
                    </div>      
                </div>
            </div>    
        </div>
        <!--END CONTACT-INFO SECTION -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 82
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 83
        echo "
    <script>
        function initialize() {
            var myCenter = new google.maps.LatLng(30.0478477, 31.2336481);
            var mapProp = {
                center: myCenter,
                zoom: 14,
                scrollwheel: false,
                draggable: true,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById(\"googleMap\"), mapProp);
            var marker = new google.maps.Marker({
                position: myCenter
            });
            marker.setMap(map);
        }
    </script>
    <!--Delete this googlemap's key (AIzaSyCdCpTZx3Dl5ZcKfKlDlXgz_wDe1UX) from this script and put your googlemap's key . You can get your googlemap's key from that link (https://developers.google.com/maps/documentation/javascript/get-api-key?refresh=1) -->
    <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCdCpTZx3Dl5ZcKfKlDlXgz_wDe1UX_EOo&callback=initialize\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 83,  210 => 82,  154 => 36,  150 => 35,  146 => 34,  142 => 33,  138 => 32,  134 => 31,  130 => 30,  126 => 29,  122 => 28,  118 => 27,  114 => 26,  110 => 25,  106 => 24,  102 => 23,  98 => 22,  85 => 11,  76 => 10,  58 => 8,  27 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("




        {% extends 'base.html.twig' %}

{% block title %}Home{% endblock %}

{% block body %}
    <!--START CONTACT-PAGE-BACKGROUND SECTION -->
        <div class=\"contact-page-background pages-background\">
            <h1>Contact Us</h1>
        </div>
        <!--END CONTACT-PAGE-BACKGROUND SECTION -->

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
        <!--START CONTACT-PAGE-CONTENT SECTION -->
        <div class=\"contact-page-content wrapper\">
            <div class=\"container\">
                <div class=\"company-informations\">
                    <div class=\"company-informations-head\">
                        <h2 class=\"main-color\">Who are we</h2>
                        <span class=\"first-line\"></span>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>  
        </div>
        <!--END CONTACT-PAGE-CONTENT SECTION -->
        <!--START GOOGLEMAP SECTION -->       
        <div id=\"googleMap\"></div> 
        <!--END GOOGLEMAP SECTION -->
        <!--START CONTACT-INFO SECTION -->
        <div class=\"contact-info wrapper\">
            <div class=\"container\">
                <div class=\"contact-info-head\">
                    <h2 class=\"main-color\">Contact Information</h2>
                    <span class=\"first-line\"></span>
                </div>
                <div class=\"info-desc\">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                    <div class=\"info\">
                        <div class=\"row\">
                            <div class=\"col-xs-12 col-sm-6 col-md-3 contact-details\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>Address: Cairo, Egypt.</div>
                            <div class=\"col-xs-12 col-sm-6 col-md-3 contact-details\"><i class=\"fa fa-phone\" aria-hidden=\"true\"></i>Phone: +20 2 12345678</div>
                            <div class=\"col-xs-12 col-sm-6 col-md-3 contact-details\"><i class=\"fa fa-fax\" aria-hidden=\"true\"></i>Fax: +20 2 12345678</div>  
                            <div class=\"col-xs-12 col-sm-6 col-md-3 contact-details\"><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>Email: <a href=\"#\">mail@mail.com</a>
                            </div>
                        </div>
                    </div>      
                </div>
            </div>    
        </div>
        <!--END CONTACT-INFO SECTION -->

{% endblock %}
{% block javascripts %}

    <script>
        function initialize() {
            var myCenter = new google.maps.LatLng(30.0478477, 31.2336481);
            var mapProp = {
                center: myCenter,
                zoom: 14,
                scrollwheel: false,
                draggable: true,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById(\"googleMap\"), mapProp);
            var marker = new google.maps.Marker({
                position: myCenter
            });
            marker.setMap(map);
        }
    </script>
    <!--Delete this googlemap's key (AIzaSyCdCpTZx3Dl5ZcKfKlDlXgz_wDe1UX) from this script and put your googlemap's key . You can get your googlemap's key from that link (https://developers.google.com/maps/documentation/javascript/get-api-key?refresh=1) -->
    <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCdCpTZx3Dl5ZcKfKlDlXgz_wDe1UX_EOo&callback=initialize\"></script>

{% endblock %}", "contact.html.twig", "C:\\Users\\asus\\Desktop\\PFE\\Gestion De Bibliotheaque\\templates\\contact.html.twig");
    }
}
