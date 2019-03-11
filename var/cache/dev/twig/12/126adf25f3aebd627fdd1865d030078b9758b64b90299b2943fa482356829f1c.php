<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_849746790155d9f8813dad42f767c9255ee64512a7cc87c0cc87acd2f428b958 extends Twig_Template
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
        $__internal_2d35f0d2af6724a1de311f1e08a71f2c037e5548727af239212281ccc6b921b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d35f0d2af6724a1de311f1e08a71f2c037e5548727af239212281ccc6b921b0->enter($__internal_2d35f0d2af6724a1de311f1e08a71f2c037e5548727af239212281ccc6b921b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_56d041fe9325f946de4366a89cbdce886f237d423dcbd85ef29eb5e47e7a3852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56d041fe9325f946de4366a89cbdce886f237d423dcbd85ef29eb5e47e7a3852->enter($__internal_56d041fe9325f946de4366a89cbdce886f237d423dcbd85ef29eb5e47e7a3852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d35f0d2af6724a1de311f1e08a71f2c037e5548727af239212281ccc6b921b0->leave($__internal_2d35f0d2af6724a1de311f1e08a71f2c037e5548727af239212281ccc6b921b0_prof);

        
        $__internal_56d041fe9325f946de4366a89cbdce886f237d423dcbd85ef29eb5e47e7a3852->leave($__internal_56d041fe9325f946de4366a89cbdce886f237d423dcbd85ef29eb5e47e7a3852_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e111c254163c295f2d8e66f7418ace1fb4c92add2e60046e74e61bfc9923dfb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e111c254163c295f2d8e66f7418ace1fb4c92add2e60046e74e61bfc9923dfb4->enter($__internal_e111c254163c295f2d8e66f7418ace1fb4c92add2e60046e74e61bfc9923dfb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_27cf568c51bb4fd24b79141b00023c07e104732b0f8193e65e45b2d887f4f943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27cf568c51bb4fd24b79141b00023c07e104732b0f8193e65e45b2d887f4f943->enter($__internal_27cf568c51bb4fd24b79141b00023c07e104732b0f8193e65e45b2d887f4f943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_27cf568c51bb4fd24b79141b00023c07e104732b0f8193e65e45b2d887f4f943->leave($__internal_27cf568c51bb4fd24b79141b00023c07e104732b0f8193e65e45b2d887f4f943_prof);

        
        $__internal_e111c254163c295f2d8e66f7418ace1fb4c92add2e60046e74e61bfc9923dfb4->leave($__internal_e111c254163c295f2d8e66f7418ace1fb4c92add2e60046e74e61bfc9923dfb4_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8578b53b564d2c8384f26d3603935116bc42e5285c5bc7b5f4b11dcd585256de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8578b53b564d2c8384f26d3603935116bc42e5285c5bc7b5f4b11dcd585256de->enter($__internal_8578b53b564d2c8384f26d3603935116bc42e5285c5bc7b5f4b11dcd585256de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_34d77e7e5dd5d7c498b5721227ba5cc784a38769551dfa9308f46dd677671513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34d77e7e5dd5d7c498b5721227ba5cc784a38769551dfa9308f46dd677671513->enter($__internal_34d77e7e5dd5d7c498b5721227ba5cc784a38769551dfa9308f46dd677671513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_34d77e7e5dd5d7c498b5721227ba5cc784a38769551dfa9308f46dd677671513->leave($__internal_34d77e7e5dd5d7c498b5721227ba5cc784a38769551dfa9308f46dd677671513_prof);

        
        $__internal_8578b53b564d2c8384f26d3603935116bc42e5285c5bc7b5f4b11dcd585256de->leave($__internal_8578b53b564d2c8384f26d3603935116bc42e5285c5bc7b5f4b11dcd585256de_prof);

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
", "@WebProfiler/Profiler/open.html.twig", "/home/master/symfony_doctrine/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/open.html.twig");
    }
}
