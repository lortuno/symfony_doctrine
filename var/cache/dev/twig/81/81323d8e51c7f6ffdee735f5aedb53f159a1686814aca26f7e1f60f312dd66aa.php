<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_74e93f1c9300829ccc62ba5d02ec9cad64c373cc32b1e36960cdc628ce268abc extends Twig_Template
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
        $__internal_7ef49f76e2212e42b67badd694c86b7d79ca6a0091d65e550116175c3f182cd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ef49f76e2212e42b67badd694c86b7d79ca6a0091d65e550116175c3f182cd3->enter($__internal_7ef49f76e2212e42b67badd694c86b7d79ca6a0091d65e550116175c3f182cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_d622b7cc1db97dc24a5ae8b1a37e5c25f743af0510e2b71fc17fb2d58f394f2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d622b7cc1db97dc24a5ae8b1a37e5c25f743af0510e2b71fc17fb2d58f394f2d->enter($__internal_d622b7cc1db97dc24a5ae8b1a37e5c25f743af0510e2b71fc17fb2d58f394f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_7ef49f76e2212e42b67badd694c86b7d79ca6a0091d65e550116175c3f182cd3->leave($__internal_7ef49f76e2212e42b67badd694c86b7d79ca6a0091d65e550116175c3f182cd3_prof);

        
        $__internal_d622b7cc1db97dc24a5ae8b1a37e5c25f743af0510e2b71fc17fb2d58f394f2d->leave($__internal_d622b7cc1db97dc24a5ae8b1a37e5c25f743af0510e2b71fc17fb2d58f394f2d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/hidden_widget.html.php");
    }
}
