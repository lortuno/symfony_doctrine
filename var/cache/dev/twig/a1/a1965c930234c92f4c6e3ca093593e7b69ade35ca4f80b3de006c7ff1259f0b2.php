<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_55db10575a68fe1ea9399fd9f32b9fab477e8f52ced5aa09718833168b7dd76d extends Twig_Template
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
        $__internal_567cb7b981de0b5a822ccf1816f5232ac9bf22d8d2d059c0b3d8a49aa34a275d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_567cb7b981de0b5a822ccf1816f5232ac9bf22d8d2d059c0b3d8a49aa34a275d->enter($__internal_567cb7b981de0b5a822ccf1816f5232ac9bf22d8d2d059c0b3d8a49aa34a275d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_85fe0241f274f951fcbb94ed88c42bebc64c4919d69889f02df34341d9ed2f43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85fe0241f274f951fcbb94ed88c42bebc64c4919d69889f02df34341d9ed2f43->enter($__internal_85fe0241f274f951fcbb94ed88c42bebc64c4919d69889f02df34341d9ed2f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_567cb7b981de0b5a822ccf1816f5232ac9bf22d8d2d059c0b3d8a49aa34a275d->leave($__internal_567cb7b981de0b5a822ccf1816f5232ac9bf22d8d2d059c0b3d8a49aa34a275d_prof);

        
        $__internal_85fe0241f274f951fcbb94ed88c42bebc64c4919d69889f02df34341d9ed2f43->leave($__internal_85fe0241f274f951fcbb94ed88c42bebc64c4919d69889f02df34341d9ed2f43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/master/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/form_enctype.html.php");
    }
}
