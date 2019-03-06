<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_6747fa2fd05c1c9703e710979f6eee494181b3446c8b0266dbba2de0d166bba2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_260406d5a49eaae76eb10207f9cfaece02e8d9468aa95cf691541aa0f3178ba0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_260406d5a49eaae76eb10207f9cfaece02e8d9468aa95cf691541aa0f3178ba0->enter($__internal_260406d5a49eaae76eb10207f9cfaece02e8d9468aa95cf691541aa0f3178ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_0d5682716c259f552c12c033cf253e3b3ec33a9236afa794c16e9c2b7107b655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d5682716c259f552c12c033cf253e3b3ec33a9236afa794c16e9c2b7107b655->enter($__internal_0d5682716c259f552c12c033cf253e3b3ec33a9236afa794c16e9c2b7107b655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_260406d5a49eaae76eb10207f9cfaece02e8d9468aa95cf691541aa0f3178ba0->leave($__internal_260406d5a49eaae76eb10207f9cfaece02e8d9468aa95cf691541aa0f3178ba0_prof);

        
        $__internal_0d5682716c259f552c12c033cf253e3b3ec33a9236afa794c16e9c2b7107b655->leave($__internal_0d5682716c259f552c12c033cf253e3b3ec33a9236afa794c16e9c2b7107b655_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_54ea55cf85a9804f29fb2684d83cafd7a697ebfe5b7a70fabc907bd3680b3667 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54ea55cf85a9804f29fb2684d83cafd7a697ebfe5b7a70fabc907bd3680b3667->enter($__internal_54ea55cf85a9804f29fb2684d83cafd7a697ebfe5b7a70fabc907bd3680b3667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_362eb2d11d78b2a1c3a293931c0231bee664b8362249ced116d3f0550da905be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_362eb2d11d78b2a1c3a293931c0231bee664b8362249ced116d3f0550da905be->enter($__internal_362eb2d11d78b2a1c3a293931c0231bee664b8362249ced116d3f0550da905be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_362eb2d11d78b2a1c3a293931c0231bee664b8362249ced116d3f0550da905be->leave($__internal_362eb2d11d78b2a1c3a293931c0231bee664b8362249ced116d3f0550da905be_prof);

        
        $__internal_54ea55cf85a9804f29fb2684d83cafd7a697ebfe5b7a70fabc907bd3680b3667->leave($__internal_54ea55cf85a9804f29fb2684d83cafd7a697ebfe5b7a70fabc907bd3680b3667_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e606af30fbacefe02af75947c813edd4d07fd4005b20285da9e811650d619aa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e606af30fbacefe02af75947c813edd4d07fd4005b20285da9e811650d619aa0->enter($__internal_e606af30fbacefe02af75947c813edd4d07fd4005b20285da9e811650d619aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4779d74c0ec93ca46d081d71596857e21a8b529623b48ec67184f9c764fc9db5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4779d74c0ec93ca46d081d71596857e21a8b529623b48ec67184f9c764fc9db5->enter($__internal_4779d74c0ec93ca46d081d71596857e21a8b529623b48ec67184f9c764fc9db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_4779d74c0ec93ca46d081d71596857e21a8b529623b48ec67184f9c764fc9db5->leave($__internal_4779d74c0ec93ca46d081d71596857e21a8b529623b48ec67184f9c764fc9db5_prof);

        
        $__internal_e606af30fbacefe02af75947c813edd4d07fd4005b20285da9e811650d619aa0->leave($__internal_e606af30fbacefe02af75947c813edd4d07fd4005b20285da9e811650d619aa0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
