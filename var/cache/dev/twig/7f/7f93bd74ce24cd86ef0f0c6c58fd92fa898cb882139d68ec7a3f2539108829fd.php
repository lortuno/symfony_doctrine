<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_856468fd40389438836f0796e213298f35a8cdddf43bd7c563c362b4f0d62afe extends Twig_Template
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
        $__internal_ccc1f1f4cd796acb0d519605eb6bbfb4574f04c03e8a4b6b564a594f93cb8ff7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccc1f1f4cd796acb0d519605eb6bbfb4574f04c03e8a4b6b564a594f93cb8ff7->enter($__internal_ccc1f1f4cd796acb0d519605eb6bbfb4574f04c03e8a4b6b564a594f93cb8ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_47c7cdb7372ab71ae88ec821145b4d496100de0834b900a1fb99f7e0809394e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47c7cdb7372ab71ae88ec821145b4d496100de0834b900a1fb99f7e0809394e2->enter($__internal_47c7cdb7372ab71ae88ec821145b4d496100de0834b900a1fb99f7e0809394e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_ccc1f1f4cd796acb0d519605eb6bbfb4574f04c03e8a4b6b564a594f93cb8ff7->leave($__internal_ccc1f1f4cd796acb0d519605eb6bbfb4574f04c03e8a4b6b564a594f93cb8ff7_prof);

        
        $__internal_47c7cdb7372ab71ae88ec821145b4d496100de0834b900a1fb99f7e0809394e2->leave($__internal_47c7cdb7372ab71ae88ec821145b4d496100de0834b900a1fb99f7e0809394e2_prof);

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
", "@Framework/FormTable/hidden_row.html.php", "/home/master/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
