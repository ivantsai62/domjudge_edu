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

/* team/index.html.twig */
class __TwigTemplate_028bcf7ef247aa912ed42131fc96c4f800e5fed77fb2ae5dbea5b9d0cca29732 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'extrahead' => [$this, 'block_extrahead'],
            'messages' => [$this, 'block_messages'],
            'content' => [$this, 'block_content'],
            'extrafooter' => [$this, 'block_extrafooter'],
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
        $this->parent = $this->loadTemplate("team/base.html.twig", "team/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "name", [], "any", false, false, false, 3), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $this->displayParentBlock("extrahead", $context, $blocks);
        echo "
    <style>
        .data-table td a, .data-table td a:hover {
            display: block;
            text-decoration: none;
            color: inherit;
            padding: 3px 5px;
        }

        .data-table tr {
            border-bottom: 1px solid silver;
        }

        .data-table tr:hover {
            background: #ffffcc !important;
        }
    </style>
";
    }

    // line 25
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 26
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "
    <div data-ajax-refresh-target data-ajax-refresh-after=\"setFlashAndProgress\" data-ajax-refresh-before=\"saveFlash\">
        ";
        // line 29
        $this->loadTemplate("team/partials/index_content.html.twig", "team/index.html.twig", 29)->display($context);
        // line 30
        echo "    </div>
";
    }

    // line 33
    public function block_extrafooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "    <script>
        var \$flash = null;

        function saveFlash() {
            \$flash = \$('[data-flash-messages]').children();
        }

        function setFlashAndProgress() {
            var \$newProgress = \$('[data-ajax-refresh-target] > [data-progress-bar]');
            if (\$newProgress.length) {
                var \$oldProgress = \$('body > [data-progress-bar]');
                \$oldProgress.html(\$newProgress.children());
                \$newProgress.remove();
            }

            \$('[data-flash-messages]').html(\$flash);
        }

        function markSeen(\$elem) {
            \$elem.closest('tr').removeClass('unseen');
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "team/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 34,  107 => 33,  102 => 30,  100 => 29,  96 => 27,  92 => 26,  86 => 25,  63 => 6,  59 => 5,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "team/index.html.twig", "/opt/domjudge/domserver/webapp/templates/team/index.html.twig");
    }
}
