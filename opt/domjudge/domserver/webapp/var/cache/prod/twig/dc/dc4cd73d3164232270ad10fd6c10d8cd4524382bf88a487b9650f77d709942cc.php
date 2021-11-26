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

/* jury/index.html.twig */
class __TwigTemplate_84b8b0106d1eb94870ca35d451972e5454c17988d97f50732d43dba0ce7769a6 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Jury Interface";
    }

    // line 5
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        $this->displayParentBlock("extrahead", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "<h1>DOMjudge Jury interface</h1>


";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 14
            echo "    ";
            $this->loadTemplate("partials/alert.html.twig", "jury/index.html.twig", 14)->display(twig_array_merge($context, ["type" => "danger", "message" => $context["error"]]));
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
<a href=\"https://www.domjudge.org/\">
  <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/DOMjudgelogo.png"), "html", null, true);
        echo "\" id=\"djlogo\" alt=\"DOMjudge logo\" class=\"float-right d-none d-md-block\" title=\"The DOMjudge logo: free as in beer!\" />
</a>

<div class=\"row equal mt-3\">
    <div class=\"col-lg-4 col-md-5 col-sm-6 mt-3\">
        ";
        // line 23
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) {
            // line 24
            echo "        <div class=\"card mb-3\">
            <div class=\"card-header\">
                Before contest:
            </div>
            <div class=\"card-body\">
                <ul>
                    <li><a href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_contests");
            echo "\">Contests</a></li>
                    <li><a href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_executables");
            echo "\">Executables</a></li>
                    <li><a href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehosts");
            echo "\">Judgehosts</a></li>
                    <li><a href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judgehost_restrictions");
            echo "\">Judgehost Restrictions</a></li>
                    <li><a href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_languages");
            echo "\">Languages</a></li>
                    <li><a href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problems");
            echo "\">Problems</a></li>
                    <li><a href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_users");
            echo "\">Users</a></li>
                    <li><a href=\"";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_teams");
            echo "\">Teams</a></li>
                    <li><a href=\"";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_categories");
            echo "\">Team Categories</a></li>
                    <li><a href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_affiliations");
            echo "\">Team Affiliations</a></li>
                </ul>
            </div>
        </div>
        ";
        }
        // line 44
        echo "
        <div class=\"card mb-3\">
            <div class=\"card-header\">
                During contest:
            </div>
            <div class=\"card-body\">
                <ul>
                    <li><a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_balloons");
        echo "\">Balloon Status</a></li>
                    ";
        // line 52
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) {
            // line 53
            echo "                        <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_clarifications");
            echo "\">Clarifications</a></li>
                        <li><a href=\"";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_internal_errors");
            echo "\">Internal Errors</a></li>
                    ";
        }
        // line 56
        echo "                    ";
        if (($context["have_printing"] ?? null)) {
            // line 57
            echo "                        <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_print");
            echo "\">Print</a></li>
                    ";
        }
        // line 59
        echo "                    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY")) {
            // line 60
            echo "                        <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_rejudgings");
            echo "\">Rejudgings</a></li>
                        <li><a href=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_scoreboard");
            echo "\">Scoreboard</a></li>
                        <li><a href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("analysis_index");
            echo "\">Statistics/Analysis</a></li>
                        <li><a href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_submissions");
            echo "\">Submissions</a></li>
                        ";
            // line 64
            if (($context["show_shadow_differences"] ?? null)) {
                // line 65
                echo "                            <li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_shadow_differences");
                echo "\">Shadow Differences</a></li>
                        ";
            }
            // line 67
            echo "                    ";
        }
        // line 68
        echo "                </ul>
            </div>
        </div>
    </div>

  <div class=\"col-lg-4 col-md-5 col-sm-6 mt-3\">
    ";
        // line 74
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 75
            echo "    <div class=\"card mb-3\">
      <div class=\"card-header\">
        Administrator:
      </div>
      <div class=\"card-body\">
        <ul>
          <li><a href=\"";
            // line 81
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_config");
            echo "\">Configuration settings</a></li>
          <li><a href=\"";
            // line 82
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_config_check");
            echo "\">Config checker</a></li>
          <li><a href=\"";
            // line 83
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_import_export");
            echo "\">Import / export</a></li>
          <li><a href=\"";
            // line 84
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_generate_passwords");
            echo "\">Manage team passwords</a></li>
          <li><a href=\"";
            // line 85
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_refresh_cache");
            echo "\">Refresh scoreboard cache</a></li>
          <li><a href=\"";
            // line 86
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_judging_verifier");
            echo "\">Judging verifier</a></li>
          <li><a href=\"";
            // line 87
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_auditlog");
            echo "\">Audit log</a></li>
        </ul>
      </div>
    </div>
    ";
        }
        // line 92
        echo "
    <div class=\"card mb-3\">
      <div class=\"card-header\">
        Documentation:
      </div>
      <div class=\"card-body\">
        <ul>
        <li><a href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("doc/manual/build/html/index.html"), "html", null, true);
        echo "\">DOMjudge manual</a></li>
        <li><a href=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("doc/team/team-manual.pdf"), "html", null, true);
        echo "\">Team manual <i class=\"fas fa-file-pdf\"></i></a></li>
        <li><a href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app.swagger_ui");
        echo "\">API documentation</a><br />
            See also the <a href=\"https://clics.ecs.baylor.edu/index.php/Contest_API\">ICPC Contest API</a>.</li>
        </ul>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "jury/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 101,  301 => 100,  297 => 99,  288 => 92,  280 => 87,  276 => 86,  272 => 85,  268 => 84,  264 => 83,  260 => 82,  256 => 81,  248 => 75,  246 => 74,  238 => 68,  235 => 67,  229 => 65,  227 => 64,  223 => 63,  219 => 62,  215 => 61,  210 => 60,  207 => 59,  201 => 57,  198 => 56,  193 => 54,  188 => 53,  186 => 52,  182 => 51,  173 => 44,  165 => 39,  161 => 38,  157 => 37,  153 => 36,  149 => 35,  145 => 34,  141 => 33,  137 => 32,  133 => 31,  129 => 30,  121 => 24,  119 => 23,  111 => 18,  107 => 16,  92 => 14,  75 => 13,  70 => 10,  66 => 9,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/index.html.twig", "/opt/domjudge/domserver/webapp/templates/jury/index.html.twig");
    }
}
