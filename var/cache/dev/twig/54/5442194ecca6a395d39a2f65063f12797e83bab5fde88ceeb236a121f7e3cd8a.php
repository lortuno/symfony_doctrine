<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_b0906450ec2aaa853193bbf28580164cfdf79ddc4c1ae6c865b585f5e3295f48 extends Twig_Template
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
        $__internal_773f36e05b684678467fa69454620c2a9e854ce8ce2a5f2fe4c2610dcf5f46e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_773f36e05b684678467fa69454620c2a9e854ce8ce2a5f2fe4c2610dcf5f46e8->enter($__internal_773f36e05b684678467fa69454620c2a9e854ce8ce2a5f2fe4c2610dcf5f46e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_3f9d7a21dc721cd896edb155a393c1361687948e361278c3f841be853ed74878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f9d7a21dc721cd896edb155a393c1361687948e361278c3f841be853ed74878->enter($__internal_3f9d7a21dc721cd896edb155a393c1361687948e361278c3f841be853ed74878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_773f36e05b684678467fa69454620c2a9e854ce8ce2a5f2fe4c2610dcf5f46e8->leave($__internal_773f36e05b684678467fa69454620c2a9e854ce8ce2a5f2fe4c2610dcf5f46e8_prof);

        
        $__internal_3f9d7a21dc721cd896edb155a393c1361687948e361278c3f841be853ed74878->leave($__internal_3f9d7a21dc721cd896edb155a393c1361687948e361278c3f841be853ed74878_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/master/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/FormTable/form_row.html.php");
    }
}
