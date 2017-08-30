<?php

/* ::base.html.twig */
class __TwigTemplate_18b38ec7d555df321442ed47c5e0fea9237792a367d7cbef5f8305d43a106cec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>

    <head>
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "    </head>

    <body>
    ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "    </body>

    <footer>
        ";
        // line 49
        $this->displayBlock('footer', $context, $blocks);
        // line 97
        echo "    </footer>

</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "eMotion - Le site de Location écologique de Voiture et Scooter";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <meta charset=\"utf-8\" name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
            <meta name=“description” content=“Du text du text et du text.“>
            <meta property=“og:title” content=“eMotion”>
            <meta property=“og:type” content=“website”>
            <meta property=“og:url” content=“http://emotion.com“>
            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/images/favicon.ico"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/css/styles.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
            <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/js/scroll.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/js/nav_menu.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/js/animation.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/js/app.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        // line 24
        echo "        <div class=\"navi\">
            <header class=\"header container\">
                <div class=\"logo\"></div>
                <nav class=\"top-nav\">
                    <ul>
                        <li><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\" class=\"btn-border\">Accueil</a></li>
                        <li><a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about_us");
        echo "\" class=\"btn-border\">Présentation</a></li>
                        <li><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Vehicules");
        echo "\" class=\"btn-border\">Véhicules</a></li>
                        ";
        // line 32
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 33
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Compte");
            echo "\" class=\"btn-border\">Mon compte</a></li>
                            <li><a href=\"";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\" class=\"btn-log\">Déconnexion</a></li>
                        ";
        } else {
            // line 36
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" class=\"btn-log\">Connexion</a></li>
                        ";
        }
        // line 38
        echo "

                    </ul>
                </nav>
            </header>
        </div>
    ";
    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        // line 50
        echo "            <footer id=\"footer_index\">
            <div id=\"rubriques\">
                <div class=\"navigation\">
                    <h3>Navigation</h3>
                    <ul>
                        <li><a href=\"index.html\">Accueil</a></li>
                        <li><a href=\"mes_locations.html\">Réservations</a></li>
                        <li><a href=\"about_us.html\">About Us</a></li>
                        <li><a href=\"cars.html\">Véhicules</a></li>
                        <li>Plan du Site</li>
                        <li>CGV</li>
                    </ul>
                </div>
                <div id=\"share\">
                    <h3>Social</h3>
                    <div id=\"res_soc\">
                        <a href=\"\" class=\"footericon\" target=\"_blank \">
                            <img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/images/icons/twitter_e.svg"), "html", null, true);
        echo "\" alt=\"\">
                        </a>
                        <a href=\"\" class=\"footericon\" target=\"_blank \">
                            <img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/images/icons/facebook_e.svg"), "html", null, true);
        echo "\" alt=\"\">
                        </a>
                        <a href=\"\" class=\"footericon\" target=\"_blank \">
                            <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/images/icons/linkedin_e.svg"), "html", null, true);
        echo "\" alt=\"\">
                        </a>
                    </div>
                </div>
                <div id=\"nouscont_faq_cont\">
                    <h3>FAQ</h3>
                    <h3>Nous contacter</h3>
                    <ul>
                        <li><a href=\"mailto:contact@emotion.com?Subject=Tapez votre sujet\">contact@emotion.com</a></li>
                        <li>+33(0)1 23 45 67 89</li>
                        <li>77 rue de l'adresse</li>
                        <li>75000 AdressVille</li>
                    </ul>
                </div>
            </div>
            <div class=\"text-footer\">
                <div> &copy; 2017 eMotion GROUPE 5</div>
                <div id=\"terms-privacy\">
                    <div><a href=\"\" class=\"text-invert\" target=\"_blank \">Terms of Service</a></div>
                    <div> <a href=\"\" class=\"text-invert\" target=\"_blank \">Privacy Policy</a> </div>
                </div>
            </div>
        </footer>
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  195 => 73,  189 => 70,  183 => 67,  164 => 50,  161 => 49,  156 => 45,  146 => 38,  140 => 36,  135 => 34,  130 => 33,  128 => 32,  124 => 31,  120 => 30,  116 => 29,  109 => 24,  106 => 23,  100 => 18,  96 => 17,  92 => 16,  88 => 15,  84 => 14,  80 => 13,  76 => 12,  69 => 7,  66 => 6,  60 => 5,  53 => 97,  51 => 49,  46 => 46,  43 => 45,  41 => 23,  36 => 20,  34 => 6,  30 => 5,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::base.html.twig", "D:\\Logiciels\\wamp64\\www\\emotion\\app/Resources\\views/base.html.twig");
    }
}
