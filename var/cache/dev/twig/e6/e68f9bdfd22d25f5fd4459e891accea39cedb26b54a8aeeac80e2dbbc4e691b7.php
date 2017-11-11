<?php

/* ::base.html.twig */
class __TwigTemplate_3698a5049a95d96cd35abee4dbe42043aec1c3ce4b593cfad74f69e93521450f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1894a378924f808cb513897528dac8f1edcda331e3cd39d8c076f4d362186337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1894a378924f808cb513897528dac8f1edcda331e3cd39d8c076f4d362186337->enter($__internal_1894a378924f808cb513897528dac8f1edcda331e3cd39d8c076f4d362186337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_a06bb9ae4c6cf30befca0cd66ccae95e30f94f2d3100548b77bf1d04a5babcd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a06bb9ae4c6cf30befca0cd66ccae95e30f94f2d3100548b77bf1d04a5babcd2->enter($__internal_a06bb9ae4c6cf30befca0cd66ccae95e30f94f2d3100548b77bf1d04a5babcd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/platformbundle/Resources/public/css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/platformbundle/Resources/public/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    </head>
    <body>
        ";
        // line 15
        $this->displayBlock('header', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 18
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    </body>
</html>
";
        
        $__internal_1894a378924f808cb513897528dac8f1edcda331e3cd39d8c076f4d362186337->leave($__internal_1894a378924f808cb513897528dac8f1edcda331e3cd39d8c076f4d362186337_prof);

        
        $__internal_a06bb9ae4c6cf30befca0cd66ccae95e30f94f2d3100548b77bf1d04a5babcd2->leave($__internal_a06bb9ae4c6cf30befca0cd66ccae95e30f94f2d3100548b77bf1d04a5babcd2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf3b63857a45adb56542f483d0f5866b8e1d41e848c3745ecc97e43fb64faa28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf3b63857a45adb56542f483d0f5866b8e1d41e848c3745ecc97e43fb64faa28->enter($__internal_bf3b63857a45adb56542f483d0f5866b8e1d41e848c3745ecc97e43fb64faa28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cf76253f9822311f3f213c5a1f74db4d38889cc41fea59b3ecb844cfe06a1521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf76253f9822311f3f213c5a1f74db4d38889cc41fea59b3ecb844cfe06a1521->enter($__internal_cf76253f9822311f3f213c5a1f74db4d38889cc41fea59b3ecb844cfe06a1521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "À 4 Mains";
        
        $__internal_cf76253f9822311f3f213c5a1f74db4d38889cc41fea59b3ecb844cfe06a1521->leave($__internal_cf76253f9822311f3f213c5a1f74db4d38889cc41fea59b3ecb844cfe06a1521_prof);

        
        $__internal_bf3b63857a45adb56542f483d0f5866b8e1d41e848c3745ecc97e43fb64faa28->leave($__internal_bf3b63857a45adb56542f483d0f5866b8e1d41e848c3745ecc97e43fb64faa28_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5888833a9043d28fb7de3ec397ed9239498f79536037e372ad2b630024d05e44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5888833a9043d28fb7de3ec397ed9239498f79536037e372ad2b630024d05e44->enter($__internal_5888833a9043d28fb7de3ec397ed9239498f79536037e372ad2b630024d05e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_58adf64a52e40d8f36c26a4481e1233ac2128930c0a683b594e3a6db86f741e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58adf64a52e40d8f36c26a4481e1233ac2128930c0a683b594e3a6db86f741e4->enter($__internal_58adf64a52e40d8f36c26a4481e1233ac2128930c0a683b594e3a6db86f741e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_58adf64a52e40d8f36c26a4481e1233ac2128930c0a683b594e3a6db86f741e4->leave($__internal_58adf64a52e40d8f36c26a4481e1233ac2128930c0a683b594e3a6db86f741e4_prof);

        
        $__internal_5888833a9043d28fb7de3ec397ed9239498f79536037e372ad2b630024d05e44->leave($__internal_5888833a9043d28fb7de3ec397ed9239498f79536037e372ad2b630024d05e44_prof);

    }

    // line 15
    public function block_header($context, array $blocks = array())
    {
        $__internal_47cc36ceb2632a486ad907bcb1682bde5e2dfa8b5347d87db7d033dfeb8d800e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47cc36ceb2632a486ad907bcb1682bde5e2dfa8b5347d87db7d033dfeb8d800e->enter($__internal_47cc36ceb2632a486ad907bcb1682bde5e2dfa8b5347d87db7d033dfeb8d800e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_97333bdaffae46a1719fef9065b7648065e82213665f878811b3682061c72423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97333bdaffae46a1719fef9065b7648065e82213665f878811b3682061c72423->enter($__internal_97333bdaffae46a1719fef9065b7648065e82213665f878811b3682061c72423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_97333bdaffae46a1719fef9065b7648065e82213665f878811b3682061c72423->leave($__internal_97333bdaffae46a1719fef9065b7648065e82213665f878811b3682061c72423_prof);

        
        $__internal_47cc36ceb2632a486ad907bcb1682bde5e2dfa8b5347d87db7d033dfeb8d800e->leave($__internal_47cc36ceb2632a486ad907bcb1682bde5e2dfa8b5347d87db7d033dfeb8d800e_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea07e7f57d874ccec187a3b117b973336cba544d9df79609f2b122c6fae1169d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea07e7f57d874ccec187a3b117b973336cba544d9df79609f2b122c6fae1169d->enter($__internal_ea07e7f57d874ccec187a3b117b973336cba544d9df79609f2b122c6fae1169d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_34ccc7d3b13924372b822ac29a0e58eef3e2f3536313e68f6f4ce18e5c28ae2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34ccc7d3b13924372b822ac29a0e58eef3e2f3536313e68f6f4ce18e5c28ae2c->enter($__internal_34ccc7d3b13924372b822ac29a0e58eef3e2f3536313e68f6f4ce18e5c28ae2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_34ccc7d3b13924372b822ac29a0e58eef3e2f3536313e68f6f4ce18e5c28ae2c->leave($__internal_34ccc7d3b13924372b822ac29a0e58eef3e2f3536313e68f6f4ce18e5c28ae2c_prof);

        
        $__internal_ea07e7f57d874ccec187a3b117b973336cba544d9df79609f2b122c6fae1169d->leave($__internal_ea07e7f57d874ccec187a3b117b973336cba544d9df79609f2b122c6fae1169d_prof);

    }

    // line 17
    public function block_footer($context, array $blocks = array())
    {
        $__internal_526497389f01f1758d9d6f41226c9751f4bf08d384b52d401a28b88e2022cd29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_526497389f01f1758d9d6f41226c9751f4bf08d384b52d401a28b88e2022cd29->enter($__internal_526497389f01f1758d9d6f41226c9751f4bf08d384b52d401a28b88e2022cd29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_f5d74813fba8183e02c4d02e56ecf88b07cb1a71318713dc7792aa531a2ffd34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5d74813fba8183e02c4d02e56ecf88b07cb1a71318713dc7792aa531a2ffd34->enter($__internal_f5d74813fba8183e02c4d02e56ecf88b07cb1a71318713dc7792aa531a2ffd34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_f5d74813fba8183e02c4d02e56ecf88b07cb1a71318713dc7792aa531a2ffd34->leave($__internal_f5d74813fba8183e02c4d02e56ecf88b07cb1a71318713dc7792aa531a2ffd34_prof);

        
        $__internal_526497389f01f1758d9d6f41226c9751f4bf08d384b52d401a28b88e2022cd29->leave($__internal_526497389f01f1758d9d6f41226c9751f4bf08d384b52d401a28b88e2022cd29_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_650ae3725897b34a7e111df093865ce14cefeb95d2456641390b8b9924b80988 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_650ae3725897b34a7e111df093865ce14cefeb95d2456641390b8b9924b80988->enter($__internal_650ae3725897b34a7e111df093865ce14cefeb95d2456641390b8b9924b80988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8c171a7cf55b65b7fceceddb334853ca629cb75f1b948aba83532634eb82d16b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c171a7cf55b65b7fceceddb334853ca629cb75f1b948aba83532634eb82d16b->enter($__internal_8c171a7cf55b65b7fceceddb334853ca629cb75f1b948aba83532634eb82d16b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8c171a7cf55b65b7fceceddb334853ca629cb75f1b948aba83532634eb82d16b->leave($__internal_8c171a7cf55b65b7fceceddb334853ca629cb75f1b948aba83532634eb82d16b_prof);

        
        $__internal_650ae3725897b34a7e111df093865ce14cefeb95d2456641390b8b9924b80988->leave($__internal_650ae3725897b34a7e111df093865ce14cefeb95d2456641390b8b9924b80988_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 18,  153 => 17,  136 => 16,  119 => 15,  102 => 6,  84 => 5,  72 => 19,  69 => 18,  66 => 17,  63 => 16,  61 => 15,  53 => 10,  49 => 9,  43 => 7,  41 => 6,  37 => 5,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}À 4 Mains{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/platformbundle/Resources/public/css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/platformbundle/Resources/public/font-awesome/css/font-awesome.min.css') }}\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    </head>
    <body>
        {% block header %}{% endblock %}
        {% block body %}{% endblock %}
        {% block footer %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/html/4Mains/app/Resources/views/base.html.twig");
    }
}
