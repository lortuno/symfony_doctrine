<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_6e669fcbbeb4d2ba0944f53d1ea9e82eddce499c9fbfadde9ad01117e6ffd301 extends Twig_Template
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
        $__internal_a7fb96a43fef107e5d140cd0703c6bf8f4d5117b67a3cecc71517857bd9e7cd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7fb96a43fef107e5d140cd0703c6bf8f4d5117b67a3cecc71517857bd9e7cd1->enter($__internal_a7fb96a43fef107e5d140cd0703c6bf8f4d5117b67a3cecc71517857bd9e7cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_0e8848a193a82bcac3a6f94c908a4bf1edf282c54536d72efc76e0ffa4a1820e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e8848a193a82bcac3a6f94c908a4bf1edf282c54536d72efc76e0ffa4a1820e->enter($__internal_0e8848a193a82bcac3a6f94c908a4bf1edf282c54536d72efc76e0ffa4a1820e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_a7fb96a43fef107e5d140cd0703c6bf8f4d5117b67a3cecc71517857bd9e7cd1->leave($__internal_a7fb96a43fef107e5d140cd0703c6bf8f4d5117b67a3cecc71517857bd9e7cd1_prof);

        
        $__internal_0e8848a193a82bcac3a6f94c908a4bf1edf282c54536d72efc76e0ffa4a1820e->leave($__internal_0e8848a193a82bcac3a6f94c908a4bf1edf282c54536d72efc76e0ffa4a1820e_prof);

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
", "@Framework/FormTable/form_widget_compound.html.php", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
