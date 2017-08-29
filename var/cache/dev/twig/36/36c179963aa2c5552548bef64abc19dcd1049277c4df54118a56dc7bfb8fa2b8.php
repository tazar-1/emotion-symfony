<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_6c044566affe5f83db0708fd87ebed333f2c428ea9b96f9aaba808547d413e31 extends Twig_Template
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
        $__internal_ddb34e6ee4cf7c59cbeff19851a7703796ba8a99de785380a619cb6ba2e20a5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddb34e6ee4cf7c59cbeff19851a7703796ba8a99de785380a619cb6ba2e20a5d->enter($__internal_ddb34e6ee4cf7c59cbeff19851a7703796ba8a99de785380a619cb6ba2e20a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_cd283201eb324dc42f31fb603d0361fec426bb2daed5cdea75b4658a969032a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd283201eb324dc42f31fb603d0361fec426bb2daed5cdea75b4658a969032a7->enter($__internal_cd283201eb324dc42f31fb603d0361fec426bb2daed5cdea75b4658a969032a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_ddb34e6ee4cf7c59cbeff19851a7703796ba8a99de785380a619cb6ba2e20a5d->leave($__internal_ddb34e6ee4cf7c59cbeff19851a7703796ba8a99de785380a619cb6ba2e20a5d_prof);

        
        $__internal_cd283201eb324dc42f31fb603d0361fec426bb2daed5cdea75b4658a969032a7->leave($__internal_cd283201eb324dc42f31fb603d0361fec426bb2daed5cdea75b4658a969032a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Applications/MAMP/htdocs/emotion-symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
