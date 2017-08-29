<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_8adbbb672375a5b9b13f4211de61ea5aba7a844d41552c826a190920e0966e56 extends Twig_Template
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
        $__internal_9a79fa0d9f7656117b18f63526c3e64d27cb80f96ee88d4c10ae421b3ed51902 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a79fa0d9f7656117b18f63526c3e64d27cb80f96ee88d4c10ae421b3ed51902->enter($__internal_9a79fa0d9f7656117b18f63526c3e64d27cb80f96ee88d4c10ae421b3ed51902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_95fd274ba92d8216a911c7dd06904df082ef99609b74bf32c7110dd48d4300cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95fd274ba92d8216a911c7dd06904df082ef99609b74bf32c7110dd48d4300cf->enter($__internal_95fd274ba92d8216a911c7dd06904df082ef99609b74bf32c7110dd48d4300cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_9a79fa0d9f7656117b18f63526c3e64d27cb80f96ee88d4c10ae421b3ed51902->leave($__internal_9a79fa0d9f7656117b18f63526c3e64d27cb80f96ee88d4c10ae421b3ed51902_prof);

        
        $__internal_95fd274ba92d8216a911c7dd06904df082ef99609b74bf32c7110dd48d4300cf->leave($__internal_95fd274ba92d8216a911c7dd06904df082ef99609b74bf32c7110dd48d4300cf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
