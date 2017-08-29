<?php

/* UserBundle::layout.html.twig */
class __TwigTemplate_69e003c87a06aa6918a7afb11ea730b0b628d4bae974c1102ac20515053b315a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('content', $context, $blocks);
    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        echo "Demo Application";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    testest
    ";
        // line 5
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "UserBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  37 => 3,  31 => 1,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "UserBundle::layout.html.twig", "/Applications/MAMP/htdocs/emotion-symfony/src/UserBundle/Resources/views/layout.html.twig");
    }
}
