<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_112fe6236b7c84214008a23d7e67f6e85ad265d0124eeff4f48c9422bd89f7e9 extends Twig_Template
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
        $__internal_19214c1478cce583b6af5668363de3bae9a90c2f0329215ed161882900b69aba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19214c1478cce583b6af5668363de3bae9a90c2f0329215ed161882900b69aba->enter($__internal_19214c1478cce583b6af5668363de3bae9a90c2f0329215ed161882900b69aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_66adcda0624f397fcdae08128d85409c75111c3ec9226156fa8253277d3cd749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66adcda0624f397fcdae08128d85409c75111c3ec9226156fa8253277d3cd749->enter($__internal_66adcda0624f397fcdae08128d85409c75111c3ec9226156fa8253277d3cd749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_19214c1478cce583b6af5668363de3bae9a90c2f0329215ed161882900b69aba->leave($__internal_19214c1478cce583b6af5668363de3bae9a90c2f0329215ed161882900b69aba_prof);

        
        $__internal_66adcda0624f397fcdae08128d85409c75111c3ec9226156fa8253277d3cd749->leave($__internal_66adcda0624f397fcdae08128d85409c75111c3ec9226156fa8253277d3cd749_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/home/master/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/datetime_widget.html.php");
    }
}
