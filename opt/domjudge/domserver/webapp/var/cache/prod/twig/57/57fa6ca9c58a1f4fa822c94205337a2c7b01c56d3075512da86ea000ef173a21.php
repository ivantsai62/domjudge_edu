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

/* partials/problem_list.html.twig */
class __TwigTemplate_36b40026a84214b4b39acf3a21faf2db2cd3dc0666dbd32abd45e48bbb9fb3e3 extends \Twig\Template
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
        // line 2
        echo "
<h1 class=\"mt-4 text-center\">Contest problems</h1>

";
        // line 5
        if (twig_test_empty(($context["problems"] ?? null))) {
            // line 6
            echo "    <div class=\"alert alert-secondary\">No problem texts available at this point.</div>
";
        } else {
            // line 8
            echo "

    <div class=\"container\">
        <div class=\"row problem-list\">
            ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["problems"] ?? null), 3, []));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 13
                echo "                <div class=\"col-md-12\">
                    <div class=\"card-deck my-md-3\">
                
                        ";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["problemData"]) {
                    // line 17
                    echo "                      
                            ";
                    // line 18
                    if (twig_test_empty($context["problemData"])) {
                        // line 19
                        echo "                                <div class=\"card\" style=\"border: none;\"></div>
                            ";
                    } else {
                        // line 21
                        echo "                                ";
                        $context["problem"] = twig_get_attribute($this->env, $this->source, $context["problemData"], 0, [], "any", false, false, false, 21);
                        // line 22
                        echo "                                ";
                        $context["numsamples"] = twig_get_attribute($this->env, $this->source, $context["problemData"], "numsamples", [], "any", false, false, false, 22);
                        // line 23
                        echo "                               
                                
                                
                              

                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <h3 class=\"card-title\">
                                            ";
                        // line 31
                        if (twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "color", [], "any", false, false, false, 31)) {
                            // line 32
                            echo "                                                <div class=\"circle\"
                                                     style=\"background-color: ";
                            // line 33
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "color", [], "any", false, false, false, 33), "html", null, true);
                            echo ";\"></div>
                                                Problem ";
                            // line 34
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "shortName", [], "any", false, false, false, 34), "html", null, true);
                            echo "
                                            ";
                        }
                        // line 36
                        echo "                                        </h3>
                                        <h4 class=\"card-subtitle mb-2 text-muted\">
                                            ";
                        // line 38
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 38), "name", [], "any", false, false, false, 38), "html", null, true);
                        echo "
                                        </h4>
                                        ";
                        // line 40
                        if (($context["showLimits"] ?? null)) {
                            // line 41
                            echo "                                            <h5 class=\"card-subtitle mb-2 text-muted\">
                                                Limits: ";
                            // line 42
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 42), "timelimit", [], "any", false, false, false, 42), "html", null, true);
                            echo "
                                                second";
                            // line 44
                            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 44), "timelimit", [], "any", false, false, false, 44) > 1)) {
                                echo "s";
                            }
                            // line 45
                            if (($context["timeFactorDiffers"] ?? null)) {
                                // line 46
                                echo "<sup>*</sup>
                                                ";
                            }
                            // line 48
                            echo "                                                /
                                                ";
                            // line 49
                            echo App\Utils\Utils::printSize((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, true, false, 49), "memlimit", [], "any", true, true, false, 49)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, true, false, 49), "memlimit", [], "any", false, false, false, 49), ($context["defaultMemoryLimit"] ?? null))) : (($context["defaultMemoryLimit"] ?? null))) * 1024));
                            echo "
                                            </h5>
                                        ";
                        }
                        // line 52
                        echo "
                                        ";
                        // line 53
                        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 53), "problemtextType", [], "any", false, false, false, 53))) {
                            // line 54
                            echo "                                            <div class=\"text-center\">
                                                <a class=\"btn btn-secondary\" role=\"button\"
                                                   href=\"";
                            // line 56
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["problem_text_path"] ?? null), ["probId" => twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "probid", [], "any", false, false, false, 56)]), "html", null, true);
                            echo "\">
                                                    <i class=\"fas fa-file-";
                            // line 57
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 57), "problemtextType", [], "any", false, false, false, 57), "html", null, true);
                            echo "\"></i>
                                                    problem text
                                                </a>
                                            </div>
                                            
                                        ";
                        }
                        // line 63
                        echo "
                                        ";
                        // line 64
                        if ((($context["numsamples"] ?? null) > 0)) {
                            // line 65
                            echo "                                            <div>
                                                <br/>
                                            </div>
                                            <h4 class=\"card-subtitle mb-2\">Samples</h4>
                                            <ol class=\"text-center list-group list-group-flush\">
                                                ";
                            // line 70
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(range(1, ($context["numsamples"] ?? null)));
                            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                // line 71
                                echo "                                                    <li class=\"list-group-item\">
                                                        <a class=\"btn btn-outline-secondary\" role=\"button\"
                                                           href=\"";
                                // line 73
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["problem_sample_testcase_path"] ?? null), ["probId" => twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "probid", [], "any", false, false, false, 73), "type" => "input", "index" => $context["i"]]), "html", null, true);
                                echo "\">
                                                            input ";
                                // line 74
                                if ((($context["numsamples"] ?? null) > 1)) {
                                    echo "#";
                                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                                }
                                // line 75
                                echo "                                                        </a>
                                                        <a class=\"btn btn-outline-secondary\" role=\"button\"
                                                           href=\"";
                                // line 77
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["problem_sample_testcase_path"] ?? null), ["probId" => twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "probid", [], "any", false, false, false, 77), "type" => "output", "index" => $context["i"]]), "html", null, true);
                                echo "\">
                                                            output ";
                                // line 78
                                if ((($context["numsamples"] ?? null) > 1)) {
                                    echo "#";
                                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                                }
                                // line 79
                                echo "                                                        </a>
                                                    </li>
                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 82
                            echo "                                                <li class=\"list-group-item\">
                                                    <a class=\"btn btn-outline-secondary\" role=\"button\"
                                                       href=\"";
                            // line 84
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["problem_sample_zip_path"] ?? null), ["probId" => twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "probid", [], "any", false, false, false, 84)]), "html", null, true);
                            echo "\">
                                                        zip with all samples
                                                    </a>
                                                </li>
                                            </ol>
                                        ";
                        }
                        // line 90
                        echo "                                    </div>
                                </div>
                            ";
                    }
                    // line 93
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problemData'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 94
                echo "                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "        </div>

        ";
            // line 99
            if ((($context["showLimits"] ?? null) && ($context["timeFactorDiffers"] ?? null))) {
                // line 100
                echo "            <div class=\"row\">
                <div class=\"col-md-12 my-sm-3\">
                    <div class=\" alert alert-secondary\" role=\"alert\">
                        * language time factors apply
                    </div>
                </div>
            </div>
        ";
            }
            // line 108
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/problem_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 108,  253 => 100,  251 => 99,  247 => 97,  239 => 94,  233 => 93,  228 => 90,  219 => 84,  215 => 82,  207 => 79,  202 => 78,  198 => 77,  194 => 75,  189 => 74,  185 => 73,  181 => 71,  177 => 70,  170 => 65,  168 => 64,  165 => 63,  156 => 57,  152 => 56,  148 => 54,  146 => 53,  143 => 52,  137 => 49,  134 => 48,  130 => 46,  128 => 45,  124 => 44,  120 => 42,  117 => 41,  115 => 40,  110 => 38,  106 => 36,  101 => 34,  97 => 33,  94 => 32,  92 => 31,  82 => 23,  79 => 22,  76 => 21,  72 => 19,  70 => 18,  67 => 17,  63 => 16,  58 => 13,  54 => 12,  48 => 8,  44 => 6,  42 => 5,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/problem_list.html.twig", "/opt/domjudge/domserver/webapp/templates/partials/problem_list.html.twig");
    }
}
