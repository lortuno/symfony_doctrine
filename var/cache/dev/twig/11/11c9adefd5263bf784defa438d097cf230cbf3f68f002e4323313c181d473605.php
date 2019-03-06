<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_1556a1b22d534511f11e464e01a6e835e54c1f08dc975de6ab949230b5845d07 extends Twig_Template
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
        $__internal_b0af73b7e87947a5d9ab2c83a8f7a8065042dae0f004414a6d05b7aa18f8ca52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0af73b7e87947a5d9ab2c83a8f7a8065042dae0f004414a6d05b7aa18f8ca52->enter($__internal_b0af73b7e87947a5d9ab2c83a8f7a8065042dae0f004414a6d05b7aa18f8ca52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_4be0f10304ac5886e41216a118e10e07bfd37494db2c7e69cc2ad5ca77e54d7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4be0f10304ac5886e41216a118e10e07bfd37494db2c7e69cc2ad5ca77e54d7d->enter($__internal_4be0f10304ac5886e41216a118e10e07bfd37494db2c7e69cc2ad5ca77e54d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_b0af73b7e87947a5d9ab2c83a8f7a8065042dae0f004414a6d05b7aa18f8ca52->leave($__internal_b0af73b7e87947a5d9ab2c83a8f7a8065042dae0f004414a6d05b7aa18f8ca52_prof);

        
        $__internal_4be0f10304ac5886e41216a118e10e07bfd37494db2c7e69cc2ad5ca77e54d7d->leave($__internal_4be0f10304ac5886e41216a118e10e07bfd37494db2c7e69cc2ad5ca77e54d7d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/form_rest.html.php");
    }
}
