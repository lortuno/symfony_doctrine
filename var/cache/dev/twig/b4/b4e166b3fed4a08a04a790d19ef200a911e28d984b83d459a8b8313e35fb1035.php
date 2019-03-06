<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0bf5a89816cb1523b324ee846da8e744b796700ca3dc96558c6e03508389a813 extends Twig_Template
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
        $__internal_1474747ec0dde0c34847da6a148a4053a632b9fb91ca67eea1e942e2775b6f79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1474747ec0dde0c34847da6a148a4053a632b9fb91ca67eea1e942e2775b6f79->enter($__internal_1474747ec0dde0c34847da6a148a4053a632b9fb91ca67eea1e942e2775b6f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_358d6e8e0d1d75d9b8c4dcf39d88f4dad8550aa7b7656d09e171590ec05a73e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_358d6e8e0d1d75d9b8c4dcf39d88f4dad8550aa7b7656d09e171590ec05a73e9->enter($__internal_358d6e8e0d1d75d9b8c4dcf39d88f4dad8550aa7b7656d09e171590ec05a73e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1474747ec0dde0c34847da6a148a4053a632b9fb91ca67eea1e942e2775b6f79->leave($__internal_1474747ec0dde0c34847da6a148a4053a632b9fb91ca67eea1e942e2775b6f79_prof);

        
        $__internal_358d6e8e0d1d75d9b8c4dcf39d88f4dad8550aa7b7656d09e171590ec05a73e9->leave($__internal_358d6e8e0d1d75d9b8c4dcf39d88f4dad8550aa7b7656d09e171590ec05a73e9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9e96069c7885ad3f73e0553f3090d9983c1c4a06d0f3c2622404229364928308 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e96069c7885ad3f73e0553f3090d9983c1c4a06d0f3c2622404229364928308->enter($__internal_9e96069c7885ad3f73e0553f3090d9983c1c4a06d0f3c2622404229364928308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e2779a2f7d8e9884d2b68825ceb5e36905af5507cda163b882eedaf9c5a1bdd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2779a2f7d8e9884d2b68825ceb5e36905af5507cda163b882eedaf9c5a1bdd4->enter($__internal_e2779a2f7d8e9884d2b68825ceb5e36905af5507cda163b882eedaf9c5a1bdd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e2779a2f7d8e9884d2b68825ceb5e36905af5507cda163b882eedaf9c5a1bdd4->leave($__internal_e2779a2f7d8e9884d2b68825ceb5e36905af5507cda163b882eedaf9c5a1bdd4_prof);

        
        $__internal_9e96069c7885ad3f73e0553f3090d9983c1c4a06d0f3c2622404229364928308->leave($__internal_9e96069c7885ad3f73e0553f3090d9983c1c4a06d0f3c2622404229364928308_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d0bfaaba2f1f41a915fa1777e4c8207b99c6cd130936e8bd7f78237b89509a7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0bfaaba2f1f41a915fa1777e4c8207b99c6cd130936e8bd7f78237b89509a7b->enter($__internal_d0bfaaba2f1f41a915fa1777e4c8207b99c6cd130936e8bd7f78237b89509a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_de3dac3cbe1e899055895131ca466b0f3f80885b2640bd23e931fc3a4add4b3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de3dac3cbe1e899055895131ca466b0f3f80885b2640bd23e931fc3a4add4b3b->enter($__internal_de3dac3cbe1e899055895131ca466b0f3f80885b2640bd23e931fc3a4add4b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_de3dac3cbe1e899055895131ca466b0f3f80885b2640bd23e931fc3a4add4b3b->leave($__internal_de3dac3cbe1e899055895131ca466b0f3f80885b2640bd23e931fc3a4add4b3b_prof);

        
        $__internal_d0bfaaba2f1f41a915fa1777e4c8207b99c6cd130936e8bd7f78237b89509a7b->leave($__internal_d0bfaaba2f1f41a915fa1777e4c8207b99c6cd130936e8bd7f78237b89509a7b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1ccd1c8b95c3aa1dfa98f784c6cba8894b2d92a1fab5e7f6dea2d85ac3c640a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ccd1c8b95c3aa1dfa98f784c6cba8894b2d92a1fab5e7f6dea2d85ac3c640a0->enter($__internal_1ccd1c8b95c3aa1dfa98f784c6cba8894b2d92a1fab5e7f6dea2d85ac3c640a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e0ca5b3db9d2bcfa86a6d517321eecf69be12be95f9e03af1001e4f1958d9ea8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0ca5b3db9d2bcfa86a6d517321eecf69be12be95f9e03af1001e4f1958d9ea8->enter($__internal_e0ca5b3db9d2bcfa86a6d517321eecf69be12be95f9e03af1001e4f1958d9ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_e0ca5b3db9d2bcfa86a6d517321eecf69be12be95f9e03af1001e4f1958d9ea8->leave($__internal_e0ca5b3db9d2bcfa86a6d517321eecf69be12be95f9e03af1001e4f1958d9ea8_prof);

        
        $__internal_1ccd1c8b95c3aa1dfa98f784c6cba8894b2d92a1fab5e7f6dea2d85ac3c640a0->leave($__internal_1ccd1c8b95c3aa1dfa98f784c6cba8894b2d92a1fab5e7f6dea2d85ac3c640a0_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
