<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_8f54cac3a1b5929e0c83c125ddae6fcc3a484ce34c08e31fd4ade5f305e18a16 extends Twig_Template
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
        $__internal_493522303924f221f999abbadb36ac27fe542744d311c5c5a7d293f5602f72e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_493522303924f221f999abbadb36ac27fe542744d311c5c5a7d293f5602f72e7->enter($__internal_493522303924f221f999abbadb36ac27fe542744d311c5c5a7d293f5602f72e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_0c599eb75d6ec7c4c30a4440851f8a44d0f87cfa98225bfbe2ddcd7e53678fa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c599eb75d6ec7c4c30a4440851f8a44d0f87cfa98225bfbe2ddcd7e53678fa3->enter($__internal_0c599eb75d6ec7c4c30a4440851f8a44d0f87cfa98225bfbe2ddcd7e53678fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_493522303924f221f999abbadb36ac27fe542744d311c5c5a7d293f5602f72e7->leave($__internal_493522303924f221f999abbadb36ac27fe542744d311c5c5a7d293f5602f72e7_prof);

        
        $__internal_0c599eb75d6ec7c4c30a4440851f8a44d0f87cfa98225bfbe2ddcd7e53678fa3->leave($__internal_0c599eb75d6ec7c4c30a4440851f8a44d0f87cfa98225bfbe2ddcd7e53678fa3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/home/master/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
