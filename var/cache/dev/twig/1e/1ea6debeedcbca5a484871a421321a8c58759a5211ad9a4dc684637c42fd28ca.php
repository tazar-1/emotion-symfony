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
        $__internal_0afb839fdaac4bc188f8a052c193dbdae3009fa944bfadf0819271c1ed443ea7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0afb839fdaac4bc188f8a052c193dbdae3009fa944bfadf0819271c1ed443ea7->enter($__internal_0afb839fdaac4bc188f8a052c193dbdae3009fa944bfadf0819271c1ed443ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_16f967d34476e4f1d933cd0ab70acee92befbec6b5ec383c72b444ac5746cb9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16f967d34476e4f1d933cd0ab70acee92befbec6b5ec383c72b444ac5746cb9a->enter($__internal_16f967d34476e4f1d933cd0ab70acee92befbec6b5ec383c72b444ac5746cb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0afb839fdaac4bc188f8a052c193dbdae3009fa944bfadf0819271c1ed443ea7->leave($__internal_0afb839fdaac4bc188f8a052c193dbdae3009fa944bfadf0819271c1ed443ea7_prof);

        
        $__internal_16f967d34476e4f1d933cd0ab70acee92befbec6b5ec383c72b444ac5746cb9a->leave($__internal_16f967d34476e4f1d933cd0ab70acee92befbec6b5ec383c72b444ac5746cb9a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6d88287c86a656713a773b225859cdd626e2838f83f2b7a2f59c8a3df2554d60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d88287c86a656713a773b225859cdd626e2838f83f2b7a2f59c8a3df2554d60->enter($__internal_6d88287c86a656713a773b225859cdd626e2838f83f2b7a2f59c8a3df2554d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a0be9826aaddfb5b57982f92b3028476f4d482538b8364a12b11bef8625fc4fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0be9826aaddfb5b57982f92b3028476f4d482538b8364a12b11bef8625fc4fa->enter($__internal_a0be9826aaddfb5b57982f92b3028476f4d482538b8364a12b11bef8625fc4fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_a0be9826aaddfb5b57982f92b3028476f4d482538b8364a12b11bef8625fc4fa->leave($__internal_a0be9826aaddfb5b57982f92b3028476f4d482538b8364a12b11bef8625fc4fa_prof);

        
        $__internal_6d88287c86a656713a773b225859cdd626e2838f83f2b7a2f59c8a3df2554d60->leave($__internal_6d88287c86a656713a773b225859cdd626e2838f83f2b7a2f59c8a3df2554d60_prof);

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
