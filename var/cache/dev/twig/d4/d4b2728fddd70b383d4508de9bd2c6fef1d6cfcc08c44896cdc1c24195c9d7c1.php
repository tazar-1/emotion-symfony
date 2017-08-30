<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_01f51919ce56e22c3d95ec38d6d0b067f66d7a28a249c0157031c603493cf748 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43309a3cc512b10893ad69db1972cb8742ae3b3d711132e8d4f32c3290697821 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43309a3cc512b10893ad69db1972cb8742ae3b3d711132e8d4f32c3290697821->enter($__internal_43309a3cc512b10893ad69db1972cb8742ae3b3d711132e8d4f32c3290697821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_15635f1f0f2bb224e4f6d7ba851d6708d84f794ea678e9d5a6bb04bc44b8c8f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15635f1f0f2bb224e4f6d7ba851d6708d84f794ea678e9d5a6bb04bc44b8c8f3->enter($__internal_15635f1f0f2bb224e4f6d7ba851d6708d84f794ea678e9d5a6bb04bc44b8c8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43309a3cc512b10893ad69db1972cb8742ae3b3d711132e8d4f32c3290697821->leave($__internal_43309a3cc512b10893ad69db1972cb8742ae3b3d711132e8d4f32c3290697821_prof);

        
        $__internal_15635f1f0f2bb224e4f6d7ba851d6708d84f794ea678e9d5a6bb04bc44b8c8f3->leave($__internal_15635f1f0f2bb224e4f6d7ba851d6708d84f794ea678e9d5a6bb04bc44b8c8f3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ebcf37cfc1973f1fbf6929e6a3f81a3ad4cf27f422946dfdd0cd230a0a85d66a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebcf37cfc1973f1fbf6929e6a3f81a3ad4cf27f422946dfdd0cd230a0a85d66a->enter($__internal_ebcf37cfc1973f1fbf6929e6a3f81a3ad4cf27f422946dfdd0cd230a0a85d66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6fa10bd24c52cffb21d3333ddaa221edcb4e2db0808d367d3cb7f43113dccf3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fa10bd24c52cffb21d3333ddaa221edcb4e2db0808d367d3cb7f43113dccf3e->enter($__internal_6fa10bd24c52cffb21d3333ddaa221edcb4e2db0808d367d3cb7f43113dccf3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_6fa10bd24c52cffb21d3333ddaa221edcb4e2db0808d367d3cb7f43113dccf3e->leave($__internal_6fa10bd24c52cffb21d3333ddaa221edcb4e2db0808d367d3cb7f43113dccf3e_prof);

        
        $__internal_ebcf37cfc1973f1fbf6929e6a3f81a3ad4cf27f422946dfdd0cd230a0a85d66a->leave($__internal_ebcf37cfc1973f1fbf6929e6a3f81a3ad4cf27f422946dfdd0cd230a0a85d66a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
