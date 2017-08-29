<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_beaa49550627de995102d7b5c0c0a2f2b57966196781d26ee98060e55c58229d extends Twig_Template
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
        $__internal_d6f87415867da776b8038958a3c3de0bfcae085e7eb31af3371c6ee105c9db19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6f87415867da776b8038958a3c3de0bfcae085e7eb31af3371c6ee105c9db19->enter($__internal_d6f87415867da776b8038958a3c3de0bfcae085e7eb31af3371c6ee105c9db19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_08822cbd68f867f027702ee812bb38c43f48049afbe23e05261d36b47ba31e38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08822cbd68f867f027702ee812bb38c43f48049afbe23e05261d36b47ba31e38->enter($__internal_08822cbd68f867f027702ee812bb38c43f48049afbe23e05261d36b47ba31e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_d6f87415867da776b8038958a3c3de0bfcae085e7eb31af3371c6ee105c9db19->leave($__internal_d6f87415867da776b8038958a3c3de0bfcae085e7eb31af3371c6ee105c9db19_prof);

        
        $__internal_08822cbd68f867f027702ee812bb38c43f48049afbe23e05261d36b47ba31e38->leave($__internal_08822cbd68f867f027702ee812bb38c43f48049afbe23e05261d36b47ba31e38_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
