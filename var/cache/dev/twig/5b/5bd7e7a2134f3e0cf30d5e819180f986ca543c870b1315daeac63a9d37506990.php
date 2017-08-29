<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_bc578be23cd80f135dfd4cc54eed7c0f2dcd1a36c5f1af8d58e55c0d88bdef11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a32d011fc101ad546687cff6ff37655eab45081d58ae779ee67e40f351181fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a32d011fc101ad546687cff6ff37655eab45081d58ae779ee67e40f351181fd->enter($__internal_5a32d011fc101ad546687cff6ff37655eab45081d58ae779ee67e40f351181fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_e9477d1b4ccfc2b73adca71de07b86bd9f94549511f693f369303a58a0184bd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9477d1b4ccfc2b73adca71de07b86bd9f94549511f693f369303a58a0184bd2->enter($__internal_e9477d1b4ccfc2b73adca71de07b86bd9f94549511f693f369303a58a0184bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5a32d011fc101ad546687cff6ff37655eab45081d58ae779ee67e40f351181fd->leave($__internal_5a32d011fc101ad546687cff6ff37655eab45081d58ae779ee67e40f351181fd_prof);

        
        $__internal_e9477d1b4ccfc2b73adca71de07b86bd9f94549511f693f369303a58a0184bd2->leave($__internal_e9477d1b4ccfc2b73adca71de07b86bd9f94549511f693f369303a58a0184bd2_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c9cd83592ef6fefee5cd94dff7fa07e707a1242fcfb286ae79a3810012d2d7a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9cd83592ef6fefee5cd94dff7fa07e707a1242fcfb286ae79a3810012d2d7a8->enter($__internal_c9cd83592ef6fefee5cd94dff7fa07e707a1242fcfb286ae79a3810012d2d7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_0b038684eaa7a0af28914f30a953810028fe859cc5e3e375387c05cf31ae9cbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b038684eaa7a0af28914f30a953810028fe859cc5e3e375387c05cf31ae9cbd->enter($__internal_0b038684eaa7a0af28914f30a953810028fe859cc5e3e375387c05cf31ae9cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_0b038684eaa7a0af28914f30a953810028fe859cc5e3e375387c05cf31ae9cbd->leave($__internal_0b038684eaa7a0af28914f30a953810028fe859cc5e3e375387c05cf31ae9cbd_prof);

        
        $__internal_c9cd83592ef6fefee5cd94dff7fa07e707a1242fcfb286ae79a3810012d2d7a8->leave($__internal_c9cd83592ef6fefee5cd94dff7fa07e707a1242fcfb286ae79a3810012d2d7a8_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_15a795a5a635014f638064122bb8510419bea484dbf13c7fbb9e064b3fadd58a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15a795a5a635014f638064122bb8510419bea484dbf13c7fbb9e064b3fadd58a->enter($__internal_15a795a5a635014f638064122bb8510419bea484dbf13c7fbb9e064b3fadd58a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_7ae004f9559a73c7c50d75ba5e6c7e77c4377558741d95bbe09010efd447221d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ae004f9559a73c7c50d75ba5e6c7e77c4377558741d95bbe09010efd447221d->enter($__internal_7ae004f9559a73c7c50d75ba5e6c7e77c4377558741d95bbe09010efd447221d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7ae004f9559a73c7c50d75ba5e6c7e77c4377558741d95bbe09010efd447221d->leave($__internal_7ae004f9559a73c7c50d75ba5e6c7e77c4377558741d95bbe09010efd447221d_prof);

        
        $__internal_15a795a5a635014f638064122bb8510419bea484dbf13c7fbb9e064b3fadd58a->leave($__internal_15a795a5a635014f638064122bb8510419bea484dbf13c7fbb9e064b3fadd58a_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_cae815f389541d89b231775c5dfff99bf7ed6fbaa636b96146b33e9fa1d9fea2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cae815f389541d89b231775c5dfff99bf7ed6fbaa636b96146b33e9fa1d9fea2->enter($__internal_cae815f389541d89b231775c5dfff99bf7ed6fbaa636b96146b33e9fa1d9fea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_b9faa00a83aa976b6b9f38d4338bbf67808bf1351ab26c189b8bf9a4aeee5533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9faa00a83aa976b6b9f38d4338bbf67808bf1351ab26c189b8bf9a4aeee5533->enter($__internal_b9faa00a83aa976b6b9f38d4338bbf67808bf1351ab26c189b8bf9a4aeee5533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b9faa00a83aa976b6b9f38d4338bbf67808bf1351ab26c189b8bf9a4aeee5533->leave($__internal_b9faa00a83aa976b6b9f38d4338bbf67808bf1351ab26c189b8bf9a4aeee5533_prof);

        
        $__internal_cae815f389541d89b231775c5dfff99bf7ed6fbaa636b96146b33e9fa1d9fea2->leave($__internal_cae815f389541d89b231775c5dfff99bf7ed6fbaa636b96146b33e9fa1d9fea2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/Applications/MAMP/htdocs/emotion-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
