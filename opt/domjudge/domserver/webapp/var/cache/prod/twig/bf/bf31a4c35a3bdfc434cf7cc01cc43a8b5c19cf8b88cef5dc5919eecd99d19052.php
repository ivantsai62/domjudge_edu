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

/* jury/config.html.twig */
class __TwigTemplate_2f562ad0d11b48cd134ed8240b2bd1b44203f463c8a5cedf211fb4c85459ad3e extends \Twig\Template
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
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/config.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/config.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Configuration - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    ";
        $this->displayParentBlock("extrahead", $context, $blocks);
        echo "
    ";
        // line 8
        echo twig_call_macro($macros["macros"], "macro_toggle_extrahead", [], 8, $context, $this->getSourceContext());
        echo "
    <style>
        .btn.toggle-on {
            right: initial;
        }
    </style>
";
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "    <h1>Configuration</h1>
    <form method=\"post\">
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 20
            echo "            <div class=\"card\">
                <div class=\"card-header\">
                    ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 22), "html", null, true);
            echo " Options
                </div>
                <div class=\"card-body\">
                    <ul class=\"list-group list-group-flush\">
                        ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "data", [], "any", false, false, false, 26));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 27
                echo "                            <li class=\"list-group-item\" style=\"padding:0;padding-top:10px;\">
                                <div class=\"form-group\">
                                    ";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 29), "html", null, true);
                echo "
                                    ";
                // line 30
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 30) == "bool")) {
                    // line 31
                    echo "                                        <input type=\"checkbox\" data-toggle=\"toggle\" data-size=\"mini\" data-on=\"Yes\"
                                               data-off=\"No\"
                                               name=\"config_";
                    // line 33
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 33), "html", null, true);
                    echo "\" id=\"config_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 33), "html", null, true);
                    echo "\"
                                            ";
                    // line 34
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 34) == 1)) {
                        echo " checked=\"checked\"";
                    }
                    echo ">
                                        <br/>
                                    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 36
$context["option"], "type", [], "any", false, false, false, 36) == "int")) {
                    // line 37
                    echo "                                        <input class=\"form-control form-control-sm\"
                                               style=\"margin-left:5px;width:7em;text-align:right;display:inline-block;\"
                                               type=\"number\"
                                               name=\"config_";
                    // line 40
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 40), "html", null, true);
                    echo "\" id=\"config_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 40), "html", null, true);
                    echo "\"
                                               value=\"";
                    // line 41
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 41), "html", null, true);
                    echo "\">
                                        <br/>
                                    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 43
$context["option"], "type", [], "any", false, false, false, 43) == "string")) {
                    // line 44
                    echo "                                        <input class=\"form-control form-control-sm\" style=\"width:30em;\" type=\"text\"
                                               name=\"config_";
                    // line 45
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 45), "html", null, true);
                    echo "\" id=\"config_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 45), "html", null, true);
                    echo "\"
                                               value=\"";
                    // line 46
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 46), "html", null, true);
                    echo "\">
                                    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 47
$context["option"], "type", [], "any", false, false, false, 47) == "array_keyval")) {
                    // line 48
                    echo "                                        <br/>
                                        ";
                    // line 49
                    $context["counter"] = 0;
                    // line 50
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 50));
                    foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                        // line 51
                        echo "                                            <input class=\"form-control form-control-sm\"
                                                   style=\"width:10em;text-align:right;display:inline-block;\" type=\"text\"
                                                   value=\"";
                        // line 53
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "\"
                                                   name=\"config_";
                        // line 54
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 54), "html", null, true);
                        echo "[";
                        echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
                        echo "][key]\"
                                                   id=\"config_";
                        // line 55
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 55), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
                        echo "__key_\">
                                            <input class=\"form-control form-control-sm\"
                                                   style=\"width:30em;display:inline-block;\" type=\"text\"
                                                   value=\"";
                        // line 58
                        echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                        echo "\"
                                                   name=\"config_";
                        // line 59
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 59), "html", null, true);
                        echo "[";
                        echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
                        echo "][val]\"
                                                   id=\"config_";
                        // line 60
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 60), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
                        echo "__val\">
                                            <br/>
                                            ";
                        // line 62
                        $context["counter"] = (($context["counter"] ?? null) + 1);
                        // line 63
                        echo "                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 64
                    echo "                                        <input class=\"form-control form-control-sm\"
                                               style=\"width:10em;text-align:right;display:inline-block;\" type=\"text\"
                                               name=\"config_";
                    // line 66
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 66), "html", null, true);
                    echo "[";
                    echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
                    echo "][key]\"
                                               id=\"config_";
                    // line 67
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 67), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
                    echo "__key_\">
                                        <input class=\"form-control form-control-sm\"
                                               style=\"width:30em;display:inline-block;\" type=\"text\"
                                               name=\"config_";
                    // line 70
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 70), "html", null, true);
                    echo "[";
                    echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
                    echo "][val]\"
                                               id=\"config_";
                    // line 71
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 71), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
                    echo "__val\">
                                        <br/>
                                    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 73
$context["option"], "type", [], "any", false, false, false, 73) == "array_val")) {
                    // line 74
                    echo "                                        <br/>
                                        ";
                    // line 75
                    $context["counter"] = 0;
                    // line 76
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 76));
                    foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                        // line 77
                        echo "                                            <input class=\"form-control form-control-sm\"
                                                   style=\"width:30em;display:inline-block;\" type=\"text\"
                                                   value=\"";
                        // line 79
                        echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                        echo "\"
                                                   name=\"config_";
                        // line 80
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 80), "html", null, true);
                        echo "[";
                        echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
                        echo "]\"
                                                   id=\"config_";
                        // line 81
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 81), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
                        echo "_\">
                                            <br/>
                                            ";
                        // line 83
                        $context["counter"] = (($context["counter"] ?? null) + 1);
                        // line 84
                        echo "                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 85
                    echo "                                        <input class=\"form-control form-control-sm\"
                                               style=\"width:30em;display:inline-block;\" type=\"text\"
                                               name=\"config_";
                    // line 87
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 87), "html", null, true);
                    echo "[";
                    echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
                    echo "]\"
                                               id=\"config_";
                    // line 88
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 88), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, ($context["counter"] ?? null), "html", null, true);
                    echo "_\">
                                        <br/>
                                    ";
                }
                // line 91
                echo "                                    <small class=\"text-muted\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "description", [], "any", false, false, false, 91), "html", null, true);
                echo "</small>
                                </div>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "                    </ul>
                </div>
            </div>
            <br/>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "        <input class=\"btn btn-primary\" type=\"submit\" value=\"Submit\" id=\"save\" name=\"save\">
    </form>
";
    }

    public function getTemplateName()
    {
        return "jury/config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 100,  326 => 95,  315 => 91,  307 => 88,  301 => 87,  297 => 85,  291 => 84,  289 => 83,  282 => 81,  276 => 80,  272 => 79,  268 => 77,  263 => 76,  261 => 75,  258 => 74,  256 => 73,  249 => 71,  243 => 70,  235 => 67,  229 => 66,  225 => 64,  219 => 63,  217 => 62,  210 => 60,  204 => 59,  200 => 58,  192 => 55,  186 => 54,  182 => 53,  178 => 51,  173 => 50,  171 => 49,  168 => 48,  166 => 47,  162 => 46,  156 => 45,  153 => 44,  151 => 43,  146 => 41,  140 => 40,  135 => 37,  133 => 36,  126 => 34,  120 => 33,  116 => 31,  114 => 30,  110 => 29,  106 => 27,  102 => 26,  95 => 22,  91 => 20,  87 => 19,  83 => 17,  79 => 16,  68 => 8,  63 => 7,  59 => 6,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/config.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/config.html.twig");
    }
}
