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
        $__internal_509be1580ed0cd777b29d22f84d76507d96b00a991b1ef0c6203f00d8bed2517 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_509be1580ed0cd777b29d22f84d76507d96b00a991b1ef0c6203f00d8bed2517->enter($__internal_509be1580ed0cd777b29d22f84d76507d96b00a991b1ef0c6203f00d8bed2517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_827586f4f20fd5bd4e33d505afcb833ccd2cdaf5727a8fbbd3d76cce9af66426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_827586f4f20fd5bd4e33d505afcb833ccd2cdaf5727a8fbbd3d76cce9af66426->enter($__internal_827586f4f20fd5bd4e33d505afcb833ccd2cdaf5727a8fbbd3d76cce9af66426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_509be1580ed0cd777b29d22f84d76507d96b00a991b1ef0c6203f00d8bed2517->leave($__internal_509be1580ed0cd777b29d22f84d76507d96b00a991b1ef0c6203f00d8bed2517_prof);

        
        $__internal_827586f4f20fd5bd4e33d505afcb833ccd2cdaf5727a8fbbd3d76cce9af66426->leave($__internal_827586f4f20fd5bd4e33d505afcb833ccd2cdaf5727a8fbbd3d76cce9af66426_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2204321cfa703b7990298a9e11d2a41d8341cbb38a00ede7e3ed08e4e960dbda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2204321cfa703b7990298a9e11d2a41d8341cbb38a00ede7e3ed08e4e960dbda->enter($__internal_2204321cfa703b7990298a9e11d2a41d8341cbb38a00ede7e3ed08e4e960dbda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_eca1cd2a6100df1e494794950ac13ab9a002e24843175320e6d19231f6ada1ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eca1cd2a6100df1e494794950ac13ab9a002e24843175320e6d19231f6ada1ad->enter($__internal_eca1cd2a6100df1e494794950ac13ab9a002e24843175320e6d19231f6ada1ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_eca1cd2a6100df1e494794950ac13ab9a002e24843175320e6d19231f6ada1ad->leave($__internal_eca1cd2a6100df1e494794950ac13ab9a002e24843175320e6d19231f6ada1ad_prof);

        
        $__internal_2204321cfa703b7990298a9e11d2a41d8341cbb38a00ede7e3ed08e4e960dbda->leave($__internal_2204321cfa703b7990298a9e11d2a41d8341cbb38a00ede7e3ed08e4e960dbda_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e1063d507ac53b50180b116a1a6fcd17a731c3124c7c2c708bd6ed1f6589ce55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1063d507ac53b50180b116a1a6fcd17a731c3124c7c2c708bd6ed1f6589ce55->enter($__internal_e1063d507ac53b50180b116a1a6fcd17a731c3124c7c2c708bd6ed1f6589ce55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c9bd0792ac5a5cea093ebb13ec1a558eab8fc6a9e9cfac338a5f05f8e89a0c77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9bd0792ac5a5cea093ebb13ec1a558eab8fc6a9e9cfac338a5f05f8e89a0c77->enter($__internal_c9bd0792ac5a5cea093ebb13ec1a558eab8fc6a9e9cfac338a5f05f8e89a0c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_c9bd0792ac5a5cea093ebb13ec1a558eab8fc6a9e9cfac338a5f05f8e89a0c77->leave($__internal_c9bd0792ac5a5cea093ebb13ec1a558eab8fc6a9e9cfac338a5f05f8e89a0c77_prof);

        
        $__internal_e1063d507ac53b50180b116a1a6fcd17a731c3124c7c2c708bd6ed1f6589ce55->leave($__internal_e1063d507ac53b50180b116a1a6fcd17a731c3124c7c2c708bd6ed1f6589ce55_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_37deaa7638e856dd34c32cc1b00d5d323ce0c1c1d8c89da48bc1aa271e399ef0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37deaa7638e856dd34c32cc1b00d5d323ce0c1c1d8c89da48bc1aa271e399ef0->enter($__internal_37deaa7638e856dd34c32cc1b00d5d323ce0c1c1d8c89da48bc1aa271e399ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_286e0642fb251e6596b48717ae244c80aeaa7fb69f54c37fd64a4640c52a34f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_286e0642fb251e6596b48717ae244c80aeaa7fb69f54c37fd64a4640c52a34f4->enter($__internal_286e0642fb251e6596b48717ae244c80aeaa7fb69f54c37fd64a4640c52a34f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_286e0642fb251e6596b48717ae244c80aeaa7fb69f54c37fd64a4640c52a34f4->leave($__internal_286e0642fb251e6596b48717ae244c80aeaa7fb69f54c37fd64a4640c52a34f4_prof);

        
        $__internal_37deaa7638e856dd34c32cc1b00d5d323ce0c1c1d8c89da48bc1aa271e399ef0->leave($__internal_37deaa7638e856dd34c32cc1b00d5d323ce0c1c1d8c89da48bc1aa271e399ef0_prof);

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
