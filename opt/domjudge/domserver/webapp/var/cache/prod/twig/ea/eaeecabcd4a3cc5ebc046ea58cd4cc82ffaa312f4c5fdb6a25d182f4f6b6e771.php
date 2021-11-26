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

/* jury/problem_testcases.html.twig */
class __TwigTemplate_dd5097d3789b5052ba894ceadff4c20c0d72a4d24d933d97503ee83262ccfb84 extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/problem_testcases.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/problem_testcases.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Testcases for p";
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
    <h1>Testcases for p";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "probid", [], "any", false, false, false, 13), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

    <div class=\"mb-2\">
        <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem", ["probId" => twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "probid", [], "any", false, false, false, 16)]), "html", null, true);
        echo "\">Back to problem p";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "probid", [], "any", false, false, false, 16), "html", null, true);
        echo "</a>
    </div>

    ";
        // line 19
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 20
            echo "        ";
            // line 21
            echo "        ";
            $context["formStart"] = "<form method=\"post\" enctype=\"multipart/form-data\">";
            // line 22
            echo "        ";
            echo ($context["formStart"] ?? null);
            echo "
    ";
        }
        // line 24
        echo "    ";
        if (twig_test_empty(($context["testcases"] ?? null))) {
            // line 25
            echo "        <p class=\"nodata\">No testcase(s) yet.</p>
    ";
        } else {
            // line 27
            echo "        <table class=\"table table-sm table-striped table-hover testcases\">
            <thead>
            <tr>
                <th class=\"testrank\">#</th>
                <th class=\"testsample\">sample</th>";
            // line 33
            if (((twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "subtask", [], "any", false, false, false, 33) != null) && (twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "subtask", [], "any", false, false, false, 33) != 0))) {
                // line 34
                echo "                <th class=\"testsubtask\">task</th>
                ";
            }
            // line 37
            echo "<th>download</th>
                <th>size</th>
                <th>md5</th>
                ";
            // line 40
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 41
                echo "                    <th>upload new</th>
                ";
            }
            // line 43
            echo "                <th>description / image</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["testcases"] ?? null));
            foreach ($context['_seq'] as $context["rank"] => $context["testcase"]) {
                // line 48
                echo "                <tr>
                    <td rowspan=\"2\" class=\"testrank\">
                        <a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcase_move", ["probId" => twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "probid", [], "any", false, false, false, 50), "rank" => twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 50), "direction" => "up"]), "html", null, true);
                echo "\"
                           title=\"Move testcase up\"><i class=\"fas fa-arrow-up\"></i></a><br>
                        ";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 52), "html", null, true);
                echo "<br>
                        <a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcase_move", ["probId" => twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "probid", [], "any", false, false, false, 53), "rank" => twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 53), "direction" => "down"]), "html", null, true);
                echo "\"
                           title=\"Move testcase down\"><i class=\"fas fa-arrow-down\"></i></a>
                    </td>
                    <td rowspan=\"2\" class=\"testsample\">
                        <input type=\"checkbox\" name=\"sample[";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 57), "html", null, true);
                echo "]\" value=\"sample\"
                               ";
                // line 58
                if (twig_get_attribute($this->env, $this->source, $context["testcase"], "sample", [], "any", false, false, false, 58)) {
                    echo "checked";
                }
                echo " />
                    </td>
                    ";
                // line 62
                if (((twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "subtask", [], "any", false, false, false, 62) != null) && (twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "subtask", [], "any", false, false, false, 62) != 0))) {
                    // line 63
                    echo "                    <td rowspan=\"2\" class=\"testsubtask\">
                        <input type=\"number\" class=\"inputsubtask\" min=1 max =\"";
                    // line 64
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "subtask", [], "any", false, false, false, 64), "html", null, true);
                    echo "\" id=\"task[";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 64), "html", null, true);
                    echo "]\" name=\"task[";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 64), "html", null, true);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "task", [], "any", false, false, false, 64), "html", null, true);
                    echo "\"/>
                    </td>
                    ";
                }
                // line 68
                echo "<td class=\"filename\">
                        <a href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcase_fetch", ["probId" => twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "probid", [], "any", false, false, false, 69), "rank" => twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 69), "type" => "input"]), "html", null, true);
                echo "\">
                            p";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "probid", [], "any", false, false, false, 70), "html", null, true);
                echo ".t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 70), "html", null, true);
                echo ".in
                        </a>
                    </td>
                    <td class=\"size\">
                        ";
                // line 74
                echo App\Utils\Utils::printSize(twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["testcaseData"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 74)] ?? null) : null), "input_size", [], "any", false, false, false, 74));
                echo "
                    </td>
                    <td class=\"md5 small\">
                        ";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "md5sumInput", [], "any", false, false, false, 77), "html", null, true);
                echo "
                    </td>
                    ";
                // line 79
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 80
                    echo "                        <td><div class=\"custom-file\">
                            <input type=\"file\" class=\"custom-file-input\" name=\"update_input[";
                    // line 81
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 81), "html", null, true);
                    echo "]\" id=\"update_input_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 81), "html", null, true);
                    echo "\">
                            <label class=\"custom-file-label text-truncate text-muted\" for=\"update_input_";
                    // line 82
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 82), "html", null, true);
                    echo "\">new input file</label>
                        </div></td>
                    ";
                }
                // line 85
                echo "                    <td class=\"testdesc\">
                        <span class=\"testcase-description\">";
                // line 86
                echo $this->extensions['App\Twig\TwigExtension']->descriptionExpand(twig_get_attribute($this->env, $this->source, $context["testcase"], "description", [0 => true], "method", false, false, false, 86));
                echo "</span>
                        ";
                // line 87
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 88
                    echo "                            <textarea class=\"d-none form-control testcase-description-field\" name=\"description[";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 88), "html", null, true);
                    echo "]\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "description", [0 => true], "method", false, false, false, 88), "html", null, true);
                    echo "</textarea>
                            <button type=\"button\" class=\"float-right testcase-edit-description btn btn-secondary btn-sm\">Edit</button>
                        ";
                }
                // line 91
                echo "                    </td>
                </tr>
                <tr>
                    <td class=\"filename\">
                        <a href=\"";
                // line 95
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcase_fetch", ["probId" => twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "probid", [], "any", false, false, false, 95), "rank" => twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 95), "type" => "output"]), "html", null, true);
                echo "\">
                            p";
                // line 96
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "probid", [], "any", false, false, false, 96), "html", null, true);
                echo ".t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 96), "html", null, true);
                echo ".out
                        </a>
                    </td>
                    <td class=\"size\">
                        ";
                // line 100
                echo App\Utils\Utils::printSize(twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["testcaseData"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 100)] ?? null) : null), "output_size", [], "any", false, false, false, 100));
                echo "
                    </td>
                    <td class=\"md5 small\">
                        ";
                // line 103
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "md5sumOutput", [], "any", false, false, false, 103), "html", null, true);
                echo "
                    </td>
                    ";
                // line 105
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 106
                    echo "                        <td><div class=\"custom-file\">
                            <input type=\"file\" class=\"custom-file-input\" name=\"update_output[";
                    // line 107
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 107), "html", null, true);
                    echo "]\" id=\"update_output_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 107), "html", null, true);
                    echo "\">
                            <label class=\"custom-file-label text-truncate text-muted\" for=\"update_output_";
                    // line 108
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 108), "html", null, true);
                    echo "\">new output file</label>
                        </div></td>
                    ";
                }
                // line 111
                echo "                    <td class=\"testimage\">
                        ";
                // line 112
                if ((twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["testcaseData"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 112)] ?? null) : null), "image_size", [], "any", false, false, false, 112) > 0)) {
                    // line 113
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcase_fetch", ["probId" => twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "probid", [], "any", false, false, false, 113), "rank" => twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 113), "type" => "image"]), "html", null, true);
                    echo "\">
                                <span class=\"filename\">p";
                    // line 114
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "probid", [], "any", false, false, false, 114), "html", null, true);
                    echo ".t";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 114), "html", null, true);
                    echo ".";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["testcaseData"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 114)] ?? null) : null), "image_type", [], "any", false, false, false, 114), "html", null, true);
                    echo "</span>
                            </a>
                            ";
                    // line 116
                    if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                        // line 117
                        echo "                            &nbsp;
                            <div class=\"custom-file\">
                                <input type=\"file\" class=\"custom-file-input\" name=\"update_image[";
                        // line 119
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 119), "html", null, true);
                        echo "]\" id=\"update_image_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 119), "html", null, true);
                        echo "\">
                                <label class=\"custom-file-label text-truncate text-muted\" for=\"update_image_";
                        // line 120
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 120), "html", null, true);
                        echo "\">replace image</label>
                            </div>
                            ";
                    }
                    // line 123
                    echo "                        ";
                } else {
                    // line 124
                    echo "                            ";
                    if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                        // line 125
                        echo "                            <div class=\"custom-file\">
                                <input type=\"file\" class=\"custom-file-input\" name=\"update_image[";
                        // line 126
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 126), "html", null, true);
                        echo "]\" id=\"update_image_";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 126), "html", null, true);
                        echo "\">
                                <label class=\"custom-file-label text-truncate text-muted\" for=\"update_image_";
                        // line 127
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["testcase"], "rank", [], "any", false, false, false, 127), "html", null, true);
                        echo "\">add an image</label>
                            </div>
                            ";
                    } else {
                        // line 130
                        echo "                            <span class=\"nodata\">No image</span>
                            ";
                    }
                    // line 132
                    echo "                        ";
                }
                // line 133
                echo "                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['rank'], $context['testcase'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            echo "            </tbody>
        </table>
    ";
        }
        // line 139
        echo "
    ";
        // line 140
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 141
            echo "        <h2>Create new testcase</h2>

        <div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                <div class=\"custom-file\">
                    <input type=\"file\" class=\"custom-file-input\" name=\"add_input\" id=\"add_input\">
                    <label class=\"custom-file-label text-truncate text-muted\" for=\"add_input\">Input testdata</label>
                </div>
            </div>
        </div>

        <div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                <div class=\"custom-file\">
                    <input type=\"file\" class=\"custom-file-input\" name=\"add_output\" id=\"add_output\">
                    <label class=\"custom-file-label text-truncate text-muted\" for=\"add_output\">Output testdata</label>
                </div>
            </div>
        </div>

        <div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                <div class=\"custom-control custom-checkbox\">
                    <input type=\"checkbox\" class=\"custom-control-input\" id=\"add_sample\" name=\"add_sample\">
                    <label class=\"custom-control-label\" for=\"add_sample\">Sample testcase</label>
                </div>
            </div>
        </div>
        ";
            // line 171
            echo "<div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                ";
            // line 173
            if (((twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "subtask", [], "any", false, false, false, 173) != null) && (twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "subtask", [], "any", false, false, false, 173) != 0))) {
                // line 174
                echo "                <td rowspan=\"2\" class=\"testsubtask\">
                    <input type=\"number\" class=\"inputsubtask\" min=1 max =\"";
                // line 175
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "subtask", [], "any", false, false, false, 175), "html", null, true);
                echo "\" name=\"add_task\" id=\"add_task\" /> Task
                </td>
                ";
            }
            // line 178
            echo "            </div>
        </div>";
            // line 181
            echo "<div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                <label for=\"add_desc\">Description</label>
                <textarea name=\"add_desc\" id=\"add_desc\" rows=\"5\" class=\"form-control\"></textarea>
            </div>
        </div>

        <div class=\"form-row\">
            <div class=\"form-group col-sm-4\">
                <div class=\"custom-file\">
                    <input type=\"file\" class=\"custom-file-input\" name=\"add_image\" id=\"add_image\">
                    <label class=\"custom-file-label text-truncate text-muted\" for=\"add_image\">Image</label>
                </div>
            </div>
        </div>

        <input type=\"submit\" class=\"btn btn-primary\" value=\"Submit all changes\">
    ";
        }
        // line 199
        echo "
    ";
        // line 200
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 201
            echo "        ";
            // line 202
            echo "        ";
            $context["formEnd"] = "</form>";
            // line 203
            echo "        ";
            echo ($context["formEnd"] ?? null);
            echo "
    ";
        }
        // line 205
        echo "
    <script>
        \$(function() {
            \$('.testcase-edit-description').on('click', function() {
                var \$button = \$(this);
                var \$description = \$button.parent().find('.testcase-description');
                var \$descriptionInput = \$button.parent().find('.testcase-description-field');

                if (\$description.hasClass('d-none')) {
                    \$description.removeClass('d-none');
                    \$descriptionInput.addClass('d-none');
                    \$button.text('Edit');
                    \$descriptionInput.val(\$description.text());
                } else {
                    \$description.addClass('d-none');
                    \$descriptionInput.removeClass('d-none');
                    \$button.text('Cancel');
                }
            });
        });
    </script>

";
    }

    public function getTemplateName()
    {
        return "jury/problem_testcases.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  476 => 205,  470 => 203,  467 => 202,  465 => 201,  463 => 200,  460 => 199,  440 => 181,  437 => 178,  431 => 175,  428 => 174,  426 => 173,  422 => 171,  392 => 141,  390 => 140,  387 => 139,  382 => 136,  374 => 133,  371 => 132,  367 => 130,  361 => 127,  355 => 126,  352 => 125,  349 => 124,  346 => 123,  340 => 120,  334 => 119,  330 => 117,  328 => 116,  319 => 114,  314 => 113,  312 => 112,  309 => 111,  303 => 108,  297 => 107,  294 => 106,  292 => 105,  287 => 103,  281 => 100,  272 => 96,  268 => 95,  262 => 91,  253 => 88,  251 => 87,  247 => 86,  244 => 85,  238 => 82,  232 => 81,  229 => 80,  227 => 79,  222 => 77,  216 => 74,  207 => 70,  203 => 69,  200 => 68,  188 => 64,  185 => 63,  183 => 62,  176 => 58,  172 => 57,  165 => 53,  161 => 52,  156 => 50,  152 => 48,  148 => 47,  142 => 43,  138 => 41,  136 => 40,  131 => 37,  127 => 34,  125 => 33,  119 => 27,  115 => 25,  112 => 24,  106 => 22,  103 => 21,  101 => 20,  99 => 19,  91 => 16,  83 => 13,  80 => 12,  76 => 11,  70 => 8,  65 => 7,  61 => 6,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/problem_testcases.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/problem_testcases.html.twig");
    }
}
