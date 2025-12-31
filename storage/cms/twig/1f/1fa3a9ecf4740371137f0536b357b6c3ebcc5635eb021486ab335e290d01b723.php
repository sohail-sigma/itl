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

/* /Applications/MAMP/htdocs/itl/plugins/winter/pages/components/staticmenu/default.htm */
class __TwigTemplate_cb4ac2fd6809dafabe24b74dd86f12bc2be4d5ceb2d54d701a8c7f6e68b7c437 extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "menuItems", [], "any", false, false, true, 1)) {
            // line 2
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "menu"], "method", false, false, true, 2) == "mobile")) {
                // line 3
                echo "    <ul class=\"menu\">
        ";
                // line 4
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "menuItems", [], "any", false, false, true, 4)                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::mobileitems")                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 5
                echo "    </ul>
    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 6
($context["__SELF__"] ?? null), "property", [0 => "menu"], "method", false, false, true, 6) == "footer")) {
                // line 7
                echo "    <ul class=\"links\">
        ";
                // line 8
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "menuItems", [], "any", false, false, true, 8)                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::footeritems")                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 9
                echo "    </ul>
    ";
            } else {
                // line 11
                echo "    <ul>
        ";
                // line 12
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "menuItems", [], "any", false, false, true, 12)                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::items")                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 13
                echo "    </ul>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/itl/plugins/winter/pages/components/staticmenu/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 13,  72 => 12,  69 => 11,  65 => 9,  60 => 8,  57 => 7,  55 => 6,  52 => 5,  47 => 4,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if __SELF__.menuItems %}
    {% if __SELF__.property('menu')=='mobile' %}
    <ul class=\"menu\">
        {% partial __SELF__ ~ \"::mobileitems\" items=__SELF__.menuItems %}
    </ul>
    {% elseif __SELF__.property('menu')=='footer' %}
    <ul class=\"links\">
        {% partial __SELF__ ~ \"::footeritems\" items=__SELF__.menuItems %}
    </ul>
    {% else %}
    <ul>
        {% partial __SELF__ ~ \"::items\" items=__SELF__.menuItems %}
    </ul>
    {% endif %}
{% endif %}", "/Applications/MAMP/htdocs/itl/plugins/winter/pages/components/staticmenu/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "partial" => 4);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'partial'],
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
