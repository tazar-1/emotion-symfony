<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_6eacc0aae9acfac5a48013bcc1b1b67ef20e84fbda1fe446bf5e155a5b07145d extends Twig_Template
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
        $__internal_3addeb47e3ce8cbc8d69f0138cf81d027ee5e7b9f5518c60f9c60f25c29a929b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3addeb47e3ce8cbc8d69f0138cf81d027ee5e7b9f5518c60f9c60f25c29a929b->enter($__internal_3addeb47e3ce8cbc8d69f0138cf81d027ee5e7b9f5518c60f9c60f25c29a929b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_c2d6336c4902cf28d58c6244ce9143e26ad748ae2b7d588096ef70f4d55064c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2d6336c4902cf28d58c6244ce9143e26ad748ae2b7d588096ef70f4d55064c0->enter($__internal_c2d6336c4902cf28d58c6244ce9143e26ad748ae2b7d588096ef70f4d55064c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_3addeb47e3ce8cbc8d69f0138cf81d027ee5e7b9f5518c60f9c60f25c29a929b->leave($__internal_3addeb47e3ce8cbc8d69f0138cf81d027ee5e7b9f5518c60f9c60f25c29a929b_prof);

        
        $__internal_c2d6336c4902cf28d58c6244ce9143e26ad748ae2b7d588096ef70f4d55064c0->leave($__internal_c2d6336c4902cf28d58c6244ce9143e26ad748ae2b7d588096ef70f4d55064c0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
