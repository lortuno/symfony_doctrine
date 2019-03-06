<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6e294318be2d6205a701dd715c116e57e67edad616f159212d4de76553eb3921 extends Twig_Template
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
        $__internal_686a472656638bdc86c0aaea103be79efca614cb73339509f5323c02d3f9b4f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_686a472656638bdc86c0aaea103be79efca614cb73339509f5323c02d3f9b4f9->enter($__internal_686a472656638bdc86c0aaea103be79efca614cb73339509f5323c02d3f9b4f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_10663e8446357dc5eba49c632bf9d00f4207065f11dbb683d19261e9e0a63d5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10663e8446357dc5eba49c632bf9d00f4207065f11dbb683d19261e9e0a63d5f->enter($__internal_10663e8446357dc5eba49c632bf9d00f4207065f11dbb683d19261e9e0a63d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_686a472656638bdc86c0aaea103be79efca614cb73339509f5323c02d3f9b4f9->leave($__internal_686a472656638bdc86c0aaea103be79efca614cb73339509f5323c02d3f9b4f9_prof);

        
        $__internal_10663e8446357dc5eba49c632bf9d00f4207065f11dbb683d19261e9e0a63d5f->leave($__internal_10663e8446357dc5eba49c632bf9d00f4207065f11dbb683d19261e9e0a63d5f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a07ea1709f3d22fdad786d26ee4df678cf65d0b45481221df7aed1884cde6cac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a07ea1709f3d22fdad786d26ee4df678cf65d0b45481221df7aed1884cde6cac->enter($__internal_a07ea1709f3d22fdad786d26ee4df678cf65d0b45481221df7aed1884cde6cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8d6020a12aefb404488fd0670bb55a773e4e22fce2d591b2ab10f808eebbf380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d6020a12aefb404488fd0670bb55a773e4e22fce2d591b2ab10f808eebbf380->enter($__internal_8d6020a12aefb404488fd0670bb55a773e4e22fce2d591b2ab10f808eebbf380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8d6020a12aefb404488fd0670bb55a773e4e22fce2d591b2ab10f808eebbf380->leave($__internal_8d6020a12aefb404488fd0670bb55a773e4e22fce2d591b2ab10f808eebbf380_prof);

        
        $__internal_a07ea1709f3d22fdad786d26ee4df678cf65d0b45481221df7aed1884cde6cac->leave($__internal_a07ea1709f3d22fdad786d26ee4df678cf65d0b45481221df7aed1884cde6cac_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9fefb854a2a08abb4b4d4a0204bb968d0ee2df8dcaddc2a8cfbf596c25ec7451 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fefb854a2a08abb4b4d4a0204bb968d0ee2df8dcaddc2a8cfbf596c25ec7451->enter($__internal_9fefb854a2a08abb4b4d4a0204bb968d0ee2df8dcaddc2a8cfbf596c25ec7451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_27ac2c8aeba801681d2c0b9e97e2611047d9a140ba87234e202ee9ba985b0416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27ac2c8aeba801681d2c0b9e97e2611047d9a140ba87234e202ee9ba985b0416->enter($__internal_27ac2c8aeba801681d2c0b9e97e2611047d9a140ba87234e202ee9ba985b0416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_27ac2c8aeba801681d2c0b9e97e2611047d9a140ba87234e202ee9ba985b0416->leave($__internal_27ac2c8aeba801681d2c0b9e97e2611047d9a140ba87234e202ee9ba985b0416_prof);

        
        $__internal_9fefb854a2a08abb4b4d4a0204bb968d0ee2df8dcaddc2a8cfbf596c25ec7451->leave($__internal_9fefb854a2a08abb4b4d4a0204bb968d0ee2df8dcaddc2a8cfbf596c25ec7451_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a3e957e726c949786df936ef7b6fda4a67c3ecfeb6ac6133e5930aa268dc576 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a3e957e726c949786df936ef7b6fda4a67c3ecfeb6ac6133e5930aa268dc576->enter($__internal_6a3e957e726c949786df936ef7b6fda4a67c3ecfeb6ac6133e5930aa268dc576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ac835fb1a147fe9df2a23a2a0b8f6ace3b9b23a0f5803f7b8e9dd38bd8d22378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac835fb1a147fe9df2a23a2a0b8f6ace3b9b23a0f5803f7b8e9dd38bd8d22378->enter($__internal_ac835fb1a147fe9df2a23a2a0b8f6ace3b9b23a0f5803f7b8e9dd38bd8d22378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ac835fb1a147fe9df2a23a2a0b8f6ace3b9b23a0f5803f7b8e9dd38bd8d22378->leave($__internal_ac835fb1a147fe9df2a23a2a0b8f6ace3b9b23a0f5803f7b8e9dd38bd8d22378_prof);

        
        $__internal_6a3e957e726c949786df936ef7b6fda4a67c3ecfeb6ac6133e5930aa268dc576->leave($__internal_6a3e957e726c949786df936ef7b6fda4a67c3ecfeb6ac6133e5930aa268dc576_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/twig-bundle/Resources/views/Exception/exception_full.html.twig");
    }
}
