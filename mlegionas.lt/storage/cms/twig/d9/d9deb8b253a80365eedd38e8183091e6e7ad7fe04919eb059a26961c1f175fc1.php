<?php

/* /home/giedrius/www/mlegionas.lt/plugins/rainlab/user/components/resetpassword/default.htm */
class __TwigTemplate_46d06b3dd4b0ce56ee9535d0c54c2b80b7b615f35eec4332e9c7b01dd4738e8a extends Twig_Template
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
        echo "<div id=\"partialUserResetForm\">
    ";
        // line 2
        if (($this->getAttribute(($context["__SELF__"] ?? null), "code", array()) == null)) {
            // line 3
            echo "        ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction((($context["__SELF__"] ?? null) . "::restore")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 4
            echo "    ";
        } else {
            // line 5
            echo "        ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction((($context["__SELF__"] ?? null) . "::reset")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 6
            echo "    ";
        }
        // line 7
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/home/giedrius/www/mlegionas.lt/plugins/rainlab/user/components/resetpassword/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  37 => 6,  32 => 5,  29 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"partialUserResetForm\">
    {% if __SELF__.code == null %}
        {% partial __SELF__ ~ '::restore' %}
    {% else %}
        {% partial __SELF__ ~ '::reset' %}
    {% endif %}
</div>", "/home/giedrius/www/mlegionas.lt/plugins/rainlab/user/components/resetpassword/default.htm", "");
    }
}
