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

/* jury/jury_macros.twig */
class __TwigTemplate_ead2df80a03970db4151b528afe415363dc4192b397c9467c1599dec85b7dcb2 extends \Twig\Template
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
        // line 14
        echo "
";
        // line 20
        echo "

";
        // line 25
        echo "
";
        // line 57
        echo "
";
        // line 177
        echo "
";
    }

    // line 1
    public function macro_select2_extrahead(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/select2.min.css"), "html", null, true);
            echo "\">
    <link rel=\"stylesheet\" href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/select2-bootstrap.min.css"), "html", null, true);
            echo "\">
    <script src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/select2.min.js"), "html", null, true);
            echo "\"></script>
    <script>
        \$(function () {
            \$.fn.select2.defaults.set(\"theme\", \"bootstrap\");

            \$('select[multiple]').select2();
        });
    </script>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 15
    public function macro_toggle_extrahead(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 16
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap-toggle.min.css"), "html", null, true);
            echo "\">
    <script src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-toggle.min.js"), "html", null, true);
            echo "\"></script>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 22
    public function macro_jscolor_extrahead(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 23
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jscolor.js"), "html", null, true);
            echo "\"></script>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 26
    public function macro_table_extrahead(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 27
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/dataTables.bootstrap4.min.css"), "html", null, true);
            echo "\">
    <script src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.dataTables.min.js"), "html", null, true);
            echo "\"></script>
    <script src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dataTables.bootstrap4.min.js"), "html", null, true);
            echo "\"></script>
    <style>
        .data-table td a, .data-table td a:hover {
            display: block;
            text-decoration: none;
            color: inherit;
        }

        .data-table th {
            white-space: nowrap;
        }

        .data-table td {
            white-space: nowrap;
            padding-top: 1px;
            padding-bottom: 1px;
        }

        .dataTables_filter {
            text-align: inherit;
        }

        .table-wrapper {
            display: inline-block;
        }
    </style>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 58
    public function macro_table($__data__ = null, $__fields__ = null, $__num_actions__ = null, $__options__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "data" => $__data__,
            "fields" => $__fields__,
            "num_actions" => $__num_actions__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 59
            echo "
    <div class=\"table-wrapper\">
        <table class=\"data-table table table-sm table-striped\" style=\"width:auto\">
            <thead class=\"\">
            <tr>";
            // line 64
            $context["default_sort"] = 0;
            // line 65
            $context["default_sort_order"] = "asc";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
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
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 67
                if (((twig_get_attribute($this->env, $this->source, $context["column"], "default_sort", [], "any", true, true, false, 67)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["column"], "default_sort", [], "any", false, false, false, 67), false)) : (false))) {
                    // line 68
                    $context["default_sort"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 68);
                    // line 69
                    if (twig_get_attribute($this->env, $this->source, $context["column"], "default_sort_order", [], "any", true, true, false, 69)) {
                        // line 70
                        $context["default_sort_order"] = twig_get_attribute($this->env, $this->source, $context["column"], "default_sort_order", [], "any", false, false, false, 70);
                    }
                }
                // line 73
                echo "
                    <th scope=\"col\" class=\"";
                // line 75
                if ((twig_get_attribute($this->env, $this->source, $context["column"], "sort", [], "any", true, true, false, 75) && twig_get_attribute($this->env, $this->source, $context["column"], "sort", [], "any", false, false, false, 75))) {
                    echo "sortable";
                }
                // line 76
                if (( !twig_get_attribute($this->env, $this->source, $context["column"], "search", [], "any", true, true, false, 76) || twig_get_attribute($this->env, $this->source, $context["column"], "search", [], "any", false, false, false, 76))) {
                    echo " searchable";
                }
                echo "\">";
                // line 77
                echo twig_get_attribute($this->env, $this->source, $context["column"], "title", [], "any", false, false, false, 77);
                // line 78
                echo "</th>";
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            if ((($context["num_actions"] ?? null) > 0)) {
                // line 81
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ($context["num_actions"] ?? null)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 82
                    echo "
                        <th scope=\"col\"></th>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 86
            echo "
            </tr>
            </thead>
            <tbody>";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 91
                echo "            
                <tr class=\"";
                // line 92
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["row"], "cssclass", [], "any", true, true, false, 92)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["row"], "cssclass", [], "any", false, false, false, 92), "")) : ("")), "html", null, true);
                echo "\"";
                // line 93
                if (twig_get_attribute($this->env, $this->source, $context["row"], "style", [], "any", true, true, false, 93)) {
                    echo " style=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "style", [], "any", false, false, false, 93), "html", null, true);
                    echo "\"";
                }
                echo ">";
                // line 94
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                    // line 96
                    $context["item"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "data", [], "any", false, false, false, 96), $context["key"], [], "any", false, false, false, 96);
                    // line 97
                    echo "                       <td
                           class=\"";
                    // line 98
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "cssclass", [], "any", true, true, false, 98)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "cssclass", [], "any", false, false, false, 98), "")) : ("")), "html", null, true);
                    if (($context["key"] == "status")) {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->statusClass(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "value", [], "any", false, false, false, 98)), "html", null, true);
                    }
                    echo "\"";
                    // line 99
                    if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", true, true, false, 99)) {
                        echo " title=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 99), "html", null, true);
                        echo "\"";
                    }
                    // line 100
                    if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "sortvalue", [], "any", true, true, false, 100)) {
                        echo " data-sort=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "sortvalue", [], "any", false, false, false, 100), "html", null, true);
                        echo "\"";
                    }
                    echo ">";
                    // line 101
                    if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", true, true, false, 101)) {
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 101), "html", null, true);
                        echo "\">";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 102
$context["row"], "link", [], "any", true, true, false, 102)) {
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "link", [], "any", false, false, false, 102), "html", null, true);
                        echo "\">";
                    }
                    // line 103
                    echo "
                                    ";
                    // line 104
                    if (($context["key"] == "status")) {
                        // line 105
                        echo $this->extensions['App\Twig\TwigExtension']->statusIcon(((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "value", [], "any", true, true, false, 105)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "value", [], "any", false, false, false, 105), ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "default", [], "any", true, true, false, 105)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "default", [], "any", false, false, false, 105), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "default", [], "any", true, true, false, 105)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "default", [], "any", false, false, false, 105), "")) : ("")))));
                        // line 108
                        echo "                                    ";
                        // line 109
                        echo "                                    ";
                    } elseif (($context["key"] == "restriction_languages")) {
                        // line 110
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "value", [], "any", false, false, false, 110));
                        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                            // line 111
                            echo twig_escape_filter($this->env, $context["v"], "html", null, true);
                            echo "<br>";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 114
                        echo "                                    ";
                    } elseif (($context["key"] == "problems_group")) {
                        // line 115
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "value", [], "any", false, false, false, 115));
                        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                            // line 116
                            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                            echo "<br>";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                    } else {
                        // line 123
                        echo ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "value", [], "any", true, true, false, 123)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "value", [], "any", false, false, false, 123), ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "default", [], "any", true, true, false, 123)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "default", [], "any", false, false, false, 123), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "default", [], "any", true, true, false, 123)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "default", [], "any", false, false, false, 123), "")) : (""))));
                    }
                    // line 128
                    if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", true, true, false, 128) || twig_get_attribute($this->env, $this->source, $context["row"], "link", [], "any", true, true, false, 128))) {
                        echo "</a>";
                    }
                    // line 129
                    if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", true, true, false, 129) || twig_get_attribute($this->env, $this->source, $context["row"], "link", [], "any", true, true, false, 129))) {
                        echo "</a>";
                    }
                    // line 130
                    echo "                                    
                                


                        </td>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 136
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["row"], "actions", [], "any", false, false, false, 136));
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 137
                    echo "                
                        <td>";
                    // line 139
                    if ($context["action"]) {
                        // line 140
                        echo "
                                <a href=\"";
                        // line 141
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "link", [], "any", false, false, false, 141), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "title", [], "any", false, false, false, 141), "html", null, true);
                        echo "\" ";
                        if ((twig_get_attribute($this->env, $this->source, $context["action"], "ajaxModal", [], "any", true, true, false, 141) && twig_get_attribute($this->env, $this->source, $context["action"], "ajaxModal", [], "any", false, false, false, 141))) {
                            echo "data-ajax-modal";
                        }
                        echo ">
                                    <i class=\"fas fa-";
                        // line 142
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 142), "html", null, true);
                        echo "\"></i>
                                </a>";
                    }
                    // line 145
                    echo "
                        </td>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 148
                echo "
                </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            echo "
            </tbody>
        </table>
    </div>
    <script>
        \$().ready(function () {
            \$('.data-table').DataTable({
                \"paging\": false,
                \"searching\": ";
            // line 159
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "searching", [], "any", true, true, false, 159)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "searching", [], "any", false, false, false, 159), "true")) : ("true")), "html", null, true);
            echo ",
                \"ordering\": ";
            // line 160
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "ordering", [], "any", true, true, false, 160)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "ordering", [], "any", false, false, false, 160), "true")) : ("true")), "html", null, true);
            echo ",
                \"order\": [[ ";
            // line 161
            echo twig_escape_filter($this->env, ($context["default_sort"] ?? null), "html", null, true);
            echo ", '";
            echo twig_escape_filter($this->env, ($context["default_sort_order"] ?? null), "html", null, true);
            echo "']],
                \"info\": false,
                \"autoWidth\": true,
                \"language\": {
                    \"searchPlaceholder\": \"filter table\",
                    \"search\": \"_INPUT_\",
                },
                'aoColumnDefs': [
                    {aTargets: ['sortable'], bSortable: true},
                    {aTargets: ['searchable'], bSearchable: true},
                    {aTargets: ['_all'], bSortable: false, bSearchable: false}
                ],
            });
        });
    </script>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 178
    public function macro_collection_scripts(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 179
            echo "    <script>
        var \$collectionHolder;

        \$(function () {
            \$collectionHolder = \$('[data-collection-holder]');
            \$collectionHolder.data('index', \$collectionHolder.find('tr').length);
            \$('[data-add]').on('click', function () {
                addCollectionItem(\$collectionHolder);
            });

            \$('[data-delete]').on('click', function () {
                \$(this).closest('tr').remove();
            });

            function addCollectionItem(\$collectionHolder) {
                var prototype = \$('[data-prototype]').text();
                var index = \$collectionHolder.data('index');
                prototype = prototype.replace(/__name__/g, index);
                \$collectionHolder.data('index', index + 1);
                var \$prototype = \$(prototype);
                \$prototype.find('[data-delete]').on('click', function () {
                    \$(this).closest('tr').remove();
                });

                \$collectionHolder.append(\$prototype);

                if (\$collectionHolder.data('after-add')) {
                    window[\$collectionHolder.data('after-add')]();
                }
            }
        });
    </script>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "jury/jury_macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  523 => 179,  511 => 178,  484 => 161,  480 => 160,  476 => 159,  466 => 151,  459 => 148,  452 => 145,  447 => 142,  437 => 141,  434 => 140,  432 => 139,  429 => 137,  425 => 136,  415 => 130,  411 => 129,  407 => 128,  404 => 123,  396 => 116,  392 => 115,  389 => 114,  382 => 111,  378 => 110,  375 => 109,  373 => 108,  371 => 105,  369 => 104,  366 => 103,  360 => 102,  355 => 101,  348 => 100,  342 => 99,  335 => 98,  332 => 97,  330 => 96,  326 => 94,  319 => 93,  316 => 92,  313 => 91,  309 => 90,  304 => 86,  296 => 82,  292 => 81,  290 => 80,  276 => 78,  274 => 77,  269 => 76,  265 => 75,  262 => 73,  258 => 70,  256 => 69,  254 => 68,  252 => 67,  235 => 66,  233 => 65,  231 => 64,  225 => 59,  209 => 58,  173 => 30,  169 => 29,  165 => 28,  162 => 27,  150 => 26,  138 => 23,  126 => 22,  115 => 18,  111 => 17,  108 => 16,  96 => 15,  78 => 5,  74 => 4,  70 => 3,  67 => 2,  55 => 1,  50 => 177,  47 => 57,  44 => 25,  40 => 20,  37 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "jury/jury_macros.twig", "/opt/domjudge/domserver/webapp/templates/jury/jury_macros.twig");
    }
}
