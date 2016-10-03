<?php

/* layouts-twig/main.twig */
class __TwigTemplate_51811836a807d5a64d3c32e2b7e4b555142e41e0eddc6bf9bb2dcc979ea45627 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(call_user_func_array($this->env->getFunction('app')->getCallable(), array()), "name", array()), "html", null, true);
        echo "</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"css/shop-item.css\" rel=\"stylesheet\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
    <!-- jQuery -->
    <script src=\"js/jquery.js\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"js/bootstrap.min.js\"></script>

</head>
<body>

    <!-- Navigation -->
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class=\"navbar-brand\" href=\"#\">";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(call_user_func_array($this->env->getFunction('app')->getCallable(), array()), "name", array()), "html", null, true);
        echo "</a>
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class=\"container\">

        <div class=\"row\">

            ";
        // line 49
        echo twig_include($this->env, $context, "layouts-twig/menu.twig");
        echo "

            <div class=\"col-md-9\">
                ";
        // line 52
        $this->displayBlock('content', $context, $blocks);
        // line 53
        echo "            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class=\"container\">

        <hr>

        <!-- Footer -->
        <footer>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p>Copyright &copy; KenPHP 2016</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    ";
        // line 76
        $this->displayBlock('javascript', $context, $blocks);
        // line 77
        echo "
</body>

</html>
";
    }

    // line 52
    public function block_content($context, array $blocks = array())
    {
    }

    // line 76
    public function block_javascript($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layouts-twig/main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 76,  120 => 52,  112 => 77,  110 => 76,  85 => 53,  83 => 52,  77 => 49,  64 => 39,  34 => 12,  21 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>{{ app().name }}</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"css/shop-item.css\" rel=\"stylesheet\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
    <!-- jQuery -->
    <script src=\"js/jquery.js\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"js/bootstrap.min.js\"></script>

</head>
<body>

    <!-- Navigation -->
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class=\"navbar-brand\" href=\"#\">{{ app().name }}</a>
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class=\"container\">

        <div class=\"row\">

            {{ include('layouts-twig/menu.twig') }}

            <div class=\"col-md-9\">
                {% block content %}{% endblock %}
            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class=\"container\">

        <hr>

        <!-- Footer -->
        <footer>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p>Copyright &copy; KenPHP 2016</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    {% block javascript %}{% endblock %}

</body>

</html>
";
    }
}
