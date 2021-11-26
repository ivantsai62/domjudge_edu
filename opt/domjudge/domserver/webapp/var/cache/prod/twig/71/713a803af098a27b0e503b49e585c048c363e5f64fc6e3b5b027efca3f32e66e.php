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

/* public/menu.html.twig */
class __TwigTemplate_8c1464a71fc263270ba1141536b4e700144ee738ebf4a6cecceaceecf8a7585b extends \Twig\Template
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
        echo "<nav class=\"navbar navbar-expand-md navbar-light bg-light fixed-top\">
    <a class=\"navbar-brand hidden-sm-down\" href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_index");
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
        // line 17
        echo "            <li class=\"nav-item ";
        if (twig_in_filter(($context["current_route"] ?? null), [0 => "public_index", 1 => "public_team"])) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_index");
        echo "\"><i class=\"fas fa-list-ol\"></i> Scoreboard</a>
            </li>
            <li class=\"nav-item ";
        // line 20
        if ((($context["current_route"] ?? null) == "public_problems")) {
            echo "active";
        }
        echo "\">
                ";
        // line 21
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY") || ( !(null === ($context["current_public_contest"] ?? null)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["current_public_contest"] ?? null), "freezeData", [], "any", false, false, false, 21), "started", [], "any", false, false, false, 21)))) {
            // line 22
            echo "                    <a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_problems");
            echo "\">
                        <i class=\"fas fa-book-open\"></i> Problemset
                    </a>
                ";
        } else {
            // line 26
            echo "                    <a class=\"nav-link disabled\"><i class=\"fas fa-book-open\"></i> Problemset</a>
                ";
        }
        // line 28
        echo "            </li>

            ";
        // line 30
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_TEAM")) {
            // line 31
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_index");
            echo "\">
                        <i class=\"fas fa-arrow-right\"></i> Team
                    </a>
                </li>
            ";
        }
        // line 37
        echo "
            ";
        // line 38
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BALLOON"))) {
            // line 39
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_index");
            echo "\"><i class=\"fas fa-arrow-right\"></i> Jury</a>
                </li>
            ";
        }
        // line 43
        echo "        </ul>

        ";
        // line 45
        $this->loadTemplate("partials/menu_login_logout_button.html.twig", "public/menu.html.twig", 45)->display($context);
        // line 46
        echo "
        <ul class=\"navbar-nav\">
            ";
        // line 48
        if ((twig_length_filter($this->env, ($context["current_public_contests"] ?? null)) > 1)) {
            // line 49
            echo "                ";
            $this->loadTemplate("partials/menu_change_contest.html.twig", "public/menu.html.twig", 49)->display(twig_array_merge($context, ["contest" => ($context["current_public_contest"] ?? null), "contests" => ($context["current_public_contests"] ?? null), "change_path" => "public_change_contest", "show_no_contest" => false]));
            // line 50
            echo "            ";
        }
        // line 51
        echo "        </ul>

        ";
        // line 53
        $this->loadTemplate("partials/menu_countdown.html.twig", "public/menu.html.twig", 53)->display(twig_array_merge($context, ["contest" => ($context["current_public_contest"] ?? null)]));
        // line 54
        echo "    </div>
</nav>
";
        // line 56
        $this->loadTemplate("partials/scoreboard_progress_bar.html.twig", "public/menu.html.twig", 56)->display(twig_array_merge($context, ["margin" =>  -9, "contest" => ($context["current_public_contest"] ?? null)]));
    }

    public function getTemplateName()
    {
        return "public/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 56,  143 => 54,  141 => 53,  137 => 51,  134 => 50,  131 => 49,  129 => 48,  125 => 46,  123 => 45,  119 => 43,  113 => 40,  110 => 39,  108 => 38,  105 => 37,  97 => 32,  94 => 31,  92 => 30,  88 => 28,  84 => 26,  76 => 22,  74 => 21,  68 => 20,  63 => 18,  56 => 17,  51 => 9,  49 => 8,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "public/menu.html.twig", "/opt/domjudge/domserver/webapp/templates/public/menu.html.twig");
    }
}
