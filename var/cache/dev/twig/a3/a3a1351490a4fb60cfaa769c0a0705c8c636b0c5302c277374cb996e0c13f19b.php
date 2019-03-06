<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_fce28bce806dbcba29ed453aa93f1f9270e61074d61b5039c533501e549c67ec extends Twig_Template
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
        $__internal_dfafabc7aac40e78861d7018bb63956061be64fea01b2cd273e02e57b99a89b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfafabc7aac40e78861d7018bb63956061be64fea01b2cd273e02e57b99a89b0->enter($__internal_dfafabc7aac40e78861d7018bb63956061be64fea01b2cd273e02e57b99a89b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_dff3d718b4b1da052d429b8d34b848b3b37f50b1a17580098a20d87c9eb7f30e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dff3d718b4b1da052d429b8d34b848b3b37f50b1a17580098a20d87c9eb7f30e->enter($__internal_dff3d718b4b1da052d429b8d34b848b3b37f50b1a17580098a20d87c9eb7f30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_dfafabc7aac40e78861d7018bb63956061be64fea01b2cd273e02e57b99a89b0->leave($__internal_dfafabc7aac40e78861d7018bb63956061be64fea01b2cd273e02e57b99a89b0_prof);

        
        $__internal_dff3d718b4b1da052d429b8d34b848b3b37f50b1a17580098a20d87c9eb7f30e->leave($__internal_dff3d718b4b1da052d429b8d34b848b3b37f50b1a17580098a20d87c9eb7f30e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/button_row.html.php");
    }
}
