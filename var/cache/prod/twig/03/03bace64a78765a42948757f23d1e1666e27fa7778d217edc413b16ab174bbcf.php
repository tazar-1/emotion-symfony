<?php

/* EmotionBundle:Default:index.html.twig */
class __TwigTemplate_3956d338a64d99c2eb574303ee35c16e6089de84f9d5594457986da994a92235 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EmotionBundle:Default:index.html.twig", 1);
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

    <div class=\"main\">
        <div class=\"landings\">
            <section class=\"header\">
                <div class=\"wrapper\">
                    <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/images/image_cl__.png"), "html", null, true);
        echo "\" alt=\"BLIBLABLU\" class=\"image\">
                </div>
            </section>

            <section class=\"formulaire section_3\">
                <div class=\"wrapper\">
                    <h3>Votre trajet :</h3>
                    <div class=\"formulaires\">
                        <article class=\"main-content\">
                            <form method=\"POST\">
                                <div class=\"form-group\">
                                    <!-- <label>Ville de départ</label> -->
                                    <input id=\"ville_depart\" name=\"ville_depart\" placeholder=\"Ville de départ\" class=\"input-control\" />
                                </div>
                                <div class=\"form-group\">
                                    <!-- <label>City,State,Zip</label> -->
                                    <input id=\"date_dispo\" name=\"date_dispo\" class=\"input-control\" placeholder=\"Start Date\"/>
                                    <input id=\"date_fin_dispo\" name=\"date_fin_dispo\" class=\"input-control\" placeholder=\"End Date\" />
                                    <input id=\"nb_kilometres\" name=\"nb_kilometres\" class=\"input-control\" placeholder=\"Km\"/>
                                </div>
                                <input type=\"submit\" value=\"Réserver\">
                            </form>
                            <!-- <div class=\"form-group\">
                                <label>&nbsp;</label>
                                <button>Save</button>
                                <button>Cancel</button>
                            </div> -->
                        </article>

                    </div>
                    <div class=\"voit_scoot\">
                        <h3>Le véhicule que vous souhaitez :</h3>
                        <ul>
                            <li class=\"dropdown\" class=\"voitures\">
                                <a href=\"javascript:void(0)\" class=\"dropbtn\"><img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/images/voiture-accueil.png"), "html", null, true);
        echo "\" alt=\"BLIBLABLU\" class=\"image\">
                                    <div class=\"overlay\">
                                        <!-- <div class=\"text\">Voitures</div> -->
                                    </div></a>
                                <div class=\"dropdown-content\">
                                    <a href=\"#\">Link 1</a>
                                    <a href=\"#\">Link 2</a>
                                    <a href=\"#\">Link 3</a>
                                </div>
                            </li>
                            <li class=\"dropdown\" class=\"scooters\">
                                <a href=\"javascript:void(0)\" class=\"dropbtn\"><img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/images/scooter-accueil.png"), "html", null, true);
        echo "\" alt=\"BLIBLABLU\" class=\"image\">
                                    <div class=\"overlay\">
                                        <!-- <div class=\"text\">Scooters</div> -->
                                    </div></a>
                                <div class=\"dropdown-content\">
                                    <a href=\"#\">Link 4</a>
                                    <a href=\"#\">Link 5</a>
                                    <a href=\"#\">Link 6</a>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- <button type=\"submit\">Submit</button> -->
                </div>
            </section>

            <section class=\"rubriques_services section_4\">
                <div class=\"wrapper\">
                    <div class=\"footer_description \">
                        <a href=\"about_us.html\">
                            <div class=\"img_section_7\"><img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/images/icons/arg_satis.svg"), "html", null, true);
        echo "\" alt=\"Icon Measure Your Campaigns\"></div>
                            <h3 class=\"\">Des clients satisfaits</h3>
                            <p class=\"description\">98% de retours positifs.</p>
                        </a>
                    </div>
                    <div class=\"footer_description \">
                        <a href=\"about_us.html\">
                            <div class=\"img_section_7\"><img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/images/icons/arg_eco.svg"), "html", null, true);
        echo "\" alt=\"Icon Follow Your Competition\"></div>
                            <h3 class=\"\">Une planète préservée</h3>
                            <p class=\"description\">Déjà 20 tonnes de carbonnes épargné.</p>
                        </a>
                    </div>
                    <div class=\"footer_description\">
                        <a href=\"about_us.html\">
                            <div class=\"img_section_7\"><img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/images/icons/arg_couv.svg"), "html", null, true);
        echo "\" alt=\"Icon Scout For New Talent\"></div>
                            <h3 class=\"\">Une couverture nationale</h3>
                            <p class=\"description\">eMtion est présent dans toute la France.</p>
                        </a>
                    </div>
                </div>
            </section>
        </div>


    </div>
";
    }

    // line 107
    public function block_javascripts($context, array $blocks = array())
    {
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 110
    public function block_footer($context, array $blocks = array())
    {
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "EmotionBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 110,  170 => 107,  154 => 94,  144 => 87,  134 => 80,  110 => 59,  96 => 48,  59 => 14,  48 => 8,  40 => 5,  32 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EmotionBundle:Default:index.html.twig", "D:\\Logiciels\\wamp64\\www\\emotion\\src\\EmotionBundle/Resources/views/Default/index.html.twig");
    }
}
