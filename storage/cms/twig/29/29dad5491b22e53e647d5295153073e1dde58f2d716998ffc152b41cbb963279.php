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

/* /Applications/MAMP/htdocs/itl/themes/SAN/partials/site/header.htm */
class __TwigTemplate_880337b14b7462e358d2081a44aac05ef9dd08d7d88a08e20f6b2155f99f1f1b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<link rel=\"stylesheet\" type=\"text/css\"
    href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css\">
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js\"></script>
<script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/momentjs/latest/moment.min.js\"></script>
<script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js\"></script>
<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css\" />
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.5/css/lightbox.min.css\" integrity=\"sha512-xtV3HfYNbQXS/1R1jP53KbFcU9WXiSA1RFKzl5hRlJgdOJm4OxHCWYpskm6lN0xp0XtKGpAfVShpbvlFH3MDAA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
<link href=\"https://unpkg.com/aos@2.3.1/dist/aos.css\" rel=\"stylesheet\">
<script src=\"https://unpkg.com/aos@2.3.1/dist/aos.js\"></script>

<header class=\"header fixed-top\">
    <div class=\"container\">

        <div class=\"innermenu ";
        // line 15
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 15), "id", [], "any", false, false, true, 15) == "home")) ? ("d-lg-none") : (""));
        echo " \">
            <div class=\"burger-container ";
        // line 16
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 16), "id", [], "any", false, false, true, 16) == "home")) ? ("d-lg-none") : (""));
        echo "\">
                <div id=\"burger\">
                    <div class=\"bar topBar\"></div>
                    <div class=\"bar btmBar\"></div>
                </div>
            </div>
        </div>

        ";
        // line 24
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 24), "id", [], "any", false, false, true, 24) == "home")) {
            // line 25
            echo "        <nav id=\"menu\" class=\"main-menu d-none d-md-block\">
            ";
            // line 26
            $context['__cms_component_params'] = [];
            $context['__cms_component_params']['menu'] = "main"            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("staticMenu"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
            // line 27
            echo "        </nav>
        ";
        }
        // line 29
        echo "        <div id=\"logo\">
            <a href=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
                <img src=\"";
        // line 31
        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/logo.jpg"]);
        echo "\" width=\"100\" height=\"auto\" data-retina=\"true\" alt=\"\"
                    class=\"logo_normal\">
            </a>
        </div>
    </div>
</header>
<div class=\"mheader\">
    <div class=\"container\">
        ";
        // line 39
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['menu'] = "mobile"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("staticMenu"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 40
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/itl/themes/SAN/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 40,  102 => 39,  91 => 31,  87 => 30,  84 => 29,  80 => 27,  75 => 26,  72 => 25,  70 => 24,  59 => 16,  55 => 15,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link rel=\"stylesheet\" type=\"text/css\"
    href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css\">
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js\"></script>
<script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/momentjs/latest/moment.min.js\"></script>
<script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js\"></script>
<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css\" />
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.5/css/lightbox.min.css\" integrity=\"sha512-xtV3HfYNbQXS/1R1jP53KbFcU9WXiSA1RFKzl5hRlJgdOJm4OxHCWYpskm6lN0xp0XtKGpAfVShpbvlFH3MDAA==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
<link href=\"https://unpkg.com/aos@2.3.1/dist/aos.css\" rel=\"stylesheet\">
<script src=\"https://unpkg.com/aos@2.3.1/dist/aos.js\"></script>

<header class=\"header fixed-top\">
    <div class=\"container\">

        <div class=\"innermenu {{ this.page.id == 'home'?'d-lg-none':'' }} \">
            <div class=\"burger-container {{ this.page.id == 'home'?'d-lg-none':'' }}\">
                <div id=\"burger\">
                    <div class=\"bar topBar\"></div>
                    <div class=\"bar btmBar\"></div>
                </div>
            </div>
        </div>

        {% if this.page.id == 'home' %}
        <nav id=\"menu\" class=\"main-menu d-none d-md-block\">
            {% component 'staticMenu' menu=\"main\" %}
        </nav>
        {% endif %}
        <div id=\"logo\">
            <a href=\"{{'home'|page }}\">
                <img src=\"{{ 'assets/img/logo.jpg'|theme }}\" width=\"100\" height=\"auto\" data-retina=\"true\" alt=\"\"
                    class=\"logo_normal\">
            </a>
        </div>
    </div>
</header>
<div class=\"mheader\">
    <div class=\"container\">
        {% component 'staticMenu' menu=\"mobile\" %}
    </div>
</div>", "/Applications/MAMP/htdocs/itl/themes/SAN/partials/site/header.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 24, "component" => 26);
        static $filters = array("page" => 30, "theme" => 31);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'component'],
                ['page', 'theme'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
