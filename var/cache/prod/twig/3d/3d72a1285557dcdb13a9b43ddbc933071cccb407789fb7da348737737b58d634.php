<?php

/* EmotionBundle:Form:filters.html.twig */
class __TwigTemplate_4e529a45e5712796b401fee1406114fee105e10e8ded2b0aa0642b43b7ec782d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EmotionBundle:Form:filters.html.twig", 1);
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

    <a name=\"top\"></a>
    <div class=\"main\">
        <div class=\"filters\">
            <section class=\"formulaires\">
                <div class=\"wrapper\">
                    <h3>Un titre, un titre et un titre</h3>
                    <div class=\"border_bottom\"></div>

                    <div class=\"formulaire\">
                        <article class=\"main-content-1\">
                            <article class=\"main-content form-filters\">

                                <h4>Détails réservation</h4>

                                <div class=\"form-group\">
                                    <label>Ville de départ :</label>
                                    <input type=\"text\" value=\"\" class=\"input-control\" />
                                </div>

                                <div class=\"form-group\">
                                    <label>Start date :</label>
                                    <input type=\"text\"  value=\"\" class=\"input-control\" />
                                </div>

                                <div class=\"form-group\">
                                    <label>End date :</label>
                                    <input type=\"text\"  value=\"\" class=\"input-control\" />
                                </div>

                                <div class=\"form-group\">
                                    <label>Km :</label>
                                    <input type=\"text\"  value=\"\" class=\"input-control\" />
                                </div>

                                <h4>Filtres</h4>

                                <div class=\"form-group\">
                                    <label>Voitures :</label>
                                    <div class=\"civi\">
                                        <label class=\"radio\">
                                            <input class=\"radio1\" type=\"radio\" name=\"radios\" checked>
                                            <span class=\"outer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"inner\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>Compact
                                        </label>
                                        <label class=\"radio\">
                                            <input class=\"radio2\" type=\"radio\" name=\"radios\">
                                            <span class=\"outer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"inner\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>Citadine
                                        </label>
                                        <label class=\"radio\">
                                            <input class=\"radio3\" type=\"radio\" name=\"radios\">
                                            <span class=\"outer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"inner\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>Berline
                                        </label>
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    <label>Scooters :</label>
                                    <div class=\"civi\">
                                        <label class=\"radio\">
                                            <input class=\"radio1\" type=\"radio\" name=\"radios\" checked>
                                            <span class=\"outer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"inner\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>EQ. 125CC
                                        </label>
                                        <label class=\"radio\">
                                            <input class=\"radio2\" type=\"radio\" name=\"radios\">
                                            <span class=\"outer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"inner\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>EQ. 50CC
                                        </label>
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    <div class=\"btn_mid\"><button class=\"btn_w\"> <a href=\"\">Filtrer</a> </button></div>
                                </div>

                            </article>

                            <article class=\"main-content card-filters\">

                              ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["TabVehicule"]) ? $context["TabVehicule"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 97
            echo "                                <h4>Nous avons trouvé 2 offres</h4>

                                <aticle class=\"veh\">
                                    <div class=\"car_img\">
                                        <img src=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["t"], "image", array())), "html", null, true);
            echo "\" class=\"images\">
                                    </div>
                                    <div class=\"veh_text\">
                                        <div class=\"container_1\">
                                            <h1>
                                                <span>2017 </span><span>";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "marque", array()), "html", null, true);
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
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "prix_achat", array()), "html", null, true);
            echo "
                                                </div>
                                                <div class=\"time\">Heure</div>
                                            </div>
                                            <div class=\"price_time\">
                                                <div class=\"price\">";
            // line 132
            echo twig_escape_filter($this->env, ($this->getAttribute($context["t"], "prix_achat", array()) * 24), "html", null, true);
            echo "</div>
                                                <div class=\"time\">Jour</div>
                                            </div>
                                            <div class=\"price_time\">
                                                <div class=\"price\">";
            // line 136
            echo twig_escape_filter($this->env, ($this->getAttribute($context["t"], "prix_achat", array()) * 720), "html", null, true);
            echo "</div>
                                                <div class=\"time\">Mois</div>
                                            </div>
                                        </div>

                                        <div class=\"container_3\">
                                            <div class=\"btn_mid\"><button class=\"btn_w\"> <a href=\"payment.html\">Réserver</a> </button></div>
                                        </div>
                                    </div>
                                </aticle>

                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "                            </article>

                        </article>
                    </div>
                </div>
            </section>
        </div>
    </div>

";
    }

    // line 159
    public function block_javascripts($context, array $blocks = array())
    {
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 162
    public function block_footer($context, array $blocks = array())
    {
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "EmotionBundle:Form:filters.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 162,  229 => 159,  216 => 148,  198 => 136,  191 => 132,  183 => 127,  159 => 106,  151 => 101,  145 => 97,  141 => 96,  48 => 8,  40 => 5,  32 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EmotionBundle:Form:filters.html.twig", "D:\\Logiciels\\wamp64\\www\\emotion\\src\\EmotionBundle/Resources/views/Form/filters.html.twig");
    }
}
