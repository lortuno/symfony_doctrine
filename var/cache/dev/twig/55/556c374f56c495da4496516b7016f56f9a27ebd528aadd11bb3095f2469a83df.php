<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_be9f9f0c47805a7bb64fdbcc473bb6b2e303c66f3c08c0ace54841dd35a630e9 extends Twig_Template
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
        $__internal_a123ecc3a51cd596b91d46fdc9c3d7b440a716597df8af87a904111b93b933eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a123ecc3a51cd596b91d46fdc9c3d7b440a716597df8af87a904111b93b933eb->enter($__internal_a123ecc3a51cd596b91d46fdc9c3d7b440a716597df8af87a904111b93b933eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_369c515debe94113f211c6cfa9d93a675721d6f702e3cb9a865d3da15b08d713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_369c515debe94113f211c6cfa9d93a675721d6f702e3cb9a865d3da15b08d713->enter($__internal_369c515debe94113f211c6cfa9d93a675721d6f702e3cb9a865d3da15b08d713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_a123ecc3a51cd596b91d46fdc9c3d7b440a716597df8af87a904111b93b933eb->leave($__internal_a123ecc3a51cd596b91d46fdc9c3d7b440a716597df8af87a904111b93b933eb_prof);

        
        $__internal_369c515debe94113f211c6cfa9d93a675721d6f702e3cb9a865d3da15b08d713->leave($__internal_369c515debe94113f211c6cfa9d93a675721d6f702e3cb9a865d3da15b08d713_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/FormTable/button_row.html.php");
    }
}
