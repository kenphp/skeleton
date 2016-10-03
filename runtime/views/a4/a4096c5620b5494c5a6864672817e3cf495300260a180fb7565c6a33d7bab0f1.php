<?php

/* home/index.twig */
class __TwigTemplate_77ac085bee903a3942dc0d3c93087fd48b5a60fb4fafc0224bfc9c2c2a9d18a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts-twig/main.twig", "home/index.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts-twig/main.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<h3>Welcome</h3>
<b>Time now : ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["time"]) ? $context["time"] : null), "html", null, true);
        echo "</b>
<br>
<b>Templating engine : Twig</b>
<p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus auctor ultricies
    efficitur. Aliquam ullamcorper, lacus sed mollis consectetur, libero leo scelerisque felis,
    ultricies tempor nibh mi a lorem. Suspendisse potenti. Ut sed erat varius,
    hendrerit lacus sit amet, egestas tellus. Sed id dolor augue. Donec lacinia
    eros nec luctus vulputate. Curabitur id mauris mollis, laoreet nisl sed,
    malesuada dui. Fusce pellentesque metus at nisi maximus vulputate. Praesent
    sodales, elit ut placerat faucibus, dui nulla viverra leo, eget sollicitudin
    lectus neque viverra libero. Etiam tincidunt nisi sed arcu congue, id bibendum
    nibh elementum. Cras vestibulum enim dolor, ut varius nisl gravida at.
</p>
<p>
    Integer posuere faucibus luctus. Suspendisse tortor nunc, euismod ut ex sit amet,
    sagittis commodo justo. Nulla eget odio efficitur, semper elit id, sodales ipsum.
    Suspendisse ornare ante vel dignissim rhoncus. Phasellus vel placerat nisl. Nulla
    facilisi. Phasellus quis dignissim turpis, vel tempor diam. Proin convallis
    et ante eu volutpat. Sed commodo pellentesque bibendum. Fusce sed orci at ante
    rutrum condimentum. Nunc blandit sodales libero, a egestas lectus. Nullam accumsan
    leo at velit egestas, ac hendrerit ligula elementum. Etiam at iaculis ipsum.
    Curabitur non diam tincidunt, interdum justo lacinia, venenatis libero.
    Duis scelerisque fermentum turpis, sit amet condimentum enim iaculis a.
    Nam commodo quis lorem faucibus placerat.
</p>

";
    }

    public function getTemplateName()
    {
        return "home/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'layouts-twig/main.twig' %}

{% block content %}

<h3>Welcome</h3>
<b>Time now : {{ time }}</b>
<br>
<b>Templating engine : Twig</b>
<p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus auctor ultricies
    efficitur. Aliquam ullamcorper, lacus sed mollis consectetur, libero leo scelerisque felis,
    ultricies tempor nibh mi a lorem. Suspendisse potenti. Ut sed erat varius,
    hendrerit lacus sit amet, egestas tellus. Sed id dolor augue. Donec lacinia
    eros nec luctus vulputate. Curabitur id mauris mollis, laoreet nisl sed,
    malesuada dui. Fusce pellentesque metus at nisi maximus vulputate. Praesent
    sodales, elit ut placerat faucibus, dui nulla viverra leo, eget sollicitudin
    lectus neque viverra libero. Etiam tincidunt nisi sed arcu congue, id bibendum
    nibh elementum. Cras vestibulum enim dolor, ut varius nisl gravida at.
</p>
<p>
    Integer posuere faucibus luctus. Suspendisse tortor nunc, euismod ut ex sit amet,
    sagittis commodo justo. Nulla eget odio efficitur, semper elit id, sodales ipsum.
    Suspendisse ornare ante vel dignissim rhoncus. Phasellus vel placerat nisl. Nulla
    facilisi. Phasellus quis dignissim turpis, vel tempor diam. Proin convallis
    et ante eu volutpat. Sed commodo pellentesque bibendum. Fusce sed orci at ante
    rutrum condimentum. Nunc blandit sodales libero, a egestas lectus. Nullam accumsan
    leo at velit egestas, ac hendrerit ligula elementum. Etiam at iaculis ipsum.
    Curabitur non diam tincidunt, interdum justo lacinia, venenatis libero.
    Duis scelerisque fermentum turpis, sit amet condimentum enim iaculis a.
    Nam commodo quis lorem faucibus placerat.
</p>

{% endblock %}
";
    }
}
