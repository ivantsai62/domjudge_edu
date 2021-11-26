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
class __TwigTemplate_34b973d34be66d243b3f9092066ad864da5f46afb090e1c423770d3702ec0846 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/homepage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/homepage.html.twig"));

        $this->parent = $this->loadTemplate("public/base.html.twig", "public/homepage.html.twig", 1);
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
            $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["problems"]) || array_key_exists("problems", $context) ? $context["problems"] : (function () { throw new RuntimeError('Variable "problems" does not exist.', 41, $this->source); })()), 1, []));
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
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 52, $this->source); })()), "problem", [], "any", false, false, false, 52), "probid", [], "any", false, false, false, 52), "html", null, true);
                        echo "/text\"  target=\"_blank\" style=\"text-decoration:none; color:black\">

                 ";
                        // line 54
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 54, $this->source); })()), "problem", [], "any", false, false, false, 54), "probid", [], "any", false, false, false, 54), "html", null, true);
                        echo "</a></td>
                
            <td width=\"30%\">
                <a href=\"/public/problems/";
                        // line 57
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 57, $this->source); })()), "problem", [], "any", false, false, false, 57), "probid", [], "any", false, false, false, 57), "html", null, true);
                        echo "/text\" target=\"_blank\" style=\"text-decoration:none;\">
                
                 ";
                        // line 59
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 59, $this->source); })()), "problem", [], "any", false, false, false, 59), "name", [], "any", false, false, false, 59), "html", null, true);
                        echo "</a></td>

            <td>";
                        // line 61
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 61, $this->source); })()), "problem", [], "any", false, false, false, 61), "timelimit", [], "any", false, false, false, 61), "html", null, true);
                        echo "</td>

            <td>";
                        // line 63
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 63, $this->source); })()), "problem", [], "any", false, false, false, 63), "memlimit", [], "any", false, false, false, 63), "html", null, true);
                        echo "</td>
            
            <td>";
                        // line 65
                        echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 65, $this->source); })()), "problem", [], "any", false, false, false, 65), "restrictionlanguages", [], "any", false, false, false, 65), ", "), "html", null, true);
                        echo "</td>

            <td>";
                        // line 67
                        echo twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 67, $this->source); })()), "problem", [], "any", false, false, false, 67), "problemsgroup", [], "any", false, false, false, 67), ", ");
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  226 => 79,  220 => 75,  214 => 74,  208 => 73,  199 => 67,  194 => 65,  189 => 63,  184 => 61,  179 => 59,  174 => 57,  168 => 54,  163 => 52,  157 => 48,  154 => 47,  150 => 45,  148 => 44,  145 => 43,  140 => 42,  136 => 41,  107 => 15,  103 => 13,  98 => 11,  96 => 10,  92 => 8,  82 => 7,  59 => 3,  36 => 1,);
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
       
        
        </tr>
           
            {% endif %}
            {% endfor %}
            {% endfor %}

        
    </tbody>
{% endif %}
    
{% endblock %}
", "public/homepage.html.twig", "/opt/domjudge/domserver/webapp/templates/public/homepage.html.twig");
    }
}
