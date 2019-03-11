<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_60e7cacfd410b5ef7c9ddb5b848ff5a9221720d9b323e0b101e0735e102675c0 extends Twig_Template
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
        $__internal_88297d7ec475f2fc0c2cb22662acd41cb685b1cb04af8089a35653ae27db33fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88297d7ec475f2fc0c2cb22662acd41cb685b1cb04af8089a35653ae27db33fc->enter($__internal_88297d7ec475f2fc0c2cb22662acd41cb685b1cb04af8089a35653ae27db33fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_3afb7112406db454c75a105063f60195fc065c66532458331a6a532a4238bae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3afb7112406db454c75a105063f60195fc065c66532458331a6a532a4238bae3->enter($__internal_3afb7112406db454c75a105063f60195fc065c66532458331a6a532a4238bae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88297d7ec475f2fc0c2cb22662acd41cb685b1cb04af8089a35653ae27db33fc->leave($__internal_88297d7ec475f2fc0c2cb22662acd41cb685b1cb04af8089a35653ae27db33fc_prof);

        
        $__internal_3afb7112406db454c75a105063f60195fc065c66532458331a6a532a4238bae3->leave($__internal_3afb7112406db454c75a105063f60195fc065c66532458331a6a532a4238bae3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f50a0db4db04c0152bcbf5ac4ce47da8358363278978233d7eb4c2ec04504b19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f50a0db4db04c0152bcbf5ac4ce47da8358363278978233d7eb4c2ec04504b19->enter($__internal_f50a0db4db04c0152bcbf5ac4ce47da8358363278978233d7eb4c2ec04504b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c5ea7fec8d5ebadd4324235d5149d60efc82c39bc800f71f26ecc3b5a7c567ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5ea7fec8d5ebadd4324235d5149d60efc82c39bc800f71f26ecc3b5a7c567ce->enter($__internal_c5ea7fec8d5ebadd4324235d5149d60efc82c39bc800f71f26ecc3b5a7c567ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c5ea7fec8d5ebadd4324235d5149d60efc82c39bc800f71f26ecc3b5a7c567ce->leave($__internal_c5ea7fec8d5ebadd4324235d5149d60efc82c39bc800f71f26ecc3b5a7c567ce_prof);

        
        $__internal_f50a0db4db04c0152bcbf5ac4ce47da8358363278978233d7eb4c2ec04504b19->leave($__internal_f50a0db4db04c0152bcbf5ac4ce47da8358363278978233d7eb4c2ec04504b19_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_d35f0a5638f59e029570a15b335e436bb355cce3773adeceef79cea1ca023852 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d35f0a5638f59e029570a15b335e436bb355cce3773adeceef79cea1ca023852->enter($__internal_d35f0a5638f59e029570a15b335e436bb355cce3773adeceef79cea1ca023852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_90b3459cc7d3d3b82641944c8698b6cec6879dcb88df93700acb470317c4605c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90b3459cc7d3d3b82641944c8698b6cec6879dcb88df93700acb470317c4605c->enter($__internal_90b3459cc7d3d3b82641944c8698b6cec6879dcb88df93700acb470317c4605c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_90b3459cc7d3d3b82641944c8698b6cec6879dcb88df93700acb470317c4605c->leave($__internal_90b3459cc7d3d3b82641944c8698b6cec6879dcb88df93700acb470317c4605c_prof);

        
        $__internal_d35f0a5638f59e029570a15b335e436bb355cce3773adeceef79cea1ca023852->leave($__internal_d35f0a5638f59e029570a15b335e436bb355cce3773adeceef79cea1ca023852_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_05cfeb92e58fe997a28d07ddd769ee1eec58afe72c7b80f9fba141c39bbcaa11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05cfeb92e58fe997a28d07ddd769ee1eec58afe72c7b80f9fba141c39bbcaa11->enter($__internal_05cfeb92e58fe997a28d07ddd769ee1eec58afe72c7b80f9fba141c39bbcaa11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_95855a576da65b664ed70e9b819448d213c550d9c7af779e8281db8f152e6649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95855a576da65b664ed70e9b819448d213c550d9c7af779e8281db8f152e6649->enter($__internal_95855a576da65b664ed70e9b819448d213c550d9c7af779e8281db8f152e6649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_95855a576da65b664ed70e9b819448d213c550d9c7af779e8281db8f152e6649->leave($__internal_95855a576da65b664ed70e9b819448d213c550d9c7af779e8281db8f152e6649_prof);

        
        $__internal_05cfeb92e58fe997a28d07ddd769ee1eec58afe72c7b80f9fba141c39bbcaa11->leave($__internal_05cfeb92e58fe997a28d07ddd769ee1eec58afe72c7b80f9fba141c39bbcaa11_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/home/master/symfony_doctrine/vendor/symfony/twig-bundle/Resources/views/Exception/exception_full.html.twig");
    }
}
