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

/* /Applications/MAMP/htdocs/itl/themes/SAN/partials/feilds/months.htm */
class __TwigTemplate_e7fe106b3d72889570a94eb975225486590234c21a795a5ba28112648aefb544 extends \Twig\Template
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
        echo "<option value=\"any\">Month</option>
";
        // line 2
        if (($context["allmonths"] ?? null)) {
            // line 3
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["allmonths"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["month"]) {
                // line 4
                echo "        <option ";
                if ((get("month") == $context["month"])) {
                    echo "selected=\"selected\" ";
                }
                echo " value=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["month"], 4, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["month"], 4, $this->source), "html", null, true);
                echo "</option>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['month'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/itl/themes/SAN/partials/feilds/months.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<option value=\"any\">Month</option>
{% if allmonths %}
    {% for month in allmonths %}
        <option {% if get(\"month\")==month %}selected=\"selected\" {% endif %} value=\"{{month}}\">{{month}}</option>
    {% endfor %}
{% endif %}", "/Applications/MAMP/htdocs/itl/themes/SAN/partials/feilds/months.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2, "for" => 3);
        static $filters = array("escape" => 4);
        static $functions = array("get" => 4);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape'],
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
