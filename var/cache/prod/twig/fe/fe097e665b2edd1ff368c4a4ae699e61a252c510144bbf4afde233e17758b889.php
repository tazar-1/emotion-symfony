<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_e67e27b354f761440dbae260cb24026d8019c3222217319a36442d6d6e67182d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/images/favicon.ico"), "html", null, true);
        echo "\"/>
<link rel=\"stylesheet\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/css/styles.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>


";
        // line 6
        echo "
";
        // line 7
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 8
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 10
        echo "
<form class=\"log\" action=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">

    ";
        // line 13
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : null)) {
            // line 14
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
            echo "\"/>
    ";
        }
        // line 16
        echo "
    <article class=\"main-content\">

        <h4>Connexion à votre compte !</h4>

        <div class=\"form-group\">
            <div class=\"btn_mid\">
                <button class=\"btn_l_s\">
                    <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Se connecter</a>
                </button>
                <button class=\"btn_l_s\">
                    <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscription");
        echo "\">S'inscrire</a>
                </button>
            </div>
        </div>

        <div class=\"form-group\">
            <label for=\"username\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\" class=\"input-control\" />
        </div>

        <div class=\"form-group\">
            <label for=\"password\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"input-control\" />
        </div>

        <div class=\"form-group\">
            <label for=\"remember_me\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
        </div>


        <div class=\"form-group\">
            <div class=\"btn_mid\">
                <input class=\"btn_w\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
            </div>
        </div>
    </article>
</form>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 50,  101 => 43,  93 => 38,  86 => 34,  82 => 33,  73 => 27,  67 => 24,  57 => 16,  51 => 14,  49 => 13,  44 => 11,  41 => 10,  35 => 8,  33 => 7,  30 => 6,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Security:login_content.html.twig", "D:\\Logiciels\\wamp64\\www\\emotion\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Security/login_content.html.twig");
    }
}
