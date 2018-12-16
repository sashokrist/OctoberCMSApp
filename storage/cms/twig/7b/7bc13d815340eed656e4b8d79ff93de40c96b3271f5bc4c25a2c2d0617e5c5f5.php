<?php

/* C:\xampp\htdocs\o/plugins/rainlab/forum/components/topic/post.htm */
class __TwigTemplate_8ab9449830d847a94010a3d29a134125524712ca54632e96b04049a2777461a4 extends Twig_Template
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
        echo "<a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "member", array()), "url", array()), "html", null, true);
        echo "\" class=\"avatar\">
    <img src=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "member", array()), "user", array()), "avatarThumb", array(0 => 50), "method"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "member", array()), "username", array()), "html", null, true);
        echo "\" />
</a>
<div class=\"content\">
    <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "member", array()), "url", array()), "html", null, true);
        echo "\" class=\"author\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "member", array()), "username", array()), "html", null, true);
        echo "</a>
    <div class=\"metadata\">
        <div class=\"date\">
            <a href=\"#post-";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", array()), "html", null, true);
        echo "\">
                ";
        // line 9
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['date'] = twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "created_at", array())        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::timestamp")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "            </a>
        </div>
        ";
        // line 12
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "member", array()), "is_banned", array())) {
            // line 13
            echo "            <div class=\"status text-danger\">
                <i class=\"icon-exclamation\"></i> Banned
            </div>
        ";
        } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 16
($context["post"] ?? null), "member", array()), "is_moderator", array())) {
            // line 17
            echo "            <div class=\"status\">
                <i class=\"icon-star\"></i> Moderator
            </div>
        ";
        }
        // line 21
        echo "    </div>

    ";
        // line 23
        if ((($context["mode"] ?? null) == "edit")) {
            // line 24
            echo "
        ";
            // line 25
            echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), array("open"));
            echo "
            <!-- Passable fields -->
            <input type=\"hidden\" name=\"mode\" value=\"save\" />
            <input type=\"hidden\" name=\"post\" value=\"";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", array()), "html", null, true);
            echo "\" />

            ";
            // line 30
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["topic"] ?? null), "first_post", array()), "id", array()) == twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", array()))) {
                // line 31
                echo "                <input type=\"text\" name=\"subject\" class=\"form-control\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["topic"] ?? null), "subject", array()), "html", null, true);
                echo "\" />
            ";
            }
            // line 33
            echo "
            <div class=\"text\">
                <textarea
                    rows=\"5\"
                    name=\"content\"
                    class=\"form-control\"
                    >";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content", array()), "html", null, true);
            echo "</textarea>
            </div>
            <div class=\"actions\">
                <a
                    href=\"javascript:;\"
                    data-request=\"";
            // line 44
            echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
            echo "::onUpdate\"
                    data-request-data=\"post: ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", array()), "html", null, true);
            echo "\"
                    data-request-update=\"'";
            // line 46
            echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
            echo "::post': '#post-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", array()), "html", null, true);
            echo "'\"
                    class=\"save\">
                    Save
                </a>

                <a
                    href=\"javascript:;\"
                    data-request=\"";
            // line 53
            echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
            echo "::onUpdate\"
                    data-request-data=\"post: ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", array()), "html", null, true);
            echo ", mode: 'delete'\"
                    data-request-update=\"'";
            // line 55
            echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
            echo "::post': '#post-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", array()), "html", null, true);
            echo "'\"
                    data-request-confirm=\"Are you sure?\"
                    class=\"delete\">
                    Delete
                </a>

                <a href=\"javascript:;\"
                    data-request=\"";
            // line 62
            echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
            echo "::onUpdate\"
                    data-request-data=\"post: ";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", array()), "html", null, true);
            echo ", mode: 'view'\"
                    data-request-update=\"'";
            // line 64
            echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
            echo "::post': '#post-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", array()), "html", null, true);
            echo "'\"
                    class=\"cancel\">
                    Cancel
                </a>
            </div>
        ";
            // line 69
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
            echo "

    ";
        } elseif ((        // line 71
($context["mode"] ?? null) == "delete")) {
            // line 72
            echo "        <div class=\"text\">
            <p><em>Post has been deleted</em></p>
        </div>
    ";
        } else {
            // line 76
            echo "        <div class=\"text\">
            ";
            // line 77
            echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", array());
            echo "

            ";
            // line 79
            if ((twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "created_at", array()) != twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "updated_at", array()))) {
                // line 80
                echo "                <p><small class=\"text text-muted\">
                    Last updated ";
                // line 81
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['date'] = twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "updated_at", array())                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::timestamp")                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 82
                echo "                </small></p>
            ";
            }
            // line 84
            echo "        </div>
        <div class=\"actions\">
            ";
            // line 86
            if (twig_get_attribute($this->env, $this->source, ($context["topic"] ?? null), "canPost", array())) {
                // line 87
                echo "                <a href=\"javascript:;\"
                    class=\"quote\"
                    data-request-data=\"post: ";
                // line 89
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", array()), "html", null, true);
                echo "\"
                    data-quote-button>
                    Quote
                </a>
            ";
            }
            // line 94
            echo "            ";
            if ((((twig_get_attribute($this->env, $this->source, ($context["topic"] ?? null), "canPost", array()) && twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "canEdit", array())) && (($context["mode"] ?? null) != "edit")) && (($context["mode"] ?? null) != "delete"))) {
                // line 95
                echo "                <a href=\"javascript:;\"
                    class=\"edit\"
                    data-request=\"onUpdate\"
                    data-request-data=\"post: ";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", array()), "html", null, true);
                echo "\"
                    data-request-update=\"'";
                // line 99
                echo twig_escape_filter($this->env, (($context["__SELF__"] ?? null) . "::post"), "html", null, true);
                echo "': '#post-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "id", array()), "html", null, true);
                echo "'\">
                    Edit
                </a>
            ";
            }
            // line 103
            echo "        </div>
    ";
        }
        // line 105
        echo "
</div>
<div class=\"post-divider\"></div>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\o/plugins/rainlab/forum/components/topic/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 105,  248 => 103,  239 => 99,  235 => 98,  230 => 95,  227 => 94,  219 => 89,  215 => 87,  213 => 86,  209 => 84,  205 => 82,  200 => 81,  197 => 80,  195 => 79,  190 => 77,  187 => 76,  181 => 72,  179 => 71,  174 => 69,  164 => 64,  160 => 63,  156 => 62,  144 => 55,  140 => 54,  136 => 53,  124 => 46,  120 => 45,  116 => 44,  108 => 39,  100 => 33,  94 => 31,  92 => 30,  87 => 28,  81 => 25,  78 => 24,  76 => 23,  72 => 21,  66 => 17,  64 => 16,  59 => 13,  57 => 12,  53 => 10,  48 => 9,  44 => 8,  36 => 5,  28 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"{{ post.member.url }}\" class=\"avatar\">
    <img src=\"{{ post.member.user.avatarThumb(50) }}\" alt=\"{{ post.member.username }}\" />
</a>
<div class=\"content\">
    <a href=\"{{ post.member.url }}\" class=\"author\">{{ post.member.username }}</a>
    <div class=\"metadata\">
        <div class=\"date\">
            <a href=\"#post-{{ post.id }}\">
                {% partial __SELF__ ~ \"::timestamp\" date=post.created_at %}
            </a>
        </div>
        {% if post.member.is_banned %}
            <div class=\"status text-danger\">
                <i class=\"icon-exclamation\"></i> Banned
            </div>
        {% elseif post.member.is_moderator %}
            <div class=\"status\">
                <i class=\"icon-star\"></i> Moderator
            </div>
        {% endif %}
    </div>

    {% if mode == 'edit' %}

        {{ form_open() }}
            <!-- Passable fields -->
            <input type=\"hidden\" name=\"mode\" value=\"save\" />
            <input type=\"hidden\" name=\"post\" value=\"{{ post.id }}\" />

            {% if topic.first_post.id == post.id %}
                <input type=\"text\" name=\"subject\" class=\"form-control\" value=\"{{ topic.subject }}\" />
            {% endif %}

            <div class=\"text\">
                <textarea
                    rows=\"5\"
                    name=\"content\"
                    class=\"form-control\"
                    >{{ post.content }}</textarea>
            </div>
            <div class=\"actions\">
                <a
                    href=\"javascript:;\"
                    data-request=\"{{ __SELF__ }}::onUpdate\"
                    data-request-data=\"post: {{ post.id }}\"
                    data-request-update=\"'{{ __SELF__ }}::post': '#post-{{ post.id }}'\"
                    class=\"save\">
                    Save
                </a>

                <a
                    href=\"javascript:;\"
                    data-request=\"{{ __SELF__ }}::onUpdate\"
                    data-request-data=\"post: {{ post.id }}, mode: 'delete'\"
                    data-request-update=\"'{{ __SELF__ }}::post': '#post-{{ post.id }}'\"
                    data-request-confirm=\"Are you sure?\"
                    class=\"delete\">
                    Delete
                </a>

                <a href=\"javascript:;\"
                    data-request=\"{{ __SELF__ }}::onUpdate\"
                    data-request-data=\"post: {{ post.id }}, mode: 'view'\"
                    data-request-update=\"'{{ __SELF__ }}::post': '#post-{{ post.id }}'\"
                    class=\"cancel\">
                    Cancel
                </a>
            </div>
        {{ form_close() }}

    {% elseif mode == 'delete' %}
        <div class=\"text\">
            <p><em>Post has been deleted</em></p>
        </div>
    {% else %}
        <div class=\"text\">
            {{ post.content_html|raw }}

            {% if post.created_at != post.updated_at %}
                <p><small class=\"text text-muted\">
                    Last updated {% partial __SELF__ ~ \"::timestamp\" date=post.updated_at %}
                </small></p>
            {% endif %}
        </div>
        <div class=\"actions\">
            {% if topic.canPost %}
                <a href=\"javascript:;\"
                    class=\"quote\"
                    data-request-data=\"post: {{ post.id }}\"
                    data-quote-button>
                    Quote
                </a>
            {% endif %}
            {% if topic.canPost and post.canEdit and mode != 'edit' and mode != 'delete' %}
                <a href=\"javascript:;\"
                    class=\"edit\"
                    data-request=\"onUpdate\"
                    data-request-data=\"post: {{ post.id }}\"
                    data-request-update=\"'{{ __SELF__ ~ '::post' }}': '#post-{{ post.id }}'\">
                    Edit
                </a>
            {% endif %}
        </div>
    {% endif %}

</div>
<div class=\"post-divider\"></div>
", "C:\\xampp\\htdocs\\o/plugins/rainlab/forum/components/topic/post.htm", "");
    }
}
