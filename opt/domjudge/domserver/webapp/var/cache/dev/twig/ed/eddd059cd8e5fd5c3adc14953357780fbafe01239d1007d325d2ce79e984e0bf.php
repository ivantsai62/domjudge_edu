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

/* jury/partials/problem_form.html.twig */
class __TwigTemplate_10aa03da2307c02a2f49481edfcf3e79e6dc959b33ef37e83f0e4d05883bef88 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'extrahead' => [$this, 'block_extrahead'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/problem_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/partials/problem_form.html.twig"));

        // line 3
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/partials/problem_form.html.twig", 3)->unwrap();
        // line 4
        $this->displayBlock('extrahead', $context, $blocks);
        // line 10
        echo "<div class=\"row\">
    <div class=\"col-lg-4\">
        ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
        echo "
        ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "offsetExists", [0 => "externalid"], "method", false, false, false, 13)) {
            // line 14
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "externalid", [], "any", false, false, false, 14), 'row');
            echo "
        ";
        }
        // line 16
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), 'row');
        // line 18
        echo "<div class=\"form-group\">
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "subtask", [], "any", false, false, false, 19), 'label');
        echo "
            <div class=\"input-group\">
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "subtask", [], "any", false, false, false, 21), 'widget');
        echo "
                <div class=\"input-group-append\">
                    <div class=\"input-group-text\">task</div>
                </div>
            </div>
        </div>
        <div id ='task_point'>
        <input  type=\"hidden\" id = \"subtask_old\" value = '";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "vars", [], "any", false, false, false, 28), "value", [], "any", false, false, false, 28), "subtask", [], "any", false, false, false, 28), "html", null, true);
        echo "'></input>
        ";
        // line 29
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "vars", [], "any", false, false, false, 29), "value", [], "any", false, false, false, 29), "subtask", [], "any", false, false, false, 29) != 0) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "vars", [], "any", false, false, false, 29), "value", [], "any", false, false, false, 29), "subtask", [], "any", false, false, false, 29) != null))) {
            // line 30
            echo "        
            ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "vars", [], "any", false, false, false, 31), "value", [], "any", false, false, false, 31), "subtask", [], "any", false, false, false, 31)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 32
                echo "            <div class=\"form-group\" id = \"group_";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">
                <div class=\"input-group\">
                        <label class=\"required\">
                            Task";
                // line 35
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "
                        </label>
                        ";
                // line 38
                echo "                        <div class = \"input-group\">
                            ";
                // line 39
                if ((isset($context["task_point"]) || array_key_exists("task_point", $context))) {
                    // line 40
                    echo "                            ";
                    if (((isset($context["task_point"]) || array_key_exists("task_point", $context) ? $context["task_point"] : (function () { throw new RuntimeError('Variable "task_point" does not exist.', 40, $this->source); })()) != null)) {
                        // line 41
                        echo "                            <input type=\"number\" class=\"form-control\" min=\"1\" id=\"task_";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "\" value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["task_point"]) || array_key_exists("task_point", $context) ? $context["task_point"] : (function () { throw new RuntimeError('Variable "task_point" does not exist.', 41, $this->source); })()), ($context["i"] - 1), [], "array", false, false, false, 41), "html", null, true);
                        echo "\" >
                            <div class=\"input-group-append\">
                                <div class=\"input-group-text\">wt</div>
                            </div>
                            ";
                    }
                    // line 46
                    echo "                            ";
                } else {
                    // line 47
                    echo "                            <input type=\"number\" class=\"form-control\" min=\"1\" id=\"task_";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\" >
                            <div class=\"input-group-append\">
                                <div class=\"input-group-text\">wt</div>
                            </div>
                            ";
                }
                // line 52
                echo "                        </div>
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "        ";
        }
        // line 57
        echo "        </div>

        <div class=\"form-group\">
            <div class=\"input-group\">
                ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "taskpoint", [], "any", false, false, false, 61), 'widget');
        echo "
            </div>
        </div>";
        // line 65
        echo "<div class=\"form-group\" id ='form-timelimit'>
            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "timelimit", [], "any", false, false, false, 66), 'label');
        echo "
            <div class=\"input-group\">
                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "timelimit", [], "any", false, false, false, 68), 'widget');
        echo "
                <div class=\"input-group-append\">
                    <div class=\"input-group-text\">sec</div>
                </div>
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "memlimit", [], "any", false, false, false, 75), 'label');
        echo "
            <div class=\"input-group\">
                ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "memlimit", [], "any", false, false, false, 77), 'widget');
        echo "
                <div class=\"input-group-append\">
                    <div class=\"input-group-text\">kB</div>
                </div>
            </div>
            ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "memlimit", [], "any", false, false, false, 82), 'help');
        echo "
        </div>
        
        <div class=\"form-group\">
            ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "outputlimit", [], "any", false, false, false, 86), 'label');
        echo "
            <div class=\"input-group\">
                ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "outputlimit", [], "any", false, false, false, 88), 'widget');
        echo "
                <div class=\"input-group-append\">
                    <div class=\"input-group-text\">kB</div>
                </div>
            </div>
            ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "outputlimit", [], "any", false, false, false, 93), 'help');
        echo "
        </div>
        ";
        // line 96
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), 'form_end');
        echo "
    </div>
</div>
";
        // line 101
        echo "<script>
    \$( document ).ready(function() {
        //取得新舊subtask
        var sub_new = \$('#problem_subtask');
        var sub_old = \$('#subtask_old');
        var new_subtask1 = sub_new.val();
        var old_subtask1 = sub_old.val();
        console.log(sub_new.val());
        console.log(sub_old.val());
        
        if (old_subtask1 != 0 )
        {
        if( new_subtask1 > old_subtask1)
                         {
                            old_subtask1++;
                            for ( i = old_subtask1; i <= new_subtask1 ; ++i )
                            {
                                item = '<div class=\"form-group\" id = group_'+ i +'><label class=required>Task'+ i +'</label><div class =input-group><input type=\"number\" min=\"0\" class=\"form-control\" id=\"task_'+ i +'\" value=\"\"></div></div>';
                                \$('#task_point').append(item);
                            }
                         }
        else
                        {
                            for ( i = old_subtask1 ; i>new_subtask1 ; --i)
                            {
                                \$('#group_'+ i ).remove();
                            }
                         }
        }
    });
    \$(function () {
            var \$contests =\$('#problem_subtask');
            var \$problem = \$('#problem_subtask');
            var \$inputVal = \$problem.val();
            //fool-proof design
            \$contests.on('change', function () {
                var \$form = \$(this).closest('form');
                var data = {};
                
                if (\$inputVal<0 || \$inputVal == \"\")
                    {
                        \$inputVal = 0;
                    }
                if (\$inputVal>20)
                    {
                       \$inputVal = 20;
                    }
                data['old_subtask'] = \$inputVal;
                data[\$problem.attr('name')] = \$problem.val();
                
                \$.ajax({
                    url: \$form.attr('action'),
                    type: \$form.attr('method'),
                    data: data,
                    success: function (html) {
                        var new_subtask = data[\$problem.attr('name')];
                         console.log(data['old_subtask']);
                        console.log(new_subtask);
                        var old_subtask = parseInt(data['old_subtask']);
                        var \$newProblems = \$(html).find('#problem_taskpoint');
                          var i;
                         if (new_subtask<0)
                         {
                            new_subtask = 0;
                            \$('#problem_subtask').val(0);
                         }
                         if (new_subtask>20)
                         {
                            new_subtask = 20;
                            \$('#problem_subtask').val(20);
                         }
                         if( new_subtask >= old_subtask)
                         {
                            old_subtask++;
                            for ( i = old_subtask; i <= new_subtask ; ++i )
                            {
                                item = '<div class=\"form-group\" id = group_'+ i +'><label class=required>Task'+ i +'</label><div class =input-group><input type=\"number\" min=\"0\" class=\"form-control\" id=\"task_'+ i +'\" value=\"\"><div class=\"input-group-append\"><div class=\"input-group-text\">wt</div></div></div></div>';
                                \$('#task_point').append(item);
                            }
                         }
                         else
                         {
                            
                            for ( i = old_subtask ; i>new_subtask ; --i)
                            {
                                \$('#group_'+ i ).remove();
                            }
                         }
                         
                         \$('#as').closest('.form-group').replaceWith(
                             \$newProblems.closest('.form-group')
                         );
                         
                         
                    }
                    
                });
                
                \$inputVal = \$(this).val();
            });
            //if submit combine taskpoint to array
             \$(\"form\").submit(function(e){
                var \$problem2 = \$('#problem_subtask');
                var \$taskpoint = \$('#problem_taskpoint');
                var \$subtask = \$problem2.val();
                var \$i ;
                var \$all_taskpoint = [];
                for ( \$i = 1 ; \$i <= \$subtask ; \$i++)
                {
                    var \$point = \$('#task_'+(\$i)).val();
                    \$all_taskpoint[\$i-1] = \$point;
                }
                \$taskpoint.val(\$all_taskpoint);

             });
        });

</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrahead"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrahead"));

        // line 5
        echo "    ";
        echo twig_call_macro($macros["macros"], "macro_table_extrahead", [], 5, $context, $this->getSourceContext());
        echo "
    ";
        // line 6
        echo twig_call_macro($macros["macros"], "macro_select2_extrahead", [], 6, $context, $this->getSourceContext());
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jury/partials/problem_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 6,  364 => 5,  354 => 4,  227 => 101,  220 => 96,  215 => 93,  207 => 88,  202 => 86,  195 => 82,  187 => 77,  182 => 75,  172 => 68,  167 => 66,  164 => 65,  159 => 61,  153 => 57,  150 => 56,  141 => 52,  132 => 47,  129 => 46,  118 => 41,  115 => 40,  113 => 39,  110 => 38,  105 => 35,  98 => 32,  94 => 31,  91 => 30,  89 => 29,  85 => 28,  75 => 21,  70 => 19,  67 => 18,  64 => 16,  58 => 14,  56 => 13,  52 => 12,  48 => 10,  46 => 4,  44 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# 導入form select 的 css #}
{#-----CCU-----#}
{% import \"jury/jury_macros.twig\" as macros %}
{% block extrahead %}
    {{ macros.table_extrahead() }}
    {{ macros.select2_extrahead() }}
{% endblock %}
{#-----CCU-----#}

<div class=\"row\">
    <div class=\"col-lg-4\">
        {{ form_start(form) }}
        {% if form.offsetExists('externalid') %}
            {{ form_row(form.externalid) }}
        {% endif %}
        {{ form_row(form.name) }}
        {#-----CCU-----#}
        <div class=\"form-group\">
            {{ form_label(form.subtask) }}
            <div class=\"input-group\">
                {{ form_widget(form.subtask) }}
                <div class=\"input-group-append\">
                    <div class=\"input-group-text\">task</div>
                </div>
            </div>
        </div>
        <div id ='task_point'>
        <input  type=\"hidden\" id = \"subtask_old\" value = '{{form.vars.value.subtask}}'></input>
        {% if form.vars.value.subtask != 0 and form.vars.value.subtask != null %}
        
            {% for i in 1..(form.vars.value.subtask) %}
            <div class=\"form-group\" id = \"group_{{i}}\">
                <div class=\"input-group\">
                        <label class=\"required\">
                            Task{{i}}
                        </label>
                        {#if has task_point in database output the task_point #}
                        <div class = \"input-group\">
                            {% if task_point is defined %}
                            {% if task_point != null %}
                            <input type=\"number\" class=\"form-control\" min=\"1\" id=\"task_{{i}}\" value=\"{{task_point[i-1]}}\" >
                            <div class=\"input-group-append\">
                                <div class=\"input-group-text\">wt</div>
                            </div>
                            {% endif %}
                            {% else %}
                            <input type=\"number\" class=\"form-control\" min=\"1\" id=\"task_{{i}}\" >
                            <div class=\"input-group-append\">
                                <div class=\"input-group-text\">wt</div>
                            </div>
                            {% endif %}
                        </div>
                </div>
            </div>
            {% endfor %}
        {% endif %}
        </div>

        <div class=\"form-group\">
            <div class=\"input-group\">
                {{ form_widget(form.taskpoint) }}
            </div>
        </div>
        {#-----CCU-----#}
        <div class=\"form-group\" id ='form-timelimit'>
            {{ form_label(form.timelimit) }}
            <div class=\"input-group\">
                {{ form_widget(form.timelimit) }}
                <div class=\"input-group-append\">
                    <div class=\"input-group-text\">sec</div>
                </div>
            </div>
        </div>
        <div class=\"form-group\">
            {{ form_label(form.memlimit) }}
            <div class=\"input-group\">
                {{ form_widget(form.memlimit) }}
                <div class=\"input-group-append\">
                    <div class=\"input-group-text\">kB</div>
                </div>
            </div>
            {{ form_help(form.memlimit) }}
        </div>
        
        <div class=\"form-group\">
            {{ form_label(form.outputlimit) }}
            <div class=\"input-group\">
                {{ form_widget(form.outputlimit) }}
                <div class=\"input-group-append\">
                    <div class=\"input-group-text\">kB</div>
                </div>
            </div>
            {{ form_help(form.outputlimit) }}
        </div>
        {#{ dump(form.timelimit) }#}
        {{ form_end(form) }}
    </div>
</div>
{# control task point table by ajax #}
{#-----CCU-----#}
<script>
    \$( document ).ready(function() {
        //取得新舊subtask
        var sub_new = \$('#problem_subtask');
        var sub_old = \$('#subtask_old');
        var new_subtask1 = sub_new.val();
        var old_subtask1 = sub_old.val();
        console.log(sub_new.val());
        console.log(sub_old.val());
        
        if (old_subtask1 != 0 )
        {
        if( new_subtask1 > old_subtask1)
                         {
                            old_subtask1++;
                            for ( i = old_subtask1; i <= new_subtask1 ; ++i )
                            {
                                item = '<div class=\"form-group\" id = group_'+ i +'><label class=required>Task'+ i +'</label><div class =input-group><input type=\"number\" min=\"0\" class=\"form-control\" id=\"task_'+ i +'\" value=\"\"></div></div>';
                                \$('#task_point').append(item);
                            }
                         }
        else
                        {
                            for ( i = old_subtask1 ; i>new_subtask1 ; --i)
                            {
                                \$('#group_'+ i ).remove();
                            }
                         }
        }
    });
    \$(function () {
            var \$contests =\$('#problem_subtask');
            var \$problem = \$('#problem_subtask');
            var \$inputVal = \$problem.val();
            //fool-proof design
            \$contests.on('change', function () {
                var \$form = \$(this).closest('form');
                var data = {};
                
                if (\$inputVal<0 || \$inputVal == \"\")
                    {
                        \$inputVal = 0;
                    }
                if (\$inputVal>20)
                    {
                       \$inputVal = 20;
                    }
                data['old_subtask'] = \$inputVal;
                data[\$problem.attr('name')] = \$problem.val();
                
                \$.ajax({
                    url: \$form.attr('action'),
                    type: \$form.attr('method'),
                    data: data,
                    success: function (html) {
                        var new_subtask = data[\$problem.attr('name')];
                         console.log(data['old_subtask']);
                        console.log(new_subtask);
                        var old_subtask = parseInt(data['old_subtask']);
                        var \$newProblems = \$(html).find('#problem_taskpoint');
                          var i;
                         if (new_subtask<0)
                         {
                            new_subtask = 0;
                            \$('#problem_subtask').val(0);
                         }
                         if (new_subtask>20)
                         {
                            new_subtask = 20;
                            \$('#problem_subtask').val(20);
                         }
                         if( new_subtask >= old_subtask)
                         {
                            old_subtask++;
                            for ( i = old_subtask; i <= new_subtask ; ++i )
                            {
                                item = '<div class=\"form-group\" id = group_'+ i +'><label class=required>Task'+ i +'</label><div class =input-group><input type=\"number\" min=\"0\" class=\"form-control\" id=\"task_'+ i +'\" value=\"\"><div class=\"input-group-append\"><div class=\"input-group-text\">wt</div></div></div></div>';
                                \$('#task_point').append(item);
                            }
                         }
                         else
                         {
                            
                            for ( i = old_subtask ; i>new_subtask ; --i)
                            {
                                \$('#group_'+ i ).remove();
                            }
                         }
                         
                         \$('#as').closest('.form-group').replaceWith(
                             \$newProblems.closest('.form-group')
                         );
                         
                         
                    }
                    
                });
                
                \$inputVal = \$(this).val();
            });
            //if submit combine taskpoint to array
             \$(\"form\").submit(function(e){
                var \$problem2 = \$('#problem_subtask');
                var \$taskpoint = \$('#problem_taskpoint');
                var \$subtask = \$problem2.val();
                var \$i ;
                var \$all_taskpoint = [];
                for ( \$i = 1 ; \$i <= \$subtask ; \$i++)
                {
                    var \$point = \$('#task_'+(\$i)).val();
                    \$all_taskpoint[\$i-1] = \$point;
                }
                \$taskpoint.val(\$all_taskpoint);

             });
        });

</script>
{#-----CCU-----#}", "jury/partials/problem_form.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/partials/problem_form.html.twig");
    }
}
