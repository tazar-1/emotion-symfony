<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_0367cebd603c65cd73f9f896be675902d7d1032538db024b3abd4088e1ea7a9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_11c548666e9ae4c0f5fc6496153d71b0429b5e68d4b4bc89b37517b26539c0dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11c548666e9ae4c0f5fc6496153d71b0429b5e68d4b4bc89b37517b26539c0dc->enter($__internal_11c548666e9ae4c0f5fc6496153d71b0429b5e68d4b4bc89b37517b26539c0dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_e0af727ece92cf1190f68dd7bf7d23faa7735c1e15824986b7a281d4a45089a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0af727ece92cf1190f68dd7bf7d23faa7735c1e15824986b7a281d4a45089a5->enter($__internal_e0af727ece92cf1190f68dd7bf7d23faa7735c1e15824986b7a281d4a45089a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11c548666e9ae4c0f5fc6496153d71b0429b5e68d4b4bc89b37517b26539c0dc->leave($__internal_11c548666e9ae4c0f5fc6496153d71b0429b5e68d4b4bc89b37517b26539c0dc_prof);

        
        $__internal_e0af727ece92cf1190f68dd7bf7d23faa7735c1e15824986b7a281d4a45089a5->leave($__internal_e0af727ece92cf1190f68dd7bf7d23faa7735c1e15824986b7a281d4a45089a5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f4a4416e203955e22a1659ccf3b7c621993917d6644dad1b7d585b97900af8fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4a4416e203955e22a1659ccf3b7c621993917d6644dad1b7d585b97900af8fa->enter($__internal_f4a4416e203955e22a1659ccf3b7c621993917d6644dad1b7d585b97900af8fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_59b1159d7d3fbeeda65ded77dfe942f122dd1e67b3448f3f1a2607b9bdc4f3ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59b1159d7d3fbeeda65ded77dfe942f122dd1e67b3448f3f1a2607b9bdc4f3ad->enter($__internal_59b1159d7d3fbeeda65ded77dfe942f122dd1e67b3448f3f1a2607b9bdc4f3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_59b1159d7d3fbeeda65ded77dfe942f122dd1e67b3448f3f1a2607b9bdc4f3ad->leave($__internal_59b1159d7d3fbeeda65ded77dfe942f122dd1e67b3448f3f1a2607b9bdc4f3ad_prof);

        
        $__internal_f4a4416e203955e22a1659ccf3b7c621993917d6644dad1b7d585b97900af8fa->leave($__internal_f4a4416e203955e22a1659ccf3b7c621993917d6644dad1b7d585b97900af8fa_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "/Applications/MAMP/htdocs/emotion-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
