<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_7a98af7d449d2ed881dcd1568bb3734b1ce3a5accff598f64027fadd793cf5c4 extends Twig_Template
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
        $__internal_a55d966f001a8a2625222d5dfbfb6527ec89e752ace27de22be44920c1328eb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a55d966f001a8a2625222d5dfbfb6527ec89e752ace27de22be44920c1328eb4->enter($__internal_a55d966f001a8a2625222d5dfbfb6527ec89e752ace27de22be44920c1328eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_c32def1493c471c5a66c900a34e8c34df412cc34445ca26eb44eb2eb39798ce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c32def1493c471c5a66c900a34e8c34df412cc34445ca26eb44eb2eb39798ce6->enter($__internal_c32def1493c471c5a66c900a34e8c34df412cc34445ca26eb44eb2eb39798ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_a55d966f001a8a2625222d5dfbfb6527ec89e752ace27de22be44920c1328eb4->leave($__internal_a55d966f001a8a2625222d5dfbfb6527ec89e752ace27de22be44920c1328eb4_prof);

        
        $__internal_c32def1493c471c5a66c900a34e8c34df412cc34445ca26eb44eb2eb39798ce6->leave($__internal_c32def1493c471c5a66c900a34e8c34df412cc34445ca26eb44eb2eb39798ce6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/twig-bundle/Resources/views/Exception/traces.xml.twig");
    }
}
