<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2cb9bcdb914acea5868a69dd88c5f9ac970b9d4799243e9f9f215391a42881cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f5e26e2a323a8bba9c1996f3ca7410eebbe66140128cb1dc1fceea2fddedebe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f5e26e2a323a8bba9c1996f3ca7410eebbe66140128cb1dc1fceea2fddedebe->enter($__internal_3f5e26e2a323a8bba9c1996f3ca7410eebbe66140128cb1dc1fceea2fddedebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c295ff8815f140aaf06a3fa1227e90a7faf8d0ce6a2a20464d437c8ebe876858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c295ff8815f140aaf06a3fa1227e90a7faf8d0ce6a2a20464d437c8ebe876858->enter($__internal_c295ff8815f140aaf06a3fa1227e90a7faf8d0ce6a2a20464d437c8ebe876858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f5e26e2a323a8bba9c1996f3ca7410eebbe66140128cb1dc1fceea2fddedebe->leave($__internal_3f5e26e2a323a8bba9c1996f3ca7410eebbe66140128cb1dc1fceea2fddedebe_prof);

        
        $__internal_c295ff8815f140aaf06a3fa1227e90a7faf8d0ce6a2a20464d437c8ebe876858->leave($__internal_c295ff8815f140aaf06a3fa1227e90a7faf8d0ce6a2a20464d437c8ebe876858_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ee777fe68ac8c50d21364772cfbc0e6101886907e3923dd9308cbfbace0917f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee777fe68ac8c50d21364772cfbc0e6101886907e3923dd9308cbfbace0917f5->enter($__internal_ee777fe68ac8c50d21364772cfbc0e6101886907e3923dd9308cbfbace0917f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_854317310bbae9e53116ede1df6df606bfa3aa8343ff3f0462405695c32f8e2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_854317310bbae9e53116ede1df6df606bfa3aa8343ff3f0462405695c32f8e2e->enter($__internal_854317310bbae9e53116ede1df6df606bfa3aa8343ff3f0462405695c32f8e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_854317310bbae9e53116ede1df6df606bfa3aa8343ff3f0462405695c32f8e2e->leave($__internal_854317310bbae9e53116ede1df6df606bfa3aa8343ff3f0462405695c32f8e2e_prof);

        
        $__internal_ee777fe68ac8c50d21364772cfbc0e6101886907e3923dd9308cbfbace0917f5->leave($__internal_ee777fe68ac8c50d21364772cfbc0e6101886907e3923dd9308cbfbace0917f5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eac11cc250b8f8fa054d96f7979d356f8d63a9a30718099d423cf5969e3e5b68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eac11cc250b8f8fa054d96f7979d356f8d63a9a30718099d423cf5969e3e5b68->enter($__internal_eac11cc250b8f8fa054d96f7979d356f8d63a9a30718099d423cf5969e3e5b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f6b969535ae5fff6a37110df72e6253e60a5a47b55ded8a808fc8a19eee39da4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6b969535ae5fff6a37110df72e6253e60a5a47b55ded8a808fc8a19eee39da4->enter($__internal_f6b969535ae5fff6a37110df72e6253e60a5a47b55ded8a808fc8a19eee39da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f6b969535ae5fff6a37110df72e6253e60a5a47b55ded8a808fc8a19eee39da4->leave($__internal_f6b969535ae5fff6a37110df72e6253e60a5a47b55ded8a808fc8a19eee39da4_prof);

        
        $__internal_eac11cc250b8f8fa054d96f7979d356f8d63a9a30718099d423cf5969e3e5b68->leave($__internal_eac11cc250b8f8fa054d96f7979d356f8d63a9a30718099d423cf5969e3e5b68_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_df2d20ff8fbda805386b68eb15667096d0e0a08e6c4fd09293b95510d2a07c6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df2d20ff8fbda805386b68eb15667096d0e0a08e6c4fd09293b95510d2a07c6d->enter($__internal_df2d20ff8fbda805386b68eb15667096d0e0a08e6c4fd09293b95510d2a07c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_531f25db29be9e7e51d1f337b29b2ef4e464cf68be8210e97fe31ae7150093cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_531f25db29be9e7e51d1f337b29b2ef4e464cf68be8210e97fe31ae7150093cd->enter($__internal_531f25db29be9e7e51d1f337b29b2ef4e464cf68be8210e97fe31ae7150093cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_531f25db29be9e7e51d1f337b29b2ef4e464cf68be8210e97fe31ae7150093cd->leave($__internal_531f25db29be9e7e51d1f337b29b2ef4e464cf68be8210e97fe31ae7150093cd_prof);

        
        $__internal_df2d20ff8fbda805386b68eb15667096d0e0a08e6c4fd09293b95510d2a07c6d->leave($__internal_df2d20ff8fbda805386b68eb15667096d0e0a08e6c4fd09293b95510d2a07c6d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\Logiciels\\wamp64\\www\\emotion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
