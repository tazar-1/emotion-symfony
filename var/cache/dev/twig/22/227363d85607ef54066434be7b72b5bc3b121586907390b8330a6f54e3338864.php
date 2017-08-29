<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_91aed4adf6a951bc483dd424056c191baf3e416cacbba8e82613c7d2704f25ba extends Twig_Template
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
        $__internal_86a03ac615873787f5854bd33db919353a5d4e87d327ebcd594de0a0af7a27e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86a03ac615873787f5854bd33db919353a5d4e87d327ebcd594de0a0af7a27e1->enter($__internal_86a03ac615873787f5854bd33db919353a5d4e87d327ebcd594de0a0af7a27e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_285ad43594e5e403e97997eb46934ddd72894a8a9aed1fa6cdeab2b4f278f982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_285ad43594e5e403e97997eb46934ddd72894a8a9aed1fa6cdeab2b4f278f982->enter($__internal_285ad43594e5e403e97997eb46934ddd72894a8a9aed1fa6cdeab2b4f278f982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_86a03ac615873787f5854bd33db919353a5d4e87d327ebcd594de0a0af7a27e1->leave($__internal_86a03ac615873787f5854bd33db919353a5d4e87d327ebcd594de0a0af7a27e1_prof);

        
        $__internal_285ad43594e5e403e97997eb46934ddd72894a8a9aed1fa6cdeab2b4f278f982->leave($__internal_285ad43594e5e403e97997eb46934ddd72894a8a9aed1fa6cdeab2b4f278f982_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
