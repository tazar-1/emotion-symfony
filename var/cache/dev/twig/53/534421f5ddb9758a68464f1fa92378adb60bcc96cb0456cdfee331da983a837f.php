<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_9da11d6220d24485f559c5af8e9ac7f0efd88c63c83dac4dee9820379c40a776 extends Twig_Template
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
        $__internal_e1c5fea2e348be159fac8142a886dccc8d8da4afeede2eecf50d2c81ea14cd75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1c5fea2e348be159fac8142a886dccc8d8da4afeede2eecf50d2c81ea14cd75->enter($__internal_e1c5fea2e348be159fac8142a886dccc8d8da4afeede2eecf50d2c81ea14cd75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_1d146f31a9f2bc9f5c37dc0f1d5317ea0760e4ff12bd4c569cfcc7b1b6beb210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d146f31a9f2bc9f5c37dc0f1d5317ea0760e4ff12bd4c569cfcc7b1b6beb210->enter($__internal_1d146f31a9f2bc9f5c37dc0f1d5317ea0760e4ff12bd4c569cfcc7b1b6beb210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e1c5fea2e348be159fac8142a886dccc8d8da4afeede2eecf50d2c81ea14cd75->leave($__internal_e1c5fea2e348be159fac8142a886dccc8d8da4afeede2eecf50d2c81ea14cd75_prof);

        
        $__internal_1d146f31a9f2bc9f5c37dc0f1d5317ea0760e4ff12bd4c569cfcc7b1b6beb210->leave($__internal_1d146f31a9f2bc9f5c37dc0f1d5317ea0760e4ff12bd4c569cfcc7b1b6beb210_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
