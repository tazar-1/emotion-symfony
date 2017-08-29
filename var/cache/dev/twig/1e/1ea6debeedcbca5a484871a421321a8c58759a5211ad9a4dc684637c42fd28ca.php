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
        $__internal_24e295b3a80109671b1b8bc41e54675c25651d5ee7d198fe2fa22ab5960ade0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24e295b3a80109671b1b8bc41e54675c25651d5ee7d198fe2fa22ab5960ade0d->enter($__internal_24e295b3a80109671b1b8bc41e54675c25651d5ee7d198fe2fa22ab5960ade0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_ff93141ebc7adb1040ba588dac9dbbbed7651bd9a8d2c10dfb51aa09c9a16dbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff93141ebc7adb1040ba588dac9dbbbed7651bd9a8d2c10dfb51aa09c9a16dbc->enter($__internal_ff93141ebc7adb1040ba588dac9dbbbed7651bd9a8d2c10dfb51aa09c9a16dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24e295b3a80109671b1b8bc41e54675c25651d5ee7d198fe2fa22ab5960ade0d->leave($__internal_24e295b3a80109671b1b8bc41e54675c25651d5ee7d198fe2fa22ab5960ade0d_prof);

        
        $__internal_ff93141ebc7adb1040ba588dac9dbbbed7651bd9a8d2c10dfb51aa09c9a16dbc->leave($__internal_ff93141ebc7adb1040ba588dac9dbbbed7651bd9a8d2c10dfb51aa09c9a16dbc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_061ce2a6edb064f6b8a7bbdd15cbbfc77400263e35d05f9f0ff58dbc7e871726 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_061ce2a6edb064f6b8a7bbdd15cbbfc77400263e35d05f9f0ff58dbc7e871726->enter($__internal_061ce2a6edb064f6b8a7bbdd15cbbfc77400263e35d05f9f0ff58dbc7e871726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_987144101c56513cd68320a14c8083c45a8720918e6795717e81ad7a63d049fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_987144101c56513cd68320a14c8083c45a8720918e6795717e81ad7a63d049fd->enter($__internal_987144101c56513cd68320a14c8083c45a8720918e6795717e81ad7a63d049fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_987144101c56513cd68320a14c8083c45a8720918e6795717e81ad7a63d049fd->leave($__internal_987144101c56513cd68320a14c8083c45a8720918e6795717e81ad7a63d049fd_prof);

        
        $__internal_061ce2a6edb064f6b8a7bbdd15cbbfc77400263e35d05f9f0ff58dbc7e871726->leave($__internal_061ce2a6edb064f6b8a7bbdd15cbbfc77400263e35d05f9f0ff58dbc7e871726_prof);

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
