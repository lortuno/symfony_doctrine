<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_18fa494268410f121ea8685620f8d0932fb0bc51b97899a2eeb2ec760caf250d extends Twig_Template
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
        $__internal_16095f21074113be34605d0f251be0e129cae41dd0f42a3d9e45ba845a188c82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16095f21074113be34605d0f251be0e129cae41dd0f42a3d9e45ba845a188c82->enter($__internal_16095f21074113be34605d0f251be0e129cae41dd0f42a3d9e45ba845a188c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_7debc236de5e2d025b2f07d3c6e1a5f47eced96b9ce72bd19a07cc3666196416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7debc236de5e2d025b2f07d3c6e1a5f47eced96b9ce72bd19a07cc3666196416->enter($__internal_7debc236de5e2d025b2f07d3c6e1a5f47eced96b9ce72bd19a07cc3666196416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_16095f21074113be34605d0f251be0e129cae41dd0f42a3d9e45ba845a188c82->leave($__internal_16095f21074113be34605d0f251be0e129cae41dd0f42a3d9e45ba845a188c82_prof);

        
        $__internal_7debc236de5e2d025b2f07d3c6e1a5f47eced96b9ce72bd19a07cc3666196416->leave($__internal_7debc236de5e2d025b2f07d3c6e1a5f47eced96b9ce72bd19a07cc3666196416_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/master/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
