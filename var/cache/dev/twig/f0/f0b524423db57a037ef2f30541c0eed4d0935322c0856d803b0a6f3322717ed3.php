<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_a894e203d64fc4f5781b4c7b71d89f1c4bae555e03d7135df0961babe42e81dd extends Twig_Template
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
        $__internal_35a2aa2b9b5a957eb871e101739a339390a9d5858b0aae08f251836aeb2c546b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35a2aa2b9b5a957eb871e101739a339390a9d5858b0aae08f251836aeb2c546b->enter($__internal_35a2aa2b9b5a957eb871e101739a339390a9d5858b0aae08f251836aeb2c546b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_18e1601d1d96f01a523c2624bcc82e81967385b210a7cc1c23f28ca370622704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18e1601d1d96f01a523c2624bcc82e81967385b210a7cc1c23f28ca370622704->enter($__internal_18e1601d1d96f01a523c2624bcc82e81967385b210a7cc1c23f28ca370622704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_35a2aa2b9b5a957eb871e101739a339390a9d5858b0aae08f251836aeb2c546b->leave($__internal_35a2aa2b9b5a957eb871e101739a339390a9d5858b0aae08f251836aeb2c546b_prof);

        
        $__internal_18e1601d1d96f01a523c2624bcc82e81967385b210a7cc1c23f28ca370622704->leave($__internal_18e1601d1d96f01a523c2624bcc82e81967385b210a7cc1c23f28ca370622704_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
