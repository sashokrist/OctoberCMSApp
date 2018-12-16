<?php

/* C:\xampp\htdocs\o/plugins/rainlab/user/components/account/deactivate_link.htm */
class __TwigTemplate_0630a7cd7467bf3c12996ab45a0c3b7f2e7be92fd690c1ce4535637fe0fd8b3e extends Twig_Template
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
        echo "<a
    href=\"javascript:;\"
    onclick=\"\$('#accountDeactivateForm').toggle()\">
    Deactivate account
</a>

<div id=\"accountDeactivateForm\" style=\"display: none\">
    ";
        // line 8
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), array("ajax", "onDeactivate"));
        echo "
        <hr />
        <h3>Deactivate your account?</h3>
        <p>
            Your account will be disabled and your details removed from the site.
            You can reactivate your account any time by signing back in.
        </p>
        <div class=\"form-group\">
            <label for=\"accountDeletePassword\">To continue, please enter your password:</label>
            <input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountDeletePassword\" />
        </div>
        <button type=\"submit\" class=\"btn btn-danger\">
            Confirm Deactivate Account
        </button>
        <a
            href=\"javascript:;\"
            onclick=\"\$('#accountDeactivateForm').toggle()\">
            I changed my mind
        </a>
    ";
        // line 27
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\o/plugins/rainlab/user/components/account/deactivate_link.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 27,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a
    href=\"javascript:;\"
    onclick=\"\$('#accountDeactivateForm').toggle()\">
    Deactivate account
</a>

<div id=\"accountDeactivateForm\" style=\"display: none\">
    {{ form_ajax('onDeactivate') }}
        <hr />
        <h3>Deactivate your account?</h3>
        <p>
            Your account will be disabled and your details removed from the site.
            You can reactivate your account any time by signing back in.
        </p>
        <div class=\"form-group\">
            <label for=\"accountDeletePassword\">To continue, please enter your password:</label>
            <input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountDeletePassword\" />
        </div>
        <button type=\"submit\" class=\"btn btn-danger\">
            Confirm Deactivate Account
        </button>
        <a
            href=\"javascript:;\"
            onclick=\"\$('#accountDeactivateForm').toggle()\">
            I changed my mind
        </a>
    {{ form_close() }}
</div>
", "C:\\xampp\\htdocs\\o/plugins/rainlab/user/components/account/deactivate_link.htm", "");
    }
}
