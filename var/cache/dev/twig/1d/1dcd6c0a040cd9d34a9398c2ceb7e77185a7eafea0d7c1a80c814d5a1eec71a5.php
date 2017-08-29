<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_8e5c82b447fdff23566d6eec0a9b1097112907d973983c6cb81700fa55772fd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2787b6b8102e0f18cff4b22be3f3f40eddb6cf6b5252bb7b25ee0062e328eb7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2787b6b8102e0f18cff4b22be3f3f40eddb6cf6b5252bb7b25ee0062e328eb7c->enter($__internal_2787b6b8102e0f18cff4b22be3f3f40eddb6cf6b5252bb7b25ee0062e328eb7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_9807dd6db360ad63d9e05e3ad9a186ef504049bd6674180717dcfdcd7dc2abee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9807dd6db360ad63d9e05e3ad9a186ef504049bd6674180717dcfdcd7dc2abee->enter($__internal_9807dd6db360ad63d9e05e3ad9a186ef504049bd6674180717dcfdcd7dc2abee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2787b6b8102e0f18cff4b22be3f3f40eddb6cf6b5252bb7b25ee0062e328eb7c->leave($__internal_2787b6b8102e0f18cff4b22be3f3f40eddb6cf6b5252bb7b25ee0062e328eb7c_prof);

        
        $__internal_9807dd6db360ad63d9e05e3ad9a186ef504049bd6674180717dcfdcd7dc2abee->leave($__internal_9807dd6db360ad63d9e05e3ad9a186ef504049bd6674180717dcfdcd7dc2abee_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_63d1e4f2934daad413cdbcbb41146e1e55ff9962d89ce1e69747de1a1b036335 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63d1e4f2934daad413cdbcbb41146e1e55ff9962d89ce1e69747de1a1b036335->enter($__internal_63d1e4f2934daad413cdbcbb41146e1e55ff9962d89ce1e69747de1a1b036335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_83be6bb085197036aff7438eeed2f5f75a80d9b6efb55df5274835a610db1065 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83be6bb085197036aff7438eeed2f5f75a80d9b6efb55df5274835a610db1065->enter($__internal_83be6bb085197036aff7438eeed2f5f75a80d9b6efb55df5274835a610db1065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_83be6bb085197036aff7438eeed2f5f75a80d9b6efb55df5274835a610db1065->leave($__internal_83be6bb085197036aff7438eeed2f5f75a80d9b6efb55df5274835a610db1065_prof);

        
        $__internal_63d1e4f2934daad413cdbcbb41146e1e55ff9962d89ce1e69747de1a1b036335->leave($__internal_63d1e4f2934daad413cdbcbb41146e1e55ff9962d89ce1e69747de1a1b036335_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6374543743842bb27570eeecf33b77470f97bcdef716de6b64011bedd043e405 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6374543743842bb27570eeecf33b77470f97bcdef716de6b64011bedd043e405->enter($__internal_6374543743842bb27570eeecf33b77470f97bcdef716de6b64011bedd043e405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_00819e30702b8ef1a1c7cbf1ae03196cf308298ee823bea64661465d1d41d56b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00819e30702b8ef1a1c7cbf1ae03196cf308298ee823bea64661465d1d41d56b->enter($__internal_00819e30702b8ef1a1c7cbf1ae03196cf308298ee823bea64661465d1d41d56b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_00819e30702b8ef1a1c7cbf1ae03196cf308298ee823bea64661465d1d41d56b->leave($__internal_00819e30702b8ef1a1c7cbf1ae03196cf308298ee823bea64661465d1d41d56b_prof);

        
        $__internal_6374543743842bb27570eeecf33b77470f97bcdef716de6b64011bedd043e405->leave($__internal_6374543743842bb27570eeecf33b77470f97bcdef716de6b64011bedd043e405_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
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

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
