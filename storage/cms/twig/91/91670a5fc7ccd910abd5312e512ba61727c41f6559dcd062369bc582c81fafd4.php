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

/* /Applications/MAMP/htdocs/itl/themes/SAN/partials/feilds/packages.htm */
class __TwigTemplate_d408a30d8b4c446ebe1ebcb28c3ebc084f9e09ab4e9a2d2996c881275b48045e extends \Twig\Template
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
        echo "<option value=\"any\">Country</option>
";
        // line 2
        if ((twig_length_filter($this->env, ($context["allpackages"] ?? null)) > 0)) {
            // line 3
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, ($context["allpackages"] ?? null), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "country", [], "any", false, false, true, 3) <=> twig_get_attribute($this->env, $this->source, ($context["b"] ?? null), "country", [], "any", false, false, true, 3)); }));
            foreach ($context['_seq'] as $context["_key"] => $context["countryname"]) {
                // line 4
                echo "\t<option value=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["countryname"], "slug", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
                echo "\" ";
                if ((get("package") == twig_get_attribute($this->env, $this->source, $context["countryname"], "slug", [], "any", false, false, true, 4))) {
                    // line 5
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["countryname"], "country", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
                echo "
\t</option>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['countryname'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/itl/themes/SAN/partials/feilds/packages.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 5,  49 => 4,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<option value=\"any\">Country</option>
{% if allpackages|length > 0 %}
\t{% for countryname in allpackages | sort((a, b) => a.country <=> b.country ) %}
\t<option value=\"{{countryname.slug}}\" {% if get(\"package\")==countryname.slug
\t\t%} selected=\"selected\" {% endif %}>{{countryname.country}}
\t</option>
\t{% endfor %}
{% endif %}", "/Applications/MAMP/htdocs/itl/themes/SAN/partials/feilds/packages.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2, "for" => 3);
        static $filters = array("length" => 2, "sort" => 3, "escape" => 4);
        static $functions = array("get" => 4);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['length', 'sort', 'escape'],
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
