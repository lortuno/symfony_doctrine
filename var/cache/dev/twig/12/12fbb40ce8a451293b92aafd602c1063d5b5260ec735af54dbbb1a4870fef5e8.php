<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_67abef3408df097b50ef9fe3f17440151e7b8b7236dd83245c02b12d99507eb1 extends Twig_Template
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
        $__internal_4cd47ede64549bf77c8a56f0927c920828cd4ad93751db49328ac6d18ccb2b6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cd47ede64549bf77c8a56f0927c920828cd4ad93751db49328ac6d18ccb2b6c->enter($__internal_4cd47ede64549bf77c8a56f0927c920828cd4ad93751db49328ac6d18ccb2b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_73831f8933ebbf643907785287d78409bb577bfb1261c548320a3f8e53f6740e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73831f8933ebbf643907785287d78409bb577bfb1261c548320a3f8e53f6740e->enter($__internal_73831f8933ebbf643907785287d78409bb577bfb1261c548320a3f8e53f6740e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cd47ede64549bf77c8a56f0927c920828cd4ad93751db49328ac6d18ccb2b6c->leave($__internal_4cd47ede64549bf77c8a56f0927c920828cd4ad93751db49328ac6d18ccb2b6c_prof);

        
        $__internal_73831f8933ebbf643907785287d78409bb577bfb1261c548320a3f8e53f6740e->leave($__internal_73831f8933ebbf643907785287d78409bb577bfb1261c548320a3f8e53f6740e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4c5ce28cc0c6ef71df3da3ce264869102b7e56a1b9bcbccb4a024a91b23585b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c5ce28cc0c6ef71df3da3ce264869102b7e56a1b9bcbccb4a024a91b23585b1->enter($__internal_4c5ce28cc0c6ef71df3da3ce264869102b7e56a1b9bcbccb4a024a91b23585b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b86e1102d5e2cb744fcf46fe6fdf71642fc172e81031a83ce85edb191b01e964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b86e1102d5e2cb744fcf46fe6fdf71642fc172e81031a83ce85edb191b01e964->enter($__internal_b86e1102d5e2cb744fcf46fe6fdf71642fc172e81031a83ce85edb191b01e964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_b86e1102d5e2cb744fcf46fe6fdf71642fc172e81031a83ce85edb191b01e964->leave($__internal_b86e1102d5e2cb744fcf46fe6fdf71642fc172e81031a83ce85edb191b01e964_prof);

        
        $__internal_4c5ce28cc0c6ef71df3da3ce264869102b7e56a1b9bcbccb4a024a91b23585b1->leave($__internal_4c5ce28cc0c6ef71df3da3ce264869102b7e56a1b9bcbccb4a024a91b23585b1_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/web-profiler-bundle/Resources/views/Collector/ajax.html.twig");
    }
}
