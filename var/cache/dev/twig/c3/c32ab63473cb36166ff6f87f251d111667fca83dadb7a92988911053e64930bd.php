<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_ffd2850c52741607cfb974612ea29a097ff8f6d0444f595d09f229e59378ce94 extends Twig_Template
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
        $__internal_bf2c62790400d49bb94f3730578e170e73fa712dafae1907bbef0a82b80a91ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf2c62790400d49bb94f3730578e170e73fa712dafae1907bbef0a82b80a91ed->enter($__internal_bf2c62790400d49bb94f3730578e170e73fa712dafae1907bbef0a82b80a91ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_1387c6c5401ded013fb1b0f99f2831a6cc63f4a083c7cdd926c50f0198c3b616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1387c6c5401ded013fb1b0f99f2831a6cc63f4a083c7cdd926c50f0198c3b616->enter($__internal_1387c6c5401ded013fb1b0f99f2831a6cc63f4a083c7cdd926c50f0198c3b616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_bf2c62790400d49bb94f3730578e170e73fa712dafae1907bbef0a82b80a91ed->leave($__internal_bf2c62790400d49bb94f3730578e170e73fa712dafae1907bbef0a82b80a91ed_prof);

        
        $__internal_1387c6c5401ded013fb1b0f99f2831a6cc63f4a083c7cdd926c50f0198c3b616->leave($__internal_1387c6c5401ded013fb1b0f99f2831a6cc63f4a083c7cdd926c50f0198c3b616_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/FormTable/form_row.html.php");
    }
}
