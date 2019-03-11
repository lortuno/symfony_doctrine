<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_6c5d11bafbf0ff908b4d608b8a904a9c688bdefc02fdf3ddbec77654ecf2a346 extends Twig_Template
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
        $__internal_46ca393833f6db9d27f5b8a73452d62ddc19db6c7215def212da1402cd13b03e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46ca393833f6db9d27f5b8a73452d62ddc19db6c7215def212da1402cd13b03e->enter($__internal_46ca393833f6db9d27f5b8a73452d62ddc19db6c7215def212da1402cd13b03e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_3a4d9ea013c2602334349ddaa1af2b71ce5a33e5de677044b6659e0430967e6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a4d9ea013c2602334349ddaa1af2b71ce5a33e5de677044b6659e0430967e6e->enter($__internal_3a4d9ea013c2602334349ddaa1af2b71ce5a33e5de677044b6659e0430967e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

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
        
        $__internal_46ca393833f6db9d27f5b8a73452d62ddc19db6c7215def212da1402cd13b03e->leave($__internal_46ca393833f6db9d27f5b8a73452d62ddc19db6c7215def212da1402cd13b03e_prof);

        
        $__internal_3a4d9ea013c2602334349ddaa1af2b71ce5a33e5de677044b6659e0430967e6e->leave($__internal_3a4d9ea013c2602334349ddaa1af2b71ce5a33e5de677044b6659e0430967e6e_prof);

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
", "@Twig/Exception/traces.xml.twig", "/home/master/symfony_doctrine/vendor/symfony/twig-bundle/Resources/views/Exception/traces.xml.twig");
    }
}
