<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_8db508575a214cb9b8857cd5730871df3be10d86904663bfe153e2e79661adf5 extends Twig_Template
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
        $__internal_67567bc594aa8faa9faff6232d790b7e3741fe71e8d2bb96918ce69e9ef2a73f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67567bc594aa8faa9faff6232d790b7e3741fe71e8d2bb96918ce69e9ef2a73f->enter($__internal_67567bc594aa8faa9faff6232d790b7e3741fe71e8d2bb96918ce69e9ef2a73f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_d65f5bbc1e323cd17b2f5404c8f93efaa7eb64a57d79b0149ebd4dda011fc6f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d65f5bbc1e323cd17b2f5404c8f93efaa7eb64a57d79b0149ebd4dda011fc6f1->enter($__internal_d65f5bbc1e323cd17b2f5404c8f93efaa7eb64a57d79b0149ebd4dda011fc6f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_67567bc594aa8faa9faff6232d790b7e3741fe71e8d2bb96918ce69e9ef2a73f->leave($__internal_67567bc594aa8faa9faff6232d790b7e3741fe71e8d2bb96918ce69e9ef2a73f_prof);

        
        $__internal_d65f5bbc1e323cd17b2f5404c8f93efaa7eb64a57d79b0149ebd4dda011fc6f1->leave($__internal_d65f5bbc1e323cd17b2f5404c8f93efaa7eb64a57d79b0149ebd4dda011fc6f1_prof);

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
", "@Framework/Form/form_start.html.php", "/home/master/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/form_start.html.php");
    }
}
