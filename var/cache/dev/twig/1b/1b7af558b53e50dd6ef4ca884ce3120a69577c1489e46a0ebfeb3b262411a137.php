<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_cc1dc1b697ced378c3968c2336c4b3a5548f6c3a7871763acf4ca50bd3618b8a extends Twig_Template
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
        $__internal_f9e48b3ad6d7af4be17ad32311a939ed6c503fd75717a5014ac5a145a64e7b41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9e48b3ad6d7af4be17ad32311a939ed6c503fd75717a5014ac5a145a64e7b41->enter($__internal_f9e48b3ad6d7af4be17ad32311a939ed6c503fd75717a5014ac5a145a64e7b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_60ec58b0ce7d729a5780111fb48116850ecad8742baf9a38254c151e99f75b7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60ec58b0ce7d729a5780111fb48116850ecad8742baf9a38254c151e99f75b7b->enter($__internal_60ec58b0ce7d729a5780111fb48116850ecad8742baf9a38254c151e99f75b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_f9e48b3ad6d7af4be17ad32311a939ed6c503fd75717a5014ac5a145a64e7b41->leave($__internal_f9e48b3ad6d7af4be17ad32311a939ed6c503fd75717a5014ac5a145a64e7b41_prof);

        
        $__internal_60ec58b0ce7d729a5780111fb48116850ecad8742baf9a38254c151e99f75b7b->leave($__internal_60ec58b0ce7d729a5780111fb48116850ecad8742baf9a38254c151e99f75b7b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
