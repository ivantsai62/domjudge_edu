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

/* jury/problem.html.twig */
class __TwigTemplate_7351f0d89dcbf575f77c8c57544da1e8a70ca22059a4db38f527ace8b0b69059 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'extrahead' => [$this, 'block_extrahead'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "jury/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/problem.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/problem.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Problem ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "probid", [], "any", false, false, false, 4), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    ";
        $this->displayParentBlock("extrahead", $context, $blocks);
        echo "
    ";
        // line 8
        echo twig_call_macro($macros["macros"], "macro_table_extrahead", [], 8, $context, $this->getSourceContext());
        echo "
";
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "
    <h1>Problem ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>ID</th>
                    <td>p";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "probid", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
                </tr>
                ";
        // line 22
        if ($this->extensions['App\Twig\TwigExtension']->showExternalId(($context["problem"] ?? null))) {
            // line 23
            echo "                    <tr>
                        <th>External ID</th>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "externalid", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 28
        echo "                <tr>
                    <th>Name</th>
                    <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "name", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Testcases</th>
                    <td>
                        ";
        // line 35
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "testcases", [], "any", false, false, false, 35))) {
            // line 36
            echo "                            <em>no testcases</em>
                        ";
        } else {
            // line 38
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "testcases", [], "any", false, false, false, 38), "count", [], "any", false, false, false, 38), "html", null, true);
            echo "
                        ";
        }
        // line 40
        echo "                        <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcases", ["probId" => twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "probid", [], "any", false, false, false, 40)]), "html", null, true);
        echo "\">details / edit</a>
                    </td>
                </tr>
                <tr>
                    <th>Timelimit</th>
                    <td>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "timelimit", [], "any", false, false, false, 45), "html", null, true);
        echo " sec</td>
                </tr>
                <tr>
                    <th>Memory limit</th>
                    <td>
                        ";
        // line 50
        if ((twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "memlimit", [], "any", false, false, false, 50) == null)) {
            // line 51
            echo "                            ";
            echo twig_escape_filter($this->env, ($context["defaultMemoryLimit"] ?? null), "html", null, true);
            echo " kB (default)
                        ";
        } else {
            // line 53
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "memlimit", [], "any", false, false, false, 53), "html", null, true);
            echo " kB
                        ";
        }
        // line 55
        echo "                    </td>
                </tr>
                <tr>
                    <th>Output limit</th>
                    <td>
                        ";
        // line 60
        if ((twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "outputlimit", [], "any", false, false, false, 60) == null)) {
            // line 61
            echo "                            ";
            echo twig_escape_filter($this->env, ($context["defaultOutputLimit"] ?? null), "html", null, true);
            echo " kB (default)
                        ";
        } else {
            // line 63
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "outputlimit", [], "any", false, false, false, 63), "html", null, true);
            echo " kB
                        ";
        }
        // line 65
        echo "                    </td>
                </tr>
                ";
        // line 67
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problemtextType", [], "any", false, false, false, 67))) {
            // line 68
            echo "                    <tr>
                        <th>Problem text</th>
                        <td>
                            <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_text", ["probId" => twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "probid", [], "any", false, false, false, 71)]), "html", null, true);
            echo "\">
                                <i title=\"view problem description\"
                                   class=\"fas fa-file-";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problemtextType", [], "any", false, false, false, 73), "html", null, true);
            echo "\"></i>
                            </a>
                        </td>
                    </tr>
                ";
        }
        // line 78
        echo "                <tr>
                    <th>Run script</th>
                    <td class=\"filename\">
                        ";
        // line 81
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "runExecutable", [], "any", false, false, false, 81))) {
            // line 82
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable", ["execId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "runExecutable", [], "any", false, false, false, 82), "execid", [], "any", false, false, false, 82)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "runExecutable", [], "any", false, false, false, 82), "execid", [], "any", false, false, false, 82), "html", null, true);
            echo "</a>
                        ";
        } else {
            // line 84
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable", ["execId" => ($context["defaultRunExecutable"] ?? null)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["defaultRunExecutable"] ?? null), "html", null, true);
            echo "</a>
                            (default)
                        ";
        }
        // line 87
        echo "                    </td>
                </tr>
\t\t";
        // line 89
        if (twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "combinedRunCompare", [], "any", false, false, false, 89)) {
            // line 90
            echo "                  <tr>
                     <th>Compare script</th>
                     <td>Run script combines run and compare script.</td>
                  </tr>
                ";
        } else {
            // line 95
            echo "                  <tr>
                      <th>Compare script</th>
                      <td class=\"filename\">
                          ";
            // line 98
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "compareExecutable", [], "any", false, false, false, 98))) {
                // line 99
                echo "                              <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable", ["execId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "compareExecutable", [], "any", false, false, false, 99), "execid", [], "any", false, false, false, 99)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "compareExecutable", [], "any", false, false, false, 99), "execid", [], "any", false, false, false, 99), "html", null, true);
                echo "</a>
                          ";
            } else {
                // line 101
                echo "                              <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executable", ["execId" => ($context["defaultCompareExecutable"] ?? null)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["defaultCompareExecutable"] ?? null), "html", null, true);
                echo "</a>
                              (default)
                          ";
            }
            // line 104
            echo "                      </td>
                  </tr>
                ";
        }
        // line 107
        echo "                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "specialCompareArgs", [], "any", false, false, false, 107))) {
            // line 108
            echo "                    <tr>
                        <th>Compare script arguments</th>
                        <td class=\"filename\">";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "specialCompareArgs", [], "any", false, false, false, 110), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        // line 113
        echo "                ";
        // line 114
        echo "                ";
        // line 115
        echo "                ";
        // line 116
        echo "            <tr>
                 <th>Restrction language </th>
                ";
        // line 118
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "restrictionlanguages", [], "any", false, false, false, 118))) {
            // line 119
            echo "                        <td class=\"nodata\">none</td>
                    ";
        } else {
            // line 121
            echo "                        <td>
                            ";
            // line 122
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "restrictionlanguages", [], "any", false, false, false, 122));
            foreach ($context['_seq'] as $context["_key"] => $context["languages"]) {
                // line 123
                echo "                                ";
                echo twig_escape_filter($this->env, $context["languages"], "html", null, true);
                echo "<br/>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['languages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "                        </td>
                    ";
        }
        // line 126
        echo " 
                
            </tr>
            </table>
        </div>
    </div>

    <p>";
        // line 134
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 135
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_edit", ["probId" => twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "probid", [], "any", false, false, false, 135)]), "Edit", "primary", "edit");
            echo "
            ";
            // line 136
            echo $this->extensions['App\Twig\TwigExtension']->button($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_delete", ["probId" => twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "probid", [], "any", false, false, false, 136)]), "Delete", "danger", "trash-alt", true);
            echo "
        ";
        }
        // line 138
        echo "        ";
        $this->loadTemplate("jury/partials/rejudge_form.html.twig", "jury/problem.html.twig", 138)->display(twig_array_merge($context, ["table" => "problem", "id" => twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "probid", [], "any", false, false, false, 138), "buttonClass" => "btn-secondary"]));
        // line 139
        echo "    </p>

    <h2>Contests</h2>

    ";
        // line 143
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "contestProblems", [], "any", false, false, false, 143))) {
            // line 144
            echo "        <p class=\"nodata\">No contests defined</p>
    ";
        } else {
            // line 146
            echo "        <div class=\"row\">
            <div class=\"col-md-6\">
                <table class=\"data-table table table-hover table-striped table-sm\">
                    <thead class=\"thead-light\">
                    <tr>
                        <th>CID</th>
                        <th>Contest<br/>shortname</th>
                        <th>Contest<br/>name</th>
                        <th>Problem<br/>shortname</th>
                        <th>Allow<br/>submit</th>
                        <th>Allow<br/>judge</th>
                        <th>Colour</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 161
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "contestProblems", [], "any", false, false, false, 161));
            foreach ($context['_seq'] as $context["_key"] => $context["contestProblem"]) {
                // line 162
                echo "                        ";
                $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contest", ["contestId" => twig_get_attribute($this->env, $this->source, $context["contestProblem"], "cid", [], "any", false, false, false, 162)]);
                // line 163
                echo "                        <tr>
                            <td><a href=\"";
                // line 164
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">c";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contestProblem"], "cid", [], "any", false, false, false, 164), "html", null, true);
                echo "</a></td>
                            <td><a href=\"";
                // line 165
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contestProblem"], "contest", [], "any", false, false, false, 165), "shortname", [], "any", false, false, false, 165), "html", null, true);
                echo "</a></td>
                            <td><a href=\"";
                // line 166
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contestProblem"], "contest", [], "any", false, false, false, 166), "name", [], "any", false, false, false, 166), "html", null, true);
                echo "</a></td>
                            <td><a href=\"";
                // line 167
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contestProblem"], "shortname", [], "any", false, false, false, 167), "html", null, true);
                echo "</a></td>
                            <td><a href=\"";
                // line 168
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, $context["contestProblem"], "allowSubmit", [], "any", false, false, false, 168)), "html", null, true);
                echo "</a></td>
                            <td><a href=\"";
                // line 169
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printYesNo(twig_get_attribute($this->env, $this->source, $context["contestProblem"], "allowJudge", [], "any", false, false, false, 169)), "html", null, true);
                echo "</a></td>
                            ";
                // line 170
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["contestProblem"], "color", [], "any", false, false, false, 170))) {
                    // line 171
                    echo "                                <td><a href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\">&nbsp;</a></td>
                            ";
                } else {
                    // line 173
                    echo "                                <td title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contestProblem"], "color", [], "any", false, false, false, 173), "html", null, true);
                    echo "\">
                                    <a href=\"";
                    // line 174
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\">
                                        <div class=\"circle\" style=\"background-color: ";
                    // line 175
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contestProblem"], "color", [], "any", false, false, false, 175), "html", null, true);
                    echo "\"></div>
                                    </a>
                                </td>
                            ";
                }
                // line 179
                echo "                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contestProblem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            echo "                    </tbody>
                </table>
            </div>
        </div>
    ";
        }
        // line 186
        echo "
    <h2>Submissions for ";
        // line 187
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "name", [], "any", false, false, false, 187), "html", null, true);
        echo "</h2>

    <div data-ajax-refresh-target>";
        // line 190
        $this->loadTemplate("jury/partials/submission_list.html.twig", "jury/problem.html.twig", 190)->display(twig_array_merge($context, ["showTestcases" => false]));
        // line 191
        echo "    </div>

";
    }

    public function getTemplateName()
    {
        return "jury/problem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  471 => 191,  469 => 190,  464 => 187,  461 => 186,  454 => 181,  447 => 179,  440 => 175,  436 => 174,  431 => 173,  425 => 171,  423 => 170,  417 => 169,  411 => 168,  405 => 167,  399 => 166,  393 => 165,  387 => 164,  384 => 163,  381 => 162,  377 => 161,  360 => 146,  356 => 144,  354 => 143,  348 => 139,  345 => 138,  340 => 136,  336 => 135,  334 => 134,  325 => 126,  321 => 125,  312 => 123,  308 => 122,  305 => 121,  301 => 119,  299 => 118,  295 => 116,  293 => 115,  291 => 114,  289 => 113,  283 => 110,  279 => 108,  276 => 107,  271 => 104,  262 => 101,  254 => 99,  252 => 98,  247 => 95,  240 => 90,  238 => 89,  234 => 87,  225 => 84,  217 => 82,  215 => 81,  210 => 78,  202 => 73,  197 => 71,  192 => 68,  190 => 67,  186 => 65,  180 => 63,  174 => 61,  172 => 60,  165 => 55,  159 => 53,  153 => 51,  151 => 50,  143 => 45,  134 => 40,  128 => 38,  124 => 36,  122 => 35,  114 => 30,  110 => 28,  104 => 25,  100 => 23,  98 => 22,  93 => 20,  83 => 13,  80 => 12,  76 => 11,  70 => 8,  65 => 7,  61 => 6,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/problem.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/problem.html.twig");
    }
}
