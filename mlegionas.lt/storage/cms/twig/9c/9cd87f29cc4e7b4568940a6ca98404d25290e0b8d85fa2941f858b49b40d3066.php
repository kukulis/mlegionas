<?php

/* /home/giedrius/www/mlegionas.lt/themes/rainlab-vanilla/pages/forgot-password.htm */
class __TwigTemplate_d931d73f405abdfafcc860ba8806dd8865f3b8871b15574efc54a0240f02dc18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("resetPassword"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "
<hr />

<p><a href=\"";
        // line 5
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("account");
        echo "\">Go back to Sign in</a></p>";
    }

    public function getTemplateName()
    {
        return "/home/giedrius/www/mlegionas.lt/themes/rainlab-vanilla/pages/forgot-password.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'resetPassword' %}

<hr />

<p><a href=\"{{ 'account'|page }}\">Go back to Sign in</a></p>", "/home/giedrius/www/mlegionas.lt/themes/rainlab-vanilla/pages/forgot-password.htm", "");
    }
}
