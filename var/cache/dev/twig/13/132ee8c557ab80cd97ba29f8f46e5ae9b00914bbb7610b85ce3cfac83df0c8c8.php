<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_e0925a6175f53e3f47b99393c5daf9a4110fe25a5f488477f4152ce3556c3cef extends Twig_Template
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
        $__internal_8061158111def82ed7b25a866806bd342ac279c405338f02e7b665e6f4f00bcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8061158111def82ed7b25a866806bd342ac279c405338f02e7b665e6f4f00bcd->enter($__internal_8061158111def82ed7b25a866806bd342ac279c405338f02e7b665e6f4f00bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_e1fa29d8bb0e3eaf4846fc880e46233d2097300c0af193d32c28ee099cf92a0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1fa29d8bb0e3eaf4846fc880e46233d2097300c0af193d32c28ee099cf92a0d->enter($__internal_e1fa29d8bb0e3eaf4846fc880e46233d2097300c0af193d32c28ee099cf92a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_8061158111def82ed7b25a866806bd342ac279c405338f02e7b665e6f4f00bcd->leave($__internal_8061158111def82ed7b25a866806bd342ac279c405338f02e7b665e6f4f00bcd_prof);

        
        $__internal_e1fa29d8bb0e3eaf4846fc880e46233d2097300c0af193d32c28ee099cf92a0d->leave($__internal_e1fa29d8bb0e3eaf4846fc880e46233d2097300c0af193d32c28ee099cf92a0d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "/home/master/symfony_doctrine/vendor/symfony/twig-bundle/Resources/views/Exception/error.xml.twig");
    }
}
