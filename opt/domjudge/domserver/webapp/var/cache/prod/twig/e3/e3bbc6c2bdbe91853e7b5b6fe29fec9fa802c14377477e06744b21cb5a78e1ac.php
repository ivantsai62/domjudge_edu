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

/* team/problem_list.html.twig */
class __TwigTemplate_cc61f6612e47acee0612936dc17a5436c9701047a2d58a14242facd61089b321 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("team/base.html.twig", "team/problem_list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Contest problems - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo " ";
        $context["problem_text_path"] = "team_problem_text";
        // line 7
        echo "
";
        // line 8
        if ((null === ($context["problem_text_path"] ?? null))) {
            // line 9
            echo "
    Problem text has unknown type

";
        } else {
            // line 13
            echo "
    
";
        }
        // line 15
        echo "   
    ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "probid", [], "any", false, false, false, 16), "html", null, true);
        echo "

<script type=\"text/javascript\" language=\"javascript\"> 
    \$('#mainframe').css('height', \$(window).height()+'px');
</script>



";
    }

    public function getTemplateName()
    {
        return "team/problem_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 16,  78 => 15,  73 => 13,  67 => 9,  65 => 8,  62 => 7,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "team/problem_list.html.twig", "/opt/domjudge/domserver/webapp/templates/team/problem_list.html.twig");
    }
}
