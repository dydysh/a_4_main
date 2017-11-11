<?php

/* AQMArtBundle:Default:index.html.twig */
class __TwigTemplate_d1c4d35ce68e1a6b95f90e0a7173dbf5c2f315f903de399cbc61eb973dfcadbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AQMArtBundle::layout.html.twig", "AQMArtBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "AQMArtBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "AQMArtBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AQMArtBundle:Default:index.html.twig", "/var/www/html/4Mains/src/AQM/ArtBundle/Resources/views/Default/index.html.twig");
    }
}
