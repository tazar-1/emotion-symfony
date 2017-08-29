<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_e2cd2f8c969170ff794fabc772ebd8cd04c7c597f2ead3ea5eb17fb1d700a66c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_0e4adc1634aa992d4617f6a620becfa1491b4a0716e84bef26e2a52b0a8695f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e4adc1634aa992d4617f6a620becfa1491b4a0716e84bef26e2a52b0a8695f1->enter($__internal_0e4adc1634aa992d4617f6a620becfa1491b4a0716e84bef26e2a52b0a8695f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_9d533b07abb3bb8ece02fd979dd7dd837c1f32e17e291bdbb80399897d3176cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d533b07abb3bb8ece02fd979dd7dd837c1f32e17e291bdbb80399897d3176cd->enter($__internal_9d533b07abb3bb8ece02fd979dd7dd837c1f32e17e291bdbb80399897d3176cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e4adc1634aa992d4617f6a620becfa1491b4a0716e84bef26e2a52b0a8695f1->leave($__internal_0e4adc1634aa992d4617f6a620becfa1491b4a0716e84bef26e2a52b0a8695f1_prof);

        
        $__internal_9d533b07abb3bb8ece02fd979dd7dd837c1f32e17e291bdbb80399897d3176cd->leave($__internal_9d533b07abb3bb8ece02fd979dd7dd837c1f32e17e291bdbb80399897d3176cd_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9a39e8e7da13bc2865d6e016ecc4ba25ef02210ee3f0cac734448139cde89df4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a39e8e7da13bc2865d6e016ecc4ba25ef02210ee3f0cac734448139cde89df4->enter($__internal_9a39e8e7da13bc2865d6e016ecc4ba25ef02210ee3f0cac734448139cde89df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c893eeb1ff28b95ced00664227fd202d5133d957df9c03e739e8e7550e934939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c893eeb1ff28b95ced00664227fd202d5133d957df9c03e739e8e7550e934939->enter($__internal_c893eeb1ff28b95ced00664227fd202d5133d957df9c03e739e8e7550e934939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_c893eeb1ff28b95ced00664227fd202d5133d957df9c03e739e8e7550e934939->leave($__internal_c893eeb1ff28b95ced00664227fd202d5133d957df9c03e739e8e7550e934939_prof);

        
        $__internal_9a39e8e7da13bc2865d6e016ecc4ba25ef02210ee3f0cac734448139cde89df4->leave($__internal_9a39e8e7da13bc2865d6e016ecc4ba25ef02210ee3f0cac734448139cde89df4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/Applications/MAMP/htdocs/emotion-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
