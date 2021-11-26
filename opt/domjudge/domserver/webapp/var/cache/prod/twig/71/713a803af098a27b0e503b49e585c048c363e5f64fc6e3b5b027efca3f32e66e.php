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
            <li class=\"nav-item ";
        // line 12
        if (twig_in_filter(($context["current_route"] ?? null), [0 => "public_index", 1 => "public_team", 2 => "public_homepage"])) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_homepage");
        echo "\"><i class=\"fas fa-home\"></i> HomePage</a>
            </li>

            <li class=\"nav-item ";
        // line 16
        if (twig_in_filter(($context["current_route"] ?? null), [0 => "public_index", 1 => "public_team"])) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_index");
        echo "\"><i class=\"fas fa-list-ol\"></i> Scoreboard</a>
            </li>
            <li class=\"nav-item ";
        // line 19
        if ((($context["current_route"] ?? null) == "public_problems")) {
            echo "active";
        }
        echo "\">
                ";
        // line 20
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY") || ( !(null === ($context["current_public_contest"] ?? null)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["current_public_contest"] ?? null), "freezeData", [], "any", false, false, false, 20), "started", [], "any", false, false, false, 20)))) {
            // line 21
            echo "                    <a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_problems");
            echo "\">
                        <i class=\"fas fa-book-open\"></i> Problemset
                    </a>
                ";
        } else {
            // line 25
            echo "                    <a class=\"nav-link disabled\"><i class=\"fas fa-book-open\"></i> Problemset</a>
                ";
        }
        // line 27
        echo "            </li>

            ";
        // line 29
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_TEAM")) {
            // line 30
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_index");
            echo "\">
                        <i class=\"fas fa-arrow-right\"></i> Team
                    </a>
                </li>
            ";
        }
        // line 36
        echo "
            ";
        // line 37
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BALLOON"))) {
            // line 38
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_index");
            echo "\"><i class=\"fas fa-arrow-right\"></i> Jury</a>
                </li>
            ";
        }
        // line 42
        echo "        </ul>

        ";
        // line 44
        $this->loadTemplate("partials/menu_login_logout_button.html.twig", "public/menu.html.twig", 44)->display($context);
        // line 45
        echo "
        <ul class=\"navbar-nav\">
            ";
        // line 47
        if ((twig_length_filter($this->env, ($context["current_public_contests"] ?? null)) > 1)) {
            // line 48
            echo "                ";
            $this->loadTemplate("partials/menu_change_contest.html.twig", "public/menu.html.twig", 48)->display(twig_array_merge($context, ["contest" => ($context["current_public_contest"] ?? null), "contests" => ($context["current_public_contests"] ?? null), "change_path" => "public_change_contest", "show_no_contest" => false]));
            // line 49
            echo "            ";
        }
        // line 50
        echo "        </ul>

        ";
        // line 52
        $this->loadTemplate("partials/menu_countdown.html.twig", "public/menu.html.twig", 52)->display(twig_array_merge($context, ["contest" => ($context["current_public_contest"] ?? null)]));
        // line 53
        echo "    </div>
</nav>
";
        // line 55
        $this->loadTemplate("partials/scoreboard_progress_bar.html.twig", "public/menu.html.twig", 55)->display(twig_array_merge($context, ["margin" =>  -9, "contest" => ($context["current_public_contest"] ?? null)]));
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
        return array (  158 => 55,  154 => 53,  152 => 52,  148 => 50,  145 => 49,  142 => 48,  140 => 47,  136 => 45,  134 => 44,  130 => 42,  124 => 39,  121 => 38,  119 => 37,  116 => 36,  108 => 31,  105 => 30,  103 => 29,  99 => 27,  95 => 25,  87 => 21,  85 => 20,  79 => 19,  74 => 17,  68 => 16,  62 => 13,  56 => 12,  51 => 9,  49 => 8,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "public/menu.html.twig", "/opt/domjudge/domserver/webapp/templates/public/menu.html.twig");
    }
}
