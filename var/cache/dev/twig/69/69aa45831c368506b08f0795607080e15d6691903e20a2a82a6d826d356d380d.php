<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_b1cee4bc8b5c0942487186f3c65ad3fe4ad7637b767389ac123d14af27d86e9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_07b4942ad27ec641e06b7bf4d2ebd1024dd3120dd88d6a9203978012495d07fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07b4942ad27ec641e06b7bf4d2ebd1024dd3120dd88d6a9203978012495d07fb->enter($__internal_07b4942ad27ec641e06b7bf4d2ebd1024dd3120dd88d6a9203978012495d07fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_2cfd6d19bf2e55c553ed19929e69a6d2e761dc4a5486d82635abebb2946929f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cfd6d19bf2e55c553ed19929e69a6d2e761dc4a5486d82635abebb2946929f8->enter($__internal_2cfd6d19bf2e55c553ed19929e69a6d2e761dc4a5486d82635abebb2946929f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07b4942ad27ec641e06b7bf4d2ebd1024dd3120dd88d6a9203978012495d07fb->leave($__internal_07b4942ad27ec641e06b7bf4d2ebd1024dd3120dd88d6a9203978012495d07fb_prof);

        
        $__internal_2cfd6d19bf2e55c553ed19929e69a6d2e761dc4a5486d82635abebb2946929f8->leave($__internal_2cfd6d19bf2e55c553ed19929e69a6d2e761dc4a5486d82635abebb2946929f8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8053266db817dc3584f1fcde4f0738e777956fe4a509602a08abf56129c1669a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8053266db817dc3584f1fcde4f0738e777956fe4a509602a08abf56129c1669a->enter($__internal_8053266db817dc3584f1fcde4f0738e777956fe4a509602a08abf56129c1669a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e384cf9f590e5a11d81d42d620c8f8c722c7896b2cf710d196b541d1ca21375b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e384cf9f590e5a11d81d42d620c8f8c722c7896b2cf710d196b541d1ca21375b->enter($__internal_e384cf9f590e5a11d81d42d620c8f8c722c7896b2cf710d196b541d1ca21375b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_e384cf9f590e5a11d81d42d620c8f8c722c7896b2cf710d196b541d1ca21375b->leave($__internal_e384cf9f590e5a11d81d42d620c8f8c722c7896b2cf710d196b541d1ca21375b_prof);

        
        $__internal_8053266db817dc3584f1fcde4f0738e777956fe4a509602a08abf56129c1669a->leave($__internal_8053266db817dc3584f1fcde4f0738e777956fe4a509602a08abf56129c1669a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/Applications/MAMP/htdocs/emotion-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
