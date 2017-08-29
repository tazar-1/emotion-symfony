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
        $__internal_8b4dcbd3749a00e3bc436ed23c59e6bd6df02ddf5c32da43311e75cb0ce71b89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b4dcbd3749a00e3bc436ed23c59e6bd6df02ddf5c32da43311e75cb0ce71b89->enter($__internal_8b4dcbd3749a00e3bc436ed23c59e6bd6df02ddf5c32da43311e75cb0ce71b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_763294d812f9bb6e50930c9d7b2fe704c9cfd435892f93c9458a8b4b5ded6672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_763294d812f9bb6e50930c9d7b2fe704c9cfd435892f93c9458a8b4b5ded6672->enter($__internal_763294d812f9bb6e50930c9d7b2fe704c9cfd435892f93c9458a8b4b5ded6672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_8b4dcbd3749a00e3bc436ed23c59e6bd6df02ddf5c32da43311e75cb0ce71b89->leave($__internal_8b4dcbd3749a00e3bc436ed23c59e6bd6df02ddf5c32da43311e75cb0ce71b89_prof);

        
        $__internal_763294d812f9bb6e50930c9d7b2fe704c9cfd435892f93c9458a8b4b5ded6672->leave($__internal_763294d812f9bb6e50930c9d7b2fe704c9cfd435892f93c9458a8b4b5ded6672_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c266e5b91f95ccaab24b6efa6fd5a95911fe1a742caddc799743485e98733462 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c266e5b91f95ccaab24b6efa6fd5a95911fe1a742caddc799743485e98733462->enter($__internal_c266e5b91f95ccaab24b6efa6fd5a95911fe1a742caddc799743485e98733462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e1815a78ecc922cb40664c59b9c0f2d852f19f25b5533deac276b39c4c7f4224 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1815a78ecc922cb40664c59b9c0f2d852f19f25b5533deac276b39c4c7f4224->enter($__internal_e1815a78ecc922cb40664c59b9c0f2d852f19f25b5533deac276b39c4c7f4224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "eMotion - Le site de Location écologique de Voiture et Scooter";
        
        $__internal_e1815a78ecc922cb40664c59b9c0f2d852f19f25b5533deac276b39c4c7f4224->leave($__internal_e1815a78ecc922cb40664c59b9c0f2d852f19f25b5533deac276b39c4c7f4224_prof);

        
        $__internal_c266e5b91f95ccaab24b6efa6fd5a95911fe1a742caddc799743485e98733462->leave($__internal_c266e5b91f95ccaab24b6efa6fd5a95911fe1a742caddc799743485e98733462_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e1bb68a2183645877219f2a5ca9198ae5206099bc32b16ae3b0c1753abc9e736 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1bb68a2183645877219f2a5ca9198ae5206099bc32b16ae3b0c1753abc9e736->enter($__internal_e1bb68a2183645877219f2a5ca9198ae5206099bc32b16ae3b0c1753abc9e736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_41d52de84553180d17645b78cf54378207df813efb5b54110ae48179bc7a32c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41d52de84553180d17645b78cf54378207df813efb5b54110ae48179bc7a32c3->enter($__internal_41d52de84553180d17645b78cf54378207df813efb5b54110ae48179bc7a32c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_41d52de84553180d17645b78cf54378207df813efb5b54110ae48179bc7a32c3->leave($__internal_41d52de84553180d17645b78cf54378207df813efb5b54110ae48179bc7a32c3_prof);

        
        $__internal_e1bb68a2183645877219f2a5ca9198ae5206099bc32b16ae3b0c1753abc9e736->leave($__internal_e1bb68a2183645877219f2a5ca9198ae5206099bc32b16ae3b0c1753abc9e736_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6465cef0b342eff9bc33ce528a09cd4a2eb8cf6bbc258378397e85450e4b83f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6465cef0b342eff9bc33ce528a09cd4a2eb8cf6bbc258378397e85450e4b83f->enter($__internal_b6465cef0b342eff9bc33ce528a09cd4a2eb8cf6bbc258378397e85450e4b83f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4c51bb148153c7421f4a6b261f69df48def7121fb42d6b3526744449046f9ed1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c51bb148153c7421f4a6b261f69df48def7121fb42d6b3526744449046f9ed1->enter($__internal_4c51bb148153c7421f4a6b261f69df48def7121fb42d6b3526744449046f9ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4c51bb148153c7421f4a6b261f69df48def7121fb42d6b3526744449046f9ed1->leave($__internal_4c51bb148153c7421f4a6b261f69df48def7121fb42d6b3526744449046f9ed1_prof);

        
        $__internal_b6465cef0b342eff9bc33ce528a09cd4a2eb8cf6bbc258378397e85450e4b83f->leave($__internal_b6465cef0b342eff9bc33ce528a09cd4a2eb8cf6bbc258378397e85450e4b83f_prof);

    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e458f2b049fd36a009836621cb1cd8fc628357b02160f7cc688fa0a5ec9d9612 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e458f2b049fd36a009836621cb1cd8fc628357b02160f7cc688fa0a5ec9d9612->enter($__internal_e458f2b049fd36a009836621cb1cd8fc628357b02160f7cc688fa0a5ec9d9612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6897bcd5a30d298ea7e706638f03aa5c8aa7e5f95537763856ce62dbfef02610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6897bcd5a30d298ea7e706638f03aa5c8aa7e5f95537763856ce62dbfef02610->enter($__internal_6897bcd5a30d298ea7e706638f03aa5c8aa7e5f95537763856ce62dbfef02610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6897bcd5a30d298ea7e706638f03aa5c8aa7e5f95537763856ce62dbfef02610->leave($__internal_6897bcd5a30d298ea7e706638f03aa5c8aa7e5f95537763856ce62dbfef02610_prof);

        
        $__internal_e458f2b049fd36a009836621cb1cd8fc628357b02160f7cc688fa0a5ec9d9612->leave($__internal_e458f2b049fd36a009836621cb1cd8fc628357b02160f7cc688fa0a5ec9d9612_prof);

    }

    // line 72
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f04c28e60073b6c9a99e2fbc18fdfc1612ae68ead22d6360d8d05c63da94281c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f04c28e60073b6c9a99e2fbc18fdfc1612ae68ead22d6360d8d05c63da94281c->enter($__internal_f04c28e60073b6c9a99e2fbc18fdfc1612ae68ead22d6360d8d05c63da94281c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_06861184dff776afda4018f416489d9a3e46690eda7095740ee00f7ef9d03a4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06861184dff776afda4018f416489d9a3e46690eda7095740ee00f7ef9d03a4f->enter($__internal_06861184dff776afda4018f416489d9a3e46690eda7095740ee00f7ef9d03a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_06861184dff776afda4018f416489d9a3e46690eda7095740ee00f7ef9d03a4f->leave($__internal_06861184dff776afda4018f416489d9a3e46690eda7095740ee00f7ef9d03a4f_prof);

        
        $__internal_f04c28e60073b6c9a99e2fbc18fdfc1612ae68ead22d6360d8d05c63da94281c->leave($__internal_f04c28e60073b6c9a99e2fbc18fdfc1612ae68ead22d6360d8d05c63da94281c_prof);

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
