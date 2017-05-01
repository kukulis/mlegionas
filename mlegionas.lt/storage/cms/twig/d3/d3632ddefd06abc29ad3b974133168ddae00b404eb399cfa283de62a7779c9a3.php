<?php

/* /home/giedrius/www/mlegionas.lt/themes/rainlab-vanilla/pages/forum/channel.htm */
class __TwigTemplate_e650164e3542d9fa28763c95bd1bbcfc3f31f02d1e1409641bdab55ce61cbc3c extends Twig_Template
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
        echo $this->env->getExtension('CMS')->componentFunction("forumChannel"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/home/giedrius/www/mlegionas.lt/themes/rainlab-vanilla/pages/forum/channel.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'forumChannel' %}", "/home/giedrius/www/mlegionas.lt/themes/rainlab-vanilla/pages/forum/channel.htm", "");
    }
}
