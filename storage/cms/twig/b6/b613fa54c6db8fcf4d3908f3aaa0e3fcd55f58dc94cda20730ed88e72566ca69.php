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

/* /Applications/MAMP/htdocs/itl/themes/SAN/layouts/default.htm */
class __TwigTemplate_f42553a31c2c8c667b6eb2672a012b392b6cfa58f538a43644214fd923c18986 extends \Twig\Template
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
        $context["countries"] = twig_get_attribute($this->env, $this->source, ($context["countriesList"] ?? null), "records", [], "any", false, false, true, 1);
        // line 2
        echo "
<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
<!--     <meta name=\"facebook-domain-verification\" content=\"9j0sz3wwdbbin14utcvo73eyh1b433\" />
 -->    <!-- Open Graph Meta Tags -->
    
    <meta name=\"generator\" content=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 11), "id", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "\">

    ";
        // line 13
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 13), "id", [], "any", false, false, true, 13) == "experiences")) {
            // line 14
            echo "    
        <title>";
            // line 15
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["emeta_title"] ?? null), 15, $this->source), "html", null, true);
            echo "</title>
        <meta name=\"title\" content=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["emeta_title"] ?? null), 16, $this->source), "html", null, true);
            echo "\">
        <meta name=\"description\" content=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["emeta_desc"] ?? null), 17, $this->source), "html", null, true);
            echo "\">
        <meta property=\"og:site_name\" content=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["emeta_title"] ?? null), 18, $this->source), "html", null, true);
            echo "\" />
        <meta property=\"og:title\" content=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["emeta_title"] ?? null), 19, $this->source), "html", null, true);
            echo "\" />
        <meta property=\"og:description\" content=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["emeta_desc"] ?? null), 20, $this->source), "html", null, true);
            echo "\" />
        <meta property=\"og:image\" content=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["emeta_image"] ?? null), 21, $this->source), "html", null, true);
            echo "\">
    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 22
($context["this"] ?? null), "page", [], "any", false, false, true, 22), "id", [], "any", false, false, true, 22) == "holidays")) {
            // line 23
            echo "        <title>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["holiday_meta_title"] ?? null), 23, $this->source), "html", null, true);
            echo "</title>
        <meta name=\"title\" content=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["holiday_meta_title"] ?? null), 24, $this->source), "html", null, true);
            echo "\">
        <meta name=\"description\" content=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["holiday_meta_desc"] ?? null), 25, $this->source), "html", null, true);
            echo "\">
        <meta property=\"og:site_name\" content=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["holiday_meta_title"] ?? null), 26, $this->source), "html", null, true);
            echo "\" />
        <meta property=\"og:title\" content=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["holiday_meta_title"] ?? null), 27, $this->source), "html", null, true);
            echo "\" />
        <meta property=\"og:description\" content=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["holiday_meta_desc"] ?? null), 28, $this->source), "html", null, true);
            echo "\" />
        <meta property=\"og:image\" content=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["emeta_image"] ?? null), 29, $this->source), "html", null, true);
            echo "\">
    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 30
($context["this"] ?? null), "page", [], "any", false, false, true, 30), "id", [], "any", false, false, true, 30) == "news-blog")) {
            // line 31
            echo "        <title>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["newsblog_meta_title"] ?? null), 31, $this->source), "html", null, true);
            echo "</title>
        <meta name=\"title\" content=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["newsblog_meta_title"] ?? null), 32, $this->source), "html", null, true);
            echo "\">
        <meta name=\"description\" content=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["newsblog_meta_desc"] ?? null), 33, $this->source), "html", null, true);
            echo "\">
        <meta property=\"og:site_name\" content=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["newsblog_meta_title"] ?? null), 34, $this->source), "html", null, true);
            echo "\" />
        <meta property=\"og:title\" content=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["newsblog_meta_title"] ?? null), 35, $this->source), "html", null, true);
            echo "\" />
        <meta property=\"og:description\" content=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["newsblog_meta_desc"] ?? null), 36, $this->source), "html", null, true);
            echo "\" />
        <meta property=\"og:image\" content=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["emeta_image"] ?? null), 37, $this->source), "html", null, true);
            echo "\">
        <meta property=\"og:url\" content=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["eurl"] ?? null), 38, $this->source), "html", null, true);
            echo "\" />
        <meta property=\"og:image:width\" content=\"400\">
        <meta property=\"og:image:height\" content=\"300\">
        <meta property=\"og:image:alt\" content=\"something\">
    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 42
($context["this"] ?? null), "page", [], "any", false, false, true, 42), "id", [], "any", false, false, true, 42) == "single-detail")) {
            // line 43
            echo "          <title>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["nmeta_title"] ?? null), 43, $this->source), "html", null, true);
            echo "</title>
        <meta name=\"title\" content=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["nmeta_title"] ?? null), 44, $this->source), "html", null, true);
            echo "\">
        <meta name=\"description\" content=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["nmeta_desc"] ?? null), 45, $this->source), "html", null, true);
            echo "\">
        <meta property=\"og:site_name\" content=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["nmeta_title"] ?? null), 46, $this->source), "html", null, true);
            echo "\" />
        <meta property=\"og:title\" content=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["nmeta_title"] ?? null), 47, $this->source), "html", null, true);
            echo "\" />
        <meta property=\"og:description\" content=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["nmeta_desc"] ?? null), 48, $this->source), "html", null, true);
            echo "\" />
        <meta property=\"og:image\" content=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["nmeta_image"] ?? null), 49, $this->source), "html", null, true);
            echo "\" />
        <meta property=\"og:image:width\" content=\"1200\" />
        <meta property=\"og:image:height\" content=\"630\" />
        <meta property=\"og:published_time\" content=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["blogDate"] ?? null), 52, $this->source), "html", null, true);
            echo "\">
       
        
        ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 55
($context["this"] ?? null), "page", [], "any", false, false, true, 55), "id", [], "any", false, false, true, 55) == "travel-management")) {
            // line 56
            echo "        <title>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["tm_meta_title"] ?? null), 56, $this->source), "html", null, true);
            echo "</title>
        <meta name=\"title\" content=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["tm_meta_title"] ?? null), 57, $this->source), "html", null, true);
            echo "\">
        <meta name=\"description\" content=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["tm_meta_desc"] ?? null), 58, $this->source), "html", null, true);
            echo "\">
        <meta property=\"og:site_name\" content=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["tm_meta_title"] ?? null), 59, $this->source), "html", null, true);
            echo "\" />
        <meta property=\"og:title\" content=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["tm_meta_title"] ?? null), 60, $this->source), "html", null, true);
            echo "\" />
        <meta property=\"og:description\" content=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["tm_meta_desc"] ?? null), 61, $this->source), "html", null, true);
            echo "\" />
        <meta property=\"og:image\" content=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["emeta_image"] ?? null), 62, $this->source), "html", null, true);
            echo "\">
    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 63
($context["this"] ?? null), "page", [], "any", false, false, true, 63), "id", [], "any", false, false, true, 63) == "services")) {
            // line 64
            echo "        <title>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_meta_title"] ?? null), 64, $this->source), "html", null, true);
            echo "</title>
        <meta name=\"title\" content=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_meta_title"] ?? null), 65, $this->source), "html", null, true);
            echo "\">
        <meta name=\"description\" content=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_meta_desc"] ?? null), 66, $this->source), "html", null, true);
            echo "\">
        <meta property=\"og:site_name\" content=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_meta_title"] ?? null), 67, $this->source), "html", null, true);
            echo "\" />
        <meta property=\"og:title\" content=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_meta_title"] ?? null), 68, $this->source), "html", null, true);
            echo "\" />
        <meta property=\"og:description\" content=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_meta_desc"] ?? null), 69, $this->source), "html", null, true);
            echo "\" />
        <meta property=\"og:image\" content=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["emeta_image"] ?? null), 70, $this->source), "html", null, true);
            echo "\">
    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 71
($context["this"] ?? null), "page", [], "any", false, false, true, 71), "id", [], "any", false, false, true, 71) == "careers")) {
            // line 72
            echo "        <title>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["careers_meta_title"] ?? null), 72, $this->source), "html", null, true);
            echo "</title>
        <meta name=\"title\" content=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["careers_meta_title"] ?? null), 73, $this->source), "html", null, true);
            echo "\">
        <meta name=\"description\" content=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["careers_meta_desc"] ?? null), 74, $this->source), "html", null, true);
            echo "\">
        <meta property=\"og:site_name\" content=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["careers_meta_title"] ?? null), 75, $this->source), "html", null, true);
            echo "\" />
        <meta property=\"og:title\" content=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["careers_meta_title"] ?? null), 76, $this->source), "html", null, true);
            echo "\" />
        <meta property=\"og:description\" content=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["careers_meta_desc"] ?? null), 77, $this->source), "html", null, true);
            echo "\" />
        <meta property=\"og:image\" content=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["emeta_image"] ?? null), 78, $this->source), "html", null, true);
            echo "\">
    ";
        } else {
            // line 80
            echo "        <title>";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 80), "meta_title", [], "any", false, false, true, 80)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 80), "meta_title", [], "any", false, false, true, 80)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 80), "title", [], "any", false, false, true, 80))), "html", null, true);
            echo "</title>
        <meta name=\"title\" content=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 81), "meta_title", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
            echo "\">
        <meta name=\"description\" content=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 82), "meta_description", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
            echo "\">
        <meta property=\"og:site_name\" content=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 83), "meta_title", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
            echo "\" />
        <meta property=\"og:description\" content=\"";
            // line 84
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 84), "meta_description", [], "any", false, false, true, 84)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 84), "meta_description", [], "any", false, false, true, 84)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 84), "meta_description", [], "any", false, false, true, 84))), "html", null, true);
            echo "\" />
    ";
        }
        // line 86
        echo "
    <meta property=\"og:url\" content=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["eurl"] ?? null), 87, $this->source), "html", null, true);
        echo "\" />

    

    <!-- Twitter Meta Tags -->
    <meta name=\"twitter:card\" content=\"summary_large_image\" />
    <meta name=\"twitter:title\" content=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["emeta_title"] ?? null), 93, $this->source), "html", null, true);
        echo "\" />
    <meta name=\"twitter:description\" content=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["emeta_desc"] ?? null), 94, $this->source), "html", null, true);
        echo "\" />
    <meta name=\"twitter:image\" content=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["emeta_image"] ?? null), 95, $this->source), "html", null, true);
        echo "\" />

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no, user-scalable=0\">

    <meta property=\"og:locale\" content=\"en_US\" />
    <meta property=\"og:type\" content=\"website\" />

    ";
        // line 102
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 103
        echo "    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/css/app.css"]);
        echo "\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 104
        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/css/vendors.css"]);
        echo "\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 105
        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/css/style.css"]);
        echo "\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 106
        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/css/style1.css"]);
        echo "\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 107
        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/css/intlTelInput.css"]);
        echo "\" />
    <link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
    <link rel=\"shortcut icon\" href=\"";
        // line 109
        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/favicon.png"]);
        echo "\">
    <script>
        website = \"<?php echo setting_all('website'); ?>\";
    </script>
    <script src=\"";
        // line 113
        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/js/bundle.js"]);
        echo "\"></script>
    <script src=\"";
        // line 114
        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/js/main.js"]);
        echo "\"></script>

    <style>
        .usiful-links ul{
            margin-top: 10px;
        }
        .ic-box:nth-child(even) .custom-accordions button {
  float: left;
  padding-left: 0;
  padding-right: 0;
}
.conditions_btn {
    padding-left: 20px !important;
}
.window .mheader.menu-opened ul.menu li.has-child span a {
  pointer-events: none;
}
.contact-wrapper p a {
    font-weight: 800;
}
.container_check .checkmark:after{
    left: 6px;
    top: 2px;
}

@media only screen and (max-width: 600px) {
    .ic-box:nth-child(even) .custom-accordions button:after{
            left: -2px;
    }
    </style>
    <!-- Google tag (gtag.js) --> <script async src=\"https://www.googletagmanager.com/gtag/js?id=G-DC81CDVYJ5\"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-DC81CDVYJ5'); </script>
</head>

<body>

    <?php echo setting_all('body_tag'); ?>
    <div class=\"window\">
        <div id=\"head\">";
        // line 151
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo " </div>
        <main id=\"content\">
            ";
        // line 153
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 154
        echo "        </main>
        ";
        // line 155
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 156
        echo "    </div>

    <!-- Scripts -->
    ";
        // line 159
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        echo '<script src="/modules/system/assets/js/snowboard/build/snowboard.base.debug.js?v=1.1.8"></script>'.PHP_EOL;
        echo '<script src="/modules/system/assets/js/snowboard/build/snowboard.request.js?v=1.1.8"></script>'.PHP_EOL;
        echo '<script src="/modules/system/assets/js/snowboard/build/snowboard.data-attr.js?v=1.1.8"></script>'.PHP_EOL;
        echo '<script src="/modules/system/assets/js/snowboard/build/snowboard.extras.js?v=1.1.8"></script>'.PHP_EOL;
        // line 160
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 161
        echo "    <script src=\"";
        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/js/intlTelInput.min.js"]);
        echo "\"></script>
    <script src=\"";
        // line 162
        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/js/countrySync.js"]);
        echo "\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
    <script>
        AOS.init();

        input = document.querySelectorAll(\".phone\");

        for (let i = 0; i < input.length; i++) {
            // init plugin
            var iti = window.intlTelInput(input[i], {
                utilsScript: \"../../themes/SAN/assets/js/utils.js?1638200991544\"
            });
            var userloccode = \"";
        // line 174
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_country_code"] ?? null), 174, $this->source), "html", null, true);
        echo "\";
            if(userloccode != ''){
                iti.setCountry(\"";
        // line 176
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_country_code"] ?? null), 176, $this->source), "html", null, true);
        echo "\");
            } else {
                iti.setCountry(\"ae\");
            }

            input[i].addEventListener('countrychange', function (e) {
                // code for country change event
            });
        }
    </script>

    <!-- Zendesk Chat Script -->
    <script type=\"text/javascript\">
        window.\$zopim || (function (d, s) {
            var z = \$zopim = function (c) { z._.push(c) }, \$ = z.s =
                d.createElement(s), e = d.getElementsByTagName(s)[0]; z.set = function (o) {
                    z.set._.push(o)
                }; z._ = []; z.set._ = []; \$.async = !0; \$.setAttribute(\"charset\", \"utf-8\");
            \$.src = \"https://v2.zopim.com/?3Zg0nAV9unOZzANTJvY07bhBreMHjCA5\"; z.t = +new Date; \$.
                type = \"text/javascript\"; e.parentNode.insertBefore(\$, e)
        })(document, \"script\");

        \$(document).ready(function() {
            \$('.itlselect').select2();
        });
        
        
jQuery(document).ready(function () {
    function toggleArrows() {
        let carousel = jQuery(\"#carouselExampleIndicators\");
        let itemsCount = carousel.find(\".carousel-inner .carousel-item\").length;

        if (itemsCount > 1) {
            carousel.addClass(\"show_arrows\");
        } else {
            carousel.removeClass(\"show_arrows\");
        }
    }

    toggleArrows();
});

    </script>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/itl/themes/SAN/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  476 => 176,  471 => 174,  456 => 162,  451 => 161,  447 => 160,  441 => 159,  436 => 156,  432 => 155,  429 => 154,  427 => 153,  420 => 151,  380 => 114,  376 => 113,  369 => 109,  364 => 107,  360 => 106,  356 => 105,  352 => 104,  347 => 103,  344 => 102,  334 => 95,  330 => 94,  326 => 93,  317 => 87,  314 => 86,  309 => 84,  305 => 83,  301 => 82,  297 => 81,  292 => 80,  287 => 78,  283 => 77,  279 => 76,  275 => 75,  271 => 74,  267 => 73,  262 => 72,  260 => 71,  256 => 70,  252 => 69,  248 => 68,  244 => 67,  240 => 66,  236 => 65,  231 => 64,  229 => 63,  225 => 62,  221 => 61,  217 => 60,  213 => 59,  209 => 58,  205 => 57,  200 => 56,  198 => 55,  192 => 52,  186 => 49,  182 => 48,  178 => 47,  174 => 46,  170 => 45,  166 => 44,  161 => 43,  159 => 42,  152 => 38,  148 => 37,  144 => 36,  140 => 35,  136 => 34,  132 => 33,  128 => 32,  123 => 31,  121 => 30,  117 => 29,  113 => 28,  109 => 27,  105 => 26,  101 => 25,  97 => 24,  92 => 23,  90 => 22,  86 => 21,  82 => 20,  78 => 19,  74 => 18,  70 => 17,  66 => 16,  62 => 15,  59 => 14,  57 => 13,  52 => 11,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set countries = countriesList.records %}

<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
<!--     <meta name=\"facebook-domain-verification\" content=\"9j0sz3wwdbbin14utcvo73eyh1b433\" />
 -->    <!-- Open Graph Meta Tags -->
    
    <meta name=\"generator\" content=\"{{ this.page.id }}\">

    {% if this.page.id == 'experiences' %}
    
        <title>{{ emeta_title }}</title>
        <meta name=\"title\" content=\"{{ emeta_title }}\">
        <meta name=\"description\" content=\"{{ emeta_desc }}\">
        <meta property=\"og:site_name\" content=\"{{ emeta_title }}\" />
        <meta property=\"og:title\" content=\"{{ emeta_title }}\" />
        <meta property=\"og:description\" content=\"{{ emeta_desc }}\" />
        <meta property=\"og:image\" content=\"{{ emeta_image }}\">
    {% elseif this.page.id == 'holidays' %}
        <title>{{ holiday_meta_title }}</title>
        <meta name=\"title\" content=\"{{ holiday_meta_title }}\">
        <meta name=\"description\" content=\"{{ holiday_meta_desc }}\">
        <meta property=\"og:site_name\" content=\"{{ holiday_meta_title }}\" />
        <meta property=\"og:title\" content=\"{{ holiday_meta_title }}\" />
        <meta property=\"og:description\" content=\"{{ holiday_meta_desc }}\" />
        <meta property=\"og:image\" content=\"{{ emeta_image }}\">
    {% elseif this.page.id == 'news-blog' %}
        <title>{{ newsblog_meta_title }}</title>
        <meta name=\"title\" content=\"{{ newsblog_meta_title }}\">
        <meta name=\"description\" content=\"{{ newsblog_meta_desc }}\">
        <meta property=\"og:site_name\" content=\"{{ newsblog_meta_title }}\" />
        <meta property=\"og:title\" content=\"{{ newsblog_meta_title }}\" />
        <meta property=\"og:description\" content=\"{{ newsblog_meta_desc }}\" />
        <meta property=\"og:image\" content=\"{{ emeta_image }}\">
        <meta property=\"og:url\" content=\"{{ eurl }}\" />
        <meta property=\"og:image:width\" content=\"400\">
        <meta property=\"og:image:height\" content=\"300\">
        <meta property=\"og:image:alt\" content=\"something\">
    {% elseif this.page.id == 'single-detail' %}
          <title>{{ nmeta_title }}</title>
        <meta name=\"title\" content=\"{{ nmeta_title }}\">
        <meta name=\"description\" content=\"{{ nmeta_desc }}\">
        <meta property=\"og:site_name\" content=\"{{ nmeta_title }}\" />
        <meta property=\"og:title\" content=\"{{ nmeta_title }}\" />
        <meta property=\"og:description\" content=\"{{ nmeta_desc }}\" />
        <meta property=\"og:image\" content=\"{{ nmeta_image }}\" />
        <meta property=\"og:image:width\" content=\"1200\" />
        <meta property=\"og:image:height\" content=\"630\" />
        <meta property=\"og:published_time\" content=\"{{ blogDate }}\">
       
        
        {% elseif this.page.id == 'travel-management' %}
        <title>{{ tm_meta_title }}</title>
        <meta name=\"title\" content=\"{{ tm_meta_title }}\">
        <meta name=\"description\" content=\"{{ tm_meta_desc }}\">
        <meta property=\"og:site_name\" content=\"{{ tm_meta_title }}\" />
        <meta property=\"og:title\" content=\"{{ tm_meta_title }}\" />
        <meta property=\"og:description\" content=\"{{ tm_meta_desc }}\" />
        <meta property=\"og:image\" content=\"{{ emeta_image }}\">
    {% elseif this.page.id == 'services' %}
        <title>{{ services_meta_title }}</title>
        <meta name=\"title\" content=\"{{ services_meta_title }}\">
        <meta name=\"description\" content=\"{{ services_meta_desc }}\">
        <meta property=\"og:site_name\" content=\"{{ services_meta_title }}\" />
        <meta property=\"og:title\" content=\"{{ services_meta_title }}\" />
        <meta property=\"og:description\" content=\"{{ services_meta_desc }}\" />
        <meta property=\"og:image\" content=\"{{ emeta_image }}\">
    {% elseif this.page.id == 'careers' %}
        <title>{{ careers_meta_title }}</title>
        <meta name=\"title\" content=\"{{ careers_meta_title }}\">
        <meta name=\"description\" content=\"{{ careers_meta_desc }}\">
        <meta property=\"og:site_name\" content=\"{{ careers_meta_title }}\" />
        <meta property=\"og:title\" content=\"{{ careers_meta_title }}\" />
        <meta property=\"og:description\" content=\"{{ careers_meta_desc }}\" />
        <meta property=\"og:image\" content=\"{{ emeta_image }}\">
    {% else %}
        <title>{{ this.page.meta_title ? this.page.meta_title : this.page.title }}</title>
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta property=\"og:site_name\" content=\"{{ this.page.meta_title }}\" />
        <meta property=\"og:description\" content=\"{{ this.page.meta_description ? this.page.meta_description : this.page.meta_description }}\" />
    {% endif %}

    <meta property=\"og:url\" content=\"{{ eurl }}\" />

    

    <!-- Twitter Meta Tags -->
    <meta name=\"twitter:card\" content=\"summary_large_image\" />
    <meta name=\"twitter:title\" content=\"{{ emeta_title }}\" />
    <meta name=\"twitter:description\" content=\"{{ emeta_desc }}\" />
    <meta name=\"twitter:image\" content=\"{{ emeta_image }}\" />

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no, user-scalable=0\">

    <meta property=\"og:locale\" content=\"en_US\" />
    <meta property=\"og:type\" content=\"website\" />

    {% styles %}
    <link type=\"text/css\" rel=\"stylesheet\" href=\"{{ 'assets/css/app.css'|theme }}\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"{{ 'assets/css/vendors.css'|theme }}\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"{{ 'assets/css/style.css'|theme }}\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"{{ 'assets/css/style1.css'|theme }}\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"{{ 'assets/css/intlTelInput.css'|theme }}\" />
    <link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
    <link rel=\"shortcut icon\" href=\"{{ 'assets/img/favicon.png'|theme }}\">
    <script>
        website = \"<?php echo setting_all('website'); ?>\";
    </script>
    <script src=\"{{ 'assets/js/bundle.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/main.js'|theme }}\"></script>

    <style>
        .usiful-links ul{
            margin-top: 10px;
        }
        .ic-box:nth-child(even) .custom-accordions button {
  float: left;
  padding-left: 0;
  padding-right: 0;
}
.conditions_btn {
    padding-left: 20px !important;
}
.window .mheader.menu-opened ul.menu li.has-child span a {
  pointer-events: none;
}
.contact-wrapper p a {
    font-weight: 800;
}
.container_check .checkmark:after{
    left: 6px;
    top: 2px;
}

@media only screen and (max-width: 600px) {
    .ic-box:nth-child(even) .custom-accordions button:after{
            left: -2px;
    }
    </style>
    <!-- Google tag (gtag.js) --> <script async src=\"https://www.googletagmanager.com/gtag/js?id=G-DC81CDVYJ5\"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-DC81CDVYJ5'); </script>
</head>

<body>

    <?php echo setting_all('body_tag'); ?>
    <div class=\"window\">
        <div id=\"head\">{% partial 'site/header' %} </div>
        <main id=\"content\">
            {% page %}
        </main>
        {% partial 'site/footer' %}
    </div>

    <!-- Scripts -->
    {% snowboard all %}
    {% scripts %}
    <script src=\"{{ 'assets/js/intlTelInput.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/countrySync.js'|theme }}\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
    <script>
        AOS.init();

        input = document.querySelectorAll(\".phone\");

        for (let i = 0; i < input.length; i++) {
            // init plugin
            var iti = window.intlTelInput(input[i], {
                utilsScript: \"../../themes/SAN/assets/js/utils.js?1638200991544\"
            });
            var userloccode = \"{{user_country_code}}\";
            if(userloccode != ''){
                iti.setCountry(\"{{user_country_code}}\");
            } else {
                iti.setCountry(\"ae\");
            }

            input[i].addEventListener('countrychange', function (e) {
                // code for country change event
            });
        }
    </script>

    <!-- Zendesk Chat Script -->
    <script type=\"text/javascript\">
        window.\$zopim || (function (d, s) {
            var z = \$zopim = function (c) { z._.push(c) }, \$ = z.s =
                d.createElement(s), e = d.getElementsByTagName(s)[0]; z.set = function (o) {
                    z.set._.push(o)
                }; z._ = []; z.set._ = []; \$.async = !0; \$.setAttribute(\"charset\", \"utf-8\");
            \$.src = \"https://v2.zopim.com/?3Zg0nAV9unOZzANTJvY07bhBreMHjCA5\"; z.t = +new Date; \$.
                type = \"text/javascript\"; e.parentNode.insertBefore(\$, e)
        })(document, \"script\");

        \$(document).ready(function() {
            \$('.itlselect').select2();
        });
        
        
jQuery(document).ready(function () {
    function toggleArrows() {
        let carousel = jQuery(\"#carouselExampleIndicators\");
        let itemsCount = carousel.find(\".carousel-inner .carousel-item\").length;

        if (itemsCount > 1) {
            carousel.addClass(\"show_arrows\");
        } else {
            carousel.removeClass(\"show_arrows\");
        }
    }

    toggleArrows();
});

    </script>

</body>

</html>", "/Applications/MAMP/htdocs/itl/themes/SAN/layouts/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 13, "styles" => 102, "partial" => 151, "page" => 153, "snowboard" => 159, "scripts" => 160);
        static $filters = array("escape" => 11, "theme" => 103);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'styles', 'partial', 'page', 'snowboard', 'scripts'],
                ['escape', 'theme'],
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
