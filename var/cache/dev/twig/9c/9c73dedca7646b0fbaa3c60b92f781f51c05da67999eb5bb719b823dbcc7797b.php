<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_0367cebd603c65cd73f9f896be675902d7d1032538db024b3abd4088e1ea7a9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_4e31b71ce4709b16ad8b1407d27a6b396fe3f125b523bb6a49e08c4525036cf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e31b71ce4709b16ad8b1407d27a6b396fe3f125b523bb6a49e08c4525036cf5->enter($__internal_4e31b71ce4709b16ad8b1407d27a6b396fe3f125b523bb6a49e08c4525036cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_57c728dfa3504956138fea02a78749ff4d2276871aaeeda9774abc39639ad020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57c728dfa3504956138fea02a78749ff4d2276871aaeeda9774abc39639ad020->enter($__internal_57c728dfa3504956138fea02a78749ff4d2276871aaeeda9774abc39639ad020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e31b71ce4709b16ad8b1407d27a6b396fe3f125b523bb6a49e08c4525036cf5->leave($__internal_4e31b71ce4709b16ad8b1407d27a6b396fe3f125b523bb6a49e08c4525036cf5_prof);

        
        $__internal_57c728dfa3504956138fea02a78749ff4d2276871aaeeda9774abc39639ad020->leave($__internal_57c728dfa3504956138fea02a78749ff4d2276871aaeeda9774abc39639ad020_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_43b637d24d6773f643ed97b667fcc0b52877a529c9c5a2520bcc73092d5e679b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43b637d24d6773f643ed97b667fcc0b52877a529c9c5a2520bcc73092d5e679b->enter($__internal_43b637d24d6773f643ed97b667fcc0b52877a529c9c5a2520bcc73092d5e679b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0ecc2c9d91d4b07e256740cc7d8bdc5a4beec06d55ab64c29f7c5f61b1b76be3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ecc2c9d91d4b07e256740cc7d8bdc5a4beec06d55ab64c29f7c5f61b1b76be3->enter($__internal_0ecc2c9d91d4b07e256740cc7d8bdc5a4beec06d55ab64c29f7c5f61b1b76be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_0ecc2c9d91d4b07e256740cc7d8bdc5a4beec06d55ab64c29f7c5f61b1b76be3->leave($__internal_0ecc2c9d91d4b07e256740cc7d8bdc5a4beec06d55ab64c29f7c5f61b1b76be3_prof);

        
        $__internal_43b637d24d6773f643ed97b667fcc0b52877a529c9c5a2520bcc73092d5e679b->leave($__internal_43b637d24d6773f643ed97b667fcc0b52877a529c9c5a2520bcc73092d5e679b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
", "FOSUserBundle:Profile:show.html.twig", "/Applications/MAMP/htdocs/emotion-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
