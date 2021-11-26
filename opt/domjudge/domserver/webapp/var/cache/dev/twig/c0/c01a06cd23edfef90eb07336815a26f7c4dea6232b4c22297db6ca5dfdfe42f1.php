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

/* public/index_test.html.twig */
class __TwigTemplate_d220b20f6cf4c34c1251557a697540719b1c67cadd203987e27f8ce3ecc1960e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/index_test.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/index_test.html.twig"));

        $this->parent = $this->loadTemplate("public/base.html.twig", "public/index_test.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Contest problems - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "  

";
        // line 10
        if (((isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 10, $this->source); })()) == null)) {
            // line 11
            echo "<h1 class=\"mt-4 text-left\">No Contest now</h1>

";
        } else {
            // line 13
            echo "    
                                
<h1 class=\"mt-4 text-left\">Contest problems - ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), "html", null, true);
            echo "  </h1>
<iframe src=\"http://mishengqiang.com/\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>




<div class=\"table-wrapper\">

    <table class=\"data-table table table-sm table-striped table-bordered\" style=\"width:auto\">
    
    <thead class=\"\">
    
    <td colspan='7'>
        <form class=form-inline action=problem.php>
            <input class=\"form-control search-query\" type='text' name='id'  placeholder=\"Problem ID\">
            <button class=\"form-control\" type='submit' >Go</button></form>
            <form class=\"form-search form-inline\">
            <input type=\"text\" name=search class=\"form-control search-query\" placeholder=\"Keywords Title or Source\">
            <button type=\"submit\" class=\"form-control\">Search</button>
        </form>
    </td>
        
        <tr>
            <th scope=\"col\">#</th>
            <th> Problem Name </th>
            <th> Time Limit </th> 
            <th> Memory Limit </th>
            <th> Restriction Languages </th>
            <th> Problems Group </th>
            <th> Acceptance </th>
        </tr>
    </thead>

    <tbody>
        
        
            ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["problems"]) || array_key_exists("problems", $context) ? $context["problems"] : (function () { throw new RuntimeError('Variable "problems" does not exist.', 51, $this->source); })()), 1, []));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 52
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["problemData"]) {
                    // line 53
                    echo "                              
                                    ";
                    // line 54
                    if (twig_test_empty($context["problemData"])) {
                        // line 55
                        echo "                                        <div class=\"card\" style=\"border: none;\"></div>
                                    ";
                    } else {
                        // line 57
                        echo "                                        ";
                        $context["problem"] = twig_get_attribute($this->env, $this->source, $context["problemData"], 0, [], "any", false, false, false, 57);
                        // line 58
                        echo "          
                   
        <tr>
            <td width = \"5%\">
                 <a href=\"/public/problems/";
                        // line 62
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 62, $this->source); })()), "problem", [], "any", false, false, false, 62), "probid", [], "any", false, false, false, 62), "html", null, true);
                        echo "/text\"  target=\"_blank\" style=\"text-decoration:none; color:black\">

                 ";
                        // line 64
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 64, $this->source); })()), "problem", [], "any", false, false, false, 64), "probid", [], "any", false, false, false, 64), "html", null, true);
                        echo "</a></td>
                
            <td width=\"30%\">
                <a href=\"/public/problems/";
                        // line 67
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 67, $this->source); })()), "problem", [], "any", false, false, false, 67), "probid", [], "any", false, false, false, 67), "html", null, true);
                        echo "/text\" target=\"_blank\" style=\"text-decoration:none;\">
                
                 ";
                        // line 69
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 69, $this->source); })()), "problem", [], "any", false, false, false, 69), "name", [], "any", false, false, false, 69), "html", null, true);
                        echo "</a></td>

            <td>";
                        // line 71
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 71, $this->source); })()), "problem", [], "any", false, false, false, 71), "timelimit", [], "any", false, false, false, 71), "html", null, true);
                        echo "</td>

            <td>";
                        // line 73
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 73, $this->source); })()), "problem", [], "any", false, false, false, 73), "memlimit", [], "any", false, false, false, 73), "html", null, true);
                        echo "</td>
            
            <td>";
                        // line 75
                        echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 75, $this->source); })()), "problem", [], "any", false, false, false, 75), "restrictionlanguages", [], "any", false, false, false, 75), ", "), "html", null, true);
                        echo "</td>

            <td>";
                        // line 77
                        echo twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 77, $this->source); })()), "problem", [], "any", false, false, false, 77), "problemsgroup", [], "any", false, false, false, 77), ", ");
                        echo "</td>
       
            <td></td>
        
        </tr>
           
            ";
                    }
                    // line 84
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problemData'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 85
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "
        
    </tbody>
";
        }
        // line 90
        echo "    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "public/index_test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 90,  231 => 86,  225 => 85,  219 => 84,  209 => 77,  204 => 75,  199 => 73,  194 => 71,  189 => 69,  184 => 67,  178 => 64,  173 => 62,  167 => 58,  164 => 57,  160 => 55,  158 => 54,  155 => 53,  150 => 52,  146 => 51,  107 => 15,  103 => 13,  98 => 11,  96 => 10,  92 => 8,  82 => 7,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"public/base.html.twig\" %}

{% block title %}Contest problems - {{ parent() }}

{% endblock %}

{% block content %}
  

{% if contest == NULL %}
<h1 class=\"mt-4 text-left\">No Contest now</h1>

{% else %}    
                                
<h1 class=\"mt-4 text-left\">Contest problems - {{ contest.name }}  </h1>
<iframe src=\"http://mishengqiang.com/\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>




<div class=\"table-wrapper\">

    <table class=\"data-table table table-sm table-striped table-bordered\" style=\"width:auto\">
    
    <thead class=\"\">
    
    <td colspan='7'>
        <form class=form-inline action=problem.php>
            <input class=\"form-control search-query\" type='text' name='id'  placeholder=\"Problem ID\">
            <button class=\"form-control\" type='submit' >Go</button></form>
            <form class=\"form-search form-inline\">
            <input type=\"text\" name=search class=\"form-control search-query\" placeholder=\"Keywords Title or Source\">
            <button type=\"submit\" class=\"form-control\">Search</button>
        </form>
    </td>
        
        <tr>
            <th scope=\"col\">#</th>
            <th> Problem Name </th>
            <th> Time Limit </th> 
            <th> Memory Limit </th>
            <th> Restriction Languages </th>
            <th> Problems Group </th>
            <th> Acceptance </th>
        </tr>
    </thead>

    <tbody>
        
        
            {% for row in problems|batch(1, []) %}
            {% for problemData in row %}
                              
                                    {% if problemData is empty %}
                                        <div class=\"card\" style=\"border: none;\"></div>
                                    {% else %}
                                        {% set problem = problemData.0 %}
          
                   
        <tr>
            <td width = \"5%\">
                 <a href=\"/public/problems/{{problem.problem.probid}}/text\"  target=\"_blank\" style=\"text-decoration:none; color:black\">

                 {{ problem.problem.probid }}</a></td>
                
            <td width=\"30%\">
                <a href=\"/public/problems/{{problem.problem.probid}}/text\" target=\"_blank\" style=\"text-decoration:none;\">
                
                 {{problem.problem.name }}</a></td>

            <td>{{ problem.problem.timelimit }}</td>

            <td>{{ problem.problem.memlimit }}</td>
            
            <td>{{ problem.problem.restrictionlanguages|join(', ') }}</td>

            <td>{{ problem.problem.problemsgroup|join(', ')|raw }}</td>
       
            <td></td>
        
        </tr>
           
            {% endif %}
            {% endfor %}
            {% endfor %}

        
    </tbody>
{% endif %}
    
{% endblock %}
", "public/index_test.html.twig", "/opt/domjudge/domserver/webapp/templates/public/index_test.html.twig");
    }
}
