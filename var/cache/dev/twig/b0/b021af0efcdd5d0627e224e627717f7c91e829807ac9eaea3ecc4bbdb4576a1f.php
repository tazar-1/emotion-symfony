<?php

/* EmotionBundle:Default:index.html.twig */
class __TwigTemplate_b1416027f793c809e11be6714b73a47cac45fd43c27fcdcf2dc994a4c417e8c7 extends Twig_Template
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
        $__internal_7b26240cc4194a713c7bf66ebf999494c9d3b44802d00efc0584027c4bc6ac10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b26240cc4194a713c7bf66ebf999494c9d3b44802d00efc0584027c4bc6ac10->enter($__internal_7b26240cc4194a713c7bf66ebf999494c9d3b44802d00efc0584027c4bc6ac10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EmotionBundle:Default:index.html.twig"));

        $__internal_11d4fb7df6107ff9c6f7eaed78d3a2896d2a26758a3a41d8952b1b41b8590084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11d4fb7df6107ff9c6f7eaed78d3a2896d2a26758a3a41d8952b1b41b8590084->enter($__internal_11d4fb7df6107ff9c6f7eaed78d3a2896d2a26758a3a41d8952b1b41b8590084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EmotionBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b26240cc4194a713c7bf66ebf999494c9d3b44802d00efc0584027c4bc6ac10->leave($__internal_7b26240cc4194a713c7bf66ebf999494c9d3b44802d00efc0584027c4bc6ac10_prof);

        
        $__internal_11d4fb7df6107ff9c6f7eaed78d3a2896d2a26758a3a41d8952b1b41b8590084->leave($__internal_11d4fb7df6107ff9c6f7eaed78d3a2896d2a26758a3a41d8952b1b41b8590084_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f688732d84380146a7605d0b89edbc07e0380537e4a0220a361adf7aea384879 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f688732d84380146a7605d0b89edbc07e0380537e4a0220a361adf7aea384879->enter($__internal_f688732d84380146a7605d0b89edbc07e0380537e4a0220a361adf7aea384879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ae6bcb7f5fe28326e68c5eaf1539af8cb54c2705b58dae0c7229e2726e912044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae6bcb7f5fe28326e68c5eaf1539af8cb54c2705b58dae0c7229e2726e912044->enter($__internal_ae6bcb7f5fe28326e68c5eaf1539af8cb54c2705b58dae0c7229e2726e912044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ae6bcb7f5fe28326e68c5eaf1539af8cb54c2705b58dae0c7229e2726e912044->leave($__internal_ae6bcb7f5fe28326e68c5eaf1539af8cb54c2705b58dae0c7229e2726e912044_prof);

        
        $__internal_f688732d84380146a7605d0b89edbc07e0380537e4a0220a361adf7aea384879->leave($__internal_f688732d84380146a7605d0b89edbc07e0380537e4a0220a361adf7aea384879_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_315ac376a0be8ea5ccff14bccf81eeac0f9ba69e8a219f585ae0680f86cf4486 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_315ac376a0be8ea5ccff14bccf81eeac0f9ba69e8a219f585ae0680f86cf4486->enter($__internal_315ac376a0be8ea5ccff14bccf81eeac0f9ba69e8a219f585ae0680f86cf4486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_59297cfd7b6cd7ed27fb88833693a3013e952ee57020a034b2e6eafa481f1981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59297cfd7b6cd7ed27fb88833693a3013e952ee57020a034b2e6eafa481f1981->enter($__internal_59297cfd7b6cd7ed27fb88833693a3013e952ee57020a034b2e6eafa481f1981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_59297cfd7b6cd7ed27fb88833693a3013e952ee57020a034b2e6eafa481f1981->leave($__internal_59297cfd7b6cd7ed27fb88833693a3013e952ee57020a034b2e6eafa481f1981_prof);

        
        $__internal_315ac376a0be8ea5ccff14bccf81eeac0f9ba69e8a219f585ae0680f86cf4486->leave($__internal_315ac376a0be8ea5ccff14bccf81eeac0f9ba69e8a219f585ae0680f86cf4486_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e6da6b17f03fe0ccdc89562981fdadebc7d48b7fc0c5e44387ee7efec18af58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e6da6b17f03fe0ccdc89562981fdadebc7d48b7fc0c5e44387ee7efec18af58->enter($__internal_4e6da6b17f03fe0ccdc89562981fdadebc7d48b7fc0c5e44387ee7efec18af58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2098f3823ac28e2b3600dd57771206b0ec10cb488c48eb08517a7a6b7f6ae936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2098f3823ac28e2b3600dd57771206b0ec10cb488c48eb08517a7a6b7f6ae936->enter($__internal_2098f3823ac28e2b3600dd57771206b0ec10cb488c48eb08517a7a6b7f6ae936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2098f3823ac28e2b3600dd57771206b0ec10cb488c48eb08517a7a6b7f6ae936->leave($__internal_2098f3823ac28e2b3600dd57771206b0ec10cb488c48eb08517a7a6b7f6ae936_prof);

        
        $__internal_4e6da6b17f03fe0ccdc89562981fdadebc7d48b7fc0c5e44387ee7efec18af58->leave($__internal_4e6da6b17f03fe0ccdc89562981fdadebc7d48b7fc0c5e44387ee7efec18af58_prof);

    }

    // line 107
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5ee3560c77297493ee83acf4f851f065931e22b191c983810c1f82126a3c74ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ee3560c77297493ee83acf4f851f065931e22b191c983810c1f82126a3c74ac->enter($__internal_5ee3560c77297493ee83acf4f851f065931e22b191c983810c1f82126a3c74ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1307161f1a73317a89c769ee86cd430fa83e6a0c45bd843372b7def7c2fd2cbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1307161f1a73317a89c769ee86cd430fa83e6a0c45bd843372b7def7c2fd2cbe->enter($__internal_1307161f1a73317a89c769ee86cd430fa83e6a0c45bd843372b7def7c2fd2cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_1307161f1a73317a89c769ee86cd430fa83e6a0c45bd843372b7def7c2fd2cbe->leave($__internal_1307161f1a73317a89c769ee86cd430fa83e6a0c45bd843372b7def7c2fd2cbe_prof);

        
        $__internal_5ee3560c77297493ee83acf4f851f065931e22b191c983810c1f82126a3c74ac->leave($__internal_5ee3560c77297493ee83acf4f851f065931e22b191c983810c1f82126a3c74ac_prof);

    }

    // line 110
    public function block_footer($context, array $blocks = array())
    {
        $__internal_ed2b8c23199ef0eb346e2871b38ef59b7b74e747abc9b2529e258445e5edccdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed2b8c23199ef0eb346e2871b38ef59b7b74e747abc9b2529e258445e5edccdc->enter($__internal_ed2b8c23199ef0eb346e2871b38ef59b7b74e747abc9b2529e258445e5edccdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_54cfc6d438e93e26982b4db0e0e092630a2e57c0a8277b42e740cd3eb4c0b74d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54cfc6d438e93e26982b4db0e0e092630a2e57c0a8277b42e740cd3eb4c0b74d->enter($__internal_54cfc6d438e93e26982b4db0e0e092630a2e57c0a8277b42e740cd3eb4c0b74d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
        
        $__internal_54cfc6d438e93e26982b4db0e0e092630a2e57c0a8277b42e740cd3eb4c0b74d->leave($__internal_54cfc6d438e93e26982b4db0e0e092630a2e57c0a8277b42e740cd3eb4c0b74d_prof);

        
        $__internal_ed2b8c23199ef0eb346e2871b38ef59b7b74e747abc9b2529e258445e5edccdc->leave($__internal_ed2b8c23199ef0eb346e2871b38ef59b7b74e747abc9b2529e258445e5edccdc_prof);

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
{% endblock %}", "EmotionBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/emotion-symfony/src/EmotionBundle/Resources/views/Default/index.html.twig");
    }
}
