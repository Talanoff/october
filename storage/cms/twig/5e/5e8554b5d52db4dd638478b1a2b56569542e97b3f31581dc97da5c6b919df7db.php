<?php

/* /Users/olegtalanov/Code/october.loc/themes/learn/layouts/frontpage.htm */
class __TwigTemplate_7738d726f94b41e5d8733fc9935aa70707b3a59c7093baf0994a12074dff8989 extends Twig_Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
<section>
    <div class=\"container\">
        ";
        // line 5
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 6
        echo "    </div>
</section>

";
        // line 9
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/Users/olegtalanov/Code/october.loc/themes/learn/layouts/frontpage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 9,  34 => 6,  32 => 5,  27 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'site/header' %}

<section>
    <div class=\"container\">
        {% page %}
    </div>
</section>

{% partial 'site/footer' %}", "/Users/olegtalanov/Code/october.loc/themes/learn/layouts/frontpage.htm", "");
    }
}
