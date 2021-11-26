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

/* team/partials/submit_scripts.html.twig */
class __TwigTemplate_51c4ac68a0e8d61535f49744d575f96bd469ffa9965ab31987e204b70de4e8f0 extends \Twig\Template
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
        // line 1
        $this->loadTemplate("partials/javascript_language_detect.html.twig", "team/partials/submit_scripts.html.twig", 1)->display($context);
        // line 2
        echo "<script>
\$(function () {
            var \$contests =\$('#submit_problem_problem');
            var \$problem = \$('#submit_problem_problem');
            \$contests.on('change', function () {
                var \$problems = \$('#submit_problem_language');
                var \$form = \$(this).closest('form');
                var data = {};
                //新增測試資料  
                data[\$problem.attr('name')] = \$problem.val();
                console.log(\$problem.attr('name'));
                console.log(\$problem.val());
                \$.ajax({
                    url: \$form.attr('action'),
                    type: \"POST\",
                    data: data,
                    success: function (html) {
                        
                         var \$newProblems = \$(html).find('#submit_problem_language');
                         \$newProblems.closest('.form-group').find('.invalid-feedback').remove();
                         \$('#submit_problem_language').closest('.form-group').replaceWith(
                             \$newProblems.closest('.form-group')
                         );
                         \$newProblems.select();
                         
                    }
                });
            });

        });
\$(function () {
            var \$contests =\$('#compile_problem');
            var \$problem = \$('#compile_problem');
            var \$submit = \$('#compile');
            \$contests.on('change', function () {
                var \$problems = \$('#compile_language');
                var \$form = \$(this).closest('form');
                var data = {};
                //新增測試資料  
                data[\$problem.attr('name')] = \$problem.val();
                console.log(\$problem.attr('name'));
                console.log(\$problem.val());
                \$.ajax({
                    url: \$form.attr('action'),
                    type: \"POST\",
                    data: data,
                    success: function (html) {
                        
                         var \$newProblems = \$(html).find('#compile_language');
                         \$newProblems.closest('.form-group').remove();
                         \$('#compile_language').closest('.form-group').replaceWith(
                             \$newProblems.closest('.form-group')
                         );
                         \$('label[for=compile_language]').remove();
                         \$newProblems.select();
                         
                    }
                });
            });
            \$(\"#compile_submit\").click(function(e) {
                var \$language = \$('#compile_language');
                var \$problem =\$('#compile_problem');
                var \$form = \$(this).closest('form');
                var yes = confirm('\\n\\n\\nProblem:'+\$problem.find(\"option:selected\").text()+'\\n'+'Language:'+\$language.find(\"option:selected\").text()+'\\n\\nMake submission?');
                console.log(\$('#compile_language').val()+\"tttt\")
                if (\$language.find(\"option:selected\") == \"Select a problem\")
                {
                    alert(\"please select a problem\");
                    return 0;
                }
                console.log(\$language.find(\"option:selected\"));
                if(yes)
                {
                    var data = {};
                //新增測試資料  
                data['code'] = sourceEditor.getValue();
                data['stdin'] = stdinEditor.getValue();
                data['language'] = \$language.val();
                data['problem'] = \$problem.val();
                data['compile_run'] = 1;
                if(data['problem'] == \"\")
                {
                    alert(\"please select a problem\");
                    return 0;
                }
                if(data['language'] == \"\")
                {
                    alert(\"please select a language\");
                    return 0;
                }
                stdoutEditor.setValue(\"\");
                
                \$.ajax({
                    url: \$form.attr('action'),
                    type: \"POST\",
                    data: data,
                    success: function (data) {
                        console.log(data[1]);
                    }
                });
                }
                else
                {
                    event.preventDefault();
                }
                

                
            
            });
            
            \$(\"#compile_run\").click(function(e) {
                var \$language = \$('#compile_language');
                var \$problem =\$('#compile_problem');
                var \$form = \$(this).closest('form');
                
                var data = {};
                data['code'] = sourceEditor.getValue();
                data['stdin'] = stdinEditor.getValue();
                data['language'] = \$language.val();
                data['problem'] = \$problem.val();
                data['compile_run'] = 2;
                if(data['problem'] == \"\")
                {
                    alert(\"please select a problem\");
                    return 0;
                }
                if(data['language'] == \"\")
                {
                    alert(\"please select a language\");
                    return 0;
                }
                stdoutEditor.setValue(\"\");
                \$.ajax({
                    url: \$form.attr('action'),
                    type: \"POST\",
                    data: data,
                    success: function (data) {
                        console.log(data[1]);
                        setTimeout(\"getoutput(\"+data[1] +\",1\"+\")\",3000);
                    }
                });
            });
            \$('#compile').submit(function () {
                event.preventDefault();
            });

            \$(\"#change_code\").click(function(e) {
                sourceEditor.setValue(\$(\"#historys\").val());
                console.log(\$(\"#historys\").find(\"option:selected\").val());
            });
        });
        function getoutput(submitid,times){
            console.log(\"sss\");
            console.log(submitid);
            var data = {};
            data['submitid'] = submitid;
            \$.ajax({
                    url: \"http://140.123.104.67:9191/team/compile_api\",
                    type: \"POST\",
                    data: data,
                    success: function (data) {
                        console.log(data[1]);    
                        console.log(\"ssss\");  
                        stdoutEditor.setValue(data[1]);
                    },
                    error: function (data) {
                        console.log(\"error\");
                        console.log(times);  
                        times++;
                        if (times < 10)
                        {
                        setTimeout(\"getoutput(\"+submitid +\",\"+times +\")\",3000);
                        }
                    }
                });
        }
    function entryPointDetectJava(filename) {
        return filename.replace(/\\.[^\\.]*\$/, '');
    }

    function entryPointDetectKt(filename) {
        var filebase = filename.replace(/\\.[^\\.]*\$/, '');
        if (filebase === '') return '_Kt';

        filebase = filebase.replace(/[^a-zA-Z0-9]/, '_');
        if (filebase.charAt(0).match(/^[a-zA-Z]\$/)) {
            return filebase.charAt(0).toUpperCase() + filebase.slice(1) + 'Kt';
        } else {
            return '_' + filebase + 'Kt';
        }
    }

    function maybeShowEntryPoint(filename) {
        var langid = \$('#submit_problem_language').val();
        if (langid === \"\") {
            return;
        }
        var \$entryPoint = \$('[data-entry-point]');
        var \$entryPointLabel = \$entryPoint.find('label');
        var \$entryPointInput = \$entryPoint.find('input');
        var entryPointDescription = getEntryPoint(langid);
        if (entryPointDescription) {
            \$entryPoint.show();
        } else {
            \$entryPoint.hide();
        }

        if (entryPointDescription) {
            var \$labelChildren = \$entryPointLabel.children();
            \$entryPointLabel.text(entryPointDescription).append(\$labelChildren);
            \$entryPointInput.attr('required', 'required');
        } else {
            \$entryPointInput.attr('required', null);
        }

        if (entryPointDescription && filename) {
            switch (langid) {
                case 'java':
                    \$entryPointInput.val(entryPointDetectJava(filename));
                    break;
                case 'kt':
                    \$entryPointInput.val(entryPointDetectKt(filename));
                    break;
                default:
                    \$entryPointInput.val(filename);
            }
        } else {
            \$entryPointInput.val('');
        }
    }

    \$(function () {
        var \$entryPoint = \$('[data-entry-point]');
        \$entryPoint.hide();

        var processFile = function () {
            var filename = \$('#submit_problem_code').val();
            if (filename !== '' && filename !== undefined) {
                filename = filename.replace(/^.*[\\\\\\/]/, '');
                var parts = filename.split('.').reverse();
                if (parts.length < 2) return;
                var lcParts = [parts[0].toLowerCase(), parts[1].toLowerCase()];

                // Problem ID

                var problem = document.getElementById('submit_problem_problem');
                // the \"autodetect\" option has empty value
                if (problem.value !== '') {
                    return;
                }

                for (var i = 0; i < problem.length; i++) {
                    if (problem.options[i].text.split(/ - /)[0].toLowerCase() === lcParts[1]) {
                        problem.selectedIndex = i;
                    }
                }

                // language ID

                var language = document.getElementById('submit_problem_language');
                // the \"autodetect\" option has empty value
                if (language.value !== '') return;

                var langid = getMainExtension(lcParts[0]);
                for (i = 0; i < language.length; i++) {
                    if (language.options[i].value === langid) {
                        language.selectedIndex = i;
                    }
                }

                maybeShowEntryPoint(filename);
            }
        };

        var \$body = \$('body');
        \$body.on('change', '#submit_problem_code', processFile);
        \$body.on('change', '#submit_problem_language', function () {
            maybeShowEntryPoint();
        });

        \$body.on('submit', 'form[name=submit_problem]', function () {
            var langelt = document.getElementById(\"submit_problem_language\");
            var language = langelt.options[langelt.selectedIndex].value;
            var languagetxt = langelt.options[langelt.selectedIndex].text;
            var fileelt = document.getElementById(\"submit_problem_code\");
            var filenames = fileelt.files;
            var filename = filenames[0].name;
            var probelt = document.getElementById(\"submit_problem_problem\");
            var problem = probelt.options[probelt.selectedIndex].value;
            var problemtxt = probelt.options[probelt.selectedIndex].text;

            var error = false;
            if (language === \"\") {
                langelt.focus();
                langelt.className = langelt.className + \" errorfield\";
                error = true;
            }
            if (problem === \"\") {
                probelt.focus();
                probelt.className = probelt.className + \" errorfield\";
                error = true;
            }
            if (filename === \"\") {
                error = true;
            }
            if (error) return false;

            var auxfileno = 0;
            // start at one; skip maincode file field
            for (var i = 1; i < filenames.length; i++) {
                if (filenames[i].value !== \"\") {
                    auxfileno++;
                }
            }
            var extrafiles = '';
            if (auxfileno > 0) {
                extrafiles = \"Additional source files: \" + auxfileno + '\\n';
            }
            var question =
                'Main source file: ' + filename + '\\n' +
                extrafiles + '\\n' +
                'Problem: ' + problemtxt + '\\n' +
                'Language: ' + languagetxt + '\\n' +
                '\\nMake submission?';
            return confirm(question);
        });

        processFile();
        maybeShowEntryPoint();
        
        window.initSubmitModal = function (\$elem) {
            \$('[data-entry-point]').hide();
            
        \$(function () {
            var \$contests =\$('#submit_problem_problem');
            var \$problem = \$('#submit_problem_problem');
            \$contests.on('change', function () {
                var \$problems = \$('#submit_problem_language');
                var \$form = \$(this).closest('form');
                var data = {};
                //新增測試資料  
                data[\$problem.attr('name')] = \$problem.val();
                console.log(\$problem.attr('name'));
                console.log(\$problem.val());
                \$.ajax({
                    url: \$form.attr('action'),
                    type: \"POST\",
                    data: data,
                    success: function (html) {
                        
                         var \$newProblems = \$(html).find('#submit_problem_language');
                         \$newProblems.closest('.form-group').find('.invalid-feedback').remove();
                         \$('#submit_problem_language').closest('.form-group').replaceWith(
                             \$newProblems.closest('.form-group')
                         );
                         \$newProblems.select();
                         
                    }
                });
            });
        });
        };
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "team/partials/submit_scripts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "team/partials/submit_scripts.html.twig", "/opt/domjudge/domserver/webapp/templates/team/partials/submit_scripts.html.twig");
    }
}
