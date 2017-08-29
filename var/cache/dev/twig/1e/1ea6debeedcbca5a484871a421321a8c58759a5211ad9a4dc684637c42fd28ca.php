<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_339126da287ccec2e7e2691172203842a30b85eef50beda4de2d4fd63c1f1f6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_32dea965e5d5af9f79ee1bf35c146b146b9e1dac8fa8ce63432bf70968a22cf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32dea965e5d5af9f79ee1bf35c146b146b9e1dac8fa8ce63432bf70968a22cf4->enter($__internal_32dea965e5d5af9f79ee1bf35c146b146b9e1dac8fa8ce63432bf70968a22cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_933522842024ae42c573a01a54e1fb749e0a4d6b3ba262f8bc357a58d61fc57b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_933522842024ae42c573a01a54e1fb749e0a4d6b3ba262f8bc357a58d61fc57b->enter($__internal_933522842024ae42c573a01a54e1fb749e0a4d6b3ba262f8bc357a58d61fc57b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32dea965e5d5af9f79ee1bf35c146b146b9e1dac8fa8ce63432bf70968a22cf4->leave($__internal_32dea965e5d5af9f79ee1bf35c146b146b9e1dac8fa8ce63432bf70968a22cf4_prof);

        
        $__internal_933522842024ae42c573a01a54e1fb749e0a4d6b3ba262f8bc357a58d61fc57b->leave($__internal_933522842024ae42c573a01a54e1fb749e0a4d6b3ba262f8bc357a58d61fc57b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4fdd38296c9869c37ae8ff3f3a4d1437616260461404105374a8cd2a61b0c988 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fdd38296c9869c37ae8ff3f3a4d1437616260461404105374a8cd2a61b0c988->enter($__internal_4fdd38296c9869c37ae8ff3f3a4d1437616260461404105374a8cd2a61b0c988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c59b2889fceefb5bfcf8803da834201291ec20a23c6551d5244928f2f8032d78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c59b2889fceefb5bfcf8803da834201291ec20a23c6551d5244928f2f8032d78->enter($__internal_c59b2889fceefb5bfcf8803da834201291ec20a23c6551d5244928f2f8032d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_c59b2889fceefb5bfcf8803da834201291ec20a23c6551d5244928f2f8032d78->leave($__internal_c59b2889fceefb5bfcf8803da834201291ec20a23c6551d5244928f2f8032d78_prof);

        
        $__internal_4fdd38296c9869c37ae8ff3f3a4d1437616260461404105374a8cd2a61b0c988->leave($__internal_4fdd38296c9869c37ae8ff3f3a4d1437616260461404105374a8cd2a61b0c988_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
", "@FOSUser/Security/login.html.twig", "/Applications/MAMP/htdocs/emotion-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
