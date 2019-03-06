<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_08a70904da6b87a51fe8d4ad889437823b85fae7be3aefef462e63c1451bb881 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e489c0ac1f615b257c956d35a101a05a8b39d9a5a38535523dcad11aebe208e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e489c0ac1f615b257c956d35a101a05a8b39d9a5a38535523dcad11aebe208e6->enter($__internal_e489c0ac1f615b257c956d35a101a05a8b39d9a5a38535523dcad11aebe208e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_1d186b076e94a2736c20b2285adaaccd3be17c4c1b2998975ac5111c3b41fc37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d186b076e94a2736c20b2285adaaccd3be17c4c1b2998975ac5111c3b41fc37->enter($__internal_1d186b076e94a2736c20b2285adaaccd3be17c4c1b2998975ac5111c3b41fc37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e489c0ac1f615b257c956d35a101a05a8b39d9a5a38535523dcad11aebe208e6->leave($__internal_e489c0ac1f615b257c956d35a101a05a8b39d9a5a38535523dcad11aebe208e6_prof);

        
        $__internal_1d186b076e94a2736c20b2285adaaccd3be17c4c1b2998975ac5111c3b41fc37->leave($__internal_1d186b076e94a2736c20b2285adaaccd3be17c4c1b2998975ac5111c3b41fc37_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_52d0852771874b44f42717cce57ce9077a505f73ebaf3f6a6eedea64a3e3e9d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52d0852771874b44f42717cce57ce9077a505f73ebaf3f6a6eedea64a3e3e9d9->enter($__internal_52d0852771874b44f42717cce57ce9077a505f73ebaf3f6a6eedea64a3e3e9d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d1f871420aea98122f26c17168d2aaca43ed04aabc26d5f8771cc4d091befcf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1f871420aea98122f26c17168d2aaca43ed04aabc26d5f8771cc4d091befcf0->enter($__internal_d1f871420aea98122f26c17168d2aaca43ed04aabc26d5f8771cc4d091befcf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d1f871420aea98122f26c17168d2aaca43ed04aabc26d5f8771cc4d091befcf0->leave($__internal_d1f871420aea98122f26c17168d2aaca43ed04aabc26d5f8771cc4d091befcf0_prof);

        
        $__internal_52d0852771874b44f42717cce57ce9077a505f73ebaf3f6a6eedea64a3e3e9d9->leave($__internal_52d0852771874b44f42717cce57ce9077a505f73ebaf3f6a6eedea64a3e3e9d9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
