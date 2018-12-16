<?php

/* C:\xampp\htdocs\o/themes/rainlab-vanilla/partials/blog/posts.htm */
class __TwigTemplate_80cabe7885ab86721bbb6df8364e7d105baf3969a5be793008426d33cc36e1cb extends Twig_Template
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
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", array());
        // line 2
        echo "
<div class=\"post-list\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 5
            echo "        <div class=\"media\">

            <div class=\"media-left\">
                <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", array()), "html", null, true);
            echo "\">
                    ";
            // line 9
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", array()), "count", array()) > 0)) {
                // line 10
                echo "                        <img class=\"media-object\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", array()), "first", array()), "getThumb", array(0 => 100, 1 => "auto"), "method"), "html", null, true);
                echo "\" />
                    ";
            } else {
                // line 12
                echo "                        <img class=\"media-object\" src=\"http://placehold.it/100x100\" />
                    ";
            }
            // line 14
            echo "                </a>
            </div>

            <div class=\"media-body\">
                <h4 class=\"media-heading\">
                    <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", array()), "html", null, true);
            echo "</a>
                </h4>
                <p class=\"info\">
                    Posted
                    ";
            // line 23
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "categories", array()), "count", array())) {
                echo " in ";
            }
            // line 24
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "categories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 25
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", array()), "html", null, true);
                echo "</a>";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 26
                echo "                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                    on ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", array()), "M d, Y"), "html", null, true);
            echo "
                </p>

                ";
            // line 30
            if (twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", array())) {
                // line 31
                echo "                    <p class=\"excerpt\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", array()), "html", null, true);
                echo "</p>
                ";
            } else {
                // line 33
                echo "                    <div class=\"content\">";
                echo twig_get_attribute($this->env, $this->source, $context["post"], "content_html", array());
                echo "</div>
                ";
            }
            // line 35
            echo "            </div>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "        <div class=\"no-data\">
            <p>";
            // line 39
            echo twig_escape_filter($this->env, ($context["noPostsMessage"] ?? null), "html", null, true);
            echo "</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "</div>

";
        // line 44
        if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", array()) > 1)) {
            // line 45
            echo "    <ul class=\"pagination\">
        ";
            // line 46
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", array()) > 1)) {
                // line 47
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 49
            echo "
        ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 51
                echo "            <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 52
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => $context["page"]));
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "
        ";
            // line 56
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", array()) > twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", array()))) {
                // line 57
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 59
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\o/themes/rainlab-vanilla/partials/blog/posts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 59,  201 => 57,  199 => 56,  196 => 55,  185 => 52,  180 => 51,  176 => 50,  173 => 49,  167 => 47,  165 => 46,  162 => 45,  160 => 44,  156 => 42,  147 => 39,  144 => 38,  137 => 35,  131 => 33,  125 => 31,  123 => 30,  116 => 27,  102 => 26,  93 => 25,  75 => 24,  71 => 23,  62 => 19,  55 => 14,  51 => 12,  45 => 10,  43 => 9,  39 => 8,  34 => 5,  29 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set posts = blogPosts.posts %}

<div class=\"post-list\">
    {% for post in posts %}
        <div class=\"media\">

            <div class=\"media-left\">
                <a href=\"{{ post.url }}\">
                    {% if post.featured_images.count > 0 %}
                        <img class=\"media-object\" src=\"{{ post.featured_images.first.getThumb(100, 'auto') }}\" />
                    {% else %}
                        <img class=\"media-object\" src=\"http://placehold.it/100x100\" />
                    {% endif %}
                </a>
            </div>

            <div class=\"media-body\">
                <h4 class=\"media-heading\">
                    <a href=\"{{ post.url }}\">{{ post.title }}</a>
                </h4>
                <p class=\"info\">
                    Posted
                    {% if post.categories.count %} in {% endif %}
                    {% for category in post.categories %}
                        <a href=\"{{ category.url }}\">{{ category.name }}</a>{% if not loop.last %}, {% endif %}
                    {% endfor %}
                    on {{ post.published_at|date('M d, Y') }}
                </p>

                {% if post.excerpt %}
                    <p class=\"excerpt\">{{ post.excerpt }}</p>
                {% else %}
                    <div class=\"content\">{{ post.content_html|raw }}</div>
                {% endif %}
            </div>
        </div>
    {% else %}
        <div class=\"no-data\">
            <p>{{ noPostsMessage }}</p>
        </div>
    {% endfor %}
</div>

{% if posts.lastPage > 1 %}
    <ul class=\"pagination\">
        {% if posts.currentPage > 1 %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage-1) }) }}\">&larr; Prev</a></li>
        {% endif %}

        {% for page in 1..posts.lastPage %}
            <li class=\"{{ posts.currentPage == page ? 'active' : null }}\">
                <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
            </li>
        {% endfor %}

        {% if posts.lastPage > posts.currentPage %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage+1) }) }}\">Next &rarr;</a></li>
        {% endif %}
    </ul>
{% endif %}", "C:\\xampp\\htdocs\\o/themes/rainlab-vanilla/partials/blog/posts.htm", "");
    }
}
