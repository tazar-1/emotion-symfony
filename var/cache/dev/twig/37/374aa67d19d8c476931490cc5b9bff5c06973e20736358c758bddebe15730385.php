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
        $__internal_f40bdf4ee2b24838d78036affe00282305806cd6bde384bafb0e19abadc4b9e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f40bdf4ee2b24838d78036affe00282305806cd6bde384bafb0e19abadc4b9e9->enter($__internal_f40bdf4ee2b24838d78036affe00282305806cd6bde384bafb0e19abadc4b9e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4796c6c641d45e722ae63e803b6d96b221da5ad99f4a6c87f62ac6223c8f6c76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4796c6c641d45e722ae63e803b6d96b221da5ad99f4a6c87f62ac6223c8f6c76->enter($__internal_4796c6c641d45e722ae63e803b6d96b221da5ad99f4a6c87f62ac6223c8f6c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f40bdf4ee2b24838d78036affe00282305806cd6bde384bafb0e19abadc4b9e9->leave($__internal_f40bdf4ee2b24838d78036affe00282305806cd6bde384bafb0e19abadc4b9e9_prof);

        
        $__internal_4796c6c641d45e722ae63e803b6d96b221da5ad99f4a6c87f62ac6223c8f6c76->leave($__internal_4796c6c641d45e722ae63e803b6d96b221da5ad99f4a6c87f62ac6223c8f6c76_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5e8273b3ed673ce12000e66b674a75627264026e94f12121c7379a783481a5d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e8273b3ed673ce12000e66b674a75627264026e94f12121c7379a783481a5d4->enter($__internal_5e8273b3ed673ce12000e66b674a75627264026e94f12121c7379a783481a5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_28c48a705c34b1c6cc3f3f63b7219639690c8df62542765d46be405a075f9c39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28c48a705c34b1c6cc3f3f63b7219639690c8df62542765d46be405a075f9c39->enter($__internal_28c48a705c34b1c6cc3f3f63b7219639690c8df62542765d46be405a075f9c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_28c48a705c34b1c6cc3f3f63b7219639690c8df62542765d46be405a075f9c39->leave($__internal_28c48a705c34b1c6cc3f3f63b7219639690c8df62542765d46be405a075f9c39_prof);

        
        $__internal_5e8273b3ed673ce12000e66b674a75627264026e94f12121c7379a783481a5d4->leave($__internal_5e8273b3ed673ce12000e66b674a75627264026e94f12121c7379a783481a5d4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_348481265bb5ad7ad07619a3cf50b1621ee045b94bfb988f885f1877f440effe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_348481265bb5ad7ad07619a3cf50b1621ee045b94bfb988f885f1877f440effe->enter($__internal_348481265bb5ad7ad07619a3cf50b1621ee045b94bfb988f885f1877f440effe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a0534921bffcfcfb91863033540914c8b8db2a2aed3c0e338f7992be753d67c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0534921bffcfcfb91863033540914c8b8db2a2aed3c0e338f7992be753d67c5->enter($__internal_a0534921bffcfcfb91863033540914c8b8db2a2aed3c0e338f7992be753d67c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a0534921bffcfcfb91863033540914c8b8db2a2aed3c0e338f7992be753d67c5->leave($__internal_a0534921bffcfcfb91863033540914c8b8db2a2aed3c0e338f7992be753d67c5_prof);

        
        $__internal_348481265bb5ad7ad07619a3cf50b1621ee045b94bfb988f885f1877f440effe->leave($__internal_348481265bb5ad7ad07619a3cf50b1621ee045b94bfb988f885f1877f440effe_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_28c4294abc4489f1cc75675e465493192ececcb621e2c72fa6473e123ce5c6f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28c4294abc4489f1cc75675e465493192ececcb621e2c72fa6473e123ce5c6f7->enter($__internal_28c4294abc4489f1cc75675e465493192ececcb621e2c72fa6473e123ce5c6f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fe4da323f5cff12b5e536cf9caae6fbcc8c378f79e9f3f73f1733d8ec50400a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe4da323f5cff12b5e536cf9caae6fbcc8c378f79e9f3f73f1733d8ec50400a0->enter($__internal_fe4da323f5cff12b5e536cf9caae6fbcc8c378f79e9f3f73f1733d8ec50400a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fe4da323f5cff12b5e536cf9caae6fbcc8c378f79e9f3f73f1733d8ec50400a0->leave($__internal_fe4da323f5cff12b5e536cf9caae6fbcc8c378f79e9f3f73f1733d8ec50400a0_prof);

        
        $__internal_28c4294abc4489f1cc75675e465493192ececcb621e2c72fa6473e123ce5c6f7->leave($__internal_28c4294abc4489f1cc75675e465493192ececcb621e2c72fa6473e123ce5c6f7_prof);

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
