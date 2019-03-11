<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_df6ae8d3f5ce6659143996373f32416e4c439d096b081f10760177d515e1e682 extends Twig_Template
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
        $__internal_4a99200b06ff432355ac030a7d38cba445159d6f95d76493c1c2b61889fe0900 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a99200b06ff432355ac030a7d38cba445159d6f95d76493c1c2b61889fe0900->enter($__internal_4a99200b06ff432355ac030a7d38cba445159d6f95d76493c1c2b61889fe0900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_5bb44755e172fb531e647e7a8606ed9667692c0279ec863a23139197f558f79f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bb44755e172fb531e647e7a8606ed9667692c0279ec863a23139197f558f79f->enter($__internal_5bb44755e172fb531e647e7a8606ed9667692c0279ec863a23139197f558f79f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_4a99200b06ff432355ac030a7d38cba445159d6f95d76493c1c2b61889fe0900->leave($__internal_4a99200b06ff432355ac030a7d38cba445159d6f95d76493c1c2b61889fe0900_prof);

        
        $__internal_5bb44755e172fb531e647e7a8606ed9667692c0279ec863a23139197f558f79f->leave($__internal_5bb44755e172fb531e647e7a8606ed9667692c0279ec863a23139197f558f79f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_168eea44c78f30ca4546bf216be6a11959fc10c3473a3b78ae98a4c40966437a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_168eea44c78f30ca4546bf216be6a11959fc10c3473a3b78ae98a4c40966437a->enter($__internal_168eea44c78f30ca4546bf216be6a11959fc10c3473a3b78ae98a4c40966437a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4e9d85e417533a4470a5899527c4469bcff17b2770c64b308b34c5af5b2f1e63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e9d85e417533a4470a5899527c4469bcff17b2770c64b308b34c5af5b2f1e63->enter($__internal_4e9d85e417533a4470a5899527c4469bcff17b2770c64b308b34c5af5b2f1e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4e9d85e417533a4470a5899527c4469bcff17b2770c64b308b34c5af5b2f1e63->leave($__internal_4e9d85e417533a4470a5899527c4469bcff17b2770c64b308b34c5af5b2f1e63_prof);

        
        $__internal_168eea44c78f30ca4546bf216be6a11959fc10c3473a3b78ae98a4c40966437a->leave($__internal_168eea44c78f30ca4546bf216be6a11959fc10c3473a3b78ae98a4c40966437a_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_f49b366b968fc2adcf4c7c25287592352f97505a8bcf9f1f5d62dc4262241617 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f49b366b968fc2adcf4c7c25287592352f97505a8bcf9f1f5d62dc4262241617->enter($__internal_f49b366b968fc2adcf4c7c25287592352f97505a8bcf9f1f5d62dc4262241617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2dd3e7e1082061be93ae241ce5c119bc94ed4bd4cdb2f9eaa4bfe2e5fee7e42d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dd3e7e1082061be93ae241ce5c119bc94ed4bd4cdb2f9eaa4bfe2e5fee7e42d->enter($__internal_2dd3e7e1082061be93ae241ce5c119bc94ed4bd4cdb2f9eaa4bfe2e5fee7e42d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_2dd3e7e1082061be93ae241ce5c119bc94ed4bd4cdb2f9eaa4bfe2e5fee7e42d->leave($__internal_2dd3e7e1082061be93ae241ce5c119bc94ed4bd4cdb2f9eaa4bfe2e5fee7e42d_prof);

        
        $__internal_f49b366b968fc2adcf4c7c25287592352f97505a8bcf9f1f5d62dc4262241617->leave($__internal_f49b366b968fc2adcf4c7c25287592352f97505a8bcf9f1f5d62dc4262241617_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_54086b50dc475aba201c916d94c3d0effa518ccf6c8566249b8d4a6786ab8b0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54086b50dc475aba201c916d94c3d0effa518ccf6c8566249b8d4a6786ab8b0f->enter($__internal_54086b50dc475aba201c916d94c3d0effa518ccf6c8566249b8d4a6786ab8b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7e99b7764be71537e865536435554abaa54f18844f0129e97ea1a2019ca9a6f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e99b7764be71537e865536435554abaa54f18844f0129e97ea1a2019ca9a6f4->enter($__internal_7e99b7764be71537e865536435554abaa54f18844f0129e97ea1a2019ca9a6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7e99b7764be71537e865536435554abaa54f18844f0129e97ea1a2019ca9a6f4->leave($__internal_7e99b7764be71537e865536435554abaa54f18844f0129e97ea1a2019ca9a6f4_prof);

        
        $__internal_54086b50dc475aba201c916d94c3d0effa518ccf6c8566249b8d4a6786ab8b0f->leave($__internal_54086b50dc475aba201c916d94c3d0effa518ccf6c8566249b8d4a6786ab8b0f_prof);

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
", "@Twig/layout.html.twig", "/home/master/symfony_doctrine/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}
