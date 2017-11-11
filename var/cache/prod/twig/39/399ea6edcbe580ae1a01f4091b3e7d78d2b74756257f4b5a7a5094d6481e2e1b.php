<?php

/* AQMArtBundle::layout.html.twig */
class __TwigTemplate_fcdaeccfbd4f505ced99834974ab36099527b608adb1b09aeaa9cb45472f59a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AQMArtBundle::layout.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        echo " ";
        // line 4
        echo "    <nav class=\"navbar navbar-inverse\">
        <div class=\"bandeau\">
            <h1>À 4 Mains</h1> ";
        // line 7
        echo "        </div>
        <div class=\"container-fluid\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"#\"><i class=\"fa fa-home fa-2x\" aria-hidden=\"true\"></i></a></li>
                <li><a href=\"#\">Catégorie 1</a></li>
                <li><a href=\"#\">Catégorie 2</a></li>
                <li><a href=\"#\">Catégorie 3</a></li>
                <li><a href=\"#\">Catégorie 4</a></li>
                <li><a href=\"#\">Catégorie 5</a></li>
            </ul>
        </div>
    </nav>
";
    }

    public function getTemplateName()
    {
        return "AQMArtBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  32 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AQMArtBundle::layout.html.twig", "/var/www/html/4Mains/src/AQM/ArtBundle/Resources/views/layout.html.twig");
    }
}
