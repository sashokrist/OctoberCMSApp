<?php

/* C:\xampp\htdocs\o/plugins/rainlab/forum/components/partials/timestamp.htm */
class __TwigTemplate_7e3a2e61dea513dd2bd4f0ab5036dbc179c6e4a5e71706d3c6d679dec83e8607 extends Twig_Template
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
        echo "<time title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["date"] ?? null), "toDayDateTimeString", array()), "html", null, true);
        echo "\"
    datetime=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["date"] ?? null), "c"), "html", null, true);
        echo "\">
    ";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["date"] ?? null), "diffForHumans", array()), "html", null, true);
        echo "
</time>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\o/plugins/rainlab/forum/components/partials/timestamp.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 3,  28 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<time title=\"{{ date.toDayDateTimeString }}\"
    datetime=\"{{ date|date('c') }}\">
    {{ date.diffForHumans }}
</time>
", "C:\\xampp\\htdocs\\o/plugins/rainlab/forum/components/partials/timestamp.htm", "");
    }
}
