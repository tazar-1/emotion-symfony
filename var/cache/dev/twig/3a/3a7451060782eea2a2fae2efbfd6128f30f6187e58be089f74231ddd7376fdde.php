<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_31120c1833cf7490632a8a8ee3fde613ecc3e866a0da60c93ff2f05340a45e73 extends Twig_Template
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
        $__internal_00588f7308aa88662281226f41e2f5026301c75c3cf57364025cbc28fbed24b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00588f7308aa88662281226f41e2f5026301c75c3cf57364025cbc28fbed24b0->enter($__internal_00588f7308aa88662281226f41e2f5026301c75c3cf57364025cbc28fbed24b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_bc5a8e39a83ba1fb50d6ce95bedf5b7567e403e046a8f8a17627ade87c1e6036 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc5a8e39a83ba1fb50d6ce95bedf5b7567e403e046a8f8a17627ade87c1e6036->enter($__internal_bc5a8e39a83ba1fb50d6ce95bedf5b7567e403e046a8f8a17627ade87c1e6036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_00588f7308aa88662281226f41e2f5026301c75c3cf57364025cbc28fbed24b0->leave($__internal_00588f7308aa88662281226f41e2f5026301c75c3cf57364025cbc28fbed24b0_prof);

        
        $__internal_bc5a8e39a83ba1fb50d6ce95bedf5b7567e403e046a8f8a17627ade87c1e6036->leave($__internal_bc5a8e39a83ba1fb50d6ce95bedf5b7567e403e046a8f8a17627ade87c1e6036_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
