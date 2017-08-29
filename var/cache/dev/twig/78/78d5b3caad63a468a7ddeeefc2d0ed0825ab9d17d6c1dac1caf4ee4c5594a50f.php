<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_e4ea56bab3502f3da936ffd9a103a86239b82b19856d93c74d0c3c27071128c6 extends Twig_Template
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
        $__internal_70e2ee63c29940d928b44ea31e7a12b3de7f30e49221705cf0b534a1fc33f744 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70e2ee63c29940d928b44ea31e7a12b3de7f30e49221705cf0b534a1fc33f744->enter($__internal_70e2ee63c29940d928b44ea31e7a12b3de7f30e49221705cf0b534a1fc33f744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_d16f58a54745105df7ef33c5f6a58c87097bd9280924fa5d3016e6334dbf1c1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d16f58a54745105df7ef33c5f6a58c87097bd9280924fa5d3016e6334dbf1c1b->enter($__internal_d16f58a54745105df7ef33c5f6a58c87097bd9280924fa5d3016e6334dbf1c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_70e2ee63c29940d928b44ea31e7a12b3de7f30e49221705cf0b534a1fc33f744->leave($__internal_70e2ee63c29940d928b44ea31e7a12b3de7f30e49221705cf0b534a1fc33f744_prof);

        
        $__internal_d16f58a54745105df7ef33c5f6a58c87097bd9280924fa5d3016e6334dbf1c1b->leave($__internal_d16f58a54745105df7ef33c5f6a58c87097bd9280924fa5d3016e6334dbf1c1b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
