<?php

/* base.html.twig */
class __TwigTemplate_14c8d429177c2770daa3f77c060e590e17b66ba3ba776c22633156a85ab93473 extends Twig_Template
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
        $__internal_a9b8bf62b90f7c20e1e4bf488c858614c88cb78ec8779529f8176d0e63bbaa2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9b8bf62b90f7c20e1e4bf488c858614c88cb78ec8779529f8176d0e63bbaa2f->enter($__internal_a9b8bf62b90f7c20e1e4bf488c858614c88cb78ec8779529f8176d0e63bbaa2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_45a05575d166fe5a9db8a9b105a7707ff475d02bf5264cadc67de18c93c23931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45a05575d166fe5a9db8a9b105a7707ff475d02bf5264cadc67de18c93c23931->enter($__internal_45a05575d166fe5a9db8a9b105a7707ff475d02bf5264cadc67de18c93c23931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_a9b8bf62b90f7c20e1e4bf488c858614c88cb78ec8779529f8176d0e63bbaa2f->leave($__internal_a9b8bf62b90f7c20e1e4bf488c858614c88cb78ec8779529f8176d0e63bbaa2f_prof);

        
        $__internal_45a05575d166fe5a9db8a9b105a7707ff475d02bf5264cadc67de18c93c23931->leave($__internal_45a05575d166fe5a9db8a9b105a7707ff475d02bf5264cadc67de18c93c23931_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf8a3f07082764d2772aba1d5dda5b6355916dfbcf470766f70e7fe38ca33fa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf8a3f07082764d2772aba1d5dda5b6355916dfbcf470766f70e7fe38ca33fa2->enter($__internal_bf8a3f07082764d2772aba1d5dda5b6355916dfbcf470766f70e7fe38ca33fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_578468ec8b317fa49df076cce393416bcbf48c8e2b88a7c2e28d8c8192fa7467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_578468ec8b317fa49df076cce393416bcbf48c8e2b88a7c2e28d8c8192fa7467->enter($__internal_578468ec8b317fa49df076cce393416bcbf48c8e2b88a7c2e28d8c8192fa7467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome to the SpaceBar";
        
        $__internal_578468ec8b317fa49df076cce393416bcbf48c8e2b88a7c2e28d8c8192fa7467->leave($__internal_578468ec8b317fa49df076cce393416bcbf48c8e2b88a7c2e28d8c8192fa7467_prof);

        
        $__internal_bf8a3f07082764d2772aba1d5dda5b6355916dfbcf470766f70e7fe38ca33fa2->leave($__internal_bf8a3f07082764d2772aba1d5dda5b6355916dfbcf470766f70e7fe38ca33fa2_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a527975777dc98fbb478c58cd881c95ac08a8f0c180d1f2ef452abe1fdf029b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a527975777dc98fbb478c58cd881c95ac08a8f0c180d1f2ef452abe1fdf029b0->enter($__internal_a527975777dc98fbb478c58cd881c95ac08a8f0c180d1f2ef452abe1fdf029b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9b80e5c1399199791ceb5b469b620a53b2e92383929fb723cd67ce28dc8a9f54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b80e5c1399199791ceb5b469b620a53b2e92383929fb723cd67ce28dc8a9f54->enter($__internal_9b80e5c1399199791ceb5b469b620a53b2e92383929fb723cd67ce28dc8a9f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_9b80e5c1399199791ceb5b469b620a53b2e92383929fb723cd67ce28dc8a9f54->leave($__internal_9b80e5c1399199791ceb5b469b620a53b2e92383929fb723cd67ce28dc8a9f54_prof);

        
        $__internal_a527975777dc98fbb478c58cd881c95ac08a8f0c180d1f2ef452abe1fdf029b0->leave($__internal_a527975777dc98fbb478c58cd881c95ac08a8f0c180d1f2ef452abe1fdf029b0_prof);

    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        $__internal_b40e97fc7a6318fcca9d8d9230dffdd97c9db0beaba7854f2e9fe21490fd76ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b40e97fc7a6318fcca9d8d9230dffdd97c9db0beaba7854f2e9fe21490fd76ee->enter($__internal_b40e97fc7a6318fcca9d8d9230dffdd97c9db0beaba7854f2e9fe21490fd76ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_01231c96dad01bf2cf1a43bf25b6286ae6659cbf7f33b1700d92738eb2bcf241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01231c96dad01bf2cf1a43bf25b6286ae6659cbf7f33b1700d92738eb2bcf241->enter($__internal_01231c96dad01bf2cf1a43bf25b6286ae6659cbf7f33b1700d92738eb2bcf241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_01231c96dad01bf2cf1a43bf25b6286ae6659cbf7f33b1700d92738eb2bcf241->leave($__internal_01231c96dad01bf2cf1a43bf25b6286ae6659cbf7f33b1700d92738eb2bcf241_prof);

        
        $__internal_b40e97fc7a6318fcca9d8d9230dffdd97c9db0beaba7854f2e9fe21490fd76ee->leave($__internal_b40e97fc7a6318fcca9d8d9230dffdd97c9db0beaba7854f2e9fe21490fd76ee_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f74c7b7e51c9ae8f48d1616226dae2ab4ebac414c99ecce858a8c35c85a1b86e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f74c7b7e51c9ae8f48d1616226dae2ab4ebac414c99ecce858a8c35c85a1b86e->enter($__internal_f74c7b7e51c9ae8f48d1616226dae2ab4ebac414c99ecce858a8c35c85a1b86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_053b4ddc0d2d4f9d06b02b6b024f4b206cfa951b8b7559dbe9950c5a73135782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_053b4ddc0d2d4f9d06b02b6b024f4b206cfa951b8b7559dbe9950c5a73135782->enter($__internal_053b4ddc0d2d4f9d06b02b6b024f4b206cfa951b8b7559dbe9950c5a73135782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 60
        echo "            <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>
            <script>
                \$('.dropdown-toggle').dropdown();
            </script>
        ";
        
        $__internal_053b4ddc0d2d4f9d06b02b6b024f4b206cfa951b8b7559dbe9950c5a73135782->leave($__internal_053b4ddc0d2d4f9d06b02b6b024f4b206cfa951b8b7559dbe9950c5a73135782_prof);

        
        $__internal_f74c7b7e51c9ae8f48d1616226dae2ab4ebac414c99ecce858a8c35c85a1b86e->leave($__internal_f74c7b7e51c9ae8f48d1616226dae2ab4ebac414c99ecce858a8c35c85a1b86e_prof);

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
", "base.html.twig", "/home/master/symfony_doctrine/templates/base.html.twig");
    }
}
