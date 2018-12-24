<?php

/* /Users/olegtalanov/Code/october.loc/themes/learn/pages/opisanie-filma.htm */
class __TwigTemplate_0cc43c200a64ce368adff5bb16e8589879365c80560db4c2b76310b7ff1cd237 extends Twig_Template
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
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "record", array());
        // line 2
        echo "
";
        // line 3
        if (($context["record"] ?? null)) {
            // line 4
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "poster", array())) {
                // line 5
                echo "        <p><img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "poster", array()), "path", array()), "html", null, true);
                echo "\" alt=\"\"></p>
    ";
            }
            // line 7
            echo "    <h1>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "title", array()), "html", null, true);
            echo "</h1>
    ";
            // line 8
            echo twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "description", array());
            echo "
    
    ";
            // line 10
            if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "previews", array())) {
                // line 11
                echo "    <ul class=\"inline\">
        ";
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "previews", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 13
                    echo "        <li><img src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", array()), "html", null, true);
                    echo "\" alt=\"\"></li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 15
                echo "    </ul>
    ";
            }
            // line 17
            echo "
";
            // line 18
            if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "genres", array())) {
                // line 19
                echo "    <hr>
    ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "genres", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                    // line 21
                    echo "    ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "title", array()), "html", null, true);
                    echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) ? (".") : (","));
                    echo "
    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 24
            echo "
";
            // line 25
            if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "actors", array())) {
                // line 26
                echo "    <hr>
    <ul class=\"list-unstyled\">
    ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "actors", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
                    // line 29
                    echo "        <li>
            <a href=\"";
                    // line 30
                    echo $this->extensions['System\Twig\Extension']->appFilter(twig_join_filter(array(0 => "actors", 1 => twig_get_attribute($this->env, $this->source, $context["actor"], "slug", array())), "/"));
                    echo "\">
                ";
                    // line 31
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actor"], "name", array()), "html", null, true);
                    echo "
            </a>
        </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "    </ul>
";
            }
            // line 37
            echo "
";
        } else {
            // line 39
            echo "    ";
            echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/Users/olegtalanov/Code/october.loc/themes/learn/pages/opisanie-filma.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 39,  149 => 37,  145 => 35,  135 => 31,  131 => 30,  128 => 29,  124 => 28,  120 => 26,  118 => 25,  115 => 24,  96 => 21,  79 => 20,  76 => 19,  74 => 18,  71 => 17,  67 => 15,  58 => 13,  54 => 12,  51 => 11,  49 => 10,  44 => 8,  39 => 7,  33 => 5,  30 => 4,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set record = movie.record %}

{% if record %}
    {% if record.poster %}
        <p><img src=\"{{ record.poster.path }}\" alt=\"\"></p>
    {% endif %}
    <h1>{{ record.title }}</h1>
    {{ record.description|raw }}
    
    {% if record.previews %}
    <ul class=\"inline\">
        {% for image in record.previews %}
        <li><img src=\"{{ image.path }}\" alt=\"\"></li>
        {% endfor %}
    </ul>
    {% endif %}

{% if record.genres %}
    <hr>
    {% for genre in record.genres %}
    {{genre.title}}{{loop.last ? '.' : ','}}
    {% endfor %}
{% endif %}

{% if record.actors %}
    <hr>
    <ul class=\"list-unstyled\">
    {% for actor in record.actors %}
        <li>
            <a href=\"{{ ['actors', actor.slug]|join('/')|app }}\">
                {{ actor.name }}
            </a>
        </li>
    {% endfor %}
    </ul>
{% endif %}

{% else %}
    {{ notFoundMessage }}
{% endif %}", "/Users/olegtalanov/Code/october.loc/themes/learn/pages/opisanie-filma.htm", "");
    }
}
