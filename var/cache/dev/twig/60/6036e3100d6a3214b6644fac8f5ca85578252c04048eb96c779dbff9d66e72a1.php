<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_090a497550a3d612f9916fc406230fcf0d812ebee7cdbc3338ec3eefb3137a41 extends Twig_Template
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
        $__internal_80b9f5731efaeb009513622cc17ea487bd9fac6012f160683e6bb15c0ce5aa0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80b9f5731efaeb009513622cc17ea487bd9fac6012f160683e6bb15c0ce5aa0e->enter($__internal_80b9f5731efaeb009513622cc17ea487bd9fac6012f160683e6bb15c0ce5aa0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_791b581458ab63285fe261ac181dee6d72dbd17e0807362b5f6be6141973e9f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_791b581458ab63285fe261ac181dee6d72dbd17e0807362b5f6be6141973e9f5->enter($__internal_791b581458ab63285fe261ac181dee6d72dbd17e0807362b5f6be6141973e9f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_80b9f5731efaeb009513622cc17ea487bd9fac6012f160683e6bb15c0ce5aa0e->leave($__internal_80b9f5731efaeb009513622cc17ea487bd9fac6012f160683e6bb15c0ce5aa0e_prof);

        
        $__internal_791b581458ab63285fe261ac181dee6d72dbd17e0807362b5f6be6141973e9f5->leave($__internal_791b581458ab63285fe261ac181dee6d72dbd17e0807362b5f6be6141973e9f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
