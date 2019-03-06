<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_8b1b231fea92d916c04271863e458350af21f5e0ce3647c7a1d0cef6f3b434e0 extends Twig_Template
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
        $__internal_6300ad633655712e8feb94b0d53b5cf821d92c2a79102f8fe36e32e9edb39686 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6300ad633655712e8feb94b0d53b5cf821d92c2a79102f8fe36e32e9edb39686->enter($__internal_6300ad633655712e8feb94b0d53b5cf821d92c2a79102f8fe36e32e9edb39686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_1c752a36c23a5eaf80aa53c5004e9a60f7a771eba28594862caa2adc1549b5fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c752a36c23a5eaf80aa53c5004e9a60f7a771eba28594862caa2adc1549b5fa->enter($__internal_1c752a36c23a5eaf80aa53c5004e9a60f7a771eba28594862caa2adc1549b5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_6300ad633655712e8feb94b0d53b5cf821d92c2a79102f8fe36e32e9edb39686->leave($__internal_6300ad633655712e8feb94b0d53b5cf821d92c2a79102f8fe36e32e9edb39686_prof);

        
        $__internal_1c752a36c23a5eaf80aa53c5004e9a60f7a771eba28594862caa2adc1549b5fa->leave($__internal_1c752a36c23a5eaf80aa53c5004e9a60f7a771eba28594862caa2adc1549b5fa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/twig-bundle/Resources/views/Exception/exception.json.twig");
    }
}
