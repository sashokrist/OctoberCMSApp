<?php

/* C:\xampp\htdocs\o/plugins/rainlab/forum/components/topic/posts.htm */
class __TwigTemplate_113850f31e3b651bcc241e8af0eba8de36f9fef5699da5e2e93532a787a254c9 extends Twig_Template
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
        echo "<div class=\"forum-posts\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 3
            echo "        <div class=\"forum-post\" data-post-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", array()), "html", null, true);
            echo "\" id=\"post-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", array()), "html", null, true);
            echo "\">
            ";
            // line 4
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['post'] = $context["post"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::post")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 5
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\o/plugins/rainlab/forum/components/topic/posts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 7,  42 => 5,  37 => 4,  30 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"forum-posts\">
    {% for post in posts %}
        <div class=\"forum-post\" data-post-id=\"{{ post.id }}\" id=\"post-{{ post.id }}\">
            {% partial __SELF__ ~ \"::post\" post=post %}
        </div>
    {% endfor %}
</div>", "C:\\xampp\\htdocs\\o/plugins/rainlab/forum/components/topic/posts.htm", "");
    }
}
