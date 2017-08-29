<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_f6531d2dff64266a12d627c7be99e50a0325a9145ef217bf934c05342ae34817 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_cf95f80e6e6835b012e7db766224841f2ac380580363f7a9e40646d6294fcb05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf95f80e6e6835b012e7db766224841f2ac380580363f7a9e40646d6294fcb05->enter($__internal_cf95f80e6e6835b012e7db766224841f2ac380580363f7a9e40646d6294fcb05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_767a0e4408131b2d95a66c724c2521bbb3d4a7eff7e33dfb318667bad5c23e18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_767a0e4408131b2d95a66c724c2521bbb3d4a7eff7e33dfb318667bad5c23e18->enter($__internal_767a0e4408131b2d95a66c724c2521bbb3d4a7eff7e33dfb318667bad5c23e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf95f80e6e6835b012e7db766224841f2ac380580363f7a9e40646d6294fcb05->leave($__internal_cf95f80e6e6835b012e7db766224841f2ac380580363f7a9e40646d6294fcb05_prof);

        
        $__internal_767a0e4408131b2d95a66c724c2521bbb3d4a7eff7e33dfb318667bad5c23e18->leave($__internal_767a0e4408131b2d95a66c724c2521bbb3d4a7eff7e33dfb318667bad5c23e18_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_09d573ba1b3d8f5fa12834145600bad827cbddbedb8c5b271fab99fd299eda52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09d573ba1b3d8f5fa12834145600bad827cbddbedb8c5b271fab99fd299eda52->enter($__internal_09d573ba1b3d8f5fa12834145600bad827cbddbedb8c5b271fab99fd299eda52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b83cb90d9b28c7c8e74d0ec5e0d7c624e857afa22b1e0ea66076ee7f5f8abf77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b83cb90d9b28c7c8e74d0ec5e0d7c624e857afa22b1e0ea66076ee7f5f8abf77->enter($__internal_b83cb90d9b28c7c8e74d0ec5e0d7c624e857afa22b1e0ea66076ee7f5f8abf77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_b83cb90d9b28c7c8e74d0ec5e0d7c624e857afa22b1e0ea66076ee7f5f8abf77->leave($__internal_b83cb90d9b28c7c8e74d0ec5e0d7c624e857afa22b1e0ea66076ee7f5f8abf77_prof);

        
        $__internal_09d573ba1b3d8f5fa12834145600bad827cbddbedb8c5b271fab99fd299eda52->leave($__internal_09d573ba1b3d8f5fa12834145600bad827cbddbedb8c5b271fab99fd299eda52_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/Applications/MAMP/htdocs/emotion-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
