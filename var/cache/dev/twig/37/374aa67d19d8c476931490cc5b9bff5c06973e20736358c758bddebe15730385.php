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
        $__internal_b0407ee282c4b8543e489bf13f9e4663c27e4bca1f4659c1e509642a583afa8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0407ee282c4b8543e489bf13f9e4663c27e4bca1f4659c1e509642a583afa8a->enter($__internal_b0407ee282c4b8543e489bf13f9e4663c27e4bca1f4659c1e509642a583afa8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3e8c6d8350e6a788c48bbe3ac0a85eb589e86c37e09f1304a774caf9e268c6a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e8c6d8350e6a788c48bbe3ac0a85eb589e86c37e09f1304a774caf9e268c6a3->enter($__internal_3e8c6d8350e6a788c48bbe3ac0a85eb589e86c37e09f1304a774caf9e268c6a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0407ee282c4b8543e489bf13f9e4663c27e4bca1f4659c1e509642a583afa8a->leave($__internal_b0407ee282c4b8543e489bf13f9e4663c27e4bca1f4659c1e509642a583afa8a_prof);

        
        $__internal_3e8c6d8350e6a788c48bbe3ac0a85eb589e86c37e09f1304a774caf9e268c6a3->leave($__internal_3e8c6d8350e6a788c48bbe3ac0a85eb589e86c37e09f1304a774caf9e268c6a3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_02fac2df454f292917129b2dd1da014a60a30198d70d6980b1ff75a4c9063d1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02fac2df454f292917129b2dd1da014a60a30198d70d6980b1ff75a4c9063d1b->enter($__internal_02fac2df454f292917129b2dd1da014a60a30198d70d6980b1ff75a4c9063d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_55124bc81b46c105c583f8555383f765dd49e58e22383eb214501c92c9f6f259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55124bc81b46c105c583f8555383f765dd49e58e22383eb214501c92c9f6f259->enter($__internal_55124bc81b46c105c583f8555383f765dd49e58e22383eb214501c92c9f6f259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_55124bc81b46c105c583f8555383f765dd49e58e22383eb214501c92c9f6f259->leave($__internal_55124bc81b46c105c583f8555383f765dd49e58e22383eb214501c92c9f6f259_prof);

        
        $__internal_02fac2df454f292917129b2dd1da014a60a30198d70d6980b1ff75a4c9063d1b->leave($__internal_02fac2df454f292917129b2dd1da014a60a30198d70d6980b1ff75a4c9063d1b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ed4884cdc2ce9f0bc19d0114bf8a527549571a23bc8e290a0754a2217c903c37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed4884cdc2ce9f0bc19d0114bf8a527549571a23bc8e290a0754a2217c903c37->enter($__internal_ed4884cdc2ce9f0bc19d0114bf8a527549571a23bc8e290a0754a2217c903c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_af458b55ff9a6358e845bbe5d04cd3a7eea63d56166ca9c8f258a14725711a68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af458b55ff9a6358e845bbe5d04cd3a7eea63d56166ca9c8f258a14725711a68->enter($__internal_af458b55ff9a6358e845bbe5d04cd3a7eea63d56166ca9c8f258a14725711a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_af458b55ff9a6358e845bbe5d04cd3a7eea63d56166ca9c8f258a14725711a68->leave($__internal_af458b55ff9a6358e845bbe5d04cd3a7eea63d56166ca9c8f258a14725711a68_prof);

        
        $__internal_ed4884cdc2ce9f0bc19d0114bf8a527549571a23bc8e290a0754a2217c903c37->leave($__internal_ed4884cdc2ce9f0bc19d0114bf8a527549571a23bc8e290a0754a2217c903c37_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0723110d438051fdb452735f89217e4ef5eef4ec9b4d218109553566b20a5e25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0723110d438051fdb452735f89217e4ef5eef4ec9b4d218109553566b20a5e25->enter($__internal_0723110d438051fdb452735f89217e4ef5eef4ec9b4d218109553566b20a5e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_56ce2810b64831a7f7cf6c5d6efb94e4ee259e87a0d6e6cfbfff25c08929be5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56ce2810b64831a7f7cf6c5d6efb94e4ee259e87a0d6e6cfbfff25c08929be5c->enter($__internal_56ce2810b64831a7f7cf6c5d6efb94e4ee259e87a0d6e6cfbfff25c08929be5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_56ce2810b64831a7f7cf6c5d6efb94e4ee259e87a0d6e6cfbfff25c08929be5c->leave($__internal_56ce2810b64831a7f7cf6c5d6efb94e4ee259e87a0d6e6cfbfff25c08929be5c_prof);

        
        $__internal_0723110d438051fdb452735f89217e4ef5eef4ec9b4d218109553566b20a5e25->leave($__internal_0723110d438051fdb452735f89217e4ef5eef4ec9b4d218109553566b20a5e25_prof);

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
