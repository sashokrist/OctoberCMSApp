<?php

/* C:\xampp\htdocs\o/plugins/rainlab/forum/components/topic/controlpanel.htm */
class __TwigTemplate_492c25aefa1f3c90f2a060bd7eea45cb7beeedb5933793dc238b9242646b8207 extends Twig_Template
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
        echo "<div class=\"panel\">
    <div class=\"list-group\">

        ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "is_moderator", array())) {
            // line 5
            echo "            <div class=\"list-group-item\">
                ";
            // line 6
            echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), array("open", array("request" => "onMove", "data-request-confirm" => "Are you sure?")));
            echo "
                    <label>Move to:</label>
                    <select name=\"channel\" class=\"form-control input-sm\">
                        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "channelList", array()));
            foreach ($context['_seq'] as $context["id"] => $context["title"]) {
                // line 10
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                echo "\">";
                echo $context["title"];
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "                    </select>
                    <button type=\"submit\" class=\"btn btn-block btn-primary btn-sm\">Move</button>
                ";
            // line 14
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
            echo "
            </div>

            <a href=\"javascript:;\"
                class=\"list-group-item\"
                data-request=\"onLock\"
                data-request-update=\"'@controlpanel': '#topicControlPanel'\">
                ";
            // line 21
            if (twig_get_attribute($this->env, $this->source, ($context["topic"] ?? null), "is_locked", array())) {
                // line 22
                echo "                    Unlock topic
                ";
            } else {
                // line 24
                echo "                    Lock topic
                ";
            }
            // line 26
            echo "            </a>

            <a href=\"javascript:;\"
                class=\"list-group-item\"
                data-request=\"onSticky\"
                data-request-update=\"'@controlpanel': '#topicControlPanel'\">
                ";
            // line 32
            if (twig_get_attribute($this->env, $this->source, ($context["topic"] ?? null), "is_sticky", array())) {
                // line 33
                echo "                    Unsticky topic
                ";
            } else {
                // line 35
                echo "                    Sticky topic
                ";
            }
            // line 37
            echo "            </a>
        ";
        }
        // line 39
        echo "
        ";
        // line 40
        if (($context["member"] ?? null)) {
            // line 41
            echo "            <a href=\"javascript:;\"
                class=\"list-group-item\"
                data-request=\"onFollow\"
                data-request-update=\"'@controlpanel': '#topicControlPanel'\">
                ";
            // line 45
            if (twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "isFollowing", array(0 => ($context["topic"] ?? null)), "method")) {
                // line 46
                echo "                    Unfollow this topic
                ";
            } else {
                // line 48
                echo "                    Follow this topic
                ";
            }
            // line 50
            echo "            </a>
        ";
        }
        // line 52
        echo "
        ";
        // line 53
        if (twig_get_attribute($this->env, $this->source, ($context["topic"] ?? null), "is_locked", array())) {
            // line 54
            echo "            <div class=\"list-group-item\">
                <span class=\"text text-danger\"><i class=\"icon icon-lock\"></i> This topic is locked</span>
            </div>
        ";
        } else {
            // line 58
            echo "            <a href=\"#postForm\" class=\"list-group-item\">
                Post a reply
            </a>
        ";
        }
        // line 62
        echo "
        <div class=\"list-group-item\">
            <i class=\"fa fa-eye icon-eye-open\"></i> ";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["topic"] ?? null), "count_views", array()), "html", null, true);
        echo " views
        </div>

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\o/plugins/rainlab/forum/components/topic/controlpanel.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 64,  142 => 62,  136 => 58,  130 => 54,  128 => 53,  125 => 52,  121 => 50,  117 => 48,  113 => 46,  111 => 45,  105 => 41,  103 => 40,  100 => 39,  96 => 37,  92 => 35,  88 => 33,  86 => 32,  78 => 26,  74 => 24,  70 => 22,  68 => 21,  58 => 14,  54 => 12,  43 => 10,  39 => 9,  33 => 6,  30 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"panel\">
    <div class=\"list-group\">

        {% if member.is_moderator %}
            <div class=\"list-group-item\">
                {{ form_open({ request: 'onMove', 'data-request-confirm': \"Are you sure?\" }) }}
                    <label>Move to:</label>
                    <select name=\"channel\" class=\"form-control input-sm\">
                        {% for id, title in __SELF__.channelList %}
                            <option value=\"{{ id }}\">{{ title|raw }}</option>
                        {% endfor %}
                    </select>
                    <button type=\"submit\" class=\"btn btn-block btn-primary btn-sm\">Move</button>
                {{ form_close() }}
            </div>

            <a href=\"javascript:;\"
                class=\"list-group-item\"
                data-request=\"onLock\"
                data-request-update=\"'@controlpanel': '#topicControlPanel'\">
                {% if topic.is_locked %}
                    Unlock topic
                {% else %}
                    Lock topic
                {% endif %}
            </a>

            <a href=\"javascript:;\"
                class=\"list-group-item\"
                data-request=\"onSticky\"
                data-request-update=\"'@controlpanel': '#topicControlPanel'\">
                {% if topic.is_sticky %}
                    Unsticky topic
                {% else %}
                    Sticky topic
                {% endif %}
            </a>
        {% endif %}

        {% if member %}
            <a href=\"javascript:;\"
                class=\"list-group-item\"
                data-request=\"onFollow\"
                data-request-update=\"'@controlpanel': '#topicControlPanel'\">
                {% if member.isFollowing(topic) %}
                    Unfollow this topic
                {% else %}
                    Follow this topic
                {% endif %}
            </a>
        {% endif %}

        {% if topic.is_locked %}
            <div class=\"list-group-item\">
                <span class=\"text text-danger\"><i class=\"icon icon-lock\"></i> This topic is locked</span>
            </div>
        {% else %}
            <a href=\"#postForm\" class=\"list-group-item\">
                Post a reply
            </a>
        {% endif %}

        <div class=\"list-group-item\">
            <i class=\"fa fa-eye icon-eye-open\"></i> {{ topic.count_views }} views
        </div>

    </div>
</div>
", "C:\\xampp\\htdocs\\o/plugins/rainlab/forum/components/topic/controlpanel.htm", "");
    }
}
