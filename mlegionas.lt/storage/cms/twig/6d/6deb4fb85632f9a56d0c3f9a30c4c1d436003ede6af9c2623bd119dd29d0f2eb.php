<?php

/* /home/giedrius/www/mlegionas.lt/themes/rainlab-vanilla/pages/blog.htm */
class __TwigTemplate_799357c7a8cbca9811091a3a8de03de72ec6045ac6c8596d35c3382d71a3402d extends Twig_Template
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
        echo "<div class=\"row\">
    <div class=\"col-md-8\">
        ";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("blog/posts"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "    </div>
    <div class=\"col-md-4\">
        ";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("blog/categories"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/giedrius/www/mlegionas.lt/themes/rainlab-vanilla/pages/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  31 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
    <div class=\"col-md-8\">
        {% partial 'blog/posts' %}
    </div>
    <div class=\"col-md-4\">
        {% partial 'blog/categories' %}
    </div>
</div>", "/home/giedrius/www/mlegionas.lt/themes/rainlab-vanilla/pages/blog.htm", "");
    }
}
