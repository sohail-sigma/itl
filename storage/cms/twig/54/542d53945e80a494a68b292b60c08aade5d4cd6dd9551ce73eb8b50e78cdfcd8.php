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

/* /Applications/MAMP/htdocs/itl/themes/SAN/partials/site/footer.htm */
class __TwigTemplate_c88580ac69d5d3f7f6d8f74c85f45cca0bd79178bf9290049275c377428e7d48 extends \Twig\Template
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
        echo "<!-- FOOTER -->
<style>
    .usiful-links ul {
        display: flex;
        gap: 41px;
    }
</style>
<footer>
    <div class=\"container margin_60_35\">
        <div class=\"row\">
            <div class=\"col-md-4 p-r-5\">
                <div class=\" d-md-block\">
                    <h5>RECENT UPDATES</h5>
                    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allPosts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post1"]) {
            // line 15
            echo "                    <div class=\"blog-footer-single-item\">
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "url", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "/detail/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post1"], "slug", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "\">
                                    <img class=\"img-fluid footer-blog-img\"
                                        src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post1"], "post_thumnail", [], "any", false, false, true, 20), "getThumb", [0 => 150, 1 => 200, 2 => ["mode" => "crop"]], "method", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "\">
                                </a>
                            </div>
                            <div class=\"col-8\">
                                <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "url", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "/detail/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post1"], "slug", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "\">
                                    <h5 class=\"footer-blog-heading mb-0\">";
            // line 25
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post1"], "title", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "</h5>
                                </a>
                                <p class=\"footer-blog-desc\">";
            // line 27
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_striptags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post1"], "content_html", [], "any", false, false, true, 27), 27, $this->source)), 0, 100), "html", null, true);
            echo "...</p>
                                ";
            // line 28
            $context["dateTime"] = twig_date_converter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post1"], "published_at", [], "any", false, false, true, 28), 28, $this->source));
            // line 29
            echo "                                <span class=\"footer-blog-date\"> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["dateTime"] ?? null), 29, $this->source), "d/m/y"), "html", null, true);
            echo "</span>
                            </div>
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                </div>
            </div>
            <div class=\"col-md-4 ml-lg-auto d-md-block\">
                <!-- <div id=\"newsletter\">
                    <h6>SUBSCRIBE TO HEAR FROM US</h6>
                    <div id=\"message-newsletter\"></div>
                    ";
        // line 40
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/newsletterform.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 41
        echo "                </div> -->
            </div>
            <div class=\"col-md-4 text-center text-md-left\">
                <h5>Useful links</h5>
                <div class=\"footer-menu\">
                    ";
        // line 46
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("externalmenu"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 47
        echo "                </div>
                <div class=\"follow_us text-center text-md-left\">
              
                  <!--   <ul>
                      ";
        // line 51
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contactDetails"] ?? null), "record", [], "any", false, false, true, 51), "content_1", [], "any", false, false, true, 51)) {
            echo "<li><a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contactDetails"] ?? null), "record", [], "any", false, false, true, 51), "content_1", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a></li>";
        }
        // line 52
        echo "                      ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contactDetails"] ?? null), "record", [], "any", false, false, true, 52), "content_2", [], "any", false, false, true, 52)) {
            echo "<li><a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contactDetails"] ?? null), "record", [], "any", false, false, true, 52), "content_2", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a></li>";
        }
        // line 53
        echo "                      ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contactDetails"] ?? null), "record", [], "any", false, false, true, 53), "content_3", [], "any", false, false, true, 53)) {
            echo "<li><a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contactDetails"] ?? null), "record", [], "any", false, false, true, 53), "content_3", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-instagram\"></i></a></li>";
        }
        // line 54
        echo "                      ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contactDetails"] ?? null), "record", [], "any", false, false, true, 54), "content_4", [], "any", false, false, true, 54)) {
            echo "<li><a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contactDetails"] ?? null), "record", [], "any", false, false, true, 54), "content_4", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a></li>";
        }
        // line 55
        echo "                      ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contactDetails"] ?? null), "record", [], "any", false, false, true, 55), "content_5", [], "any", false, false, true, 55)) {
            echo "<li><a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contactDetails"] ?? null), "record", [], "any", false, false, true, 55), "content_5", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-snapchat\"></i></a></li>";
        }
        // line 56
        echo "                      ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contactDetails"] ?? null), "record", [], "any", false, false, true, 56), "content_6", [], "any", false, false, true, 56)) {
            echo "<li><a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contactDetails"] ?? null), "record", [], "any", false, false, true, 56), "content_6", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-youtube-play\"></i></a></li>";
        }
        // line 57
        echo "                      ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contactDetails"] ?? null), "record", [], "any", false, false, true, 57), "content_7", [], "any", false, false, true, 57)) {
            echo "<li><a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contactDetails"] ?? null), "record", [], "any", false, false, true, 57), "content_7", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
            echo "\" target=\"_blank\" class=\"f-icons\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\" style=\"width: 18px;\">
                                  <path d=\"M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z\" />
                              </svg></a></li>";
        }
        // line 60
        echo "                      ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contactDetails"] ?? null), "record", [], "any", false, false, true, 60), "content_8", [], "any", false, false, true, 60)) {
            echo "<li><a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contactDetails"] ?? null), "record", [], "any", false, false, true, 60), "content_8", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-pinterest\"></i></a></li>";
        }
        // line 61
        echo "                      ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contactDetails"] ?? null), "record", [], "any", false, false, true, 61), "content_9", [], "any", false, false, true, 61)) {
            echo "<li><a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contactDetails"] ?? null), "record", [], "any", false, false, true, 61), "content_9", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-reddit\"></i></a></li>";
        }
        // line 62
        echo "                  </ul> -->
                  <ul>
                         ";
        // line 64
        if (twig_get_attribute($this->env, $this->source, ($context["contactDetails"] ?? null), "content_1", [], "any", false, false, true, 64)) {
            echo "<li><a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["contactDetails"] ?? null), "content_1", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a></li>";
        }
        // line 65
        echo "                         <!-- ";
        if (twig_get_attribute($this->env, $this->source, ($context["contactDetails"] ?? null), "content_2", [], "any", false, false, true, 65)) {
            echo "<li><a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["contactDetails"] ?? null), "content_2", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a></li>";
        }
        echo " -->
                         ";
        // line 66
        if (twig_get_attribute($this->env, $this->source, ($context["contactDetails"] ?? null), "content_2", [], "any", false, false, true, 66)) {
            // line 67
            echo "                            <li>
                                <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["contactDetails"] ?? null), "content_2", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
            echo "\" target=\"_blank\" class=\"f-icons\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\" style=\"width: 18px;\">
                                        <path d=\"M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.1L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z\"/>
                                    </svg>
                                </a>
                            </li>
                            ";
        }
        // line 75
        echo "                         ";
        if (twig_get_attribute($this->env, $this->source, ($context["contactDetails"] ?? null), "content_3", [], "any", false, false, true, 75)) {
            echo "<li><a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["contactDetails"] ?? null), "content_3", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-instagram\"></i></a></li>";
        }
        // line 76
        echo "                         ";
        if (twig_get_attribute($this->env, $this->source, ($context["contactDetails"] ?? null), "content_4", [], "any", false, false, true, 76)) {
            echo "<li><a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["contactDetails"] ?? null), "content_4", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a></li>";
        }
        // line 77
        echo "                         ";
        if (twig_get_attribute($this->env, $this->source, ($context["contactDetails"] ?? null), "content_5", [], "any", false, false, true, 77)) {
            echo "<li><a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["contactDetails"] ?? null), "content_5", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-snapchat\"></i></a></li>";
        }
        // line 78
        echo "                         ";
        if (twig_get_attribute($this->env, $this->source, ($context["contactDetails"] ?? null), "content_6", [], "any", false, false, true, 78)) {
            echo "<li><a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["contactDetails"] ?? null), "content_6", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-youtube-play\"></i></a></li>";
        }
        // line 79
        echo "                         ";
        if (twig_get_attribute($this->env, $this->source, ($context["contactDetails"] ?? null), "content_7", [], "any", false, false, true, 79)) {
            echo "<li><a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["contactDetails"] ?? null), "content_7", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            echo "\" target=\"_blank\" class=\"f-icons\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\" style=\"width: 18px;\">
                                     <path d=\"M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z\" />
                                 </svg></a></li>";
        }
        // line 82
        echo "                         ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contactDetails"] ?? null), "record", [], "any", false, false, true, 82), "content_8", [], "any", false, false, true, 82)) {
            echo "<li><a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contactDetails"] ?? null), "record", [], "any", false, false, true, 82), "content_8", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-pinterest\"></i></a></li>";
        }
        // line 83
        echo "                         ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contactDetails"] ?? null), "record", [], "any", false, false, true, 83), "content_9", [], "any", false, false, true, 83)) {
            echo "<li><a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contactDetails"] ?? null), "record", [], "any", false, false, true, 83), "content_9", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"fa fa-reddit\"></i></a></li>";
        }
        // line 84
        echo "                     </ul>
                </div>
            </div>
        </div>

    </div>

    <div class=\"footer-bottom\">
        <div class=\"container\">
            <!--/row-->
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <P class=\"m-0 text-left\">Copyright ";
        // line 96
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All Rights Reserved</P>
                    <div class=\"usiful-links\">
                        ";
        // line 98
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("footertermsmenu"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 99
        echo "                    </div>
                </div>
                <div class=\"col-lg-8\">
                    <div class=\"footer-bottom-menu text-right\">
                        ";
        // line 103
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("footerbottommenu"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 104
        echo "                    </div>
                    <!-- <ul id=\"additional_links\">
                        <li class=\"right\"><a href=\"";
        // line 106
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">HOME</a></li>
                        <li class=\"right\"><a href=\"";
        // line 107
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">ABOUT US</a></li>
                        <li class=\"right\"><a href=\"";
        // line 108
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">CONTACT US</a></li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>

    <span class=\"upbtn\"><i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i></span>
</footer>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.5/js/lightbox.min.js\" integrity=\"sha512-KbRFbjA5bwNan6DvPl1ODUolvTTZ/vckssnFhka5cG80JVa5zSlRPCr055xSgU/q6oMIGhZWLhcbgIC0fyw3RQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
<script>
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    })
</script>
<script type=\"text/javascript\">
    jQuery(document).ready(function() {
        var date = new Date().toISOString().slice(0, 10);
        \$('input[type=\"date\"]').attr('min', date);


        \$('.menu .has-child a').click(function() {
            \$('#burger').trigger('click');
        });
        setTimeout(
            function() {
                var totalItems = jQuery('.carousel-item').length;
                if (totalItems > 1) {
                    jQuery('#carouselExampleIndicators').addClass('show_arrows');
                }
            }, 1000);

    });

      \$(document).ready(function () {
        if (\$(\".only_desktop #carouselExampleIndicators .carousel-item\").length === 1) {
            \$(\".only_desktop #carouselExampleIndicators .carousel-control-prev, #carouselExampleIndicators .carousel-control-next\").hide();
        }
        if (\$(\".only_mob #carouselExampleIndicators .carousel-item\").length === 1) {
            \$(\".only_mob #carouselExampleIndicators .carousel-control-prev, #carouselExampleIndicators .carousel-control-next\").hide();
        }
    });

   // button script
   \t        
    \$(document).ready(function () {
   \t  const items = [
   \t    { text: \"Book Flights\", iconClass: \"icon-flight\" },
   \t    { text: \"Book Hotels\", iconClass: \"icon-hotel\" },
   \t    { text: \"Book Packages\", iconClass: \"icon-package\" }
   \t  ];
   \t  
   \t  let index = 0;
   \t
   \t  // Inject span wrapper inside the anchor if not already done
   \t  const \$btn = \$('.booking-btn-menu a');
   \t  if (\$btn.find('.icon-text-wrapper').length === 0) {
   \t    \$btn.html('<span class=\"icon-text-wrapper\"><i class=\"icon-flight\"></i><span class=\"text\">Book Flights</span></span>');
   \t  }
   \t
   \t  setInterval(function () {
   \t    const item = items[index];
   \t    \$btn.find(\"i\").attr(\"class\", item.iconClass);
   \t    \$btn.find(\".text\").text(item.text);
   \t    index = (index + 1) % items.length;
   \t  }, 3000);
   \t});
  
  
</script>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/itl/themes/SAN/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 108,  325 => 107,  321 => 106,  317 => 104,  313 => 103,  307 => 99,  303 => 98,  298 => 96,  284 => 84,  277 => 83,  270 => 82,  261 => 79,  254 => 78,  247 => 77,  240 => 76,  233 => 75,  223 => 68,  220 => 67,  218 => 66,  209 => 65,  203 => 64,  199 => 62,  192 => 61,  185 => 60,  176 => 57,  169 => 56,  162 => 55,  155 => 54,  148 => 53,  141 => 52,  135 => 51,  129 => 47,  125 => 46,  118 => 41,  114 => 40,  106 => 34,  94 => 29,  92 => 28,  88 => 27,  83 => 25,  77 => 24,  70 => 20,  63 => 18,  58 => 15,  54 => 14,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- FOOTER -->
<style>
    .usiful-links ul {
        display: flex;
        gap: 41px;
    }
</style>
<footer>
    <div class=\"container margin_60_35\">
        <div class=\"row\">
            <div class=\"col-md-4 p-r-5\">
                <div class=\" d-md-block\">
                    <h5>RECENT UPDATES</h5>
                    {% for post1 in allPosts %}
                    <div class=\"blog-footer-single-item\">
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <a href=\"{{ post.url }}/detail/{{ post1.slug }}\">
                                    <img class=\"img-fluid footer-blog-img\"
                                        src=\"{{post1.post_thumnail.getThumb(150,200,{mode:'crop'}) }}\">
                                </a>
                            </div>
                            <div class=\"col-8\">
                                <a href=\"{{ post.url }}/detail/{{ post1.slug }}\">
                                    <h5 class=\"footer-blog-heading mb-0\">{{post1.title}}</h5>
                                </a>
                                <p class=\"footer-blog-desc\">{{post1.content_html|striptags[:100]}}...</p>
                                {% set dateTime = date(post1.published_at) %}
                                <span class=\"footer-blog-date\"> {{ dateTime | date('d/m/y') }}</span>
                            </div>
                        </div>
                    </div>
                    {% endfor %}
                </div>
            </div>
            <div class=\"col-md-4 ml-lg-auto d-md-block\">
                <!-- <div id=\"newsletter\">
                    <h6>SUBSCRIBE TO HEAR FROM US</h6>
                    <div id=\"message-newsletter\"></div>
                    {% partial 'site/newsletterform.htm' %}
                </div> -->
            </div>
            <div class=\"col-md-4 text-center text-md-left\">
                <h5>Useful links</h5>
                <div class=\"footer-menu\">
                    {% component 'externalmenu' %}
                </div>
                <div class=\"follow_us text-center text-md-left\">
              
                  <!--   <ul>
                      {% if contactDetails.record.content_1 %}<li><a href=\"{{contactDetails.record.content_1}}\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a></li>{% endif %}
                      {% if contactDetails.record.content_2 %}<li><a href=\"{{contactDetails.record.content_2}}\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a></li>{% endif %}
                      {% if contactDetails.record.content_3 %}<li><a href=\"{{contactDetails.record.content_3}}\" target=\"_blank\"><i class=\"fa fa-instagram\"></i></a></li>{% endif %}
                      {% if contactDetails.record.content_4 %}<li><a href=\"{{contactDetails.record.content_4}}\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a></li>{% endif %}
                      {% if contactDetails.record.content_5 %}<li><a href=\"{{contactDetails.record.content_5}}\" target=\"_blank\"><i class=\"fa fa-snapchat\"></i></a></li>{% endif %}
                      {% if contactDetails.record.content_6 %}<li><a href=\"{{contactDetails.record.content_6}}\" target=\"_blank\"><i class=\"fa fa-youtube-play\"></i></a></li>{% endif %}
                      {% if contactDetails.record.content_7 %}<li><a href=\"{{contactDetails.record.content_7}}\" target=\"_blank\" class=\"f-icons\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\" style=\"width: 18px;\">
                                  <path d=\"M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z\" />
                              </svg></a></li>{% endif %}
                      {% if contactDetails.record.content_8 %}<li><a href=\"{{contactDetails.record.content_8}}\" target=\"_blank\"><i class=\"fa fa-pinterest\"></i></a></li>{% endif %}
                      {% if contactDetails.record.content_9 %}<li><a href=\"{{contactDetails.record.content_9}}\" target=\"_blank\"><i class=\"fa fa-reddit\"></i></a></li>{% endif %}
                  </ul> -->
                  <ul>
                         {% if contactDetails.content_1 %}<li><a href=\"{{contactDetails.content_1}}\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a></li>{% endif %}
                         <!-- {% if contactDetails.content_2 %}<li><a href=\"{{contactDetails.content_2}}\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a></li>{% endif %} -->
                         {% if contactDetails.content_2 %}
                            <li>
                                <a href=\"{{contactDetails.content_2}}\" target=\"_blank\" class=\"f-icons\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\" style=\"width: 18px;\">
                                        <path d=\"M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.1L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z\"/>
                                    </svg>
                                </a>
                            </li>
                            {% endif %}
                         {% if contactDetails.content_3 %}<li><a href=\"{{contactDetails.content_3}}\" target=\"_blank\"><i class=\"fa fa-instagram\"></i></a></li>{% endif %}
                         {% if contactDetails.content_4 %}<li><a href=\"{{contactDetails.content_4}}\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a></li>{% endif %}
                         {% if contactDetails.content_5 %}<li><a href=\"{{contactDetails.content_5}}\" target=\"_blank\"><i class=\"fa fa-snapchat\"></i></a></li>{% endif %}
                         {% if contactDetails.content_6 %}<li><a href=\"{{contactDetails.content_6}}\" target=\"_blank\"><i class=\"fa fa-youtube-play\"></i></a></li>{% endif %}
                         {% if contactDetails.content_7 %}<li><a href=\"{{contactDetails.content_7}}\" target=\"_blank\" class=\"f-icons\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\" style=\"width: 18px;\">
                                     <path d=\"M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z\" />
                                 </svg></a></li>{% endif %}
                         {% if contactDetails.record.content_8 %}<li><a href=\"{{contactDetails.record.content_8}}\" target=\"_blank\"><i class=\"fa fa-pinterest\"></i></a></li>{% endif %}
                         {% if contactDetails.record.content_9 %}<li><a href=\"{{contactDetails.record.content_9}}\" target=\"_blank\"><i class=\"fa fa-reddit\"></i></a></li>{% endif %}
                     </ul>
                </div>
            </div>
        </div>

    </div>

    <div class=\"footer-bottom\">
        <div class=\"container\">
            <!--/row-->
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <P class=\"m-0 text-left\">Copyright {{ \"now\" | date(\"Y\") }}. All Rights Reserved</P>
                    <div class=\"usiful-links\">
                        {% component 'footertermsmenu' %}
                    </div>
                </div>
                <div class=\"col-lg-8\">
                    <div class=\"footer-bottom-menu text-right\">
                        {% component 'footerbottommenu' %}
                    </div>
                    <!-- <ul id=\"additional_links\">
                        <li class=\"right\"><a href=\"{{ 'home'|page }}\">HOME</a></li>
                        <li class=\"right\"><a href=\"{{ 'about'|page }}\">ABOUT US</a></li>
                        <li class=\"right\"><a href=\"{{ 'contact'|page }}\">CONTACT US</a></li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>

    <span class=\"upbtn\"><i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i></span>
</footer>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.5/js/lightbox.min.js\" integrity=\"sha512-KbRFbjA5bwNan6DvPl1ODUolvTTZ/vckssnFhka5cG80JVa5zSlRPCr055xSgU/q6oMIGhZWLhcbgIC0fyw3RQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
<script>
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    })
</script>
<script type=\"text/javascript\">
    jQuery(document).ready(function() {
        var date = new Date().toISOString().slice(0, 10);
        \$('input[type=\"date\"]').attr('min', date);


        \$('.menu .has-child a').click(function() {
            \$('#burger').trigger('click');
        });
        setTimeout(
            function() {
                var totalItems = jQuery('.carousel-item').length;
                if (totalItems > 1) {
                    jQuery('#carouselExampleIndicators').addClass('show_arrows');
                }
            }, 1000);

    });

      \$(document).ready(function () {
        if (\$(\".only_desktop #carouselExampleIndicators .carousel-item\").length === 1) {
            \$(\".only_desktop #carouselExampleIndicators .carousel-control-prev, #carouselExampleIndicators .carousel-control-next\").hide();
        }
        if (\$(\".only_mob #carouselExampleIndicators .carousel-item\").length === 1) {
            \$(\".only_mob #carouselExampleIndicators .carousel-control-prev, #carouselExampleIndicators .carousel-control-next\").hide();
        }
    });

   // button script
   \t        
    \$(document).ready(function () {
   \t  const items = [
   \t    { text: \"Book Flights\", iconClass: \"icon-flight\" },
   \t    { text: \"Book Hotels\", iconClass: \"icon-hotel\" },
   \t    { text: \"Book Packages\", iconClass: \"icon-package\" }
   \t  ];
   \t  
   \t  let index = 0;
   \t
   \t  // Inject span wrapper inside the anchor if not already done
   \t  const \$btn = \$('.booking-btn-menu a');
   \t  if (\$btn.find('.icon-text-wrapper').length === 0) {
   \t    \$btn.html('<span class=\"icon-text-wrapper\"><i class=\"icon-flight\"></i><span class=\"text\">Book Flights</span></span>');
   \t  }
   \t
   \t  setInterval(function () {
   \t    const item = items[index];
   \t    \$btn.find(\"i\").attr(\"class\", item.iconClass);
   \t    \$btn.find(\".text\").text(item.text);
   \t    index = (index + 1) % items.length;
   \t  }, 3000);
   \t});
  
  
</script>", "/Applications/MAMP/htdocs/itl/themes/SAN/partials/site/footer.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 14, "set" => 28, "partial" => 40, "component" => 46, "if" => 51);
        static $filters = array("escape" => 18, "slice" => 27, "striptags" => 27, "date" => 29, "page" => 106);
        static $functions = array("date" => 28);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'partial', 'component', 'if'],
                ['escape', 'slice', 'striptags', 'date', 'page'],
                ['date']
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
