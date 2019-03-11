<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_5c1f8874aa8a89bcd15bb9f7f2a720fde0fee02dafef560e4788eb4a853bc4ea extends Twig_Template
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
        $__internal_c4dde57d2765caeeae52824f24f55e8bfd05681c2d48a5ab78afc46624996939 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4dde57d2765caeeae52824f24f55e8bfd05681c2d48a5ab78afc46624996939->enter($__internal_c4dde57d2765caeeae52824f24f55e8bfd05681c2d48a5ab78afc46624996939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_894367554765675349efccd8d9c527d2a78b27e9859b0f441bc847ae40691edb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_894367554765675349efccd8d9c527d2a78b27e9859b0f441bc847ae40691edb->enter($__internal_894367554765675349efccd8d9c527d2a78b27e9859b0f441bc847ae40691edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_c4dde57d2765caeeae52824f24f55e8bfd05681c2d48a5ab78afc46624996939->leave($__internal_c4dde57d2765caeeae52824f24f55e8bfd05681c2d48a5ab78afc46624996939_prof);

        
        $__internal_894367554765675349efccd8d9c527d2a78b27e9859b0f441bc847ae40691edb->leave($__internal_894367554765675349efccd8d9c527d2a78b27e9859b0f441bc847ae40691edb_prof);

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
", "@Twig/Exception/exception.json.twig", "/home/master/symfony_doctrine/vendor/symfony/twig-bundle/Resources/views/Exception/exception.json.twig");
    }
}
