<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_9280859dbc93d884db112aac6407b33bc945e30341cda90635b24fe376965c5d extends Twig_Template
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
        $__internal_c6cf34e84f3be93a30963d27dc93d78f851fb718236e06d52560d63a944ccdf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6cf34e84f3be93a30963d27dc93d78f851fb718236e06d52560d63a944ccdf9->enter($__internal_c6cf34e84f3be93a30963d27dc93d78f851fb718236e06d52560d63a944ccdf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_a7f3044effe26b66f21abfc0bc2b63b5d586869c1f87c9e899ddf48e84de20ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7f3044effe26b66f21abfc0bc2b63b5d586869c1f87c9e899ddf48e84de20ff->enter($__internal_a7f3044effe26b66f21abfc0bc2b63b5d586869c1f87c9e899ddf48e84de20ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_c6cf34e84f3be93a30963d27dc93d78f851fb718236e06d52560d63a944ccdf9->leave($__internal_c6cf34e84f3be93a30963d27dc93d78f851fb718236e06d52560d63a944ccdf9_prof);

        
        $__internal_a7f3044effe26b66f21abfc0bc2b63b5d586869c1f87c9e899ddf48e84de20ff->leave($__internal_a7f3044effe26b66f21abfc0bc2b63b5d586869c1f87c9e899ddf48e84de20ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/framework-bundle/Resources/views/Form/attributes.html.php");
    }
}
