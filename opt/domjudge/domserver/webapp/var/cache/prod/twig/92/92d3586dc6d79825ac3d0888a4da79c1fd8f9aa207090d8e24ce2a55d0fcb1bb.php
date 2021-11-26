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

/* team/partials/submission_list.html.twig */
class __TwigTemplate_2d1fd33586a337ae816f8433624020da150b1c2be9cd58cbbe21c2bf37e2cf56 extends \Twig\Template
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
        // line 3
        if (twig_test_empty(($context["submissions"] ?? null))) {
            // line 4
            echo "    <div class=\"alert alert-warning\">No submissions</div>
";
        } else {
            // line 6
            echo "    <table class=\"data-table table table-hover table-striped table-sm submissions-table\">
        <thead class=\"thead-light\">
        <tr>
            <th scope=\"col\">time</th>
            <th scope=\"col\">problem</th>
            <th scope=\"col\">lang</th>
            <th scope=\"col\">result</th>
        </tr>
        </thead>
        <tbody>";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["submissions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["submission"]) {
                // line 17
                echo "            ";
                $context["link"] = null;
                // line 18
                echo "            ";
                if ((((((twig_get_attribute($this->env, $this->source, $context["submission"], "submittime", [], "any", false, false, false, 18) < twig_get_attribute($this->env, $this->source, ($context["current_team_contest"] ?? null), "endtime", [], "any", false, false, false, 18)) && twig_get_attribute($this->env, $this->source, $context["submission"], "result", [], "any", false, false, false, 18)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 18), "first", [], "any", false, false, false, 18))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 18), "first", [], "any", false, false, false, 18), "result", [], "any", false, false, false, 18))) && ( !($context["verificationRequired"] ?? null) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 18), "first", [], "any", false, false, false, 18), "verified", [], "any", false, false, false, 18)))) {
                    // line 19
                    echo "                ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_submission", ["submitId" => twig_get_attribute($this->env, $this->source, $context["submission"], "submitid", [], "any", false, false, false, 19)]);
                    // line 20
                    echo "            ";
                }
                // line 21
                echo "            ";
                $context["classes"] = "";
                // line 22
                echo "            ";
                if ( !twig_get_attribute($this->env, $this->source, $context["submission"], "valid", [], "any", false, false, false, 22)) {
                    // line 23
                    echo "                ";
                    $context["classes"] = (($context["classes"] ?? null) . " ignore");
                    // line 24
                    echo "            ";
                }
                // line 25
                echo "            ";
                if ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 25), "first", [], "any", false, false, false, 25)) ||  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 25), "first", [], "any", false, false, false, 25), "seen", [], "any", false, false, false, 25))) {
                    // line 26
                    echo "                ";
                    $context["classes"] = (($context["classes"] ?? null) . " unseen");
                    // line 27
                    echo "            ";
                }
                // line 28
                echo "            <tr class=\"";
                echo twig_escape_filter($this->env, ($context["classes"] ?? null), "html", null, true);
                echo "\">
                <td>
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" ";
                // line 30
                if (($context["link"] ?? null)) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\"";
                }
                echo ">
                        ";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, $context["submission"], "submittime", [], "any", false, false, false, 31), null, twig_get_attribute($this->env, $this->source, $context["submission"], "contest", [], "any", false, false, false, 31)), "html", null, true);
                echo "
                    </a>
                </td>
                <td class=\"probid\">
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" ";
                // line 35
                if (($context["link"] ?? null)) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\"";
                }
                echo " title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "problem", [], "any", false, false, false, 35), "name", [], "any", false, false, false, 35), "html", null, true);
                echo "\">
                        ";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "contestProblem", [], "any", false, false, false, 36), "shortname", [], "any", false, false, false, 36), "html", null, true);
                echo "
                    </a>
                </td>
                <td class=\"langid\">
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" ";
                // line 40
                if (($context["link"] ?? null)) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\"";
                }
                echo " title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "language", [], "any", false, false, false, 40), "name", [], "any", false, false, false, 40), "html", null, true);
                echo "\">
                        ";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["submission"], "langid", [], "any", false, false, false, 41), "html", null, true);
                echo "
                    </a>
                </td>
                <td>
                    <a data-ajax-modal data-ajax-modal-after=\"markSeen\" ";
                // line 45
                if (($context["link"] ?? null)) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\"";
                }
                echo ">";
                // line 46
                if ((twig_get_attribute($this->env, $this->source, $context["submission"], "submittime", [], "any", false, false, false, 46) > twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "contest", [], "any", false, false, false, 46), "endtime", [], "any", false, false, false, 46))) {
                    // line 47
                    echo "                            ";
                    echo $this->extensions['App\Twig\TwigExtension']->printResult("too-late");
                } elseif ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 48
$context["submission"], "judgings", [], "any", false, false, false, 48), "first", [], "any", false, false, false, 48)) || twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 48), "first", [], "any", false, false, false, 48), "result", [], "any", false, false, false, 48)))) {
                    // line 49
                    echo $this->extensions['App\Twig\TwigExtension']->printResult("");
                } elseif ((                // line 50
($context["verificationRequired"] ?? null) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 50), "first", [], "any", false, false, false, 50), "verified", [], "any", false, false, false, 50))) {
                    // line 51
                    echo $this->extensions['App\Twig\TwigExtension']->printResult("");
                } elseif (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 54
$context["submission"], "judgings", [], "any", false, false, false, 54), "first", [], "any", false, false, false, 54), "result", [], "any", false, false, false, 54), [0 => "correct", 1 => "no-output"])) {
                    // line 55
                    echo $this->extensions['App\Twig\TwigExtension']->printResult(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 55), "first", [], "any", false, false, false, 55), "result", [], "any", false, false, false, 55));
                } else {
                    // line 57
                    echo "                        ";
                    $context["part"] = false;
                    // line 58
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "problem", [], "any", false, false, false, 58), "subtask", [], "any", false, false, false, 58))) {
                        // line 59
                        $context["TaskResults"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 59), "first", [], "any", false, false, false, 59), "TaskResult", [], "any", false, false, false, 59);
                        // line 60
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["TaskResults"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["TaskResult"]) {
                            if (($context["TaskResult"] == 1)) {
                                // line 61
                                echo "                        ";
                                $context["part"] = true;
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['TaskResult'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                    }
                    // line 64
                    if (($context["part"] ?? null)) {
                        // line 65
                        echo $this->extensions['App\Twig\TwigExtension']->printResult("partially_correct");
                    } else {
                        // line 67
                        echo $this->extensions['App\Twig\TwigExtension']->printResult(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["submission"], "judgings", [], "any", false, false, false, 67), "first", [], "any", false, false, false, 67), "result", [], "any", false, false, false, 67));
                    }
                }
                // line 71
                echo "</a>
                </td>
            </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "        </tbody>
    </table>
";
        }
    }

    public function getTemplateName()
    {
        return "team/partials/submission_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 75,  201 => 71,  197 => 67,  194 => 65,  192 => 64,  183 => 61,  178 => 60,  176 => 59,  174 => 58,  171 => 57,  168 => 55,  166 => 54,  164 => 51,  162 => 50,  160 => 49,  158 => 48,  155 => 47,  153 => 46,  146 => 45,  139 => 41,  129 => 40,  122 => 36,  112 => 35,  105 => 31,  97 => 30,  91 => 28,  88 => 27,  85 => 26,  82 => 25,  79 => 24,  76 => 23,  73 => 22,  70 => 21,  67 => 20,  64 => 19,  61 => 18,  58 => 17,  54 => 16,  43 => 6,  39 => 4,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "team/partials/submission_list.html.twig", "/opt/domjudge/domserver/webapp/templates/team/partials/submission_list.html.twig");
    }
}
