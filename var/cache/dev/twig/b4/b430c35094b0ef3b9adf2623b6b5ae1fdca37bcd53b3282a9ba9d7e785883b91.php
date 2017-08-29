<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_207b7ef03fcc2ad20f6800f9d8566566c59b5353e3cc4511ea2d835d4a0bffba extends Twig_Template
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
        $__internal_714d6752c4489beb28bd35372769fd972104d47d7819a6c824143465f40ec44a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_714d6752c4489beb28bd35372769fd972104d47d7819a6c824143465f40ec44a->enter($__internal_714d6752c4489beb28bd35372769fd972104d47d7819a6c824143465f40ec44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_4a2dfd6fdd7122fdabaf3d7b6ad0e40372f0061a27478d3f58f3e136c2cf1320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a2dfd6fdd7122fdabaf3d7b6ad0e40372f0061a27478d3f58f3e136c2cf1320->enter($__internal_4a2dfd6fdd7122fdabaf3d7b6ad0e40372f0061a27478d3f58f3e136c2cf1320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_714d6752c4489beb28bd35372769fd972104d47d7819a6c824143465f40ec44a->leave($__internal_714d6752c4489beb28bd35372769fd972104d47d7819a6c824143465f40ec44a_prof);

        
        $__internal_4a2dfd6fdd7122fdabaf3d7b6ad0e40372f0061a27478d3f58f3e136c2cf1320->leave($__internal_4a2dfd6fdd7122fdabaf3d7b6ad0e40372f0061a27478d3f58f3e136c2cf1320_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
