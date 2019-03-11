<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_f0b94113f58140e2f6f302a5d9b847ed13a2776c8ec726f63d1da364965e8051 extends Twig_Template
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
        $__internal_1110d80f15d2b3178e70ee879ca409488e71a5f101367a084292bd4a1c3dbcfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1110d80f15d2b3178e70ee879ca409488e71a5f101367a084292bd4a1c3dbcfb->enter($__internal_1110d80f15d2b3178e70ee879ca409488e71a5f101367a084292bd4a1c3dbcfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_35430877c747e34459f55f43c94d7ecf8a979dc80950da8fe4709569d195299b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35430877c747e34459f55f43c94d7ecf8a979dc80950da8fe4709569d195299b->enter($__internal_35430877c747e34459f55f43c94d7ecf8a979dc80950da8fe4709569d195299b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1110d80f15d2b3178e70ee879ca409488e71a5f101367a084292bd4a1c3dbcfb->leave($__internal_1110d80f15d2b3178e70ee879ca409488e71a5f101367a084292bd4a1c3dbcfb_prof);

        
        $__internal_35430877c747e34459f55f43c94d7ecf8a979dc80950da8fe4709569d195299b->leave($__internal_35430877c747e34459f55f43c94d7ecf8a979dc80950da8fe4709569d195299b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3c7f6b45317fce52b9dea3ab31b6bffbb58fcb74b274d7208551ce2a3d0f89eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c7f6b45317fce52b9dea3ab31b6bffbb58fcb74b274d7208551ce2a3d0f89eb->enter($__internal_3c7f6b45317fce52b9dea3ab31b6bffbb58fcb74b274d7208551ce2a3d0f89eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_01095895e5c3dfff78a2c56de95f11874b5651fbd32f58193338bde0339f9fa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01095895e5c3dfff78a2c56de95f11874b5651fbd32f58193338bde0339f9fa6->enter($__internal_01095895e5c3dfff78a2c56de95f11874b5651fbd32f58193338bde0339f9fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_01095895e5c3dfff78a2c56de95f11874b5651fbd32f58193338bde0339f9fa6->leave($__internal_01095895e5c3dfff78a2c56de95f11874b5651fbd32f58193338bde0339f9fa6_prof);

        
        $__internal_3c7f6b45317fce52b9dea3ab31b6bffbb58fcb74b274d7208551ce2a3d0f89eb->leave($__internal_3c7f6b45317fce52b9dea3ab31b6bffbb58fcb74b274d7208551ce2a3d0f89eb_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/home/master/symfony_doctrine/vendor/symfony/web-profiler-bundle/Resources/views/Collector/ajax.html.twig");
    }
}
