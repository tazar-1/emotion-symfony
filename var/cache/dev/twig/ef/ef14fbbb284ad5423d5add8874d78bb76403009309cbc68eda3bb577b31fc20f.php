<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_5390b84b48348256ff891d4fbe3d59406dc5309f04a6400df6cb7f05609d507f extends Twig_Template
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
        $__internal_8fcfc2015b95896b516163b9afa405bb458fedbe0417822e9983e42fa3739611 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fcfc2015b95896b516163b9afa405bb458fedbe0417822e9983e42fa3739611->enter($__internal_8fcfc2015b95896b516163b9afa405bb458fedbe0417822e9983e42fa3739611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_edc3d00201299434f2150c01a03c085dfab53d77dca864b360a86ca5d6650df8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edc3d00201299434f2150c01a03c085dfab53d77dca864b360a86ca5d6650df8->enter($__internal_edc3d00201299434f2150c01a03c085dfab53d77dca864b360a86ca5d6650df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_8fcfc2015b95896b516163b9afa405bb458fedbe0417822e9983e42fa3739611->leave($__internal_8fcfc2015b95896b516163b9afa405bb458fedbe0417822e9983e42fa3739611_prof);

        
        $__internal_edc3d00201299434f2150c01a03c085dfab53d77dca864b360a86ca5d6650df8->leave($__internal_edc3d00201299434f2150c01a03c085dfab53d77dca864b360a86ca5d6650df8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
