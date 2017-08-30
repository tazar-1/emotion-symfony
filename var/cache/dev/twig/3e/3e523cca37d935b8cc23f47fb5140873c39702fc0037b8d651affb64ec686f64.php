<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_10c748b7b9e4fc0f698dda14635539673cbbf778ac8cf67f7c3aead10c4fee04 extends Twig_Template
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
        $__internal_3304621b5ad4ca0420db8ed5abb53adbaa2dbb842ca096c56ca12f99f7558cea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3304621b5ad4ca0420db8ed5abb53adbaa2dbb842ca096c56ca12f99f7558cea->enter($__internal_3304621b5ad4ca0420db8ed5abb53adbaa2dbb842ca096c56ca12f99f7558cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_28ea12fb466a0dd89f71510332f8ad07856f1e245457bd9ffce9c81ff7e0cb57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28ea12fb466a0dd89f71510332f8ad07856f1e245457bd9ffce9c81ff7e0cb57->enter($__internal_28ea12fb466a0dd89f71510332f8ad07856f1e245457bd9ffce9c81ff7e0cb57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

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
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
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
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 14
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
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
        
        $__internal_3304621b5ad4ca0420db8ed5abb53adbaa2dbb842ca096c56ca12f99f7558cea->leave($__internal_3304621b5ad4ca0420db8ed5abb53adbaa2dbb842ca096c56ca12f99f7558cea_prof);

        
        $__internal_28ea12fb466a0dd89f71510332f8ad07856f1e245457bd9ffce9c81ff7e0cb57->leave($__internal_28ea12fb466a0dd89f71510332f8ad07856f1e245457bd9ffce9c81ff7e0cb57_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 50,  107 => 43,  99 => 38,  92 => 34,  88 => 33,  79 => 27,  73 => 24,  63 => 16,  57 => 14,  55 => 13,  50 => 11,  47 => 10,  41 => 8,  39 => 7,  36 => 6,  30 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('framework/images/favicon.ico') }}\"/>
<link rel=\"stylesheet\" href=\"{{ asset('framework/css/styles.css') }}\" type=\"text/css\" media=\"all\"/>


{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form class=\"log\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">

    {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\"/>
    {% endif %}

    <article class=\"main-content\">

        <h4>Connexion à votre compte !</h4>

        <div class=\"form-group\">
            <div class=\"btn_mid\">
                <button class=\"btn_l_s\">
                    <a href=\"{{ path('fos_user_security_login') }}\">Se connecter</a>
                </button>
                <button class=\"btn_l_s\">
                    <a href=\"{{ path('inscription') }}\">S'inscrire</a>
                </button>
            </div>
        </div>

        <div class=\"form-group\">
            <label for=\"username\">{{ 'security.login.username'|trans }}</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" class=\"input-control\" />
        </div>

        <div class=\"form-group\">
            <label for=\"password\">{{ 'security.login.password'|trans }}</label>
            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"input-control\" />
        </div>

        <div class=\"form-group\">
            <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
        </div>


        <div class=\"form-group\">
            <div class=\"btn_mid\">
                <input class=\"btn_w\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
            </div>
        </div>
    </article>
</form>", "@FOSUser/Security/login_content.html.twig", "/Applications/MAMP/htdocs/emotion-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login_content.html.twig");
    }
}
