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

/* public/homepage.html.twig */
class __TwigTemplate_243e6fb01142c01d0d0198832210e2caa33864779670138af2ca6763d43a610c extends \Twig\Template
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
        return "public/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("public/base.html.twig", "public/homepage.html.twig", 1);
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
            // line 13
            echo "    
                                
<h1 class=\"mt-4 text-left\">Contest problems - ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contest"] ?? null), "name", [], "any", false, false, false, 15), "html", null, true);
            echo "  </h1>




<div class=\"table-wrapper\">

    <table class=\"data-table table table-sm table-striped table-bordered\" style=\"width:auto\">
    
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
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["problems"] ?? null), 1, []));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 42
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["problemData"]) {
                    // line 43
                    echo "                              
                                    ";
                    // line 44
                    if (twig_test_empty($context["problemData"])) {
                        // line 45
                        echo "                                        <div class=\"card\" style=\"border: none;\"></div>
                                    ";
                    } else {
                        // line 47
                        echo "                                        ";
                        $context["problem"] = twig_get_attribute($this->env, $this->source, $context["problemData"], 0, [], "any", false, false, false, 47);
                        // line 48
                        echo "          
                   
        <tr>
            <td width = \"5%\">
                 <a href=\"/public/problems/";
                        // line 52
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 52), "probid", [], "any", false, false, false, 52), "html", null, true);
                        echo "/text\"  target=\"_blank\" style=\"text-decoration:none; color:black\">

                 ";
                        // line 54
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 54), "probid", [], "any", false, false, false, 54), "html", null, true);
                        echo "</a></td>
                
            <td width=\"30%\">
                <a href=\"/public/problems/";
                        // line 57
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 57), "probid", [], "any", false, false, false, 57), "html", null, true);
                        echo "/text\" target=\"_blank\" style=\"text-decoration:none;\">
                
                 ";
                        // line 59
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 59), "name", [], "any", false, false, false, 59), "html", null, true);
                        echo "</a></td>

            <td>";
                        // line 61
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 61), "timelimit", [], "any", false, false, false, 61), "html", null, true);
                        echo "</td>

            <td>";
                        // line 63
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 63), "memlimit", [], "any", false, false, false, 63), "html", null, true);
                        echo "</td>
            
            <td>";
                        // line 65
                        echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 65), "restrictionlanguages", [], "any", false, false, false, 65), ", "), "html", null, true);
                        echo "</td>

            <td>";
                        // line 67
                        echo twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "problem", [], "any", false, false, false, 67), "problemsgroup", [], "any", false, false, false, 67), ", ");
                        echo "</td>
       
        
        </tr>
           
            ";
                    }
                    // line 73
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problemData'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "
        
    </tbody>
";
        }
        // line 79
        echo "    
";
    }

    public function getTemplateName()
    {
        return "public/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 79,  190 => 75,  184 => 74,  178 => 73,  169 => 67,  164 => 65,  159 => 63,  154 => 61,  149 => 59,  144 => 57,  138 => 54,  133 => 52,  127 => 48,  124 => 47,  120 => 45,  118 => 44,  115 => 43,  110 => 42,  106 => 41,  77 => 15,  73 => 13,  68 => 11,  66 => 10,  62 => 8,  58 => 7,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "public/homepage.html.twig", "/opt/domjudge/domserver/webapp/templates/public/homepage.html.twig");
    }
}
