<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_7db6f492e97e61dbf64944fbcecd37bdda859fc6789e5bb4c8a68e9edb70f1d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f7bbfb70287df3ef7dd5cc7e68c0157481ffca34803a8d53f634772b018e86b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f7bbfb70287df3ef7dd5cc7e68c0157481ffca34803a8d53f634772b018e86b->enter($__internal_9f7bbfb70287df3ef7dd5cc7e68c0157481ffca34803a8d53f634772b018e86b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_d87e8ec9fcdb659d6543d472895696d95147143074e70968d65a3e09a6fae60f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d87e8ec9fcdb659d6543d472895696d95147143074e70968d65a3e09a6fae60f->enter($__internal_d87e8ec9fcdb659d6543d472895696d95147143074e70968d65a3e09a6fae60f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f7bbfb70287df3ef7dd5cc7e68c0157481ffca34803a8d53f634772b018e86b->leave($__internal_9f7bbfb70287df3ef7dd5cc7e68c0157481ffca34803a8d53f634772b018e86b_prof);

        
        $__internal_d87e8ec9fcdb659d6543d472895696d95147143074e70968d65a3e09a6fae60f->leave($__internal_d87e8ec9fcdb659d6543d472895696d95147143074e70968d65a3e09a6fae60f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d42692e7a214033517009574b0908007eec980ad62cccf5dad79c0dcaccc481f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d42692e7a214033517009574b0908007eec980ad62cccf5dad79c0dcaccc481f->enter($__internal_d42692e7a214033517009574b0908007eec980ad62cccf5dad79c0dcaccc481f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7cd0d0f371fe9c4656015ba5fa0d711f9575a151b3a4506c7424d92f26001b58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cd0d0f371fe9c4656015ba5fa0d711f9575a151b3a4506c7424d92f26001b58->enter($__internal_7cd0d0f371fe9c4656015ba5fa0d711f9575a151b3a4506c7424d92f26001b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7cd0d0f371fe9c4656015ba5fa0d711f9575a151b3a4506c7424d92f26001b58->leave($__internal_7cd0d0f371fe9c4656015ba5fa0d711f9575a151b3a4506c7424d92f26001b58_prof);

        
        $__internal_d42692e7a214033517009574b0908007eec980ad62cccf5dad79c0dcaccc481f->leave($__internal_d42692e7a214033517009574b0908007eec980ad62cccf5dad79c0dcaccc481f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3877bcf26e85212f7f9bd336d13d57cd9630aae4a6d4df2f8ad9c3b493f5fa1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3877bcf26e85212f7f9bd336d13d57cd9630aae4a6d4df2f8ad9c3b493f5fa1b->enter($__internal_3877bcf26e85212f7f9bd336d13d57cd9630aae4a6d4df2f8ad9c3b493f5fa1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_daee4737996f10616f09c365e436560734b5cc0dc6de6d335eefa74ea28f3909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daee4737996f10616f09c365e436560734b5cc0dc6de6d335eefa74ea28f3909->enter($__internal_daee4737996f10616f09c365e436560734b5cc0dc6de6d335eefa74ea28f3909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_daee4737996f10616f09c365e436560734b5cc0dc6de6d335eefa74ea28f3909->leave($__internal_daee4737996f10616f09c365e436560734b5cc0dc6de6d335eefa74ea28f3909_prof);

        
        $__internal_3877bcf26e85212f7f9bd336d13d57cd9630aae4a6d4df2f8ad9c3b493f5fa1b->leave($__internal_3877bcf26e85212f7f9bd336d13d57cd9630aae4a6d4df2f8ad9c3b493f5fa1b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
