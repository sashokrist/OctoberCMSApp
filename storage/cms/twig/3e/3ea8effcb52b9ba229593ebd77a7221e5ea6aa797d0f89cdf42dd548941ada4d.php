<?php

/* C:\xampp\htdocs\o/themes/rainlab-vanilla/pages/account.htm */
class __TwigTemplate_0a586d2c24d67bacc66bfc243edafdae4718bf83e56dd6eed42cb6ed40c2d6ed extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("account"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "
<hr />

<p><a href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("forgot-password");
        echo "\">Forgotten your password?</a></p>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\o/themes/rainlab-vanilla/pages/account.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  27 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'account' %}

<hr />

<p><a href=\"{{ 'forgot-password'|page }}\">Forgotten your password?</a></p>", "C:\\xampp\\htdocs\\o/themes/rainlab-vanilla/pages/account.htm", "");
    }
}
