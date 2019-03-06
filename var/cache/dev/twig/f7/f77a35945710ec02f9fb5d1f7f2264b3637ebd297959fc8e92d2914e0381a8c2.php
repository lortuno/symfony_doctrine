<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_3520fed7afd5263847d1fac538b4cee3cd7f5d0762af93e63b1a8171b3b2de35 extends Twig_Template
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
        $__internal_22d6049260c759754bc27541a4b4555c986733c51fc47537ac16117cd9744fc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22d6049260c759754bc27541a4b4555c986733c51fc47537ac16117cd9744fc1->enter($__internal_22d6049260c759754bc27541a4b4555c986733c51fc47537ac16117cd9744fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_cce34a57a2cf1443ca8d10778b1199b771ad7317b12c7a264dfba102aeadef8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cce34a57a2cf1443ca8d10778b1199b771ad7317b12c7a264dfba102aeadef8e->enter($__internal_cce34a57a2cf1443ca8d10778b1199b771ad7317b12c7a264dfba102aeadef8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_22d6049260c759754bc27541a4b4555c986733c51fc47537ac16117cd9744fc1->leave($__internal_22d6049260c759754bc27541a4b4555c986733c51fc47537ac16117cd9744fc1_prof);

        
        $__internal_cce34a57a2cf1443ca8d10778b1199b771ad7317b12c7a264dfba102aeadef8e->leave($__internal_cce34a57a2cf1443ca8d10778b1199b771ad7317b12c7a264dfba102aeadef8e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/form_errors.html.php");
    }
}
