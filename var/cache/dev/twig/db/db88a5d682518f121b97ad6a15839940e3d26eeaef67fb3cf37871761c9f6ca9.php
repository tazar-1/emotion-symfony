<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_a058ddd36d5bea341b4bfdadb7ed68e4fed77002676b1cce14f1ce77e4056a43 extends Twig_Template
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
        $__internal_114bc3424c800bcb1cff37e328de7faa446b73241c8ea1449b82511561c6042c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_114bc3424c800bcb1cff37e328de7faa446b73241c8ea1449b82511561c6042c->enter($__internal_114bc3424c800bcb1cff37e328de7faa446b73241c8ea1449b82511561c6042c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_b359f430d73724ecf580af5629b20a1e28df8da99835bcaf9c34f9aaf1051c4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b359f430d73724ecf580af5629b20a1e28df8da99835bcaf9c34f9aaf1051c4d->enter($__internal_b359f430d73724ecf580af5629b20a1e28df8da99835bcaf9c34f9aaf1051c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_114bc3424c800bcb1cff37e328de7faa446b73241c8ea1449b82511561c6042c->leave($__internal_114bc3424c800bcb1cff37e328de7faa446b73241c8ea1449b82511561c6042c_prof);

        
        $__internal_b359f430d73724ecf580af5629b20a1e28df8da99835bcaf9c34f9aaf1051c4d->leave($__internal_b359f430d73724ecf580af5629b20a1e28df8da99835bcaf9c34f9aaf1051c4d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
