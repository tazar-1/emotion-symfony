<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_bb4249dc71239c0410b8b8cee29b4ca713f1cd099a70b93709c74f909653baf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8405977675e1683a1b57e1e6cc0cf078535dc12cf0a244edbaac83dea414a967 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8405977675e1683a1b57e1e6cc0cf078535dc12cf0a244edbaac83dea414a967->enter($__internal_8405977675e1683a1b57e1e6cc0cf078535dc12cf0a244edbaac83dea414a967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_05f24e236c3064ff55ed342593b54c6ad74bf0693143791abf63bdc89378968a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05f24e236c3064ff55ed342593b54c6ad74bf0693143791abf63bdc89378968a->enter($__internal_05f24e236c3064ff55ed342593b54c6ad74bf0693143791abf63bdc89378968a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8405977675e1683a1b57e1e6cc0cf078535dc12cf0a244edbaac83dea414a967->leave($__internal_8405977675e1683a1b57e1e6cc0cf078535dc12cf0a244edbaac83dea414a967_prof);

        
        $__internal_05f24e236c3064ff55ed342593b54c6ad74bf0693143791abf63bdc89378968a->leave($__internal_05f24e236c3064ff55ed342593b54c6ad74bf0693143791abf63bdc89378968a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_faef1b91ae5b5d2c873ab8f0a0793c8b3eb850f6711339321884d36ba40f0ff8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faef1b91ae5b5d2c873ab8f0a0793c8b3eb850f6711339321884d36ba40f0ff8->enter($__internal_faef1b91ae5b5d2c873ab8f0a0793c8b3eb850f6711339321884d36ba40f0ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_20cbf1875359bc3535b65a9603da8d4921a0255fb0e6209f99f254ec39363dbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20cbf1875359bc3535b65a9603da8d4921a0255fb0e6209f99f254ec39363dbf->enter($__internal_20cbf1875359bc3535b65a9603da8d4921a0255fb0e6209f99f254ec39363dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_20cbf1875359bc3535b65a9603da8d4921a0255fb0e6209f99f254ec39363dbf->leave($__internal_20cbf1875359bc3535b65a9603da8d4921a0255fb0e6209f99f254ec39363dbf_prof);

        
        $__internal_faef1b91ae5b5d2c873ab8f0a0793c8b3eb850f6711339321884d36ba40f0ff8->leave($__internal_faef1b91ae5b5d2c873ab8f0a0793c8b3eb850f6711339321884d36ba40f0ff8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
