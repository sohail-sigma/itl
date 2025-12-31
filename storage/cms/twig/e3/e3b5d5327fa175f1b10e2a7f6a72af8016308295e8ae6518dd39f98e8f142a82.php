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

/* /Applications/MAMP/htdocs/itl/themes/SAN/partials/site/searchform.htm */
class __TwigTemplate_1071da8408abfd83cee4e01150c065c26ae2b5f218a7779d4ad57c40d63fba38 extends \Twig\Template
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
        $context["packages"] = twig_get_attribute($this->env, $this->source, ($context["packagesList"] ?? null), "records", [], "any", false, false, true, 1);
        // line 2
        $context["experience"] = twig_get_attribute($this->env, $this->source, ($context["experienceList"] ?? null), "records", [], "any", false, false, true, 2);
        // line 3
        echo "
";
        // line 4
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework'.($_minify ? '-min' : '').'.js?v=1.1.8"></script>'.PHP_EOL;
        unset($_minify);
        // line 5
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js?v=1.1.8"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js?v=1.1.8"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js?v=1.1.8"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css?v=1.1.8">'.PHP_EOL;
        unset($_minify);
        // line 6
        echo "
<style type=\"text/css\">

\tbutton.reset_country {
\t\tborder: none;
\t\tfont-size: 14px;
\t\tbackground: transparent;
\t\tborder: 1px solid #fff;
\t\tcolor: #fff;
\t\tborder-radius: 4px;
\t\tz-index: 5;
\t\tmargin-top: 15px;
\t\tline-height: 1;
\t   padding: 4px 10px;
\t}

\tbutton.addmore_room {
\t\tposition: absolute;
\t\ttop: 95px;
\t\tborder: none;
\t\tleft: 12%;
\t\tfont-size: 16px;
\t\tbackground: transparent;
\t\tborder: 1px solid #fff;
\t\tcolor: #fff;
\t\tborder-radius: 4px;
\t\tz-index: 5;
\t}

\tbutton.addmore_room {
\t\tposition: absolute;
\t\ttop: 95px;
\t\tborder: none;
\t\tleft: 12%;
\t\tfont-size: 16px;
\t\tbackground: transparent;
\t\tborder: 1px solid #fff;
\t\tcolor: #fff;
\t\tborder-radius: 4px;
\t\tz-index: 5;
\t}
\tdiv#rooms_list {
\t\tz-index: 0 !important;
\t}
\t.dest-list ul li {
\t\tcursor: pointer;
\t}
\t.custom-filters .p-airlines-select .select2-container .select2-selection {
\t\tbackground: transparent;
\t\tcolor: #fff;
\t\tborder: 1px solid #fff;
\t\theight: 25px;
\t\twidth: 115px;
\t\tmargin-left: 10px;
\t}
\t.custom-filters .children-wrap {
\t\tmargin: 0;
\t}
\t.custom-filters .children-wrap .select2-container .select2-selection {
\t\twidth: 75px;
\t}
\t.tab-pane .custom-search-input-2 [type='submit'], .tab-pane .custom-search-input-2 select {
\t\tpadding-right: 30px;
\t}
\t.custom-filters .p-airlines-select .select2-container .select2-selection span.select2-selection__rendered {
\t\tcolor: #fff;
\t\tfont-size: 12px;
\t}

\t.custom-filters .p-airlines-select .select2-container .select2-selection span.select2-selection__arrow {
\t\tdisplay: none;
\t}
\t\tinput.searchinputc {
\t\t    box-shadow: 0px 3px 6px #0000006C;
\t\t    border-radius: 6px;
\t\t}
\t\tinput.searchinputc::placeholder { 
\t\t  color: #495057;
\t\t  opacity: 1; 
\t\t}

\t\tinput.searchinputc:-ms-input-placeholder { 
\t\t  color: #495057;
\t\t  opacity: 1; 
\t\t}

\t\tinput.searchinputc::-ms-input-placeholder { 
\t\t  color: #495057;
\t\t  opacity: 1; 
\t\t}
\t\t.custom-filters .select2-container {
\t\t\twidth: 100% !important;
\t\t}
\t.custom-filters .select2-container .select2-selection {
\t    border-radius: 5px !important;
\t    height: 50px;
\t    border: 0px;
\t    outline: none !important;
\t    appearance: none;
\t    -webkit-appearance: none;
\t    font-size: 18px;
\t    line-height: 50px;
\t    display: flex;
\t    align-items: center;
\t}
\t.custom-filters .select2-container .select2-selection span {display: block;align-items: center;}

\t.custom-filters .select2-container--default .select2-selection--single .select2-selection__arrow {
\t    top: 50%;
\t    transform: translateY(-50%);
\t}
\t.select2-container--default .select2-results__option--highlighted.select2-results__option--selectable {
\t    background-color: #da4e41;
\t    color: white;
\t}
\t.select2-results__option--selectable {
\t    cursor: pointer;
\t    font-size: 15px;
\t}

\t.hotel-options {
\t\tflex: 0 0 100%;
\t\tjustify-content: center;
\t}

\t.remove-city-wrap .remove-room {
\t    background: transparent;
\t    box-shadow: none;
\t    border: 0;
\t}

\t.remove-city-wrap {
\t    display: flex;
\t    align-items: flex-end;
\t    padding-bottom: 5px;
\t    position: relative;
\t    right: 10px;
\t    margin-right: -40px !important;
\t}

\t.hotel-options {
\t    position: relative;
\t}

\t.field-error {
\t\tborder: 2px solid red !important;
\t}

\t.daterangepicker.show-calendar .drp-buttons {
\t\tdisplay: none;
\t}

\t.custom-check .checkmark {
\t\tborder-radius: 3px;
\t}
\t.multicity-form-mobile-btn {
\t\tdisplay: none;
\t}
\t
\t@media (max-width: 800px) {
\t\t.modal-body {
\t\t\tpadding-bottom: 0;
\t\t}
\t\t.number input {
\t\t\twidth: 20px;
\t\t}
\t\tlabel.total-passengers+.form-dropdown.show {
\t\t    display: block;
\t\t    background: #102838;
\t\t    z-index: 9;
\t\t    border: 1px solid #fff;
\t\t}
\t\t.filter-modal .custom-search-input-2>.hotel-options:last-child {
/*\t\t    padding-bottom: 50px;*/
\t\t}
\t\t/*.third-order {
\t\t    order: 3;
\t\t}

\t\t.first-order {
\t\t    order: 1;
\t\t}

\t\t.second-order {
\t\t    order: 2;
\t\t}*/
\t\t.multicity-form-desktop-btn {
\t\t\tdisplay: none;
\t\t}
\t\t.multicity-form-mobile-btn {
\t\tdisplay: block;
\t}
\t}
\t@media (max-width: 768px) {
\t\tbutton.addmore_room {
\t\t\tposition: relative;
\t\t\ttop: 0;
\t\t\tborder: none;
\t\t\tleft: 0;
\t\t\tfont-size: 16px;
\t\t\tbackground: transparent;
\t\t\tborder: 1px solid #fff;
\t\t\tcolor: #fff;
\t\t\tborder-radius: 4px;
\t\t\tz-index: 5;
\t\t\tdisplay: flex;
\t\t\talign-items: center;
\t\t\tjustify-content: center;
\t\t\ttext-align: center;
\t\t\tmargin: 0 auto;
\t\t}
\t}
\t.select2-search--dropdown .select2-search__field,
\t.select2-results__option--selectable {
\t    padding: 4px;
\t    width: 100%;
\t    box-sizing: border-box;
\t    font-size: 18px;
\t    color: #444;
\t    line-height: 28px;
\t}
\t.select2-results__option--selectable{
\t\tfont-size: 12px;
\t}
\t.searchinputc{
\t\twidth: 100%;
\t\tborder-radius: 8px !important;
\t\theight: 50px;
\t\tborder: 0px;
\t\toutline: none !important;
\t\tappearance: none;
\t\t-webkit-appearance: none;
\t\tfont-size: 18px;
\t\tline-height: 50px;
\t\tdisplay: flex;
\t\talign-items: center;
\t\tpadding-left: 8px;
\t\tpadding-right: 20px;
\t\tcolor: #444;
\t\tline-height: 28px;
\t}
\tdiv#pills-tabContent .custom-search-input-2 {
\t\tz-index: auto;
\t}
   .dest-list ul li {
      font-size: 16px;
      border-bottom: 1px solid #e6e6e6;
      font-weight: 400;
      line-height: 1.5;
      color: #495057;
   }
   .dest-list ul li:hover {
      background-color: #f2f2f2;
   }

   .dest-list ul li:last-child {
      border-bottom: none;
   }

   .dest-list {
      background-color: #fff;
      border-radius: 6px;
      padding: 10px;
      max-height: 300px;
      overflow: auto;
      overflow-x: hidden;
      position: absolute;
      width: 100%;
      z-index: 9999;
      box-shadow: 0px 3px 6px #0000006C;
   }
   .mobile-btns button {
   \tdisplay: none;
   }
   .h-mobile-btns {
   \tdisplay: none;
   }
   .mobile-btns {
   \tdisplay: none;
   }


   @media (max-width: 800px) {
   \t.mobile-btns {
   \t\tdisplay: block;
   \t}
   \tdiv#pills-hotel {
   \t\tflex-direction: column;
   \t}
   \t.h-mobile-btns {
   \t\tdisplay: block;
   \t}
   \t.h-desktop-btns {
   \t\tdisplay: none;
   \t}
   \t.desktop-btns {
   \t\tdisplay: none !important;
   \t}
   \t.empty-div.mobile-btns-wrap {
   \t\tdisplay: block;
   \t}
   \t.filter-modal .second-order  .flight-nav {
   \t\tmargin-top: -30px;
   \t\tmargin-bottom: 15px;
   \t}
   \t    .filter-modal .modal-content {
        background: #102838;
        height: auto;
        min-height: 100%;
    }
   }
   
  
</style>
<section class=\"home-filter\" data-aos=\"fade-down\" data-aos-easing=\"linear\" data-aos-duration=\"1500\" id=\"holidays\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"custom-filters d-filters\">
\t\t\t\t\t<ul class=\"nav nav-pills\" id=\"pills-tab\" role=\"tablist\" style=\"display:none;\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" id=\"pills-flight-tab\" data-toggle=\"pill\" href=\"#pills-flight\" role=\"tab\"
\t\t\t\t\t\t\t\taria-controls=\"pills-flight\" aria-selected=\"false\"><img
\t\t\t\t\t\t\t\t\tsrc=\"/themes/SAN/assets/img/flight-icon.svg\"> Flight</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"pills-hotel-tab\" data-toggle=\"pill\" href=\"#pills-hotel\" role=\"tab\"
\t\t\t\t\t\t\t\taria-controls=\"pills-hotel\" aria-selected=\"false\"><img
\t\t\t\t\t\t\t\t\tsrc=\"/themes/SAN/assets/img/hotel-icon.svg\"> Hotel</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"pills-holiday-tab\" data-toggle=\"pill\" href=\"#pills-holiday\" role=\"tab\"
\t\t\t\t\t\t\t\taria-controls=\"pills-holiday\" aria-selected=\"true\"><img
\t\t\t\t\t\t\t\t\tsrc=\"/themes/SAN/assets/img/holidays-icon.svg\"> Holidays</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"tab-content\" id=\"pills-tabContent\">
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"pills-flight\" role=\"tabpanel\"
\t\t\t\t\t\t\taria-labelledby=\"pills-flight-tab\">

\t\t\t\t\t\t\t<!-- flight hidden fields -->
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"triptype\" value=\"1\" data-title=\"Trip Type\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"key\" value=\"IST\" data-title=\"Journey Type Key\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"adult\" value=\"1\" data-title=\"Adult Count\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"child\" value=\"1\" data-title=\"Child Count\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"infant\" value=\"1\" data-title=\"Infant Count\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"langCode\" value=\"EN\" data-title=\"Language Code\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"airlines\" value=\"\" data-title=\"Airlines\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"cl1\" value=\"Y\" data-title=\"Cabin Class\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"direct\" value=\"true\" data-title=\"Direct Flights Only\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"refundable\" value=\"false\" data-title=\"Refundable\">
\t\t\t\t\t\t\t<!-- flight hidden fields -->

\t\t\t\t\t\t\t<div class=\"row custom-search-input-2\">
\t\t\t\t\t\t\t\t<div class=\"col-md-2 empty-div\"></div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-8 col-md-12 first-order\">
\t\t\t\t\t\t\t\t\t<div class=\"flight-nav\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills\" id=\"pills-tab-child\" role=\"tablist\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link active\" id=\"pills-roundtrip-tab\" data-toggle=\"pill\"
\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"#pills-roundtrip\" role=\"tab\" aria-controls=\"pills-roundtrip\"
\t\t\t\t\t\t\t\t\t\t\t\t\taria-selected=\"true\" area-value=\"2\">Round Trip</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"pills-oneway-tab\" data-toggle=\"pill\" href=\"#pills-oneway\"
\t\t\t\t\t\t\t\t\t\t\t\t\trole=\"tab\" aria-controls=\"pills-oneway\" aria-selected=\"false\" area-value=\"1\">One
\t\t\t\t\t\t\t\t\t\t\t\t\tWay</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"pills-multicity-tab\" data-toggle=\"pill\"
\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"#pills-multicity\" role=\"tab\" aria-controls=\"pills-multicity\"
\t\t\t\t\t\t\t\t\t\t\t\t\taria-selected=\"false\" area-value=\"3\">Multi City</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"class-of-travel\">
\t\t\t\t\t\t\t\t\t\t<span>Cabin class</span>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group form-select withicon\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"travel-class\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Y\">Economy</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"W\">Premium Economy</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"C\">Business</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"F\">First</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-2 empty-div\"></div>
\t\t\t\t\t\t\t\t<div class=\"col-md-12 third-order\">
\t\t\t\t\t\t\t\t\t<div class=\"tab-content\" id=\"pills-tabContent-child\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade show active\" id=\"pills-roundtrip\" role=\"tabpanel\"
\t\t\t\t\t\t\t\t\t\t\taria-labelledby=\"pills-roundtrip-tab\">

\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"rt-from\" value=\"\" data-title=\"from\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"rt-to\" value=\"\" data-title=\"to\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"rr-dd1\" value=\"\" data-title=\"Departure date 1\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"rr-dd2\" value=\"\" data-title=\"Departure date 2\">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"row custom-search-input-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5 col-sm-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-groups\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"airportsearch\" name=\"rt-dep\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"search-airport-js search-airport searchinputc form-control\" placeholder=\"Origin\" name=\"search-rt-dep\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"allairport-result\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5 col-sm-3 col-lg-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-groups\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"airportsearch\" name=\"rt-arrival\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"search-airport-js search-airport searchinputc form-control\" placeholder=\"Destination\" name=\"search-rt-arrival\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"allairport-result\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10 col-sm-2 col-lg-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group form-select withicon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"daterangeselect\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkin\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"roundtrip-in\" class=\"form-control\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"01/01/2018\" id=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10 col-sm-2 col-lg-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group form-select withicon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"daterangeselect\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkout\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"roundtrip-out\" class=\"form-control\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"01/15/2018\" id=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5 col-sm-2 col-lg-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn_search rounded-0 p-0 roundtrip_submit  desktop-btns\" id=\"roundtrip_submit\"><span
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"icon-search d-lg-none\"></span><span
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"d-lg-block\">SEARCH</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"pills-oneway\" role=\"tabpanel\"
\t\t\t\t\t\t\t\t\t\t\taria-labelledby=\"pills-oneway-tab\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"o-from\" value=\"\" data-title=\"Departure\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"o-to\" value=\"\" data-title=\"Arrival\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row custom-search-input-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-groups\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"airportsearch\" name=\"departure-oneway\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"search-airport-js search-airport searchinputc form-control\" placeholder=\"Origin\" name=\"search-departure-oneway\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"allairport-result\"></div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <input type=\"text\" class=\"search-airport searchinputc\" placeholder=\"Origin\" name=\"search-departure-oneway\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control\" data-request=\"onKeyPressAirport\" data-track-input
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-request-update=\"'feilds/airport': '#allairport-departure-oneway'\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"allairport-departure-oneway\"></div> -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <div class=\"form-group form-select withicon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"departure-oneway\" class=\"form-control itlselect\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"any\">Origin</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 465
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allairports"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["airport"]) {
            // line 466
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["airport"], "airport_code", [], "any", false, false, true, 466), 466, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["airport"], "airport_name", [], "any", false, false, true, 466), 466, $this->source), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["airport"], "airport_code", [], "any", false, false, true, 466), 466, $this->source), "html", null, true);
            echo ") - ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["airport"], "country_name", [], "any", false, false, true, 466), 466, $this->source), "html", null, true);
            echo "</option>
            \t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['airport'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 468
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5 col-sm-4 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-groups\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"airportsearch\" name=\"arrival-oneway\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"search-airport-js search-airport searchinputc form-control\" placeholder=\"Destination\" name=\"search-arrival-oneway\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"allairport-result\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <input type=\"text\" class=\"search-airport searchinputc\" placeholder=\"Destination\" name=\"search-arrival-oneway\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control\" data-request=\"onKeyPressAirport\" data-track-input
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-request-update=\"'feilds/airport': '#allairport-arrival-oneway'\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"allairport-arrival-oneway\"></div> -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <div class=\"form-group form-select withicon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"arrival-oneway\" class=\"form-control itlselect\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"any\">Destination</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 484
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allairports"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["airport"]) {
            // line 485
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["airport"], "airport_code", [], "any", false, false, true, 485), 485, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["airport"], "airport_name", [], "any", false, false, true, 485), 485, $this->source), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["airport"], "airport_code", [], "any", false, false, true, 485), 485, $this->source), "html", null, true);
            echo ") - ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["airport"], "country_name", [], "any", false, false, true, 485), 485, $this->source), "html", null, true);
            echo "</option>
            \t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['airport'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 487
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10 col-sm-2 col-lg-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group form-select withicon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"daterangeselect\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkin\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oneway\" class=\"form-control oneway-d-date\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"01/01/2018\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5 col-sm-2 col-lg-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn_search rounded-0 p-0 oneway_submit desktop-btns\"><span
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"icon-search d-lg-none\"></span><span
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"d-lg-block\">SEARCH</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"pills-multicity\" role=\"tabpanel\"
\t\t\t\t\t\t\t\t\t\t\taria-labelledby=\"pills-multicity-tab\">

\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"m-dep1\" value=\"\" data-title=\"Departure\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"m-ret1\" value=\"\" data-title=\"Arrival\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"m-ddt1\" value=\"\" data-title=\"Departure Date\">

\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"m-dep2\" value=\"\" data-title=\"Departure\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"m-ret2\" value=\"\" data-title=\"Arrival\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"m-ddt2\" value=\"\" data-title=\"Departure Date\">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"multicity-form\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row custom-search-input-2 multicity1\" id=\"milticity-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-groups\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"airportsearch\" name=\"mc-dep1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"search-airport-js search-airport searchinputc mcdep1 form-control\" placeholder=\"Origin\" name=\"search-mc-dep1\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"allairport-result\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <input type=\"text\" class=\"search-airport searchinputc mcdep1\" placeholder=\"Origin\" name=\"search-mc-dep1\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control\" data-request=\"onKeyPressAirport\" data-track-input
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-request-update=\"'feilds/airport': '#allairport-mc-dep1'\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"allairport-mc-dep1\"></div> -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <div class=\"form-group form-select withicon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"mc-dep1\" class=\"form-control itlselect mc-select\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"any\">Origin</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 533
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allairports"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["airport"]) {
            // line 534
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["airport"], "airport_code", [], "any", false, false, true, 534), 534, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["airport"], "airport_name", [], "any", false, false, true, 534), 534, $this->source), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["airport"], "airport_code", [], "any", false, false, true, 534), 534, $this->source), "html", null, true);
            echo ") - ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["airport"], "country_name", [], "any", false, false, true, 534), 534, $this->source), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['airport'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 536
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5 col-sm-4 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-groups\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"airportsearch\" name=\"mc-arr1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"search-airport-js search-airport searchinputc mcdest1 form-control\" placeholder=\"Destination\" name=\"search-mc-arr1\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"allairport-result\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <input type=\"text\" class=\"search-airport searchinputc mcdest1\" placeholder=\"Destination\" name=\"search-mc-arr1\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control\" data-request=\"onKeyPressAirport\" data-track-input data-request-update=\"'feilds/airport': '#allairport-mc-arr1'\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"allairport-mc-arr1\"></div> -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <div class=\"form-group form-select withicon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"mc-arr1\" class=\"form-control itlselect mc-select\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"any\">Destination</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 551
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allairports"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["airport"]) {
            // line 552
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["airport"], "airport_code", [], "any", false, false, true, 552), 552, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["airport"], "airport_name", [], "any", false, false, true, 552), 552, $this->source), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["airport"], "airport_code", [], "any", false, false, true, 552), 552, $this->source), "html", null, true);
            echo ") - ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["airport"], "country_name", [], "any", false, false, true, 552), 552, $this->source), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['airport'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 554
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10 col-sm-2 col-lg-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group form-select withicon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"daterangeselect\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkin\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"multicity1\" class=\"form-control\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"01/01/2018\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5 col-sm-2 col-lg-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn_search multicity-search rounded-0 p-0 multicity-form-desktop-btn  desktop-btns\"><span
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"icon-search d-lg-none\"></span><span
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"d-lg-block\">SEARCH</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row custom-search-input-2 single-multicity multicity2\" id=\"milticity-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-groups\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"airportsearch\" name=\"mc-dep2\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"search-airport-js search-airport searchinputc mcdep2 form-control\" placeholder=\"Origin\" name=\"search-mc-dep2\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"allairport-result\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <input type=\"text\" class=\"search-airport searchinputc mcdep2\" placeholder=\"Origin\" name=\"search-mc-dep2\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control\" data-request=\"onKeyPressAirport\" data-track-input data-request-update=\"'feilds/airport': '#allairport-mc-dep2'\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"allairport-mc-dep2\"></div> -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <div class=\"form-group form-select withicon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"mc-dep2\" class=\"form-control itlselect mc-select\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"any\">Origin</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 587
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allairports"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["airport"]) {
            // line 588
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["airport"], "airport_code", [], "any", false, false, true, 588), 588, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["airport"], "airport_name", [], "any", false, false, true, 588), 588, $this->source), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["airport"], "airport_code", [], "any", false, false, true, 588), 588, $this->source), "html", null, true);
            echo ") - ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["airport"], "country_name", [], "any", false, false, true, 588), 588, $this->source), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['airport'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 590
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5 col-sm-4 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-groups\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"airportsearch\" name=\"mc-arr2\" />

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"search-airport-js search-airport searchinputc mcdest2 form-control\" placeholder=\"Destination\" name=\"search-mc-arr2\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"allairport-result\"></div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <input type=\"text\" class=\"search-airport searchinputc mcdest2\" placeholder=\"Destination\" name=\"search-mc-arr2\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control\" data-request=\"onKeyPressAirport\" data-track-input
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-request-update=\"'feilds/airport': '#allairport-mc-arr2'\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"allairport-mc-arr2\"></div> -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <div class=\"form-group form-select withicon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"mc-arr2\" class=\"form-control itlselect mc-select\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"any\">Destination</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 608
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allairports"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["airport"]) {
            // line 609
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["airport"], "airport_code", [], "any", false, false, true, 609), 609, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["airport"], "airport_name", [], "any", false, false, true, 609), 609, $this->source), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["airport"], "airport_code", [], "any", false, false, true, 609), 609, $this->source), "html", null, true);
            echo ") - ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["airport"], "country_name", [], "any", false, false, true, 609), 609, $this->source), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['airport'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 611
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10 col-sm-2 col-lg-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group form-select withicon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"daterangeselect\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkout\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"multicity2\" class=\"form-control\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"01/01/2018\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5 col-sm-2 col-lg-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"multicity-add-remove\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"remove-city\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"/themes/SAN/assets/img/multicity.svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"addmore-city\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"/themes/SAN/assets/img/add-multicity.svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"multicity-form-mobile-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn_search multicity-search rounded-0 p-0  desktop-btns\"><span class=\"icon-search d-lg-none\"></span><span class=\"d-lg-block\">SEARCH</span></button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-2 empty-div\"></div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-8 col-md-12 second-order\">
\t\t\t\t\t\t\t\t\t<div class=\"flight-nav\">
\t\t\t\t\t\t\t\t\t\t<div class=\"class-of-travel\">
\t\t\t\t\t\t\t\t\t\t\t<span>Passengers</span>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group form-select withicon\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"total-passengers\"><span class=\"passengers-count\">1</span>
\t\t\t\t\t\t\t\t\t\t\t\t\tPassenger</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-dropdown t-p-count\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"counter\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Adults</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"number c_adults\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"minus\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" value=\"1\" class=\"adults\" id=\"adults\" autocomplete=\"off\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"plus\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"counter\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Children</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"number c_childs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"minus\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"children\" id=\"children\" value=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tautocomplete=\"off\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"plus\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"counter\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Infants</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"number c_infants\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"minus\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"infants\" id=\"infants\" value=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tautocomplete=\"off\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"plus\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"class-of-travel\">
\t\t\t\t\t\t\t\t\t\t<span>Preffered Airline</span>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group form-select p-airlines-select withicon\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"p-airlines\" class=\"form-control itlselect\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Select Airline</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 685
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["airlines"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["airline"]) {
            // line 686
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["airline"], "airline_code", [], "any", false, false, true, 686), 686, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["airline"], "airline_name", [], "any", false, false, true, 686), 686, $this->source), "html", null, true);
            echo "</option>
            \t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['airline'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 688
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"class-of-travel\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"custom-check direct-flight-check\">Direct Flight
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"checkmark\"></span>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"custom-check refundable-check\">Refundable
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"checkmark\"></span>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-2 empty-div mobile-btns-wrap\">
\t\t\t\t\t\t\t\t\t<div class=\"mobile-btns\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn_search rounded-0 p-0 oneway_submit\"><span
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"icon-search d-lg-none\"></span><span
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"d-lg-block\">SEARCH</span></button>
<button type=\"submit\" class=\"btn_search multicity-search rounded-0 p-0\"><span class=\"icon-search d-lg-none\"></span><span class=\"d-lg-block\">SEARCH</span></button>

<button type=\"submit\" class=\"btn_search rounded-0 p-0 roundtrip_submit\" style=\"display: block;\"><span
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"icon-search d-lg-none\"></span><span
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"d-lg-block\">SEARCH</span></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"pills-hotel\" role=\"tabpanel\" aria-labelledby=\"pills-hotel-tab\">
\t\t\t\t\t\t\t<!-- hotel hidden fields -->
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"h-city-code\" value=\"1\" data-title=\"City Code\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"langCode\" value=\"EN\" data-title=\"Hotel langCode\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"h-rooms-url\" value=\"\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"hh-checkin\" value=\"\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"hh-checkout\" value=\"\">
\t\t\t\t\t\t\t<div class=\"row custom-search-input-2\">
\t\t\t\t\t\t\t\t<div class=\"col-3 col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"form-groups\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"hotel-destination\" name=\"hotel-destination\" />
\t\t\t\t\t\t\t\t\t\t<!-- <input type=\"text\" id=\"search-destination\" placeholder=\"Destination\" name=\"search-destination\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control searchinputc\" data-request=\"onKeyPressCity\" data-track-input
\t\t\t\t\t\t\t\t\t\t\tdata-request-update=\"'feilds/cities': '#allcities'\" autocomplete=\"off\" /> -->

\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"search-destination\" placeholder=\"Destination\" name=\"search-destination\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control searchinputc\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t\t<div id=\"allcities\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-2 col-sm-2 col-lg-2\">
\t\t\t\t\t\t\t\t\t<div class=\"form-groups\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"nationality\" name=\"nationality\" />
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"search-nationality\" placeholder=\"Nationality\" name=\"search-nationality\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control searchinputc\" data-request=\"onKeyPressNationality\" data-track-input
\t\t\t\t\t\t\t\t\t\t\tdata-request-update=\"'feilds/nationality': '#allnationality'\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t\t<div id=\"allnationality\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- <div class=\"form-group form-select withicon\">
\t\t\t\t\t\t\t\t\t\t<select id=\"nationality-list\" name=\"nationality\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"any\">Nationality</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"KW\">Kuwait</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"BH\">Bahrain</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"OM\">Oman</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"QA\">Qatar</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"EG\">Egypt</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"MA\">Morocco</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"NG\">Nigeria</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"SA\">Saudi Arabia</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"TN\">Tunisia</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"AE\">United Arab Emirates</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4 col-sm-4 col-lg-4\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group withicon\">
\t\t\t\t\t\t\t\t\t\t<div class=\"daterangeselect\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkin\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"h-checkin\" class=\"form-control\" value=\"01/01/2018\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"selected-nights\"><strong>1</strong> Nights</span>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkout\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"h-checkout\" class=\"form-control\" value=\"01/15/2018\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-5 col-sm-3 col-lg-3 h-desktop-btns\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn_search rounded-0 p-0 hotel_search\" id=\"hotel_search\"><span
\t\t\t\t\t\t\t\t\t\t\tclass=\"icon-search d-lg-none\"></span><span class=\"d-lg-block\">
\t\t\t\t\t\t\t\t\t\t\tSEARCH</span></button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button class=\"addmore_room\">Add more rooms</button>
\t\t\t\t\t\t\t<div class=\"row custom-search-input-2\" id=\"rooms_list\">
\t\t\t\t\t\t\t\t<div class=\"hotel-options hotel-1\" hotel-id=\"1\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"room_no\" value=\"room1\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"adult_count\" value=\"1\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"child_count\" value=\"1\">
\t\t\t\t\t\t\t\t\t<div class=\"hotel-rooms\">
\t\t\t\t\t\t\t\t\t\tRoom 1
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"h-adults\">
\t\t\t\t\t\t\t\t\t\tAdults (6)
\t\t\t\t\t\t\t\t\t\t<div class=\"number h-counter\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"minus\"></span>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" value=\"1\" class=\"adults\" id=\"adults\" autocomplete='off'>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"plus\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"h-adults childrens\">
\t\t\t\t\t\t\t\t\t\tChild (0-4)
\t\t\t\t\t\t\t\t\t\t<div class=\"number c-counter\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"minus\"></span>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" value=\"0\" class=\"child\" id=\"child\" autocomplete='off'>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"plus\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t<!-- <div class=\"children-wrap\">
\t\t\t\t\t\t\t\t\t\t<div class=\"h-adults childrens\">
\t\t\t\t\t\t\t\t\t\t\tChild 1
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group form-select withicon\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"country\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"any\">Under 1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">6</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"7\">7</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"8\">8</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"9\">9</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"10\">10</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"11\">11</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"h-mobile-btns custom-search-input-2\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn_search rounded-0 p-0 hotel_search\" id=\"hotel_search\"><span
\t\t\t\t\t\t\t\t\t\t\tclass=\"icon-search d-lg-none\"></span><span class=\"d-lg-block\">
\t\t\t\t\t\t\t\t\t\t\tSEARCH</span></button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane fade show active\" id=\"pills-holiday\" role=\"tabpanel\" aria-labelledby=\"pills-holiday-tab\">
\t\t\t\t\t\t\t<form action=\"";
        // line 838
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("search");
        echo "/#searching\" method=\"GET\" >

\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"package_change\" value=\"no\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"experience_change\" value=\"no\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"month_change\" value=\"no\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"package_value\" value=\"any\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"experience_value\" value=\"any\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"month_value\" value=\"any\">

\t\t\t\t\t\t\t\t<div class=\"row custom-search-input-2\">
\t\t\t\t\t\t\t\t\t<div class=\"col-5 col-sm-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-groups form-select withicon\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"package\" class=\"form-control countrylist\" id=\"hcountrylist\" data-request=\"onGetAllExp\" data-request-update=\"'feilds/experiences': '#experience','feilds/months': '#months'\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"any\">Country</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 852
        if (($context["allpackages"] ?? null)) {
            // line 853
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['allpackages'] = ($context["allpackages"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("feilds/packages"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 854
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 855
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, ($context["countryListFinal"] ?? null), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "country", [], "any", false, false, true, 855) <=> twig_get_attribute($this->env, $this->source, ($context["b"] ?? null), "country", [], "any", false, false, true, 855)); }));
            foreach ($context['_seq'] as $context["_key"] => $context["countryname"]) {
                // line 856
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["countryname"], "country", [], "any", false, false, true, 856), 856, $this->source), "html", null, true);
                echo "\" ";
                if ((get("package") == twig_get_attribute($this->env, $this->source, $context["countryname"], "country", [], "any", false, false, true, 856))) {
                    // line 857
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["countryname"], "country", [], "any", false, false, true, 857), 857, $this->source), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['countryname'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 860
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 861
        echo "\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t <div id=\"country-error\" class=\"error-message\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-5 col-sm-3 col-lg-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group form-select withicon\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"experience\" class=\"form-control\" id=\"experience\" data-request=\"onChangeExp\" data-request-update=\"'feilds/packages': '#hcountrylist'\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"any\">Experience</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 869
        if (($context["allexp"] ?? null)) {
            // line 870
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['allexp'] = ($context["allexp"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("feilds/experiences"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 871
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 872
            echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 873
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, ($context["experience"] ?? null), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, ($context["a"] ?? null), "title", [], "any", false, false, true, 873) <=> twig_get_attribute($this->env, $this->source, ($context["b"] ?? null), "title", [], "any", false, false, true, 873)); }));
            foreach ($context['_seq'] as $context["_key"] => $context["single_exp"]) {
                // line 874
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["single_exp"], "id", [], "any", false, false, true, 874), ($context["allowedids"] ?? null))) {
                    // line 875
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["single_exp"], "slug", [], "any", false, false, true, 875), 875, $this->source), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["single_exp"], "id", [], "any", false, false, true, 875), 875, $this->source), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["single_exp"], "title", [], "any", false, false, true, 875), 875, $this->source)), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
                }
                // line 878
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['single_exp'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 880
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 881
        echo "\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"reset_country d-none\" id=\"reset_experience\" data-request=\"onResetExperience\" data-request-update=\"'feilds/experiences': '#experience'\">Reset Experience</button>

\t\t\t\t\t\t\t\t\t\t\t<!-- <i class=\"icon-bicycle\"></i> -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-10 col-sm-3 col-lg-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group form-select withicon\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"month\" class=\"form-control\" id=\"months\" data-request=\"onChangeExp\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-request-update=\"'feilds/packages': '#hcountrylist'\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"any\">Month</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 892
        $context["pmonths"] = [1 => "January", 2 => "February", 3 => "March", 4 => "April", 5 => "May", 6 => "Jun", 7 => "July", 8 => "August", 9 => "September", 10 => "October", 11 => "November", 12 => "December"];
        // line 894
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if (($context["allmonths"] ?? null)) {
            // line 895
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['allmonths'] = ($context["allmonths"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("feilds/months"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 896
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 897
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pmonths"] ?? null));
            foreach ($context['_seq'] as $context["k"] => $context["record"]) {
                // line 898
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<option ";
                if ((get("month") == $context["k"])) {
                    echo "selected=\"selected\" ";
                }
                echo " value=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["record"], 898, $this->source), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 899
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["record"], 899, $this->source), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['record'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 901
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 902
        echo "\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-5 col-sm-3 col-lg-3\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn_search rounded-0 p-0\" ><span
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"icon-search d-lg-none\"></span><span class=\"d-lg-block\">SEARCH</span></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"reset_wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"reset_country\" id=\"reset_country\" data-request=\"onResetContry\" data-request-update=\"'feilds/packages': '#hcountrylist'\">Reset <img src=\"/themes/SAN/assets/images/Refresh.svg\"></button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"custom-filters m-filters\">
\t\t\t\t\t<ul class=\"nav nav-pills\" id=\"pills-tab\" role=\"tablist\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"pills-flight-tab\" data-toggle=\"modal\" data-target=\"#flightModal\"><img
\t\t\t\t\t\t\t\t\tsrc=\"/themes/SAN/assets/img/flight-icon.svg\"> Flight</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"pills-hotel-tab\" data-toggle=\"modal\" data-target=\"#hotelModal\"><img
\t\t\t\t\t\t\t\t\tsrc=\"/themes/SAN/assets/img/hotel-icon.svg\"> Hotel</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"pills-holiday-tab\" data-toggle=\"modal\" data-target=\"#holidayModal\"><img
\t\t\t\t\t\t\t\t\tsrc=\"/themes/SAN/assets/img/holidays-icon.svg\">
\t\t\t\t\t\t\t\tHolidays</a>
\t\t\t\t\t\t</li>


\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- Modal -->
<div class=\"modal filter-modal fade\" id=\"holidayModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
\taria-hidden=\"true\">
\t<div class=\"modal-dialog\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<h3>Holiday</h3>
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"modal-body custom-filters\">
\t\t\t\t<div class=\"\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"modal filter-modal fade\" id=\"flightModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
\taria-hidden=\"true\">
\t<div class=\"modal-dialog\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<h3>Flight</h3>
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"modal-body custom-filters\">
\t\t\t\t<div class=\"\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"modal filter-modal fade\" id=\"hotelModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
\taria-hidden=\"true\">
\t<div class=\"modal-dialog\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<h3>Hotel</h3>
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"modal-body custom-filters\">
\t\t\t\t<div class=\"\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<script>


   \$(document).ready(function(){

\t\tjQuery(document).on('keyup', '#search-destination', function() {
         var keywordFilter = \$(this).val();
\t\t\tvar allairportDiv = \$(this).siblings('#allcities');
\t\t\tif(keywordFilter.length > 2){
\t\t\t\t\$.getJSON(\"/storage/app/media/hotels-api.json\", function(data) {
\t\t\t\t
\t\t\t\t\tdata.sort(function(a, b) {
\t\t\t\t\t\treturn a.cn.localeCompare(b.cn)
\t\t\t\t\t});
\t\t\t\t\tallairportDiv.empty();
\t\t\t\t\tvar airhtml = '<div class=\"dest-list\"><ul style=\"margin: 0;\">';
\t\t\t\t\t\$.each(data, function(key, value) {
\t\t\t\t\t\t// console.log(value.cn.toLowerCase());
\t\t\t\t\t\tif(value.cn != \"\" || value.cn != null){
\t\t\t\t\t\t\tvar inputText   = keywordFilter.toLowerCase();
\t\t\t\t\t\t\tvar cityName     = value.cn.toLowerCase();
\t\t\t\t\t\t\tvar countryName     = value.con.toLowerCase();
\t\t\t\t\t\t\tif(cityName.indexOf(inputText) != -1 || countryName.indexOf(inputText) != -1){
\t\t\t\t\t\t\t\tairhtml += '<li class=\"destination\" data-city_code=\"'+value.cc+'\" >'+value.cn+' ('+value.con+')</li>';
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\tairhtml += '</ul></div>';
\t\t\t\t\tallairportDiv.html(airhtml);
\t\t\t\t});
\t\t\t}else{
\t\t\t\tallairportDiv.html('');
\t\t\t}
      });

\t\tjQuery(document).on('keyup', '.search-airport-js', function() {
         var keywordFilter = \$(this).val();
\t\t\tvar allairportDiv = \$(this).siblings('.allairport-result');
\t\t\tif(keywordFilter.length > 2){
\t\t\t\t\$.getJSON(\"/storage/app/media/airport-api.json\", function(data) {
\t\t\t\t\tdata.sort(function(a, b) {
\t\t\t\t\t\treturn a.an.localeCompare(b.an)
\t\t\t\t\t});
\t\t\t\t\tallairportDiv.empty();
\t\t\t\t\tvar airhtml = '<div class=\"dest-list\"><ul style=\"margin: 0;\">';
\t\t\t\t\t\$.each(data, function(key, value) {
\t\t\t\t\t\tvar inputText   = keywordFilter.toLowerCase();
\t\t\t\t\t\tvar airname     = value.an.toLowerCase();
\t\t\t\t\t\tvar aircode     = value.ac.toLowerCase();
\t\t\t\t\t\tif(airname.indexOf(inputText) != -1 || aircode.indexOf(inputText) != -1){
\t\t\t\t\t\tairhtml += '<li class=\"airport\" data-city_code=\"'+value.ac+'\" >'+value.an+' ('+value.ac+')</li>';
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\tairhtml += '</ul></div>';
\t\t\t\t\tallairportDiv.html(airhtml);
\t\t\t\t});
\t\t\t}else{
\t\t\t\tallairportDiv.html('');
\t\t\t}
      });

\t\t\$(\"body\").on(\"click\", \".airport\", function(){
\t\t\tvar pdiv = \$(this).closest('.form-groups');
\t\t\tconsole.log(pdiv);
\t\t\tpdiv.find('.search-airport').attr(\"placeholder\", \$(this).text());
\t\t\tpdiv.find('.search-airport').val(\$(this).text());
\t\t\tpdiv.find('.airportsearch').val(\$(this).attr(\"data-city_code\"));
\t\t\t\$(this).parent().closest(\".dest-list\").hide();
\t\t});

\t\t\$(\"body\").on(\"click\", \".destination\", function(){
\t\t\t\$(\"#search-destination\").attr(\"placeholder\", \$(this).text());
\t\t\t\$(\"#hotel-destination\").val(\$(this).attr(\"data-city_code\"));
\t\t\t\$(\"#search-destination\").val(\$(this).text());
\t\t\t\$(\".dest-list\").hide();
\t\t});

\t\t\$(\"body\").on(\"click\", \"#milticity-1 .airport\", function(){
\t\t\t\$('#milticity-2 .mcdep2').attr(\"placeholder\", \$(this).text());
\t\t\t\$('#milticity-2 .mcdep2').val(\$(this).text());
\t\t});

\t\t\$(\"body\").on(\"click\", \"#milticity-2 .airport\", function(){
\t\t\t\$('#milticity-3 .mcdep3').attr(\"placeholder\", \$(this).text());
\t\t\t\$('#milticity-3 .mcdep3').val(\$(this).text());
\t\t});
   });







jQuery('#hcountrylist').on('change', function () {
    var countrySelected = jQuery('#hcountrylist').val();

    // Check if the country is selected (not 'any' or empty)
    if (countrySelected === 'any' || countrySelected === '') {
        // Add error class and show error message
        jQuery('#hcountrylist').addClass('field-error');
        jQuery('#country-error').text('');
    } else {
        // Remove error class and clear error message
        jQuery('#hcountrylist').removeClass('field-error');
        jQuery('#country-error').text('');
    }

    // Update hidden input fields only if country is valid
    if (countrySelected !== 'any' && countrySelected !== '') {
        jQuery('input[name=\"package_change\"]').val('yes');
        jQuery('input[name=\"package_value\"]').val(countrySelected);
        jQuery('input[name=\"month_value\"]').val(jQuery('#months').val());
    }
});

// Handle form submission
jQuery('form').on('submit', function (e) {
    var countrySelected = jQuery('#hcountrylist').val();

    // Prevent form submission if country is invalid
    if (countrySelected === 'any' || countrySelected === '') {
        jQuery('#hcountrylist').addClass('field-error');
        jQuery('#country-error').text('');
        e.preventDefault(); // Prevent form submission
    }
});

// Handle reset button click
jQuery('#reset_country').on('click', function () {
\t\tjQuery('input[name=\"experience_change\"]').val('no');
\t\tjQuery('input[name=\"package_change\"]').val('no');
\t\tjQuery('input[name=\"month_change\"]').val('no');
\t\tjQuery('input[name=\"package_value\"]').val('any');
\t\tjQuery('input[name=\"experience_value\"]').val('any');
\t\t\$(\"#reset_experience\").trigger(\"click\");
\t});
\tjQuery('#reset_experience').on('click', function () {
\t\tjQuery('input[name=\"experience_change\"]').val('no');
\t\tjQuery('input[name=\"package_change\"]').val('no');
\t\tjQuery('input[name=\"month_change\"]').val('no');
\t\tjQuery('input[name=\"package_value\"]').val('any');
\t\tjQuery('input[name=\"experience_value\"]').val('any');
\t\tjQuery('#months').val('any');
\t});


\tjQuery(function () {

\t\tjQuery('input[name=\"checkin\"]').daterangepicker({
\t\t\t\"startDate\": moment().add(0, 'day'),
\t\t\t\"endDate\": moment().add(1, 'day'),
\t\t\t\"linkedCalendars\": false,
\t\t\t\"autoUpdateInput\": false,
\t\t\t\"autoApply\": true,
\t\t}, function (start, end, label) {
\t\t\t\$('input[name=\"checkin\"]').val(start.format('MM/DD/YYYY'));
\t\t\t\$('input[name=\"checkout\"]').val(end.format('MM/DD/YYYY'));
\t\t\tconsole.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
\t\t});

\t\tjQuery('input[name=\"roundtrip-in\"]').daterangepicker({
            \"startDate\": moment().add(0, 'day'),
            \"endDate\": moment().add(1, 'day'),
            \"singleDatePicker\": true,
            \"linkedCalendars\": false,
            \"autoUpdateInput\": true,
            \"autoApply\": true,
            \"minDate\": new Date(),
            \"locale\": {
                format: 'DD-MMM-YYYY'
            }
        }, function (start, end, label) {
            var formattedDate = start.format('DD-MMM-YYYY');
            jQuery('input[name=\"roundtrip-in\"]').val(formattedDate);
            console.log('New date selected: ' + formattedDate);
            jQuery('input[name=\"rr-dd1\"]').val(formattedDate);
            
            // Automatically set roundtrip-out date to the same as roundtrip-in
            jQuery('input[name=\"roundtrip-out\"]').daterangepicker({
                \"startDate\": start,
                \"singleDatePicker\": true,
                \"linkedCalendars\": false,
                \"autoUpdateInput\": true,
                \"autoApply\": true,
                \"minDate\": start, // Ensures round-out can't be before round-in
                \"locale\": {
                    format: 'DD-MMM-YYYY'
                }
            }, function (start, end, label) {
                var formattedOutDate = start.format('DD-MMM-YYYY');
                jQuery('input[name=\"roundtrip-out\"]').val(formattedOutDate);
                console.log('New round-out date selected: ' + formattedOutDate);
                jQuery('input[name=\"rr-dd2\"]').val(formattedOutDate);
            });
            
            jQuery('input[name=\"roundtrip-out\"]').val(formattedDate); // Default to same date
            jQuery('input[name=\"rr-dd2\"]').val(formattedDate);
        });
        
        jQuery('input[name=\"roundtrip-out\"]').daterangepicker({
            \"startDate\": moment().add(1, 'day'),
            \"singleDatePicker\": true,
            \"linkedCalendars\": false,
            \"autoUpdateInput\": true,
            \"autoApply\": true,
            \"locale\": {
                format: 'DD-MMM-YYYY'
            }
        }, function (start, end, label) {
            var formattedOutDate = start.format('MM/DD/YYYY');
            jQuery('input[name=\"roundtrip-out\"]').val(formattedOutDate);
            console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
            jQuery('input[name=\"rr-dd2\"]').val(start.format('YYYY-MM-DD'));
        });

\t\tjQuery('input[name=\"oneway\"]').daterangepicker({
            \"startDate\": moment().add(0, 'day'),
            \"singleDatePicker\": true,
            \"autoApply\": true,
            \"minDate\": new Date(),
            \"locale\": {
                format: 'DD-MMM-YYYY'
            }
        }, function (start, end, label) {
            var formattedDate = start.format('DD-MMM-YYYY');
            jQuery('input[name=\"oneway\"]').val(formattedDate);
            console.log('New oneway date selected: ' + formattedDate);
        });
\t\t
\t\t\$(document).ready(function() {
    function initializeDatepicker(inputName, minDateInput, targetInput) {
        var minDate = minDateInput ? \$(minDateInput).val() : moment().add(0, 'day');
        
        jQuery(`input[name=\"\${inputName}\"]`).daterangepicker({
            \"startDate\": minDate,
            \"singleDatePicker\": true,
            \"autoApply\": true,
            \"minDate\": minDate,
            \"locale\": {
                format: 'DD-MMM-YYYY'
            }
        }, function(start, end, label) {
            var formattedDate = start.format('DD-MMM-YYYY');
            jQuery(`input[name=\"\${targetInput}\"]`).val(formattedDate);
        });
        
        // Set initial formatted date
        var initialDate = moment(minDate).format('DD-MMM-YYYY');
        jQuery(`input[name=\"\${targetInput}\"]`).val(initialDate);
    }
    
    initializeDatepicker(\"multicity1\", null, \"m-ddt1\");
    initializeDatepicker(\"multicity2\", \"input[name='multicity1']\", \"m-ddt2\");
    initializeDatepicker(\"multicity3\", \"input[name='multicity2']\", \"m-ddt3\");
    
    \$('body').on('focus', 'input[name=\"multicity1\"]', function() {
        initializeDatepicker(\"multicity1\", null, \"m-ddt1\");
    });
    
    \$('body').on('focus', 'input[name=\"multicity2\"]', function() {
        initializeDatepicker(\"multicity2\", \"input[name='multicity1']\", \"m-ddt2\");
    });
    
    \$('body').on('focus', 'input[name=\"multicity3\"]', function() {
        initializeDatepicker(\"multicity3\", \"input[name='multicity2']\", \"m-ddt3\");
    });
});

\t\t
\t});

\t// jQuery('.h-counter .minus').click(function () {
// jQuery('.h-counter .minus').click(function () {
\tjQuery('body').on('click', '.h-counter .minus', function () {
\t\tvar \$input = jQuery(this).parent().find('input');
\t\tvar count = parseInt(\$input.val()) - 1;
\t\tcount = count < 0 ? 0 : count;
\t\t\$input.val(count);
\t\t\$input.change();
\t\tvar num = parseInt(jQuery('#child').val());
\t\treturn false;
\t});
\tjQuery('body').on('click', '.h-counter .plus', function () {
\t\t// jQuery('.h-counter .plus').click(function () {
\t\tvar \$input = jQuery(this).parent().find('input');
\t\tif(parseInt(\$input.val())>5){
\t\t    return ;
\t\t    }
\t\t\$input.val(parseInt(\$input.val()) + 1);
\t\t\$input.change();
\t\treturn false;
\t});

\tjQuery(document).ready(function () {
    jQuery('#child, #children').val(0);
});

// Function to get total children per room
function getRoomChildCount(\$room) {
    return \$room.find('.c-counter .child').val() ? parseInt(\$room.find('.c-counter .child').val()) : 0;
}

// Handle minus button click
jQuery('body').on('click', '.c-counter .minus', function () {
    var \$input = jQuery(this).parent().find('input');
    var count = parseInt(\$input.val()) - 1;
    count = count < 0 ? 0 : count; // Ensure count doesn't go negative
    \$input.val(count);
    \$input.change();
});

// Handle plus button click (Limit set to 4 per room)
jQuery('body').on('click', '.c-counter .plus', function () {
    var \$input = jQuery(this).parent().find('input');
    var \$room = jQuery(this).closest('.hotel-options'); // Get the parent room
    var roomChildCount = getRoomChildCount(\$room); // Get child count for this room

    if (roomChildCount < 4) { // Apply limit per room (4 children max)
        \$input.val(roomChildCount + 1);
        \$input.change();
    }
});


\tjQuery('.t-p-count .minus').click(function () {

\t\tvar \$input = jQuery(this).parent().find('input');
\t\tvar count = parseInt(\$input.val()) - 1;
\t\tcount = count < 0 ? 0 : count;
\t\t\$input.val(count);
\t\t\$input.change();
\t\tvar num = parseInt(jQuery('#child').val());
\t\tvar pass_count = parseInt(jQuery('#adults').val()) + parseInt(jQuery('#children').val()) + parseInt(jQuery('#infants').val());
\t\tjQuery('.passengers-count').text(pass_count);
\t\treturn false;
\t});

\tjQuery('.t-p-count .plus').click(function () {
\t\tvar \$input = jQuery(this).parent().find('input');
\t\t\$input.val(parseInt(\$input.val()) + 1);
\t\t\$input.change();
\t\tvar pass_count = parseInt(jQuery('#adults').val()) + parseInt(jQuery('#children').val()) + parseInt(jQuery('#infants').val());
\t\tjQuery('.passengers-count').text(pass_count);
\t\treturn false;
\t});

\t

\tif (jQuery(window).width() <= 800) {
\t//\tjQuery(\"#pills-hotel\").appendTo(\"#hotelModal .modal-body\");
\t//\tjQuery(\"#pills-flight\").appendTo(\"#flightModal .modal-body\");
\t//\tjQuery(\"#pills-holiday\").appendTo(\"#holidayModal .modal-body\");
\t}

\tjQuery('#holidayModal, #hotelModal, #flightModal').on('shown.bs.modal', function () {
\t\tjQuery('header.header').addClass('modal-open');
\t});
\tjQuery('#holidayModal, #hotelModal, #flightModal').on('hidden.bs.modal', function () {
\t\tjQuery('header.header').removeClass('modal-open');
\t});

\tjQuery(' a[data-toggle=\"pill\"]').on('shown.bs.tab', function (e) {
\t\tconsole.log(\$(e.target).attr('area-value'));
\t\tvar key = \$(e.target).attr('area-value');
\t\tjQuery('input[name=triptype]').val(key);
\t});

\tjQuery('select[name=\"travel-class\"]').change(function () {
\t\tjQuery('input[name=cl1]').val(jQuery(this).val());
\t\tconsole.log(\$(this).val())
\t});

\tjQuery('select[name=\"p-airlines\"]').change(function () {
\t\tjQuery('input[name=airlines]').val(jQuery(this).val());
\t\tconsole.log(\$(this).val())
\t});

\tjQuery('.direct-flight-check input').change(function () {
\t\tif (\$(this).is(\":checked\")) {
\t\t\tjQuery('input[name=direct]').val('true');
\t\t}
\t\telse {
\t\t\tjQuery('input[name=direct]').val('false');
\t\t}
\t});

\tjQuery('select[name=\"departure-oneway\"]').change(function () {
\t\tvar dep = jQuery(this).val();
\t\tjQuery('input[name=o-from]').val(dep);
\t\tconsole.log(\$(this).val())
\t});

\tjQuery('select[name=\"arrival-oneway\"]').change(function () {
\t\tvar arrival = jQuery(this).val();
\t\tjQuery('input[name=o-to]').val(arrival);
\t\tconsole.log(\$(this).val())
\t});

\tjQuery('select[name=\"rt-dep\"]').change(function () {
\t\tvar dep = jQuery(this).val();
\t\tjQuery('input[name=rt-from]').val(dep);
\t\tconsole.log(\$(this).val())
\t});

\tjQuery('select[name=\"rt-arrival\"]').change(function () {
\t\tvar arrival = jQuery(this).val();
\t\tjQuery('input[name=rt-to]').val(arrival);
\t\tconsole.log(\$(this).val())
\t});

\tjQuery('select[name=\"mc-dep1\"]').change(function () {
\t\tvar arrival = jQuery(this).val();
\t\tjQuery('input[name=m-dep1]').val(arrival);
\t\tconsole.log(\$(this).val())
\t});

\t\$(document).ready(function() {
            var hiddenInput = document.querySelector(\"input[name='mc-arr1']\");
            var depInput = \$(\"input[name='mc-dep2']\");

            // Create a MutationObserver to detect changes to the hidden input's attributes
            var observer = new MutationObserver(function(mutationsList) {
                for (var mutation of mutationsList) {
                    if (mutation.type === 'attributes' && mutation.attributeName === 'value') {
                        // When the value attribute changes, update the other input value
                        var arrival = \$(hiddenInput).val();
                        depInput.val(arrival);
                    }
                }
            });

            // Configure the observer to watch for attribute changes
            observer.observe(hiddenInput, {
                attributes: true
            });

        });
\tjQuery('select[name=\"mc-dep2\"]').change(function () {
\t\tvar arrival = jQuery(this).val();
\t\tjQuery('input[name=m-dep2]').val(arrival);
\t\tconsole.log(\$(this).val())
\t});

\t

\tjQuery('select[name=\"mc-arr1\"]').change(function () {
\t\tvar arrival = jQuery(this).val();
\t\tjQuery('input[name=m-ret1]').val(arrival);
\t\tjQuery(\"select[name=mc-dep2]\").val(arrival).trigger(\"change\");
\t\tconsole.log(\$(this).val())
\t});
\tjQuery('select[name=\"mc-arr2\"]').change(function () {
\t\tvar arrival = jQuery(this).val();
\t\tjQuery('input[name=m-ret2]').val(arrival);
\t\tjQuery(\"select[name=mc-dep3]\").val(arrival).trigger(\"change\");
\t\tconsole.log(\$(this).val())
\t});


    \$(document).ready(function() {
            var hiddenInput = document.querySelector(\"input[name='mc-arr2']\");

            // Create a MutationObserver to detect changes to the hidden input's attributes
            var observer = new MutationObserver(function(mutationsList) {
                for (var mutation of mutationsList) {
                    if (mutation.type === 'attributes' && mutation.attributeName === 'value') {
                    
                        var arrival = \$(hiddenInput).val();
                        var depInput = \$(\"input[name='mc-dep3']\");
                        if (depInput.length) {
                            depInput.val(arrival);
                        }
                    }
                }
            });

            // Configure the observer to watch for attribute changes
            observer.observe(hiddenInput, {
                attributes: true
            });

            // Example function to change the value of the hidden input after 2 seconds
            setTimeout(function() {
                // Simulate changing the value of the hidden input
                \$(hiddenInput).val('newValue').trigger('change');
            }, 2000);
        });


\tjQuery(\".total-passengers\").click(function () {
\t\t
\t});

\tjQuery(function() {
\t  jQuery(\".total-passengers\").on(\"click\", function(e) {
\t    jQuery(this).next().toggleClass('show');
\t    e.stopPropagation()
\t  });
\t  jQuery(document).on(\"click\", function(e) {
\t    if (jQuery(e.target).is(\".total-passengers\") === false) {
\t      jQuery(\".t-p-count\").removeClass(\"show\");
\t    }
\t  });
\t});

\tjQuery(\".oneway_submit\").click(function () {

\t\tvar adults = jQuery('.adults').val();
\t\tvar children = jQuery('.children').val();
\t\tvar infants = jQuery('.infants').val();
\t\tvar cc1 = jQuery('input[name=cl1]').val();
\t\tvar triptype = jQuery('input[name=triptype]').val();
\t\tvar direct = jQuery('input[name=direct]').val();
\t\tvar airlines = jQuery('input[name=airlines]').val();
\t\tvar dep = jQuery('input[name=departure-oneway]').val();
\t\tvar arrival = jQuery('input[name=arrival-oneway]').val();
\t\tvar checkin = jQuery('input[name=\"oneway\"].oneway-d-date').val();
\t\tvar ref = jQuery('input[name=refundable]').val();

\t\tif( jQuery('select[name=\"departure-oneway\"]').val() == 'any' || jQuery('select[name=\"arrival-oneway\"]').val() == 'any' ){
\t\t\tif(jQuery('select[name=\"departure-oneway\"]').val() == 'any') {
\t\t\t\tjQuery('select[name=\"departure-oneway\"]').next('.select2-container').find('.select2-selection').addClass('field-error');
\t\t\t}
\t\t\telse {
\t\t\t\tjQuery('select[name=\"departure-oneway\"]').next('.select2-container').find('.select2-selection').removeClass('field-error');
\t\t\t}

\t\t\tif(jQuery('select[name=\"arrival-oneway\"]').val() == 'any') {
\t\t\t\tjQuery('select[name=\"arrival-oneway\"]').next('.select2-container').find('.select2-selection').addClass('field-error');
\t\t\t}
\t\t\telse {
\t\t\t\tjQuery('select[name=\"arrival-oneway\"]').next('.select2-container').find('.select2-selection').removeClass('field-error');
\t\t\t}
\t\t}
\t\telse {
\t\t\tsetTimeout(function () {

\t\t\t// window.open('https://booking.itlworld.com/Flight/search?dep1=' + dep + '&ret1=' + arrival + '&dtt1=' + checkin + '&cl1=' + cc1 + '&triptype=1&adult=' + adults + '&child=' + children + '&infant=0&direct=' + direct + '&key=ICT&langcode=EN&airlines=' + airlines + '&ref=false');
\t\t\t\twindow.open('https://booking.itlworld.com/Flight/search?dep1=' + dep + '&ret1=' + arrival + '&dtt1=' + checkin + '&cl1=' + cc1 + '&triptype=1&adult=' + adults + '&child=' + children + '&infant=' + infants + '&direct=' + direct + '&baggage=false&key=OW&airlines=' + airlines + '&ref='+ref+'&langcode=EN&curr=AED&ipc=false', '_blank')

\t\t\t}, 500);
\t\t}
\t});

\tjQuery(\".roundtrip_submit\").click(function (e) {
    e.preventDefault(); // Prevent form submission by default

    // Collect form data
    var r_adults = jQuery('.adults').val();
    var r_children = jQuery('.children').val();
    var r_infants = jQuery('.infants').val();
    var r_cc1 = jQuery('input[name=cl1]').val();
    var r_triptype = jQuery('input[name=triptype]').val();
    var r_direct = jQuery('input[name=direct]').val();
    var r_airlines = jQuery('input[name=airlines]').val();
    var r_dep = jQuery('input[name=rt-dep]').val();
    var r_arrival = jQuery('input[name=rt-arrival]').val();
    var r_dep_d_1 = jQuery('.checkin input[name=\"roundtrip-in\"]').val();
    var r_dep_d_2 = jQuery('.checkout input[name=\"roundtrip-out\"]').val();
    var ref = jQuery('input[name=refundable]').val();

    // Validate departure and arrival 'any' condition
    if (jQuery('select[name=\"rt-dep\"]').val() == 'any' || jQuery('select[name=\"rt-arrival\"]').val() == 'any') {
        if (jQuery('select[name=\"rt-dep\"]').val() == 'any') {
            jQuery('select[name=\"rt-dep\"]').next('.select2-container').find('.select2-selection').addClass('field-error');
        } else {
            jQuery('select[name=\"departure-oneway\"]').next('.select2-container').find('.select2-selection').removeClass('field-error');
        }

        if (jQuery('select[name=\"rt-arrival\"]').val() == 'any') {
            jQuery('select[name=\"rt-arrival\"]').next('.select2-container').find('.select2-selection').addClass('field-error');
        } else {
            jQuery('select[name=\"rt-arrival\"]').next('.select2-container').find('.select2-selection').removeClass('field-error');
        }

        return false; // Stop further execution if 'any' is selected
    }

    // Validate destination input field
    var arrivalDestination = jQuery('input[name=search-rt-arrival]').val().trim();
    if (!arrivalDestination) {
        jQuery('input[name=search-rt-arrival]').addClass('field-error');
        return false; // Stop further execution if destination is not entered
    } else {
        jQuery('input[name=search-rt-arrival]').removeClass('field-error');
    }

    // Proceed with redirection if all validation passes
    var finalURL = 'https://booking.itlworld.com/Flight/search?dep1=' + r_dep + '&ret1=' + r_arrival + '&dtt1=' + r_dep_d_1 + '&cl1=' + r_cc1 + '&dep2=' + r_arrival + '&ret2=' + r_dep + '&dtt2=' + r_dep_d_2 + '&cl2=' + r_cc1 + '&triptype=1&adult=' + r_adults + '&child=' + r_children + '&infant=' + r_infants + '&direct=' + r_direct + '&baggage=false&key=IRT&airlines=' + r_airlines + '&ref=' + ref + '&langcode=EN&curr=AED';

    // Redirect after 500ms delay (optional)
    setTimeout(function () {
        window.open(finalURL, '_blank');
    }, 500);
});



\t// jQuery('body').on('click', '.multicity-search', function(){
\tjQuery(document).on('click', '.multicity-search', function() {

\t\tvar m_adults = jQuery('.adults').val();
\t\tvar m_children = jQuery('.children').val();
\t\tvar m_infants = jQuery('.infants').val();
\t\tvar m_cc1 = jQuery('input[name=cl1]').val();
\t\tvar m_triptype = jQuery('input[name=triptype]').val();
\t\tvar m_direct = jQuery('input[name=direct]').val();
\t\tvar m_airlines = jQuery('input[name=airlines]').val();

\t\tvar m_dep1 = jQuery('input[name=mc-dep1]').val();
\t\tvar m_arrival1 = jQuery('input[name=mc-arr1]').val();
\t\tvar m_dep_d_1 = jQuery('input[name=\"multicity1\"]').val();

\t\tvar m_dep2 = jQuery('input[name=mc-dep2]').val();
\t\tvar m_arrival2 = jQuery('input[name=mc-arr2]').val();
\t\tvar m_dep_d_2 = jQuery('input[name=\"multicity2\"]').val();

\t\tvar m_dep3 = jQuery('input[name=mc-dep3]').val();
\t\tvar m_arrival3 = jQuery('input[name=mc-ret3]').val();
\t\tvar m_dep_d_3 = jQuery('input[name=\"mc-ddt3\"]').val();

\t\tvar ref = jQuery('input[name=refundable]').val();

\t\tif ((jQuery('input[name=\"mc-dep3\"]').val() != undefined) && (jQuery('input[name=\"mc-arr3\"]').val() != undefined) && (jQuery('input[name=\"multicity3\"]').val() != undefined)) {
\t\t\tvar mc3 = 'dep3='+ jQuery('input[name=\"mc-dep3\"]').val() +'&ret3='+ jQuery('input[name=\"mc-arr3\"]').val() +'&dtt3='+ jQuery('input[name=\"multicity3\"]').val();
\t\t}
\t\telse {
\t\t\tvar mc3 = \"\";
\t\t}

\t\tconsole.log(\"mc3\",mc3);

\t\tif( jQuery('select.mc-select').val() == 'any' ){
\t\t\tif(jQuery('select.mc-select').val() == 'any') {
\t\t\t\tjQuery('select.mc-select').next('.select2-container').find('.select2-selection').addClass('field-error');
\t\t\t}
\t\t\telse {
\t\t\t\tjQuery('select.mc-select').next('.select2-container').find('.select2-selection').removeClass('field-error');
\t\t\t}

\t\t\t// if(jQuery('select[name=\"mc-dep3\"]').val() == 'any') {
\t\t\t// \tjQuery('select[name=\"mc-dep3\"]').next('.select2-container').find('.select2-selection').addClass('field-error');
\t\t\t// }
\t\t\t// else {
\t\t\t// \tjQuery('select[name=\"mc-dep3\"]').next('.select2-container').find('.select2-selection').removeClass('field-error');
\t\t\t// }

\t\t\t// if(jQuery('select[name=\"mc-arr3\"]').val() == 'any') {
\t\t\t// \tjQuery('select[name=\"mc-arr3\"]').next('.select2-container').find('.select2-selection').addClass('field-error');
\t\t\t// }
\t\t\t// else {
\t\t\t// \tjQuery('select[name=\"mc-arr3\"]').next('.select2-container').find('.select2-selection').removeClass('field-error');
\t\t\t// }
\t\t}
\t\telse {

\t\t\tsetTimeout(function () {

\t\t\t\t// window.open('https://orgone.aosuat.com/flight/result?dep1=' + m_dep1 + '&ret1=' + m_arrival1 + '&dtt1=' + m_dep_d_1 + '&cl1=' + m_cc1 + '&dep2=' + m_dep2 + '&ret2=' + m_arrival2 + '&dtt2=' + m_dep_d_2 + '&cl2=' + m_cc1 + '&dep3=' + m_dep3 + '&ret3=' + m_arrival3 + '&dtt3=' + m_dep_d_3 + '&cl3=' + m_cc1 + '&triptype=' + m_triptype + '&adult=' + m_adults + '&child=' + m_children + '&infant=' + m_infants + '&direct=' + m_direct + '&key=IMC&langcode=EN&airlines=' + m_airlines + '&ref=false&agency=2206081006125414548');

\t\t\t\twindow.open('https://booking.itlworld.com/Flight/search?dep1=' + m_dep1 + '&ret1=' + m_arrival1 + '&dtt1=' + m_dep_d_1 + '&cl1=' + m_cc1 + '&dep2=' + m_dep2 + '&ret2=' + m_arrival2 + '&dtt2=' + m_dep_d_2 + '&cl2=' + m_cc1 + '&'+ mc3 +'&cl3=' + m_cc1 + '&triptype=1&adult=' + m_adults + '&child=' + m_children + '&infant=' + m_infants + '&direct=' + m_direct + '&baggage=false&key=MC&airlines=' + m_airlines + '&ref='+ref+'&langcode=EN&curr=AED', '_blank')

\t\t\t}, 500);
\t\t}
\t});


// hotel jquery

// For the check-in date
// For the check-in date
// For the check-in date
// For the check-in date
jQuery('input[name=\"h-checkin\"]').daterangepicker({
    \"startDate\": moment().add(0, 'day'),
    \"singleDatePicker\": true,
    \"autoUpdateInput\": true,
    \"autoApply\": true,
    \"linkedCalendars\": false,  // Disable linked calendars
    \"minDate\": moment().add(0, 'day'),
    \"locale\": {
        format: 'DD-MMM-YYYY'
    }
}, function (start) {
    var formattedCheckin = start.format('DD-MMM-YYYY');
    jQuery('input[name=\"hh-checkin\"]').val(formattedCheckin);
    
    // Automatically set checkout date to one day ahead of check-in
    var newCheckoutDate = moment(start).add(1, 'day');
    jQuery('input[name=\"h-checkout\"]').daterangepicker({
        \"startDate\": newCheckoutDate,
        \"singleDatePicker\": true,
        \"linkedCalendars\": false,  // Disable linked calendars
        \"autoUpdateInput\": true,
        \"autoApply\": true,
        \"minDate\": newCheckoutDate, // Ensures checkout can't be before check-in
        \"locale\": {
            format: 'DD-MMM-YYYY'
        }
    }, function (checkoutStart) {
        var formattedCheckout = checkoutStart.format('DD-MMM-YYYY');
        jQuery('input[name=\"hh-checkout\"]').val(formattedCheckout);
        
        // Calculate and update nights
        var checkinDate = moment(formattedCheckin, 'DD-MMM-YYYY');
        var checkoutDate = moment(formattedCheckout, 'DD-MMM-YYYY');
        var nights = checkoutDate.diff(checkinDate, 'days');
        
        // Ensure nights cannot be negative
        if (nights < 0) nights = 0;

        jQuery('span.selected-nights strong').text(nights);
    });

    // Default checkout to the new date
    jQuery('input[name=\"h-checkout\"]').val(newCheckoutDate.format('DD-MMM-YYYY'));
    jQuery('input[name=\"hh-checkout\"]').val(newCheckoutDate.format('DD-MMM-YYYY'));
});

// For the checkout date
jQuery('input[name=\"h-checkout\"]').daterangepicker({
    \"startDate\": moment().add(1, 'day'),
    \"singleDatePicker\": true,
    \"linkedCalendars\": false,  // Disable linked calendars
    \"autoUpdateInput\": true,
    \"autoApply\": true,
    \"minDate\": moment().add(1, 'day'),
    \"locale\": {
        format: 'DD-MMM-YYYY'
    }
}, function (start) {
    var formattedCheckout = start.format('DD-MMM-YYYY');
    jQuery('input[name=\"hh-checkout\"]').val(formattedCheckout);

    // Calculate and update nights
    var checkinDate = moment(jQuery('input[name=\"hh-checkin\"]').val(), 'DD-MMM-YYYY');
    var checkoutDate = moment(formattedCheckout, 'DD-MMM-YYYY');
    var nights = checkoutDate.diff(checkinDate, 'days');
    
    // Ensure nights cannot be negative
    if (nights < 0) nights = 0;

    jQuery('span.selected-nights strong').text(nights);
});


// For start date (Only)
jQuery('input[name=\"h-checkin\"]').on('change', function() {
    let checkinDate = moment(jQuery(this).val(), 'DD-MMM-YYYY');
    let checkoutDate = moment(jQuery('input[name=\"h-checkout\"]').val(), 'DD-MMM-YYYY');

    // If checkout date exists, calculate nights
    if (checkoutDate.isValid()) {
        let nights = checkoutDate.diff(checkinDate, 'days');

        // Ensure nights cannot be negative
        if (nights < 0) nights = 0;

        jQuery('span.selected-nights strong').text(nights);
    }
});





\t// jQuery('input[name=\"h-checkout\"]').daterangepicker({
\t// \t\"startDate\": moment().add(1, 'day'),
\t// \t// \"endDate\": moment().add(1, 'day'),
\t// \t\"singleDatePicker\": true,
\t// \t\"linkedCalendars\": false,
\t// \t\"autoUpdateInput\": true,
\t// \t\"autoApply\": true,
\t// }, function (start, end, label) {
\t// \tconsole.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
\t// \tjQuery('input[name=\"h-checkout\"]').val(start.format('DD-MMMM-YYYY'));
\t// \t// jQuery('input[name=\"h-checkout\"]').val(end.format('DD-MMMM-YYYY'));
\t// \t// \$start_date = start;
\t// \t// \$end_date = end;
\t// \t// \$datediff = \$end_date - \$start_date;

\t// \t// \$datediff = Math.round(\$datediff / (1000 * 3600 * 24)) - 1;

\t// \t// jQuery('span.selected-nights strong').text(\$datediff);

\t// \t// console.log(\$datediff);
\t// });

\t// jQuery('input[name=\"h-checkout\"]').daterangepicker({
\t// \t// \"startDate\": moment().add(0, 'day'),
\t// \t\"startDate\": moment().add(1, 'day'),
\t// \t\"linkedCalendars\": false,
\t// \t\"singleDatePicker\": true,
\t// \t\"autoUpdateInput\": false,
\t// \t\"autoApply\": true,
\t// }, function (start, end, label) {

\t// \t// \$('input[name=\"h-checkin\"]').val(start.format('DD-MMMM-YYYY'));
\t// \t\$('input[name=\"h-checkout\"]').val(start.format('DD-MMMM-YYYY'));
\t// \t// \$start_date = start;
\t// \t// \$end_date = end;
\t// \t// \$datediff = \$end_date - \$start_date;

\t// \t// \$datediff = Math.round(\$datediff / (1000 * 3600 * 24)) - 1;

\t// \t// jQuery('span.selected-nights strong').text(\$datediff);

\t// \tconsole.log(\$datediff);
\t// });

\tjQuery('select[name=\"hotel-destination\"]').change(function () {
\t\tvar des = jQuery(this).val();
\t\tjQuery('input[name=h-city-code]').val(des);
\t\tconsole.log(\$(this).val())
\t});
\t(function () {
\t\tvar ii = 2;
\t\tvar jj = 3;
\t\t//jQuery('.addmore_room').click(function () {
\t\t\t// \$('#rooms_list .hotel-options:first-child').clone().attr('hotel-id', ii).appendTo('#rooms_list');
\t\t\t//\$('#rooms_list').append('<div class=\"hotel-options hotel-' + ii + '\" hotel-id=\"' + ii + '\"> <input type=\"hidden\" name=\"room_no\" value=\"room' + ii + '\"> <input type=\"hidden\" name=\"adult_count\" value=\"1\"> <input type=\"hidden\" name=\"child_count\" value=\"1\"> <div class=\"hotel-rooms\"> Room ' + ii + ' </div> <div class=\"h-adults\"> Adults (12+) <div class=\"number h-counter\"> <span class=\"minus\"></span> <input type=\"text\" value=\"1\" class=\"adults\" id=\"adults\" autocomplete=\"off\"> <span class=\"plus\"></span> </div> </div> <div class=\"h-adults childrens\"> Child (0-11) <div class=\"number c-counter\"> <span class=\"minus\"></span> <input type=\"text\" value=\"1\" class=\"child\" id=\"child\" autocomplete=\"off\"> <span class=\"plus\"></span> </div> </div> <div class=\"children-wrap\"> <div class=\"h-adults childrens\"> Child 1 <div class=\"form-group form-select withicon\"> <select name=\"country\" class=\"form-control itlselect\"> <option value=\"any\">Under 1</option><option value=\"1\">1</option> <option value=\"2\">2</option> <option value=\"3\">3</option> <option value=\"4\">4</option> <option value=\"5\">5</option> <option value=\"6\">6</option> <option value=\"7\">7</option> <option value=\"8\">8</option> <option value=\"9\">9</option> <option value=\"10\">10</option> <option value=\"11\">11</option> </select> </div> </div> </div><div class=\"remove-city-wrap\"><button class=\"remove-room\"> <img src=\"/themes/SAN/assets/img/multicity.svg\"> </button></div> </div>');
\t\t\t//ii++;
\t\t//});

let maxRooms = 6;
let iii = 1;

jQuery('.addmore_room').click(function () {
    let roomCount = jQuery('#rooms_list .hotel-options').length + 1;
    if (roomCount <= maxRooms) {
        jQuery('#rooms_list').append(
            '<div class=\"hotel-options hotel-' + roomCount + '\" hotel-id=\"' + roomCount + '\">' +
            '<input type=\"hidden\" name=\"room_no\" value=\"room' + roomCount + '\">' +
            '<input type=\"hidden\" name=\"adult_count\" value=\"1\">' +
            '<input type=\"hidden\" name=\"child_count\" value=\"0\">' +
            '<div class=\"hotel-rooms\"> Room ' + roomCount + ' </div>' +
            '<div class=\"h-adults\"> Adults (6)' +
            '<div class=\"number h-counter\">' +
            '<span class=\"minus\"></span>' +
            '<input type=\"text\" value=\"1\" class=\"adults\" id=\"adults\" autocomplete=\"off\">' +
            '<span class=\"plus\"></span>' +
            '</div>' +
            '</div>' +
            '<div class=\"h-adults childrens\"> Child (0-4)' +
            '<div class=\"number c-counter\">' +
            '<span class=\"minus\"></span>' +
            '<input type=\"text\" value=\"0\" class=\"child\" id=\"child\" autocomplete=\"off\">' +
            '<span class=\"plus\"></span>' +
            '</div>' +
            '</div>' +
            '<div class=\"remove-city-wrap\"><button class=\"remove-room\">' +
            '<img src=\"/themes/SAN/assets/img/multicity.svg\">' +
            '</button></div>' +
            '</div>'
        );
    }

    // Disable the add button if max rooms are reached
    if (jQuery('#rooms_list .hotel-options').length >= maxRooms) {
        jQuery('.addmore_room').prop('disabled', true);
    }
});

jQuery('#rooms_list').on('click', '.remove-city-wrap .remove-room', function() {
    jQuery(this).parent().parent().remove();
    
    // Reorder room numbers
    jQuery('#rooms_list .hotel-options').each(function(index) {
        jQuery(this).find('.hotel-rooms').text('Room ' + (index + 1));
    });
    
    // Enable the add button if rooms are below max
    if (jQuery('#rooms_list .hotel-options').length < maxRooms) {
        jQuery('.addmore_room').prop('disabled', false);
    }
});




\t\tjQuery('.addmore-city').click(function() {
    if (jj == 3) {
        var tomorrow = moment().add(1, 'day').format('DD-MMM-YYYY');

        jQuery('.multicity-form').append(`
            <div class=\"row custom-search-input-2 single-multicity multicity3\" id=\"milticity-\${jj}\">
                <input type=\"hidden\" name=\"m-dep\${jj}\" value=\"\" data-title=\"Departure\">
                <input type=\"hidden\" name=\"m-ret\${jj}\" value=\"\" data-title=\"Arrival\">
                <input type=\"hidden\" name=\"m-ddt\${jj}\" value=\"\" data-title=\"Departure Date\">
                <div class=\"col-5 col-sm-4\">
                    <div class=\"form-groups\">
                        <input type=\"hidden\" class=\"airportsearch\" name=\"mc-dep\${jj}\" />
                        <input type=\"text\" class=\"search-airport-js search-airport searchinputc mcdep3 form-control\" 
                            placeholder=\"Origin\" name=\"search-mc-dep-gen\" autocomplete=\"off\" />
                        <div class=\"allairport-result\"></div>
                    </div>
                </div>
                <div class=\"col-5 col-sm-4 col-lg-4\">
                    <div class=\"form-groups\">
                        <input type=\"hidden\" class=\"airportsearch\" name=\"mc-arr\${jj}\" />
                        <input type=\"text\" class=\"search-airport-js search-airport searchinputc mcdest3 form-control\" 
                            placeholder=\"Destination\" name=\"search-mc-arr-gen\" autocomplete=\"off\" />
                        <div class=\"allairport-result\"></div>
                    </div>
                </div>
                <div class=\"col-10 col-sm-2 col-lg-2\">
                    <div class=\"form-groups form-select withicon\">
                        <div class=\"daterangeselect\">
                            <div class=\"checkout\">
                                <input type=\"text\" name=\"multicity\${jj}\" class=\"form-control multicity-date\" value=\"\${tomorrow}\" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-5 col-sm-2 col-lg-2\">
                    <div class=\"multicity-add-remove\" style=\"display: none;\">
                        <button class=\"remove-city\">
                            <img src=\"/themes/SAN/assets/img/multicity.svg\">
                        </button>
                        <button class=\"addmore-city\">
                            <img src=\"/themes/SAN/assets/img/add-multicity.svg\">
                        </button>
                    </div>
                </div>
            </div>
        `);

        setTimeout(function() {
            jQuery(`input[name=\"multicity\${jj}\"]`).daterangepicker({
                \"startDate\": moment().add(1, 'day'),
                \"singleDatePicker\": true,
                \"autoApply\": true,
                \"minDate\": moment().add(1, 'day'),
                \"locale\": {
                    format: 'DD-MMM-YYYY'
                }
            }, function(start, end, label) {
                jQuery(`input[name=\"m-ddt\${jj}\"]`).val(start.format('DD-MMM-YYYY'));
            });
        }, 100);

        jj++;
    }

    jQuery('.itlselect').select2();
});

\t\t\tjQuery(document).on('change', 'select[name=\"mc-arr3\"]', function() {
\t\t\t// jQuery('select[name=\"mc-arr3\"]').change(function () {
\t\t\t\tvar arrival = jQuery(this).val();
\t\t\t\tjQuery('input[name=m-ret3]').val(arrival);
\t\t\t\tconsole.log(\$(this).val())
\t\t\t});

\t\t\t// jQuery('select[name=\"mc-dep3\"]').change(function () {
\t\t\tjQuery(document).on('change', 'select[name=\"mc-dep3\"]', function() {
\t\t\t\tvar arrival = jQuery(this).val();
\t\t\t\tjQuery('input[name=m-dep3]').val(arrival);
\t\t\t\tconsole.log(\$(this).val())
\t\t\t});
\t\t\t

\t\t\t\tjQuery('.remove-city').click(function () {
\t\t\t\t\tjj = 3;
\t\t\t\t\tjQuery(this).parent().parent().parent().next().remove();
\t\t\t\t});


\t\t\t})();



jQuery(\".hotel_search\").click(function (e) {
    e.preventDefault(); // Prevent form submission and redirection

    var CityCode = jQuery('input[name=hotel-destination]').val().trim(); // Get value of destination
    var hotel_checkin = jQuery('input[name=hh-checkin]').val().trim();
    var hotel_checkout = jQuery('input[name=hh-checkout]').val().trim();
    var room1_adults = jQuery('.hotel-1 #adults').val().trim();
    var room1_child = jQuery('.hotel-1 #child').val().trim();
    var nationality = jQuery('input[name=nationality]').val().trim();

    // Validation for destination field
    if (!CityCode) {
        jQuery('input#search-destination').addClass('field-error'); // Highlight input if empty
        return false; // Stop further execution if validation fails
    } else {
        jQuery('input#search-destination').removeClass('field-error'); // Remove error class if field is filled
    }

    // Validation for other fields (optional)
    if (!hotel_checkin || !hotel_checkout) {
        alert('Please select check-in and check-out dates');
        return false; // Stop execution if check-in or check-out is missing
    }

    // Validation for room fields (optional)
    if (!room1_adults) {
        alert('Please select the number of adults for the first room');
        return false;
    }

    var room_nth = jQuery('#rooms_list .hotel-options');
    var roomParams = ''; // Initialize room parameters string
    var i;

    // Add room1 parameters to roomParams
    roomParams += '&room1=' + room1_adults + '-' + room1_child;

    // Loop through each additional room and generate parameters
    for (i = 2; i <= room_nth.length; ++i) {
        var room_adults = jQuery('.hotel-' + i + ' #adults').val();
        var room_child = jQuery('.hotel-' + i + ' #child').val();

        // Only append room parameters if adults are selected
        if (room_adults) {
            var al_rooms = 'room' + i + '=' + room_adults + '-' + room_child; // Room parameter format
            roomParams += '&' + al_rooms; // Append to roomParams string
        }
    }

    // If nationality is selected as 'any', show error
    if (jQuery('#nationality-list').val() == 'any') {
        jQuery('#nationality-list').addClass('field-error');
        return false;
    } else {
        jQuery('#nationality-list').removeClass('field-error');
    }

    // Construct the base URL with standard parameters (without room parameters)
    var base_url = 'https://booking.itlworld.com/hotel/result?CityCode=' + CityCode + '&nationality=' + nationality + '&checkinDate=' + hotel_checkin + '&checkoutDate=' + hotel_checkout + '&langcode=EN';

    // Append the room parameters at the end of the URL
    var final_url = base_url + roomParams;

    // After all validations pass, redirect to the desired URL
    setTimeout(function () {
        window.open(final_url, '_blank');
    }, 500);
});



\t\$(document).click(function(e) {

\t  // check that your clicked
\t  // element has no id=info

\t  if( e.target.id != 'info') {
\t    \$(\".dest-list\").hide();
\t  }
\t});

\tjQuery(document).ready(function() {
    setTimeout(function() {

        var today = new Date();
        var tomorrow = new Date(new Date().getTime() + 24 * 60 * 60 * 1000);
        var dd = today.getDate();
        var mm = today.getMonth() + 1; // January is 0!
        var yyyy = today.getFullYear();
        var tomday = tomorrow.getDate();
        var tommonth = tomorrow.getMonth() + 1;
        var tomyear = tomorrow.getFullYear();
        
        var months = [
            \"January\", \"February\", \"March\", \"April\", \"May\", \"June\", 
            \"July\", \"August\", \"September\", \"October\", \"November\", \"December\"
        ];
        
        if (dd < 10) { dd = '0' + dd }
        if (tomday < 10) { tomday = '0' + tomday }
        
        var formattedToday = dd + '-' + months[mm - 1] + '-' + yyyy;
        var formattedTomorrow = tomday + '-' + months[tommonth - 1] + '-' + tomyear;
        
        \$('input[name=h-checkin]').attr('value', formattedToday);
        \$('input[name=h-checkout]').attr('value', formattedTomorrow);
        \$('input[name=hh-checkin]').attr('value', formattedToday);
        \$('input[name=hh-checkout]').attr('value', formattedTomorrow);
        \$('.checkin input').attr('value', formattedToday);
        \$('.checkout input').attr('value', formattedTomorrow);
    }, 500);
});


   jQuery('.refundable-check input').change(function() {
\t    if (\$(this).is(\":checked\")) {
\t      \$('input[name=refundable]').attr('value', 'true');
\t    }
\t    else {
\t    \t\$('input[name=refundable]').attr('value', 'false');
\t    }
  \t});

   jQuery('.direct-flight-check input').change(function() {
\t    if (\$(this).is(\":checked\")) {
\t      \$('input[name=direct]').attr('value', 'true');
\t    }
\t    else {
\t    \t\$('input[name=direct]').attr('value', 'false');
\t    }
  \t});

if (jQuery(window).width() <= 800) {
\t\$(document).ready(function() {
    function showButton(tabId) {
        \$('#pills-flight .btn_search').hide();
        if (tabId === 'pills-roundtrip-tab') {
            \$('.roundtrip_submit').show();
        } else if (tabId === 'pills-oneway-tab') {
            \$('.oneway_submit').show();
        } else if (tabId === 'pills-multicity-tab') {
            \$('.multicity-search').show();
        }
    }

    \$('#pills-tab-child .nav-link').on('click', function() {
        showButton(\$(this).attr('id'));
    });

    // Show the button for the active tab on page load
    showButton(\$('#pills-tab-child .nav-link.active').attr('id'));
});
\t}

</script>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/itl/themes/SAN/partials/site/searchform.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1174 => 902,  1171 => 901,  1163 => 899,  1154 => 898,  1149 => 897,  1146 => 896,  1140 => 895,  1137 => 894,  1135 => 892,  1122 => 881,  1119 => 880,  1112 => 878,  1101 => 875,  1098 => 874,  1094 => 873,  1091 => 872,  1088 => 871,  1082 => 870,  1080 => 869,  1070 => 861,  1067 => 860,  1055 => 857,  1050 => 856,  1045 => 855,  1042 => 854,  1036 => 853,  1034 => 852,  1017 => 838,  865 => 688,  854 => 686,  850 => 685,  774 => 611,  759 => 609,  755 => 608,  735 => 590,  720 => 588,  716 => 587,  681 => 554,  666 => 552,  662 => 551,  645 => 536,  630 => 534,  626 => 533,  578 => 487,  563 => 485,  559 => 484,  541 => 468,  526 => 466,  522 => 465,  61 => 6,  50 => 5,  46 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set packages = packagesList.records %}
{% set experience = experienceList.records %}

{% framework %}
{% framework extras %}

<style type=\"text/css\">

\tbutton.reset_country {
\t\tborder: none;
\t\tfont-size: 14px;
\t\tbackground: transparent;
\t\tborder: 1px solid #fff;
\t\tcolor: #fff;
\t\tborder-radius: 4px;
\t\tz-index: 5;
\t\tmargin-top: 15px;
\t\tline-height: 1;
\t   padding: 4px 10px;
\t}

\tbutton.addmore_room {
\t\tposition: absolute;
\t\ttop: 95px;
\t\tborder: none;
\t\tleft: 12%;
\t\tfont-size: 16px;
\t\tbackground: transparent;
\t\tborder: 1px solid #fff;
\t\tcolor: #fff;
\t\tborder-radius: 4px;
\t\tz-index: 5;
\t}

\tbutton.addmore_room {
\t\tposition: absolute;
\t\ttop: 95px;
\t\tborder: none;
\t\tleft: 12%;
\t\tfont-size: 16px;
\t\tbackground: transparent;
\t\tborder: 1px solid #fff;
\t\tcolor: #fff;
\t\tborder-radius: 4px;
\t\tz-index: 5;
\t}
\tdiv#rooms_list {
\t\tz-index: 0 !important;
\t}
\t.dest-list ul li {
\t\tcursor: pointer;
\t}
\t.custom-filters .p-airlines-select .select2-container .select2-selection {
\t\tbackground: transparent;
\t\tcolor: #fff;
\t\tborder: 1px solid #fff;
\t\theight: 25px;
\t\twidth: 115px;
\t\tmargin-left: 10px;
\t}
\t.custom-filters .children-wrap {
\t\tmargin: 0;
\t}
\t.custom-filters .children-wrap .select2-container .select2-selection {
\t\twidth: 75px;
\t}
\t.tab-pane .custom-search-input-2 [type='submit'], .tab-pane .custom-search-input-2 select {
\t\tpadding-right: 30px;
\t}
\t.custom-filters .p-airlines-select .select2-container .select2-selection span.select2-selection__rendered {
\t\tcolor: #fff;
\t\tfont-size: 12px;
\t}

\t.custom-filters .p-airlines-select .select2-container .select2-selection span.select2-selection__arrow {
\t\tdisplay: none;
\t}
\t\tinput.searchinputc {
\t\t    box-shadow: 0px 3px 6px #0000006C;
\t\t    border-radius: 6px;
\t\t}
\t\tinput.searchinputc::placeholder { 
\t\t  color: #495057;
\t\t  opacity: 1; 
\t\t}

\t\tinput.searchinputc:-ms-input-placeholder { 
\t\t  color: #495057;
\t\t  opacity: 1; 
\t\t}

\t\tinput.searchinputc::-ms-input-placeholder { 
\t\t  color: #495057;
\t\t  opacity: 1; 
\t\t}
\t\t.custom-filters .select2-container {
\t\t\twidth: 100% !important;
\t\t}
\t.custom-filters .select2-container .select2-selection {
\t    border-radius: 5px !important;
\t    height: 50px;
\t    border: 0px;
\t    outline: none !important;
\t    appearance: none;
\t    -webkit-appearance: none;
\t    font-size: 18px;
\t    line-height: 50px;
\t    display: flex;
\t    align-items: center;
\t}
\t.custom-filters .select2-container .select2-selection span {display: block;align-items: center;}

\t.custom-filters .select2-container--default .select2-selection--single .select2-selection__arrow {
\t    top: 50%;
\t    transform: translateY(-50%);
\t}
\t.select2-container--default .select2-results__option--highlighted.select2-results__option--selectable {
\t    background-color: #da4e41;
\t    color: white;
\t}
\t.select2-results__option--selectable {
\t    cursor: pointer;
\t    font-size: 15px;
\t}

\t.hotel-options {
\t\tflex: 0 0 100%;
\t\tjustify-content: center;
\t}

\t.remove-city-wrap .remove-room {
\t    background: transparent;
\t    box-shadow: none;
\t    border: 0;
\t}

\t.remove-city-wrap {
\t    display: flex;
\t    align-items: flex-end;
\t    padding-bottom: 5px;
\t    position: relative;
\t    right: 10px;
\t    margin-right: -40px !important;
\t}

\t.hotel-options {
\t    position: relative;
\t}

\t.field-error {
\t\tborder: 2px solid red !important;
\t}

\t.daterangepicker.show-calendar .drp-buttons {
\t\tdisplay: none;
\t}

\t.custom-check .checkmark {
\t\tborder-radius: 3px;
\t}
\t.multicity-form-mobile-btn {
\t\tdisplay: none;
\t}
\t
\t@media (max-width: 800px) {
\t\t.modal-body {
\t\t\tpadding-bottom: 0;
\t\t}
\t\t.number input {
\t\t\twidth: 20px;
\t\t}
\t\tlabel.total-passengers+.form-dropdown.show {
\t\t    display: block;
\t\t    background: #102838;
\t\t    z-index: 9;
\t\t    border: 1px solid #fff;
\t\t}
\t\t.filter-modal .custom-search-input-2>.hotel-options:last-child {
/*\t\t    padding-bottom: 50px;*/
\t\t}
\t\t/*.third-order {
\t\t    order: 3;
\t\t}

\t\t.first-order {
\t\t    order: 1;
\t\t}

\t\t.second-order {
\t\t    order: 2;
\t\t}*/
\t\t.multicity-form-desktop-btn {
\t\t\tdisplay: none;
\t\t}
\t\t.multicity-form-mobile-btn {
\t\tdisplay: block;
\t}
\t}
\t@media (max-width: 768px) {
\t\tbutton.addmore_room {
\t\t\tposition: relative;
\t\t\ttop: 0;
\t\t\tborder: none;
\t\t\tleft: 0;
\t\t\tfont-size: 16px;
\t\t\tbackground: transparent;
\t\t\tborder: 1px solid #fff;
\t\t\tcolor: #fff;
\t\t\tborder-radius: 4px;
\t\t\tz-index: 5;
\t\t\tdisplay: flex;
\t\t\talign-items: center;
\t\t\tjustify-content: center;
\t\t\ttext-align: center;
\t\t\tmargin: 0 auto;
\t\t}
\t}
\t.select2-search--dropdown .select2-search__field,
\t.select2-results__option--selectable {
\t    padding: 4px;
\t    width: 100%;
\t    box-sizing: border-box;
\t    font-size: 18px;
\t    color: #444;
\t    line-height: 28px;
\t}
\t.select2-results__option--selectable{
\t\tfont-size: 12px;
\t}
\t.searchinputc{
\t\twidth: 100%;
\t\tborder-radius: 8px !important;
\t\theight: 50px;
\t\tborder: 0px;
\t\toutline: none !important;
\t\tappearance: none;
\t\t-webkit-appearance: none;
\t\tfont-size: 18px;
\t\tline-height: 50px;
\t\tdisplay: flex;
\t\talign-items: center;
\t\tpadding-left: 8px;
\t\tpadding-right: 20px;
\t\tcolor: #444;
\t\tline-height: 28px;
\t}
\tdiv#pills-tabContent .custom-search-input-2 {
\t\tz-index: auto;
\t}
   .dest-list ul li {
      font-size: 16px;
      border-bottom: 1px solid #e6e6e6;
      font-weight: 400;
      line-height: 1.5;
      color: #495057;
   }
   .dest-list ul li:hover {
      background-color: #f2f2f2;
   }

   .dest-list ul li:last-child {
      border-bottom: none;
   }

   .dest-list {
      background-color: #fff;
      border-radius: 6px;
      padding: 10px;
      max-height: 300px;
      overflow: auto;
      overflow-x: hidden;
      position: absolute;
      width: 100%;
      z-index: 9999;
      box-shadow: 0px 3px 6px #0000006C;
   }
   .mobile-btns button {
   \tdisplay: none;
   }
   .h-mobile-btns {
   \tdisplay: none;
   }
   .mobile-btns {
   \tdisplay: none;
   }


   @media (max-width: 800px) {
   \t.mobile-btns {
   \t\tdisplay: block;
   \t}
   \tdiv#pills-hotel {
   \t\tflex-direction: column;
   \t}
   \t.h-mobile-btns {
   \t\tdisplay: block;
   \t}
   \t.h-desktop-btns {
   \t\tdisplay: none;
   \t}
   \t.desktop-btns {
   \t\tdisplay: none !important;
   \t}
   \t.empty-div.mobile-btns-wrap {
   \t\tdisplay: block;
   \t}
   \t.filter-modal .second-order  .flight-nav {
   \t\tmargin-top: -30px;
   \t\tmargin-bottom: 15px;
   \t}
   \t    .filter-modal .modal-content {
        background: #102838;
        height: auto;
        min-height: 100%;
    }
   }
   
  
</style>
<section class=\"home-filter\" data-aos=\"fade-down\" data-aos-easing=\"linear\" data-aos-duration=\"1500\" id=\"holidays\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"custom-filters d-filters\">
\t\t\t\t\t<ul class=\"nav nav-pills\" id=\"pills-tab\" role=\"tablist\" style=\"display:none;\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" id=\"pills-flight-tab\" data-toggle=\"pill\" href=\"#pills-flight\" role=\"tab\"
\t\t\t\t\t\t\t\taria-controls=\"pills-flight\" aria-selected=\"false\"><img
\t\t\t\t\t\t\t\t\tsrc=\"/themes/SAN/assets/img/flight-icon.svg\"> Flight</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"pills-hotel-tab\" data-toggle=\"pill\" href=\"#pills-hotel\" role=\"tab\"
\t\t\t\t\t\t\t\taria-controls=\"pills-hotel\" aria-selected=\"false\"><img
\t\t\t\t\t\t\t\t\tsrc=\"/themes/SAN/assets/img/hotel-icon.svg\"> Hotel</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"pills-holiday-tab\" data-toggle=\"pill\" href=\"#pills-holiday\" role=\"tab\"
\t\t\t\t\t\t\t\taria-controls=\"pills-holiday\" aria-selected=\"true\"><img
\t\t\t\t\t\t\t\t\tsrc=\"/themes/SAN/assets/img/holidays-icon.svg\"> Holidays</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"tab-content\" id=\"pills-tabContent\">
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"pills-flight\" role=\"tabpanel\"
\t\t\t\t\t\t\taria-labelledby=\"pills-flight-tab\">

\t\t\t\t\t\t\t<!-- flight hidden fields -->
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"triptype\" value=\"1\" data-title=\"Trip Type\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"key\" value=\"IST\" data-title=\"Journey Type Key\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"adult\" value=\"1\" data-title=\"Adult Count\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"child\" value=\"1\" data-title=\"Child Count\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"infant\" value=\"1\" data-title=\"Infant Count\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"langCode\" value=\"EN\" data-title=\"Language Code\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"airlines\" value=\"\" data-title=\"Airlines\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"cl1\" value=\"Y\" data-title=\"Cabin Class\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"direct\" value=\"true\" data-title=\"Direct Flights Only\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"refundable\" value=\"false\" data-title=\"Refundable\">
\t\t\t\t\t\t\t<!-- flight hidden fields -->

\t\t\t\t\t\t\t<div class=\"row custom-search-input-2\">
\t\t\t\t\t\t\t\t<div class=\"col-md-2 empty-div\"></div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-8 col-md-12 first-order\">
\t\t\t\t\t\t\t\t\t<div class=\"flight-nav\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-pills\" id=\"pills-tab-child\" role=\"tablist\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link active\" id=\"pills-roundtrip-tab\" data-toggle=\"pill\"
\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"#pills-roundtrip\" role=\"tab\" aria-controls=\"pills-roundtrip\"
\t\t\t\t\t\t\t\t\t\t\t\t\taria-selected=\"true\" area-value=\"2\">Round Trip</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"pills-oneway-tab\" data-toggle=\"pill\" href=\"#pills-oneway\"
\t\t\t\t\t\t\t\t\t\t\t\t\trole=\"tab\" aria-controls=\"pills-oneway\" aria-selected=\"false\" area-value=\"1\">One
\t\t\t\t\t\t\t\t\t\t\t\t\tWay</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"pills-multicity-tab\" data-toggle=\"pill\"
\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"#pills-multicity\" role=\"tab\" aria-controls=\"pills-multicity\"
\t\t\t\t\t\t\t\t\t\t\t\t\taria-selected=\"false\" area-value=\"3\">Multi City</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"class-of-travel\">
\t\t\t\t\t\t\t\t\t\t<span>Cabin class</span>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group form-select withicon\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"travel-class\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"Y\">Economy</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"W\">Premium Economy</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"C\">Business</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"F\">First</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-2 empty-div\"></div>
\t\t\t\t\t\t\t\t<div class=\"col-md-12 third-order\">
\t\t\t\t\t\t\t\t\t<div class=\"tab-content\" id=\"pills-tabContent-child\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade show active\" id=\"pills-roundtrip\" role=\"tabpanel\"
\t\t\t\t\t\t\t\t\t\t\taria-labelledby=\"pills-roundtrip-tab\">

\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"rt-from\" value=\"\" data-title=\"from\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"rt-to\" value=\"\" data-title=\"to\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"rr-dd1\" value=\"\" data-title=\"Departure date 1\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"rr-dd2\" value=\"\" data-title=\"Departure date 2\">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"row custom-search-input-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5 col-sm-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-groups\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"airportsearch\" name=\"rt-dep\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"search-airport-js search-airport searchinputc form-control\" placeholder=\"Origin\" name=\"search-rt-dep\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"allairport-result\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5 col-sm-3 col-lg-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-groups\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"airportsearch\" name=\"rt-arrival\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"search-airport-js search-airport searchinputc form-control\" placeholder=\"Destination\" name=\"search-rt-arrival\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"allairport-result\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10 col-sm-2 col-lg-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group form-select withicon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"daterangeselect\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkin\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"roundtrip-in\" class=\"form-control\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"01/01/2018\" id=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10 col-sm-2 col-lg-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group form-select withicon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"daterangeselect\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkout\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"roundtrip-out\" class=\"form-control\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"01/15/2018\" id=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5 col-sm-2 col-lg-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn_search rounded-0 p-0 roundtrip_submit  desktop-btns\" id=\"roundtrip_submit\"><span
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"icon-search d-lg-none\"></span><span
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"d-lg-block\">SEARCH</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"pills-oneway\" role=\"tabpanel\"
\t\t\t\t\t\t\t\t\t\t\taria-labelledby=\"pills-oneway-tab\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"o-from\" value=\"\" data-title=\"Departure\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"o-to\" value=\"\" data-title=\"Arrival\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row custom-search-input-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-groups\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"airportsearch\" name=\"departure-oneway\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"search-airport-js search-airport searchinputc form-control\" placeholder=\"Origin\" name=\"search-departure-oneway\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"allairport-result\"></div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <input type=\"text\" class=\"search-airport searchinputc\" placeholder=\"Origin\" name=\"search-departure-oneway\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control\" data-request=\"onKeyPressAirport\" data-track-input
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-request-update=\"'feilds/airport': '#allairport-departure-oneway'\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"allairport-departure-oneway\"></div> -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <div class=\"form-group form-select withicon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"departure-oneway\" class=\"form-control itlselect\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"any\">Origin</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for airport in allairports %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{airport.airport_code}}\">{{airport.airport_name}} ({{airport.airport_code}}) - {{airport.country_name}}</option>
            \t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5 col-sm-4 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-groups\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"airportsearch\" name=\"arrival-oneway\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"search-airport-js search-airport searchinputc form-control\" placeholder=\"Destination\" name=\"search-arrival-oneway\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"allairport-result\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <input type=\"text\" class=\"search-airport searchinputc\" placeholder=\"Destination\" name=\"search-arrival-oneway\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control\" data-request=\"onKeyPressAirport\" data-track-input
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-request-update=\"'feilds/airport': '#allairport-arrival-oneway'\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"allairport-arrival-oneway\"></div> -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <div class=\"form-group form-select withicon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"arrival-oneway\" class=\"form-control itlselect\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"any\">Destination</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for airport in allairports %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{airport.airport_code}}\">{{airport.airport_name}} ({{airport.airport_code}}) - {{airport.country_name}}</option>
            \t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10 col-sm-2 col-lg-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group form-select withicon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"daterangeselect\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkin\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"oneway\" class=\"form-control oneway-d-date\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"01/01/2018\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5 col-sm-2 col-lg-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn_search rounded-0 p-0 oneway_submit desktop-btns\"><span
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"icon-search d-lg-none\"></span><span
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"d-lg-block\">SEARCH</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"pills-multicity\" role=\"tabpanel\"
\t\t\t\t\t\t\t\t\t\t\taria-labelledby=\"pills-multicity-tab\">

\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"m-dep1\" value=\"\" data-title=\"Departure\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"m-ret1\" value=\"\" data-title=\"Arrival\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"m-ddt1\" value=\"\" data-title=\"Departure Date\">

\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"m-dep2\" value=\"\" data-title=\"Departure\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"m-ret2\" value=\"\" data-title=\"Arrival\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"m-ddt2\" value=\"\" data-title=\"Departure Date\">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"multicity-form\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row custom-search-input-2 multicity1\" id=\"milticity-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-groups\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"airportsearch\" name=\"mc-dep1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"search-airport-js search-airport searchinputc mcdep1 form-control\" placeholder=\"Origin\" name=\"search-mc-dep1\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"allairport-result\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <input type=\"text\" class=\"search-airport searchinputc mcdep1\" placeholder=\"Origin\" name=\"search-mc-dep1\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control\" data-request=\"onKeyPressAirport\" data-track-input
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-request-update=\"'feilds/airport': '#allairport-mc-dep1'\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"allairport-mc-dep1\"></div> -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <div class=\"form-group form-select withicon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"mc-dep1\" class=\"form-control itlselect mc-select\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"any\">Origin</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for airport in allairports %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{airport.airport_code}}\">{{airport.airport_name}} ({{airport.airport_code}}) - {{airport.country_name}}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5 col-sm-4 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-groups\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"airportsearch\" name=\"mc-arr1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"search-airport-js search-airport searchinputc mcdest1 form-control\" placeholder=\"Destination\" name=\"search-mc-arr1\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"allairport-result\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <input type=\"text\" class=\"search-airport searchinputc mcdest1\" placeholder=\"Destination\" name=\"search-mc-arr1\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control\" data-request=\"onKeyPressAirport\" data-track-input data-request-update=\"'feilds/airport': '#allairport-mc-arr1'\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"allairport-mc-arr1\"></div> -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <div class=\"form-group form-select withicon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"mc-arr1\" class=\"form-control itlselect mc-select\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"any\">Destination</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for airport in allairports %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{airport.airport_code}}\">{{airport.airport_name}} ({{airport.airport_code}}) - {{airport.country_name}}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10 col-sm-2 col-lg-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group form-select withicon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"daterangeselect\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkin\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"multicity1\" class=\"form-control\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"01/01/2018\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5 col-sm-2 col-lg-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn_search multicity-search rounded-0 p-0 multicity-form-desktop-btn  desktop-btns\"><span
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"icon-search d-lg-none\"></span><span
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"d-lg-block\">SEARCH</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row custom-search-input-2 single-multicity multicity2\" id=\"milticity-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5 col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-groups\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"airportsearch\" name=\"mc-dep2\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"search-airport-js search-airport searchinputc mcdep2 form-control\" placeholder=\"Origin\" name=\"search-mc-dep2\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"allairport-result\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <input type=\"text\" class=\"search-airport searchinputc mcdep2\" placeholder=\"Origin\" name=\"search-mc-dep2\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control\" data-request=\"onKeyPressAirport\" data-track-input data-request-update=\"'feilds/airport': '#allairport-mc-dep2'\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"allairport-mc-dep2\"></div> -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <div class=\"form-group form-select withicon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"mc-dep2\" class=\"form-control itlselect mc-select\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"any\">Origin</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for airport in allairports %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{airport.airport_code}}\">{{airport.airport_name}} ({{airport.airport_code}}) - {{airport.country_name}}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5 col-sm-4 col-lg-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-groups\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"airportsearch\" name=\"mc-arr2\" />

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"search-airport-js search-airport searchinputc mcdest2 form-control\" placeholder=\"Destination\" name=\"search-mc-arr2\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"allairport-result\"></div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <input type=\"text\" class=\"search-airport searchinputc mcdest2\" placeholder=\"Destination\" name=\"search-mc-arr2\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control\" data-request=\"onKeyPressAirport\" data-track-input
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-request-update=\"'feilds/airport': '#allairport-mc-arr2'\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"allairport-mc-arr2\"></div> -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <div class=\"form-group form-select withicon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"mc-arr2\" class=\"form-control itlselect mc-select\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"any\">Destination</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for airport in allairports %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{airport.airport_code}}\">{{airport.airport_name}} ({{airport.airport_code}}) - {{airport.country_name}}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-10 col-sm-2 col-lg-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group form-select withicon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"daterangeselect\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkout\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"multicity2\" class=\"form-control\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"01/01/2018\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-5 col-sm-2 col-lg-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"multicity-add-remove\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"remove-city\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"/themes/SAN/assets/img/multicity.svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"addmore-city\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"/themes/SAN/assets/img/add-multicity.svg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"multicity-form-mobile-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn_search multicity-search rounded-0 p-0  desktop-btns\"><span class=\"icon-search d-lg-none\"></span><span class=\"d-lg-block\">SEARCH</span></button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-2 empty-div\"></div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-8 col-md-12 second-order\">
\t\t\t\t\t\t\t\t\t<div class=\"flight-nav\">
\t\t\t\t\t\t\t\t\t\t<div class=\"class-of-travel\">
\t\t\t\t\t\t\t\t\t\t\t<span>Passengers</span>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group form-select withicon\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"total-passengers\"><span class=\"passengers-count\">1</span>
\t\t\t\t\t\t\t\t\t\t\t\t\tPassenger</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-dropdown t-p-count\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"counter\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Adults</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"number c_adults\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"minus\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" value=\"1\" class=\"adults\" id=\"adults\" autocomplete=\"off\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"plus\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"counter\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Children</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"number c_childs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"minus\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"children\" id=\"children\" value=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tautocomplete=\"off\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"plus\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"counter\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Infants</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"number c_infants\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"minus\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"infants\" id=\"infants\" value=\"0\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tautocomplete=\"off\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"plus\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"class-of-travel\">
\t\t\t\t\t\t\t\t\t\t<span>Preffered Airline</span>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group form-select p-airlines-select withicon\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"p-airlines\" class=\"form-control itlselect\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Select Airline</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for airline in airlines %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{airline.airline_code}}\">{{airline.airline_name}}</option>
            \t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"class-of-travel\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"custom-check direct-flight-check\">Direct Flight
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"checkmark\"></span>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"custom-check refundable-check\">Refundable
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"checkmark\"></span>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-2 empty-div mobile-btns-wrap\">
\t\t\t\t\t\t\t\t\t<div class=\"mobile-btns\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn_search rounded-0 p-0 oneway_submit\"><span
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"icon-search d-lg-none\"></span><span
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"d-lg-block\">SEARCH</span></button>
<button type=\"submit\" class=\"btn_search multicity-search rounded-0 p-0\"><span class=\"icon-search d-lg-none\"></span><span class=\"d-lg-block\">SEARCH</span></button>

<button type=\"submit\" class=\"btn_search rounded-0 p-0 roundtrip_submit\" style=\"display: block;\"><span
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"icon-search d-lg-none\"></span><span
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"d-lg-block\">SEARCH</span></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"pills-hotel\" role=\"tabpanel\" aria-labelledby=\"pills-hotel-tab\">
\t\t\t\t\t\t\t<!-- hotel hidden fields -->
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"h-city-code\" value=\"1\" data-title=\"City Code\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"langCode\" value=\"EN\" data-title=\"Hotel langCode\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"h-rooms-url\" value=\"\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"hh-checkin\" value=\"\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"hh-checkout\" value=\"\">
\t\t\t\t\t\t\t<div class=\"row custom-search-input-2\">
\t\t\t\t\t\t\t\t<div class=\"col-3 col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"form-groups\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"hotel-destination\" name=\"hotel-destination\" />
\t\t\t\t\t\t\t\t\t\t<!-- <input type=\"text\" id=\"search-destination\" placeholder=\"Destination\" name=\"search-destination\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control searchinputc\" data-request=\"onKeyPressCity\" data-track-input
\t\t\t\t\t\t\t\t\t\t\tdata-request-update=\"'feilds/cities': '#allcities'\" autocomplete=\"off\" /> -->

\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"search-destination\" placeholder=\"Destination\" name=\"search-destination\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control searchinputc\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t\t<div id=\"allcities\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-2 col-sm-2 col-lg-2\">
\t\t\t\t\t\t\t\t\t<div class=\"form-groups\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"nationality\" name=\"nationality\" />
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"search-nationality\" placeholder=\"Nationality\" name=\"search-nationality\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"form-control searchinputc\" data-request=\"onKeyPressNationality\" data-track-input
\t\t\t\t\t\t\t\t\t\t\tdata-request-update=\"'feilds/nationality': '#allnationality'\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t\t<div id=\"allnationality\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- <div class=\"form-group form-select withicon\">
\t\t\t\t\t\t\t\t\t\t<select id=\"nationality-list\" name=\"nationality\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"any\">Nationality</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"KW\">Kuwait</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"BH\">Bahrain</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"OM\">Oman</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"QA\">Qatar</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"EG\">Egypt</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"MA\">Morocco</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"NG\">Nigeria</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"SA\">Saudi Arabia</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"TN\">Tunisia</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"AE\">United Arab Emirates</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-4 col-sm-4 col-lg-4\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group withicon\">
\t\t\t\t\t\t\t\t\t\t<div class=\"daterangeselect\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkin\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"h-checkin\" class=\"form-control\" value=\"01/01/2018\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"selected-nights\"><strong>1</strong> Nights</span>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkout\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"h-checkout\" class=\"form-control\" value=\"01/15/2018\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-5 col-sm-3 col-lg-3 h-desktop-btns\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn_search rounded-0 p-0 hotel_search\" id=\"hotel_search\"><span
\t\t\t\t\t\t\t\t\t\t\tclass=\"icon-search d-lg-none\"></span><span class=\"d-lg-block\">
\t\t\t\t\t\t\t\t\t\t\tSEARCH</span></button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button class=\"addmore_room\">Add more rooms</button>
\t\t\t\t\t\t\t<div class=\"row custom-search-input-2\" id=\"rooms_list\">
\t\t\t\t\t\t\t\t<div class=\"hotel-options hotel-1\" hotel-id=\"1\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"room_no\" value=\"room1\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"adult_count\" value=\"1\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"child_count\" value=\"1\">
\t\t\t\t\t\t\t\t\t<div class=\"hotel-rooms\">
\t\t\t\t\t\t\t\t\t\tRoom 1
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"h-adults\">
\t\t\t\t\t\t\t\t\t\tAdults (6)
\t\t\t\t\t\t\t\t\t\t<div class=\"number h-counter\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"minus\"></span>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" value=\"1\" class=\"adults\" id=\"adults\" autocomplete='off'>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"plus\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"h-adults childrens\">
\t\t\t\t\t\t\t\t\t\tChild (0-4)
\t\t\t\t\t\t\t\t\t\t<div class=\"number c-counter\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"minus\"></span>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" value=\"0\" class=\"child\" id=\"child\" autocomplete='off'>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"plus\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t<!-- <div class=\"children-wrap\">
\t\t\t\t\t\t\t\t\t\t<div class=\"h-adults childrens\">
\t\t\t\t\t\t\t\t\t\t\tChild 1
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group form-select withicon\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"country\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"any\">Under 1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">1</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">5</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">6</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"7\">7</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"8\">8</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"9\">9</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"10\">10</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"11\">11</option>
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"h-mobile-btns custom-search-input-2\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn_search rounded-0 p-0 hotel_search\" id=\"hotel_search\"><span
\t\t\t\t\t\t\t\t\t\t\tclass=\"icon-search d-lg-none\"></span><span class=\"d-lg-block\">
\t\t\t\t\t\t\t\t\t\t\tSEARCH</span></button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane fade show active\" id=\"pills-holiday\" role=\"tabpanel\" aria-labelledby=\"pills-holiday-tab\">
\t\t\t\t\t\t\t<form action=\"{{ 'search'|page }}/#searching\" method=\"GET\" >

\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"package_change\" value=\"no\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"experience_change\" value=\"no\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"month_change\" value=\"no\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"package_value\" value=\"any\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"experience_value\" value=\"any\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"month_value\" value=\"any\">

\t\t\t\t\t\t\t\t<div class=\"row custom-search-input-2\">
\t\t\t\t\t\t\t\t\t<div class=\"col-5 col-sm-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-groups form-select withicon\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"package\" class=\"form-control countrylist\" id=\"hcountrylist\" data-request=\"onGetAllExp\" data-request-update=\"'feilds/experiences': '#experience','feilds/months': '#months'\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"any\">Country</option>
\t\t\t\t\t\t\t\t\t\t\t\t{% if(allpackages) %}
\t\t\t\t\t\t\t\t\t\t\t\t{% partial 'feilds/packages' allpackages=allpackages %}
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t{% for countryname in countryListFinal | sort((a, b) => a.country <=> b.country ) %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{countryname.country}}\" {% if get(\"package\")==countryname.country
\t\t\t\t\t\t\t\t\t\t\t\t\t\t%} selected=\"selected\" {% endif %}>{{countryname.country}}
\t\t\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t <div id=\"country-error\" class=\"error-message\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-5 col-sm-3 col-lg-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group form-select withicon\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"experience\" class=\"form-control\" id=\"experience\" data-request=\"onChangeExp\" data-request-update=\"'feilds/packages': '#hcountrylist'\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"any\">Experience</option>
\t\t\t\t\t\t\t\t\t\t\t\t{% if(allexp) %}
\t\t\t\t\t\t\t\t\t\t\t\t{% partial 'feilds/experiences' allexp=allexp %}
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t{% for single_exp in experience | sort((a, b) => a.title <=> b.title ) %}
\t\t\t\t\t\t\t\t\t\t\t\t{% if single_exp.id in allowedids %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{single_exp.slug}}\">{{single_exp.id}} {{single_exp.title | capitalize}}
\t\t\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t    {% endif %}

\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"reset_country d-none\" id=\"reset_experience\" data-request=\"onResetExperience\" data-request-update=\"'feilds/experiences': '#experience'\">Reset Experience</button>

\t\t\t\t\t\t\t\t\t\t\t<!-- <i class=\"icon-bicycle\"></i> -->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-10 col-sm-3 col-lg-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group form-select withicon\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"month\" class=\"form-control\" id=\"months\" data-request=\"onChangeExp\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-request-update=\"'feilds/packages': '#hcountrylist'\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"any\">Month</option>
\t\t\t\t\t\t\t\t\t\t\t\t{% set pmonths = {1:'January', 2:'February', 3:'March', 4:'April', 5:'May', 6:'Jun',
\t\t\t\t\t\t\t\t\t\t\t\t7:'July', 8:'August', 9:'September', 10:'October', 11:'November', 12:'December'} %}
\t\t\t\t\t\t\t\t\t\t\t\t{% if(allmonths) %}
\t\t\t\t\t\t\t\t\t\t\t\t{% partial 'feilds/months' allmonths=allmonths %}
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t{% for k, record in pmonths %}
\t\t\t\t\t\t\t\t\t\t\t\t<option {% if get(\"month\")==k %}selected=\"selected\" {% endif %} value=\"{{record}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{{record}}</option>
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-5 col-sm-3 col-lg-3\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn_search rounded-0 p-0\" ><span
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"icon-search d-lg-none\"></span><span class=\"d-lg-block\">SEARCH</span></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"reset_wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"reset_country\" id=\"reset_country\" data-request=\"onResetContry\" data-request-update=\"'feilds/packages': '#hcountrylist'\">Reset <img src=\"/themes/SAN/assets/images/Refresh.svg\"></button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"custom-filters m-filters\">
\t\t\t\t\t<ul class=\"nav nav-pills\" id=\"pills-tab\" role=\"tablist\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"pills-flight-tab\" data-toggle=\"modal\" data-target=\"#flightModal\"><img
\t\t\t\t\t\t\t\t\tsrc=\"/themes/SAN/assets/img/flight-icon.svg\"> Flight</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"pills-hotel-tab\" data-toggle=\"modal\" data-target=\"#hotelModal\"><img
\t\t\t\t\t\t\t\t\tsrc=\"/themes/SAN/assets/img/hotel-icon.svg\"> Hotel</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"pills-holiday-tab\" data-toggle=\"modal\" data-target=\"#holidayModal\"><img
\t\t\t\t\t\t\t\t\tsrc=\"/themes/SAN/assets/img/holidays-icon.svg\">
\t\t\t\t\t\t\t\tHolidays</a>
\t\t\t\t\t\t</li>


\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- Modal -->
<div class=\"modal filter-modal fade\" id=\"holidayModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
\taria-hidden=\"true\">
\t<div class=\"modal-dialog\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<h3>Holiday</h3>
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"modal-body custom-filters\">
\t\t\t\t<div class=\"\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"modal filter-modal fade\" id=\"flightModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
\taria-hidden=\"true\">
\t<div class=\"modal-dialog\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<h3>Flight</h3>
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"modal-body custom-filters\">
\t\t\t\t<div class=\"\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"modal filter-modal fade\" id=\"hotelModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
\taria-hidden=\"true\">
\t<div class=\"modal-dialog\" role=\"document\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<h3>Hotel</h3>
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"modal-body custom-filters\">
\t\t\t\t<div class=\"\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<script>


   \$(document).ready(function(){

\t\tjQuery(document).on('keyup', '#search-destination', function() {
         var keywordFilter = \$(this).val();
\t\t\tvar allairportDiv = \$(this).siblings('#allcities');
\t\t\tif(keywordFilter.length > 2){
\t\t\t\t\$.getJSON(\"/storage/app/media/hotels-api.json\", function(data) {
\t\t\t\t
\t\t\t\t\tdata.sort(function(a, b) {
\t\t\t\t\t\treturn a.cn.localeCompare(b.cn)
\t\t\t\t\t});
\t\t\t\t\tallairportDiv.empty();
\t\t\t\t\tvar airhtml = '<div class=\"dest-list\"><ul style=\"margin: 0;\">';
\t\t\t\t\t\$.each(data, function(key, value) {
\t\t\t\t\t\t// console.log(value.cn.toLowerCase());
\t\t\t\t\t\tif(value.cn != \"\" || value.cn != null){
\t\t\t\t\t\t\tvar inputText   = keywordFilter.toLowerCase();
\t\t\t\t\t\t\tvar cityName     = value.cn.toLowerCase();
\t\t\t\t\t\t\tvar countryName     = value.con.toLowerCase();
\t\t\t\t\t\t\tif(cityName.indexOf(inputText) != -1 || countryName.indexOf(inputText) != -1){
\t\t\t\t\t\t\t\tairhtml += '<li class=\"destination\" data-city_code=\"'+value.cc+'\" >'+value.cn+' ('+value.con+')</li>';
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\tairhtml += '</ul></div>';
\t\t\t\t\tallairportDiv.html(airhtml);
\t\t\t\t});
\t\t\t}else{
\t\t\t\tallairportDiv.html('');
\t\t\t}
      });

\t\tjQuery(document).on('keyup', '.search-airport-js', function() {
         var keywordFilter = \$(this).val();
\t\t\tvar allairportDiv = \$(this).siblings('.allairport-result');
\t\t\tif(keywordFilter.length > 2){
\t\t\t\t\$.getJSON(\"/storage/app/media/airport-api.json\", function(data) {
\t\t\t\t\tdata.sort(function(a, b) {
\t\t\t\t\t\treturn a.an.localeCompare(b.an)
\t\t\t\t\t});
\t\t\t\t\tallairportDiv.empty();
\t\t\t\t\tvar airhtml = '<div class=\"dest-list\"><ul style=\"margin: 0;\">';
\t\t\t\t\t\$.each(data, function(key, value) {
\t\t\t\t\t\tvar inputText   = keywordFilter.toLowerCase();
\t\t\t\t\t\tvar airname     = value.an.toLowerCase();
\t\t\t\t\t\tvar aircode     = value.ac.toLowerCase();
\t\t\t\t\t\tif(airname.indexOf(inputText) != -1 || aircode.indexOf(inputText) != -1){
\t\t\t\t\t\tairhtml += '<li class=\"airport\" data-city_code=\"'+value.ac+'\" >'+value.an+' ('+value.ac+')</li>';
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\tairhtml += '</ul></div>';
\t\t\t\t\tallairportDiv.html(airhtml);
\t\t\t\t});
\t\t\t}else{
\t\t\t\tallairportDiv.html('');
\t\t\t}
      });

\t\t\$(\"body\").on(\"click\", \".airport\", function(){
\t\t\tvar pdiv = \$(this).closest('.form-groups');
\t\t\tconsole.log(pdiv);
\t\t\tpdiv.find('.search-airport').attr(\"placeholder\", \$(this).text());
\t\t\tpdiv.find('.search-airport').val(\$(this).text());
\t\t\tpdiv.find('.airportsearch').val(\$(this).attr(\"data-city_code\"));
\t\t\t\$(this).parent().closest(\".dest-list\").hide();
\t\t});

\t\t\$(\"body\").on(\"click\", \".destination\", function(){
\t\t\t\$(\"#search-destination\").attr(\"placeholder\", \$(this).text());
\t\t\t\$(\"#hotel-destination\").val(\$(this).attr(\"data-city_code\"));
\t\t\t\$(\"#search-destination\").val(\$(this).text());
\t\t\t\$(\".dest-list\").hide();
\t\t});

\t\t\$(\"body\").on(\"click\", \"#milticity-1 .airport\", function(){
\t\t\t\$('#milticity-2 .mcdep2').attr(\"placeholder\", \$(this).text());
\t\t\t\$('#milticity-2 .mcdep2').val(\$(this).text());
\t\t});

\t\t\$(\"body\").on(\"click\", \"#milticity-2 .airport\", function(){
\t\t\t\$('#milticity-3 .mcdep3').attr(\"placeholder\", \$(this).text());
\t\t\t\$('#milticity-3 .mcdep3').val(\$(this).text());
\t\t});
   });







jQuery('#hcountrylist').on('change', function () {
    var countrySelected = jQuery('#hcountrylist').val();

    // Check if the country is selected (not 'any' or empty)
    if (countrySelected === 'any' || countrySelected === '') {
        // Add error class and show error message
        jQuery('#hcountrylist').addClass('field-error');
        jQuery('#country-error').text('');
    } else {
        // Remove error class and clear error message
        jQuery('#hcountrylist').removeClass('field-error');
        jQuery('#country-error').text('');
    }

    // Update hidden input fields only if country is valid
    if (countrySelected !== 'any' && countrySelected !== '') {
        jQuery('input[name=\"package_change\"]').val('yes');
        jQuery('input[name=\"package_value\"]').val(countrySelected);
        jQuery('input[name=\"month_value\"]').val(jQuery('#months').val());
    }
});

// Handle form submission
jQuery('form').on('submit', function (e) {
    var countrySelected = jQuery('#hcountrylist').val();

    // Prevent form submission if country is invalid
    if (countrySelected === 'any' || countrySelected === '') {
        jQuery('#hcountrylist').addClass('field-error');
        jQuery('#country-error').text('');
        e.preventDefault(); // Prevent form submission
    }
});

// Handle reset button click
jQuery('#reset_country').on('click', function () {
\t\tjQuery('input[name=\"experience_change\"]').val('no');
\t\tjQuery('input[name=\"package_change\"]').val('no');
\t\tjQuery('input[name=\"month_change\"]').val('no');
\t\tjQuery('input[name=\"package_value\"]').val('any');
\t\tjQuery('input[name=\"experience_value\"]').val('any');
\t\t\$(\"#reset_experience\").trigger(\"click\");
\t});
\tjQuery('#reset_experience').on('click', function () {
\t\tjQuery('input[name=\"experience_change\"]').val('no');
\t\tjQuery('input[name=\"package_change\"]').val('no');
\t\tjQuery('input[name=\"month_change\"]').val('no');
\t\tjQuery('input[name=\"package_value\"]').val('any');
\t\tjQuery('input[name=\"experience_value\"]').val('any');
\t\tjQuery('#months').val('any');
\t});


\tjQuery(function () {

\t\tjQuery('input[name=\"checkin\"]').daterangepicker({
\t\t\t\"startDate\": moment().add(0, 'day'),
\t\t\t\"endDate\": moment().add(1, 'day'),
\t\t\t\"linkedCalendars\": false,
\t\t\t\"autoUpdateInput\": false,
\t\t\t\"autoApply\": true,
\t\t}, function (start, end, label) {
\t\t\t\$('input[name=\"checkin\"]').val(start.format('MM/DD/YYYY'));
\t\t\t\$('input[name=\"checkout\"]').val(end.format('MM/DD/YYYY'));
\t\t\tconsole.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
\t\t});

\t\tjQuery('input[name=\"roundtrip-in\"]').daterangepicker({
            \"startDate\": moment().add(0, 'day'),
            \"endDate\": moment().add(1, 'day'),
            \"singleDatePicker\": true,
            \"linkedCalendars\": false,
            \"autoUpdateInput\": true,
            \"autoApply\": true,
            \"minDate\": new Date(),
            \"locale\": {
                format: 'DD-MMM-YYYY'
            }
        }, function (start, end, label) {
            var formattedDate = start.format('DD-MMM-YYYY');
            jQuery('input[name=\"roundtrip-in\"]').val(formattedDate);
            console.log('New date selected: ' + formattedDate);
            jQuery('input[name=\"rr-dd1\"]').val(formattedDate);
            
            // Automatically set roundtrip-out date to the same as roundtrip-in
            jQuery('input[name=\"roundtrip-out\"]').daterangepicker({
                \"startDate\": start,
                \"singleDatePicker\": true,
                \"linkedCalendars\": false,
                \"autoUpdateInput\": true,
                \"autoApply\": true,
                \"minDate\": start, // Ensures round-out can't be before round-in
                \"locale\": {
                    format: 'DD-MMM-YYYY'
                }
            }, function (start, end, label) {
                var formattedOutDate = start.format('DD-MMM-YYYY');
                jQuery('input[name=\"roundtrip-out\"]').val(formattedOutDate);
                console.log('New round-out date selected: ' + formattedOutDate);
                jQuery('input[name=\"rr-dd2\"]').val(formattedOutDate);
            });
            
            jQuery('input[name=\"roundtrip-out\"]').val(formattedDate); // Default to same date
            jQuery('input[name=\"rr-dd2\"]').val(formattedDate);
        });
        
        jQuery('input[name=\"roundtrip-out\"]').daterangepicker({
            \"startDate\": moment().add(1, 'day'),
            \"singleDatePicker\": true,
            \"linkedCalendars\": false,
            \"autoUpdateInput\": true,
            \"autoApply\": true,
            \"locale\": {
                format: 'DD-MMM-YYYY'
            }
        }, function (start, end, label) {
            var formattedOutDate = start.format('MM/DD/YYYY');
            jQuery('input[name=\"roundtrip-out\"]').val(formattedOutDate);
            console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
            jQuery('input[name=\"rr-dd2\"]').val(start.format('YYYY-MM-DD'));
        });

\t\tjQuery('input[name=\"oneway\"]').daterangepicker({
            \"startDate\": moment().add(0, 'day'),
            \"singleDatePicker\": true,
            \"autoApply\": true,
            \"minDate\": new Date(),
            \"locale\": {
                format: 'DD-MMM-YYYY'
            }
        }, function (start, end, label) {
            var formattedDate = start.format('DD-MMM-YYYY');
            jQuery('input[name=\"oneway\"]').val(formattedDate);
            console.log('New oneway date selected: ' + formattedDate);
        });
\t\t
\t\t\$(document).ready(function() {
    function initializeDatepicker(inputName, minDateInput, targetInput) {
        var minDate = minDateInput ? \$(minDateInput).val() : moment().add(0, 'day');
        
        jQuery(`input[name=\"\${inputName}\"]`).daterangepicker({
            \"startDate\": minDate,
            \"singleDatePicker\": true,
            \"autoApply\": true,
            \"minDate\": minDate,
            \"locale\": {
                format: 'DD-MMM-YYYY'
            }
        }, function(start, end, label) {
            var formattedDate = start.format('DD-MMM-YYYY');
            jQuery(`input[name=\"\${targetInput}\"]`).val(formattedDate);
        });
        
        // Set initial formatted date
        var initialDate = moment(minDate).format('DD-MMM-YYYY');
        jQuery(`input[name=\"\${targetInput}\"]`).val(initialDate);
    }
    
    initializeDatepicker(\"multicity1\", null, \"m-ddt1\");
    initializeDatepicker(\"multicity2\", \"input[name='multicity1']\", \"m-ddt2\");
    initializeDatepicker(\"multicity3\", \"input[name='multicity2']\", \"m-ddt3\");
    
    \$('body').on('focus', 'input[name=\"multicity1\"]', function() {
        initializeDatepicker(\"multicity1\", null, \"m-ddt1\");
    });
    
    \$('body').on('focus', 'input[name=\"multicity2\"]', function() {
        initializeDatepicker(\"multicity2\", \"input[name='multicity1']\", \"m-ddt2\");
    });
    
    \$('body').on('focus', 'input[name=\"multicity3\"]', function() {
        initializeDatepicker(\"multicity3\", \"input[name='multicity2']\", \"m-ddt3\");
    });
});

\t\t
\t});

\t// jQuery('.h-counter .minus').click(function () {
// jQuery('.h-counter .minus').click(function () {
\tjQuery('body').on('click', '.h-counter .minus', function () {
\t\tvar \$input = jQuery(this).parent().find('input');
\t\tvar count = parseInt(\$input.val()) - 1;
\t\tcount = count < 0 ? 0 : count;
\t\t\$input.val(count);
\t\t\$input.change();
\t\tvar num = parseInt(jQuery('#child').val());
\t\treturn false;
\t});
\tjQuery('body').on('click', '.h-counter .plus', function () {
\t\t// jQuery('.h-counter .plus').click(function () {
\t\tvar \$input = jQuery(this).parent().find('input');
\t\tif(parseInt(\$input.val())>5){
\t\t    return ;
\t\t    }
\t\t\$input.val(parseInt(\$input.val()) + 1);
\t\t\$input.change();
\t\treturn false;
\t});

\tjQuery(document).ready(function () {
    jQuery('#child, #children').val(0);
});

// Function to get total children per room
function getRoomChildCount(\$room) {
    return \$room.find('.c-counter .child').val() ? parseInt(\$room.find('.c-counter .child').val()) : 0;
}

// Handle minus button click
jQuery('body').on('click', '.c-counter .minus', function () {
    var \$input = jQuery(this).parent().find('input');
    var count = parseInt(\$input.val()) - 1;
    count = count < 0 ? 0 : count; // Ensure count doesn't go negative
    \$input.val(count);
    \$input.change();
});

// Handle plus button click (Limit set to 4 per room)
jQuery('body').on('click', '.c-counter .plus', function () {
    var \$input = jQuery(this).parent().find('input');
    var \$room = jQuery(this).closest('.hotel-options'); // Get the parent room
    var roomChildCount = getRoomChildCount(\$room); // Get child count for this room

    if (roomChildCount < 4) { // Apply limit per room (4 children max)
        \$input.val(roomChildCount + 1);
        \$input.change();
    }
});


\tjQuery('.t-p-count .minus').click(function () {

\t\tvar \$input = jQuery(this).parent().find('input');
\t\tvar count = parseInt(\$input.val()) - 1;
\t\tcount = count < 0 ? 0 : count;
\t\t\$input.val(count);
\t\t\$input.change();
\t\tvar num = parseInt(jQuery('#child').val());
\t\tvar pass_count = parseInt(jQuery('#adults').val()) + parseInt(jQuery('#children').val()) + parseInt(jQuery('#infants').val());
\t\tjQuery('.passengers-count').text(pass_count);
\t\treturn false;
\t});

\tjQuery('.t-p-count .plus').click(function () {
\t\tvar \$input = jQuery(this).parent().find('input');
\t\t\$input.val(parseInt(\$input.val()) + 1);
\t\t\$input.change();
\t\tvar pass_count = parseInt(jQuery('#adults').val()) + parseInt(jQuery('#children').val()) + parseInt(jQuery('#infants').val());
\t\tjQuery('.passengers-count').text(pass_count);
\t\treturn false;
\t});

\t

\tif (jQuery(window).width() <= 800) {
\t//\tjQuery(\"#pills-hotel\").appendTo(\"#hotelModal .modal-body\");
\t//\tjQuery(\"#pills-flight\").appendTo(\"#flightModal .modal-body\");
\t//\tjQuery(\"#pills-holiday\").appendTo(\"#holidayModal .modal-body\");
\t}

\tjQuery('#holidayModal, #hotelModal, #flightModal').on('shown.bs.modal', function () {
\t\tjQuery('header.header').addClass('modal-open');
\t});
\tjQuery('#holidayModal, #hotelModal, #flightModal').on('hidden.bs.modal', function () {
\t\tjQuery('header.header').removeClass('modal-open');
\t});

\tjQuery(' a[data-toggle=\"pill\"]').on('shown.bs.tab', function (e) {
\t\tconsole.log(\$(e.target).attr('area-value'));
\t\tvar key = \$(e.target).attr('area-value');
\t\tjQuery('input[name=triptype]').val(key);
\t});

\tjQuery('select[name=\"travel-class\"]').change(function () {
\t\tjQuery('input[name=cl1]').val(jQuery(this).val());
\t\tconsole.log(\$(this).val())
\t});

\tjQuery('select[name=\"p-airlines\"]').change(function () {
\t\tjQuery('input[name=airlines]').val(jQuery(this).val());
\t\tconsole.log(\$(this).val())
\t});

\tjQuery('.direct-flight-check input').change(function () {
\t\tif (\$(this).is(\":checked\")) {
\t\t\tjQuery('input[name=direct]').val('true');
\t\t}
\t\telse {
\t\t\tjQuery('input[name=direct]').val('false');
\t\t}
\t});

\tjQuery('select[name=\"departure-oneway\"]').change(function () {
\t\tvar dep = jQuery(this).val();
\t\tjQuery('input[name=o-from]').val(dep);
\t\tconsole.log(\$(this).val())
\t});

\tjQuery('select[name=\"arrival-oneway\"]').change(function () {
\t\tvar arrival = jQuery(this).val();
\t\tjQuery('input[name=o-to]').val(arrival);
\t\tconsole.log(\$(this).val())
\t});

\tjQuery('select[name=\"rt-dep\"]').change(function () {
\t\tvar dep = jQuery(this).val();
\t\tjQuery('input[name=rt-from]').val(dep);
\t\tconsole.log(\$(this).val())
\t});

\tjQuery('select[name=\"rt-arrival\"]').change(function () {
\t\tvar arrival = jQuery(this).val();
\t\tjQuery('input[name=rt-to]').val(arrival);
\t\tconsole.log(\$(this).val())
\t});

\tjQuery('select[name=\"mc-dep1\"]').change(function () {
\t\tvar arrival = jQuery(this).val();
\t\tjQuery('input[name=m-dep1]').val(arrival);
\t\tconsole.log(\$(this).val())
\t});

\t\$(document).ready(function() {
            var hiddenInput = document.querySelector(\"input[name='mc-arr1']\");
            var depInput = \$(\"input[name='mc-dep2']\");

            // Create a MutationObserver to detect changes to the hidden input's attributes
            var observer = new MutationObserver(function(mutationsList) {
                for (var mutation of mutationsList) {
                    if (mutation.type === 'attributes' && mutation.attributeName === 'value') {
                        // When the value attribute changes, update the other input value
                        var arrival = \$(hiddenInput).val();
                        depInput.val(arrival);
                    }
                }
            });

            // Configure the observer to watch for attribute changes
            observer.observe(hiddenInput, {
                attributes: true
            });

        });
\tjQuery('select[name=\"mc-dep2\"]').change(function () {
\t\tvar arrival = jQuery(this).val();
\t\tjQuery('input[name=m-dep2]').val(arrival);
\t\tconsole.log(\$(this).val())
\t});

\t

\tjQuery('select[name=\"mc-arr1\"]').change(function () {
\t\tvar arrival = jQuery(this).val();
\t\tjQuery('input[name=m-ret1]').val(arrival);
\t\tjQuery(\"select[name=mc-dep2]\").val(arrival).trigger(\"change\");
\t\tconsole.log(\$(this).val())
\t});
\tjQuery('select[name=\"mc-arr2\"]').change(function () {
\t\tvar arrival = jQuery(this).val();
\t\tjQuery('input[name=m-ret2]').val(arrival);
\t\tjQuery(\"select[name=mc-dep3]\").val(arrival).trigger(\"change\");
\t\tconsole.log(\$(this).val())
\t});


    \$(document).ready(function() {
            var hiddenInput = document.querySelector(\"input[name='mc-arr2']\");

            // Create a MutationObserver to detect changes to the hidden input's attributes
            var observer = new MutationObserver(function(mutationsList) {
                for (var mutation of mutationsList) {
                    if (mutation.type === 'attributes' && mutation.attributeName === 'value') {
                    
                        var arrival = \$(hiddenInput).val();
                        var depInput = \$(\"input[name='mc-dep3']\");
                        if (depInput.length) {
                            depInput.val(arrival);
                        }
                    }
                }
            });

            // Configure the observer to watch for attribute changes
            observer.observe(hiddenInput, {
                attributes: true
            });

            // Example function to change the value of the hidden input after 2 seconds
            setTimeout(function() {
                // Simulate changing the value of the hidden input
                \$(hiddenInput).val('newValue').trigger('change');
            }, 2000);
        });


\tjQuery(\".total-passengers\").click(function () {
\t\t
\t});

\tjQuery(function() {
\t  jQuery(\".total-passengers\").on(\"click\", function(e) {
\t    jQuery(this).next().toggleClass('show');
\t    e.stopPropagation()
\t  });
\t  jQuery(document).on(\"click\", function(e) {
\t    if (jQuery(e.target).is(\".total-passengers\") === false) {
\t      jQuery(\".t-p-count\").removeClass(\"show\");
\t    }
\t  });
\t});

\tjQuery(\".oneway_submit\").click(function () {

\t\tvar adults = jQuery('.adults').val();
\t\tvar children = jQuery('.children').val();
\t\tvar infants = jQuery('.infants').val();
\t\tvar cc1 = jQuery('input[name=cl1]').val();
\t\tvar triptype = jQuery('input[name=triptype]').val();
\t\tvar direct = jQuery('input[name=direct]').val();
\t\tvar airlines = jQuery('input[name=airlines]').val();
\t\tvar dep = jQuery('input[name=departure-oneway]').val();
\t\tvar arrival = jQuery('input[name=arrival-oneway]').val();
\t\tvar checkin = jQuery('input[name=\"oneway\"].oneway-d-date').val();
\t\tvar ref = jQuery('input[name=refundable]').val();

\t\tif( jQuery('select[name=\"departure-oneway\"]').val() == 'any' || jQuery('select[name=\"arrival-oneway\"]').val() == 'any' ){
\t\t\tif(jQuery('select[name=\"departure-oneway\"]').val() == 'any') {
\t\t\t\tjQuery('select[name=\"departure-oneway\"]').next('.select2-container').find('.select2-selection').addClass('field-error');
\t\t\t}
\t\t\telse {
\t\t\t\tjQuery('select[name=\"departure-oneway\"]').next('.select2-container').find('.select2-selection').removeClass('field-error');
\t\t\t}

\t\t\tif(jQuery('select[name=\"arrival-oneway\"]').val() == 'any') {
\t\t\t\tjQuery('select[name=\"arrival-oneway\"]').next('.select2-container').find('.select2-selection').addClass('field-error');
\t\t\t}
\t\t\telse {
\t\t\t\tjQuery('select[name=\"arrival-oneway\"]').next('.select2-container').find('.select2-selection').removeClass('field-error');
\t\t\t}
\t\t}
\t\telse {
\t\t\tsetTimeout(function () {

\t\t\t// window.open('https://booking.itlworld.com/Flight/search?dep1=' + dep + '&ret1=' + arrival + '&dtt1=' + checkin + '&cl1=' + cc1 + '&triptype=1&adult=' + adults + '&child=' + children + '&infant=0&direct=' + direct + '&key=ICT&langcode=EN&airlines=' + airlines + '&ref=false');
\t\t\t\twindow.open('https://booking.itlworld.com/Flight/search?dep1=' + dep + '&ret1=' + arrival + '&dtt1=' + checkin + '&cl1=' + cc1 + '&triptype=1&adult=' + adults + '&child=' + children + '&infant=' + infants + '&direct=' + direct + '&baggage=false&key=OW&airlines=' + airlines + '&ref='+ref+'&langcode=EN&curr=AED&ipc=false', '_blank')

\t\t\t}, 500);
\t\t}
\t});

\tjQuery(\".roundtrip_submit\").click(function (e) {
    e.preventDefault(); // Prevent form submission by default

    // Collect form data
    var r_adults = jQuery('.adults').val();
    var r_children = jQuery('.children').val();
    var r_infants = jQuery('.infants').val();
    var r_cc1 = jQuery('input[name=cl1]').val();
    var r_triptype = jQuery('input[name=triptype]').val();
    var r_direct = jQuery('input[name=direct]').val();
    var r_airlines = jQuery('input[name=airlines]').val();
    var r_dep = jQuery('input[name=rt-dep]').val();
    var r_arrival = jQuery('input[name=rt-arrival]').val();
    var r_dep_d_1 = jQuery('.checkin input[name=\"roundtrip-in\"]').val();
    var r_dep_d_2 = jQuery('.checkout input[name=\"roundtrip-out\"]').val();
    var ref = jQuery('input[name=refundable]').val();

    // Validate departure and arrival 'any' condition
    if (jQuery('select[name=\"rt-dep\"]').val() == 'any' || jQuery('select[name=\"rt-arrival\"]').val() == 'any') {
        if (jQuery('select[name=\"rt-dep\"]').val() == 'any') {
            jQuery('select[name=\"rt-dep\"]').next('.select2-container').find('.select2-selection').addClass('field-error');
        } else {
            jQuery('select[name=\"departure-oneway\"]').next('.select2-container').find('.select2-selection').removeClass('field-error');
        }

        if (jQuery('select[name=\"rt-arrival\"]').val() == 'any') {
            jQuery('select[name=\"rt-arrival\"]').next('.select2-container').find('.select2-selection').addClass('field-error');
        } else {
            jQuery('select[name=\"rt-arrival\"]').next('.select2-container').find('.select2-selection').removeClass('field-error');
        }

        return false; // Stop further execution if 'any' is selected
    }

    // Validate destination input field
    var arrivalDestination = jQuery('input[name=search-rt-arrival]').val().trim();
    if (!arrivalDestination) {
        jQuery('input[name=search-rt-arrival]').addClass('field-error');
        return false; // Stop further execution if destination is not entered
    } else {
        jQuery('input[name=search-rt-arrival]').removeClass('field-error');
    }

    // Proceed with redirection if all validation passes
    var finalURL = 'https://booking.itlworld.com/Flight/search?dep1=' + r_dep + '&ret1=' + r_arrival + '&dtt1=' + r_dep_d_1 + '&cl1=' + r_cc1 + '&dep2=' + r_arrival + '&ret2=' + r_dep + '&dtt2=' + r_dep_d_2 + '&cl2=' + r_cc1 + '&triptype=1&adult=' + r_adults + '&child=' + r_children + '&infant=' + r_infants + '&direct=' + r_direct + '&baggage=false&key=IRT&airlines=' + r_airlines + '&ref=' + ref + '&langcode=EN&curr=AED';

    // Redirect after 500ms delay (optional)
    setTimeout(function () {
        window.open(finalURL, '_blank');
    }, 500);
});



\t// jQuery('body').on('click', '.multicity-search', function(){
\tjQuery(document).on('click', '.multicity-search', function() {

\t\tvar m_adults = jQuery('.adults').val();
\t\tvar m_children = jQuery('.children').val();
\t\tvar m_infants = jQuery('.infants').val();
\t\tvar m_cc1 = jQuery('input[name=cl1]').val();
\t\tvar m_triptype = jQuery('input[name=triptype]').val();
\t\tvar m_direct = jQuery('input[name=direct]').val();
\t\tvar m_airlines = jQuery('input[name=airlines]').val();

\t\tvar m_dep1 = jQuery('input[name=mc-dep1]').val();
\t\tvar m_arrival1 = jQuery('input[name=mc-arr1]').val();
\t\tvar m_dep_d_1 = jQuery('input[name=\"multicity1\"]').val();

\t\tvar m_dep2 = jQuery('input[name=mc-dep2]').val();
\t\tvar m_arrival2 = jQuery('input[name=mc-arr2]').val();
\t\tvar m_dep_d_2 = jQuery('input[name=\"multicity2\"]').val();

\t\tvar m_dep3 = jQuery('input[name=mc-dep3]').val();
\t\tvar m_arrival3 = jQuery('input[name=mc-ret3]').val();
\t\tvar m_dep_d_3 = jQuery('input[name=\"mc-ddt3\"]').val();

\t\tvar ref = jQuery('input[name=refundable]').val();

\t\tif ((jQuery('input[name=\"mc-dep3\"]').val() != undefined) && (jQuery('input[name=\"mc-arr3\"]').val() != undefined) && (jQuery('input[name=\"multicity3\"]').val() != undefined)) {
\t\t\tvar mc3 = 'dep3='+ jQuery('input[name=\"mc-dep3\"]').val() +'&ret3='+ jQuery('input[name=\"mc-arr3\"]').val() +'&dtt3='+ jQuery('input[name=\"multicity3\"]').val();
\t\t}
\t\telse {
\t\t\tvar mc3 = \"\";
\t\t}

\t\tconsole.log(\"mc3\",mc3);

\t\tif( jQuery('select.mc-select').val() == 'any' ){
\t\t\tif(jQuery('select.mc-select').val() == 'any') {
\t\t\t\tjQuery('select.mc-select').next('.select2-container').find('.select2-selection').addClass('field-error');
\t\t\t}
\t\t\telse {
\t\t\t\tjQuery('select.mc-select').next('.select2-container').find('.select2-selection').removeClass('field-error');
\t\t\t}

\t\t\t// if(jQuery('select[name=\"mc-dep3\"]').val() == 'any') {
\t\t\t// \tjQuery('select[name=\"mc-dep3\"]').next('.select2-container').find('.select2-selection').addClass('field-error');
\t\t\t// }
\t\t\t// else {
\t\t\t// \tjQuery('select[name=\"mc-dep3\"]').next('.select2-container').find('.select2-selection').removeClass('field-error');
\t\t\t// }

\t\t\t// if(jQuery('select[name=\"mc-arr3\"]').val() == 'any') {
\t\t\t// \tjQuery('select[name=\"mc-arr3\"]').next('.select2-container').find('.select2-selection').addClass('field-error');
\t\t\t// }
\t\t\t// else {
\t\t\t// \tjQuery('select[name=\"mc-arr3\"]').next('.select2-container').find('.select2-selection').removeClass('field-error');
\t\t\t// }
\t\t}
\t\telse {

\t\t\tsetTimeout(function () {

\t\t\t\t// window.open('https://orgone.aosuat.com/flight/result?dep1=' + m_dep1 + '&ret1=' + m_arrival1 + '&dtt1=' + m_dep_d_1 + '&cl1=' + m_cc1 + '&dep2=' + m_dep2 + '&ret2=' + m_arrival2 + '&dtt2=' + m_dep_d_2 + '&cl2=' + m_cc1 + '&dep3=' + m_dep3 + '&ret3=' + m_arrival3 + '&dtt3=' + m_dep_d_3 + '&cl3=' + m_cc1 + '&triptype=' + m_triptype + '&adult=' + m_adults + '&child=' + m_children + '&infant=' + m_infants + '&direct=' + m_direct + '&key=IMC&langcode=EN&airlines=' + m_airlines + '&ref=false&agency=2206081006125414548');

\t\t\t\twindow.open('https://booking.itlworld.com/Flight/search?dep1=' + m_dep1 + '&ret1=' + m_arrival1 + '&dtt1=' + m_dep_d_1 + '&cl1=' + m_cc1 + '&dep2=' + m_dep2 + '&ret2=' + m_arrival2 + '&dtt2=' + m_dep_d_2 + '&cl2=' + m_cc1 + '&'+ mc3 +'&cl3=' + m_cc1 + '&triptype=1&adult=' + m_adults + '&child=' + m_children + '&infant=' + m_infants + '&direct=' + m_direct + '&baggage=false&key=MC&airlines=' + m_airlines + '&ref='+ref+'&langcode=EN&curr=AED', '_blank')

\t\t\t}, 500);
\t\t}
\t});


// hotel jquery

// For the check-in date
// For the check-in date
// For the check-in date
// For the check-in date
jQuery('input[name=\"h-checkin\"]').daterangepicker({
    \"startDate\": moment().add(0, 'day'),
    \"singleDatePicker\": true,
    \"autoUpdateInput\": true,
    \"autoApply\": true,
    \"linkedCalendars\": false,  // Disable linked calendars
    \"minDate\": moment().add(0, 'day'),
    \"locale\": {
        format: 'DD-MMM-YYYY'
    }
}, function (start) {
    var formattedCheckin = start.format('DD-MMM-YYYY');
    jQuery('input[name=\"hh-checkin\"]').val(formattedCheckin);
    
    // Automatically set checkout date to one day ahead of check-in
    var newCheckoutDate = moment(start).add(1, 'day');
    jQuery('input[name=\"h-checkout\"]').daterangepicker({
        \"startDate\": newCheckoutDate,
        \"singleDatePicker\": true,
        \"linkedCalendars\": false,  // Disable linked calendars
        \"autoUpdateInput\": true,
        \"autoApply\": true,
        \"minDate\": newCheckoutDate, // Ensures checkout can't be before check-in
        \"locale\": {
            format: 'DD-MMM-YYYY'
        }
    }, function (checkoutStart) {
        var formattedCheckout = checkoutStart.format('DD-MMM-YYYY');
        jQuery('input[name=\"hh-checkout\"]').val(formattedCheckout);
        
        // Calculate and update nights
        var checkinDate = moment(formattedCheckin, 'DD-MMM-YYYY');
        var checkoutDate = moment(formattedCheckout, 'DD-MMM-YYYY');
        var nights = checkoutDate.diff(checkinDate, 'days');
        
        // Ensure nights cannot be negative
        if (nights < 0) nights = 0;

        jQuery('span.selected-nights strong').text(nights);
    });

    // Default checkout to the new date
    jQuery('input[name=\"h-checkout\"]').val(newCheckoutDate.format('DD-MMM-YYYY'));
    jQuery('input[name=\"hh-checkout\"]').val(newCheckoutDate.format('DD-MMM-YYYY'));
});

// For the checkout date
jQuery('input[name=\"h-checkout\"]').daterangepicker({
    \"startDate\": moment().add(1, 'day'),
    \"singleDatePicker\": true,
    \"linkedCalendars\": false,  // Disable linked calendars
    \"autoUpdateInput\": true,
    \"autoApply\": true,
    \"minDate\": moment().add(1, 'day'),
    \"locale\": {
        format: 'DD-MMM-YYYY'
    }
}, function (start) {
    var formattedCheckout = start.format('DD-MMM-YYYY');
    jQuery('input[name=\"hh-checkout\"]').val(formattedCheckout);

    // Calculate and update nights
    var checkinDate = moment(jQuery('input[name=\"hh-checkin\"]').val(), 'DD-MMM-YYYY');
    var checkoutDate = moment(formattedCheckout, 'DD-MMM-YYYY');
    var nights = checkoutDate.diff(checkinDate, 'days');
    
    // Ensure nights cannot be negative
    if (nights < 0) nights = 0;

    jQuery('span.selected-nights strong').text(nights);
});


// For start date (Only)
jQuery('input[name=\"h-checkin\"]').on('change', function() {
    let checkinDate = moment(jQuery(this).val(), 'DD-MMM-YYYY');
    let checkoutDate = moment(jQuery('input[name=\"h-checkout\"]').val(), 'DD-MMM-YYYY');

    // If checkout date exists, calculate nights
    if (checkoutDate.isValid()) {
        let nights = checkoutDate.diff(checkinDate, 'days');

        // Ensure nights cannot be negative
        if (nights < 0) nights = 0;

        jQuery('span.selected-nights strong').text(nights);
    }
});





\t// jQuery('input[name=\"h-checkout\"]').daterangepicker({
\t// \t\"startDate\": moment().add(1, 'day'),
\t// \t// \"endDate\": moment().add(1, 'day'),
\t// \t\"singleDatePicker\": true,
\t// \t\"linkedCalendars\": false,
\t// \t\"autoUpdateInput\": true,
\t// \t\"autoApply\": true,
\t// }, function (start, end, label) {
\t// \tconsole.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
\t// \tjQuery('input[name=\"h-checkout\"]').val(start.format('DD-MMMM-YYYY'));
\t// \t// jQuery('input[name=\"h-checkout\"]').val(end.format('DD-MMMM-YYYY'));
\t// \t// \$start_date = start;
\t// \t// \$end_date = end;
\t// \t// \$datediff = \$end_date - \$start_date;

\t// \t// \$datediff = Math.round(\$datediff / (1000 * 3600 * 24)) - 1;

\t// \t// jQuery('span.selected-nights strong').text(\$datediff);

\t// \t// console.log(\$datediff);
\t// });

\t// jQuery('input[name=\"h-checkout\"]').daterangepicker({
\t// \t// \"startDate\": moment().add(0, 'day'),
\t// \t\"startDate\": moment().add(1, 'day'),
\t// \t\"linkedCalendars\": false,
\t// \t\"singleDatePicker\": true,
\t// \t\"autoUpdateInput\": false,
\t// \t\"autoApply\": true,
\t// }, function (start, end, label) {

\t// \t// \$('input[name=\"h-checkin\"]').val(start.format('DD-MMMM-YYYY'));
\t// \t\$('input[name=\"h-checkout\"]').val(start.format('DD-MMMM-YYYY'));
\t// \t// \$start_date = start;
\t// \t// \$end_date = end;
\t// \t// \$datediff = \$end_date - \$start_date;

\t// \t// \$datediff = Math.round(\$datediff / (1000 * 3600 * 24)) - 1;

\t// \t// jQuery('span.selected-nights strong').text(\$datediff);

\t// \tconsole.log(\$datediff);
\t// });

\tjQuery('select[name=\"hotel-destination\"]').change(function () {
\t\tvar des = jQuery(this).val();
\t\tjQuery('input[name=h-city-code]').val(des);
\t\tconsole.log(\$(this).val())
\t});
\t(function () {
\t\tvar ii = 2;
\t\tvar jj = 3;
\t\t//jQuery('.addmore_room').click(function () {
\t\t\t// \$('#rooms_list .hotel-options:first-child').clone().attr('hotel-id', ii).appendTo('#rooms_list');
\t\t\t//\$('#rooms_list').append('<div class=\"hotel-options hotel-' + ii + '\" hotel-id=\"' + ii + '\"> <input type=\"hidden\" name=\"room_no\" value=\"room' + ii + '\"> <input type=\"hidden\" name=\"adult_count\" value=\"1\"> <input type=\"hidden\" name=\"child_count\" value=\"1\"> <div class=\"hotel-rooms\"> Room ' + ii + ' </div> <div class=\"h-adults\"> Adults (12+) <div class=\"number h-counter\"> <span class=\"minus\"></span> <input type=\"text\" value=\"1\" class=\"adults\" id=\"adults\" autocomplete=\"off\"> <span class=\"plus\"></span> </div> </div> <div class=\"h-adults childrens\"> Child (0-11) <div class=\"number c-counter\"> <span class=\"minus\"></span> <input type=\"text\" value=\"1\" class=\"child\" id=\"child\" autocomplete=\"off\"> <span class=\"plus\"></span> </div> </div> <div class=\"children-wrap\"> <div class=\"h-adults childrens\"> Child 1 <div class=\"form-group form-select withicon\"> <select name=\"country\" class=\"form-control itlselect\"> <option value=\"any\">Under 1</option><option value=\"1\">1</option> <option value=\"2\">2</option> <option value=\"3\">3</option> <option value=\"4\">4</option> <option value=\"5\">5</option> <option value=\"6\">6</option> <option value=\"7\">7</option> <option value=\"8\">8</option> <option value=\"9\">9</option> <option value=\"10\">10</option> <option value=\"11\">11</option> </select> </div> </div> </div><div class=\"remove-city-wrap\"><button class=\"remove-room\"> <img src=\"/themes/SAN/assets/img/multicity.svg\"> </button></div> </div>');
\t\t\t//ii++;
\t\t//});

let maxRooms = 6;
let iii = 1;

jQuery('.addmore_room').click(function () {
    let roomCount = jQuery('#rooms_list .hotel-options').length + 1;
    if (roomCount <= maxRooms) {
        jQuery('#rooms_list').append(
            '<div class=\"hotel-options hotel-' + roomCount + '\" hotel-id=\"' + roomCount + '\">' +
            '<input type=\"hidden\" name=\"room_no\" value=\"room' + roomCount + '\">' +
            '<input type=\"hidden\" name=\"adult_count\" value=\"1\">' +
            '<input type=\"hidden\" name=\"child_count\" value=\"0\">' +
            '<div class=\"hotel-rooms\"> Room ' + roomCount + ' </div>' +
            '<div class=\"h-adults\"> Adults (6)' +
            '<div class=\"number h-counter\">' +
            '<span class=\"minus\"></span>' +
            '<input type=\"text\" value=\"1\" class=\"adults\" id=\"adults\" autocomplete=\"off\">' +
            '<span class=\"plus\"></span>' +
            '</div>' +
            '</div>' +
            '<div class=\"h-adults childrens\"> Child (0-4)' +
            '<div class=\"number c-counter\">' +
            '<span class=\"minus\"></span>' +
            '<input type=\"text\" value=\"0\" class=\"child\" id=\"child\" autocomplete=\"off\">' +
            '<span class=\"plus\"></span>' +
            '</div>' +
            '</div>' +
            '<div class=\"remove-city-wrap\"><button class=\"remove-room\">' +
            '<img src=\"/themes/SAN/assets/img/multicity.svg\">' +
            '</button></div>' +
            '</div>'
        );
    }

    // Disable the add button if max rooms are reached
    if (jQuery('#rooms_list .hotel-options').length >= maxRooms) {
        jQuery('.addmore_room').prop('disabled', true);
    }
});

jQuery('#rooms_list').on('click', '.remove-city-wrap .remove-room', function() {
    jQuery(this).parent().parent().remove();
    
    // Reorder room numbers
    jQuery('#rooms_list .hotel-options').each(function(index) {
        jQuery(this).find('.hotel-rooms').text('Room ' + (index + 1));
    });
    
    // Enable the add button if rooms are below max
    if (jQuery('#rooms_list .hotel-options').length < maxRooms) {
        jQuery('.addmore_room').prop('disabled', false);
    }
});




\t\tjQuery('.addmore-city').click(function() {
    if (jj == 3) {
        var tomorrow = moment().add(1, 'day').format('DD-MMM-YYYY');

        jQuery('.multicity-form').append(`
            <div class=\"row custom-search-input-2 single-multicity multicity3\" id=\"milticity-\${jj}\">
                <input type=\"hidden\" name=\"m-dep\${jj}\" value=\"\" data-title=\"Departure\">
                <input type=\"hidden\" name=\"m-ret\${jj}\" value=\"\" data-title=\"Arrival\">
                <input type=\"hidden\" name=\"m-ddt\${jj}\" value=\"\" data-title=\"Departure Date\">
                <div class=\"col-5 col-sm-4\">
                    <div class=\"form-groups\">
                        <input type=\"hidden\" class=\"airportsearch\" name=\"mc-dep\${jj}\" />
                        <input type=\"text\" class=\"search-airport-js search-airport searchinputc mcdep3 form-control\" 
                            placeholder=\"Origin\" name=\"search-mc-dep-gen\" autocomplete=\"off\" />
                        <div class=\"allairport-result\"></div>
                    </div>
                </div>
                <div class=\"col-5 col-sm-4 col-lg-4\">
                    <div class=\"form-groups\">
                        <input type=\"hidden\" class=\"airportsearch\" name=\"mc-arr\${jj}\" />
                        <input type=\"text\" class=\"search-airport-js search-airport searchinputc mcdest3 form-control\" 
                            placeholder=\"Destination\" name=\"search-mc-arr-gen\" autocomplete=\"off\" />
                        <div class=\"allairport-result\"></div>
                    </div>
                </div>
                <div class=\"col-10 col-sm-2 col-lg-2\">
                    <div class=\"form-groups form-select withicon\">
                        <div class=\"daterangeselect\">
                            <div class=\"checkout\">
                                <input type=\"text\" name=\"multicity\${jj}\" class=\"form-control multicity-date\" value=\"\${tomorrow}\" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-5 col-sm-2 col-lg-2\">
                    <div class=\"multicity-add-remove\" style=\"display: none;\">
                        <button class=\"remove-city\">
                            <img src=\"/themes/SAN/assets/img/multicity.svg\">
                        </button>
                        <button class=\"addmore-city\">
                            <img src=\"/themes/SAN/assets/img/add-multicity.svg\">
                        </button>
                    </div>
                </div>
            </div>
        `);

        setTimeout(function() {
            jQuery(`input[name=\"multicity\${jj}\"]`).daterangepicker({
                \"startDate\": moment().add(1, 'day'),
                \"singleDatePicker\": true,
                \"autoApply\": true,
                \"minDate\": moment().add(1, 'day'),
                \"locale\": {
                    format: 'DD-MMM-YYYY'
                }
            }, function(start, end, label) {
                jQuery(`input[name=\"m-ddt\${jj}\"]`).val(start.format('DD-MMM-YYYY'));
            });
        }, 100);

        jj++;
    }

    jQuery('.itlselect').select2();
});

\t\t\tjQuery(document).on('change', 'select[name=\"mc-arr3\"]', function() {
\t\t\t// jQuery('select[name=\"mc-arr3\"]').change(function () {
\t\t\t\tvar arrival = jQuery(this).val();
\t\t\t\tjQuery('input[name=m-ret3]').val(arrival);
\t\t\t\tconsole.log(\$(this).val())
\t\t\t});

\t\t\t// jQuery('select[name=\"mc-dep3\"]').change(function () {
\t\t\tjQuery(document).on('change', 'select[name=\"mc-dep3\"]', function() {
\t\t\t\tvar arrival = jQuery(this).val();
\t\t\t\tjQuery('input[name=m-dep3]').val(arrival);
\t\t\t\tconsole.log(\$(this).val())
\t\t\t});
\t\t\t

\t\t\t\tjQuery('.remove-city').click(function () {
\t\t\t\t\tjj = 3;
\t\t\t\t\tjQuery(this).parent().parent().parent().next().remove();
\t\t\t\t});


\t\t\t})();



jQuery(\".hotel_search\").click(function (e) {
    e.preventDefault(); // Prevent form submission and redirection

    var CityCode = jQuery('input[name=hotel-destination]').val().trim(); // Get value of destination
    var hotel_checkin = jQuery('input[name=hh-checkin]').val().trim();
    var hotel_checkout = jQuery('input[name=hh-checkout]').val().trim();
    var room1_adults = jQuery('.hotel-1 #adults').val().trim();
    var room1_child = jQuery('.hotel-1 #child').val().trim();
    var nationality = jQuery('input[name=nationality]').val().trim();

    // Validation for destination field
    if (!CityCode) {
        jQuery('input#search-destination').addClass('field-error'); // Highlight input if empty
        return false; // Stop further execution if validation fails
    } else {
        jQuery('input#search-destination').removeClass('field-error'); // Remove error class if field is filled
    }

    // Validation for other fields (optional)
    if (!hotel_checkin || !hotel_checkout) {
        alert('Please select check-in and check-out dates');
        return false; // Stop execution if check-in or check-out is missing
    }

    // Validation for room fields (optional)
    if (!room1_adults) {
        alert('Please select the number of adults for the first room');
        return false;
    }

    var room_nth = jQuery('#rooms_list .hotel-options');
    var roomParams = ''; // Initialize room parameters string
    var i;

    // Add room1 parameters to roomParams
    roomParams += '&room1=' + room1_adults + '-' + room1_child;

    // Loop through each additional room and generate parameters
    for (i = 2; i <= room_nth.length; ++i) {
        var room_adults = jQuery('.hotel-' + i + ' #adults').val();
        var room_child = jQuery('.hotel-' + i + ' #child').val();

        // Only append room parameters if adults are selected
        if (room_adults) {
            var al_rooms = 'room' + i + '=' + room_adults + '-' + room_child; // Room parameter format
            roomParams += '&' + al_rooms; // Append to roomParams string
        }
    }

    // If nationality is selected as 'any', show error
    if (jQuery('#nationality-list').val() == 'any') {
        jQuery('#nationality-list').addClass('field-error');
        return false;
    } else {
        jQuery('#nationality-list').removeClass('field-error');
    }

    // Construct the base URL with standard parameters (without room parameters)
    var base_url = 'https://booking.itlworld.com/hotel/result?CityCode=' + CityCode + '&nationality=' + nationality + '&checkinDate=' + hotel_checkin + '&checkoutDate=' + hotel_checkout + '&langcode=EN';

    // Append the room parameters at the end of the URL
    var final_url = base_url + roomParams;

    // After all validations pass, redirect to the desired URL
    setTimeout(function () {
        window.open(final_url, '_blank');
    }, 500);
});



\t\$(document).click(function(e) {

\t  // check that your clicked
\t  // element has no id=info

\t  if( e.target.id != 'info') {
\t    \$(\".dest-list\").hide();
\t  }
\t});

\tjQuery(document).ready(function() {
    setTimeout(function() {

        var today = new Date();
        var tomorrow = new Date(new Date().getTime() + 24 * 60 * 60 * 1000);
        var dd = today.getDate();
        var mm = today.getMonth() + 1; // January is 0!
        var yyyy = today.getFullYear();
        var tomday = tomorrow.getDate();
        var tommonth = tomorrow.getMonth() + 1;
        var tomyear = tomorrow.getFullYear();
        
        var months = [
            \"January\", \"February\", \"March\", \"April\", \"May\", \"June\", 
            \"July\", \"August\", \"September\", \"October\", \"November\", \"December\"
        ];
        
        if (dd < 10) { dd = '0' + dd }
        if (tomday < 10) { tomday = '0' + tomday }
        
        var formattedToday = dd + '-' + months[mm - 1] + '-' + yyyy;
        var formattedTomorrow = tomday + '-' + months[tommonth - 1] + '-' + tomyear;
        
        \$('input[name=h-checkin]').attr('value', formattedToday);
        \$('input[name=h-checkout]').attr('value', formattedTomorrow);
        \$('input[name=hh-checkin]').attr('value', formattedToday);
        \$('input[name=hh-checkout]').attr('value', formattedTomorrow);
        \$('.checkin input').attr('value', formattedToday);
        \$('.checkout input').attr('value', formattedTomorrow);
    }, 500);
});


   jQuery('.refundable-check input').change(function() {
\t    if (\$(this).is(\":checked\")) {
\t      \$('input[name=refundable]').attr('value', 'true');
\t    }
\t    else {
\t    \t\$('input[name=refundable]').attr('value', 'false');
\t    }
  \t});

   jQuery('.direct-flight-check input').change(function() {
\t    if (\$(this).is(\":checked\")) {
\t      \$('input[name=direct]').attr('value', 'true');
\t    }
\t    else {
\t    \t\$('input[name=direct]').attr('value', 'false');
\t    }
  \t});

if (jQuery(window).width() <= 800) {
\t\$(document).ready(function() {
    function showButton(tabId) {
        \$('#pills-flight .btn_search').hide();
        if (tabId === 'pills-roundtrip-tab') {
            \$('.roundtrip_submit').show();
        } else if (tabId === 'pills-oneway-tab') {
            \$('.oneway_submit').show();
        } else if (tabId === 'pills-multicity-tab') {
            \$('.multicity-search').show();
        }
    }

    \$('#pills-tab-child .nav-link').on('click', function() {
        showButton(\$(this).attr('id'));
    });

    // Show the button for the active tab on page load
    showButton(\$('#pills-tab-child .nav-link.active').attr('id'));
});
\t}

</script>", "/Applications/MAMP/htdocs/itl/themes/SAN/partials/site/searchform.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "framework" => 4, "for" => 465, "if" => 852, "partial" => 853);
        static $filters = array("escape" => 466, "page" => 838, "sort" => 855, "capitalize" => 875);
        static $functions = array("get" => 856);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'framework', 'for', 'if', 'partial'],
                ['escape', 'page', 'sort', 'capitalize'],
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
