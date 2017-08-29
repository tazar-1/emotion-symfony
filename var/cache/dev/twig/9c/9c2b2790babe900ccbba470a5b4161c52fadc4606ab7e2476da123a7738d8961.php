<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_9c806dd7dfd15734508e5ecd857748ddff474cb3b519999cb3754602a4981050 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_3051c4bce95a67c3ddc205da94b21ff522e8acd5622bf5713e9c514e499b8378 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3051c4bce95a67c3ddc205da94b21ff522e8acd5622bf5713e9c514e499b8378->enter($__internal_3051c4bce95a67c3ddc205da94b21ff522e8acd5622bf5713e9c514e499b8378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_3414753371dfc3a407c516ba67ab4e4c5b158847adeb2891c59dc6a18dada2d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3414753371dfc3a407c516ba67ab4e4c5b158847adeb2891c59dc6a18dada2d0->enter($__internal_3414753371dfc3a407c516ba67ab4e4c5b158847adeb2891c59dc6a18dada2d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3051c4bce95a67c3ddc205da94b21ff522e8acd5622bf5713e9c514e499b8378->leave($__internal_3051c4bce95a67c3ddc205da94b21ff522e8acd5622bf5713e9c514e499b8378_prof);

        
        $__internal_3414753371dfc3a407c516ba67ab4e4c5b158847adeb2891c59dc6a18dada2d0->leave($__internal_3414753371dfc3a407c516ba67ab4e4c5b158847adeb2891c59dc6a18dada2d0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_74fd5db97a2d458d07882fa0d43ce55ac922475c0c29e9dc05ac0b34316437ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74fd5db97a2d458d07882fa0d43ce55ac922475c0c29e9dc05ac0b34316437ab->enter($__internal_74fd5db97a2d458d07882fa0d43ce55ac922475c0c29e9dc05ac0b34316437ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f1c5aefc7b9471d6cd22ee07fe4177940dca634f3ab5714344d98b7cf259912c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1c5aefc7b9471d6cd22ee07fe4177940dca634f3ab5714344d98b7cf259912c->enter($__internal_f1c5aefc7b9471d6cd22ee07fe4177940dca634f3ab5714344d98b7cf259912c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_f1c5aefc7b9471d6cd22ee07fe4177940dca634f3ab5714344d98b7cf259912c->leave($__internal_f1c5aefc7b9471d6cd22ee07fe4177940dca634f3ab5714344d98b7cf259912c_prof);

        
        $__internal_74fd5db97a2d458d07882fa0d43ce55ac922475c0c29e9dc05ac0b34316437ab->leave($__internal_74fd5db97a2d458d07882fa0d43ce55ac922475c0c29e9dc05ac0b34316437ab_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/Applications/MAMP/htdocs/emotion-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
