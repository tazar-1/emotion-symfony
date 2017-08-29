<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_9dc4ab1c639887871af2fe9b769dd0e1233e18070e265322add2a00a1f9984c5 extends Twig_Template
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
        $__internal_86b005b0283a170e213aea2c6927db841be48ad923b9aea21c9f42e1405f8dda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86b005b0283a170e213aea2c6927db841be48ad923b9aea21c9f42e1405f8dda->enter($__internal_86b005b0283a170e213aea2c6927db841be48ad923b9aea21c9f42e1405f8dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_60ee0f05181c9bae8f6b42df95f4b4a7f37f4cedd1b5a9e5eb06f25d92efbfdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60ee0f05181c9bae8f6b42df95f4b4a7f37f4cedd1b5a9e5eb06f25d92efbfdf->enter($__internal_60ee0f05181c9bae8f6b42df95f4b4a7f37f4cedd1b5a9e5eb06f25d92efbfdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_86b005b0283a170e213aea2c6927db841be48ad923b9aea21c9f42e1405f8dda->leave($__internal_86b005b0283a170e213aea2c6927db841be48ad923b9aea21c9f42e1405f8dda_prof);

        
        $__internal_60ee0f05181c9bae8f6b42df95f4b4a7f37f4cedd1b5a9e5eb06f25d92efbfdf->leave($__internal_60ee0f05181c9bae8f6b42df95f4b4a7f37f4cedd1b5a9e5eb06f25d92efbfdf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
