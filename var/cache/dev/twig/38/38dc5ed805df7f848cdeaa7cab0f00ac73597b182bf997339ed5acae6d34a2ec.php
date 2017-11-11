<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_a8fe31633b9cd1e0d8dfdf67957bf2215e880f4eb9ac23dc01494eb68caecbb9 extends Twig_Template
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
        $__internal_acae54159bcb7d872914a6aeae31f475008678eec9d3ae66dc8c8220ebd5165c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acae54159bcb7d872914a6aeae31f475008678eec9d3ae66dc8c8220ebd5165c->enter($__internal_acae54159bcb7d872914a6aeae31f475008678eec9d3ae66dc8c8220ebd5165c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_3cbdffb44c7348533b9163d8fe08a2debee0eca4e8c1758c6b61d4f11f97a6f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cbdffb44c7348533b9163d8fe08a2debee0eca4e8c1758c6b61d4f11f97a6f6->enter($__internal_3cbdffb44c7348533b9163d8fe08a2debee0eca4e8c1758c6b61d4f11f97a6f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_acae54159bcb7d872914a6aeae31f475008678eec9d3ae66dc8c8220ebd5165c->leave($__internal_acae54159bcb7d872914a6aeae31f475008678eec9d3ae66dc8c8220ebd5165c_prof);

        
        $__internal_3cbdffb44c7348533b9163d8fe08a2debee0eca4e8c1758c6b61d4f11f97a6f6->leave($__internal_3cbdffb44c7348533b9163d8fe08a2debee0eca4e8c1758c6b61d4f11f97a6f6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/var/www/html/4Mains/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
