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

/* /Applications/MAMP/htdocs/itl/themes/SAN/pages/search.htm */
class __TwigTemplate_eae995baaf0ed157e2e42148bd7d4ad5883994db101efe82fda687778b3f66fe extends \Twig\Template
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
        echo "<section class=\"hero_single version_2\">
    <div class=\"wrapper\" style=\"background-image: url(";
        // line 2
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 2), "banner", [], "any", false, false, true, 2), "path", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
        echo ")\">
        <div class=\"container\">
            <h4>SEARCH</h4>
            <h1 class=\"UniSansLight\">Packages</h1>
            <span class=\"line\"><em></em></span>
            <div style=\"padding-bottom:5%;\"></div>
        </div>
    </div>
</section>

";
        // line 12
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/innerform.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "
";
        // line 14
        $context["search_country"] = ((get("package")) ? (get("package")) : (get("package_value")));
        // line 15
        echo "
";
        // line 16
        if ((($context["search_country"] ?? null) == "Germany")) {
            // line 17
            echo "    <!-- ===============================
         GERMAN CHRISTMAS MARKET WIDGET
    ================================== -->
    <div class=\"weihnachts-widget-wrapper\">
        <div id=\"weihnachts-eventfinder\"></div>
        <script src=\"https://dzt-widgets.structr.com/weihnachts-widget.js?parent=weihnachts-eventfinder&lang=en&partner=itlworld&color=da4e41\"></script>
    </div>

    <style>
        /* --- Widget Wrapper --- */
        .weihnachts-widget-wrapper {
            width: 100%;
            max-width: 1200px;
            margin: 60px auto;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            position: relative;
            background: #fff;
            padding: 20px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
            border-radius: 8px;
            overflow: visible !important;
        }

        /* --- Widget Inner Container --- */
        #weihnachts-eventfinder {
            width: 100%;
            min-height: 900px;
            overflow: visible !important;
            position: relative;
        }

        /* --- Internal iFrame Styling --- */
        #weihnachts-eventfinder iframe {
            width: 100% !important;
            height: 2000px !important;
            border: none !important;
            display: block;
            overflow: auto !important;
            scrollbar-width: thin;
        }

        /* --- Scroll Handling for All Browsers --- */
        .weihnachts-widget-wrapper iframe {
            -webkit-overflow-scrolling: touch;
            overflow-y: auto !important;
        }

        /* --- Improve Performance --- */
        iframe {
            will-change: transform;
            backface-visibility: hidden;
        }

        /* --- Responsive Adjustments --- */
        @media (max-width: 768px) {
            .weihnachts-widget-wrapper {
                padding: 10px;
            }
            #weihnachts-eventfinder iframe {
                height: 1200px !important;
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Observe widget content and auto-adjust height
            const observer = new MutationObserver(() => {
                const iframe = document.querySelector('#weihnachts-eventfinder iframe');
                if (iframe && iframe.contentWindow && iframe.contentWindow.document?.body) {
                    const newHeight = iframe.contentWindow.document.body.scrollHeight;
                    if (newHeight > 0) iframe.style.height = newHeight + 'px';
                }
            });

            const target = document.getElementById('weihnachts-eventfinder');
            if (target) observer.observe(target, { childList: true, subtree: true });
        });
    </script>
";
        }
        // line 99
        echo "
<div class=\"clearfix\"></div>

<div class=\"bg_color_1 container mt-5 mb-5\">
    <!-- /carousel -->
    <div id=\"overview\">
        <div class=\"skipto\" data-skip=\"<?php echo @\$skip; ?>\" data-skipstart=\"0\">
            ";
        // line 106
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/package.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 107
        echo "        </div>
    </div>

    <div class=\"clearfix\"></div>
    ";
        // line 111
        if (($context["skip"] ?? null)) {
            // line 112
            echo "    <div class=\"load-more skip-btn\">
        <a class=\"loadmore\" data-noscroll=\"1\" onclick=\"itl.loadMore(this);\">
            <img src=\"";
            // line 114
            echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/images/add.svg"]);
            echo "\" class=\"img-fluid\" alt=\"\">
        </a>
    </div>
    ";
        }
        // line 118
        echo "</div>
<!-- /container -->

<div id=\"enquiry-popup\" class=\"white-popup mfp-hide\">
    ";
        // line 122
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/searchenquiryform"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 123
        echo "</div>

<div id=\"after-submit-popup\" class=\"white-popup mfp-hide\">
    <div id=\"sign-in-dialog\" class=\"zoom-anim-dialog\">
        <div class=\"modalbody\">
            <div class=\"small-dialog-header\">
                <h3>
                    <img src=\"themes/SAN/assets/images/mail.svg\" class=\"img-fluid mail\" alt=\"\">
                    Successfully sent
                </h3>
            </div>
        </div>
        <div style=\"padding: 80px 10px;\">
            <h4>Form has been submitted successfully!</h4>
        </div>
        <button title=\"Close (Esc)\" type=\"button\" class=\"mfp-close\"></button>
    </div>
</div>

<script>
    \$('.open-popup-link').magnificPopup({
        type: 'inline',
        showCloseBtn: true,
        callbacks: {
            open: function() {
                \$('#sign-in-dialog').append(\$('.mfp-close'));
            },
        },
        midClick: true
    });
</script>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/itl/themes/SAN/pages/search.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 123,  191 => 122,  185 => 118,  178 => 114,  174 => 112,  172 => 111,  166 => 107,  162 => 106,  153 => 99,  69 => 17,  67 => 16,  64 => 15,  62 => 14,  59 => 13,  55 => 12,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"hero_single version_2\">
    <div class=\"wrapper\" style=\"background-image: url({{builderDetails.record.banner.path}})\">
        <div class=\"container\">
            <h4>SEARCH</h4>
            <h1 class=\"UniSansLight\">Packages</h1>
            <span class=\"line\"><em></em></span>
            <div style=\"padding-bottom:5%;\"></div>
        </div>
    </div>
</section>

{% partial 'site/innerform.htm' %}

{% set search_country = get('package') ?: get('package_value') %}

{% if search_country == 'Germany' %}
    <!-- ===============================
         GERMAN CHRISTMAS MARKET WIDGET
    ================================== -->
    <div class=\"weihnachts-widget-wrapper\">
        <div id=\"weihnachts-eventfinder\"></div>
        <script src=\"https://dzt-widgets.structr.com/weihnachts-widget.js?parent=weihnachts-eventfinder&lang=en&partner=itlworld&color=da4e41\"></script>
    </div>

    <style>
        /* --- Widget Wrapper --- */
        .weihnachts-widget-wrapper {
            width: 100%;
            max-width: 1200px;
            margin: 60px auto;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            position: relative;
            background: #fff;
            padding: 20px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
            border-radius: 8px;
            overflow: visible !important;
        }

        /* --- Widget Inner Container --- */
        #weihnachts-eventfinder {
            width: 100%;
            min-height: 900px;
            overflow: visible !important;
            position: relative;
        }

        /* --- Internal iFrame Styling --- */
        #weihnachts-eventfinder iframe {
            width: 100% !important;
            height: 2000px !important;
            border: none !important;
            display: block;
            overflow: auto !important;
            scrollbar-width: thin;
        }

        /* --- Scroll Handling for All Browsers --- */
        .weihnachts-widget-wrapper iframe {
            -webkit-overflow-scrolling: touch;
            overflow-y: auto !important;
        }

        /* --- Improve Performance --- */
        iframe {
            will-change: transform;
            backface-visibility: hidden;
        }

        /* --- Responsive Adjustments --- */
        @media (max-width: 768px) {
            .weihnachts-widget-wrapper {
                padding: 10px;
            }
            #weihnachts-eventfinder iframe {
                height: 1200px !important;
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Observe widget content and auto-adjust height
            const observer = new MutationObserver(() => {
                const iframe = document.querySelector('#weihnachts-eventfinder iframe');
                if (iframe && iframe.contentWindow && iframe.contentWindow.document?.body) {
                    const newHeight = iframe.contentWindow.document.body.scrollHeight;
                    if (newHeight > 0) iframe.style.height = newHeight + 'px';
                }
            });

            const target = document.getElementById('weihnachts-eventfinder');
            if (target) observer.observe(target, { childList: true, subtree: true });
        });
    </script>
{% endif %}

<div class=\"clearfix\"></div>

<div class=\"bg_color_1 container mt-5 mb-5\">
    <!-- /carousel -->
    <div id=\"overview\">
        <div class=\"skipto\" data-skip=\"<?php echo @\$skip; ?>\" data-skipstart=\"0\">
            {% partial 'site/package.htm' %}
        </div>
    </div>

    <div class=\"clearfix\"></div>
    {% if skip %}
    <div class=\"load-more skip-btn\">
        <a class=\"loadmore\" data-noscroll=\"1\" onclick=\"itl.loadMore(this);\">
            <img src=\"{{ 'assets/images/add.svg'|theme }}\" class=\"img-fluid\" alt=\"\">
        </a>
    </div>
    {% endif %}
</div>
<!-- /container -->

<div id=\"enquiry-popup\" class=\"white-popup mfp-hide\">
    {% partial 'site/searchenquiryform' %}
</div>

<div id=\"after-submit-popup\" class=\"white-popup mfp-hide\">
    <div id=\"sign-in-dialog\" class=\"zoom-anim-dialog\">
        <div class=\"modalbody\">
            <div class=\"small-dialog-header\">
                <h3>
                    <img src=\"themes/SAN/assets/images/mail.svg\" class=\"img-fluid mail\" alt=\"\">
                    Successfully sent
                </h3>
            </div>
        </div>
        <div style=\"padding: 80px 10px;\">
            <h4>Form has been submitted successfully!</h4>
        </div>
        <button title=\"Close (Esc)\" type=\"button\" class=\"mfp-close\"></button>
    </div>
</div>

<script>
    \$('.open-popup-link').magnificPopup({
        type: 'inline',
        showCloseBtn: true,
        callbacks: {
            open: function() {
                \$('#sign-in-dialog').append(\$('.mfp-close'));
            },
        },
        midClick: true
    });
</script>", "/Applications/MAMP/htdocs/itl/themes/SAN/pages/search.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 12, "set" => 14, "if" => 16);
        static $filters = array("escape" => 2, "theme" => 114);
        static $functions = array("get" => 14);

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'set', 'if'],
                ['escape', 'theme'],
                ['get']
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
