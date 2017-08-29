<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_e8d4966cfe30487ba3601a60d65cc54b8d501d6c5c7f8f4490d9d536c09abe25 extends Twig_Template
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
        $__internal_fc18f15aaecdf042cbf7e8ceb9a9a1d99f66d4200d7a6256a1838f598e8d1a17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc18f15aaecdf042cbf7e8ceb9a9a1d99f66d4200d7a6256a1838f598e8d1a17->enter($__internal_fc18f15aaecdf042cbf7e8ceb9a9a1d99f66d4200d7a6256a1838f598e8d1a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_c7ac7fa8e0b8554ae24e86e0a7a4d36022aca81e935395f05f06a0107c1e7dc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7ac7fa8e0b8554ae24e86e0a7a4d36022aca81e935395f05f06a0107c1e7dc4->enter($__internal_c7ac7fa8e0b8554ae24e86e0a7a4d36022aca81e935395f05f06a0107c1e7dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_fc18f15aaecdf042cbf7e8ceb9a9a1d99f66d4200d7a6256a1838f598e8d1a17->leave($__internal_fc18f15aaecdf042cbf7e8ceb9a9a1d99f66d4200d7a6256a1838f598e8d1a17_prof);

        
        $__internal_c7ac7fa8e0b8554ae24e86e0a7a4d36022aca81e935395f05f06a0107c1e7dc4->leave($__internal_c7ac7fa8e0b8554ae24e86e0a7a4d36022aca81e935395f05f06a0107c1e7dc4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
