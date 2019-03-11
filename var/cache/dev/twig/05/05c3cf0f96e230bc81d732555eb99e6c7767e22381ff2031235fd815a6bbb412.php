<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_85bbfd3d5ed8166826e13fe506466fe0b8a08bd9a1e657468ea74b8ea2a93cad extends Twig_Template
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
        $__internal_754069b06b35c58c491346492132b31e44d9564fcd4b20ac6267c42da4cf3188 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_754069b06b35c58c491346492132b31e44d9564fcd4b20ac6267c42da4cf3188->enter($__internal_754069b06b35c58c491346492132b31e44d9564fcd4b20ac6267c42da4cf3188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_0939b3f84e8b84ade68dc4b574bb65d881aee10de4731bb716d1735d8ac682cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0939b3f84e8b84ade68dc4b574bb65d881aee10de4731bb716d1735d8ac682cd->enter($__internal_0939b3f84e8b84ade68dc4b574bb65d881aee10de4731bb716d1735d8ac682cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_754069b06b35c58c491346492132b31e44d9564fcd4b20ac6267c42da4cf3188->leave($__internal_754069b06b35c58c491346492132b31e44d9564fcd4b20ac6267c42da4cf3188_prof);

        
        $__internal_0939b3f84e8b84ade68dc4b574bb65d881aee10de4731bb716d1735d8ac682cd->leave($__internal_0939b3f84e8b84ade68dc4b574bb65d881aee10de4731bb716d1735d8ac682cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/home/master/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/button_widget.html.php");
    }
}
