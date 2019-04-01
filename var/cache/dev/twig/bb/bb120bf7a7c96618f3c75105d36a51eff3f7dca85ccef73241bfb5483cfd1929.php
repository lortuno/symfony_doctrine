<?php

/* article/homepage.html.twig */
class __TwigTemplate_b66f74598c0c31991024024d75b2cb8c73fac42064c662660e12061c151f2466 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/homepage.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/homepage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/meteor-shower.jpg"), "html", null, true);
        echo "\" alt=\"meteor shower\">
                        <h1 class=\"text-center mt-2\">Ursid Meteor Shower: <br>Healthier than a regular shower?</h1>
                    </div>
                </a>

                <!-- Supporting Articles -->
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 21
            echo "                <div class=\"article-container my-1\">
                    <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["article"], "slug", [])]), "html", null, true);
            echo "\">
                        <img class=\"article-img\" src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/asteroid.jpeg"), "html", null, true);
            echo "\">
                        <div class=\"article-title d-inline-block pl-3 align-middle\">
                            <span>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", []), "html", null, true);
            echo "</span>
                            <br>
                            <span class=\"align-left article-details\"><img class=\"article-author-img rounded-circle\" src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/alien-profile.png"), "html", null, true);
            echo "\"> Mike Ferengi </span>
                            <span class=\"pl-5 article-details float-right\">
                               ";
            // line 29
            echo ((twig_get_attribute($this->env, $this->source, $context["article"], "publishedAt", [])) ? ($this->extensions['Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension']->diff(twig_get_attribute($this->env, $this->source, $context["article"], "publishedAt", []))) : (""));
            echo "
                            </span>
                        </div>
                    </a>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
            </div>

            <!-- Right bar ad space -->


            <div class=\"col-sm-12 col-md-4 text-center\">
                <div class=\"ad-space mx-auto mt-1 pb-2 pt-2\">
                    <img class=\"advertisement-img\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/space-ice.png"), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  122 => 43,  112 => 35,  100 => 29,  95 => 27,  90 => 25,  85 => 23,  81 => 22,  78 => 21,  74 => 20,  65 => 14,  53 => 4,  44 => 3,  15 => 1,);
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
                {% for article in articles %}
                <div class=\"article-container my-1\">
                    <a href=\"{{ path('article_show', {slug: article.slug }) }}\">
                        <img class=\"article-img\" src=\"{{ asset('images/asteroid.jpeg') }}\">
                        <div class=\"article-title d-inline-block pl-3 align-middle\">
                            <span>{{ article.title }}</span>
                            <br>
                            <span class=\"align-left article-details\"><img class=\"article-author-img rounded-circle\" src=\"{{ asset('images/alien-profile.png') }}\"> Mike Ferengi </span>
                            <span class=\"pl-5 article-details float-right\">
                               {{ article.publishedAt ? article.publishedAt|ago  }}
                            </span>
                        </div>
                    </a>
                </div>
                {%  endfor %}

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
