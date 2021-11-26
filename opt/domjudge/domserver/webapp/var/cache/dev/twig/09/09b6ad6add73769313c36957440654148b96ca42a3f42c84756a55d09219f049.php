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

/* team/partials/test.html.twig */
class __TwigTemplate_a9b37114f0442c40b93509483a87589c724f110618daf46fe82dc0e7dccc6e09 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/partials/test.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "team/partials/test.html.twig"));

        // line 1
        echo "    <meta charset=\"UTF-8\">
    <meta name=\"keywords\" content=\"online editor, online code editor, online ide, online compiler, online interpreter, run code online, learn programming online,
            online debugger, programming in browser, online code runner, online code execution, debug online, debug C code online, debug C++ code online,
            programming online, snippet, snippets, code snippet, code snippets, pastebin, execute code, programming in browser, run c online, run C++ online,
            run java online, run python online, run ruby online, run c# online, run rust online, run pascal online, run basic online\">
    <meta name=\"author\" content=\"Herman Zvonimir Došilović\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <meta property=\"og:title\" content=\"Judge0 IDE - Free and open-source online code editor\">
    <meta property=\"og:description\" content=\"Free and open-source online code editor that allows you to write and execute code from a rich set of languages.\">
    <meta property=\"og:image\" content=\"https://raw.githubusercontent.com/judge0/ide/master/.github/wallpaper.png\">

    <script  src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js\" integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\" crossorigin=\"anonymous\"></script>

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

    <script type=\"text/javascript\" src=\"third_party/download.js\"></script>


    <title>Judge0 IDE - Free and open-source online code editor</title>
    <link rel=\"shortcut icon\" href=\"./favicon.ico\" type=\"image/x-icon\">
    <link rel=\"icon\" href=\"./favicon.ico\" type=\"image/x-icon\">

    <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-83802640-2\"></script>
    
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'UA-83802640-2');
    </script>

    <script type=\"text/javascript\">window.\$crisp=[];window.CRISP_WEBSITE_ID=\"ee4621ff-c682-44ac-8cfa-1835beddb98a\";(function(){d=document;s=d.createElement(\"script\");s.src=\"https://client.crisp.chat/l.js\";s.async=1;d.getElementsByTagName(\"head\")[0].appendChild(s);})();</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "team/partials/test.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <meta charset=\"UTF-8\">
    <meta name=\"keywords\" content=\"online editor, online code editor, online ide, online compiler, online interpreter, run code online, learn programming online,
            online debugger, programming in browser, online code runner, online code execution, debug online, debug C code online, debug C++ code online,
            programming online, snippet, snippets, code snippet, code snippets, pastebin, execute code, programming in browser, run c online, run C++ online,
            run java online, run python online, run ruby online, run c# online, run rust online, run pascal online, run basic online\">
    <meta name=\"author\" content=\"Herman Zvonimir Došilović\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <meta property=\"og:title\" content=\"Judge0 IDE - Free and open-source online code editor\">
    <meta property=\"og:description\" content=\"Free and open-source online code editor that allows you to write and execute code from a rich set of languages.\">
    <meta property=\"og:image\" content=\"https://raw.githubusercontent.com/judge0/ide/master/.github/wallpaper.png\">

    <script  src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js\" integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\" crossorigin=\"anonymous\"></script>

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

    <script type=\"text/javascript\" src=\"third_party/download.js\"></script>


    <title>Judge0 IDE - Free and open-source online code editor</title>
    <link rel=\"shortcut icon\" href=\"./favicon.ico\" type=\"image/x-icon\">
    <link rel=\"icon\" href=\"./favicon.ico\" type=\"image/x-icon\">

    <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-83802640-2\"></script>
    
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'UA-83802640-2');
    </script>

    <script type=\"text/javascript\">window.\$crisp=[];window.CRISP_WEBSITE_ID=\"ee4621ff-c682-44ac-8cfa-1835beddb98a\";(function(){d=document;s=d.createElement(\"script\");s.src=\"https://client.crisp.chat/l.js\";s.async=1;d.getElementsByTagName(\"head\")[0].appendChild(s);})();</script>
", "team/partials/test.html.twig", "/opt/domjudge/domserver/webapp/templates/team/partials/test.html.twig");
    }
}
