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

/* team/index_test.html.twig */
class __TwigTemplate_76853444447ee4ebcfbf53e9c95ea1bba37a06514a5077f212cb8f7fb4a21180 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/index_test.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/index_test.html.twig"));

        $this->parent = $this->loadTemplate("team/base.html.twig", "team/index_test.html.twig", 1);
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
            // line 14
            echo "
<h1 class=\"mt-4 text-left\">Problem list - ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contest"]) || array_key_exists("contest", $context) ? $context["contest"] : (function () { throw new RuntimeError('Variable "contest" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), "html", null, true);
            echo "  </h1>
";
            // line 17
            echo "

<div class=\"table-wrapper\">

    <table class=\"data-table table table-sm table-striped table-borderexited\" style=\"width:auto\">
    
    <thead class=\"\">
    
    ";
            // line 34
            echo "        
        <tr>
            <th scope=\"col\">#</th>
            <th> Problem Name </th>
            <th> Time Limit </th> 
            <th> Memory Limit </th>
            <th> Restriction Languages </th>
            <th id='trigger_group'> Problems Group </th>
         
        </tr>
    </thead>

    <tbody>
        ";
            // line 47
            $context["num_group"] = 0;
            // line 48
            echo "        
            ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["problems"]) || array_key_exists("problems", $context) ? $context["problems"] : (function () { throw new RuntimeError('Variable "problems" does not exist.', 49, $this->source); })()), 1, []));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 50
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["problemData"]) {
                    // line 51
                    echo "                              
                                    ";
                    // line 52
                    if (twig_test_empty($context["problemData"])) {
                        // line 53
                        echo "                                        <div class=\"card\" style=\"border: none;\"></div>
                                    ";
                    } else {
                        // line 55
                        echo "                                        ";
                        $context["problem"] = twig_get_attribute($this->env, $this->source, $context["problemData"], 0, [], "any", false, false, false, 55);
                        // line 56
                        echo "          
        
        <tr>
            <td width = \"5%\">
                 <a href=\"/public/problems/";
                        // line 60
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 60, $this->source); })()), "problem", [], "any", false, false, false, 60), "probid", [], "any", false, false, false, 60), "html", null, true);
                        echo "/text\" target=\"_blank\" style=\"text-decoration:none; color:black\">

                 ";
                        // line 62
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 62, $this->source); })()), "problem", [], "any", false, false, false, 62), "probid", [], "any", false, false, false, 62), "html", null, true);
                        echo "</a></td>
                
            <td width=\"30%\">
                <a href=\"/team/problem_list/";
                        // line 65
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 65, $this->source); })()), "problem", [], "any", false, false, false, 65), "probid", [], "any", false, false, false, 65), "html", null, true);
                        echo "\" target=\"_blank\" style=\"text-decoration:none;\">
                
                 ";
                        // line 67
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 67, $this->source); })()), "problem", [], "any", false, false, false, 67), "name", [], "any", false, false, false, 67), "html", null, true);
                        echo "</a></td>

            <td>";
                        // line 69
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 69, $this->source); })()), "problem", [], "any", false, false, false, 69), "timelimit", [], "any", false, false, false, 69), "html", null, true);
                        echo "</td>

            <td>";
                        // line 71
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 71, $this->source); })()), "problem", [], "any", false, false, false, 71), "memlimit", [], "any", false, false, false, 71), "html", null, true);
                        echo "</td>
            
            <td>";
                        // line 73
                        echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 73, $this->source); })()), "problem", [], "any", false, false, false, 73), "restrictionlanguages", [], "any", false, false, false, 73), ", "), "html", null, true);
                        echo "</td>

            <td>
            ";
                        // line 76
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 76, $this->source); })()), "problem", [], "any", false, false, false, 76), "problemsgroup", [], "any", false, false, false, 76) != null)) {
                            echo " 
        
            ";
                            // line 78
                            echo twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 78, $this->source); })()), "problem", [], "any", false, false, false, 78), "problemsgroup", [], "any", false, false, false, 78), ", ");
                            echo "
            ";
                        }
                        // line 80
                        echo "            </td>
          
            
        </tr>
           
            ";
                    }
                    // line 86
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problemData'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 87
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "         
    </tbody>

<script>
    \$(\"#trigger_group\").click(function(){
            \$(\".hidden_td\").slideToggle();
  });
</script>
";
        }
        // line 97
        echo "    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "team/index_test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 97,  234 => 88,  228 => 87,  222 => 86,  214 => 80,  209 => 78,  204 => 76,  198 => 73,  193 => 71,  188 => 69,  183 => 67,  178 => 65,  172 => 62,  167 => 60,  161 => 56,  158 => 55,  154 => 53,  152 => 52,  149 => 51,  144 => 50,  140 => 49,  137 => 48,  135 => 47,  120 => 34,  110 => 17,  106 => 15,  103 => 14,  98 => 11,  96 => 10,  92 => 8,  82 => 7,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"team/base.html.twig\" %}

{% block title %}Contest problems - {{ parent() }}

{% endblock %}

{% block content %}
      

{% if contest == NULL %}
<h1 class=\"mt-4 text-left\">No Contest now</h1>

{% else %}

<h1 class=\"mt-4 text-left\">Problem list - {{ contest.name }}  </h1>
{# <iframe src=\"https://hackmd.io/fm_XJBkDRNmhDyAZtbIKvw?view\" width=\"50%\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe> #}


<div class=\"table-wrapper\">

    <table class=\"data-table table table-sm table-striped table-borderexited\" style=\"width:auto\">
    
    <thead class=\"\">
    
    {# <td colspan='7'>
        <form class=form-inline action=\"\">
            <input class=\"form-control search-query\" type='text' name='id'  placeholder=\"Problem ID\">
            <button class=\"form-control\" type='submit' >Go</button></form>
            <form class=\"form-search form-inline\">
            <input type=\"text\" name=search class=\"form-control search-query\" placeholder=\"Keywords Title or Source\">
            <button type=\"submit\" class=\"form-control\">Search</button>
        </form>
    </td> #}
        
        <tr>
            <th scope=\"col\">#</th>
            <th> Problem Name </th>
            <th> Time Limit </th> 
            <th> Memory Limit </th>
            <th> Restriction Languages </th>
            <th id='trigger_group'> Problems Group </th>
         
        </tr>
    </thead>

    <tbody>
        {% set num_group = 0 %}
        
            {% for row in problems|batch(1, []) %}
            {% for problemData in row %}
                              
                                    {% if problemData is empty %}
                                        <div class=\"card\" style=\"border: none;\"></div>
                                    {% else %}
                                        {% set problem = problemData.0 %}
          
        
        <tr>
            <td width = \"5%\">
                 <a href=\"/public/problems/{{problem.problem.probid}}/text\" target=\"_blank\" style=\"text-decoration:none; color:black\">

                 {{ problem.problem.probid }}</a></td>
                
            <td width=\"30%\">
                <a href=\"/team/problem_list/{{problem.problem.probid}}\" target=\"_blank\" style=\"text-decoration:none;\">
                
                 {{problem.problem.name }}</a></td>

            <td>{{ problem.problem.timelimit }}</td>

            <td>{{ problem.problem.memlimit }}</td>
            
            <td>{{ problem.problem.restrictionlanguages|join(', ') }}</td>

            <td>
            {% if problem.problem.problemsgroup != null %} 
        
            {{ problem.problem.problemsgroup|join(', ')|raw }}
            {% endif %}
            </td>
          
            
        </tr>
           
            {% endif %}
            {% endfor %}
            {% endfor %}
         
    </tbody>

<script>
    \$(\"#trigger_group\").click(function(){
            \$(\".hidden_td\").slideToggle();
  });
</script>
{% endif %}
    
{% endblock %}
", "team/index_test.html.twig", "/opt/domjudge/domserver/webapp/templates/team/index_test.html.twig");
    }
}
