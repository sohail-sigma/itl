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

/* /Applications/MAMP/htdocs/itl/themes/SAN/partials/site/newsletterform.htm */
class __TwigTemplate_1d357be7fd88a2f9a0d435237e433c876d1d09ce265b929aaff0eaf1970c46d8 extends \Twig\Template
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
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js?v=1.1.8"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js?v=1.1.8"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js?v=1.1.8"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css?v=1.1.8">'.PHP_EOL;
        unset($_minify);
        // line 2
        echo "
<form data-request=\"onSubmitNewsletterForm\" data-request-validate data-request-flash class=\"form-str\"
    data-request-files=\"true\" data-request-success=\"document.getElementById('newsletter_form').reset()\"
    id=\"newsletter_form\">
    <div class=\"row\">
        <div class=\"col-md-9\">
            <div class=\"form-group\">
                <input type=\"text\" name=\"full_name\" id=\"full_name\" class=\"form-control\" placeholder=\"Your name\"
                    required>
                <span data-validate-for=\"full_name\" class=\"text-danger pt-1 font-size-small\"></span>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-9\">
            <div class=\"form-group\">
                <input type=\"email\" name=\"email\" id=\"email\" class=\"form-control\" placeholder=\"Your email\" required>
                <span data-validate-for=\"email\" class=\"text-danger pt-1 font-size-small\"></span>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"form-group\">
                <input type=\"submit\" value=\"Subscribe\" id=\"submit-newsletter\">
            </div>
        </div>
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/itl/themes/SAN/partials/site/newsletterform.htm";
    }

    public function getDebugInfo()
    {
        return array (  50 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% framework extras %}

<form data-request=\"onSubmitNewsletterForm\" data-request-validate data-request-flash class=\"form-str\"
    data-request-files=\"true\" data-request-success=\"document.getElementById('newsletter_form').reset()\"
    id=\"newsletter_form\">
    <div class=\"row\">
        <div class=\"col-md-9\">
            <div class=\"form-group\">
                <input type=\"text\" name=\"full_name\" id=\"full_name\" class=\"form-control\" placeholder=\"Your name\"
                    required>
                <span data-validate-for=\"full_name\" class=\"text-danger pt-1 font-size-small\"></span>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-9\">
            <div class=\"form-group\">
                <input type=\"email\" name=\"email\" id=\"email\" class=\"form-control\" placeholder=\"Your email\" required>
                <span data-validate-for=\"email\" class=\"text-danger pt-1 font-size-small\"></span>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"form-group\">
                <input type=\"submit\" value=\"Subscribe\" id=\"submit-newsletter\">
            </div>
        </div>
    </div>
</form>", "/Applications/MAMP/htdocs/itl/themes/SAN/partials/site/newsletterform.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("framework" => 1);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['framework'],
                [],
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
