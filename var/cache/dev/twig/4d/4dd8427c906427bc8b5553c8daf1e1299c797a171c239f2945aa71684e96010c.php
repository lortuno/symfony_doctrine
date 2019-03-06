<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_edd491e51485121f73092a57f60fa94054a5928c308ad920e4a0f28c8b5d7a2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_247cc4e0f2409cebdfde92928003b6e90975917737f2785339d6788b6f7072c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_247cc4e0f2409cebdfde92928003b6e90975917737f2785339d6788b6f7072c9->enter($__internal_247cc4e0f2409cebdfde92928003b6e90975917737f2785339d6788b6f7072c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_a4b18cc3ab60118099680f8c96bb05b061c8077d18d8d55d046c6909ce4e7825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4b18cc3ab60118099680f8c96bb05b061c8077d18d8d55d046c6909ce4e7825->enter($__internal_a4b18cc3ab60118099680f8c96bb05b061c8077d18d8d55d046c6909ce4e7825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_247cc4e0f2409cebdfde92928003b6e90975917737f2785339d6788b6f7072c9->leave($__internal_247cc4e0f2409cebdfde92928003b6e90975917737f2785339d6788b6f7072c9_prof);

        
        $__internal_a4b18cc3ab60118099680f8c96bb05b061c8077d18d8d55d046c6909ce4e7825->leave($__internal_a4b18cc3ab60118099680f8c96bb05b061c8077d18d8d55d046c6909ce4e7825_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_2951854dde148c7c1b0577f3f8db1d7c32c95d22a404bf40d37dffe462baaba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2951854dde148c7c1b0577f3f8db1d7c32c95d22a404bf40d37dffe462baaba9->enter($__internal_2951854dde148c7c1b0577f3f8db1d7c32c95d22a404bf40d37dffe462baaba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_3862ae1c8cbad050f41bd98afad0f4c8448cafc687c925d1f8e6b0397d723180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3862ae1c8cbad050f41bd98afad0f4c8448cafc687c925d1f8e6b0397d723180->enter($__internal_3862ae1c8cbad050f41bd98afad0f4c8448cafc687c925d1f8e6b0397d723180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_3862ae1c8cbad050f41bd98afad0f4c8448cafc687c925d1f8e6b0397d723180->leave($__internal_3862ae1c8cbad050f41bd98afad0f4c8448cafc687c925d1f8e6b0397d723180_prof);

        
        $__internal_2951854dde148c7c1b0577f3f8db1d7c32c95d22a404bf40d37dffe462baaba9->leave($__internal_2951854dde148c7c1b0577f3f8db1d7c32c95d22a404bf40d37dffe462baaba9_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_187b9f39c83918c4d197b15a12658f73c00babc4fd9e5e32307ad9fa65974ecc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_187b9f39c83918c4d197b15a12658f73c00babc4fd9e5e32307ad9fa65974ecc->enter($__internal_187b9f39c83918c4d197b15a12658f73c00babc4fd9e5e32307ad9fa65974ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7085c8442e21ba3f51eb0c649996c26c06391119ec5ecd13794ffe626d8f0875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7085c8442e21ba3f51eb0c649996c26c06391119ec5ecd13794ffe626d8f0875->enter($__internal_7085c8442e21ba3f51eb0c649996c26c06391119ec5ecd13794ffe626d8f0875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_7085c8442e21ba3f51eb0c649996c26c06391119ec5ecd13794ffe626d8f0875->leave($__internal_7085c8442e21ba3f51eb0c649996c26c06391119ec5ecd13794ffe626d8f0875_prof);

        
        $__internal_187b9f39c83918c4d197b15a12658f73c00babc4fd9e5e32307ad9fa65974ecc->leave($__internal_187b9f39c83918c4d197b15a12658f73c00babc4fd9e5e32307ad9fa65974ecc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/info.html.twig");
    }
}
