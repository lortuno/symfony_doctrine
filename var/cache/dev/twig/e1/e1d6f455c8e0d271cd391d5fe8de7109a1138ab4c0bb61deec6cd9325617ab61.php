<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_a95c110e56c1e8f788b2428151664057d7fba1e53a9f7369a0bb929c72fa294e extends Twig_Template
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
        $__internal_341c44fb85c49b54c47119c51d07cecf3257535136b9d4aa18603c235fe6f62f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_341c44fb85c49b54c47119c51d07cecf3257535136b9d4aa18603c235fe6f62f->enter($__internal_341c44fb85c49b54c47119c51d07cecf3257535136b9d4aa18603c235fe6f62f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_64117a2c18bd8062bdce1694189ad4fd98b3c0cc0ca36ca51e9cbe4fc726a375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64117a2c18bd8062bdce1694189ad4fd98b3c0cc0ca36ca51e9cbe4fc726a375->enter($__internal_64117a2c18bd8062bdce1694189ad4fd98b3c0cc0ca36ca51e9cbe4fc726a375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_341c44fb85c49b54c47119c51d07cecf3257535136b9d4aa18603c235fe6f62f->leave($__internal_341c44fb85c49b54c47119c51d07cecf3257535136b9d4aa18603c235fe6f62f_prof);

        
        $__internal_64117a2c18bd8062bdce1694189ad4fd98b3c0cc0ca36ca51e9cbe4fc726a375->leave($__internal_64117a2c18bd8062bdce1694189ad4fd98b3c0cc0ca36ca51e9cbe4fc726a375_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/master/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/form_rest.html.php");
    }
}
