<?php

/* EmotionBundle:Default:about_us.html.twig */
class __TwigTemplate_a801675539fb2aa8e62971f1134c70900118dcf4f9f0e24b48be85fc7a03451c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EmotionBundle:Default:about_us.html.twig", 1);
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

    <div class=\"about_us\">

        <section class=\"services\">

            <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/images/img-prez.jpg"), "html", null, true);
        echo "\" alt=\"BLIBLABLU\" class=\"image\">

            <div class=\"container_text_vid\">
                <div class=\"text_e\">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in elementum nisl. Integer a nibh non libero efficitur finibus ut sit amet tellus. Ut mattis porttitor lectus vitae feugiat. Etiam interdum sit amet nulla eu mattis. Curabitur vehicula a nulla nec ornare. Donec fringilla tortor sit amet augue imperdiet, quis porttitor magna maximus. Etiam elementum massa sed tellus tristique finibus. Mauris efficitur velit a neque malesuada tempor. In hac habitasse platea dictumst.
                    </p>
                    <p>
                        Curabitur metus urna, tincidunt quis arcu eget, efficitur accumsan ex. Donec sed nulla sed mi faucibus sagittis et ultrices augue. Nullam a hendrerit dolor, et tempus erat. Vestibulum finibus nunc non tristique vehicula. Etiam ullamcorper dolor augue. Vivamus eget pulvinar ligula, quis commodo urna. Sed vel enim ultricies, dignissim sem id, placerat massa. Curabitur aliquet vestibulum nisl, in sagittis elit. Nam volutpat gravida tortor nec tempor. Morbi suscipit eros purus, in bibendum lorem pharetra id. Nunc sed convallis urna. Sed varius sed tortor in aliquam.
                    </p>
                </div>
                <div class=\"video_e\">
                    <video controls>
                        <source src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/videos/eMotion_presentation.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\">
                        <source src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/videos/eMotion_presentation.ogg"), "html", null, true);
        echo "\" type=\"video/ogg\">
                        <source src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/videos/eMotion_presentation.webm"), "html", null, true);
        echo "\" type=\"video/webm\">
                    </video>
                </div>
            </div>

        </section>

        <section class=\"rubriques_services section_4\">

            <h3>Nos services</h3>
            <div class=\"border_bottom\"></div>
            <div class=\"wrapper\">
                <div class=\"footer_description \">
                    <div class=\"img_section_7\"><img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/images/icons/arg_satis.svg"), "html", null, true);
        echo "\" alt=\"Icon Measure Your Campaigns\"></div>
                    <h3 class=\"\">Des clients satisfaits</h3>
                    <p class=\"description\">Nous avons la souplesse d'une startup et pouvons répondre à vos questions sur l'électrique.
                        Notre objectif est que vous soyez satisfait et que vous parliez de nous autour de vous. Un sondage réalisé début 2017 auprès de nos clients met en avant un taux de satisfaction de 98,4%</p>
                </div>
                <div class=\"footer_description \">
                    <div class=\"img_section_7\"><img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/images/icons/arg_eco.svg"), "html", null, true);
        echo "\" alt=\"Icon Follow Your Competition\"></div>
                    <h3 class=\"\">Une planète préservée</h3>
                    <p class=\"description\">Pour débuter cette aventure, nous avons choisi des véhicules conçus électriques (qui n’existent pas en version thermique) car ils sont plus différenciants et plus aptes à offrir une expérience de conduite nouvelle et surprenante.
                        Ainsi, vous pourrez prendre le volant de la Tesla Model S, de la BMW i8, ...</p>
                </div>
                <div class=\"footer_description\">
                    <div class=\"img_section_7\"><img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/images/icons/arg_couv.svg"), "html", null, true);
        echo "\" alt=\"Icon Scout For New Talent\"></div>
                    <h3 class=\"\">Une couverture nationale</h3>
                    <p class=\"description\">Accedebant a cuius salute velut filo pendere statum orbis terrarum fictis vocibus exclamabant.
                        Nous espérons que vous prendrez autant de plaisirs que nous à piloter ces véhicules</p>
                </div>
            </div>
        </section>

        <section class=\"rubriques_services section_4\">

            <h3>Notre équipe</h3>
            <div class=\"border_bottom\"></div>
            <div class=\"wrapper\">
                <div class=\"footer_description2 \">
                    <div class=\"img_section_7\"><img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/images/profil_01.png"), "html", null, true);
        echo "\" alt=\"Icon Measure Your Campaigns\"></div>
                    <h3 class=\"\">Jean-Mich Commercial</h3>
                    <h4 class=\"\">Fondateur</h4>
                    <p class=\"description\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet faucibus nisl, at tempus libero. Pellentesque lobortis ut eros sit amet imperdiet. Maecenas nec pretium diam. Sed consectetur cursus mauris, sed tristique odio faucibus eget.</p>
                </div>
                <div class=\"footer_description2 \">
                    <div class=\"img_section_7\"><img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/images/profil_02.png"), "html", null, true);
        echo "\" alt=\"Icon Follow Your Competition\"></div>
                    <h3 class=\"\">Jean-Mich Commercial</h3>
                    <h4 class=\"\">Fondateur</h4>
                    <p class=\"description\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet faucibus nisl, at tempus libero. Pellentesque lobortis ut eros sit amet imperdiet. Maecenas nec pretium diam. Sed consectetur cursus mauris, sed tristique odio faucibus eget.</p>
                </div>
                <div class=\"footer_description2\">
                    <div class=\"img_section_7\"><img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/images/profil_03.png"), "html", null, true);
        echo "\" alt=\"Icon Scout For New Talent\"></div>
                    <h3 class=\"\">Jean-Mich Commercial</h3>
                    <h4 class=\"\">Fondateur</h4>
                    <p class=\"description\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet faucibus nisl, at tempus libero. Pellentesque lobortis ut eros sit amet imperdiet. Maecenas nec pretium diam. Sed consectetur cursus mauris, sed tristique odio faucibus eget.</p>
                </div>
                <div class=\"footer_description2\">
                    <div class=\"img_section_7\"><img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/images/profil_04.png"), "html", null, true);
        echo "\" alt=\"Icon Scout For New Talent\"></div>
                    <h3 class=\"\">Jean-Mich Commercial</h3>
                    <h4 class=\"\">Fondateur</h4>
                    <p class=\"description\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet faucibus nisl, at tempus libero. Pellentesque lobortis ut eros sit amet imperdiet. Maecenas nec pretium diam. Sed consectetur cursus mauris, sed tristique odio faucibus eget.</p>
                </div>
            </div>
        </section>


        <section class=\"formulaire\">
            <div class=\"wrapper\">
                <article class=\"main-content\">

                    <h4>Nous contacter</h4>

                    <div class=\"form-group\">
                        <label>Nom :</label>
                        <input type=\"text\" value=\"\" class=\"input-control\" />
                    </div>

                    <div class=\"form-group\">
                        <label>Prénom :</label>
                        <input type=\"text\"  value=\"\" class=\"input-control\" />
                    </div>

                    <div class=\"form-group\">
                        <label>Sujet :</label>
                        <input type=\"text\"  value=\"\" class=\"input-control\" />
                    </div>

                    <div class=\"form-group\">
                        <label>Message :</label>
                        <textarea rows=\"6\" ></textarea>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"btn_mid\"><button class=\"btn_w\"> <a href=\"\">Envoyer</a> </button></div>
                    </div>

                </article>


            </div>
        </section>

    </div>

</div>


";
    }

    // line 140
    public function block_javascripts($context, array $blocks = array())
    {
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 143
    public function block_footer($context, array $blocks = array())
    {
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "EmotionBundle:Default:about_us.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 143,  218 => 140,  163 => 88,  154 => 82,  145 => 76,  136 => 70,  119 => 56,  110 => 50,  101 => 44,  85 => 31,  81 => 30,  77 => 29,  61 => 16,  48 => 8,  40 => 5,  32 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EmotionBundle:Default:about_us.html.twig", "D:\\Logiciels\\wamp64\\www\\emotion\\src\\EmotionBundle/Resources/views/Default/about_us.html.twig");
    }
}
