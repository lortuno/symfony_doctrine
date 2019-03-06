<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_6e1ae82fe086467b46881e794d06fb93ad0654c73832fa244dbd39808bf93612 extends Twig_Template
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
        $__internal_457000c0f488c18d73bd151d0cf01eb4233f2d6f8ccdbc5e3f65d7201f37f072 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_457000c0f488c18d73bd151d0cf01eb4233f2d6f8ccdbc5e3f65d7201f37f072->enter($__internal_457000c0f488c18d73bd151d0cf01eb4233f2d6f8ccdbc5e3f65d7201f37f072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_065d55ca45de1fe9fc25d0a1b1403d8ddbc81308954109ae069cf4acc3ac7b62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_065d55ca45de1fe9fc25d0a1b1403d8ddbc81308954109ae069cf4acc3ac7b62->enter($__internal_065d55ca45de1fe9fc25d0a1b1403d8ddbc81308954109ae069cf4acc3ac7b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_457000c0f488c18d73bd151d0cf01eb4233f2d6f8ccdbc5e3f65d7201f37f072->leave($__internal_457000c0f488c18d73bd151d0cf01eb4233f2d6f8ccdbc5e3f65d7201f37f072_prof);

        
        $__internal_065d55ca45de1fe9fc25d0a1b1403d8ddbc81308954109ae069cf4acc3ac7b62->leave($__internal_065d55ca45de1fe9fc25d0a1b1403d8ddbc81308954109ae069cf4acc3ac7b62_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/form_rows.html.php");
    }
}
