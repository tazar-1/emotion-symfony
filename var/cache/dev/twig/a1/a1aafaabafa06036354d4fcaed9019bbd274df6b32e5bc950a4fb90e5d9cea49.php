<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_f0d4b89f2b2a6a3e4ae13e51b38fb6bafa54d0b64da4acb72b89c1cc0dffe80f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_04624dba9fcc2072fe498fbcecb62a105dde4e6a6d1f3b26be545ecb4e3580d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04624dba9fcc2072fe498fbcecb62a105dde4e6a6d1f3b26be545ecb4e3580d1->enter($__internal_04624dba9fcc2072fe498fbcecb62a105dde4e6a6d1f3b26be545ecb4e3580d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_9dec238a793ad977e744d5b10613ed7bcc81f87758ce927a09ecc00ff3214c3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dec238a793ad977e744d5b10613ed7bcc81f87758ce927a09ecc00ff3214c3a->enter($__internal_9dec238a793ad977e744d5b10613ed7bcc81f87758ce927a09ecc00ff3214c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04624dba9fcc2072fe498fbcecb62a105dde4e6a6d1f3b26be545ecb4e3580d1->leave($__internal_04624dba9fcc2072fe498fbcecb62a105dde4e6a6d1f3b26be545ecb4e3580d1_prof);

        
        $__internal_9dec238a793ad977e744d5b10613ed7bcc81f87758ce927a09ecc00ff3214c3a->leave($__internal_9dec238a793ad977e744d5b10613ed7bcc81f87758ce927a09ecc00ff3214c3a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5bbb3df98fa0d1297d1b7d67da6f4775d3eb0a9c2ca5e27feea7daed41c6f932 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bbb3df98fa0d1297d1b7d67da6f4775d3eb0a9c2ca5e27feea7daed41c6f932->enter($__internal_5bbb3df98fa0d1297d1b7d67da6f4775d3eb0a9c2ca5e27feea7daed41c6f932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5ccc6893db2e89ccd0f715497525e69d707e8a690784996a4f4ebb581a7b9115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ccc6893db2e89ccd0f715497525e69d707e8a690784996a4f4ebb581a7b9115->enter($__internal_5ccc6893db2e89ccd0f715497525e69d707e8a690784996a4f4ebb581a7b9115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_5ccc6893db2e89ccd0f715497525e69d707e8a690784996a4f4ebb581a7b9115->leave($__internal_5ccc6893db2e89ccd0f715497525e69d707e8a690784996a4f4ebb581a7b9115_prof);

        
        $__internal_5bbb3df98fa0d1297d1b7d67da6f4775d3eb0a9c2ca5e27feea7daed41c6f932->leave($__internal_5bbb3df98fa0d1297d1b7d67da6f4775d3eb0a9c2ca5e27feea7daed41c6f932_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/Applications/MAMP/htdocs/emotion-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
