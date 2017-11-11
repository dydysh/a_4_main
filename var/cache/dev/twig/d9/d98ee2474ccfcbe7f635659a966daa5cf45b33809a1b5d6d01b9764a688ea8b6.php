<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4fe0126cea834c2021a568bc22188a6a6babe007ed6f1aff9514e87b8ba11595 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac1552ba7f1d409c272f600d2c18709306aa3d1670bea7117a48589cfa4df559 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac1552ba7f1d409c272f600d2c18709306aa3d1670bea7117a48589cfa4df559->enter($__internal_ac1552ba7f1d409c272f600d2c18709306aa3d1670bea7117a48589cfa4df559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_db22c926e3f45e7cea0d0cb19319a602f592c9843152e49156efefa69582f8c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db22c926e3f45e7cea0d0cb19319a602f592c9843152e49156efefa69582f8c8->enter($__internal_db22c926e3f45e7cea0d0cb19319a602f592c9843152e49156efefa69582f8c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac1552ba7f1d409c272f600d2c18709306aa3d1670bea7117a48589cfa4df559->leave($__internal_ac1552ba7f1d409c272f600d2c18709306aa3d1670bea7117a48589cfa4df559_prof);

        
        $__internal_db22c926e3f45e7cea0d0cb19319a602f592c9843152e49156efefa69582f8c8->leave($__internal_db22c926e3f45e7cea0d0cb19319a602f592c9843152e49156efefa69582f8c8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7a1bd05d40417dc417e95d09c131b832a2744c720508bfcc2a9fdfbaf23fb4d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a1bd05d40417dc417e95d09c131b832a2744c720508bfcc2a9fdfbaf23fb4d4->enter($__internal_7a1bd05d40417dc417e95d09c131b832a2744c720508bfcc2a9fdfbaf23fb4d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cc7438c73861e02fa407e6189c5070354d7350cc5640903ca1cb46e078e1e638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc7438c73861e02fa407e6189c5070354d7350cc5640903ca1cb46e078e1e638->enter($__internal_cc7438c73861e02fa407e6189c5070354d7350cc5640903ca1cb46e078e1e638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_cc7438c73861e02fa407e6189c5070354d7350cc5640903ca1cb46e078e1e638->leave($__internal_cc7438c73861e02fa407e6189c5070354d7350cc5640903ca1cb46e078e1e638_prof);

        
        $__internal_7a1bd05d40417dc417e95d09c131b832a2744c720508bfcc2a9fdfbaf23fb4d4->leave($__internal_7a1bd05d40417dc417e95d09c131b832a2744c720508bfcc2a9fdfbaf23fb4d4_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d2a5687ac49f2e59d84c5c4b2a51846acf9b7946b2ed1cea4359bc69c289ffd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d2a5687ac49f2e59d84c5c4b2a51846acf9b7946b2ed1cea4359bc69c289ffd->enter($__internal_2d2a5687ac49f2e59d84c5c4b2a51846acf9b7946b2ed1cea4359bc69c289ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_89662a8e73b5ab50e640ef5575db6f89612ed03b86e2d33b2a80030754e63bf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89662a8e73b5ab50e640ef5575db6f89612ed03b86e2d33b2a80030754e63bf5->enter($__internal_89662a8e73b5ab50e640ef5575db6f89612ed03b86e2d33b2a80030754e63bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_89662a8e73b5ab50e640ef5575db6f89612ed03b86e2d33b2a80030754e63bf5->leave($__internal_89662a8e73b5ab50e640ef5575db6f89612ed03b86e2d33b2a80030754e63bf5_prof);

        
        $__internal_2d2a5687ac49f2e59d84c5c4b2a51846acf9b7946b2ed1cea4359bc69c289ffd->leave($__internal_2d2a5687ac49f2e59d84c5c4b2a51846acf9b7946b2ed1cea4359bc69c289ffd_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_391e8cb12a3eacbdb73a783320d3f2e260ff012475e58987bcf50626e9145e67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_391e8cb12a3eacbdb73a783320d3f2e260ff012475e58987bcf50626e9145e67->enter($__internal_391e8cb12a3eacbdb73a783320d3f2e260ff012475e58987bcf50626e9145e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f539a8e0f6141bea602c024825be8127d3cbdc3560b3f69239666207979e7c28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f539a8e0f6141bea602c024825be8127d3cbdc3560b3f69239666207979e7c28->enter($__internal_f539a8e0f6141bea602c024825be8127d3cbdc3560b3f69239666207979e7c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_f539a8e0f6141bea602c024825be8127d3cbdc3560b3f69239666207979e7c28->leave($__internal_f539a8e0f6141bea602c024825be8127d3cbdc3560b3f69239666207979e7c28_prof);

        
        $__internal_391e8cb12a3eacbdb73a783320d3f2e260ff012475e58987bcf50626e9145e67->leave($__internal_391e8cb12a3eacbdb73a783320d3f2e260ff012475e58987bcf50626e9145e67_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/4Mains/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
