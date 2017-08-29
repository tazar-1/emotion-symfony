<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_3d89c4191ac98f411cc2970513796e0df2d7487183baa7b27441312b77d02ec2 extends Twig_Template
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
        $__internal_b6b7870c873750e012a659b05cde3a5cc99fceb8eb2b51d6f45b665dceafb59e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6b7870c873750e012a659b05cde3a5cc99fceb8eb2b51d6f45b665dceafb59e->enter($__internal_b6b7870c873750e012a659b05cde3a5cc99fceb8eb2b51d6f45b665dceafb59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_ff5aaf9f08e948f5e95f5b475fe7bb984d4c33e73f84d7a9915f1bb86c170250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff5aaf9f08e948f5e95f5b475fe7bb984d4c33e73f84d7a9915f1bb86c170250->enter($__internal_ff5aaf9f08e948f5e95f5b475fe7bb984d4c33e73f84d7a9915f1bb86c170250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_b6b7870c873750e012a659b05cde3a5cc99fceb8eb2b51d6f45b665dceafb59e->leave($__internal_b6b7870c873750e012a659b05cde3a5cc99fceb8eb2b51d6f45b665dceafb59e_prof);

        
        $__internal_ff5aaf9f08e948f5e95f5b475fe7bb984d4c33e73f84d7a9915f1bb86c170250->leave($__internal_ff5aaf9f08e948f5e95f5b475fe7bb984d4c33e73f84d7a9915f1bb86c170250_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
