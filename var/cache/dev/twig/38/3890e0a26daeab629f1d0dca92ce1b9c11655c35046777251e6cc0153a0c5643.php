<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_e827bb8971dc3d4b214c13959c84b1fbe4c8f72214a0f4839affa378c6f137bf extends Twig_Template
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
        $__internal_56786ce22d31c203027b8556562ab579e2b0d35db7b161674a5166427e7fe133 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56786ce22d31c203027b8556562ab579e2b0d35db7b161674a5166427e7fe133->enter($__internal_56786ce22d31c203027b8556562ab579e2b0d35db7b161674a5166427e7fe133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_d95cb0d4e298963b1b6edf02413ca339fbd124e02773102629f1d7938c6d0aff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d95cb0d4e298963b1b6edf02413ca339fbd124e02773102629f1d7938c6d0aff->enter($__internal_d95cb0d4e298963b1b6edf02413ca339fbd124e02773102629f1d7938c6d0aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_56786ce22d31c203027b8556562ab579e2b0d35db7b161674a5166427e7fe133->leave($__internal_56786ce22d31c203027b8556562ab579e2b0d35db7b161674a5166427e7fe133_prof);

        
        $__internal_d95cb0d4e298963b1b6edf02413ca339fbd124e02773102629f1d7938c6d0aff->leave($__internal_d95cb0d4e298963b1b6edf02413ca339fbd124e02773102629f1d7938c6d0aff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
