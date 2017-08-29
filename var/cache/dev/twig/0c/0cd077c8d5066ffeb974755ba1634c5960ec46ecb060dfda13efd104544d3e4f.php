<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_904f72b347b2e0b6567378e3d2660436a066a12f97bb8927c5077708092dc48b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
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
        $__internal_df7f7025705f8785c2f384b78e486a16d0619bcec5cf02a8cb5779de8b40083c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df7f7025705f8785c2f384b78e486a16d0619bcec5cf02a8cb5779de8b40083c->enter($__internal_df7f7025705f8785c2f384b78e486a16d0619bcec5cf02a8cb5779de8b40083c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_398efc8370c66f57513e3f2ba9304119d57999f0174d98b21b057b0421e4efbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_398efc8370c66f57513e3f2ba9304119d57999f0174d98b21b057b0421e4efbe->enter($__internal_398efc8370c66f57513e3f2ba9304119d57999f0174d98b21b057b0421e4efbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df7f7025705f8785c2f384b78e486a16d0619bcec5cf02a8cb5779de8b40083c->leave($__internal_df7f7025705f8785c2f384b78e486a16d0619bcec5cf02a8cb5779de8b40083c_prof);

        
        $__internal_398efc8370c66f57513e3f2ba9304119d57999f0174d98b21b057b0421e4efbe->leave($__internal_398efc8370c66f57513e3f2ba9304119d57999f0174d98b21b057b0421e4efbe_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dd5cec9bfd1729027593dcb594425da66101e529df73834d2a23cacec0713e09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd5cec9bfd1729027593dcb594425da66101e529df73834d2a23cacec0713e09->enter($__internal_dd5cec9bfd1729027593dcb594425da66101e529df73834d2a23cacec0713e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f6636920730e947b8e63ddaa7ca152f089c6ea8072e338a181861a86aae854ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6636920730e947b8e63ddaa7ca152f089c6ea8072e338a181861a86aae854ed->enter($__internal_f6636920730e947b8e63ddaa7ca152f089c6ea8072e338a181861a86aae854ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_f6636920730e947b8e63ddaa7ca152f089c6ea8072e338a181861a86aae854ed->leave($__internal_f6636920730e947b8e63ddaa7ca152f089c6ea8072e338a181861a86aae854ed_prof);

        
        $__internal_dd5cec9bfd1729027593dcb594425da66101e529df73834d2a23cacec0713e09->leave($__internal_dd5cec9bfd1729027593dcb594425da66101e529df73834d2a23cacec0713e09_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a243b8f8614eb0a2ee133812290621bdd9282d450b2428718d83521e563d007 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a243b8f8614eb0a2ee133812290621bdd9282d450b2428718d83521e563d007->enter($__internal_7a243b8f8614eb0a2ee133812290621bdd9282d450b2428718d83521e563d007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9b40bde92baa692d295553cc223d3c3aa3adfcd89e903ef0dc3c5f077608e71c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b40bde92baa692d295553cc223d3c3aa3adfcd89e903ef0dc3c5f077608e71c->enter($__internal_9b40bde92baa692d295553cc223d3c3aa3adfcd89e903ef0dc3c5f077608e71c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9b40bde92baa692d295553cc223d3c3aa3adfcd89e903ef0dc3c5f077608e71c->leave($__internal_9b40bde92baa692d295553cc223d3c3aa3adfcd89e903ef0dc3c5f077608e71c_prof);

        
        $__internal_7a243b8f8614eb0a2ee133812290621bdd9282d450b2428718d83521e563d007->leave($__internal_7a243b8f8614eb0a2ee133812290621bdd9282d450b2428718d83521e563d007_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
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
", "WebProfilerBundle:Profiler:open.html.twig", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
