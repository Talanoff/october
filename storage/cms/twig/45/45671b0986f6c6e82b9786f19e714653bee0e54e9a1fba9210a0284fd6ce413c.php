<?php

/* /Users/olegtalanov/Code/october.loc/themes/learn/partials/site/header.htm */
class __TwigTemplate_a5621d56417976b3b0642425d7138d5ea19c143a8126a90a3e49fb3068c9abef extends Twig_Template
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
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
    ";
        // line 7
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 8
        echo "</head>
<body>

    <header id=\"layout-header\">
        <div class=\"container\">
            <ul class=\"nav\">
                <li class=\"nav-item\">
                    <a href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("index");
        echo "\" class=\"nav-link\">Главная</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("movies");
        echo "\" class=\"nav-link\">Фильмы</a>
                </li>
            </ul>
        </div>
    </header>";
    }

    public function getTemplateName()
    {
        return "/Users/olegtalanov/Code/october.loc/themes/learn/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 18,  46 => 15,  37 => 8,  34 => 7,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>{{ this.page.title }}</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
    {% styles %}
</head>
<body>

    <header id=\"layout-header\">
        <div class=\"container\">
            <ul class=\"nav\">
                <li class=\"nav-item\">
                    <a href=\"{{ 'index'|page }}\" class=\"nav-link\">Главная</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"{{ 'movies'|page }}\" class=\"nav-link\">Фильмы</a>
                </li>
            </ul>
        </div>
    </header>", "/Users/olegtalanov/Code/october.loc/themes/learn/partials/site/header.htm", "");
    }
}
