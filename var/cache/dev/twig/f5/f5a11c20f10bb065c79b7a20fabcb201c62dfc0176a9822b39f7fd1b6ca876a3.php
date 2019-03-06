<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_7d52ae0cbdbd2ac117891bc67dcec3eefd71c87bd7b27db63fe13aae315309ed extends Twig_Template
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
        $__internal_bdf3fe3b4135a26593a13ebad2ed4ce238aad49f70d44374d2d3106d98b836c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdf3fe3b4135a26593a13ebad2ed4ce238aad49f70d44374d2d3106d98b836c4->enter($__internal_bdf3fe3b4135a26593a13ebad2ed4ce238aad49f70d44374d2d3106d98b836c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_c5cc91f861a1e173a1e2f180bc8fd0df41007895e61730d564fab4c01482f5f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5cc91f861a1e173a1e2f180bc8fd0df41007895e61730d564fab4c01482f5f5->enter($__internal_c5cc91f861a1e173a1e2f180bc8fd0df41007895e61730d564fab4c01482f5f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

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
        
        $__internal_bdf3fe3b4135a26593a13ebad2ed4ce238aad49f70d44374d2d3106d98b836c4->leave($__internal_bdf3fe3b4135a26593a13ebad2ed4ce238aad49f70d44374d2d3106d98b836c4_prof);

        
        $__internal_c5cc91f861a1e173a1e2f180bc8fd0df41007895e61730d564fab4c01482f5f5->leave($__internal_c5cc91f861a1e173a1e2f180bc8fd0df41007895e61730d564fab4c01482f5f5_prof);

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
", "@Framework/Form/form_label.html.php", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/form_label.html.php");
    }
}
