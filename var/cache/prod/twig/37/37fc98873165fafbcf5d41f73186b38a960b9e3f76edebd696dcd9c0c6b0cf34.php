<?php

/* EmotionBundle:Form:vehicule.html.twig */
class __TwigTemplate_a524726481ef4eeaf5fcd080d6f6ef0f0281df1b4b2f7bb325ce47698de44789 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EmotionBundle:Form:vehicule.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
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
        // line 4
        echo "    eMotion - Le site de Location écologique de Voiture et Scooter
";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<a name=\"top\"></a>
<div class=\"main\">

    <div class=\"cars\">
        <section class=\"section_turquoise header_vehicules\">
            <div class=\"comp_buttons\">
                <div class=\"btn_mid\">
                    <button class=\"btn_w\">
                        <a href=\"cars.html\">Voitures</a>
                    </button>
                </div>
                <div class=\"btn_mid\">
                    <button class=\"btn_w\">
                        <a href=\"scooters.html\">Scooters</a>
                    </button>
                </div>
            </div>
            <!-- <h3>Moyens pour gagner des points de fidélités</h3>
            <div class=\"border_bottom\"></div>
            <p class=\"text_entete\">
                Maintenant, chaque fois que vous achetez, vous pouvez gagner des points de fidélités pouvant être échangés contre d'éventuels rabais et économies. Nos avantages spéciaux incluent des points de fidélités pour s'inscrire, gagner des points fidélités pour chaque euro dépensé, des points pour le parainage d'un ami, des jours avec récompense de points de fidélités et encore plus de surprises en cours de route.
            </p> -->
        </section>
        <!-- <div class=\"diagonale\"></div> -->
        <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/images/wave.svg"), "html", null, true);
        echo "\" alt=\"BLIBLABLU\" class=\"wave\">

        <section class=\"section_gray_light\">
            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["TabVehicule"]) ? $context["TabVehicule"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 40
            echo "                <aticle class=\"veh\">
                    <div class=\"car_img\">
                        <img src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["t"], "image", array())), "html", null, true);
            echo "\" alt=\"BLIBLABLU\" class=\"images\">
                    </div>
                    <div class=\"veh_text\">
                        <div class=\"container_1\">
                            <h1>
                                <span>20017 </span> <span>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "marque", array()), "html", null, true);
            echo "</span><span>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "model", array()), "html", null, true);
            echo "</span>
                            </h1>
                            <div class=\"container_stars\">
                                <fieldset class=\"rating\">
                                    <input type=\"radio\" id=\"star5\" name=\"rating\" value=\"5\" /><label class = \"full\" for=\"star5\" title=\"Awesome - 5 stars\"></label>
                                    <input type=\"radio\" id=\"star4half\" name=\"rating\" value=\"4 and a half\" /><label class=\"half\" for=\"star4half\" title=\"Pretty good - 4.5 stars\"></label>
                                    <input type=\"radio\" id=\"star4\" name=\"rating\" value=\"4\" /><label class = \"full\" for=\"star4\" title=\"Pretty good - 4 stars\"></label>
                                    <input type=\"radio\" id=\"star3half\" name=\"rating\" value=\"3 and a half\" /><label class=\"half\" for=\"star3half\" title=\"Meh - 3.5 stars\"></label>
                                    <input type=\"radio\" id=\"star3\" name=\"rating\" value=\"3\" /><label class = \"full\" for=\"star3\" title=\"Meh - 3 stars\"></label>
                                    <input type=\"radio\" id=\"star2half\" name=\"rating\" value=\"2 and a half\" /><label class=\"half\" for=\"star2half\" title=\"Kinda bad - 2.5 stars\"></label>
                                    <input type=\"radio\" id=\"star2\" name=\"rating\" value=\"2\" /><label class = \"full\" for=\"star2\" title=\"Kinda bad - 2 stars\"></label>
                                    <input type=\"radio\" id=\"star1half\" name=\"rating\" value=\"1 and a half\" /><label class=\"half\" for=\"star1half\" title=\"Meh - 1.5 stars\"></label>
                                    <input type=\"radio\" id=\"star1\" name=\"rating\" value=\"1\" /><label class = \"full\" for=\"star1\" title=\"Sucks big time - 1 star\"></label>
                                    <input type=\"radio\" id=\"starhalf\" name=\"rating\" value=\"half\" /><label class=\"half\" for=\"starhalf\" title=\"Sucks big time - 0.5 stars\"></label>
                                </fieldset>
                            </div>
                        </div>

                        <div class=\"container_2\">
                            <div class=\"price_time\">
                                <div class=\"price\">
                                    ";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "prixachat", array()), "html", null, true);
            echo "
                                </div>
                                <div class=\"time\">Heure</div>
                            </div>
                            <div class=\"price_time\">
                                <div class=\"price\">";
            // line 73
            echo twig_escape_filter($this->env, ($this->getAttribute($context["t"], "prixachat", array()) * 24), "html", null, true);
            echo "</div>
                                <div class=\"time\">Jour</div>
                            </div>
                            <div class=\"price_time\">
                                <div class=\"price\">";
            // line 77
            echo twig_escape_filter($this->env, ($this->getAttribute($context["t"], "prixachat", array()) * 720), "html", null, true);
            echo "</div>
                                <div class=\"time\">Mois</div>
                            </div>
                        </div>

                        <div class=\"container_3\">
                             
                        </div>
                    </div>
                </aticle>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "        </section>
    </div>

</div>

";
    }

    // line 95
    public function block_footer($context, array $blocks = array())
    {
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "EmotionBundle:Form:vehicule.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 95,  158 => 88,  141 => 77,  134 => 73,  126 => 68,  100 => 47,  92 => 42,  88 => 40,  84 => 39,  78 => 36,  48 => 11,  39 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EmotionBundle:Form:vehicule.html.twig", "/Applications/MAMP/htdocs/emotion-symfony/src/EmotionBundle/Resources/views/Form/vehicule.html.twig");
    }
}
