<?php

/* C:\xampp\htdocs\o/plugins/rainlab/forum/components/topic/pagination.htm */
class __TwigTemplate_e0d7c4aab665962e727495bfb46fb4920b24867997c4d65d9924fe5e33b9b243 extends Twig_Template
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
        $context["paginationEnabled"] = (((twig_get_attribute($this->env, $this->source,         // line 2
($context["posts"] ?? null), "currentPage", array()) > 1) || (twig_get_attribute($this->env, $this->source,         // line 3
($context["posts"] ?? null), "lastPage", array()) > 1)) || (twig_get_attribute($this->env, $this->source,         // line 4
($context["posts"] ?? null), "lastPage", array()) > twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", array())));
        // line 6
        echo "
<div class=\"row forum-pagination ";
        // line 7
        echo ((($context["paginationEnabled"] ?? null)) ? ("enabled") : ("disabled"));
        echo "\">
    <div class=\"col-md-8\">
        ";
        // line 9
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['records'] = ($context["posts"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::pagination-list")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "    </div>
    <div class=\"col-md-4 text-right posts-total-summary\">
        <p>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "firstItem", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastItem", array()), "html", null, true);
        echo " of ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "total", array()), "html", null, true);
        echo "</p>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\o/plugins/rainlab/forum/components/topic/pagination.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 12,  41 => 10,  36 => 9,  31 => 7,  28 => 6,  26 => 4,  25 => 3,  24 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set paginationEnabled =
\tposts.currentPage > 1 or
\tposts.lastPage > 1 or
\tposts.lastPage > posts.currentPage
%}

<div class=\"row forum-pagination {{ paginationEnabled ? \"enabled\" : \"disabled\" }}\">
    <div class=\"col-md-8\">
        {% partial __SELF__ ~ \"::pagination-list\" records=posts %}
    </div>
    <div class=\"col-md-4 text-right posts-total-summary\">
        <p>{{ posts.firstItem }}-{{ posts.lastItem }} of {{ posts.total }}</p>
    </div>
</div>
", "C:\\xampp\\htdocs\\o/plugins/rainlab/forum/components/topic/pagination.htm", "");
    }
}
