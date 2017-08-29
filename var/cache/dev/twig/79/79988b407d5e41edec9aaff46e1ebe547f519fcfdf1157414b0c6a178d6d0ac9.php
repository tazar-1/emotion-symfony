<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_ae57863d1fe511f26bb53a7c057dc21cc9570263c7097c474aaa6b85973b3dc7 extends Twig_Template
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
        $__internal_5ea16aef2447f63e348188df237e6b55c78c043ce2a2d6f19626468cead6130e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ea16aef2447f63e348188df237e6b55c78c043ce2a2d6f19626468cead6130e->enter($__internal_5ea16aef2447f63e348188df237e6b55c78c043ce2a2d6f19626468cead6130e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_13bfc2a7764682c7eb2d9ed5cba403ea4a4a62c9c45ed5e4f8077df41919bd1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13bfc2a7764682c7eb2d9ed5cba403ea4a4a62c9c45ed5e4f8077df41919bd1a->enter($__internal_13bfc2a7764682c7eb2d9ed5cba403ea4a4a62c9c45ed5e4f8077df41919bd1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_5ea16aef2447f63e348188df237e6b55c78c043ce2a2d6f19626468cead6130e->leave($__internal_5ea16aef2447f63e348188df237e6b55c78c043ce2a2d6f19626468cead6130e_prof);

        
        $__internal_13bfc2a7764682c7eb2d9ed5cba403ea4a4a62c9c45ed5e4f8077df41919bd1a->leave($__internal_13bfc2a7764682c7eb2d9ed5cba403ea4a4a62c9c45ed5e4f8077df41919bd1a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
