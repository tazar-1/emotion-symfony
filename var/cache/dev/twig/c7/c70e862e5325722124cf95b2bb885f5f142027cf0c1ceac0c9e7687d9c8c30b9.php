<?php

/* EmotionBundle:Default:index.html.twig */
class __TwigTemplate_b45977287a8b8c36e4629b793616e1db3b36c6578af70df95bea77f66672eeeb extends Twig_Template
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
        $__internal_23235dcdd614e0857744ca576077cedd5534cea3585afdbdc9b8d37a7461a4d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23235dcdd614e0857744ca576077cedd5534cea3585afdbdc9b8d37a7461a4d9->enter($__internal_23235dcdd614e0857744ca576077cedd5534cea3585afdbdc9b8d37a7461a4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EmotionBundle:Default:index.html.twig"));

        $__internal_20444cb9ff7ec3d744320c1d5c49697853e13c8e0800e01ae55fd1aeae26cfb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20444cb9ff7ec3d744320c1d5c49697853e13c8e0800e01ae55fd1aeae26cfb3->enter($__internal_20444cb9ff7ec3d744320c1d5c49697853e13c8e0800e01ae55fd1aeae26cfb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EmotionBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23235dcdd614e0857744ca576077cedd5534cea3585afdbdc9b8d37a7461a4d9->leave($__internal_23235dcdd614e0857744ca576077cedd5534cea3585afdbdc9b8d37a7461a4d9_prof);

        
        $__internal_20444cb9ff7ec3d744320c1d5c49697853e13c8e0800e01ae55fd1aeae26cfb3->leave($__internal_20444cb9ff7ec3d744320c1d5c49697853e13c8e0800e01ae55fd1aeae26cfb3_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2576fd4134fecb7985910a62faf25fcdf4221cfa1730e870d39321d914863419 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2576fd4134fecb7985910a62faf25fcdf4221cfa1730e870d39321d914863419->enter($__internal_2576fd4134fecb7985910a62faf25fcdf4221cfa1730e870d39321d914863419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_47951e79e63bf20fea7a740d78ab3f8911e9d92078575115323555ef6b7f1889 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47951e79e63bf20fea7a740d78ab3f8911e9d92078575115323555ef6b7f1889->enter($__internal_47951e79e63bf20fea7a740d78ab3f8911e9d92078575115323555ef6b7f1889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_47951e79e63bf20fea7a740d78ab3f8911e9d92078575115323555ef6b7f1889->leave($__internal_47951e79e63bf20fea7a740d78ab3f8911e9d92078575115323555ef6b7f1889_prof);

        
        $__internal_2576fd4134fecb7985910a62faf25fcdf4221cfa1730e870d39321d914863419->leave($__internal_2576fd4134fecb7985910a62faf25fcdf4221cfa1730e870d39321d914863419_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3002fc7603aed2def561a3eac33ca2ee31660e3c2839328f50577f9dafc587d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3002fc7603aed2def561a3eac33ca2ee31660e3c2839328f50577f9dafc587d5->enter($__internal_3002fc7603aed2def561a3eac33ca2ee31660e3c2839328f50577f9dafc587d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0bc66138ef6d2135671c01eb2751f81b8440bbef8bc7eafc34f91990766ead07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bc66138ef6d2135671c01eb2751f81b8440bbef8bc7eafc34f91990766ead07->enter($__internal_0bc66138ef6d2135671c01eb2751f81b8440bbef8bc7eafc34f91990766ead07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_0bc66138ef6d2135671c01eb2751f81b8440bbef8bc7eafc34f91990766ead07->leave($__internal_0bc66138ef6d2135671c01eb2751f81b8440bbef8bc7eafc34f91990766ead07_prof);

        
        $__internal_3002fc7603aed2def561a3eac33ca2ee31660e3c2839328f50577f9dafc587d5->leave($__internal_3002fc7603aed2def561a3eac33ca2ee31660e3c2839328f50577f9dafc587d5_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_df91faf3a1a1b006ee73d54753236b8b0e76a2b4f22b91a74bf89de2e763f051 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df91faf3a1a1b006ee73d54753236b8b0e76a2b4f22b91a74bf89de2e763f051->enter($__internal_df91faf3a1a1b006ee73d54753236b8b0e76a2b4f22b91a74bf89de2e763f051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_42f8a16754a54f19c34afbec558a94a212c2bbc3a07f3d01bc17eb85871ed3b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42f8a16754a54f19c34afbec558a94a212c2bbc3a07f3d01bc17eb85871ed3b8->enter($__internal_42f8a16754a54f19c34afbec558a94a212c2bbc3a07f3d01bc17eb85871ed3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_42f8a16754a54f19c34afbec558a94a212c2bbc3a07f3d01bc17eb85871ed3b8->leave($__internal_42f8a16754a54f19c34afbec558a94a212c2bbc3a07f3d01bc17eb85871ed3b8_prof);

        
        $__internal_df91faf3a1a1b006ee73d54753236b8b0e76a2b4f22b91a74bf89de2e763f051->leave($__internal_df91faf3a1a1b006ee73d54753236b8b0e76a2b4f22b91a74bf89de2e763f051_prof);

    }

    // line 107
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c92c5c0f2c423d5b8e1cc8c7a8d42a7bba0a533719eb2cdd7b5c5241e19d24f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c92c5c0f2c423d5b8e1cc8c7a8d42a7bba0a533719eb2cdd7b5c5241e19d24f4->enter($__internal_c92c5c0f2c423d5b8e1cc8c7a8d42a7bba0a533719eb2cdd7b5c5241e19d24f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_68de0a68c1f0101e56459d978e5c8db85ea35ad86ca6f0e4468e937cad214a38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68de0a68c1f0101e56459d978e5c8db85ea35ad86ca6f0e4468e937cad214a38->enter($__internal_68de0a68c1f0101e56459d978e5c8db85ea35ad86ca6f0e4468e937cad214a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_68de0a68c1f0101e56459d978e5c8db85ea35ad86ca6f0e4468e937cad214a38->leave($__internal_68de0a68c1f0101e56459d978e5c8db85ea35ad86ca6f0e4468e937cad214a38_prof);

        
        $__internal_c92c5c0f2c423d5b8e1cc8c7a8d42a7bba0a533719eb2cdd7b5c5241e19d24f4->leave($__internal_c92c5c0f2c423d5b8e1cc8c7a8d42a7bba0a533719eb2cdd7b5c5241e19d24f4_prof);

    }

    // line 110
    public function block_footer($context, array $blocks = array())
    {
        $__internal_412fff414ab8e77fef1279bb346a9393ae377f2711ed13f16f0a72975478a7dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_412fff414ab8e77fef1279bb346a9393ae377f2711ed13f16f0a72975478a7dd->enter($__internal_412fff414ab8e77fef1279bb346a9393ae377f2711ed13f16f0a72975478a7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_7810730c83d4adb4f4f660b72b946dd992a490ec62843fc6519d22b9fd8066ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7810730c83d4adb4f4f660b72b946dd992a490ec62843fc6519d22b9fd8066ef->enter($__internal_7810730c83d4adb4f4f660b72b946dd992a490ec62843fc6519d22b9fd8066ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_7810730c83d4adb4f4f660b72b946dd992a490ec62843fc6519d22b9fd8066ef->leave($__internal_7810730c83d4adb4f4f660b72b946dd992a490ec62843fc6519d22b9fd8066ef_prof);

        
        $__internal_412fff414ab8e77fef1279bb346a9393ae377f2711ed13f16f0a72975478a7dd->leave($__internal_412fff414ab8e77fef1279bb346a9393ae377f2711ed13f16f0a72975478a7dd_prof);

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
        return array (  238 => 110,  218 => 107,  196 => 94,  186 => 87,  176 => 80,  152 => 59,  138 => 48,  101 => 14,  84 => 8,  64 => 5,  44 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%  extends '::base.html.twig' %}
{% block title %}{{ parent() }}
{% endblock %}

{% block stylesheets %}{{ parent() }}
{% endblock %}

{% block body %}{{ parent() }}

    <div class=\"main\">
        <div class=\"landings\">
            <section class=\"header\">
                <div class=\"wrapper\">
                    <img src=\"{{ asset('framework/images/image_cl__.png') }}\" alt=\"BLIBLABLU\" class=\"image\">
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
                                <a href=\"javascript:void(0)\" class=\"dropbtn\"><img src=\"{{ asset('framework/images/voiture-accueil.png') }}\" alt=\"BLIBLABLU\" class=\"image\">
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
                                <a href=\"javascript:void(0)\" class=\"dropbtn\"><img src=\"{{ asset('framework/images/scooter-accueil.png') }}\" alt=\"BLIBLABLU\" class=\"image\">
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
                            <div class=\"img_section_7\"><img src=\"{{ asset('framework/images/icons/arg_satis.svg') }}\" alt=\"Icon Measure Your Campaigns\"></div>
                            <h3 class=\"\">Des clients satisfaits</h3>
                            <p class=\"description\">98% de retours positifs.</p>
                        </a>
                    </div>
                    <div class=\"footer_description \">
                        <a href=\"about_us.html\">
                            <div class=\"img_section_7\"><img src=\"{{ asset('framework/images/icons/arg_eco.svg') }}\" alt=\"Icon Follow Your Competition\"></div>
                            <h3 class=\"\">Une planète préservée</h3>
                            <p class=\"description\">Déjà 20 tonnes de carbonnes épargné.</p>
                        </a>
                    </div>
                    <div class=\"footer_description\">
                        <a href=\"about_us.html\">
                            <div class=\"img_section_7\"><img src=\"{{ asset('framework/images/icons/arg_couv.svg') }}\" alt=\"Icon Scout For New Talent\"></div>
                            <h3 class=\"\">Une couverture nationale</h3>
                            <p class=\"description\">eMtion est présent dans toute la France.</p>
                        </a>
                    </div>
                </div>
            </section>
        </div>


    </div>
{% endblock %}

{% block javascripts %}{{ parent() }}
{% endblock %}

{% block footer %}{{ parent() }}
{% endblock %}", "EmotionBundle:Default:index.html.twig", "D:\\Logiciels\\wamp64\\www\\emotion\\src\\EmotionBundle/Resources/views/Default/index.html.twig");
    }
}
