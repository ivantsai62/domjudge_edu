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

/* jury/partials/rejudge_form.html.twig */
class __TwigTemplate_966e9e7c9db77a0c2a175a735d14f0ca3a87206245b9f2f8a9654853be38b8df extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/rejudge_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/rejudge_form.html.twig"));

        // line 2
        echo "
";
        // line 3
        ob_start();
        // line 4
        echo "    ";
        $context["buttonText"] = ((("Rejudge all for " . (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 4, $this->source); })())) . " ") . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 4, $this->source); })()));
        // line 5
        echo "    ";
        $context["questionText"] = (("Rejudge all submissions for this " . (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 5, $this->source); })())) . "?");
        // line 6
        echo "    ";
        $context["buttonDisabled"] = false;
        // line 7
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 8
            echo "        ";
            $context["includeAllButton"] = true;
            // line 9
            echo "    ";
        } else {
            // line 10
            echo "        ";
            $context["includeAllButton"] = false;
            // line 11
            echo "    ";
        }
        // line 12
        echo "    ";
        if ( !(isset($context["buttonClass"]) || array_key_exists("buttonClass", $context))) {
            // line 13
            echo "        ";
            $context["buttonClass"] = "btn-outline-primary btn-sm";
            // line 14
            echo "    ";
        }
        // line 15
        echo "
    ";
        // line 16
        if (((((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 16, $this->source); })()) == "submission") && (isset($context["submission"]) || array_key_exists("submission", $context))) && (isset($context["judgings"]) || array_key_exists("judgings", $context)))) {
            // line 17
            echo "        ";
            $context["buttonText"] = "Rejudge this submission";
            // line 18
            echo "        ";
            $context["questionText"] = (("Rejudge submission s" . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 18, $this->source); })())) . "?");
            // line 19
            echo "        ";
            $context["includeAllButton"] = false;
            // line 20
            echo "        ";
            // line 21
            echo "        ";
            $context["validResult"] = false;
            // line 22
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["judgings"]) || array_key_exists("judgings", $context) ? $context["judgings"] : (function () { throw new RuntimeError('Variable "judgings" does not exist.', 22, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["judging"]) {
                // line 23
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["judging"], "valid", [], "any", false, false, false, 23)) {
                    // line 24
                    echo "                ";
                    $context["validResult"] = twig_get_attribute($this->env, $this->source, $context["judging"], "result", [], "any", false, false, false, 24);
                    // line 25
                    echo "            ";
                }
                // line 26
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['judging'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "
        ";
            // line 28
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 29
                echo "            ";
                if ( !(isset($context["validResult"]) || array_key_exists("validResult", $context) ? $context["validResult"] : (function () { throw new RuntimeError('Variable "validResult" does not exist.', 29, $this->source); })())) {
                    // line 30
                    echo "                ";
                    $context["questionText"] = (("Restart judging of PENDING submission s" . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 30, $this->source); })())) . ", are you sure?");
                    // line 31
                    echo "                ";
                    $context["buttonText"] = "Restart judging";
                    // line 32
                    echo "            ";
                } elseif (((isset($context["validResult"]) || array_key_exists("validResult", $context) ? $context["validResult"] : (function () { throw new RuntimeError('Variable "validResult" does not exist.', 32, $this->source); })()) == "correct")) {
                    // line 33
                    echo "                ";
                    $context["questionText"] = (("Rejudge CORRECT submission s" . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 33, $this->source); })())) . ", are you sure?");
                    // line 34
                    echo "            ";
                }
                // line 35
                echo "        ";
            } else {
                // line 36
                echo "            ";
                if (( !(isset($context["validResult"]) || array_key_exists("validResult", $context) ? $context["validResult"] : (function () { throw new RuntimeError('Variable "validResult" does not exist.', 36, $this->source); })()) || ((isset($context["validResult"]) || array_key_exists("validResult", $context) ? $context["validResult"] : (function () { throw new RuntimeError('Variable "validResult" does not exist.', 36, $this->source); })()) == "correct"))) {
                    // line 37
                    echo "                ";
                    $context["buttonDisabled"] = true;
                    // line 38
                    echo "            ";
                }
                // line 39
                echo "        ";
            }
            // line 40
            echo "    ";
        }
        $___internal_fa18a51e507b3d7446647a32a2b12e077b153bbffa56530edebbfb547646840f_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        echo twig_spaceless($___internal_fa18a51e507b3d7446647a32a2b12e077b153bbffa56530edebbfb547646840f_);
        // line 42
        echo "
<button type=\"button\" class=\"btn ";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["buttonClass"]) || array_key_exists("buttonClass", $context) ? $context["buttonClass"] : (function () { throw new RuntimeError('Variable "buttonClass" does not exist.', 43, $this->source); })()), "html", null, true);
        echo "\" data-toggle=\"modal\" data-target=\"#rejudge-modal\">
    <i class=\"fas fa-sync\"></i> Rejudge
</button>

<!-- Modal -->
<div class=\"modal fade\" id=\"rejudge-modal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["buttonText"]) || array_key_exists("buttonText", $context) ? $context["buttonText"] : (function () { throw new RuntimeError('Variable "buttonText" does not exist.', 52, $this->source); })()), "html", null, true);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <form action=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_create_rejudge");
        echo "\" method=\"post\">
                <div class=\"modal-body\">
                    <input type=\"hidden\" name=\"table\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 59, $this->source); })()), "html", null, true);
        echo "\"/>
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 60, $this->source); })()), "html", null, true);
        echo "\"/>";
        // line 61
        if ((isset($context["includeAllButton"]) || array_key_exists("includeAllButton", $context) ? $context["includeAllButton"] : (function () { throw new RuntimeError('Variable "includeAllButton" does not exist.', 61, $this->source); })())) {
            // line 62
            echo "
                        <div class=\"custom-control custom-checkbox form-group\">
                            <input type=\"checkbox\" class=\"custom-control-input\" id=\"include_all\" name=\"include_all\">
                            <label class=\"custom-control-label\" for=\"include_all\">Include pending/correct
                                submissions</label>
                        </div>";
        }
        // line 69
        echo "
                    <div class=\"custom-control custom-checkbox form-group\">
                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"full_rejudge\" name=\"full_rejudge\" checked>
                        <label class=\"custom-control-label\" for=\"full_rejudge\">Create rejudging</label>
                    </div>
                    <div id=\"rejudge-reason\" class=\"form-group\">
                        <label for=\"reason\">Reason</label>
                        <input type=\"text\" class=\"form-control\" name=\"reason\" id=\"reason\" maxlength=\"255\"/>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cancel</button>
                    <input type=\"submit\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["buttonText"]) || array_key_exists("buttonText", $context) ? $context["buttonText"] : (function () { throw new RuntimeError('Variable "buttonText" does not exist.', 81, $this->source); })()), "html", null, true);
        echo "\" class=\"btn btn-primary\"/>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    \$(function () {
        \$('#full_rejudge').on('change', function () {
            if (\$(this).is(':checked')) {
                \$('#rejudge-reason').removeClass('d-none');
            } else {
                \$('#rejudge-reason').addClass('d-none');
            }
        });
    });
</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/rejudge_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 81,  209 => 69,  201 => 62,  199 => 61,  196 => 60,  192 => 59,  187 => 57,  179 => 52,  167 => 43,  164 => 42,  162 => 3,  158 => 40,  155 => 39,  152 => 38,  149 => 37,  146 => 36,  143 => 35,  140 => 34,  137 => 33,  134 => 32,  131 => 31,  128 => 30,  125 => 29,  123 => 28,  120 => 27,  114 => 26,  111 => 25,  108 => 24,  105 => 23,  100 => 22,  97 => 21,  95 => 20,  92 => 19,  89 => 18,  86 => 17,  84 => 16,  81 => 15,  78 => 14,  75 => 13,  72 => 12,  69 => 11,  66 => 10,  63 => 9,  60 => 8,  57 => 7,  54 => 6,  51 => 5,  48 => 4,  46 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Output a rejudge form #}

{% apply spaceless %}
    {% set buttonText = 'Rejudge all for ' ~ table ~ ' ' ~ id %}
    {% set questionText = 'Rejudge all submissions for this ' ~ table ~ '?' %}
    {% set buttonDisabled = false %}
    {% if is_granted('ROLE_ADMIN') %}
        {% set includeAllButton = true %}
    {% else %}
        {% set includeAllButton = false %}
    {% endif %}
    {% if buttonClass is not defined %}
        {% set buttonClass = 'btn-outline-primary btn-sm' %}
    {% endif %}

    {% if table == 'submission' and submission is defined and judgings is defined %}
        {% set buttonText = 'Rejudge this submission' %}
        {% set questionText = 'Rejudge submission s' ~ id ~ '?' %}
        {% set includeAllButton = false %}
        {# Check if we have a valid result #}
        {% set validResult = false %}
        {% for judging in judgings %}
            {% if judging.valid %}
                {% set validResult = judging.result %}
            {% endif %}
        {% endfor %}

        {% if is_granted('ROLE_ADMIN') %}
            {% if not validResult %}
                {% set questionText = 'Restart judging of PENDING submission s' ~ id ~ ', are you sure?' %}
                {% set buttonText = 'Restart judging' %}
            {% elseif validResult == 'correct' %}
                {% set questionText = 'Rejudge CORRECT submission s' ~ id ~ ', are you sure?' %}
            {% endif %}
        {% else %}
            {% if not validResult or validResult == 'correct' %}
                {% set buttonDisabled = true %}
            {% endif %}
        {% endif %}
    {% endif %}
{% endapply %}

<button type=\"button\" class=\"btn {{ buttonClass }}\" data-toggle=\"modal\" data-target=\"#rejudge-modal\">
    <i class=\"fas fa-sync\"></i> Rejudge
</button>

<!-- Modal -->
<div class=\"modal fade\" id=\"rejudge-modal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">{{ buttonText }}</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <form action=\"{{ path('jury_create_rejudge') }}\" method=\"post\">
                <div class=\"modal-body\">
                    <input type=\"hidden\" name=\"table\" value=\"{{ table }}\"/>
                    <input type=\"hidden\" name=\"id\" value=\"{{ id }}\"/>
                    {%- if includeAllButton %}

                        <div class=\"custom-control custom-checkbox form-group\">
                            <input type=\"checkbox\" class=\"custom-control-input\" id=\"include_all\" name=\"include_all\">
                            <label class=\"custom-control-label\" for=\"include_all\">Include pending/correct
                                submissions</label>
                        </div>
                    {%- endif %}

                    <div class=\"custom-control custom-checkbox form-group\">
                        <input type=\"checkbox\" class=\"custom-control-input\" id=\"full_rejudge\" name=\"full_rejudge\" checked>
                        <label class=\"custom-control-label\" for=\"full_rejudge\">Create rejudging</label>
                    </div>
                    <div id=\"rejudge-reason\" class=\"form-group\">
                        <label for=\"reason\">Reason</label>
                        <input type=\"text\" class=\"form-control\" name=\"reason\" id=\"reason\" maxlength=\"255\"/>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cancel</button>
                    <input type=\"submit\" value=\"{{ buttonText }}\" class=\"btn btn-primary\"/>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    \$(function () {
        \$('#full_rejudge').on('change', function () {
            if (\$(this).is(':checked')) {
                \$('#rejudge-reason').removeClass('d-none');
            } else {
                \$('#rejudge-reason').addClass('d-none');
            }
        });
    });
</script>
", "jury/partials/rejudge_form.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/partials/rejudge_form.html.twig");
    }
}
