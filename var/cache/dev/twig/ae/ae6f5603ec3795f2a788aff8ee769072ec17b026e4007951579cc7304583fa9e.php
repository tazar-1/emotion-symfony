<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_608d077a45db74815e9cfe15a07f61cee5cc96ff34105f8115b0417467fdebad extends Twig_Template
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
        $__internal_9cc51b264a9b469a494413cb3d5393d09b8da49325bd181d40d037c846e10093 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cc51b264a9b469a494413cb3d5393d09b8da49325bd181d40d037c846e10093->enter($__internal_9cc51b264a9b469a494413cb3d5393d09b8da49325bd181d40d037c846e10093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_b7d780e7f04b0be10c0f02223a8cb43cfe277a8c9e7433ebef52f2ac6e58ea96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7d780e7f04b0be10c0f02223a8cb43cfe277a8c9e7433ebef52f2ac6e58ea96->enter($__internal_b7d780e7f04b0be10c0f02223a8cb43cfe277a8c9e7433ebef52f2ac6e58ea96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_9cc51b264a9b469a494413cb3d5393d09b8da49325bd181d40d037c846e10093->leave($__internal_9cc51b264a9b469a494413cb3d5393d09b8da49325bd181d40d037c846e10093_prof);

        
        $__internal_b7d780e7f04b0be10c0f02223a8cb43cfe277a8c9e7433ebef52f2ac6e58ea96->leave($__internal_b7d780e7f04b0be10c0f02223a8cb43cfe277a8c9e7433ebef52f2ac6e58ea96_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
