<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_b3f0253ab0b193022acdf6ccc1a7b1c778e61724c26ab00f18a35cfc9c47cf1c extends Twig_Template
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
        $__internal_99abd15209467f62ed5eb5a95e558f60859048a40f92cdb63d576af1686dac7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99abd15209467f62ed5eb5a95e558f60859048a40f92cdb63d576af1686dac7a->enter($__internal_99abd15209467f62ed5eb5a95e558f60859048a40f92cdb63d576af1686dac7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_f36bf74b1ef1ee3b9a042288771bb0240484bcc9117942aa552603b5eae5a204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f36bf74b1ef1ee3b9a042288771bb0240484bcc9117942aa552603b5eae5a204->enter($__internal_f36bf74b1ef1ee3b9a042288771bb0240484bcc9117942aa552603b5eae5a204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_99abd15209467f62ed5eb5a95e558f60859048a40f92cdb63d576af1686dac7a->leave($__internal_99abd15209467f62ed5eb5a95e558f60859048a40f92cdb63d576af1686dac7a_prof);

        
        $__internal_f36bf74b1ef1ee3b9a042288771bb0240484bcc9117942aa552603b5eae5a204->leave($__internal_f36bf74b1ef1ee3b9a042288771bb0240484bcc9117942aa552603b5eae5a204_prof);

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
", "@Framework/Form/datetime_widget.html.php", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/datetime_widget.html.php");
    }
}
