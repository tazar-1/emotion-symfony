<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_8696d5ff766125ecb6b04905857e879bd5fb61eb5a5b7eb95f4a39b457a6ffd3 extends Twig_Template
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
        $__internal_7300878c49c2a6b234df8a51f8040c135ed634198213b24714bd5e30507320be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7300878c49c2a6b234df8a51f8040c135ed634198213b24714bd5e30507320be->enter($__internal_7300878c49c2a6b234df8a51f8040c135ed634198213b24714bd5e30507320be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_fc6995298f185c61431cc1bd45e516a6977f15767a6b5255f2827e052dccf388 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc6995298f185c61431cc1bd45e516a6977f15767a6b5255f2827e052dccf388->enter($__internal_fc6995298f185c61431cc1bd45e516a6977f15767a6b5255f2827e052dccf388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_7300878c49c2a6b234df8a51f8040c135ed634198213b24714bd5e30507320be->leave($__internal_7300878c49c2a6b234df8a51f8040c135ed634198213b24714bd5e30507320be_prof);

        
        $__internal_fc6995298f185c61431cc1bd45e516a6977f15767a6b5255f2827e052dccf388->leave($__internal_fc6995298f185c61431cc1bd45e516a6977f15767a6b5255f2827e052dccf388_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
