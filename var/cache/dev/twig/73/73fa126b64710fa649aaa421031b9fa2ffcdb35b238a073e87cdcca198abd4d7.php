<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_4b3f262fc8be21973574807af7e2ba9163adf67298e2e824ad9d8ff162433505 extends Twig_Template
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
        $__internal_5338124a5eaac0ac5d4016c26102fbcaf563c3b65f096d56e05b036ec8f85b70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5338124a5eaac0ac5d4016c26102fbcaf563c3b65f096d56e05b036ec8f85b70->enter($__internal_5338124a5eaac0ac5d4016c26102fbcaf563c3b65f096d56e05b036ec8f85b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_7109cf72d752a91f7345cfdcae316172e57d403fb3048122434513978322135a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7109cf72d752a91f7345cfdcae316172e57d403fb3048122434513978322135a->enter($__internal_7109cf72d752a91f7345cfdcae316172e57d403fb3048122434513978322135a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5338124a5eaac0ac5d4016c26102fbcaf563c3b65f096d56e05b036ec8f85b70->leave($__internal_5338124a5eaac0ac5d4016c26102fbcaf563c3b65f096d56e05b036ec8f85b70_prof);

        
        $__internal_7109cf72d752a91f7345cfdcae316172e57d403fb3048122434513978322135a->leave($__internal_7109cf72d752a91f7345cfdcae316172e57d403fb3048122434513978322135a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6f039bc86828c7ef120ebca3c4910ddf8fb0b46cca36d3fd1fd1a52fc13d123b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f039bc86828c7ef120ebca3c4910ddf8fb0b46cca36d3fd1fd1a52fc13d123b->enter($__internal_6f039bc86828c7ef120ebca3c4910ddf8fb0b46cca36d3fd1fd1a52fc13d123b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_9ed77d2f73c3f3ecb4a88e3f1ce76e6ab97e5deebe3de04a84ba6582c9efaaf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ed77d2f73c3f3ecb4a88e3f1ce76e6ab97e5deebe3de04a84ba6582c9efaaf4->enter($__internal_9ed77d2f73c3f3ecb4a88e3f1ce76e6ab97e5deebe3de04a84ba6582c9efaaf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_9ed77d2f73c3f3ecb4a88e3f1ce76e6ab97e5deebe3de04a84ba6582c9efaaf4->leave($__internal_9ed77d2f73c3f3ecb4a88e3f1ce76e6ab97e5deebe3de04a84ba6582c9efaaf4_prof);

        
        $__internal_6f039bc86828c7ef120ebca3c4910ddf8fb0b46cca36d3fd1fd1a52fc13d123b->leave($__internal_6f039bc86828c7ef120ebca3c4910ddf8fb0b46cca36d3fd1fd1a52fc13d123b_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_cc35cccc21b35a25cb39949e34ae7f62a1c19b43aa7beda4809032d2f78f8fb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc35cccc21b35a25cb39949e34ae7f62a1c19b43aa7beda4809032d2f78f8fb4->enter($__internal_cc35cccc21b35a25cb39949e34ae7f62a1c19b43aa7beda4809032d2f78f8fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_20b19a30e2f52a8b81af0ebafeb85f8e867d987684709fbd6ea2121f29b5b422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20b19a30e2f52a8b81af0ebafeb85f8e867d987684709fbd6ea2121f29b5b422->enter($__internal_20b19a30e2f52a8b81af0ebafeb85f8e867d987684709fbd6ea2121f29b5b422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_20b19a30e2f52a8b81af0ebafeb85f8e867d987684709fbd6ea2121f29b5b422->leave($__internal_20b19a30e2f52a8b81af0ebafeb85f8e867d987684709fbd6ea2121f29b5b422_prof);

        
        $__internal_cc35cccc21b35a25cb39949e34ae7f62a1c19b43aa7beda4809032d2f78f8fb4->leave($__internal_cc35cccc21b35a25cb39949e34ae7f62a1c19b43aa7beda4809032d2f78f8fb4_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e933a4ffd19cb6e0a0c8bc2e51f466fe33469c6fb432df15f1ff82e5f3b31087 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e933a4ffd19cb6e0a0c8bc2e51f466fe33469c6fb432df15f1ff82e5f3b31087->enter($__internal_e933a4ffd19cb6e0a0c8bc2e51f466fe33469c6fb432df15f1ff82e5f3b31087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_216340af54c4b3f67e5642d73355c57b1a6e422ef14cb541363c7fb6a571b5b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_216340af54c4b3f67e5642d73355c57b1a6e422ef14cb541363c7fb6a571b5b3->enter($__internal_216340af54c4b3f67e5642d73355c57b1a6e422ef14cb541363c7fb6a571b5b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_216340af54c4b3f67e5642d73355c57b1a6e422ef14cb541363c7fb6a571b5b3->leave($__internal_216340af54c4b3f67e5642d73355c57b1a6e422ef14cb541363c7fb6a571b5b3_prof);

        
        $__internal_e933a4ffd19cb6e0a0c8bc2e51f466fe33469c6fb432df15f1ff82e5f3b31087->leave($__internal_e933a4ffd19cb6e0a0c8bc2e51f466fe33469c6fb432df15f1ff82e5f3b31087_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/Applications/MAMP/htdocs/emotion-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
