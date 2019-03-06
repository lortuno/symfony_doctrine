<?php

/* @Httplug/webprofiler.html.twig */
class __TwigTemplate_7d4da11a0d0fc5c90c254c1fac5482f139865b78f1967351442fa1c666f9a891 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@Httplug/webprofiler.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c62db15cecb1f9f79f10f63bdba954f9ff0c19acfbf74d17ca3f26ffd40657f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c62db15cecb1f9f79f10f63bdba954f9ff0c19acfbf74d17ca3f26ffd40657f->enter($__internal_5c62db15cecb1f9f79f10f63bdba954f9ff0c19acfbf74d17ca3f26ffd40657f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Httplug/webprofiler.html.twig"));

        $__internal_c87e6ad78738c5d8f888943ee36170650f88ef925792098b5ed49cbc34ec613a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c87e6ad78738c5d8f888943ee36170650f88ef925792098b5ed49cbc34ec613a->enter($__internal_c87e6ad78738c5d8f888943ee36170650f88ef925792098b5ed49cbc34ec613a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Httplug/webprofiler.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c62db15cecb1f9f79f10f63bdba954f9ff0c19acfbf74d17ca3f26ffd40657f->leave($__internal_5c62db15cecb1f9f79f10f63bdba954f9ff0c19acfbf74d17ca3f26ffd40657f_prof);

        
        $__internal_c87e6ad78738c5d8f888943ee36170650f88ef925792098b5ed49cbc34ec613a->leave($__internal_c87e6ad78738c5d8f888943ee36170650f88ef925792098b5ed49cbc34ec613a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1f49956f5e5a45ec27095ac49b73631e7cd87a87c2e30240012a711063407ee8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f49956f5e5a45ec27095ac49b73631e7cd87a87c2e30240012a711063407ee8->enter($__internal_1f49956f5e5a45ec27095ac49b73631e7cd87a87c2e30240012a711063407ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_05c42fd1f97397e46014cd43b89522bf5124cedda05c7ce86a4946c846cbc3a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05c42fd1f97397e46014cd43b89522bf5124cedda05c7ce86a4946c846cbc3a5->enter($__internal_05c42fd1f97397e46014cd43b89522bf5124cedda05c7ce86a4946c846cbc3a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "stacks", array())) > 0)) {
            // line 5
            echo "        ";
            ob_start();
            // line 6
            echo "            ";
            echo twig_include($this->env, $context, "@Httplug/Icon/httplug.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 7
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 7, $this->getSourceContext()); })()), "stacks", array())), "html", null, true);
            echo "</span>
            <span class=\"sf-toolbar-label\">in</span>
            <span class=\"sf-toolbar-value\">";
            // line 9
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 9, $this->getSourceContext()); })()), "totalDuration", array())), "html", null, true);
            echo "</span>
            <span class=\"sf-toolbar-label\">ms</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 12
            echo "
        ";
            // line 13
            ob_start();
            // line 14
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>";
            // line 15
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 15, $this->getSourceContext()); })()), "stacks", array())), "html", null, true);
            echo " requests</b>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <table class=\"sf-toolbar-ajax-requests\">
                    <thead>
                    <tr>
                        <th>Client</th>
                        <th>Method</th>
                        <th>Target</th>
                        <th>Time</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody class=\"sf-toolbar-ajax-request-list\">
                        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 29, $this->getSourceContext()); })()), "stacks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["stack"]) {
                // line 30
                echo "                            <tr>
                                <td>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["stack"], "client", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["stack"], "requestMethod", array()), "html", null, true);
                echo "</td>
                                ";
                // line 33
                $context["target"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["stack"], "requestTarget", array());
                // line 34
                echo "                                <td title=\"";
                echo twig_escape_filter($this->env, (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new Twig_Error_Runtime('Variable "target" does not exist.', 34, $this->getSourceContext()); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new Twig_Error_Runtime('Variable "target" does not exist.', 34, $this->getSourceContext()); })())) > 30)) ? ((twig_slice($this->env, (isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new Twig_Error_Runtime('Variable "target" does not exist.', 34, $this->getSourceContext()); })()), 0, 30) . "...")) : ((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new Twig_Error_Runtime('Variable "target" does not exist.', 34, $this->getSourceContext()); })()))), "html", null, true);
                echo "</td>
                                <td>";
                // line 35
                echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->getSourceContext(), $context["stack"], "duration", array()) == 0)) ? ("n/a") : ((twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["stack"], "duration", array())) . " ms"))), "html", null, true);
                echo "</td>
                                <td>";
                // line 36
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), $context["stack"], "failed", array())) ? ("FAILED") : (((twig_get_attribute($this->env, $this->getSourceContext(), $context["stack"], "responseCode", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["stack"], "responseCode", array()), "n/a")) : ("n/a")))), "html", null, true);
                echo "</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stack'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                    </tbody>
                </table>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 43
            echo "
        ";
            // line 44
            $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@Httplug/webprofiler.html.twig", 44)->display(array_merge($context, array("link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_url" does not exist.', 44, $this->getSourceContext()); })()), "status" => ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 44, $this->getSourceContext()); })()), "failedStacks", array()))) ? ("red") : ("")))));
            // line 45
            echo "    ";
        }
        
        $__internal_05c42fd1f97397e46014cd43b89522bf5124cedda05c7ce86a4946c846cbc3a5->leave($__internal_05c42fd1f97397e46014cd43b89522bf5124cedda05c7ce86a4946c846cbc3a5_prof);

        
        $__internal_1f49956f5e5a45ec27095ac49b73631e7cd87a87c2e30240012a711063407ee8->leave($__internal_1f49956f5e5a45ec27095ac49b73631e7cd87a87c2e30240012a711063407ee8_prof);

    }

    // line 48
    public function block_head($context, array $blocks = array())
    {
        $__internal_53bed01f980e83c2b1bee0888419d720684164e39ee5fc66b2f29417bd5818fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53bed01f980e83c2b1bee0888419d720684164e39ee5fc66b2f29417bd5818fa->enter($__internal_53bed01f980e83c2b1bee0888419d720684164e39ee5fc66b2f29417bd5818fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f553ee154cb8a07ebbb374ff09582d05e788384969b9583c6de89d0b981dd4e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f553ee154cb8a07ebbb374ff09582d05e788384969b9583c6de89d0b981dd4e6->enter($__internal_f553ee154cb8a07ebbb374ff09582d05e788384969b9583c6de89d0b981dd4e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 49
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/httplug/style/httplug.css"), "html", null, true);
        echo "\" />
    <script type=\"text/javascript\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/httplug/script/httplug.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 51
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f553ee154cb8a07ebbb374ff09582d05e788384969b9583c6de89d0b981dd4e6->leave($__internal_f553ee154cb8a07ebbb374ff09582d05e788384969b9583c6de89d0b981dd4e6_prof);

        
        $__internal_53bed01f980e83c2b1bee0888419d720684164e39ee5fc66b2f29417bd5818fa->leave($__internal_53bed01f980e83c2b1bee0888419d720684164e39ee5fc66b2f29417bd5818fa_prof);

    }

    // line 54
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a55b76c51044d388545384656e264889c60588475220dd6ab713f519ae3c1a39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a55b76c51044d388545384656e264889c60588475220dd6ab713f519ae3c1a39->enter($__internal_a55b76c51044d388545384656e264889c60588475220dd6ab713f519ae3c1a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e879ed5dc534a0fb6dd8fd01d99958dee220fd26f2b0a2a38b3b0a6666c2c60b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e879ed5dc534a0fb6dd8fd01d99958dee220fd26f2b0a2a38b3b0a6666c2c60b->enter($__internal_e879ed5dc534a0fb6dd8fd01d99958dee220fd26f2b0a2a38b3b0a6666c2c60b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 55
        echo "    ";
        // line 56
        echo "    <span class=\"label ";
        echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 56, $this->getSourceContext()); })()), "stacks", array())) == 0)) ? ("disabled") : (""));
        echo " ";
        echo ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 56, $this->getSourceContext()); })()), "failedStacks", array()))) ? ("label-status-error") : (""));
        echo "\">
        <span class=\"icon\">
            ";
        // line 58
        echo twig_include($this->env, $context, "@Httplug/Icon/httplug.svg");
        echo "
        </span>
        <strong>Httplug</strong>
        ";
        // line 61
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 61, $this->getSourceContext()); })()), "failedStacks", array()))) {
            // line 62
            echo "            <span class=\"count\">
                <span>";
            // line 63
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 63, $this->getSourceContext()); })()), "failedStacks", array())), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 66
        echo "    </span>
";
        
        $__internal_e879ed5dc534a0fb6dd8fd01d99958dee220fd26f2b0a2a38b3b0a6666c2c60b->leave($__internal_e879ed5dc534a0fb6dd8fd01d99958dee220fd26f2b0a2a38b3b0a6666c2c60b_prof);

        
        $__internal_a55b76c51044d388545384656e264889c60588475220dd6ab713f519ae3c1a39->leave($__internal_a55b76c51044d388545384656e264889c60588475220dd6ab713f519ae3c1a39_prof);

    }

    // line 69
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e613391ffe70550fc63d1a8e8a12f45c398ef716224330050904b15c829c63a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e613391ffe70550fc63d1a8e8a12f45c398ef716224330050904b15c829c63a3->enter($__internal_e613391ffe70550fc63d1a8e8a12f45c398ef716224330050904b15c829c63a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_83b884d917c40db28b49460a90ba1b3c92ef3a1028c88d1701fc83eecd33e63d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83b884d917c40db28b49460a90ba1b3c92ef3a1028c88d1701fc83eecd33e63d->enter($__internal_83b884d917c40db28b49460a90ba1b3c92ef3a1028c88d1701fc83eecd33e63d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 70
        echo "    <h2>HTTPlug</h2>
    <div class=\"sf-tabs\">
        ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 72, $this->getSourceContext()); })()), "clients", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 73
            echo "        <div class=\"tab\">
            <h3 class=\"tab-title\">";
            // line 74
            echo twig_escape_filter($this->env, $context["client"], "html", null, true);
            echo " <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 74, $this->getSourceContext()); })()), "countClientMessages", array(0 => $context["client"]), "method"), "html", null, true);
            echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are sent by client named \"";
            // line 78
            echo twig_escape_filter($this->env, $context["client"], "html", null, true);
            echo "\".
                </p>

                ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 81, $this->getSourceContext()); })()), "clientRootStacks", array(0 => $context["client"]), "method"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["stack"]) {
                // line 82
                echo "                    <div class=\"httplug-stack\">
                        ";
                // line 83
                $this->loadTemplate("@Httplug/stack.html.twig", "@Httplug/webprofiler.html.twig", 83)->display(array("collector" =>                 // line 84
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 84, $this->getSourceContext()); })()), "client" =>                 // line 85
$context["client"], "stack" =>                 // line 86
$context["stack"], "id" => twig_get_attribute($this->env, $this->getSourceContext(),                 // line 87
$context["loop"], "index", array())));
                // line 89
                echo "                    </div>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stack'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 94
            echo "            <div class=\"empty\">
                <p>No request were sent.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "    </div>
";
        
        $__internal_83b884d917c40db28b49460a90ba1b3c92ef3a1028c88d1701fc83eecd33e63d->leave($__internal_83b884d917c40db28b49460a90ba1b3c92ef3a1028c88d1701fc83eecd33e63d_prof);

        
        $__internal_e613391ffe70550fc63d1a8e8a12f45c398ef716224330050904b15c829c63a3->leave($__internal_e613391ffe70550fc63d1a8e8a12f45c398ef716224330050904b15c829c63a3_prof);

    }

    public function getTemplateName()
    {
        return "@Httplug/webprofiler.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 98,  319 => 94,  312 => 91,  297 => 89,  295 => 87,  294 => 86,  293 => 85,  292 => 84,  291 => 83,  288 => 82,  271 => 81,  265 => 78,  256 => 74,  253 => 73,  248 => 72,  244 => 70,  235 => 69,  224 => 66,  218 => 63,  215 => 62,  213 => 61,  207 => 58,  199 => 56,  197 => 55,  188 => 54,  176 => 51,  172 => 50,  167 => 49,  158 => 48,  147 => 45,  145 => 44,  142 => 43,  136 => 39,  127 => 36,  123 => 35,  116 => 34,  114 => 33,  110 => 32,  106 => 31,  103 => 30,  99 => 29,  82 => 15,  79 => 14,  77 => 13,  74 => 12,  68 => 9,  63 => 7,  58 => 6,  55 => 5,  52 => 4,  43 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% if collector.stacks|length > 0 %}
        {% set icon %}
            {{ include('@Httplug/Icon/httplug.svg') }}
            <span class=\"sf-toolbar-value\">{{ collector.stacks|length }}</span>
            <span class=\"sf-toolbar-label\">in</span>
            <span class=\"sf-toolbar-value\">{{ collector.totalDuration|number_format }}</span>
            <span class=\"sf-toolbar-label\">ms</span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>{{ collector.stacks|length }} requests</b>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <table class=\"sf-toolbar-ajax-requests\">
                    <thead>
                    <tr>
                        <th>Client</th>
                        <th>Method</th>
                        <th>Target</th>
                        <th>Time</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody class=\"sf-toolbar-ajax-request-list\">
                        {% for stack in collector.stacks %}
                            <tr>
                                <td>{{ stack.client }}</td>
                                <td>{{ stack.requestMethod }}</td>
                                {% set target = stack.requestTarget %}
                                <td title=\"{{ target }}\">{{ target|length > 30 ? target[:30] ~ '...' : target }}</td>
                                <td>{{ stack.duration == 0 ? 'n/a' : stack.duration|number_format ~ ' ms'}}</td>
                                <td>{{ stack.failed ? 'FAILED' : stack.responseCode|default('n/a') }}</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        {% endset %}

        {% include '@WebProfiler/Profiler/toolbar_item.html.twig' with { 'link': profiler_url, 'status': collector.failedStacks|length ? 'red' : '' } %}
    {% endif %}
{% endblock %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/httplug/style/httplug.css') }}\" />
    <script type=\"text/javascript\" src=\"{{ asset(\"bundles/httplug/script/httplug.js\") }}\"></script>
    {{ parent() }}
{% endblock %}

{% block menu %}
    {# This left-hand menu appears when using the full-screen profiler. #}
    <span class=\"label {{ collector.stacks|length == 0 ? 'disabled' }} {{ collector.failedStacks|length ? 'label-status-error' }}\">
        <span class=\"icon\">
            {{ include('@Httplug/Icon/httplug.svg') }}
        </span>
        <strong>Httplug</strong>
        {% if collector.failedStacks|length %}
            <span class=\"count\">
                <span>{{ collector.failedStacks|length }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>HTTPlug</h2>
    <div class=\"sf-tabs\">
        {% for client in collector.clients %}
        <div class=\"tab\">
            <h3 class=\"tab-title\">{{ client }} <span class=\"badge\">{{ collector.countClientMessages(client) }}</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are sent by client named \"{{ client }}\".
                </p>

                {% for stack in collector.clientRootStacks(client) %}
                    <div class=\"httplug-stack\">
                        {% include '@Httplug/stack.html.twig' with {
                            'collector': collector,
                            'client': client,
                            'stack': stack,
                            'id': loop.index
                        } only %}
                    </div>
                {% endfor %}
            </div>
        </div>
        {% else %}
            <div class=\"empty\">
                <p>No request were sent.</p>
            </div>
        {% endfor %}
    </div>
{% endblock %}
", "@Httplug/webprofiler.html.twig", "/home/master/symfony_doctrine/symfony_doctrine/vendor/php-http/httplug-bundle/Resources/views/webprofiler.html.twig");
    }
}
