<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_9cbbab7f9cf89fcd3b1eaf46719abe5916175b74d9498e75a3dcdc20bfde2155 extends Twig_Template
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
        $__internal_693c78beeed2babc710a984dd01aa7f84b7ed1a89363ac791c2c9ca0a5e9cb3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_693c78beeed2babc710a984dd01aa7f84b7ed1a89363ac791c2c9ca0a5e9cb3a->enter($__internal_693c78beeed2babc710a984dd01aa7f84b7ed1a89363ac791c2c9ca0a5e9cb3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_70450c80e6281dc17399b671a1cd0d31685bbb74b042fffa451d9b5a0d9e5748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70450c80e6281dc17399b671a1cd0d31685bbb74b042fffa451d9b5a0d9e5748->enter($__internal_70450c80e6281dc17399b671a1cd0d31685bbb74b042fffa451d9b5a0d9e5748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_693c78beeed2babc710a984dd01aa7f84b7ed1a89363ac791c2c9ca0a5e9cb3a->leave($__internal_693c78beeed2babc710a984dd01aa7f84b7ed1a89363ac791c2c9ca0a5e9cb3a_prof);

        
        $__internal_70450c80e6281dc17399b671a1cd0d31685bbb74b042fffa451d9b5a0d9e5748->leave($__internal_70450c80e6281dc17399b671a1cd0d31685bbb74b042fffa451d9b5a0d9e5748_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
