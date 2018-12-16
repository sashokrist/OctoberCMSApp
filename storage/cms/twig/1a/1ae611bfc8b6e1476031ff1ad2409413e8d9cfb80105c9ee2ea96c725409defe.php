<?php

/* C:\xampp\htdocs\o/plugins/rainlab/forum/components/topic/postform.htm */
class __TwigTemplate_b79155f7fc264f61efd347fee16065fdf75107ec055ae3f5cfc12fdc95e45d98 extends Twig_Template
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
        echo "<div class=\"reply-form\" id=\"postForm\">

    ";
        // line 3
        echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), array("open", array("request" => "onPost")));
        echo "

        <input type=\"hidden\" name=\"topic\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["topic"] ?? null), "id", array()), "html", null, true);
        echo "\" />

        <div class=\"member-area\">
            <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "user", array()), "avatarThumb", array(0 => 50), "method"), "html", null, true);
        echo "\" class=\"member-avatar\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["member"] ?? null), "username", array()), "html", null, true);
        echo "\" />
        </div>

        <div class=\"post-area\">
            <textarea
                id=\"topicContent\"
                name=\"content\"
                rows=\"6\"
                class=\"form-control\">";
        // line 16
        echo call_user_func_array($this->env->getFunction('form_value')->getCallable(), array("value", "content"));
        echo "</textarea>
            <span class=\"help-block\">You can use <a href=\"http://daringfireball.net/projects/markdown/syntax\" target=\"_blank\">Markdown</a> syntax.</span>
            <div class=\"post-buttons\">
                <button type=\"submit\" class=\"btn btn-primary btn-lg\">Post a Reply</button>
            </div>
        </div>

    ";
        // line 23
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
        echo "

</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\o/plugins/rainlab/forum/components/topic/postform.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 23,  51 => 16,  38 => 8,  32 => 5,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"reply-form\" id=\"postForm\">

    {{ form_open({ request: 'onPost' }) }}

        <input type=\"hidden\" name=\"topic\" value=\"{{ topic.id }}\" />

        <div class=\"member-area\">
            <img src=\"{{ member.user.avatarThumb(50) }}\" class=\"member-avatar\" alt=\"{{ member.username }}\" />
        </div>

        <div class=\"post-area\">
            <textarea
                id=\"topicContent\"
                name=\"content\"
                rows=\"6\"
                class=\"form-control\">{{ form_value('content') }}</textarea>
            <span class=\"help-block\">You can use <a href=\"http://daringfireball.net/projects/markdown/syntax\" target=\"_blank\">Markdown</a> syntax.</span>
            <div class=\"post-buttons\">
                <button type=\"submit\" class=\"btn btn-primary btn-lg\">Post a Reply</button>
            </div>
        </div>

    {{ form_close() }}

</div>", "C:\\xampp\\htdocs\\o/plugins/rainlab/forum/components/topic/postform.htm", "");
    }
}
