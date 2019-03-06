<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_4d250d0e5df93b104f6ac4a31d63625c2a6cef35f165e59d21d92be1b3c797cc extends Twig_Template
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
        $__internal_3decbeeba686d1667f1110287b3b5bc792c5eda15ddfbe699085b4e09871023d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3decbeeba686d1667f1110287b3b5bc792c5eda15ddfbe699085b4e09871023d->enter($__internal_3decbeeba686d1667f1110287b3b5bc792c5eda15ddfbe699085b4e09871023d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_67705554e8a1a579c24a7fc682130262ae931f32dd523f5f70cf390c2e31f5e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67705554e8a1a579c24a7fc682130262ae931f32dd523f5f70cf390c2e31f5e6->enter($__internal_67705554e8a1a579c24a7fc682130262ae931f32dd523f5f70cf390c2e31f5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_3decbeeba686d1667f1110287b3b5bc792c5eda15ddfbe699085b4e09871023d->leave($__internal_3decbeeba686d1667f1110287b3b5bc792c5eda15ddfbe699085b4e09871023d_prof);

        
        $__internal_67705554e8a1a579c24a7fc682130262ae931f32dd523f5f70cf390c2e31f5e6->leave($__internal_67705554e8a1a579c24a7fc682130262ae931f32dd523f5f70cf390c2e31f5e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/form_end.html.php");
    }
}
