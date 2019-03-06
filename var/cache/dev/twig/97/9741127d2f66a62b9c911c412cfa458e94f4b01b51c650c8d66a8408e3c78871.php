<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_eaa5a9d61488ff95ed3e4b9b911610600f2235212a3d1b41f6b8c7e4ab8f8251 extends Twig_Template
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
        $__internal_fc4eee116a7dca6ee2e763a82842a3c7521c06af5b3421eef556b1543ac39ab8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc4eee116a7dca6ee2e763a82842a3c7521c06af5b3421eef556b1543ac39ab8->enter($__internal_fc4eee116a7dca6ee2e763a82842a3c7521c06af5b3421eef556b1543ac39ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_1a54748e0584093a585d5026213c622c7df1f773310a4868b55a075b43f6d531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a54748e0584093a585d5026213c622c7df1f773310a4868b55a075b43f6d531->enter($__internal_1a54748e0584093a585d5026213c622c7df1f773310a4868b55a075b43f6d531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_fc4eee116a7dca6ee2e763a82842a3c7521c06af5b3421eef556b1543ac39ab8->leave($__internal_fc4eee116a7dca6ee2e763a82842a3c7521c06af5b3421eef556b1543ac39ab8_prof);

        
        $__internal_1a54748e0584093a585d5026213c622c7df1f773310a4868b55a075b43f6d531->leave($__internal_1a54748e0584093a585d5026213c622c7df1f773310a4868b55a075b43f6d531_prof);

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
", "@Twig/Exception/exception.atom.twig", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/twig-bundle/Resources/views/Exception/exception.atom.twig");
    }
}
