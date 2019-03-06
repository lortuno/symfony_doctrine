<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_4c2686792e1975e826cc6fb8ac4eff74e553aaf37b18eb8c376a49d5c9a9ec8e extends Twig_Template
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
        $__internal_9ef2a0eadb8edcac6b377a9106b907397fc263382fc14127dd260efd95a8865d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ef2a0eadb8edcac6b377a9106b907397fc263382fc14127dd260efd95a8865d->enter($__internal_9ef2a0eadb8edcac6b377a9106b907397fc263382fc14127dd260efd95a8865d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_7aa7940846d1caa91026c95c1c2e65ab2bcbe6a942c84c5a1cdedb3c89a158d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aa7940846d1caa91026c95c1c2e65ab2bcbe6a942c84c5a1cdedb3c89a158d5->enter($__internal_7aa7940846d1caa91026c95c1c2e65ab2bcbe6a942c84c5a1cdedb3c89a158d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_9ef2a0eadb8edcac6b377a9106b907397fc263382fc14127dd260efd95a8865d->leave($__internal_9ef2a0eadb8edcac6b377a9106b907397fc263382fc14127dd260efd95a8865d_prof);

        
        $__internal_7aa7940846d1caa91026c95c1c2e65ab2bcbe6a942c84c5a1cdedb3c89a158d5->leave($__internal_7aa7940846d1caa91026c95c1c2e65ab2bcbe6a942c84c5a1cdedb3c89a158d5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/twig-bundle/Resources/views/Exception/error.js.twig");
    }
}
