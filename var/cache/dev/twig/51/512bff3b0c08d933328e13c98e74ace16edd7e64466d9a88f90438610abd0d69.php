<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_3223e0f9522de4c37d9c7322f662d6ba3b2a2df77596e5c466ef565c34fcf0fc extends Twig_Template
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
        $__internal_f44240235516ed40a2b96d1c617ded3194b3152e11e5f7aaee84bd8dba2f19ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f44240235516ed40a2b96d1c617ded3194b3152e11e5f7aaee84bd8dba2f19ea->enter($__internal_f44240235516ed40a2b96d1c617ded3194b3152e11e5f7aaee84bd8dba2f19ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_807d44e7eb110551598598f69dc9ba7a98cd2b4b121f539634fc6fcb6f5ae49e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_807d44e7eb110551598598f69dc9ba7a98cd2b4b121f539634fc6fcb6f5ae49e->enter($__internal_807d44e7eb110551598598f69dc9ba7a98cd2b4b121f539634fc6fcb6f5ae49e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_f44240235516ed40a2b96d1c617ded3194b3152e11e5f7aaee84bd8dba2f19ea->leave($__internal_f44240235516ed40a2b96d1c617ded3194b3152e11e5f7aaee84bd8dba2f19ea_prof);

        
        $__internal_807d44e7eb110551598598f69dc9ba7a98cd2b4b121f539634fc6fcb6f5ae49e->leave($__internal_807d44e7eb110551598598f69dc9ba7a98cd2b4b121f539634fc6fcb6f5ae49e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
