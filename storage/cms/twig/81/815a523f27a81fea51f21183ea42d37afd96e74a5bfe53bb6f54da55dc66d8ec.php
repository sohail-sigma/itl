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

/* /Applications/MAMP/htdocs/itl/themes/SAN/pages/about.htm */
class __TwigTemplate_0cfd4ae3369340a6c0d1fcf7ae9b7c37051fb12b7ae4bc182ead8ee47481f650 extends \Twig\Template
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
        $context["partners"] = twig_get_attribute($this->env, $this->source, ($context["partnersList"] ?? null), "records", [], "any", false, false, true, 1);
        // line 2
        echo "<div class=\"banner-slider only_desktop\">
    <div class=\"slider-inner\">
        <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
            <div class=\"carousel-inner\">
                <div class=\"carousel-caption d-md-block\">
                    <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 7), "title", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</p>
        
                    <span class=\"line\"><em></em></span>
                </div>
                ";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 11), "banner_type", [], "any", false, false, true, 11) == "image")) {
            // line 12
            echo "                    ";
            $context["scount"] = 1;
            // line 13
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 13), "banner_image", [], "any", false, false, true, 13));
            foreach ($context['_seq'] as $context["_key"] => $context["bannerslider"]) {
                // line 14
                echo "                        <div class=\"carousel-item ";
                if ((($context["scount"] ?? null) == 1)) {
                    echo " active ";
                }
                echo "\">
                            <div class=\"banner-image\">
                                <img class=\"d-block w-100\" src=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["bannerslider"], "path", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
                echo "\" alt=\"First slide\">
                                
                            </div> 
                        </div>
                        ";
                // line 20
                $context["scount"] = (($context["scount"] ?? null) + 1);
                // line 21
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bannerslider'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "                ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 22), "banner_type", [], "any", false, false, true, 22) == "video")) {
            // line 23
            echo "                    ";
            $context["scount"] = 1;
            // line 24
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 24), "banner_iframe", [], "any", false, false, true, 24));
            foreach ($context['_seq'] as $context["_key"] => $context["banneriframe"]) {
                // line 25
                echo "                    ";
                $context["v_dur"] = (twig_get_attribute($this->env, $this->source, $context["banneriframe"], "video_duration", [], "any", false, false, true, 25) * 1000);
                // line 26
                echo "                        <div class=\"carousel-item ";
                if ((($context["scount"] ?? null) == 1)) {
                    echo " active ";
                }
                echo "\" data-interval=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["v_dur"] ?? null), 26, $this->source), "html", null, true);
                echo "\">
                            <div class=\"banner-iframe\">
                                <iframe width=\"770\" height=\"433\" src=\"https://www.youtube.com/embed/";
                // line 28
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["banneriframe"], "iframe", [], "any", false, false, true, 28), 28, $this->source), 17, null), "html", null, true);
                echo "?showinfo=0&playlist=";
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["banneriframe"], "iframe", [], "any", false, false, true, 28), 28, $this->source), 17, null), "html", null, true);
                echo "&loop=1&autoplay=1&controls=0&mute=1\" title=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["cdestinations_List"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "title", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                echo "\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen=\"\"></iframe>
                            </div>
                        </div>
                        ";
                // line 31
                $context["scount"] = (($context["scount"] ?? null) + 1);
                // line 32
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banneriframe'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "                ";
        }
        // line 34
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

<div class=\"banner-slider only_mob\">
    <div class=\"slider-inner\">
        <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
            <div class=\"carousel-inner\">
                <div class=\"carousel-caption d-md-block\">
                    <p>";
        // line 52
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 52), "title", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
        echo "</p>
                   <!--  <h1>ITL WORLD</h1> -->
                    <span class=\"line\"><em></em></span>
                </div>
                ";
        // line 56
        $context["scount"] = 1;
        // line 57
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 57), "mob_banner_image", [], "any", false, false, true, 57));
        foreach ($context['_seq'] as $context["_key"] => $context["bannerslider"]) {
            // line 58
            echo "                    <div class=\"carousel-item ";
            if ((($context["scount"] ?? null) == 1)) {
                echo " active ";
            }
            echo "\">
                        <div class=\"banner-image\">
                            <img class=\"d-block w-100\" src=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["bannerslider"], "path", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
            echo "\" alt=\"\">
                            
                        </div> 
                    </div>
                    ";
            // line 64
            $context["scount"] = (($context["scount"] ?? null) + 1);
            // line 65
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bannerslider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
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

<div class=\"modal fade\" id=\"video_pop\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
    aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
                <div class=\"embed-responsive embed-responsive-16by9\">
                    ";
        // line 88
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 88), "content_6", [], "any", false, false, true, 88), 88, $this->source);
        echo "
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /hero_single -->
<div class=\"clearfix\"></div>
<div class=\"bg_color_1 about-us\" data-aos=\"fade-up\" id=\"itl_world\">

    <div class=\"\">
        <div class=\"main_title_2 mt-5\">
            <h2 class=\"mt-0 \">Where Every Journey & Event is a Masterpiece</h2>
            <span><em></em></span>
        </div>

        ";
        // line 104
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 104), "is_desc", [], "any", false, false, true, 104) == 1)) {
            // line 105
            echo "            <!-- /carouselround -->
            <div class=\"information container\">
                <div class=\"color-light text-center\">
                    ";
            // line 108
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 108), "content_1", [], "any", false, false, true, 108), 108, $this->source);
            echo "
                </div>
            </div>
        ";
        }
        // line 112
        echo "        <!-- /container -->

        
        ";
        // line 115
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 115), "is_our_portfolio", [], "any", false, false, true, 115) == 1)) {
            // line 116
            echo "            <div class=\"mt-5\">
                    <div>
                        <div class=\"container aboutbox\" data-aos=\"fade-up\">
                            <div class=\"row no-gutters\">
                                <div class=\"col-md-6\">
                                    <figure><img src='";
            // line 121
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 121), "experience", [], "any", false, false, true, 121), "getThumb", [0 => 313, 1 => 414, 2 => [" mode" => "crop"]], "method", false, false, true, 121), 121, $this->source), "html", null, true);
            echo "'
                                            alt=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 122), "experience", [], "any", false, false, true, 122), "title", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
            echo "\" class=\"w-100\" /></figure>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"ml-md-4\">
                                        <div class=\"main_title_2 text-left\">
                                            <h3><b>Our Portfolio</b></h3>
                                        </div>
                                        <div class=\"bulletborder\">
                                            <ul class=\"bulletabout\">
                                                ";
            // line 131
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 131), "content_9", [], "any", false, false, true, 131));
            foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                // line 132
                echo "                                                <li>";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "iteme", [], "any", false, false, true, 132), 132, $this->source), "html", null, true);
                echo "</li>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 144
        echo "
        <!-- awards  -->
        ";
        // line 146
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 146), "is_awards_details", [], "any", false, false, true, 146) == 1)) {
            // line 147
            echo "            <div class=\"container awards mbottom50\" data-aos=\"fade-up\">
                <div class=\"populardetails\">
                    ";
            // line 149
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 149), "content_3", [], "any", false, false, true, 149), 149, $this->source);
            echo "
                </div>
                <img src=\"";
            // line 151
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 151), "award", [], "any", false, false, true, 151), "path", [], "any", false, false, true, 151), 151, $this->source), "html", null, true);
            echo "\" class=\"img-fluid mt-5\">
            </div>
        ";
        }
        // line 154
        echo "
        <!-- vision mission  -->
        ";
        // line 156
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 156), "is_vision_mission", [], "any", false, false, true, 156) == 1)) {
            // line 157
            echo "            <section class=\"our-values vision_mission\">
                <div class=\"container\">
                    <div class=\"row\">
                        ";
            // line 160
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 160), "content_6", [], "any", false, false, true, 160), 160, $this->source);
            echo "
                    </div>
                </div>
            </section>
        ";
        }
        // line 165
        echo "
        <!-- our values  -->
        ";
        // line 167
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 167), "is_our_values", [], "any", false, false, true, 167) == 1)) {
            // line 168
            echo "            <section class=\"our-values\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-5\">
                            <div class=\"ourvalues-imag\">
                                <img src=\"";
            // line 173
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 173), "values", [], "any", false, false, true, 173), "path", [], "any", false, false, true, 173), 173, $this->source), "html", null, true);
            echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-7\">
                            <div class=\"values-list\">
                                <div class=\"aboutbox\">
                                    <h2>Our values</h2>
                                </div>
                                ";
            // line 181
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 181), "content_5", [], "any", false, false, true, 181), 181, $this->source);
            echo "
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        ";
        }
        // line 188
        echo "


        <!-- chairman  -->
        <!-- ";
        // line 192
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 192), "is_chairman_msg", [], "any", false, false, true, 192) == 1)) {
            // line 193
            echo "            <div id=\"chirmans_message\">
                <div class=\"mt-5\" data-aos=\"fade-up\">
                    <div class=\"main_title_2 \">
                        <h2>CHAIRMAN’S MESSAGE</h2>
                        <span><em></em></span>
                    </div>
                    <div class=\"chirmans_bg\" style=\"background-image: url(";
            // line 199
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 199), "chairman", [], "any", false, false, true, 199), "path", [], "any", false, false, true, 199), 199, $this->source), "html", null, true);
            echo ");\">
                        <div class=\"container\">
                            <div class=\"aboutbox mt-4\">
                                <div class=\"row no-gutters\">
                                    <div class=\"col-md-6\">
                                        <div class=\"mt-5 mt-md-0 text-center text-md-left \">
                                            ";
            // line 205
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 205), "content_2", [], "any", false, false, true, 205), 205, $this->source);
            echo "
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 214
        echo " -->


        ";
        // line 217
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 217), "is_chairman_msg", [], "any", false, false, true, 217) == 1)) {
            // line 218
            echo "            <div id=\"chirmans_message\">
                <div class=\"mt-5\" data-aos=\"fade-up\">
                    <div class=\"main_title_2 \">
                        <h2>CHAIRMAN’S MESSAGE</h2>
                        <span><em></em></span>
                    </div>
                    <div class=\"container\">
                        <div class=\"chairman_message_main\">
                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                                    ";
            // line 228
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 228), "content_2", [], "any", false, false, true, 228), 228, $this->source);
            echo "
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"cm_cmd_img\">
                                        <img src=\"";
            // line 232
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 232), "chairman", [], "any", false, false, true, 232), "path", [], "any", false, false, true, 232), 232, $this->source), "html", null, true);
            echo "\" alt=\"CM\">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 242
        echo "

            <div id=\"ceo_message\">
                <div class=\"mt-5\" data-aos=\"fade-up\">
                    <div class=\"main_title_2 \">
                        <h2>CEO'S MESSAGE</h2>
                        <span><em></em></span>
                    </div>
                    <div class=\"container\">
                        <div class=\"chairman_message_main ceo_message\">
                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                                    <div class=\"cm_cmd_img\">
                                        <img src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 255), "ceo", [], "any", false, false, true, 255), "path", [], "any", false, false, true, 255), 255, $this->source), "html", null, true);
        echo "\" alt=\"CM\">
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    ";
        // line 259
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 259), "content_10", [], "any", false, false, true, 259), 259, $this->source);
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        

        <!-- affiliates partners  -->
        ";
        // line 271
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 271), "is_affiliates_partners", [], "any", false, false, true, 271) == 1)) {
            // line 272
            echo "            <div class=\"mt-5\" id=\"affiliates_partners\">
                ";
            // line 273
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 273), "content_7", [], "any", false, false, true, 273)) {
                // line 274
                echo "                <div class=\"container\">
                    <div class=\"main_title_2\">
                        <h2>AFFILIATES & PARTNERS</h2>
                        <span><em></em></span>
                    </div>
                    <div class=\"mb-5 text-center\" data-aos=\"fade-up\">
                        <p class=\"globalpartners\">
                            <img src=\"";
                // line 281
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 281), "affiliates_partners", [], "any", false, false, true, 281), "path", [], "any", false, false, true, 281), 281, $this->source), "html", null, true);
                echo "\">
                        </p>
                        ";
                // line 283
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 283), "content_7", [], "any", false, false, true, 283), 283, $this->source);
                echo "
                    </div>
                </div>
                ";
            }
            // line 287
            echo "                <div class=\"container\">



                    <div class=\" affiliates border border-0\">
                        <div class=\"row\">
                            ";
            // line 293
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["partners"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                // line 294
                echo "                            <div class=\"col-6 col-md-4 col-lg-3\">
                                <img title=\"";
                // line 295
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 295), 295, $this->source), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "logo", [], "any", false, false, true, 295), "getThumb", [0 => 200, 1 => 200, 2 => ["mode" => "crop"]], "method", false, false, true, 295), 295, $this->source), "html", null, true);
                echo "\"
                                    alt=\"";
                // line 296
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "logo", [], "any", false, false, true, 296), "title", [], "any", false, false, true, 296), 296, $this->source), "html", null, true);
                echo "\" class=\"img-fluid\" />
                            </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 299
            echo "                        </div>

                    </div>
                    <div class=\"affiliate-content text-center\">
                        ";
            // line 303
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 303), "content_4", [], "any", false, false, true, 303), 303, $this->source);
            echo "
                        <!-- <button class=\"enquire\">Enquire now</button> -->
                        <a href=\"#enquiry-popup\" class=\"open-popup-link enquire\">Enquire now</a>
                    </div>
                </div>



            </div>
            <div class=\"clearfix\"></div>
        ";
        }
        // line 314
        echo "</div>


<div id=\"enquiry-popup\" class=\"white-popup mfp-hide\">
    ";
        // line 318
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/aboutenquiryform"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 319
        echo "</div>


<div id=\"after-submit-popup\" class=\"white-popup mfp-hide\">
    <div id=\"sign-in-dialog\" class=\"zoom-anim-dialog\">
        <div class=\"modalbody\">
            <div class=\"small-dialog-header\">
                <h3><img src=\"../themes/SAN/assets/images/mail.svg\" class=\"img-fluid mail\"
                        alt=\"\">Successfully sent</h3>
            </div>
        </div>
        <div style=\"padding: 80px 10px;\">
            <h4>Form has been submitted successfully!</h4>
        </div>
        <button title=\"Close (Esc)\" type=\"button\" class=\"mfp-close\"></button>
    </div>
</div>

<!-- /container -->
<script>
    \$(window).on('hashchange load', function (e) {
        if (\$(window.location.hash).length) {
            var body = \$(\"html, body\");
            body.stop().animate({ scrollTop: \$(window.location.hash).offset().top - 100 }, 600, 'swing');
        }
    });
    \$('.open-popup-link').magnificPopup({
        type: 'inline',
        showCloseBtn: true,
        callbacks: {
            open: function () {
                \$('#sign-in-dialog').append(\$('.mfp-close'))
            },
        },
        midClick: true
    });
</script>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/itl/themes/SAN/pages/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  578 => 319,  574 => 318,  568 => 314,  554 => 303,  548 => 299,  539 => 296,  533 => 295,  530 => 294,  526 => 293,  518 => 287,  511 => 283,  506 => 281,  497 => 274,  495 => 273,  492 => 272,  490 => 271,  475 => 259,  468 => 255,  453 => 242,  440 => 232,  433 => 228,  421 => 218,  419 => 217,  414 => 214,  401 => 205,  392 => 199,  384 => 193,  382 => 192,  376 => 188,  366 => 181,  355 => 173,  348 => 168,  346 => 167,  342 => 165,  334 => 160,  329 => 157,  327 => 156,  323 => 154,  317 => 151,  312 => 149,  308 => 147,  306 => 146,  302 => 144,  290 => 134,  281 => 132,  277 => 131,  265 => 122,  261 => 121,  254 => 116,  252 => 115,  247 => 112,  240 => 108,  235 => 105,  233 => 104,  214 => 88,  190 => 66,  184 => 65,  182 => 64,  175 => 60,  167 => 58,  162 => 57,  160 => 56,  153 => 52,  133 => 34,  130 => 33,  124 => 32,  122 => 31,  112 => 28,  102 => 26,  99 => 25,  94 => 24,  91 => 23,  88 => 22,  82 => 21,  80 => 20,  73 => 16,  65 => 14,  60 => 13,  57 => 12,  55 => 11,  48 => 7,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set partners = partnersList.records %}
<div class=\"banner-slider only_desktop\">
    <div class=\"slider-inner\">
        <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
            <div class=\"carousel-inner\">
                <div class=\"carousel-caption d-md-block\">
                    <p>{{builderDetails.record.title}}</p>
        
                    <span class=\"line\"><em></em></span>
                </div>
                {% if(builderDetails.record.banner_type == 'image') %}
                    {% set scount = 1 %}
                    {% for bannerslider in builderDetails.record.banner_image %}
                        <div class=\"carousel-item {% if(scount == 1 ) %} active {% endif %}\">
                            <div class=\"banner-image\">
                                <img class=\"d-block w-100\" src=\"{{bannerslider.path}}\" alt=\"First slide\">
                                
                            </div> 
                        </div>
                        {% set scount = scount + 1 %}
                    {% endfor %}
                {% elseif(builderDetails.record.banner_type == 'video') %}
                    {% set scount = 1 %}
                    {% for banneriframe in builderDetails.record.banner_iframe %}
                    {% set v_dur = banneriframe.video_duration * 1000 %}
                        <div class=\"carousel-item {% if(scount == 1 ) %} active {% endif %}\" data-interval=\"{{v_dur}}\">
                            <div class=\"banner-iframe\">
                                <iframe width=\"770\" height=\"433\" src=\"https://www.youtube.com/embed/{{ banneriframe.iframe[17:] }}?showinfo=0&playlist={{ banneriframe.iframe[17:] }}&loop=1&autoplay=1&controls=0&mute=1\" title=\"{{cdestinations_List[0].title}}\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen=\"\"></iframe>
                            </div>
                        </div>
                        {% set scount = scount + 1 %}
                    {% endfor %}
                {% endif %}
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

<div class=\"banner-slider only_mob\">
    <div class=\"slider-inner\">
        <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
            <div class=\"carousel-inner\">
                <div class=\"carousel-caption d-md-block\">
                    <p>{{builderDetails.record.title}}</p>
                   <!--  <h1>ITL WORLD</h1> -->
                    <span class=\"line\"><em></em></span>
                </div>
                {% set scount = 1 %}
                {% for bannerslider in builderDetails.record.mob_banner_image %}
                    <div class=\"carousel-item {% if(scount == 1 ) %} active {% endif %}\">
                        <div class=\"banner-image\">
                            <img class=\"d-block w-100\" src=\"{{bannerslider.path}}\" alt=\"\">
                            
                        </div> 
                    </div>
                    {% set scount = scount + 1 %}
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

<div class=\"modal fade\" id=\"video_pop\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
    aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
                <div class=\"embed-responsive embed-responsive-16by9\">
                    {{builderDetails.record.content_6 | raw}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /hero_single -->
<div class=\"clearfix\"></div>
<div class=\"bg_color_1 about-us\" data-aos=\"fade-up\" id=\"itl_world\">

    <div class=\"\">
        <div class=\"main_title_2 mt-5\">
            <h2 class=\"mt-0 \">Where Every Journey & Event is a Masterpiece</h2>
            <span><em></em></span>
        </div>

        {% if builderDetails.record.is_desc == 1 %}
            <!-- /carouselround -->
            <div class=\"information container\">
                <div class=\"color-light text-center\">
                    {{builderDetails.record.content_1 | raw}}
                </div>
            </div>
        {% endif %}
        <!-- /container -->

        
        {% if builderDetails.record.is_our_portfolio == 1 %}
            <div class=\"mt-5\">
                    <div>
                        <div class=\"container aboutbox\" data-aos=\"fade-up\">
                            <div class=\"row no-gutters\">
                                <div class=\"col-md-6\">
                                    <figure><img src='{{builderDetails.record.experience.getThumb(313,414,{' mode':'crop'})}}'
                                            alt=\"{{builderDetails.record.experience.title}}\" class=\"w-100\" /></figure>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"ml-md-4\">
                                        <div class=\"main_title_2 text-left\">
                                            <h3><b>Our Portfolio</b></h3>
                                        </div>
                                        <div class=\"bulletborder\">
                                            <ul class=\"bulletabout\">
                                                {% for record in builderDetails.record.content_9 %}
                                                <li>{{record.iteme}}</li>
                                                {% endfor %}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {% endif %}

        <!-- awards  -->
        {% if builderDetails.record.is_awards_details == 1 %}
            <div class=\"container awards mbottom50\" data-aos=\"fade-up\">
                <div class=\"populardetails\">
                    {{builderDetails.record.content_3 | raw}}
                </div>
                <img src=\"{{builderDetails.record.award.path}}\" class=\"img-fluid mt-5\">
            </div>
        {% endif %}

        <!-- vision mission  -->
        {% if builderDetails.record.is_vision_mission == 1 %}
            <section class=\"our-values vision_mission\">
                <div class=\"container\">
                    <div class=\"row\">
                        {{builderDetails.record.content_6 | raw}}
                    </div>
                </div>
            </section>
        {% endif %}

        <!-- our values  -->
        {% if builderDetails.record.is_our_values == 1 %}
            <section class=\"our-values\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-5\">
                            <div class=\"ourvalues-imag\">
                                <img src=\"{{builderDetails.record.values.path}}\">
                            </div>
                        </div>
                        <div class=\"col-md-7\">
                            <div class=\"values-list\">
                                <div class=\"aboutbox\">
                                    <h2>Our values</h2>
                                </div>
                                {{builderDetails.record.content_5 | raw}}
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        {% endif %}



        <!-- chairman  -->
        <!-- {% if builderDetails.record.is_chairman_msg == 1 %}
            <div id=\"chirmans_message\">
                <div class=\"mt-5\" data-aos=\"fade-up\">
                    <div class=\"main_title_2 \">
                        <h2>CHAIRMAN’S MESSAGE</h2>
                        <span><em></em></span>
                    </div>
                    <div class=\"chirmans_bg\" style=\"background-image: url({{builderDetails.record.chairman.path}});\">
                        <div class=\"container\">
                            <div class=\"aboutbox mt-4\">
                                <div class=\"row no-gutters\">
                                    <div class=\"col-md-6\">
                                        <div class=\"mt-5 mt-md-0 text-center text-md-left \">
                                            {{builderDetails.record.content_2 | raw}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {% endif %} -->


        {% if builderDetails.record.is_chairman_msg == 1 %}
            <div id=\"chirmans_message\">
                <div class=\"mt-5\" data-aos=\"fade-up\">
                    <div class=\"main_title_2 \">
                        <h2>CHAIRMAN’S MESSAGE</h2>
                        <span><em></em></span>
                    </div>
                    <div class=\"container\">
                        <div class=\"chairman_message_main\">
                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                                    {{builderDetails.record.content_2 | raw}}
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"cm_cmd_img\">
                                        <img src=\"{{builderDetails.record.chairman.path}}\" alt=\"CM\">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {% endif %}


            <div id=\"ceo_message\">
                <div class=\"mt-5\" data-aos=\"fade-up\">
                    <div class=\"main_title_2 \">
                        <h2>CEO'S MESSAGE</h2>
                        <span><em></em></span>
                    </div>
                    <div class=\"container\">
                        <div class=\"chairman_message_main ceo_message\">
                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                                    <div class=\"cm_cmd_img\">
                                        <img src=\"{{builderDetails.record.ceo.path}}\" alt=\"CM\">
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    {{builderDetails.record.content_10 | raw}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        

        <!-- affiliates partners  -->
        {% if builderDetails.record.is_affiliates_partners == 1 %}
            <div class=\"mt-5\" id=\"affiliates_partners\">
                {% if builderDetails.record.content_7 %}
                <div class=\"container\">
                    <div class=\"main_title_2\">
                        <h2>AFFILIATES & PARTNERS</h2>
                        <span><em></em></span>
                    </div>
                    <div class=\"mb-5 text-center\" data-aos=\"fade-up\">
                        <p class=\"globalpartners\">
                            <img src=\"{{builderDetails.record.affiliates_partners.path}}\">
                        </p>
                        {{builderDetails.record.content_7|raw}}
                    </div>
                </div>
                {% endif %}
                <div class=\"container\">



                    <div class=\" affiliates border border-0\">
                        <div class=\"row\">
                            {% for record in partners %}
                            <div class=\"col-6 col-md-4 col-lg-3\">
                                <img title=\"{{record.title}}\" src=\"{{record.logo.getThumb(200,200,{'mode':'crop'})}}\"
                                    alt=\"{{record.logo.title}}\" class=\"img-fluid\" />
                            </div>
                            {% endfor %}
                        </div>

                    </div>
                    <div class=\"affiliate-content text-center\">
                        {{builderDetails.record.content_4|raw}}
                        <!-- <button class=\"enquire\">Enquire now</button> -->
                        <a href=\"#enquiry-popup\" class=\"open-popup-link enquire\">Enquire now</a>
                    </div>
                </div>



            </div>
            <div class=\"clearfix\"></div>
        {% endif %}
</div>


<div id=\"enquiry-popup\" class=\"white-popup mfp-hide\">
    {% partial 'site/aboutenquiryform' %}
</div>


<div id=\"after-submit-popup\" class=\"white-popup mfp-hide\">
    <div id=\"sign-in-dialog\" class=\"zoom-anim-dialog\">
        <div class=\"modalbody\">
            <div class=\"small-dialog-header\">
                <h3><img src=\"../themes/SAN/assets/images/mail.svg\" class=\"img-fluid mail\"
                        alt=\"\">Successfully sent</h3>
            </div>
        </div>
        <div style=\"padding: 80px 10px;\">
            <h4>Form has been submitted successfully!</h4>
        </div>
        <button title=\"Close (Esc)\" type=\"button\" class=\"mfp-close\"></button>
    </div>
</div>

<!-- /container -->
<script>
    \$(window).on('hashchange load', function (e) {
        if (\$(window.location.hash).length) {
            var body = \$(\"html, body\");
            body.stop().animate({ scrollTop: \$(window.location.hash).offset().top - 100 }, 600, 'swing');
        }
    });
    \$('.open-popup-link').magnificPopup({
        type: 'inline',
        showCloseBtn: true,
        callbacks: {
            open: function () {
                \$('#sign-in-dialog').append(\$('.mfp-close'))
            },
        },
        midClick: true
    });
</script>", "/Applications/MAMP/htdocs/itl/themes/SAN/pages/about.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 11, "for" => 13, "partial" => 318);
        static $filters = array("escape" => 7, "slice" => 28, "raw" => 88);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for', 'partial'],
                ['escape', 'slice', 'raw'],
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
