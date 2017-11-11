<?php

/* AQMArtBundle:Default:index.html.twig */
class __TwigTemplate_e1c889eb12fec023bbefb5192fc86de06c22655de218d21bbfbf61859f991750 extends Twig_Template
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
        $__internal_a2c792028fe721b53a6a985073798cc6407e1064bef75af540dd336b2d377fe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2c792028fe721b53a6a985073798cc6407e1064bef75af540dd336b2d377fe8->enter($__internal_a2c792028fe721b53a6a985073798cc6407e1064bef75af540dd336b2d377fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AQMArtBundle:Default:index.html.twig"));

        $__internal_1eddf32a30ef78768d0fd2803d344bfcb29eef51e3ae49130eecabd8b58d402f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eddf32a30ef78768d0fd2803d344bfcb29eef51e3ae49130eecabd8b58d402f->enter($__internal_1eddf32a30ef78768d0fd2803d344bfcb29eef51e3ae49130eecabd8b58d402f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AQMArtBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2c792028fe721b53a6a985073798cc6407e1064bef75af540dd336b2d377fe8->leave($__internal_a2c792028fe721b53a6a985073798cc6407e1064bef75af540dd336b2d377fe8_prof);

        
        $__internal_1eddf32a30ef78768d0fd2803d344bfcb29eef51e3ae49130eecabd8b58d402f->leave($__internal_1eddf32a30ef78768d0fd2803d344bfcb29eef51e3ae49130eecabd8b58d402f_prof);

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
        return new Twig_Source("{% extends \"AQMArtBundle::layout.html.twig\" %}
", "AQMArtBundle:Default:index.html.twig", "/var/www/html/4Mains/src/AQM/ArtBundle/Resources/views/Default/index.html.twig");
    }
}
