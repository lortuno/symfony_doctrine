<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_295cfc044c59b48980a2539e6c757d7b92c7dce8540d62a5e8eaa6fa29a6bf01 extends Twig_Template
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
        $__internal_79783d99900195ba3ecb1fc52a5240c8ca6cc955c4c91615afb6482732ebc6be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79783d99900195ba3ecb1fc52a5240c8ca6cc955c4c91615afb6482732ebc6be->enter($__internal_79783d99900195ba3ecb1fc52a5240c8ca6cc955c4c91615afb6482732ebc6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_106d4f7a9534949b75eb1c0225eaf97110d35757a9442383147abe5ac903a6be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_106d4f7a9534949b75eb1c0225eaf97110d35757a9442383147abe5ac903a6be->enter($__internal_106d4f7a9534949b75eb1c0225eaf97110d35757a9442383147abe5ac903a6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

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
        
        $__internal_79783d99900195ba3ecb1fc52a5240c8ca6cc955c4c91615afb6482732ebc6be->leave($__internal_79783d99900195ba3ecb1fc52a5240c8ca6cc955c4c91615afb6482732ebc6be_prof);

        
        $__internal_106d4f7a9534949b75eb1c0225eaf97110d35757a9442383147abe5ac903a6be->leave($__internal_106d4f7a9534949b75eb1c0225eaf97110d35757a9442383147abe5ac903a6be_prof);

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
", "@Framework/Form/time_widget.html.php", "/home/master/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/time_widget.html.php");
    }
}
