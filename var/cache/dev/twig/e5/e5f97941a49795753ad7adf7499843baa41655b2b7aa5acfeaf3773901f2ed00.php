<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_001ec319e56b05cdf9c9542561587dc367de6b139dec9406243e318a64bdc777 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77be4d9148f27405d6bcaafb932e68f327bcd62b89a7ad670400ff85193f7119 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77be4d9148f27405d6bcaafb932e68f327bcd62b89a7ad670400ff85193f7119->enter($__internal_77be4d9148f27405d6bcaafb932e68f327bcd62b89a7ad670400ff85193f7119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_49819b3fd82db39131267f14ebea861328a0b5c5cb508e0767f7537ff113b9ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49819b3fd82db39131267f14ebea861328a0b5c5cb508e0767f7537ff113b9ba->enter($__internal_49819b3fd82db39131267f14ebea861328a0b5c5cb508e0767f7537ff113b9ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77be4d9148f27405d6bcaafb932e68f327bcd62b89a7ad670400ff85193f7119->leave($__internal_77be4d9148f27405d6bcaafb932e68f327bcd62b89a7ad670400ff85193f7119_prof);

        
        $__internal_49819b3fd82db39131267f14ebea861328a0b5c5cb508e0767f7537ff113b9ba->leave($__internal_49819b3fd82db39131267f14ebea861328a0b5c5cb508e0767f7537ff113b9ba_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_24b371d0bc8b00f94637c7cc9bfbace66e2ccfe577bc88aff8dd32304762ec0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24b371d0bc8b00f94637c7cc9bfbace66e2ccfe577bc88aff8dd32304762ec0f->enter($__internal_24b371d0bc8b00f94637c7cc9bfbace66e2ccfe577bc88aff8dd32304762ec0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a4a82e81ab2f1ff8790f3b7eb325f1dd4a34a1b43115aafa5085902650b1890c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4a82e81ab2f1ff8790f3b7eb325f1dd4a34a1b43115aafa5085902650b1890c->enter($__internal_a4a82e81ab2f1ff8790f3b7eb325f1dd4a34a1b43115aafa5085902650b1890c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_a4a82e81ab2f1ff8790f3b7eb325f1dd4a34a1b43115aafa5085902650b1890c->leave($__internal_a4a82e81ab2f1ff8790f3b7eb325f1dd4a34a1b43115aafa5085902650b1890c_prof);

        
        $__internal_24b371d0bc8b00f94637c7cc9bfbace66e2ccfe577bc88aff8dd32304762ec0f->leave($__internal_24b371d0bc8b00f94637c7cc9bfbace66e2ccfe577bc88aff8dd32304762ec0f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/4Mains/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
