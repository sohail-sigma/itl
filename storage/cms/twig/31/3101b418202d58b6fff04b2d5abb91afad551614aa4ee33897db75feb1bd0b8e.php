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

/* /Applications/MAMP/htdocs/itl/themes/SAN/pages/home.htm */
class __TwigTemplate_403fa7b92b90aa0baad44802321bbb865d94b72b76061f4f2513eee11ed863a8 extends \Twig\Template
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
        echo "<style>
@media (min-width:991px){
    
.icon-text-wrapper {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  width:100%;
}

.icon-flight::before {
    content: \"\";
    width: 20px;
    height: 20px;
    background: url(/themes/SAN/assets/img/B1_icon.png);
    display: block;
    position: relative;
    background-size: 100%;
    background-repeat: no-repeat;
    background-position: center;
}

.icon-hotel::before {
    content: \"\";
    width: 20px;
    height: 20px;
    background: url(/themes/SAN/assets/img/B2_icon.png);
    display: block;
    position: relative;
    background-size: 100%;
    background-repeat: no-repeat;
    background-position: center;
}

.icon-package::before {
    content: \"\";
    width: 20px;
    height: 20px;
    background: url(/themes/SAN/assets/img/B3_icon.png);
    display: block;
    position: relative;
    background-size: 100%;
    background-repeat: no-repeat;
    background-position: center;
}
 .icon-flight, .icon-hotel, .icon-package{
    border-right: 1px solid #777676;
    padding : 10px;
}

    }

</style>

";
        // line 55
        $context["destinations"] = twig_get_attribute($this->env, $this->source, ($context["destinationsList"] ?? null), "records", [], "any", false, false, true, 55);
        // line 56
        echo "
";
        // line 57
        $context["countries"] = twig_get_attribute($this->env, $this->source, ($context["countryList"] ?? null), "records", [], "any", false, false, true, 57);
        // line 58
        $context["services"] = twig_get_attribute($this->env, $this->source, ($context["serviceList"] ?? null), "records", [], "any", false, false, true, 58);
        // line 59
        echo "
";
        // line 60
        $context["homeslider"] = twig_get_attribute($this->env, $this->source, ($context["homeSlider"] ?? null), "records", [], "any", false, false, true, 60);
        // line 61
        echo "<!-- My Home Slider -->

<input type=\"hidden\" name=\"holidayimg\" id=\"holidayimg\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderFormimages"] ?? null), "record", [], "any", false, false, true, 63), "holiday_img", [], "any", false, false, true, 63), "path", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
        echo "\">
<input type=\"hidden\" name=\"flightimg\" id=\"flightimg\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderFormimages"] ?? null), "record", [], "any", false, false, true, 64), "flight_img", [], "any", false, false, true, 64), "path", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
        echo "\">
<input type=\"hidden\" name=\"hotelimmg\" id=\"hotelimmg\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderFormimages"] ?? null), "record", [], "any", false, false, true, 65), "hotel_img", [], "any", false, false, true, 65), "path", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
        echo "\">
<input type=\"hidden\" name=\"holidaycotent\" id=\"holidaycotent\" value='";
        // line 66
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderFormimages"] ?? null), "record", [], "any", false, false, true, 66), "content_1", [], "any", false, false, true, 66), 66, $this->source);
        echo "'>
<input type=\"hidden\" name=\"flightcotent\" id=\"flightcotent\" value='";
        // line 67
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderFormimages"] ?? null), "record", [], "any", false, false, true, 67), "content_2", [], "any", false, false, true, 67), 67, $this->source);
        echo "'>
<input type=\"hidden\" name=\"hotelcotent\" id=\"hotelcotent\" value='";
        // line 68
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderFormimages"] ?? null), "record", [], "any", false, false, true, 68), "content_3", [], "any", false, false, true, 68), 68, $this->source);
        echo "'>

<input type=\"hidden\" name=\"holidaylink\" id=\"holidaylink\" value='";
        // line 70
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderFormimages"] ?? null), "record", [], "any", false, false, true, 70), "content_4", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
        echo "'>
<input type=\"hidden\" name=\"flightlink\" id=\"flightlink\" value='";
        // line 71
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderFormimages"] ?? null), "record", [], "any", false, false, true, 71), "content_5", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
        echo "'>
<input type=\"hidden\" name=\"hotellink\" id=\"hotellink\" value='";
        // line 72
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderFormimages"] ?? null), "record", [], "any", false, false, true, 72), "content_6", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
        echo "'>

<a href=\"";
        // line 74
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderFormimages"] ?? null), "record", [], "any", false, false, true, 74), "content_4", [], "any", false, false, true, 74), 74, $this->source);
        echo "\" class=\"home-banner-link\">
<div class=\"banner-filter-wrap\" id=\"home-bg-images\"
   style=\"background-image: url(";
        // line 76
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderFormimages"] ?? null), "record", [], "any", false, false, true, 76), "flight_img", [], "any", false, false, true, 76), "path", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
        echo ");\">
   <a href=\"";
        // line 77
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderFormimages"] ?? null), "record", [], "any", false, false, true, 77), "content_4", [], "any", false, false, true, 77), 77, $this->source);
        echo "\" class=\"home-banner-link\">
      <div id=\"tabedcontent\">";
        // line 78
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderFormimages"] ?? null), "record", [], "any", false, false, true, 78), "content_1", [], "any", false, false, true, 78), 78, $this->source);
        echo "</div>
   </a>
   
</div>


   <div data-aos=\"fade-up\" data-aos-duration=\"2000\">";
        // line 84
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 84), "content_1", [], "any", false, false, true, 84), 84, $this->source);
        echo "</div>
   <div class=\"inner-form\">
   ";
        // line 86
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/searchform.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 87
        echo "   </div>

   <div class=\"bg_color_1 d-none\" data-aos=\"fade-up\" data-aos-duration=\"2000\">
      <div class=\"container \">
         <div class=\"row continentsMain no-gutters\">
            <div class=\"continentsTitle\">
               <h2>FIND YOUR BEST HOLIDAY</h2>
            </div>
            <div class=\"row w-100\">
               <div class=\"clearfix\"></div>
               ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["destinations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 98
            echo "               <div class=\"col-md-4 col-lg-3\">
                  <a href=\"";
            // line 99
            if (twig_get_attribute($this->env, $this->source, ($context["destinationList"] ?? null), "detailsPage", [], "any", false, false, true, 99)) {
                echo " ";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["destinationList"] ?? null), "detailsPage", [], "any", false, false, true, 99), 99, $this->source), [twig_get_attribute($this->env, $this->source, ($context["destinationList"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 99) => twig_get_attribute($this->env, $this->source, $context["record"], twig_get_attribute($this->env, $this->source, ($context["destinationList"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 99), [], "any", false, false, true, 99)]);
                echo " ";
            }
            echo "\"
                     class=\"continents draw\">
                     <h4>";
            // line 101
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
            echo "</h4>
                  </a>
               </div>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "            </div>
            <!-- /row -->
         </div>
      </div>
      <!-- /container -->
   </div>

   <!-- /bg_color_1 -->
   <div class=\"bg_color_1 container\" data-aos=\"fade-up\" data-aos-duration=\"2000\">
      <div class=\"main_title_2\">
         <div class=\"mainSub d-none\">";
        // line 115
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 115), "content_2", [], "any", false, false, true, 115), 115, $this->source);
        echo "</div>
         <img class=\"lifetime d-none\" src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 116), "slogan", [], "any", false, false, true, 116), "path", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
        echo "\"
            alt=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 117), "slogan", [], "any", false, false, true, 117), "title", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
        echo "\" width=\"220\">
         <h2>POPULAR EXPERIENCES</h2>
         <span><em></em></span>
      </div>
      <div class=\"mainslide\">
         <div id=\"reccomended\" class=\"owl-carousel owl-theme\">
            ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["destinationsList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 124
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["record"], "is_featured", [], "any", false, false, true, 124) == 1)) {
                // line 125
                echo "            <div class=\"item\" id=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
                echo "\" data-desc=\"";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "content", [], "any", false, false, true, 125), 125, $this->source);
                echo "\">
               <div class=\"item-base\">
                  <figure style=\"background-image:url(";
                // line 127
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "image", [], "any", false, false, true, 127), "path", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
                echo ")\"></figure>
                  <div class=\"title\">
                     <img class=\"location\" src=\"";
                // line 129
                echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/images/location.png"]);
                echo "\">
                     ";
                // line 130
                if (twig_get_attribute($this->env, $this->source, $context["record"], "home_slider_title", [], "any", false, false, true, 130)) {
                    // line 131
                    echo "                     <small>";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "home_slider_title", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
                    echo "</small>
                     ";
                } else {
                    // line 133
                    echo "                     <small>";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
                    echo "</small>
                     ";
                }
                // line 135
                echo "                     <strong><em></em></strong>
                  </div>
                  <a href=\"";
                // line 137
                echo url("/");
                echo "experiences/";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
                echo "\">Read
                     more</a>
               </div>
            </div>
            ";
            }
            // line 142
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "         </div>
         <div class=\"d-none d-md-block owl-nav\">
            <div class=\"hs_owl-prev\" style=\"left:-5px;\" onclick=\"itl.r_owl.trigger('prev.owl.carousel');\"><img
                  src=\"";
        // line 146
        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/images/prev.svg"]);
        echo "\"></div>
            <div class=\"hs_owl-next\" style=\"right:-5px;\" onclick=\"itl.r_owl.trigger('next.owl.carousel');\"><img
                  src=\"";
        // line 148
        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/images/next.svg"]);
        echo "\"></div>
         </div>
      </div>
      <!-- /carousel -->
      <div class=\"container mt-3\" data-aos=\"fade-up\" data-aos-duration=\"2000\">
         <div class=\"home-popular-desc\">
            <p class=\"reccomended-description\"></p>
         </div>
      </div>
      <!-- ";
        // line 157
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 157), "content_2", [], "any", false, false, true, 157), 157, $this->source);
        echo " -->
      <!-- /container -->
      
      


      
      

      <section class=\"home-services\" data-aos=\"fade-up\" data-aos-duration=\"2000\">
         <div class=\"main_title_2 mt-5 mb-3\">
            <h2>OUR SERVICES</h2>
            <span><em></em></span>
         </div>
         <div class=\"ml-md-3 mr-md-3 our_ser_pos\">
            <div id=\"homeservice\" class=\"owl-carousel center owl-theme\">
               ";
        // line 173
        $context["servicecount"] = twig_round((twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["services"] ?? null), 173, $this->source)) / 2), 1, "ceil");
        // line 174
        echo "               ";
        $context["j"] = 0;
        // line 175
        echo "               ";
        $context["i"] = 0;
        // line 176
        echo "               ";
        $context["precondition"] = (($context["i"] ?? null) < ($context["servicecount"] ?? null));
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["services"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            if (($context["precondition"] ?? null)) {
                echo " ";
                if ((twig_get_attribute($this->env, $this->source, (($__internal_compile_0 =                 // line 177
($context["services"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["j"] ?? null)] ?? null) : null), "title", [], "any", false, false, true, 177) != "")) {
                    echo " <div class=\"item\">

                  ";
                    // line 179
                    if ((($__internal_compile_1 = ($context["services"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["j"] ?? null)] ?? null) : null)) {
                        // line 180
                        echo "                  ";
                        $context["service"] = (($__internal_compile_2 = ($context["services"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[($context["j"] ?? null)] ?? null) : null);
                        // line 181
                        echo "                  <div class=\"col-xl-12 col-lg-12 col-md-12 nopadding\">
                     <a href=\"";
                        // line 182
                        echo url("/");
                        echo "services#";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "slug", [], "any", false, false, true, 182), 182, $this->source), "html", null, true);
                        echo "\" class=\"d-flex grid_item\">
                        <div class=\"w-100\">
                           <figure>
                              <div class=\"score arrowright1\"></div>
                              <div class=\"info\">
                                 <h3>";
                        // line 187
                        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "title", [], "any", false, false, true, 187), 187, $this->source), [" " => "<br>"]);
                        echo "</h3>
                              </div>
                           </figure>
                        </div>
                        <!-- /grid_item -->
                        <div class=\"corporateBG w-100 \">
                           <figure>
                              <img src=\"";
                        // line 194
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "icon", [], "any", false, false, true, 194), "path", [], "any", false, false, true, 194), 194, $this->source), "html", null, true);
                        echo "\" class=\"img-fluid\" alt=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "icon", [], "any", false, false, true, 194), "title", [], "any", false, false, true, 194), 194, $this->source), "html", null, true);
                        echo "\">
                           </figure>
                        </div>
                     </a>
                  </div>
                  ";
                        // line 199
                        $context["j"] = (($context["j"] ?? null) + 1);
                        // line 200
                        echo "                  ";
                    }
                    // line 201
                    echo "                  ";
                    if ((($__internal_compile_3 = ($context["services"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[($context["j"] ?? null)] ?? null) : null)) {
                        // line 202
                        echo "                  ";
                        $context["service"] = (($__internal_compile_4 = ($context["services"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[($context["j"] ?? null)] ?? null) : null);
                        // line 203
                        echo "                  <div class=\"col-xl-12 col-lg-12 col-md-12 nopadding\">
                     <a href=\"";
                        // line 204
                        echo url("/");
                        echo "services#";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "slug", [], "any", false, false, true, 204), 204, $this->source), "html", null, true);
                        echo "\" class=\"d-flex grid_item\">
                        <div class=\" w-100\">
                           <figure>
                              <div class=\"score arrowright2\"></div>
                              <div class=\"info corporateBG\">
                                 <h3>";
                        // line 209
                        echo twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "title", [], "any", false, false, true, 209), 209, $this->source), [" " => "<br>"]);
                        echo "</h3>
                              </div>
                           </figure>
                        </div>
                        <!-- /grid_item -->
                        <div class=\"iconsBG w-100 \">
                           <figure>
                              <img src=\"";
                        // line 216
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "icon", [], "any", false, false, true, 216), "path", [], "any", false, false, true, 216), 216, $this->source), "html", null, true);
                        echo "\" class=\"img-fluid\" alt=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["service"] ?? null), "icon", [], "any", false, false, true, 216), "title", [], "any", false, false, true, 216), 216, $this->source), "html", null, true);
                        echo "\">
                           </figure>
                        </div>
                     </a>
                  </div>
                  ";
                        // line 221
                        $context["j"] = (($context["j"] ?? null) + 1);
                        // line 222
                        echo "                  ";
                    }
                    // line 223
                    echo "            </div>
            ";
                }
                // line 225
                echo "            <!-- /item -->
            ";
                // line 226
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 227
                echo "            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 228
        echo "         </div>
         <div class=\"owl-nav\">
            <div class=\"hs_owl-prev\" onclick=\"itl.hs_owl.trigger('prev.owl.carousel');\"><img
                  src=\"";
        // line 231
        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/images/prev.svg"]);
        echo "\"></div>
            <div class=\"hs_owl-next\" onclick=\"itl.hs_owl.trigger('next.owl.carousel');\"><img
                  src=\"";
        // line 233
        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/images/next.svg"]);
        echo "\"></div>
         </div>
   </div>
   ";
        // line 236
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 236), "content_3", [], "any", false, false, true, 236), 236, $this->source);
        echo "
   </section>
   <section class=\"home-services\" data-aos=\"fade-up\" data-aos-duration=\"2000\">
  <div class=\"main_title_2 mt-5 mb-3\">
    <h2>Smarter Visa Support, Seamless Travel Ahead</h2>
     <span><em></em></span>
     <br>
    
    <p style=\"font-family: 'UniSansLight'; color: #102838; font-size: 20px;\" >Tired of confusing visa processes? With ITL World’s Global Visa Assistance, your application just got quicker, easier, and smarter. Our visa experts guide you from start to finish - from form-filling to submission - all with personalized, at-home support. We even save your details to pre-fill future applications.</p>
  </div>
   <div class=\"text-center mb-3\">
    <p class=\"mt-2 text-muted\" style=\"font-size: 14px;\">✔️ Accurate ✔️ Hassle-free✔️ Tailored to your travel needs</p>
 </div>
  <div class=\"text-center mb-3\">
    <a href=\"https://applyvisa.itlworld.com/home\" target=\"_blank\" class=\"btn btn-primary\" style=\" background-color: #da4e41; border-color: #da4e41; padding: 10px 25px; font-weight: 600;\">
      Get Your Visa Now
    </a>
  </div>
</section>
   </div>

   \t<script>
   \t        \$(\"#pills-holiday-tab\").click(function () {
   \t            \$('#home-bg-images').css({ 'background-image': 'url(' + \$(\"#holidayimg\").val() + ')' });
   \t            \$('#tabedcontent').html(\$(\"#holidaycotent\").val());
   \t            \$(\".home-banner-link\").prop(\"href\", \$(\"#holidaylink\").val());
   \t        });
   \t        \$(\"#pills-flight-tab\").click(function () {
   \t            \$('#home-bg-images').css({ 'background-image': 'url(' + \$(\"#flightimg\").val() + ')' });
   \t            \$('#tabedcontent').html(\$(\"#flightcotent\").val());
   \t            \$(\".home-banner-link\").prop(\"href\", \$(\"#flightlink\").val());
   \t        });
   \t        \$(\"#pills-hotel-tab\").click(function () {
   \t            \$('#home-bg-images').css({ 'background-image': 'url(' + \$(\"#hotelimmg\").val() + ')' });
   \t            \$('#tabedcontent').html(\$(\"#hotelcotent\").val());
   \t            \$(\".home-banner-link\").prop(\"href\", \$(\"#hotellink\").val());
   \t        });
   \t        
   \t        
   \t       
   \t
   \t        
   \t   </script>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/itl/themes/SAN/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  489 => 236,  483 => 233,  478 => 231,  473 => 228,  466 => 227,  464 => 226,  461 => 225,  457 => 223,  454 => 222,  452 => 221,  442 => 216,  432 => 209,  422 => 204,  419 => 203,  416 => 202,  413 => 201,  410 => 200,  408 => 199,  398 => 194,  388 => 187,  378 => 182,  375 => 181,  372 => 180,  370 => 179,  365 => 177,  356 => 176,  353 => 175,  350 => 174,  348 => 173,  329 => 157,  317 => 148,  312 => 146,  307 => 143,  301 => 142,  291 => 137,  287 => 135,  281 => 133,  275 => 131,  273 => 130,  269 => 129,  264 => 127,  256 => 125,  253 => 124,  249 => 123,  240 => 117,  236 => 116,  232 => 115,  220 => 105,  210 => 101,  201 => 99,  198 => 98,  194 => 97,  182 => 87,  178 => 86,  173 => 84,  164 => 78,  160 => 77,  156 => 76,  151 => 74,  146 => 72,  142 => 71,  138 => 70,  133 => 68,  129 => 67,  125 => 66,  121 => 65,  117 => 64,  113 => 63,  109 => 61,  107 => 60,  104 => 59,  102 => 58,  100 => 57,  97 => 56,  95 => 55,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
@media (min-width:991px){
    
.icon-text-wrapper {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  width:100%;
}

.icon-flight::before {
    content: \"\";
    width: 20px;
    height: 20px;
    background: url(/themes/SAN/assets/img/B1_icon.png);
    display: block;
    position: relative;
    background-size: 100%;
    background-repeat: no-repeat;
    background-position: center;
}

.icon-hotel::before {
    content: \"\";
    width: 20px;
    height: 20px;
    background: url(/themes/SAN/assets/img/B2_icon.png);
    display: block;
    position: relative;
    background-size: 100%;
    background-repeat: no-repeat;
    background-position: center;
}

.icon-package::before {
    content: \"\";
    width: 20px;
    height: 20px;
    background: url(/themes/SAN/assets/img/B3_icon.png);
    display: block;
    position: relative;
    background-size: 100%;
    background-repeat: no-repeat;
    background-position: center;
}
 .icon-flight, .icon-hotel, .icon-package{
    border-right: 1px solid #777676;
    padding : 10px;
}

    }

</style>

{% set destinations = destinationsList.records %}

{% set countries = countryList.records %}
{% set services = serviceList.records %}

{% set homeslider = homeSlider.records %}
<!-- My Home Slider -->

<input type=\"hidden\" name=\"holidayimg\" id=\"holidayimg\" value=\"{{builderFormimages.record.holiday_img.path}}\">
<input type=\"hidden\" name=\"flightimg\" id=\"flightimg\" value=\"{{builderFormimages.record.flight_img.path}}\">
<input type=\"hidden\" name=\"hotelimmg\" id=\"hotelimmg\" value=\"{{builderFormimages.record.hotel_img.path}}\">
<input type=\"hidden\" name=\"holidaycotent\" id=\"holidaycotent\" value='{{builderFormimages.record.content_1|raw}}'>
<input type=\"hidden\" name=\"flightcotent\" id=\"flightcotent\" value='{{builderFormimages.record.content_2|raw}}'>
<input type=\"hidden\" name=\"hotelcotent\" id=\"hotelcotent\" value='{{builderFormimages.record.content_3|raw}}'>

<input type=\"hidden\" name=\"holidaylink\" id=\"holidaylink\" value='{{builderFormimages.record.content_4}}'>
<input type=\"hidden\" name=\"flightlink\" id=\"flightlink\" value='{{builderFormimages.record.content_5}}'>
<input type=\"hidden\" name=\"hotellink\" id=\"hotellink\" value='{{builderFormimages.record.content_6}}'>

<a href=\"{{builderFormimages.record.content_4|raw}}\" class=\"home-banner-link\">
<div class=\"banner-filter-wrap\" id=\"home-bg-images\"
   style=\"background-image: url({{builderFormimages.record.flight_img.path}});\">
   <a href=\"{{builderFormimages.record.content_4|raw}}\" class=\"home-banner-link\">
      <div id=\"tabedcontent\">{{builderFormimages.record.content_1|raw}}</div>
   </a>
   
</div>


   <div data-aos=\"fade-up\" data-aos-duration=\"2000\">{{builderDetails.record.content_1|raw }}</div>
   <div class=\"inner-form\">
   {% partial 'site/searchform.htm' %}
   </div>

   <div class=\"bg_color_1 d-none\" data-aos=\"fade-up\" data-aos-duration=\"2000\">
      <div class=\"container \">
         <div class=\"row continentsMain no-gutters\">
            <div class=\"continentsTitle\">
               <h2>FIND YOUR BEST HOLIDAY</h2>
            </div>
            <div class=\"row w-100\">
               <div class=\"clearfix\"></div>
               {% for record in destinations %}
               <div class=\"col-md-4 col-lg-3\">
                  <a href=\"{% if destinationList.detailsPage %} {{ destinationList.detailsPage|page({ (destinationList.detailsUrlParameter): attribute(record, destinationList.detailsKeyColumn) }) }} {% endif %}\"
                     class=\"continents draw\">
                     <h4>{{record.title}}</h4>
                  </a>
               </div>
               {% endfor %}
            </div>
            <!-- /row -->
         </div>
      </div>
      <!-- /container -->
   </div>

   <!-- /bg_color_1 -->
   <div class=\"bg_color_1 container\" data-aos=\"fade-up\" data-aos-duration=\"2000\">
      <div class=\"main_title_2\">
         <div class=\"mainSub d-none\">{{builderDetails.record.content_2|raw }}</div>
         <img class=\"lifetime d-none\" src=\"{{builderDetails.record.slogan.path}}\"
            alt=\"{{builderDetails.record.slogan.title}}\" width=\"220\">
         <h2>POPULAR EXPERIENCES</h2>
         <span><em></em></span>
      </div>
      <div class=\"mainslide\">
         <div id=\"reccomended\" class=\"owl-carousel owl-theme\">
            {% for record in destinationsList %}
            {% if record.is_featured == 1 %}
            <div class=\"item\" id=\"{{record.id}}\" data-desc=\"{{record.content |raw}}\">
               <div class=\"item-base\">
                  <figure style=\"background-image:url({{record.image.path}})\"></figure>
                  <div class=\"title\">
                     <img class=\"location\" src=\"{{ 'assets/images/location.png'|theme }}\">
                     {% if(record.home_slider_title) %}
                     <small>{{record.home_slider_title}}</small>
                     {% else %}
                     <small>{{record.title}}</small>
                     {% endif %}
                     <strong><em></em></strong>
                  </div>
                  <a href=\"{{url('/')}}experiences/{{record.slug}}\">Read
                     more</a>
               </div>
            </div>
            {% endif %}
            {% endfor %}
         </div>
         <div class=\"d-none d-md-block owl-nav\">
            <div class=\"hs_owl-prev\" style=\"left:-5px;\" onclick=\"itl.r_owl.trigger('prev.owl.carousel');\"><img
                  src=\"{{ 'assets/images/prev.svg'|theme }}\"></div>
            <div class=\"hs_owl-next\" style=\"right:-5px;\" onclick=\"itl.r_owl.trigger('next.owl.carousel');\"><img
                  src=\"{{ 'assets/images/next.svg'|theme }}\"></div>
         </div>
      </div>
      <!-- /carousel -->
      <div class=\"container mt-3\" data-aos=\"fade-up\" data-aos-duration=\"2000\">
         <div class=\"home-popular-desc\">
            <p class=\"reccomended-description\"></p>
         </div>
      </div>
      <!-- {{builderDetails.record.content_2|raw }} -->
      <!-- /container -->
      
      


      
      

      <section class=\"home-services\" data-aos=\"fade-up\" data-aos-duration=\"2000\">
         <div class=\"main_title_2 mt-5 mb-3\">
            <h2>OUR SERVICES</h2>
            <span><em></em></span>
         </div>
         <div class=\"ml-md-3 mr-md-3 our_ser_pos\">
            <div id=\"homeservice\" class=\"owl-carousel center owl-theme\">
               {% set servicecount=(services|length/2)|round(1, 'ceil') %}
               {% set j=0 %}
               {% set i=0 %}
               {% set precondition = i < servicecount %} {% for record in services if precondition %} {% if
                  services[j].title !=\"\" %} <div class=\"item\">

                  {% if services[j] %}
                  {% set service=services[j] %}
                  <div class=\"col-xl-12 col-lg-12 col-md-12 nopadding\">
                     <a href=\"{{url('/')}}services#{{service.slug}}\" class=\"d-flex grid_item\">
                        <div class=\"w-100\">
                           <figure>
                              <div class=\"score arrowright1\"></div>
                              <div class=\"info\">
                                 <h3>{{service.title |replace({' ':'<br>'}) |raw}}</h3>
                              </div>
                           </figure>
                        </div>
                        <!-- /grid_item -->
                        <div class=\"corporateBG w-100 \">
                           <figure>
                              <img src=\"{{service.icon.path}}\" class=\"img-fluid\" alt=\"{{service.icon.title}}\">
                           </figure>
                        </div>
                     </a>
                  </div>
                  {% set j=j+1 %}
                  {% endif %}
                  {% if services[j] %}
                  {% set service=services[j] %}
                  <div class=\"col-xl-12 col-lg-12 col-md-12 nopadding\">
                     <a href=\"{{url('/')}}services#{{service.slug}}\" class=\"d-flex grid_item\">
                        <div class=\" w-100\">
                           <figure>
                              <div class=\"score arrowright2\"></div>
                              <div class=\"info corporateBG\">
                                 <h3>{{service.title |replace({' ':'<br>'}) |raw}}</h3>
                              </div>
                           </figure>
                        </div>
                        <!-- /grid_item -->
                        <div class=\"iconsBG w-100 \">
                           <figure>
                              <img src=\"{{service.icon.path}}\" class=\"img-fluid\" alt=\"{{service.icon.title}}\">
                           </figure>
                        </div>
                     </a>
                  </div>
                  {% set j=j+1 %}
                  {% endif %}
            </div>
            {% endif %}
            <!-- /item -->
            {% set i=i+1 %}
            {% endfor %}
         </div>
         <div class=\"owl-nav\">
            <div class=\"hs_owl-prev\" onclick=\"itl.hs_owl.trigger('prev.owl.carousel');\"><img
                  src=\"{{ 'assets/images/prev.svg'|theme }}\"></div>
            <div class=\"hs_owl-next\" onclick=\"itl.hs_owl.trigger('next.owl.carousel');\"><img
                  src=\"{{ 'assets/images/next.svg'|theme }}\"></div>
         </div>
   </div>
   {{builderDetails.record.content_3|raw }}
   </section>
   <section class=\"home-services\" data-aos=\"fade-up\" data-aos-duration=\"2000\">
  <div class=\"main_title_2 mt-5 mb-3\">
    <h2>Smarter Visa Support, Seamless Travel Ahead</h2>
     <span><em></em></span>
     <br>
    
    <p style=\"font-family: 'UniSansLight'; color: #102838; font-size: 20px;\" >Tired of confusing visa processes? With ITL World’s Global Visa Assistance, your application just got quicker, easier, and smarter. Our visa experts guide you from start to finish - from form-filling to submission - all with personalized, at-home support. We even save your details to pre-fill future applications.</p>
  </div>
   <div class=\"text-center mb-3\">
    <p class=\"mt-2 text-muted\" style=\"font-size: 14px;\">✔️ Accurate ✔️ Hassle-free✔️ Tailored to your travel needs</p>
 </div>
  <div class=\"text-center mb-3\">
    <a href=\"https://applyvisa.itlworld.com/home\" target=\"_blank\" class=\"btn btn-primary\" style=\" background-color: #da4e41; border-color: #da4e41; padding: 10px 25px; font-weight: 600;\">
      Get Your Visa Now
    </a>
  </div>
</section>
   </div>

   \t<script>
   \t        \$(\"#pills-holiday-tab\").click(function () {
   \t            \$('#home-bg-images').css({ 'background-image': 'url(' + \$(\"#holidayimg\").val() + ')' });
   \t            \$('#tabedcontent').html(\$(\"#holidaycotent\").val());
   \t            \$(\".home-banner-link\").prop(\"href\", \$(\"#holidaylink\").val());
   \t        });
   \t        \$(\"#pills-flight-tab\").click(function () {
   \t            \$('#home-bg-images').css({ 'background-image': 'url(' + \$(\"#flightimg\").val() + ')' });
   \t            \$('#tabedcontent').html(\$(\"#flightcotent\").val());
   \t            \$(\".home-banner-link\").prop(\"href\", \$(\"#flightlink\").val());
   \t        });
   \t        \$(\"#pills-hotel-tab\").click(function () {
   \t            \$('#home-bg-images').css({ 'background-image': 'url(' + \$(\"#hotelimmg\").val() + ')' });
   \t            \$('#tabedcontent').html(\$(\"#hotelcotent\").val());
   \t            \$(\".home-banner-link\").prop(\"href\", \$(\"#hotellink\").val());
   \t        });
   \t        
   \t        
   \t       
   \t
   \t        
   \t   </script>", "/Applications/MAMP/htdocs/itl/themes/SAN/pages/home.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 55, "partial" => 86, "for" => 97, "if" => 99);
        static $filters = array("escape" => 63, "raw" => 66, "page" => 99, "theme" => 129, "round" => 173, "length" => 173, "replace" => 187);
        static $functions = array("url" => 137);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'partial', 'for', 'if'],
                ['escape', 'raw', 'page', 'theme', 'round', 'length', 'replace'],
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
