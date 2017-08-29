<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_a979395d400e22d50ef680b2077d70795445f94a943fb6e9fe6d9c90d6d797ab extends Twig_Template
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
        $__internal_46d3cffc86710030e371c71fb6e096e20c4939d5026fc6479a4f373e7a1484d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46d3cffc86710030e371c71fb6e096e20c4939d5026fc6479a4f373e7a1484d1->enter($__internal_46d3cffc86710030e371c71fb6e096e20c4939d5026fc6479a4f373e7a1484d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_7e3e1709493f612df5d9bc6406a98fb1c66f2e4d3bee2b07e3fc4279118e445a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e3e1709493f612df5d9bc6406a98fb1c66f2e4d3bee2b07e3fc4279118e445a->enter($__internal_7e3e1709493f612df5d9bc6406a98fb1c66f2e4d3bee2b07e3fc4279118e445a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_46d3cffc86710030e371c71fb6e096e20c4939d5026fc6479a4f373e7a1484d1->leave($__internal_46d3cffc86710030e371c71fb6e096e20c4939d5026fc6479a4f373e7a1484d1_prof);

        
        $__internal_7e3e1709493f612df5d9bc6406a98fb1c66f2e4d3bee2b07e3fc4279118e445a->leave($__internal_7e3e1709493f612df5d9bc6406a98fb1c66f2e4d3bee2b07e3fc4279118e445a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
