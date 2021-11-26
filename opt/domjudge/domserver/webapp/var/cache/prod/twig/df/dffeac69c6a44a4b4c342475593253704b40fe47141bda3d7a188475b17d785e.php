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
class __TwigTemplate_fa15e66070832ef4f808ef64840290414436581c3a4cc94490f6d83e9a7f84a6 extends \Twig\Template
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
        $context["current_route"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 8), "attributes", [], "any", false, false, false, 8), "get", [0 => "_route"], "method", false, false, false, 8);
        // line 9
        echo "    
    <div class=\"collapse navbar-collapse\" id=\"menuDefault\">
        <ul class=\"navbar-nav mr-auto\">
        ";
        // line 13
        echo "         <li class=\"nav-item ";
        if (twig_in_filter(($context["current_route"] ?? null), [0 => "team_homepage", 1 => "team_clarification", 2 => "team_clarification_add", 3 => "team_submission"])) {
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
        if (twig_in_filter(($context["current_route"] ?? null), [0 => "team_index", 1 => "team_clarification", 2 => "team_clarification_add", 3 => "team_submission"])) {
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
        if ((($context["current_route"] ?? null) == "team_problems")) {
            echo "active";
        }
        echo "\">
                ";
        // line 24
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY") || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["current_team_contest"] ?? null), "freezeData", [], "any", false, false, false, 24), "started", [], "any", false, false, false, 24))) {
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
        if (($context["have_printing"] ?? null)) {
            // line 33
            echo "                <li class=\"nav-item ";
            if ((($context["current_route"] ?? null) == "team_print")) {
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
        if (twig_in_filter(($context["current_route"] ?? null), [0 => "team_scoreboard", 1 => "team_team"])) {
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
        if (twig_in_filter(($context["current_route"] ?? null), [0 => "team_scoreboard", 1 => "team_team"])) {
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
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY") || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["current_team_contest"] ?? null), "freezeData", [], "any", false, false, false, 55), "started", [], "any", false, false, false, 55))) {
            // line 56
            echo "                <a class=\"nav-link justify-content-center \"  data-ajax-modal data-ajax-modal-after=\"initSubmitModal\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_submit");
            echo "\">
                    <button type=\"button\" class=\"btn btn-success btn-sm\"";
            // line 57
            if ((($context["current_route"] ?? null) == "team_compile")) {
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
        if ((twig_length_filter($this->env, ($context["current_team_contests"] ?? null)) > 1)) {
            // line 75
            echo "                ";
            $this->loadTemplate("partials/menu_change_contest.html.twig", "team/menu.html.twig", 75)->display(twig_array_merge($context, ["contest" => ($context["current_team_contest"] ?? null), "contests" => ($context["current_team_contests"] ?? null), "change_path" => "team_change_contest", "show_no_contest" => false]));
            // line 76
            echo "            ";
        }
        // line 77
        echo "        </ul>

        ";
        // line 79
        $this->loadTemplate("partials/menu_countdown.html.twig", "team/menu.html.twig", 79)->display(twig_array_merge($context, ["contest" => ($context["current_team_contest"] ?? null)]));
        // line 80
        echo "    </div>
</nav>
";
        // line 82
        $this->loadTemplate("partials/scoreboard_progress_bar.html.twig", "team/menu.html.twig", 82)->display(twig_array_merge($context, ["margin" =>  -9, "contest" => ($context["current_team_contest"] ?? null)]));
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
        return array (  212 => 82,  208 => 80,  206 => 79,  202 => 77,  199 => 76,  196 => 75,  194 => 74,  190 => 72,  188 => 71,  184 => 69,  176 => 62,  166 => 57,  161 => 56,  158 => 55,  154 => 50,  148 => 47,  145 => 46,  143 => 45,  139 => 42,  132 => 41,  128 => 38,  121 => 37,  115 => 34,  108 => 33,  106 => 32,  103 => 31,  99 => 29,  91 => 25,  89 => 24,  82 => 23,  77 => 20,  71 => 19,  63 => 14,  56 => 13,  51 => 9,  49 => 8,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "team/menu.html.twig", "/opt/domjudge/domserver/webapp/templates/team/menu.html.twig");
    }
}
