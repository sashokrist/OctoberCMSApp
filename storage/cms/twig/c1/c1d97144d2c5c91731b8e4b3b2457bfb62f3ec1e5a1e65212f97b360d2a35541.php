<?php

/* C:\xampp\htdocs\o/plugins/rainlab/forum/components/channel/title.htm */
class __TwigTemplate_e067d22d47d66027a862364c5280f70a56f74bd036d6bba7a65d0bc7073a79d5 extends Twig_Template
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
        echo "<div class=\"row\">

    <div class=\"col-md-9\">
        ";
        // line 4
        echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), array("open", array("method" => "get")));
        echo "
            <div class=\"search-box\">
                <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Search topics\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, input("search"));
        echo "\">
            </div>
        ";
        // line 8
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
        echo "
    </div>
    <div class=\"col-md-3 text-right\">
        ";
        // line 11
        if (($context["isGuest"] ?? null)) {
            // line 12
            echo "            <p>Log in to Post a new topic</p>
        ";
        } else {
            // line 14
            echo "            <a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["topicPage"] ?? null));
            echo "?channel=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["channel"] ?? null), "id", array()), "html", null, true);
            echo "\" class=\"btn btn-primary btn-block\">
                Post a new topic
            </a>
        ";
        }
        // line 18
        echo "    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\o/plugins/rainlab/forum/components/channel/title.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 18,  50 => 14,  46 => 12,  44 => 11,  38 => 8,  33 => 6,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">

    <div class=\"col-md-9\">
        {{ form_open({ method: 'get' })}}
            <div class=\"search-box\">
                <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Search topics\" value=\"{{ input('search')|e }}\">
            </div>
        {{ form_close() }}
    </div>
    <div class=\"col-md-3 text-right\">
        {% if isGuest %}
            <p>Log in to Post a new topic</p>
        {% else %}
            <a href=\"{{ topicPage|page }}?channel={{ channel.id }}\" class=\"btn btn-primary btn-block\">
                Post a new topic
            </a>
        {% endif %}
    </div>

</div>
", "C:\\xampp\\htdocs\\o/plugins/rainlab/forum/components/channel/title.htm", "");
    }
}
