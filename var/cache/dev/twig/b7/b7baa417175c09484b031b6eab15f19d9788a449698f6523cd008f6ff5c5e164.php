<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_a5f4964b8dd2411fb4b93db10fd09e972e9a4fc40c61ab201c92f8f0befe5dec extends Twig_Template
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
        $__internal_92fbe16ab8440651196266ed0e5468725c2535ce3e395e052e51a27cc6b46026 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92fbe16ab8440651196266ed0e5468725c2535ce3e395e052e51a27cc6b46026->enter($__internal_92fbe16ab8440651196266ed0e5468725c2535ce3e395e052e51a27cc6b46026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_c0f1ec285d41b30d3751ad66c8aeef1a79e4299e137926a3c28e4f9afedca46d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0f1ec285d41b30d3751ad66c8aeef1a79e4299e137926a3c28e4f9afedca46d->enter($__internal_c0f1ec285d41b30d3751ad66c8aeef1a79e4299e137926a3c28e4f9afedca46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_92fbe16ab8440651196266ed0e5468725c2535ce3e395e052e51a27cc6b46026->leave($__internal_92fbe16ab8440651196266ed0e5468725c2535ce3e395e052e51a27cc6b46026_prof);

        
        $__internal_c0f1ec285d41b30d3751ad66c8aeef1a79e4299e137926a3c28e4f9afedca46d->leave($__internal_c0f1ec285d41b30d3751ad66c8aeef1a79e4299e137926a3c28e4f9afedca46d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
