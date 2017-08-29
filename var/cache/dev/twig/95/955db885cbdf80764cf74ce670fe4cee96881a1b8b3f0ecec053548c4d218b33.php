<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_1eec25b079a05787991f241f9ec132524debb47d43bae92c9371ea37a41cd434 extends Twig_Template
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
        $__internal_f10d5745331ea20c0bd621bdf15789c922368e7f7f6a4624684766c17ec99aba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f10d5745331ea20c0bd621bdf15789c922368e7f7f6a4624684766c17ec99aba->enter($__internal_f10d5745331ea20c0bd621bdf15789c922368e7f7f6a4624684766c17ec99aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_3f881fda2f25671379a606833ebb11659eca35990967984d9c20ff6d7d06ab6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f881fda2f25671379a606833ebb11659eca35990967984d9c20ff6d7d06ab6c->enter($__internal_3f881fda2f25671379a606833ebb11659eca35990967984d9c20ff6d7d06ab6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_f10d5745331ea20c0bd621bdf15789c922368e7f7f6a4624684766c17ec99aba->leave($__internal_f10d5745331ea20c0bd621bdf15789c922368e7f7f6a4624684766c17ec99aba_prof);

        
        $__internal_3f881fda2f25671379a606833ebb11659eca35990967984d9c20ff6d7d06ab6c->leave($__internal_3f881fda2f25671379a606833ebb11659eca35990967984d9c20ff6d7d06ab6c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
