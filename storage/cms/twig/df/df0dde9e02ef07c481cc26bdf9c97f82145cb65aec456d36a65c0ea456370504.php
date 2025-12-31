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

/* /Applications/MAMP/htdocs/itl/themes/SAN/partials/site/packageenquiryform.htm */
class __TwigTemplate_d528a76cc93e065adfd1d46719e56037848c873de5ec04069eabdfd9aee16721 extends \Twig\Template
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
              data-request-files=\"true\" id=\"enquiryForm\">
            <input type=\"hidden\" name=\"form\" value=\"popup\" />            
            <div class=\"row form-group\">
                <div class=\"col\">
                    <label>Your enquiry is about</label>
                    <input type=\"text\" name=\"pacage\" class=\"form-control\" 
                           value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "title", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
        echo " (";
        if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "cities", [], "any", false, false, true, 27)) {
            $context["ccount"] = 1;
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "cities", [], "any", false, false, true, 27));
            foreach ($context['_seq'] as $context["_key"] => $context["scity"]) {
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["scity"], "city", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                if ((($context["ccount"] ?? null) < twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "cities", [], "any", false, false, true, 27)))) {
                    echo " |";
                }
                $context["ccount"] = (($context["ccount"] ?? null) + 1);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " ";
        }
        echo ")\" readonly>
                    <span data-validate-for=\"pacage\" class=\"text-danger pt-1 font-size-small\"></span>
                </div>
            </div>
            <div class=\"row form-group\">
                <div class=\"col\">
                    <label>Experience</label>
                    <input type=\"text\" name=\"experiences\" class=\"form-control\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["expslugs"] ?? null), 34, $this->source), "html", null, true);
        echo "\" readonly>
                    <span data-validate-for=\"experiences\" class=\"text-danger pt-1 font-size-small\"></span>
                </div>
            </div>

            <div class=\"sign-in-wrapper\">
                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label>First name*</label>
                        <input type=\"text\" name=\"first_name\" class=\"form-control\" placeholder=\"eg. Jhon\" required>
                        <span data-validate-for=\"first_name\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                    <div class=\"col\">
                        <label>Last name*</label>
                        <input type=\"text\" name=\"last_name\" class=\"form-control\" placeholder=\"eg. David\" required>
                        <span data-validate-for=\"last_name\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label>Email*</label>
                        <input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"eg. jhondavid@company.com\" required>
                        <span data-validate-for=\"email\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label>Mobile Number*</label>
                        <input type=\"number\" class=\"form-control phone\" name=\"phone\" placeholder=\"eg. 55333666\" 
                               onKeyDown=\"if(this.value.length==13 && event.keyCode!=8) return false;\" required>
                        <span data-validate-for=\"phone\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label>Country</label>
                        <select id=\"address-country\" class=\"form-control\" name=\"country\" placeholder=\"eg. UAE\" >
                            <!-- Populate dynamically via JavaScript or server-side -->
                        </select>
                        <span data-validate-for=\"country\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label>Nationality</label>
                        <select class=\"form-control nationality\" name=\"nationality\" placeholder=\"eg. UAE\" >
                            <!-- Populate dynamically via JavaScript or server-side -->
                        </select>
                        <span data-validate-for=\"nationality\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label>City*</label>
                        <input type=\"text\" class=\"form-control\" name=\"city\" placeholder=\"City\" required>
                        <span data-validate-for=\"city\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label>Number of Adults*</label>
                        <div class=\"popup-select\">
                            <select class=\"custom-select\" name=\"no_adults\" required>
                                <option value=\"\">Select</option>
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
                            <select class=\"custom-select\" name=\"no_children\">
                                <option value=\"0\">0</option>
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
                        <input type=\"text\" class=\"form-control\" name=\"departure_from\" placeholder=\"eg. Dubai\" required>
                        <span data-validate-for=\"departure_from\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label>Departure Date?*</label>
                        <input type=\"date\" class=\"form-control\" name=\"when_start\" min=\"";
        // line 142
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\" required>
                        <span data-validate-for=\"when_start\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                    <div class=\"col\">
                        <label>Number of Days?*</label>
                        <input type=\"number\" class=\"form-control\" name=\"how_long\" min=\"1\" placeholder=\"eg. Select Duration\" required>
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
                <p>By Continuing with this, You have read and agreed to the terms of
                    ITL World <a href=\"https://itlworld.com/privacy-policy\" target=\"_blank\">Privacy Policy.</a></p>
                <div class=\"text-center\">
                    <button data-attach-loading type=\"submit\" class=\"btn_1 full-width\">
                        <img src=\"/themes/SAN/assets/img/send-arrow.svg\"> Submit
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
\$(document).ready(function() {
    // Form validation before submitting
    \$('#enquiryForm').on('submit', function(event) {
        event.preventDefault(); // Prevent default form submission

        let isValid = true;

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

        const emailPattern = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/;
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

        if (\$('select[name=\"no_adults\"]').val() === '' || \$('select[name=\"no_adults\"]').val() === null) {
            isValid = false;
            \$('select[name=\"no_adults\"]').siblings('.text-danger').text('Number of adults is required.');
        }

        if (\$('input[name=\"departure_from\"]').val().trim() === '') {
            isValid = false;
            \$('input[name=\"departure_from\"]').siblings('.text-danger').text('Departure from is required.');
        }

        if (\$('input[name=\"when_start\"]').val().trim() === '') {
            isValid = false;
            \$('input[name=\"when_start\"]').siblings('.text-danger').text('Departure date is required.');
        } else {
            const departureDate = new Date(\$('input[name=\"when_start\"]').val());
            const today = new Date();
            today.setHours(0, 0, 0, 0); // Set today's date to midnight
            if (departureDate < today) {
                isValid = false;
                \$('input[name=\"when_start\"]').siblings('.text-danger').text('Please select today or a future date.');
                \$('input[name=\"when_start\"]').val(''); // Reset the input field
            }
        }

        if (\$('input[name=\"how_long\"]').val().trim() === '' || \$('input[name=\"how_long\"]').val() < 1) {
            isValid = false;
            \$('input[name=\"how_long\"]').siblings('.text-danger').text('Number of days is required and must be at least 1.');
        }

        // If all validations pass, submit the form using AJAX
        if (isValid) {
            const formData = new FormData(this); // Get the form data

            \$.ajax({
                url: '/submit-enquiry-form', // Form submission endpoint
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    \$('button[type=\"submit\"]').prop('disabled', true).addClass('loading');
                },
                success: function(response) {
                    // Display success message
                    const toasterMessage = \$('<div class=\"flash-message show\">Form submitted successfully!</div>');
                    \$('body').append(toasterMessage);

                    // Hide toaster after 5 seconds
                    setTimeout(function() {
                        toasterMessage.fadeOut(function() {
                            \$(this).remove();
                        });
                    }, 5000);

                    // Reset the form and close the popup
                    document.getElementById('enquiryForm').reset();
                    \$.magnificPopup.close();

                    // Open success popup
                    \$.magnificPopup.open({
                        items: { src: '#after-submit-popup' },
                        type: 'inline',
                        showCloseBtn: true,
                        callbacks: {
                            open: function() {
                                \$('#sign-in-dialog').append(\$('.mfp-close'));
                            }
                        },
                        midClick: true
                    });
                },
                error: function(xhr) {
                    // Handle server-side errors
                    const errors = xhr.responseJSON?.errors || {};
                    Object.keys(errors).forEach(field => {
                        \$(`[data-validate-for=\"\${field}\"]`).text(errors[field][0]);
                    });
                    if (!Object.keys(errors).length) {
                        alert('An error occurred while submitting the form.');
                    }
                },
                complete: function() {
                    \$('button[type=\"submit\"]').prop('disabled', false).removeClass('loading');
                }
            });
        }
    });
});
</script>

<style>
/ Optional: Style for loading state /
.btn_1.loading {
    opacity: 0.7;
    cursor: not-allowed;
}
.flash-message.show {
    position: fixed;
    top: 20px;
    right: 20px;
    background: #28a745;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    z-index: 1000;
}
</style>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/itl/themes/SAN/partials/site/packageenquiryform.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 142,  129 => 34,  102 => 27,  92 => 19,  85 => 16,  80 => 15,  77 => 14,  72 => 12,  68 => 11,  61 => 7,  57 => 5,  55 => 4,  53 => 3,  50 => 2,  39 => 1,);
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
              data-request-files=\"true\" id=\"enquiryForm\">
            <input type=\"hidden\" name=\"form\" value=\"popup\" />            
            <div class=\"row form-group\">
                <div class=\"col\">
                    <label>Your enquiry is about</label>
                    <input type=\"text\" name=\"pacage\" class=\"form-control\" 
                           value=\"{{record.title}} ({% if record.cities %}{% set ccount = 1 %}{% for scity in record.cities %}{{scity.city}}{% if ccount < record.cities|length %} |{% endif %}{% set ccount=ccount + 1 %}{% endfor %} {%endif %})\" readonly>
                    <span data-validate-for=\"pacage\" class=\"text-danger pt-1 font-size-small\"></span>
                </div>
            </div>
            <div class=\"row form-group\">
                <div class=\"col\">
                    <label>Experience</label>
                    <input type=\"text\" name=\"experiences\" class=\"form-control\" value=\"{{expslugs}}\" readonly>
                    <span data-validate-for=\"experiences\" class=\"text-danger pt-1 font-size-small\"></span>
                </div>
            </div>

            <div class=\"sign-in-wrapper\">
                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label>First name*</label>
                        <input type=\"text\" name=\"first_name\" class=\"form-control\" placeholder=\"eg. Jhon\" required>
                        <span data-validate-for=\"first_name\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                    <div class=\"col\">
                        <label>Last name*</label>
                        <input type=\"text\" name=\"last_name\" class=\"form-control\" placeholder=\"eg. David\" required>
                        <span data-validate-for=\"last_name\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label>Email*</label>
                        <input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"eg. jhondavid@company.com\" required>
                        <span data-validate-for=\"email\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label>Mobile Number*</label>
                        <input type=\"number\" class=\"form-control phone\" name=\"phone\" placeholder=\"eg. 55333666\" 
                               onKeyDown=\"if(this.value.length==13 && event.keyCode!=8) return false;\" required>
                        <span data-validate-for=\"phone\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label>Country</label>
                        <select id=\"address-country\" class=\"form-control\" name=\"country\" placeholder=\"eg. UAE\" >
                            <!-- Populate dynamically via JavaScript or server-side -->
                        </select>
                        <span data-validate-for=\"country\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label>Nationality</label>
                        <select class=\"form-control nationality\" name=\"nationality\" placeholder=\"eg. UAE\" >
                            <!-- Populate dynamically via JavaScript or server-side -->
                        </select>
                        <span data-validate-for=\"nationality\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label>City*</label>
                        <input type=\"text\" class=\"form-control\" name=\"city\" placeholder=\"City\" required>
                        <span data-validate-for=\"city\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label>Number of Adults*</label>
                        <div class=\"popup-select\">
                            <select class=\"custom-select\" name=\"no_adults\" required>
                                <option value=\"\">Select</option>
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
                            <select class=\"custom-select\" name=\"no_children\">
                                <option value=\"0\">0</option>
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
                        <input type=\"text\" class=\"form-control\" name=\"departure_from\" placeholder=\"eg. Dubai\" required>
                        <span data-validate-for=\"departure_from\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                </div>
                <div class=\"row form-group\">
                    <div class=\"col\">
                        <label>Departure Date?*</label>
                        <input type=\"date\" class=\"form-control\" name=\"when_start\" min=\"{{ 'now'|date('Y-m-d') }}\" required>
                        <span data-validate-for=\"when_start\" class=\"text-danger pt-1 font-size-small\"></span>
                    </div>
                    <div class=\"col\">
                        <label>Number of Days?*</label>
                        <input type=\"number\" class=\"form-control\" name=\"how_long\" min=\"1\" placeholder=\"eg. Select Duration\" required>
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
                <p>By Continuing with this, You have read and agreed to the terms of
                    ITL World <a href=\"https://itlworld.com/privacy-policy\" target=\"_blank\">Privacy Policy.</a></p>
                <div class=\"text-center\">
                    <button data-attach-loading type=\"submit\" class=\"btn_1 full-width\">
                        <img src=\"/themes/SAN/assets/img/send-arrow.svg\"> Submit
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
\$(document).ready(function() {
    // Form validation before submitting
    \$('#enquiryForm').on('submit', function(event) {
        event.preventDefault(); // Prevent default form submission

        let isValid = true;

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

        const emailPattern = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/;
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

        if (\$('select[name=\"no_adults\"]').val() === '' || \$('select[name=\"no_adults\"]').val() === null) {
            isValid = false;
            \$('select[name=\"no_adults\"]').siblings('.text-danger').text('Number of adults is required.');
        }

        if (\$('input[name=\"departure_from\"]').val().trim() === '') {
            isValid = false;
            \$('input[name=\"departure_from\"]').siblings('.text-danger').text('Departure from is required.');
        }

        if (\$('input[name=\"when_start\"]').val().trim() === '') {
            isValid = false;
            \$('input[name=\"when_start\"]').siblings('.text-danger').text('Departure date is required.');
        } else {
            const departureDate = new Date(\$('input[name=\"when_start\"]').val());
            const today = new Date();
            today.setHours(0, 0, 0, 0); // Set today's date to midnight
            if (departureDate < today) {
                isValid = false;
                \$('input[name=\"when_start\"]').siblings('.text-danger').text('Please select today or a future date.');
                \$('input[name=\"when_start\"]').val(''); // Reset the input field
            }
        }

        if (\$('input[name=\"how_long\"]').val().trim() === '' || \$('input[name=\"how_long\"]').val() < 1) {
            isValid = false;
            \$('input[name=\"how_long\"]').siblings('.text-danger').text('Number of days is required and must be at least 1.');
        }

        // If all validations pass, submit the form using AJAX
        if (isValid) {
            const formData = new FormData(this); // Get the form data

            \$.ajax({
                url: '/submit-enquiry-form', // Form submission endpoint
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    \$('button[type=\"submit\"]').prop('disabled', true).addClass('loading');
                },
                success: function(response) {
                    // Display success message
                    const toasterMessage = \$('<div class=\"flash-message show\">Form submitted successfully!</div>');
                    \$('body').append(toasterMessage);

                    // Hide toaster after 5 seconds
                    setTimeout(function() {
                        toasterMessage.fadeOut(function() {
                            \$(this).remove();
                        });
                    }, 5000);

                    // Reset the form and close the popup
                    document.getElementById('enquiryForm').reset();
                    \$.magnificPopup.close();

                    // Open success popup
                    \$.magnificPopup.open({
                        items: { src: '#after-submit-popup' },
                        type: 'inline',
                        showCloseBtn: true,
                        callbacks: {
                            open: function() {
                                \$('#sign-in-dialog').append(\$('.mfp-close'));
                            }
                        },
                        midClick: true
                    });
                },
                error: function(xhr) {
                    // Handle server-side errors
                    const errors = xhr.responseJSON?.errors || {};
                    Object.keys(errors).forEach(field => {
                        \$(`[data-validate-for=\"\${field}\"]`).text(errors[field][0]);
                    });
                    if (!Object.keys(errors).length) {
                        alert('An error occurred while submitting the form.');
                    }
                },
                complete: function() {
                    \$('button[type=\"submit\"]').prop('disabled', false).removeClass('loading');
                }
            });
        }
    });
});
</script>

<style>
/ Optional: Style for loading state /
.btn_1.loading {
    opacity: 0.7;
    cursor: not-allowed;
}
.flash-message.show {
    position: fixed;
    top: 20px;
    right: 20px;
    background: #28a745;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    z-index: 1000;
}
</style>", "/Applications/MAMP/htdocs/itl/themes/SAN/partials/site/packageenquiryform.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("framework" => 1, "set" => 3, "flash" => 14, "if" => 27, "for" => 27);
        static $filters = array("theme" => 7, "escape" => 11, "length" => 27, "date" => 142);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['framework', 'set', 'flash', 'if', 'for'],
                ['theme', 'escape', 'length', 'date'],
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
