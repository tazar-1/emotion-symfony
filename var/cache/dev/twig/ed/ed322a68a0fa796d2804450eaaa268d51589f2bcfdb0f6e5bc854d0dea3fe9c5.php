<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_81f4f9786c986438eed02a815145f5888175182f7f378b27aa524f263d7b89f9 extends Twig_Template
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
        $__internal_f53f043cff456896bc30c36d1e617b8a0f6986ee1442821d5994dd33104cfb3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f53f043cff456896bc30c36d1e617b8a0f6986ee1442821d5994dd33104cfb3e->enter($__internal_f53f043cff456896bc30c36d1e617b8a0f6986ee1442821d5994dd33104cfb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_d08ec3b6fd947d5dea82afd09c9e1c3b005f23f2fa8bf8fb967a05ee0861697d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d08ec3b6fd947d5dea82afd09c9e1c3b005f23f2fa8bf8fb967a05ee0861697d->enter($__internal_d08ec3b6fd947d5dea82afd09c9e1c3b005f23f2fa8bf8fb967a05ee0861697d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_f53f043cff456896bc30c36d1e617b8a0f6986ee1442821d5994dd33104cfb3e->leave($__internal_f53f043cff456896bc30c36d1e617b8a0f6986ee1442821d5994dd33104cfb3e_prof);

        
        $__internal_d08ec3b6fd947d5dea82afd09c9e1c3b005f23f2fa8bf8fb967a05ee0861697d->leave($__internal_d08ec3b6fd947d5dea82afd09c9e1c3b005f23f2fa8bf8fb967a05ee0861697d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
