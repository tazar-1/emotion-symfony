<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_24a37b672924dc81e8ec3deaa819ff63d6098425765879650caa073f54a28a3a extends Twig_Template
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
        $__internal_af449c1bb6393b26c040731c2d9597c84b8fabfd7343e5065df47cc03d5f6253 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af449c1bb6393b26c040731c2d9597c84b8fabfd7343e5065df47cc03d5f6253->enter($__internal_af449c1bb6393b26c040731c2d9597c84b8fabfd7343e5065df47cc03d5f6253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_c5baad4a0be360f8bc3b9db21602a0a82fa81944e5671e60919aa538b90544ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5baad4a0be360f8bc3b9db21602a0a82fa81944e5671e60919aa538b90544ce->enter($__internal_c5baad4a0be360f8bc3b9db21602a0a82fa81944e5671e60919aa538b90544ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_af449c1bb6393b26c040731c2d9597c84b8fabfd7343e5065df47cc03d5f6253->leave($__internal_af449c1bb6393b26c040731c2d9597c84b8fabfd7343e5065df47cc03d5f6253_prof);

        
        $__internal_c5baad4a0be360f8bc3b9db21602a0a82fa81944e5671e60919aa538b90544ce->leave($__internal_c5baad4a0be360f8bc3b9db21602a0a82fa81944e5671e60919aa538b90544ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
