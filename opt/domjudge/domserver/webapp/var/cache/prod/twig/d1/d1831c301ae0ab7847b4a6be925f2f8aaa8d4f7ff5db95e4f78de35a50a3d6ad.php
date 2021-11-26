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

/* team/partials/index_content.html.twig */
class __TwigTemplate_b9390a88bdd2c4138f1bf79e4735a2521aa29220b6468ce4deb782a04f00b1e5 extends \Twig\Template
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
        if (twig_test_empty(($context["contest"] ?? null))) {
            // line 2
            echo "    <h1 id=\"teamwelcome\" class=\"text-center\">Welcome team <span id=\"teamwelcometeam\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "name", [], "any", false, false, false, 2), "html", null, true);
            echo "</span>!</h1>
    <h2 id=\"contestnotstarted\" class=\"text-center\">There's no active contest for you (yet).</h2>
";
        } elseif ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 4
($context["contest"] ?? null), "freezeData", [], "any", false, false, false, 4), "started", [], "any", false, false, false, 4)) {
            // line 5
            echo "    <h1 id=\"teamwelcome\" class=\"text-center\">Welcome team <span id=\"teamwelcometeam\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "name", [], "any", false, false, false, 5), "html", null, true);
            echo "</span>!</h1>
    <h2 id=\"contestnotstarted\" class=\"text-center\">
        Contest ";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printContestStart(($context["contest"] ?? null)), "html", null, true);
            echo "
    </h2>
";
        } else {
            // line 10
            echo "    <div id=\"teamscoresummary\">
        ";
            // line 11
            $context["displayRank"] =  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "freezeData", [], "any", false, false, false, 11), "showFrozen", [], "any", false, false, false, 11);
            // line 12
            echo "        ";
            $this->loadTemplate("partials/scoreboard_table.html.twig", "team/partials/index_content.html.twig", 12)->display(twig_array_merge($context, ["displayRank" => ($context["displayRank"] ?? null), "jury" => false, "public" => false]));
            // line 13
            echo "    </div>

    <div class=\"mt-4\" data-flash-messages>
        ";
            // line 16
            $this->loadTemplate("partials/messages.html.twig", "team/partials/index_content.html.twig", 16)->display($context);
            // line 17
            echo "    </div>

    <div class=\"row\">
        <div class=\"col\">
            <h3 class=\"teamoverview\">Submissions</h3>

            ";
            // line 23
            $this->loadTemplate("team/partials/submission_list.html.twig", "team/partials/index_content.html.twig", 23)->display($context);
            // line 24
            echo "        </div>
        <div class=\"col\">
            <h3 class=\"teamoverview\">Clarifications</h3>
            ";
            // line 27
            if (twig_test_empty(($context["clarifications"] ?? null))) {
                // line 28
                echo "                <p class=\"nodata\">No clarifications.</p>
            ";
            } else {
                // line 30
                echo "                ";
                $this->loadTemplate("team/partials/clarification_list.html.twig", "team/partials/index_content.html.twig", 30)->display(twig_array_merge($context, ["clarifications" => ($context["clarifications"] ?? null)]));
                // line 31
                echo "            ";
            }
            // line 32
            echo "
            <h3 class=\"teamoverview\">Clarification Requests</h3>
            ";
            // line 34
            if (twig_test_empty(($context["clarificationRequests"] ?? null))) {
                // line 35
                echo "                <p class=\"nodata\">No clarification request.</p>
            ";
            } else {
                // line 37
                echo "                ";
                $this->loadTemplate("team/partials/clarification_list.html.twig", "team/partials/index_content.html.twig", 37)->display(twig_array_merge($context, ["clarifications" => ($context["clarificationRequests"] ?? null)]));
                // line 38
                echo "            ";
            }
            // line 39
            echo "
            <div class=\"m-1\">
                <a href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_clarification_add");
            echo "\" class=\"btn btn-secondary btn-sm\" data-ajax-modal>
                    request clarification
                </a>
            </div>
        </div>
    </div>
";
        }
        // line 48
        if (((isset($context["ajax"]) || array_key_exists("ajax", $context)) && ($context["ajax"] ?? null))) {
            // line 49
            echo "    ";
            $this->loadTemplate("partials/scoreboard_progress_bar.html.twig", "team/partials/index_content.html.twig", 49)->display(twig_array_merge($context, ["margin" =>  -9, "contest" => ($context["current_team_contest"] ?? null)]));
        }
    }

    public function getTemplateName()
    {
        return "team/partials/index_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 49,  131 => 48,  121 => 41,  117 => 39,  114 => 38,  111 => 37,  107 => 35,  105 => 34,  101 => 32,  98 => 31,  95 => 30,  91 => 28,  89 => 27,  84 => 24,  82 => 23,  74 => 17,  72 => 16,  67 => 13,  64 => 12,  62 => 11,  59 => 10,  53 => 7,  47 => 5,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "team/partials/index_content.html.twig", "/opt/domjudge/domserver/webapp/templates/team/partials/index_content.html.twig");
    }
}
