<?php

/* la.html */
class __TwigTemplate_e8c8efa508590e7939c7ded187a59868d6f2c9ee2ea210176aa5f7c68118e8d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<title>Document</title>
</head>
<body>
    <content>
    \t";
        // line 9
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </content>
\t<footer>footer</footer>
</body>
</html>";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "
    \t";
    }

    public function getTemplateName()
    {
        return "la.html";
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  39 => 9,  32 => 12,  30 => 9,  20 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<title>Document</title>
</head>
<body>
    <content>
    \t{% block content %}

    \t{% endblock%}
    </content>
\t<footer>footer</footer>
</body>
</html>";
    }
}
