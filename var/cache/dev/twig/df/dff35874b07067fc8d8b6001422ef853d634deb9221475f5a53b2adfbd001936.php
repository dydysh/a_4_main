<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_42ad1cda4129fb7dd270a17c73e9d777ce83a5593fdd83dab77160909243549d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49c52eda828cd11eb44cb6048a1bbce42abb1f0b7348ceeb6b8214f8b787a7e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49c52eda828cd11eb44cb6048a1bbce42abb1f0b7348ceeb6b8214f8b787a7e9->enter($__internal_49c52eda828cd11eb44cb6048a1bbce42abb1f0b7348ceeb6b8214f8b787a7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_604adcb81c981a82eb0b55184ad7fd31d2381ed0e6a82fcff550bb3162d21c81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_604adcb81c981a82eb0b55184ad7fd31d2381ed0e6a82fcff550bb3162d21c81->enter($__internal_604adcb81c981a82eb0b55184ad7fd31d2381ed0e6a82fcff550bb3162d21c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_49c52eda828cd11eb44cb6048a1bbce42abb1f0b7348ceeb6b8214f8b787a7e9->leave($__internal_49c52eda828cd11eb44cb6048a1bbce42abb1f0b7348ceeb6b8214f8b787a7e9_prof);

        
        $__internal_604adcb81c981a82eb0b55184ad7fd31d2381ed0e6a82fcff550bb3162d21c81->leave($__internal_604adcb81c981a82eb0b55184ad7fd31d2381ed0e6a82fcff550bb3162d21c81_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_76a75e89e03322b40466d7e7087bd3e84dd70e2ed49f543a38bc07d5063356f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76a75e89e03322b40466d7e7087bd3e84dd70e2ed49f543a38bc07d5063356f4->enter($__internal_76a75e89e03322b40466d7e7087bd3e84dd70e2ed49f543a38bc07d5063356f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_df3d4e43699e4f0117bdd144cea0593c72e15adee2f0118d52cc146a9921fbcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df3d4e43699e4f0117bdd144cea0593c72e15adee2f0118d52cc146a9921fbcb->enter($__internal_df3d4e43699e4f0117bdd144cea0593c72e15adee2f0118d52cc146a9921fbcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_df3d4e43699e4f0117bdd144cea0593c72e15adee2f0118d52cc146a9921fbcb->leave($__internal_df3d4e43699e4f0117bdd144cea0593c72e15adee2f0118d52cc146a9921fbcb_prof);

        
        $__internal_76a75e89e03322b40466d7e7087bd3e84dd70e2ed49f543a38bc07d5063356f4->leave($__internal_76a75e89e03322b40466d7e7087bd3e84dd70e2ed49f543a38bc07d5063356f4_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_a2f6f44b50fb4a6f680f08f9e238a2a23bf14f20b3a1dd9106527712426e5622 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2f6f44b50fb4a6f680f08f9e238a2a23bf14f20b3a1dd9106527712426e5622->enter($__internal_a2f6f44b50fb4a6f680f08f9e238a2a23bf14f20b3a1dd9106527712426e5622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_db238beff18944731022a32441db42d68be5d79f7ea28e9fb457d977249bec1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db238beff18944731022a32441db42d68be5d79f7ea28e9fb457d977249bec1a->enter($__internal_db238beff18944731022a32441db42d68be5d79f7ea28e9fb457d977249bec1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_db238beff18944731022a32441db42d68be5d79f7ea28e9fb457d977249bec1a->leave($__internal_db238beff18944731022a32441db42d68be5d79f7ea28e9fb457d977249bec1a_prof);

        
        $__internal_a2f6f44b50fb4a6f680f08f9e238a2a23bf14f20b3a1dd9106527712426e5622->leave($__internal_a2f6f44b50fb4a6f680f08f9e238a2a23bf14f20b3a1dd9106527712426e5622_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_9470a98817180911b4f9251c23c0fb646f986b858c702f781e27cad509578d43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9470a98817180911b4f9251c23c0fb646f986b858c702f781e27cad509578d43->enter($__internal_9470a98817180911b4f9251c23c0fb646f986b858c702f781e27cad509578d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3bf0fd7d65dde2402c52bec487d8c1145fe8ce901126a25d395f30c044e79058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bf0fd7d65dde2402c52bec487d8c1145fe8ce901126a25d395f30c044e79058->enter($__internal_3bf0fd7d65dde2402c52bec487d8c1145fe8ce901126a25d395f30c044e79058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3bf0fd7d65dde2402c52bec487d8c1145fe8ce901126a25d395f30c044e79058->leave($__internal_3bf0fd7d65dde2402c52bec487d8c1145fe8ce901126a25d395f30c044e79058_prof);

        
        $__internal_9470a98817180911b4f9251c23c0fb646f986b858c702f781e27cad509578d43->leave($__internal_9470a98817180911b4f9251c23c0fb646f986b858c702f781e27cad509578d43_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/4Mains/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
