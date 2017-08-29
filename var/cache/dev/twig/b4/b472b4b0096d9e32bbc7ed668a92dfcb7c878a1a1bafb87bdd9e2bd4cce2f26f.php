<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_c575f7fb2255663e23e6e1816d182c5971957fe224247c11a41924491fc0fc66 extends Twig_Template
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
        $__internal_bc91e4bd37072fd013ec2ab55e88de71742c2f3bc693e8db4a7639fac4d37e38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc91e4bd37072fd013ec2ab55e88de71742c2f3bc693e8db4a7639fac4d37e38->enter($__internal_bc91e4bd37072fd013ec2ab55e88de71742c2f3bc693e8db4a7639fac4d37e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_947781085d958680d356a567060a0ff2e3afc8dbd6ec8186a6c3cae99fe7102e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_947781085d958680d356a567060a0ff2e3afc8dbd6ec8186a6c3cae99fe7102e->enter($__internal_947781085d958680d356a567060a0ff2e3afc8dbd6ec8186a6c3cae99fe7102e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_bc91e4bd37072fd013ec2ab55e88de71742c2f3bc693e8db4a7639fac4d37e38->leave($__internal_bc91e4bd37072fd013ec2ab55e88de71742c2f3bc693e8db4a7639fac4d37e38_prof);

        
        $__internal_947781085d958680d356a567060a0ff2e3afc8dbd6ec8186a6c3cae99fe7102e->leave($__internal_947781085d958680d356a567060a0ff2e3afc8dbd6ec8186a6c3cae99fe7102e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
