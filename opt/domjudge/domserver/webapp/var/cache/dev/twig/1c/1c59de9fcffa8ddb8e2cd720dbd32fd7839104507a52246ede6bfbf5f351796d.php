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
class __TwigTemplate_33ee11857190240fd75a863999cf8ad9bdfdf3626b1badaba203ea7d29191ac8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/config.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jury/config.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/config.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/config.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Configuration - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrahead"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extrahead"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "    <h1>Configuration</h1>
    <form method=\"post\">
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 19, $this->source); })()));
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
                        echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 54, $this->source); })()), "html", null, true);
                        echo "][key]\"
                                                   id=\"config_";
                        // line 55
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 55), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 55, $this->source); })()), "html", null, true);
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
                        echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 59, $this->source); })()), "html", null, true);
                        echo "][val]\"
                                                   id=\"config_";
                        // line 60
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 60), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 60, $this->source); })()), "html", null, true);
                        echo "__val\">
                                            <br/>
                                            ";
                        // line 62
                        $context["counter"] = ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 62, $this->source); })()) + 1);
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
                    echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 66, $this->source); })()), "html", null, true);
                    echo "][key]\"
                                               id=\"config_";
                    // line 67
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 67), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 67, $this->source); })()), "html", null, true);
                    echo "__key_\">
                                        <input class=\"form-control form-control-sm\"
                                               style=\"width:30em;display:inline-block;\" type=\"text\"
                                               name=\"config_";
                    // line 70
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 70), "html", null, true);
                    echo "[";
                    echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 70, $this->source); })()), "html", null, true);
                    echo "][val]\"
                                               id=\"config_";
                    // line 71
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 71), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 71, $this->source); })()), "html", null, true);
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
                        echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 80, $this->source); })()), "html", null, true);
                        echo "]\"
                                                   id=\"config_";
                        // line 81
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 81), "html", null, true);
                        echo "_";
                        echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 81, $this->source); })()), "html", null, true);
                        echo "_\">
                                            <br/>
                                            ";
                        // line 83
                        $context["counter"] = ((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 83, $this->source); })()) + 1);
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
                    echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 87, $this->source); })()), "html", null, true);
                    echo "]\"
                                               id=\"config_";
                    // line 88
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 88), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, (isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 88, $this->source); })()), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  378 => 100,  368 => 95,  357 => 91,  349 => 88,  343 => 87,  339 => 85,  333 => 84,  331 => 83,  324 => 81,  318 => 80,  314 => 79,  310 => 77,  305 => 76,  303 => 75,  300 => 74,  298 => 73,  291 => 71,  285 => 70,  277 => 67,  271 => 66,  267 => 64,  261 => 63,  259 => 62,  252 => 60,  246 => 59,  242 => 58,  234 => 55,  228 => 54,  224 => 53,  220 => 51,  215 => 50,  213 => 49,  210 => 48,  208 => 47,  204 => 46,  198 => 45,  195 => 44,  193 => 43,  188 => 41,  182 => 40,  177 => 37,  175 => 36,  168 => 34,  162 => 33,  158 => 31,  156 => 30,  152 => 29,  148 => 27,  144 => 26,  137 => 22,  133 => 20,  129 => 19,  125 => 17,  115 => 16,  98 => 8,  93 => 7,  83 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"jury/base.html.twig\" %}
{% import \"jury/jury_macros.twig\" as macros %}

{% block title %}Configuration - {{ parent() }}{% endblock %}

{% block extrahead %}
    {{ parent() }}
    {{ macros.toggle_extrahead() }}
    <style>
        .btn.toggle-on {
            right: initial;
        }
    </style>
{% endblock %}

{% block content %}
    <h1>Configuration</h1>
    <form method=\"post\">
        {% for category in options %}
            <div class=\"card\">
                <div class=\"card-header\">
                    {{ category.name }} Options
                </div>
                <div class=\"card-body\">
                    <ul class=\"list-group list-group-flush\">
                        {% for option in category.data %}
                            <li class=\"list-group-item\" style=\"padding:0;padding-top:10px;\">
                                <div class=\"form-group\">
                                    {{ option.name }}
                                    {% if option.type == 'bool' %}
                                        <input type=\"checkbox\" data-toggle=\"toggle\" data-size=\"mini\" data-on=\"Yes\"
                                               data-off=\"No\"
                                               name=\"config_{{ option.name }}\" id=\"config_{{ option.name }}\"
                                            {% if option.value == 1 %} checked=\"checked\"{% endif %}>
                                        <br/>
                                    {% elseif option.type == 'int' %}
                                        <input class=\"form-control form-control-sm\"
                                               style=\"margin-left:5px;width:7em;text-align:right;display:inline-block;\"
                                               type=\"number\"
                                               name=\"config_{{ option.name }}\" id=\"config_{{ option.name }}\"
                                               value=\"{{ option.value }}\">
                                        <br/>
                                    {% elseif option.type == 'string' %}
                                        <input class=\"form-control form-control-sm\" style=\"width:30em;\" type=\"text\"
                                               name=\"config_{{ option.name }}\" id=\"config_{{ option.name }}\"
                                               value=\"{{ option.value }}\">
                                    {% elseif option.type == 'array_keyval' %}
                                        <br/>
                                        {% set counter = 0 %}
                                        {% for key,val in option.value %}
                                            <input class=\"form-control form-control-sm\"
                                                   style=\"width:10em;text-align:right;display:inline-block;\" type=\"text\"
                                                   value=\"{{ key }}\"
                                                   name=\"config_{{ option.name }}[{{ counter }}][key]\"
                                                   id=\"config_{{ option.name }}_{{ counter }}__key_\">
                                            <input class=\"form-control form-control-sm\"
                                                   style=\"width:30em;display:inline-block;\" type=\"text\"
                                                   value=\"{{ val }}\"
                                                   name=\"config_{{ option.name }}[{{ counter }}][val]\"
                                                   id=\"config_{{ option.name }}_{{ counter }}__val\">
                                            <br/>
                                            {% set counter = counter + 1 %}
                                        {% endfor %}
                                        <input class=\"form-control form-control-sm\"
                                               style=\"width:10em;text-align:right;display:inline-block;\" type=\"text\"
                                               name=\"config_{{ option.name }}[{{ counter }}][key]\"
                                               id=\"config_{{ option.name }}_{{ counter }}__key_\">
                                        <input class=\"form-control form-control-sm\"
                                               style=\"width:30em;display:inline-block;\" type=\"text\"
                                               name=\"config_{{ option.name }}[{{ counter }}][val]\"
                                               id=\"config_{{ option.name }}_{{ counter }}__val\">
                                        <br/>
                                    {% elseif option.type == 'array_val' %}
                                        <br/>
                                        {% set counter = 0 %}
                                        {% for val in option.value %}
                                            <input class=\"form-control form-control-sm\"
                                                   style=\"width:30em;display:inline-block;\" type=\"text\"
                                                   value=\"{{ val }}\"
                                                   name=\"config_{{ option.name }}[{{ counter }}]\"
                                                   id=\"config_{{ option.name }}_{{ counter }}_\">
                                            <br/>
                                            {% set counter = counter + 1 %}
                                        {% endfor %}
                                        <input class=\"form-control form-control-sm\"
                                               style=\"width:30em;display:inline-block;\" type=\"text\"
                                               name=\"config_{{ option.name }}[{{ counter }}]\"
                                               id=\"config_{{ option.name }}_{{ counter }}_\">
                                        <br/>
                                    {% endif %}
                                    <small class=\"text-muted\">{{ option.description }}</small>
                                </div>
                            </li>
                        {% endfor %}
                    </ul>
                </div>
            </div>
            <br/>
        {% endfor %}
        <input class=\"btn btn-primary\" type=\"submit\" value=\"Submit\" id=\"save\" name=\"save\">
    </form>
{% endblock %}
", "jury/config.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/config.html.twig");
    }
}
