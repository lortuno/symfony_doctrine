<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_a6aba0f8cd43b0bff40be8f7815610815217c9d794cbb271023a1cf41f792f4b extends Twig_Template
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
        $__internal_66c2a3a0d9333312e29da2c0c4fdfead29bb6ac7c7b3921801edc7487001a2a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66c2a3a0d9333312e29da2c0c4fdfead29bb6ac7c7b3921801edc7487001a2a1->enter($__internal_66c2a3a0d9333312e29da2c0c4fdfead29bb6ac7c7b3921801edc7487001a2a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_ca419650f6c4e567892bbc653c6866b4f7a93e1de3d5fe969088b2e0ff362a6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca419650f6c4e567892bbc653c6866b4f7a93e1de3d5fe969088b2e0ff362a6e->enter($__internal_ca419650f6c4e567892bbc653c6866b4f7a93e1de3d5fe969088b2e0ff362a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_66c2a3a0d9333312e29da2c0c4fdfead29bb6ac7c7b3921801edc7487001a2a1->leave($__internal_66c2a3a0d9333312e29da2c0c4fdfead29bb6ac7c7b3921801edc7487001a2a1_prof);

        
        $__internal_ca419650f6c4e567892bbc653c6866b4f7a93e1de3d5fe969088b2e0ff362a6e->leave($__internal_ca419650f6c4e567892bbc653c6866b4f7a93e1de3d5fe969088b2e0ff362a6e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/master/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/submit_widget.html.php");
    }
}
