<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_4172787ee9b0292af8be48e9ef6f4e1e163ffc9d66aa7785c5e34d0e9e096195 extends Twig_Template
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
        $__internal_931fb8f7b57c3bbe40290aa3a336e0007fc70c45b2b1dcb7b3a9f8d836e189b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_931fb8f7b57c3bbe40290aa3a336e0007fc70c45b2b1dcb7b3a9f8d836e189b5->enter($__internal_931fb8f7b57c3bbe40290aa3a336e0007fc70c45b2b1dcb7b3a9f8d836e189b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_ad75b5cb2b9520ffab9c6bd7d7637ad50eb8076d48c2472e73505cfa7558eb5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad75b5cb2b9520ffab9c6bd7d7637ad50eb8076d48c2472e73505cfa7558eb5d->enter($__internal_ad75b5cb2b9520ffab9c6bd7d7637ad50eb8076d48c2472e73505cfa7558eb5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_931fb8f7b57c3bbe40290aa3a336e0007fc70c45b2b1dcb7b3a9f8d836e189b5->leave($__internal_931fb8f7b57c3bbe40290aa3a336e0007fc70c45b2b1dcb7b3a9f8d836e189b5_prof);

        
        $__internal_ad75b5cb2b9520ffab9c6bd7d7637ad50eb8076d48c2472e73505cfa7558eb5d->leave($__internal_ad75b5cb2b9520ffab9c6bd7d7637ad50eb8076d48c2472e73505cfa7558eb5d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
