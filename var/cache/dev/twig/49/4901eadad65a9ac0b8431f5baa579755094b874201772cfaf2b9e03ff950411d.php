<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_9775fd45a750f7691d18491a827fa9b8ebf3859cba1a3147e5d27bcd6c0b1be5 extends Twig_Template
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
        $__internal_a5d6c40b43f2bf72523b75fa0e73ef5e45dbdd496b6e0a3a9d1661d5c5748b66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5d6c40b43f2bf72523b75fa0e73ef5e45dbdd496b6e0a3a9d1661d5c5748b66->enter($__internal_a5d6c40b43f2bf72523b75fa0e73ef5e45dbdd496b6e0a3a9d1661d5c5748b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_b9e1204a15c38f162768e9771b477855173a8e52187a1553916f0f38724b1bc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9e1204a15c38f162768e9771b477855173a8e52187a1553916f0f38724b1bc0->enter($__internal_b9e1204a15c38f162768e9771b477855173a8e52187a1553916f0f38724b1bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_a5d6c40b43f2bf72523b75fa0e73ef5e45dbdd496b6e0a3a9d1661d5c5748b66->leave($__internal_a5d6c40b43f2bf72523b75fa0e73ef5e45dbdd496b6e0a3a9d1661d5c5748b66_prof);

        
        $__internal_b9e1204a15c38f162768e9771b477855173a8e52187a1553916f0f38724b1bc0->leave($__internal_b9e1204a15c38f162768e9771b477855173a8e52187a1553916f0f38724b1bc0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/collection_widget.html.php");
    }
}
