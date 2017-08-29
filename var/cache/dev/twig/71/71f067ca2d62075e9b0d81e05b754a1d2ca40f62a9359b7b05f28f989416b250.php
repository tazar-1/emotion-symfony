<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_d2a6d81416efe885fca4adb2b4bd95199ddac1bd45a9450642e397abbad784c7 extends Twig_Template
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
        $__internal_d1f04c1a68f28d5dabf1c5cf54e351b3d7a9a66568a6b87749cf99dff3b851da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1f04c1a68f28d5dabf1c5cf54e351b3d7a9a66568a6b87749cf99dff3b851da->enter($__internal_d1f04c1a68f28d5dabf1c5cf54e351b3d7a9a66568a6b87749cf99dff3b851da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_7985b656402522abae0f8c604ec19cbbd0e26db9cff40a495922f5e032ef8d63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7985b656402522abae0f8c604ec19cbbd0e26db9cff40a495922f5e032ef8d63->enter($__internal_7985b656402522abae0f8c604ec19cbbd0e26db9cff40a495922f5e032ef8d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_d1f04c1a68f28d5dabf1c5cf54e351b3d7a9a66568a6b87749cf99dff3b851da->leave($__internal_d1f04c1a68f28d5dabf1c5cf54e351b3d7a9a66568a6b87749cf99dff3b851da_prof);

        
        $__internal_7985b656402522abae0f8c604ec19cbbd0e26db9cff40a495922f5e032ef8d63->leave($__internal_7985b656402522abae0f8c604ec19cbbd0e26db9cff40a495922f5e032ef8d63_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "@FOSUser/Profile/show_content.html.twig", "/Applications/MAMP/htdocs/emotion-symfony/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
