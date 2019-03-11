<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_5d6ed4b575e24669b0cba5086badcd408db225d0939089c120b3dbea404e5ff4 extends Twig_Template
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
        $__internal_a0a5e4f7c189296a65101e3eb4215c847a9f811357d6d09dd6f3d66528128a0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0a5e4f7c189296a65101e3eb4215c847a9f811357d6d09dd6f3d66528128a0d->enter($__internal_a0a5e4f7c189296a65101e3eb4215c847a9f811357d6d09dd6f3d66528128a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_fb673e843caba2e3ecf90de67b38d443579287d29dcc6c8913d55d181da3a4f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb673e843caba2e3ecf90de67b38d443579287d29dcc6c8913d55d181da3a4f6->enter($__internal_fb673e843caba2e3ecf90de67b38d443579287d29dcc6c8913d55d181da3a4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_a0a5e4f7c189296a65101e3eb4215c847a9f811357d6d09dd6f3d66528128a0d->leave($__internal_a0a5e4f7c189296a65101e3eb4215c847a9f811357d6d09dd6f3d66528128a0d_prof);

        
        $__internal_fb673e843caba2e3ecf90de67b38d443579287d29dcc6c8913d55d181da3a4f6->leave($__internal_fb673e843caba2e3ecf90de67b38d443579287d29dcc6c8913d55d181da3a4f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/home/master/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
