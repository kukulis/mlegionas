<?php

/* /home/giedrius/www/mlegionas.lt/themes/rainlab-vanilla/pages/404.htm */
class __TwigTemplate_9609479939344dd5b0a8c1a314c1f672bcb902085c7df560aa9d957932f52518 extends Twig_Template
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
        echo "<p>We're sorry, but the page you requested cannot be found.</p>";
    }

    public function getTemplateName()
    {
        return "/home/giedrius/www/mlegionas.lt/themes/rainlab-vanilla/pages/404.htm";
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
        return new Twig_Source("<p>We're sorry, but the page you requested cannot be found.</p>", "/home/giedrius/www/mlegionas.lt/themes/rainlab-vanilla/pages/404.htm", "");
    }
}
