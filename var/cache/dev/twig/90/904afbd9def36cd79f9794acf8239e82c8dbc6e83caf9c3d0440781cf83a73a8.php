<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_cc09a0da3a465d7fabbeea81a646e68e292736f260cfe4d2b0031f4f5f4a58b8 extends Twig_Template
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
        $__internal_996667de9baf9d4af80f0206bafcf90f2507cb9e93cd5830c49193a3163a8ad9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_996667de9baf9d4af80f0206bafcf90f2507cb9e93cd5830c49193a3163a8ad9->enter($__internal_996667de9baf9d4af80f0206bafcf90f2507cb9e93cd5830c49193a3163a8ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_77b25f5d49f89c12eb533ac721e5910e67a43b6140c9c9ebe64b4dc936e93d56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77b25f5d49f89c12eb533ac721e5910e67a43b6140c9c9ebe64b4dc936e93d56->enter($__internal_77b25f5d49f89c12eb533ac721e5910e67a43b6140c9c9ebe64b4dc936e93d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_996667de9baf9d4af80f0206bafcf90f2507cb9e93cd5830c49193a3163a8ad9->leave($__internal_996667de9baf9d4af80f0206bafcf90f2507cb9e93cd5830c49193a3163a8ad9_prof);

        
        $__internal_77b25f5d49f89c12eb533ac721e5910e67a43b6140c9c9ebe64b4dc936e93d56->leave($__internal_77b25f5d49f89c12eb533ac721e5910e67a43b6140c9c9ebe64b4dc936e93d56_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/time_widget.html.php");
    }
}
