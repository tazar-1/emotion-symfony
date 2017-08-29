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
        $__internal_1b2a4650a9e3b86a74364ed8879f6a6e4685783ca0327d395ab9ab9dff6ad9bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b2a4650a9e3b86a74364ed8879f6a6e4685783ca0327d395ab9ab9dff6ad9bf->enter($__internal_1b2a4650a9e3b86a74364ed8879f6a6e4685783ca0327d395ab9ab9dff6ad9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_39935148391a60f119071fc1baf7bbf276a85527e96ca778c505dd1f58e859ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39935148391a60f119071fc1baf7bbf276a85527e96ca778c505dd1f58e859ee->enter($__internal_39935148391a60f119071fc1baf7bbf276a85527e96ca778c505dd1f58e859ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b2a4650a9e3b86a74364ed8879f6a6e4685783ca0327d395ab9ab9dff6ad9bf->leave($__internal_1b2a4650a9e3b86a74364ed8879f6a6e4685783ca0327d395ab9ab9dff6ad9bf_prof);

        
        $__internal_39935148391a60f119071fc1baf7bbf276a85527e96ca778c505dd1f58e859ee->leave($__internal_39935148391a60f119071fc1baf7bbf276a85527e96ca778c505dd1f58e859ee_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d482bbcb3fc07965a386df5b58507bed37739e4464971e65810e553cd8d7d6fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d482bbcb3fc07965a386df5b58507bed37739e4464971e65810e553cd8d7d6fa->enter($__internal_d482bbcb3fc07965a386df5b58507bed37739e4464971e65810e553cd8d7d6fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c4ac0ffe9d96ba0002cb9f9b62bd0b3230e93a5a5f29ea060730861254faf125 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4ac0ffe9d96ba0002cb9f9b62bd0b3230e93a5a5f29ea060730861254faf125->enter($__internal_c4ac0ffe9d96ba0002cb9f9b62bd0b3230e93a5a5f29ea060730861254faf125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c4ac0ffe9d96ba0002cb9f9b62bd0b3230e93a5a5f29ea060730861254faf125->leave($__internal_c4ac0ffe9d96ba0002cb9f9b62bd0b3230e93a5a5f29ea060730861254faf125_prof);

        
        $__internal_d482bbcb3fc07965a386df5b58507bed37739e4464971e65810e553cd8d7d6fa->leave($__internal_d482bbcb3fc07965a386df5b58507bed37739e4464971e65810e553cd8d7d6fa_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c9680a5da80f502f1fa8ac537ff261539e95328b4e0d0afcf4ccccd601cd2bbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9680a5da80f502f1fa8ac537ff261539e95328b4e0d0afcf4ccccd601cd2bbe->enter($__internal_c9680a5da80f502f1fa8ac537ff261539e95328b4e0d0afcf4ccccd601cd2bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b274d1612ddb2f401c7cfd0de14ce9718ffcab290f8b59343fb3e1ea01348aea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b274d1612ddb2f401c7cfd0de14ce9718ffcab290f8b59343fb3e1ea01348aea->enter($__internal_b274d1612ddb2f401c7cfd0de14ce9718ffcab290f8b59343fb3e1ea01348aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b274d1612ddb2f401c7cfd0de14ce9718ffcab290f8b59343fb3e1ea01348aea->leave($__internal_b274d1612ddb2f401c7cfd0de14ce9718ffcab290f8b59343fb3e1ea01348aea_prof);

        
        $__internal_c9680a5da80f502f1fa8ac537ff261539e95328b4e0d0afcf4ccccd601cd2bbe->leave($__internal_c9680a5da80f502f1fa8ac537ff261539e95328b4e0d0afcf4ccccd601cd2bbe_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a4c6f07c58537c172b2859c323c02215f71e50b65aa64fdf08da38427f601f3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4c6f07c58537c172b2859c323c02215f71e50b65aa64fdf08da38427f601f3e->enter($__internal_a4c6f07c58537c172b2859c323c02215f71e50b65aa64fdf08da38427f601f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2cbee042017d5f5f4a3ba0e1cd594942849098be9628d5fa677f5b902e9f1b43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cbee042017d5f5f4a3ba0e1cd594942849098be9628d5fa677f5b902e9f1b43->enter($__internal_2cbee042017d5f5f4a3ba0e1cd594942849098be9628d5fa677f5b902e9f1b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_2cbee042017d5f5f4a3ba0e1cd594942849098be9628d5fa677f5b902e9f1b43->leave($__internal_2cbee042017d5f5f4a3ba0e1cd594942849098be9628d5fa677f5b902e9f1b43_prof);

        
        $__internal_a4c6f07c58537c172b2859c323c02215f71e50b65aa64fdf08da38427f601f3e->leave($__internal_a4c6f07c58537c172b2859c323c02215f71e50b65aa64fdf08da38427f601f3e_prof);

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
