<?php

/* modules/contrib/easy_social/templates/easy-social-twitter.html.twig */
class __TwigTemplate_6b75c153afb6d6077cafbef713694ed96ce3203b4e93d24c39dd6a1e779a2c0f extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 14
        echo "<span class=\"easy-social facebook\">
  <a href='https://twitter.com/share' ";
        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">'Share on Twitter'</a>
</span>";
    }

    public function getTemplateName()
    {
        return "modules/contrib/easy_social/templates/easy-social-twitter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 15,  43 => 14,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a date / time element.*/
/*  **/
/*  * Available variables*/
/*  * - attributes: (optional) HTML attributes to apply to the block.*/
/*  * - widgets: The widgets to be rendered.*/
/*  * - async: If we want to render JS ASsynchronously.*/
/*  * - attached: Array of libraries to add, according to the widget definition.*/
/*  **/
/*  *//* */
/* #}*/
/* <span class="easy-social facebook">*/
/*   <a href='https://twitter.com/share' {{ attributes }}>'Share on Twitter'</a>*/
/* </span>*/
