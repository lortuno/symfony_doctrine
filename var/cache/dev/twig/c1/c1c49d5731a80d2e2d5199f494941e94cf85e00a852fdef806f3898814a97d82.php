<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_3bbca00f8ea846175409d92640ff5eb318ddaaa358fc04b3370e77eca1002675 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_333b210895af26879c7a5f72f396b96ca244587897b1a8a4b0677d12c09785d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_333b210895af26879c7a5f72f396b96ca244587897b1a8a4b0677d12c09785d9->enter($__internal_333b210895af26879c7a5f72f396b96ca244587897b1a8a4b0677d12c09785d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_ca13dfede6018af6e8281bbe89e0e933c69330f513f856ec3167a8b4643825fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca13dfede6018af6e8281bbe89e0e933c69330f513f856ec3167a8b4643825fd->enter($__internal_ca13dfede6018af6e8281bbe89e0e933c69330f513f856ec3167a8b4643825fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_333b210895af26879c7a5f72f396b96ca244587897b1a8a4b0677d12c09785d9->leave($__internal_333b210895af26879c7a5f72f396b96ca244587897b1a8a4b0677d12c09785d9_prof);

        
        $__internal_ca13dfede6018af6e8281bbe89e0e933c69330f513f856ec3167a8b4643825fd->leave($__internal_ca13dfede6018af6e8281bbe89e0e933c69330f513f856ec3167a8b4643825fd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4fa21cae5ed04d5e4c3b75f8eb08d693e719ce373a24f3723a0b0129659f4b4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fa21cae5ed04d5e4c3b75f8eb08d693e719ce373a24f3723a0b0129659f4b4f->enter($__internal_4fa21cae5ed04d5e4c3b75f8eb08d693e719ce373a24f3723a0b0129659f4b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d9b72d9229ef957bed0ac3a55358c5b405565e2b50ea7bc52de4458208b0c8ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9b72d9229ef957bed0ac3a55358c5b405565e2b50ea7bc52de4458208b0c8ac->enter($__internal_d9b72d9229ef957bed0ac3a55358c5b405565e2b50ea7bc52de4458208b0c8ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d9b72d9229ef957bed0ac3a55358c5b405565e2b50ea7bc52de4458208b0c8ac->leave($__internal_d9b72d9229ef957bed0ac3a55358c5b405565e2b50ea7bc52de4458208b0c8ac_prof);

        
        $__internal_4fa21cae5ed04d5e4c3b75f8eb08d693e719ce373a24f3723a0b0129659f4b4f->leave($__internal_4fa21cae5ed04d5e4c3b75f8eb08d693e719ce373a24f3723a0b0129659f4b4f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_ef58d13375a1755628c91528e94862e0f8cc9082c2fc3837282a59c8f7ac6e4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef58d13375a1755628c91528e94862e0f8cc9082c2fc3837282a59c8f7ac6e4a->enter($__internal_ef58d13375a1755628c91528e94862e0f8cc9082c2fc3837282a59c8f7ac6e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5fc5ee9ca7a0a187fc0c5416c58ae7065c2e2d8e6ae38146f94d51dcc51fabe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fc5ee9ca7a0a187fc0c5416c58ae7065c2e2d8e6ae38146f94d51dcc51fabe6->enter($__internal_5fc5ee9ca7a0a187fc0c5416c58ae7065c2e2d8e6ae38146f94d51dcc51fabe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_5fc5ee9ca7a0a187fc0c5416c58ae7065c2e2d8e6ae38146f94d51dcc51fabe6->leave($__internal_5fc5ee9ca7a0a187fc0c5416c58ae7065c2e2d8e6ae38146f94d51dcc51fabe6_prof);

        
        $__internal_ef58d13375a1755628c91528e94862e0f8cc9082c2fc3837282a59c8f7ac6e4a->leave($__internal_ef58d13375a1755628c91528e94862e0f8cc9082c2fc3837282a59c8f7ac6e4a_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_1564e25c3207e2cfc67decb5d16202dee4a838939e7189fb0b62f1d385fe5ea6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1564e25c3207e2cfc67decb5d16202dee4a838939e7189fb0b62f1d385fe5ea6->enter($__internal_1564e25c3207e2cfc67decb5d16202dee4a838939e7189fb0b62f1d385fe5ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e39896b4db33c967454c55882c4e30f2125f356f4a3f62f30a899cbd7bbefc20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e39896b4db33c967454c55882c4e30f2125f356f4a3f62f30a899cbd7bbefc20->enter($__internal_e39896b4db33c967454c55882c4e30f2125f356f4a3f62f30a899cbd7bbefc20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e39896b4db33c967454c55882c4e30f2125f356f4a3f62f30a899cbd7bbefc20->leave($__internal_e39896b4db33c967454c55882c4e30f2125f356f4a3f62f30a899cbd7bbefc20_prof);

        
        $__internal_1564e25c3207e2cfc67decb5d16202dee4a838939e7189fb0b62f1d385fe5ea6->leave($__internal_1564e25c3207e2cfc67decb5d16202dee4a838939e7189fb0b62f1d385fe5ea6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/master/symfony_doctrine/symfony_doctrine/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}
