<?php

/* C:\xampp\htdocs\o/plugins/rainlab/forum/components/channel/topics.htm */
class __TwigTemplate_cc3faae3fc56594fc4ed92ccec84198f832670e4789897c70f13250f5697e74e extends Twig_Template
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
        echo "<table class=\"forum-table\">
    <tr>
        <th colspan=\"2\">Topic</th>
        <th class=\"counter-column\">Replies</th>
        <th class=\"counter-column\">Views</th>
        <th class=\"activity-column\">Last post</th>
    </tr>

    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["topics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["topic"]) {
            // line 10
            echo "        <tr class=\"forum-topic\">
            <td class=\"indicator-column\">
                <div class=\"topic-indicator ";
            // line 12
            echo ((twig_get_attribute($this->env, $this->source, $context["topic"], "hasNew", array())) ? ("has-new") : (""));
            echo "\"></div>
            </td>
            <td>
                <h5>
                    ";
            // line 16
            if (twig_get_attribute($this->env, $this->source, $context["topic"], "is_sticky", array())) {
                echo "<strong>Sticky:</strong>";
            }
            // line 17
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["topic"], "is_locked", array())) {
                echo "<i class=\"icon icon-lock\"></i> <strong>Locked:</strong>";
            }
            // line 18
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "subject", array()), "html", null, true);
            echo "</a>
                    <br/><small>by <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "start_member", array()), "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "start_member", array()), "username", array()), "html", null, true);
            echo "</a></small>
                </h5>
            </td>
            <td class=\"counter-column\">
                <p>";
            // line 23
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["topic"], "count_posts", array()) - 1), "html", null, true);
            echo "</p>
            </td>
            <td class=\"counter-column\">
                <p>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "count_views", array()), "html", null, true);
            echo "</p>
            </td>
            <td class=\"activity-column\">
                <p>
                    <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "last_post_member", array()), "user", array()), "avatarThumb", array(0 => 24), "method"), "html", null, true);
            echo "\" class=\"member-avatar\" />
                    <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "last_post_member", array()), "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "last_post_member", array()), "username", array()), "html", null, true);
            echo "</a>
                    <small>
                        posted
                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "url", array()), "html", null, true);
            echo "?page=last#post-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "last_post_id", array()), "html", null, true);
            echo "\">
                            ";
            // line 35
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['date'] = twig_get_attribute($this->env, $this->source, $context["topic"], "last_post_at", array())            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::timestamp")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 36
            echo "                        </a>
                    </small>
                </p>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
    ";
        // line 43
        if ( !twig_length_filter($this->env, ($context["topics"] ?? null))) {
            // line 44
            echo "        <tr>
            <td colspan=\"100\">There are no topics in this channel.</td>
        </tr>
    ";
        }
        // line 48
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\o/plugins/rainlab/forum/components/channel/topics.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 48,  125 => 44,  123 => 43,  120 => 42,  109 => 36,  104 => 35,  98 => 34,  90 => 31,  86 => 30,  79 => 26,  73 => 23,  64 => 19,  57 => 18,  52 => 17,  48 => 16,  41 => 12,  37 => 10,  33 => 9,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table class=\"forum-table\">
    <tr>
        <th colspan=\"2\">Topic</th>
        <th class=\"counter-column\">Replies</th>
        <th class=\"counter-column\">Views</th>
        <th class=\"activity-column\">Last post</th>
    </tr>

    {% for topic in topics %}
        <tr class=\"forum-topic\">
            <td class=\"indicator-column\">
                <div class=\"topic-indicator {{ topic.hasNew ? 'has-new' }}\"></div>
            </td>
            <td>
                <h5>
                    {% if topic.is_sticky %}<strong>Sticky:</strong>{% endif %}
                    {% if topic.is_locked %}<i class=\"icon icon-lock\"></i> <strong>Locked:</strong>{% endif %}
                    <a href=\"{{ topic.url }}\">{{ topic.subject }}</a>
                    <br/><small>by <a href=\"{{ topic.start_member.url }}\">{{ topic.start_member.username }}</a></small>
                </h5>
            </td>
            <td class=\"counter-column\">
                <p>{{ (topic.count_posts-1) }}</p>
            </td>
            <td class=\"counter-column\">
                <p>{{ topic.count_views }}</p>
            </td>
            <td class=\"activity-column\">
                <p>
                    <img src=\"{{ topic.last_post_member.user.avatarThumb(24) }}\" class=\"member-avatar\" />
                    <a href=\"{{ topic.last_post_member.url }}\">{{ topic.last_post_member.username }}</a>
                    <small>
                        posted
                        <a href=\"{{ topic.url }}?page=last#post-{{ topic.last_post_id }}\">
                            {% partial __SELF__ ~ \"::timestamp\" date=topic.last_post_at %}
                        </a>
                    </small>
                </p>
            </td>
        </tr>
    {% endfor %}

    {% if not topics|length %}
        <tr>
            <td colspan=\"100\">There are no topics in this channel.</td>
        </tr>
    {% endif %}
</table>
", "C:\\xampp\\htdocs\\o/plugins/rainlab/forum/components/channel/topics.htm", "");
    }
}
