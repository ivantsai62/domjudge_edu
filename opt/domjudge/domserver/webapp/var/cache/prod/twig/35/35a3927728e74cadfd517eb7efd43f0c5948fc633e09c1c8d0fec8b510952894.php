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

/* partials/scoreboard_table.html.twig */
class __TwigTemplate_d781bf68fb82b5d5213a15f52028e4213c1ebbde3df40a3987a5763e67dc3c16 extends \Twig\Template
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
        if ( !(isset($context["limitToTeams"]) || array_key_exists("limitToTeams", $context))) {
            // line 2
            echo "    ";
            $context["limitToTeams"] = null;
            // line 3
            echo "    ";
            $context["limitToTeamIds"] = null;
        } else {
            // line 5
            echo "    ";
            $context["limitToTeamIds"] = [];
            // line 6
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["limitToTeams"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 7
                echo "        ";
                $context["limitToTeamIds"] = twig_array_merge(($context["limitToTeamIds"] ?? null), [0 => twig_get_attribute($this->env, $this->source, $context["team"], "teamid", [], "any", false, false, false, 7)]);
                // line 8
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['team'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 10
        if ( !(isset($context["showLegends"]) || array_key_exists("showLegends", $context))) {
            // line 11
            echo "    ";
            $context["showLegends"] = false;
        }
        // line 13
        if ( !(isset($context["static"]) || array_key_exists("static", $context))) {
            // line 14
            echo "    ";
            $context["static"] = false;
        }
        // line 16
        $context["showPoints"] = twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "showPoints", [], "any", false, false, false, 16);
        // line 17
        $context["usedCategories"] = twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "usedCategories", [0 => ($context["limitToTeamIds"] ?? null)], "method", false, false, false, 17);
        // line 18
        $context["hasDifferentCategoryColors"] = twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "categoryColors", [0 => ($context["limitToTeamIds"] ?? null)], "method", false, false, false, 18);
        // line 19
        $context["scores"] = twig_array_filter(twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "scores", [], "any", false, false, false, 19), function ($__score__) use ($context) { $context["score"] = $__score__; return ((null === ($context["limitToTeams"] ?? null)) || twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["score"] ?? null), "team", [], "any", false, false, false, 19), "teamid", [], "any", false, false, false, 19), ($context["limitToTeamIds"] ?? null))); });
        // line 20
        $context["problems"] = twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "problems", [], "any", false, false, false, 20);
        // line 21
        if ((($context["maxWidth"] ?? null) > 0)) {
            // line 22
            echo "    <style>
        .forceWidth {
            max-width: ";
            // line 24
            echo twig_escape_filter($this->env, ($context["maxWidth"] ?? null), "html", null, true);
            echo "px;
        }
    </style>
";
        }
        // line 28
        echo "            
<table class=\"scoreboard center ";
        // line 29
        if (($context["jury"] ?? null)) {
            echo "scoreboard_jury";
        }
        echo "\">

    ";
        // line 32
        echo "    <colgroup>
        <col id=\"scorerank\"/>
        ";
        // line 34
        if (($context["showFlags"] ?? null)) {
            // line 35
            echo "            <col id=\"scoreflags\"/>
        ";
        } else {
            // line 37
            echo "            <col/>
        ";
        }
        // line 39
        echo "        ";
        if (($context["showAffiliationLogos"] ?? null)) {
            // line 40
            echo "            <col id=\"scorelogos\"/>
        ";
        }
        // line 42
        echo "        <col id=\"scoreteamname\"/>
    </colgroup>
    <colgroup>
        <col id=\"scoresolv\"/>
        <col id=\"scoretotal\"/>
    </colgroup>
    <colgroup>
        ";
        // line 49
        if ((($context["showTeamSubmissions"] ?? null) || ($context["jury"] ?? null))) {
            // line 50
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["problems"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                // line 51
                echo "                <col class=\"scoreprob\"/>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "        ";
        }
        // line 54
        echo "    </colgroup>

    ";
        // line 56
        $context["teamColspan"] = 2;
        // line 57
        echo "    ";
        if (($context["showAffiliationLogos"] ?? null)) {
            // line 58
            echo "        ";
            $context["teamColspan"] = (($context["teamColspan"] ?? null) + 1);
            // line 59
            echo "    ";
        }
        // line 60
        echo "
    <thead>
    <tr class=\"scoreheader\">
        <th title=\"rank\" scope=\"col\">rank</th>
        <th title=\"team name\" scope=\"col\" colspan=\"";
        // line 64
        echo twig_escape_filter($this->env, ($context["teamColspan"] ?? null), "html", null, true);
        echo "\">team</th>
        <th title=\"# solved / penalty time\" colspan=\"2\" scope=\"col\">score</th>
        ";
        // line 66
        if ((($context["showTeamSubmissions"] ?? null) || ($context["jury"] ?? null))) {
            // line 67
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["problems"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                // line 68
                echo "                ";
                $context["link"] = null;
                // line 69
                echo "                ";
                $context["target"] = "_self";
                // line 70
                echo "                ";
                if ( !($context["static"] ?? null)) {
                    // line 71
                    echo "                    ";
                    if (($context["jury"] ?? null)) {
                        // line 72
                        echo "                        ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_problem", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 72)]);
                        // line 73
                        echo "                    ";
                    } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 73), "hasProblemtext", [], "any", false, false, false, 73)) {
                        // line 74
                        echo "                        ";
                        if (($context["public"] ?? null)) {
                            // line 75
                            echo "                            ";
                            $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_problem_text", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 75)]);
                            // line 76
                            echo "                            ";
                            $context["target"] = "_blank";
                            // line 77
                            echo "                        ";
                        } else {
                            // line 78
                            echo "                            ";
                            $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_problem_text", ["probId" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 78)]);
                            // line 79
                            echo "                            ";
                            $context["target"] = "_blank";
                            // line 80
                            echo "                        ";
                        }
                        // line 81
                        echo "                    ";
                    }
                    // line 82
                    echo "                ";
                }
                // line 83
                echo "                <th title=\"problem ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["problem"], "problem", [], "any", false, false, false, 83), "name", [], "any", false, false, false, 83), "html", null, true);
                echo "\" scope=\"col\">
                    <a ";
                // line 84
                if (($context["link"] ?? null)) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\"";
                }
                echo " target=\"";
                echo twig_escape_filter($this->env, ($context["target"] ?? null), "html", null, true);
                echo "\">
                        ";
                // line 85
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "shortname", [], "any", false, false, false, 85), "html", null, true);
                echo "
                        ";
                // line 86
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["problem"], "color", [], "any", false, false, false, 86))) {
                    // line 87
                    echo "                            <div class=\"circle\" style=\"background: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "color", [], "any", false, false, false, 87), "html", null, true);
                    echo ";\"></div>
                        ";
                }
                // line 89
                echo "                        ";
                if (($context["showPoints"] ?? null)) {
                    // line 90
                    echo "                            <span class='problempoints'>
                                [";
                    // line 91
                    if ((twig_get_attribute($this->env, $this->source, $context["problem"], "points", [], "any", false, false, false, 91) == 1)) {
                        echo "1 point";
                    } else {
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["problem"], "points", [], "any", false, false, false, 91), "html", null, true);
                        echo " points";
                    }
                    echo "]
                            </span>
                        ";
                }
                // line 94
                echo "                    </a>
                </th>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "        ";
        }
        // line 98
        echo "    </tr>
    </thead>
    <tbody>
    ";
        // line 101
        $context["previousSortOrder"] =  -1;
        // line 102
        echo "    ";
        $context["previousTeam"] = null;
        // line 103
        echo "    ";
        $context["backgroundColors"] = ["#FFFFFF" => 1];
        // line 104
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scores"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["score"]) {
            // line 105
            echo "        ";
            $context["classes"] = [];
            // line 106
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 106), "category", [], "any", false, false, false, 106), "sortorder", [], "any", false, false, false, 106) != ($context["previousSortOrder"] ?? null))) {
                // line 107
                echo "            ";
                if ((($context["previousSortOrder"] ?? null) !=  -1)) {
                    // line 108
                    echo "                ";
                    // line 109
                    echo "                ";
                    $this->loadTemplate("partials/scoreboard_summary.html.twig", "partials/scoreboard_table.html.twig", 109)->display(twig_array_merge($context, ["sortOrder" => ($context["previousSortOrder"] ?? null)]));
                    // line 110
                    echo "            ";
                }
                // line 111
                echo "            ";
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => "sortorderswitch"]);
                // line 112
                echo "            ";
                $context["previousSortOrder"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 112), "category", [], "any", false, false, false, 112), "sortorder", [], "any", false, false, false, 112);
                // line 113
                echo "            ";
                $context["previousTeam"] = null;
                // line 114
                echo "        ";
            }
            // line 115
            echo "
        ";
            // line 117
            echo "        ";
            if (((isset($context["myTeamId"]) || array_key_exists("myTeamId", $context)) && (($context["myTeamId"] ?? null) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 117), "teamid", [], "any", false, false, false, 117)))) {
                // line 118
                echo "            ";
                $context["classes"] = twig_array_merge(($context["classes"] ?? null), [0 => "scorethisisme"]);
                // line 119
                echo "            ";
                $context["color"] = "#FFFF99";
                // line 120
                echo "        ";
            } else {
                // line 121
                echo "            ";
                $context["color"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 121), "category", [], "any", false, false, false, 121), "color", [], "any", false, false, false, 121);
                // line 122
                echo "        ";
            }
            // line 123
            echo "        <tr class=\"";
            echo twig_escape_filter($this->env, twig_join_filter(($context["classes"] ?? null), " "), "html", null, true);
            echo "\" id=\"team:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 123), "teamid", [], "any", false, false, false, 123), "html", null, true);
            echo "\">
            <td class=\"scorepl\">
                ";
            // line 126
            echo "                ";
            if ( !($context["displayRank"] ?? null)) {
                // line 127
                echo "                    ?
                ";
            } elseif (((null ===             // line 128
($context["previousTeam"] ?? null)) || (twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "scores", [], "any", false, false, false, 128)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, ($context["previousTeam"] ?? null), "teamid", [], "any", false, false, false, 128)] ?? null) : null), "rank", [], "any", false, false, false, 128) != twig_get_attribute($this->env, $this->source, $context["score"], "rank", [], "any", false, false, false, 128)))) {
                // line 129
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["score"], "rank", [], "any", false, false, false, 129), "html", null, true);
                echo "
                ";
            } else {
                // line 131
                echo "                ";
            }
            // line 132
            echo "                ";
            $context["previousTeam"] = twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 132);
            // line 133
            echo "            </td>
            <td class=\"scoreaf\">
                ";
            // line 135
            if (($context["showFlags"] ?? null)) {
                // line 136
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 136), "affiliation", [], "any", false, false, false, 136)) {
                    // line 137
                    echo "                        ";
                    $context["link"] = null;
                    // line 138
                    echo "                        ";
                    if (($context["jury"] ?? null)) {
                        // line 139
                        echo "                            ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_affiliation", ["affilId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 139), "affilid", [], "any", false, false, false, 139)]);
                        // line 140
                        echo "                        ";
                    }
                    // line 141
                    echo "                        <a ";
                    if (($context["link"] ?? null)) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                            ";
                    // line 142
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 142), "affiliation", [], "any", false, false, false, 142), "country", [], "any", false, false, false, 142)) {
                        // line 143
                        echo "                                ";
                        $context["countryFlag"] = (("images/countries/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 143), "affiliation", [], "any", false, false, false, 143), "country", [], "any", false, false, false, 143)) . ".png");
                        // line 144
                        echo "                                ";
                        if ($this->extensions['App\Twig\TwigExtension']->assetExists(($context["countryFlag"] ?? null))) {
                            // line 145
                            echo "                                    <img src=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["countryFlag"] ?? null)), "html", null, true);
                            echo "\" alt=\"";
                            echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["alpha3_countries"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 145), "affiliation", [], "any", false, false, false, 145), "country", [], "any", false, false, false, 145)] ?? null) : null), "html", null, true);
                            echo "\"
                                         title=\"";
                            // line 146
                            echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["alpha3_countries"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 146), "affiliation", [], "any", false, false, false, 146), "country", [], "any", false, false, false, 146)] ?? null) : null), "html", null, true);
                            echo "\" class=\"countryflag\"/>
                                ";
                        } else {
                            // line 148
                            echo "                                    ";
                            echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["alpha3_countries"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 148), "affiliation", [], "any", false, false, false, 148), "country", [], "any", false, false, false, 148)] ?? null) : null), "html", null, true);
                            echo "
                                ";
                        }
                        // line 150
                        echo "                            ";
                    }
                    // line 151
                    echo "                        </a>
                    ";
                }
                // line 153
                echo "                ";
            }
            // line 154
            echo "            </td>
            ";
            // line 155
            if (($context["showAffiliationLogos"] ?? null)) {
                // line 156
                echo "                <td class=\"scoreaf\">
                    ";
                // line 157
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 157), "affiliation", [], "any", false, false, false, 157)) {
                    // line 158
                    echo "                        ";
                    $context["link"] = null;
                    // line 159
                    echo "                        ";
                    if (($context["jury"] ?? null)) {
                        // line 160
                        echo "                            ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_affiliation", ["affilId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 160), "affilid", [], "any", false, false, false, 160)]);
                        // line 161
                        echo "                        ";
                    }
                    // line 162
                    echo "                        <a ";
                    if (($context["link"] ?? null)) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                            ";
                    // line 163
                    $context["affiliationId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 163), "affiliation", [], "any", false, false, false, 163), "affilid", [], "any", false, false, false, 163);
                    // line 164
                    echo "                            ";
                    if ($this->extensions['App\Twig\TwigExtension']->showExternalId(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 164), "affiliation", [], "any", false, false, false, 164))) {
                        // line 165
                        echo "                                ";
                        $context["affiliationId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 165), "affiliation", [], "any", false, false, false, 165), "externalid", [], "any", false, false, false, 165);
                        // line 166
                        echo "                            ";
                    }
                    // line 167
                    echo "                            ";
                    $context["affiliationImage"] = (("images/affiliations/" . ($context["affiliationId"] ?? null)) . ".png");
                    // line 168
                    echo "                            ";
                    if ($this->extensions['App\Twig\TwigExtension']->assetExists(($context["affiliationImage"] ?? null))) {
                        // line 169
                        echo "                                <img src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["affiliationImage"] ?? null)), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 169), "affiliation", [], "any", false, false, false, 169), "name", [], "any", false, false, false, 169), "html", null, true);
                        echo "\"
                                     title=\"";
                        // line 170
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 170), "affiliation", [], "any", false, false, false, 170), "name", [], "any", false, false, false, 170), "html", null, true);
                        echo "\" class=\"affiliation-logo\">
                            ";
                    } else {
                        // line 172
                        echo "                                ";
                        echo twig_escape_filter($this->env, ($context["affiliationId"] ?? null), "html", null, true);
                        echo "
                            ";
                    }
                    // line 174
                    echo "                        </a>
                    ";
                }
                // line 176
                echo "                </td>
            ";
            }
            // line 178
            echo "            ";
            if ((null === ($context["color"] ?? null))) {
                // line 179
                echo "                ";
                $context["color"] = "#FFFFFF";
                // line 180
                echo "                ";
                $context["colorClass"] = "_FFFFFF";
                // line 181
                echo "            ";
            } else {
                // line 182
                echo "                ";
                $context["colorClass"] = twig_replace_filter(($context["color"] ?? null), ["#" => "_"]);
                // line 183
                echo "                ";
                $context["backgroundColors"] = twig_array_merge(($context["backgroundColors"] ?? null), [($context["color"] ?? null) => 1]);
                // line 184
                echo "            ";
            }
            // line 185
            echo "            <td class=\"scoretn cl";
            echo twig_escape_filter($this->env, ($context["colorClass"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 185), "name", [], "any", false, false, false, 185), "html", null, true);
            echo "\">
                ";
            // line 186
            $context["link"] = null;
            // line 187
            echo "                ";
            $context["extra"] = null;
            // line 188
            echo "                ";
            if ( !($context["static"] ?? null)) {
                // line 189
                echo "                    ";
                if (($context["jury"] ?? null)) {
                    // line 190
                    echo "                        ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 190), "teamid", [], "any", false, false, false, 190)]);
                    // line 191
                    echo "                    ";
                } elseif (($context["public"] ?? null)) {
                    // line 192
                    echo "                        ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 192), "teamid", [], "any", false, false, false, 192)]);
                    // line 193
                    echo "                        ";
                    $context["extra"] = "data-ajax-modal";
                    // line 194
                    echo "                    ";
                } else {
                    // line 195
                    echo "                        ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 195), "teamid", [], "any", false, false, false, 195)]);
                    // line 196
                    echo "                        ";
                    $context["extra"] = "data-ajax-modal";
                    // line 197
                    echo "                    ";
                }
                // line 198
                echo "                ";
            }
            // line 199
            echo "                <a ";
            if ( !(null === ($context["extra"] ?? null))) {
                echo twig_escape_filter($this->env, ($context["extra"] ?? null), "html", null, true);
            }
            echo " ";
            if ( !(null === ($context["link"] ?? null))) {
                echo "href=\"";
                echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                echo "\"";
            }
            echo ">
                    <span class=\"forceWidth\">
                        ";
            // line 201
            if (((twig_length_filter($this->env, ($context["usedCategories"] ?? null)) > 1) && twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "bestInCategory", [0 => twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 201), 1 => ($context["limitToTeamIds"] ?? null)], "method", false, false, false, 201))) {
                // line 202
                echo "                            <span class=\"badge badge-warning\" style=\"margin-right: 2em; font-weight: normal;\">
                            ";
                // line 203
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 203), "category", [], "any", false, false, false, 203), "name", [], "any", false, false, false, 203), "html", null, true);
                echo "
                        </span>
                        ";
            }
            // line 206
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 206), "name", [], "any", false, false, false, 206), "html", null, true);
            echo "
                    </span>
                    ";
            // line 208
            if (($context["showAffiliations"] ?? null)) {
                // line 209
                echo "                        <span class=\"univ forceWidth\">
                            ";
                // line 210
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 210), "affiliation", [], "any", false, false, false, 210)) {
                    // line 211
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 211), "affiliation", [], "any", false, false, false, 211), "name", [], "any", false, false, false, 211), "html", null, true);
                    echo "
                            ";
                }
                // line 213
                echo "                        </span>
                    ";
            }
            // line 215
            echo "                </a>
            </td>
            ";
            // line 217
            $context["totalTime"] = twig_get_attribute($this->env, $this->source, $context["score"], "totalTime", [], "any", false, false, false, 217);
            // line 218
            echo "            ";
            if (($context["scoreInSeconds"] ?? null)) {
                // line 219
                echo "                ";
                $context["totalTime"] = $this->extensions['App\Twig\TwigExtension']->printTimeRelative(($context["totalTime"] ?? null));
                // line 220
                echo "            ";
            }
            // line 221
            echo "          
            ";
            // line 222
            $context["totalPoints"] = twig_get_attribute($this->env, $this->source, $context["score"], "numberOfPoints", [], "any", false, false, false, 222);
            // line 223
            echo "            <td class=\"scorenc\">";
            echo twig_escape_filter($this->env, ($context["totalPoints"] ?? null), "html", null, true);
            echo "</td>
            <td class=\"scorett\">";
            // line 224
            echo twig_escape_filter($this->env, ($context["totalTime"] ?? null), "html", null, true);
            echo "</td>
            
            ";
            // line 226
            if ((($context["showTeamSubmissions"] ?? null) || ($context["jury"] ?? null))) {
                // line 227
                echo "            ";
                $context["num"] = 0;
                // line 228
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["problems"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
                    // line 230
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "Scorecache", [], "any", false, true, false, 230), ($context["num"] ?? null), [], "array", true, true, false, 230) &&  !twig_test_empty((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "Scorecache", [], "any", false, false, false, 230)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[($context["num"] ?? null)] ?? null) : null)))) {
                        // line 231
                        echo "                ";
                        $context["Scorecache"] = (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "Scorecache", [], "any", false, false, false, 231)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[($context["num"] ?? null)] ?? null) : null);
                        // line 232
                        echo "                ";
                    }
                    // line 235
                    echo "                    ";
                    $context["scoreCssClass"] = "score_neutral";
                    // line 236
                    echo "                    ";
                    $context["matrixItem"] = (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "matrix", [], "any", false, false, false, 236)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 236), "teamid", [], "any", false, false, false, 236)] ?? null) : null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 236)] ?? null) : null);
                    // line 237
                    echo "                    
                    ";
                    // line 238
                    if (twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "isCorrect", [], "any", false, false, false, 238)) {
                        // line 239
                        echo "                        ";
                        $context["scoreCssClass"] = "score_correct";
                        // line 240
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "solvedFirst", [0 => twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 240), 1 => $context["problem"]], "method", false, false, false, 240)) {
                            // line 241
                            echo "                            ";
                            $context["scoreCssClass"] = (($context["scoreCssClass"] ?? null) . " score_first");
                            // line 242
                            echo "                        ";
                        }
                        // line 243
                        echo "                    ";
                    } elseif ((($context["showPending"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numberOfPendingSubmissions", [], "any", false, false, false, 243) > 0))) {
                        // line 244
                        echo "                        ";
                        $context["scoreCssClass"] = "score_pending";
                        // line 245
                        echo "                    ";
                    } elseif ((twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numberOfSubmissions", [], "any", false, false, false, 245) > 0)) {
                        // line 246
                        echo "                        ";
                        $context["scoreCssClass"] = "score_incorrect";
                        // line 247
                        echo "                    ";
                    }
                    // line 248
                    echo "
                    ";
                    // line 249
                    $context["numberOfSubmissions"] = twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numberOfSubmissions", [], "any", false, false, false, 249);
                    // line 250
                    echo "                    ";
                    if ((($context["showPending"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numberOfPendingSubmissions", [], "any", false, false, false, 250) > 0))) {
                        // line 251
                        echo "                        ";
                        $context["numberOfSubmissions"] = ((($context["numberOfSubmissions"] ?? null) . " + ") . twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numberOfPendingSubmissions", [], "any", false, false, false, 251));
                        // line 252
                        echo "                    ";
                    }
                    // line 253
                    echo "
                    ";
                    // line 255
                    echo "                    ";
                    $context["time"] = "&nbsp;";
                    // line 256
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "isCorrect", [], "any", false, false, false, 256)) {
                        // line 257
                        echo "                        ";
                        $context["time"] = twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "time", [], "any", false, false, false, 257);
                        // line 258
                        echo "                        ";
                        if (($context["scoreInSeconds"] ?? null)) {
                            // line 259
                            echo "                            ";
                            $context["time"] = $this->extensions['App\Twig\TwigExtension']->printTimeRelative($this->extensions['App\Twig\TwigExtension']->scoreTime(($context["time"] ?? null)));
                            // line 260
                            echo "                            ";
                            if ((twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numberOfSubmissions", [], "any", false, false, false, 260) > 1)) {
                                // line 261
                                echo "                                ";
                                $context["time"] = ((($context["time"] ?? null) . " + ") . $this->extensions['App\Twig\TwigExtension']->printTimeRelative($this->extensions['App\Twig\TwigExtension']->calculatePenaltyTime(true, twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "numberOfSubmissions", [], "any", false, false, false, 261))));
                                // line 262
                                echo "                            ";
                            }
                            // line 263
                            echo "                        ";
                        } else {
                            // line 264
                            echo "                            ";
                            $context["time"] = $this->extensions['App\Twig\TwigExtension']->scoreTime(($context["time"] ?? null));
                            // line 265
                            echo "                        ";
                        }
                        // line 266
                        echo "                    ";
                    }
                    // line 267
                    echo "
                    ";
                    // line 268
                    $context["link"] = null;
                    // line 269
                    echo "                    ";
                    if (($context["jury"] ?? null)) {
                        // line 270
                        echo "                        ";
                        $context["restrict"] = ["probid" => twig_get_attribute($this->env, $this->source, $context["problem"], "probid", [], "any", false, false, false, 270)];
                        // line 271
                        echo "                        ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team", ["teamId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["score"], "team", [], "any", false, false, false, 271), "teamid", [], "any", false, false, false, 271), "restrict" => ($context["restrict"] ?? null)]);
                        // line 272
                        echo "                    ";
                    }
                    // line 273
                    echo "                    <td class=\"score_cell\">
                        ";
                    // line 274
                    if ((($context["numberOfSubmissions"] ?? null) != "0")) {
                        // line 275
                        echo "                            <a ";
                        if (($context["link"] ?? null)) {
                            echo "href=\"";
                            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                            echo "\"";
                        }
                        echo ">
                                <div class=\"";
                        // line 276
                        echo twig_escape_filter($this->env, ($context["scoreCssClass"] ?? null), "html", null, true);
                        echo "\">";
                        // line 278
                        if ((($context["time"] ?? null) == "&nbsp;")) {
                            // line 279
                            echo "                                        ";
                            if (((((isset($context["Scorecache"]) || array_key_exists("Scorecache", $context)) && (($context["scoreInSeconds"] ?? null) == false)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "AllTaskPoint", [], "any", false, false, false, 279))) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "AllTaskPoint", [], "any", false, true, false, 279), 1, [], "array", true, true, false, 279))) {
                                // line 280
                                echo "                                                ";
                                $context["A"] = (((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "AllTaskPoint", [], "any", false, false, false, 280)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[1] ?? null) : null) / (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = twig_get_attribute($this->env, $this->source, ($context["matrixItem"] ?? null), "AllTaskPoint", [], "any", false, false, false, 280)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[0] ?? null) : null)) * twig_get_attribute($this->env, $this->source, $context["problem"], "points", [], "any", false, false, false, 280));
                                // line 281
                                echo "                                                ";
                                if ((((($context["A"] ?? null) != 0) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["problem"], "subtask", [], "any", false, false, false, 281))) && (twig_get_attribute($this->env, $this->source, $context["problem"], "subtask", [], "any", false, false, false, 281) != 0))) {
                                    // line 282
                                    echo "                                                    ";
                                    echo twig_escape_filter($this->env, twig_round(($context["A"] ?? null)), "html", null, true);
                                    echo " points
                                                ";
                                } else {
                                    // line 284
                                    echo "                                                    ";
                                    echo ($context["time"] ?? null);
                                    echo "
                                                ";
                                }
                                // line 286
                                echo "                                        ";
                            } else {
                                // line 287
                                echo "                                            ";
                                echo ($context["time"] ?? null);
                                echo "
                                        ";
                            }
                            // line 289
                            echo "                                    ";
                        } else {
                            // line 290
                            echo "                                        ";
                            echo ($context["time"] ?? null);
                            echo "
                                    ";
                        }
                        // line 293
                        echo "<span>
                                        ";
                        // line 294
                        if ((($context["numberOfSubmissions"] ?? null) === 1)) {
                            // line 295
                            echo "                                            1 try
                                        ";
                        } else {
                            // line 297
                            echo "                                            ";
                            echo twig_escape_filter($this->env, ($context["numberOfSubmissions"] ?? null), "html", null, true);
                            echo " tries
                                        ";
                        }
                        // line 299
                        echo "                                    </span>
                                </div>
                            </a>
                        ";
                    }
                    // line 303
                    echo "                    </td>
                    
                ";
                    // line 305
                    $context["num"] = (($context["num"] ?? null) + 1);
                    // line 306
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 307
                echo "            ";
            }
            // line 308
            echo "        </tr>
        
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['score'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 311
        echo "
    ";
        // line 313
        echo "    ";
        $this->loadTemplate("partials/scoreboard_summary.html.twig", "partials/scoreboard_table.html.twig", 313)->display(twig_array_merge($context, ["sortOrder" => ($context["previousSortOrder"] ?? null)]));
        // line 314
        echo "    </tbody>
</table>

";
        // line 317
        if (($context["showLegends"] ?? null)) {
            // line 318
            echo "    <p><br/><br/></p>

    ";
            // line 321
            echo "    ";
            if ((((null === ($context["limitToTeamIds"] ?? null)) && (twig_length_filter($this->env, ($context["usedCategories"] ?? null)) > 1)) && ($context["hasDifferentCategoryColors"] ?? null))) {
                // line 322
                echo "        <table id=\"categ_legend\" class=\"scoreboard scorelegend ";
                if (($context["jury"] ?? null)) {
                    echo "scoreboard_jury";
                }
                echo "\">
            <thead>
            <tr>
                <th scope=\"col\">
                    ";
                // line 326
                $context["link"] = null;
                // line 327
                echo "                    ";
                if (($context["jury"] ?? null)) {
                    // line 328
                    echo "                        ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_categories");
                    // line 329
                    echo "                    ";
                }
                // line 330
                echo "                    <a ";
                if (($context["link"] ?? null)) {
                    echo "href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\"";
                }
                echo ">Categories</a>
                </th>
            </tr>
            </thead>
            <tbody>
            ";
                // line 335
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_filter(twig_get_attribute($this->env, $this->source, ($context["scoreboard"] ?? null), "categories", [], "any", false, false, false, 335), function ($__category__) use ($context) { $context["category"] = $__category__; return twig_get_attribute($this->env, $this->source, ($context["usedCategories"] ?? null), twig_get_attribute($this->env, $this->source, $context["category"], "categoryid", [], "any", false, false, false, 335), [], "array", true, true, false, 335); }));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 336
                    echo "                <tr ";
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "color", [], "any", false, false, false, 336)) {
                        echo "style=\"background: ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "color", [], "any", false, false, false, 336), "html", null, true);
                        echo ";\"";
                    }
                    echo ">
                    <td>
                        ";
                    // line 338
                    $context["link"] = null;
                    // line 339
                    echo "                        ";
                    if (($context["jury"] ?? null)) {
                        // line 340
                        echo "                            ";
                        $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jury_team_category", ["categoryId" => twig_get_attribute($this->env, $this->source, $context["category"], "categoryid", [], "any", false, false, false, 340)]);
                        // line 341
                        echo "                        ";
                    }
                    // line 342
                    echo "                        <a ";
                    if (($context["link"] ?? null)) {
                        echo "href=\"";
                        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                        echo "\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 342), "html", null, true);
                    echo "</a>
                    </td>
                </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 346
                echo "            </tbody>
        </table>
    ";
            }
            // line 349
            echo "    ";
            if ((($context["showTeamSubmissions"] ?? null) || ($context["jury"] ?? null))) {
                // line 350
                echo "        ";
                $context["cellColors"] = ["first" => "Solved first", "correct" => "Solved", "incorrect" => "Tried, incorrect", "pending" => "Tried, pending", "neutral" => "Untried"];
                // line 351
                echo "        <table id=\"cell_legend\" class=\"scoreboard scorelegend ";
                if (($context["jury"] ?? null)) {
                    echo "scoreboard_jury";
                }
                echo "\">
            <thead>
            <tr>
                <th scope=\"col\">Cell colours</th>
            </tr>
            </thead>
            <tbody>
            ";
                // line 358
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["cellColors"] ?? null));
                foreach ($context['_seq'] as $context["color"] => $context["description"]) {
                    // line 359
                    echo "                ";
                    if ((($context["color"] != "pending") || ($context["showPending"] ?? null))) {
                        // line 360
                        echo "                    <tr class=\"score_";
                        echo twig_escape_filter($this->env, $context["color"], "html", null, true);
                        echo "\">
                        <td>";
                        // line 361
                        echo twig_escape_filter($this->env, $context["description"], "html", null, true);
                        echo "</td>
                    </tr>
                ";
                    }
                    // line 364
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['color'], $context['description'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 365
                echo "            </tbody>
        </table>
    ";
            }
        }
        // line 369
        echo "
<style>
    ";
        // line 371
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["backgroundColors"] ?? null));
        foreach ($context['_seq'] as $context["color"] => $context["i"]) {
            // line 372
            echo "        ";
            $context["colorClass"] = twig_replace_filter($context["color"], ["#" => "_"]);
            // line 373
            echo "
        .cl";
            // line 374
            echo twig_escape_filter($this->env, ($context["colorClass"] ?? null), "html", null, true);
            echo " {
            background-color: ";
            // line 375
            echo twig_escape_filter($this->env, $context["color"], "html", null, true);
            echo ";
        }

        ";
            // line 378
            $context["cMin"] = $this->extensions['App\Twig\TwigExtension']->hexColorToRGBA($context["color"], 0);
            // line 379
            echo "        ";
            $context["cMax"] = $this->extensions['App\Twig\TwigExtension']->hexColorToRGBA($context["color"], 1);
            // line 380
            echo "
        .cl";
            // line 381
            echo twig_escape_filter($this->env, ($context["colorClass"] ?? null), "html", null, true);
            echo " .forceWidth.toolong:after {
            background: linear-gradient(to right,
                ";
            // line 383
            echo twig_escape_filter($this->env, ($context["cMin"] ?? null), "html", null, true);
            echo " 0%,
                ";
            // line 384
            echo twig_escape_filter($this->env, ($context["cMax"] ?? null), "html", null, true);
            echo " 96%);
        }
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['color'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 387
        echo "</style>
<script>
    document.querySelectorAll(\".forceWidth:not(.toolong)\").forEach(el => {
        if (el instanceof Element && el.scrollWidth > el.offsetWidth) {
            el.classList.add(\"toolong\");
        }
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "partials/scoreboard_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1118 => 387,  1109 => 384,  1105 => 383,  1100 => 381,  1097 => 380,  1094 => 379,  1092 => 378,  1086 => 375,  1082 => 374,  1079 => 373,  1076 => 372,  1072 => 371,  1068 => 369,  1062 => 365,  1056 => 364,  1050 => 361,  1045 => 360,  1042 => 359,  1038 => 358,  1025 => 351,  1022 => 350,  1019 => 349,  1014 => 346,  997 => 342,  994 => 341,  991 => 340,  988 => 339,  986 => 338,  976 => 336,  972 => 335,  959 => 330,  956 => 329,  953 => 328,  950 => 327,  948 => 326,  938 => 322,  935 => 321,  931 => 318,  929 => 317,  924 => 314,  921 => 313,  918 => 311,  902 => 308,  899 => 307,  893 => 306,  891 => 305,  887 => 303,  881 => 299,  875 => 297,  871 => 295,  869 => 294,  866 => 293,  860 => 290,  857 => 289,  851 => 287,  848 => 286,  842 => 284,  836 => 282,  833 => 281,  830 => 280,  827 => 279,  825 => 278,  822 => 276,  813 => 275,  811 => 274,  808 => 273,  805 => 272,  802 => 271,  799 => 270,  796 => 269,  794 => 268,  791 => 267,  788 => 266,  785 => 265,  782 => 264,  779 => 263,  776 => 262,  773 => 261,  770 => 260,  767 => 259,  764 => 258,  761 => 257,  758 => 256,  755 => 255,  752 => 253,  749 => 252,  746 => 251,  743 => 250,  741 => 249,  738 => 248,  735 => 247,  732 => 246,  729 => 245,  726 => 244,  723 => 243,  720 => 242,  717 => 241,  714 => 240,  711 => 239,  709 => 238,  706 => 237,  703 => 236,  700 => 235,  697 => 232,  694 => 231,  692 => 230,  687 => 228,  684 => 227,  682 => 226,  677 => 224,  672 => 223,  670 => 222,  667 => 221,  664 => 220,  661 => 219,  658 => 218,  656 => 217,  652 => 215,  648 => 213,  642 => 211,  640 => 210,  637 => 209,  635 => 208,  629 => 206,  623 => 203,  620 => 202,  618 => 201,  604 => 199,  601 => 198,  598 => 197,  595 => 196,  592 => 195,  589 => 194,  586 => 193,  583 => 192,  580 => 191,  577 => 190,  574 => 189,  571 => 188,  568 => 187,  566 => 186,  559 => 185,  556 => 184,  553 => 183,  550 => 182,  547 => 181,  544 => 180,  541 => 179,  538 => 178,  534 => 176,  530 => 174,  524 => 172,  519 => 170,  512 => 169,  509 => 168,  506 => 167,  503 => 166,  500 => 165,  497 => 164,  495 => 163,  486 => 162,  483 => 161,  480 => 160,  477 => 159,  474 => 158,  472 => 157,  469 => 156,  467 => 155,  464 => 154,  461 => 153,  457 => 151,  454 => 150,  448 => 148,  443 => 146,  436 => 145,  433 => 144,  430 => 143,  428 => 142,  419 => 141,  416 => 140,  413 => 139,  410 => 138,  407 => 137,  404 => 136,  402 => 135,  398 => 133,  395 => 132,  392 => 131,  386 => 129,  384 => 128,  381 => 127,  378 => 126,  370 => 123,  367 => 122,  364 => 121,  361 => 120,  358 => 119,  355 => 118,  352 => 117,  349 => 115,  346 => 114,  343 => 113,  340 => 112,  337 => 111,  334 => 110,  331 => 109,  329 => 108,  326 => 107,  323 => 106,  320 => 105,  302 => 104,  299 => 103,  296 => 102,  294 => 101,  289 => 98,  286 => 97,  278 => 94,  267 => 91,  264 => 90,  261 => 89,  255 => 87,  253 => 86,  249 => 85,  239 => 84,  234 => 83,  231 => 82,  228 => 81,  225 => 80,  222 => 79,  219 => 78,  216 => 77,  213 => 76,  210 => 75,  207 => 74,  204 => 73,  201 => 72,  198 => 71,  195 => 70,  192 => 69,  189 => 68,  184 => 67,  182 => 66,  177 => 64,  171 => 60,  168 => 59,  165 => 58,  162 => 57,  160 => 56,  156 => 54,  153 => 53,  146 => 51,  141 => 50,  139 => 49,  130 => 42,  126 => 40,  123 => 39,  119 => 37,  115 => 35,  113 => 34,  109 => 32,  102 => 29,  99 => 28,  92 => 24,  88 => 22,  86 => 21,  84 => 20,  82 => 19,  80 => 18,  78 => 17,  76 => 16,  72 => 14,  70 => 13,  66 => 11,  64 => 10,  57 => 8,  54 => 7,  49 => 6,  46 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/scoreboard_table.html.twig", "/opt/domjudge/domserver/webapp/templates/partials/scoreboard_table.html.twig");
    }
}
