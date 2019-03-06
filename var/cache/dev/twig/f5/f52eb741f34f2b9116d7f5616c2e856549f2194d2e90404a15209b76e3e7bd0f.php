<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_15b48af6328c5908b63ac293fd3b71533d74bce17145af2855c14267b3f020c7 extends Twig_Template
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
        $__internal_909290f4b65b1081cd2aed121e09ffd2f751bf61b94deba89f6ee10bccb120c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_909290f4b65b1081cd2aed121e09ffd2f751bf61b94deba89f6ee10bccb120c3->enter($__internal_909290f4b65b1081cd2aed121e09ffd2f751bf61b94deba89f6ee10bccb120c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_61e814065dc9248f42b57d438e9a8786de10a46b2e09aa95fa0af1302299a6d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61e814065dc9248f42b57d438e9a8786de10a46b2e09aa95fa0af1302299a6d5->enter($__internal_61e814065dc9248f42b57d438e9a8786de10a46b2e09aa95fa0af1302299a6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_909290f4b65b1081cd2aed121e09ffd2f751bf61b94deba89f6ee10bccb120c3->leave($__internal_909290f4b65b1081cd2aed121e09ffd2f751bf61b94deba89f6ee10bccb120c3_prof);

        
        $__internal_61e814065dc9248f42b57d438e9a8786de10a46b2e09aa95fa0af1302299a6d5->leave($__internal_61e814065dc9248f42b57d438e9a8786de10a46b2e09aa95fa0af1302299a6d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/choice_attributes.html.php");
    }
}
