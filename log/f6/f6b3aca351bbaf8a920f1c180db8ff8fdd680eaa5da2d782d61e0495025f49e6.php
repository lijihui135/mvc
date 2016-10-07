<?php

/* index.html */
class __TwigTemplate_4529e642bc6db347f6f807dea54ef89e47793ee6b7e1bc7b80bb7e071113b0c3 extends Twig_Template
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
        echo "<h1><?php echo \$title; ?></h1>
<h3>";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["data"]) ? $context["data"] : null), "html", null, true);
        echo "</h3>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "<h1><?php echo \$title; ?></h1>
<h3>{{ data }}</h3>";
    }
}
