<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_8b6508d907bd1b931b0e1c72558cbc64ceddc0902b9758fc448682db1a9d067c extends Twig_Template
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
        $__internal_5990bd5558487a00f6cdaa2daab2c2331f40396ce52f7a5c543df4c06dc088d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5990bd5558487a00f6cdaa2daab2c2331f40396ce52f7a5c543df4c06dc088d8->enter($__internal_5990bd5558487a00f6cdaa2daab2c2331f40396ce52f7a5c543df4c06dc088d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_027fee1b0e603bcf3dd8e688b296a355d1fdab66509b3ef99102a1eae2dbe36f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_027fee1b0e603bcf3dd8e688b296a355d1fdab66509b3ef99102a1eae2dbe36f->enter($__internal_027fee1b0e603bcf3dd8e688b296a355d1fdab66509b3ef99102a1eae2dbe36f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_5990bd5558487a00f6cdaa2daab2c2331f40396ce52f7a5c543df4c06dc088d8->leave($__internal_5990bd5558487a00f6cdaa2daab2c2331f40396ce52f7a5c543df4c06dc088d8_prof);

        
        $__internal_027fee1b0e603bcf3dd8e688b296a355d1fdab66509b3ef99102a1eae2dbe36f->leave($__internal_027fee1b0e603bcf3dd8e688b296a355d1fdab66509b3ef99102a1eae2dbe36f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/form_start.html.php");
    }
}
