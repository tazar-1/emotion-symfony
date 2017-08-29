<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_520d2edee525c3a95165d6ed96ddc238a904b01b470b6a5abc48624d8cf55778 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_15dc34da1c7741cb465d8bf91f687e4878b80c772d4faeb64d3a263e0722aa79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15dc34da1c7741cb465d8bf91f687e4878b80c772d4faeb64d3a263e0722aa79->enter($__internal_15dc34da1c7741cb465d8bf91f687e4878b80c772d4faeb64d3a263e0722aa79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_5c61dedbe80c950569319934fab0408f192d02543d2524e5b537c28169a99e02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c61dedbe80c950569319934fab0408f192d02543d2524e5b537c28169a99e02->enter($__internal_5c61dedbe80c950569319934fab0408f192d02543d2524e5b537c28169a99e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15dc34da1c7741cb465d8bf91f687e4878b80c772d4faeb64d3a263e0722aa79->leave($__internal_15dc34da1c7741cb465d8bf91f687e4878b80c772d4faeb64d3a263e0722aa79_prof);

        
        $__internal_5c61dedbe80c950569319934fab0408f192d02543d2524e5b537c28169a99e02->leave($__internal_5c61dedbe80c950569319934fab0408f192d02543d2524e5b537c28169a99e02_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ac17fd74f271c4800449310616669d7f06611fe8802b0f490368e2e5804eecde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac17fd74f271c4800449310616669d7f06611fe8802b0f490368e2e5804eecde->enter($__internal_ac17fd74f271c4800449310616669d7f06611fe8802b0f490368e2e5804eecde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fa386f604c4e02b351ebedf455a7c21ce214452ba901e300cb2f57dc8e595aad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa386f604c4e02b351ebedf455a7c21ce214452ba901e300cb2f57dc8e595aad->enter($__internal_fa386f604c4e02b351ebedf455a7c21ce214452ba901e300cb2f57dc8e595aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_fa386f604c4e02b351ebedf455a7c21ce214452ba901e300cb2f57dc8e595aad->leave($__internal_fa386f604c4e02b351ebedf455a7c21ce214452ba901e300cb2f57dc8e595aad_prof);

        
        $__internal_ac17fd74f271c4800449310616669d7f06611fe8802b0f490368e2e5804eecde->leave($__internal_ac17fd74f271c4800449310616669d7f06611fe8802b0f490368e2e5804eecde_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/Applications/MAMP/htdocs/emotion-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
