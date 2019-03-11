<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_c6f92e7b9b68b8f088f788e59a4a31e3e6f88319af8e4cedc2ebd3b9eb7a02e2 extends Twig_Template
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
        $__internal_6437f865fcaa7f2a74a3e04b14cc95f85bbf9bf8e4cf01bdb9051d07c7adb7b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6437f865fcaa7f2a74a3e04b14cc95f85bbf9bf8e4cf01bdb9051d07c7adb7b8->enter($__internal_6437f865fcaa7f2a74a3e04b14cc95f85bbf9bf8e4cf01bdb9051d07c7adb7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_d5cc894eb60fdac52f91ea8ed901c3910034869099a0d5c53ef8ee7eef49bf0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5cc894eb60fdac52f91ea8ed901c3910034869099a0d5c53ef8ee7eef49bf0c->enter($__internal_d5cc894eb60fdac52f91ea8ed901c3910034869099a0d5c53ef8ee7eef49bf0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6437f865fcaa7f2a74a3e04b14cc95f85bbf9bf8e4cf01bdb9051d07c7adb7b8->leave($__internal_6437f865fcaa7f2a74a3e04b14cc95f85bbf9bf8e4cf01bdb9051d07c7adb7b8_prof);

        
        $__internal_d5cc894eb60fdac52f91ea8ed901c3910034869099a0d5c53ef8ee7eef49bf0c->leave($__internal_d5cc894eb60fdac52f91ea8ed901c3910034869099a0d5c53ef8ee7eef49bf0c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_87a8ed88dcf8ea9501b3f88bbcb5d8fd5761125d18167cdb7573db885cb0093e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87a8ed88dcf8ea9501b3f88bbcb5d8fd5761125d18167cdb7573db885cb0093e->enter($__internal_87a8ed88dcf8ea9501b3f88bbcb5d8fd5761125d18167cdb7573db885cb0093e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9ae62a7338f7b3126b46da600aa3a6cca1681181f95129445688d1572e6dc141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ae62a7338f7b3126b46da600aa3a6cca1681181f95129445688d1572e6dc141->enter($__internal_9ae62a7338f7b3126b46da600aa3a6cca1681181f95129445688d1572e6dc141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9ae62a7338f7b3126b46da600aa3a6cca1681181f95129445688d1572e6dc141->leave($__internal_9ae62a7338f7b3126b46da600aa3a6cca1681181f95129445688d1572e6dc141_prof);

        
        $__internal_87a8ed88dcf8ea9501b3f88bbcb5d8fd5761125d18167cdb7573db885cb0093e->leave($__internal_87a8ed88dcf8ea9501b3f88bbcb5d8fd5761125d18167cdb7573db885cb0093e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6933532ddc674b5eb8d6e90291350465e6c3f5ee5a23c82fe1de6bb042c9d0f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6933532ddc674b5eb8d6e90291350465e6c3f5ee5a23c82fe1de6bb042c9d0f6->enter($__internal_6933532ddc674b5eb8d6e90291350465e6c3f5ee5a23c82fe1de6bb042c9d0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1b86564774eb06feff9b660eca232f85515fd55263f664a5dd034632a4a878a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b86564774eb06feff9b660eca232f85515fd55263f664a5dd034632a4a878a0->enter($__internal_1b86564774eb06feff9b660eca232f85515fd55263f664a5dd034632a4a878a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1b86564774eb06feff9b660eca232f85515fd55263f664a5dd034632a4a878a0->leave($__internal_1b86564774eb06feff9b660eca232f85515fd55263f664a5dd034632a4a878a0_prof);

        
        $__internal_6933532ddc674b5eb8d6e90291350465e6c3f5ee5a23c82fe1de6bb042c9d0f6->leave($__internal_6933532ddc674b5eb8d6e90291350465e6c3f5ee5a23c82fe1de6bb042c9d0f6_prof);

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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/home/master/symfony_doctrine/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
