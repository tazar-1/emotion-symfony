<?php

/* ::base.html.twig */
class __TwigTemplate_bf2fd145f501f4827aa19f0f0eb7924bcbb4b48e67b2ab2f29e121d6023ecf33 extends Twig_Template
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
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "
    </head>
    <body>
        ";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 69
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 70
        echo "    </body>
    <footer>
        ";
        // line 72
        $this->displayBlock('footer', $context, $blocks);
        // line 120
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
            <meta name=“description” content=“Du text du text et du text et encore tu text ?.“>
            <meta property=“og:title” content=“eMotion”>
            <meta property=“og:type” content=“website”>
            <meta property=“og:url” content=“http://emotion.com“>

            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/images/favicon.ico"), "html", null, true);
        echo "\" />

            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/css/styles.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>

            <script type=\"text/javascript\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/js/jquery.js"), "html", null, true);
        echo "\"></script>

            <script type=\"text/javascript\"  href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/js/scroll.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\"  href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/js/nav_menu.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\"  href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/js/animation.js"), "html", null, true);
        echo "\"></script>

    \t\t<script type=\"text/javascript\"  href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/js/app.js"), "html", null, true);
        echo "\"></script>

        ";
    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        // line 30
        echo "            <div id=\"nav\">
                <header class=\"header container\">
                    <div class=\"logo\"></div>
                    <nav class=\"top-nav\">
                        <ul>
                            <li><a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\" class=\"btn-border\">Accueil</a></li>
                            <li><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about_us");
        echo "\" class=\"btn-border\">Présentation</a></li>
                            <li><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Vehicules");
        echo "\" class=\"btn-border\">Véhicules</a></li>
                            ";
        // line 38
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 39
            echo "                                <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\" class=\"btn-border\">Mon compte</a></li>
                                <li><a href=\"";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\" class=\"btn-log\">Déconnexion</a></li>
                                ";
        } else {
            // line 42
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" class=\"btn-log\">Connexion</a></li>
                            ";
        }
        // line 44
        echo "                        </ul>
                    </nav>
                </header>
            </div>
            <div id=\"container-menu\">
    \t\t\t\t<div id=\"toto\" class=\"navToggle\" onClick=\"appendClass()\">
    \t\t\t\t\t<div class=\"icon\"></div>
    \t\t\t\t</div>
    \t\t\t\t<div id=\"back-menu\">
    \t\t\t\t\t<div id=\"menu\">
    \t\t\t\t\t\t<ul>
                                <li><a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\" class=\"btn-border\">Accueil</a></li>
                                <li><a href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about_us");
        echo "\" class=\"btn-border\">Présentation</a></li>
                                <li><a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Vehicules");
        echo "\" class=\"btn-border\">Véhicules</a></li>
                                ";
        // line 58
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 59
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\" class=\"btn-border\">Mon compte</a></li>
                                    <li><a href=\"";
            // line 60
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\" class=\"btn-log\">Déconnexion</a></li>
                                    ";
        } else {
            // line 62
            echo "                                        <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" class=\"btn-log\">Connexion</a></li>
                                ";
        }
        // line 64
        echo "    \t\t\t\t\t\t</ul>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t</div>
        ";
    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 72
    public function block_footer($context, array $blocks = array())
    {
        // line 73
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
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/images/icons/twitter_e.svg"), "html", null, true);
        echo "\" alt=\"\">
                        </a>
                        <a href=\"\" class=\"footericon\" target=\"_blank \">
                            <img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/images/icons/facebook_e.svg"), "html", null, true);
        echo "\" alt=\"\">
                        </a>
                        <a href=\"\" class=\"footericon\" target=\"_blank \">
                            <img src=\"";
        // line 96
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
        return array (  240 => 96,  234 => 93,  228 => 90,  209 => 73,  206 => 72,  201 => 69,  193 => 64,  187 => 62,  182 => 60,  177 => 59,  175 => 58,  171 => 57,  167 => 56,  163 => 55,  150 => 44,  144 => 42,  139 => 40,  134 => 39,  132 => 38,  128 => 37,  124 => 36,  120 => 35,  113 => 30,  110 => 29,  103 => 23,  98 => 21,  94 => 20,  90 => 19,  85 => 17,  80 => 15,  75 => 13,  67 => 7,  64 => 6,  58 => 5,  52 => 120,  50 => 72,  46 => 70,  43 => 69,  41 => 29,  36 => 26,  34 => 6,  30 => 5,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::base.html.twig", "/Applications/MAMP/htdocs/emotion-symfony/app/Resources/views/base.html.twig");
    }
}
