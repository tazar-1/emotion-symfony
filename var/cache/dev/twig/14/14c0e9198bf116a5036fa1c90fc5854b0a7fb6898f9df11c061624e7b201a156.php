<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_9e8a53a8f3573c2d38fd49424dca2e1b2edc4036dd887b1721d2fe5a9fb4938f extends Twig_Template
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
        $__internal_1bbd43544ca41ce885e4aa37d8dc807252272e28d6e087a2ee9e35f59c471151 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bbd43544ca41ce885e4aa37d8dc807252272e28d6e087a2ee9e35f59c471151->enter($__internal_1bbd43544ca41ce885e4aa37d8dc807252272e28d6e087a2ee9e35f59c471151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_8587c94f9f619b656f6835be7607ccbc2362ed2dba698977cfee3a8432586dd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8587c94f9f619b656f6835be7607ccbc2362ed2dba698977cfee3a8432586dd5->enter($__internal_8587c94f9f619b656f6835be7607ccbc2362ed2dba698977cfee3a8432586dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_1bbd43544ca41ce885e4aa37d8dc807252272e28d6e087a2ee9e35f59c471151->leave($__internal_1bbd43544ca41ce885e4aa37d8dc807252272e28d6e087a2ee9e35f59c471151_prof);

        
        $__internal_8587c94f9f619b656f6835be7607ccbc2362ed2dba698977cfee3a8432586dd5->leave($__internal_8587c94f9f619b656f6835be7607ccbc2362ed2dba698977cfee3a8432586dd5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
