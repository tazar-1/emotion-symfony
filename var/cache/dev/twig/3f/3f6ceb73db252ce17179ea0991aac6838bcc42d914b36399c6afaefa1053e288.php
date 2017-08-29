<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_e4355484f57b3dee029e3bad8e495b78644825105a5cf98ea3a4a261fb105bc1 extends Twig_Template
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
        $__internal_c018fb16303aaf2145b7a618b3fb9e0eb386c48abf766226bad90744db97ff01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c018fb16303aaf2145b7a618b3fb9e0eb386c48abf766226bad90744db97ff01->enter($__internal_c018fb16303aaf2145b7a618b3fb9e0eb386c48abf766226bad90744db97ff01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_0caf505842ef9d877f969ce7a9d1d41cbf809059cd399bb7c30361168531b431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0caf505842ef9d877f969ce7a9d1d41cbf809059cd399bb7c30361168531b431->enter($__internal_0caf505842ef9d877f969ce7a9d1d41cbf809059cd399bb7c30361168531b431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_c018fb16303aaf2145b7a618b3fb9e0eb386c48abf766226bad90744db97ff01->leave($__internal_c018fb16303aaf2145b7a618b3fb9e0eb386c48abf766226bad90744db97ff01_prof);

        
        $__internal_0caf505842ef9d877f969ce7a9d1d41cbf809059cd399bb7c30361168531b431->leave($__internal_0caf505842ef9d877f969ce7a9d1d41cbf809059cd399bb7c30361168531b431_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
