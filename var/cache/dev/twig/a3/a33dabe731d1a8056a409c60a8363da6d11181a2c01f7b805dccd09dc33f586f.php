<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_4a618982ce4c2dcec45a38d0dcaab9c793a99a46726bb01423d4038239a1e6ca extends Twig_Template
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
        $__internal_da6b421088ff55a8d84be5f2de4e59925aee578d479e96b7681a1ff44cc1f39a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da6b421088ff55a8d84be5f2de4e59925aee578d479e96b7681a1ff44cc1f39a->enter($__internal_da6b421088ff55a8d84be5f2de4e59925aee578d479e96b7681a1ff44cc1f39a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_f1d9bfd544f493703f66b98304c2ac6868966bf454d2f26874fa5fda1350da48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1d9bfd544f493703f66b98304c2ac6868966bf454d2f26874fa5fda1350da48->enter($__internal_f1d9bfd544f493703f66b98304c2ac6868966bf454d2f26874fa5fda1350da48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_da6b421088ff55a8d84be5f2de4e59925aee578d479e96b7681a1ff44cc1f39a->leave($__internal_da6b421088ff55a8d84be5f2de4e59925aee578d479e96b7681a1ff44cc1f39a_prof);

        
        $__internal_f1d9bfd544f493703f66b98304c2ac6868966bf454d2f26874fa5fda1350da48->leave($__internal_f1d9bfd544f493703f66b98304c2ac6868966bf454d2f26874fa5fda1350da48_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/home/master/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/attributes.html.php");
    }
}
