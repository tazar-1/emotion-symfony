<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_38f9faa4e4993fdba8231b43a239e30d2d196573e1fafc75c94060dbbb4ef957 extends Twig_Template
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
        $__internal_4d58830148af18a6e560f1bbcd7fb392363d72bcb225e00fc812e2db6930b1ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d58830148af18a6e560f1bbcd7fb392363d72bcb225e00fc812e2db6930b1ed->enter($__internal_4d58830148af18a6e560f1bbcd7fb392363d72bcb225e00fc812e2db6930b1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_bc079c6a0c53f9d7554ff5c7ad663f49e3ced1c83d946365569e25289f6116ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc079c6a0c53f9d7554ff5c7ad663f49e3ced1c83d946365569e25289f6116ec->enter($__internal_bc079c6a0c53f9d7554ff5c7ad663f49e3ced1c83d946365569e25289f6116ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4d58830148af18a6e560f1bbcd7fb392363d72bcb225e00fc812e2db6930b1ed->leave($__internal_4d58830148af18a6e560f1bbcd7fb392363d72bcb225e00fc812e2db6930b1ed_prof);

        
        $__internal_bc079c6a0c53f9d7554ff5c7ad663f49e3ced1c83d946365569e25289f6116ec->leave($__internal_bc079c6a0c53f9d7554ff5c7ad663f49e3ced1c83d946365569e25289f6116ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
