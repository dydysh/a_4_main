<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8006b7f8fc2624f01b3de6d52decc5ff3e8fa8050fc8435cce232d4e154540ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_393cb3ad3d4e0851147396690942b6c44f4e31f2d2408e2a6d62606917958f09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_393cb3ad3d4e0851147396690942b6c44f4e31f2d2408e2a6d62606917958f09->enter($__internal_393cb3ad3d4e0851147396690942b6c44f4e31f2d2408e2a6d62606917958f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d8370634c8b70cb377e70cd7021f8d63ed6c97fe66262c6749b2302e4e621f42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8370634c8b70cb377e70cd7021f8d63ed6c97fe66262c6749b2302e4e621f42->enter($__internal_d8370634c8b70cb377e70cd7021f8d63ed6c97fe66262c6749b2302e4e621f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_393cb3ad3d4e0851147396690942b6c44f4e31f2d2408e2a6d62606917958f09->leave($__internal_393cb3ad3d4e0851147396690942b6c44f4e31f2d2408e2a6d62606917958f09_prof);

        
        $__internal_d8370634c8b70cb377e70cd7021f8d63ed6c97fe66262c6749b2302e4e621f42->leave($__internal_d8370634c8b70cb377e70cd7021f8d63ed6c97fe66262c6749b2302e4e621f42_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0773081d6a5b21ea78e63156aee8e31bdc8249d16071cc13f60d3d709a48aecf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0773081d6a5b21ea78e63156aee8e31bdc8249d16071cc13f60d3d709a48aecf->enter($__internal_0773081d6a5b21ea78e63156aee8e31bdc8249d16071cc13f60d3d709a48aecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4fc8b13ac1e85df2518ac24be4163f24325b8cc9d0fadf93f503a890578166a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fc8b13ac1e85df2518ac24be4163f24325b8cc9d0fadf93f503a890578166a3->enter($__internal_4fc8b13ac1e85df2518ac24be4163f24325b8cc9d0fadf93f503a890578166a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_4fc8b13ac1e85df2518ac24be4163f24325b8cc9d0fadf93f503a890578166a3->leave($__internal_4fc8b13ac1e85df2518ac24be4163f24325b8cc9d0fadf93f503a890578166a3_prof);

        
        $__internal_0773081d6a5b21ea78e63156aee8e31bdc8249d16071cc13f60d3d709a48aecf->leave($__internal_0773081d6a5b21ea78e63156aee8e31bdc8249d16071cc13f60d3d709a48aecf_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4d07b15e5b39bfc79db7a4569fd81b51e3e1b7d809ecdf9a5c5d30615a880b9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d07b15e5b39bfc79db7a4569fd81b51e3e1b7d809ecdf9a5c5d30615a880b9e->enter($__internal_4d07b15e5b39bfc79db7a4569fd81b51e3e1b7d809ecdf9a5c5d30615a880b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_76092a8b727df89b1bc58fb7a726c69fff4d4e8ddac2c5acba05c4b5bb9bd407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76092a8b727df89b1bc58fb7a726c69fff4d4e8ddac2c5acba05c4b5bb9bd407->enter($__internal_76092a8b727df89b1bc58fb7a726c69fff4d4e8ddac2c5acba05c4b5bb9bd407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_76092a8b727df89b1bc58fb7a726c69fff4d4e8ddac2c5acba05c4b5bb9bd407->leave($__internal_76092a8b727df89b1bc58fb7a726c69fff4d4e8ddac2c5acba05c4b5bb9bd407_prof);

        
        $__internal_4d07b15e5b39bfc79db7a4569fd81b51e3e1b7d809ecdf9a5c5d30615a880b9e->leave($__internal_4d07b15e5b39bfc79db7a4569fd81b51e3e1b7d809ecdf9a5c5d30615a880b9e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_88500cad020f6534f6f27cd87816860968c76a957805e6a170a1b4ca98fc0ca6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88500cad020f6534f6f27cd87816860968c76a957805e6a170a1b4ca98fc0ca6->enter($__internal_88500cad020f6534f6f27cd87816860968c76a957805e6a170a1b4ca98fc0ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f2e16d10652e4cdb6f020625c909439824956e331d07913385c4ea89556831c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f2e16d10652e4cdb6f020625c909439824956e331d07913385c4ea89556831c->enter($__internal_6f2e16d10652e4cdb6f020625c909439824956e331d07913385c4ea89556831c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_6f2e16d10652e4cdb6f020625c909439824956e331d07913385c4ea89556831c->leave($__internal_6f2e16d10652e4cdb6f020625c909439824956e331d07913385c4ea89556831c_prof);

        
        $__internal_88500cad020f6534f6f27cd87816860968c76a957805e6a170a1b4ca98fc0ca6->leave($__internal_88500cad020f6534f6f27cd87816860968c76a957805e6a170a1b4ca98fc0ca6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/4Mains/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
