<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_40bc516a5fa62333c44f5a9b218b6061a194371a9380388db3d5503a836cd349 extends Twig_Template
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
        $__internal_e43764524a9a05c684be9bf6d128e34fb0f16189006c2246ad5c848ff8a6c322 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e43764524a9a05c684be9bf6d128e34fb0f16189006c2246ad5c848ff8a6c322->enter($__internal_e43764524a9a05c684be9bf6d128e34fb0f16189006c2246ad5c848ff8a6c322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_2ff7d15e30e0f9a2c9d9eac385bcb162bc4a28164ab1d549ec844aeb2609eefc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ff7d15e30e0f9a2c9d9eac385bcb162bc4a28164ab1d549ec844aeb2609eefc->enter($__internal_2ff7d15e30e0f9a2c9d9eac385bcb162bc4a28164ab1d549ec844aeb2609eefc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e43764524a9a05c684be9bf6d128e34fb0f16189006c2246ad5c848ff8a6c322->leave($__internal_e43764524a9a05c684be9bf6d128e34fb0f16189006c2246ad5c848ff8a6c322_prof);

        
        $__internal_2ff7d15e30e0f9a2c9d9eac385bcb162bc4a28164ab1d549ec844aeb2609eefc->leave($__internal_2ff7d15e30e0f9a2c9d9eac385bcb162bc4a28164ab1d549ec844aeb2609eefc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
