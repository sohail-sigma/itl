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

/* /Applications/MAMP/htdocs/itl/themes/SAN/partials/site/package.htm */
class __TwigTemplate_8b068fa22cd708dca3492aceff0f95457614e27d82c5810917476780beb4b335 extends \Twig\Template
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
        echo "<!-- \$theme = DB::table('destinations_packages')->select('packages_id')->where('destinations_id',
        get('experience'))->first();
        if (\$m) \$data = \$data->whereJsonContains('months', \$m);
\$this['destinations_List'] = San\\San\\Models\\Destinations::where('status', 1)->get(); -->
<div class=\"row\">
    ";
        // line 6
        if (twig_length_filter($this->env, ($context["searchList"] ?? null))) {
            // line 7
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["searchList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                // line 8
                echo "    ";
                $context["packageIdMatch"] = false;
                // line 9
                echo "    ";
                if ((($context["countryName"] ?? null) && twig_get_attribute($this->env, $this->source, $context["record"], "package_country_select", [], "any", false, false, true, 9))) {
                    // line 10
                    echo "        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "package_country_select", [], "any", false, false, true, 10));
                    foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                        // line 11
                        echo "            ";
                        if (($context["country"] == ($context["countryName"] ?? null))) {
                            // line 12
                            echo "                ";
                            $context["packageIdMatch"] = true;
                            // line 13
                            echo "            ";
                        }
                        // line 14
                        echo "        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 15
                    echo "    ";
                }
                // line 16
                echo "    ";
                if ((($context["packageIdMatch"] ?? null) == true)) {
                    // line 17
                    echo "    ";
                    $context["dslug"] = "";
                    // line 18
                    echo "    <div class=\"col-xl-6 col-lg-6 col-md-6\">
        <div class=\"package_grid\">
            ";
                    // line 20
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "overview_image", [], "any", false, false, true, 20), "path", [], "any", false, false, true, 20)) {
                        // line 21
                        echo "                <figure>
                    <a href=\"";
                        // line 22
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "url", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                        echo "/package/";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                        echo "\">
                        <img src=\"";
                        // line 23
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "banner", [], "any", false, false, true, 23), "getThumb", [0 => 475, 1 => 210, 2 => ["mode" => "crop"]], "method", false, false, true, 23), 23, $this->source), "html", null, true);
                        echo "\" class=\"img-fluid\" alt=\"\" width=\"800\"
                            height=\"533\"></a>
                </figure>
                ";
                    } else {
                        // line 27
                        echo "                <figure>
                    <a href=\"";
                        // line 28
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "url", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                        echo "/package/";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                        echo "\">
                        <img src=\"";
                        // line 29
                        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/logo.jpg"]);
                        echo "\" class=\"img-fluid\" alt=\"\" width=\"800\" height=\"533\"></a>
                </figure>
                ";
                    }
                    // line 32
                    echo "            <div class=\"wrapper-package\">
                
                <h3 class=\"m-0\"><a href=\"";
                    // line 34
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "url", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
                    echo "/package/";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 34), 34, $this->source)), "html", null, true);
                    echo "</a> </h3>
\t\t\t\t     <span class=\"pcountry\">";
                    // line 35
                    if (twig_get_attribute($this->env, $this->source, $context["record"], "countries", [], "any", false, false, true, 35)) {
                        $context["ccount"] = 1;
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "countries", [], "any", false, false, true, 35));
                        foreach ($context['_seq'] as $context["_key"] => $context["scountry"]) {
                            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["scountry"], "country", [], "any", false, false, true, 35), 35, $this->source)), "html", null, true);
                            if ((($context["ccount"] ?? null) < twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "countries", [], "any", false, false, true, 35)))) {
                                echo " |";
                            }
                            $context["ccount"] = (($context["ccount"] ?? null) + 1);
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scountry'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                    }
                    echo "</span>
\t\t\t\t\t 
                    <p class=\"pcities\">Cities Included:
\t\t\t\t\t";
                    // line 38
                    if (twig_get_attribute($this->env, $this->source, $context["record"], "cities", [], "any", false, false, true, 38)) {
                        $context["ccount"] = 1;
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "cities", [], "any", false, false, true, 38));
                        foreach ($context['_seq'] as $context["_key"] => $context["scity"]) {
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["scity"], "city", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                            if ((($context["ccount"] ?? null) < twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "cities", [], "any", false, false, true, 38)))) {
                                echo " |";
                            }
                            $context["ccount"] = (($context["ccount"] ?? null) + 1);
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scity'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                    }
                    echo "</p>
                    ";
                    // line 39
                    $context["price"] = 0;
                    // line 40
                    echo "                    ";
                    $context["currencyCode"] = 0;
                    // line 41
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["record"], "price", [], "any", false, false, true, 41)) {
                        // line 42
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "price", [], "any", false, false, true, 42));
                        foreach ($context['_seq'] as $context["_key"] => $context["Precord"]) {
                            // line 43
                            echo "                            ";
                            if ((twig_get_attribute($this->env, $this->source, $context["Precord"], "currency", [], "any", false, false, true, 43) == ($context["user_currency_code"] ?? null))) {
                                // line 44
                                echo "                                ";
                                $context["currencyCode"] = twig_upper_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Precord"], "currency", [], "any", false, false, true, 44), 44, $this->source));
                                // line 45
                                echo "                            ";
                            }
                            // line 46
                            echo "                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Precord'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 47
                        echo "
                        ";
                        // line 48
                        if ((($context["currencyCode"] ?? null) == "0")) {
                            // line 49
                            echo "                            ";
                            $context["currencyCode"] = "USD";
                            // line 50
                            echo "                        ";
                        }
                        // line 51
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "price", [], "any", false, false, true, 51));
                        foreach ($context['_seq'] as $context["_key"] => $context["Precord"]) {
                            // line 52
                            echo "                            ";
                            if ((twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Precord"], "currency", [], "any", false, false, true, 52)) == twig_upper_filter($this->env, ($context["currencyCode"] ?? null)))) {
                                // line 53
                                echo "                                ";
                                $context["price"] = twig_get_attribute($this->env, $this->source, $context["Precord"], "price", [], "any", false, false, true, 53);
                                // line 54
                                echo "                            ";
                            }
                            // line 55
                            echo "                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Precord'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 56
                        echo "                    ";
                    }
                    // line 57
                    echo "            <div class=\"packagePrice p-2 pl-4 pr-4\">
                <h3><span class=\"pr-3\"> ";
                    // line 58
                    if (twig_get_attribute($this->env, $this->source, $context["record"], "night", [], "any", false, false, true, 58)) {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "night", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
                        echo " NIGHTS / ";
                    }
                    // line 59
                    if (twig_get_attribute($this->env, $this->source, $context["record"], "days", [], "any", false, false, true, 59)) {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "days", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
                        echo " DAYS ";
                    }
                    echo " </span>| <strong
                        class=\"pl-3\">";
                    // line 60
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["currencyCode"] ?? null), 60, $this->source), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["price"] ?? null), 60, $this->source)), "html", null, true);
                    echo "*</strong></h3>
            </div>
                        <div class=\"facilities mt-3 d-block\">
                            
                            ";
                    // line 64
                    if (twig_get_attribute($this->env, $this->source, $context["record"], "hotel_stay", [], "any", false, false, true, 64)) {
                        // line 65
                        echo "                            <span data-toggle=\"tooltip\" title=\"Hotel Stay\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["record"], "hotel_stay", [], "any", false, false, true, 65)) {
                            echo " class=\"included\"
                                ";
                        }
                        // line 66
                        echo ">
                                <img width=\"18\" height=\"18\" src=\"";
                        // line 67
                        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/b_hotel_stay.png"]);
                        echo "\" />
                            </span>
                            ";
                    }
                    // line 70
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["record"], "domestic_flights", [], "any", false, false, true, 70)) {
                        // line 71
                        echo "                            <span data-toggle=\"tooltip\" title=\"Domestic Flights\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["record"], "domestic_flights", [], "any", false, false, true, 71)) {
                            // line 72
                            echo "                                class=\"included\" ";
                        }
                        echo ">
                                <img width=\"18\" height=\"18\" src=\"";
                        // line 73
                        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/b_domestic_flights.png"]);
                        echo "\" />
                            </span>
                            ";
                    }
                    // line 76
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["record"], "breakfast_meals", [], "any", false, false, true, 76)) {
                        // line 77
                        echo "                            <span data-toggle=\"tooltip\" title=\"Breakfast/Meals\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["record"], "breakfast_meals", [], "any", false, false, true, 77)) {
                            // line 78
                            echo "                                class=\"included\" ";
                        }
                        echo ">
                                <img width=\"18\" height=\"18\" src=\"";
                        // line 79
                        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/b_breakfast_meals.png"]);
                        echo "\" />
                            </span>
                            ";
                    }
                    // line 82
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["record"], "airport_transfers", [], "any", false, false, true, 82)) {
                        // line 83
                        echo "                            <span data-toggle=\"tooltip\" title=\"Airport Transfers\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["record"], "airport_transfers", [], "any", false, false, true, 83)) {
                            // line 84
                            echo "                                class=\"included\" ";
                        }
                        echo ">
                                <img width=\"18\" height=\"18\"
                                    src=\"";
                        // line 86
                        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/b_airport_transfers.png"]);
                        echo "\" />
                            </span>
                            ";
                    }
                    // line 89
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["record"], "site_seeing", [], "any", false, false, true, 89)) {
                        // line 90
                        echo "                            <span data-toggle=\"tooltip\" title=\"Site Seeing\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["record"], "site_seeing", [], "any", false, false, true, 90)) {
                            echo " class=\"included\"
                                ";
                        }
                        // line 91
                        echo ">
                                <img width=\"18\" height=\"18\" src=\"";
                        // line 92
                        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/b_site_seeing.png"]);
                        echo "\" />
                            </span>
                            ";
                    }
                    // line 95
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["record"], "city_coach_tour", [], "any", false, false, true, 95)) {
                        // line 96
                        echo "                            <span data-toggle=\"tooltip\" title=\"City Tour/Coach Tour\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["record"], "city_coach_tour", [], "any", false, false, true, 96)) {
                            // line 97
                            echo "                                class=\"included\" ";
                        }
                        echo ">
                                <img width=\"18\" height=\"18\" src=\"";
                        // line 98
                        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/b_city_coach_tour.png"]);
                        echo "\" />
                            </span>
                            ";
                    }
                    // line 101
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["record"], "tour_guide", [], "any", false, false, true, 101)) {
                        // line 102
                        echo "                            <span data-toggle=\"tooltip\" title=\"Tour Guide\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["record"], "tour_guide", [], "any", false, false, true, 102)) {
                            echo " class=\"included\"
                                ";
                        }
                        // line 103
                        echo ">
                                <img width=\"18\" height=\"18\" src=\"";
                        // line 104
                        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/b_tour_guide.png"]);
                        echo "\" />
                            </span>
                            ";
                    }
                    // line 107
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["record"], "train_tickets", [], "any", false, false, true, 107)) {
                        // line 108
                        echo "                            <span data-toggle=\"tooltip\" title=\"Train Tickets\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["record"], "train_tickets", [], "any", false, false, true, 108)) {
                            // line 109
                            echo "                                class=\"included\" ";
                        }
                        echo ">
                                <img width=\"18\" height=\"18\" src=\"";
                        // line 110
                        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/b_train_tickets.png"]);
                        echo "\" />
                            </span>
                            ";
                    }
                    // line 113
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["record"], "entrance_fee_pass", [], "any", false, false, true, 113)) {
                        // line 114
                        echo "                            <span data-toggle=\"tooltip\" title=\"Entrance Fee/ Pass\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["record"], "entrance_fee_pass", [], "any", false, false, true, 114)) {
                            // line 115
                            echo "                                class=\"included\" ";
                        }
                        echo ">
                                <img width=\"18\" height=\"18\"
                                    src=\"";
                        // line 117
                        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/b_entrance_fee_pass.png"]);
                        echo "\" />
                            </span>
                            ";
                    }
                    // line 120
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["record"], "cruising", [], "any", false, false, true, 120)) {
                        // line 121
                        echo "                            <span data-toggle=\"tooltip\" title=\"Cruising\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["record"], "cruising", [], "any", false, false, true, 121)) {
                            echo " class=\"included\" ";
                        }
                        // line 122
                        echo ">
                                <img width=\"18\" height=\"18\" src=\"";
                        // line 123
                        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/b_cruising.png"]);
                        echo "\" />
                            </span>
                            ";
                    }
                    // line 126
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["record"], "entertainment", [], "any", false, false, true, 126)) {
                        // line 127
                        echo "                            <span data-toggle=\"tooltip\" title=\"Entertainment\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["record"], "entertainment", [], "any", false, false, true, 127)) {
                            // line 128
                            echo "                                class=\"included\" ";
                        }
                        echo ">
                                <img width=\"18\" height=\"18\" src=\"";
                        // line 129
                        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/b_entertainment.png"]);
                        echo "\" />
                            </span>
                            ";
                    }
                    // line 132
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["record"], "sailing", [], "any", false, false, true, 132)) {
                        // line 133
                        echo "                            <span data-toggle=\"tooltip\" title=\"Sailing\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["record"], "sailing", [], "any", false, false, true, 133)) {
                            echo " class=\"included\" ";
                        }
                        // line 134
                        echo ">
                                <img width=\"18\" height=\"18\" src=\"";
                        // line 135
                        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/b_sailing.png"]);
                        echo "\" />
                            </span>
                            ";
                    }
                    // line 138
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["record"], "hiking_walking_tour", [], "any", false, false, true, 138)) {
                        // line 139
                        echo "                            <span data-toggle=\"tooltip\" title=\"Hiking/Walking Tour\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["record"], "hiking_walking_tour", [], "any", false, false, true, 139)) {
                            // line 140
                            echo "                                class=\"included\" ";
                        }
                        echo ">
                                <img width=\"18\" height=\"18\"
                                    src=\"";
                        // line 142
                        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/b_hiking_walking_tour.png"]);
                        echo "\" />
                            </span>
                            ";
                    }
                    // line 145
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["record"], "speed_boat", [], "any", false, false, true, 145)) {
                        // line 146
                        echo "                            <span data-toggle=\"tooltip\" title=\"Speed Boat Transfers\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["record"], "speed_boat", [], "any", false, false, true, 146)) {
                            // line 147
                            echo "                                class=\"included\" ";
                        }
                        echo ">
                                <img width=\"18\" height=\"18\" src=\"";
                        // line 148
                        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/b_speed_boat.png"]);
                        echo "\" />
                            </span>
                            ";
                    }
                    // line 151
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["record"], "wellness", [], "any", false, false, true, 151)) {
                        // line 152
                        echo "                            <span data-toggle=\"tooltip\" title=\"Wellness\tCamping\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["record"], "wellness", [], "any", false, false, true, 152)) {
                            // line 153
                            echo "                                class=\"included\" ";
                        }
                        echo ">
                                <img width=\"18\" height=\"18\" src=\"";
                        // line 154
                        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/b_wellness.png"]);
                        echo "\" />
                            </span>
                            ";
                    }
                    // line 157
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["record"], "camping", [], "any", false, false, true, 157)) {
                        // line 158
                        echo "                            <span data-toggle=\"tooltip\" title=\"Wellness\tCamping\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["record"], "camping", [], "any", false, false, true, 158)) {
                            // line 159
                            echo "                                class=\"included\" ";
                        }
                        echo ">
                                <img width=\"18\" height=\"18\" src=\"";
                        // line 160
                        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/b_camping.png"]);
                        echo "\" />
                            </span>
                            ";
                    }
                    // line 163
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["record"], "canyoning", [], "any", false, false, true, 163)) {
                        // line 164
                        echo "                            <span data-toggle=\"tooltip\" title=\"Canyoning\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["record"], "canyoning", [], "any", false, false, true, 164)) {
                            echo " class=\"included\" ";
                        }
                        // line 165
                        echo ">
                                <img width=\"18\" height=\"18\" src=\"";
                        // line 166
                        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/b_canyoning.png"]);
                        echo "\" />
                            </span>
                            ";
                    }
                    // line 169
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["record"], "campervan", [], "any", false, false, true, 169)) {
                        // line 170
                        echo "                            <span data-toggle=\"tooltip\" title=\"Campervan\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["record"], "campervan", [], "any", false, false, true, 170)) {
                            echo " class=\"included\" ";
                        }
                        // line 171
                        echo ">
                                <img width=\"18\" height=\"18\" src=\"";
                        // line 172
                        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/b_campervan.png"]);
                        echo "\" />
                            </span>
                            ";
                    }
                    // line 175
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["record"], "para_gliding", [], "any", false, false, true, 175)) {
                        // line 176
                        echo "                            <span data-toggle=\"tooltip\" title=\"Para Gliding\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["record"], "para_gliding", [], "any", false, false, true, 176)) {
                            // line 177
                            echo "                                class=\"included\" ";
                        }
                        echo ">
                                <img width=\"18\" height=\"18\" src=\"";
                        // line 178
                        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/b_para_gliding.png"]);
                        echo "\" />
                            </span>
                            ";
                    }
                    // line 181
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["record"], "bike_ride", [], "any", false, false, true, 181)) {
                        // line 182
                        echo "                            <span data-toggle=\"tooltip\" title=\"Bike Ride\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["record"], "bike_ride", [], "any", false, false, true, 182)) {
                            echo " class=\"included\" ";
                        }
                        // line 183
                        echo ">
                                <img width=\"18\" height=\"18\" src=\"";
                        // line 184
                        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/b_bike_ride.png"]);
                        echo "\" />
                            </span>
                            ";
                    }
                    // line 187
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["record"], "diving", [], "any", false, false, true, 187)) {
                        // line 188
                        echo "                            <span data-toggle=\"tooltip\" title=\"Diving\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["record"], "diving", [], "any", false, false, true, 188)) {
                            echo " class=\"included\" ";
                        }
                        // line 189
                        echo ">
                                <img width=\"18\" height=\"18\" src=\"";
                        // line 190
                        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/b_diving.png"]);
                        echo "\" />
                            </span>
                            ";
                    }
                    // line 193
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["record"], "scooter_ride", [], "any", false, false, true, 193)) {
                        // line 194
                        echo "                            <span data-toggle=\"tooltip\" title=\"Scooter Ride\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["record"], "scooter_ride", [], "any", false, false, true, 194)) {
                            // line 195
                            echo "                                class=\"included\" ";
                        }
                        echo ">
                                <img width=\"18\" height=\"18\" src=\"";
                        // line 196
                        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/b_scooter_ride.png"]);
                        echo "\" />
                            </span>
                            ";
                    }
                    // line 199
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["record"], "zip_line", [], "any", false, false, true, 199)) {
                        // line 200
                        echo "                            <span data-toggle=\"tooltip\" title=\"Zip line\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["record"], "zip_line", [], "any", false, false, true, 200)) {
                            echo " class=\"included\" ";
                        }
                        // line 201
                        echo ">
                                <img width=\"18\" height=\"18\" src=\"";
                        // line 202
                        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/b_zip_line.png"]);
                        echo "\" />
                            </span>
                            ";
                    }
                    // line 205
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["record"], "horse_ride", [], "any", false, false, true, 205)) {
                        // line 206
                        echo "                            <span data-toggle=\"tooltip\" title=\"Horse Ride\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["record"], "horse_ride", [], "any", false, false, true, 206)) {
                            echo " class=\"included\"
                                ";
                        }
                        // line 207
                        echo ">
                                <img width=\"18\" height=\"18\" src=\"";
                        // line 208
                        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/b_horse_ride.png"]);
                        echo "\" />
                            </span>
                            ";
                    }
                    // line 211
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["record"], "cooking_class", [], "any", false, false, true, 211)) {
                        // line 212
                        echo "                            <span data-toggle=\"tooltip\" title=\"Cooking Class\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["record"], "cooking_class", [], "any", false, false, true, 212)) {
                            // line 213
                            echo "                                class=\"included\" ";
                        }
                        echo ">
                                <img width=\"18\" height=\"18\" src=\"";
                        // line 214
                        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/b_cooking_class.png"]);
                        echo "\" />
                            </span>
                            ";
                    }
                    // line 217
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, $context["record"], "shopping_tour", [], "any", false, false, true, 217)) {
                        // line 218
                        echo "                            <span data-toggle=\"tooltip\" title=\"Shopping Tour\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["record"], "shopping_tour", [], "any", false, false, true, 218)) {
                            // line 219
                            echo "                                class=\"included\" ";
                        }
                        echo ">
                                <img width=\"18\" height=\"18\" src=\"";
                        // line 220
                        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/b_shopping_tour.png"]);
                        echo "\" />
                            </span>
                            ";
                    }
                    // line 223
                    echo "                        </div>
            </div>
           
            <div class=\"wrapper-package rating-star\">
                ";
                    // line 227
                    if (twig_get_attribute($this->env, $this->source, $context["record"], "accomodation", [], "any", false, false, true, 227)) {
                        // line 228
                        echo "                <p>
                    <b>";
                        // line 229
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "accomodation", [], "any", false, false, true, 229), 229, $this->source), "html", null, true);
                        echo " Star Accomodation</b>
                    <span>
                        ";
                        // line 231
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["record"], "accomodation", [], "any", false, false, true, 231)));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 232
                            echo "                        <i class=\"fa fa-star\"></i>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 234
                        echo "                    </span>
                </p>
                <small class=\"pb-2 d-block\">*Price is starting from, per person on twin sharing</small>
                ";
                    } else {
                    }
                    // line 238
                    echo "

                ";
                    // line 240
                    if (twig_get_attribute($this->env, $this->source, $context["record"], "destinations", [], "any", false, false, true, 240)) {
                        // line 241
                        echo "                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "destinations", [], "any", false, false, true, 241));
                        foreach ($context['_seq'] as $context["_key"] => $context["destination"]) {
                            // line 242
                            echo "                    ";
                            $context["dslug"] = twig_get_attribute($this->env, $this->source, $context["destination"], "title", [], "any", false, false, true, 242);
                            // line 243
                            echo "                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['destination'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 244
                        echo "                ";
                    }
                    // line 245
                    echo "
                
                <div class=\"clearfix\"></div>
                <a href=\"";
                    // line 248
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "url", [], "any", false, false, true, 248), 248, $this->source), "html", null, true);
                    echo "/package/";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 248), 248, $this->source), "html", null, true);
                    echo "\"
                    class=\"btn btn-secondary btn-lm packdetails\">Details</a>
                <a href=\"#enquiry-popup\" class=\"open-popup-link btn btn-lm packenquiry enquiry-in\"
                    data-ptitle=\"";
                    // line 251
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 251), 251, $this->source), "html", null, true);
                    echo "\" data-ptitle=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 251), 251, $this->source), "html", null, true);
                    echo "\" data-unique_caption=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "unique_caption", [], "any", false, false, true, 251), 251, $this->source), "html", null, true);
                    echo "\" data-dslug=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["dslug"] ?? null), 251, $this->source), "html", null, true);
                    echo "\" ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "overview_image", [], "any", false, false, true, 251), "path", [], "any", false, false, true, 251)) {
                        // line 252
                        echo "                    data-pimage=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "banner", [], "any", false, false, true, 252), "path", [], "any", false, false, true, 252), 252, $this->source), "html", null, true);
                        echo "\" ";
                    } else {
                        echo " data-pimage=\"";
                        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/logo.jpg"]);
                        echo "\" ";
                    }
                    // line 253
                    echo ">Enquiry</a>

            </div>
            </div>
        </div>
    ";
                }
                // line 259
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 260
            echo "    <div class=\"col-12\">
        ";
            // line 261
            if ((twig_get_attribute($this->env, $this->source, ($context["searchList"] ?? null), "total", [], "any", false, false, true, 261) > 10)) {
                // line 262
                echo "        <form action=\"\" method=\"POST\" class=\"paginationform news-pagination\">
            <ul class=\"pagination\" style=\"justify-content: center !important;\">
                <input type=\"hidden\" name=\"newscategories\" value=\"";
                // line 264
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["p_category"] ?? null), 264, $this->source), "html", null, true);
                echo "\">
                <input type=\"hidden\" name=\"newstags\" value=\"";
                // line 265
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["p_tags"] ?? null), 265, $this->source), "html", null, true);
                echo "\">
                ";
                // line 266
                if ((twig_get_attribute($this->env, $this->source, ($context["searchList"] ?? null), "currentPage", [], "any", false, false, true, 266) != 1)) {
                    // line 267
                    echo "                <li class=\"last\">
                    <a href=\"";
                    // line 268
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
                    echo "?package=";
                    echo get("package");
                    echo "&experience=";
                    echo get("experience");
                    echo "&month=";
                    echo get("month");
                    echo "&page=1\"
                        class=\"paginationbtn\">
                        <img src=\"/themes/SAN/assets/images/pagination-arrow.png\" class=\"firstimg\">
                        <img src=\"/themes/SAN/assets/images/pagination-arrow.png\" class=\"firstimg\"> First
                    </a>
                </li>
                ";
                }
                // line 275
                echo "
                ";
                // line 276
                if ((twig_get_attribute($this->env, $this->source, ($context["searchList"] ?? null), "currentPage", [], "any", false, false, true, 276) != 1)) {
                    // line 277
                    echo "
                ";
                    // line 278
                    if ((twig_get_attribute($this->env, $this->source, ($context["searchList"] ?? null), "currentPage", [], "any", false, false, true, 278) == twig_get_attribute($this->env, $this->source, ($context["searchList"] ?? null), "lastPage", [], "any", false, false, true, 278))) {
                        // line 279
                        echo "                <li class=\"page\">
                    <a href=\"";
                        // line 280
                        echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
                        echo "?package=";
                        echo get("package");
                        echo "&experience=";
                        echo get("experience");
                        echo "&month=";
                        echo get("month");
                        echo "&page=";
                        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["searchList"] ?? null), "currentPage", [], "any", false, false, true, 280) - 2), "html", null, true);
                        echo "\"
                        class=\"paginationbtn\">
                        ";
                        // line 282
                        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["searchList"] ?? null), "currentPage", [], "any", false, false, true, 282) - 2), "html", null, true);
                        echo "
                    </a>
                </li>
                ";
                    }
                    // line 286
                    echo "
                <li class=\"page\">
                    <a href=\"";
                    // line 288
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
                    echo "?package=";
                    echo get("package");
                    echo "&experience=";
                    echo get("experience");
                    echo "&month=";
                    echo get("month");
                    echo "&page=";
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["searchList"] ?? null), "currentPage", [], "any", false, false, true, 288) - 1), "html", null, true);
                    echo "\"
                        class=\"paginationbtn\">";
                    // line 289
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["searchList"] ?? null), "currentPage", [], "any", false, false, true, 289) - 1), "html", null, true);
                    echo " </a>
                </li>
                ";
                }
                // line 292
                echo "
                <li class=\"page current\">
                    <a href=\"";
                // line 294
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
                echo "?package=";
                echo get("package");
                echo "&experience=";
                echo get("experience");
                echo "&month=";
                echo get("month");
                echo "&page=";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchList"] ?? null), "currentPage", [], "any", false, false, true, 294), 294, $this->source), "html", null, true);
                echo "\"
                        class=\"paginationbtn\">";
                // line 295
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchList"] ?? null), "currentPage", [], "any", false, false, true, 295), 295, $this->source), "html", null, true);
                echo "</a>
                </li>

                ";
                // line 298
                if ((twig_get_attribute($this->env, $this->source, ($context["searchList"] ?? null), "currentPage", [], "any", false, false, true, 298) != twig_get_attribute($this->env, $this->source, ($context["searchList"] ?? null), "lastPage", [], "any", false, false, true, 298))) {
                    // line 299
                    echo "                <li class=\"page\">
                    <a href=\"";
                    // line 300
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
                    echo "?package=";
                    echo get("package");
                    echo "&experience=";
                    echo get("experience");
                    echo "&month=";
                    echo get("month");
                    echo "&page=";
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["searchList"] ?? null), "currentPage", [], "any", false, false, true, 300) + 1), "html", null, true);
                    echo "\"
                        class=\"paginationbtn\">";
                    // line 301
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["searchList"] ?? null), "currentPage", [], "any", false, false, true, 301) + 1), "html", null, true);
                    echo "</a>
                </li>
                ";
                }
                // line 304
                echo "
                ";
                // line 305
                if (((twig_get_attribute($this->env, $this->source, ($context["searchList"] ?? null), "currentPage", [], "any", false, false, true, 305) == 1) && (twig_get_attribute($this->env, $this->source, ($context["searchList"] ?? null), "total", [], "any", false, false, true, 305) > 1))) {
                    // line 306
                    echo "                <li class=\"page\">
                    <a href=\"";
                    // line 307
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
                    echo "?package=";
                    echo get("package");
                    echo "&experience=";
                    echo get("experience");
                    echo "&month=";
                    echo get("month");
                    echo "&page=";
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["searchList"] ?? null), "currentPage", [], "any", false, false, true, 307) + 2), "html", null, true);
                    echo "\"
                        class=\"paginationbtn\">";
                    // line 308
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["searchList"] ?? null), "currentPage", [], "any", false, false, true, 308) + 2), "html", null, true);
                    echo " </a>
                </li>
                ";
                }
                // line 311
                echo "

                ";
                // line 313
                if ((twig_get_attribute($this->env, $this->source, ($context["searchList"] ?? null), "currentPage", [], "any", false, false, true, 313) != twig_get_attribute($this->env, $this->source, ($context["searchList"] ?? null), "lastPage", [], "any", false, false, true, 313))) {
                    // line 314
                    echo "                <li class=\"last\">
                    <a href=\"";
                    // line 315
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
                    echo "?package=";
                    echo get("package");
                    echo "&experience=";
                    echo get("experience");
                    echo "&month=";
                    echo get("month");
                    echo "&page=";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["searchList"] ?? null), "lastPage", [], "any", false, false, true, 315), 315, $this->source), "html", null, true);
                    echo "\"
                        class=\"paginationbtn\">Last
                        <img src=\"/themes/SAN/assets/images/pagination-arrow.png\">
                        <img src=\"/themes/SAN/assets/images/pagination-arrow.png\">
                    </a>
                </li>
                ";
                }
                // line 322
                echo "
            </ul>
        </form>
        ";
            }
            // line 326
            echo "    </div>
    ";
        } else {
            // line 328
            echo "    <div class=\"col-12\">
        <p class=\"text-center\">No results found!</p>
    </div>
    ";
        }
        // line 332
        echo "</div>
<style>
    .paginationform .firstimg {
        transform: rotate(180deg);
    }
</style>
<script>
    \$(document).ready(function () {
        \$(\".packenquiry\").on(\"click\", function () {
            var dslug = \$(this).attr(\"data-dslug\");
            var ptitle = \$(this).attr(\"data-ptitle\");
            var pimage = \$(this).attr(\"data-pimage\");
            var unique_caption = \$(this).attr(\"data-unique_caption\");
            var parentEl = \$(this).closest('.package_grid');
            var pcitieshtml = \$(parentEl).find('.pcountry').html();//\$(this).parent().parent().closest('.pcities').html();
            console.log(pcitieshtml);
            \$(\"#p-title\").html(ptitle);
            \$(\"#p-image\").attr(\"src\", pimage);
            \$(\"#pacage\").val(ptitle+' ('+pcitieshtml+')');
            \$(\"#experiences\").val(dslug);
            // \$(\"#dslug\").val(dslug);
            // \$(\"#experiences option[value='\" + dslug + \"']\").prop('selected', true);
        });
    });
</script>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/itl/themes/SAN/partials/site/package.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1021 => 332,  1015 => 328,  1011 => 326,  1005 => 322,  987 => 315,  984 => 314,  982 => 313,  978 => 311,  972 => 308,  960 => 307,  957 => 306,  955 => 305,  952 => 304,  946 => 301,  934 => 300,  931 => 299,  929 => 298,  923 => 295,  911 => 294,  907 => 292,  901 => 289,  889 => 288,  885 => 286,  878 => 282,  865 => 280,  862 => 279,  860 => 278,  857 => 277,  855 => 276,  852 => 275,  836 => 268,  833 => 267,  831 => 266,  827 => 265,  823 => 264,  819 => 262,  817 => 261,  814 => 260,  808 => 259,  800 => 253,  791 => 252,  781 => 251,  773 => 248,  768 => 245,  765 => 244,  759 => 243,  756 => 242,  751 => 241,  749 => 240,  745 => 238,  738 => 234,  731 => 232,  727 => 231,  722 => 229,  719 => 228,  717 => 227,  711 => 223,  705 => 220,  700 => 219,  697 => 218,  694 => 217,  688 => 214,  683 => 213,  680 => 212,  677 => 211,  671 => 208,  668 => 207,  662 => 206,  659 => 205,  653 => 202,  650 => 201,  645 => 200,  642 => 199,  636 => 196,  631 => 195,  628 => 194,  625 => 193,  619 => 190,  616 => 189,  611 => 188,  608 => 187,  602 => 184,  599 => 183,  594 => 182,  591 => 181,  585 => 178,  580 => 177,  577 => 176,  574 => 175,  568 => 172,  565 => 171,  560 => 170,  557 => 169,  551 => 166,  548 => 165,  543 => 164,  540 => 163,  534 => 160,  529 => 159,  526 => 158,  523 => 157,  517 => 154,  512 => 153,  509 => 152,  506 => 151,  500 => 148,  495 => 147,  492 => 146,  489 => 145,  483 => 142,  477 => 140,  474 => 139,  471 => 138,  465 => 135,  462 => 134,  457 => 133,  454 => 132,  448 => 129,  443 => 128,  440 => 127,  437 => 126,  431 => 123,  428 => 122,  423 => 121,  420 => 120,  414 => 117,  408 => 115,  405 => 114,  402 => 113,  396 => 110,  391 => 109,  388 => 108,  385 => 107,  379 => 104,  376 => 103,  370 => 102,  367 => 101,  361 => 98,  356 => 97,  353 => 96,  350 => 95,  344 => 92,  341 => 91,  335 => 90,  332 => 89,  326 => 86,  320 => 84,  317 => 83,  314 => 82,  308 => 79,  303 => 78,  300 => 77,  297 => 76,  291 => 73,  286 => 72,  283 => 71,  280 => 70,  274 => 67,  271 => 66,  265 => 65,  263 => 64,  254 => 60,  246 => 59,  240 => 58,  237 => 57,  234 => 56,  228 => 55,  225 => 54,  222 => 53,  219 => 52,  214 => 51,  211 => 50,  208 => 49,  206 => 48,  203 => 47,  197 => 46,  194 => 45,  191 => 44,  188 => 43,  183 => 42,  180 => 41,  177 => 40,  175 => 39,  157 => 38,  137 => 35,  129 => 34,  125 => 32,  119 => 29,  113 => 28,  110 => 27,  103 => 23,  97 => 22,  94 => 21,  92 => 20,  88 => 18,  85 => 17,  82 => 16,  79 => 15,  73 => 14,  70 => 13,  67 => 12,  64 => 11,  59 => 10,  56 => 9,  53 => 8,  48 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- \$theme = DB::table('destinations_packages')->select('packages_id')->where('destinations_id',
        get('experience'))->first();
        if (\$m) \$data = \$data->whereJsonContains('months', \$m);
\$this['destinations_List'] = San\\San\\Models\\Destinations::where('status', 1)->get(); -->
<div class=\"row\">
    {% if searchList|length %}
    {% for record in searchList %}
    {% set packageIdMatch = false %}
    {% if countryName and record.package_country_select %}
        {% for country in record.package_country_select %}
            {% if country == countryName %}
                {% set packageIdMatch = true %}
            {% endif %}
        {% endfor %}
    {% endif %}
    {% if packageIdMatch == true %}
    {% set dslug = \"\" %}
    <div class=\"col-xl-6 col-lg-6 col-md-6\">
        <div class=\"package_grid\">
            {% if(record.overview_image.path) %}
                <figure>
                    <a href=\"{{ post.url }}/package/{{record.slug}}\">
                        <img src=\"{{record.banner.getThumb(475,210,{mode:'crop'})}}\" class=\"img-fluid\" alt=\"\" width=\"800\"
                            height=\"533\"></a>
                </figure>
                {% else %}
                <figure>
                    <a href=\"{{ post.url }}/package/{{record.slug}}\">
                        <img src=\"{{ 'assets/img/logo.jpg'|theme }}\" class=\"img-fluid\" alt=\"\" width=\"800\" height=\"533\"></a>
                </figure>
                {% endif %}
            <div class=\"wrapper-package\">
                
                <h3 class=\"m-0\"><a href=\"{{ post.url }}/package/{{record.slug}}\">{{record.title |capitalize}}</a> </h3>
\t\t\t\t     <span class=\"pcountry\">{% if record.countries %}{% set ccount = 1 %}{% for scountry in record.countries %}{{ scountry.country|upper }}{% if ccount < record.countries|length %} |{% endif %}{% set ccount=ccount + 1 %}{% endfor %}{% endif %}</span>
\t\t\t\t\t 
                    <p class=\"pcities\">Cities Included:
\t\t\t\t\t{% if record.cities %}{% set ccount = 1 %}{% for scity in record.cities %}{{ scity.city }}{% if ccount < record.cities|length %} |{% endif %}{% set ccount=ccount + 1 %}{% endfor %}{% endif %}</p>
                    {% set price = 0 %}
                    {% set currencyCode = 0 %}
                    {% if record.price %}
                        {% for Precord in record.price %}
                            {% if Precord.currency == user_currency_code %}
                                {% set currencyCode = Precord.currency|upper %}
                            {% endif %}
                        {% endfor %}

                        {% if currencyCode==\"0\" %}
                            {% set currencyCode = 'USD' %}
                        {% endif %}
                        {% for Precord in record.price %}
                            {% if Precord.currency|upper == currencyCode|upper %}
                                {% set price = Precord.price %}
                            {% endif %}
                        {% endfor %}
                    {% endif %}
            <div class=\"packagePrice p-2 pl-4 pr-4\">
                <h3><span class=\"pr-3\"> {% if record.night %} {{record.night}} NIGHTS / {% endif
                        %}{% if record.days %} {{record.days}} DAYS {% endif %} </span>| <strong
                        class=\"pl-3\">{{currencyCode}} {{price| number_format}}*</strong></h3>
            </div>
                        <div class=\"facilities mt-3 d-block\">
                            
                            {% if record.hotel_stay %}
                            <span data-toggle=\"tooltip\" title=\"Hotel Stay\" {% if record.hotel_stay %} class=\"included\"
                                {% endif %}>
                                <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/b_hotel_stay.png'|theme }}\" />
                            </span>
                            {% endif %}
                            {% if record.domestic_flights %}
                            <span data-toggle=\"tooltip\" title=\"Domestic Flights\" {% if record.domestic_flights %}
                                class=\"included\" {% endif %}>
                                <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/b_domestic_flights.png'|theme }}\" />
                            </span>
                            {% endif %}
                            {% if record.breakfast_meals %}
                            <span data-toggle=\"tooltip\" title=\"Breakfast/Meals\" {% if record.breakfast_meals %}
                                class=\"included\" {% endif %}>
                                <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/b_breakfast_meals.png'|theme }}\" />
                            </span>
                            {% endif %}
                            {% if record.airport_transfers %}
                            <span data-toggle=\"tooltip\" title=\"Airport Transfers\" {% if record.airport_transfers %}
                                class=\"included\" {% endif %}>
                                <img width=\"18\" height=\"18\"
                                    src=\"{{ 'assets/img/svg/b_airport_transfers.png'|theme }}\" />
                            </span>
                            {% endif %}
                            {% if record.site_seeing %}
                            <span data-toggle=\"tooltip\" title=\"Site Seeing\" {% if record.site_seeing %} class=\"included\"
                                {% endif %}>
                                <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/b_site_seeing.png'|theme }}\" />
                            </span>
                            {% endif %}
                            {% if record.city_coach_tour %}
                            <span data-toggle=\"tooltip\" title=\"City Tour/Coach Tour\" {% if record.city_coach_tour %}
                                class=\"included\" {% endif %}>
                                <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/b_city_coach_tour.png'|theme }}\" />
                            </span>
                            {% endif %}
                            {% if record.tour_guide %}
                            <span data-toggle=\"tooltip\" title=\"Tour Guide\" {% if record.tour_guide %} class=\"included\"
                                {% endif %}>
                                <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/b_tour_guide.png'|theme }}\" />
                            </span>
                            {% endif %}
                            {% if record.train_tickets %}
                            <span data-toggle=\"tooltip\" title=\"Train Tickets\" {% if record.train_tickets %}
                                class=\"included\" {% endif %}>
                                <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/b_train_tickets.png'|theme }}\" />
                            </span>
                            {% endif %}
                            {% if record.entrance_fee_pass %}
                            <span data-toggle=\"tooltip\" title=\"Entrance Fee/ Pass\" {% if record.entrance_fee_pass %}
                                class=\"included\" {% endif %}>
                                <img width=\"18\" height=\"18\"
                                    src=\"{{ 'assets/img/svg/b_entrance_fee_pass.png'|theme }}\" />
                            </span>
                            {% endif %}
                            {% if record.cruising %}
                            <span data-toggle=\"tooltip\" title=\"Cruising\" {% if record.cruising %} class=\"included\" {%
                                endif %}>
                                <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/b_cruising.png'|theme }}\" />
                            </span>
                            {% endif %}
                            {% if record.entertainment %}
                            <span data-toggle=\"tooltip\" title=\"Entertainment\" {% if record.entertainment %}
                                class=\"included\" {% endif %}>
                                <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/b_entertainment.png'|theme }}\" />
                            </span>
                            {% endif %}
                            {% if record.sailing %}
                            <span data-toggle=\"tooltip\" title=\"Sailing\" {% if record.sailing %} class=\"included\" {%
                                endif %}>
                                <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/b_sailing.png'|theme }}\" />
                            </span>
                            {% endif %}
                            {% if record.hiking_walking_tour %}
                            <span data-toggle=\"tooltip\" title=\"Hiking/Walking Tour\" {% if record.hiking_walking_tour %}
                                class=\"included\" {% endif %}>
                                <img width=\"18\" height=\"18\"
                                    src=\"{{ 'assets/img/svg/b_hiking_walking_tour.png'|theme }}\" />
                            </span>
                            {% endif %}
                            {% if record.speed_boat %}
                            <span data-toggle=\"tooltip\" title=\"Speed Boat Transfers\" {% if record.speed_boat %}
                                class=\"included\" {% endif %}>
                                <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/b_speed_boat.png'|theme }}\" />
                            </span>
                            {% endif %}
                            {% if record.wellness %}
                            <span data-toggle=\"tooltip\" title=\"Wellness\tCamping\" {% if record.wellness %}
                                class=\"included\" {% endif %}>
                                <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/b_wellness.png'|theme }}\" />
                            </span>
                            {% endif %}
                            {% if record.camping %}
                            <span data-toggle=\"tooltip\" title=\"Wellness\tCamping\" {% if record.camping %}
                                class=\"included\" {% endif %}>
                                <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/b_camping.png'|theme }}\" />
                            </span>
                            {% endif %}
                            {% if record.canyoning %}
                            <span data-toggle=\"tooltip\" title=\"Canyoning\" {% if record.canyoning %} class=\"included\" {%
                                endif %}>
                                <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/b_canyoning.png'|theme }}\" />
                            </span>
                            {% endif %}
                            {% if record.campervan %}
                            <span data-toggle=\"tooltip\" title=\"Campervan\" {% if record.campervan %} class=\"included\" {%
                                endif %}>
                                <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/b_campervan.png'|theme }}\" />
                            </span>
                            {% endif %}
                            {% if record.para_gliding %}
                            <span data-toggle=\"tooltip\" title=\"Para Gliding\" {% if record.para_gliding %}
                                class=\"included\" {% endif %}>
                                <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/b_para_gliding.png'|theme }}\" />
                            </span>
                            {% endif %}
                            {% if record.bike_ride %}
                            <span data-toggle=\"tooltip\" title=\"Bike Ride\" {% if record.bike_ride %} class=\"included\" {%
                                endif %}>
                                <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/b_bike_ride.png'|theme }}\" />
                            </span>
                            {% endif %}
                            {% if record.diving %}
                            <span data-toggle=\"tooltip\" title=\"Diving\" {% if record.diving %} class=\"included\" {% endif
                                %}>
                                <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/b_diving.png'|theme }}\" />
                            </span>
                            {% endif %}
                            {% if record.scooter_ride %}
                            <span data-toggle=\"tooltip\" title=\"Scooter Ride\" {% if record.scooter_ride %}
                                class=\"included\" {% endif %}>
                                <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/b_scooter_ride.png'|theme }}\" />
                            </span>
                            {% endif %}
                            {% if record.zip_line %}
                            <span data-toggle=\"tooltip\" title=\"Zip line\" {% if record.zip_line %} class=\"included\" {%
                                endif %}>
                                <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/b_zip_line.png'|theme }}\" />
                            </span>
                            {% endif %}
                            {% if record.horse_ride %}
                            <span data-toggle=\"tooltip\" title=\"Horse Ride\" {% if record.horse_ride %} class=\"included\"
                                {% endif %}>
                                <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/b_horse_ride.png'|theme }}\" />
                            </span>
                            {% endif %}
                            {% if record.cooking_class %}
                            <span data-toggle=\"tooltip\" title=\"Cooking Class\" {% if record.cooking_class %}
                                class=\"included\" {% endif %}>
                                <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/b_cooking_class.png'|theme }}\" />
                            </span>
                            {% endif %}
                            {% if record.shopping_tour %}
                            <span data-toggle=\"tooltip\" title=\"Shopping Tour\" {% if record.shopping_tour %}
                                class=\"included\" {% endif %}>
                                <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/b_shopping_tour.png'|theme }}\" />
                            </span>
                            {% endif %}
                        </div>
            </div>
           
            <div class=\"wrapper-package rating-star\">
                {% if record.accomodation %}
                <p>
                    <b>{{record.accomodation}} Star Accomodation</b>
                    <span>
                        {% for i in 1..record.accomodation %}
                        <i class=\"fa fa-star\"></i>
                        {% endfor %}
                    </span>
                </p>
                <small class=\"pb-2 d-block\">*Price is starting from, per person on twin sharing</small>
                {% else %}{% endif %}


                {% if record.destinations %}
                    {% for destination in record.destinations %}
                    {% set dslug = destination.title %}
                    {% endfor %}
                {% endif %}

                
                <div class=\"clearfix\"></div>
                <a href=\"{{ post.url }}/package/{{record.slug}}\"
                    class=\"btn btn-secondary btn-lm packdetails\">Details</a>
                <a href=\"#enquiry-popup\" class=\"open-popup-link btn btn-lm packenquiry enquiry-in\"
                    data-ptitle=\"{{record.title}}\" data-ptitle=\"{{record.title}}\" data-unique_caption=\"{{record.unique_caption}}\" data-dslug=\"{{dslug}}\" {% if(record.overview_image.path) %}
                    data-pimage=\"{{record.banner.path}}\" {% else %} data-pimage=\"{{ 'assets/img/logo.jpg'|theme }}\" {%
                    endif %}>Enquiry</a>

            </div>
            </div>
        </div>
    {% endif %}
    {% endfor %}
    <div class=\"col-12\">
        {% if searchList.total > 10 %}
        <form action=\"\" method=\"POST\" class=\"paginationform news-pagination\">
            <ul class=\"pagination\" style=\"justify-content: center !important;\">
                <input type=\"hidden\" name=\"newscategories\" value=\"{{p_category}}\">
                <input type=\"hidden\" name=\"newstags\" value=\"{{p_tags}}\">
                {% if searchList.currentPage != 1 %}
                <li class=\"last\">
                    <a href=\"{{ '' | page }}?package={{get('package')}}&experience={{get('experience')}}&month={{get('month')}}&page=1\"
                        class=\"paginationbtn\">
                        <img src=\"/themes/SAN/assets/images/pagination-arrow.png\" class=\"firstimg\">
                        <img src=\"/themes/SAN/assets/images/pagination-arrow.png\" class=\"firstimg\"> First
                    </a>
                </li>
                {% endif %}

                {% if(searchList.currentPage != 1 ) %}

                {% if(searchList.currentPage == searchList.lastPage ) %}
                <li class=\"page\">
                    <a href=\"{{ '' | page }}?package={{get('package')}}&experience={{get('experience')}}&month={{get('month')}}&page={{searchList.currentPage-2}}\"
                        class=\"paginationbtn\">
                        {{searchList.currentPage - 2}}
                    </a>
                </li>
                {% endif %}

                <li class=\"page\">
                    <a href=\"{{ '' | page }}?package={{get('package')}}&experience={{get('experience')}}&month={{get('month')}}&page={{searchList.currentPage - 1}}\"
                        class=\"paginationbtn\">{{searchList.currentPage - 1}} </a>
                </li>
                {% endif %}

                <li class=\"page current\">
                    <a href=\"{{ '' | page }}?package={{get('package')}}&experience={{get('experience')}}&month={{get('month')}}&page={{searchList.currentPage}}\"
                        class=\"paginationbtn\">{{searchList.currentPage}}</a>
                </li>

                {% if(searchList.currentPage != searchList.lastPage ) %}
                <li class=\"page\">
                    <a href=\"{{ '' | page }}?package={{get('package')}}&experience={{get('experience')}}&month={{get('month')}}&page={{searchList.currentPage + 1}}\"
                        class=\"paginationbtn\">{{searchList.currentPage + 1}}</a>
                </li>
                {% endif %}

                {% if searchList.currentPage == 1 and searchList.total > 1 %}
                <li class=\"page\">
                    <a href=\"{{ '' | page }}?package={{get('package')}}&experience={{get('experience')}}&month={{get('month')}}&page={{searchList.currentPage+2}}\"
                        class=\"paginationbtn\">{{searchList.currentPage + 2 }} </a>
                </li>
                {% endif %}


                {% if(searchList.currentPage != searchList.lastPage ) %}
                <li class=\"last\">
                    <a href=\"{{ '' | page }}?package={{get('package')}}&experience={{get('experience')}}&month={{get('month')}}&page={{searchList.lastPage}}\"
                        class=\"paginationbtn\">Last
                        <img src=\"/themes/SAN/assets/images/pagination-arrow.png\">
                        <img src=\"/themes/SAN/assets/images/pagination-arrow.png\">
                    </a>
                </li>
                {% endif %}

            </ul>
        </form>
        {% endif %}
    </div>
    {% else %}
    <div class=\"col-12\">
        <p class=\"text-center\">No results found!</p>
    </div>
    {% endif %}
</div>
<style>
    .paginationform .firstimg {
        transform: rotate(180deg);
    }
</style>
<script>
    \$(document).ready(function () {
        \$(\".packenquiry\").on(\"click\", function () {
            var dslug = \$(this).attr(\"data-dslug\");
            var ptitle = \$(this).attr(\"data-ptitle\");
            var pimage = \$(this).attr(\"data-pimage\");
            var unique_caption = \$(this).attr(\"data-unique_caption\");
            var parentEl = \$(this).closest('.package_grid');
            var pcitieshtml = \$(parentEl).find('.pcountry').html();//\$(this).parent().parent().closest('.pcities').html();
            console.log(pcitieshtml);
            \$(\"#p-title\").html(ptitle);
            \$(\"#p-image\").attr(\"src\", pimage);
            \$(\"#pacage\").val(ptitle+' ('+pcitieshtml+')');
            \$(\"#experiences\").val(dslug);
            // \$(\"#dslug\").val(dslug);
            // \$(\"#experiences option[value='\" + dslug + \"']\").prop('selected', true);
        });
    });
</script>", "/Applications/MAMP/htdocs/itl/themes/SAN/partials/site/package.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 6, "for" => 7, "set" => 8);
        static $filters = array("length" => 6, "escape" => 22, "theme" => 29, "capitalize" => 34, "upper" => 35, "number_format" => 60, "page" => 268);
        static $functions = array("range" => 231, "get" => 268);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['length', 'escape', 'theme', 'capitalize', 'upper', 'number_format', 'page'],
                ['range', 'get']
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
