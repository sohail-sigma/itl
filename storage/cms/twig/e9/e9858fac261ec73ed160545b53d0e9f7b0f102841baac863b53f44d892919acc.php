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

/* /Applications/MAMP/htdocs/itl/themes/SAN/pages/experiences.htm */
class __TwigTemplate_be16bf3379d88dbf738d732e1a555453e5c620eb5a336ba17f2443a9612256ec extends \Twig\Template
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
        echo "<div class=\"banner-slider hero_single only_desktop\" data-fkey=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["f_des_key"] ?? null), 1, $this->source), "html", null, true);
        echo "\" id=\"main-sec-des\">
    <div class=\"slider-inner\">
        <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
            <div class=\"carousel-inner\">
                ";
        // line 5
        if ((twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["cdestinations_List"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "banner_type", [], "any", false, false, true, 5) == "Image")) {
            // line 6
            echo "                    ";
            $context["scount"] = 1;
            // line 7
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["cdestinations_List"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null), "banner_image", [], "any", false, false, true, 7));
            foreach ($context['_seq'] as $context["_key"] => $context["bannerslider"]) {
                // line 8
                echo "                        <div class=\"carousel-item ";
                if ((($context["scount"] ?? null) == 1)) {
                    echo "active";
                }
                echo "\">
                            <div class=\"banner-image\">
                                <img class=\"d-block w-100\" src=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["bannerslider"], "path", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = ($context["cdestinations_List"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null), "title", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
                echo "\">
                            </div>
                            <div class=\"carousel-caption\">
                                <h1>";
                // line 13
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = ($context["cdestinations_List"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null), "title", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
                echo "</h1>
                                <span class=\"line\"><em></em></span>
                            </div>
                        </div>
                        ";
                // line 17
                $context["scount"] = (($context["scount"] ?? null) + 1);
                // line 18
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bannerslider'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "                ";
        } elseif ((twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = ($context["cdestinations_List"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[0] ?? null) : null), "banner_type", [], "any", false, false, true, 19) == "Video")) {
            // line 20
            echo "                    ";
            $context["scount"] = 1;
            // line 21
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = ($context["cdestinations_List"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[0] ?? null) : null), "banner_iframe", [], "any", false, false, true, 21));
            foreach ($context['_seq'] as $context["_key"] => $context["banneriframe"]) {
                // line 22
                echo "                        ";
                $context["v_duration"] = (twig_get_attribute($this->env, $this->source, $context["banneriframe"], "video_duration", [], "any", false, false, true, 22) * 1000);
                // line 23
                echo "                        <div class=\"carousel-item ";
                if ((($context["scount"] ?? null) == 1)) {
                    echo "active";
                }
                echo "\" data-interval=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["v_duration"] ?? null), 23, $this->source), "html", null, true);
                echo "\">
                            <div class=\"banner-iframe\">
                                <iframe width=\"770\" height=\"433\" src=\"https://www.youtube.com/embed/";
                // line 25
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["banneriframe"], "iframe", [], "any", false, false, true, 25), 25, $this->source), 17, null), "html", null, true);
                echo "?showinfo=0&playlist=";
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["banneriframe"], "iframe", [], "any", false, false, true, 25), 25, $this->source), 17, null), "html", null, true);
                echo "&loop=1&autoplay=1&controls=0&mute=1&enablejsapi=1\" title=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = ($context["cdestinations_List"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[0] ?? null) : null), "title", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
                echo "\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
                            </div>
                            <div class=\"carousel-caption\">
                                <h1>";
                // line 28
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = ($context["cdestinations_List"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[0] ?? null) : null), "title", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                echo "</h1>
                                <span class=\"line\"><em></em></span>
                            </div>
                        </div>
                        ";
                // line 32
                $context["scount"] = (($context["scount"] ?? null) + 1);
                // line 33
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banneriframe'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                ";
        }
        // line 35
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
<div class=\"banner-slider hero_single only_mob\" data-fkey=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["f_des_key"] ?? null), 47, $this->source), "html", null, true);
        echo "\" id=\"main-sec-des1\">
    <div class=\"slider-inner\">
        <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
            <div class=\"carousel-inner\">
                ";
        // line 51
        if ((twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = ($context["cdestinations_List"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[0] ?? null) : null), "mob_banner_type", [], "any", false, false, true, 51) == "Image")) {
            // line 52
            echo "                    ";
            $context["scount"] = 1;
            // line 53
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = ($context["cdestinations_List"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[0] ?? null) : null), "mob_banner_image", [], "any", false, false, true, 53));
            foreach ($context['_seq'] as $context["_key"] => $context["bannerslider"]) {
                // line 54
                echo "                        <div class=\"carousel-item ";
                if ((($context["scount"] ?? null) == 1)) {
                    echo "active";
                }
                echo "\">
                            <div class=\"banner-image\">
                                <img class=\"d-block w-100\" src=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["bannerslider"], "path", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_10 = ($context["cdestinations_List"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[0] ?? null) : null), "title", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
                echo "\">
                            </div>
                            <div class=\"carousel-caption\">
                                <h1>";
                // line 59
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_11 = ($context["cdestinations_List"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[0] ?? null) : null), "title", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
                echo "</h1>
                                <span class=\"line\"><em></em></span>
                            </div>
                        </div>
                        ";
                // line 63
                $context["scount"] = (($context["scount"] ?? null) + 1);
                // line 64
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bannerslider'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                ";
        } elseif ((twig_get_attribute($this->env, $this->source, (($__internal_compile_12 = ($context["cdestinations_List"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[0] ?? null) : null), "mob_banner_type", [], "any", false, false, true, 65) == "Video")) {
            // line 66
            echo "                    ";
            $context["scount"] = 1;
            // line 67
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (($__internal_compile_13 = ($context["cdestinations_List"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[0] ?? null) : null), "mob_banner_iframe", [], "any", false, false, true, 67));
            foreach ($context['_seq'] as $context["_key"] => $context["banneriframe"]) {
                // line 68
                echo "                        ";
                $context["v_duration"] = (twig_get_attribute($this->env, $this->source, $context["banneriframe"], "mob_video_duration", [], "any", false, false, true, 68) * 1000);
                // line 69
                echo "                        <div class=\"carousel-item ";
                if ((($context["scount"] ?? null) == 1)) {
                    echo "active";
                }
                echo "\" data-interval=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["v_duration"] ?? null), 69, $this->source), "html", null, true);
                echo "\">
                            <div class=\"banner-iframe\">
                                <iframe width=\"770\" height=\"433\" src=\"https://www.youtube.com/embed/";
                // line 71
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["banneriframe"], "mob_iframe", [], "any", false, false, true, 71), 71, $this->source), 17, null), "html", null, true);
                echo "?playlist=";
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["banneriframe"], "mob_iframe", [], "any", false, false, true, 71), 71, $this->source), 17, null), "html", null, true);
                echo "&showinfo=0&loop=1&autoplay=1&controls=0&mute=1&enablejsapi=1\" title=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_14 = ($context["cdestinations_List"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[0] ?? null) : null), "title", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
                echo "\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
                            </div>
                            <div class=\"carousel-caption\">
                                <h1>";
                // line 74
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_15 = ($context["cdestinations_List"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[0] ?? null) : null), "title", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
                echo "</h1>
                                <span class=\"line\"><em></em></span>
                            </div>
                        </div>
                        ";
                // line 78
                $context["scount"] = (($context["scount"] ?? null) + 1);
                // line 79
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banneriframe'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "                ";
        }
        // line 81
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


<!-- <section class=\"hero_single version_2 full\" data-aos=\"fade-up\" data-aos-duration=\"2000\" data-fkey = \"";
        // line 95
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["f_des_key"] ?? null), 95, $this->source), "html", null, true);
        echo "\" id=\"main-sec-des\">
    <div class=\"wrapper\" style=\"background-image: url(";
        // line 96
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_16 = ($context["cdestinations_List"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[0] ?? null) : null), "banner", [], "any", false, false, true, 96), "path", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
        echo ");\">
        <div class=\"container position-relative h-100\">
            <div class=\"banner_title\">
                <div class=\"banner_text\">
                    <h1>";
        // line 100
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_17 = ($context["cdestinations_List"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[0] ?? null) : null), "title", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
        echo "</h1>
                    <span class=\"line\"><em></em></span>
                    ";
        // line 102
        if (twig_get_attribute($this->env, $this->source, (($__internal_compile_18 = ($context["cdestinations_List"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[0] ?? null) : null), "iframe", [], "any", false, false, true, 102)) {
            // line 103
            echo "                    <div style=\"padding-bottom:3%;\"></div>
                    <div class=\"play-btn\" data-toggle=\"modal\" data-target=\"#video_pop\">
                        <span><img src=\"/themes/SAN/assets/images/play-btn.svg\"></span> Play Video
                    </div>
                    ";
        }
        // line 108
        echo "                </div>
            </div>
        </div>
    </div>
</section> -->


";
        // line 115
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/innerform.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 116
        echo "<!-- /hero_single -->
<div class=\"clearfix\"></div>


<div class=\"bg_color_1 container-fluid experiences-slider\" data-aos=\"fade-up\" data-aos-duration=\"2000\">
    <div class=\"container\">
        <div id=\"carrosalwrapper\">
            <div id=\"carouselround\" data-ca=\"0\"> </div>
            <div class=\"nextprevbuttons mbottom50\">
                <span id=\"prev\"><img src=\"";
        // line 125
        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/images/left.svg"]);
        echo "\"></span>
                <span id=\"next\"><img src=\"";
        // line 126
        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/images/right.svg"]);
        echo "\"></span>
            </div>
        </div>
    </div>
</div>

<div class=\"clearfix\"></div>
<div class=\"bg_color_1 container\" data-aos=\"fade-up\" data-aos-duration=\"2000\">
    <div class=\"slidedive\">
        <div class=\"main_title_2 sub_title mt-3\">
            <h2 class=\"mt-0\"></h2> <span><em></em></span>
        </div>
        <div class=\"description\">
            <p class=\"populardetails\"></p>
        </div>
        <div class=\"video-element\"></div>
        <div class=\"main_title_2 mt-5 packages-section\" style=\"display: none;\">
            <h2>Packages</h2>
            <span><em></em></span>
        </div>
        <div class=\"our_ser_pos packages-section\" style=\"display: none;\">
            <div id=\"homeservice\" class=\"owl-carousel center owl-theme\">

            </div>
            <div class=\"owl-nav\">
                <div class=\"hs_owl-prev\" onclick=\"itl.hs_owl.trigger('prev.owl.carousel');\"><img
                        src=\"";
        // line 152
        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/images/prev.svg"]);
        echo "\"></div>
                <div class=\"hs_owl-next\" onclick=\"itl.hs_owl.trigger('next.owl.carousel');\"><img
                        src=\"";
        // line 154
        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/images/next.svg"]);
        echo "\"></div>
            </div>
        </div>
    </div>
    <!-- /package_item -->
    <div class=\"clearfix\"></div>
</div>

<!-- /container -->
<script type=\"text/javascript\">
    
    var dest_f_key = \$('#main-sec-des').data('fkey');
    var start_var = 1;
    var cr =
    {
        cl: '";
        // line 169
        echo ((($context["slug"] ?? null)) ? ("destinations") : (""));
        echo "',
        img: {
            destinations: []
        },
        w: 0,
        cd: ";
        // line 174
        ((($context["cd"] ?? null)) ? (print (twig_escape_filter($this->env, ($context["cd"] ?? null), "html", null, true))) : (print (0)));
        echo ",
        cs: 3 + ";
        // line 175
        ((($context["cd"] ?? null)) ? (print (twig_escape_filter($this->env, ($context["cd"] ?? null), "html", null, true))) : (print (0)));
        echo ",
        baseurl: '";
        // line 176
        echo url("/");
        echo "',
        int: function() {
            img = cr.img[cr.cl];
            
            if (\$('#carrosalwrapper .item').length) {
                for (i = 0 + cr.cd; i < 4 + cr.cd; i++) {
                    \$('#carrosalwrapper .item').eq(i).css({ 'background-image': 'url(' + cr.baseurl + 'img/' + img[i].dimage + ')' });
                    \$('#carrosalwrapper .item').eq(i).find('span').html(img[i].slider_title);
                }
            } else {
                for (i = dest_f_key + cr.cd; i < dest_f_key + 4 + cr.cd; i++) {
                    \$('#carouselround').prepend('<div class=\"item testclasss\" onclick=\"cr.click(this)\" ><div class=\"title\"><span></span><em></em></div></div>');
                    cr.setdata(0, i);
                }
            }

        },
        btnclick: function(a, ele) {
            // alert(\"1\");
            cr.cl = a;
            \$(ele).addClass('active');
            cr.int();
            setTimeout(function () {
                cr.set();
            }, 300);
        },
        click: function(a) {
            // alert(\"2\");
            i = \$('#carrosalwrapper .item').index(a);
            if (i == 0 || i == 2) {
                corrosalmove(i);
            }
        },
        setdata: function(ele, i) {
            img = cr.img[cr.cl][i];
            // console.log(img);
            if (img){
                if(img.slider_title){
                    \$('#carrosalwrapper .item').eq(ele).attr('id', i).css({ 'background-image': 'url(' + img.dimage }).find('span').html(img.slider_title);
                }else{
                    \$('#carrosalwrapper .item').eq(ele).attr('id', i).css({ 'background-image': 'url(' + img.dimage }).find('span').html(img.name);
                }
            }
        },
        set: function () {

            cr.w = \$('#carrosalwrapper #carouselround').width();
            var windowSize = \$(window).width();

            if (windowSize > 1200) {
                \$('#carrosalwrapper #carouselround').height(cr.w * .43);
                \$('#carrosalwrapper .item').css({ height: cr.w * .36, opacity: 1 })
                \$('#carrosalwrapper .item').eq(0).css({ width: cr.w * .6, left: -380, top: cr.w * .05, transform: 'scale(.8)' });
                \$('#carrosalwrapper .item').eq(1).css({ width: cr.w * .6, left: cr.w * .2, top: cr.w * .05, transform: 'scale(.6)' });
                \$('#carrosalwrapper .item').eq(2).css({ width: cr.w * .6, left: 800, top: cr.w * .05, transform: 'scale(.8)' });
                \$('#carrosalwrapper .item').eq(3).css({ width: cr.w * .6, left: cr.w * .2, top: cr.w * .05, transform: 'scale(1)' });
            }
            else {
                \$('#carrosalwrapper #carouselround').height(cr.w * .43);
                \$('#carrosalwrapper .item').css({ height: cr.w * .36, opacity: 1 })
                \$('#carrosalwrapper .item').eq(0).css({ width: cr.w * .6, left: 0, top: cr.w * .05, transform: 'scale(.8)' });
                \$('#carrosalwrapper .item').eq(1).css({ width: cr.w * .6, left: cr.w * .2, top: cr.w * .05, transform: 'scale(.6)' });
                \$('#carrosalwrapper .item').eq(2).css({ width: cr.w * .6, left: cr.w - (cr.w * .6), top: cr.w * .05, transform: 'scale(.8)' });
                \$('#carrosalwrapper .item').eq(3).css({ width: cr.w * .6, left: cr.w * .2, top: cr.w * .05, transform: 'scale(1)' });
            }


            id = \$('#carrosalwrapper .item').eq(3).attr('id');

            if (id) {
                img = cr.img[cr.cl][id];
                start_var++;

                if (img) {
                    \$('.slidedive').fadeOut(500, function () {
                        console.log(img.top_banner_html);
                        \$('#carouselExampleIndicators .carousel-inner').html(img.top_banner_html);
                        \$('#carouselExampleIndicators').carousel();


                        \$('.sub_title h2').html(img.sub_title);
                        \$('.description p').html(img.description);
                        if (img.video) {
                            \$('.video-element').html('<div class=\"mt-4 embed-responsive embed-responsive-42by24\"><iframe width=\"100%\" src=\"https://www.youtube.com/embed/' + img.video + '\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe></div>')
                        } else {
                            \$('.video-element').html('');
                        }
                        \$('.slidedive').fadeIn(500);
                    })
                    elements = \"\";
                    var nos = \$('#homeservice .item').length;
                    // alert(nos);
                    for (i = 0; i < nos; i++) {
                        if (itl.hs_owl) itl.hs_owl.trigger('remove.owl.carousel', i).trigger('refresh.owl.carousel');
                    }
                    subs = img.subs;
                    // alert(subs.length);
                    if (subs.length) {
                        \$('.packages-section').show();
                        subcount = Math.ceil(subs.length / 2);

                        \$j = 0;
                        for (i = 0; i < subcount; i++) {
                            elements = '<div class=\"item\">';
                            sub = subs[\$j]; \$j++;
                            var price = \"\";
                            console.log('subcount',subs.length);
                            if (subs.length <= 4) {
                                \$('.owl-nav').addClass('disabled');
                            }
                            if (sub) {
                                if (sub.price && sub.price.price) {
                                    price = '<em>' + sub.price.currency + ' ' + sub.price.price + '*</em>';
                                }
                                
                                elements += '<div class=\"col-xl-12 col-lg-12 col-md-12 nopadding\"> <div class=\"d-flex grid_item sub_item\"><div class=\"w-100\">  <figure style=\"background-image:url(' + sub.pimage + '); height:100%\">  </figure>  </div> <div class=\"corporateBG w-100 \">  <figure><div class=\"details\"><div class=\"details-sub\"><h3><form action=\"' + cr.baseurl + 'package/' + sub.slug + '\" method=\"POST\"><input type=\"hidden\" name=\"exp_slug\" value=\"'+img.slug+'\"><input type=\"hidden\" name=\"package_id\" value=\"'+sub.id+'\"><button class=\"pack-name\" type=\"submit\">'+sub.name+'</button></form></h3><span>' + sub.days + ' Days | ' + sub.nights + ' Nights</span><form action=\"' + cr.baseurl + 'package/' + sub.slug + '\" method=\"POST\"><input type=\"hidden\" name=\"exp_slug\" value=\"'+img.slug+'\"><input type=\"hidden\" name=\"package_id\" value=\"'+sub.id+'\"><input type=\"submit\" class=\"package-price\" value=\"'+sub.price+'\"> </form></div></div></figure> </div> </div> </div>';

                            }
                            sub = subs[\$j]; \$j++;
                            price = \"\";
                            if (sub) {
                                if (sub.price && sub.price.price) {
                                    price = '<em>' + sub.price.currency + ' ' + sub.price.price + '*</em>';
                                }
                                elements += '<div class=\"col-xl-12 col-lg-12 col-md-12 nopadding\"> <div class=\" theme d-flex grid_item sub_item\"> <div class=\"corporateBG w-100 \">  <figure><div class=\"details\"><div class=\"details-sub\"><h3><form action=\"' + cr.baseurl + 'package/' + sub.slug + '\" method=\"POST\"><input type=\"hidden\" name=\"exp_slug\" value=\"'+img.slug+'\"><input type=\"hidden\" name=\"package_id\" value=\"'+sub.id+'\"><button class=\"pack-name\" type=\"submit\">'+sub.name+'</button></form></h3><span>' + sub.days + ' Days | ' + sub.nights + ' Nights</span><form action=\"' + cr.baseurl + 'package/' + sub.slug + '\" method=\"POST\"><input type=\"hidden\" name=\"exp_slug\" value=\"'+img.slug+'\"><input type=\"hidden\" name=\"package_id\" value=\"'+sub.id+'\"><input type=\"submit\" class=\"package-price\" value=\"'+sub.price+'\"> </form></div></div></figure> </div> <div class=\"w-100\">  <figure style=\"background-image:url(' + sub.pimage + '); height:100%\">  </figure>  </div> </div> </div>';
                            }
                            elements += '</div>';

                            // console.log(subs);
                            itl.hs_owl.trigger('add.owl.carousel', [elements]).trigger('refresh.owl.carousel');
                        }
                    } else {
                        \$('.packages-section').hide();
                        if (itl.hs_owl) itl.hs_owl.trigger('remove.owl.carousel', i).trigger('refresh.owl.carousel');
                    }
                }
            }
        }
    }

    ";
        // line 316
        if (($context["slug"] ?? null)) {
            // line 317
            echo "    cr.img.destinations = ";
            echo json_encode($this->sandbox->ensureToStringAllowed(($context["destination"] ?? null), 317, $this->source));
            echo ";
    ";
        }
        // line 319
        echo "

    \$('#prev').click(function () {
        corrosalmove(0);
    })
    \$('#next').click(function () {
        corrosalmove(2);
    })

    function corrosalmove(i) {
        img = cr.img[cr.cl];
        if (i == 0) {
            cr.cs = (\$('#carrosalwrapper .item').eq(0).attr('id') * 1) - 1;
            if (cr.cs < 0) {
                cr.cs = img.length - 1;
            }
            cr.setdata(1, cr.cs);
            \$('#carrosalwrapper #carouselround').append(\$('#carrosalwrapper .item').eq(0));
            
        }
        if (i == 2) {
            cr.cs = (\$('#carrosalwrapper .item').eq(2).attr('id') * 1) + 1;
            if (cr.cs > img.length - 1) {
                cr.cs = 0;
            }
            cr.setdata(1, cr.cs);
            \$('#carrosalwrapper #carouselround').prepend(\$('#carrosalwrapper .item').eq(3));

        }
        cr.set();
    }


    \$(document).ready(function () {
        cr.int();
        
        setTimeout(function () {
            cr.set();
        }, 300);
    })
    \$(window).resize(function () {
        cr.set();
    });

</script>

<style>
    #carrosalwrapper #carouselround {
        position: relative;
        height: 500px;
        width: 100%;
        overflow: hidden;
    }

    #carrosalwrapper .item {
        opacity: 0;
        width: 600px;
        height: 400px;
        position: absolute;
        transition-duration: .5s;
        transition-timing-function: ease-out;
        transform: translate(0, 0);
        background: center;
        background-size: cover;
        border-radius: 0;
    }

    #carrosalwrapper .item .title {
        opacity: 0;
        background: rgba(0, 0, 0, .3);
        height: 100%;
        text-transform: uppercase;
        cursor: pointer;
    }

    #carrosalwrapper .item:nth-child(1) {
        z-index: 1;
    }

    #carrosalwrapper .item:nth-child(2) {
        z-index: 0;
        opacity: 0
    }

    #carrosalwrapper .item:nth-child(3) {
        z-index: 3;
    }

    #carrosalwrapper .item:nth-child(4) {
        z-index: 4;
    }

    #carrosalwrapper .item:nth-child(4) .title {
        opacity: 1;
    }
</style>


<section class=\"other-experiences\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\" mt-5 mb-1\" id=\"experiences\">
                    <div class=\"main_title_2 \">
                        <h2>Other EXPERIENCES </h2>
                        <span><em></em></span>
                    </div>
                    <div class=\"experienc-box\">
                        ";
        // line 427
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["other_destinations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["other_des"]) {
            // line 428
            echo "
                        ";
            // line 429
            if ((($context["start"] ?? null) == 1)) {
                // line 430
                echo "                        <div class=\"experience-item\">
                            <div class=\"experienc-set active current\">
                                ";
            }
            // line 433
            echo "
                                ";
            // line 434
            if ((($context["start"] ?? null) == 1)) {
                // line 435
                echo "                                <div class=\"experienc-left\">
                                    <div class=\"experienc-figer\">
                                        <div class=\"img\" style=\"background-image:url(";
                // line 437
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["other_des"], "thumbnail", [], "any", false, false, true, 437), "path", [], "any", false, false, true, 437), 437, $this->source), "html", null, true);
                echo ")\">
                                        </div>
                                        <div class=\"title\">
                                            <a href=\"";
                // line 440
                echo url("/");
                echo "experiences/";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["other_des"], "slug", [], "any", false, false, true, 440), 440, $this->source), "html", null, true);
                echo "\">
                                                <h3>";
                // line 441
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["other_des"], "title", [], "any", false, false, true, 441), 441, $this->source), "html", null, true);
                echo "<em></em></h3>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                ";
            }
            // line 447
            echo "
                                ";
            // line 448
            if ((($context["start"] ?? null) == 2)) {
                // line 449
                echo "                                <div class=\"experienc-right\">
                                    <div class=\"experienc-figer\">
                                        <div class=\"img\" style=\"background-image:url(";
                // line 451
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["other_des"], "thumbnail", [], "any", false, false, true, 451), "path", [], "any", false, false, true, 451), 451, $this->source), "html", null, true);
                echo ")\">
                                        </div>
                                        <div class=\"title\">
                                            <a href=\"";
                // line 454
                echo url("/");
                echo "experiences/";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["other_des"], "slug", [], "any", false, false, true, 454), 454, $this->source), "html", null, true);
                echo "\">
                                                <h3>";
                // line 455
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["other_des"], "title", [], "any", false, false, true, 455), 455, $this->source), "html", null, true);
                echo "<em></em></h3>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ";
            }
            // line 462
            echo "
                            ";
            // line 463
            if ((($context["start"] ?? null) == 1)) {
                // line 464
                echo "                            <div class=\"morelessbar morebar\">
                                <div class=\"expcorner leftcorner\"></div>
                                <a class=\"addexp\" onclick=\"expslide(1);\">
                                    <img src=\"/themes/SAN/assets/images/add.svg\"
                                        class=\"img-fluid\" alt=\"\">
                                    <img src=\"/themes/SAN/assets/images/minus.svg\"
                                        class=\"img-fluid more-exp\" alt=\"\">
                                </a>
                                <div class=\"expcorner rightcorner\"></div>
                            </div>
                            ";
            }
            // line 475
            echo "
                            ";
            // line 476
            if ((($context["start"] ?? null) == 3)) {
                // line 477
                echo "                            <div class=\"experienc-set toggle-exp\">
                                <div class=\"experienc-left\">
                                    <div class=\"experienc-figer\">
                                        <div class=\"img\" style=\"background-image:url(";
                // line 480
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["other_des"], "thumbnail", [], "any", false, false, true, 480), "path", [], "any", false, false, true, 480), 480, $this->source), "html", null, true);
                echo ")\">
                                        </div>
                                        <div class=\"title\">
                                            <a href=\"";
                // line 483
                echo url("/");
                echo "experiences/";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["other_des"], "slug", [], "any", false, false, true, 483), 483, $this->source), "html", null, true);
                echo "\">
                                                <h3>";
                // line 484
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["other_des"], "title", [], "any", false, false, true, 484), 484, $this->source), "html", null, true);
                echo "<em></em></h3>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                ";
            }
            // line 490
            echo "
                                ";
            // line 491
            if ((($context["start"] ?? null) == 4)) {
                // line 492
                echo "                                <div class=\"experienc-right\">
                                    <div class=\"experienc-figer\">
                                        <div class=\"img\" style=\"background-image:url(";
                // line 494
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["other_des"], "thumbnail", [], "any", false, false, true, 494), "path", [], "any", false, false, true, 494), 494, $this->source), "html", null, true);
                echo ")\">
                                        </div>
                                        <div class=\"title\">
                                            <a href=\"";
                // line 497
                echo url("/");
                echo "experiences/";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["other_des"], "slug", [], "any", false, false, true, 497), 497, $this->source), "html", null, true);
                echo "\">
                                                <h3>";
                // line 498
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["other_des"], "title", [], "any", false, false, true, 498), 498, $this->source), "html", null, true);
                echo "<em></em></h3>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ";
            }
            // line 505
            echo "

                            ";
            // line 507
            if ((($context["start"] ?? null) == 4)) {
                // line 508
                echo "                        </div>
                        ";
            }
            // line 510
            echo "

                        ";
            // line 512
            $context["start"] = (($context["start"] ?? null) + 1);
            // line 513
            echo "                        ";
            if ((($context["start"] ?? null) > 4)) {
                // line 514
                echo "                        ";
                $context["start"] = 1;
                // line 515
                echo "                        ";
            }
            // line 516
            echo "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['other_des'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 518
        echo "
                        <!--   <div class=\"experienc-set \">
                     </div> -->



                    </div>
                    <div class=\"other-exp-descr pb-5 text-center\">
                    </div>
                    <script>
                        function expslide(type, ele) {
                            jQuery('.morebar').toggleClass('clicked');
                            jQuery('.experienc-set.toggle-exp').toggleClass('current active');
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"other-experiences\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"other-exp-descr pb-5 text-center\">
                        <p>";
        // line 543
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 543), "content_2", [], "any", false, false, true, 543), 543, $this->source), "html", null, true);
        echo "</p>
                    </div>
            </div>
        </div>
    </div>
</section>

<!-- POPUP -->
<div class=\"modal fade\" id=\"video_pop\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
    aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
                <!-- 16:9 aspect ratio -->
                <div class=\"embed-responsive embed-responsive-16by9\">
                    ";
        // line 561
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_19 = ($context["cdestinations_List"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[0] ?? null) : null), "iframe", [], "any", false, false, true, 561), 561, $this->source);
        echo "
                </div>
            </div>
        </div>
    </div>
</div>

<script type=\"text/javascript\">
    
    \$('.experienc-box').owlCarousel({
        loop: false,
        margin: 10,
        dots: false,
        nav: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
            1000: {
                items: 1,
                nav: true,
                loop: false
            }
        }
    });

    jQuery(document).ready(function( \$ ) {
        \$('.banner-iframe iframe')[0].contentWindow.postMessage('{\"event\":\"command\",\"func\":\"playVideo\",\"args\":\"\"}', '*');
        \$(' iframe').trigger(\"click\");
    });

    \$(document).ready(function(){
\t\t\$(\"#hcountrylist\").val(\"any\").change();
\t});

    \$(document).ready(function(){
        \$(\".addexp\").click(function(){
            event.preventDefault(); // Prevent the default anchor behavior
            \$('.owl-prev').toggleClass('top_add');
            \$('.owl-next').toggleClass('top_add');
        });
    });
</script>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/itl/themes/SAN/pages/experiences.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  887 => 561,  866 => 543,  839 => 518,  832 => 516,  829 => 515,  826 => 514,  823 => 513,  821 => 512,  817 => 510,  813 => 508,  811 => 507,  807 => 505,  797 => 498,  791 => 497,  785 => 494,  781 => 492,  779 => 491,  776 => 490,  767 => 484,  761 => 483,  755 => 480,  750 => 477,  748 => 476,  745 => 475,  732 => 464,  730 => 463,  727 => 462,  717 => 455,  711 => 454,  705 => 451,  701 => 449,  699 => 448,  696 => 447,  687 => 441,  681 => 440,  675 => 437,  671 => 435,  669 => 434,  666 => 433,  661 => 430,  659 => 429,  656 => 428,  652 => 427,  542 => 319,  536 => 317,  534 => 316,  391 => 176,  387 => 175,  383 => 174,  375 => 169,  357 => 154,  352 => 152,  323 => 126,  319 => 125,  308 => 116,  304 => 115,  295 => 108,  288 => 103,  286 => 102,  281 => 100,  274 => 96,  270 => 95,  254 => 81,  251 => 80,  245 => 79,  243 => 78,  236 => 74,  226 => 71,  216 => 69,  213 => 68,  208 => 67,  205 => 66,  202 => 65,  196 => 64,  194 => 63,  187 => 59,  179 => 56,  171 => 54,  166 => 53,  163 => 52,  161 => 51,  154 => 47,  140 => 35,  137 => 34,  131 => 33,  129 => 32,  122 => 28,  112 => 25,  102 => 23,  99 => 22,  94 => 21,  91 => 20,  88 => 19,  82 => 18,  80 => 17,  73 => 13,  65 => 10,  57 => 8,  52 => 7,  49 => 6,  47 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"banner-slider hero_single only_desktop\" data-fkey=\"{{f_des_key}}\" id=\"main-sec-des\">
    <div class=\"slider-inner\">
        <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
            <div class=\"carousel-inner\">
                {% if cdestinations_List[0].banner_type == 'Image' %}
                    {% set scount = 1 %}
                    {% for bannerslider in cdestinations_List[0].banner_image %}
                        <div class=\"carousel-item {% if scount == 1 %}active{% endif %}\">
                            <div class=\"banner-image\">
                                <img class=\"d-block w-100\" src=\"{{bannerslider.path}}\" alt=\"{{cdestinations_List[0].title}}\">
                            </div>
                            <div class=\"carousel-caption\">
                                <h1>{{cdestinations_List[0].title}}</h1>
                                <span class=\"line\"><em></em></span>
                            </div>
                        </div>
                        {% set scount = scount + 1 %}
                    {% endfor %}
                {% elseif cdestinations_List[0].banner_type == 'Video' %}
                    {% set scount = 1 %}
                    {% for banneriframe in cdestinations_List[0].banner_iframe %}
                        {% set v_duration = banneriframe.video_duration * 1000 %}
                        <div class=\"carousel-item {% if scount == 1 %}active{% endif %}\" data-interval=\"{{v_duration}}\">
                            <div class=\"banner-iframe\">
                                <iframe width=\"770\" height=\"433\" src=\"https://www.youtube.com/embed/{{banneriframe.iframe[17:]}}?showinfo=0&playlist={{banneriframe.iframe[17:]}}&loop=1&autoplay=1&controls=0&mute=1&enablejsapi=1\" title=\"{{cdestinations_List[0].title}}\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
                            </div>
                            <div class=\"carousel-caption\">
                                <h1>{{cdestinations_List[0].title}}</h1>
                                <span class=\"line\"><em></em></span>
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
<div class=\"banner-slider hero_single only_mob\" data-fkey=\"{{f_des_key}}\" id=\"main-sec-des1\">
    <div class=\"slider-inner\">
        <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
            <div class=\"carousel-inner\">
                {% if cdestinations_List[0].mob_banner_type == 'Image' %}
                    {% set scount = 1 %}
                    {% for bannerslider in cdestinations_List[0].mob_banner_image %}
                        <div class=\"carousel-item {% if scount == 1 %}active{% endif %}\">
                            <div class=\"banner-image\">
                                <img class=\"d-block w-100\" src=\"{{bannerslider.path}}\" alt=\"{{cdestinations_List[0].title}}\">
                            </div>
                            <div class=\"carousel-caption\">
                                <h1>{{cdestinations_List[0].title}}</h1>
                                <span class=\"line\"><em></em></span>
                            </div>
                        </div>
                        {% set scount = scount + 1 %}
                    {% endfor %}
                {% elseif cdestinations_List[0].mob_banner_type == 'Video' %}
                    {% set scount = 1 %}
                    {% for banneriframe in cdestinations_List[0].mob_banner_iframe %}
                        {% set v_duration = banneriframe.mob_video_duration * 1000 %}
                        <div class=\"carousel-item {% if scount == 1 %}active{% endif %}\" data-interval=\"{{v_duration}}\">
                            <div class=\"banner-iframe\">
                                <iframe width=\"770\" height=\"433\" src=\"https://www.youtube.com/embed/{{banneriframe.mob_iframe[17:]}}?playlist={{banneriframe.mob_iframe[17:]}}&showinfo=0&loop=1&autoplay=1&controls=0&mute=1&enablejsapi=1\" title=\"{{cdestinations_List[0].title}}\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
                            </div>
                            <div class=\"carousel-caption\">
                                <h1>{{cdestinations_List[0].title}}</h1>
                                <span class=\"line\"><em></em></span>
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


<!-- <section class=\"hero_single version_2 full\" data-aos=\"fade-up\" data-aos-duration=\"2000\" data-fkey = \"{{f_des_key}}\" id=\"main-sec-des\">
    <div class=\"wrapper\" style=\"background-image: url({{cdestinations_List[0].banner.path}});\">
        <div class=\"container position-relative h-100\">
            <div class=\"banner_title\">
                <div class=\"banner_text\">
                    <h1>{{cdestinations_List[0].title}}</h1>
                    <span class=\"line\"><em></em></span>
                    {% if(cdestinations_List[0].iframe) %}
                    <div style=\"padding-bottom:3%;\"></div>
                    <div class=\"play-btn\" data-toggle=\"modal\" data-target=\"#video_pop\">
                        <span><img src=\"/themes/SAN/assets/images/play-btn.svg\"></span> Play Video
                    </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</section> -->


{% partial 'site/innerform.htm' %}
<!-- /hero_single -->
<div class=\"clearfix\"></div>


<div class=\"bg_color_1 container-fluid experiences-slider\" data-aos=\"fade-up\" data-aos-duration=\"2000\">
    <div class=\"container\">
        <div id=\"carrosalwrapper\">
            <div id=\"carouselround\" data-ca=\"0\"> </div>
            <div class=\"nextprevbuttons mbottom50\">
                <span id=\"prev\"><img src=\"{{ 'assets/images/left.svg'|theme }}\"></span>
                <span id=\"next\"><img src=\"{{ 'assets/images/right.svg'|theme }}\"></span>
            </div>
        </div>
    </div>
</div>

<div class=\"clearfix\"></div>
<div class=\"bg_color_1 container\" data-aos=\"fade-up\" data-aos-duration=\"2000\">
    <div class=\"slidedive\">
        <div class=\"main_title_2 sub_title mt-3\">
            <h2 class=\"mt-0\"></h2> <span><em></em></span>
        </div>
        <div class=\"description\">
            <p class=\"populardetails\"></p>
        </div>
        <div class=\"video-element\"></div>
        <div class=\"main_title_2 mt-5 packages-section\" style=\"display: none;\">
            <h2>Packages</h2>
            <span><em></em></span>
        </div>
        <div class=\"our_ser_pos packages-section\" style=\"display: none;\">
            <div id=\"homeservice\" class=\"owl-carousel center owl-theme\">

            </div>
            <div class=\"owl-nav\">
                <div class=\"hs_owl-prev\" onclick=\"itl.hs_owl.trigger('prev.owl.carousel');\"><img
                        src=\"{{ 'assets/images/prev.svg'|theme }}\"></div>
                <div class=\"hs_owl-next\" onclick=\"itl.hs_owl.trigger('next.owl.carousel');\"><img
                        src=\"{{ 'assets/images/next.svg'|theme }}\"></div>
            </div>
        </div>
    </div>
    <!-- /package_item -->
    <div class=\"clearfix\"></div>
</div>

<!-- /container -->
<script type=\"text/javascript\">
    
    var dest_f_key = \$('#main-sec-des').data('fkey');
    var start_var = 1;
    var cr =
    {
        cl: '{{ slug?\"destinations\" }}',
        img: {
            destinations: []
        },
        w: 0,
        cd: {{ cd?cd:0}},
        cs: 3 + {{ cd ? cd : 0 }},
        baseurl: '{{url(\"/\")}}',
        int: function() {
            img = cr.img[cr.cl];
            
            if (\$('#carrosalwrapper .item').length) {
                for (i = 0 + cr.cd; i < 4 + cr.cd; i++) {
                    \$('#carrosalwrapper .item').eq(i).css({ 'background-image': 'url(' + cr.baseurl + 'img/' + img[i].dimage + ')' });
                    \$('#carrosalwrapper .item').eq(i).find('span').html(img[i].slider_title);
                }
            } else {
                for (i = dest_f_key + cr.cd; i < dest_f_key + 4 + cr.cd; i++) {
                    \$('#carouselround').prepend('<div class=\"item testclasss\" onclick=\"cr.click(this)\" ><div class=\"title\"><span></span><em></em></div></div>');
                    cr.setdata(0, i);
                }
            }

        },
        btnclick: function(a, ele) {
            // alert(\"1\");
            cr.cl = a;
            \$(ele).addClass('active');
            cr.int();
            setTimeout(function () {
                cr.set();
            }, 300);
        },
        click: function(a) {
            // alert(\"2\");
            i = \$('#carrosalwrapper .item').index(a);
            if (i == 0 || i == 2) {
                corrosalmove(i);
            }
        },
        setdata: function(ele, i) {
            img = cr.img[cr.cl][i];
            // console.log(img);
            if (img){
                if(img.slider_title){
                    \$('#carrosalwrapper .item').eq(ele).attr('id', i).css({ 'background-image': 'url(' + img.dimage }).find('span').html(img.slider_title);
                }else{
                    \$('#carrosalwrapper .item').eq(ele).attr('id', i).css({ 'background-image': 'url(' + img.dimage }).find('span').html(img.name);
                }
            }
        },
        set: function () {

            cr.w = \$('#carrosalwrapper #carouselround').width();
            var windowSize = \$(window).width();

            if (windowSize > 1200) {
                \$('#carrosalwrapper #carouselround').height(cr.w * .43);
                \$('#carrosalwrapper .item').css({ height: cr.w * .36, opacity: 1 })
                \$('#carrosalwrapper .item').eq(0).css({ width: cr.w * .6, left: -380, top: cr.w * .05, transform: 'scale(.8)' });
                \$('#carrosalwrapper .item').eq(1).css({ width: cr.w * .6, left: cr.w * .2, top: cr.w * .05, transform: 'scale(.6)' });
                \$('#carrosalwrapper .item').eq(2).css({ width: cr.w * .6, left: 800, top: cr.w * .05, transform: 'scale(.8)' });
                \$('#carrosalwrapper .item').eq(3).css({ width: cr.w * .6, left: cr.w * .2, top: cr.w * .05, transform: 'scale(1)' });
            }
            else {
                \$('#carrosalwrapper #carouselround').height(cr.w * .43);
                \$('#carrosalwrapper .item').css({ height: cr.w * .36, opacity: 1 })
                \$('#carrosalwrapper .item').eq(0).css({ width: cr.w * .6, left: 0, top: cr.w * .05, transform: 'scale(.8)' });
                \$('#carrosalwrapper .item').eq(1).css({ width: cr.w * .6, left: cr.w * .2, top: cr.w * .05, transform: 'scale(.6)' });
                \$('#carrosalwrapper .item').eq(2).css({ width: cr.w * .6, left: cr.w - (cr.w * .6), top: cr.w * .05, transform: 'scale(.8)' });
                \$('#carrosalwrapper .item').eq(3).css({ width: cr.w * .6, left: cr.w * .2, top: cr.w * .05, transform: 'scale(1)' });
            }


            id = \$('#carrosalwrapper .item').eq(3).attr('id');

            if (id) {
                img = cr.img[cr.cl][id];
                start_var++;

                if (img) {
                    \$('.slidedive').fadeOut(500, function () {
                        console.log(img.top_banner_html);
                        \$('#carouselExampleIndicators .carousel-inner').html(img.top_banner_html);
                        \$('#carouselExampleIndicators').carousel();


                        \$('.sub_title h2').html(img.sub_title);
                        \$('.description p').html(img.description);
                        if (img.video) {
                            \$('.video-element').html('<div class=\"mt-4 embed-responsive embed-responsive-42by24\"><iframe width=\"100%\" src=\"https://www.youtube.com/embed/' + img.video + '\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe></div>')
                        } else {
                            \$('.video-element').html('');
                        }
                        \$('.slidedive').fadeIn(500);
                    })
                    elements = \"\";
                    var nos = \$('#homeservice .item').length;
                    // alert(nos);
                    for (i = 0; i < nos; i++) {
                        if (itl.hs_owl) itl.hs_owl.trigger('remove.owl.carousel', i).trigger('refresh.owl.carousel');
                    }
                    subs = img.subs;
                    // alert(subs.length);
                    if (subs.length) {
                        \$('.packages-section').show();
                        subcount = Math.ceil(subs.length / 2);

                        \$j = 0;
                        for (i = 0; i < subcount; i++) {
                            elements = '<div class=\"item\">';
                            sub = subs[\$j]; \$j++;
                            var price = \"\";
                            console.log('subcount',subs.length);
                            if (subs.length <= 4) {
                                \$('.owl-nav').addClass('disabled');
                            }
                            if (sub) {
                                if (sub.price && sub.price.price) {
                                    price = '<em>' + sub.price.currency + ' ' + sub.price.price + '*</em>';
                                }
                                
                                elements += '<div class=\"col-xl-12 col-lg-12 col-md-12 nopadding\"> <div class=\"d-flex grid_item sub_item\"><div class=\"w-100\">  <figure style=\"background-image:url(' + sub.pimage + '); height:100%\">  </figure>  </div> <div class=\"corporateBG w-100 \">  <figure><div class=\"details\"><div class=\"details-sub\"><h3><form action=\"' + cr.baseurl + 'package/' + sub.slug + '\" method=\"POST\"><input type=\"hidden\" name=\"exp_slug\" value=\"'+img.slug+'\"><input type=\"hidden\" name=\"package_id\" value=\"'+sub.id+'\"><button class=\"pack-name\" type=\"submit\">'+sub.name+'</button></form></h3><span>' + sub.days + ' Days | ' + sub.nights + ' Nights</span><form action=\"' + cr.baseurl + 'package/' + sub.slug + '\" method=\"POST\"><input type=\"hidden\" name=\"exp_slug\" value=\"'+img.slug+'\"><input type=\"hidden\" name=\"package_id\" value=\"'+sub.id+'\"><input type=\"submit\" class=\"package-price\" value=\"'+sub.price+'\"> </form></div></div></figure> </div> </div> </div>';

                            }
                            sub = subs[\$j]; \$j++;
                            price = \"\";
                            if (sub) {
                                if (sub.price && sub.price.price) {
                                    price = '<em>' + sub.price.currency + ' ' + sub.price.price + '*</em>';
                                }
                                elements += '<div class=\"col-xl-12 col-lg-12 col-md-12 nopadding\"> <div class=\" theme d-flex grid_item sub_item\"> <div class=\"corporateBG w-100 \">  <figure><div class=\"details\"><div class=\"details-sub\"><h3><form action=\"' + cr.baseurl + 'package/' + sub.slug + '\" method=\"POST\"><input type=\"hidden\" name=\"exp_slug\" value=\"'+img.slug+'\"><input type=\"hidden\" name=\"package_id\" value=\"'+sub.id+'\"><button class=\"pack-name\" type=\"submit\">'+sub.name+'</button></form></h3><span>' + sub.days + ' Days | ' + sub.nights + ' Nights</span><form action=\"' + cr.baseurl + 'package/' + sub.slug + '\" method=\"POST\"><input type=\"hidden\" name=\"exp_slug\" value=\"'+img.slug+'\"><input type=\"hidden\" name=\"package_id\" value=\"'+sub.id+'\"><input type=\"submit\" class=\"package-price\" value=\"'+sub.price+'\"> </form></div></div></figure> </div> <div class=\"w-100\">  <figure style=\"background-image:url(' + sub.pimage + '); height:100%\">  </figure>  </div> </div> </div>';
                            }
                            elements += '</div>';

                            // console.log(subs);
                            itl.hs_owl.trigger('add.owl.carousel', [elements]).trigger('refresh.owl.carousel');
                        }
                    } else {
                        \$('.packages-section').hide();
                        if (itl.hs_owl) itl.hs_owl.trigger('remove.owl.carousel', i).trigger('refresh.owl.carousel');
                    }
                }
            }
        }
    }

    {% if slug %}
    cr.img.destinations = {{ destination | json_encode | raw }};
    {% endif %}


    \$('#prev').click(function () {
        corrosalmove(0);
    })
    \$('#next').click(function () {
        corrosalmove(2);
    })

    function corrosalmove(i) {
        img = cr.img[cr.cl];
        if (i == 0) {
            cr.cs = (\$('#carrosalwrapper .item').eq(0).attr('id') * 1) - 1;
            if (cr.cs < 0) {
                cr.cs = img.length - 1;
            }
            cr.setdata(1, cr.cs);
            \$('#carrosalwrapper #carouselround').append(\$('#carrosalwrapper .item').eq(0));
            
        }
        if (i == 2) {
            cr.cs = (\$('#carrosalwrapper .item').eq(2).attr('id') * 1) + 1;
            if (cr.cs > img.length - 1) {
                cr.cs = 0;
            }
            cr.setdata(1, cr.cs);
            \$('#carrosalwrapper #carouselround').prepend(\$('#carrosalwrapper .item').eq(3));

        }
        cr.set();
    }


    \$(document).ready(function () {
        cr.int();
        
        setTimeout(function () {
            cr.set();
        }, 300);
    })
    \$(window).resize(function () {
        cr.set();
    });

</script>

<style>
    #carrosalwrapper #carouselround {
        position: relative;
        height: 500px;
        width: 100%;
        overflow: hidden;
    }

    #carrosalwrapper .item {
        opacity: 0;
        width: 600px;
        height: 400px;
        position: absolute;
        transition-duration: .5s;
        transition-timing-function: ease-out;
        transform: translate(0, 0);
        background: center;
        background-size: cover;
        border-radius: 0;
    }

    #carrosalwrapper .item .title {
        opacity: 0;
        background: rgba(0, 0, 0, .3);
        height: 100%;
        text-transform: uppercase;
        cursor: pointer;
    }

    #carrosalwrapper .item:nth-child(1) {
        z-index: 1;
    }

    #carrosalwrapper .item:nth-child(2) {
        z-index: 0;
        opacity: 0
    }

    #carrosalwrapper .item:nth-child(3) {
        z-index: 3;
    }

    #carrosalwrapper .item:nth-child(4) {
        z-index: 4;
    }

    #carrosalwrapper .item:nth-child(4) .title {
        opacity: 1;
    }
</style>


<section class=\"other-experiences\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\" mt-5 mb-1\" id=\"experiences\">
                    <div class=\"main_title_2 \">
                        <h2>Other EXPERIENCES </h2>
                        <span><em></em></span>
                    </div>
                    <div class=\"experienc-box\">
                        {% for other_des in other_destinations %}

                        {% if(start == 1 ) %}
                        <div class=\"experience-item\">
                            <div class=\"experienc-set active current\">
                                {% endif %}

                                {% if(start == 1 ) %}
                                <div class=\"experienc-left\">
                                    <div class=\"experienc-figer\">
                                        <div class=\"img\" style=\"background-image:url({{other_des.thumbnail.path}})\">
                                        </div>
                                        <div class=\"title\">
                                            <a href=\"{{url('/')}}experiences/{{other_des.slug}}\">
                                                <h3>{{other_des.title}}<em></em></h3>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                {% endif %}

                                {% if(start == 2 ) %}
                                <div class=\"experienc-right\">
                                    <div class=\"experienc-figer\">
                                        <div class=\"img\" style=\"background-image:url({{other_des.thumbnail.path}})\">
                                        </div>
                                        <div class=\"title\">
                                            <a href=\"{{url('/')}}experiences/{{other_des.slug}}\">
                                                <h3>{{other_des.title}}<em></em></h3>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {% endif %}

                            {% if(start == 1 ) %}
                            <div class=\"morelessbar morebar\">
                                <div class=\"expcorner leftcorner\"></div>
                                <a class=\"addexp\" onclick=\"expslide(1);\">
                                    <img src=\"/themes/SAN/assets/images/add.svg\"
                                        class=\"img-fluid\" alt=\"\">
                                    <img src=\"/themes/SAN/assets/images/minus.svg\"
                                        class=\"img-fluid more-exp\" alt=\"\">
                                </a>
                                <div class=\"expcorner rightcorner\"></div>
                            </div>
                            {% endif %}

                            {% if(start == 3 ) %}
                            <div class=\"experienc-set toggle-exp\">
                                <div class=\"experienc-left\">
                                    <div class=\"experienc-figer\">
                                        <div class=\"img\" style=\"background-image:url({{other_des.thumbnail.path}})\">
                                        </div>
                                        <div class=\"title\">
                                            <a href=\"{{url('/')}}experiences/{{other_des.slug}}\">
                                                <h3>{{other_des.title}}<em></em></h3>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                {% endif %}

                                {% if(start == 4 ) %}
                                <div class=\"experienc-right\">
                                    <div class=\"experienc-figer\">
                                        <div class=\"img\" style=\"background-image:url({{other_des.thumbnail.path}})\">
                                        </div>
                                        <div class=\"title\">
                                            <a href=\"{{url('/')}}experiences/{{other_des.slug}}\">
                                                <h3>{{other_des.title}}<em></em></h3>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {% endif %}


                            {% if(start == 4 ) %}
                        </div>
                        {% endif %}


                        {% set start = start + 1 %}
                        {% if(start > 4 ) %}
                        {% set start = 1 %}
                        {% endif %}

                        {% endfor %}

                        <!--   <div class=\"experienc-set \">
                     </div> -->



                    </div>
                    <div class=\"other-exp-descr pb-5 text-center\">
                    </div>
                    <script>
                        function expslide(type, ele) {
                            jQuery('.morebar').toggleClass('clicked');
                            jQuery('.experienc-set.toggle-exp').toggleClass('current active');
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"other-experiences\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"other-exp-descr pb-5 text-center\">
                        <p>{{builderDetails.record.content_2}}</p>
                    </div>
            </div>
        </div>
    </div>
</section>

<!-- POPUP -->
<div class=\"modal fade\" id=\"video_pop\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
    aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
                <!-- 16:9 aspect ratio -->
                <div class=\"embed-responsive embed-responsive-16by9\">
                    {{cdestinations_List[0].iframe | raw}}
                </div>
            </div>
        </div>
    </div>
</div>

<script type=\"text/javascript\">
    
    \$('.experienc-box').owlCarousel({
        loop: false,
        margin: 10,
        dots: false,
        nav: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
            1000: {
                items: 1,
                nav: true,
                loop: false
            }
        }
    });

    jQuery(document).ready(function( \$ ) {
        \$('.banner-iframe iframe')[0].contentWindow.postMessage('{\"event\":\"command\",\"func\":\"playVideo\",\"args\":\"\"}', '*');
        \$(' iframe').trigger(\"click\");
    });

    \$(document).ready(function(){
\t\t\$(\"#hcountrylist\").val(\"any\").change();
\t});

    \$(document).ready(function(){
        \$(\".addexp\").click(function(){
            event.preventDefault(); // Prevent the default anchor behavior
            \$('.owl-prev').toggleClass('top_add');
            \$('.owl-next').toggleClass('top_add');
        });
    });
</script>", "/Applications/MAMP/htdocs/itl/themes/SAN/pages/experiences.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 5, "set" => 6, "for" => 7, "partial" => 115);
        static $filters = array("escape" => 1, "slice" => 25, "theme" => 125, "raw" => 317, "json_encode" => 317);
        static $functions = array("url" => 176);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for', 'partial'],
                ['escape', 'slice', 'theme', 'raw', 'json_encode'],
                ['url']
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
