<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_b8a36073f455fa94b9d45e00c9ec31c5a00ce4c1fcca2c6c0f78523621c7e482 extends Twig_Template
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
        $__internal_ac3b14329ed60d225cdcbe24fdd83b08b5697637249da7ecc86e4720cc9944c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac3b14329ed60d225cdcbe24fdd83b08b5697637249da7ecc86e4720cc9944c7->enter($__internal_ac3b14329ed60d225cdcbe24fdd83b08b5697637249da7ecc86e4720cc9944c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_baae2fccb745cef838235f75f47d2ecf2b96a85f109fbe3ae0d0a44e7283f3d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baae2fccb745cef838235f75f47d2ecf2b96a85f109fbe3ae0d0a44e7283f3d9->enter($__internal_baae2fccb745cef838235f75f47d2ecf2b96a85f109fbe3ae0d0a44e7283f3d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_ac3b14329ed60d225cdcbe24fdd83b08b5697637249da7ecc86e4720cc9944c7->leave($__internal_ac3b14329ed60d225cdcbe24fdd83b08b5697637249da7ecc86e4720cc9944c7_prof);

        
        $__internal_baae2fccb745cef838235f75f47d2ecf2b96a85f109fbe3ae0d0a44e7283f3d9->leave($__internal_baae2fccb745cef838235f75f47d2ecf2b96a85f109fbe3ae0d0a44e7283f3d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/master/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/form_widget.html.php");
    }
}
