<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_f8b644bef8b4bc931b24d69ac4b727eb1db654ca12258a5b0ac02407654d39ac extends Twig_Template
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
        $__internal_bc68d1ac5f7fd9f4a7d6e7ea445c4e633646494a6b846038934191e941c8479c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc68d1ac5f7fd9f4a7d6e7ea445c4e633646494a6b846038934191e941c8479c->enter($__internal_bc68d1ac5f7fd9f4a7d6e7ea445c4e633646494a6b846038934191e941c8479c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_16d47e6d5de210b51d790771982acc82e56660de0273d26e91b361faee2c217a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16d47e6d5de210b51d790771982acc82e56660de0273d26e91b361faee2c217a->enter($__internal_16d47e6d5de210b51d790771982acc82e56660de0273d26e91b361faee2c217a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_bc68d1ac5f7fd9f4a7d6e7ea445c4e633646494a6b846038934191e941c8479c->leave($__internal_bc68d1ac5f7fd9f4a7d6e7ea445c4e633646494a6b846038934191e941c8479c_prof);

        
        $__internal_16d47e6d5de210b51d790771982acc82e56660de0273d26e91b361faee2c217a->leave($__internal_16d47e6d5de210b51d790771982acc82e56660de0273d26e91b361faee2c217a_prof);

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
", "@Framework/Form/choice_attributes.html.php", "/home/master/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/choice_attributes.html.php");
    }
}
