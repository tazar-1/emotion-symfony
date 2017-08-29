<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_339126da287ccec2e7e2691172203842a30b85eef50beda4de2d4fd63c1f1f6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_1d8e741d4a8cdcfac5be156d2ede6b38cd20d635115c0e4693a83bc9adad5820 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d8e741d4a8cdcfac5be156d2ede6b38cd20d635115c0e4693a83bc9adad5820->enter($__internal_1d8e741d4a8cdcfac5be156d2ede6b38cd20d635115c0e4693a83bc9adad5820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_d3287d1db7a1a0f49fb5daf84595b373ad9b2b4b8dff7ba817f79455a9c72645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3287d1db7a1a0f49fb5daf84595b373ad9b2b4b8dff7ba817f79455a9c72645->enter($__internal_d3287d1db7a1a0f49fb5daf84595b373ad9b2b4b8dff7ba817f79455a9c72645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d8e741d4a8cdcfac5be156d2ede6b38cd20d635115c0e4693a83bc9adad5820->leave($__internal_1d8e741d4a8cdcfac5be156d2ede6b38cd20d635115c0e4693a83bc9adad5820_prof);

        
        $__internal_d3287d1db7a1a0f49fb5daf84595b373ad9b2b4b8dff7ba817f79455a9c72645->leave($__internal_d3287d1db7a1a0f49fb5daf84595b373ad9b2b4b8dff7ba817f79455a9c72645_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bc81a273f9062dc99af0cfa46bc50d6a0932a8d3d055cf23b4fb5877eb3a3ac3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc81a273f9062dc99af0cfa46bc50d6a0932a8d3d055cf23b4fb5877eb3a3ac3->enter($__internal_bc81a273f9062dc99af0cfa46bc50d6a0932a8d3d055cf23b4fb5877eb3a3ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c74487c4cba24323fa4096f3c3c377bb4ee20ef6612288e6159c82f124d5b9a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c74487c4cba24323fa4096f3c3c377bb4ee20ef6612288e6159c82f124d5b9a5->enter($__internal_c74487c4cba24323fa4096f3c3c377bb4ee20ef6612288e6159c82f124d5b9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_c74487c4cba24323fa4096f3c3c377bb4ee20ef6612288e6159c82f124d5b9a5->leave($__internal_c74487c4cba24323fa4096f3c3c377bb4ee20ef6612288e6159c82f124d5b9a5_prof);

        
        $__internal_bc81a273f9062dc99af0cfa46bc50d6a0932a8d3d055cf23b4fb5877eb3a3ac3->leave($__internal_bc81a273f9062dc99af0cfa46bc50d6a0932a8d3d055cf23b4fb5877eb3a3ac3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/Applications/MAMP/htdocs/emotion-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
