<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_a1d264c351596849d6761ebfa1b0363bd8a548da0f70fd593f321874c5770a81 extends Twig_Template
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
        $__internal_8ac58b910eb9a772938e04f522fbb57aad0e5b964bfa6a43bb4f2a05f7269d15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ac58b910eb9a772938e04f522fbb57aad0e5b964bfa6a43bb4f2a05f7269d15->enter($__internal_8ac58b910eb9a772938e04f522fbb57aad0e5b964bfa6a43bb4f2a05f7269d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_a1ff2581da3c12952d365c70873dc9a9e55fa803624d5fddace2ff8bcb05288e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1ff2581da3c12952d365c70873dc9a9e55fa803624d5fddace2ff8bcb05288e->enter($__internal_a1ff2581da3c12952d365c70873dc9a9e55fa803624d5fddace2ff8bcb05288e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_8ac58b910eb9a772938e04f522fbb57aad0e5b964bfa6a43bb4f2a05f7269d15->leave($__internal_8ac58b910eb9a772938e04f522fbb57aad0e5b964bfa6a43bb4f2a05f7269d15_prof);

        
        $__internal_a1ff2581da3c12952d365c70873dc9a9e55fa803624d5fddace2ff8bcb05288e->leave($__internal_a1ff2581da3c12952d365c70873dc9a9e55fa803624d5fddace2ff8bcb05288e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
