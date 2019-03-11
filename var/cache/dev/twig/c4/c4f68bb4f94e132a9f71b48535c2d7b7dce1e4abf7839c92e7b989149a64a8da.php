<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_f6cf579da49bb637d19546c87efb6f95868270119dae7f11afd00f942ef27a92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cdae2d6e35e06c02b24c1e9a00fbf4afd8279f93c140569a892a0c9800c31f50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdae2d6e35e06c02b24c1e9a00fbf4afd8279f93c140569a892a0c9800c31f50->enter($__internal_cdae2d6e35e06c02b24c1e9a00fbf4afd8279f93c140569a892a0c9800c31f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_8ae813a2c286a35259c892d182e014b1af2f3c5b213464af74c08274aa792215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ae813a2c286a35259c892d182e014b1af2f3c5b213464af74c08274aa792215->enter($__internal_8ae813a2c286a35259c892d182e014b1af2f3c5b213464af74c08274aa792215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_cdae2d6e35e06c02b24c1e9a00fbf4afd8279f93c140569a892a0c9800c31f50->leave($__internal_cdae2d6e35e06c02b24c1e9a00fbf4afd8279f93c140569a892a0c9800c31f50_prof);

        
        $__internal_8ae813a2c286a35259c892d182e014b1af2f3c5b213464af74c08274aa792215->leave($__internal_8ae813a2c286a35259c892d182e014b1af2f3c5b213464af74c08274aa792215_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "/home/master/symfony_doctrine/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.css.twig");
    }
}
