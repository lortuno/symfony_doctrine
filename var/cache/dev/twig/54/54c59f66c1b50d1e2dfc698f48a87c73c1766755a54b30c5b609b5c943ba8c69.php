<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_0617dae2026b730c3d04017879f19d8b5d8ad65d9ff017e8c46ae3b4462d833f extends Twig_Template
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
        $__internal_0ef8d5844ab78b580ce481cb06dc91aa337570323be791a50f94c4f364bc3ec2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ef8d5844ab78b580ce481cb06dc91aa337570323be791a50f94c4f364bc3ec2->enter($__internal_0ef8d5844ab78b580ce481cb06dc91aa337570323be791a50f94c4f364bc3ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_83141548df37d4403295ae37ad5c92764b6611f924d06618082e3e60558024aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83141548df37d4403295ae37ad5c92764b6611f924d06618082e3e60558024aa->enter($__internal_83141548df37d4403295ae37ad5c92764b6611f924d06618082e3e60558024aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_0ef8d5844ab78b580ce481cb06dc91aa337570323be791a50f94c4f364bc3ec2->leave($__internal_0ef8d5844ab78b580ce481cb06dc91aa337570323be791a50f94c4f364bc3ec2_prof);

        
        $__internal_83141548df37d4403295ae37ad5c92764b6611f924d06618082e3e60558024aa->leave($__internal_83141548df37d4403295ae37ad5c92764b6611f924d06618082e3e60558024aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/master/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/number_widget.html.php");
    }
}
