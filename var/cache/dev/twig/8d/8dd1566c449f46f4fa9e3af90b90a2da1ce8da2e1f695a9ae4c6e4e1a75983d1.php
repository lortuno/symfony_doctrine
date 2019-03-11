<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_f9306cfca393ab5e5d77210b65c694c7e90cf35aec537abceadb845df7de5ff0 extends Twig_Template
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
        $__internal_e4ba5de0a0d41d02b93639754388fdf9c5f9f5a5e413f25a8e56c00c96c5566d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4ba5de0a0d41d02b93639754388fdf9c5f9f5a5e413f25a8e56c00c96c5566d->enter($__internal_e4ba5de0a0d41d02b93639754388fdf9c5f9f5a5e413f25a8e56c00c96c5566d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_381efa705bccbd72411a2fed2e046fa30904a3c018ef79b4b43b816b0b5f5102 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_381efa705bccbd72411a2fed2e046fa30904a3c018ef79b4b43b816b0b5f5102->enter($__internal_381efa705bccbd72411a2fed2e046fa30904a3c018ef79b4b43b816b0b5f5102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e4ba5de0a0d41d02b93639754388fdf9c5f9f5a5e413f25a8e56c00c96c5566d->leave($__internal_e4ba5de0a0d41d02b93639754388fdf9c5f9f5a5e413f25a8e56c00c96c5566d_prof);

        
        $__internal_381efa705bccbd72411a2fed2e046fa30904a3c018ef79b4b43b816b0b5f5102->leave($__internal_381efa705bccbd72411a2fed2e046fa30904a3c018ef79b4b43b816b0b5f5102_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/home/master/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/button_attributes.html.php");
    }
}
