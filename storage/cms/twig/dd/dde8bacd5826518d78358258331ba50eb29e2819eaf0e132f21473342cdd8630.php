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

/* /Applications/MAMP/htdocs/itl/themes/SAN/pages/package.htm */
class __TwigTemplate_e8adba6fc9d727c99dc7465a739e2e5ed244baa50122d49d8b169c4f71547c5e extends \Twig\Template
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
        echo "<div class=\"banner-slider package-carousel\">
    <div class=\"slider-inner\">
        <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-interval=\"false\" >
            <ol class=\"carousel-indicators\">
                ";
        // line 5
        $context["dcount"] = 0;
        // line 6
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["package_List"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["s_package"]) {
            // line 7
            echo "                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["dcount"] ?? null), 7, $this->source), "html", null, true);
            echo "\" ";
            if ((($context["c_package"] ?? null) == twig_get_attribute($this->env, $this->source, $context["s_package"], "id", [], "any", false, false, true, 7))) {
                echo " class=\"active\" ";
            }
            echo "></li>
                    ";
            // line 8
            $context["dcount"] = (($context["dcount"] ?? null) + 1);
            // line 9
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s_package'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "            </ol>
            <div class=\"carousel-inner\">
                ";
        // line 12
        $context["count"] = 1;
        // line 13
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["package_List"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["s_package"]) {
            // line 14
            echo "                    <div class=\"carousel-item  ";
            if ((($context["c_package"] ?? null) == twig_get_attribute($this->env, $this->source, $context["s_package"], "id", [], "any", false, false, true, 14))) {
                echo " active  ";
            }
            echo " ";
            if ((null === ($context["c_package"] ?? null))) {
                echo " active  ";
            }
            echo "\">
                        <section class=\"hero_single version_2 full\" data-aos=\"zoom-in\" data-aos-duration=\"2000\">
                            <div class=\"wrapper\" style=\"background-image: url(";
            // line 16
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s_package"], "banner", [], "any", false, false, true, 16), "path", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo ");\">
                                <div class=\"container position-relative h-100\">
                                    <div class=\"banner_title\">
                                        <div class=\"banner_text\">
                                            <h1>";
            // line 20
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["expTitle"] ?? null), 20, $this->source), "html", null, true);
            echo "</h1>
                                            <h5>";
            // line 21
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["s_package"], "caption_new", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
            echo "</h5>
                                            <span class=\"line\"><em></em></span>
                        
                                            ";
            // line 24
            if (twig_get_attribute($this->env, $this->source, $context["s_package"], "video_iframe", [], "any", false, false, true, 24)) {
                // line 25
                echo "                                            <div style=\"padding-bottom:3%;\"></div>
                                            <div class=\"play-btn\">
                                                <span><img src=\"/themes/SAN/assets/images/play-btn.svg\"></span>
                                                Play Video
                                            </div>
                                            ";
            }
            // line 31
            echo "                                        </div>
                        
                                    </div>
                                </div>
                            </div>
                        </section>
                        ";
            // line 37
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/innerform.htm"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 38
            echo "                        <div class=\"bg_color_1 container package-detail\" data-aos=\"fade-up\" data-aos-duration=\"2000\">
                            <!-- /carousel -->
                            <div class=\"\" data-aos=\"fade-up\">
                                ";
            // line 41
            if (twig_get_attribute($this->env, $this->source, $context["s_package"], "caption", [], "any", false, false, true, 41)) {
                // line 42
                echo "                                <div class=\"main_title_2 mt-5\">
                                    <h2>";
                // line 43
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["s_package"], "caption", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                echo "</h2>
                                    <span><em></em></span>
                                </div>
                                <span class=\"populardetails font-size-medium\"><strong>";
                // line 46
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["s_package"], "sub_caption", [], "any", false, false, true, 46), 46, $this->source);
                echo "</strong></span><br/><br/>
                                ";
            }
            // line 48
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, $context["s_package"], "brief", [], "any", false, false, true, 48)) {
                // line 49
                echo "                                <div class=\"top-overview  text-center\">";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["s_package"], "brief", [], "any", false, false, true, 49), 49, $this->source);
                echo "</div>
                                ";
            } else {
                // line 51
                echo "                                <div class=\"top-overview text-center\">";
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["s_package"], "content", [], "any", false, false, true, 51), 51, $this->source)) > 300)) ? ((twig_slice($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["s_package"], "content", [], "any", false, false, true, 51), 51, $this->source), 0, 300) . "...")) : (twig_get_attribute($this->env, $this->source,                 // line 52
$context["s_package"], "content", [], "any", false, false, true, 52))), "html", null, true);
                echo "</div>
                                ";
            }
            // line 54
            echo "                                <div id=\"overview\" data-aos=\"fade-up\">
                                    <div class=\"main_title_2 mt-5  mb-3\">
                                        <h2>";
            // line 56
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["s_package"], "caption_new", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
            echo "</h2>
                                        <p>";
            // line 57
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["s_package"], "sub_title", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
            echo "</p>
                                    </div>
                                    <div class=\"facilities mb-3 roundedbg text-center\">
                                        ";
            // line 60
            if (twig_get_attribute($this->env, $this->source, $context["s_package"], "hotel_stay", [], "any", false, false, true, 60)) {
                // line 61
                echo "                                        <span data-toggle=\"tooltip\" title=\"Hotel Stay\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"";
                // line 62
                echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/hotel_stay.png"]);
                echo "\" />
                                        </span>
                                        ";
            }
            // line 65
            echo "                                        ";
            if (twig_get_attribute($this->env, $this->source, $context["s_package"], "domestic_flights", [], "any", false, false, true, 65)) {
                // line 66
                echo "                                        <span data-toggle=\"tooltip\" title=\"Domestic Flights\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"";
                // line 67
                echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/domestic_flights.png"]);
                echo "\" />
                                        </span>
                                        ";
            }
            // line 70
            echo "                                        ";
            if (twig_get_attribute($this->env, $this->source, $context["s_package"], "breakfast_meals", [], "any", false, false, true, 70)) {
                // line 71
                echo "                                        <span data-toggle=\"tooltip\" title=\"Breakfast/Meals\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"";
                // line 72
                echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/breakfast_meals.png"]);
                echo "\" />
                                        </span>
                                        ";
            }
            // line 75
            echo "                                        ";
            if (twig_get_attribute($this->env, $this->source, $context["s_package"], "airport_transfers", [], "any", false, false, true, 75)) {
                // line 76
                echo "                                        <span data-toggle=\"tooltip\" title=\"Airport Transfers\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"";
                // line 77
                echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/airport_transfers.png"]);
                echo "\" />
                                        </span>
                                        ";
            }
            // line 80
            echo "                                        ";
            if (twig_get_attribute($this->env, $this->source, $context["s_package"], "site_seeing", [], "any", false, false, true, 80)) {
                // line 81
                echo "                                        <span data-toggle=\"tooltip\" title=\"Sightseeing\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"";
                // line 82
                echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/site_seeing.png"]);
                echo "\" />
                                        </span>
                                        ";
            }
            // line 85
            echo "                                        ";
            if (twig_get_attribute($this->env, $this->source, $context["s_package"], "city_coach_tour", [], "any", false, false, true, 85)) {
                // line 86
                echo "                                        <span data-toggle=\"tooltip\" title=\"City Tour/Coach Tour\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"";
                // line 87
                echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/city_coach_tour.png"]);
                echo "\" />
                                        </span>
                                        ";
            }
            // line 90
            echo "                                        ";
            if (twig_get_attribute($this->env, $this->source, $context["s_package"], "tour_guide", [], "any", false, false, true, 90)) {
                // line 91
                echo "                                        <span data-toggle=\"tooltip\" title=\"Tour Guide\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"";
                // line 92
                echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/tour_guide.png"]);
                echo "\" />
                                        </span>
                                        ";
            }
            // line 95
            echo "                                        ";
            if (twig_get_attribute($this->env, $this->source, $context["s_package"], "train_tickets", [], "any", false, false, true, 95)) {
                // line 96
                echo "                                        <span data-toggle=\"tooltip\" title=\"Train Tickets\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"";
                // line 97
                echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/train_tickets.png"]);
                echo "\" />
                                        </span>
                                        ";
            }
            // line 100
            echo "                                        ";
            if (twig_get_attribute($this->env, $this->source, $context["s_package"], "entrance_fee_pass", [], "any", false, false, true, 100)) {
                // line 101
                echo "                                        <span data-toggle=\"tooltip\" title=\"Entrance Fee/ Pass\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"";
                // line 102
                echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/entrance_fee_pass.png"]);
                echo "\" />
                                        </span>
                                        ";
            }
            // line 105
            echo "                                        ";
            if (twig_get_attribute($this->env, $this->source, $context["s_package"], "cruising", [], "any", false, false, true, 105)) {
                // line 106
                echo "                                        <span data-toggle=\"tooltip\" title=\"Cruising\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"";
                // line 107
                echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/cruising.png"]);
                echo "\" />
                                        </span>
                                        ";
            }
            // line 110
            echo "                                        ";
            if (twig_get_attribute($this->env, $this->source, $context["s_package"], "entertainment", [], "any", false, false, true, 110)) {
                // line 111
                echo "                                        <span data-toggle=\"tooltip\" title=\"Entertainment\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"";
                // line 112
                echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/entertainment.png"]);
                echo "\" />
                                        </span>
                                        ";
            }
            // line 115
            echo "                                        ";
            if (twig_get_attribute($this->env, $this->source, $context["s_package"], "sailing", [], "any", false, false, true, 115)) {
                // line 116
                echo "                                        <span data-toggle=\"tooltip\" title=\"Sailing\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"";
                // line 117
                echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/sailing.png"]);
                echo "\" />
                                        </span>
                                        ";
            }
            // line 120
            echo "                                        ";
            if (twig_get_attribute($this->env, $this->source, $context["s_package"], "hiking_walking_tour", [], "any", false, false, true, 120)) {
                // line 121
                echo "                                        <span data-toggle=\"tooltip\" title=\"Hiking/Walking Tour\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"";
                // line 122
                echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/hiking_walking_tour.png"]);
                echo "\" />
                                        </span>
                                        ";
            }
            // line 125
            echo "                                        ";
            if (twig_get_attribute($this->env, $this->source, $context["s_package"], "speed_boat", [], "any", false, false, true, 125)) {
                // line 126
                echo "                                        <span data-toggle=\"tooltip\" title=\"Speed Boat Transfers\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"";
                // line 127
                echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/speed_boat.png"]);
                echo "\" />
                                        </span>
                                        ";
            }
            // line 130
            echo "                                        ";
            if (twig_get_attribute($this->env, $this->source, $context["s_package"], "wellness", [], "any", false, false, true, 130)) {
                // line 131
                echo "                                        <span data-toggle=\"tooltip\" title=\"Wellness\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"";
                // line 132
                echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/wellness.png"]);
                echo "\" />
                                        </span>
                                        ";
            }
            // line 135
            echo "                                        ";
            if (twig_get_attribute($this->env, $this->source, $context["s_package"], "camping", [], "any", false, false, true, 135)) {
                // line 136
                echo "                                        <span data-toggle=\"tooltip\" title=\"Camping\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"";
                // line 137
                echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/camping.png"]);
                echo "\" />
                                        </span>
                                        ";
            }
            // line 140
            echo "                                        ";
            if (twig_get_attribute($this->env, $this->source, $context["s_package"], "canyoning", [], "any", false, false, true, 140)) {
                // line 141
                echo "                                        <span data-toggle=\"tooltip\" title=\"Canyoning\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"";
                // line 142
                echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/canyoning.png"]);
                echo "\" />
                                        </span>
                                        ";
            }
            // line 145
            echo "                                        ";
            if (twig_get_attribute($this->env, $this->source, $context["s_package"], "campervan", [], "any", false, false, true, 145)) {
                // line 146
                echo "                                        <span data-toggle=\"tooltip\" title=\"Campervan\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"";
                // line 147
                echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/campervan.png"]);
                echo "\" />
                                        </span>
                                        ";
            }
            // line 150
            echo "                                        ";
            if (twig_get_attribute($this->env, $this->source, $context["s_package"], "para_gliding", [], "any", false, false, true, 150)) {
                // line 151
                echo "                                        <span data-toggle=\"tooltip\" title=\"Para Gliding\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"";
                // line 152
                echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/para_gliding.png"]);
                echo "\" />
                                        </span>
                                        ";
            }
            // line 155
            echo "                                        ";
            if (twig_get_attribute($this->env, $this->source, $context["s_package"], "bike_ride", [], "any", false, false, true, 155)) {
                // line 156
                echo "                                        <span data-toggle=\"tooltip\" title=\"Bike Ride\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"";
                // line 157
                echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/bike_ride.png"]);
                echo "\" />
                                        </span>
                                        ";
            }
            // line 160
            echo "                                        ";
            if (twig_get_attribute($this->env, $this->source, $context["s_package"], "diving", [], "any", false, false, true, 160)) {
                // line 161
                echo "                                        <span data-toggle=\"tooltip\" title=\"Diving\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"";
                // line 162
                echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/diving.png"]);
                echo "\" />
                                        </span>
                                        ";
            }
            // line 165
            echo "                                        ";
            if (twig_get_attribute($this->env, $this->source, $context["s_package"], "scooter_ride", [], "any", false, false, true, 165)) {
                // line 166
                echo "                                        <span data-toggle=\"tooltip\" title=\"Scooter Ride\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"";
                // line 167
                echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/scooter_ride.png"]);
                echo "\" />
                                        </span>
                                        ";
            }
            // line 170
            echo "                                        ";
            if (twig_get_attribute($this->env, $this->source, $context["s_package"], "zip_line", [], "any", false, false, true, 170)) {
                // line 171
                echo "                                        <span data-toggle=\"tooltip\" title=\"Zip line\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"";
                // line 172
                echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/zip_line.png"]);
                echo "\" />
                                        </span>
                                        ";
            }
            // line 175
            echo "                                        ";
            if (twig_get_attribute($this->env, $this->source, $context["s_package"], "horse_ride", [], "any", false, false, true, 175)) {
                // line 176
                echo "                                        <span data-toggle=\"tooltip\" title=\"Horse Ride\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"";
                // line 177
                echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/horse_ride.png"]);
                echo "\" />
                                        </span>
                                        ";
            }
            // line 180
            echo "                                        ";
            if (twig_get_attribute($this->env, $this->source, $context["s_package"], "cooking_class", [], "any", false, false, true, 180)) {
                // line 181
                echo "                                        <span data-toggle=\"tooltip\" title=\"Cooking Class\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"";
                // line 182
                echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/cooking_class.png"]);
                echo "\" />
                                        </span>
                                        ";
            }
            // line 185
            echo "                                        ";
            if (twig_get_attribute($this->env, $this->source, $context["s_package"], "shopping_tour", [], "any", false, false, true, 185)) {
                // line 186
                echo "                                        <span data-toggle=\"tooltip\" title=\"Shopping Tour\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"";
                // line 187
                echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/img/svg/shopping_tour.png"]);
                echo "\" />
                                        </span>
                                        ";
            }
            // line 190
            echo "                                        
                                        ";
            // line 191
            if (twig_get_attribute($this->env, $this->source, $context["s_package"], "others", [], "any", false, false, true, 191)) {
                // line 192
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["s_package"], "others", [], "any", false, false, true, 192));
                foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                    // line 193
                    echo "                                        <span data-toggle=\"tooltip\" title=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 193), 193, $this->source), "html", null, true);
                    echo "\"><img width=\"18\" height=\"18\"
                                                src=\"";
                    // line 194
                    echo twig_escape_filter($this->env, $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "icon", [], "any", false, false, true, 194), 194, $this->source)), "html", null, true);
                    echo "\" /></span>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 196
                echo "                                        ";
            }
            // line 197
            echo "                        
                                    </div>
                                    <p class=\"country_list mb-5\" style=\"margin-bottom:1rem !important;\">
                                        ";
            // line 200
            if (twig_get_attribute($this->env, $this->source, $context["s_package"], "cities", [], "any", false, false, true, 200)) {
                // line 201
                echo "                                            ";
                $context["ccount"] = 1;
                // line 202
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["s_package"], "cities", [], "any", false, false, true, 202));
                foreach ($context['_seq'] as $context["_key"] => $context["scity"]) {
                    // line 203
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["scity"], "city", [], "any", false, false, true, 203), 203, $this->source), "html", null, true);
                    echo "
                                                ";
                    // line 204
                    if ((($context["ccount"] ?? null) < twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s_package"], "cities", [], "any", false, false, true, 204)))) {
                        // line 205
                        echo "                                                | 
                                                ";
                    }
                    // line 207
                    echo "                                                ";
                    $context["ccount"] = (($context["ccount"] ?? null) + 1);
                    // line 208
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scity'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 209
                echo "                                        ";
            }
            // line 210
            echo "                                    </p>
                                    

                                    ";
            // line 213
            $context["pack_price"] = 0;
            // line 214
            echo "                                    ";
            $context["currencyCode"] = 0;
            // line 215
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["s_package"], "price", [], "any", false, false, true, 215)) {
                // line 216
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["s_package"], "price", [], "any", false, false, true, 216));
                foreach ($context['_seq'] as $context["_key"] => $context["Precord"]) {
                    // line 217
                    echo "                                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["Precord"], "currency", [], "any", false, false, true, 217) == ($context["user_currency_code"] ?? null))) {
                        // line 218
                        echo "                                                ";
                        $context["currencyCode"] = twig_upper_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["Precord"], "currency", [], "any", false, false, true, 218), 218, $this->source));
                        // line 219
                        echo "                                            ";
                    }
                    // line 220
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Precord'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 221
                echo "
                                        ";
                // line 222
                if ((($context["currencyCode"] ?? null) == "0")) {
                    // line 223
                    echo "                                            ";
                    $context["currencyCode"] = "USD";
                    // line 224
                    echo "                                        ";
                }
                // line 225
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["s_package"], "price", [], "any", false, false, true, 225));
                foreach ($context['_seq'] as $context["_key"] => $context["Precord"]) {
                    // line 226
                    echo "                                            ";
                    if ((twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Precord"], "currency", [], "any", false, false, true, 226)) == twig_upper_filter($this->env, ($context["currencyCode"] ?? null)))) {
                        // line 227
                        echo "                                                ";
                        $context["pack_price"] = twig_get_attribute($this->env, $this->source, $context["Precord"], "price", [], "any", false, false, true, 227);
                        // line 228
                        echo "                                            ";
                    }
                    // line 229
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Precord'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 230
                echo "                                    ";
            }
            // line 231
            echo "
                                    <div class=\"new-days-design\">";
            // line 232
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["s_package"], "days", [], "any", false, false, true, 232), 232, $this->source), "html", null, true);
            echo " DAYS FROM <span>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["currencyCode"] ?? null), 232, $this->source), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["pack_price"] ?? null), 232, $this->source)), "html", null, true);
            echo "*</span></div>
                                    ";
            // line 233
            if ((twig_get_attribute($this->env, $this->source, $context["s_package"], "days", [], "any", false, false, true, 233) != "")) {
                // line 234
                echo "                                    ";
                // line 235
                echo "                                    ";
            }
            // line 236
            echo "                                    <div class=\"table-responsive d-none\">
                                        <div class=\"wrapper-package\">
                                            <div class=\"packagePrice light text-center\">
                                                ";
            // line 239
            $context["price"] = 0;
            // line 240
            echo "                                                ";
            if (twig_get_attribute($this->env, $this->source, $context["s_package"], "price", [], "any", false, false, true, 240)) {
                // line 241
                echo "                                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["s_package"], "price", [], "any", false, false, true, 241));
                foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                    // line 242
                    echo "                                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["record"], "currency", [], "any", false, false, true, 242) == twig_get_attribute($this->env, $this->source, ($context["apiFunction"] ?? null), "getCurrentCurrency", [], "method", false, false, true, 242))) {
                        // line 243
                        echo "                                                ";
                        $context["currencyCode"] = twig_upper_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "currency", [], "any", false, false, true, 243), 243, $this->source));
                        // line 244
                        echo "                                                ";
                    }
                    // line 245
                    echo "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 246
                echo "                        
                                                ";
                // line 247
                if ((($context["currencyCode"] ?? null) == "")) {
                    // line 248
                    echo "                                                ";
                    $context["currencyCode"] = "USD";
                    // line 249
                    echo "                                                ";
                }
                // line 250
                echo "                        
                                                ";
                // line 251
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["s_package"], "price", [], "any", false, false, true, 251));
                foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                    // line 252
                    echo "                                                ";
                    if ((twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "currency", [], "any", false, false, true, 252)) == twig_upper_filter($this->env, ($context["currencyCode"] ?? null)))) {
                        // line 253
                        echo "                                                ";
                        $context["price"] = twig_get_attribute($this->env, $this->source, $context["record"], "price", [], "any", false, false, true, 253);
                        // line 254
                        echo "                                                ";
                    }
                    // line 255
                    echo "                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 256
                echo "                                                ";
            }
            // line 257
            echo "                        
                                                <h3><span class=\"pr-3 \">";
            // line 258
            if (twig_get_attribute($this->env, $this->source, $context["s_package"], "night", [], "any", false, false, true, 258)) {
                echo " ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["s_package"], "night", [], "any", false, false, true, 258), 258, $this->source), "html", null, true);
                echo "
                                                        NIGHTS / ";
            }
            // line 259
            if (twig_get_attribute($this->env, $this->source, $context["s_package"], "days", [], "any", false, false, true, 259)) {
                echo " ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["s_package"], "days", [], "any", false, false, true, 259), 259, $this->source), "html", null, true);
                echo "
                                                        DAYS ";
            }
            // line 260
            echo "</span>| <strong class=\"pl-3\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["currencyCode"] ?? null), 260, $this->source), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["price"] ?? null), 260, $this->source), "html", null, true);
            echo "*</strong></h3>
                                            </div>
                                        </div>
                                    </div>
                        

                                    

                                    ";
            // line 284
            echo "                        
                                </div>
                                <div class=\"mbottom50\" id=\"packageboxes\">
                                    <div class=\"packageboxes mt-5\" data-aos=\"fade-up\">
                                        <div class=\"row no-gutters\">
                                            ";
            // line 289
            if ((twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["s_package"], "dates", [], "any", false, false, true, 289)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "from", [], "any", false, false, true, 289) != "")) {
                // line 290
                echo "                                            <div class=\"col-md-6\">
                                                <div class=\"packageboxes-content\">
                                                    <div class=\"packageboxes-title\">
                                                        <h2 class=\"mt-0\">TOUR DATES</h2>
                                                        <span><em></em></span>
                                                    </div>
                                                    <div class=\"packageboxes-detail\">
                                                        <ul>
                                                            ";
                // line 298
                if ((twig_get_attribute($this->env, $this->source, $context["s_package"], "dates", [], "any", false, false, true, 298) != null)) {
                    // line 299
                    echo "                                                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["s_package"], "dates", [], "any", false, false, true, 299));
                    foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                        // line 300
                        echo "                                                                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["record"], "from", [], "any", false, false, true, 300) != null)) {
                            // line 301
                            echo "                                                                        <li>";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "from", [], "any", false, false, true, 301), 301, $this->source), "d M"), "html", null, true);
                            echo " - ";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "to", [], "any", false, false, true, 301), 301, $this->source), "d M Y"), "html", null, true);
                            echo "</li>
                                                                    ";
                        }
                        // line 303
                        echo "                                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 304
                    echo "                                                            ";
                }
                // line 305
                echo "                                                        </ul>
                        
                                                        ";
                // line 307
                if (twig_get_attribute($this->env, $this->source, $context["s_package"], "nearest_airport", [], "any", false, false, true, 307)) {
                    // line 308
                    echo "                                                        ";
                    $context["acount"] = 1;
                    // line 309
                    echo "                                                        <p><strong><i>Nearest Airports:</i></strong><br />
                                                            ";
                    // line 310
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["s_package"], "nearest_airport", [], "any", false, false, true, 310));
                    foreach ($context['_seq'] as $context["_key"] => $context["airports"]) {
                        // line 311
                        echo "                                                            ";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["airports"], "airport", [], "any", false, false, true, 311), 311, $this->source), "html", null, true);
                        if ((($context["acount"] ?? null) < twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s_package"], "nearest_airport", [], "any", false, false, true, 311)))) {
                            echo ", ";
                        }
                        // line 312
                        echo "                                                            ";
                        $context["acount"] = (($context["acount"] ?? null) + 1);
                        // line 313
                        echo "                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['airports'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 314
                    echo "                                                        </p>
                                                        ";
                }
                // line 316
                echo "                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-6 d-none d-md-block  mb-4\">
                                                ";
                // line 320
                if (twig_get_attribute($this->env, $this->source, $context["s_package"], "date_image", [], "any", false, false, true, 320)) {
                    // line 321
                    echo "                                                <figure class=\"package-figure cut-left\"
                                                    style=\"background-image:url(";
                    // line 322
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s_package"], "date_image", [], "any", false, false, true, 322), "getThumb", [0 => 525, 1 => 525, 2 => ["mode" => "crop"]], "method", false, false, true, 322), 322, $this->source), "html", null, true);
                    echo ")\">
                                                </figure>
                                                ";
                } else {
                    // line 325
                    echo "                                                <figure class=\"package-figure\"
                                                    style=\"background-image:url('themes/SAN/assets/img/logo.jpg')\">
                                                </figure>
                                                ";
                }
                // line 329
                echo "                                            </div>
                                            ";
            }
            // line 331
            echo "                                        </div>
                                    </div>
                                    ";
            // line 333
            if (twig_get_attribute($this->env, $this->source, $context["s_package"], "content", [], "any", false, false, true, 333)) {
                // line 334
                echo "                                    <div class=\"packageboxes mt-5\" data-aos=\"fade-up\">
                                        <div class=\"row no-gutters\">
                                            <div class=\"col-md-6 mb-4\">
                                                ";
                // line 337
                if (twig_get_attribute($this->env, $this->source, $context["s_package"], "overview_image", [], "any", false, false, true, 337)) {
                    // line 338
                    echo "                                                <figure class=\"package-figure\"
                                                    style=\"background-image:url(";
                    // line 339
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s_package"], "overview_image", [], "any", false, false, true, 339), "getThumb", [0 => 525, 1 => 525, 2 => ["mode" => "crop"]], "method", false, false, true, 339), 339, $this->source), "html", null, true);
                    echo ")\">
                                                </figure>
                                                ";
                } else {
                    // line 342
                    echo "                                                <figure class=\"package-figure\"
                                                    style=\"background-image:url('themes/SAN/assets/img/logo.jpg')\">
                                                </figure>
                                                ";
                }
                // line 346
                echo "                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"packageboxes-content\">
                                                    <div class=\"packageboxes-title\">
                                                        <h2 class=\"mt-0\">OVERVIEW</h2>
                                                        <span><em></em></span>
                                                    </div>
                                                    <div class=\"packageboxes-detail\">
                                                        ";
                // line 354
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["s_package"], "content", [], "any", false, false, true, 354), 354, $this->source);
                echo "
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    ";
            }
            // line 361
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["s_package"], "inclusions", [], "any", false, false, true, 361) || twig_get_attribute($this->env, $this->source, $context["s_package"], "exclusions", [], "any", false, false, true, 361))) {
                // line 362
                echo "                                    <div class=\"packageboxes mt-5\" data-aos=\"fade-up\">
                                        <div class=\"row no-gutters\">
                                            <div class=\"col-md-6 mb-4\">
                                                ";
                // line 365
                if (twig_get_attribute($this->env, $this->source, $context["s_package"], "inclusions_image", [], "any", false, false, true, 365)) {
                    // line 366
                    echo "                                                <figure class=\"package-figure\"
                                                    style=\"background-image:url(";
                    // line 367
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["s_package"], "inclusions_image", [], "any", false, false, true, 367), "getThumb", [0 => 525, 1 => 525, 2 => ["mode" => "crop"]], "method", false, false, true, 367), 367, $this->source), "html", null, true);
                    echo ")\">
                                                </figure>
                                                ";
                } else {
                    // line 370
                    echo "                                                <figure class=\"package-figure\"
                                                    style=\"background-image:url('themes/SAN/assets/img/logo.jpg')\">
                                                </figure>
                                                ";
                }
                // line 374
                echo "                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"packageboxes-content\">
                                                    <div class=\"packageboxes-detail\">
                                                        ";
                // line 378
                if (twig_get_attribute($this->env, $this->source, $context["s_package"], "inclusions", [], "any", false, false, true, 378)) {
                    // line 379
                    echo "                                                        <h2 class=\"mt-0\">INCLUSIONS</h2>
                                                        <span><em></em></span>
                                                        <ul class=\"numbers\">
                                                            ";
                    // line 382
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["s_package"], "inclusions", [], "any", false, false, true, 382));
                    foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                        // line 383
                        echo "                                                            <li><span>&ndash; </span>";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "point", [], "any", false, false, true, 383), 383, $this->source), "html", null, true);
                        echo "</li>
                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 385
                    echo "                                                        </ul>
                                                        ";
                }
                // line 387
                echo "                        
                                                        ";
                // line 388
                if (twig_get_attribute($this->env, $this->source, $context["s_package"], "exclusions", [], "any", false, false, true, 388)) {
                    // line 389
                    echo "                                                        <p style=\"font-size: 18px;\">EXCLUSIONS</p>
                                                        <ul class=\"numbers\">
                                                            ";
                    // line 391
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["s_package"], "exclusions", [], "any", false, false, true, 391));
                    foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                        // line 392
                        echo "                                                                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["record"], "point", [], "any", false, false, true, 392) != "")) {
                            // line 393
                            echo "                                                                    <li><span>&ndash; </span>";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "point", [], "any", false, false, true, 393), 393, $this->source), "html", null, true);
                            echo "</li>
                                                                ";
                        }
                        // line 395
                        echo "                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 396
                    echo "                                                        </ul>
                                                        ";
                }
                // line 398
                echo "                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    ";
            }
            // line 404
            echo "                        
                                </div>
                        
                                <div class=\"itinarary-conditions\">
                                    <div class=\"container\">
                        
                                        <div class=\"ic-box\">
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"custom-accordions\">
                                                        <button class=\"text-link itinerary_btn\">ITINERARY</button>
                                                    </div>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"custom-accordions-desc itinerary_desc\" style=\"display: none;\">
                                                        ";
            // line 419
            $context["idcount"] = 1;
            // line 420
            echo "                                                        ";
            $context["collapsid"] = 1;
            // line 421
            echo "                                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["s_package"], "itineraries", [], "any", false, false, true, 421));
            foreach ($context['_seq'] as $context["_key"] => $context["itinerary"]) {
                // line 422
                echo "                                                        <div class=\"custom-accord\">
                        
                                                            <div class=\"accordion\">
                                                                <div class=\"accordion-item\">
                                                                    <h2 class=\"c-accordion-title\">
                                                                        <span class=\"ca-text-link\" id=\"package_acc_";
                // line 427
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["idcount"] ?? null), 427, $this->source), "html", null, true);
                echo "\">
                                                                            ";
                // line 428
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["itinerary"], "title", [], "any", false, false, true, 428), 428, $this->source), "html", null, true);
                echo "
                                                                        </span>
                                                                    </h2>
                                                                    <div class=\"c-accordion-desc\">
                                                                        <div class=\"c-accord-desc-inner package_acc_";
                // line 432
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["idcount"] ?? null), 432, $this->source), "html", null, true);
                echo "\"
                                                                            id=\"collapse_";
                // line 433
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["collapsid"] ?? null), 433, $this->source), "html", null, true);
                echo "\">
                                                                            ";
                // line 434
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["itinerary"], "desc", [], "any", false, false, true, 434), 434, $this->source);
                echo "
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- <div class=\"day-count\">
                                                                <h3>";
                // line 440
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["itinerary"], "title", [], "any", false, false, true, 440), 440, $this->source), "html", null, true);
                echo "</h3>
                                                            </div>
                                                            <div class=\"day-activity\">
                                                                ";
                // line 443
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["itinerary"], "desc", [], "any", false, false, true, 443), 443, $this->source);
                echo "
                                                            </div> -->
                                                        </div>
                                                        ";
                // line 446
                $context["collapsid"] = (($context["collapsid"] ?? null) + 1);
                // line 447
                echo "                                                        ";
                $context["idcount"] = (($context["idcount"] ?? null) + 1);
                // line 448
                echo "                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itinerary'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 449
            echo "                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                        
                                        <div class=\"ic-box\">
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"custom-accordions\">
                                                        <button class=\"text-link conditions_btn\">Conditions</button>
                                                    </div>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"custom-accordions-desc\">
                                                        <div class=\"custom-accord conditions_desc\" style=\"display: none;\">
                                                            <div class=\"custom-accordions-desc\">
                                                                ";
            // line 465
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["s_package"], "conditions", [], "any", false, false, true, 465), 465, $this->source);
            echo "
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                        
                                    </div>
                                </div>
                        
                                <div class=\"makeenquiry mtop75 mbottom50\">
                                    <div style=\"border-bottom: 1px solid #aaa;\" class=\"pb-5 mb-5\">
                                        <a href=\"#enquiry-popup\" class=\" open-popup-link btn btn-lm packenquiry enquiry-in mb-5\">MAKE AN
                                            ENQUIRY</a>
                                        ";
            // line 480
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["s_package"], "enquiry_desc", [], "any", false, false, true, 480), 480, $this->source);
            echo "
                        
                                    </div>
                        
                                    ";
            // line 484
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["s_package"], "contact_desc", [], "any", false, false, true, 484), 484, $this->source);
            echo "
                        
                        
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div> 
                    </div>
                    ";
            // line 492
            $context["count"] = 2;
            // line 493
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s_package'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 494
        echo "            </div>
            <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Next</span>
            </a>
            </div>
    
    </div>
    </div>



<div id=\"enquiry-popup\" class=\"white-popup mfp-hide\">
    ";
        // line 511
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/packageenquiryform"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 512
        echo "</div>
<div id=\"after-submit-popup\" class=\"white-popup mfp-hide\">
    <div id=\"sign-in-dialog\" class=\"zoom-anim-dialog\">
        <div class=\"modalbody\">
            <div class=\"small-dialog-header\">
                <h3><img src=\"themes/SAN/assets/images/mail.svg\" class=\"img-fluid mail\"
                        alt=\"\">Successfully sent</h3>
            </div>
        </div>
        <div style=\"padding: 80px 10px;\">
            <h4>Form has been submitted successfully!</h4>
        </div>
        <button title=\"Close (Esc)\" type=\"button\" class=\"mfp-close\"></button>
    </div>
</div>

<style>
    .hidedays {
        display: none !important;
    }

    .showdays {
        display: unset !important;
    }
</style>
<script>

    \$(document).ready(function () {
        \$(\".itinerary_btn\").click(function () {
            \$(\".itinerary_desc\").slideToggle(800, 'linear');
        });

        \$(\".conditions_btn\").click(function () {
            \$(\".conditions_desc\").slideToggle(800, 'linear');
        });
    });

    \$('.open-popup-link').magnificPopup({
        type: 'inline',
        showCloseBtn: true,
        callbacks: {
            open: function () {
                \$('#sign-in-dialog').append(\$('.mfp-close'))
            },
        },
        midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
    });
</script>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/itl/themes/SAN/pages/package.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1160 => 512,  1156 => 511,  1137 => 494,  1131 => 493,  1129 => 492,  1118 => 484,  1111 => 480,  1093 => 465,  1075 => 449,  1069 => 448,  1066 => 447,  1064 => 446,  1058 => 443,  1052 => 440,  1043 => 434,  1039 => 433,  1035 => 432,  1028 => 428,  1024 => 427,  1017 => 422,  1012 => 421,  1009 => 420,  1007 => 419,  990 => 404,  982 => 398,  978 => 396,  972 => 395,  966 => 393,  963 => 392,  959 => 391,  955 => 389,  953 => 388,  950 => 387,  946 => 385,  937 => 383,  933 => 382,  928 => 379,  926 => 378,  920 => 374,  914 => 370,  908 => 367,  905 => 366,  903 => 365,  898 => 362,  895 => 361,  885 => 354,  875 => 346,  869 => 342,  863 => 339,  860 => 338,  858 => 337,  853 => 334,  851 => 333,  847 => 331,  843 => 329,  837 => 325,  831 => 322,  828 => 321,  826 => 320,  820 => 316,  816 => 314,  810 => 313,  807 => 312,  801 => 311,  797 => 310,  794 => 309,  791 => 308,  789 => 307,  785 => 305,  782 => 304,  776 => 303,  768 => 301,  765 => 300,  760 => 299,  758 => 298,  748 => 290,  746 => 289,  739 => 284,  725 => 260,  718 => 259,  711 => 258,  708 => 257,  705 => 256,  699 => 255,  696 => 254,  693 => 253,  690 => 252,  686 => 251,  683 => 250,  680 => 249,  677 => 248,  675 => 247,  672 => 246,  666 => 245,  663 => 244,  660 => 243,  657 => 242,  652 => 241,  649 => 240,  647 => 239,  642 => 236,  639 => 235,  637 => 234,  635 => 233,  627 => 232,  624 => 231,  621 => 230,  615 => 229,  612 => 228,  609 => 227,  606 => 226,  601 => 225,  598 => 224,  595 => 223,  593 => 222,  590 => 221,  584 => 220,  581 => 219,  578 => 218,  575 => 217,  570 => 216,  567 => 215,  564 => 214,  562 => 213,  557 => 210,  554 => 209,  548 => 208,  545 => 207,  541 => 205,  539 => 204,  534 => 203,  529 => 202,  526 => 201,  524 => 200,  519 => 197,  516 => 196,  508 => 194,  503 => 193,  498 => 192,  496 => 191,  493 => 190,  487 => 187,  484 => 186,  481 => 185,  475 => 182,  472 => 181,  469 => 180,  463 => 177,  460 => 176,  457 => 175,  451 => 172,  448 => 171,  445 => 170,  439 => 167,  436 => 166,  433 => 165,  427 => 162,  424 => 161,  421 => 160,  415 => 157,  412 => 156,  409 => 155,  403 => 152,  400 => 151,  397 => 150,  391 => 147,  388 => 146,  385 => 145,  379 => 142,  376 => 141,  373 => 140,  367 => 137,  364 => 136,  361 => 135,  355 => 132,  352 => 131,  349 => 130,  343 => 127,  340 => 126,  337 => 125,  331 => 122,  328 => 121,  325 => 120,  319 => 117,  316 => 116,  313 => 115,  307 => 112,  304 => 111,  301 => 110,  295 => 107,  292 => 106,  289 => 105,  283 => 102,  280 => 101,  277 => 100,  271 => 97,  268 => 96,  265 => 95,  259 => 92,  256 => 91,  253 => 90,  247 => 87,  244 => 86,  241 => 85,  235 => 82,  232 => 81,  229 => 80,  223 => 77,  220 => 76,  217 => 75,  211 => 72,  208 => 71,  205 => 70,  199 => 67,  196 => 66,  193 => 65,  187 => 62,  184 => 61,  182 => 60,  176 => 57,  172 => 56,  168 => 54,  163 => 52,  161 => 51,  155 => 49,  152 => 48,  147 => 46,  141 => 43,  138 => 42,  136 => 41,  131 => 38,  127 => 37,  119 => 31,  111 => 25,  109 => 24,  103 => 21,  99 => 20,  92 => 16,  80 => 14,  75 => 13,  73 => 12,  69 => 10,  63 => 9,  61 => 8,  52 => 7,  47 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"banner-slider package-carousel\">
    <div class=\"slider-inner\">
        <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-interval=\"false\" >
            <ol class=\"carousel-indicators\">
                {% set dcount = 0 %}
                {% for s_package in package_List %}
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"{{dcount}}\" {% if c_package == s_package.id %} class=\"active\" {% endif %}></li>
                    {% set dcount = dcount + 1 %}
                {% endfor %}
            </ol>
            <div class=\"carousel-inner\">
                {% set count = 1 %}
                {% for s_package in package_List %}
                    <div class=\"carousel-item  {% if c_package == s_package.id %} active  {% endif %} {% if c_package is null %} active  {% endif %}\">
                        <section class=\"hero_single version_2 full\" data-aos=\"zoom-in\" data-aos-duration=\"2000\">
                            <div class=\"wrapper\" style=\"background-image: url({{s_package.banner.path}});\">
                                <div class=\"container position-relative h-100\">
                                    <div class=\"banner_title\">
                                        <div class=\"banner_text\">
                                            <h1>{{expTitle}}</h1>
                                            <h5>{{s_package.caption_new}}</h5>
                                            <span class=\"line\"><em></em></span>
                        
                                            {% if(s_package.video_iframe) %}
                                            <div style=\"padding-bottom:3%;\"></div>
                                            <div class=\"play-btn\">
                                                <span><img src=\"/themes/SAN/assets/images/play-btn.svg\"></span>
                                                Play Video
                                            </div>
                                            {% endif %}
                                        </div>
                        
                                    </div>
                                </div>
                            </div>
                        </section>
                        {% partial 'site/innerform.htm' %}
                        <div class=\"bg_color_1 container package-detail\" data-aos=\"fade-up\" data-aos-duration=\"2000\">
                            <!-- /carousel -->
                            <div class=\"\" data-aos=\"fade-up\">
                                {% if(s_package.caption)%}
                                <div class=\"main_title_2 mt-5\">
                                    <h2>{{s_package.caption}}</h2>
                                    <span><em></em></span>
                                </div>
                                <span class=\"populardetails font-size-medium\"><strong>{{s_package.sub_caption|raw}}</strong></span><br/><br/>
                                {% endif %}
                                {% if(s_package.brief)%}
                                <div class=\"top-overview  text-center\">{{s_package.brief|raw}}</div>
                                {% else %}
                                <div class=\"top-overview text-center\">{{ s_package.content|length > 300 ? s_package.content|slice(0,
                                    300) ~ '...' : s_package.content }}</div>
                                {% endif %}
                                <div id=\"overview\" data-aos=\"fade-up\">
                                    <div class=\"main_title_2 mt-5  mb-3\">
                                        <h2>{{s_package.caption_new}}</h2>
                                        <p>{{s_package.sub_title}}</p>
                                    </div>
                                    <div class=\"facilities mb-3 roundedbg text-center\">
                                        {% if s_package.hotel_stay %}
                                        <span data-toggle=\"tooltip\" title=\"Hotel Stay\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/hotel_stay.png'|theme }}\" />
                                        </span>
                                        {% endif %}
                                        {% if s_package.domestic_flights %}
                                        <span data-toggle=\"tooltip\" title=\"Domestic Flights\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/domestic_flights.png'|theme }}\" />
                                        </span>
                                        {% endif %}
                                        {% if s_package.breakfast_meals %}
                                        <span data-toggle=\"tooltip\" title=\"Breakfast/Meals\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/breakfast_meals.png'|theme }}\" />
                                        </span>
                                        {% endif %}
                                        {% if s_package.airport_transfers %}
                                        <span data-toggle=\"tooltip\" title=\"Airport Transfers\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/airport_transfers.png'|theme }}\" />
                                        </span>
                                        {% endif %}
                                        {% if s_package.site_seeing %}
                                        <span data-toggle=\"tooltip\" title=\"Sightseeing\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/site_seeing.png'|theme }}\" />
                                        </span>
                                        {% endif %}
                                        {% if s_package.city_coach_tour %}
                                        <span data-toggle=\"tooltip\" title=\"City Tour/Coach Tour\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/city_coach_tour.png'|theme }}\" />
                                        </span>
                                        {% endif %}
                                        {% if s_package.tour_guide %}
                                        <span data-toggle=\"tooltip\" title=\"Tour Guide\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/tour_guide.png'|theme }}\" />
                                        </span>
                                        {% endif %}
                                        {% if s_package.train_tickets %}
                                        <span data-toggle=\"tooltip\" title=\"Train Tickets\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/train_tickets.png'|theme }}\" />
                                        </span>
                                        {% endif %}
                                        {% if s_package.entrance_fee_pass %}
                                        <span data-toggle=\"tooltip\" title=\"Entrance Fee/ Pass\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/entrance_fee_pass.png'|theme }}\" />
                                        </span>
                                        {% endif %}
                                        {% if s_package.cruising %}
                                        <span data-toggle=\"tooltip\" title=\"Cruising\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/cruising.png'|theme }}\" />
                                        </span>
                                        {% endif %}
                                        {% if s_package.entertainment %}
                                        <span data-toggle=\"tooltip\" title=\"Entertainment\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/entertainment.png'|theme }}\" />
                                        </span>
                                        {% endif %}
                                        {% if s_package.sailing %}
                                        <span data-toggle=\"tooltip\" title=\"Sailing\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/sailing.png'|theme }}\" />
                                        </span>
                                        {% endif %}
                                        {% if s_package.hiking_walking_tour %}
                                        <span data-toggle=\"tooltip\" title=\"Hiking/Walking Tour\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/hiking_walking_tour.png'|theme }}\" />
                                        </span>
                                        {% endif %}
                                        {% if s_package.speed_boat %}
                                        <span data-toggle=\"tooltip\" title=\"Speed Boat Transfers\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/speed_boat.png'|theme }}\" />
                                        </span>
                                        {% endif %}
                                        {% if s_package.wellness %}
                                        <span data-toggle=\"tooltip\" title=\"Wellness\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/wellness.png'|theme }}\" />
                                        </span>
                                        {% endif %}
                                        {% if s_package.camping %}
                                        <span data-toggle=\"tooltip\" title=\"Camping\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/camping.png'|theme }}\" />
                                        </span>
                                        {% endif %}
                                        {% if s_package.canyoning %}
                                        <span data-toggle=\"tooltip\" title=\"Canyoning\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/canyoning.png'|theme }}\" />
                                        </span>
                                        {% endif %}
                                        {% if s_package.campervan %}
                                        <span data-toggle=\"tooltip\" title=\"Campervan\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/campervan.png'|theme }}\" />
                                        </span>
                                        {% endif %}
                                        {% if s_package.para_gliding %}
                                        <span data-toggle=\"tooltip\" title=\"Para Gliding\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/para_gliding.png'|theme }}\" />
                                        </span>
                                        {% endif %}
                                        {% if s_package.bike_ride %}
                                        <span data-toggle=\"tooltip\" title=\"Bike Ride\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/bike_ride.png'|theme }}\" />
                                        </span>
                                        {% endif %}
                                        {% if s_package.diving %}
                                        <span data-toggle=\"tooltip\" title=\"Diving\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/diving.png'|theme }}\" />
                                        </span>
                                        {% endif %}
                                        {% if s_package.scooter_ride %}
                                        <span data-toggle=\"tooltip\" title=\"Scooter Ride\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/scooter_ride.png'|theme }}\" />
                                        </span>
                                        {% endif %}
                                        {% if s_package.zip_line %}
                                        <span data-toggle=\"tooltip\" title=\"Zip line\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/zip_line.png'|theme }}\" />
                                        </span>
                                        {% endif %}
                                        {% if s_package.horse_ride %}
                                        <span data-toggle=\"tooltip\" title=\"Horse Ride\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/horse_ride.png'|theme }}\" />
                                        </span>
                                        {% endif %}
                                        {% if s_package.cooking_class %}
                                        <span data-toggle=\"tooltip\" title=\"Cooking Class\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/cooking_class.png'|theme }}\" />
                                        </span>
                                        {% endif %}
                                        {% if s_package.shopping_tour %}
                                        <span data-toggle=\"tooltip\" title=\"Shopping Tour\" class=\" mb-4 roundedbg text-centeright\">
                                            <img width=\"18\" height=\"18\" src=\"{{ 'assets/img/svg/shopping_tour.png'|theme }}\" />
                                        </span>
                                        {% endif %}
                                        
                                        {% if s_package.others %}
                                        {% for record in s_package.others %}
                                        <span data-toggle=\"tooltip\" title=\"{{record.title}}\"><img width=\"18\" height=\"18\"
                                                src=\"{{record.icon|media}}\" /></span>
                                        {% endfor %}
                                        {% endif %}
                        
                                    </div>
                                    <p class=\"country_list mb-5\" style=\"margin-bottom:1rem !important;\">
                                        {% if s_package.cities %}
                                            {% set ccount = 1 %}
                                            {% for scity in s_package.cities %}
                                                {{scity.city}}
                                                {% if ccount < s_package.cities|length %}
                                                | 
                                                {% endif %}
                                                {% set ccount = ccount + 1 %}
                                            {% endfor %}
                                        {% endif %}
                                    </p>
                                    

                                    {% set pack_price = 0 %}
                                    {% set currencyCode = 0 %}
                                    {% if s_package.price %}
                                        {% for Precord in s_package.price %}
                                            {% if Precord.currency == user_currency_code %}
                                                {% set currencyCode = Precord.currency|upper %}
                                            {% endif %}
                                        {% endfor %}

                                        {% if currencyCode==\"0\" %}
                                            {% set currencyCode = 'USD' %}
                                        {% endif %}
                                        {% for Precord in s_package.price %}
                                            {% if Precord.currency|upper == currencyCode|upper %}
                                                {% set pack_price = Precord.price %}
                                            {% endif %}
                                        {% endfor %}
                                    {% endif %}

                                    <div class=\"new-days-design\">{{s_package.days}} DAYS FROM <span>{{currencyCode}} {{pack_price|number_format }}*</span></div>
                                    {% if(s_package.days != \"\") %}
                                    {# <p class=\"country_list mb-5\" style=\" text-align: center;\">{{s_package.days}} DAYS FROM</p> #}
                                    {% endif %}
                                    <div class=\"table-responsive d-none\">
                                        <div class=\"wrapper-package\">
                                            <div class=\"packagePrice light text-center\">
                                                {% set price = 0 %}
                                                {% if s_package.price %}
                                                {% for record in s_package.price %}
                                                {% if record.currency == apiFunction.getCurrentCurrency() %}
                                                {% set currencyCode = record.currency|upper %}
                                                {% endif %}
                                                {% endfor %}
                        
                                                {% if currencyCode==\"\" %}
                                                {% set currencyCode = 'USD' %}
                                                {% endif %}
                        
                                                {% for record in s_package.price %}
                                                {% if record.currency|upper == currencyCode|upper %}
                                                {% set price = record.price %}
                                                {% endif %}
                                                {% endfor %}
                                                {% endif %}
                        
                                                <h3><span class=\"pr-3 \">{% if s_package.night %} {{s_package.night}}
                                                        NIGHTS / {% endif %}{% if s_package.days %} {{s_package.days}}
                                                        DAYS {% endif %}</span>| <strong class=\"pl-3\">{{currencyCode}} {{price}}*</strong></h3>
                                            </div>
                                        </div>
                                    </div>
                        

                                    

                                    {# <div class=\"table-responsive\">
                                        <div class=\"wrapper-package\">
                                            <div class=\"light text-center\">
                                                <table class=\"w-100\" style=\"border: solid 1px #09577c;\">
                                                    <thead class=\"packagePrice light\">
                                                        <th class=\"text-uppercase\">{{currencyCode}}</th>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td> {{pack_price|number_format }}*</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div> #}
                        
                                </div>
                                <div class=\"mbottom50\" id=\"packageboxes\">
                                    <div class=\"packageboxes mt-5\" data-aos=\"fade-up\">
                                        <div class=\"row no-gutters\">
                                            {% if(s_package.dates[0].from != '') %}
                                            <div class=\"col-md-6\">
                                                <div class=\"packageboxes-content\">
                                                    <div class=\"packageboxes-title\">
                                                        <h2 class=\"mt-0\">TOUR DATES</h2>
                                                        <span><em></em></span>
                                                    </div>
                                                    <div class=\"packageboxes-detail\">
                                                        <ul>
                                                            {% if s_package.dates != NULL  %}
                                                                {% for record in s_package.dates %}
                                                                    {% if record.from != null  %}
                                                                        <li>{{record.from|date(\"d M\") }} - {{record.to|date(\"d M Y\") }}</li>
                                                                    {% endif %}
                                                                {% endfor %}
                                                            {% endif %}
                                                        </ul>
                        
                                                        {% if s_package.nearest_airport %}
                                                        {% set acount = 1 %}
                                                        <p><strong><i>Nearest Airports:</i></strong><br />
                                                            {% for airports in s_package.nearest_airport %}
                                                            {{airports.airport}}{% if acount < s_package.nearest_airport|length %}, {% endif %}
                                                            {% set acount = acount + 1 %}
                                                            {% endfor %}
                                                        </p>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-md-6 d-none d-md-block  mb-4\">
                                                {% if(s_package.date_image) %}
                                                <figure class=\"package-figure cut-left\"
                                                    style=\"background-image:url({{s_package.date_image.getThumb(525,525,{'mode':'crop'})}})\">
                                                </figure>
                                                {% else %}
                                                <figure class=\"package-figure\"
                                                    style=\"background-image:url('themes/SAN/assets/img/logo.jpg')\">
                                                </figure>
                                                {% endif %}
                                            </div>
                                            {% endif %}
                                        </div>
                                    </div>
                                    {% if s_package.content %}
                                    <div class=\"packageboxes mt-5\" data-aos=\"fade-up\">
                                        <div class=\"row no-gutters\">
                                            <div class=\"col-md-6 mb-4\">
                                                {% if(s_package.overview_image) %}
                                                <figure class=\"package-figure\"
                                                    style=\"background-image:url({{s_package.overview_image.getThumb(525,525,{'mode':'crop'})}})\">
                                                </figure>
                                                {% else %}
                                                <figure class=\"package-figure\"
                                                    style=\"background-image:url('themes/SAN/assets/img/logo.jpg')\">
                                                </figure>
                                                {% endif %}
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"packageboxes-content\">
                                                    <div class=\"packageboxes-title\">
                                                        <h2 class=\"mt-0\">OVERVIEW</h2>
                                                        <span><em></em></span>
                                                    </div>
                                                    <div class=\"packageboxes-detail\">
                                                        {{ s_package.content|raw }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {% endif %}
                                    {% if s_package.inclusions or s_package.exclusions %}
                                    <div class=\"packageboxes mt-5\" data-aos=\"fade-up\">
                                        <div class=\"row no-gutters\">
                                            <div class=\"col-md-6 mb-4\">
                                                {% if(s_package.inclusions_image) %}
                                                <figure class=\"package-figure\"
                                                    style=\"background-image:url({{s_package.inclusions_image.getThumb(525,525,{'mode':'crop'})}})\">
                                                </figure>
                                                {% else %}
                                                <figure class=\"package-figure\"
                                                    style=\"background-image:url('themes/SAN/assets/img/logo.jpg')\">
                                                </figure>
                                                {% endif %}
                                            </div>
                                            <div class=\"col-md-6\">
                                                <div class=\"packageboxes-content\">
                                                    <div class=\"packageboxes-detail\">
                                                        {% if s_package.inclusions %}
                                                        <h2 class=\"mt-0\">INCLUSIONS</h2>
                                                        <span><em></em></span>
                                                        <ul class=\"numbers\">
                                                            {% for record in s_package.inclusions %}
                                                            <li><span>&ndash; </span>{{record.point}}</li>
                                                            {% endfor %}
                                                        </ul>
                                                        {% endif %}
                        
                                                        {% if s_package.exclusions %}
                                                        <p style=\"font-size: 18px;\">EXCLUSIONS</p>
                                                        <ul class=\"numbers\">
                                                            {% for record in s_package.exclusions %}
                                                                {% if record.point != \"\" %}
                                                                    <li><span>&ndash; </span>{{record.point}}</li>
                                                                {% endif %}
                                                            {% endfor %}
                                                        </ul>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {% endif %}
                        
                                </div>
                        
                                <div class=\"itinarary-conditions\">
                                    <div class=\"container\">
                        
                                        <div class=\"ic-box\">
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"custom-accordions\">
                                                        <button class=\"text-link itinerary_btn\">ITINERARY</button>
                                                    </div>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"custom-accordions-desc itinerary_desc\" style=\"display: none;\">
                                                        {% set idcount = 1 %}
                                                        {% set collapsid = 1 %}
                                                        {% for itinerary in s_package.itineraries %}
                                                        <div class=\"custom-accord\">
                        
                                                            <div class=\"accordion\">
                                                                <div class=\"accordion-item\">
                                                                    <h2 class=\"c-accordion-title\">
                                                                        <span class=\"ca-text-link\" id=\"package_acc_{{idcount}}\">
                                                                            {{itinerary.title }}
                                                                        </span>
                                                                    </h2>
                                                                    <div class=\"c-accordion-desc\">
                                                                        <div class=\"c-accord-desc-inner package_acc_{{idcount}}\"
                                                                            id=\"collapse_{{collapsid}}\">
                                                                            {{itinerary.desc | raw }}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- <div class=\"day-count\">
                                                                <h3>{{itinerary.title }}</h3>
                                                            </div>
                                                            <div class=\"day-activity\">
                                                                {{itinerary.desc | raw }}
                                                            </div> -->
                                                        </div>
                                                        {% set collapsid = collapsid +1 %}
                                                        {% set idcount = idcount +1 %}
                                                        {% endfor %}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                        
                                        <div class=\"ic-box\">
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <div class=\"custom-accordions\">
                                                        <button class=\"text-link conditions_btn\">Conditions</button>
                                                    </div>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <div class=\"custom-accordions-desc\">
                                                        <div class=\"custom-accord conditions_desc\" style=\"display: none;\">
                                                            <div class=\"custom-accordions-desc\">
                                                                {{ s_package.conditions|raw }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                        
                                    </div>
                                </div>
                        
                                <div class=\"makeenquiry mtop75 mbottom50\">
                                    <div style=\"border-bottom: 1px solid #aaa;\" class=\"pb-5 mb-5\">
                                        <a href=\"#enquiry-popup\" class=\" open-popup-link btn btn-lm packenquiry enquiry-in mb-5\">MAKE AN
                                            ENQUIRY</a>
                                        {{ s_package.enquiry_desc|raw }}
                        
                                    </div>
                        
                                    {{ s_package.contact_desc|raw }}
                        
                        
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div> 
                    </div>
                    {% set count = 2 %}
                {% endfor %}
            </div>
            <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Next</span>
            </a>
            </div>
    
    </div>
    </div>



<div id=\"enquiry-popup\" class=\"white-popup mfp-hide\">
    {% partial 'site/packageenquiryform' %}
</div>
<div id=\"after-submit-popup\" class=\"white-popup mfp-hide\">
    <div id=\"sign-in-dialog\" class=\"zoom-anim-dialog\">
        <div class=\"modalbody\">
            <div class=\"small-dialog-header\">
                <h3><img src=\"themes/SAN/assets/images/mail.svg\" class=\"img-fluid mail\"
                        alt=\"\">Successfully sent</h3>
            </div>
        </div>
        <div style=\"padding: 80px 10px;\">
            <h4>Form has been submitted successfully!</h4>
        </div>
        <button title=\"Close (Esc)\" type=\"button\" class=\"mfp-close\"></button>
    </div>
</div>

<style>
    .hidedays {
        display: none !important;
    }

    .showdays {
        display: unset !important;
    }
</style>
<script>

    \$(document).ready(function () {
        \$(\".itinerary_btn\").click(function () {
            \$(\".itinerary_desc\").slideToggle(800, 'linear');
        });

        \$(\".conditions_btn\").click(function () {
            \$(\".conditions_desc\").slideToggle(800, 'linear');
        });
    });

    \$('.open-popup-link').magnificPopup({
        type: 'inline',
        showCloseBtn: true,
        callbacks: {
            open: function () {
                \$('#sign-in-dialog').append(\$('.mfp-close'))
            },
        },
        midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
    });
</script>", "/Applications/MAMP/htdocs/itl/themes/SAN/pages/package.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 5, "for" => 6, "if" => 7, "partial" => 37);
        static $filters = array("escape" => 7, "raw" => 46, "length" => 51, "slice" => 51, "theme" => 62, "media" => 194, "upper" => 218, "number_format" => 232, "date" => 301);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if', 'partial'],
                ['escape', 'raw', 'length', 'slice', 'theme', 'media', 'upper', 'number_format', 'date'],
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
