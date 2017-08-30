<?php

/* EmotionBundle:Form:add_vehicule.html.twig */
class __TwigTemplate_fc35d161564520043347c612b8f1af9926c94f56c9bc82faf2714bd1d0b0b32d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EmotionBundle:Form:add_vehicule.html.twig", 1);
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

    <div class=\"container\"><br><br><br><br>
        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
        <div class=\"panel panel-primary\" style=\"margin:20px;\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">Ajouter un Vehicule</h3>
            </div>
            <div class=\"panel-body\">
                <form>
                    <div class=\"col-md-12 col-sm-12\">
                        <div class=\"form-group col-md-6 col-sm-6\">
                            <label for=\"marque\">Marque du Vehicule : <span class=\"red\">(*)</span></label>
                            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "marque", array()), 'errors');
        echo "
                            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "marque", array()), 'widget', array("attr" => array("class" => "form-control input-sm", "placeholder" => "Marque du Vehicule")));
        echo "
                        </div>
                        <div class=\"form-group col-md-6 col-sm-6\">
                            <label for=\"model\">Modèle du Vehicule : <span class=\"red\">(*)</span></label>
                            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "model", array()), 'errors');
        echo "
                            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "model", array()), 'widget', array("attr" => array("class" => "form-control input-sm", "placeholder" => "Modéle du Veicule")));
        echo "
                        </div>
                    <div class=\"col-md-12 col-sm-12\" id=\"deceased\">
                        <div class=\"form-group col-md-3 col-sm-3\">
                            <label for=\"num_serie\">Numéros de Série : <span class=\"red\">(*)</span></label>
                            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "num_serie", array()), 'errors');
        echo "
                            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "num_serie", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Numéros de Série")));
        echo "
                        </div>
                        <div class=\"form-group col-md-3 col-sm-3\">
                            <label for=\"couleur\">Couleur du Vehicule : <span class=\"red\">(*)</span></label>
                            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "couleur", array()), 'errors');
        echo "
                            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "couleur", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Couleur du Veicule")));
        echo "
                        </div>
                        <div class=\"form-group col-md-3 col-sm-3\">
                            <label for=\"villedepart\">Ville de Location : <span class=\"red\">(*)</span></label>
                            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "villedepart", array()), 'errors');
        echo "
                            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "villedepart", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ville de Location")));
        echo "
                        </div>
                        <div class=\"form-group col-md-3 col-sm-3\">
                            <label for=\"image\">Images : <span class=\"red\">(*)</span></label>
                            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "image", array()), 'errors');
        echo "
                            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "image", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                        <div class=\"form-group col-md-3 col-sm-3\">
                            <label for=\"immatriculation\">Immatriculation du Véhicule : <span class=\"red\">(*)</span></label>
                            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "immatriculation", array()), 'errors');
        echo "
                            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "immatriculation", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Immatriculation du Véhicule")));
        echo "
                        </div>
                        <div class=\"form-group col-md-3 col-sm-3\">
                            <label for=\"nbkilometres\">Nombres de Kilomètres : <span class=\"red\">(*)</span></label>
                            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nbkilometres", array()), 'errors');
        echo "
                            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nbkilometres", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nombres de Kilomètres")));
        echo "
                        </div>
                        <div class=\"form-group col-md-3 col-sm-3\">
                            <label for=\"prix_achat\">Prix d'Achat : <span class=\"red\">(*)</span></label>
                            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prix_achat", array()), 'errors');
        echo "
                            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prix_achat", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Prix d'Achat ")));
        echo "
                        </div>
                        <div class=\"form-group col-md-3 col-sm-3\">
                            <label for=\"dateachat\">Date d'Achat : <span class=\"red\">(*)</span></label>
                            ";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dateachat", array()), 'errors');
        echo "
                            ";
        // line 69
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "dateachat", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                    </div>

                    <div class=\"col-md-12 col-sm-12\" id=\"addblock\">
                        <div class=\"form-group col-md-3 col-sm-3\">
                            <input type='button' class=\"btn btn-primary\" value=\"Add\" id=\"add\"/>
                        </div>
                    </div>
                    <div class=\"col-md-12 col-sm-12\" >
                        <div class=\"form-group col-md-3 col-sm-3 pull-right\">
                            <input type='text' class=\"form-control input-sm\" id=\"amount\" readonly placeholder=\"Total Amount\"/>
                        </div>
                    </div>
                    <div class=\"col-md-12 col-sm-12\">
                        <div class=\"form-group col-md-3 col-sm-3 pull-right\" >
                            <input type=\"submit\" class=\"btn btn-primary\" value=\"Submit\"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        ";
        // line 91
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
    </div>
";
    }

    // line 95
    public function block_javascripts($context, array $blocks = array())
    {
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 98
    public function block_footer($context, array $blocks = array())
    {
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "EmotionBundle:Form:add_vehicule.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 98,  209 => 95,  202 => 91,  177 => 69,  173 => 68,  166 => 64,  162 => 63,  155 => 59,  151 => 58,  144 => 54,  140 => 53,  133 => 49,  129 => 48,  122 => 44,  118 => 43,  111 => 39,  107 => 38,  100 => 34,  96 => 33,  88 => 28,  84 => 27,  77 => 23,  73 => 22,  60 => 12,  56 => 11,  48 => 8,  40 => 5,  32 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EmotionBundle:Form:add_vehicule.html.twig", "D:\\Logiciels\\wamp64\\www\\emotion\\src\\EmotionBundle/Resources/views/Form/add_vehicule.html.twig");
    }
}
