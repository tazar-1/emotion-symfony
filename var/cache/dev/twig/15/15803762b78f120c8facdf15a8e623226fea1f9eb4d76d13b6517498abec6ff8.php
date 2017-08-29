<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_37954d791f212663cc8c9eb709d239e704c996105fc02b8db6cc8f4336933274 extends Twig_Template
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
        $__internal_430a9d0fc802c1efb8b3e3a9920bd672ccb21b2e67a805445a2a502e2750f845 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_430a9d0fc802c1efb8b3e3a9920bd672ccb21b2e67a805445a2a502e2750f845->enter($__internal_430a9d0fc802c1efb8b3e3a9920bd672ccb21b2e67a805445a2a502e2750f845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_94092d5f35fa527acdba45e7c0bc18b76c81d6c4aabc3a520ffc284b03cde654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94092d5f35fa527acdba45e7c0bc18b76c81d6c4aabc3a520ffc284b03cde654->enter($__internal_94092d5f35fa527acdba45e7c0bc18b76c81d6c4aabc3a520ffc284b03cde654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_430a9d0fc802c1efb8b3e3a9920bd672ccb21b2e67a805445a2a502e2750f845->leave($__internal_430a9d0fc802c1efb8b3e3a9920bd672ccb21b2e67a805445a2a502e2750f845_prof);

        
        $__internal_94092d5f35fa527acdba45e7c0bc18b76c81d6c4aabc3a520ffc284b03cde654->leave($__internal_94092d5f35fa527acdba45e7c0bc18b76c81d6c4aabc3a520ffc284b03cde654_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
