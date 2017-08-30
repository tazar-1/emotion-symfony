<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_e1f7c4110a8589269679854d36d1778cd00a056ff70f139ab1fffed6dcf0c96a extends Twig_Template
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
        $__internal_f8d6313d3acbcf249a03d3754d4b07fe675f5c925d1c80efffe93959e5783106 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8d6313d3acbcf249a03d3754d4b07fe675f5c925d1c80efffe93959e5783106->enter($__internal_f8d6313d3acbcf249a03d3754d4b07fe675f5c925d1c80efffe93959e5783106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_49e89deab1f774a2cd4cdec62d032fd2f84b6025de4e4ae6c14c4e933006f57d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49e89deab1f774a2cd4cdec62d032fd2f84b6025de4e4ae6c14c4e933006f57d->enter($__internal_49e89deab1f774a2cd4cdec62d032fd2f84b6025de4e4ae6c14c4e933006f57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8d6313d3acbcf249a03d3754d4b07fe675f5c925d1c80efffe93959e5783106->leave($__internal_f8d6313d3acbcf249a03d3754d4b07fe675f5c925d1c80efffe93959e5783106_prof);

        
        $__internal_49e89deab1f774a2cd4cdec62d032fd2f84b6025de4e4ae6c14c4e933006f57d->leave($__internal_49e89deab1f774a2cd4cdec62d032fd2f84b6025de4e4ae6c14c4e933006f57d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5f62f125e7317f4b2b5139dd0b458cda0d05519bc9dd8d733fb4b2ff2ee7b50b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f62f125e7317f4b2b5139dd0b458cda0d05519bc9dd8d733fb4b2ff2ee7b50b->enter($__internal_5f62f125e7317f4b2b5139dd0b458cda0d05519bc9dd8d733fb4b2ff2ee7b50b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e63c616ad980799ffff92b1c0719dcc8bbc51a88e07cb26c9693c626e55a7884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e63c616ad980799ffff92b1c0719dcc8bbc51a88e07cb26c9693c626e55a7884->enter($__internal_e63c616ad980799ffff92b1c0719dcc8bbc51a88e07cb26c9693c626e55a7884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_e63c616ad980799ffff92b1c0719dcc8bbc51a88e07cb26c9693c626e55a7884->leave($__internal_e63c616ad980799ffff92b1c0719dcc8bbc51a88e07cb26c9693c626e55a7884_prof);

        
        $__internal_5f62f125e7317f4b2b5139dd0b458cda0d05519bc9dd8d733fb4b2ff2ee7b50b->leave($__internal_5f62f125e7317f4b2b5139dd0b458cda0d05519bc9dd8d733fb4b2ff2ee7b50b_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "D:\\Logiciels\\wamp64\\www\\emotion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
