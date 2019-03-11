<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_bfa5842954fdce24944eb7334d070fd970ec1ff1168de5eea786e154b9767d74 extends Twig_Template
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
        $__internal_4747a05b19a63778844de5332829feee818e00481053c33b0bef28ea06279e2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4747a05b19a63778844de5332829feee818e00481053c33b0bef28ea06279e2e->enter($__internal_4747a05b19a63778844de5332829feee818e00481053c33b0bef28ea06279e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_a111664dd2ff470e5a800995de9096934a3962acf02e3702aa8bc7efb504eb8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a111664dd2ff470e5a800995de9096934a3962acf02e3702aa8bc7efb504eb8b->enter($__internal_a111664dd2ff470e5a800995de9096934a3962acf02e3702aa8bc7efb504eb8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_4747a05b19a63778844de5332829feee818e00481053c33b0bef28ea06279e2e->leave($__internal_4747a05b19a63778844de5332829feee818e00481053c33b0bef28ea06279e2e_prof);

        
        $__internal_a111664dd2ff470e5a800995de9096934a3962acf02e3702aa8bc7efb504eb8b->leave($__internal_a111664dd2ff470e5a800995de9096934a3962acf02e3702aa8bc7efb504eb8b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/master/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/collection_widget.html.php");
    }
}
