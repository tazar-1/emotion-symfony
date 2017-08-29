<?php

/* ::base.html.twig */
class __TwigTemplate_42a4a1dc6b6ff71d8d79cf6382ba36fc18b265bfb50fe94e70c9087c6dab2dc6 extends Twig_Template
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
        $__internal_8d5c8503f9719b708bc3711e4c3792719e06fc4e7c8a589c9f39406f68848c7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d5c8503f9719b708bc3711e4c3792719e06fc4e7c8a589c9f39406f68848c7d->enter($__internal_8d5c8503f9719b708bc3711e4c3792719e06fc4e7c8a589c9f39406f68848c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_d5e08127378f671468f46e1b4c2b0c283cb848119edbda5bec58e845599b1baf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5e08127378f671468f46e1b4c2b0c283cb848119edbda5bec58e845599b1baf->enter($__internal_d5e08127378f671468f46e1b4c2b0c283cb848119edbda5bec58e845599b1baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_8d5c8503f9719b708bc3711e4c3792719e06fc4e7c8a589c9f39406f68848c7d->leave($__internal_8d5c8503f9719b708bc3711e4c3792719e06fc4e7c8a589c9f39406f68848c7d_prof);

        
        $__internal_d5e08127378f671468f46e1b4c2b0c283cb848119edbda5bec58e845599b1baf->leave($__internal_d5e08127378f671468f46e1b4c2b0c283cb848119edbda5bec58e845599b1baf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e2d773eb8d6396f3cb4f7f13b4f29674c17dc4b891937abb668054517ee97cf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2d773eb8d6396f3cb4f7f13b4f29674c17dc4b891937abb668054517ee97cf0->enter($__internal_e2d773eb8d6396f3cb4f7f13b4f29674c17dc4b891937abb668054517ee97cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_71e4428db418a04190158e18d1b47e84c35c4d4263520b7c7b4baedaeb357eb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71e4428db418a04190158e18d1b47e84c35c4d4263520b7c7b4baedaeb357eb8->enter($__internal_71e4428db418a04190158e18d1b47e84c35c4d4263520b7c7b4baedaeb357eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "eMotion - Le site de Location écologique de Voiture et Scooter";
        
        $__internal_71e4428db418a04190158e18d1b47e84c35c4d4263520b7c7b4baedaeb357eb8->leave($__internal_71e4428db418a04190158e18d1b47e84c35c4d4263520b7c7b4baedaeb357eb8_prof);

        
        $__internal_e2d773eb8d6396f3cb4f7f13b4f29674c17dc4b891937abb668054517ee97cf0->leave($__internal_e2d773eb8d6396f3cb4f7f13b4f29674c17dc4b891937abb668054517ee97cf0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0860f73af9044634d5451b66d0a7746a4864bd897cc4d4f2a4baf07674a61909 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0860f73af9044634d5451b66d0a7746a4864bd897cc4d4f2a4baf07674a61909->enter($__internal_0860f73af9044634d5451b66d0a7746a4864bd897cc4d4f2a4baf07674a61909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9c8e294c45b9ef8b99e3c79724c99631c9e64384b74e48e3568e56c72a557cd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c8e294c45b9ef8b99e3c79724c99631c9e64384b74e48e3568e56c72a557cd8->enter($__internal_9c8e294c45b9ef8b99e3c79724c99631c9e64384b74e48e3568e56c72a557cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_9c8e294c45b9ef8b99e3c79724c99631c9e64384b74e48e3568e56c72a557cd8->leave($__internal_9c8e294c45b9ef8b99e3c79724c99631c9e64384b74e48e3568e56c72a557cd8_prof);

        
        $__internal_0860f73af9044634d5451b66d0a7746a4864bd897cc4d4f2a4baf07674a61909->leave($__internal_0860f73af9044634d5451b66d0a7746a4864bd897cc4d4f2a4baf07674a61909_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_90cbe82ef24d5c553b4beb4884f3100e1a3a9475bb18976713516a307d9df4f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90cbe82ef24d5c553b4beb4884f3100e1a3a9475bb18976713516a307d9df4f8->enter($__internal_90cbe82ef24d5c553b4beb4884f3100e1a3a9475bb18976713516a307d9df4f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8b67750f71f361b721081866235d2d7537b4456be56dac817d5f756afd6135a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b67750f71f361b721081866235d2d7537b4456be56dac817d5f756afd6135a4->enter($__internal_8b67750f71f361b721081866235d2d7537b4456be56dac817d5f756afd6135a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8b67750f71f361b721081866235d2d7537b4456be56dac817d5f756afd6135a4->leave($__internal_8b67750f71f361b721081866235d2d7537b4456be56dac817d5f756afd6135a4_prof);

        
        $__internal_90cbe82ef24d5c553b4beb4884f3100e1a3a9475bb18976713516a307d9df4f8->leave($__internal_90cbe82ef24d5c553b4beb4884f3100e1a3a9475bb18976713516a307d9df4f8_prof);

    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7b31ab7e53d8314dd18d6cdfee7f2e16adea2ff053b574620c1fac26d14fe2e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b31ab7e53d8314dd18d6cdfee7f2e16adea2ff053b574620c1fac26d14fe2e5->enter($__internal_7b31ab7e53d8314dd18d6cdfee7f2e16adea2ff053b574620c1fac26d14fe2e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_91aceeed2df3ec244647354987cec3c3fae9cb6f06e04654411d3c0d8fadcfcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91aceeed2df3ec244647354987cec3c3fae9cb6f06e04654411d3c0d8fadcfcb->enter($__internal_91aceeed2df3ec244647354987cec3c3fae9cb6f06e04654411d3c0d8fadcfcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_91aceeed2df3ec244647354987cec3c3fae9cb6f06e04654411d3c0d8fadcfcb->leave($__internal_91aceeed2df3ec244647354987cec3c3fae9cb6f06e04654411d3c0d8fadcfcb_prof);

        
        $__internal_7b31ab7e53d8314dd18d6cdfee7f2e16adea2ff053b574620c1fac26d14fe2e5->leave($__internal_7b31ab7e53d8314dd18d6cdfee7f2e16adea2ff053b574620c1fac26d14fe2e5_prof);

    }

    // line 72
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f0134b9401a25f464b35293905fa2b8577d6459ff21a18ac4f2028748551fc45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0134b9401a25f464b35293905fa2b8577d6459ff21a18ac4f2028748551fc45->enter($__internal_f0134b9401a25f464b35293905fa2b8577d6459ff21a18ac4f2028748551fc45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_0e4dc7b27d24f6009144d2064d12d18d17888da79d822a398a5e4f79e98b5b15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e4dc7b27d24f6009144d2064d12d18d17888da79d822a398a5e4f79e98b5b15->enter($__internal_0e4dc7b27d24f6009144d2064d12d18d17888da79d822a398a5e4f79e98b5b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_0e4dc7b27d24f6009144d2064d12d18d17888da79d822a398a5e4f79e98b5b15->leave($__internal_0e4dc7b27d24f6009144d2064d12d18d17888da79d822a398a5e4f79e98b5b15_prof);

        
        $__internal_f0134b9401a25f464b35293905fa2b8577d6459ff21a18ac4f2028748551fc45->leave($__internal_f0134b9401a25f464b35293905fa2b8577d6459ff21a18ac4f2028748551fc45_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  306 => 96,  300 => 93,  294 => 90,  275 => 73,  266 => 72,  249 => 69,  235 => 64,  229 => 62,  224 => 60,  219 => 59,  217 => 58,  213 => 57,  209 => 56,  205 => 55,  192 => 44,  186 => 42,  181 => 40,  176 => 39,  174 => 38,  170 => 37,  166 => 36,  162 => 35,  155 => 30,  146 => 29,  133 => 23,  128 => 21,  124 => 20,  120 => 19,  115 => 17,  110 => 15,  105 => 13,  97 => 7,  88 => 6,  70 => 5,  58 => 120,  56 => 72,  52 => 70,  49 => 69,  47 => 29,  42 => 26,  40 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}eMotion - Le site de Location écologique de Voiture et Scooter{% endblock %}</title>
        {% block stylesheets %}
            <meta charset=\"utf-8\" name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
            <meta name=“description” content=“Du text du text et du text et encore tu text ?.“>
            <meta property=“og:title” content=“eMotion”>
            <meta property=“og:type” content=“website”>
            <meta property=“og:url” content=“http://emotion.com“>

            <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('framework/images/favicon.ico') }}\" />

            <link rel=\"stylesheet\" href=\"{{ asset('framework/css/styles.css') }}\" type=\"text/css\" media=\"all\"/>

            <script type=\"text/javascript\" href=\"{{ asset('framework/js/jquery.js') }}\"></script>

            <script type=\"text/javascript\"  href=\"{{ asset('framework/js/scroll.js') }}\"></script>
            <script type=\"text/javascript\"  href=\"{{ asset('framework/js/nav_menu.js') }}\"></script>
            <script type=\"text/javascript\"  href=\"{{ asset('framework/js/animation.js') }}\"></script>

    \t\t<script type=\"text/javascript\"  href=\"{{ asset('framework/js/app.js') }}\"></script>

        {% endblock %}

    </head>
    <body>
        {% block body %}
            <div id=\"nav\">
                <header class=\"header container\">
                    <div class=\"logo\"></div>
                    <nav class=\"top-nav\">
                        <ul>
                            <li><a href=\"{{ path('home') }}\" class=\"btn-border\">Accueil</a></li>
                            <li><a href=\"{{ path('about_us') }}\" class=\"btn-border\">Présentation</a></li>
                            <li><a href=\"{{ path('Vehicules') }}\" class=\"btn-border\">Véhicules</a></li>
                            {% if is_granted(\"IS_AUTHENTICATED_FULLY\") %}
                                <li><a href=\"{{ path('fos_user_profile_show') }}\" class=\"btn-border\">Mon compte</a></li>
                                <li><a href=\"{{ path('fos_user_security_logout') }}\" class=\"btn-log\">Déconnexion</a></li>
                                {% else %}
                                    <li><a href=\"{{ path('fos_user_security_login') }}\" class=\"btn-log\">Connexion</a></li>
                            {%endif%}
                        </ul>
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
                                <li><a href=\"{{ path('home') }}\" class=\"btn-border\">Accueil</a></li>
                                <li><a href=\"{{ path('about_us') }}\" class=\"btn-border\">Présentation</a></li>
                                <li><a href=\"{{ path('Vehicules') }}\" class=\"btn-border\">Véhicules</a></li>
                                {% if is_granted(\"IS_AUTHENTICATED_FULLY\") %}
                                    <li><a href=\"{{ path('fos_user_profile_show') }}\" class=\"btn-border\">Mon compte</a></li>
                                    <li><a href=\"{{ path('fos_user_security_logout') }}\" class=\"btn-log\">Déconnexion</a></li>
                                    {% else %}
                                        <li><a href=\"{{ path('fos_user_security_login') }}\" class=\"btn-log\">Connexion</a></li>
                                {%endif%}
    \t\t\t\t\t\t</ul>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t</div>
        {% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
    <footer>
        {% block footer %}
            <footer id=\"footer_index\">
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
                            <img src=\"{{ asset('framework/images/icons/twitter_e.svg') }}\" alt=\"\">
                        </a>
                        <a href=\"\" class=\"footericon\" target=\"_blank \">
                            <img src=\"{{ asset('framework/images/icons/facebook_e.svg') }}\" alt=\"\">
                        </a>
                        <a href=\"\" class=\"footericon\" target=\"_blank \">
                            <img src=\"{{ asset('framework/images/icons/linkedin_e.svg') }}\" alt=\"\">
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
        {% endblock %}
    </footer>
</html>
", "::base.html.twig", "/Applications/MAMP/htdocs/emotion-symfony/app/Resources/views/base.html.twig");
    }
}
