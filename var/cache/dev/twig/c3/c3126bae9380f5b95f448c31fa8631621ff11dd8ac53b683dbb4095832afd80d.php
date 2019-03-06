<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_f7bbf1526e14582e02759532bab752c0a15e64aec6cff66c68179972a65c537f extends Twig_Template
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
        $__internal_6057188cb3b942691308d412707060a062d21d9147e986cdb0cc0244e2fd3ced = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6057188cb3b942691308d412707060a062d21d9147e986cdb0cc0244e2fd3ced->enter($__internal_6057188cb3b942691308d412707060a062d21d9147e986cdb0cc0244e2fd3ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_83943c26ed04b8a6e2aee6de43c846cb71895e69bc18b2507f34e28df25ed88c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83943c26ed04b8a6e2aee6de43c846cb71895e69bc18b2507f34e28df25ed88c->enter($__internal_83943c26ed04b8a6e2aee6de43c846cb71895e69bc18b2507f34e28df25ed88c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_6057188cb3b942691308d412707060a062d21d9147e986cdb0cc0244e2fd3ced->leave($__internal_6057188cb3b942691308d412707060a062d21d9147e986cdb0cc0244e2fd3ced_prof);

        
        $__internal_83943c26ed04b8a6e2aee6de43c846cb71895e69bc18b2507f34e28df25ed88c->leave($__internal_83943c26ed04b8a6e2aee6de43c846cb71895e69bc18b2507f34e28df25ed88c_prof);

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
", "@Framework/Form/choice_widget_expanded.html.php", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
