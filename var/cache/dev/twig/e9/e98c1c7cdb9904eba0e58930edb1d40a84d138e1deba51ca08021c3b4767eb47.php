<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_66b41d2b0504df80a45acfcc6caf2eb5cd4784fc725fc0249a736b8103dcad52 extends Twig_Template
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
        $__internal_5b02b784030ca59a7aee7bb07d60578a11ef7ce0d48a6d221e2918408e465525 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b02b784030ca59a7aee7bb07d60578a11ef7ce0d48a6d221e2918408e465525->enter($__internal_5b02b784030ca59a7aee7bb07d60578a11ef7ce0d48a6d221e2918408e465525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_c3ad811e94a3219cd5028f6f24b5be135cdcc3516f169e5dc279f0963e9d6cd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3ad811e94a3219cd5028f6f24b5be135cdcc3516f169e5dc279f0963e9d6cd7->enter($__internal_c3ad811e94a3219cd5028f6f24b5be135cdcc3516f169e5dc279f0963e9d6cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_5b02b784030ca59a7aee7bb07d60578a11ef7ce0d48a6d221e2918408e465525->leave($__internal_5b02b784030ca59a7aee7bb07d60578a11ef7ce0d48a6d221e2918408e465525_prof);

        
        $__internal_c3ad811e94a3219cd5028f6f24b5be135cdcc3516f169e5dc279f0963e9d6cd7->leave($__internal_c3ad811e94a3219cd5028f6f24b5be135cdcc3516f169e5dc279f0963e9d6cd7_prof);

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
", "@Framework/Form/button_widget.html.php", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/button_widget.html.php");
    }
}
