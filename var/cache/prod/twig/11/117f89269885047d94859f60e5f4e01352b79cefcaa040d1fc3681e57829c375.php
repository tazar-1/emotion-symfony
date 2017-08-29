<?php

/* EmotionBundle:Form:log_in.html.twig */
class __TwigTemplate_ebf9f6659decb571047073ad3b2c8de844fad472ef2f60b3869eb10171568a97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EmotionBundle:Form:log_in.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    <body style=\"background-color: #36b1ac;\">



        <div class=\"log\">

            <article class=\"main-content\">

                <h4>Connexion à votre compte !</h4>

                <div class=\"form-group\">
                    <div class=\"btn_mid\">
                        <button class=\"btn_l_s\"> <a href=\"log.html\">Se connecter</a> </button>
                        <button class=\"btn_l_s\"> <a href=\"sig.html\">S'inscrire</a> </button>
                    </div>
                </div>

                <div class=\"form-group\">
                    <label>E-mail :</label>
                    <input type=\"email\"  value=\"\" class=\"input-control\" />
                </div>

                <div class=\"form-group\">
                    <label>Mot de passe :</label>
                    <input type=\"password\"  value=\"\" class=\"input-control\" />
                </div>

                <div class=\"form-group\">
                    <div class=\"btn_mid\"><button class=\"btn_w\"> <a href=\"\">Se connecter</a> </button></div>
                </div>

            </article>


        </div>

    </body>

";
    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 53
    public function block_footer($context, array $blocks = array())
    {
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "EmotionBundle:Form:log_in.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 53,  95 => 50,  48 => 8,  40 => 5,  32 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EmotionBundle:Form:log_in.html.twig", "/Applications/MAMP/htdocs/emotion-symfony/src/EmotionBundle/Resources/views/Form/log_in.html.twig");
    }
}
