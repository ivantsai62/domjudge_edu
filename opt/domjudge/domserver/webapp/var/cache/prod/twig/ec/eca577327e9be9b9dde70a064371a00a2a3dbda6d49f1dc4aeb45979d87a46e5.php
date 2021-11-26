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
        </tr>
    </thead>

    <tbody>
        
        ";
            // line 37
            $context["num_group"] = 0;
            // line 38
            echo "        
            ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["problems"] ?? null), 1, []));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 40
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["problemData"]) {
                    // line 41
                    echo "                              
                                    ";
                    // line 42
                    if (twig_test_empty($context["problemData"])) {
                        // line 43
                        echo "                                        <div class=\"card\" style=\"border: none;\"></div>
                                    ";
                    } else {
                        // line 45
                        echo "                                        ";
                        $context["problem"] = twig_get_attribute($this->env, $this->source, $context["problemData"], 0, [], "any", false, false, false, 45);
                        // line 46
                        echo "          
        
        <tr>
            <td width = \"5%\">
                 <a href=\"/public/problems/";
                        // line 50
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 50), "probid", [], "any", false, false, false, 50), "html", null, true);
                        echo "/text\" target=\"_blank\" style=\"text-decoration:none; color:black\">

                 ";
                        // line 52
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 52), "probid", [], "any", false, false, false, 52), "html", null, true);
                        echo "</a></td>
                
            <td width=\"30%\">
                <a href=\"/team/problem_list/";
                        // line 55
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 55), "probid", [], "any", false, false, false, 55), "html", null, true);
                        echo "\" target=\"_blank\" style=\"text-decoration:none;\">
                
                 ";
                        // line 57
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 57), "name", [], "any", false, false, false, 57), "html", null, true);
                        echo "</a></td>

            <td>";
                        // line 59
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 59), "timelimit", [], "any", false, false, false, 59), "html", null, true);
                        echo "</td>

            <td>";
                        // line 61
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 61), "memlimit", [], "any", false, false, false, 61), "html", null, true);
                        echo "</td>
            
            <td>";
                        // line 63
                        echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 63), "restrictionlanguages", [], "any", false, false, false, 63), ", "), "html", null, true);
                        echo "</td>

            <td>
            ";
                        // line 73
                        echo "            
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
        return array (  195 => 84,  188 => 79,  182 => 78,  176 => 77,  170 => 73,  164 => 63,  159 => 61,  154 => 59,  149 => 57,  144 => 55,  138 => 52,  133 => 50,  127 => 46,  124 => 45,  120 => 43,  118 => 42,  115 => 41,  110 => 40,  106 => 39,  103 => 38,  101 => 37,  76 => 15,  73 => 14,  68 => 11,  66 => 10,  62 => 8,  58 => 7,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "team/homepage.html.twig", "/opt/domjudge/domserver/webapp/templates/team/homepage.html.twig");
    }
}
