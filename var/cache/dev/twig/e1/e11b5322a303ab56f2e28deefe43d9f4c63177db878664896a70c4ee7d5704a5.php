<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_6e1b243971bb48247f08458e4842ebbcd44ebc75b013357f6fcc0aa3a2d34bb2 extends Twig_Template
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
        $__internal_3dbdfc772cc40c63e081eb1b2d096105d2bdaaaff91527b734dc380594158652 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dbdfc772cc40c63e081eb1b2d096105d2bdaaaff91527b734dc380594158652->enter($__internal_3dbdfc772cc40c63e081eb1b2d096105d2bdaaaff91527b734dc380594158652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_5cd76866a2b57d95261faa1e65a417ff3563f59e7f962730ca095406963df407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cd76866a2b57d95261faa1e65a417ff3563f59e7f962730ca095406963df407->enter($__internal_5cd76866a2b57d95261faa1e65a417ff3563f59e7f962730ca095406963df407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dbdfc772cc40c63e081eb1b2d096105d2bdaaaff91527b734dc380594158652->leave($__internal_3dbdfc772cc40c63e081eb1b2d096105d2bdaaaff91527b734dc380594158652_prof);

        
        $__internal_5cd76866a2b57d95261faa1e65a417ff3563f59e7f962730ca095406963df407->leave($__internal_5cd76866a2b57d95261faa1e65a417ff3563f59e7f962730ca095406963df407_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_648f29a335d1e34e19432dac3ef16f806e26d9d7b8c5cc7977f45eba1dc72767 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_648f29a335d1e34e19432dac3ef16f806e26d9d7b8c5cc7977f45eba1dc72767->enter($__internal_648f29a335d1e34e19432dac3ef16f806e26d9d7b8c5cc7977f45eba1dc72767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_71892c31a319ecff1b25037bb0f8276dd7f68301c3382cfb35d430155713ca5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71892c31a319ecff1b25037bb0f8276dd7f68301c3382cfb35d430155713ca5e->enter($__internal_71892c31a319ecff1b25037bb0f8276dd7f68301c3382cfb35d430155713ca5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_71892c31a319ecff1b25037bb0f8276dd7f68301c3382cfb35d430155713ca5e->leave($__internal_71892c31a319ecff1b25037bb0f8276dd7f68301c3382cfb35d430155713ca5e_prof);

        
        $__internal_648f29a335d1e34e19432dac3ef16f806e26d9d7b8c5cc7977f45eba1dc72767->leave($__internal_648f29a335d1e34e19432dac3ef16f806e26d9d7b8c5cc7977f45eba1dc72767_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7ed4a2ea5f6d95c2315e87851f2d5b80d1be7313e74c8d870f85e5e9de296a51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ed4a2ea5f6d95c2315e87851f2d5b80d1be7313e74c8d870f85e5e9de296a51->enter($__internal_7ed4a2ea5f6d95c2315e87851f2d5b80d1be7313e74c8d870f85e5e9de296a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3f551225bb834a263802ae07e420771ca63898219acc5a14c9ee7fdd3957d88b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f551225bb834a263802ae07e420771ca63898219acc5a14c9ee7fdd3957d88b->enter($__internal_3f551225bb834a263802ae07e420771ca63898219acc5a14c9ee7fdd3957d88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_3f551225bb834a263802ae07e420771ca63898219acc5a14c9ee7fdd3957d88b->leave($__internal_3f551225bb834a263802ae07e420771ca63898219acc5a14c9ee7fdd3957d88b_prof);

        
        $__internal_7ed4a2ea5f6d95c2315e87851f2d5b80d1be7313e74c8d870f85e5e9de296a51->leave($__internal_7ed4a2ea5f6d95c2315e87851f2d5b80d1be7313e74c8d870f85e5e9de296a51_prof);

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
", "@WebProfiler/Profiler/info.html.twig", "/home/master/symfony_doctrine/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/info.html.twig");
    }
}
