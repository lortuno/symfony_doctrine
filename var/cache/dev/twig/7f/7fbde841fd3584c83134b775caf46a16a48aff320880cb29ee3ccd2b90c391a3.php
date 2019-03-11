<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_401a932990491ded84c4065c4e21c34e8e6d56238de15466dd1500dfdb7c19cf extends Twig_Template
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
        $__internal_61222dc725ce0fbaba0424c05e2d9f90d3e67ff590a001209237307c848b3770 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61222dc725ce0fbaba0424c05e2d9f90d3e67ff590a001209237307c848b3770->enter($__internal_61222dc725ce0fbaba0424c05e2d9f90d3e67ff590a001209237307c848b3770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_635d2d613e1505971cec059f0a1ae9c87d01dd674dba72985bdfb55c11aa491f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_635d2d613e1505971cec059f0a1ae9c87d01dd674dba72985bdfb55c11aa491f->enter($__internal_635d2d613e1505971cec059f0a1ae9c87d01dd674dba72985bdfb55c11aa491f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_61222dc725ce0fbaba0424c05e2d9f90d3e67ff590a001209237307c848b3770->leave($__internal_61222dc725ce0fbaba0424c05e2d9f90d3e67ff590a001209237307c848b3770_prof);

        
        $__internal_635d2d613e1505971cec059f0a1ae9c87d01dd674dba72985bdfb55c11aa491f->leave($__internal_635d2d613e1505971cec059f0a1ae9c87d01dd674dba72985bdfb55c11aa491f_prof);

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
", "@Framework/Form/form_errors.html.php", "/home/master/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/form_errors.html.php");
    }
}
