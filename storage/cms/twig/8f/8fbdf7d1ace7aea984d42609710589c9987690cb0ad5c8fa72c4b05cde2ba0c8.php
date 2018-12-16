<?php

/* C:\xampp\htdocs\o/themes/rainlab-vanilla/pages/forum.htm */
class __TwigTemplate_b3bc77ccc2fd0d4da3ab9661ccaf6e6e402441df5e92d021bcc23e1ce7005542 extends Twig_Template
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
        echo "<div class=\"rainlab-forum\">

    <table class=\"forum-table\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["channels"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
            // line 5
            echo "
            <tr class=\"root-channel\">
                <th colspan=\"2\">
                    ";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "title", array()), "html", null, true);
            echo "
                </th>
                <th class=\"counter-column\">Topics</th>
                <th class=\"counter-column\">Posts</th>
                <th class=\"activity-column\">Recent topic</th>
            </tr>

            ";
            // line 15
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["channel"], "relations", array()), "children", array())) {
                // line 16
                echo "
                ";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["channel"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
                    // line 18
                    echo "
                    <tr class=\"forum-channel\">
                        <td class=\"indicator-column\">
                            <div class=\"topic-indicator ";
                    // line 21
                    echo ((twig_get_attribute($this->env, $this->source, $context["channel"], "hasNew", array())) ? ("has-new") : (""));
                    echo "\"></div>
                        </td>
                        <td>
                            <h5>
                                <a href=\"";
                    // line 25
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "url", array()), "html", null, true);
                    echo "\">
                                    ";
                    // line 26
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "title", array()), "html", null, true);
                    echo "
                                </a>
                            </h5>
                            <p>";
                    // line 29
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "description", array()), "html", null, true);
                    echo "</p>

                            ";
                    // line 31
                    if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "children", array()))) {
                        // line 32
                        echo "                                <div class=\"forum-subchannel\">
                                    <ul>
                                        <li><span>Subforum</span></li>
                                        ";
                        // line 35
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["channel"], "children", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
                            // line 36
                            echo "                                            <li>
                                                <a href=\"";
                            // line 37
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "url", array()), "html", null, true);
                            echo "\" title=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "description", array()), "html", null, true);
                            echo "\">
                                                    ";
                            // line 38
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "title", array()), "html", null, true);
                            echo "
                                                </a>
                                            </li>
                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 42
                        echo "                                    </ul>
                                </div>
                            ";
                    }
                    // line 45
                    echo "                        </td>
                        <td class=\"counter-column\">
                            <p>";
                    // line 47
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "count_topics", array()), "html", null, true);
                    echo "</p>
                        </td>
                        <td class=\"counter-column\">
                            <p>";
                    // line 50
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["channel"], "count_posts", array()), "html", null, true);
                    echo "</p>
                        </td>
                        <td class=\"activity-column\">
                            ";
                    // line 53
                    if (twig_get_attribute($this->env, $this->source, $context["channel"], "first_topic", array())) {
                        // line 54
                        echo "                                <p>
                                    <a href=\"";
                        // line 55
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["channel"], "first_topic", array()), "url", array()), "html", null, true);
                        echo "?page=last#post-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["channel"], "first_topic", array()), "last_post_id", array()), "html", null, true);
                        echo "\">
                                        ";
                        // line 56
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["channel"], "first_topic", array()), "subject", array()), "html", null, true);
                        echo "
                                    </a>
                                    <small>
                                        ";
                        // line 59
                        $context['__cms_partial_params'] = [];
                        $context['__cms_partial_params']['date'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["channel"], "first_topic", array()), "last_post_at", array())                        ;
                        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["forumChannels"] ?? null) . "::timestamp")                        , $context['__cms_partial_params']                        , true                        );
                        unset($context['__cms_partial_params']);
                        // line 60
                        echo "                                    </small>
                                </p>
                            ";
                    }
                    // line 63
                    echo "                        </td>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "
            ";
            } else {
                // line 68
                echo "                <tr>
                    <td colspan=\"100\"><p>There are no channels to show.</p></td>
                </tr>
            ";
            }
            // line 72
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "    </table>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\o/themes/rainlab-vanilla/pages/forum.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 74,  179 => 72,  173 => 68,  169 => 66,  161 => 63,  156 => 60,  151 => 59,  145 => 56,  139 => 55,  136 => 54,  134 => 53,  128 => 50,  122 => 47,  118 => 45,  113 => 42,  103 => 38,  97 => 37,  94 => 36,  90 => 35,  85 => 32,  83 => 31,  78 => 29,  72 => 26,  68 => 25,  61 => 21,  56 => 18,  52 => 17,  49 => 16,  47 => 15,  37 => 8,  32 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"rainlab-forum\">

    <table class=\"forum-table\">
        {% for channel in channels %}

            <tr class=\"root-channel\">
                <th colspan=\"2\">
                    {{ channel.title }}
                </th>
                <th class=\"counter-column\">Topics</th>
                <th class=\"counter-column\">Posts</th>
                <th class=\"activity-column\">Recent topic</th>
            </tr>

            {% if channel.relations.children %}

                {% for channel in channel.children %}

                    <tr class=\"forum-channel\">
                        <td class=\"indicator-column\">
                            <div class=\"topic-indicator {{ channel.hasNew ? 'has-new' }}\"></div>
                        </td>
                        <td>
                            <h5>
                                <a href=\"{{ channel.url }}\">
                                    {{ channel.title }}
                                </a>
                            </h5>
                            <p>{{ channel.description }}</p>

                            {% if channel.children|length %}
                                <div class=\"forum-subchannel\">
                                    <ul>
                                        <li><span>Subforum</span></li>
                                        {% for channel in channel.children %}
                                            <li>
                                                <a href=\"{{ channel.url }}\" title=\"{{ channel.description }}\">
                                                    {{ channel.title }}
                                                </a>
                                            </li>
                                        {% endfor %}
                                    </ul>
                                </div>
                            {% endif %}
                        </td>
                        <td class=\"counter-column\">
                            <p>{{ channel.count_topics }}</p>
                        </td>
                        <td class=\"counter-column\">
                            <p>{{ channel.count_posts }}</p>
                        </td>
                        <td class=\"activity-column\">
                            {% if channel.first_topic %}
                                <p>
                                    <a href=\"{{ channel.first_topic.url }}?page=last#post-{{ channel.first_topic.last_post_id }}\">
                                        {{ channel.first_topic.subject }}
                                    </a>
                                    <small>
                                        {% partial forumChannels ~ \"::timestamp\" date=channel.first_topic.last_post_at %}
                                    </small>
                                </p>
                            {% endif %}
                        </td>
                    </tr>
                {% endfor %}

            {% else %}
                <tr>
                    <td colspan=\"100\"><p>There are no channels to show.</p></td>
                </tr>
            {% endif %}

        {% endfor %}
    </table>
</div>", "C:\\xampp\\htdocs\\o/themes/rainlab-vanilla/pages/forum.htm", "");
    }
}
