<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_7394a095354d7a0af196a51e46d88f8211521825c44ed7f5719f9adda08824a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_552c22ae5f414acc5fe5e3ecbe7fd67ff162f61bbac6156c961fc39feaa26c1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_552c22ae5f414acc5fe5e3ecbe7fd67ff162f61bbac6156c961fc39feaa26c1b->enter($__internal_552c22ae5f414acc5fe5e3ecbe7fd67ff162f61bbac6156c961fc39feaa26c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_5d4dbd9dde852dfe29ce9934188e374815c3e47d69cbce76cadf14aaceb45317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d4dbd9dde852dfe29ce9934188e374815c3e47d69cbce76cadf14aaceb45317->enter($__internal_5d4dbd9dde852dfe29ce9934188e374815c3e47d69cbce76cadf14aaceb45317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_552c22ae5f414acc5fe5e3ecbe7fd67ff162f61bbac6156c961fc39feaa26c1b->leave($__internal_552c22ae5f414acc5fe5e3ecbe7fd67ff162f61bbac6156c961fc39feaa26c1b_prof);

        
        $__internal_5d4dbd9dde852dfe29ce9934188e374815c3e47d69cbce76cadf14aaceb45317->leave($__internal_5d4dbd9dde852dfe29ce9934188e374815c3e47d69cbce76cadf14aaceb45317_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_88f9b8f860818f32dad81fa2d6561f5056e8f0b3503d1e9abc2e7595bd9267b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88f9b8f860818f32dad81fa2d6561f5056e8f0b3503d1e9abc2e7595bd9267b5->enter($__internal_88f9b8f860818f32dad81fa2d6561f5056e8f0b3503d1e9abc2e7595bd9267b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c0973b1a2f9c0a008894beefc826d74e51029feb1408cd61ff2fded9cf712e18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0973b1a2f9c0a008894beefc826d74e51029feb1408cd61ff2fded9cf712e18->enter($__internal_c0973b1a2f9c0a008894beefc826d74e51029feb1408cd61ff2fded9cf712e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_c0973b1a2f9c0a008894beefc826d74e51029feb1408cd61ff2fded9cf712e18->leave($__internal_c0973b1a2f9c0a008894beefc826d74e51029feb1408cd61ff2fded9cf712e18_prof);

        
        $__internal_88f9b8f860818f32dad81fa2d6561f5056e8f0b3503d1e9abc2e7595bd9267b5->leave($__internal_88f9b8f860818f32dad81fa2d6561f5056e8f0b3503d1e9abc2e7595bd9267b5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/Applications/MAMP/htdocs/emotion-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
