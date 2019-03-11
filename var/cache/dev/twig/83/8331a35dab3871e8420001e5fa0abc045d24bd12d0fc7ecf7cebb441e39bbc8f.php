<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4fab63d8679efabab7290e6d2de7bc0dea070506f58231a06123675036c1663d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_8aa941b83f86ab77ae9e33b35e1c7ca0658cfa23d61591e3771817a3303871a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aa941b83f86ab77ae9e33b35e1c7ca0658cfa23d61591e3771817a3303871a0->enter($__internal_8aa941b83f86ab77ae9e33b35e1c7ca0658cfa23d61591e3771817a3303871a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f2826d7eeb1158d0b304ef7bfd64398ade10be6a6bc32267b815873fa1f9d884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2826d7eeb1158d0b304ef7bfd64398ade10be6a6bc32267b815873fa1f9d884->enter($__internal_f2826d7eeb1158d0b304ef7bfd64398ade10be6a6bc32267b815873fa1f9d884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8aa941b83f86ab77ae9e33b35e1c7ca0658cfa23d61591e3771817a3303871a0->leave($__internal_8aa941b83f86ab77ae9e33b35e1c7ca0658cfa23d61591e3771817a3303871a0_prof);

        
        $__internal_f2826d7eeb1158d0b304ef7bfd64398ade10be6a6bc32267b815873fa1f9d884->leave($__internal_f2826d7eeb1158d0b304ef7bfd64398ade10be6a6bc32267b815873fa1f9d884_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7a4436b9a4d1e8fd1087085e864b471b9a089fc5339a5f4dc23836161794ad82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a4436b9a4d1e8fd1087085e864b471b9a089fc5339a5f4dc23836161794ad82->enter($__internal_7a4436b9a4d1e8fd1087085e864b471b9a089fc5339a5f4dc23836161794ad82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_75a32123a9ce9d17b5ef3f46c1f0eccd93638b0f72d2f21481d85417aa33798c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75a32123a9ce9d17b5ef3f46c1f0eccd93638b0f72d2f21481d85417aa33798c->enter($__internal_75a32123a9ce9d17b5ef3f46c1f0eccd93638b0f72d2f21481d85417aa33798c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_75a32123a9ce9d17b5ef3f46c1f0eccd93638b0f72d2f21481d85417aa33798c->leave($__internal_75a32123a9ce9d17b5ef3f46c1f0eccd93638b0f72d2f21481d85417aa33798c_prof);

        
        $__internal_7a4436b9a4d1e8fd1087085e864b471b9a089fc5339a5f4dc23836161794ad82->leave($__internal_7a4436b9a4d1e8fd1087085e864b471b9a089fc5339a5f4dc23836161794ad82_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e7b5d1c2bdcedc81b8400f7229b0f6e44a17763c64d763b862b27d0c66ffe735 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7b5d1c2bdcedc81b8400f7229b0f6e44a17763c64d763b862b27d0c66ffe735->enter($__internal_e7b5d1c2bdcedc81b8400f7229b0f6e44a17763c64d763b862b27d0c66ffe735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_dd0c0c62e2e345c7ea63032cc000fa8f03b1751d56e9476eeb9c4971a68a9463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd0c0c62e2e345c7ea63032cc000fa8f03b1751d56e9476eeb9c4971a68a9463->enter($__internal_dd0c0c62e2e345c7ea63032cc000fa8f03b1751d56e9476eeb9c4971a68a9463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_dd0c0c62e2e345c7ea63032cc000fa8f03b1751d56e9476eeb9c4971a68a9463->leave($__internal_dd0c0c62e2e345c7ea63032cc000fa8f03b1751d56e9476eeb9c4971a68a9463_prof);

        
        $__internal_e7b5d1c2bdcedc81b8400f7229b0f6e44a17763c64d763b862b27d0c66ffe735->leave($__internal_e7b5d1c2bdcedc81b8400f7229b0f6e44a17763c64d763b862b27d0c66ffe735_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cc4d064f84a768741c940b46faff8a23c56fd627e9beb2b973cdce9b243e1f54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc4d064f84a768741c940b46faff8a23c56fd627e9beb2b973cdce9b243e1f54->enter($__internal_cc4d064f84a768741c940b46faff8a23c56fd627e9beb2b973cdce9b243e1f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5a9d063f4b4c401cde1aee07cefae4427aed30d2b1624cff69257a70d1eb8318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a9d063f4b4c401cde1aee07cefae4427aed30d2b1624cff69257a70d1eb8318->enter($__internal_5a9d063f4b4c401cde1aee07cefae4427aed30d2b1624cff69257a70d1eb8318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_5a9d063f4b4c401cde1aee07cefae4427aed30d2b1624cff69257a70d1eb8318->leave($__internal_5a9d063f4b4c401cde1aee07cefae4427aed30d2b1624cff69257a70d1eb8318_prof);

        
        $__internal_cc4d064f84a768741c940b46faff8a23c56fd627e9beb2b973cdce9b243e1f54->leave($__internal_cc4d064f84a768741c940b46faff8a23c56fd627e9beb2b973cdce9b243e1f54_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/master/symfony_doctrine/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.html.twig");
    }
}
