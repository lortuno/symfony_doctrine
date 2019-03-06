<?php

/* article/homepage.html.twig */
class __TwigTemplate_2c6ad9a7b4d79cd038e7948c6e74f0f32e9b604976302a9e31b15ea9a51fd8ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/homepage.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44ebd1d0d1afdc08d1953aa3a19cce2cf9987aac4f23a083ba9161a9a0928100 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44ebd1d0d1afdc08d1953aa3a19cce2cf9987aac4f23a083ba9161a9a0928100->enter($__internal_44ebd1d0d1afdc08d1953aa3a19cce2cf9987aac4f23a083ba9161a9a0928100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/homepage.html.twig"));

        $__internal_450fcc0f1df8393b4300d1d32ed6417cc4b930ad30411cf9b1f5629197f3b6cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_450fcc0f1df8393b4300d1d32ed6417cc4b930ad30411cf9b1f5629197f3b6cb->enter($__internal_450fcc0f1df8393b4300d1d32ed6417cc4b930ad30411cf9b1f5629197f3b6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44ebd1d0d1afdc08d1953aa3a19cce2cf9987aac4f23a083ba9161a9a0928100->leave($__internal_44ebd1d0d1afdc08d1953aa3a19cce2cf9987aac4f23a083ba9161a9a0928100_prof);

        
        $__internal_450fcc0f1df8393b4300d1d32ed6417cc4b930ad30411cf9b1f5629197f3b6cb->leave($__internal_450fcc0f1df8393b4300d1d32ed6417cc4b930ad30411cf9b1f5629197f3b6cb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b09a2fed264bc42753a8e4d9d2ab68f829ccc45aae67b1cb82cfbb79c522019a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b09a2fed264bc42753a8e4d9d2ab68f829ccc45aae67b1cb82cfbb79c522019a->enter($__internal_b09a2fed264bc42753a8e4d9d2ab68f829ccc45aae67b1cb82cfbb79c522019a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e8b3274fb37efdd03f309b7dfbe091c4c4bf7c9c1696a4dbd37513e4af3895d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8b3274fb37efdd03f309b7dfbe091c4c4bf7c9c1696a4dbd37513e4af3895d3->enter($__internal_e8b3274fb37efdd03f309b7dfbe091c4c4bf7c9c1696a4dbd37513e4af3895d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">

            <!-- Article List -->

            <div class=\"col-sm-12 col-md-8\">

                <!-- H1 Article -->
                <a class=\"main-article-link\" href=\"#\">
                    <div class=\"main-article mb-5 pb-3\">
                        <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/meteor-shower.jpg"), "html", null, true);
        echo "\" alt=\"meteor shower\">
                        <h1 class=\"text-center mt-2\">Ursid Meteor Shower: <br>Healthier than a regular shower?</h1>
                    </div>
                </a>

                <!-- Supporting Articles -->

                <div class=\"article-container my-1\">
                    <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_show", array("slug" => "why-asteroids-taste-like-bacon"));
        echo "\">
                        <img class=\"article-img\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/asteroid.jpeg"), "html", null, true);
        echo "\">
                        <div class=\"article-title d-inline-block pl-3 align-middle\">
                            <span>Why do Asteroids Taste Like Bacon?</span>
                            <br>
                            <span class=\"align-left article-details\"><img class=\"article-author-img rounded-circle\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/alien-profile.png"), "html", null, true);
        echo "\"> Mike Ferengi </span>
                            <span class=\"pl-5 article-details float-right\"> 3 hours ago</span>
                        </div>
                    </a>
                </div>

                <div class=\"article-container my-1\">
                    <a href=\"#\">
                        <img class=\"article-img\"  src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/mercury.jpeg"), "html", null, true);
        echo "\">
                        <div class=\"article-title d-inline-block pl-3 align-middle\">
                            <span>Life on Planet Mercury: <br> Tan, Relaxing and Fabulous</span>
                            <br>
                            <span class=\"align-left article-details\"><img class=\"article-author-img rounded-circle\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/astronaut-profile.png"), "html", null, true);
        echo "\"> Amy Oort </span>
                            <span class=\"pl-5 article-details float-right\"> 6 days ago</span>
                        </div>
                    </a>
                </div>

                <div class=\"article-container my-1\">
                    <a href=\"#\">
                        <img class=\"article-img\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/lightspeed.png"), "html", null, true);
        echo "\">
                        <div class=\"article-title d-inline-block pl-3 align-middle\">
                            <span>Light Speed Travel: <br> Fountain of Youth or Fallacy</span>
                            <br>
                            <span class=\"align-left article-details\"><img class=\"article-author-img rounded-circle\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/astronaut-profile.png"), "html", null, true);
        echo "\"> Amy Oort </span>
                            <span class=\"pl-5 article-details float-right\"> 2 weeks ago</span>
                        </div>
                    </a>
                </div>

            </div>

            <!-- Right bar ad space -->


            <div class=\"col-sm-12 col-md-4 text-center\">
                <div class=\"ad-space mx-auto mt-1 pb-2 pt-2\">
                    <img class=\"advertisement-img\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/space-ice.png"), "html", null, true);
        echo "\">
                    <p><span class=\"advertisement-text\">New:</span> Space Ice Cream!</p>
                    <button class=\"btn btn-info\">Buy Now!</button>
                </div>

                <div class=\"quote-space pb-2 pt-2 px-5\">
                    <h3 class=\"text-center pb-3\">Trending Quotes</h3>
                    <p><i class=\"fa fa-comment\"></i> \"Our two greatest problems are gravity and paperwork. We can lick gravity, but sometimes the paperwork is overwhelming.\" <br>— <a href=\"https://en.wikipedia.org/wiki/Wernher_von_Braun\">Wernher von Braun, Rocket Engineer</a></p>

                    <p class=\"pt-4\"><i class=\"fa fa-comment\"></i> \"Let's face it, space is a risky business. I always considered every launch a barely controlled explosion.\" <br>— <a href=\"https://en.wikipedia.org/wiki/Aaron_Cohen_(Deputy_NASA_administrator)\">Aaron Cohen, NASA Administrator</a></p>

                    <p class=\"pt-4\"><i class=\"fa fa-comment\"></i> \"If offered a seat on a rocket ship, don't ask what seat. Just get on.\"<br>— <a href=\"https://en.wikipedia.org/wiki/Christa_McAuliffe\">Christa McAuliffe, Challenger Astronaut</a>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_e8b3274fb37efdd03f309b7dfbe091c4c4bf7c9c1696a4dbd37513e4af3895d3->leave($__internal_e8b3274fb37efdd03f309b7dfbe091c4c4bf7c9c1696a4dbd37513e4af3895d3_prof);

        
        $__internal_b09a2fed264bc42753a8e4d9d2ab68f829ccc45aae67b1cb82cfbb79c522019a->leave($__internal_b09a2fed264bc42753a8e4d9d2ab68f829ccc45aae67b1cb82cfbb79c522019a_prof);

    }

    public function getTemplateName()
    {
        return "article/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 64,  119 => 51,  112 => 47,  101 => 39,  94 => 35,  83 => 27,  76 => 23,  72 => 22,  61 => 14,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">

            <!-- Article List -->

            <div class=\"col-sm-12 col-md-8\">

                <!-- H1 Article -->
                <a class=\"main-article-link\" href=\"#\">
                    <div class=\"main-article mb-5 pb-3\">
                        <img src=\"{{ asset('images/meteor-shower.jpg') }}\" alt=\"meteor shower\">
                        <h1 class=\"text-center mt-2\">Ursid Meteor Shower: <br>Healthier than a regular shower?</h1>
                    </div>
                </a>

                <!-- Supporting Articles -->

                <div class=\"article-container my-1\">
                    <a href=\"{{ path('article_show', {slug: 'why-asteroids-taste-like-bacon'}) }}\">
                        <img class=\"article-img\" src=\"{{ asset('images/asteroid.jpeg') }}\">
                        <div class=\"article-title d-inline-block pl-3 align-middle\">
                            <span>Why do Asteroids Taste Like Bacon?</span>
                            <br>
                            <span class=\"align-left article-details\"><img class=\"article-author-img rounded-circle\" src=\"{{ asset('images/alien-profile.png') }}\"> Mike Ferengi </span>
                            <span class=\"pl-5 article-details float-right\"> 3 hours ago</span>
                        </div>
                    </a>
                </div>

                <div class=\"article-container my-1\">
                    <a href=\"#\">
                        <img class=\"article-img\"  src=\"{{ asset('images/mercury.jpeg') }}\">
                        <div class=\"article-title d-inline-block pl-3 align-middle\">
                            <span>Life on Planet Mercury: <br> Tan, Relaxing and Fabulous</span>
                            <br>
                            <span class=\"align-left article-details\"><img class=\"article-author-img rounded-circle\" src=\"{{ asset('images/astronaut-profile.png') }}\"> Amy Oort </span>
                            <span class=\"pl-5 article-details float-right\"> 6 days ago</span>
                        </div>
                    </a>
                </div>

                <div class=\"article-container my-1\">
                    <a href=\"#\">
                        <img class=\"article-img\" src=\"{{ asset('images/lightspeed.png') }}\">
                        <div class=\"article-title d-inline-block pl-3 align-middle\">
                            <span>Light Speed Travel: <br> Fountain of Youth or Fallacy</span>
                            <br>
                            <span class=\"align-left article-details\"><img class=\"article-author-img rounded-circle\" src=\"{{ asset('images/astronaut-profile.png') }}\"> Amy Oort </span>
                            <span class=\"pl-5 article-details float-right\"> 2 weeks ago</span>
                        </div>
                    </a>
                </div>

            </div>

            <!-- Right bar ad space -->


            <div class=\"col-sm-12 col-md-4 text-center\">
                <div class=\"ad-space mx-auto mt-1 pb-2 pt-2\">
                    <img class=\"advertisement-img\" src=\"{{ asset('images/space-ice.png') }}\">
                    <p><span class=\"advertisement-text\">New:</span> Space Ice Cream!</p>
                    <button class=\"btn btn-info\">Buy Now!</button>
                </div>

                <div class=\"quote-space pb-2 pt-2 px-5\">
                    <h3 class=\"text-center pb-3\">Trending Quotes</h3>
                    <p><i class=\"fa fa-comment\"></i> \"Our two greatest problems are gravity and paperwork. We can lick gravity, but sometimes the paperwork is overwhelming.\" <br>— <a href=\"https://en.wikipedia.org/wiki/Wernher_von_Braun\">Wernher von Braun, Rocket Engineer</a></p>

                    <p class=\"pt-4\"><i class=\"fa fa-comment\"></i> \"Let's face it, space is a risky business. I always considered every launch a barely controlled explosion.\" <br>— <a href=\"https://en.wikipedia.org/wiki/Aaron_Cohen_(Deputy_NASA_administrator)\">Aaron Cohen, NASA Administrator</a></p>

                    <p class=\"pt-4\"><i class=\"fa fa-comment\"></i> \"If offered a seat on a rocket ship, don't ask what seat. Just get on.\"<br>— <a href=\"https://en.wikipedia.org/wiki/Christa_McAuliffe\">Christa McAuliffe, Challenger Astronaut</a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "article/homepage.html.twig", "/home/master/symfony_doctrine/symfony_doctrine/templates/article/homepage.html.twig");
    }
}
