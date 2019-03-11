<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_c4654ddd80101f155558bc36ec11bf2295dc385b363209863b9896c1648dd501 extends Twig_Template
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
        $__internal_358fc126d0519c8d9bef92575a71c51e00e7668580bd1663065c94a4a6f49e4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_358fc126d0519c8d9bef92575a71c51e00e7668580bd1663065c94a4a6f49e4d->enter($__internal_358fc126d0519c8d9bef92575a71c51e00e7668580bd1663065c94a4a6f49e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_552dd7c825959a6183abee73540564073a37f01c54440cac978fe0bb05d889fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_552dd7c825959a6183abee73540564073a37f01c54440cac978fe0bb05d889fa->enter($__internal_552dd7c825959a6183abee73540564073a37f01c54440cac978fe0bb05d889fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_358fc126d0519c8d9bef92575a71c51e00e7668580bd1663065c94a4a6f49e4d->leave($__internal_358fc126d0519c8d9bef92575a71c51e00e7668580bd1663065c94a4a6f49e4d_prof);

        
        $__internal_552dd7c825959a6183abee73540564073a37f01c54440cac978fe0bb05d889fa->leave($__internal_552dd7c825959a6183abee73540564073a37f01c54440cac978fe0bb05d889fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/master/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/container_attributes.html.php");
    }
}
