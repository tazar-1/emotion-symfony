<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_3d3c47cb40a2c4ccefe78d8fdeaa398b8e75971be1b59064e9d8e7b9cee61a13 extends Twig_Template
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
        $__internal_74c86009f3333766bb2ddcbcb01fb8f1d804297b455cea1e36a518557a7c6fdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74c86009f3333766bb2ddcbcb01fb8f1d804297b455cea1e36a518557a7c6fdf->enter($__internal_74c86009f3333766bb2ddcbcb01fb8f1d804297b455cea1e36a518557a7c6fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_09e6d1e3027d0c32187582c646b92459d7a9932eafc8319798c0f93f98199f1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09e6d1e3027d0c32187582c646b92459d7a9932eafc8319798c0f93f98199f1a->enter($__internal_09e6d1e3027d0c32187582c646b92459d7a9932eafc8319798c0f93f98199f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_74c86009f3333766bb2ddcbcb01fb8f1d804297b455cea1e36a518557a7c6fdf->leave($__internal_74c86009f3333766bb2ddcbcb01fb8f1d804297b455cea1e36a518557a7c6fdf_prof);

        
        $__internal_09e6d1e3027d0c32187582c646b92459d7a9932eafc8319798c0f93f98199f1a->leave($__internal_09e6d1e3027d0c32187582c646b92459d7a9932eafc8319798c0f93f98199f1a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
