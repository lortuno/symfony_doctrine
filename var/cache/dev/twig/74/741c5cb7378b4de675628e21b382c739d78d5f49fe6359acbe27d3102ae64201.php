<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_979294fd04d63ab3f876ec7e6e23383e20a729257111b1e70a2159ca2475b5ed extends Twig_Template
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
        $__internal_25ff8f1e19d25a0971dcf0b0fabd5184a003a8dbcfc634c24d40f85402644ff9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25ff8f1e19d25a0971dcf0b0fabd5184a003a8dbcfc634c24d40f85402644ff9->enter($__internal_25ff8f1e19d25a0971dcf0b0fabd5184a003a8dbcfc634c24d40f85402644ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_c9141aa3462368d1340efde7789430c004fd2e58cb8734596dbd3bbde5572a84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9141aa3462368d1340efde7789430c004fd2e58cb8734596dbd3bbde5572a84->enter($__internal_c9141aa3462368d1340efde7789430c004fd2e58cb8734596dbd3bbde5572a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_25ff8f1e19d25a0971dcf0b0fabd5184a003a8dbcfc634c24d40f85402644ff9->leave($__internal_25ff8f1e19d25a0971dcf0b0fabd5184a003a8dbcfc634c24d40f85402644ff9_prof);

        
        $__internal_c9141aa3462368d1340efde7789430c004fd2e58cb8734596dbd3bbde5572a84->leave($__internal_c9141aa3462368d1340efde7789430c004fd2e58cb8734596dbd3bbde5572a84_prof);

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
", "@WebProfiler/Profiler/header.html.twig", "/home/master/symfony_doctrine/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/header.html.twig");
    }
}
