<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_d7fbf7c6a0dfac30509226a0b6d2aa6472ab488d619d2064c569dc9bedb43930 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_08dbd0aab8f1ac59c4fbb10b094ca354cf12eeeb35c9f2e08f560094bdac5693 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08dbd0aab8f1ac59c4fbb10b094ca354cf12eeeb35c9f2e08f560094bdac5693->enter($__internal_08dbd0aab8f1ac59c4fbb10b094ca354cf12eeeb35c9f2e08f560094bdac5693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_651c5673ec7b62120b06a1abb0a793ae18ddd1c7c337e91758e0f4fce8a75a79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_651c5673ec7b62120b06a1abb0a793ae18ddd1c7c337e91758e0f4fce8a75a79->enter($__internal_651c5673ec7b62120b06a1abb0a793ae18ddd1c7c337e91758e0f4fce8a75a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08dbd0aab8f1ac59c4fbb10b094ca354cf12eeeb35c9f2e08f560094bdac5693->leave($__internal_08dbd0aab8f1ac59c4fbb10b094ca354cf12eeeb35c9f2e08f560094bdac5693_prof);

        
        $__internal_651c5673ec7b62120b06a1abb0a793ae18ddd1c7c337e91758e0f4fce8a75a79->leave($__internal_651c5673ec7b62120b06a1abb0a793ae18ddd1c7c337e91758e0f4fce8a75a79_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7790833fd944fd25b6c27103a58086f35668228d6cc4c828ed4229d1076f8034 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7790833fd944fd25b6c27103a58086f35668228d6cc4c828ed4229d1076f8034->enter($__internal_7790833fd944fd25b6c27103a58086f35668228d6cc4c828ed4229d1076f8034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5f89415716eb2e64245ede2e8aa0d6976b0b978ca7e1bea05791189ca51db858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f89415716eb2e64245ede2e8aa0d6976b0b978ca7e1bea05791189ca51db858->enter($__internal_5f89415716eb2e64245ede2e8aa0d6976b0b978ca7e1bea05791189ca51db858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_5f89415716eb2e64245ede2e8aa0d6976b0b978ca7e1bea05791189ca51db858->leave($__internal_5f89415716eb2e64245ede2e8aa0d6976b0b978ca7e1bea05791189ca51db858_prof);

        
        $__internal_7790833fd944fd25b6c27103a58086f35668228d6cc4c828ed4229d1076f8034->leave($__internal_7790833fd944fd25b6c27103a58086f35668228d6cc4c828ed4229d1076f8034_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/Applications/MAMP/htdocs/emotion-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
