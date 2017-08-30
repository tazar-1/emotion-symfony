<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_fc8d50b4ddaf604f422b05df6bd2514d63ecc83ac9533c9dcebb31515095dd1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
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
        $__internal_dc60e82e1afc26da8cd2a2fc067d2e3064ebd2d8eb13674026c817b79e942553 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc60e82e1afc26da8cd2a2fc067d2e3064ebd2d8eb13674026c817b79e942553->enter($__internal_dc60e82e1afc26da8cd2a2fc067d2e3064ebd2d8eb13674026c817b79e942553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5e22909544c07f9f432bf4814d2fb7a06762355b71cd29ab59f9c4d38ac1ba5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e22909544c07f9f432bf4814d2fb7a06762355b71cd29ab59f9c4d38ac1ba5c->enter($__internal_5e22909544c07f9f432bf4814d2fb7a06762355b71cd29ab59f9c4d38ac1ba5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc60e82e1afc26da8cd2a2fc067d2e3064ebd2d8eb13674026c817b79e942553->leave($__internal_dc60e82e1afc26da8cd2a2fc067d2e3064ebd2d8eb13674026c817b79e942553_prof);

        
        $__internal_5e22909544c07f9f432bf4814d2fb7a06762355b71cd29ab59f9c4d38ac1ba5c->leave($__internal_5e22909544c07f9f432bf4814d2fb7a06762355b71cd29ab59f9c4d38ac1ba5c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a6748c05b8f2fb5935768ea3abb2735201a73a0024039d0dfc41aaa778308517 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6748c05b8f2fb5935768ea3abb2735201a73a0024039d0dfc41aaa778308517->enter($__internal_a6748c05b8f2fb5935768ea3abb2735201a73a0024039d0dfc41aaa778308517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7fe5c8be1cde98b353ba24983612b43b61ac93fd7d9f538a24de8a4d3f68d3c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fe5c8be1cde98b353ba24983612b43b61ac93fd7d9f538a24de8a4d3f68d3c7->enter($__internal_7fe5c8be1cde98b353ba24983612b43b61ac93fd7d9f538a24de8a4d3f68d3c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_7fe5c8be1cde98b353ba24983612b43b61ac93fd7d9f538a24de8a4d3f68d3c7->leave($__internal_7fe5c8be1cde98b353ba24983612b43b61ac93fd7d9f538a24de8a4d3f68d3c7_prof);

        
        $__internal_a6748c05b8f2fb5935768ea3abb2735201a73a0024039d0dfc41aaa778308517->leave($__internal_a6748c05b8f2fb5935768ea3abb2735201a73a0024039d0dfc41aaa778308517_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6accff0a715b9d3e28e7d6ab5bd69de5746271d5bd64bde1dd122a6077d2f7ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6accff0a715b9d3e28e7d6ab5bd69de5746271d5bd64bde1dd122a6077d2f7ec->enter($__internal_6accff0a715b9d3e28e7d6ab5bd69de5746271d5bd64bde1dd122a6077d2f7ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_66e57ca83065607bb871f7628009c7d829180f090d506d87250af1382424409f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66e57ca83065607bb871f7628009c7d829180f090d506d87250af1382424409f->enter($__internal_66e57ca83065607bb871f7628009c7d829180f090d506d87250af1382424409f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_66e57ca83065607bb871f7628009c7d829180f090d506d87250af1382424409f->leave($__internal_66e57ca83065607bb871f7628009c7d829180f090d506d87250af1382424409f_prof);

        
        $__internal_6accff0a715b9d3e28e7d6ab5bd69de5746271d5bd64bde1dd122a6077d2f7ec->leave($__internal_6accff0a715b9d3e28e7d6ab5bd69de5746271d5bd64bde1dd122a6077d2f7ec_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5cb6020d2bba2a0f67becab205eaa56d7c61025ee8dc3d100e945f9af93df820 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cb6020d2bba2a0f67becab205eaa56d7c61025ee8dc3d100e945f9af93df820->enter($__internal_5cb6020d2bba2a0f67becab205eaa56d7c61025ee8dc3d100e945f9af93df820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_100096168e8fc94a8af84311cfa0c1ec2d7610eb8c354171528f968074a73435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_100096168e8fc94a8af84311cfa0c1ec2d7610eb8c354171528f968074a73435->enter($__internal_100096168e8fc94a8af84311cfa0c1ec2d7610eb8c354171528f968074a73435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_100096168e8fc94a8af84311cfa0c1ec2d7610eb8c354171528f968074a73435->leave($__internal_100096168e8fc94a8af84311cfa0c1ec2d7610eb8c354171528f968074a73435_prof);

        
        $__internal_5cb6020d2bba2a0f67becab205eaa56d7c61025ee8dc3d100e945f9af93df820->leave($__internal_5cb6020d2bba2a0f67becab205eaa56d7c61025ee8dc3d100e945f9af93df820_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
