<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_769f276bb7afd08b63bcc8af134ac0870a98e1b1f137d458ec78bd3cc9e8fe7f extends Twig_Template
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
        $__internal_31893987e7bac80e45b59c2cdb8e974aa08c316061dc6b5067c463e51685fafb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31893987e7bac80e45b59c2cdb8e974aa08c316061dc6b5067c463e51685fafb->enter($__internal_31893987e7bac80e45b59c2cdb8e974aa08c316061dc6b5067c463e51685fafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_17a91d906248e220291d3441bc33c0ba1698ed3f4616c63ba3ee8033b55b4571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17a91d906248e220291d3441bc33c0ba1698ed3f4616c63ba3ee8033b55b4571->enter($__internal_17a91d906248e220291d3441bc33c0ba1698ed3f4616c63ba3ee8033b55b4571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_31893987e7bac80e45b59c2cdb8e974aa08c316061dc6b5067c463e51685fafb->leave($__internal_31893987e7bac80e45b59c2cdb8e974aa08c316061dc6b5067c463e51685fafb_prof);

        
        $__internal_17a91d906248e220291d3441bc33c0ba1698ed3f4616c63ba3ee8033b55b4571->leave($__internal_17a91d906248e220291d3441bc33c0ba1698ed3f4616c63ba3ee8033b55b4571_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
