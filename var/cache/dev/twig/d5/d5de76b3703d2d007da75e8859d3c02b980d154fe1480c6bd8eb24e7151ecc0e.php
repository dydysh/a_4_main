<?php

/* AQMArtBundle::layout.html.twig */
class __TwigTemplate_8ab9cf6273414b2f10d942df835446d6e289826a5221027389a3ea0672ec360f extends Twig_Template
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
        $__internal_80d14f16c4c2c6f9dce7e3911050289b015598d498944e4bbce46892c05d6920 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80d14f16c4c2c6f9dce7e3911050289b015598d498944e4bbce46892c05d6920->enter($__internal_80d14f16c4c2c6f9dce7e3911050289b015598d498944e4bbce46892c05d6920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AQMArtBundle::layout.html.twig"));

        $__internal_b81faada64986c448f67ffda972df34c79bd33f892fa650b3a8a63844fcb9953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b81faada64986c448f67ffda972df34c79bd33f892fa650b3a8a63844fcb9953->enter($__internal_b81faada64986c448f67ffda972df34c79bd33f892fa650b3a8a63844fcb9953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AQMArtBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80d14f16c4c2c6f9dce7e3911050289b015598d498944e4bbce46892c05d6920->leave($__internal_80d14f16c4c2c6f9dce7e3911050289b015598d498944e4bbce46892c05d6920_prof);

        
        $__internal_b81faada64986c448f67ffda972df34c79bd33f892fa650b3a8a63844fcb9953->leave($__internal_b81faada64986c448f67ffda972df34c79bd33f892fa650b3a8a63844fcb9953_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_5861cb3426c1d894072eaeef61346ab3f117a31f870b11509df16ce6e06f724f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5861cb3426c1d894072eaeef61346ab3f117a31f870b11509df16ce6e06f724f->enter($__internal_5861cb3426c1d894072eaeef61346ab3f117a31f870b11509df16ce6e06f724f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_b3242c9d18ec981d132991c395b0ae05e3d795803ca1f96271300d547ae69ca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3242c9d18ec981d132991c395b0ae05e3d795803ca1f96271300d547ae69ca7->enter($__internal_b3242c9d18ec981d132991c395b0ae05e3d795803ca1f96271300d547ae69ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_b3242c9d18ec981d132991c395b0ae05e3d795803ca1f96271300d547ae69ca7->leave($__internal_b3242c9d18ec981d132991c395b0ae05e3d795803ca1f96271300d547ae69ca7_prof);

        
        $__internal_5861cb3426c1d894072eaeef61346ab3f117a31f870b11509df16ce6e06f724f->leave($__internal_5861cb3426c1d894072eaeef61346ab3f117a31f870b11509df16ce6e06f724f_prof);

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
        return array (  54 => 7,  50 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block header %} {# A REFAIRE #}
    <nav class=\"navbar navbar-inverse\">
        <div class=\"bandeau\">
            <h1>À 4 Mains</h1> {# Remplacer par image logo => Elodie ? #}
        </div>
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
{% endblock %}", "AQMArtBundle::layout.html.twig", "/var/www/html/4Mains/src/AQM/ArtBundle/Resources/views/layout.html.twig");
    }
}
