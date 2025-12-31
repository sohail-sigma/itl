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

/* /Applications/MAMP/htdocs/itl/themes/SAN/partials/site/searchenquiryform.htm */
class __TwigTemplate_d1c4318f899f87f22e61378ee941b657d8ee147b7e3e3c947c3a03383dc0f90b extends \Twig\Template
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
";
        // line 3
        $context["packages"] = twig_get_attribute($this->env, $this->source, ($context["packageList"] ?? null), "records", [], "any", false, false, true, 3);
        // line 4
        $context["experiences"] = twig_get_attribute($this->env, $this->source, ($context["experienceList"] ?? null), "records", [], "any", false, false, true, 4);
        // line 5
        echo "<div id=\"sign-in-dialog\" class=\"zoom-anim-dialog\">
    <div class=\"small-dialog-header\">
        <h3><img src=\"";
        // line 7
        echo call_user_func_array($this->env->getFilter('theme')->getCallable(), ["assets/images/mail.svg"]);
        echo "\" class=\"img-fluid mail\" alt=\"\">Get In Touch</h3>
    </div>
    <div class=\"modalbody\">
        <div class=\"modelbanner\">
            <img id=\"p-image\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 11), "banner", [], "any", false, false, true, 11), "path", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "\" alt=\"\">
            <h5 id=\"p-title\">";
        // line 12
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 12), "title", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "</h5>
        </div>
        ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 14
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 15
                echo "        <div data-control=\"flash-message\" class=\"flash-message fade ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 15, $this->source), "html", null, true);
                echo "\" data-interval=\"5\">
            ";
                // line 16
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["message"] ?? null), 16, $this->source), "html", null, true);
                echo "
        </div>
        ";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 19
        echo "
    <form data-request=\"onSubmitEnquiryForm\" data-request-validate data-request-flash class=\"form-str\"
            data-request-files=\"true\" data-request-success=\"document.getElementById('careesform').reset(); \$.magnificPopup.close(); \$.magnificPopup.close(); \$.magnificPopup.open({
                items: {     src: '#after-submit-popup'  },
                type: 'inline',
                showCloseBtn: true,
                callbacks: {
                    open: function () {
                        \$('#sign-in-dialog').append(\$('.mfp-close'))
                    },
                },
                midClick: true
            });\" id=\"careesform\">
            <input type=\"hidden\" name=\"form\" value=\"popup\" />
            <input type=\"hidden\" name=\"pid\" id=\"pid\" />
            <!-- <input type=\"hidden\" name=\"pacage\" id=\"pacage\" /> -->
            <div class=\"row form-group\">
                <div class=\"col\">
                    <label>Your enquiry is about</label>
                    <input type=\"text\" name=\"pacage\" id=\"pacage\" class=\"form-control\" readonly>
                    <!-- <div class=\"popup-select\">
                        <select class=\"custom-select\" name=\"pacage\" id=\"pacage\">
                            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["packages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["package"]) {
            // line 42
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["package"], "title", [], "any", false, false, true, 42) != "")) {
                // line 43
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["package"], "title", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["package"], "title", [], "any", false, false, true, 43) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 43), "title", [], "any", false, false, true, 43))) {
                    // line 44
                    echo "                                selected=\"selected\" ";
                }
                echo ">
                                ";
                // line 45
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["package"], "title", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
                echo "</option>
                            ";
            }
            // line 47
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['package'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                        </select>
                    </div> -->

                    <span data-validate-for=\"pacage\" class=\"text-danger pt-1 font-size-small\"></span>
                </div>
            </div>
            <div class=\"row form-group\">
                <div class=\"col\">
                    <label>Experience</label>
                    <input type=\"text\" name=\"experiences\" id=\"experiences\" class=\"form-control\" readonly>
                    <!-- <select class=\"custom-select\" name=\"experiences\" id=\"experiences\">
                        ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["experiences"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["experience"]) {
            // line 60
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["experience"], "title", [], "any", false, false, true, 60) != "")) {
                // line 61
                echo "                        <option value=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["experience"], "title", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["experience"], "title", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
                echo "</option>
                        ";
            }
            // line 63
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['experience'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "
                        ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["experiences"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["experience"]) {
            // line 66
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["experience"], "title", [], "any", false, false, true, 66) != "")) {
                // line 67
                echo "                        <option value=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["experience"], "title", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
                echo "\" ";
                if ((($context["dslug"] ?? null) == twig_get_attribute($this->env, $this->source, $context["experience"], "slug", [], "any", false, false, true, 67))) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["experience"], "title", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
                echo "</option>
                        ";
            }
            // line 69
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['experience'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "
                    </select> -->
                    <span data-validate-for=\"experiences\" class=\"text-danger pt-1 font-size-small\"></span>
                </div>
            </div>

            <div class=\"sign-in-wrapper\">
                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label>First name*</label>
                        <input type=\"text\" name=\"first_name\" class=\"form-control\" placeholder=\"eg. Jhon\" value=\"\">
                        <span data-validate-for=\"first_name\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                    <div class=\"col\">
                        <label>Last name*</label>
                        <input type=\"text\" name=\"last_name\" class=\"form-control\" placeholder=\"eg. David\" value=\"\">
                        <span data-validate-for=\"last_name\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label>Email*</label>
                        <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\"
                            placeholder=\"eg. jhondavid@company.com\" value=\"\">
                        <span data-validate-for=\"email\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label>Mobile Number*</label>
                        <input type=\"number\" class=\"form-control phone\" name=\"phone\" id=\"\" placeholder=\"eg. 55333666\" value=\"\" onKeyDown=\"if(this.value.length==13 && event.keyCode!=8) return false;\">
                        <!-- <input type=\"tel\" class=\"form-control phone\" name=\"phone\" id=\"\" placeholder=\"eg. +971 55 333 666\"> -->
                        <span data-validate-for=\"phone\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label>Country</label>
                        <select id=\"address-country\" class=\"form-control\" name=\"country\" placeholder=\"eg. UAE\" ></select>
                        <span data-validate-for=\"Country\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label>Nationality</label>
                        <select id=\"\" class=\"form-control nationality\" name=\"nationality\" placeholder=\"eg. UAE\" ></select>
                        <span data-validate-for=\"nationality\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label class=\"checkboxes-label\">City*</label>
                        <input type=\"text\" class=\"form-control\" name=\"city\" id=\"city\" placeholder=\"City\" value=\"\" required>
                        <span data-validate-for=\"city\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>

                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label>Number of Adults*</label>
                        <div class=\"popup-select\">
                            <select class=\"custom-select\" name=\"no_adults\" id=\"no_adults\">
                                <option value=\"\">eg. 2</option>
                                <option value=\"1\">1</option>
                                <option value=\"2\">2</option>
                                <option value=\"3\">3</option>
                                <option value=\"4\">4</option>
                                <option value=\"5\">5</option>
                                <option value=\"6\">6</option>
                                <option value=\"7\">7</option>
                                <option value=\"8\">8</option>
                                <option value=\"9\">9</option>
                                <option value=\"9+\">9+</option>
                            </select>
                        </div>

                        <span data-validate-for=\"no_adults\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                    <div class=\"col\">
                        <label>Number of Children</label>
                        <div class=\"popup-select\">
                            <select class=\"custom-select\" name=\"no_children\" id=\"no_children\">
                                <option value=\"0\">eg. 2</option>
                                <option value=\"1\">1</option>
                                <option value=\"2\">2</option>
                                <option value=\"3\">3</option>
                                <option value=\"4\">4</option>
                                <option value=\"5\">5</option>
                                <option value=\"6\">6</option>
                                <option value=\"7\">7</option>
                                <option value=\"8\">8</option>
                                <option value=\"9\">9</option>
                                <option value=\"9+\">9+</option>
                            </select>
                        </div>
                        <span data-validate-for=\"no_children\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label>Departure From*</label>
                        <input type=\"text\" class=\"form-control\" name=\"departure_from\" placeholder=\"eg. Dubai\" value=\"\">
                        <span data-validate-for=\"departure_from\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label>Departure Date?*</label>
                        <input type=\"date\" class=\"form-control\" name=\"when_start\" placeholder=\"eg. Select Month\"
                            value=\"\">
                        <span data-validate-for=\"when_start\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                    <div class=\"col\">
                        <label>Number of Days?*</label>
                        <input type=\"number\" class=\"form-control\" name=\"how_long\" min='1' placeholder=\"eg. Select Duration\" required>
                        <span data-validate-for=\"how_long\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>

                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label>Remarks/Comments</label>
                        <textarea class=\"form-control\" name=\"remarks_comments\" row=\"6\"></textarea>
                        <span data-validate-for=\"remarks_comments\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>

                <div class=\"clearfix add_bottom_15\">
                    <div class=\"checkboxes float-left\">
                        <label class=\"container_check\">Subscribe for our latest updates
                            <input type=\"checkbox\" name=\"newsletter\">
                            <span class=\"checkmark\"></span>
                        </label>
                    </div>

                </div>
                <p>By Continuing with this,
                    You have read and agreed to the terms of
                    ITL World  <a href=\"https://itlworld.com/privacy-policy\" target=\"_blank\">Privacy Policy.</a></p>



                <div class=\"text-center\"><button data-attach-loading type=\"submit\" class=\"btn_1 full-width\"><img
                            src=\"/themes/SAN/assets/img/send-arrow.svg\"> Submit</button></div>

            </div>
        </form>
    </div>

</div>
<script>
    function showSuccessMessage() {
        var toasterMessage = \$('<div class=\"flash-message show\">Form submitted successfully!</div>');
        \$('body').append(toasterMessage);

        // Hide toaster after 5 seconds
        setTimeout(function() {
            toasterMessage.fadeOut(function() {
                \$(this).remove(); // Remove from DOM after fading out
            });
        }, 5000);
    }

    function submitFormSuccess() {
        // Show toaster message
        showSuccessMessage();

        // Reset the form and close the popups
        document.getElementById('careesform').reset();
        \$.magnificPopup.close();

        // Optionally, open another popup or display a success message here
        \$.magnificPopup.open({
            items: { src: '#after-submit-popup' },
            type: 'inline',
            showCloseBtn: true,
            callbacks: {
                open: function () {
                    \$('#sign-in-dialog').append(\$('.mfp-close'))
                }
            },
            midClick: true
        });
    }

    \$(document).ready(function() {
        
        // Form validation before submitting
        \$('#careesform').on('submit', function(event) {
            event.preventDefault();  // Prevent the default form submission

            var isValid = true;

            // Clear previous error messages
            \$('.text-danger').text('');

            // Validate required fields
            if (\$('input[name=\"first_name\"]').val().trim() === '') {
                isValid = false;
                \$('input[name=\"first_name\"]').siblings('.text-danger').text('First name is required.');
            }

            if (\$('input[name=\"last_name\"]').val().trim() === '') {
                isValid = false;
                \$('input[name=\"last_name\"]').siblings('.text-danger').text('Last name is required.');
            }

            var emailPattern = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/;
            if (!emailPattern.test(\$('input[name=\"email\"]').val().trim())) {
                isValid = false;
                \$('input[name=\"email\"]').siblings('.text-danger').text('Please enter a valid email address.');
            }

            if (\$('input[name=\"phone\"]').val().trim() === '') {
                isValid = false;
                \$('input[name=\"phone\"]').siblings('.text-danger').text('Phone number is required.');
            }

         

            if (\$('input[name=\"city\"]').val().trim() === '') {
                isValid = false;
                \$('input[name=\"city\"]').siblings('.text-danger').text('City is required.');
            }
            //if (\$('input[name=\"how_long\"]').val().trim() === '') {
                    //isValid = false;
                    //\$('input[name=\"how_long\"]').siblings('.text-danger').text('Number of days is required.');
                //}
                if (\$('input[name=\"how_long\"]').val().trim() === '' || \$('input[name=\"how_long\"]').val() < 1) {
            isValid = false;
            \$('input[name=\"how_long\"]').siblings('.text-danger').text('Number of days is required and must be at least 1.');
        }
                  var departureDate = new Date(\$('input[name=\"when_start\"]').val());
                var today = new Date();
                today.setHours(0, 0, 0, 0);  // Set today's date to midnight to ignore time portion
                if (departureDate < today) {
                    isValid = false;
                    \$('input[name=\"when_start\"]').siblings('.text-danger').text('Please select today or a future date.');
                    \$('input[name=\"when_start\"]').val('');  // Reset the input field
                }
            if (isValid) {
                var formData = new FormData(this);  // Get the form data

                \$.ajax({
                    url: '/submit-enquiry-form', // This should be the endpoint where the form should submit
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        submitFormSuccess(); // Display the success message
                    },
                    error: function(xhr, status, error) {
                        alert('An error occurred while submitting the form.');
                    }
                });
            }
        });
    });
</script>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/itl/themes/SAN/partials/site/searchenquiryform.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 70,  200 => 69,  188 => 67,  185 => 66,  181 => 65,  178 => 64,  172 => 63,  164 => 61,  161 => 60,  157 => 59,  144 => 48,  138 => 47,  133 => 45,  128 => 44,  123 => 43,  120 => 42,  116 => 41,  92 => 19,  85 => 16,  80 => 15,  77 => 14,  72 => 12,  68 => 11,  61 => 7,  57 => 5,  55 => 4,  53 => 3,  50 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% framework extras %}

{% set packages = packageList.records %}
{% set experiences = experienceList.records %}
<div id=\"sign-in-dialog\" class=\"zoom-anim-dialog\">
    <div class=\"small-dialog-header\">
        <h3><img src=\"{{'assets/images/mail.svg'|theme }}\" class=\"img-fluid mail\" alt=\"\">Get In Touch</h3>
    </div>
    <div class=\"modalbody\">
        <div class=\"modelbanner\">
            <img id=\"p-image\" src=\"{{builderDetails.record.banner.path}}\" alt=\"\">
            <h5 id=\"p-title\">{{builderDetails.record.title}}</h5>
        </div>
        {% flash %}
        <div data-control=\"flash-message\" class=\"flash-message fade {{ type }}\" data-interval=\"5\">
            {{ message }}
        </div>
        {% endflash %}

    <form data-request=\"onSubmitEnquiryForm\" data-request-validate data-request-flash class=\"form-str\"
            data-request-files=\"true\" data-request-success=\"document.getElementById('careesform').reset(); \$.magnificPopup.close(); \$.magnificPopup.close(); \$.magnificPopup.open({
                items: {     src: '#after-submit-popup'  },
                type: 'inline',
                showCloseBtn: true,
                callbacks: {
                    open: function () {
                        \$('#sign-in-dialog').append(\$('.mfp-close'))
                    },
                },
                midClick: true
            });\" id=\"careesform\">
            <input type=\"hidden\" name=\"form\" value=\"popup\" />
            <input type=\"hidden\" name=\"pid\" id=\"pid\" />
            <!-- <input type=\"hidden\" name=\"pacage\" id=\"pacage\" /> -->
            <div class=\"row form-group\">
                <div class=\"col\">
                    <label>Your enquiry is about</label>
                    <input type=\"text\" name=\"pacage\" id=\"pacage\" class=\"form-control\" readonly>
                    <!-- <div class=\"popup-select\">
                        <select class=\"custom-select\" name=\"pacage\" id=\"pacage\">
                            {% for package in packages %}
                            {% if(package.title != \"\") %}
                            <option value=\"{{package.title}}\" {% if(package.title==builderDetails.record.title) %}
                                selected=\"selected\" {% endif %}>
                                {{package.title}}</option>
                            {% endif %}
                            {% endfor %}
                        </select>
                    </div> -->

                    <span data-validate-for=\"pacage\" class=\"text-danger pt-1 font-size-small\"></span>
                </div>
            </div>
            <div class=\"row form-group\">
                <div class=\"col\">
                    <label>Experience</label>
                    <input type=\"text\" name=\"experiences\" id=\"experiences\" class=\"form-control\" readonly>
                    <!-- <select class=\"custom-select\" name=\"experiences\" id=\"experiences\">
                        {% for experience in experiences %}
                        {% if(experience.title != \"\") %}
                        <option value=\"{{experience.title}}\">{{experience.title}}</option>
                        {% endif %}
                        {% endfor %}

                        {% for experience in experiences %}
                        {% if(experience.title != \"\") %}
                        <option value=\"{{experience.title}}\" {% if(dslug == experience.slug ) %} selected=\"selected\" {% endif %}>{{experience.title}}</option>
                        {% endif %}
                        {% endfor %}

                    </select> -->
                    <span data-validate-for=\"experiences\" class=\"text-danger pt-1 font-size-small\"></span>
                </div>
            </div>

            <div class=\"sign-in-wrapper\">
                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label>First name*</label>
                        <input type=\"text\" name=\"first_name\" class=\"form-control\" placeholder=\"eg. Jhon\" value=\"\">
                        <span data-validate-for=\"first_name\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                    <div class=\"col\">
                        <label>Last name*</label>
                        <input type=\"text\" name=\"last_name\" class=\"form-control\" placeholder=\"eg. David\" value=\"\">
                        <span data-validate-for=\"last_name\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label>Email*</label>
                        <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\"
                            placeholder=\"eg. jhondavid@company.com\" value=\"\">
                        <span data-validate-for=\"email\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label>Mobile Number*</label>
                        <input type=\"number\" class=\"form-control phone\" name=\"phone\" id=\"\" placeholder=\"eg. 55333666\" value=\"\" onKeyDown=\"if(this.value.length==13 && event.keyCode!=8) return false;\">
                        <!-- <input type=\"tel\" class=\"form-control phone\" name=\"phone\" id=\"\" placeholder=\"eg. +971 55 333 666\"> -->
                        <span data-validate-for=\"phone\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label>Country</label>
                        <select id=\"address-country\" class=\"form-control\" name=\"country\" placeholder=\"eg. UAE\" ></select>
                        <span data-validate-for=\"Country\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label>Nationality</label>
                        <select id=\"\" class=\"form-control nationality\" name=\"nationality\" placeholder=\"eg. UAE\" ></select>
                        <span data-validate-for=\"nationality\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label class=\"checkboxes-label\">City*</label>
                        <input type=\"text\" class=\"form-control\" name=\"city\" id=\"city\" placeholder=\"City\" value=\"\" required>
                        <span data-validate-for=\"city\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>

                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label>Number of Adults*</label>
                        <div class=\"popup-select\">
                            <select class=\"custom-select\" name=\"no_adults\" id=\"no_adults\">
                                <option value=\"\">eg. 2</option>
                                <option value=\"1\">1</option>
                                <option value=\"2\">2</option>
                                <option value=\"3\">3</option>
                                <option value=\"4\">4</option>
                                <option value=\"5\">5</option>
                                <option value=\"6\">6</option>
                                <option value=\"7\">7</option>
                                <option value=\"8\">8</option>
                                <option value=\"9\">9</option>
                                <option value=\"9+\">9+</option>
                            </select>
                        </div>

                        <span data-validate-for=\"no_adults\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                    <div class=\"col\">
                        <label>Number of Children</label>
                        <div class=\"popup-select\">
                            <select class=\"custom-select\" name=\"no_children\" id=\"no_children\">
                                <option value=\"0\">eg. 2</option>
                                <option value=\"1\">1</option>
                                <option value=\"2\">2</option>
                                <option value=\"3\">3</option>
                                <option value=\"4\">4</option>
                                <option value=\"5\">5</option>
                                <option value=\"6\">6</option>
                                <option value=\"7\">7</option>
                                <option value=\"8\">8</option>
                                <option value=\"9\">9</option>
                                <option value=\"9+\">9+</option>
                            </select>
                        </div>
                        <span data-validate-for=\"no_children\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label>Departure From*</label>
                        <input type=\"text\" class=\"form-control\" name=\"departure_from\" placeholder=\"eg. Dubai\" value=\"\">
                        <span data-validate-for=\"departure_from\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label>Departure Date?*</label>
                        <input type=\"date\" class=\"form-control\" name=\"when_start\" placeholder=\"eg. Select Month\"
                            value=\"\">
                        <span data-validate-for=\"when_start\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                    <div class=\"col\">
                        <label>Number of Days?*</label>
                        <input type=\"number\" class=\"form-control\" name=\"how_long\" min='1' placeholder=\"eg. Select Duration\" required>
                        <span data-validate-for=\"how_long\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>

                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label>Remarks/Comments</label>
                        <textarea class=\"form-control\" name=\"remarks_comments\" row=\"6\"></textarea>
                        <span data-validate-for=\"remarks_comments\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>

                <div class=\"clearfix add_bottom_15\">
                    <div class=\"checkboxes float-left\">
                        <label class=\"container_check\">Subscribe for our latest updates
                            <input type=\"checkbox\" name=\"newsletter\">
                            <span class=\"checkmark\"></span>
                        </label>
                    </div>

                </div>
                <p>By Continuing with this,
                    You have read and agreed to the terms of
                    ITL World  <a href=\"https://itlworld.com/privacy-policy\" target=\"_blank\">Privacy Policy.</a></p>



                <div class=\"text-center\"><button data-attach-loading type=\"submit\" class=\"btn_1 full-width\"><img
                            src=\"/themes/SAN/assets/img/send-arrow.svg\"> Submit</button></div>

            </div>
        </form>
    </div>

</div>
<script>
    function showSuccessMessage() {
        var toasterMessage = \$('<div class=\"flash-message show\">Form submitted successfully!</div>');
        \$('body').append(toasterMessage);

        // Hide toaster after 5 seconds
        setTimeout(function() {
            toasterMessage.fadeOut(function() {
                \$(this).remove(); // Remove from DOM after fading out
            });
        }, 5000);
    }

    function submitFormSuccess() {
        // Show toaster message
        showSuccessMessage();

        // Reset the form and close the popups
        document.getElementById('careesform').reset();
        \$.magnificPopup.close();

        // Optionally, open another popup or display a success message here
        \$.magnificPopup.open({
            items: { src: '#after-submit-popup' },
            type: 'inline',
            showCloseBtn: true,
            callbacks: {
                open: function () {
                    \$('#sign-in-dialog').append(\$('.mfp-close'))
                }
            },
            midClick: true
        });
    }

    \$(document).ready(function() {
        
        // Form validation before submitting
        \$('#careesform').on('submit', function(event) {
            event.preventDefault();  // Prevent the default form submission

            var isValid = true;

            // Clear previous error messages
            \$('.text-danger').text('');

            // Validate required fields
            if (\$('input[name=\"first_name\"]').val().trim() === '') {
                isValid = false;
                \$('input[name=\"first_name\"]').siblings('.text-danger').text('First name is required.');
            }

            if (\$('input[name=\"last_name\"]').val().trim() === '') {
                isValid = false;
                \$('input[name=\"last_name\"]').siblings('.text-danger').text('Last name is required.');
            }

            var emailPattern = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/;
            if (!emailPattern.test(\$('input[name=\"email\"]').val().trim())) {
                isValid = false;
                \$('input[name=\"email\"]').siblings('.text-danger').text('Please enter a valid email address.');
            }

            if (\$('input[name=\"phone\"]').val().trim() === '') {
                isValid = false;
                \$('input[name=\"phone\"]').siblings('.text-danger').text('Phone number is required.');
            }

         

            if (\$('input[name=\"city\"]').val().trim() === '') {
                isValid = false;
                \$('input[name=\"city\"]').siblings('.text-danger').text('City is required.');
            }
            //if (\$('input[name=\"how_long\"]').val().trim() === '') {
                    //isValid = false;
                    //\$('input[name=\"how_long\"]').siblings('.text-danger').text('Number of days is required.');
                //}
                if (\$('input[name=\"how_long\"]').val().trim() === '' || \$('input[name=\"how_long\"]').val() < 1) {
            isValid = false;
            \$('input[name=\"how_long\"]').siblings('.text-danger').text('Number of days is required and must be at least 1.');
        }
                  var departureDate = new Date(\$('input[name=\"when_start\"]').val());
                var today = new Date();
                today.setHours(0, 0, 0, 0);  // Set today's date to midnight to ignore time portion
                if (departureDate < today) {
                    isValid = false;
                    \$('input[name=\"when_start\"]').siblings('.text-danger').text('Please select today or a future date.');
                    \$('input[name=\"when_start\"]').val('');  // Reset the input field
                }
            if (isValid) {
                var formData = new FormData(this);  // Get the form data

                \$.ajax({
                    url: '/submit-enquiry-form', // This should be the endpoint where the form should submit
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        submitFormSuccess(); // Display the success message
                    },
                    error: function(xhr, status, error) {
                        alert('An error occurred while submitting the form.');
                    }
                });
            }
        });
    });
</script>", "/Applications/MAMP/htdocs/itl/themes/SAN/partials/site/searchenquiryform.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("framework" => 1, "set" => 3, "flash" => 14, "for" => 41, "if" => 42);
        static $filters = array("theme" => 7, "escape" => 11);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['framework', 'set', 'flash', 'for', 'if'],
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
