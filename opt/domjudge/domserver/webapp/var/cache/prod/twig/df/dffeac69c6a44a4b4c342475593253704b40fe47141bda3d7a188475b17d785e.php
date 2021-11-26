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
        
            <li class=\"nav-item ";
        // line 13
        if ((($context["current_route"] ?? null) == "team_problems")) {
            echo "active";
        }
        echo "\">
                ";
        // line 14
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY") || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["current_team_contest"] ?? null), "freezeData", [], "any", false, false, false, 14), "started", [], "any", false, false, false, 14))) {
            // line 15
            echo "                    <a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_problems");
            echo "\">
                        <i class=\"fas fa-book-open\"></i> Problemset
                    </a>
                ";
        } else {
            // line 19
            echo "                    <a class=\"nav-link disabled\"><i class=\"fas fa-book-open\"></i> Problemset</a>
                ";
        }
        // line 21
        echo "            </li>
            ";
        // line 22
        if (($context["have_printing"] ?? null)) {
            // line 23
            echo "                <li class=\"nav-item ";
            if ((($context["current_route"] ?? null) == "team_print")) {
                echo "active";
            }
            echo "\">
                    <a class=\"nav-link\" href=\"";
            // line 24
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_print");
            echo "\"><i class=\"fas fa-file-alt\"></i> Print</a>
                </li>
            ";
        }
        // line 27
        echo "            <li class=\"nav-item ";
        if (twig_in_filter(($context["current_route"] ?? null), [0 => "team_scoreboard", 1 => "team_team"])) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link\" href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_scoreboard");
        echo "\"><i class=\"fas fa-list-ol\"></i> Scoreboard</a>
            </li>";
        // line 31
        echo "<li class=\"nav-item ";
        if (twig_in_filter(($context["current_route"] ?? null), [0 => "team_scoreboard", 1 => "team_team"])) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link\" href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_compile");
        echo "\"><i class=\"fa fa-window-maximize\"></i> IDE</a>
            </li>";
        // line 35
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BALLOON"))) {
            // line 36
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_index");
            echo "\"><i class=\"fas fa-arrow-right\"></i> Jury</a>
                </li>
            ";
        }
        // line 40
        echo "        </ul>

        <div id=\"submitbut\">";
        // line 45
        echo "            ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY") || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["current_team_contest"] ?? null), "freezeData", [], "any", false, false, false, 45), "started", [], "any", false, false, false, 45))) {
            // line 46
            echo "                <a class=\"nav-link justify-content-center \"  data-ajax-modal data-ajax-modal-after=\"initSubmitModal\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_submit");
            echo "\">
                    <button type=\"button\" class=\"btn btn-success btn-sm\"";
            // line 47
            if ((($context["current_route"] ?? null) == "team_compile")) {
                echo " style=\"visibility: hidden\"";
            }
            echo ">
                        <i class=\"fas fa-cloud-upload-alt\"></i> Submit
                    </button>
                </a>
            ";
        } else {
            // line 52
            echo "                <a class=\"nav-link justify-content-center\">
                    <button type=\"button\" class=\"btn btn-success btn-sm disabled\" disabled>
                        <i class=\"fas fa-cloud-upload-alt\"></i> Submit
                    </button>
                </a>
            ";
        }
        // line 59
        echo "</div>

        ";
        // line 61
        $this->loadTemplate("partials/menu_login_logout_button.html.twig", "team/menu.html.twig", 61)->display(twig_array_merge($context, ["confirmLogout" => true]));
        // line 62
        echo "
        <ul class=\"navbar-nav\">
            ";
        // line 64
        if ((twig_length_filter($this->env, ($context["current_team_contests"] ?? null)) > 1)) {
            // line 65
            echo "                ";
            $this->loadTemplate("partials/menu_change_contest.html.twig", "team/menu.html.twig", 65)->display(twig_array_merge($context, ["contest" => ($context["current_team_contest"] ?? null), "contests" => ($context["current_team_contests"] ?? null), "change_path" => "team_change_contest", "show_no_contest" => false]));
            // line 66
            echo "            ";
        }
        // line 67
        echo "        </ul>

        ";
        // line 69
        $this->loadTemplate("partials/menu_countdown.html.twig", "team/menu.html.twig", 69)->display(twig_array_merge($context, ["contest" => ($context["current_team_contest"] ?? null)]));
        // line 70
        echo "    </div>
</nav>
";
        // line 72
        $this->loadTemplate("partials/scoreboard_progress_bar.html.twig", "team/menu.html.twig", 72)->display(twig_array_merge($context, ["margin" =>  -9, "contest" => ($context["current_team_contest"] ?? null)]));
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
        return array (  186 => 72,  182 => 70,  180 => 69,  176 => 67,  173 => 66,  170 => 65,  168 => 64,  164 => 62,  162 => 61,  158 => 59,  150 => 52,  140 => 47,  135 => 46,  132 => 45,  128 => 40,  122 => 37,  119 => 36,  117 => 35,  113 => 32,  106 => 31,  102 => 28,  95 => 27,  89 => 24,  82 => 23,  80 => 22,  77 => 21,  73 => 19,  65 => 15,  63 => 14,  57 => 13,  51 => 9,  49 => 8,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "team/menu.html.twig", "/opt/domjudge/domserver/webapp/templates/team/menu.html.twig");
    }
}
