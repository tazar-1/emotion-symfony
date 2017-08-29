<?php

/* UserBundle:Default:index.html.twig */
class __TwigTemplate_251b5e9f29cbf8faf1c68be5af579b9924f7327c29e50c9cc69d8020a9e402f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6114127f57078366f5e70f48197df70767ed0fbd5f8035f9439071f4bff65ce4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6114127f57078366f5e70f48197df70767ed0fbd5f8035f9439071f4bff65ce4->enter($__internal_6114127f57078366f5e70f48197df70767ed0fbd5f8035f9439071f4bff65ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:index.html.twig"));

        $__internal_71c32a00e8e73fff8dd8ffb2d6d5790ed0e02cb5f5c05e83adb458ccdf51a168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71c32a00e8e73fff8dd8ffb2d6d5790ed0e02cb5f5c05e83adb458ccdf51a168->enter($__internal_71c32a00e8e73fff8dd8ffb2d6d5790ed0e02cb5f5c05e83adb458ccdf51a168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_6114127f57078366f5e70f48197df70767ed0fbd5f8035f9439071f4bff65ce4->leave($__internal_6114127f57078366f5e70f48197df70767ed0fbd5f8035f9439071f4bff65ce4_prof);

        
        $__internal_71c32a00e8e73fff8dd8ffb2d6d5790ed0e02cb5f5c05e83adb458ccdf51a168->leave($__internal_71c32a00e8e73fff8dd8ffb2d6d5790ed0e02cb5f5c05e83adb458ccdf51a168_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "UserBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/emotion-symfony/src/UserBundle/Resources/views/Default/index.html.twig");
    }
}
