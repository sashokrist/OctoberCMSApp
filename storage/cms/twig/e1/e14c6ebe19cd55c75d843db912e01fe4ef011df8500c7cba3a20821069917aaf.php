<?php

/* C:\xampp\htdocs\o/themes/rainlab-vanilla/pages/forum/channel.htm */
class __TwigTemplate_3aba5abcdcae613e16fb5fb09ef13321d39b65b96642d5dc32a2566f105a3fa5 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("forumChannel"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\o/themes/rainlab-vanilla/pages/forum/channel.htm";
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
        return new Twig_Source("{% component 'forumChannel' %}", "C:\\xampp\\htdocs\\o/themes/rainlab-vanilla/pages/forum/channel.htm", "");
    }
}
