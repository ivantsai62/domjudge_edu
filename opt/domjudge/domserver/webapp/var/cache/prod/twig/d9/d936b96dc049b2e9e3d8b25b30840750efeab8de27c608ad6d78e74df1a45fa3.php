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

/* team/partials/compiler_content.html.twig */
class __TwigTemplate_c090a1ae6553326ea217678f7f4186a0d97c1904b4f20540261900c1533b1789 extends \Twig\Template
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
        echo "

<html>

<head>
    <meta charset=\"UTF-8\">

    <meta name=\"description\" content=\"Free and open-source online code editor that allows you to write and execute code from a rich set of languages.\">
    <meta name=\"keywords\" content=\"online editor, online code editor, online ide, online compiler, online interpreter, run code online, learn programming online,
            online debugger, programming in browser, online code runner, online code execution, debug online, debug C code online, debug C++ code online,
            programming online, snippet, snippets, code snippet, code snippets, pastebin, execute code, programming in browser, run c online, run C++ online,
            run java online, run python online, run ruby online, run c# online, run rust online, run pascal online, run basic online\">
    <meta name=\"author\" content=\"Herman Zvonimir Došilović\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <meta property=\"og:title\" content=\"Judge0 IDE - Free and open-source online code editor\">
    <meta property=\"og:description\" content=\"Free and open-source online code editor that allows you to write and execute code from a rich set of languages.\">


    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js\" integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\" crossorigin=\"anonymous\"></script>

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/golden-layout/1.5.9/goldenlayout.min.js\" integrity=\"sha256-NhJAZDfGgv4PiB+GVlSrPdh3uc75XXYSM4su8hgTchI=\" crossorigin=\"anonymous\"></script>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/golden-layout/1.5.9/css/goldenlayout-base.css\" integrity=\"sha256-oIDR18yKFZtfjCJfDsJYpTBv1S9QmxYopeqw2dO96xM=\" crossorigin=\"anonymous\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/golden-layout/1.5.9/css/goldenlayout-dark-theme.css\" integrity=\"sha256-ygw8PvSDJJUGLf6Q9KIQsYR3mOmiQNlDaxMLDOx9xL0=\" crossorigin=\"anonymous\" />

    <script>
        var require = {
            paths: {
                \"vs\": \"https://unpkg.com/monaco-editor/min/vs\",
                \"monaco-vim\": \"https://unpkg.com/monaco-vim/dist/monaco-vim\",
                \"monaco-emacs\": \"https://unpkg.com/monaco-emacs/dist/monaco-emacs\"
            }
        };
    </script>
    <script src=\"https://unpkg.com/monaco-editor/min/vs/loader.js\"></script>
    <script src=\"https://unpkg.com/monaco-editor@0.18.1/min/vs/editor/editor.main.nls.js\"></script>
    <script src=\"https://unpkg.com/monaco-editor@0.18.1/min/vs/editor/editor.main.js\"></script>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css\" integrity=\"sha256-9mbkOfVho3ZPXfM7W8sV2SndrGDuh7wuyLjtsWeTI1Q=\" crossorigin=\"anonymous\" />
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js\" integrity=\"sha256-t8GepnyPmw9t+foMh3mKNvcorqNHamSKtKRxxpUEgFI=\" crossorigin=\"anonymous\"></script>

    <link href=\"https://fonts.googleapis.com/css?family=Exo+2\" rel=\"stylesheet\">



    <title>Judge0 IDE - Free and open-source online code editor</title>

    <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-83802640-2\"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'UA-83802640-2');
    </script>

   
</head>

<body>
    <div id=\"site-navigation\" class=\"ui small inverted menu\">
        <div id=\"site-header\" class=\"header item\">
            <a href=\"/\">
                
                <h2>Judge0 IDE</h2>
            </a>
        </div>
        <div class=\"left menu\">
            <div class=\"ui dropdown item site-links on-hover\">
                File <i class=\"dropdown icon\"></i>
                <div class=\"menu\">

                    <div class=\"item\" onclick=\"downloadSource()\"><i class=\"download icon\"></i> Download</div>

                </div>
            </div>
            <div class=\"item borderless\">
            </div>
                <div class=\"row\">
                            
                    <table class=\"table table-sm table-striped\">
                        <tr>
                            <td>                
                                <select id=\"select-language\" class=\"ui dropdown\">
                                <option value=\"49\" mode=\"c\">C (GCC 8.3.0)</option>
                                <option selected value=\"54\" mode=\"cpp\">C++ (GCC 9.2.0)</option>
                                ";
        // line 92
        echo "                            </select></td>
                            ";
        // line 94
        echo "                            <td> ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "problem", [], "any", false, false, false, 94), 'row');
        echo "</td> 
                            <td>";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "language", [], "any", false, false, false, 95), 'row', ["label" => false]);
        echo "</td>
                            <div class=\"form-group\" data-entry-point>
                                ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "entry_point", [], "any", false, false, false, 97), 'label');
        echo "
                                ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "entry_point", [], "any", false, false, false, 98), 'widget');
        echo "
                                ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "entry_point", [], "any", false, false, false, 99), 'help');
        echo "
                            </div>
                            <td>
                            <div class=\"form-group\">
                                <button type=\"submit\" id=\"compile_submit\" class=\"btn-success btn\" ><i class=\"fas fa-cloud-upload-alt\"></i> Submit
                                </button>
                            </div>
                            </td>
                            <td><button class=\"btn-danger btn\" id=\"compile_run\"><i class=\"play icon\"></i>Run (F9) </button></td>

                            ";
        // line 110
        echo "                            <td><select id = \"historys\" class=\"form-control custom-select form-control\">
                                <option >Select history sumbit</option>
                                
                                ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["historys"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 114
            echo "                                <option value=\" ";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo " \">";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "                              </select>
                              </td>
                              <td><button class=\"btn-primary btn\" id=\"change_code\"><i class=\"fas fa-book\"></i> Change code</button></td>
                        </tr>
                    </table>
                </div>
                   
                
            <div class=\"item fitted borderless wide screen only\">
                <div class=\"ui input\">
                    <input id=\"compiler-options\" type=\"hidden\" placeholder=\"Compiler options\"></input>
                </div>
            </div>
            <div class=\"item borderless wide screen only\">
                <div class=\"ui input\">
                    <input id=\"command-line-arguments\" type=\"hidden\" placeholder=\"Command line arguments\"></input>
                </div>
            </div>

            
        </div>
        <div class=\"right menu\">

        </div>
    </div>

    <div id=\"site-content\"></div>

    <div id=\"site-modal\" class=\"ui modal\">
        <div class=\"header\">
            <i class=\"close icon\"></i>
            <span id=\"title\"></span>
        </div>
        <div class=\"scrolling content\"></div>
        <div class=\"actions\">
            <div class=\"ui small labeled icon cancel button\">
                <i class=\"remove icon\"></i>
                Close (ESC)
            </div>
        </div>
    </div>

    <div id=\"site-settings\" class=\"ui modal\">
        <i class=\"close icon\"></i>
        <div class=\"header\">
            <i class=\"cog icon\"></i>
            Settings
        </div>
        <div class=\"content\">
            <div class=\"ui form\">
                <div class=\"inline fields\">
                    <label>Editor Mode</label>
                    <div class=\"field\">
                        <div class=\"ui radio checkbox\">
                            <input type=\"radio\" name=\"editor-mode\" value=\"normal\" checked=\"checked\">
                            <label>Normal</label>
                        </div>
                    </div>
                    <div class=\"field\">
                        <div class=\"ui radio checkbox\">
                            <input type=\"radio\" name=\"editor-mode\" value=\"vim\">
                            <label>Vim</label>
                        </div>
                    </div>
                    <div class=\"field\">
                        <div class=\"ui radio checkbox\">
                            <input type=\"radio\" name=\"editor-mode\" value=\"emacs\">
                            <label>Emacs</label>
                        </div>
                    </div>
                </div>
                <div class=\"inline field\">
                    <div class=\"ui checkbox\">
                        <input type=\"checkbox\" name=\"redirect-output\">
                        <label>Redirect stderr to stdout</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id=\"site-footer\">
        <span id=\"donate-line\">
            <a class=\"item\" target=\"_blank\" href=\"https://www.patreon.com/hermanzdosilovic\"><i class=\"patreon icon\" style=\"color: #f06553;\"></i> Become a Patron</a>
            ·
            <a class=\"item\" target=\"_blank\" href=\"https://paypal.me/hermanzdosilovic\"><i class=\"paypal icon\" style=\"color: #00457c;\"></i></i> Donate with PayPal</a>
        </span>
        <div id=\"editor-status-line\"></div>
        <span>© 2016-2021 <a href=\"https://judge0.com\">Judge0</a> · Powered by <a href=\"https://rapidapi.com/hermanzdosilovic/api/judge0\">the most advanced open-source online code execution system</a>
        <span id=\"status-line\"></span>
    </div>
    <script>
        let CLF_config = {
            selector: \".changelogfy-widget\",
            app_id: \"f6f982d0-3d91-4b1c-a3ce-b0eb54606c4e\"
        };
    </script>
    <script async src=\"https://widget.changelogfy.com/index.js\"></script>
</body>
<style>
";
        // line 216
        $this->loadTemplate("team/partials/css/compiler_ide.css", "team/partials/compiler_content.html.twig", 216)->display($context);
        // line 217
        echo "</style>
<script>
";
        // line 219
        $this->loadTemplate("team/partials/js/ide.js", "team/partials/compiler_content.html.twig", 219)->display($context);
        // line 220
        $this->loadTemplate("team/partials/js/download.js", "team/partials/compiler_content.html.twig", 220)->display($context);
        // line 221
        echo "
</script>
</html>
";
    }

    public function getTemplateName()
    {
        return "team/partials/compiler_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 221,  288 => 220,  286 => 219,  282 => 217,  280 => 216,  178 => 116,  167 => 114,  163 => 113,  158 => 110,  145 => 99,  141 => 98,  137 => 97,  132 => 95,  127 => 94,  124 => 92,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "team/partials/compiler_content.html.twig", "/opt/domjudge/domserver/webapp/templates/team/partials/compiler_content.html.twig");
    }
}
