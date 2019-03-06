<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_2ecd83fbc8831e1390b021709967e705008835673ec1854a6dd99d96ccb11b91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab09996c2c3150ec4e90eca8f62947f1241cffc8aeb58465d9304acb25e13e03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab09996c2c3150ec4e90eca8f62947f1241cffc8aeb58465d9304acb25e13e03->enter($__internal_ab09996c2c3150ec4e90eca8f62947f1241cffc8aeb58465d9304acb25e13e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_c6fe17aabcf0e8983a2af56b4f25304f46828c6de081cd49f484a35f7252f0d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6fe17aabcf0e8983a2af56b4f25304f46828c6de081cd49f484a35f7252f0d0->enter($__internal_c6fe17aabcf0e8983a2af56b4f25304f46828c6de081cd49f484a35f7252f0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab09996c2c3150ec4e90eca8f62947f1241cffc8aeb58465d9304acb25e13e03->leave($__internal_ab09996c2c3150ec4e90eca8f62947f1241cffc8aeb58465d9304acb25e13e03_prof);

        
        $__internal_c6fe17aabcf0e8983a2af56b4f25304f46828c6de081cd49f484a35f7252f0d0->leave($__internal_c6fe17aabcf0e8983a2af56b4f25304f46828c6de081cd49f484a35f7252f0d0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a586b963413dd41484599e5f7a0bc7664d27f3c9c053635b5d40b7b23e2c8ad3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a586b963413dd41484599e5f7a0bc7664d27f3c9c053635b5d40b7b23e2c8ad3->enter($__internal_a586b963413dd41484599e5f7a0bc7664d27f3c9c053635b5d40b7b23e2c8ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_84f0c6e87c05063e64a2a16f79b8d6c1f299a2365cc3de2f5c1d56abcc936ec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84f0c6e87c05063e64a2a16f79b8d6c1f299a2365cc3de2f5c1d56abcc936ec5->enter($__internal_84f0c6e87c05063e64a2a16f79b8d6c1f299a2365cc3de2f5c1d56abcc936ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_84f0c6e87c05063e64a2a16f79b8d6c1f299a2365cc3de2f5c1d56abcc936ec5->leave($__internal_84f0c6e87c05063e64a2a16f79b8d6c1f299a2365cc3de2f5c1d56abcc936ec5_prof);

        
        $__internal_a586b963413dd41484599e5f7a0bc7664d27f3c9c053635b5d40b7b23e2c8ad3->leave($__internal_a586b963413dd41484599e5f7a0bc7664d27f3c9c053635b5d40b7b23e2c8ad3_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_0cd2ff7a0cb279b2a579e478683bcf96408a08d9bf77ebc7d135f4a6b9c07165 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cd2ff7a0cb279b2a579e478683bcf96408a08d9bf77ebc7d135f4a6b9c07165->enter($__internal_0cd2ff7a0cb279b2a579e478683bcf96408a08d9bf77ebc7d135f4a6b9c07165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e1e310806986e04d1ea437f674813ba95d8bb53ac35f4678e185dcf4f12172ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1e310806986e04d1ea437f674813ba95d8bb53ac35f4678e185dcf4f12172ca->enter($__internal_e1e310806986e04d1ea437f674813ba95d8bb53ac35f4678e185dcf4f12172ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_e1e310806986e04d1ea437f674813ba95d8bb53ac35f4678e185dcf4f12172ca->leave($__internal_e1e310806986e04d1ea437f674813ba95d8bb53ac35f4678e185dcf4f12172ca_prof);

        
        $__internal_0cd2ff7a0cb279b2a579e478683bcf96408a08d9bf77ebc7d135f4a6b9c07165->leave($__internal_0cd2ff7a0cb279b2a579e478683bcf96408a08d9bf77ebc7d135f4a6b9c07165_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/open.html.twig");
    }
}
