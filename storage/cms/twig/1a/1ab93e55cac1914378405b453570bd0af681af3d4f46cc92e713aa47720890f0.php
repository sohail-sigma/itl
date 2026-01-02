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

/* /Applications/MAMP/htdocs/itl/themes/SAN/partials/site/aboutenquiryform.htm */
class __TwigTemplate_4b48e8dc7f6af5c43203871428607d49c27058e8ed0c844a5299a9a01426f933 extends \Twig\Template
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
        // line 2
        echo "
<style type=\"text/css\">
    .radio-button {
        float: left;
        margin: 0 5px 0 0;
        width: 48%;
        height: 55px;
        position: relative;
        line-height: 46px;
        text-align: center;
        background: #EFEFEF;
        box-shadow: none;
        border: 0;
        border-radius: 7px;
        overflow: hidden;
    }

    .radio-button label,
    .radio-button input {
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }

    .radio-button input[type=\"radio\"] {
        opacity: 0.01;
        z-index: 100;
    }

    .radio-button input[type=\"radio\"]:checked+label,
    .Checked+label {
        background: rgb(16, 40, 56);
        background: linear-gradient(180deg, rgba(16, 40, 56, 1) 0%, rgba(2, 73, 121, 1) 100%);
        color: #fff;
    }

    .radio-button label {
        padding: 5px;
        cursor: pointer;
        z-index: 90;
    }

    .radio-button label:hover {
        background: #DDD;
    }
    .meetings-events{
        display: none;
    }
</style>

<div id=\"sign-in-dialog\" class=\"zoom-anim-dialog\">
    <div class=\"modalbody\">
        <div class=\"small-dialog-header\">
            <h3><img src=\"";
        // line 58
        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/images/mail.svg"]);
        echo "\" class=\"img-fluid mail\" alt=\"\">Get In Touch</h3>
        </div>


        ";
        // line 62
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["message"] ?? null), 62, $this->source), "html", null, true);
        echo "
        ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 63
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 64
                echo "        <div data-control=\"flash-message\" class=\"flash-message fade ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 64, $this->source), "html", null, true);
                echo "\" data-interval=\"5\">
        </div>
        ";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 67
        echo "        <form data-request=\"onSubmitAboutForm\" data-request-validate data-request-flash class=\"form-str\"
            data-request-files=\"true\" data-request-success=\"document.getElementById('aboutform').reset(); \$.magnificPopup.close(); \$.magnificPopup.open({
                items: {     src: '#after-submit-popup'  },
                type: 'inline',
                showCloseBtn: true,
                callbacks: {
                    open: function () {
                        \$('#sign-in-dialog').append(\$('.mfp-close'))
                    },
                },
                midClick: true
            });\" id=\"aboutform\">

            <!-- \$.magnificPopup.open({ items: {     src: '#after-submit-popup'  }, type: 'inline'   }); -->




            <input type=\"hidden\" name=\"form\" value=\"popup\" />
            <div class=\"row form-group\">
                <div class=\"col\">
                    <label>I work in:</label><br>
                    <input type=\"checkbox\" id=\"transportation\" name=\"work_in[]\" value=\"Transportation\">
                    <label for=\"transportation\" class=\"checkboxes-label\"> Transportation</label><br>
                    <input type=\"checkbox\" id=\"accommodations\" name=\"work_in[]\" value=\"Accommodations\">
                    <label for=\"accommodations\" class=\"checkboxes-label\"> Accommodations</label><br>
                    <input type=\"checkbox\" id=\"meetingsevents\" name=\"work_in[]\" value=\"Meetings & events\">
                    <label for=\"meetingsevents\" class=\"checkboxes-label\"> Meetings & events</label><br>
                    <input type=\"checkbox\" id=\"Other\" name=\"work_in[]\" value=\"Other\">
                    <label for=\"Other\" class=\"checkboxes-label\"> Other</label><br>
                    <span data-validate-for=\"work_in\" class=\"text-danger pt-1 font-size-small\"></span>
                </div>
            </div>
            <div class=\"row form-group\">
                <div class=\"col\">
                    <label>I would like to speak with you on…</label><br>
                    <div class=\"d-flex justify-content-between\">
                        <label class=\"radio-button\">
                            <input type=\"radio\" id=\"speak_with\" name=\"speak_with\" value=\"Travel Management\" checked>
                            <label for=\"speak_with\">Travel Management</label>
                        </label>
                        <label class=\"radio-button\">
                            <input type=\"radio\" id=\"meetingsandevents\" name=\"speak_with\" value=\"Partnerships\">
                            <label for=\"meetingsandevents\">Partnerships</label>
                        </label>
                    </div>
                    <span data-validate-for=\"speak_with\" class=\"text-danger pt-1 font-size-small\"></span>
                </div>
            </div>

            <div class=\"sign-in-wrapper\">
                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label class=\"checkboxes-label\">First name*</label>
                        <input type=\"text\" name=\"first_name\" class=\"form-control\" placeholder=\"eg. Jhon\" value=\"\">
                        <span data-validate-for=\"first_name\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                    <div class=\"col\">
                        <label class=\"checkboxes-label\">Last name*</label>
                        <input type=\"text\" name=\"last_name\" class=\"form-control\" placeholder=\"eg. David\" value=\"\">
                        <span data-validate-for=\"last_name\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label class=\"checkboxes-label\">Business Email*</label>
                        <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\"
                            placeholder=\"eg. jhondavid@company.com\" value=\"\">
                        <span data-validate-for=\"email\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label class=\"checkboxes-label\">Company name*</label>
                        <input type=\"text\" class=\"form-control\" name=\"c_name\" id=\"c_name\"
                            placeholder=\"eg. Company name\">
                        <span data-validate-for=\"c_name\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label class=\"checkboxes-label\">Designation*</label>
                        <input type=\"text\" class=\"form-control\" name=\"designation\" id=\"designation\"
                            placeholder=\"eg. Procurement Manager\" value=\"\">
                        <span data-validate-for=\"designation\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label class=\"checkboxes-label\">Country*</label>
                        <select id=\"\" class=\"form-control address-country\" name=\"country\"></select>
                        <span data-validate-for=\"country\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label class=\"checkboxes-label\">City*</label>
                        <input type=\"text\" class=\"form-control\" name=\"city\" id=\"city\"
                            placeholder=\"City\" value=\"\">
                        <span data-validate-for=\"city\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label class=\"checkboxes-label\">Mobile Number*</label>
                        <input type=\"number\" class=\"form-control phone\" name=\"phone\" id=\"\" placeholder=\"eg. 55333666\" value=\"\" onKeyDown=\"if(this.value.length==13 && event.keyCode!=8) return false;\">
                        <span data-validate-for=\"phone\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group meetings-events\">
                    <div class=\"col\">
                        <label>I am a supplier of… *</label><br>

                        <input type=\"checkbox\" name=\"supplier[]\" value=\"Air Travel\">
                        <label class=\"checkboxes-label\"> Air Travel</label><br>

                        <input type=\"checkbox\" name=\"supplier[]\" value=\"Ground\">
                        <label class=\"checkboxes-label\"> Ground</label><br>

                        <input type=\"checkbox\" name=\"supplier[]\" value=\"Events Technology\">
                        <label class=\"checkboxes-label\"> Events Technology</label><br>

                        <input type=\"checkbox\" name=\"supplier[]\" value=\"Hotel/Venue/Accommodation\">
                        <label class=\"checkboxes-label\"> Hotel / Venue / Accommodation</label><br>

                        <input type=\"checkbox\" name=\"supplier[]\" value=\"Convention Visitor Bureau\">
                        <label class=\"checkboxes-label\"> Convention Visitor Bureau</label><br>

                        <input type=\"checkbox\" name=\"supplier[]\" value=\"Destination Management Company\">
                        <label class=\"checkboxes-label\"> Destination Management Company</label><br>

                        <input type=\"checkbox\" name=\"supplier[]\" value=\"Other\">
                        <label class=\"checkboxes-label\"> Other</label><br>
                        <span data-validate-for=\"supplier\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group travel-management\">
                    <div class=\"col\">
                        <label>I am a supplier of… *</label><br>
                        <input type=\"checkbox\" name=\"supplier[]\" value=\"Air Travel\">
                        <label class=\"checkboxes-label\"> Air Travel</label><br>

                        <input type=\"checkbox\" name=\"supplier[]\" value=\"Ground\">
                        <label class=\"checkboxes-label\"> Ground</label><br>

                        <input type=\"checkbox\" name=\"supplier[]\" value=\"Rail\">
                        <label class=\"checkboxes-label\"> Rail</label><br>

                        <input type=\"checkbox\" name=\"supplier[]\" value=\"Hotel/Venue/Accommodation\">
                        <label class=\"checkboxes-label\"> Hotel / Venue / Accommodation</label><br>

                        <input type=\"checkbox\" name=\"supplier[]\" value=\"Online Travel Agency/ GDS\">
                        <label class=\"checkboxes-label\"> Online Travel Agency / GDS</label><br>

                        <input type=\"checkbox\" name=\"supplier[]\" value=\"Other\">
                        <label class=\"checkboxes-label\"> Other</label><br>
                        <span data-validate-for=\"supplier\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group travel-management\">
                    <div class=\"col\">
                        <label>If a hotel, please provide your two-letter GDS code: </label>
                        <input type=\"text\" class=\"form-control\" name=\"gds_code\" id=\"gds_code\" placeholder=\"eg. GDS code\" value=\"\">
                        <span data-validate-for=\"gds_code\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group travel-management\">
                    <div class=\"col\">
                        <label>Are your services bookable via GDS?</label><br>
                        <input type=\"radio\" name=\"bookable_gds\" id=\"bookable_gds\" value=\"Yes\">
                        <label class=\"checkboxes-label\"> Yes</label><br>
                        <input type=\"radio\" name=\"bookable_gds\" id=\"bookable_gds\" value=\"No\">
                        <label class=\"checkboxes-label\"> No</label><br>
                        <span data-validate-for=\"bookable_gds\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>

                <div class=\"row form-group meetings-events\">
                    <div class=\"col\">
                        <label>Are you a certified diverse vendor?</label><br>
                        <input type=\"radio\" name=\"diverse_vendor\" id=\"diverse_vendor\" value=\"Yes\">
                        <label class=\"checkboxes-label\"> Yes</label><br>
                        <input type=\"radio\" name=\"diverse_vendor\" id=\"diverse_vendor\" value=\"No\">
                        <label class=\"checkboxes-label\"> No</label><br>
                        <span data-validate-for=\"diverse_vendor\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>

                <div class=\"clearfix add_bottom_15\">
                    <div class=\"checkboxes float-left\">
                        <label class=\"container_check checkboxes-label\">Subscribe for our latest updates
                            <input type=\"checkbox\" name=\"newsletter\" value=\"yes\">
                            <span class=\"checkmark\"></span>
                        </label>
                    </div>

                </div>
                <p>By submitting your information, you’re agreeing that ITL World can use this information to tell you
                    more about ITL World and selected third party products and services by email, telephone and SMS. We
                    process all information we receive in accordance with our <a href=\"https://itlworld.com/privacy-policy\" target=\"_blank\">Privacy Policy</a>.</p>



                <div class=\"text-center\">
                    <button data-attach-loading type=\"submit\" class=\"btn_1 full-width\"><img
                            src=\"/themes/SAN/assets/img/send-arrow.svg\"> Submit</button>
                </div>

            </div>
        </form>
    </div>

</div>


<script>
    \$('input[type=radio][name=speak_with]').change(function() {
    if (this.value == 'Travel Management') {
        \$('.travel-management').show();
        \$('.meetings-events').hide();
        \$('#diverse_vendor').prop('checked', false);
        
    }
    else if (this.value == 'Meetings & Events') {
        \$('.travel-management').hide();
        \$('.meetings-events').show();
        \$('#bookable_gds').prop('checked', false);
        \$('#gds_code').val(\"\");
    }
});
</script>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/itl/themes/SAN/partials/site/aboutenquiryform.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 67,  122 => 64,  119 => 63,  115 => 62,  108 => 58,  50 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% framework extras %}

<style type=\"text/css\">
    .radio-button {
        float: left;
        margin: 0 5px 0 0;
        width: 48%;
        height: 55px;
        position: relative;
        line-height: 46px;
        text-align: center;
        background: #EFEFEF;
        box-shadow: none;
        border: 0;
        border-radius: 7px;
        overflow: hidden;
    }

    .radio-button label,
    .radio-button input {
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }

    .radio-button input[type=\"radio\"] {
        opacity: 0.01;
        z-index: 100;
    }

    .radio-button input[type=\"radio\"]:checked+label,
    .Checked+label {
        background: rgb(16, 40, 56);
        background: linear-gradient(180deg, rgba(16, 40, 56, 1) 0%, rgba(2, 73, 121, 1) 100%);
        color: #fff;
    }

    .radio-button label {
        padding: 5px;
        cursor: pointer;
        z-index: 90;
    }

    .radio-button label:hover {
        background: #DDD;
    }
    .meetings-events{
        display: none;
    }
</style>

<div id=\"sign-in-dialog\" class=\"zoom-anim-dialog\">
    <div class=\"modalbody\">
        <div class=\"small-dialog-header\">
            <h3><img src=\"{{'assets/images/mail.svg'|theme }}\" class=\"img-fluid mail\" alt=\"\">Get In Touch</h3>
        </div>


        {{ message }}
        {% flash %}
        <div data-control=\"flash-message\" class=\"flash-message fade {{ type }}\" data-interval=\"5\">
        </div>
        {% endflash %}
        <form data-request=\"onSubmitAboutForm\" data-request-validate data-request-flash class=\"form-str\"
            data-request-files=\"true\" data-request-success=\"document.getElementById('aboutform').reset(); \$.magnificPopup.close(); \$.magnificPopup.open({
                items: {     src: '#after-submit-popup'  },
                type: 'inline',
                showCloseBtn: true,
                callbacks: {
                    open: function () {
                        \$('#sign-in-dialog').append(\$('.mfp-close'))
                    },
                },
                midClick: true
            });\" id=\"aboutform\">

            <!-- \$.magnificPopup.open({ items: {     src: '#after-submit-popup'  }, type: 'inline'   }); -->




            <input type=\"hidden\" name=\"form\" value=\"popup\" />
            <div class=\"row form-group\">
                <div class=\"col\">
                    <label>I work in:</label><br>
                    <input type=\"checkbox\" id=\"transportation\" name=\"work_in[]\" value=\"Transportation\">
                    <label for=\"transportation\" class=\"checkboxes-label\"> Transportation</label><br>
                    <input type=\"checkbox\" id=\"accommodations\" name=\"work_in[]\" value=\"Accommodations\">
                    <label for=\"accommodations\" class=\"checkboxes-label\"> Accommodations</label><br>
                    <input type=\"checkbox\" id=\"meetingsevents\" name=\"work_in[]\" value=\"Meetings & events\">
                    <label for=\"meetingsevents\" class=\"checkboxes-label\"> Meetings & events</label><br>
                    <input type=\"checkbox\" id=\"Other\" name=\"work_in[]\" value=\"Other\">
                    <label for=\"Other\" class=\"checkboxes-label\"> Other</label><br>
                    <span data-validate-for=\"work_in\" class=\"text-danger pt-1 font-size-small\"></span>
                </div>
            </div>
            <div class=\"row form-group\">
                <div class=\"col\">
                    <label>I would like to speak with you on…</label><br>
                    <div class=\"d-flex justify-content-between\">
                        <label class=\"radio-button\">
                            <input type=\"radio\" id=\"speak_with\" name=\"speak_with\" value=\"Travel Management\" checked>
                            <label for=\"speak_with\">Travel Management</label>
                        </label>
                        <label class=\"radio-button\">
                            <input type=\"radio\" id=\"meetingsandevents\" name=\"speak_with\" value=\"Partnerships\">
                            <label for=\"meetingsandevents\">Partnerships</label>
                        </label>
                    </div>
                    <span data-validate-for=\"speak_with\" class=\"text-danger pt-1 font-size-small\"></span>
                </div>
            </div>

            <div class=\"sign-in-wrapper\">
                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label class=\"checkboxes-label\">First name*</label>
                        <input type=\"text\" name=\"first_name\" class=\"form-control\" placeholder=\"eg. Jhon\" value=\"\">
                        <span data-validate-for=\"first_name\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                    <div class=\"col\">
                        <label class=\"checkboxes-label\">Last name*</label>
                        <input type=\"text\" name=\"last_name\" class=\"form-control\" placeholder=\"eg. David\" value=\"\">
                        <span data-validate-for=\"last_name\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label class=\"checkboxes-label\">Business Email*</label>
                        <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\"
                            placeholder=\"eg. jhondavid@company.com\" value=\"\">
                        <span data-validate-for=\"email\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label class=\"checkboxes-label\">Company name*</label>
                        <input type=\"text\" class=\"form-control\" name=\"c_name\" id=\"c_name\"
                            placeholder=\"eg. Company name\">
                        <span data-validate-for=\"c_name\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label class=\"checkboxes-label\">Designation*</label>
                        <input type=\"text\" class=\"form-control\" name=\"designation\" id=\"designation\"
                            placeholder=\"eg. Procurement Manager\" value=\"\">
                        <span data-validate-for=\"designation\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label class=\"checkboxes-label\">Country*</label>
                        <select id=\"\" class=\"form-control address-country\" name=\"country\"></select>
                        <span data-validate-for=\"country\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label class=\"checkboxes-label\">City*</label>
                        <input type=\"text\" class=\"form-control\" name=\"city\" id=\"city\"
                            placeholder=\"City\" value=\"\">
                        <span data-validate-for=\"city\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label class=\"checkboxes-label\">Mobile Number*</label>
                        <input type=\"number\" class=\"form-control phone\" name=\"phone\" id=\"\" placeholder=\"eg. 55333666\" value=\"\" onKeyDown=\"if(this.value.length==13 && event.keyCode!=8) return false;\">
                        <span data-validate-for=\"phone\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group meetings-events\">
                    <div class=\"col\">
                        <label>I am a supplier of… *</label><br>

                        <input type=\"checkbox\" name=\"supplier[]\" value=\"Air Travel\">
                        <label class=\"checkboxes-label\"> Air Travel</label><br>

                        <input type=\"checkbox\" name=\"supplier[]\" value=\"Ground\">
                        <label class=\"checkboxes-label\"> Ground</label><br>

                        <input type=\"checkbox\" name=\"supplier[]\" value=\"Events Technology\">
                        <label class=\"checkboxes-label\"> Events Technology</label><br>

                        <input type=\"checkbox\" name=\"supplier[]\" value=\"Hotel/Venue/Accommodation\">
                        <label class=\"checkboxes-label\"> Hotel / Venue / Accommodation</label><br>

                        <input type=\"checkbox\" name=\"supplier[]\" value=\"Convention Visitor Bureau\">
                        <label class=\"checkboxes-label\"> Convention Visitor Bureau</label><br>

                        <input type=\"checkbox\" name=\"supplier[]\" value=\"Destination Management Company\">
                        <label class=\"checkboxes-label\"> Destination Management Company</label><br>

                        <input type=\"checkbox\" name=\"supplier[]\" value=\"Other\">
                        <label class=\"checkboxes-label\"> Other</label><br>
                        <span data-validate-for=\"supplier\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group travel-management\">
                    <div class=\"col\">
                        <label>I am a supplier of… *</label><br>
                        <input type=\"checkbox\" name=\"supplier[]\" value=\"Air Travel\">
                        <label class=\"checkboxes-label\"> Air Travel</label><br>

                        <input type=\"checkbox\" name=\"supplier[]\" value=\"Ground\">
                        <label class=\"checkboxes-label\"> Ground</label><br>

                        <input type=\"checkbox\" name=\"supplier[]\" value=\"Rail\">
                        <label class=\"checkboxes-label\"> Rail</label><br>

                        <input type=\"checkbox\" name=\"supplier[]\" value=\"Hotel/Venue/Accommodation\">
                        <label class=\"checkboxes-label\"> Hotel / Venue / Accommodation</label><br>

                        <input type=\"checkbox\" name=\"supplier[]\" value=\"Online Travel Agency/ GDS\">
                        <label class=\"checkboxes-label\"> Online Travel Agency / GDS</label><br>

                        <input type=\"checkbox\" name=\"supplier[]\" value=\"Other\">
                        <label class=\"checkboxes-label\"> Other</label><br>
                        <span data-validate-for=\"supplier\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group travel-management\">
                    <div class=\"col\">
                        <label>If a hotel, please provide your two-letter GDS code: </label>
                        <input type=\"text\" class=\"form-control\" name=\"gds_code\" id=\"gds_code\" placeholder=\"eg. GDS code\" value=\"\">
                        <span data-validate-for=\"gds_code\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group travel-management\">
                    <div class=\"col\">
                        <label>Are your services bookable via GDS?</label><br>
                        <input type=\"radio\" name=\"bookable_gds\" id=\"bookable_gds\" value=\"Yes\">
                        <label class=\"checkboxes-label\"> Yes</label><br>
                        <input type=\"radio\" name=\"bookable_gds\" id=\"bookable_gds\" value=\"No\">
                        <label class=\"checkboxes-label\"> No</label><br>
                        <span data-validate-for=\"bookable_gds\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>

                <div class=\"row form-group meetings-events\">
                    <div class=\"col\">
                        <label>Are you a certified diverse vendor?</label><br>
                        <input type=\"radio\" name=\"diverse_vendor\" id=\"diverse_vendor\" value=\"Yes\">
                        <label class=\"checkboxes-label\"> Yes</label><br>
                        <input type=\"radio\" name=\"diverse_vendor\" id=\"diverse_vendor\" value=\"No\">
                        <label class=\"checkboxes-label\"> No</label><br>
                        <span data-validate-for=\"diverse_vendor\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>

                <div class=\"clearfix add_bottom_15\">
                    <div class=\"checkboxes float-left\">
                        <label class=\"container_check checkboxes-label\">Subscribe for our latest updates
                            <input type=\"checkbox\" name=\"newsletter\" value=\"yes\">
                            <span class=\"checkmark\"></span>
                        </label>
                    </div>

                </div>
                <p>By submitting your information, you’re agreeing that ITL World can use this information to tell you
                    more about ITL World and selected third party products and services by email, telephone and SMS. We
                    process all information we receive in accordance with our <a href=\"https://itlworld.com/privacy-policy\" target=\"_blank\">Privacy Policy</a>.</p>



                <div class=\"text-center\">
                    <button data-attach-loading type=\"submit\" class=\"btn_1 full-width\"><img
                            src=\"/themes/SAN/assets/img/send-arrow.svg\"> Submit</button>
                </div>

            </div>
        </form>
    </div>

</div>


<script>
    \$('input[type=radio][name=speak_with]').change(function() {
    if (this.value == 'Travel Management') {
        \$('.travel-management').show();
        \$('.meetings-events').hide();
        \$('#diverse_vendor').prop('checked', false);
        
    }
    else if (this.value == 'Meetings & Events') {
        \$('.travel-management').hide();
        \$('.meetings-events').show();
        \$('#bookable_gds').prop('checked', false);
        \$('#gds_code').val(\"\");
    }
});
</script>", "/Applications/MAMP/htdocs/itl/themes/SAN/partials/site/aboutenquiryform.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("framework" => 1, "flash" => 63);
        static $filters = array("theme" => 58, "escape" => 62);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['framework', 'flash'],
                ['theme', 'escape'],
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
