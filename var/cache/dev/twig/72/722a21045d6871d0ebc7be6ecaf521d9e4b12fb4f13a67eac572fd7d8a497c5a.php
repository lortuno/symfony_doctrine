<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_80650598c1ff61b0d19b1201ba9e07978d94b5f7e8c4332aff2b72def352406e extends Twig_Template
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
        $__internal_d126f4fa1aade41a63b3c3250f41b9baf62249f8b6091f3b05be7b96b5ddc00b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d126f4fa1aade41a63b3c3250f41b9baf62249f8b6091f3b05be7b96b5ddc00b->enter($__internal_d126f4fa1aade41a63b3c3250f41b9baf62249f8b6091f3b05be7b96b5ddc00b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_e6f1b2f1182163c1774aceabe34c85f41adcd115081e212a58566b5dc2b54c3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6f1b2f1182163c1774aceabe34c85f41adcd115081e212a58566b5dc2b54c3c->enter($__internal_e6f1b2f1182163c1774aceabe34c85f41adcd115081e212a58566b5dc2b54c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_d126f4fa1aade41a63b3c3250f41b9baf62249f8b6091f3b05be7b96b5ddc00b->leave($__internal_d126f4fa1aade41a63b3c3250f41b9baf62249f8b6091f3b05be7b96b5ddc00b_prof);

        
        $__internal_e6f1b2f1182163c1774aceabe34c85f41adcd115081e212a58566b5dc2b54c3c->leave($__internal_e6f1b2f1182163c1774aceabe34c85f41adcd115081e212a58566b5dc2b54c3c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/home/master/symfony_doctrine/vendor/symfony/twig-bundle/Resources/views/Exception/error.json.twig");
    }
}
