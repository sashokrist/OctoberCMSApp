<?php

/* C:\xampp\htdocs\o/plugins/rainlab/forum/components/channel/default.htm */
class __TwigTemplate_e5fc6801706b5d330d4e38e7d56676bd7ebf1fee11c308b27639c75913b18c1c extends Twig_Template
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
    ";
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::title")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "
    ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::topics")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "
    ";
        // line 6
        if (($context["topics"] ?? null)) {
            // line 7
            echo "        ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::pagination")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 8
            echo "    ";
        }
        // line 9
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\o/plugins/rainlab/forum/components/channel/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 9,  47 => 8,  42 => 7,  40 => 6,  37 => 5,  33 => 4,  30 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"rainlab-forum\">
    {% partial __SELF__ ~ \"::title\" %}

    {% partial __SELF__ ~ \"::topics\" %}

    {% if topics %}
        {% partial __SELF__ ~ \"::pagination\" %}
    {% endif %}
</div>", "C:\\xampp\\htdocs\\o/plugins/rainlab/forum/components/channel/default.htm", "");
    }
}
