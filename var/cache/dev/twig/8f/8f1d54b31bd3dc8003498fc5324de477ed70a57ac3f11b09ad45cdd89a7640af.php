<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_1c7f2f9e0ead445c50662a935a923e0dbec4afebc3937d2910b7782cfe913323 extends Twig_Template
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
        $__internal_c9b6a4b212a2c8fffbced04b2af5d8f27adbb8af1a4bf8dc98d819f918f3bc33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9b6a4b212a2c8fffbced04b2af5d8f27adbb8af1a4bf8dc98d819f918f3bc33->enter($__internal_c9b6a4b212a2c8fffbced04b2af5d8f27adbb8af1a4bf8dc98d819f918f3bc33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_c99ff94e3ed67509ce06db603d5e43f156815f0fb7bf5dd8bb06911a16943aac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c99ff94e3ed67509ce06db603d5e43f156815f0fb7bf5dd8bb06911a16943aac->enter($__internal_c99ff94e3ed67509ce06db603d5e43f156815f0fb7bf5dd8bb06911a16943aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_c9b6a4b212a2c8fffbced04b2af5d8f27adbb8af1a4bf8dc98d819f918f3bc33->leave($__internal_c9b6a4b212a2c8fffbced04b2af5d8f27adbb8af1a4bf8dc98d819f918f3bc33_prof);

        
        $__internal_c99ff94e3ed67509ce06db603d5e43f156815f0fb7bf5dd8bb06911a16943aac->leave($__internal_c99ff94e3ed67509ce06db603d5e43f156815f0fb7bf5dd8bb06911a16943aac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
