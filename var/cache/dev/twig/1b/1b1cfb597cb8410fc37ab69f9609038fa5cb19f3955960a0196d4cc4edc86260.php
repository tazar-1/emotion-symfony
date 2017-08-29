<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_dc857ce0eb360e6badbc1c69e03716cfbc58bdbd2bd38a4e3a2f0541a83e84f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_645c6cfa12b50e904c56f4f26b7142836bc103c68d8c16974f5117cd5cdae043 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_645c6cfa12b50e904c56f4f26b7142836bc103c68d8c16974f5117cd5cdae043->enter($__internal_645c6cfa12b50e904c56f4f26b7142836bc103c68d8c16974f5117cd5cdae043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_ccf97b26352771b9bc397a7915782dea81e4074d6eeabd29ca747e88129d17f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccf97b26352771b9bc397a7915782dea81e4074d6eeabd29ca747e88129d17f5->enter($__internal_ccf97b26352771b9bc397a7915782dea81e4074d6eeabd29ca747e88129d17f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_645c6cfa12b50e904c56f4f26b7142836bc103c68d8c16974f5117cd5cdae043->leave($__internal_645c6cfa12b50e904c56f4f26b7142836bc103c68d8c16974f5117cd5cdae043_prof);

        
        $__internal_ccf97b26352771b9bc397a7915782dea81e4074d6eeabd29ca747e88129d17f5->leave($__internal_ccf97b26352771b9bc397a7915782dea81e4074d6eeabd29ca747e88129d17f5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4e0fb73c7e1377038166b603d229d76b000f4e0b6952aa9611219217d3b72b99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e0fb73c7e1377038166b603d229d76b000f4e0b6952aa9611219217d3b72b99->enter($__internal_4e0fb73c7e1377038166b603d229d76b000f4e0b6952aa9611219217d3b72b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_13fe445934e21d7821b134f2a50530e5ca21416e1923106570157147a9b54463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13fe445934e21d7821b134f2a50530e5ca21416e1923106570157147a9b54463->enter($__internal_13fe445934e21d7821b134f2a50530e5ca21416e1923106570157147a9b54463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_13fe445934e21d7821b134f2a50530e5ca21416e1923106570157147a9b54463->leave($__internal_13fe445934e21d7821b134f2a50530e5ca21416e1923106570157147a9b54463_prof);

        
        $__internal_4e0fb73c7e1377038166b603d229d76b000f4e0b6952aa9611219217d3b72b99->leave($__internal_4e0fb73c7e1377038166b603d229d76b000f4e0b6952aa9611219217d3b72b99_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/Applications/MAMP/htdocs/emotion-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
