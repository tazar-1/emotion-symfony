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
        $__internal_6a7a3179c93f1df4c182dc2356db2fb0217ba65d685e8d973fd28409f82b5227 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a7a3179c93f1df4c182dc2356db2fb0217ba65d685e8d973fd28409f82b5227->enter($__internal_6a7a3179c93f1df4c182dc2356db2fb0217ba65d685e8d973fd28409f82b5227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_27730accf009f1183939a2fc241b475c16334a60fb1a1f1b954cb114208e3de4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27730accf009f1183939a2fc241b475c16334a60fb1a1f1b954cb114208e3de4->enter($__internal_27730accf009f1183939a2fc241b475c16334a60fb1a1f1b954cb114208e3de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 1
        echo "<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/images/favicon.ico"), "html", null, true);
        echo "\"/>
<link rel=\"stylesheet\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("framework/css/styles.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>

";
        // line 5
        echo "
";
        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "
<form class=\"log\" action=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    ";
        // line 11
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 12
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\"/>
    ";
        }
        // line 14
        echo "
    <article class=\"main-content\">

        <h4>Connexion à votre compte !</h4>

        <div class=\"form-group\">
            <div class=\"btn_mid\">
                <button class=\"btn_l_s\">
                    <a href=\"log.html\">Se connecter</a>
                </button>
                <button class=\"btn_l_s\">
                    <a href=\"sig.html\">S'inscrire</a>
                </button>
            </div>
        </div>

        <div class=\"form-group\">
            <label for=\"username\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" class=\"input-control\"/>
        </div>

        <div class=\"form-group\">
            <label for=\"password\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"input-control\"/>
        </div>

        <div class=\"form-group\">
            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
            <label for=\"remember_me\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        </div>

        <div class=\"form-group\">
            <div class=\"btn_mid\">
                <input class=\"btn_w\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
            </div>
        </div>
    </article>
</form>
";
        
        $__internal_6a7a3179c93f1df4c182dc2356db2fb0217ba65d685e8d973fd28409f82b5227->leave($__internal_6a7a3179c93f1df4c182dc2356db2fb0217ba65d685e8d973fd28409f82b5227_prof);

        
        $__internal_27730accf009f1183939a2fc241b475c16334a60fb1a1f1b954cb114208e3de4->leave($__internal_27730accf009f1183939a2fc241b475c16334a60fb1a1f1b954cb114208e3de4_prof);

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
        return array (  108 => 47,  100 => 42,  91 => 36,  84 => 32,  80 => 31,  61 => 14,  55 => 12,  53 => 11,  49 => 10,  46 => 9,  40 => 7,  38 => 6,  35 => 5,  30 => 2,  25 => 1,);
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
                    <a href=\"log.html\">Se connecter</a>
                </button>
                <button class=\"btn_l_s\">
                    <a href=\"sig.html\">S'inscrire</a>
                </button>
            </div>
        </div>

        <div class=\"form-group\">
            <label for=\"username\">{{ 'security.login.username'|trans }}</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" class=\"input-control\"/>
        </div>

        <div class=\"form-group\">
            <label for=\"password\">{{ 'security.login.password'|trans }}</label>
            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"input-control\"/>
        </div>

        <div class=\"form-group\">
            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
            <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
        </div>

        <div class=\"form-group\">
            <div class=\"btn_mid\">
                <input class=\"btn_w\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\"/>
            </div>
        </div>
    </article>
</form>
", "@FOSUser/Security/login_content.html.twig", "/Applications/MAMP/htdocs/emotion-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login_content.html.twig");
    }
}
