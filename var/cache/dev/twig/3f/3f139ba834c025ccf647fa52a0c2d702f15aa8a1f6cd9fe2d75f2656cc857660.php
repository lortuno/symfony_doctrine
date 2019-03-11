<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_dca7783095191030f4950d83757677c49193dbe59a52076f08d95d5332eb9a8e extends Twig_Template
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
        $__internal_475f1affbbb7d379e6298769fa525b9bb2241044303b0ab8c3834b2c9c8174a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_475f1affbbb7d379e6298769fa525b9bb2241044303b0ab8c3834b2c9c8174a7->enter($__internal_475f1affbbb7d379e6298769fa525b9bb2241044303b0ab8c3834b2c9c8174a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_3d1eae75421b1965834ff0784b83605035f2f414b551f1c832dd573901ada19a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d1eae75421b1965834ff0784b83605035f2f414b551f1c832dd573901ada19a->enter($__internal_3d1eae75421b1965834ff0784b83605035f2f414b551f1c832dd573901ada19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_475f1affbbb7d379e6298769fa525b9bb2241044303b0ab8c3834b2c9c8174a7->leave($__internal_475f1affbbb7d379e6298769fa525b9bb2241044303b0ab8c3834b2c9c8174a7_prof);

        
        $__internal_3d1eae75421b1965834ff0784b83605035f2f414b551f1c832dd573901ada19a->leave($__internal_3d1eae75421b1965834ff0784b83605035f2f414b551f1c832dd573901ada19a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "/home/master/symfony_doctrine/vendor/symfony/twig-bundle/Resources/views/Exception/exception.atom.twig");
    }
}
