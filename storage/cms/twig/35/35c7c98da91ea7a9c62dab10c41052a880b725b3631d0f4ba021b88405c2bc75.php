<?php

/* C:\xampp\htdocs\o/plugins/rainlab/forum/components/partials/pagination-list.htm */
class __TwigTemplate_9f2551c34e0c03c7da7c1243cef7a56d4c0886dbd3f300cc6f6b198bd9785474 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["paginationEnabled"] = (((twig_get_attribute($this->env, $this->source,         // line 2
($context["records"] ?? null), "currentPage", array()) > 1) || (twig_get_attribute($this->env, $this->source,         // line 3
($context["records"] ?? null), "lastPage", array()) > 1)) || (twig_get_attribute($this->env, $this->source,         // line 4
($context["records"] ?? null), "lastPage", array()) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array())));
        // line 6
        echo "
";
        // line 7
        if (($context["paginationEnabled"] ?? null)) {
            // line 8
            echo "    ";
            // line 9
            echo "    ";
            $context["n"] = 2;
            // line 10
            echo "
    ";
            // line 11
            $context["currentPageZeroBased"] = (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) - 1);
            // line 12
            echo "
    ";
            // line 13
            $context["pageLinks"] = array();
            // line 14
            echo "    ";
            $context["pageSet"] = array();
            // line 15
            echo "
    ";
            // line 16
            $context["startOffset"] = max((($context["currentPageZeroBased"] ?? null) - ($context["n"] ?? null)), 0);
            // line 17
            echo "    ";
            if ((((($context["startOffset"] ?? null) + (2 * ($context["n"] ?? null))) + 1) > (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array()) - 1))) {
                // line 18
                echo "        ";
                $context["startOffset"] = max(((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array()) - (2 * ($context["n"] ?? null))) - 1), 0);
                // line 19
                echo "    ";
            }
            // line 20
            echo "
    ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 22
                echo "        ";
                $context["pageLinks"] = twig_array_merge(($context["pageLinks"] ?? null), array(0 => $context["page"]));
                // line 23
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "
    ";
            // line 25
            $context["activeBlock"] = twig_slice($this->env, ($context["pageLinks"] ?? null), ($context["startOffset"] ?? null), ((2 * ($context["n"] ?? null)) + 1));
            // line 26
            echo "
    ";
            // line 27
            if ((($context["startOffset"] ?? null) > 0)) {
                // line 28
                echo "        ";
                $context["pageSet"] = twig_array_merge(($context["pageSet"] ?? null), array(0 => 1));
                // line 29
                echo "
        ";
                // line 30
                if ((($context["startOffset"] ?? null) > 1)) {
                    // line 31
                    echo "            ";
                    $context["pageSet"] = twig_array_merge(($context["pageSet"] ?? null), array(0 => "..."));
                    // line 32
                    echo "        ";
                }
                // line 33
                echo "    ";
            }
            // line 34
            echo "
    ";
            // line 35
            $context["pageSet"] = twig_array_merge(($context["pageSet"] ?? null), ($context["activeBlock"] ?? null));
            // line 36
            echo "
    ";
            // line 37
            $context["diffToEnd"] = (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array()) - 1) - ((($context["startOffset"] ?? null) + (2 * ($context["n"] ?? null))) + 1)) + 1);
            // line 38
            echo "
    ";
            // line 39
            if ((($context["diffToEnd"] ?? null) > 0)) {
                // line 40
                echo "        ";
                if ((($context["diffToEnd"] ?? null) > 1)) {
                    // line 41
                    echo "            ";
                    $context["pageSet"] = twig_array_merge(($context["pageSet"] ?? null), array(0 => "..."));
                    // line 42
                    echo "        ";
                }
                // line 43
                echo "
        ";
                // line 44
                $context["pageSet"] = twig_array_merge(($context["pageSet"] ?? null), array(0 => twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array())));
                // line 45
                echo "    ";
            }
            // line 46
            echo "
    <ul class=\"pagination\">
        ";
            // line 48
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) > 1)) {
                // line 49
                echo "            <li>
                <a href=\"";
                // line 50
                echo twig_escape_filter($this->env, (($context["paginationUrl"] ?? null) . (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) - 1)), "html", null, true);
                echo "\">
                    &larr; Previous
                </a>
            </li>
        ";
            } else {
                // line 55
                echo "            <li class=\"disabled\">
                <span>
                    &larr; Previous
                </span>
            </li>
        ";
            }
            // line 61
            echo "
        ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pageSet"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 63
                echo "            ";
                if (($context["page"] == "...")) {
                    // line 64
                    echo "                <li class=\"interval\">
                    ";
                    // line 65
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "
                </li>
            ";
                } else {
                    // line 68
                    echo "                <li class=\"";
                    echo ((($context["page"] == twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()))) ? ("active") : (""));
                    echo "\">
                    <a href=\"";
                    // line 69
                    echo twig_escape_filter($this->env, (($context["paginationUrl"] ?? null) . $context["page"]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                </li>
            ";
                }
                // line 72
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "
        ";
            // line 74
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array()) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()))) {
                // line 75
                echo "            <li>
                <a href=\"";
                // line 76
                echo twig_escape_filter($this->env, (($context["paginationUrl"] ?? null) . (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) + 1)), "html", null, true);
                echo "\">
                    Next &rarr;
                </a>
            </li>
        ";
            } else {
                // line 81
                echo "            <li class=\"disabled\">
                <span>
                    Next &rarr;
                </span>
            </li>
        ";
            }
            // line 87
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\o/plugins/rainlab/forum/components/partials/pagination-list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 87,  219 => 81,  211 => 76,  208 => 75,  206 => 74,  203 => 73,  197 => 72,  189 => 69,  184 => 68,  178 => 65,  175 => 64,  172 => 63,  168 => 62,  165 => 61,  157 => 55,  149 => 50,  146 => 49,  144 => 48,  140 => 46,  137 => 45,  135 => 44,  132 => 43,  129 => 42,  126 => 41,  123 => 40,  121 => 39,  118 => 38,  116 => 37,  113 => 36,  111 => 35,  108 => 34,  105 => 33,  102 => 32,  99 => 31,  97 => 30,  94 => 29,  91 => 28,  89 => 27,  86 => 26,  84 => 25,  81 => 24,  75 => 23,  72 => 22,  68 => 21,  65 => 20,  62 => 19,  59 => 18,  56 => 17,  54 => 16,  51 => 15,  48 => 14,  46 => 13,  43 => 12,  41 => 11,  38 => 10,  35 => 9,  33 => 8,  31 => 7,  28 => 6,  26 => 4,  25 => 3,  24 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set paginationEnabled =
    records.currentPage > 1 or
    records.lastPage > 1 or
    records.lastPage > records.currentPage
%}

{% if paginationEnabled %}
    {# How many pages to display around the current page #}
    {% set n = 2 %}

    {% set currentPageZeroBased = records.currentPage-1 %}

    {% set pageLinks = [] %}
    {% set pageSet = [] %}

    {% set startOffset = max(currentPageZeroBased - n, 0) %}
    {% if (startOffset + 2*n+1) > (records.lastPage-1) %}
        {% set startOffset = max(records.lastPage - 2*n - 1, 0) %}
    {% endif %}

    {% for page in 1..records.lastPage %}
        {% set pageLinks = pageLinks|merge([page]) %}
    {% endfor %}

    {% set activeBlock = pageLinks|slice(startOffset, 2*n + 1) %}

    {% if startOffset > 0 %}
        {% set pageSet = pageSet|merge([1]) %}

        {% if startOffset > 1 %}
            {% set pageSet = pageSet|merge(['...']) %}
        {% endif %}
    {% endif %}

    {% set pageSet = pageSet|merge(activeBlock) %}

    {% set diffToEnd = (records.lastPage-1) - (startOffset + 2*n+1) + 1 %}

    {% if diffToEnd > 0 %}
        {% if diffToEnd > 1 %}
            {% set pageSet = pageSet|merge(['...']) %}
        {% endif %}

        {% set pageSet = pageSet|merge([records.lastPage]) %}
    {% endif %}

    <ul class=\"pagination\">
        {% if records.currentPage > 1 %}
            <li>
                <a href=\"{{ paginationUrl ~ (records.currentPage - 1) }}\">
                    &larr; Previous
                </a>
            </li>
        {% else %}
            <li class=\"disabled\">
                <span>
                    &larr; Previous
                </span>
            </li>
        {% endif %}

        {% for page in pageSet %}
            {% if page == '...' %}
                <li class=\"interval\">
                    {{ page }}
                </li>
            {% else %}
                <li class=\"{{ page == records.currentPage ? 'active' }}\">
                    <a href=\"{{ paginationUrl ~ page }}\">{{ page }}</a>
                </li>
            {% endif %}
        {% endfor %}

        {% if records.lastPage > records.currentPage %}
            <li>
                <a href=\"{{ paginationUrl ~ (records.currentPage + 1) }}\">
                    Next &rarr;
                </a>
            </li>
        {% else %}
            <li class=\"disabled\">
                <span>
                    Next &rarr;
                </span>
            </li>
        {% endif %}
    </ul>
{% endif %}", "C:\\xampp\\htdocs\\o/plugins/rainlab/forum/components/partials/pagination-list.htm", "");
    }
}
