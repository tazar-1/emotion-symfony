<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_73468cd9ccb10ce1e43908b99c270e1133ca0c67ea9872a10a47cca5dd1cf0d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_d05bbdb841778f37d8e18e782e871b92940dfcb3f52425f5f0dc58468e2e8133 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d05bbdb841778f37d8e18e782e871b92940dfcb3f52425f5f0dc58468e2e8133->enter($__internal_d05bbdb841778f37d8e18e782e871b92940dfcb3f52425f5f0dc58468e2e8133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_46ddc4ae56fb79ff2ece5d7d1da7938f2519c9fde1d2e88f06d8c7c0bc98f7f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46ddc4ae56fb79ff2ece5d7d1da7938f2519c9fde1d2e88f06d8c7c0bc98f7f8->enter($__internal_46ddc4ae56fb79ff2ece5d7d1da7938f2519c9fde1d2e88f06d8c7c0bc98f7f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d05bbdb841778f37d8e18e782e871b92940dfcb3f52425f5f0dc58468e2e8133->leave($__internal_d05bbdb841778f37d8e18e782e871b92940dfcb3f52425f5f0dc58468e2e8133_prof);

        
        $__internal_46ddc4ae56fb79ff2ece5d7d1da7938f2519c9fde1d2e88f06d8c7c0bc98f7f8->leave($__internal_46ddc4ae56fb79ff2ece5d7d1da7938f2519c9fde1d2e88f06d8c7c0bc98f7f8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fff067efabe5619189810b29eddaf754affc33b6fab01d4f0a0b3f98671c74ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fff067efabe5619189810b29eddaf754affc33b6fab01d4f0a0b3f98671c74ba->enter($__internal_fff067efabe5619189810b29eddaf754affc33b6fab01d4f0a0b3f98671c74ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3f8505098154cb78d1aee1e5966634cd36b6559c39172056aec2c15299c7b823 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f8505098154cb78d1aee1e5966634cd36b6559c39172056aec2c15299c7b823->enter($__internal_3f8505098154cb78d1aee1e5966634cd36b6559c39172056aec2c15299c7b823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_3f8505098154cb78d1aee1e5966634cd36b6559c39172056aec2c15299c7b823->leave($__internal_3f8505098154cb78d1aee1e5966634cd36b6559c39172056aec2c15299c7b823_prof);

        
        $__internal_fff067efabe5619189810b29eddaf754affc33b6fab01d4f0a0b3f98671c74ba->leave($__internal_fff067efabe5619189810b29eddaf754affc33b6fab01d4f0a0b3f98671c74ba_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/Applications/MAMP/htdocs/emotion-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
