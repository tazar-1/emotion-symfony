<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_75b97afc0416473d409ca87d7318fbfeed3913d650dd654d7e834b6feb312b07 extends Twig_Template
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
        $__internal_699a724c4090e768a44689c2c1bb02086e81313fa272691dfb4436075517a75a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_699a724c4090e768a44689c2c1bb02086e81313fa272691dfb4436075517a75a->enter($__internal_699a724c4090e768a44689c2c1bb02086e81313fa272691dfb4436075517a75a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_ff50fb4d12e38fe790ad2fdb26fe27a050aa0ce224b3d9ce786270d6936ffa2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff50fb4d12e38fe790ad2fdb26fe27a050aa0ce224b3d9ce786270d6936ffa2d->enter($__internal_ff50fb4d12e38fe790ad2fdb26fe27a050aa0ce224b3d9ce786270d6936ffa2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_699a724c4090e768a44689c2c1bb02086e81313fa272691dfb4436075517a75a->leave($__internal_699a724c4090e768a44689c2c1bb02086e81313fa272691dfb4436075517a75a_prof);

        
        $__internal_ff50fb4d12e38fe790ad2fdb26fe27a050aa0ce224b3d9ce786270d6936ffa2d->leave($__internal_ff50fb4d12e38fe790ad2fdb26fe27a050aa0ce224b3d9ce786270d6936ffa2d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
