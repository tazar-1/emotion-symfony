<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_b7441d40556439ae44c86cf370b3fb71b670e2902210fe00f869841f173cba88 extends Twig_Template
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
        $__internal_5ba2fbde97f49c820292b6e78f6c298d570a381d4b3fbbc469a1d1069d459a3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ba2fbde97f49c820292b6e78f6c298d570a381d4b3fbbc469a1d1069d459a3b->enter($__internal_5ba2fbde97f49c820292b6e78f6c298d570a381d4b3fbbc469a1d1069d459a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_6bc671b19770c2080c69304d0680a7f2c201417bdc9dcad24c7dbd5d468f2e6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bc671b19770c2080c69304d0680a7f2c201417bdc9dcad24c7dbd5d468f2e6d->enter($__internal_6bc671b19770c2080c69304d0680a7f2c201417bdc9dcad24c7dbd5d468f2e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5ba2fbde97f49c820292b6e78f6c298d570a381d4b3fbbc469a1d1069d459a3b->leave($__internal_5ba2fbde97f49c820292b6e78f6c298d570a381d4b3fbbc469a1d1069d459a3b_prof);

        
        $__internal_6bc671b19770c2080c69304d0680a7f2c201417bdc9dcad24c7dbd5d468f2e6d->leave($__internal_6bc671b19770c2080c69304d0680a7f2c201417bdc9dcad24c7dbd5d468f2e6d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
