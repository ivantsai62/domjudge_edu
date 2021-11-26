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

/* team/menu.html.twig */
class __TwigTemplate_c0128ceab15ec46ad714ae0aec9afe4f0e1d0b316a011187658fa4c22621c0af extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/menu.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-md navbar-dark bg-dark fixed-top\">
    <a class=\"navbar-brand hidden-sm-down\" href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_index");
        echo "\">DOMjudge</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#menuDefault\"
            aria-controls=\"menuDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    ";
        // line 8
        $context["current_route"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "request", [], "any", false, false, false, 8), "attributes", [], "any", false, false, false, 8), "get", [0 => "_route"], "method", false, false, false, 8);
        // line 9
        echo "    
    <div class=\"collapse navbar-collapse\" id=\"menuDefault\">
        <ul class=\"navbar-nav mr-auto\">
        ";
        // line 13
        echo "         <li class=\"nav-item ";
        if (twig_in_filter((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 13, $this->source); })()), [0 => "team_homepage", 1 => "team_clarification", 2 => "team_clarification_add", 3 => "team_submission"])) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_homepage");
        echo "\"><i class=\"fas fa-home\"></i> Problem list</a>
            </li>



            <li class=\"nav-item ";
        // line 19
        if (twig_in_filter((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 19, $this->source); })()), [0 => "team_index", 1 => "team_clarification", 2 => "team_clarification_add", 3 => "team_submission"])) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_index");
        echo "\"><i class=\"fas fa-user\"></i> MyPage </a>
            </li>
        ";
        // line 23
        echo "            <li class=\"nav-item ";
        if (((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 23, $this->source); })()) == "team_problems")) {
            echo "active";
        }
        echo "\">
                ";
        // line 24
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY") || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["current_team_contest"]) || array_key_exists("current_team_contest", $context) ? $context["current_team_contest"] : (function () { throw new RuntimeError('Variable "current_team_contest" does not exist.', 24, $this->source); })()), "freezeData", [], "any", false, false, false, 24), "started", [], "any", false, false, false, 24))) {
            // line 25
            echo "                    <a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_problems");
            echo "\">
                        <i class=\"fas fa-book-open\"></i> Problemset
                    </a>
                ";
        } else {
            // line 29
            echo "                    <a class=\"nav-link disabled\"><i class=\"fas fa-book-open\"></i> Problemset</a>
                ";
        }
        // line 31
        echo "            </li>
            ";
        // line 32
        if ((isset($context["have_printing"]) || array_key_exists("have_printing", $context) ? $context["have_printing"] : (function () { throw new RuntimeError('Variable "have_printing" does not exist.', 32, $this->source); })())) {
            // line 33
            echo "                <li class=\"nav-item ";
            if (((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 33, $this->source); })()) == "team_print")) {
                echo "active";
            }
            echo "\">
                    <a class=\"nav-link\" href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_print");
            echo "\"><i class=\"fas fa-file-alt\"></i> Print</a>
                </li>
            ";
        }
        // line 37
        echo "            <li class=\"nav-item ";
        if (twig_in_filter((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 37, $this->source); })()), [0 => "team_scoreboard", 1 => "team_team"])) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link\" href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_scoreboard");
        echo "\"><i class=\"fas fa-list-ol\"></i> Scoreboard</a>
            </li>";
        // line 41
        echo "<li class=\"nav-item ";
        if (twig_in_filter((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 41, $this->source); })()), [0 => "team_scoreboard", 1 => "team_team"])) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link\" href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_compile");
        echo "\"><i class=\"fa fa-window-maximize\"></i> IDE</a>
            </li>";
        // line 45
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BALLOON"))) {
            // line 46
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 47
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_index");
            echo "\"><i class=\"fas fa-arrow-right\"></i> Jury</a>
                </li>
            ";
        }
        // line 50
        echo "        </ul>

        <div id=\"submitbut\">";
        // line 55
        echo "            ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY") || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["current_team_contest"]) || array_key_exists("current_team_contest", $context) ? $context["current_team_contest"] : (function () { throw new RuntimeError('Variable "current_team_contest" does not exist.', 55, $this->source); })()), "freezeData", [], "any", false, false, false, 55), "started", [], "any", false, false, false, 55))) {
            // line 56
            echo "                <a class=\"nav-link justify-content-center \"  data-ajax-modal data-ajax-modal-after=\"initSubmitModal\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_submit");
            echo "\">
                    <button type=\"button\" class=\"btn btn-success btn-sm\"";
            // line 57
            if (((isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 57, $this->source); })()) == "team_compile")) {
                echo " style=\"visibility: hidden\"";
            }
            echo ">
                        <i class=\"fas fa-cloud-upload-alt\"></i> Submit
                    </button>
                </a>
            ";
        } else {
            // line 62
            echo "                <a class=\"nav-link justify-content-center\">
                    <button type=\"button\" class=\"btn btn-success btn-sm disabled\" disabled>
                        <i class=\"fas fa-cloud-upload-alt\"></i> Submit
                    </button>
                </a>
            ";
        }
        // line 69
        echo "</div>

        ";
        // line 71
        $this->loadTemplate("partials/menu_login_logout_button.html.twig", "team/menu.html.twig", 71)->display(twig_array_merge($context, ["confirmLogout" => true]));
        // line 72
        echo "
        <ul class=\"navbar-nav\">
            ";
        // line 74
        if ((twig_length_filter($this->env, (isset($context["current_team_contests"]) || array_key_exists("current_team_contests", $context) ? $context["current_team_contests"] : (function () { throw new RuntimeError('Variable "current_team_contests" does not exist.', 74, $this->source); })())) > 1)) {
            // line 75
            echo "                ";
            $this->loadTemplate("partials/menu_change_contest.html.twig", "team/menu.html.twig", 75)->display(twig_array_merge($context, ["contest" => (isset($context["current_team_contest"]) || array_key_exists("current_team_contest", $context) ? $context["current_team_contest"] : (function () { throw new RuntimeError('Variable "current_team_contest" does not exist.', 75, $this->source); })()), "contests" => (isset($context["current_team_contests"]) || array_key_exists("current_team_contests", $context) ? $context["current_team_contests"] : (function () { throw new RuntimeError('Variable "current_team_contests" does not exist.', 75, $this->source); })()), "change_path" => "team_change_contest", "show_no_contest" => false]));
            // line 76
            echo "            ";
        }
        // line 77
        echo "        </ul>

        ";
        // line 79
        $this->loadTemplate("partials/menu_countdown.html.twig", "team/menu.html.twig", 79)->display(twig_array_merge($context, ["contest" => (isset($context["current_team_contest"]) || array_key_exists("current_team_contest", $context) ? $context["current_team_contest"] : (function () { throw new RuntimeError('Variable "current_team_contest" does not exist.', 79, $this->source); })())]));
        // line 80
        echo "    </div>
</nav>
";
        // line 82
        $this->loadTemplate("partials/scoreboard_progress_bar.html.twig", "team/menu.html.twig", 82)->display(twig_array_merge($context, ["margin" =>  -9, "contest" => (isset($context["current_team_contest"]) || array_key_exists("current_team_contest", $context) ? $context["current_team_contest"] : (function () { throw new RuntimeError('Variable "current_team_contest" does not exist.', 82, $this->source); })())]));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "team/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 82,  214 => 80,  212 => 79,  208 => 77,  205 => 76,  202 => 75,  200 => 74,  196 => 72,  194 => 71,  190 => 69,  182 => 62,  172 => 57,  167 => 56,  164 => 55,  160 => 50,  154 => 47,  151 => 46,  149 => 45,  145 => 42,  138 => 41,  134 => 38,  127 => 37,  121 => 34,  114 => 33,  112 => 32,  109 => 31,  105 => 29,  97 => 25,  95 => 24,  88 => 23,  83 => 20,  77 => 19,  69 => 14,  62 => 13,  57 => 9,  55 => 8,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-md navbar-dark bg-dark fixed-top\">
    <a class=\"navbar-brand hidden-sm-down\" href=\"{{ path('team_index') }}\">DOMjudge</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#menuDefault\"
            aria-controls=\"menuDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    {% set current_route = app.request.attributes.get('_route') %}
    
    <div class=\"collapse navbar-collapse\" id=\"menuDefault\">
        <ul class=\"navbar-nav mr-auto\">
        {# 新增 #}
         <li class=\"nav-item {% if current_route in ['team_homepage', 'team_clarification', 'team_clarification_add', 'team_submission'] %}active{% endif %}\">
                <a class=\"nav-link\" href=\"{{ path('team_homepage') }}\"><i class=\"fas fa-home\"></i> Problem list</a>
            </li>



            <li class=\"nav-item {% if current_route in ['team_index', 'team_clarification', 'team_clarification_add', 'team_submission'] %}active{% endif %}\">
                <a class=\"nav-link\" href=\"{{ path('team_index') }}\"><i class=\"fas fa-user\"></i> MyPage </a>
            </li>
        {# 新增 #}
            <li class=\"nav-item {% if current_route == 'team_problems' %}active{% endif %}\">
                {% if is_granted('ROLE_JURY') or current_team_contest.freezeData.started %}
                    <a class=\"nav-link\" href=\"{{ path('team_problems') }}\">
                        <i class=\"fas fa-book-open\"></i> Problemset
                    </a>
                {% else %}
                    <a class=\"nav-link disabled\"><i class=\"fas fa-book-open\"></i> Problemset</a>
                {% endif %}
            </li>
            {% if have_printing %}
                <li class=\"nav-item {% if current_route == 'team_print' %}active{% endif %}\">
                    <a class=\"nav-link\" href=\"{{ path('team_print') }}\"><i class=\"fas fa-file-alt\"></i> Print</a>
                </li>
            {% endif %}
            <li class=\"nav-item {% if current_route in ['team_scoreboard', 'team_team'] %}active{% endif %}\">
                <a class=\"nav-link\" href=\"{{ path('team_scoreboard') }}\"><i class=\"fas fa-list-ol\"></i> Scoreboard</a>
            </li>
            {#-----CCU-----#}
            <li class=\"nav-item {% if current_route in ['team_scoreboard', 'team_team'] %}active{% endif %}\">
                <a class=\"nav-link\" href=\"{{ path('team_compile') }}\"><i class=\"fa fa-window-maximize\"></i> IDE</a>
            </li>
            {#-----CCU-----#}
            {% if is_granted('ROLE_JURY') or is_granted('ROLE_BALLOON') %}
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('jury_index') }}\"><i class=\"fas fa-arrow-right\"></i> Jury</a>
                </li>
            {% endif %}
        </ul>

        <div id=\"submitbut\">
        {#-----CCU-----#} 
        {#close the submit button if the page is in team_compile#}
            {% if is_granted('ROLE_JURY') or current_team_contest.freezeData.started %}
                <a class=\"nav-link justify-content-center \"  data-ajax-modal data-ajax-modal-after=\"initSubmitModal\" href=\"{{ path('team_submit') }}\">
                    <button type=\"button\" class=\"btn btn-success btn-sm\"{% if current_route == 'team_compile' %} style=\"visibility: hidden\"{% endif %}>
                        <i class=\"fas fa-cloud-upload-alt\"></i> Submit
                    </button>
                </a>
            {% else %}
                <a class=\"nav-link justify-content-center\">
                    <button type=\"button\" class=\"btn btn-success btn-sm disabled\" disabled>
                        <i class=\"fas fa-cloud-upload-alt\"></i> Submit
                    </button>
                </a>
            {% endif %}
        {#-----CCU-----#}
        </div>

        {% include 'partials/menu_login_logout_button.html.twig' with {confirmLogout: true} %}

        <ul class=\"navbar-nav\">
            {% if current_team_contests | length > 1 %}
                {% include 'partials/menu_change_contest.html.twig' with {contest: current_team_contest, contests: current_team_contests, change_path: 'team_change_contest', show_no_contest: false} %}
            {% endif %}
        </ul>

        {% include 'partials/menu_countdown.html.twig' with {contest: current_team_contest} %}
    </div>
</nav>
{% include 'partials/scoreboard_progress_bar.html.twig' with {margin: -9, contest: current_team_contest} %}
", "team/menu.html.twig", "/opt/domjudge/domserver/webapp/templates/team/menu.html.twig");
    }
}
