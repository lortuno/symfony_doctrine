<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_15a5f936ce299c44d0e1a9d03f061f60c64f431871b0a2fa3d1732190ddceacf extends Twig_Template
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
        $__internal_94ac7a0e857a5f55ae69052cc8ff0c93b4172e326f9f324297f01b78311efd51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94ac7a0e857a5f55ae69052cc8ff0c93b4172e326f9f324297f01b78311efd51->enter($__internal_94ac7a0e857a5f55ae69052cc8ff0c93b4172e326f9f324297f01b78311efd51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_3536cdb74c1b69d90e24cf205561a3005603ad00af1fbbe4e5293167a46e556b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3536cdb74c1b69d90e24cf205561a3005603ad00af1fbbe4e5293167a46e556b->enter($__internal_3536cdb74c1b69d90e24cf205561a3005603ad00af1fbbe4e5293167a46e556b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_94ac7a0e857a5f55ae69052cc8ff0c93b4172e326f9f324297f01b78311efd51->leave($__internal_94ac7a0e857a5f55ae69052cc8ff0c93b4172e326f9f324297f01b78311efd51_prof);

        
        $__internal_3536cdb74c1b69d90e24cf205561a3005603ad00af1fbbe4e5293167a46e556b->leave($__internal_3536cdb74c1b69d90e24cf205561a3005603ad00af1fbbe4e5293167a46e556b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.css.twig");
    }
}
