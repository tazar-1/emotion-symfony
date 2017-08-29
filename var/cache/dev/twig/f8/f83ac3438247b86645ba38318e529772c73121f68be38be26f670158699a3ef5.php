<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_672ce66ce36bb0fec0d531aa70f4e572e23ff97d3b5706b3f5721e1fe4edaafb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_eb53900e0e7d9e4515ba403aa1ef964aae03898910a55772836f77c0218ee705 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb53900e0e7d9e4515ba403aa1ef964aae03898910a55772836f77c0218ee705->enter($__internal_eb53900e0e7d9e4515ba403aa1ef964aae03898910a55772836f77c0218ee705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_5d4128260d3a026abd8cd45a3b1a68351898390bd87e1896ae7b65bdcf170b44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d4128260d3a026abd8cd45a3b1a68351898390bd87e1896ae7b65bdcf170b44->enter($__internal_5d4128260d3a026abd8cd45a3b1a68351898390bd87e1896ae7b65bdcf170b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb53900e0e7d9e4515ba403aa1ef964aae03898910a55772836f77c0218ee705->leave($__internal_eb53900e0e7d9e4515ba403aa1ef964aae03898910a55772836f77c0218ee705_prof);

        
        $__internal_5d4128260d3a026abd8cd45a3b1a68351898390bd87e1896ae7b65bdcf170b44->leave($__internal_5d4128260d3a026abd8cd45a3b1a68351898390bd87e1896ae7b65bdcf170b44_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fa43ae62a2a41eac33c595eabbffc813b4b5938bf03fdda1a8f297c28beb61bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa43ae62a2a41eac33c595eabbffc813b4b5938bf03fdda1a8f297c28beb61bc->enter($__internal_fa43ae62a2a41eac33c595eabbffc813b4b5938bf03fdda1a8f297c28beb61bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f3b23c356c7360f466cb1ec1215d64161d4646577173583b51bbfcdb5b453322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3b23c356c7360f466cb1ec1215d64161d4646577173583b51bbfcdb5b453322->enter($__internal_f3b23c356c7360f466cb1ec1215d64161d4646577173583b51bbfcdb5b453322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_f3b23c356c7360f466cb1ec1215d64161d4646577173583b51bbfcdb5b453322->leave($__internal_f3b23c356c7360f466cb1ec1215d64161d4646577173583b51bbfcdb5b453322_prof);

        
        $__internal_fa43ae62a2a41eac33c595eabbffc813b4b5938bf03fdda1a8f297c28beb61bc->leave($__internal_fa43ae62a2a41eac33c595eabbffc813b4b5938bf03fdda1a8f297c28beb61bc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/Applications/MAMP/htdocs/emotion-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
