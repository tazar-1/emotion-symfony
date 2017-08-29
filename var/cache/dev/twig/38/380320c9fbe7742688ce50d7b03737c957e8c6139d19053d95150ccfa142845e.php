<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_a024dafbc5674a8ba25deb5c4217d1e2ec04411af345cbad092b266948505bbd extends Twig_Template
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
        $__internal_99ea6e463b204b2a4d89704cb51164b483c9ea1e010a2a82af0e7d7c7d7ae2b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99ea6e463b204b2a4d89704cb51164b483c9ea1e010a2a82af0e7d7c7d7ae2b8->enter($__internal_99ea6e463b204b2a4d89704cb51164b483c9ea1e010a2a82af0e7d7c7d7ae2b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_1cb2bdd57d5b07873020d1571c6c297e3200e1bcdeda1fbe06b0ae378fd54e98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cb2bdd57d5b07873020d1571c6c297e3200e1bcdeda1fbe06b0ae378fd54e98->enter($__internal_1cb2bdd57d5b07873020d1571c6c297e3200e1bcdeda1fbe06b0ae378fd54e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_99ea6e463b204b2a4d89704cb51164b483c9ea1e010a2a82af0e7d7c7d7ae2b8->leave($__internal_99ea6e463b204b2a4d89704cb51164b483c9ea1e010a2a82af0e7d7c7d7ae2b8_prof);

        
        $__internal_1cb2bdd57d5b07873020d1571c6c297e3200e1bcdeda1fbe06b0ae378fd54e98->leave($__internal_1cb2bdd57d5b07873020d1571c6c297e3200e1bcdeda1fbe06b0ae378fd54e98_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
