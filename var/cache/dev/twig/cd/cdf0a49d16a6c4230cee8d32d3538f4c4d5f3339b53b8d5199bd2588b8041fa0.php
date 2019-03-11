<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_0cd095fb78d81df6f6cd0a06bc098538c53b365c4f93cd442220a623bc034e65 extends Twig_Template
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
        $__internal_446ec4463c382c924d1925df9686451cb14aa416473c70560ba0f36be71f250d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_446ec4463c382c924d1925df9686451cb14aa416473c70560ba0f36be71f250d->enter($__internal_446ec4463c382c924d1925df9686451cb14aa416473c70560ba0f36be71f250d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_4bdfc4fc6b11884dea367a07a8b0bf662bd64f1bdc9734bdc92a2b9ddaaef309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bdfc4fc6b11884dea367a07a8b0bf662bd64f1bdc9734bdc92a2b9ddaaef309->enter($__internal_4bdfc4fc6b11884dea367a07a8b0bf662bd64f1bdc9734bdc92a2b9ddaaef309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_446ec4463c382c924d1925df9686451cb14aa416473c70560ba0f36be71f250d->leave($__internal_446ec4463c382c924d1925df9686451cb14aa416473c70560ba0f36be71f250d_prof);

        
        $__internal_4bdfc4fc6b11884dea367a07a8b0bf662bd64f1bdc9734bdc92a2b9ddaaef309->leave($__internal_4bdfc4fc6b11884dea367a07a8b0bf662bd64f1bdc9734bdc92a2b9ddaaef309_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/home/master/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/form_label.html.php");
    }
}
