<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_d0e089eecd15a82aa4bf6d7a071160a98ffbc8667ac10c0e6913aa7f950483ae extends Twig_Template
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
        $__internal_7331fd5507a478729243a314c84b737a70d781ae9fc99dc6b986d401fad77dbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7331fd5507a478729243a314c84b737a70d781ae9fc99dc6b986d401fad77dbd->enter($__internal_7331fd5507a478729243a314c84b737a70d781ae9fc99dc6b986d401fad77dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_2700288eb888ad0ea503a536c88660efef4276a8c6fb81712b0886036f357167 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2700288eb888ad0ea503a536c88660efef4276a8c6fb81712b0886036f357167->enter($__internal_2700288eb888ad0ea503a536c88660efef4276a8c6fb81712b0886036f357167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_7331fd5507a478729243a314c84b737a70d781ae9fc99dc6b986d401fad77dbd->leave($__internal_7331fd5507a478729243a314c84b737a70d781ae9fc99dc6b986d401fad77dbd_prof);

        
        $__internal_2700288eb888ad0ea503a536c88660efef4276a8c6fb81712b0886036f357167->leave($__internal_2700288eb888ad0ea503a536c88660efef4276a8c6fb81712b0886036f357167_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/master/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/email_widget.html.php");
    }
}
