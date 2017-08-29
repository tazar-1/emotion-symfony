<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_26ccac28e93129ff9e6e9e9adb3ed8294de69de07b64920873d38af5a8edd929 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_39ea40a3d167ebb2545df9fc6f6ad8eac0bba09f981943247a1b10de9b167d82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39ea40a3d167ebb2545df9fc6f6ad8eac0bba09f981943247a1b10de9b167d82->enter($__internal_39ea40a3d167ebb2545df9fc6f6ad8eac0bba09f981943247a1b10de9b167d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d27e32fa0e0551d19f094b3390ead2723436d2cb6ce5df182a38fe3c1fa6beba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d27e32fa0e0551d19f094b3390ead2723436d2cb6ce5df182a38fe3c1fa6beba->enter($__internal_d27e32fa0e0551d19f094b3390ead2723436d2cb6ce5df182a38fe3c1fa6beba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39ea40a3d167ebb2545df9fc6f6ad8eac0bba09f981943247a1b10de9b167d82->leave($__internal_39ea40a3d167ebb2545df9fc6f6ad8eac0bba09f981943247a1b10de9b167d82_prof);

        
        $__internal_d27e32fa0e0551d19f094b3390ead2723436d2cb6ce5df182a38fe3c1fa6beba->leave($__internal_d27e32fa0e0551d19f094b3390ead2723436d2cb6ce5df182a38fe3c1fa6beba_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_135114e261f991904b768d45248ca6f331d4183caaab7937ba547e8ad91ab0a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_135114e261f991904b768d45248ca6f331d4183caaab7937ba547e8ad91ab0a1->enter($__internal_135114e261f991904b768d45248ca6f331d4183caaab7937ba547e8ad91ab0a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ade4716da23e14b9d7ceecbfde8521f92b4e5c07878f6afad5de429f859458f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ade4716da23e14b9d7ceecbfde8521f92b4e5c07878f6afad5de429f859458f3->enter($__internal_ade4716da23e14b9d7ceecbfde8521f92b4e5c07878f6afad5de429f859458f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ade4716da23e14b9d7ceecbfde8521f92b4e5c07878f6afad5de429f859458f3->leave($__internal_ade4716da23e14b9d7ceecbfde8521f92b4e5c07878f6afad5de429f859458f3_prof);

        
        $__internal_135114e261f991904b768d45248ca6f331d4183caaab7937ba547e8ad91ab0a1->leave($__internal_135114e261f991904b768d45248ca6f331d4183caaab7937ba547e8ad91ab0a1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_83b23eb238749c275fa6b4c0c0a646ca5122191cb88e1877b84e3f0c12682a11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83b23eb238749c275fa6b4c0c0a646ca5122191cb88e1877b84e3f0c12682a11->enter($__internal_83b23eb238749c275fa6b4c0c0a646ca5122191cb88e1877b84e3f0c12682a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ab71ebe0a41dd0ac9a82c7b239561606ced6bea1a5703f1709c4274436b3f75f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab71ebe0a41dd0ac9a82c7b239561606ced6bea1a5703f1709c4274436b3f75f->enter($__internal_ab71ebe0a41dd0ac9a82c7b239561606ced6bea1a5703f1709c4274436b3f75f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ab71ebe0a41dd0ac9a82c7b239561606ced6bea1a5703f1709c4274436b3f75f->leave($__internal_ab71ebe0a41dd0ac9a82c7b239561606ced6bea1a5703f1709c4274436b3f75f_prof);

        
        $__internal_83b23eb238749c275fa6b4c0c0a646ca5122191cb88e1877b84e3f0c12682a11->leave($__internal_83b23eb238749c275fa6b4c0c0a646ca5122191cb88e1877b84e3f0c12682a11_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_01dab703e9db39ac428eb147c0d3f2a2dafd749d7f2bd902e619c7203c43ab99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01dab703e9db39ac428eb147c0d3f2a2dafd749d7f2bd902e619c7203c43ab99->enter($__internal_01dab703e9db39ac428eb147c0d3f2a2dafd749d7f2bd902e619c7203c43ab99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fdd591341fa68235c2bf1e8478a9a8959fa5b5a0ceb1eb2cfa081704f899cb7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdd591341fa68235c2bf1e8478a9a8959fa5b5a0ceb1eb2cfa081704f899cb7e->enter($__internal_fdd591341fa68235c2bf1e8478a9a8959fa5b5a0ceb1eb2cfa081704f899cb7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fdd591341fa68235c2bf1e8478a9a8959fa5b5a0ceb1eb2cfa081704f899cb7e->leave($__internal_fdd591341fa68235c2bf1e8478a9a8959fa5b5a0ceb1eb2cfa081704f899cb7e_prof);

        
        $__internal_01dab703e9db39ac428eb147c0d3f2a2dafd749d7f2bd902e619c7203c43ab99->leave($__internal_01dab703e9db39ac428eb147c0d3f2a2dafd749d7f2bd902e619c7203c43ab99_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
