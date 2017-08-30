<?php

/* @Emotion/Form/register.html.twig */
class __TwigTemplate_e62b61f4946e949593bfc1a738140716293a3ec916defa7ae146e2f3d95df842 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "@Emotion/Form/register.html.twig", 2);
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $this->displayParentBlock("body", $context, $blocks);
        echo "

<div class=\"sig\">
    <article class=\"main-content\">

        <h4>Inscrivez-vous c'est gratuit !</h4>

        <div class=\"form-group\">
            <div class=\"btn_mid\">
                <button class=\"btn_l_s\"> <a href=\"log.html\">Se connecter</a> </button>
                <button class=\"btn_l_s\"> <a href=\"sig.html\">S'inscrire</a> </button>
            </div>
        </div>
        ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "



        <div class=\"form-group\">
            <label>Prénom* :</label>
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prenom", array()), 'errors');
        echo "
            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

        </div>

        <div class=\"form-group\">
            <label>Nom* :</label>
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'errors');
        echo "
            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>

        <div class=\"form-group\">
            <label>E-mail :</label>
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'errors');
        echo "
            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>

        <div class=\"form-group\">
            <label>Mot de passe :</label>
            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), 'errors');
        echo "
            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>

        <div class=\"form-group\">
            <label>Date de naissance :</label>
            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "birthday", array()), 'errors');
        echo "
            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "birthday", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"form-group\">
            <label>Adresse Postal :</label>
            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "adresse", array()), 'errors');
        echo "
            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"form-group\">
            <label>Numéros de téléhpone :</label>
            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "phone", array()), 'errors');
        echo "
            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "phone", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
        <div class=\"form-group\">
            <div class=\"btn_mid\"><button class=\"btn_w\"> <a href=\"\">S'Inscrire</a> </button></div>
        </div>

    </article>

    ";
        // line 73
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

</div>

";
    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 82
    public function block_footer($context, array $blocks = array())
    {
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Emotion/Form/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 82,  174 => 79,  165 => 73,  154 => 65,  150 => 64,  143 => 60,  139 => 59,  132 => 55,  128 => 54,  120 => 49,  116 => 48,  108 => 43,  104 => 42,  96 => 37,  92 => 36,  83 => 30,  79 => 29,  70 => 23,  66 => 22,  48 => 9,  40 => 6,  32 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Emotion/Form/register.html.twig", "D:\\Logiciels\\wamp64\\www\\emotion\\src\\EmotionBundle\\Resources\\views\\Form\\register.html.twig");
    }
}
