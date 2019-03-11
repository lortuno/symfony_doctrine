<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_681bee652597b2cd50a64386e30cdf0da88e3e01d425079bded266e01eaaa15a extends Twig_Template
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
        $__internal_3c760fe16e217b328331e7aafb664d6657b6b1e435595208cb343ebdd06c6d33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c760fe16e217b328331e7aafb664d6657b6b1e435595208cb343ebdd06c6d33->enter($__internal_3c760fe16e217b328331e7aafb664d6657b6b1e435595208cb343ebdd06c6d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_bd531e6fa44c0d4a3e2cb12f965d18e390c58b7a783969f0cbb991406ff72a7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd531e6fa44c0d4a3e2cb12f965d18e390c58b7a783969f0cbb991406ff72a7d->enter($__internal_bd531e6fa44c0d4a3e2cb12f965d18e390c58b7a783969f0cbb991406ff72a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_3c760fe16e217b328331e7aafb664d6657b6b1e435595208cb343ebdd06c6d33->leave($__internal_3c760fe16e217b328331e7aafb664d6657b6b1e435595208cb343ebdd06c6d33_prof);

        
        $__internal_bd531e6fa44c0d4a3e2cb12f965d18e390c58b7a783969f0cbb991406ff72a7d->leave($__internal_bd531e6fa44c0d4a3e2cb12f965d18e390c58b7a783969f0cbb991406ff72a7d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/master/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/form_rows.html.php");
    }
}
