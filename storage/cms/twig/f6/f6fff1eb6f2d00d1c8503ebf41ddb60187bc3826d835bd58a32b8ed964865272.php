<?php

/* /Users/olegtalanov/Code/october.loc/themes/learn/layouts/fallback.htm */
class __TwigTemplate_0c5fec00dcee083f00fc32534f5f9145f5b41f57e6387b818acebf63a0e17575 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
    }

    public function getTemplateName()
    {
        return "/Users/olegtalanov/Code/october.loc/themes/learn/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "/Users/olegtalanov/Code/october.loc/themes/learn/layouts/fallback.htm", "");
    }
}
