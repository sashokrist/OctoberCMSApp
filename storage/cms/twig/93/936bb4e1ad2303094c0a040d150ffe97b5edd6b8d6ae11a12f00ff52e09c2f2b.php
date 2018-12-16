<?php

/* C:\xampp\htdocs\o/plugins/rainlab/forum/components/topic/createform.htm */
class __TwigTemplate_a94645053e8b8b7cf7ee37949ef6b4f6711f2fd7aab01d1c95df9216df62174d extends Twig_Template
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
        echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), array("open", array("request" => "onCreate")));
        echo "

    <div class=\"form-group\">
        <label for=\"topicSubject\" class=\"control-label\">Subject</label>
        <input
            id=\"topicSubject\"
            name=\"subject\"
            type=\"text\"
            class=\"form-control\"
            value=\"";
        // line 10
        echo post("subject");
        echo "\" />
    </div>

    <div class=\"form-group\">
        <label for=\"topicContent\" class=\"control-label\">Content</label>
        <textarea
            id=\"topicContent\"
            name=\"content\"
            rows=\"8\"
            type=\"text\"
            class=\"form-control\">";
        // line 20
        echo post("content");
        echo "</textarea>
        <span class=\"help-block\">You can use <a href=\"http://daringfireball.net/projects/markdown/syntax\" target=\"_blank\">Markdown</a> syntax.</span>
    </div>

    <div class=\"form-group post-buttons\">
        <button type=\"submit\" class=\"btn btn-primary btn-lg\">Post this topic</button>
        ";
        // line 26
        if (($context["returnUrl"] ?? null)) {
            // line 27
            echo "            <a class=\"btn btn-link btn-lg\" href=\"";
            echo twig_escape_filter($this->env, ($context["returnUrl"] ?? null), "html", null, true);
            echo "\">Cancel</a>
        ";
        }
        // line 29
        echo "    </div>

    <input type=\"hidden\" name=\"channel\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["channel"] ?? null), "id", array()), "html", null, true);
        echo "\" />

";
        // line 33
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\o/plugins/rainlab/forum/components/topic/createform.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 33,  69 => 31,  65 => 29,  59 => 27,  57 => 26,  48 => 20,  35 => 10,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_open({ request: 'onCreate' }) }}

    <div class=\"form-group\">
        <label for=\"topicSubject\" class=\"control-label\">Subject</label>
        <input
            id=\"topicSubject\"
            name=\"subject\"
            type=\"text\"
            class=\"form-control\"
            value=\"{{ post('subject') }}\" />
    </div>

    <div class=\"form-group\">
        <label for=\"topicContent\" class=\"control-label\">Content</label>
        <textarea
            id=\"topicContent\"
            name=\"content\"
            rows=\"8\"
            type=\"text\"
            class=\"form-control\">{{ post('content') }}</textarea>
        <span class=\"help-block\">You can use <a href=\"http://daringfireball.net/projects/markdown/syntax\" target=\"_blank\">Markdown</a> syntax.</span>
    </div>

    <div class=\"form-group post-buttons\">
        <button type=\"submit\" class=\"btn btn-primary btn-lg\">Post this topic</button>
        {% if returnUrl %}
            <a class=\"btn btn-link btn-lg\" href=\"{{ returnUrl }}\">Cancel</a>
        {% endif %}
    </div>

    <input type=\"hidden\" name=\"channel\" value=\"{{ channel.id }}\" />

{{ form_close() }}", "C:\\xampp\\htdocs\\o/plugins/rainlab/forum/components/topic/createform.htm", "");
    }
}
