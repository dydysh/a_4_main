<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_504b4c769556d0dec363c5a1ba46cd1ccd966e1af8d1a9aa5a5f438d60d29ae7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6174604eda8eafbaf2cd63106217be006c6a3b07532d07940b2a93c52065a00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6174604eda8eafbaf2cd63106217be006c6a3b07532d07940b2a93c52065a00->enter($__internal_a6174604eda8eafbaf2cd63106217be006c6a3b07532d07940b2a93c52065a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ac4d7b5cbaaca2b673f166db526d8619bf54996219566184c4d2297339632caf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac4d7b5cbaaca2b673f166db526d8619bf54996219566184c4d2297339632caf->enter($__internal_ac4d7b5cbaaca2b673f166db526d8619bf54996219566184c4d2297339632caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6174604eda8eafbaf2cd63106217be006c6a3b07532d07940b2a93c52065a00->leave($__internal_a6174604eda8eafbaf2cd63106217be006c6a3b07532d07940b2a93c52065a00_prof);

        
        $__internal_ac4d7b5cbaaca2b673f166db526d8619bf54996219566184c4d2297339632caf->leave($__internal_ac4d7b5cbaaca2b673f166db526d8619bf54996219566184c4d2297339632caf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_78faa7a71a1643d9d40507d849531c7de4cba9c38afe0e8cbef5d063c61e2125 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78faa7a71a1643d9d40507d849531c7de4cba9c38afe0e8cbef5d063c61e2125->enter($__internal_78faa7a71a1643d9d40507d849531c7de4cba9c38afe0e8cbef5d063c61e2125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6eda490ddd3182833272d80bfe333ed0ba8c37b977a026ba8560f1086f482b6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eda490ddd3182833272d80bfe333ed0ba8c37b977a026ba8560f1086f482b6e->enter($__internal_6eda490ddd3182833272d80bfe333ed0ba8c37b977a026ba8560f1086f482b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6eda490ddd3182833272d80bfe333ed0ba8c37b977a026ba8560f1086f482b6e->leave($__internal_6eda490ddd3182833272d80bfe333ed0ba8c37b977a026ba8560f1086f482b6e_prof);

        
        $__internal_78faa7a71a1643d9d40507d849531c7de4cba9c38afe0e8cbef5d063c61e2125->leave($__internal_78faa7a71a1643d9d40507d849531c7de4cba9c38afe0e8cbef5d063c61e2125_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_05b44d203fdedb55d3a5b491b0082129e008d646dbbaa5e0ddaa5c458f2ca0e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05b44d203fdedb55d3a5b491b0082129e008d646dbbaa5e0ddaa5c458f2ca0e6->enter($__internal_05b44d203fdedb55d3a5b491b0082129e008d646dbbaa5e0ddaa5c458f2ca0e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_82ef0190235685b4935a767820a096843588934bd5b9cc6090d064d99ff72dc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ef0190235685b4935a767820a096843588934bd5b9cc6090d064d99ff72dc7->enter($__internal_82ef0190235685b4935a767820a096843588934bd5b9cc6090d064d99ff72dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_82ef0190235685b4935a767820a096843588934bd5b9cc6090d064d99ff72dc7->leave($__internal_82ef0190235685b4935a767820a096843588934bd5b9cc6090d064d99ff72dc7_prof);

        
        $__internal_05b44d203fdedb55d3a5b491b0082129e008d646dbbaa5e0ddaa5c458f2ca0e6->leave($__internal_05b44d203fdedb55d3a5b491b0082129e008d646dbbaa5e0ddaa5c458f2ca0e6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a88d29f806b757ad4999bee0049b4951c70c3442cc042071fe31abd37760fa39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a88d29f806b757ad4999bee0049b4951c70c3442cc042071fe31abd37760fa39->enter($__internal_a88d29f806b757ad4999bee0049b4951c70c3442cc042071fe31abd37760fa39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_37f55a5ebf6a9d8d4197dc3e580a1171003b8d5a09203f3bc6f765e34d69386d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37f55a5ebf6a9d8d4197dc3e580a1171003b8d5a09203f3bc6f765e34d69386d->enter($__internal_37f55a5ebf6a9d8d4197dc3e580a1171003b8d5a09203f3bc6f765e34d69386d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_37f55a5ebf6a9d8d4197dc3e580a1171003b8d5a09203f3bc6f765e34d69386d->leave($__internal_37f55a5ebf6a9d8d4197dc3e580a1171003b8d5a09203f3bc6f765e34d69386d_prof);

        
        $__internal_a88d29f806b757ad4999bee0049b4951c70c3442cc042071fe31abd37760fa39->leave($__internal_a88d29f806b757ad4999bee0049b4951c70c3442cc042071fe31abd37760fa39_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/4Mains/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
