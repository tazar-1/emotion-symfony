<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_2b078ac8f66d1fd1caee51c16b76923fa7f2642c95db443468bafa87bd913e73 extends Twig_Template
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
        $__internal_a8eed963ac215656ae778e30ee63d184b630fa981292a50842091a8f814b9f64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8eed963ac215656ae778e30ee63d184b630fa981292a50842091a8f814b9f64->enter($__internal_a8eed963ac215656ae778e30ee63d184b630fa981292a50842091a8f814b9f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_6483cef0317f232253d81b96504a75312bedc64694e8ab93528fada1ccd815dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6483cef0317f232253d81b96504a75312bedc64694e8ab93528fada1ccd815dc->enter($__internal_6483cef0317f232253d81b96504a75312bedc64694e8ab93528fada1ccd815dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_a8eed963ac215656ae778e30ee63d184b630fa981292a50842091a8f814b9f64->leave($__internal_a8eed963ac215656ae778e30ee63d184b630fa981292a50842091a8f814b9f64_prof);

        
        $__internal_6483cef0317f232253d81b96504a75312bedc64694e8ab93528fada1ccd815dc->leave($__internal_6483cef0317f232253d81b96504a75312bedc64694e8ab93528fada1ccd815dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
