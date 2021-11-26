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

/* team/homepage.html.twig */
class __TwigTemplate_1eeabe94c9945a0a11872652ec535d692bdb61463d50454f3ec9df2dc2b44cb2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "team/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("team/base.html.twig", "team/homepage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Contest problems - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "

";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "      

";
        // line 10
        if ((($context["contest"] ?? null) == null)) {
            // line 11
            echo "<h1 class=\"mt-4 text-left\">No Contest now</h1>

";
        } else {
            // line 14
            echo "
<h1 class=\"mt-4 text-left\">Problem list - ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "name", [], "any", false, false, false, 15), "html", null, true);
            echo "  </h1>


<div class=\"table-wrapper\">

    <table class=\"data-table table table-sm table-striped table-borderexited\" style=\"width:auto\">
    
    <thead class=\"\">
    

        
        <tr>
            <th scope=\"col\">#</th>
            <th> Problem Name </th>
            <th> Time Limit </th> 
            <th> Memory Limit </th>
            <th> Restriction Languages </th>
            <th> Problems Group </th>
        </tr>
    </thead>

    <tbody>
        
        ";
            // line 38
            $context["num_group"] = 0;
            // line 39
            echo "        
            ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["problems"] ?? null), 1, []));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 41
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["problemData"]) {
                    // line 42
                    echo "                              
                                    ";
                    // line 43
                    if (twig_test_empty($context["problemData"])) {
                        // line 44
                        echo "                                        <div class=\"card\" style=\"border: none;\"></div>
                                    ";
                    } else {
                        // line 46
                        echo "                                        ";
                        $context["problem"] = twig_get_attribute($this->env, $this->source, $context["problemData"], 0, [], "any", false, false, false, 46);
                        // line 47
                        echo "          
        
        <tr>
            <td width = \"5%\">
                 <a href=\"/public/problems/";
                        // line 51
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 51), "probid", [], "any", false, false, false, 51), "html", null, true);
                        echo "/text\" target=\"_blank\" style=\"text-decoration:none; color:black\">

                 ";
                        // line 53
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 53), "probid", [], "any", false, false, false, 53), "html", null, true);
                        echo "</a></td>
                
            <td width=\"30%\">
                <a href=\"/team/problem_list/";
                        // line 56
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 56), "probid", [], "any", false, false, false, 56), "html", null, true);
                        echo "\" target=\"_blank\" style=\"text-decoration:none;\">
                
                 ";
                        // line 58
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 58), "name", [], "any", false, false, false, 58), "html", null, true);
                        echo "</a></td>

            <td>";
                        // line 60
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 60), "timelimit", [], "any", false, false, false, 60), "html", null, true);
                        echo "</td>

            <td>";
                        // line 62
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 62), "memlimit", [], "any", false, false, false, 62), "html", null, true);
                        echo "</td>
            
            <td>";
                        // line 64
                        echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 64), "restrictionlanguages", [], "any", false, false, false, 64), ", "), "html", null, true);
                        echo "</td>

            <td>
            ";
                        // line 67
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 67), "problemsgroup", [], "any", false, false, false, 67) != null)) {
                            echo " 
        
            ";
                            // line 69
                            echo twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 69), "problemsgroup", [], "any", false, false, false, 69), ", ");
                            echo "
            ";
                        }
                        // line 71
                        echo "            </td>
          
            
        </tr>
           
            ";
                    }
                    // line 77
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problemData'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 78
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "         
    </tbody>


";
        }
        // line 84
        echo "    
";
    }

    public function getTemplateName()
    {
        return "team/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 84,  201 => 79,  195 => 78,  189 => 77,  181 => 71,  176 => 69,  171 => 67,  165 => 64,  160 => 62,  155 => 60,  150 => 58,  145 => 56,  139 => 53,  134 => 51,  128 => 47,  125 => 46,  121 => 44,  119 => 43,  116 => 42,  111 => 41,  107 => 40,  104 => 39,  102 => 38,  76 => 15,  73 => 14,  68 => 11,  66 => 10,  62 => 8,  58 => 7,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "team/homepage.html.twig", "/opt/domjudge/domserver/webapp/templates/team/homepage.html.twig");
    }
}
