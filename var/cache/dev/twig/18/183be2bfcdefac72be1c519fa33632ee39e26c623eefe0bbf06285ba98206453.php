<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_ad7313459a5e785ea6339de730e353c932d95829f03f200cb2193768d84baa33 extends Twig_Template
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
        $__internal_d8b14979a56e728311ebe31e656e943c45045a03c6cd2547334323e33b80ffd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8b14979a56e728311ebe31e656e943c45045a03c6cd2547334323e33b80ffd8->enter($__internal_d8b14979a56e728311ebe31e656e943c45045a03c6cd2547334323e33b80ffd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_3539a3f708a41d72c48d27c8c56ee6c90de894d245566fb623591869f6708d96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3539a3f708a41d72c48d27c8c56ee6c90de894d245566fb623591869f6708d96->enter($__internal_3539a3f708a41d72c48d27c8c56ee6c90de894d245566fb623591869f6708d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_d8b14979a56e728311ebe31e656e943c45045a03c6cd2547334323e33b80ffd8->leave($__internal_d8b14979a56e728311ebe31e656e943c45045a03c6cd2547334323e33b80ffd8_prof);

        
        $__internal_3539a3f708a41d72c48d27c8c56ee6c90de894d245566fb623591869f6708d96->leave($__internal_3539a3f708a41d72c48d27c8c56ee6c90de894d245566fb623591869f6708d96_prof);

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
", "@Twig/Exception/error.js.twig", "/home/master/symfony_doctrine/vendor/symfony/twig-bundle/Resources/views/Exception/error.js.twig");
    }
}
