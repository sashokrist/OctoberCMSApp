<?php

/* C:\xampp\htdocs\o/themes/rainlab-vanilla/partials/blog/categories.htm */
class __TwigTemplate_2fe44ac56a9b79fd6a41a16f94d59d1b0f3437e3b195a7275679929db074b75e extends Twig_Template
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
        $context["categories"] = twig_get_attribute($this->env, $this->source, ($context["blogCategories"] ?? null), "categories", array());
        // line 2
        $context["currentCategorySlug"] = twig_get_attribute($this->env, $this->source, ($context["blogCategories"] ?? null), "currentCategorySlug", array());
        // line 3
        echo "
<div class=\"list-group\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 6
            echo "        ";
            $context["postCount"] = twig_get_attribute($this->env, $this->source, $context["category"], "post_count", array());
            // line 7
            echo "        <a
            href=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "url", array()), "html", null, true);
            echo "\"
            class=\"list-group-item ";
            // line 9
            echo (((twig_get_attribute($this->env, $this->source, $context["category"], "slug", array()) == ($context["currentCategorySlug"] ?? null))) ? ("active") : (""));
            echo "\"
            >";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", array()), "html", null, true);
            echo "
            ";
            // line 11
            if (($context["postCount"] ?? null)) {
                // line 12
                echo "                <span class=\"badge\">";
                echo twig_escape_filter($this->env, ($context["postCount"] ?? null), "html", null, true);
                echo "</span>
            ";
            }
            // line 14
            echo "        </a> 
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\o/themes/rainlab-vanilla/partials/blog/categories.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 16,  61 => 14,  55 => 12,  53 => 11,  49 => 10,  45 => 9,  41 => 8,  38 => 7,  35 => 6,  31 => 5,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set categories = blogCategories.categories %}
{% set currentCategorySlug = blogCategories.currentCategorySlug %}

<div class=\"list-group\">
    {% for category in categories %}
        {% set postCount = category.post_count %}
        <a
            href=\"{{ category.url }}\"
            class=\"list-group-item {{ category.slug == currentCategorySlug ? 'active' }}\"
            >{{ category.name }}
            {% if postCount %}
                <span class=\"badge\">{{ postCount }}</span>
            {% endif %}
        </a> 
    {% endfor %}
</div>", "C:\\xampp\\htdocs\\o/themes/rainlab-vanilla/partials/blog/categories.htm", "");
    }
}
