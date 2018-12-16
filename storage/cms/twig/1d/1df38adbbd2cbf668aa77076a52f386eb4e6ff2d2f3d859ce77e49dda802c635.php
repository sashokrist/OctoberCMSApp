<?php

/* C:\xampp\htdocs\o/themes/rainlab-vanilla/pages/forum/topic.htm */
class __TwigTemplate_029ce2e6fa5bd2a38276579e2c0ed2615bf1157f5d9c6cff9b4ba4f9483cf706 extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("forumTopic"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\o/themes/rainlab-vanilla/pages/forum/topic.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'forumTopic' %}", "C:\\xampp\\htdocs\\o/themes/rainlab-vanilla/pages/forum/topic.htm", "");
    }
}
