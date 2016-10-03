<?php

/* layouts-twig/menu.twig */
class __TwigTemplate_c3841ab506e38e987755622d6db9f34a3aa5e880a6a56843235540c40716ff6a extends Twig_Template
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
        echo "<div class=\"col-md-3\">
    <p class=\"lead\">Menu</p>
    <div class=\"list-group\">
        <a
            href=\"/\"
            class=\"list-group-item
            ";
        // line 7
        echo ((($this->getAttribute($this->getAttribute(call_user_func_array($this->env->getFunction('app')->getCallable(), array()), "request", array()), "pathInfo", array()) == "/")) ? ("active") : (""));
        echo "\"
        >
            Index
        </a>
        <a
            href=\"#\"
            class=\"list-group-item\"
            >
            Item 1
        </a>
        <a
            href=\"#\"
            class=\"list-group-item\"
            >
            Item 2
        </a>
        <a
            href=\"#\"
            class=\"list-group-item\"
            >
            Item 3
        </a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "layouts-twig/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  19 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"col-md-3\">
    <p class=\"lead\">Menu</p>
    <div class=\"list-group\">
        <a
            href=\"/\"
            class=\"list-group-item
            {{ (app().request. pathInfo == '/') ? 'active' : '' }}\"
        >
            Index
        </a>
        <a
            href=\"#\"
            class=\"list-group-item\"
            >
            Item 1
        </a>
        <a
            href=\"#\"
            class=\"list-group-item\"
            >
            Item 2
        </a>
        <a
            href=\"#\"
            class=\"list-group-item\"
            >
            Item 3
        </a>
    </div>
</div>
";
    }
}
