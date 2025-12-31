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

/* /Applications/MAMP/htdocs/itl/themes/SAN/partials/feilds/experiences.htm */
class __TwigTemplate_d662b3a83715fb52918cf589611c2487d593d5fb413adbd69d2eb6584643d2d5 extends \Twig\Template
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
        $context["experience"] = twig_get_attribute($this->env, $this->source, ($context["experienceList"] ?? null), "records", [], "any", false, false, true, 1);
        // line 2
        $context["oldexp"] = "";
        // line 3
        echo "<option value=\"any\">Experience</option>
";
        // line 4
        if (($context["allexp"] ?? null)) {
            // line 5
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, ($context["allexp"] ?? null), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "title", [], "any", false, false, true, 5) <=> twig_get_attribute($this->env, $this->source, ($context["b"] ?? null), "title", [], "any", false, false, true, 5)); }));
            foreach ($context['_seq'] as $context["_key"] => $context["exp"]) {
                // line 6
                echo "        ";
                if ((($context["oldexp"] ?? null) != twig_get_attribute($this->env, $this->source, $context["exp"], "slug", [], "any", false, false, true, 6))) {
                    // line 7
                    echo "            <option value=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["exp"], "slug", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
                    echo "\" ";
                    if ((get("experience") == twig_get_attribute($this->env, $this->source, $context["exp"], "slug", [], "any", false, false, true, 7))) {
                        echo " selected=\"selected\" ";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["exp"], "title", [], "any", false, false, true, 7), 7, $this->source)), "html", null, true);
                    echo "</option>
        ";
                }
                // line 9
                echo "        ";
                $context["oldexp"] = twig_get_attribute($this->env, $this->source, $context["exp"], "slug", [], "any", false, false, true, 9);
                // line 10
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exp'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/itl/themes/SAN/partials/feilds/experiences.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 10,  68 => 9,  56 => 7,  53 => 6,  48 => 5,  46 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set experience = experienceList.records %}
{% set oldexp = \"\" %}
<option value=\"any\">Experience</option>
{% if allexp %}
    {% for exp in allexp | sort((a, b) => a.title <=> b.title ) %}
        {% if oldexp != exp.slug %}
            <option value=\"{{exp.slug}}\" {% if get(\"experience\")==exp.slug %} selected=\"selected\" {% endif %}>{{exp.title |capitalize}}</option>
        {% endif %}
        {% set oldexp = exp.slug %}
    {% endfor %}
{% endif %}", "/Applications/MAMP/htdocs/itl/themes/SAN/partials/feilds/experiences.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 4, "for" => 5);
        static $filters = array("sort" => 5, "escape" => 7, "capitalize" => 7);
        static $functions = array("get" => 7);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['sort', 'escape', 'capitalize'],
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
