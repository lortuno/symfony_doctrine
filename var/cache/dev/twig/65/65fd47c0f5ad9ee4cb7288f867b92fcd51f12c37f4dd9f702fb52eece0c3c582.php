<?php

/* base.html.twig */
class __TwigTemplate_854ffa6075b34d7bfc1680be053dc85b8fd6faa2726e73d2a64a5aa57bf48d90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a778408b0d47ecf7e054df860e36cacf29009e1726667bc2ae3fcabdf9cf16a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a778408b0d47ecf7e054df860e36cacf29009e1726667bc2ae3fcabdf9cf16a7->enter($__internal_a778408b0d47ecf7e054df860e36cacf29009e1726667bc2ae3fcabdf9cf16a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7d9b4ae99c21a325aebf7a0e0b5f48ee8d97dc40d9b35a253d025aa4bf43f8c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d9b4ae99c21a325aebf7a0e0b5f48ee8d97dc40d9b35a253d025aa4bf43f8c7->enter($__internal_7d9b4ae99c21a325aebf7a0e0b5f48ee8d97dc40d9b35a253d025aa4bf43f8c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">

    <head>
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "    </head>

    <body>
        <nav class=\"navbar navbar-expand-lg navbar-dark navbar-bg mb-5\">
            <a style=\"margin-left: 75px;\" class=\"navbar-brand space-brand\" href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_homepage");
        echo "\">The Space Bar</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
          </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                <ul class=\"navbar-nav mr-auto\">
                     <li class=\"nav-item\">
                       <a style=\"color: #fff;\" class=\"nav-link\" href=\"#\">Local Asteroids</a>
                     </li>
                     <li class=\"nav-item\">
                       <a style=\"color: #fff;\" class=\"nav-link\" href=\"#\">Weather</a>
                     </li>
                   </ul>
                <form class=\"form-inline my-2 my-lg-0\">
                    <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                    <button class=\"btn btn-info my-2 my-sm-0\" type=\"submit\">Search</button>
                </form>
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item dropdown\" style=\"margin-right: 75px;\">
                        <a class=\"nav-link dropdown-toggle\" href=\"http://example.com\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                          <img class=\"nav-profile-img rounded-circle\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/astronaut-profile.png"), "html", null, true);
        echo "\">
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                            <a class=\"dropdown-item\" href=\"#\">Profile</a>
                            <a class=\"dropdown-item\" href=\"#\">Create Post</a>
                            <a class=\"dropdown-item\" href=\"#\">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        ";
        // line 50
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "
        <footer class=\"footer\">
            <div class=\"container text-center\">
                <span class=\"text-muted\">Made with <i class=\"fa fa-heart\" style=\"color: red;\"></i> by the guys and gals at <a href=\"https://knpuniversity.com\">KnpUniversity</a></span>
            </div>
        </footer>


        ";
        // line 59
        $this->displayBlock('javascripts', $context, $blocks);
        // line 67
        echo "    </body>
</html>
";
        
        $__internal_a778408b0d47ecf7e054df860e36cacf29009e1726667bc2ae3fcabdf9cf16a7->leave($__internal_a778408b0d47ecf7e054df860e36cacf29009e1726667bc2ae3fcabdf9cf16a7_prof);

        
        $__internal_7d9b4ae99c21a325aebf7a0e0b5f48ee8d97dc40d9b35a253d025aa4bf43f8c7->leave($__internal_7d9b4ae99c21a325aebf7a0e0b5f48ee8d97dc40d9b35a253d025aa4bf43f8c7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b8d144e798717261dd603260183a487b47291761391cbb9e07d615cb0e91266 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b8d144e798717261dd603260183a487b47291761391cbb9e07d615cb0e91266->enter($__internal_3b8d144e798717261dd603260183a487b47291761391cbb9e07d615cb0e91266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c58407badc9b8f1ecaf758bff81b6a898bc5ee5082a6a2377f2c21585eb7e8cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c58407badc9b8f1ecaf758bff81b6a898bc5ee5082a6a2377f2c21585eb7e8cf->enter($__internal_c58407badc9b8f1ecaf758bff81b6a898bc5ee5082a6a2377f2c21585eb7e8cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome to the SpaceBar";
        
        $__internal_c58407badc9b8f1ecaf758bff81b6a898bc5ee5082a6a2377f2c21585eb7e8cf->leave($__internal_c58407badc9b8f1ecaf758bff81b6a898bc5ee5082a6a2377f2c21585eb7e8cf_prof);

        
        $__internal_3b8d144e798717261dd603260183a487b47291761391cbb9e07d615cb0e91266->leave($__internal_3b8d144e798717261dd603260183a487b47291761391cbb9e07d615cb0e91266_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_66b5d7ad0fda112226330a276279233cfa45433e1be1a53cd316f95f14a5ae22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66b5d7ad0fda112226330a276279233cfa45433e1be1a53cd316f95f14a5ae22->enter($__internal_66b5d7ad0fda112226330a276279233cfa45433e1be1a53cd316f95f14a5ae22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e861f4ec5d3595e06a8aa5cf34c970a33076d883b8505a547a5b41ba308e080a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e861f4ec5d3595e06a8aa5cf34c970a33076d883b8505a547a5b41ba308e080a->enter($__internal_e861f4ec5d3595e06a8aa5cf34c970a33076d883b8505a547a5b41ba308e080a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\" integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_e861f4ec5d3595e06a8aa5cf34c970a33076d883b8505a547a5b41ba308e080a->leave($__internal_e861f4ec5d3595e06a8aa5cf34c970a33076d883b8505a547a5b41ba308e080a_prof);

        
        $__internal_66b5d7ad0fda112226330a276279233cfa45433e1be1a53cd316f95f14a5ae22->leave($__internal_66b5d7ad0fda112226330a276279233cfa45433e1be1a53cd316f95f14a5ae22_prof);

    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9d38f83fd941cf40ddb3efc76f247358d1483801e1a2da894b3399e522b74e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9d38f83fd941cf40ddb3efc76f247358d1483801e1a2da894b3399e522b74e2->enter($__internal_b9d38f83fd941cf40ddb3efc76f247358d1483801e1a2da894b3399e522b74e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e65b21cadbcc4283b30bb3395eb546484ecbfd3a5629869f8b3b580f6b8a03a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e65b21cadbcc4283b30bb3395eb546484ecbfd3a5629869f8b3b580f6b8a03a5->enter($__internal_e65b21cadbcc4283b30bb3395eb546484ecbfd3a5629869f8b3b580f6b8a03a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e65b21cadbcc4283b30bb3395eb546484ecbfd3a5629869f8b3b580f6b8a03a5->leave($__internal_e65b21cadbcc4283b30bb3395eb546484ecbfd3a5629869f8b3b580f6b8a03a5_prof);

        
        $__internal_b9d38f83fd941cf40ddb3efc76f247358d1483801e1a2da894b3399e522b74e2->leave($__internal_b9d38f83fd941cf40ddb3efc76f247358d1483801e1a2da894b3399e522b74e2_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7c28e4374e508bac3c1caeec75192fd9570f69f762265e12d6d97e4c55e9917c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c28e4374e508bac3c1caeec75192fd9570f69f762265e12d6d97e4c55e9917c->enter($__internal_7c28e4374e508bac3c1caeec75192fd9570f69f762265e12d6d97e4c55e9917c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_64df2751e7f750ad927bb9c0eda76fd1c52d8b8e564cd8928b72a67006c4daec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64df2751e7f750ad927bb9c0eda76fd1c52d8b8e564cd8928b72a67006c4daec->enter($__internal_64df2751e7f750ad927bb9c0eda76fd1c52d8b8e564cd8928b72a67006c4daec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 60
        echo "            <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>
            <script>
                \$('.dropdown-toggle').dropdown();
            </script>
        ";
        
        $__internal_64df2751e7f750ad927bb9c0eda76fd1c52d8b8e564cd8928b72a67006c4daec->leave($__internal_64df2751e7f750ad927bb9c0eda76fd1c52d8b8e564cd8928b72a67006c4daec_prof);

        
        $__internal_7c28e4374e508bac3c1caeec75192fd9570f69f762265e12d6d97e4c55e9917c->leave($__internal_7c28e4374e508bac3c1caeec75192fd9570f69f762265e12d6d97e4c55e9917c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 60,  177 => 59,  160 => 50,  148 => 12,  144 => 11,  141 => 10,  132 => 9,  114 => 5,  102 => 67,  100 => 59,  90 => 51,  88 => 50,  73 => 38,  50 => 18,  44 => 14,  42 => 9,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"en\">

    <head>
        <title>{% block title %}Welcome to the SpaceBar{% endblock %}</title>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\" integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\">
        {% endblock %}
    </head>

    <body>
        <nav class=\"navbar navbar-expand-lg navbar-dark navbar-bg mb-5\">
            <a style=\"margin-left: 75px;\" class=\"navbar-brand space-brand\" href=\"{{ path('app_homepage') }}\">The Space Bar</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
          </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                <ul class=\"navbar-nav mr-auto\">
                     <li class=\"nav-item\">
                       <a style=\"color: #fff;\" class=\"nav-link\" href=\"#\">Local Asteroids</a>
                     </li>
                     <li class=\"nav-item\">
                       <a style=\"color: #fff;\" class=\"nav-link\" href=\"#\">Weather</a>
                     </li>
                   </ul>
                <form class=\"form-inline my-2 my-lg-0\">
                    <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                    <button class=\"btn btn-info my-2 my-sm-0\" type=\"submit\">Search</button>
                </form>
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item dropdown\" style=\"margin-right: 75px;\">
                        <a class=\"nav-link dropdown-toggle\" href=\"http://example.com\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                          <img class=\"nav-profile-img rounded-circle\" src=\"{{ asset('images/astronaut-profile.png') }}\">
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                            <a class=\"dropdown-item\" href=\"#\">Profile</a>
                            <a class=\"dropdown-item\" href=\"#\">Create Post</a>
                            <a class=\"dropdown-item\" href=\"#\">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        {% block body %}{% endblock %}

        <footer class=\"footer\">
            <div class=\"container text-center\">
                <span class=\"text-muted\">Made with <i class=\"fa fa-heart\" style=\"color: red;\"></i> by the guys and gals at <a href=\"https://knpuniversity.com\">KnpUniversity</a></span>
            </div>
        </footer>


        {% block javascripts %}
            <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>
            <script>
                \$('.dropdown-toggle').dropdown();
            </script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/home/master/symfony_doctrine/symfony_doctrine/templates/base.html.twig");
    }
}
