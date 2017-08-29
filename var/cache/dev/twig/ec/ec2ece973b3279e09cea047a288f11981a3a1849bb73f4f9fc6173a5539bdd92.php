<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_a7b37095c69f1e8d7b81c41ba2dbcc90e8c8a4c580707021f71aa3d7dcf6843f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_db1a955ad2300a081d33a7f4e5bc2399ebdd212e4de49e2c8816b3e2240f89f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db1a955ad2300a081d33a7f4e5bc2399ebdd212e4de49e2c8816b3e2240f89f6->enter($__internal_db1a955ad2300a081d33a7f4e5bc2399ebdd212e4de49e2c8816b3e2240f89f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_c59626ef8a66d749f4d0b93067fbfc3d313199ffe1f176703ff30bbc0d69f1ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c59626ef8a66d749f4d0b93067fbfc3d313199ffe1f176703ff30bbc0d69f1ba->enter($__internal_c59626ef8a66d749f4d0b93067fbfc3d313199ffe1f176703ff30bbc0d69f1ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db1a955ad2300a081d33a7f4e5bc2399ebdd212e4de49e2c8816b3e2240f89f6->leave($__internal_db1a955ad2300a081d33a7f4e5bc2399ebdd212e4de49e2c8816b3e2240f89f6_prof);

        
        $__internal_c59626ef8a66d749f4d0b93067fbfc3d313199ffe1f176703ff30bbc0d69f1ba->leave($__internal_c59626ef8a66d749f4d0b93067fbfc3d313199ffe1f176703ff30bbc0d69f1ba_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_53295b3b81cf9b830b6bf6be53e3b681a2c409fbad3f049a05e3f22339716635 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53295b3b81cf9b830b6bf6be53e3b681a2c409fbad3f049a05e3f22339716635->enter($__internal_53295b3b81cf9b830b6bf6be53e3b681a2c409fbad3f049a05e3f22339716635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_789f27cb2eed7dea17b81f54b191feb99ebe65d0ba0d08e2e82afd4730361459 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_789f27cb2eed7dea17b81f54b191feb99ebe65d0ba0d08e2e82afd4730361459->enter($__internal_789f27cb2eed7dea17b81f54b191feb99ebe65d0ba0d08e2e82afd4730361459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_789f27cb2eed7dea17b81f54b191feb99ebe65d0ba0d08e2e82afd4730361459->leave($__internal_789f27cb2eed7dea17b81f54b191feb99ebe65d0ba0d08e2e82afd4730361459_prof);

        
        $__internal_53295b3b81cf9b830b6bf6be53e3b681a2c409fbad3f049a05e3f22339716635->leave($__internal_53295b3b81cf9b830b6bf6be53e3b681a2c409fbad3f049a05e3f22339716635_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/Applications/MAMP/htdocs/emotion-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
