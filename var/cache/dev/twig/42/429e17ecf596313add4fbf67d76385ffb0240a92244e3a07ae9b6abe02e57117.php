<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_aae31445689fc8ee557e24c1db5d7e13adda4833200a109b8c3c25fadf032fa3 extends Twig_Template
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
        $__internal_c6ff924cacb32c624f063abc6a91cb2d5a8d991dbb0fa21afe944c03ebb325de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6ff924cacb32c624f063abc6a91cb2d5a8d991dbb0fa21afe944c03ebb325de->enter($__internal_c6ff924cacb32c624f063abc6a91cb2d5a8d991dbb0fa21afe944c03ebb325de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_77258c1b5018708dcabeb79b1a23175baf6796d2c459a996c8125d8af04b3512 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77258c1b5018708dcabeb79b1a23175baf6796d2c459a996c8125d8af04b3512->enter($__internal_77258c1b5018708dcabeb79b1a23175baf6796d2c459a996c8125d8af04b3512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c6ff924cacb32c624f063abc6a91cb2d5a8d991dbb0fa21afe944c03ebb325de->leave($__internal_c6ff924cacb32c624f063abc6a91cb2d5a8d991dbb0fa21afe944c03ebb325de_prof);

        
        $__internal_77258c1b5018708dcabeb79b1a23175baf6796d2c459a996c8125d8af04b3512->leave($__internal_77258c1b5018708dcabeb79b1a23175baf6796d2c459a996c8125d8af04b3512_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
