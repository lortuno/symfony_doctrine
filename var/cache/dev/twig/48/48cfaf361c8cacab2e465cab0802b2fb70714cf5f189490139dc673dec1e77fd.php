<?php

/* @Httplug/stack.html.twig */
class __TwigTemplate_c0525c4151f6dfc3f8b628120edb3678ab3a28d457b10b14dc59d5397a7f2232 extends Twig_Template
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
        $__internal_471f1127562e40f9b552084cd0b27a79e9ecdb7c6dac687cf1bc720d7bed4955 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_471f1127562e40f9b552084cd0b27a79e9ecdb7c6dac687cf1bc720d7bed4955->enter($__internal_471f1127562e40f9b552084cd0b27a79e9ecdb7c6dac687cf1bc720d7bed4955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Httplug/stack.html.twig"));

        $__internal_1788612236bfcb746ad24366f2a3446d76932050b523c76c09510715b3262b26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1788612236bfcb746ad24366f2a3446d76932050b523c76c09510715b3262b26->enter($__internal_1788612236bfcb746ad24366f2a3446d76932050b523c76c09510715b3262b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Httplug/stack.html.twig"));

        // line 1
        echo "<div class=\"httplug-stack-header httplug-toggle\" data-toggle=\"#httplug-";
        echo twig_escape_filter($this->env, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "-details\">
    <div>
        ";
        // line 3
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new Twig_Error_Runtime('Variable "stack" does not exist.', 3, $this->getSourceContext()); })()), "failed", array())) {
            // line 4
            echo "            <span class=\"httplug-stack-failed\">✘</span>
        ";
        } else {
            // line 6
            echo "            <span class=\"httplug-stack-success\">✔</span>
        ";
        }
        // line 8
        echo "        <span class=\"label httplug-method httplug-method-";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new Twig_Error_Runtime('Variable "stack" does not exist.', 8, $this->getSourceContext()); })()), "requestMethod", array())), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new Twig_Error_Runtime('Variable "stack" does not exist.', 8, $this->getSourceContext()); })()), "requestMethod", array()), "html", null, true);
        echo "</span>
    </div>
    <div class=\"label httplug-stack-header-target\">
        <span class=\"httplug-scheme\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new Twig_Error_Runtime('Variable "stack" does not exist.', 11, $this->getSourceContext()); })()), "requestScheme", array()), "html", null, true);
        echo "://</span>
        <span class=\"httplug-host\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new Twig_Error_Runtime('Variable "stack" does not exist.', 12, $this->getSourceContext()); })()), "requestHost", array()), "html", null, true);
        echo "</span>
        <span class=\"httplug-target\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new Twig_Error_Runtime('Variable "stack" does not exist.', 13, $this->getSourceContext()); })()), "requestTarget", array()), "html", null, true);
        echo "</span>
    </div>
    <div>
        <span class=\"label httplug-duration\">";
        // line 16
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new Twig_Error_Runtime('Variable "stack" does not exist.', 16, $this->getSourceContext()); })()), "duration", array())), "html", null, true);
        echo " ms</span>
        ";
        // line 17
        if (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new Twig_Error_Runtime('Variable "stack" does not exist.', 17, $this->getSourceContext()); })()), "responseCode", array()) >= 400) && (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new Twig_Error_Runtime('Variable "stack" does not exist.', 17, $this->getSourceContext()); })()), "responseCode", array()) <= 599))) {
            // line 18
            echo "            <span class=\"label status-error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new Twig_Error_Runtime('Variable "stack" does not exist.', 18, $this->getSourceContext()); })()), "responseCode", array()), "html", null, true);
            echo "</span>
        ";
        } elseif (((twig_get_attribute($this->env, $this->getSourceContext(),         // line 19
(isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new Twig_Error_Runtime('Variable "stack" does not exist.', 19, $this->getSourceContext()); })()), "responseCode", array()) >= 300) && (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new Twig_Error_Runtime('Variable "stack" does not exist.', 19, $this->getSourceContext()); })()), "responseCode", array()) <= 399))) {
            // line 20
            echo "            <span class=\"label status-warning\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new Twig_Error_Runtime('Variable "stack" does not exist.', 20, $this->getSourceContext()); })()), "responseCode", array()), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 22
            echo "            <span class=\"label status-success\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new Twig_Error_Runtime('Variable "stack" does not exist.', 22, $this->getSourceContext()); })()), "responseCode", array()), "html", null, true);
            echo "</span>
        ";
        }
        // line 24
        echo "    </div>
</div>
<div id=\"httplug-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 26, $this->getSourceContext()); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 26, $this->getSourceContext()); })()), "html", null, true);
        echo "-details\" class=\"httplug-hidden\">
    <div class=\"httplug-toolbar\">
        <div class=\"httplug-copy-as-curl\">
            <input readonly=\"readonly\" type=\"text\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new Twig_Error_Runtime('Variable "stack" does not exist.', 29, $this->getSourceContext()); })()), "curlCommand", array()), "html", null, true);
        echo "\" />
            <button class=\"btn tooltip-toggle\" aria-label=\"Copy to clipboard\">Copy to clipboard</button>
        </div>
        <button data-toggle=\"#httplug-";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 32, $this->getSourceContext()); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 32, $this->getSourceContext()); })()), "html", null, true);
        echo "-stack\" class=\"httplug-toggle btn\" >Toggle plugin stack</button>
        <button data-toggle=\"#httplug-";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 33, $this->getSourceContext()); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 33, $this->getSourceContext()); })()), "html", null, true);
        echo "-details .httplug-http-body\" class=\"httplug-toggle btn\">Toggle body</button>
    </div>
    <div class=\"httplug-messages\">
        <div class=\"httplug-message card\">
            <h4>Request</h4>
            ";
        // line 38
        echo nl2br($this->env->getExtension('Http\HttplugBundle\Collector\Twig\HttpMessageMarkupExtension')->markup(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new Twig_Error_Runtime('Variable "stack" does not exist.', 38, $this->getSourceContext()); })()), "clientRequest", array())));
        echo "
        </div>
        <div class=\"httplug-message card\">
            <h4>Response</h4>
            ";
        // line 42
        echo nl2br($this->env->getExtension('Http\HttplugBundle\Collector\Twig\HttpMessageMarkupExtension')->markup(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new Twig_Error_Runtime('Variable "stack" does not exist.', 42, $this->getSourceContext()); })()), "clientResponse", array())));
        echo "
        </div>
    </div>
    ";
        // line 45
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new Twig_Error_Runtime('Variable "stack" does not exist.', 45, $this->getSourceContext()); })()), "profiles", array())) {
            // line 46
            echo "        <div id=\"httplug-";
            echo twig_escape_filter($this->env, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 46, $this->getSourceContext()); })()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 46, $this->getSourceContext()); })()), "html", null, true);
            echo "-stack\" class=\"httplug-hidden card\">
            ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new Twig_Error_Runtime('Variable "stack" does not exist.', 47, $this->getSourceContext()); })()), "profiles", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["profile"]) {
                // line 48
                echo "                <h3 class=\"httplug-plugin-name\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["profile"], "plugin", array()), "html", null, true);
                echo "</h3>
                <div class=\"httplug-messages\">
                    <div class=\"httplug-message\">
                        <h4>Request</h4>
                        ";
                // line 52
                echo nl2br($this->env->getExtension('Http\HttplugBundle\Collector\Twig\HttpMessageMarkupExtension')->markup(twig_get_attribute($this->env, $this->getSourceContext(), $context["profile"], "request", array())));
                echo "
                    </div>
                    <div class=\"httplug-message\">
                        <h4>Response</h4>
                        ";
                // line 56
                echo nl2br($this->env->getExtension('Http\HttplugBundle\Collector\Twig\HttpMessageMarkupExtension')->markup(twig_get_attribute($this->env, $this->getSourceContext(), $context["profile"], "response", array())));
                echo "
                    </div>
                </div>
                ";
                // line 59
                if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                    // line 60
                    echo "                    <hr />
                ";
                }
                // line 62
                echo "            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "        </div>
    ";
        }
        // line 65
        echo "</div>
";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 66, $this->getSourceContext()); })()), "childrenStacks", array(0 => (isset($context["stack"]) || array_key_exists("stack", $context) ? $context["stack"] : (function () { throw new Twig_Error_Runtime('Variable "stack" does not exist.', 66, $this->getSourceContext()); })())), "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 67
            echo "    <div class=\"httplug-stack\">
        ";
            // line 68
            $this->loadTemplate("@Httplug/stack.html.twig", "@Httplug/stack.html.twig", 68)->display(array("collector" =>             // line 69
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 69, $this->getSourceContext()); })()), "client" =>             // line 70
(isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 70, $this->getSourceContext()); })()), "stack" =>             // line 71
$context["child"], "id" => ((            // line 72
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 72, $this->getSourceContext()); })()) . "-") . twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()))));
            // line 74
            echo "    </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_471f1127562e40f9b552084cd0b27a79e9ecdb7c6dac687cf1bc720d7bed4955->leave($__internal_471f1127562e40f9b552084cd0b27a79e9ecdb7c6dac687cf1bc720d7bed4955_prof);

        
        $__internal_1788612236bfcb746ad24366f2a3446d76932050b523c76c09510715b3262b26->leave($__internal_1788612236bfcb746ad24366f2a3446d76932050b523c76c09510715b3262b26_prof);

    }

    public function getTemplateName()
    {
        return "@Httplug/stack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 74,  236 => 72,  235 => 71,  234 => 70,  233 => 69,  232 => 68,  229 => 67,  212 => 66,  209 => 65,  205 => 63,  191 => 62,  187 => 60,  185 => 59,  179 => 56,  172 => 52,  164 => 48,  147 => 47,  140 => 46,  138 => 45,  132 => 42,  125 => 38,  115 => 33,  109 => 32,  103 => 29,  95 => 26,  91 => 24,  85 => 22,  79 => 20,  77 => 19,  72 => 18,  70 => 17,  66 => 16,  60 => 13,  56 => 12,  52 => 11,  43 => 8,  39 => 6,  35 => 4,  33 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"httplug-stack-header httplug-toggle\" data-toggle=\"#httplug-{{ client }}-{{ id }}-details\">
    <div>
        {% if stack.failed %}
            <span class=\"httplug-stack-failed\">✘</span>
        {% else %}
            <span class=\"httplug-stack-success\">✔</span>
        {% endif %}
        <span class=\"label httplug-method httplug-method-{{ stack.requestMethod|lower }}\">{{ stack.requestMethod }}</span>
    </div>
    <div class=\"label httplug-stack-header-target\">
        <span class=\"httplug-scheme\">{{ stack.requestScheme }}://</span>
        <span class=\"httplug-host\">{{ stack.requestHost }}</span>
        <span class=\"httplug-target\">{{ stack.requestTarget }}</span>
    </div>
    <div>
        <span class=\"label httplug-duration\">{{ stack.duration|number_format }} ms</span>
        {% if stack.responseCode >= 400 and stack.responseCode <= 599 %}
            <span class=\"label status-error\">{{ stack.responseCode }}</span>
        {% elseif stack.responseCode >= 300 and stack.responseCode <= 399 %}
            <span class=\"label status-warning\">{{ stack.responseCode }}</span>
        {% else %}
            <span class=\"label status-success\">{{ stack.responseCode }}</span>
        {% endif %}
    </div>
</div>
<div id=\"httplug-{{ client }}-{{ id }}-details\" class=\"httplug-hidden\">
    <div class=\"httplug-toolbar\">
        <div class=\"httplug-copy-as-curl\">
            <input readonly=\"readonly\" type=\"text\" value=\"{{ stack.curlCommand }}\" />
            <button class=\"btn tooltip-toggle\" aria-label=\"Copy to clipboard\">Copy to clipboard</button>
        </div>
        <button data-toggle=\"#httplug-{{ client }}-{{ id }}-stack\" class=\"httplug-toggle btn\" >Toggle plugin stack</button>
        <button data-toggle=\"#httplug-{{ client }}-{{ id }}-details .httplug-http-body\" class=\"httplug-toggle btn\">Toggle body</button>
    </div>
    <div class=\"httplug-messages\">
        <div class=\"httplug-message card\">
            <h4>Request</h4>
            {{ stack.clientRequest|httplug_markup|nl2br }}
        </div>
        <div class=\"httplug-message card\">
            <h4>Response</h4>
            {{ stack.clientResponse|httplug_markup|nl2br }}
        </div>
    </div>
    {% if stack.profiles %}
        <div id=\"httplug-{{ client }}-{{ id }}-stack\" class=\"httplug-hidden card\">
            {% for profile in stack.profiles %}
                <h3 class=\"httplug-plugin-name\">{{ profile.plugin }}</h3>
                <div class=\"httplug-messages\">
                    <div class=\"httplug-message\">
                        <h4>Request</h4>
                        {{ profile.request|httplug_markup|nl2br }}
                    </div>
                    <div class=\"httplug-message\">
                        <h4>Response</h4>
                        {{ profile.response|httplug_markup|nl2br }}
                    </div>
                </div>
                {% if not loop.last %}
                    <hr />
                {% endif %}
            {% endfor %}
        </div>
    {% endif %}
</div>
{% for child in collector.childrenStacks(stack) %}
    <div class=\"httplug-stack\">
        {% include '@Httplug/stack.html.twig' with {
            'collector': collector,
            'client': client,
            'stack': child,
            'id': id ~ '-' ~ loop.index
        } only %}
    </div>
{% endfor %}
", "@Httplug/stack.html.twig", "/home/master/symfony_doctrine/vendor/php-http/httplug-bundle/Resources/views/stack.html.twig");
    }
}
