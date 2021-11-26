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
class __TwigTemplate_8d8f08ae92de80228703031631212416e9e251785d0590872211d4aed5cc123b extends \Twig\Template
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
        // line 3
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/partials/problem_form.html.twig", 3)->unwrap();
        // line 4
        $this->displayBlock('extrahead', $context, $blocks);
        // line 10
        echo "<div class=\"row\">
    <div class=\"col-lg-4\">
        ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
        ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "offsetExists", [0 => "externalid"], "method", false, false, false, 13)) {
            // line 14
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "externalid", [], "any", false, false, false, 14), 'row');
            echo "
        ";
        }
        // line 16
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 16), 'row');
        // line 18
        echo "<div class=\"form-group\">
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "subtask", [], "any", false, false, false, 19), 'label');
        echo "
            <div class=\"input-group\">
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "subtask", [], "any", false, false, false, 21), 'widget');
        echo "
                <div class=\"input-group-append\">
                    <div class=\"input-group-text\">task</div>
                </div>
            </div>
        </div>
        <div id ='task_point'>
        <input  type=\"hidden\" id = \"subtask_old\" value = '";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 28), "value", [], "any", false, false, false, 28), "subtask", [], "any", false, false, false, 28), "html", null, true);
        echo "'></input>
        ";
        // line 29
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 29), "value", [], "any", false, false, false, 29), "subtask", [], "any", false, false, false, 29) != 0) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 29), "value", [], "any", false, false, false, 29), "subtask", [], "any", false, false, false, 29) != null))) {
            // line 30
            echo "        
            ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 31), "value", [], "any", false, false, false, 31), "subtask", [], "any", false, false, false, 31)));
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
                    if ((($context["task_point"] ?? null) != null)) {
                        // line 41
                        echo "                            <input type=\"number\" class=\"form-control\" min=\"1\" id=\"task_";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "\" value=\"";
                        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["task_point"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["i"] - 1)] ?? null) : null), "html", null, true);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "taskpoint", [], "any", false, false, false, 61), 'widget');
        echo "
            </div>
        </div>";
        // line 65
        echo "<div class=\"form-group\" id ='form-timelimit'>
            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "timelimit", [], "any", false, false, false, 66), 'label');
        echo "
            <div class=\"input-group\">
                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "timelimit", [], "any", false, false, false, 68), 'widget');
        echo "
                <div class=\"input-group-append\">
                    <div class=\"input-group-text\">sec</div>
                </div>
            </div>
        </div>
        <div class=\"form-group\">
            ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "memlimit", [], "any", false, false, false, 75), 'label');
        echo "
            <div class=\"input-group\">
                ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "memlimit", [], "any", false, false, false, 77), 'widget');
        echo "
                <div class=\"input-group-append\">
                    <div class=\"input-group-text\">kB</div>
                </div>
            </div>
            ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "memlimit", [], "any", false, false, false, 82), 'help');
        echo "
        </div>
        
        <div class=\"form-group\">
            ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "outputlimit", [], "any", false, false, false, 86), 'label');
        echo "
            <div class=\"input-group\">
                ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "outputlimit", [], "any", false, false, false, 88), 'widget');
        echo "
                <div class=\"input-group-append\">
                    <div class=\"input-group-text\">kB</div>
                </div>
            </div>
            ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "outputlimit", [], "any", false, false, false, 93), 'help');
        echo "
        </div>
        ";
        // line 96
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
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
    }

    // line 4
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        echo twig_call_macro($macros["macros"], "macro_table_extrahead", [], 5, $context, $this->getSourceContext());
        echo "
    ";
        // line 6
        echo twig_call_macro($macros["macros"], "macro_select2_extrahead", [], 6, $context, $this->getSourceContext());
        echo "
";
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
        return array (  351 => 6,  346 => 5,  342 => 4,  221 => 101,  214 => 96,  209 => 93,  201 => 88,  196 => 86,  189 => 82,  181 => 77,  176 => 75,  166 => 68,  161 => 66,  158 => 65,  153 => 61,  147 => 57,  144 => 56,  135 => 52,  126 => 47,  123 => 46,  112 => 41,  109 => 40,  107 => 39,  104 => 38,  99 => 35,  92 => 32,  88 => 31,  85 => 30,  83 => 29,  79 => 28,  69 => 21,  64 => 19,  61 => 18,  58 => 16,  52 => 14,  50 => 13,  46 => 12,  42 => 10,  40 => 4,  38 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/partials/problem_form.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/partials/problem_form.html.twig");
    }
}
