<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_5a9aed02b93250ded06bc5e9e0cdadf24e1c2e0dd054b82b300c2afdd1bc5186 extends Twig_Template
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
        $__internal_f8842b0e2b83a7893a8b54f04acf35e5feb1bf1afaaa4cf06cee4a0e15f07fe0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8842b0e2b83a7893a8b54f04acf35e5feb1bf1afaaa4cf06cee4a0e15f07fe0->enter($__internal_f8842b0e2b83a7893a8b54f04acf35e5feb1bf1afaaa4cf06cee4a0e15f07fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_f9f22e7fcc2241e7cc0ca2a23f823345c30b9ebe6db5a1616e0c24ffddce9672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9f22e7fcc2241e7cc0ca2a23f823345c30b9ebe6db5a1616e0c24ffddce9672->enter($__internal_f9f22e7fcc2241e7cc0ca2a23f823345c30b9ebe6db5a1616e0c24ffddce9672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_f8842b0e2b83a7893a8b54f04acf35e5feb1bf1afaaa4cf06cee4a0e15f07fe0->leave($__internal_f8842b0e2b83a7893a8b54f04acf35e5feb1bf1afaaa4cf06cee4a0e15f07fe0_prof);

        
        $__internal_f9f22e7fcc2241e7cc0ca2a23f823345c30b9ebe6db5a1616e0c24ffddce9672->leave($__internal_f9f22e7fcc2241e7cc0ca2a23f823345c30b9ebe6db5a1616e0c24ffddce9672_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
