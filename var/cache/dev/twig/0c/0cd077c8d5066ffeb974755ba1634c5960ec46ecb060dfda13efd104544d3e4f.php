<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_904f72b347b2e0b6567378e3d2660436a066a12f97bb8927c5077708092dc48b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ff14134b09abf6b6010043a98e8e8cabae2ed793a3d36e0e2c79fda8efd0400 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ff14134b09abf6b6010043a98e8e8cabae2ed793a3d36e0e2c79fda8efd0400->enter($__internal_9ff14134b09abf6b6010043a98e8e8cabae2ed793a3d36e0e2c79fda8efd0400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_9d2baa303e47279180c66933c1a9a8e384d0118f805056716784817ad99f5143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d2baa303e47279180c66933c1a9a8e384d0118f805056716784817ad99f5143->enter($__internal_9d2baa303e47279180c66933c1a9a8e384d0118f805056716784817ad99f5143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ff14134b09abf6b6010043a98e8e8cabae2ed793a3d36e0e2c79fda8efd0400->leave($__internal_9ff14134b09abf6b6010043a98e8e8cabae2ed793a3d36e0e2c79fda8efd0400_prof);

        
        $__internal_9d2baa303e47279180c66933c1a9a8e384d0118f805056716784817ad99f5143->leave($__internal_9d2baa303e47279180c66933c1a9a8e384d0118f805056716784817ad99f5143_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_54df6b22fc89e61aba0fb53d8f42c6ea68489993ec1578c198e2c9fab5c4e317 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54df6b22fc89e61aba0fb53d8f42c6ea68489993ec1578c198e2c9fab5c4e317->enter($__internal_54df6b22fc89e61aba0fb53d8f42c6ea68489993ec1578c198e2c9fab5c4e317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_233b1249caf2ccc5f35ef0c26a89df5dcb8c060f60bb26501785ae8487c87c9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_233b1249caf2ccc5f35ef0c26a89df5dcb8c060f60bb26501785ae8487c87c9e->enter($__internal_233b1249caf2ccc5f35ef0c26a89df5dcb8c060f60bb26501785ae8487c87c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_233b1249caf2ccc5f35ef0c26a89df5dcb8c060f60bb26501785ae8487c87c9e->leave($__internal_233b1249caf2ccc5f35ef0c26a89df5dcb8c060f60bb26501785ae8487c87c9e_prof);

        
        $__internal_54df6b22fc89e61aba0fb53d8f42c6ea68489993ec1578c198e2c9fab5c4e317->leave($__internal_54df6b22fc89e61aba0fb53d8f42c6ea68489993ec1578c198e2c9fab5c4e317_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7be5fa7ce2edfd6251996d60a81a81b0a427619f9b96cb5c21848e7a4814cf4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7be5fa7ce2edfd6251996d60a81a81b0a427619f9b96cb5c21848e7a4814cf4a->enter($__internal_7be5fa7ce2edfd6251996d60a81a81b0a427619f9b96cb5c21848e7a4814cf4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c5e27835352eeda491dc789959919396603e2059c5d0cbfe352c16ece32cf17e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5e27835352eeda491dc789959919396603e2059c5d0cbfe352c16ece32cf17e->enter($__internal_c5e27835352eeda491dc789959919396603e2059c5d0cbfe352c16ece32cf17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_c5e27835352eeda491dc789959919396603e2059c5d0cbfe352c16ece32cf17e->leave($__internal_c5e27835352eeda491dc789959919396603e2059c5d0cbfe352c16ece32cf17e_prof);

        
        $__internal_7be5fa7ce2edfd6251996d60a81a81b0a427619f9b96cb5c21848e7a4814cf4a->leave($__internal_7be5fa7ce2edfd6251996d60a81a81b0a427619f9b96cb5c21848e7a4814cf4a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
