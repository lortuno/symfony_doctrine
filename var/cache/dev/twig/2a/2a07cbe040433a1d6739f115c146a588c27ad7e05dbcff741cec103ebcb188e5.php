<?php

/* article/show.html.twig */
class __TwigTemplate_909cb7a406ae7ba4fb52fb2a34e715acc4d6cb69b60a096f32d1a2f9f33a6f9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54e1baa1c6a7af2728768ea521207d8c852f28b29376948298240c7c4fc4a46f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54e1baa1c6a7af2728768ea521207d8c852f28b29376948298240c7c4fc4a46f->enter($__internal_54e1baa1c6a7af2728768ea521207d8c852f28b29376948298240c7c4fc4a46f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $__internal_d779405225c5df344e207ba515f11c4340c4c547ac090bcac2801c141c585d21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d779405225c5df344e207ba515f11c4340c4c547ac090bcac2801c141c585d21->enter($__internal_d779405225c5df344e207ba515f11c4340c4c547ac090bcac2801c141c585d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54e1baa1c6a7af2728768ea521207d8c852f28b29376948298240c7c4fc4a46f->leave($__internal_54e1baa1c6a7af2728768ea521207d8c852f28b29376948298240c7c4fc4a46f_prof);

        
        $__internal_d779405225c5df344e207ba515f11c4340c4c547ac090bcac2801c141c585d21->leave($__internal_d779405225c5df344e207ba515f11c4340c4c547ac090bcac2801c141c585d21_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_53814b3d99245ef92cad0237b2f7f9e555b25223f5ec6e49aba642d8ba15261e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53814b3d99245ef92cad0237b2f7f9e555b25223f5ec6e49aba642d8ba15261e->enter($__internal_53814b3d99245ef92cad0237b2f7f9e555b25223f5ec6e49aba642d8ba15261e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a2705ee3ab27a283b7872bc273f22144b02a9f06f2a941763294859b99fa9450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2705ee3ab27a283b7872bc273f22144b02a9f06f2a941763294859b99fa9450->enter($__internal_a2705ee3ab27a283b7872bc273f22144b02a9f06f2a941763294859b99fa9450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Read: ";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        
        $__internal_a2705ee3ab27a283b7872bc273f22144b02a9f06f2a941763294859b99fa9450->leave($__internal_a2705ee3ab27a283b7872bc273f22144b02a9f06f2a941763294859b99fa9450_prof);

        
        $__internal_53814b3d99245ef92cad0237b2f7f9e555b25223f5ec6e49aba642d8ba15261e->leave($__internal_53814b3d99245ef92cad0237b2f7f9e555b25223f5ec6e49aba642d8ba15261e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d30e6924c89589e82279f5cba3ab97405e2fcebe059983ef971a6b7b9aaca53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d30e6924c89589e82279f5cba3ab97405e2fcebe059983ef971a6b7b9aaca53->enter($__internal_4d30e6924c89589e82279f5cba3ab97405e2fcebe059983ef971a6b7b9aaca53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a947c99da5a83c0946a3cbc57afa2665b654d5d2386e488e45080fa1f7bfe9c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a947c99da5a83c0946a3cbc57afa2665b654d5d2386e488e45080fa1f7bfe9c9->enter($__internal_a947c99da5a83c0946a3cbc57afa2665b654d5d2386e488e45080fa1f7bfe9c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"show-article-container p-3 mt-4\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <img class=\"show-article-img\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/asteroid.jpeg"), "html", null, true);
        echo "\">
                        <div class=\"show-article-title-container d-inline-block pl-3 align-middle\">
                            <span class=\"show-article-title \">";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
        echo "</span>
                            <br>
                            <span class=\"align-left article-details\"><img class=\"article-author-img rounded-circle\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/alien-profile.png"), "html", null, true);
        echo "\"> Mike Ferengi </span>
                            <span class=\"pl-2 article-details\"> 4 hours ago</span>
                            <span class=\"pl-2 article-details\">
                                <span class=\"js-like-article-count\">5</span>
                                <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_toggle_heart", array("slug" => (isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new Twig_Error_Runtime('Variable "slug" does not exist.', 21, $this->getSourceContext()); })()))), "html", null, true);
        echo "\" class=\"fa fa-heart-o like-article js-like-article\"></a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"article-text\">
                            ";
        // line 29
        echo (isset($context["articleContent"]) || array_key_exists("articleContent", $context) ? $context["articleContent"] : (function () { throw new Twig_Error_Runtime('Variable "articleContent" does not exist.', 29, $this->getSourceContext()); })());
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <p class=\"share-icons mb-5\"><span class=\"pr-1\">Share:</span> <i class=\"pr-1 fa fa-facebook-square\"></i><i class=\"pr-1 fa fa-twitter-square\"></i><i class=\"pr-1 fa fa-reddit-square\"></i><i class=\"pr-1 fa fa-share-alt-square\"></i></p>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <h3><i class=\"pr-3 fa fa-comment\"></i>";
        // line 40
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new Twig_Error_Runtime('Variable "comments" does not exist.', 40, $this->getSourceContext()); })())), "html", null, true);
        echo " Comments</h3>
                        <hr>

                        <div class=\"row mb-5\">
                            <div class=\"col-sm-12\">
                                <img class=\"comment-img rounded-circle\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/astronaut-profile.png"), "html", null, true);
        echo "\">
                                <div class=\"comment-container d-inline-block pl-3 align-top\">
                                    <span class=\"commenter-name\">Amy Oort</span>
                                    <div class=\"form-group\">
                                        <textarea class=\"form-control comment-form\" id=\"articleText\" rows=\"1\"></textarea>
                                    </div>
                                    <button type=\"submit\" class=\"btn btn-info\">Comment</button>
                                </div>
                            </div>
                        </div>

                        ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new Twig_Error_Runtime('Variable "comments" does not exist.', 56, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 57
            echo "                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <img class=\"comment-img rounded-circle\" src=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/alien-profile.png"), "html", null, true);
            echo "\">
                                <div class=\"comment-container d-inline-block pl-3 align-top\">
                                    <span class=\"commenter-name\">Mike Ferengi</span>
                                    <br>
                                    <span class=\"comment\"> ";
            // line 63
            echo twig_escape_filter($this->env, $context["comment"], "html", null, true);
            echo "</span>
                                    <p><a href=\"#\">Reply</a></p>
                                </div>
                            </div>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_a947c99da5a83c0946a3cbc57afa2665b654d5d2386e488e45080fa1f7bfe9c9->leave($__internal_a947c99da5a83c0946a3cbc57afa2665b654d5d2386e488e45080fa1f7bfe9c9_prof);

        
        $__internal_4d30e6924c89589e82279f5cba3ab97405e2fcebe059983ef971a6b7b9aaca53->leave($__internal_4d30e6924c89589e82279f5cba3ab97405e2fcebe059983ef971a6b7b9aaca53_prof);

    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_700ff38524bebb5be089641066153f476c00f16d134fdea59e2234c538f679f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_700ff38524bebb5be089641066153f476c00f16d134fdea59e2234c538f679f5->enter($__internal_700ff38524bebb5be089641066153f476c00f16d134fdea59e2234c538f679f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5fb1484c6ffaa0fc38fe7f4327259b1adc7eeff4177dc61da9c1107ec2bbb164 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fb1484c6ffaa0fc38fe7f4327259b1adc7eeff4177dc61da9c1107ec2bbb164->enter($__internal_5fb1484c6ffaa0fc38fe7f4327259b1adc7eeff4177dc61da9c1107ec2bbb164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 80
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/article_show.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_5fb1484c6ffaa0fc38fe7f4327259b1adc7eeff4177dc61da9c1107ec2bbb164->leave($__internal_5fb1484c6ffaa0fc38fe7f4327259b1adc7eeff4177dc61da9c1107ec2bbb164_prof);

        
        $__internal_700ff38524bebb5be089641066153f476c00f16d134fdea59e2234c538f679f5->leave($__internal_700ff38524bebb5be089641066153f476c00f16d134fdea59e2234c538f679f5_prof);

    }

    public function getTemplateName()
    {
        return "article/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 82,  197 => 80,  188 => 79,  170 => 69,  158 => 63,  151 => 59,  147 => 57,  143 => 56,  129 => 45,  121 => 40,  107 => 29,  96 => 21,  89 => 17,  84 => 15,  79 => 13,  70 => 6,  61 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Read: {{ title }}{% endblock %}

{% block body %}

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"show-article-container p-3 mt-4\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <img class=\"show-article-img\" src=\"{{ asset('images/asteroid.jpeg') }}\">
                        <div class=\"show-article-title-container d-inline-block pl-3 align-middle\">
                            <span class=\"show-article-title \">{{ title }}</span>
                            <br>
                            <span class=\"align-left article-details\"><img class=\"article-author-img rounded-circle\" src=\"{{ asset('images/alien-profile.png') }}\"> Mike Ferengi </span>
                            <span class=\"pl-2 article-details\"> 4 hours ago</span>
                            <span class=\"pl-2 article-details\">
                                <span class=\"js-like-article-count\">5</span>
                                <a href=\"{{ path('article_toggle_heart', {slug: slug}) }}\" class=\"fa fa-heart-o like-article js-like-article\"></a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"article-text\">
                            {{ articleContent|raw }}
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <p class=\"share-icons mb-5\"><span class=\"pr-1\">Share:</span> <i class=\"pr-1 fa fa-facebook-square\"></i><i class=\"pr-1 fa fa-twitter-square\"></i><i class=\"pr-1 fa fa-reddit-square\"></i><i class=\"pr-1 fa fa-share-alt-square\"></i></p>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <h3><i class=\"pr-3 fa fa-comment\"></i>{{ comments|length }} Comments</h3>
                        <hr>

                        <div class=\"row mb-5\">
                            <div class=\"col-sm-12\">
                                <img class=\"comment-img rounded-circle\" src=\"{{ asset('images/astronaut-profile.png') }}\">
                                <div class=\"comment-container d-inline-block pl-3 align-top\">
                                    <span class=\"commenter-name\">Amy Oort</span>
                                    <div class=\"form-group\">
                                        <textarea class=\"form-control comment-form\" id=\"articleText\" rows=\"1\"></textarea>
                                    </div>
                                    <button type=\"submit\" class=\"btn btn-info\">Comment</button>
                                </div>
                            </div>
                        </div>

                        {% for comment in comments %}
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <img class=\"comment-img rounded-circle\" src=\"{{ asset('images/alien-profile.png') }}\">
                                <div class=\"comment-container d-inline-block pl-3 align-top\">
                                    <span class=\"commenter-name\">Mike Ferengi</span>
                                    <br>
                                    <span class=\"comment\"> {{ comment }}</span>
                                    <p><a href=\"#\">Reply</a></p>
                                </div>
                            </div>
                        </div>
                        {% endfor %}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script src=\"{{ asset('js/article_show.js') }}\"></script>
{% endblock %}", "article/show.html.twig", "/home/master/symfony_doctrine/templates/article/show.html.twig");
    }
}
