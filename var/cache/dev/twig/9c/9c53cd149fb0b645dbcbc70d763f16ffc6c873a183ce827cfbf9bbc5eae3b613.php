<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_53b254946cdf76abf8a384a5ab7e0b32abc50f07e3c3a41f7f3e5f863cbb8e09 extends Twig_Template
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
        $__internal_05d1cab95e4528f5e8faa1601f0f8e05ee729dcf302db4f9d3ae5d5c002546dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05d1cab95e4528f5e8faa1601f0f8e05ee729dcf302db4f9d3ae5d5c002546dc->enter($__internal_05d1cab95e4528f5e8faa1601f0f8e05ee729dcf302db4f9d3ae5d5c002546dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_2990a8a5ae7e7f07285431778a484f50d65aa458481ac79f5508076400e42ee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2990a8a5ae7e7f07285431778a484f50d65aa458481ac79f5508076400e42ee2->enter($__internal_2990a8a5ae7e7f07285431778a484f50d65aa458481ac79f5508076400e42ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_05d1cab95e4528f5e8faa1601f0f8e05ee729dcf302db4f9d3ae5d5c002546dc->leave($__internal_05d1cab95e4528f5e8faa1601f0f8e05ee729dcf302db4f9d3ae5d5c002546dc_prof);

        
        $__internal_2990a8a5ae7e7f07285431778a484f50d65aa458481ac79f5508076400e42ee2->leave($__internal_2990a8a5ae7e7f07285431778a484f50d65aa458481ac79f5508076400e42ee2_prof);

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
", "@Framework/Form/form_end.html.php", "/home/master/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/form_end.html.php");
    }
}
