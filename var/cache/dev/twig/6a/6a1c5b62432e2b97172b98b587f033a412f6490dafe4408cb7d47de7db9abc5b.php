<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_118f7f56eab5f3d6d7db1d82ec266f3890e4b0f94cfd596f470dd3dc16661766 extends Twig_Template
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
        $__internal_608e042f2d3108adafc465d8c173b2c2fdd4de629ba1f518a17aeabbf4b8ef9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_608e042f2d3108adafc465d8c173b2c2fdd4de629ba1f518a17aeabbf4b8ef9e->enter($__internal_608e042f2d3108adafc465d8c173b2c2fdd4de629ba1f518a17aeabbf4b8ef9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_430635a5930142af42ec50f854e1094e04ba662de7e7e316c15f6997c46284e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_430635a5930142af42ec50f854e1094e04ba662de7e7e316c15f6997c46284e4->enter($__internal_430635a5930142af42ec50f854e1094e04ba662de7e7e316c15f6997c46284e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_608e042f2d3108adafc465d8c173b2c2fdd4de629ba1f518a17aeabbf4b8ef9e->leave($__internal_608e042f2d3108adafc465d8c173b2c2fdd4de629ba1f518a17aeabbf4b8ef9e_prof);

        
        $__internal_430635a5930142af42ec50f854e1094e04ba662de7e7e316c15f6997c46284e4->leave($__internal_430635a5930142af42ec50f854e1094e04ba662de7e7e316c15f6997c46284e4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ad07a53ea5aea9eff9096f6e682f2222648bdaa524736a35e227cd186b15d266 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad07a53ea5aea9eff9096f6e682f2222648bdaa524736a35e227cd186b15d266->enter($__internal_ad07a53ea5aea9eff9096f6e682f2222648bdaa524736a35e227cd186b15d266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e844cddee8729519137df2ed66b5b174cb3f0294869a609ae8ed6e92fdd916e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e844cddee8729519137df2ed66b5b174cb3f0294869a609ae8ed6e92fdd916e2->enter($__internal_e844cddee8729519137df2ed66b5b174cb3f0294869a609ae8ed6e92fdd916e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e844cddee8729519137df2ed66b5b174cb3f0294869a609ae8ed6e92fdd916e2->leave($__internal_e844cddee8729519137df2ed66b5b174cb3f0294869a609ae8ed6e92fdd916e2_prof);

        
        $__internal_ad07a53ea5aea9eff9096f6e682f2222648bdaa524736a35e227cd186b15d266->leave($__internal_ad07a53ea5aea9eff9096f6e682f2222648bdaa524736a35e227cd186b15d266_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9b4e64603b890342610951e0e2b5f2dcdade68f135aa9a6e1e762435d1d4b473 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b4e64603b890342610951e0e2b5f2dcdade68f135aa9a6e1e762435d1d4b473->enter($__internal_9b4e64603b890342610951e0e2b5f2dcdade68f135aa9a6e1e762435d1d4b473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_94b3024ae8fc54b602e478f44a6002449e233cb8c7080be0b8bdacb9d9eed6c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94b3024ae8fc54b602e478f44a6002449e233cb8c7080be0b8bdacb9d9eed6c7->enter($__internal_94b3024ae8fc54b602e478f44a6002449e233cb8c7080be0b8bdacb9d9eed6c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_94b3024ae8fc54b602e478f44a6002449e233cb8c7080be0b8bdacb9d9eed6c7->leave($__internal_94b3024ae8fc54b602e478f44a6002449e233cb8c7080be0b8bdacb9d9eed6c7_prof);

        
        $__internal_9b4e64603b890342610951e0e2b5f2dcdade68f135aa9a6e1e762435d1d4b473->leave($__internal_9b4e64603b890342610951e0e2b5f2dcdade68f135aa9a6e1e762435d1d4b473_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6294046e9577edc989e0bf43424b19d645c7a63d86bc142e6712981f4d26a304 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6294046e9577edc989e0bf43424b19d645c7a63d86bc142e6712981f4d26a304->enter($__internal_6294046e9577edc989e0bf43424b19d645c7a63d86bc142e6712981f4d26a304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_48cd58dd5e2e618654b3b102caeeb1bc08224e6218f5585f8825cc9cf864d0aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48cd58dd5e2e618654b3b102caeeb1bc08224e6218f5585f8825cc9cf864d0aa->enter($__internal_48cd58dd5e2e618654b3b102caeeb1bc08224e6218f5585f8825cc9cf864d0aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_48cd58dd5e2e618654b3b102caeeb1bc08224e6218f5585f8825cc9cf864d0aa->leave($__internal_48cd58dd5e2e618654b3b102caeeb1bc08224e6218f5585f8825cc9cf864d0aa_prof);

        
        $__internal_6294046e9577edc989e0bf43424b19d645c7a63d86bc142e6712981f4d26a304->leave($__internal_6294046e9577edc989e0bf43424b19d645c7a63d86bc142e6712981f4d26a304_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/master/symfony_doctrine/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
