<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_d05481e366f527b1bf55cb3d02aef619f9a09f79efd5ca5a81e27d3a123dac36 extends Twig_Template
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
        $__internal_cafe111c2d3542c0fa9d927496381dcb9d21e78342cd7d96b18f962b92d76db7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cafe111c2d3542c0fa9d927496381dcb9d21e78342cd7d96b18f962b92d76db7->enter($__internal_cafe111c2d3542c0fa9d927496381dcb9d21e78342cd7d96b18f962b92d76db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_25da15b5a19f79f0a8729cab4de7f16fdbabbcafcecc03bf6490e5c8dc036025 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25da15b5a19f79f0a8729cab4de7f16fdbabbcafcecc03bf6490e5c8dc036025->enter($__internal_25da15b5a19f79f0a8729cab4de7f16fdbabbcafcecc03bf6490e5c8dc036025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_cafe111c2d3542c0fa9d927496381dcb9d21e78342cd7d96b18f962b92d76db7->leave($__internal_cafe111c2d3542c0fa9d927496381dcb9d21e78342cd7d96b18f962b92d76db7_prof);

        
        $__internal_25da15b5a19f79f0a8729cab4de7f16fdbabbcafcecc03bf6490e5c8dc036025->leave($__internal_25da15b5a19f79f0a8729cab4de7f16fdbabbcafcecc03bf6490e5c8dc036025_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
