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

/* jury/problem_edit.html.twig */
class __TwigTemplate_37d25e8bb658c602108297146f36d06fe8d8ae05683c71e4f25cd2bd844a2fb9 extends \Twig\Template
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
        return "jury/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/problem_edit.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/problem_edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Edit problem ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "probid", [], "any", false, false, false, 4), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "
    <h1>Edit problem ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "probid", [], "any", false, false, false, 8), "html", null, true);
        echo "</h1>
    <div class=\"row\">
        <div class=\"col-lg-4\">
            <table class=\"table table-sm table-striped\">
                <tr>
                    <th>Problem ID</th>
                    <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "probid", [], "any", false, false, false, 14), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Testcases</th>
                    <td>
                        ";
        // line 19
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "testcases", [], "any", false, false, false, 19))) {
            // line 20
            echo "                            <em>no testcases</em>
                        ";
        } else {
            // line 22
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem_testcases", ["probId" => twig_get_attribute($this->env, $this->source, ($context["problem"] ?? null), "probid", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\">details / edit</a>
                        ";
        }
        // line 24
        echo "                    </td>
                </tr>
            </table>
        </div>
    </div>

    ";
        // line 30
        $this->loadTemplate("jury/partials/problem_form.html.twig", "jury/problem_edit.html.twig", 30)->display($context);
        // line 31
        echo "
    ";
        // line 32
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 33
            echo "        <hr>
        <i>or</i>

        <div class=\"row\">
            <div class=\"col-lg-4\">
                ";
            // line 38
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["uploadForm"] ?? null), 'form');
            echo "
            </div>
        </div>
    ";
        }
        // line 42
        echo "
";
    }

    public function getTemplateName()
    {
        return "jury/problem_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 42,  118 => 38,  111 => 33,  109 => 32,  106 => 31,  104 => 30,  96 => 24,  90 => 22,  86 => 20,  84 => 19,  76 => 14,  67 => 8,  64 => 7,  60 => 6,  50 => 4,  45 => 1,  43 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/problem_edit.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/problem_edit.html.twig");
    }
}
