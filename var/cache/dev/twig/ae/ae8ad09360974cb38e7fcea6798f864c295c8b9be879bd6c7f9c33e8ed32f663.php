<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_a06e7164368eb0d005de9b00500a9ec1bfbf0d81da7a7c27fe49e8a7b68cb158 extends Twig_Template
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
        $__internal_dd1667e11bd8006c364585092cd3eb12f26a5a97d75aa924228bb1cef205979d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd1667e11bd8006c364585092cd3eb12f26a5a97d75aa924228bb1cef205979d->enter($__internal_dd1667e11bd8006c364585092cd3eb12f26a5a97d75aa924228bb1cef205979d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_353afc8fb9341b20d208fea422804a7b885351210fd1225eec94a48d7e08fd35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_353afc8fb9341b20d208fea422804a7b885351210fd1225eec94a48d7e08fd35->enter($__internal_353afc8fb9341b20d208fea422804a7b885351210fd1225eec94a48d7e08fd35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_dd1667e11bd8006c364585092cd3eb12f26a5a97d75aa924228bb1cef205979d->leave($__internal_dd1667e11bd8006c364585092cd3eb12f26a5a97d75aa924228bb1cef205979d_prof);

        
        $__internal_353afc8fb9341b20d208fea422804a7b885351210fd1225eec94a48d7e08fd35->leave($__internal_353afc8fb9341b20d208fea422804a7b885351210fd1225eec94a48d7e08fd35_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
