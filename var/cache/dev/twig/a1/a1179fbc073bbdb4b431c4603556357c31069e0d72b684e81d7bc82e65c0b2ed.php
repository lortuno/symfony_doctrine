<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_ab99f120619ca200a74c19b7b2db72519daa74396fd669db09f3826fe49fcea4 extends Twig_Template
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
        $__internal_e0f31f485230735afb23df400f75c81fa2e12f9cdc2f0c9e9ff42463b21abec7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0f31f485230735afb23df400f75c81fa2e12f9cdc2f0c9e9ff42463b21abec7->enter($__internal_e0f31f485230735afb23df400f75c81fa2e12f9cdc2f0c9e9ff42463b21abec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_143aeb306387756a25919b62b4365dff47ff454ac15c4730f90e82be3cfd8850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_143aeb306387756a25919b62b4365dff47ff454ac15c4730f90e82be3cfd8850->enter($__internal_143aeb306387756a25919b62b4365dff47ff454ac15c4730f90e82be3cfd8850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_e0f31f485230735afb23df400f75c81fa2e12f9cdc2f0c9e9ff42463b21abec7->leave($__internal_e0f31f485230735afb23df400f75c81fa2e12f9cdc2f0c9e9ff42463b21abec7_prof);

        
        $__internal_143aeb306387756a25919b62b4365dff47ff454ac15c4730f90e82be3cfd8850->leave($__internal_143aeb306387756a25919b62b4365dff47ff454ac15c4730f90e82be3cfd8850_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/header.html.twig");
    }
}
