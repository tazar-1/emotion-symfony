<?php

/* ::base.html.twig */
class __TwigTemplate_19a6c2d8e9e40a9f9bffc2acae057fa40c6067b4ef68dbe4f7de40837e37f601 extends Twig_Template
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
        $__internal_03a95ddebe492b3fe948faad8af5db2547ef2c2f91f5164d8f8ffc6706175397 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03a95ddebe492b3fe948faad8af5db2547ef2c2f91f5164d8f8ffc6706175397->enter($__internal_03a95ddebe492b3fe948faad8af5db2547ef2c2f91f5164d8f8ffc6706175397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_b918a1a0496c5d0a3a43b88610b3b5cc5917c08adfca58fe5765ae768f96ef61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b918a1a0496c5d0a3a43b88610b3b5cc5917c08adfca58fe5765ae768f96ef61->enter($__internal_b918a1a0496c5d0a3a43b88610b3b5cc5917c08adfca58fe5765ae768f96ef61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 17
        echo "    </head>

    <body>
    ";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 64
        echo "    </body>

    <footer>
        ";
        // line 67
        $this->displayBlock('footer', $context, $blocks);
        // line 115
        echo "    </footer>

</html>
";
        
        $__internal_03a95ddebe492b3fe948faad8af5db2547ef2c2f91f5164d8f8ffc6706175397->leave($__internal_03a95ddebe492b3fe948faad8af5db2547ef2c2f91f5164d8f8ffc6706175397_prof);

        
        $__internal_b918a1a0496c5d0a3a43b88610b3b5cc5917c08adfca58fe5765ae768f96ef61->leave($__internal_b918a1a0496c5d0a3a43b88610b3b5cc5917c08adfca58fe5765ae768f96ef61_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7cc82095d6513747f09cb59a823eed33f7812304a2e4437a659ebae72d134751 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cc82095d6513747f09cb59a823eed33f7812304a2e4437a659ebae72d134751->enter($__internal_7cc82095d6513747f09cb59a823eed33f7812304a2e4437a659ebae72d134751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7e71d37a5e60c9db0a6139331584fb22155cc8b1ebf1ea82993a7fb683282b48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e71d37a5e60c9db0a6139331584fb22155cc8b1ebf1ea82993a7fb683282b48->enter($__internal_7e71d37a5e60c9db0a6139331584fb22155cc8b1ebf1ea82993a7fb683282b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "eMotion - Le site de Location écologique de Voiture et Scooter";
        
        $__internal_7e71d37a5e60c9db0a6139331584fb22155cc8b1ebf1ea82993a7fb683282b48->leave($__internal_7e71d37a5e60c9db0a6139331584fb22155cc8b1ebf1ea82993a7fb683282b48_prof);

        
        $__internal_7cc82095d6513747f09cb59a823eed33f7812304a2e4437a659ebae72d134751->leave($__internal_7cc82095d6513747f09cb59a823eed33f7812304a2e4437a659ebae72d134751_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e7c83b8fc0635056a317824f4f38c98309d8418e76384f0b63e330e2d3e7a141 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7c83b8fc0635056a317824f4f38c98309d8418e76384f0b63e330e2d3e7a141->enter($__internal_e7c83b8fc0635056a317824f4f38c98309d8418e76384f0b63e330e2d3e7a141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8edb681c6d3996f419cb28fb690c07c176caebb2f03309409e49ab49b1b09cf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8edb681c6d3996f419cb28fb690c07c176caebb2f03309409e49ab49b1b09cf4->enter($__internal_8edb681c6d3996f419cb28fb690c07c176caebb2f03309409e49ab49b1b09cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <meta charset=\"utf-8\" name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
            <meta name=“description” content=“Du text du text et du text.“>
            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/images/favicon.ico"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/css/styles.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
            <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/js/scroll.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/js/nav_menu.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/js/animation.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/js/app.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_8edb681c6d3996f419cb28fb690c07c176caebb2f03309409e49ab49b1b09cf4->leave($__internal_8edb681c6d3996f419cb28fb690c07c176caebb2f03309409e49ab49b1b09cf4_prof);

        
        $__internal_e7c83b8fc0635056a317824f4f38c98309d8418e76384f0b63e330e2d3e7a141->leave($__internal_e7c83b8fc0635056a317824f4f38c98309d8418e76384f0b63e330e2d3e7a141_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_5dca87b7049b0c8603acb22dc4bb334b3272692905687878b0f6d2126286929d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dca87b7049b0c8603acb22dc4bb334b3272692905687878b0f6d2126286929d->enter($__internal_5dca87b7049b0c8603acb22dc4bb334b3272692905687878b0f6d2126286929d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1e73f37898375603ee514f223dc41b677e38ff2cfe645cf9573239ea2bf9cf05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e73f37898375603ee514f223dc41b677e38ff2cfe645cf9573239ea2bf9cf05->enter($__internal_1e73f37898375603ee514f223dc41b677e38ff2cfe645cf9573239ea2bf9cf05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "        <div id=\"nav\">
            <header class=\"header container\">
                <div class=\"logo\"></div>
                <!-- Menu on tablets and larger screens -->
                <nav class=\"top-nav\">
                    <ul>
                        <li><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\" class=\"btn-border\">Accueil</a></li>
                        <li><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about_us");
        echo "\" class=\"btn-border\">Présentation</a></li>
                        <li><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Vehicules");
        echo "\" class=\"btn-border\">Véhicules</a></li>
                        ";
        // line 30
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 31
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Compte");
            echo "\" class=\"btn-border\">Mon compte</a></li>
                            <li><a href=\"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\" class=\"btn-log\">Déconnexion</a></li>
                        ";
        } else {
            // line 34
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" class=\"btn-log\">Connexion</a></li>
                        ";
        }
        // line 36
        echo "                    </ul>
                </nav>
            </header>
        </div>

        <div id=\"container-menu\">
            <div id=\"toto\" class=\"navToggle\" onClick=\"appendClass()\">
                <div class=\"icon\"></div>
            </div>
            <div id=\"back-menu\">
                <div id=\"menu\">
                    <ul>
                        <li><a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\" class=\"btn-border\">Accueil</a></li>
                        <li><a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about_us");
        echo "\" class=\"btn-border\">Présentation</a></li>
                        <li><a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Vehicules");
        echo "\" class=\"btn-border\">Véhicules</a></li>
                        ";
        // line 51
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 52
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Compte");
            echo "\" class=\"btn-border\">Mon compte</a></li>
                            <li><a href=\"";
            // line 53
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\" class=\"btn-log\">Déconnexion</a></li>
                        ";
        } else {
            // line 55
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" class=\"btn-log\">Connexion</a></li>
                        ";
        }
        // line 57
        echo "                    </ul>
                </div>
            </div>
        </div>

    ";
        
        $__internal_1e73f37898375603ee514f223dc41b677e38ff2cfe645cf9573239ea2bf9cf05->leave($__internal_1e73f37898375603ee514f223dc41b677e38ff2cfe645cf9573239ea2bf9cf05_prof);

        
        $__internal_5dca87b7049b0c8603acb22dc4bb334b3272692905687878b0f6d2126286929d->leave($__internal_5dca87b7049b0c8603acb22dc4bb334b3272692905687878b0f6d2126286929d_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5eec5b2b0b234c344f1d9e2ae7ceece1bb64648b413d131e778d58df0e9547b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eec5b2b0b234c344f1d9e2ae7ceece1bb64648b413d131e778d58df0e9547b0->enter($__internal_5eec5b2b0b234c344f1d9e2ae7ceece1bb64648b413d131e778d58df0e9547b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_50d6a75819cf78c39b855219d924f831b99df14550bd1af14b026d95bda8cf39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50d6a75819cf78c39b855219d924f831b99df14550bd1af14b026d95bda8cf39->enter($__internal_50d6a75819cf78c39b855219d924f831b99df14550bd1af14b026d95bda8cf39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_50d6a75819cf78c39b855219d924f831b99df14550bd1af14b026d95bda8cf39->leave($__internal_50d6a75819cf78c39b855219d924f831b99df14550bd1af14b026d95bda8cf39_prof);

        
        $__internal_5eec5b2b0b234c344f1d9e2ae7ceece1bb64648b413d131e778d58df0e9547b0->leave($__internal_5eec5b2b0b234c344f1d9e2ae7ceece1bb64648b413d131e778d58df0e9547b0_prof);

    }

    // line 67
    public function block_footer($context, array $blocks = array())
    {
        $__internal_96b5e7b83e28e7c347877642d9e3e41a1883536c60c0a2e4b18231cfdf74359f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96b5e7b83e28e7c347877642d9e3e41a1883536c60c0a2e4b18231cfdf74359f->enter($__internal_96b5e7b83e28e7c347877642d9e3e41a1883536c60c0a2e4b18231cfdf74359f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_a89fe9fb8109bb604da4a1923a148b3430b5f46ba41bd51b5d9ed73625fc0093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a89fe9fb8109bb604da4a1923a148b3430b5f46ba41bd51b5d9ed73625fc0093->enter($__internal_a89fe9fb8109bb604da4a1923a148b3430b5f46ba41bd51b5d9ed73625fc0093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 68
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
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/images/icons/twitter_e.svg"), "html", null, true);
        echo "\" alt=\"\">
                        </a>
                        <a href=\"\" class=\"footericon\" target=\"_blank \">
                            <img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/images/icons/facebook_e.svg"), "html", null, true);
        echo "\" alt=\"\">
                        </a>
                        <a href=\"\" class=\"footericon\" target=\"_blank \">
                            <img src=\"";
        // line 91
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
        
        $__internal_a89fe9fb8109bb604da4a1923a148b3430b5f46ba41bd51b5d9ed73625fc0093->leave($__internal_a89fe9fb8109bb604da4a1923a148b3430b5f46ba41bd51b5d9ed73625fc0093_prof);

        
        $__internal_96b5e7b83e28e7c347877642d9e3e41a1883536c60c0a2e4b18231cfdf74359f->leave($__internal_96b5e7b83e28e7c347877642d9e3e41a1883536c60c0a2e4b18231cfdf74359f_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  302 => 91,  296 => 88,  290 => 85,  271 => 68,  262 => 67,  245 => 63,  230 => 57,  224 => 55,  219 => 53,  214 => 52,  212 => 51,  208 => 50,  204 => 49,  200 => 48,  186 => 36,  180 => 34,  175 => 32,  170 => 31,  168 => 30,  164 => 29,  160 => 28,  156 => 27,  148 => 21,  139 => 20,  127 => 15,  123 => 14,  119 => 13,  115 => 12,  111 => 11,  107 => 10,  103 => 9,  99 => 7,  90 => 6,  72 => 5,  59 => 115,  57 => 67,  52 => 64,  49 => 63,  47 => 20,  42 => 17,  40 => 6,  36 => 5,  30 => 1,);
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
        <title>{% block title %}eMotion - Le site de Location écologique de Voiture et Scooter{% endblock %}</title>
        {% block stylesheets %}
            <meta charset=\"utf-8\" name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
            <meta name=“description” content=“Du text du text et du text.“>
            <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('framework/images/favicon.ico') }}\" />
            <link rel=\"stylesheet\" href=\"{{ asset('framework/css/styles.css') }}\" type=\"text/css\" media=\"all\"/>
            <script type=\"text/javascript\" src=\"{{ asset('framework/js/jquery.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('framework/js/scroll.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('framework/js/nav_menu.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('framework/js/animation.js') }}\"></script>
            <script type=\"text/javascript\" src=\"{{ asset('framework/js/app.js') }}\"></script>
        {% endblock %}
    </head>

    <body>
    {% block body %}
        <div id=\"nav\">
            <header class=\"header container\">
                <div class=\"logo\"></div>
                <!-- Menu on tablets and larger screens -->
                <nav class=\"top-nav\">
                    <ul>
                        <li><a href=\"{{ path('home') }}\" class=\"btn-border\">Accueil</a></li>
                        <li><a href=\"{{ path('about_us') }}\" class=\"btn-border\">Présentation</a></li>
                        <li><a href=\"{{ path('Vehicules') }}\" class=\"btn-border\">Véhicules</a></li>
                        {% if is_granted(\"IS_AUTHENTICATED_FULLY\") %}
                            <li><a href=\"{{ path('Compte') }}\" class=\"btn-border\">Mon compte</a></li>
                            <li><a href=\"{{ path('fos_user_security_logout') }}\" class=\"btn-log\">Déconnexion</a></li>
                        {% else %}
                            <li><a href=\"{{ path('fos_user_security_login') }}\" class=\"btn-log\">Connexion</a></li>
                        {%endif%}
                    </ul>
                </nav>
            </header>
        </div>

        <div id=\"container-menu\">
            <div id=\"toto\" class=\"navToggle\" onClick=\"appendClass()\">
                <div class=\"icon\"></div>
            </div>
            <div id=\"back-menu\">
                <div id=\"menu\">
                    <ul>
                        <li><a href=\"{{ path('home') }}\" class=\"btn-border\">Accueil</a></li>
                        <li><a href=\"{{ path('about_us') }}\" class=\"btn-border\">Présentation</a></li>
                        <li><a href=\"{{ path('Vehicules') }}\" class=\"btn-border\">Véhicules</a></li>
                        {% if is_granted(\"IS_AUTHENTICATED_FULLY\") %}
                            <li><a href=\"{{ path('Compte') }}\" class=\"btn-border\">Mon compte</a></li>
                            <li><a href=\"{{ path('fos_user_security_logout') }}\" class=\"btn-log\">Déconnexion</a></li>
                        {% else %}
                            <li><a href=\"{{ path('fos_user_security_login') }}\" class=\"btn-log\">Connexion</a></li>
                        {%endif%}
                    </ul>
                </div>
            </div>
        </div>

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
", "::base.html.twig", "D:\\Logiciels\\wamp64\\www\\emotion\\app/Resources\\views/base.html.twig");
    }
}
